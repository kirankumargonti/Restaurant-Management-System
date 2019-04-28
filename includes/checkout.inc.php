<?php
if (isset($_POST['checkout-submit'])) {
   require 'dbh.inc.php';
   
$sql=mysql_query("SELECT FROM users (emailUsers, pwdUsers) WHERE emailUsers=$emailUsers");
 if(mysql_num_rows($sql)>=1)
   {
    echo"name already exists";
   }
 else
    {
   echo"name does not exists";
    }
}