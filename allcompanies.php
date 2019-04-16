<?php
session_start();
$msg="";
if(isset($_REQUEST['search']))
{
    include 'blogic.php';
    $res=ExecuteQuery("select * from student_info where c_profile=$_REQUEST[txt_jobpro] ");
    if(mysql_affected_rows()>0) {
     $r=mysql_fetch_assoc($res);
     $_SESSION['uid']=$r['c_id'];
     $_SESSION['uname']=$r['c_name'];
     header("location:stulogin.php");   
    }else
    $msg="no record found";
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>All Companies</title>
    </head>
<body style="margin:0;">
 <div class="row">
 <div class="col-md-12">
           <?php include 'Header.php';?></div>
           <form>
           <div class="row">
           <div class="col-md-12">
            <center><h1 >Welcome <?php
                    if(isset($_SESSION['uname'])){
                        echo $_SESSION['uname']; 
                    }
                    else
                    echo "Guest";
                    ?></h1>
            <table cellpadding="0" cellspacing="0" >
            <tr><td width="33%" rolspan="6"></td>
                <td width="67%">
                <table><tr>
                 <td><u>All Companies</u><td> </td>
                </tr></table>
                </td></tr>
           
            <tr><td width="67%"></td>
            <td></td></tr>
                
            <tr><td width="67%"></td>
            <td ></td>
            </tr>
            
            <tr><td width="67%" ></td>
                </tr>
                
            <tr><td width="67%" >
                </td></tr>
                
            <tr><td width="67%" ></td>
                </tr>
                
            <tr><td width="33%" style="background-color:darkgrey;" rowspan="3" class="center"><h3><a href="vacancies.php" style="font-size:20px;font-family:times roman;"  class="btn-link"><u>Vacancies</u></a></h3></td>
                <td width="67%" class="center">
      
       </td></tr>
           
            <tr><td width="67%"></td></tr>
                
            
            <tr><td width="67%"></td>
                </tr>
            
            <tr><td width="33%" style="background-color:darkgrey;" rowspan="4" class="center"><h3><a href="allcompanies.php" style="font-size:20px;font-family:times roman;"  class="btn-link"><u>All Companies</u></a></h3></td>
                <td width="67%" class="center"> <?php
    if(isset($_REQUEST['search'])){
        include 'blogic.php';
    
       $h=@mysql_connect("localhost","root","");
       @mysql_select_db("cms");
       $res=ExecuteQuery("select * from comp_info ");
       if(mysql_affected_rows()>0)
       { echo "<table width='100%' border='2'>";
       echo "<tr><th>Company Name</th></tr>";
      while($row=mysql_fetch_array($res)){
       echo "<tr><td>$row[5]</td></tr>";       
         } 
         }
          else
           {
            echo "<h4>No record found!!!</h4><br/>";
            mysql_close();
            }
   
     } 
       
       
       ?></td></tr>
           
            <tr><td width="67%"></td>
                
            
            <tr><td width="67%"></td>
                
            
            <tr><td width="33%"></td>
                <td width="67%" class="center"></td></tr>
            
            <tr><td width="33%" style="background-color:darkgrey;" rowspan="4" class="center"><a href="stulogout.php" style="font-size:20px;font-family:times roman;"  class="btn btn-success" >Logout</a></td>
                <td width="67%" class="center"></td></tr>
             
           
             <tr><td width="33%"></td>
                <td width="67%" class="center"></td></tr>
              
            <tr><td width="33%"></td>
                <td width="67%" class="center"></td></tr>
                
            <tr><td width="33%"></td>
                <td width="67%" class="center"></td></tr>
            
            </table></center>
            
            </div>
            </div>
  
            </form>
   </div>
   <div class="row">
   <div class="col-md-12">
   <?php include 'Footer.php' ?></div></div>
            </body>
            </html>
