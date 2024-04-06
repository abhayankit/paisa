<?php  
include('connection.php');
if(isset($_POST['submit'])){
    $insert="INSERT into `lap` (`loan_for`,`prop_value`,`prop_in`,`loan_upto`,
    `iam`,`ann_turnover`,`ann_profit`,`curret_res`,`name`,`dob`,`comapny`,`mno`,`email`)
    values('".$_POST['loan_for']."','".$_POST['prop_value']."','".$_POST['prop_in']."','".$_POST['loan_upto']."','".$_POST['iam']."',
    '".$_POST['ann_turnover']."','".$_POST['ann_profit']."','".$_POST['curret_res']."','".$_POST['first_name']."','".$_POST['dob']."',
    '".$_POST['business']."','".$_POST['mno']."','".$_POST['email']."')";
    $query=mysqli_query($conn,$insert);
    if($query){
        echo "<script>alert('Sent successful')
        window.location.href='loan_against_property'</script>";
    }else{
        echo "<script>alert('Something else wrong')
        window.location.href='loan_against_property'</script>";
    }
}
?>