<?php
$mssg="";
 if(isset($_REQUEST['Submit']))
{
    @mysql_connect("localhost","root","");
    @mysql_select_db("cms");
    $qry = "insert into stu_info values ('$_REQUEST[txt_category]','$_REQUEST[txt_name]','$_REQUEST[txt_dob]','$_REQUEST[txt_city]','$_REQUEST[txt_state]','$_REQUEST[txt_mobileno]','$_REQUEST[txt_email]','$_REQUEST[txt_address]','$_REQUEST[Gender]','$_REQUEST[txt_matric]','$_REQUEST[txt_inter]','$_REQUEST[txt_course_dip]','$_REQUEST[txt_other_dip]','$_REQUEST[txt_insti_dip]','$_REQUEST[txt_yop_dip]','$_REQUEST[txt_per_dip]','$_REQUEST[txt_course_grad]','$_REQUEST[txt_other_grad]','$_REQUEST[txt_insti_grad]','$_REQUEST[txt_yop_grad]','$_REQUEST[txt_per_grad]','$_REQUEST[txt_course_post]','$_REQUEST[txt_other_post]','$_REQUEST[txt_insti_post]','$_REQUEST[txt_yop_post]','$_REQUEST[txt_per_post]','$_REQUEST[txt_exp]','$_REQUEST[months]')";

   mysql_query($qry);
    if(mysql_affected_rows()>0)
{
   echo "<script type='text/javascript'>";
        echo "alert('FORM SUBMITTED!!')";
        echo  "</script>";
        
    }
    else {
        echo "<script type='text/javascript'>";
        echo "alert('Error in Inserting!!')";
        echo  "</script>";
        mysql_error();}
     mysql_close();   

}

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
       <script type="text/javascript" src="stuvalidate.js"></script>
        <title></title>
    </head>
<body >
 <div class="row">
 <div class="col-md-12">
           <?php include 'Header.php';?></div>
           <form action="#" id="stuform" name="stuForm" onsubmit="return(validate());" method="post">
           <div class="row">
           <div class="col-md-12">
 <div class="center">
 <h1><u>Placement Registration Form</u><span style="color:chocolate;font-family:Garamond;"></span></h1>
 </div>
<table cellspacing="0" border="0" width="100%">
<tr class="center"><td><label style="font-size:20px;font-family:Times Roman">Category*</label></td>
<td><label style="font-size:20px;font-family:Times Roman">Name*</label></td>
<td><label style="font-size:20px;font-family:Times Roman">Date of Birth*</label></td>
<td><label style="font-size:20px;font-family:Times Roman">City*</label></td></tr>
<tr type="required" class="center"><td><select name="txt_category" id="Cat" style="width:250px;height:20px;">
	<option value="0">--Select--</option>
	<option value="CGSU">CGSU</option>
	<option value="Other">Other</option>
     </select>
</td><td><input name="txt_name" type="text" id="txtName" placeholder="Name" style="width:250px;height:20px;"/>
<span style="color:#B6362E;visibility:hidden;"></span></td>
<td><input name="txt_dob" type="date" id="txt_DOB" placeholder="Date of Birth" />
    <span style="color:#B6362E;visibility:hidden;">*</span></td>
<td><input name="txt_city" type="text" id="txtCity" placeholder="City" style="width:250px;height:20px;"/>
                <span style="color:#B6362E;visibility:hidden;"></span></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>
<tr class="center">
<td><label style="font-size:20px;font-family:Times Roman">State*</label></td>
<td><label style="font-size:20px;font-family:Times Roman">Mobile No.*</label></td>
<td><label style="font-size:20px;font-family:Times Roman">E-Mail*</label></td>
<td><label style="font-size:20px;font-family:Times Roman">Complete Postal Address*</label></td></tr>
<tr type="required" class="center">
<td><input name="txt_state" type="text" id="txtState" placeholder="State" style="width:250px;height:20px;"/>
                <span style="color:#B6362E;visibility:hidden;"></span></td>
