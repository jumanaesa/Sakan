<?php
if(isset($_POST["submit"])){
include 'dbconfig.php';

$sql = "INSERT INTO entries (name, email, city, gender)
VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["city"]."','".$_POST["gender"]."')";

if ($conn->query($sql) === TRUE) {
echo "
    <script type= 'text/javascript'>
        alert('Booking created successfully');
    </script>";
} 
else 
{
    echo 
    "<script type= 'text/javascript'>
        alert('Error: " . $sql . "<br>" . $conn->error."');
    </script>";
}

$conn->close();
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link href="css/stylelog.css" rel="stylesheet" type="text/css"  media="all" />
    <title>payment</title>
  </head>
  <body>
    


<div id="webform">
<h2 style="color:white">Booking Form</h2>
<form action="" method="post">
<label>Name :</label>
<input type="text" name="name" required placeholder="Please Enter Name"/><br><br>
<label> Email :</label>
<input type="email" name="email" required placeholder="qwerty@gmail.com"/><br><br>
<label> City :</label>
<input type="text" name="city" required placeholder="Please Enter Your City"/><br><br>
<select name="payment" id="payment" >
    <option value="choose"> Payment method </option>
    <option value="M"> Cash Money</option>
    <option value="F"> Visa Card </option>
</select>
<br><br>
<input type="submit" value=" Submit " id="submit" name="submit"/><br />
</form>
</div>
      
      
      
      
       <footer>
  
                     <div id="top123"> 
                          <img src="logo.png" height=200px width=450px height=125px width=450px align= rights>
                    </div>
		
				<div class="clear"> </div>
		
		<div class="copy-tight">
			<p>&copy HOTEL Sayd</p>
		</div>
           
    </footer>
			<script type="text/javascript">
		var pay=document.getElementById("payment");
		var button=document.getElementById("submit");
        button.addEventListener("click",check, false);
		
		function check()
		{
		if (pay.selectedIndex == 0)
		window.alert("please choose a payment method");
		
		}
		</script>
    </body>
    
    </html>
      
      
