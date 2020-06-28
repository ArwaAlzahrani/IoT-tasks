
<?php


// Create connection
$host='localhost';
$user ='root';
$password ='root';
$database ='map';
$connect= mysqli_connect($host,$user,$password,$database);

if(mysqli_connect_errno()){

die("cant connect with database". mysqli_connect_error());}

else{
echo'<i style="color:white ;font-size:18px;">
      database is conected </i> ';}

?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">

<body>


  <form action="control.php" method="post">
    <center><h1 id="h1" style="text-shadow: 2px 2px 8px #0000FF;" >My Control Panel</h1><center>
    <button class="f" name="for">Forwards</button>
    <button class="l" name="left">Left</button>
    <button class="s" name="stop">Stop</button>
    <button class="r" name="right">Right</button>
    <button class="b" name="back">Backwards</button>
  </form>




</div
<?php

    if(isset($_POST['stop'])) {

       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, '', '', '', '', 'S')";
       $result = mysqli_query($connect,$query);


       if(!$result){
        die (" error on qurey");  }

       else{

        die ("Records added successfully.");}}



    if(isset($_POST['for'])) {

       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, 'F', '', '', '', '')";
       $result = mysqli_query($connect,$query);


       if(!$result){
        die (" error on qurey");}

    else{

        die ("Records added successfully.");}}



    if(isset($_POST['left'])) {

       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, '', '', 'L', '', '')";
       $result = mysqli_query($connect,$query);


       if(!$result){
        die (" error on qurey");}

    else{

        die ("Records added successfully.");}}

    if(isset($_POST['right'])) {

       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, '', '', '', 'R', '')";
       $result = mysqli_query($connect,$query);


       if(!$result)  {
        die (" error on qurey");}

    else{

        die ("Records added successfully.");  }  }


    if(isset($_POST['back'])) {

       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, '', 'B', '', '', '')";
       $result = mysqli_query($connect,$query);


       if(!$result){
        die (" error on qurey");  }

    else{

     die ("Records added successfully.");}}



?>






</body>

</html>


<?php

mysqli_close($connect);
?>