<td><input name="txt_mobileno" type="numeric" maxlength="10" id="txtMobileNo" placeholder="Mobile Number" style="width:250px;height:20px;"/>
                <span style="color:#B6362E;visibility:hidden;"></span></td>
<td> <input name="txt_email" type="text" id="txtEmail" placeholder="Email Id" style="width:250px;height:20px;"/>
                <span style="color:#B6362E;visibility:hidden;"></span></td>
<td><textarea name="txt_address" rows="2" cols="20" id="txtAddress" style="width:200px;" placeholder="Postal Address">
</textarea></td></td></tr>
<tr><td></td><td></td><td></td><td></td></tr>      
<tr class="center"><td ><label style="font-size:20px;font-family:Times Roman">Gender*</label></td>
<td><label style="font-size:20px;font-family:Times Roman">Matric %*</label></td>
<td><label style="font-size:20px;font-family:Times Roman">10+2 %*</label></td>
</tr>
<tr class="center"><td><table><tr><td><input type="radio" id="male" name="Gender" value="M" /><label style="font-size:20px;font-family:Times Roman">Male</label>
<input type="radio" id="female" name="Gender" value="F" /><label style="font-size:20px;font-family:Times Roman"> Female</label> </td></tr></table></td>
<td><input name="txt_matric" type="text" maxlength="5" id="txtmatricPercentage" placeholder=" Matric Percentage" style="width:250px;height:20px;"/>
                        <span style="color:#B6362E;visibility:hidden;"></span></td>
<td><input name="txt_inter" type="text" maxlength="2" id="txtSeniorSecondryPercentage" placeholder="Inter Percentage" style="width:250px;height:20px;"/></td></tr>
<tr><td></td>
<td></td>
<td></td></tr>
</table></br>
<h2><u>Diploma (If Applicable)<span style="color:chocolate;font-family:Garamond;"></u></span></h2>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr class="center"><td><label style="font-size:20px;font-family:Times Roman">Course*</label></td>
<td><label style="font-size:20px;font-family:Times Roman">Others (if not in list)</label></td>
<td><label style="font-size:20px;font-family:Times Roman">Institute*</label></td>
<td><label style="font-size:20px;font-family:Times Roman">Year of Passing*</label></td></tr>
<tr class="center">
        <td><select name="txt_course_dip" id="ddlDCourse" style="width:250px;height:20px;">
	<option value="NULL">--Select--</option>
	<option value="Diploma (Civil Engineering)">Diploma (Civil Engineering)</option>
	<option value="Diploma (Computer Science Engineering)">Diploma (Computer Science Engineering)</option>
	<option value="Diploma (Electrical Engineering)">Diploma (Electrical Engineering)</option>
	<option value="Diploma (Electronics &amp; Communication Engineering)">Diploma (Electronics &amp; Communication Engineering)</option>
	<option value="Diploma (Mechanical Engineering)">Diploma (Mechanical Engineering)</option>
	<option value="Diploma (Information Technology)">Diploma (Information Technology)</option>
	<option value="Other">Other</option>
    </select>
</td>
<td><input name="txt_other_dip" type="text" id="txtDOtherCourse" placeholder="Other" style="width:250px;height:20px;"/>
</td>
<td><input name="txt_insti_dip" type="text" id="txtDInstitute" placeholder="Institute" style="width:250px;height:20px;"/></td>
<td><select name="txt_yop_dip" id="ddlDYearOfPassing" value="Year of Passing" style="width:250px;height:20px;">
	    <option value="NULL">--Select--</option>
        <option value="2008">2008</option>
	    <option value="2009">2009</option>
	    <option value="2010">2010</option>
	    <option value="2011">2011</option>
	    <option value="2012">2012</option>
	    <option value="2013">2013</option>
	    <option value="2014">2014</option>
	    <option value="2015">2015</option>
	    <option value="2016">2016</option>
	    <option value="2017">2017</option>
	    <option value="2018">2018</option>

