<?php 
    include(__DIR__ . "/../../../config/database.php");
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        
        $a = new database();
        $data = [];
        
        $data['title'] =  $_POST['title'];
        $data['status'] =  $_POST['status'];
    
        //==============image======================
        $inv_dir = 'images/slide';
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
        
        $a->update('slides',$data, "id='$id'"); 
        if ($a == true) {
            header('location:../slide.php');
        }
    }
?>