<?php

session_start();
$username = "";
$email = "";
$fname = "";
$sname = "";
$dob = "";
$gender = "";
$errors = array();

$bool = false;

$pdo = new PDO('mysql:host=localhost;dbname=rinkdb', 'admin_rinkdb', 'rinkmaster');

if(isset($_POST['register'])){        
    $fname      = $_GET['firstname'];
    $sname      = $_GET['lastname'];
    $username   = $_GET['username'];
    $password   = $_GET['userpw'];
    $email      = $_GET['useremail'];
    $dob        = $_GET['dob'];
    $gender     = $_GET['gender'];
    
    
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
        
        $salt bin2hex(random_bytes(20));
        //$passwordhash = md5($password_1);//encrypt the password before saving in the database

        $query = $pdo->query(INSERT INTO `users` (`username`, `salt`, `passwordhash`, `email`, `fname`, `sname`, `dob`, `gender`) VALUES(:username, :salt, SHA2(CONCAT(:password, :salt), 0), :email, :fname, :sname, :dob, :gender));
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You have succesfully registered and are now logged in!";
        header('location: index.php');
    }
    
}

















?>