</select></td></tr>

<tr class="center"><td><label style="font-size:20px;font-family:Times Roman">Percentage*</label></td>
<td></td>
<td></td>
<td></td></tr>
<tr class="center"><td><input name="txt_per_dip" type="text" maxlength="5" id="txtDPercentage" placeholder="Percentage" style="width:250px;height:20px;"/>
</td>
<td></td>
<td></td>
<td></td></tr>

<tr class="center"><td><span style="font-size:10px">(If course not completed then put aggregate % till date)</span></td>
<td></td>
<td></td>
<td></td>
</tr>
</table><br />

<h2><u>Graduation (If Applicable)<span style="color:chocolate;font-family:Garamond;"></u></span></h2>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr class="center"><td><label style="font-size:20px;font-family:Times Roman">Course*</label>
<td><label style="font-size:20px;font-family:Times Roman">Others (if not in list)</label></td>
<td><label style="font-size:20px;font-family:Times Roman">Institute*</label></td>
<td><label style="font-size:20px;font-family:Times Roman">Year of Passing*</label></td></tr>
<tr class="center">
<td><select name="txt_course_grad" id="ddlGCourse" style="width:250px;height:20px;">
	                <option value="NULL">--Select--</option>
	                <option value="B.Tech. (Civil Engineering)">B.Tech. (Civil Engineering)</option>
	                <option value="B.Tech. (Computer Science &amp; Engineering)">B.Tech. (Computer Science &amp; Engineering)</option>
	                <option value="B.Tech. (Electrical and Electronics Engineering)">B.Tech. (Electrical and Electronics Engineering)</option>
	                <option value="B.Tech. (Electronics &amp; Communication Engineering)">B.Tech. (Electronics &amp; Communication Engineering)</option>
                    <option value="B.Tech. (Mechanical Engineering)">B.Tech. (Mechanical Engineering)</option>
	                <option value="Bachelor of Hotel Management &amp; Catering Technology">Bachelor of Hotel Management &amp; Catering Technology</option>
	                <option value="Other">Other</option>

</select></td>
<td><input name="txt_other_grad" type="text" id="txtGOtherCourse" placeholder="Other" style="width:250px;height:20px;"/></td>
<td><input name="txt_insti_grad" type="text" id="txtGInstitute" placeholder="Institute" style="width:250px;height:20px;"/></td>
<td><select name="txt_yop_grad" id="ddlGYearOfPassing" style="width:250px;height:20px;">
     <option value="NULL">--Select--</option>
     <option value="2008">2008</option>
     <option value="2009">2009</option>
     <option value="2010">2010</option>
     <option value="2011">2011</option>
     <option value="2012">2012</option>
     <option value="2013">2013</option> 
     <option value="2014">2014</option>
     <option value="2015">2015</option>
     <option value="2016">2016</option>
     <option value="2017">2017</option>
     <option value="2018">2018</option></select></td>
</tr>
<tr class="center">
<td><label style="font-size:20px;font-family:Times Roman">Percentage*</label></td>
<td></td>
<td></td>
<td></td></tr>
<tr class="center"><td><input name="txt_per_grad" type="text" maxlength="5" id="txtGPercentage" placeholder="Percentage" style="width:250px;height:20px;"/></td>
<td></td>
<td></td>
<td></td></tr>
<tr class="center">
<td><span style="font-size:10px">(If course not completed then put aggregate % till date)</span>
</td>
<td></td>
<td></td>
<td></td></tr>
 
</table><br />

