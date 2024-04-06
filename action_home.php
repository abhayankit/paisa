<?php  
include('connection.php');
if($_POST['loan_for']=='Transfer My Existing Loan'){
    if(isset($_POST['submit'])){
        $insert="INSERT into `home_loan` (`loan_for`,`bank_name`,`out_amt`,`iam`,
        `current_res`,`name`,`business`,`dob`,`mobile`,`email`)
        values('".$_POST['loan_for']."','".$_POST['bank_name']."','".$_POST['out_amt']."','".$_POST['iam']."',
        '".$_POST['curret_res']."','".$_POST['first_name']."','".$_POST['business']."','".$_POST['dob']."',
        '".$_POST['mno']."','".$_POST['email']."')";
        $query=mysqli_query($conn,$insert);
        if($insert){
            echo "<script>alert('Sent successful')
            window.location.href='home_loan'</script>";
        }else{
            echo "<script>alert('Something else wrong')
            window.location.href='home_loan'</script>";
        }
    }
}else{
if(isset($_POST['submit'])){
    $insert="INSERT into `home_loan` (`loan_for`,`loan_upto`,`ex_emi`,`mon_inc`,
    `am_div`,`current_res`,`name`,`dob`,`mobile`,`email`)
    values('".$_POST['loan_for']."','".$_POST['loan_upto']."','".$_POST['ex_emi']."','".$_POST['mon_inc']."',
    '".$_POST['i_am']."','".$_POST['current_res']."','".$_POST['first_name']."','".$_POST['dob']."',
    '".$_POST['mno']."','".$_POST['email']."')";
    $query=mysqli_query($conn,$insert);
    if($insert){
        echo "<script>alert('Sent successful')
        window.location.href='home_loan'</script>";
    }else{
        echo "<script>alert('Something else wrong')
        window.location.href='home_loan'</script>";
    }
}

}
?>