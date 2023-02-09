<?php include "header.php" ?>
<div class= "footer-date text-center">
    <h5>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not</h5>
    <?php
    $name = $_SERVER['PHP_SELF'];
    $filename = basename($name);
    echo "It is " . date("F", fileatime($filename));
    echo " its is not holiday"
    ?>
    <h5>2. Assign colour red to a variable name $color and check to print one the following responses</h5>
  
  </div>
  <?php
    $colour = "red";
    if ($colour == true)
        echo "the colour is red";
    else if($colour == false)
        echo "the colour is not red";
        
    ?>
    <h5>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score</h5>
   <?php
   $tscore = "83";
   if ($tscore > 80)
       echo "excellent";
      else if ($tscore > 70 && $tscore < 80)
       echo "great";
       else if ($tscore > 60 && $tscore < 70)
       echo "good";
       else if ($tscore > 50 && $tscore < 60)
       echo "pass";
       else if ($tscore > 50 && $tscore < 60)
       echo "pas";
   else
       echo "fail";
  
   ?>
   <h5>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting
</h5>

<form action ="action1.php" method="post">
         <div class = "row">
        <div class ="col">
 Name : <input type="text" name="fullname" required ><br><br>  
 </div>
 </div>
        <div class = "row"> 
        <div class ="col">

        Age : <input type="text" name="age"required ><br><br>
<input type="submit" value ="Submit"> <br>
</div>
</div>

</form>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$browser = "chrome";
switch ($user_agent) {

    case (strpos($user_agent, 'Chrome') == true):
        echo "You are using chrome";
        break;

    case (strpos($user_agent, 'Edg') == true):
        echo "You are using microsoft Edge";
        break;

    case (strpos($user_agent, 'Firefox') == true):
        echo "You are using Mozilla firefox";
        break;
    default:
        echo "Your browser could not be found";
}
?>


<?php include "footer.php" ?>