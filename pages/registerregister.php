<?php
session_start();

require_once "../db/connection.php";
require_once "../classes/user.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $db = (new Database())->connect();
        $user = new User($db);

        $result = $user->register($name, $email, $password, $role);
        if ($result === true) {
            echo  "<script>alert('Registration successful!');</script>";
            $_POST['name'] = '';
            $_POST['email'] = '';
            $_POST['password'] = '';
            $_POST['role'] = '';
        } else {
            if (isset($_SESSION['error'])) {
                echo "<script>alert('{$_SESSION['error']}');</script>";
                unset($_SESSION['error']);
            }
            $_POST['name'] = '';
            $_POST['email'] = '';
            $_POST['password'] = '';
            $_POST['role'] = '';
        }
    }

    header('Location: login.php');
}
