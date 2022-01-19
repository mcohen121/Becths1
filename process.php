<?php
    
   $vemail=$_POST["email"];
   $vpassword=$_POST["password"];
   $vpassword = MD5($_POST['password']);
   
   

   echo "email: ".$vemail."<br> password :" .$vpassword;
?>