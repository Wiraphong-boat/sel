<html>

<head>

<title>ThaiCreate.Com Tutorial</title>

</head>

<body>

<?

$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");

$objDB = mysql_select_db("mydatabase");

$strSQL = "SELECT * FROM files";

$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

?>

<table width="200" border="1">

<tr>

<th width="50"> <div align="center">Files ID </div></th>

<th width="150"> <div align="center">Files Name </div></th>

</tr>

<?
while($objResult = mysql_fetch_array($objQuery))

{
?>
<tr>

<td><div align="center"><?=$objResult["FilesID"];?></div></td>
<td><center><a href="myfile/<?=$objResult["FilesName"];?>"><?=$objResult["FilesName"];?></a></center></td>

</tr>
<?
}
?>
</table>

<?
mysql_close($objConnect);
?>
</body>
</html>