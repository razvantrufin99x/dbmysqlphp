<?php
   include("toppage.php");
?>

<H1> dbmysql </H1>

<?php


$result = mysql_query('SHOW DATABASES'); 

while ($row = mysql_fetch_array($result)) { 
 print "<a href='database.php?dbname=".$row['Database']."'>".$row['Database']."</a><br>";
 
} 

?>

