<html>
<head>
<script type="text/javascript">
   function myfun(){
      alert("Submitted Successfully");
   }
</script>
</head>
<body>

<h1>Percentage Calculator</h1>

<form action="percentageCalculator.php" method="post">

Registration Number: <input type="Number" name="reg" required/><br><br>

C-Language: <input type="Number" name="clan" required/><br><br>
Linux: <input type="Number" name="linux" required/><br><br>
Aptitude: <input type="Number" name="apti" required/><br><br>
English : <input type="Number" name="eng" required/><br><br>
Storage : <input type="Number" name="storage" required/><br><br>
OpenSource : <input type="Number" name="opensource" required/><br><br>

<button type="submit" onclick="myfun()" >Submit</button>

</form>

<?php

$con = mysqli_connect('localhost','sai','1015','percentage');

$reg = $_POST['reg'];
$clan = $_POST['clan'];
$linux = $_POST['linux'];
$aptitude = $_POST['apti'];
$eng = $_POST['eng'];
$storage = $_POST['storage'];
$opensource = $_POST['opensource'];

$result = $clan + $linux + $aptitude + $eng + $storage + $opensource;
$percentage = ($result/600)*100;
$s = "INSERT INTO student(Registration_Number,C_Language,Linux,Aptitude,English, Storage,OpenSource,Percentage) VALUES ('$reg','$clan','$linux','$aptitude','$eng','$storage','$opensource','$percentage')";

$result = mysqli_query($con,$s);

echo "Percentage for $reg is $percentage";

?>

</body>
</html>
