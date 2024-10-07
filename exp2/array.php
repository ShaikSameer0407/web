<html>
<body>
<?php
$flower_shop = array ( "rose" => "5.00", "daisy" => "4.00", "orchid"=> "2.00" );
// Display the array values
 echo "rose costs" .$flower_shop['rose'].",daisy costs".$flower_shop['daisy'].",and orchid costs ".$flower_shop['orchid']."";
?><br>
<?php
$flower_shop = array(
"rose" => array( "5.00", "7 items", "red" ),
"daisy" => array( "4.00", "3 items", "blue" ),
"orchid" => array( "2.00", "1 item", "white" ),
);
echo "rose costs ".$flower_shop['rose'][0].
", and you get ".$flower_shop['rose'][1].".<br>";
echo "daisy costs ".$flower_shop['daisy'][0].
", and you get ".$flower_shop['daisy'][1].".<br>";
echo "orchid costs ".$flower_shop['orchid'][0].
", and you get ".$flower_shop['orchid'][1].".<br>";
?>
</body>
</html>
