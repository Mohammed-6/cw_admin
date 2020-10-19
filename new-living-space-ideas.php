<?php
include_once('includes/config.php');
if(isset($_POST['submit'])) {
    $category = $_POST['category'];
    $sub_category = $_POST['sub_category'];
    $product_name = $_POST['product_name'];
    $catalogue = '';
    $description = $_POST['description'];
    $product_image = '';

    if(!empty($_FILES['catalogue']['name'])) {
        $catalogue = $_FILES['catalogue']['name'];
        move_uploaded_file($_FILES['catalogue']['tmp_name'], 'images/'.$catalogue);
    }
    if(!empty($_FILES['product_image']['name'])) {
        $product_image = $_FILES['product_image']['name'];
        move_uploaded_file($_FILES['product_image']['tmp_name'], 'images/'.$product_image);
    }
    $sql = mysqli_query($link, "INSERT INTO `living_space`(`id`, `category`, `sub_category`, `title`, `catalogue`, `description`, `image`) VALUES 
    ('','$category','$sub_category','$product_name','$catalogue','$description','$product_image')");
    header("Location:living-space-ideas.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chisel & Wood | Products</title>
    <?php include("includes/css.php")?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include("includes/header.php")?>
        <?php include("includes/sidebar.php")?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Products Sub Category</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                                <li class="breadcrumb-item active">Product Sub Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-12">
                            <div class="card card-default">
                                <div class="card-body">
                                    <?php
                                        $query = "select * from idea_cat";
                                        $result = mysqli_query($link, $query);
                                    ?>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Main Category</label>
                                                    <select class="form-control select2 category" name="category">
                                                        <option selected disabled="disabled">Select Main Category
                                                        </option>
                                                        <?php $n = 1;
                                                while ($rows = mysqli_fetch_array($result)) {
                                            ?>
                                                        <option value="<?php echo $rows['cat_id']; ?>">
                                                            <?php echo $rows['title']; ?></option>
                                                        <?php $n++;
                                                }
                                            ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>Sub Category</label>
                                                        <select class="form-control select2 sub-category"
                                                            name="sub_category">
                                                            <option selected disabled="disabled">Select Sub Category
                                                            </option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Product Name</label>
                                                    <input type="text" class="form-control" name="product_name"
                                                        placeholder="Enter Product Name">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Upload Catalogue</label>
                                                    <input type="file" class="form-control" name="catalogue">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-12">
                                                <div class="form-group">
                                                    <label>Product Description</label>
                                                    <textarea class="form-control" rows="5"
                                                        placeholder="Product Description" name="description"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-12">
                                                <div class="form-group">
                                                    <label>Upload Product Image</label>
                                                    <input type="file" class="form-control" name="product_image">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-2">
                                                <input type="submit" name="submit" class="btn btn-success"
                                                    value="Add Product">
                                            </div>
                                        </div>
                                    </form>

                                </div>


                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <?php include("includes/footer.php")?>
    </div>
    <?php include("includes/js.php")?>
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
    $(function() {
        $('.select2').select2()
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    })
    $('.category').change(function() {
        val_ = $(this).val();
        $.ajax({
            url: 'controller.php?get-subcategory=' + val_,
            type: 'get',
            cache: false,
            success: function(data) {
                $('.sub-category').html(data).show();
            }
        })
    })
    </script>

</body>

</html>