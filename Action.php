
<?php


// Create connection
$host='localhost';
$user ='root';
$password ='root';
$database ='map';
$connect= mysqli_connect($host,$user,$password,$database);

if(mysqli_connect_errno()){

die("cant connect with database". mysqli_connect_error());
}
else{
echo"database is conected";}

?>

<!DOCTYPE html>
<html>
<head>
<title>Control Panel</title>
</head>
<body style="background-color:#708090;" >
<fieldset>
<legend><h1><i>Control Panel</i></h1></legend>

<?php

$query = "SELECT * FROM action ORDER BY id DESC LIMIT 1 ";
$result = mysqli_query($connect,$query);
 if(!$result)
    {
        die (" error on qurey");
    }



while ($row=$result->fetch_assoc()) {



echo "$row[forwards]" ;
echo "$row[stop]" ;
echo $row['leftt'] ;
echo $row['rightt'] ;
echo $row['backwards'] ; }

?>


<?php
mysqli_free_result($result);

?>
</body>

</html>


<?php
mysqli_close($connect);
?>
