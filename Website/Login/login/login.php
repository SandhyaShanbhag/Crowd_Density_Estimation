<?php
include('../Db/dbconfig.php');
$uid=$_POST['uid'];
$pass=$_POST['pass'];
$flag=0;
$data = $database->getReference('Clogin')->getValue();
foreach($data as $row)
{
    if(($row['uname']==$uid) &&($row['pass']==$pass))
    {
        header('Location:../P1/cust.html');
        $flag=1;
        break;
        
    }
}
if($flag==0){
    
    echo "<script>
      window.location.href = './index.html';
      alert('Login failed!!! Please try again.');
    </script>";
}
?>