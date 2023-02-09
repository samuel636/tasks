<?php include "header.php" ?>

 <h3>1. create assimpel html form to get the fist nmae and last name fromthe  </h3>
<form action ="actio.php" method="post">
    <div class = "row">
        <div class ="col">
 <input type="text" name="fname" required placeholder="First name" class="form-control">
</div>
<div class= "col">
 <input type="text" name="lname"required placeholder="Last Name" class="form-control"><br><br>
</div>
<input type="date" name ="bdate"><br><br>
select fav colour:<input type= "colour" name ="colour"><br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
 <input type="submit" value ="Submit"><br>
    </div>
</form>
<h5>4.Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)
</h5>
<?php

$Name="samii";
$name="one two three";
echo strlen($Name.$name);

?>
<h5>5.Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.
</h5>
<?php
$one = 298;
$two = 234;
$thre = 46;
$io = $one + $two + $thre;

echo "sum", $io;
?>
<h5>Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER)</h5>
<?php

?>

<?php include "footer.php" ?>