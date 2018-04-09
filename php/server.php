<?php

session_start();
$errors = array();
$bool = false;

$pdo = new PDO('mysql:host=localhost;dbname=rinkdb', 'admin_rinkdb', 'rinkmaster');
if(isset($_POST['reg_user'])){        
    $fname      = $_POST['firstname'];
    $sname      = $_POST['lastname'];
    $username   = $_POST['username'];
    $password   = $_POST['userpw'];
    $email      = $_POST['useremail'];
    $dob        = $_POST['dob'];
    $gender     = $_POST['gender'];

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	try{
  		$result = $pdo->query('SELECT `username`, `email` FROM `users` WHERE `users`.`username` ="$username" OR `users`.`email`="$email";');
        if($result->rowCount() === 1){
            $bool = true;
        }
    } catch (PDOException $e){
  		echo $e->getMessage();
  	}
    
    //if username or email already exists
    if($bool){
        array_push($errors, "Username or email already exists!");
    }
    
    if (count($errors) == 0) {        
        $salt = bin2hex(random_bytes(15));
        $statement = $pdo->prepare("INSERT INTO `users`(`username`, `salt`, `passwordhash`, `email`, `fname`, `sname`, `dob`, `gender`) VALUES(:username, :salt, SHA2(CONCAT(:password, :salt), 0), :email, :fname, :sname, :dob, :gender)");
        $statement->execute(array(
            "username" => $username,
            "salt" => $salt,
            "password" => $password,
            "email" => $email,
            "fname" => $fname,
            "sname" => $sname,
            "dob" => $dob,
            "gender" => $gender
        ));
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You have succesfully registered and are now logged in!";
        header('location: index.php');
    }
    
}

//=========  For Login  =========
if(isset($_POST['user_login'])){        
    $username   = $_POST['username'];
    $password   = $_POST['userpw'];
    
    
      if (empty($username)) {
        array_push($errors, "Username is required");
      }
      if (empty($password)) {
        array_push($errors, "Password is required");
      }

    $exist = 0;
    if (count($errors) == 0) {

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try{
            $user = $pdo->prepare('SELECT * FROM `users` WHERE `username` = :username AND `passwordhash`= SHA2(CONCAT(:password, `salt`), 0)');
            $user->execute(array(
            "username" => $username,
            "password" => $password
            ));
//            $user->bindParam(':username', $username);
//            $user->bindParam(':password', $password);
//            $user->execute();
            if($user->rowCount() === 1){
                $exist = 1;
            }
        } catch (PDOException $e){
            echo $e->getMessage();
        }

    }
    if($exist == 1){
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You have succesfully logged in!";
        header('location: index.php');
    } else {
        
        $_SESSION['failure'] = "Incorrect password or username, please try again.";
        header('location: login.php');
    }

    
}

//if(isset($_POST['user_search'])){        
//    $name     = $_POST['search'];
//    $rating   = $_POST['ratings'];
//    $location = $_POST['location'];
//    
////      if (empty($username)) {
////        array_push($errors, "Username is required");
////      }
////      if (empty($password)) {
////        array_push($errors, "Password is required");
////      }
//
//    //$exist_search = 0;
//    if (count($errors) == 0) {
//
//        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        try{
//            $search_result = $pdo->prepare('SELECT * FROM `objects` WHERE `name` LIKE %:name% OR `rating`= :rating OR `city` LIKE %:location% OR `state` LIKE %:location% OR `country` LIKE %:location%');
//            $user->execute(array(
//            "name" => $name,
//            "rating" => $rating,
//            "location" => $location
//            ));
//            
//            $num_results = $search_result->rowCount()
//
//        } catch (PDOException $e){
//            echo $e->getMessage();
//        }
//
//    }
//    if($num_results > 0){
//        header('location: results.php');
//    } else {
//        header('location: search.php');
//    }
//
//    
//}

?>


