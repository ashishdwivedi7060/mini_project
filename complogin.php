<?php
session_start();
$msg="";
if(isset($_REQUEST['Login']))
{
    include 'blogic.php';
    $res=ExecuteQuery("select * from comp_info where comp_username='$_REQUEST[username]' and comp_pass='$_REQUEST[pwd]'");
    if(mysql_affected_rows()>0) {
        if(isset($_REQUEST['rem'])){
            setcookie("mycookie",$_REQUEST['username'],time()+60);
            setcookie("mycookie1",$_REQUEST['pwd'],time()+60);}
     $r=mysql_fetch_assoc($res);
     $_SESSION['uid']=$r['comp_username'];
     $_SESSION['uname']=$r['comp_email'];
     header("location:compdash.php?id=$r[comp_email]");   
    }
    else{
        $msg="<font color='blue'>Invalid Username and Password</font><br>";
    }
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Company Dashboard</title>
    </head>
<body style="margin:0;">
<div class="row">
<div class="col-md-12">
<?php include "Header.php" ?></div>
<div class="row" >
<div id="topnav" class="col-md-12">
<center>
<form method="post">
<span style="font-size:x-large;font-family:color:black;">Company Login</span><br /><br />
<b>Username:</b>
<input type="text" name="username"  placeholder="Enter Username" size="35" /><br /><br />
<br /><b>Password:</b>
<input type="password" name="pwd"  placeholder="Enter Password" size="35"/><br /><br />
<input type="checkbox" name="rem" value="on"/>Remember Me<br /><br />
 <div class="divider">
<input type="submit" name="Login" value="Login"/>
<br />    
</div><br />
Not a Member
<a href="compreg.php" class="btn-link" ><u>Sign Up</u></a><br />
<h3><?php echo $msg;
 ?></h3>
</form>
</center>
</div></div></div>
 <div class="row">
       <div class="col-md-12">
 <?php include 'Footer.php' ?>
       </div></div>
</body>
</html>