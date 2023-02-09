<?php include "header.php";
$fullname = $_POST['fullname'];
$age = $_POST['age'];

 
 
 if ( $age < 18)
     echo "you are not eligible for voting";
   else
     echo "eligible for voting";


echo "<h3>your name is $fullname/
your are $age years old"



?>
<?php include "footer.php" ?>
