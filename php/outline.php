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
        <div id="dom-target">
            <?php 
                $dom = new DOMDocument("1.0");
                $node = $dom->createElement("markers");
                $parnode = $dom->appendChild($node);
            
            
            
                //echo("<h1>THis is nust</h1>");
                $pdoResults = new PDO('mysql:host=localhost;dbname=rinkdb', 'admin_rinkdb', 'rinkmaster');
                $pdoResults->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                try{
                    $search_result = $pdoResults->prepare('SELECT * FROM `objects` WHERE `name` LIKE :name');
                    $search_result->execute(array(
                        "name" => "%arena%"
                    ));
                    
                } catch (PDOException $e){
                    echo ("<p>Error occured<p>");
                    echo $e->getMessage();
                }
                 $num_results = $search_result->rowCount();
                //echo htmlspecialchars(44);
                //echo("<p>The number of results: ".$num_results."<p>");
            
                header();
                foreach($search_result as $current_result){
                  $node = $dom->createElement("marker");
                  $newnode = $parnode->appendChild($node);
                  $newnode->setAttribute("name",$current_result[name]);
                  $newnode->setAttribute("rating",$current_result[rating]);
                  $newnode->setAttribute("lat", $current_result[lat]);
                  $newnode->setAttribute("lon", $current_result[lon]);
                  $newnode->setAttribute("address", $current_result[address]);
                  $newnode->setAttribute("city", $current_result[city]);
                  $newnode->setAttribute("state_prov", $current_result[state_prov]);
                  $newnode->setAttribute("country", $current_result[country]);
                  $newnode->setAttribute("phone", $current_result[phone]);
                
                }
                header('Content-type: text/php');
                //echo("<p>Whats going on?".$dom."</p>");
                echo $dom->saveXML();

            ?>
        </div>
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
