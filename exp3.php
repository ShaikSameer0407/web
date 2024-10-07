<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
// define variables and set to empty values
$nameErr = $passErr =$emailerr= "";
$name = $pass = $email="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["name"])) {
 $nameErr = "Name is required";
 } else {
 $name = test_input($_POST["name"]);
 }
 if (empty($_POST["password"])) {
 $passErr = "Password is required";
 } else {
 $pass = test_input($_POST["password"]);
 }
if(empty($_POST['email'])){
    $emailerr="email is required";
}else{
    $email=test_input($_POST["email"]);
}

 }
function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
?>
<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 Name: <input type="text" name="name">
 <span class="error">* <?php echo $nameErr;?></span>
 <br><br>
Password: <input type="password" name="password">
 <span class="error">* <?php echo $passErr;?></span>
 <br><br>
 Email <input type="email" name="email">
 <span class="error">* <?php echo $emailerr;?></span><br><br>
 <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $pass;
echo "<br>";
echo $email;
echo "<br>";
?>
</body>
</html>
