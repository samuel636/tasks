<?php
$tiltle = " A simple crup app";
include '../header.php';
?>
<form method = "post" action="">
<input type="text" name="fname" placeholder="First Name" required class="form-control"><br> <br>
<input type="text" name="lname" placeholder="Last Name" required  class="form-control"><br><br>
<input type="text" name="city" placeholder="City" required  class="form-control"><br><br>
<select name="groupid">
    <option value = "BBCAP22">BBCAP22</option>
    <option value = "BBCAP21">BBCAP21</option>
    <option value = "Others">Others</option>
</select><br><br>
<input type="submit" value="submit" name="submit">
</form>
<?php
if(isset ($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    include 'db.php';
    $sq1 = "insert into studentinfo (fname,lname,city,groupid)
    values('$fname','$lname','$city','$groupid')";

    if($conn->query($sq1) ===TRUE){
        echo "your inforation is added succes";


    }
    else {
        echo "error:".$conn->error;
    }
}
?>



<?php
include '../footer.php';
?>
