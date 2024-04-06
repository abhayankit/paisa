<?php  
include('connection.php');
if(isset($_POST['submit'])){
   echo  $insert="INSERT into `salaries_over_draft` (`loan`,`salary`,`practicing`,`working`,`run_emi`,
   `my_house`,`curret_res`,`name`,`dob`,`mobile`,`email`)  
    values('".$_POST['loan_upto']."','".$_POST['salary']."','".$_POST['practicing']."',
    '".$_POST['working']."','".$_POST['run_emi']."','".$_POST['my_house']."','".$_POST['curret_res']."',
    '".$_POST['first_name']."','".$_POST['dob']."','".$_POST['mno']."','".$_POST['email']."')";
    $query=mysqli_query($conn,$insert);
    if($query){
        echo "<script>alert('Message sent successful')
        window.location.href='salaried_over_draft'</script>";
    }else{
        echo "<script>alert('Something else wrong')
        window.location.href='salaried_over_draft'</script>";
    }
}
?>