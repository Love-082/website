<html>
<body>

<?php 
$Firstname = $_POST["Firstname"];
$Lastname  = $_POST["Lastname"];
$OVERALL = $_POST["OVERALL"];

if ($OVERALL  >= 78)
	{
  echo "you are accepted";
}
else 
{ echo " sorry you are refuse";
}
?>
<br><br>Welcome <?php echo $Firstname ."  ".   $Lastname; ?><br>


<br>


</body>
</html>
