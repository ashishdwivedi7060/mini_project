
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title></title>
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
            <tr><td width="33%" style="background-color:darkgrey;" rowspan="6"><h2><center>MENU</center></h2></td>
                <td width="67%">
                <table><tr>
                <td class="right" style="font-size:20px;font-family:times roman;" width="50%"><u>Student Dashboard</u></td>
                <td></td>
                </tr></table>
                </td></tr>
           
            <tr><td width="67%">
                <table><tr>
                <td></td>
                <td></td>
                </tr></table>
                </td></tr>
            
            <tr><td width="67%">
                <table><tr>
                <td class="center"><a href="uservacancies.php" class="center"><u>User Vacancies</u></a></td>
                <td></td>
                </tr></table>
                </td></tr>
            
            <tr><td width="67%" ></td>
                </tr>
            <tr><td width="67%" >
                </td></tr>
                
            <tr><td width="67%" ></td>
                </tr>
                
            <tr><td width="33%" style="background-color:darkgrey;font-size:20px;font-family:times roman;" rowspan="3" class="center"><h3><u>Vacancies</u></h3></td>
                <td width="67%" class="center"><table><tr>
                <td></td>
                <td></td>
                </tr></table></td></tr>
           
            <tr><td width="67%"></td></tr>
                
            
            <tr><td width="67%"></td>
                </tr>
            
            <tr><td width="33%" style="background-color:darkgrey;" rowspan="4" class="center"><h3><a href="Allcompanies.php" style="font-size:20px;font-family:times roman;"  class="btn-link"><u>All Companies</u></a></h3></td>
                <td width="67%" class="center"></td></tr>
           
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
            
            
            </table></center></form>
 <div class="center">