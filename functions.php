<?php
function addUser($conn, $username, $password) // accessing database (parameter with db connection object)
{
    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);

    if ($stmt->rowCount() == 0) { //no (existing same username), condition is true then proceed {equals to no one or false}
        $sql = "INSERT INTO users (username,password) VALUES (?,?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$username, $password]); //insert new user if return is true
    }
}

function login($conn, $username, $password)
{
    $query = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$username]);

    if ($stmt->rowCount() == 1) {
        // returns associative array
        $row = $stmt->fetch();

        // store user info as a session variable
        $_SESSION['userInfo'] = $row;

        // get values from the session variable
        $uid = $row['user_id'];
        $uname = $row['username'];
        $passHash = $row['password'];

        // validate password 
        if (password_verify($password, $passHash)) {
            $_SESSION['user_id'] = $uid;
            $_SESSION['username'] = $uname;
            return true; //stored in session variables
        } else {
            return false;
        }
    }
}

?>
