<?php
include  "phpCode.php";
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
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container text-light">
                <a href="#" class="navbar-brand m-auto fs-3">Secret Diary</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <form class="d-md-flex ms-auto" action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
                        <input class="form-control me-2 my-1" type="email" placeholder="Email" aria-label="Search" name='loginemail' value=
                        "<?php
                        if(isset($_POST['loginemail']))
                        {
                            echo addslashes($_POST['loginemail']);
                        }
                        ?>" >
                        <input class="form-control me-2 my-1" type="password" placeholder="Password" aria-label="Search"name='loginpassword' value=
                        "<?php
                        if(isset($_POST['loginpassword']))
                        {
                            echo addslashes($_POST['loginpassword']);
                        }
                        ?>">
                        <button class="btn btn-outline-success my-1" type="submit" name='submit' value='log in'>Log&nbsp;In</button>
                      </form>
                </div>
            </div>
        </nav>
    </div>
    <section class="py-5 bg-dark d-flex text-light align-items-center justify-content-center" >
        <div class="container w-50">
            <form class="text-center" action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
                <div class="container pb-5" style="margin-top: 0;" >
                    <h1>Secret Diary</h1>
                    <p class="pb-1 fs-4">Your own private with you wherever you go.</p>
                    <p class="fs-6 fw-bold">interested? Sign up now!</p>
                </div>
                <?php
                if(isset($error) AND strlen($error))
                {
                ?>
                <div class="container">
                    <div class="alert alert-danger" role="alert">
                        <?php
                        echo "there were error/s :".$error
                         ?>
                    </div>
                </div>
                 <?php
                }
                ?>
                <?php
                if(isset($logout) AND strlen($logout))
                {
                ?>
                <div class="container">
                    <div class="alert alert-success" role="alert">
                        <?php
                        echo $logout;
                        $logout="";
                        $_GET['logout']=0;
                         ?>
                    </div>
                </div>
                 <?php
                }
                ?>
                <div class="mb-3">
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Email" aria-describedby="emailHelp"
                  name='email' value=
                    "<?php  if(isset($_POST['email']))
                            {
                                echo addslashes($_POST['email']);
                            }
                    ?>">
                  <div id="emailHelp" class="form-text d-flex">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <input type="password" placeholder="Your Password" class="form-control" id="exampleInputPassword1" name='password' value=
                    "<?php  if(isset($_POST['password']))
                            {
                                echo addslashes($_POST['password']);
                            }
                    ?>">
                </div>
                <button type="submit" class="btn btn-success mt-2" name='submit'  value='sign up'>Sign Up</button>
              </form>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center flex-row-reverse">
                <div class="col-md pb-3">
                    <img class="img-fluid" src="d1.svg" alt="">
                </div>
                <div class="col-md">
                    <h1>Learn Basics</h1>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio nostrum porro eaque eos illum dolorum neque accusantium commodi tempora? Temporibus id explicabo voluptate reprehenderit! Dolores eveniet molestias repellendus qui. Quasi.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus reprehenderit suscipit culpa quibusdam labore enim, iusto nostrum eos blanditiis soluta est ipsa libero fugit ab facere harum molestias? Necessitatibus, sint?
                    </p>
                </div>
            </div>
        </div>    
    </section>

    <footer class="p-3 text-center bg-dark text-light">
        <div class="container">
            <p class="fs-6 mb-1">
                Copyrights &copy; 2021 Adham Ali
            </p>
            <a href="#" class="fs-5 upbutton">
                <i class="bi bi-arrow-up-circle"></i>
            </a>
        </div>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>