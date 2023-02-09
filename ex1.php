<?php include "header.php" ?>


<h1> 3.1 write a simple php script to print your information(name and group id) </h1>
<?php
echo "Samuel Abebe";
echo "BBCAP_19";
?>
<h2> 3.2 write php code to display the following message</h2>
<?php
echo "hello world ! my name is\"samuel\"";
?>
<h1>current date</h1>
<?php 
echo "(d.m.Y)";
 ?>
<?php
echo "<h1>" .$thisisthetitle. "</h1>";
?>
<h5>3.5 table and variables</h5>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo"
<table>
<tr>
<th> S.N </th> <th> NAME </th><th> grade </th>
</tr>
<tr>
<td> 1 </td><td> pekka </td> <td> $g1 </td>
</tr>
<tr>
<td> 2 </td><td> pekka </td> <td> $g2 </td>
</tr>
<tr>
<td> 3 </td><td> pekka </td> <td> $g3 </td>
</tr>
"

?>


<?php include "footer.php" ?>
