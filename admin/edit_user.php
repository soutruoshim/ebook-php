<?php
   include("inc/header.php");
   include(__DIR__ . "/../config/database.php");
   if(isset($_GET['id'])){
       $id = $_GET['id'];
      
       $b = new database();
       $b->select("users","*","id='$id'");
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
            <div>Add User
                <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            
            <div class="d-inline-block dropdown">
                <a type="button" class="btn-shadow btn btn-info" href="../admin/user.php" >
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
            <form method="POST" action="queries/update_user.php">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="position-relative form-group">
                    <label class="">First Name</label>
                    <input name="firstname" id="firstname" value="<?php if(isset($row)) { echo $row['firstname']; } ?>" placeholder="" type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label class="">Last Name</label>
                    <input name="lastname" id="lastname" value="<?php if(isset($row)) { echo $row['lastname']; } ?>" placeholder="" type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label class="">Email</label>
                    <input name="email" id="email" value="<?php if(isset($row)) { echo $row['email']; } ?>" placeholder="" type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label class="">Password</label>
                    <input name="password" id="password" value="<?php if(isset($row)) { echo $row['password']; } ?>" placeholder="" type="password" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label class="">Confirm Password</label>
                    <input name="c_password" id="c_password" value="<?php if(isset($row)) { echo $row['password']; } ?>" placeholder="" type="password" class="form-control">
                </div>
                <input type="submit" class="btn btn-dark" name="submit" value="Save User">
            </form>
        </div>
        </div>
    </div>
</div>
<?php
   include("inc/footer.php");
?>
                   
