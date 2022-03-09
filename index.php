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
     .hoverdiv{
        position: relative;
        display: block;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.8);
        color: #fff;
        opacity:0 ;
        transition: all 0.3s ease-in-out;
        box-sizing: border-box;
        text-align: center;
     }
     .container-book:hover .hoverdiv{
         opacity: 1;
     }
     .div_text{
            position: absolute;
            top: 60%;
            left: 50%;
            margin-top: -50px;
            margin-left: -50px;
            width: 100px;
            height: 100px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div style="background-color: gainsboro; padding: 0px 20px 20px 20px; border-radius: 6px">
            <div class="row">
                <div class="col-md-10" style="text-align:center">
                    <img src="images/logo.png" height="70">
                </div>
                <div class="col-md-2" style="text-align:right">
                    <a href="./login.php" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-primary">Administrator</a>
                </div>
                <div class="col-md-12" style="text-align:center">
                    <i>Norton University Library. The world's largest ebook library</i>
                </div>
            </div>
            
            <br>
        <div class="row">
            <div class="col-md-12">
                    <div class="input-group">
                            <input placeholder="Search for title, ISBN, Publisher..." type="text" class="form-control">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary">Search</button>
                            </div>
                    </div>
                </div>
            </div>
       </div>
        <br>
        <div class="row">
        <?php 
            // include 'database.php';
            include(__DIR__ . "/config/database.php");
        
            $b = new database();
            $b->select("books","*");
            $result = $b->sql;
            ?>
            <?php while ($row = mysqli_fetch_assoc($result)) {  ?>
                <div class="col-md-3" style="">
                    <div class="container-book" style="position: relative;
                            display:block;
                            width: 200px;
                            height: 260px;
                            background: #000;
                            background:url('<?= WEB_URL.'images/ebook/'.$row['image'] ?>') ;
                            background-repeat: no-repeat, repeat;
                            background-size: cover;
                            transition: all 0.3s ease-in-out;
                            ">
                         <div class="hoverdiv">
                             <div class="div_text">
                                <h6><?= $row['title'] ?></h6>
                                <a href="<?= WEB_URL.'files/ebook/'.$row['book_file'] ?>" class="btn btn-success">Download</a>
                             </div>
                         </div>
                    </div>
                
                </div>
            <?php }?>
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
