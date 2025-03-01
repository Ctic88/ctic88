<?php

class UsersModel extends DBModel
{
    protected $name;
    protected $email;
    protected $pass;

    public function __construct($n = "", $e = "", $p = "")
    {
        $this->name = $n;
        $this->email = $e;
        $this->pass = $p;
    }

    public function getDetails()
    {
        return "{$this->name} has the email {$this->email} and password {$this->pass}";
    }

    public function getUsers()
    {
        $query = "SELECT id, userName, userEmail FROM users_test";
        $result = $this->db()->query($query);
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }

    public function isAuth($uName, $uPass)
    {
        $query = "SELECT hashedPass FROM users_test WHERE userName = ?";
        $stmt = $this->db()->prepare($query);
        $stmt->bind_param("s", $uName);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();

        return $result ? password_verify($uPass, $result['hashedPass']) : false;
    }

    public function userExists($userName)
    {
        $stmt = $this->db()->prepare("SELECT id FROM users_test WHERE userName = ?");
        $stmt->bind_param("s", $userName);
        $stmt->execute();
        $stmt->store_result();

        return $stmt->num_rows > 0;
    }
    public function emailExists($email)
    {
        $stmt = $this->db()->prepare("SELECT id FROM users_test WHERE userEmail = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
    
        return $stmt->num_rows > 0;
    }

    public function addUser($name, $email, $pass)
    {
        if ($this->userExists($name)) {
            error_log("Username already exists: " . $name);
            return false; 
        }
    
        if ($this->emailExists($email)) {
            error_log("Email already exists: " . $email);
            return false; 
        }
    
        $conn = $this->db();
        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
        
        // Debugging: Check if database connection works
        if (!$conn) {
            error_log("Database connection failed.");
            die("Database connection error.");
        }
    
        $stmt = $conn->prepare("INSERT INTO users_test (userName, userEmail, userPass, hashedPass) VALUES (?, ?, ?, ?)");
        
        if (!$stmt) {
            error_log("SQL prepare error: " . $conn->error);
            die("SQL prepare failed.");
        }
    
        $stmt->bind_param("ssss", $name, $email, $pass, $hashedPass);
        
        if (!$stmt->execute()) {
            error_log("SQL execute error: " . $stmt->error);
            die("SQL execution failed.");
        }
    
        return true;
    }
    

    public function updateUser($name, $newEmail, $newPass)
    {
        if (!$this->userExists($name)) {
            return false; // User does not exist
        }

        if ($this->emailExists($newEmail)) {
            return false; // Email already in use by another user
        }

        $conn = $this->db();
        $hashedPass = password_hash($newPass, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users_test SET userEmail = ?, hashedPass = ? WHERE userName = ?");
        $stmt->bind_param("sss", $newEmail, $hashedPass, $name);

        return $stmt->execute();
    }

    public function deleteUser($name)
    {
        if (!$this->userExists($name)) {
            return false; // User does not exist
        }

        $conn = $this->db();
        $stmt = $conn->prepare("DELETE FROM users_test WHERE userName = ?");
        $stmt->bind_param("s", $name);

        return $stmt->execute();
    }
}

