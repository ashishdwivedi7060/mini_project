<?php
include 'db.php';
$h="";
function OpenConnection()
{
    global $h;
    $h=@mysql_connect(HOST,USERNAME,PASSWORD);
    @mysql_select_db(DATABASE);
}
function CloseConnection()
{    global $h;
    mysql_close($h);
}
function ExecuteNonQuery($qry)  //insert,update and delete
{
    OpenConnection();
    mysql_query($qry);
}
function ExecuteQuery($qry)  //select
{
    OpenConnection();
   $res=mysql_query($qry);
   return $res;
}
?>