<?php
include('../Db/dbconfig.php');
$uid=$_POST['uid'];
$pass=$_POST['pass'];
$flag=0;
$data = $database->getReference('Alogin')->getValue();
foreach($data as $row)
{
    if(($row['uname']==$uid) &&($row['pass']==$pass))
    {
        header('Location:../P1/admin.php');
        $flag=1;
        break;    
    }
}
if($flag==0){
    echo "<script>
      window.location.href = './admin_login.php';
      alert('Login failed!!! Please try again.');
    </script>";
}
?>