<?php
   include("inc/header.php");
?>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Add Category
                <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            
            <div class="d-inline-block dropdown">
                <a type="button" class="btn-shadow btn btn-info" href="../admin/category.php" >
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
            <form method="POST" action="queries/insert_category.php">
                <div class="position-relative form-group">
                    <label class="">Category Name</label>
                    <input name="name" id="name" placeholder="" type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label class="">Slug</label>
                    <input name="slug" id="slug" placeholder="" type="text" class="form-control">
                </div>
                <input type="submit" class="btn btn-dark" name="submit" value="Save Category">
            </form>
        </div>
        </div>
    </div>
</div>
<?php
   include("inc/footer.php");
?>
                   
