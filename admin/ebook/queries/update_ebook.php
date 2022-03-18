<?php 
    include(__DIR__ . "/../../../config/database.php");
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $data = [];
        $data['title'] =  $_POST['title'];
        $data['author_id'] =  $_POST['author_id'];
        $data['ISBN'] =  $_POST['ISBN'];
        $data['category_id'] =  $_POST['category_id'];
        $data['publisher_id'] =  $_POST['publisher_id'];
        $data['publish_year'] =  $_POST['publication_year'];
        $data['detail'] =  $_POST['detail'];
        $data['price'] =  $_POST['price'];
        $data['page'] =  $_POST['page'];

        //==============image======================
        $inv_dir = 'images/ebook';
        if (!is_dir(__DIR__ . '/../../../' . $inv_dir)) {
            mkdir(__DIR__ . '/../../../' . $inv_dir);
        }
        //=======================upload image================================
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK){
                // get details of the uploaded file
                $fileTmpPath = $_FILES['image']['tmp_name'];
                $fileName = $_FILES['image']['name'];
                $fileSize = $_FILES['image']['size'];
                $fileType = $_FILES['image']['type'];
                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));
            
                // sanitize file-name
                $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            
                // check if file has one of the following extensions
                $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc','pdf');
            
                if (in_array($fileExtension, $allowedfileExtensions))
                {
                // directory in which the uploaded file will be moved
                    $uploadFileDir = __DIR__ . '/../../../' . $inv_dir.'/';
                    $dest_path = $uploadFileDir . $newFileName;
            
                    if(move_uploaded_file($fileTmpPath, $dest_path)) 
                    {
                        $message ='File is successfully uploaded.';
                        $data['image'] =  $newFileName;
                    }else{
                        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                    }
                }
        }
         //==============file======================
         $inv_dir = 'files/ebook';
         if (!is_dir(__DIR__ . '/../../../' . $inv_dir)) {
             mkdir(__DIR__ . '/../../../' . $inv_dir);
         }
         //=======================upload ebook================================
         if (isset($_FILES['book_file']) && $_FILES['book_file']['error'] === UPLOAD_ERR_OK){
            // get details of the uploaded file
            $fileTmpPath = $_FILES['book_file']['tmp_name'];
            $fileName = $_FILES['book_file']['name'];
            $fileSize = $_FILES['book_file']['size'];
            $fileType = $_FILES['book_file']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
        
            // sanitize file-name
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        
            // check if file has one of the following extensions
            $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc','pdf');
        
            if (in_array($fileExtension, $allowedfileExtensions))
            {
            // directory in which the uploaded file will be moved
                $uploadFileDir = __DIR__ . '/../../../' . $inv_dir.'/';
                $dest_path = $uploadFileDir . $newFileName;
        
                if(move_uploaded_file($fileTmpPath, $dest_path)) 
                {
                    $message ='File is successfully uploaded.';
                    $data['book_file'] =  $newFileName;
                }else{
                    $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                }
            }
        }
        
        $a = new database(); 
        $a->update('books',$data, "id='$id'");
        if ($a == true) {
            header('location:../ebook.php');
        }
    }
?>