<?php

   
   $name= $_POST['name'];
   $Subject = $_POST['Subject'];
   $mailFrom = $_POST['Email'];
   $Message = $_POST['Message'];

   $mailTo = "nikolopoulosvangelis@gmail.com";
   $headers = "From: ".$mailFrom;
   $txt = "You have received an e-mail from ".$Name.".\n\n".$Message;

   mail($mailTo,$Subject,$text,$headers);
   header("Location: index.html?mailsend")
}
?>