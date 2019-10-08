<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
    <?php
    
   
         
    
     
    
       extract ($_POST);

       if (!$USERNAME || !$PASSWORD){
           fieldsBlank();
           die();
       }

       if (isset($NewUser)){

         if(!($file = fopen("password.txt","a"))){
             print("<title>Error</title></head><body>
             Could not open password file</body></html>");
             die();
         }
       fputs( $file, "$USERNAME,$PASSWORD\n");
       userAdded($USERNAME);
        }
       else{
          if(!($file = fopen("password.txt","r"))){
              print("<title>Error</title></head><body>Could not open password file</body></html>");
              die();
          }
          $userVerified = 0;

          while(!feof($file) && !$userVerified){
              $line = fgets($file, 255);
              $line = chop($line);
              $feild = explode(",",$line,2);

              if($USERNAME == $field[0]){
                  $userVerified = 1;

                  if(checkPassword($PASSWORD, $field) == true)
                  accessGranted($USERNAME);
                  else
                    worngPassword();
              }
          }

          fclose($file);

          if(!$userVerified)
            accessDenied();
      } 
    
      function checkPassword($userpassword, $filedata)
      {
          if ($userpassword == $filedata[1])
           return true;
          else  
           return false;
      }

      function userAdded($name)
      {
          print("<title>Thank You</title></head>
          <body style = \"font-family:arial;font-size: 1em; color: blue\">
          <strong>You have been added to the user list, $name.<br />Enjoy the site. </strong>");
      }
      
      function accessGranted($name)
      {
        print("<title>Thank You</title></head>
        <body style = \"font-family:arial;
        font-size: 1em; color: blue\">
        <strong>Permission has been granted, $name.
        <br />Enjoy the site. </strong>");
      }

      function wrongPassword()
      {
          print("<title>Access Denied</title></head>
          <body style = \"font-family: arial;
          font-size: 1em; color: red\">
          <strong>You entered an invalid password.
          <br />Access has been denied.</strong>");
         }

         function accessDenied()
         {
             print("<title>Access Denied</title></head>
             <body style = \"font-family: arial;
             font-size: 1em; color: red\">
             <strong>
             You were denied access to this server.
             <br /></strong>");
            }

            function fieldsBlank()
            {
                print("<title>Access Denied</title></head>
                <body style = \"font-family: arial;
                font-size: 1em; color: red\">
                <strong>
                Please fill in all form fields.
                <br /></strong>");
               }

    



      ?>
      </body>
      </html>
