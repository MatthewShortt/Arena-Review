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

    header('Content-type: text/xml');
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
    
    //echo("<p>Whats going on?".$dom."</p>");
    echo $dom->saveXML();

?>
