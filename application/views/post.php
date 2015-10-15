<style type="text/css">
    .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>
<div class="container">
    
    <h1 class="page-header ">Add New Post</h1>
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-5">
            <form role="form">
                <div class="form-group">
                    <label for="Post Title">Post Title</label>
                    <input class="form-control" type="text" name="posttitle" value="">
                </div>
                 <div class="form-group">
                    <label for="Post Title">Featured Image</label>
                    <input class="" name="image" type="file" value="">
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>