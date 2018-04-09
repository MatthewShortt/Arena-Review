<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('./head.inc.php'); ?>
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
            <div class="index-blurb">
                <br>
                <img src="../favicon/android-icon-192x192.png" alt="website logo">
                <h1>Welcome to Rink Review, a website that allows users to contribute and view reviews on sports arenas.</h1>
                <h2>This site is currently under construction.</h2>
                <h3>The following pages can be inidvidually viewed:</h3>
                <button class="button-submit"><a href="./registration.php"><i class="fas fa-object-ungroup"></i><span> Registration</span></a></button>
                <button class="button-submit"><a href="./search.php"><i class="fas fa-object-ungroup"></i><span> Search</span></a></button>
                <button class="button-submit"><a href="./object.php"><i class="fas fa-object-ungroup"></i><span> Object Page</span></a></button>
                <button class="button-submit"><a href="./submission.php"><i class="fas fa-object-ungroup"></i><span> Submission</span></a></button>
                <button class="button-submit"><a href="./results.php"><i class="fas fa-object-ungroup"></i><span> Results Page</span></a></button>

            </div>
            
            
              <table>
  <tr>
    <th>Puppy Name</th>
    <th>Breed Name</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>

<!--
                          <td><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </td>
-->

         <?php 
  	$pdo = new PDO('mysql:host=localhost;dbname=puppies', 'puppy2', 'puppy2');
  	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	try{
  		$result = $pdo->query('SELECT * FROM `animals`, `breeds` WHERE `animals`.`breed_id` = `breeds`.`id`;');
  	} catch (PDOException $e){
  		echo $e->getMessage();
  	}
  	
  	foreach($result as $puppy){
        $test = $puppy[puppy_name]; 
        $test .= ", ";
        $test .= $puppy[puppy_name];
  		echo("<tr><td>".$test."</td><td>");
            for($x=0; $x < $puppy[breed_id]; $x++){
                echo("<i class='fas fa-star'></i>");
            }
                

        echo("</td><td>".$puppy[breed_id]."</td></tr>");

  	}
        
//        $username = "HelenK123";
//        //$salt = "4b3503675fea6";
//        $password = "helenk";
//        $email = "helenkeller@me.com";
//        $fname = "helen";
//        $sname = "keller";
//        $dob = "1942-06-18";
//        $gender = "1";
//            
//        $salt = bin2hex(random_bytes(20));
//        
//        $statement = $pdo->prepare("INSERT INTO `users`(`username`, `salt`, `passwordhash`, `email`, `fname`, `sname`, `dob`, `gender`) VALUES(:username, :salt, SHA2(CONCAT(:password, :salt), 0), :email, :fname, :sname, :dob, :gender)");
//        $statement->execute(array(
//            "username" => $username,
//            "salt" => $salt,
//            "password" => $password,
//            "email" => $email,
//            "fname" => $fname,
//            "sname" => $sname,
//            "dob" => $dob,
//            "gender" => $gender
//        ));

  ?>
        </table>

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
