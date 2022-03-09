<?php
   include("inc/header.php");
   include(__DIR__ . "/../config/database.php");
   if(isset($_GET['id'])){
       $id = $_GET['id'];
      
       $b = new database();
       $b->select("books","*","id='$id'");
       $result = $b->sql;

       $row = mysqli_fetch_assoc($result);
   }
?>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Add Ebook
                <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            
            <div class="d-inline-block dropdown">
                <a type="button" class="btn-shadow btn btn-info" href="../admin/ebook.php" >
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-reply fa-w-20"></i>
                    </span>
                    Back
                </a>
                
            </div>
        </div>    
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title"></h5>
        <form method="POST" action="queries/update_ebook.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label class="">Title</label>
                        <input name="title" id="title" value="<?php if(isset($row)) { echo $row['title']; } ?>" placeholder="" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label class="">Author</label>
                        <input name="author" id="author" value="<?php if(isset($row)) { echo $row['author']; } ?>" placeholder="" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label class="">ISBN</label>
                        <input name="ISBN" id="ISBN" value="<?php if(isset($row)) { echo $row['ISBN']; } ?>" placeholder="" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label class="">Category</label>
                        <?php 
                           
                            $b = new database();
                            $b->select("categories","*");
                            $result = $b->sql;
                        ?>
                        <select class="form-control" name="category_id" id="category_id">
                            <option value="" selected disabled>Choice Category</option>
                        <?php while ($row_category = mysqli_fetch_assoc($result)) { ?>
                        <option <?= $row_category['id']==$row['category_id']?'selected':''  ?> value="<?= $row_category['id'] ?>"> <?= $row_category['name'] ?> </option>
                        <?php } ?>

                        </select>
                   </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                        <div class="position-relative form-group">
                        <label class="">Publication Year</label>
                        <!-- <input name="publication_year" id="publication_year" placeholder="" type="text" class="form-control"> -->
                        <select class="form-control" name="publication_year" id="publication_year">
                            <option value="" selected disabled>Select Year</option>
                        <?php for($year = intval(date('Y')) - 10;  $year <= intval(date('Y')); $year++ ) { ?>
                        <option  <?= $year==$row['publication_year']?'selected':''  ?> value="<?= $year ?>"> <?= $year ?> </option>
                        <?php } ?>

                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                    <label class="">Price</label>
                    <input name="price" id="price" placeholder="" value="<?php if(isset($row)) { echo $row['price']; } ?>" type="text" class="form-control">
                </div>
                </div>
            </div>
            
            
            
            <div class="position-relative form-group">
                <label class="">Detail</label>
                <textarea rows="5" cols="20" name="detail" id="detail" placeholder="" type="text" class="form-control"><?php if(isset($row)) { echo $row['detail']; } ?></textarea>
                
            </div>
            <div class="position-relative form-group">
                <label class="">Image</label><br>
                <div style="margin-bottom: 8px"><img id="book_photo" src="<?php if(isset($row)) { echo WEB_URL.'/images/ebook/'.$row['image']; } ?>" width="180" height="200" alt=""></div>
                <input type="file" name="image" placeholder="Choose image" id="image" class="form-control" onchange="document.getElementById('book_photo').src = window.URL.createObjectURL(this.files[0])">
            </div>
            <div class="position-relative form-group">
                <label class="">Book File</label>
                <input type="file" name="book_file" placeholder="Choose Book File" id="book_file" class="form-control">
            </div>
            <input type="submit" class="btn btn-dark" name="submit" value="Save Ebook">
           </form>
        </div>
        </div>
    </div>
</div>
<?php
   include("inc/footer.php");
?>
                   
