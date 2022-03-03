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
            <div>Ebook
                <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            
            <div class="d-inline-block dropdown">
                <a type="button" class="btn-shadow btn btn-info" href="../admin/add_ebook.php" >
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-plus fa-w-20"></i>
                    </span>
                    Add
                </a>
                
            </div>
        </div>    
    </div>
</div>

            <div class="content-wrap">
                <div class="container-fluid">
                <div class="row">
                        <div class="col-md-12 p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col" width="5%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        // include 'database.php';
                                        include(__DIR__ . "/../config/database.php");
                                        $b = new database();
                                        $b->select("categories","*");
                                        $result = $b->sql;
                                    ?>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['slug']; ?></td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary btn-sm">Edit</a>
                                            </td>
                                            <td>
                                                <form method="POST" action="queries/delete_category.php">
                                                    <input name="id" type="hidden" value="<?php echo $row['id']; ?>">
                                                    <input type="submit" class="btn btn-danger btn-sm" name="submit" value="Delete">
                                                </form>
                                        
                                            </td>
                                        </tr>
                                    <?php } ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

<?php
   include("inc/footer.php");
?>
                   
