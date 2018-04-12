<?php
$sname = "";
if(isset($_POST['user_search'])){
    $errors   = array();
    $sname     = $_POST['search'];
    $rating   = $_POST['ratings'];
    $location = $_POST['location'];

      if (empty($sname)) {
        array_push($errors, "Name of arena is required");
      }

    $pdoResults = new PDO('mysql:host=localhost;dbname=rinkdb', 'admin_rinkdb', 'rinkmaster');
////    //$exist_search = 0;
    if (count($errors) == 0) {
        $name_str = "%"; 
        $name_str .= $sname;
        $name_str .= "%";
        $pdoResults->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try{
            //$search_result = $pdoResults->prepare('SELECT * FROM `objects` WHERE `name` LIKE %:name% OR `rating`= :rating OR `city` LIKE %:location% OR `state` LIKE %:location% OR `country` LIKE %:location%');
            $search_result = $pdoResults->prepare('SELECT * FROM `objects` WHERE `name` LIKE :name');

//            $search_result->execute(array(
//            "name" => $name,
//            "rating" => $rating,
//            "location" => $location
//            ));
            $search_result->execute(array(
            "name" => $name_str
            ));
            
            $num_results = $search_result->rowCount();

        } catch (PDOException $e){
            echo $e->getMessage();
        }
        //echo("<p>".$num_results."<p>");
    }
    if($num_results > 0){
        //echo("<h1>Showing Results near ".$location."</h1>");
        echo("<h1>Showing Results</h1>");
        echo('<table>');            
        foreach($search_result as $current_result){

            $addr_str = $current_result[address]; 
            $addr_str .= ", ";
            $addr_str .= $current_result[city];
            $addr_str .= ", ";
            $addr_str .= $current_result[state_prov];
            $addr_str .= ", ";
            $addr_str .= $current_result[country];
            echo('<tr><td rowspan="2"><a href="./individual_sample.html"><img src="'.$current_result[image_url].'" alt="Photo of '.$current_result[image_url].'"></a></td>
                <td><a href="./individual_sample.html">'.$current_result[name].'</a></td>
                <td>'.$addr_str.'</td></tr><tr><td>');
            for($x=0; $x < $current_result[rating]; $x++){
                    echo("<i class='fas fa-star'></i>");
            }
             echo('</td><td><a href="tel:'.$current_result[phone].'">'.$current_result[phone].'</a></td></tr>');   


        }
        echo('</table>');
    } else {
        header('location: search.php');
    }

    
}

            
?>