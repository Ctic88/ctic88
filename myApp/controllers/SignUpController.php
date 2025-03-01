<?php

class SignupController extends AppController
{
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Check if required fields exist in POST request
            if (!isset($_POST['signUpName'], $_POST['signUpEmail'], $_POST['signUpPass1'], $_POST['signUpPass2'])) {
                error_log("Missing POST data");
                die("Missing input data.");
            }

            // Trim and sanitize inputs
            $userName  = trim($_POST['signUpName']);
            $userEmail = trim($_POST['signUpEmail']);
            $userPass1 = trim($_POST['signUpPass1']);
            $userPass2 = trim($_POST['signUpPass2']);

            // Validate inputs
            if (empty($userName) || empty($userEmail) || empty($userPass1) || empty($userPass2)) {
                error_log("Empty fields detected");
                die("All fields are required.");
            }

            if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
                error_log("Invalid email: " . $userEmail);
                die("Invalid email format.");
            }

            if ($userPass1 !== $userPass2) {
                error_log("Passwords do not match.");
                die("Passwords do not match.");
            }

            $user = new UsersModel();

            // Check if username already exists
            if ($user->userExists($userName)) {
                $suggestedUsername = $this->suggestUsername($userName, $user);
                error_log("User already exists: " . $userName);
                echo json_encode(["error" => "Username already taken!", "suggestedUsername" => $suggestedUsername]);
                exit();
            }

            // Check if email already exists
            if ($user->emailExists($userEmail)) {
                error_log("Email already in use: " . $userEmail);
                die("Email is already registered.");
            }

            // Add user to database
            if ($user->addUser($userName, $userEmail, $userPass1)) {
                session_start();
                $_SESSION['user'] = $userName;
                header('Location: home');
                exit();
            } else {
                error_log("User registration failed.");
                die("Error registering user.");
            }
        }
    }

    private function suggestUsername($baseUsername, $userModel)
    {
        do {
            $randomNumber = rand(1, 999);
            $newUsername = $baseUsername . $randomNumber;
        } while ($userModel->userExists($newUsername));

        return $newUsername;
    }
}
