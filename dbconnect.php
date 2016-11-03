<?php
$conn = mysql_connect("localhost","Jpmbuchanan","");
mysql_select_db("c9"); 
session_start();

if (false===$conn){
    die("Connection failed");
}

else {
    echo 'database Connected';

}
?>