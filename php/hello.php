<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
  <p>
    <?php 
    	$var = 'Animals and Puppies!';
    	echo '<h1>Animals and Puppies!</h1>'; 
   	?> 
  </p>
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

</body>
</html>