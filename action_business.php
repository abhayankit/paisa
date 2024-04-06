<?php  
include('connection.php');
if(isset($_POST['submit'])){
    $insert="INSERT into `business` (`iam`,`my_prof`,`loan_upto`,`ann_turnover`,`practicing`,
   `exi_emi`,`my_office`,`my_house`,`account_type`,`curret_res`,`name`,`dob`,`company`,`mobile`,`email`)
    values('".$_POST['iam']."','".$_POST['my_prof']."','".$_POST['loan_upto']."','".$_POST['ann_turnover']."',
    '".$_POST['practicing']."','".$_POST['exi_emi']."','".$_POST['my_office']."','".$_POST['my_house']."',
    '".$_POST['account_type']."','".$_POST['curret_res']."','".$_POST['first_name']."',
    '".$_POST['dob']."','".$_POST['business_name']."','".$_POST['mno']."','".$_POST['email']."')";
    $query=mysqli_query($conn,$insert);
    if($query){
        echo "<script>alert('Message sent successful')
        window.location.href='business_loan'</script>";
    }else{
        echo "<script>alert('Something else wrong')
        window.location.href='business_loan'</script>";
    }
}
?>