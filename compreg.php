<?php
 if(isset($_REQUEST['Register']))
{
    @mysql_connect("localhost","root","");
    @mysql_select_db("cms");
    $qry = "insert into comp_info values ('$_REQUEST[t_name]','$_REQUEST[t_esta]','$_REQUEST[t_email]','$_REQUEST[t_contact]','$_REQUEST[t_hr]','$_REQUEST[t_id]','$_REQUEST[t_username]','$_REQUEST[t_pass]')";

   mysql_query($qry);
    if(mysql_affected_rows()>0)
{
   echo "<script type='text/javascript'>";
        echo "alert('Welcome to CGS Portal!')";
        echo  "</script>";
        
    }
    else {
        echo "<script type='text/javascript'>";
        echo "alert('Error in Inserting!!')";
        echo  "</script>";
        mysql_error();
        
}
mysql_close();}

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
       <script type="text/javascript" src="compvalidate.js"></script>
        <title>Company Registration</title>
    </head>
<body style="margin:0;">
 <div class="row">
 <div class="col-md-12">
           <?php include 'Header.php';?></div>
           <form action="#" method="post" id="compform" name="compForm" onsubmit="return(validate());">
           <div class="row">
           <div class="col-md-12">
 <div>
 <h1><u><center>Registration Form</center></u><span style="color:chocolate;font-family:Garamond;"></span></h1>
 </div>
<table cellspacing="0" border="0" width="50%">
<tr type="required"><td></td><td  class="right"><label style="font-size:20px;font-family:Times Roman">Company Name*</label></td>
<td><input name="t_name" type="text" id="tName" placeholder="Company Name" style="width:250px;height:20px;"/>
</td>
<td></td></tr>
<tr type="required">
<td></td>
<td class="right"><label style="font-size:20px;font-family:Times Roman">Established*</label></td>
<td><input name="t_esta" type="year" id="testa" placeholder="Established year" style="width:250px;height:20px;"/>
</td>
<td></td></tr>
<tr type="required">
<td></td>
<td class="right"><label style="font-size:20px;font-family:Times Roman">Email*</label></td>
<td><input name="t_email" type="text" id="temail" placeholder="Email Id" style="width:250px;height:20px;"/>
</td>
<td></td></tr>
<tr type="required">
<td></td>
<td class="right"><label style="font-size:20px;font-family:Times Roman">Contact*</label></td>
<td><input name="t_contact" type="text" id="tcontact" placeholder="Contact" style="width:250px;height:20px;"/>
</td>
<td></td></tr>
<tr type="required">
<td></td>
<td class="right"><label style="font-size:20px;font-family:Times Roman">HR Name*</label></td>
<td><input name="t_hr" type="text" id="thr" placeholder="HR Name" style="width:250px;height:20px;"/>
</td>
<td></td></tr>
<tr type="required">
<td></td>
<td class="right"><label style="font-size:20px;font-family:Times Roman">Your Id*</label></td>
<td><input name="t_id" type="text" id="tid" placeholder="Your Id" style="width:250px;height:20px;"/>
</td>
<td></td></tr>
<tr type="required">
<td></td>
<td class="right"><label style="font-size:20px;font-family:Times Roman">Username*</label></td>
<td><input name="t_username" type="text" id="tusername" placeholder="Username" style="width:250px;height:20px;"/>
</td>
<td></td></tr>
<tr type="required">
<td></td>
<td class="right"><label style="font-size:20px;font-family:Times Roman">Password*</label></td>
<td><input name="t_pass" type="text" id="tpass" placeholder="Password" style="width:250px;height:20px; "/>
</td>
<td></td></tr>
<tr>
<td></td>
<td></td>
<td><input type="submit"  name="Register" value="Submit" style="width:80px;height:40px;" /></td>
<td></td></tr>
</table>
</div></div>
</form>
<div class="row">
<div class="col-md-12">
<?php
include 'Footer.php';
?></div></div>
</body>
</html>