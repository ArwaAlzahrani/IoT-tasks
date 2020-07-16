
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
    <a href="http://localhost:8888/MyTask/Control%20Panel%20Details.php" class="m">Map</a>

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
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "95c700c9-2300-4c82-b91e-e28d9f6eaa2f", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "c60a8977-aec4-4eee-aba8-86f98a2b8539", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>

</html>


<?php

mysqli_close($connect);
?>
