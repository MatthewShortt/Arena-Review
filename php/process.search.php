<?php

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);
$sname = "";
if(isset($_POST['user_search'])){
    $errors   = array();
    $sname     = $_POST['search'];
    $rating   = $_POST['ratings'];
    $location = $_POST['location'];
    //include_file "tester.php"

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
            //echo htmlspecialchars($search_result);
//            $search_result->execute(array(
//            "name" => $name,
//            "rating" => $rating,
//            "location" => $location
//            ));
            $search_result->execute(array(
            "name" => $name_str
            ));
            
            //echo ("<p>This is it".$search_result."</p>");
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
                <td><a href="./object.php?">'.$current_result[name].'</a></td>
                <td>'.$addr_str.'</td></tr><tr><td>');
            for($x=0; $x < $current_result[rating]; $x++){
                    echo("<i class='fas fa-star'></i>");
            }
             echo('</td><td><a href="tel:'.$current_result[phone].'">'.$current_result[phone].'</a></td></tr>');   
            
            $node = $dom->createElement("marker");
            $newnode = $parnode->appendChild($node);
            $newnode->setAttribute("id",$current_result[id]);
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
        echo('</table>');
    } else {
        header('location: search.php');
    }

    
}
header('Content-type: text/xml');
$dom->save("./results.xml");
//  $xmlfile = $doc->dump_mem();
//echo $xmlfile;
          
?>