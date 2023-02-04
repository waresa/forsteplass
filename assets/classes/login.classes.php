<?php

class Login extends Dbh
{

    protected function getUser($email, $pwd)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE  email = ?;');

        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../sign-in.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../sign-in.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["pwd"]);

        if ($checkPwd == false) {
            $stmt = null;
            header("location: ../sign-in.php?error=wrongpassword");
            exit();
        } elseif ($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ? AND pwd = ?;');

            if (!$stmt->execute(array($email, $pwdHashed[0]["pwd"]))) {
                $stmt = null;
                header("location: ../sign-in.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../sign-in.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION["useremail"] = $user[0]["email"];
            $_SESSION["username"] = $user[0]["username"];

            $stmt = null;
        }
    }
}
