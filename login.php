<?php
// session_start();
//     if (!isset($_SESSION['id']) && !isset($_SESSION['email'])) {
//          header("Location: admin/index.php");
//     }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="main.css" rel="stylesheet">
    <style>
      .container {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%); /* for IE 9 */
        -webkit-transform: translate(-50%, -50%); /* for Safari */
        }
        .card{
            max-width: 600px;
            margin: 0 auto;
        }
        </style>
</head>
<body>
    <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align:center">
                    <img src="images/logo.png" height="50">
                </div>
                <div class="col-md-12" style="text-align:center">
                    <i>Library. The world's largest ebook library</i>
                </div>
            </div><br><br>
        <div class="row">
            <div class="col-md-12">
            <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Login</h5>
                <form class="" method="POST" action="config/login.php">
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="with a placeholder" type="email" class="form-control"></div>
                    </div>
                    <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10"><input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control"></div>
                    </div>
    
                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2">
                            <input type="submit" value="Login" class="btn btn-primary"/>
                           
                        </div>
                    </div>
                </form>
            </div>
        </div>
       </div>
        </div>  
       
                            
        <div style=" padding: 20px">
            <div class="row">
                <div class="col-md-12" style="text-align:center">
                        <i>Copyright 2022 SOUTRUOSHIM All right reversed.</i>
                </div>
            </div>
                
        </div>
    </div>
</body>
</html>              
