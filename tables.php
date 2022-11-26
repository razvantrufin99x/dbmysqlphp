<?php
   include("toppage.php");
?>

<H1> dbmysql fields</H1>

<?php
$dbname = $_GET['dbname'];
$tablename = $_GET['tablename'];
 mysql_select_db($dbname);
print $dbname;
print ">>";
print $tablename;
print "<br>";


       
        $query = "SHOW COLUMNS FROM $tablename";
        if($output = mysql_query($query)):
            $columns = array();
            while($result = mysql_fetch_assoc($output)):
                $columns[] = $result['Field'];
            endwhile;
        endif;
        echo '<pre>';
       // print_r($columns);
       $n = count($columns);
       $i=0;
       while($i<$n){
            print "<a href=fields.php?n=".$n."&field=".$columns[$i]."&dbname=".$dbname."&tablename=".$tablename.">".$columns[$i]."</a><br>";
            $i++;
        }
        echo '</pre>';

?>


