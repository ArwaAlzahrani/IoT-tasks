

<?php


// Create connection
$host='localhost';
$user ='root';
$password ='root';
$database ='design';
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
<title>Control Panel Details</title>
<style>
table, th, td {

  border: 1px solid black;
  border-collapse: collapse;
  padding: 30px;
  text-align: center ;
}
</style>
</head>
<body style="background-color:#708090;;" >
<fieldset>
<legend><h1><i>Control Panel Details</i></h1></legend>

     <form action="Control Panel Details.php" method="post">

     <label> Right </label> </br><input type="text" id="right" name="right" ><input style=" margin-right: 20px;margin-left: 20px;" type="submit" value="   START   "name="rightt"><br><br>

    <label>Forwards</label> </br><input type="text" id="forwards" name="forwards" >

    <input style=" margin-right: 20px;margin-left: 20px;" type="submit" value="  DELETE "name ="delete"><br><br>

    <label> Left </label></br> <input type="text" id="left" name="left" >
    <input style=" margin-right: 20px;margin-left: 20px;" type="submit" value="    SAVE   "name ="save"> <br><br>


</form>


<?php
//START
if(isset($_POST['rightt'])) {
  $rightv=$_POST['right'];
  $forv=$_POST['forwards'];
  $leftv=$_POST['left'];
  for ($x = 1; $x <= $rightv; $x++) {
  echo "&rarr;";
}
echo"</br>";
  for ($x = 1; $x <= $forv; $x++) {
  echo "&uarr; </br>";
}


  for ($x = 1; $x <= $leftv; $x++) {
  echo "&larr;";
}}

?>

<?php
//SAVE
if(isset($_POST['save'])) {
  $rv=$_POST['right'];
  $fv=$_POST['forwards'];
  $lv=$_POST['left'];

  $query = "INSERT INTO dcp ( forwards, leftt, rightt) VALUES
     ('" .$fv. "','" .$lv."','" .$rv."')";
       $result = mysqli_query($connect,$query);


       if(!$result)
    {
        die (" error on qurey");
    }
    else
    {

        die ("Records added successfully.");
    }
    }


//view in table

$query = "SELECT * FROM dcp ";
$result = mysqli_query($connect,$query);
 if(!$result)
    {
        die (" error on qurey");
    }


echo "<table border='1'>
<tr>
<th>right</th>
<th>forwards</th>
<th>left</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['rightt'] . "</td>";
echo "<td>" . $row['forwards'] . "</td>";
echo "<td>" . $row['leftt'] . "</td>";

echo "</tr>";
}
echo "</table>";
?>


<?php
mysqli_free_result($result);

?>


<?php
//DELETE
if(isset($_POST['delete'])) {
$query = "DELETE FROM dcp WHERE ID=(SELECT MAX(id) FROM dcp) ";
$result = mysqli_query($connect,$query);
 if(!$result)
    {
        die (" error on qurey delete ");
    }
//delete view
}

?>


</br>



</fieldset>
</body>
</html>

<?php

mysqli_close($connect);
?>
