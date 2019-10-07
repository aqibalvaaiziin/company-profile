<div class="cc">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Form Tambah Data Blog</h2>
                    </div>
                    <div class="card-body">
                    <?php echo form_open_multipart('admin/blog/tambah');?>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <input type="text" class="form-control" id="desc" name="desc">
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" class="form-control" id="author" name="author">
                        </div>
                        <div class="form-group">
                            <label for="view">View</label>
                            <input type="number" class="form-control" id="view" name="view">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="profile_image" name="profile_image" size="33" />
                        </div>
                        <input type="submit" value="Upload Image" class="btn btn-success float-right">
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>