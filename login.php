<?php
session_start();
include "db_conn.php";

    if (isset($_POST['username']) && isset ($_POST['password'])) {
        function validate ($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

            $username = validate($_POST['username']);
            $pass = validate($_POST['password']);

        if (empty($username)){
            header("Location: Cabarrubias.php? error=Username is required");
            exit();
        }else if (empty($pass)){
            header("Location: Cabarrubias.php? error=Password is required");
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE  username= '$username' AND password = '$pass'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);

                if($row['username'] === $username && $row['password'] === $pass){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: home.php?");
                    exit();
                }else{
                    header("Location: Cabarrubias.php? error=Incorrect username or Password");
                    exit();
            }
            }else{
                header("Location: Cabarrubias.php? error=Incorrect username or Password");
                exit();
            }
            
        }

    }else{
        header("Location: Cabarrubias.php");
        exit();
    }
?>