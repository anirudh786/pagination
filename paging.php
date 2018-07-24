<!DOCTYPE HTML>
<html>
<head>
<title>PAGINATION</title>
<meta http-equiv="Contect-Type" content="text/html; charset=iso-8859-1">

</head>

<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("pagination");

$page=$_GET["page"];
if($page=="" || $page=="1"){
	
	$page1=0;
}
else
{
	$page1=($page*5)-5;
	
}

$res=mysql_query("select * from paging limit $page1,5");
while($row=mysql_fetch_array($res))
{
	echo $row["id"]." ".$row["name"];
	echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$res1=mysql_query("select * from paging");
$cou=mysql_num_rows($res1);
$a=$cou/5;
$a=ceil($a);
for($b=1;$b<=$a;$b++){
	
	?> <a href="paging.php?page=<?php echo $b; ?>" style="text-decoration:none"><?php echo $b." "; ?></a> <?php
}


?>
</body>

</html>