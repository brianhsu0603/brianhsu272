<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">


  
  <head>

    <title>Veryfying a username and a password.</title>

 
    </head> 
   <body>
   <?php
        include 'nav.php';
       ?>
 

    <h1>Login</h1>
    <body>
     
 
    <p>
        Type in your username and password below.
        <br />
        
    </p>
    <form action = "password.php" method = "post">
        <br />

        <table border = "0" cellspacing = "0"
           style = "height: 90px; width: 123px;
           font-size: 10pt" cellpadding = "0">

           <tr>
              <td colspan = "3">
                  <strong>Username:</strong>
              </td>
           </tr>

           <tr>
              <td colspan = "3">
                  <input size = "40" name = "USERNAME"
                    style = "height: 22px; width: 115px" />
                </td>
           </tr>

           <tr>
              <td colspan = "3">
                  <strong>Password:</strong>
                  </td>
           </tr>

           <tr>
               <td colspan = "3">
                   <input size = "40" name = "PASSWORD"
                      style = "height:22px; width: 115px"
                      type = "password" />
               <br/></td>
           </tr>

           <tr>
              <td colspan = "1">
                  <input type = "submit" name = "Enter"
                     value = "Enter" style = "height: 23px; width: 47px" />
              </td>
          
              </tr>
        </table>
    </form>
    </body>
</html>


