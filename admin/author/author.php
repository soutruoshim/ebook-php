<?php
   include("../inc/header.php");
    // include 'database.php';
    include(__DIR__ . "/../../config/database.php");
?>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-study icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Authors
                <div class="page-title-subheading">This is a page for management authors.
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a type="button" class="btn-shadow btn btn-info" href="../author/add_author.php" >
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
                <div class="main-card mb-3 card">
                 <div class="card-body"><h5 class="card-title"></h5>
                <div class="row">
                        <div class="col-md-12 p-3">
                            <table class="table" id = "tbl_author">
                                <thead>
                                    <tr>
                                        <th scope="col" width="15%">Id</th>
                                        <th scope="col" width="35%">Name</th>
                                        <th scope="col" width="35%">Slug</th>
                                        <th scope="col" width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                       
                                        $b = new database();
                                        $b->select("authors","*");
                                        $result = $b->sql;
                                    ?>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['slug']; ?></td>
                                            <td>
                                                <form method="POST" action="queries/delete_author.php">
                                                    <a href="edit_author.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary btn-sm">Edit</a>
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
                </div>
            </div>

<?php
   include("../inc/footer.php");
?>
<script>
    $(document).ready(function() {
       $('#tbl_author').DataTable();
    } );
</script>       
