<?php

require "conect.php";
global $connection;
$sth = $connection -> prepare("SELECT * FROM film");
$sth->execute();
$array = $sth -> fetchALL(PDO::FETCH_ASSOC);

//$stmt = "SELECT * FROM film";




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
  for ($i = 0; $i < count($array); $i++) {
    $film_name = $array[$i]['film_name'];
    $poster = $array[$i]['poster']  ;
    $reference_trailer = $array[$i]['reference_trailer']  ;
    $release_year = $array[$i]['release_year']  ;
    $director = $array[$i]['director'] ;
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