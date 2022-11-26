<?php
   include("toppage.php");
?>

<H1> dbmysql tables</H1>

<?php
$dbname = $_GET['dbname'];



$sql = "SHOW TABLES FROM $dbname";
$result = mysql_query($sql);



while ($row = mysql_fetch_row($result)) {
   
     print "<a href='tables.php?dbname=".$dbname."&tablename=".$row['0']."'>".$row['0']."</a><br>";
}

mysql_free_result($result);
?>

