<?php
if (isset($_SESSION['authenticated'])) {
    include("include/connection.php");
    $email = $_SESSION['email'];
    $query1 = "select marks, q_id, time_taken from result where email='$email'";
    $temp1 = mysqli_query($connect,$query1) or die("error in marks1");
    $res = mysqli_fetch_row($temp1);
    $marks = $res[0];
    $lvl=$res[1];
    $time=$res[2];
    
    $query3 = "SELECT count(email) from result WHERE q_id>'$lvl' OR (q_id='$lvl' AND time_taken<'$time')";
    $temp3 = mysqli_query($connect,$query3) or die("error in marks2");
    $res3 = mysqli_fetch_row($temp3);
    if(!empty($res[0])) {
    $_SESSION['rank'] = $res3[0] + 1;
    }
    else
    $_SESSION['rank'] = "Not played";
}
?>