<?php
include  "phpCode.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<title>Secret Diary</title>
<style>
</style>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
       <input type='text' name='email' value=
       "<?php
            if(isset($_POST['email']))
            {
                echo addslashes($_POST['email']);
            }
        ?>"/>
       <input type='password' name='password' value=
       "<?php
            if(isset($_POST['password']))
            {
                echo addslashes($_POST['password']);
            }
        ?>"/>
       <input type='submit' name='submit'  value='sign up'/>
   </form>

   <!----------------------------------------------------------------- -->
   
   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
       <input type='text' name='loginemail' value=
       "<?php
            if(isset($_POST['loginemail']))
            {
                echo addslashes($_POST['loginemail']);
            }
        ?>"/>
       <input type='password' name='loginpassword' value=
       "<?php
            if(isset($_POST['loginpassword']))
            {
                echo addslashes($_POST['loginpassword']);
            }
        ?>"/>
       <input type='submit' name='submit' value='log in'/>
   </form>
</body>
</html>