<h2><u>Post Graduation (If Applicable)<span style="color:chocolate;font-family:Garamond;"></u></span></h2>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr class="center"><td><label style="font-size:20px;font-family:Times Roman">Course*</label></td>
<td><label style="font-size:20px;font-family:Times Roman">Others (if not in list)</label></td>
<td><label  style="font-size:20px;font-family:Times Roman">Institute*</label></td>
<td><label  style="font-size:20px;font-family:Times Roman">Year of Passing*</label></td></tr>
<tr class="center"><td><select name="txt_course_post" id="ddlPGCourse" style="width:250px;height:20px;">
	                <option value="NULL">--Select--</option>
	                <option value="Master of Computer Applications. (MCA)">Master of Computer Applications. (MCA)</option>
	                <option value="Master of Business Administration (MBA)">Master of Business Administration (MBA)</option>
	                <option value="Other">Other</option>

</select>
</td>
<td><input name="txt_other_post" type="text" id="txtPGOtherCourse" placeholder="Other" style="width:250px;height:20px;"/>
</td>
<td><input name="txt_insti_post" type="text" id="txtPGInstitute" style="width:250px;height:20px;"/></td>
<td> <select name="txt_yop_post" id="ddlPGYearOfPassing" style="width:250px;height:20px;">
	            <option value="NULL">--Select--</option>
                <option value="2008">2008</option>
	            <option value="2009">2009</option>
	            <option value="2010">2010</option>
	            <option value="2011">2011</option>
	            <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
	            <option value="2015">2015</option>
	            <option value="2016">2016</option>
	<option value="2017">2017</option>
	<option value="2018">2018</option>

</select></td></tr>
<tr class="center"><td><label style="font-size:20px;font-family:Times Roman">Percentage*</label></td>
<td></td>
<td></td>
<td></td></tr>
        
<tr class="center"><td><input name="txt_per_post" type="text" maxlength="5" id="txtPGPercentage" placeholder="Percentage" style="width:250px;height:20px;"/></td>
<td></td>
<td></td>
<td></td></tr>
<tr class="center"><td><span style="font-size:10px">(If course not completed then put aggregate % till date)</span>
</td>
<td></td>
<td></td>
<td></td></tr>
</table><br />
<h2><u>Experience (if any)<span style="color:chocolate;font-family:Garamond;"></u></span></h2>
     <table border="0" cellpadding="0" cellspacing="0" width="100%";>
        <tr class="center">
            <td rowspan="2"><label style="font-size:20px;font-family:Times Roman">Experience</label></td>
            <td><label id="Label1"  style="font-size:20px;font-family:Times Roman">Years*</label></td>
            <td><label id="Label2" style="font-size:20px;font-family:Times Roman">Months*</label></td>
            <td></td></tr>
        <tr class="center">
        <td><select name="txt_exp" id="ddlExperienceYear" style="width:250px;height:20px;">
	        <option value="0">0</option>
	        <option value="1">1</option>
	        <option value="2">2</option>
	        <option value="3">3</option>
	        <option value="4">4</option>
	        <option value="5">5</option>
	        <option value="6">6</option>
	        <option value="7">7</option>
	        <option value="8">8</option>
	        <option value="9">9</option>
	        <option value="10">10</option>
	        <option value="11">11</option>
	        <option value="12">12</option>
	        <option value="13">13</option>
	        <option value="14">14</option>
	        <option value="15">15</option>

</select></td>
<td> <select name="months" id="ddlExperienceMonths" style="width:250px;height:20px;">
	                        <option value="0">0</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4</option>
	                        <option value="5">5</option>
	                        <option value="6">6</option>
	                        <option value="7">7</option>
	                        <option value="8">8</option>
                            <option value="9">9</option>
	                        <option value="10">10</option>
	                        <option value="11">11</option>
	                        <option value="12">12</option>

</select></td>
<td>&nbsp;</td>
</tr>
<tr><td></td>
<td></td>
<td></td>
<td></td></tr></table><br /><center>
<input type="submit" name="Submit" value="Submit" style="width:80px;height:40px;" /></td>
<input type="submit" name="Reset" value="reset" style="width:80px;height:40px;" /></td>
</center>
</form>
</div></div>

<br />

<div class="row">
<div class="col-md-12">
<?php include "Footer.php" ?>
 
      </div> </div>
      </div></div>
</body>
</html>