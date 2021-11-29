<?php

$array_info = parse_ini_file('parameters.ini', true);
$main_info = 'mysql:host='.$array_info['host'].';dbname='.$array_info['name'];
    $login = $array_info['login'];
    $password = $array_info['password'];
    //print_r ($array_info);
    
 //= new PDO($main_info, $login,  $password);
try 
		{
			$connection = new PDO($main_info, $login, '');
		}
		 catch (PDOException $e) 
		{
			print "Has errors: " . $e->getMessage(); die();
		}
$stmt = "SELECT * FROM film";




?>
<table>

<tr>
  <th>film_name</th>
  <th>poster</th>
  <th>reference_trailer</th>
  <th>release_year</th>
  <th>director</th>
</tr>

  <?php 
  foreach ($connection -> query($stmt) as $row) {
    $film_name = $row['film_name']  ;
    $poster = $row['poster']  ;
    $reference_trailer = $row['reference_trailer']  ;
    $release_year = $row['release_year']  ;
    $director = $row['director'] ;
    print('<tr>
    <td>'.$film_name.'</td>
    <td>'.$poster.'</td>
    <td>'.$reference_trailer.'</td>
    <td>'.$release_year.'</td>
    <td>'.$director.'</td>
    </tr>');
}
  ?>


</table>