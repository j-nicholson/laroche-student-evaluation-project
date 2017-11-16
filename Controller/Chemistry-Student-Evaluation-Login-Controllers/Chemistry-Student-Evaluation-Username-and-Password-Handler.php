<?php
    session_start();
    $error = "";
    if (array_key_exists("logout", $_GET)) {
        unset($_SESSION);
        setcookie("id", "", time() - 60*60);
        $_COOKIE["id"] = "";
        session_destroy();
    } else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {
        header("Location: Independent-Learning-Record-Main.php?action=none");
    }
    if (array_key_exists("submit", $_POST)) {
        include "Controller/DBConnection.php";

        if (!$_POST['email']) {
            $error .= "An email address is required<br>";
        }
        if (!$_POST['password']) {
            $error .= "A password is required<br>";
        }
        if ($error != "") {
            $error = "<p>There were error(s) in your form:</p>".$error;
        } else {
            if ($_POST['signUp'] == '1') {
                $query = "SELECT id FROM `users` WHERE email = '".mysqli_real_escape_string($connection, $_POST['email'])."' LIMIT 1";
                $result = mysqli_query($connection, $query);
                if (mysqli_num_rows($result) > 0) {
                    $error = "That email address is taken.";
                } else {
                    $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($connection, $_POST['email'])."', '".mysqli_real_escape_string($connection, $_POST['password'])."')";

                    if (!mysqli_query($connection, $query)) {
                        $error = "<p>Could not sign you up - please try again later.</p>";
                    } else {
                        $query = "UPDATE `users` SET password = '".md5(md5(mysqli_insert_id($connection)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($connection)." LIMIT 1";
                        $id = mysqli_insert_id($connection);
                        mysqli_query($connection, $query);
                        $_SESSION['id'] = $id;
                        if ($_POST['stayLoggedIn'] == '1') {
                            setcookie("id", $id, time() + 60*60*24*365);
                        }
                        header("Location: Independent-Learning-Record-Main.php?action=none");
                    }
                }
            } else {
                    $query = "SELECT * FROM `users` WHERE email = '".mysqli_real_escape_string($connection, $_POST['email'])."'";
                    $result = mysqli_query($connection, $query);
                    $row = mysqli_fetch_array($result);
                    if (isset($row)) {
                        $hashedPassword = md5(md5($row['id']).$_POST['password']);
                        if ($hashedPassword == $row['password']) {
                            $_SESSION['id'] = $row['id'];
                            if (isset($_POST['stayLoggedIn']) AND $_POST['stayLoggedIn'] == '1') {
                                setcookie("id", $row['id'], time() + 60*60*24*365);
                            }
                            header("Location: Independent-Learning-Record-Main.php?action=none");
                        } else {
                            $error = "That email/password combination is not correct.";
                        }
                    } else {
                        $error = "That email/password combination is not correct.";
                    }
                }
        }
    }
?>
