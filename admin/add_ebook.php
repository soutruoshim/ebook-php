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
    <div class="col-md-8">
        <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title"></h5>
        <form method="POST" action="queries/insert_ebook.php" enctype="multipart/form-data">
                        <div class="position-relative form-group">
                            <label class="">Title</label>
                            <input name="title" id="title" placeholder="" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Author</label>
                            <input name="author_id" id="author_id" placeholder="" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label class="">ISBN</label>
                            <input name="ISBN" id="ISBN" placeholder="" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Genre</label>
                            <input name="genre" id="genre" placeholder="" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Category</label>
                            <input name="category_id" id="category_id" placeholder="" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Publication Year</label>
                            <input name="publication_year" id="publication_year" placeholder="" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Price</label>
                            <input name="price" id="price" placeholder="" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Detail</label>
                            <input name="detail" id="detail" placeholder="" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Image</label><br>
                            <div style="margin-bottom: 8px"><img id="book_photo" src="{{ asset('assets/images/avatars/empty_image.jpg')}}" width="180" height="200" alt=""></div>
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
                   
