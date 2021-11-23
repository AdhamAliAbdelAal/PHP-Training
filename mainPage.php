<?php
session_start();
include "connect.php";
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $query="update users set diary='".$_POST['diary']."' where id=".$_SESSION['id']." limit 1";
    mysqli_query($link,$query);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<title>Main Page (Secret Diary)</title>
<style>
    textarea
    {
        width:500px;
        height:500px;
        margin:20px;
    }
</style>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
<a href="secret_diary.php?logout=1">log out</a>
    <br />
    <textarea name='diary'><?php
    $query="select * from users where id=".$_SESSION['id'];
    $arr=mysqli_fetch_array(mysqli_query($link,$query));
    echo $arr['diary'];
     ?></textarea>
    <input type='submit' name='submit' value='update'/>
</form>
    
</body>
</html>