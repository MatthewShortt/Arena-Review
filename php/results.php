<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./head.inc.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/client-side.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApMRmb_Fdi3xbnlz8K_P65LvNPbWXnRBc&callback=initMap"></script>

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
            
            
            
            <!-- php get search criteria from search -->
<?php
if(isset($_POST['user_search'])){
    $errors   = array();
    $name     = $_POST['search'];
    $rating   = $_POST['ratings'];
    $location = $_POST['location'];
    
      if (empty($name)) {
        array_push($errors, "Name of arena is required");
      }

    $pdoResults = new PDO('mysql:host=localhost;dbname=rinkdb', 'admin_rinkdb', 'rinkmaster');
////    //$exist_search = 0;
    if (count($errors) == 0) {
//
        $pdoResults->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try{
            $search_result = $pdoResults->prepare('SELECT * FROM `objects` WHERE `name` LIKE %:name% OR `rating`= :rating OR `city` LIKE %:location% OR `state` LIKE %:location% OR `country` LIKE %:location%');
            $search_result->execute(array(
            "name" => $name,
            "rating" => $rating,
            "location" => $location
            ));
            
            $num_results = $search_result->rowCount();

        } catch (PDOException $e){
            echo $e->getMessage();
        }

    }
    if($num_results > 0){
    echo("<h1>Showing Results near".$location."</h1>");
    echo('<div class="results-tabular"><table>');            
  	foreach($num_results as $current_result){
        
//  		echo("<tr><td>".$current_result[breed_id]."</td><td>");
//            for($x=0; $x < $current_result[breed_id]; $x++){
//                echo("<i class='fas fa-star'></i>");
//            }
//                
//
//        echo("</td><td>".$current_result[breed_id]."</td></tr>");
        $addr_str = $current_result[address]; 
        $addr_str .= ", ";
        $addr_str .= $current_result[city];
        $addr_str .= ", ";
        $addr_str .= $current_result[state_prov];
        $addr_str .= ", ";
        $addr_str .= $current_result[country];
        echo('<tr><td rowspan="2"><a href="./individual_sample.html"><img src="'.$current_result[image_url].'" alt="Photo of '.$current_result[image_url].'"></a></td>
            <td><a href="./individual_sample.html">'.$current_result[image_url].'</a></td>
            <td>'.$addr_str.'</td></tr><tr><td>');
        for($x=0; $x < $current_result[rating]; $x++){
                echo("<i class='fas fa-star'></i>");
        }
         echo('</td><td><a href="tel:'.$current_result[phone].'">'.$current_result[phone].'</a></td></tr>');   


  	}
    } else {
        header('location: search.php');
    }

    
}

            
?>          
            
            
            
            
            
            
            

<!--
                    <tr>
                        <td rowspan="2"><a href="./individual_sample.html"><img src="../images/Iroquois-Park-Sports-Centre.jpg" alt="Photo of Iroquois Sports Park Centre "></a></td>
                        <td><a href="./individual_sample.html">Iroquois Park Sports Centre</a></td>
                        <td>500 Victoria St W, Whitby, ON L1N 9G4</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </td>
                        <td><a href="tel:905-668-7765">(905) 668-7765</a></td>
                    </tr>
                    <tr>
                        <td rowspan="2"><a href="./individual_sample.html"><img src="../images/McKinney-Centre.jpg" alt="Photo of McKinney Cnetre"></a></td>
                        <td><a href="./individual_sample.html">McKinney Centre</a></td>
                        <td>222 McKinney Dr, Whitby, ON L1R 3M3</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </td>
                        <td><a href="tel:905-655-2203">(905) 655-2203</a></td>
                    </tr>
                    <tr>
                        <td rowspan="2"><a href="./individual_sample.html"><img src="../images/Luther-Vipond.jpg" alt="Luther Vipond Memorial Arena"></a></td>
                        <td><a href="./individual_sample.html">Luther Vipond Memorial Arena</a></td>
                        <td>67 Winchester Rd, Whitby, ON L1M 1B4</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </td>
                        <td><a href="tel:905-655-4571">(905) 655-4571</a></td>
                    </tr>
-->
                </table>

            </div>
            <div class="results-map">
<!--                <iframe src="https://www.google.com/maps/d/embed?mid=1JQpnZ9hyoDzQK8xdjcrlB6iX_GxECLUQ&hl=en"></iframe>-->
                   <div id="map"></div>
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
