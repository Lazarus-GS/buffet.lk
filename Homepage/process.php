<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['Name'];
       $Email = $_POST['Email'];
       $mob = $_POST['Phone'];
       $Msg = $_POST['Message'];

       if(empty($UserName) || empty($Email) ||  empty($mob) ||  empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "info.buffet.lk@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>