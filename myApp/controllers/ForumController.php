<?php
// Enable error reporting for debugging (remove in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once APP_PATH . 'models/DBModel.php';

class ForumController extends AppController
{
    protected $db;

    public function __construct() {
        $this->db = (new DBModel())->db();

        // Log database connection status
        if (!$this->db) {
            error_log("Database connection failed.");
            die("Database connection failed.");
        } else {
            error_log("Database connection successful.");
        }

        // Log incoming request info
        error_log("Request method: " . $_SERVER['REQUEST_METHOD']);
        error_log("GET parameters: " . print_r($_GET, true));

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'post') {
            $this->post();
        } else {
            $this->init();
        }
    }

    public function init() {
        session_start();
        if (!isset($_SESSION['user'])) {
            error_log("User not logged in. Redirecting to login.");
            header('Location: login');
            exit();
        }

        $data['title'] = 'Forum';
        $data['privateMainContent'] = $this->renderPostForm() . $this->getPosts();

        echo $this->render(APP_PATH . VIEWS . 'layoutAuth.html', $data);
    }

    private function renderPostForm() {
        // Ensure the form action URL is correct
        return '<form method="POST" action="forum?action=post">
                    <input type="text" name="content" placeholder="Insert your text here" required style="width: 100%; padding: 10px;">
                    <button type="submit">Post</button>
                </form><br>';
    }

    public function post() {
        session_start();
        if (!isset($_SESSION['user'])) {
            error_log("User not logged in in post(). Redirecting to login.");
            header('Location: login');
            exit();
        }
        
        // Log entry into post method
        error_log("In post() method.");

        if (!empty($_POST['content'])) {
            $user = $_SESSION['user'];
            $content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');

            // Debug: log input values
            error_log("Attempting to insert post. User: " . $user . " | Content: " . $content);

            $stmt = $this->db->prepare("INSERT INTO forum_posts (user, content, created_at) VALUES (?, ?, NOW())");
            if (!$stmt) {
                error_log("Prepare failed: " . $this->db->error);
                die("Error preparing statement: " . $this->db->error);
            }

            $stmt->bind_param("ss", $user, $content);
            if (!$stmt->execute()) {
                error_log("Execute failed: " . $stmt->error);
                die("Error executing statement: " . $stmt->error);
            }

            $stmt->close();
            error_log("Post successfully inserted into the database.");
        } else {
            error_log("Content was empty; nothing to insert.");
        }

        // After posting, redirect to the forum page.
        header('Location: forum');
        exit();
    }

    private function getPosts() {
        $result = $this->db->query("SELECT user, content, created_at FROM forum_posts ORDER BY created_at DESC");

        if (!$result) {
            error_log("Error retrieving posts: " . $this->db->error);
            return "<p>Error retrieving posts: " . $this->db->error . "</p>";
        }

        if ($result->num_rows === 0) {
            error_log("No posts found in the database.");
            return "<p>No posts yet. Be the first to post!</p>";
        }

        $output = '<h2>Forum Posts</h2>';
        $output .= '<table border="1" cellpadding="10" cellspacing="0">
                        <tr>
                            <th>User</th>
                            <th>Content</th>
                            <th>Posted At</th>
                        </tr>';

        while ($post = $result->fetch_assoc()) {
            $output .= "<tr>
                            <td>{$post['user']}</td>
                            <td>{$post['content']}</td>
                            <td>{$post['created_at']}</td>
                        </tr>";
        }

        $output .= '</table>';
        return $output;
    }
}
?>
