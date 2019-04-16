<?php
session_start();
$msg="";
if(isset($_REQUEST['Login']))
{
    include 'blogic.php';
    $res=ExecuteQuery("select * from student_info where stu_email='$_REQUEST[username]' and stu_pass='$_REQUEST[pwd]'");
    if(mysql_affected_rows()>0) {
        if(isset($_REQUEST['rem'])){
            setcookie("mycookie",$_REQUEST['username'],time()+60);
            setcookie("mycookie1",$_REQUEST['pwd'],time()+60);}
     $r=mysql_fetch_assoc($res);
     $_SESSION['uid']=$r['stu_id'];
     $_SESSION['uname']=$r['stu_name'];
     header("location:studash.php");   
    }
    else{
        $msg="<font color='blue'>Invalid Username and Password</font>";
    }
    }

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
       <script type="text/javascript" src="stuvalidate.js"></script>
        <title>Student Login</title>
    </head>
<body style="margin:0;">
<div class="row">
<div class="col-md-12">
<?php include "Header.php" ?></div><br />

<center>
<form method="post">
<div class="row" >
<div id="topnav" class="col-md-12">
<span style="font-size:x-large;font-family:color:black:Times Roman">Student Login</span><br />
<br /><br /><br />
<span style="font-size:20px;font-family:Times Roman"><b>Username:</b></span>
<input type="text" name="username"  placeholder="Enter username.." size="35" /><br /><br />
<br />
<span style="font-size:20px;font-family:Times Roman"><b>Password:</b></span>
<input type="password" name="pwd"  placeholder="Enter password.." size="35"/><br /><br />
<input type="checkbox" name="rem" value="on"/><span style="font-size:20px;font-family:Times Roman">Remember Me</span><br /><br />
 <div class="divider">
<input type="submit" name="Login" class="btn-success" value="Login"/><br />
</div><br />
Not a Member?
<a href="stureg.php" class="btn-link" ><u>Register Now</u></a><br />
<?php 
echo "<h3>$msg</h3>";
?>
</form>
</center>
</div></div><br /><br/>


 <div class="row">
       <div class="col-md-12">
 <?php include 'Footer.php' ?>
       </div></div>
       </div></div>
</body>
</html>
