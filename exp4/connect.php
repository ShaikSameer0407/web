<?php
$user = 'root';
$password = '';
$database = 'info';
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,$password, $database);
if ($mysqli->connect_error) {
 die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>CSE Student Details</title>
 <style>
 table {
 margin: 0 auto;
 font-size: large;
 border: 1px solid black;
 }
 h1 {
 text-align: center;
 color: #006600;
 font-size: xx-large;
 font-family: 'Gill Sans', 'Gill Sans MT',
 ' Calibri', 'Trebuchet MS', 'sans-serif';
 }
 td {
 background-color: #E4F5D4;
 border: 1px solid black;
 }
 th,
 td {
 font-weight: bold;
 border: 1px solid black;
 padding: 10px;
 text-align: center;
 }
 td {
 font-weight: lighter;
 }
 </style>
</head>
<body>
 <section>
 <h1>CSE Department Student Information</h1>
 <table>
 <tr>
 <th>Reg_No</th>
 <th>FirstName</th>
 <th>LastName</th>
 <th>Gender</th>
 <th>Email</th>
 <th>Address</th>
 <th>Phone_No</th>
 </tr>
 <!-- PHP CODE TO FETCH DATA FROM ROWS -->
 <?php
// SQL query to select data from database
$sql = " SELECT * FROM studentinfo where dept='CSE' ";
 // LOOP TILL END OF DATA
 if($result = $mysqli->query($sql)){
 while ($rows = $result->fetch_assoc()){
 ?>
 <tr>
 <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
 <td><?php echo $rows['Reg_No'];?></td>
 <td><?php echo $rows['FirstName'];?></td>
 <td><?php echo $rows['LastName'];?></td>
 <td><?php echo $rows['Gender'];?></td>
<td><?php echo $rows['Email'];?></td>
<td><?php echo $rows['Address'];?></td>
<td><?php echo $rows['Phone_No'];?></td>
 </tr>
<?php
 }
}
 ?>
 </table>
 </section>
</body>
</html>