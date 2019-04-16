<?php
session_start();
 if(!isset($_REQUEST['id'])){
    
    header("location:complogin.php");}
    ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Company Dashboard</title>
    </head>
<body style="margin:0;">
 <div class="row">
 <div class="col-md-12">
           <?php include 'Header.php';?></div>
           <form method="post">
           <div class="row">
           <div class="col-md-12">
            <center><h3>Welcome <?php
                    if(isset($_SESSION['uid'])){
                        echo $_SESSION['uid']; 
                    }
                    else
                    echo "Guest";
                    ?></h3>
            <table cellpadding="0" cellspacing="0" >
            <tr><td width="33%" style="background-color:darkgrey;" rowspan="3"><h2><center>MENU</center></h2></td>
                <td width="67%">
                <table><tr>
                <td class="center" style="font-size:20px;font-family:times roman;" width="50%">SSC Aggregate:</td>
                <td><input type="text" name="ssc" style="width:250px;height:20px;" width="50%"/></td>
                </tr></table>
                </td></tr>
           
            <tr><td width="67%">
                <table><tr>
                <td class="center" style="font-size:20px;font-family:times roman;" width="50%">HSC Aggregate:</td>
                <td><input type="text" name="hsc" style="width:250px;height:20px;" width="50%"/></td>
                </tr></table>
                </td></tr>
            
            <tr>
                <td width="67%"><table><tr>
                <td class="center" style="font-size:20px;font-family:times roman;" width="50%">College Aggregate:</td>
                <td><input type="text" name="cagg" style="width:250px;height:20px;" width="50%"/></td>
                </tr></table>
                </td></tr>
               
            <tr><td width="33%" style="background-color:darkgrey;"></td><td width="67%" class="center" style="width:250px;height:20px;"><input type="submit" value="Search" name="btn"/></td>
                </tr>
            
            
            <tr><td width="33%" style="background-color:darkgrey;font-size:20px;font-family:times roman;" rowspan="2" class="center"><h3><a href="vacancy.php" class="btn-link"><u>Post New Vacancy</u></a></h3></td>
                <td width="67%"><?php
if(isset($_REQUEST['btn']))
{
    include 'blogic.php';
    $res=ExecuteQuery("select * from stu_info where stu_matric>='$_REQUEST[ssc]' or stu_inter>='$_REQUEST[hsc]' or stu_per_dip>='$_REQUEST[cagg]' or stu_per_grad>='$_REQUEST[cagg]' or stu_per_post>='$_REQUEST[cagg]'");
    if(mysql_affected_rows()>0) {
    echo "<tr><th>Student Name</th><th>Student Gender</th><th>Student Email</th><th>Contact Info</th></tr>";
     while($r=mysql_fetch_assoc($res)){
     echo "<table width='80%'  style='border-color:black;font-size:15px;' cellspacing='1' >";
  
   echo "<tr class='center'><td>$r[stu_name]</td><td>$r[stu_gender]</td><td>$r[stu_email]</td><td>$r[stu_mobileno]</td></tr>";
   }
   echo "</table>";   
    }
    mysql_close();
}
else
{
    include 'blogic.php';
    $res=ExecuteQuery("select * from stu_info");
    if(mysql_affected_rows()>0) {
     
     echo "<table width='80%'  style='border-color:black;font-size:15px;' cellspacing='2' >";
     
     while($r=mysql_fetch_assoc($res)){
   echo "<tr><th>Student Name</th><th>Student Gender</th><th>Student Email</th><th>Contact Info</th></tr>";
   echo "<tr class='center'><td>$r[stu_name]</td><td>$r[stu_gender]</td><td>$r[stu_email]</td><td>$r[stu_mobileno]</td></tr>";
   }
   echo "</table>";   
    }
 mysql_close();
}
?></td></tr>
                
            <tr>
                <td width="67%"><?php
                  if(isset($_REQUEST['email'])){
                    $admin_email=$_REQUEST['admin'];
                    $email=$_REQUEST['email'];
                    $subject=$_REQUEST['subject'];
                    $comment=$_REQUEST['comment'];
                    mail($admin_email,"$subject",$comment,"From:",$email);
                    echo "Thankyou for Contacting Us!";
                  }
                  else {
                    ?>
                    <form method="post">
                   <table><tr><td width="50%" class="right">Email From:</td><td width="50%" class="left"><input name="admin" type="text" style="width:250px;height:20px;"/></td></tr><br/>
                    <tr><td width="50%" class="right">Email To:</td><td width="50%" class="left"><input name="email" type="text" style="width:250px;height:20px;"/></td></tr><br />
                    <tr><td width="50%" class="right">Subject:</td><td width="50%" class="left"><input name="subject" type="text" style="width:250px;height:20px;"/></td></tr><br />
                    <tr><td width="50%"rowspan="2" class="right">Message:</td><td width="50%"></td></tr><br />
                    <tr><td width="50%" class="left"><textarea name="comment" rows="15" cols="40"></textarea></td></tr><br />
                    <tr><td width="50%"></td><td width="50%" class="left"><input type="submit" value="Send"/></td></tr>
                    </table>
                    </form>
                    <?php
                    }
                ?></td></tr>
            
            <tr><td width="33%" style="background-color:darkgrey;" rowspan="4" class="center"><a href="complogout.php">Logout</a></td>
                <td width="67%" class="center"></td></tr>
             
            <tr>
                <td width="67%" class="center"></td></tr>
              
            <tr>
                <td width="67%" class="center"></td></tr>
                
            <tr>
                <td width="67%" class="center"></td></tr>
            
            
            </table></center>
 
 </div>
 </div>
 </form>
 </div>
 <div class="row">
 <div class="col-md-12">
 <?php
 include "Footer.php";
 ?>
 </div></div>
 </body>
 </html>