<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Matthew Shortt">
    <meta name="description" content="Website that allows users to contribute and view reviews on sports arenas.">
    <meta name="viewport" content="width=device-width; initial-scale=1.0;" />

    <title>Rink Review</title>



    <!--     favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicon/favicon.ico">

    
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <div class="nav-title"><a href="./index.html"><i class="fas fa-rocket"></i>Rink Review</a></div>
                <div class="nav-review"><a href="./submission.html"><i class="fas fa-pencil-alt"></i><span class="nav-block"> Write Review</span></a></div>
                <div class="nav-favs"><a href="#"><i class="far fa-star"></i><span class="nav-block"> My Favs</span></a></div>
                <div class="nav-search"><a href="./search.html"><i class="fas fa-search"></i><span class="nav-block"> Search</span></a></div>
                <div class="nav-user"><a href="#"><i class="fas fa-user-circle"></i></a></div>
            </nav>
        </header>

        <main>
            <div class="index-blurb">
            
                <h1>Welcome to Rink Review a website that allows users to contribute and view reviews on sports arenas.</h1>
                <h2>This site is currently under construction.</h2>
                <h3>The following pages can be inidvidually viewed:</h3>
                <button class="button-submit"><a href="./registration.html"><i class="fas fa-object-ungroup"></i><span> Registration</span></a></button>
                <button class="button-submit"><a href="./search.html"><i class="fas fa-object-ungroup"></i><span> Search</span></a></button>
                <button class="button-submit"><a href="./individual_sample.html"><i class="fas fa-object-ungroup"></i><span> Object Page</span></a></button>
                <button class="button-submit"><a href="./submission.html"><i class="fas fa-object-ungroup"></i><span> Submission</span></a></button>
                <button class="button-submit"><a href="./results_sample.html"><i class="fas fa-object-ungroup"></i><span> Results Page</span></a></button>
                
            </div>
<!--
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

  <?php 
  	$pdo = new PDO('mysql:host=localhost;dbname=puppies', 'puppies_admin', 'puppies');
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

  </table>
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
