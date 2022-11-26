<?php
   include("toppage.php");
?>

<H1> dbmysql record</H1>

<?php
$field = $_GET['field'];
$dbname = $_GET['dbname'];
$tablename = $_GET['tablename'];
$n = $_GET['n'];
 mysql_select_db($dbname);
print $dbname;
print ">>";
print $tablename;
print ">>";
print $field;
print ">>";
print $n;
print "<br>";

 
$sql = "SELECT * FROM $tablename ";
$result = mysql_query($sql);




while ($row = mysql_fetch_row($result)) {
   for($i = 0;$i<$n;$i++){
     print "<a href='records.php?field=".$row[$i]."'>".$row[$i]."</a> ";
     }
     print "<br>";
}

mysql_free_result($result);
?>

