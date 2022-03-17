<?php
   include("../inc/header.php");
   include(__DIR__ . "/../../config/database.php");
   if(isset($_GET['id'])){
       $id = $_GET['id'];
      
       $b = new database();
       $b->select("publishers","*","id='$id'");
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
            <div>Edit Publisher
                <div class="page-title-subheading">This is a page you can edit publisher.
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            
            <div class="d-inline-block dropdown">
                <a type="button" class="btn-shadow btn btn-info" href="../publisher/publisher.php" >
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
    <div class="col-md-8">
        <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title"></h5>
            <form method="POST" action="queries/update_publisher.php">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="position-relative form-group">
                    <label class="">Publisher Name</label>
                    <input name="name" id="name" value="<?php if(isset($row)) { echo $row['name']; } ?>" placeholder="" type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label class="">Slug</label>
                    <input name="slug" id="slug" value="<?php if(isset($row)) { echo $row['slug']; } ?>" placeholder="" type="text" class="form-control">
                </div>
                <input type="submit" class="btn btn-dark" name="submit" value="Save Publisher">
            </form>
        </div>
        </div>
    </div>
</div>
<?php
   include("../inc/footer.php");
?>
                   
