<?php
session_start();
include "connect.php";
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $query="update users set diary='".$_POST['diary']."' where id=".$_SESSION['id']." limit 1";
    mysqli_query($link,$query);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
         footer
        {
            position :relative !important; 
        }
        .upbutton{
            position :absolute;
            right: 10px;
            top: 10px;
            height: 0;
            color:#1B8554;
        }
        .upbutton:hover
        {
            color:#1B8554;
        }
    </style>
</head>
<body>
<div class="fluid">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
            <a href="#" class="navbar-brand me-5 fs-3">Secret Diary</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="FinalApp.php?logout=1" class="nav-link">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section class="bg-dark text-light pt-5">
        <div class="container  d-flex  align-items-center justify-content-center">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST' class="w-100 text-center">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="20"  name='diary'><?php
    $query="select * from users where id=".$_SESSION['id'];
    $arr=mysqli_fetch_array(mysqli_query($link,$query));
    echo $arr['diary'];
     ?></textarea>
            <button class="btn btn-outline-success mt-3" type="submit" name='submit' value='update'>Update</button>
        </form>
        </div>
    </section>

    <footer class="p-3 text-center bg-dark text-light">
        <div class="container">
            <p class="fs-6 mb-1">
                Copyrights &copy; 2021 Adham Ali
            </p>
            <a href="#" class="fs-5 upbutton">
            <i class="bi bi-arrow-counterclockwise"></i>
            </a>
        </div>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>