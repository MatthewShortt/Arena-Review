<?php include('./server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./head.inc.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/validation.js"></script>
</head>

<body>
   
    <div class="container">
        <header>
            <nav>
                <div class="nav-title"><a href="./index.php"><i class="fas fa-rocket"></i>Rink Review</a></div>
                <div class="nav-review"><a href="./submission.php"><i class="fas fa-pencil-alt"></i><span class="nav-block"> Write Review</span></a></div>
                <div class="nav-favs"><a href="#"><i class="far fa-star"></i><span class="nav-block"> My Favs</span></a></div>
                <div class="nav-search"><a href="./search.php"><i class="fas fa-search"></i><span class="nav-block"> Search</span></a></div>
                <div class="nav-user"><a href="./registration.php"><i class="fas fa-user-circle"></i></a></div>
            </nav>
        </header>

        <main>
        
            

            <div class="container-form">
                <h1>Register New Account</h1>
                <form method="post" action="registration.php" onsubmit="return validate(this)" id="form_register">
                       <?php include('./errors.php'); ?>
                    <input class="name" type="text" name="firstname" placeholder="first name*">
                    <input class="name" type="text" name="lastname" placeholder="last name*">
                    <input class="name" type="text" name="username" placeholder="username*">
                    <input class="name" type="password" name="userpw" placeholder="password*">
                    <input class="long-input" name="useremail" placeholder="email*"> <!-- took out type email to test regex -->
                    <input class="long-input" type="date" name="dob">


                    <label for="male">Male<input class="gender" type="radio" name="gender" id="male" value="0"></label>
                    
                    <label for="female">Female</label>
                    <input class="gender" type="radio" name="gender" id="female" value="1">
                    <label for="other">Other</label>
                    <input class="gender" type="radio" name="gender" id="other" value="2">


                    <button type="submit" name="reg_user" id="button-register" class="button-submit">SUBMIT</button>
                </form>
                
            </div>
        
<!--
        <?php 
  	$pdo = new PDO('mysql:host=localhost;dbname=rinkdb', 'admin_rinkdb', 'rinkmaster');
  	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	try{
  		$result = $pdo->query('SELECT `puppy_name`, `breed_name`, `description` FROM `animals`, `breeds` WHERE `animals`.`breed_id` = `breeds`.`id`;');
  	} catch (PDOException $e){
  		echo $e->getMessage();
  	}
  	
  	foreach($result as $puppy){
  		echo("<tr>
    		<td>".$puppy['puppy_name']."</td>
    		<td>".$puppy['breed_name']."</td>
    		<td>".$puppy['description']."</td>
  		</tr>");

  	}
  ?>
-->


        </main>

        <footer>
            <div class="foot-left">
                <p>&copy; 2018</p>
            </div>
            <div class="foot-center">
                <p><a href="">Site map</a></p>
            </div>
            <div class="foot-right">
                <p>
                    <a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter-square"></i></a>
                </p>

            </div>
        </footer>
    </div>
</body>
