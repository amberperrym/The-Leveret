<?php
require 'database/db_login.php'; //load credentials 

$val = mysqli_query('select 1 from `Comments Section`');

if($val !== FALSE)
{
   print("Exists");
}else{
   print("Doesn't exist");
}
?>