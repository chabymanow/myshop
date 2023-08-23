<?php
    session_start();
    include "database.php";

    if ($_POST["action"] == "login"){
        $useremail = test_input($_POST["loginEmail"]);
        $userpass = test_input($_POST["loginPass"]);   

        if(emailTest($useremail )){
            $response = [ 'status' => 'error', 'reason' => 'User email is not valid!'];
            echo json_encode($response);
            die;
        }else{
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("s", $useremail);
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_assoc();
            if($data == NULL){
                $response = [ 'status' => 'error', 'reason' => 'This email is not registered yet!'];
                echo json_encode($response);
                die;
             }else{
                if(password_verify($userpass, $data["password"]) == FALSE){
                    $response = [ 'status' => 'error', 'reason' => 'Wrong email or password!'];
                    echo json_encode($response);
                    die;
                 }else{
                    // $date = date('Y-m-d', strtotime($data["registered"]));
                    $date = new DateTime($data['registered']);
                    $_SESSION["id"] = $data["id"];
                    $_SESSION["username"] = $data["username"];
                    $_SESSION["email"] = $data["email"];
                    $_SESSION["regdate"] = $date;
                    $_SESSION["message"] = "message";
                    $response = [ 'status' => 'success',];
                    echo json_encode($response);
                    die;
                 }
             }
        }

       
    }

    if ($_POST["action"] == "register"){
        $username = test_input($_POST["userName"]);
        $useremail = test_input($_POST["userEmail"]);
        $userpass = test_input($_POST["userPass"]);
        $hashed_password = password_hash($userpass, PASSWORD_DEFAULT);
        $emailExists = checkEmail($useremail);
        $nameExists = checkUsername($username);

        if(nameTest($username )){
            $response = [ 'status' => 'error', 'reason' => 'Username is not valid!'];
            echo json_encode($response);
            die;
        }

        if(emailTest($useremail )){
            $response = [ 'status' => 'error', 'reason' => 'User email is not valid!'];
            echo json_encode($response);
            die;
        }

        if($emailExists && $nameExists){
            $response = [ 'status' => 'error', 'reason' => 'This email and username already exists'];
            echo json_encode($response);
            die;
        }

        if($emailExists){
            $response = [ 'status' => 'error', 'reason' => 'This email is exists in the database!'];
            echo json_encode($response);
            die;
        }

        if($nameExists){
            $response = [ 'status' => 'error', 'reason' => 'This username is exists in the database!'];
            echo json_encode($response);
            die;
        }
    
        if(!checkEmail($useremail) && !checkUsername($username)){
            $sql = "INSERT INTO users (username, email, password, registered) VALUES ('$username', '$useremail' , '$hashed_password', now());";
            $res = $con -> query($sql);
            if (!$res) {
                    $response = [ 'status' => 'error', 'reason' => 'Sometging went wrong durin writing the database'];
                    echo json_encode($response);
                 }else{
                    $last_id = $con->insert_id;

                    $sql = "SELECT * FROM users WHERE id = ?";
                    $stmt = $con->prepare($sql);
                    $stmt->bind_param("s", $last_id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $data = $result->fetch_assoc();
                    $date = new DateTime($data['registered']);
                    $_SESSION["id"] = $data["id"];
                    $_SESSION["username"] = $data["username"];
                    $_SESSION["email"] = $data["email"];
                    $_SESSION["regdate"] = $date;
                    $_SESSION["message"] = "message";
                    $response = [ 'status' => 'success'];
                    echo json_encode($response);		
                 }
        $con->close();
        }
    }

    function checkEmail($email){
        global $con;

        $stmt = $con->prepare("SELECT email FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        if($data != NULL){
           return true;
        }else{
            return false;
        }
    }

    function checkUsername($uname){
        global $con;

        $stmt = $con->prepare("SELECT username FROM users WHERE username = ?");
        $stmt->bind_param("s", $uname);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        if($data != NULL){
           return true;
        }else{
            return false;
        }
    }

    function nameTest($uname){
       if (preg_match('/^[a-zA-Z0-9]+$/', $uname) == 0) {
            return true;
       }else{
        return false;
       }
    }

    function emailTest($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }else{
            return false;
        }
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>