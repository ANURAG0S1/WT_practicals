<!DOCTYPE html>
<html>
  <head>
    <title>PHP insertion</title>
    <link href="css/insert.css" rel="stylesheet" />
  </head>
  <body>
    <div class="maindiv">
       
      <div class="form_div">
        <div class="title">
          <h2>Insert Data In Database Using PHP.</h2>
        </div>
        <form action="insert.php" method="post">
             <h2>Form</h2>
          <label>Name:</label>
          <input class="input" name="name" type="text" value="" />
          <label>Email:</label>
          <input class="input" name="email" type="text" value="" />
          <label>Contact:</label>
          <input class="input" name="contact" type="text" value="" />
          <label>Address:</label>
          <textarea cols="25" name="address" rows="5"></textarea><br />
          <input class="submit" name="submit" type="submit" value="Insert" />
        </form>
      </div>
    </div>
  </body>
</html>
<?php
$connection = mysql_connect("localhost", "root", ""); 
Connection with Server$db = mysql_select_db("colleges", $connection); 
if(isset($_POST['submit'])){ 
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
if($name !=''||$email !=''){ 
$query = mysql_query("insert into students(student_name, student_email,
student_contact, student_address) values ('$name', '$email', '$contact',
'$address')");
echo "<br/><br /><span>Data Inserted successfully...!!</span>"; } else{ echo "
<p>
  Insertion Failed <br />
  Some Fields are Blank....!!
</p>
"; } } mysql_close($connection);   ?>
