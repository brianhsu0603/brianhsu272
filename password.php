<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitionnal//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
<body>
    <?php
         
    
      function checkPassword($userpassword, $filedata)
      {
          if ($userpassword == $filedata[1])
           return true;
          else  
           return false;
      }

      function userAdded($name)
      {
          echo("<head><title>Thank You</title></head>
          <body style = \"font-family:arial;font-size: 1em; color: blue\">
          <strong>You have been added to the user list, $name.<br />Enjoy the site. </strong>");
      }
      
      function accessGranted($name)
      {
        echo("<head><title>Thank You</title></head>
        <body style = \"font-family:arial;
        font-size: 1em; color: blue\">
        <strong>Permission has been granted, $name.
        <br />Enjoy the site. </strong>");
      }

      function wrongPassword()
      {
          echo("<head><title>Access Denied</title></head>
          <body style = \"font-family: arial;
          font-size: 1em; color: red\">
          <strong>You entered an invalid password.
          <br />Access has been denied.</strong>");
         }

         function accessDenied()
         {
             echo("<head><title>Access Denied</title></head>
             <body style = \"font-family: arial;
             font-size: 1em; color: red\">
             <strong>
             You were denied access to this server.
             <br /></strong>");
            }

            function fieldsBlank()
            {
                echo("<head><title>Access Denied</title></head>
                <body style = \"font-family: arial;
                font-size: 1em; color: red\">
                <strong>
                Please fill in all form fields.
                <br /></strong>");
               }
    
       extract ($_POST);

       if (!$USERNAME || $PASSWORD){
           fireldsBlank();
           die();
       }

       if (isset($NewUser)){

         if(!($file = fopen("password.txt","a"))){
             echo("<head><title>Error</title></head><body>
             Could not open password file</body>");
             die();
         }
       fputs( $file, "$USERNAME,$PASSWORD\n");
       userAdded($USERNAME);
        }
      else{
          if(!($file = fopen("password.txt","r"))){
              echo("<head><title>Error</title></head><body>Could not open password file</body>");
              die();
          }
          $userVerified = 0;

          while(!feof($file)&& !userVerified){
              $line = fgets($file, 255);
              $line = chop($line);
              $feild = split(",",$line,2);

              if($USERNAME == $field[0]){
                  $userVerified = 1;

                  if(checkPassword($PASSWORD, $field) == true)
                  accessGranted($USERNAME);
                  else
                    worngPassword();
              }
          }

          fclose($file);

          if(!$userVerfied)
            acessDenied();
      } 

    



      ?>
      </body>
      </html>
