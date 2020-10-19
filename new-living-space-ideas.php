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
                                    <form action="">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Main Category</label>
                                                    <select class="form-control select2">
                                                        <option selected disabled="disabled">Select Main Category</option>
                                                        <option value="Bedroom">Bedroom</option>
                                                        <option value="Living room">Living room</option>
                                                        <option value="Kitchen">Kitchen</option>
                                                        <option value="Living room">Living room</option>
                                                        <option value="Dining room">Dining room</option>
                                                        <option value="Kids room">Kids room</option>
                                                        <option value="Mandhir room">Bathroom cabinets</option>
                                                        <option value="Offices">Offices</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>Sub Category</label>
                                                        <select class="form-control select2">
                                                            <option selected disabled="disabled">Select Sub Category</option>
                                                            <option value="Bed">Bed</option>
                                                            <option value="Wardrobe">Wardrobe</option>
                                                            <option value="Consoles">Consoles</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                   <label>Product Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Product Name">
                                                </div>
                                            </div>
                
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Upload Catalogue</label>
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 col-sm-6 col-md-12">
                                                <div class="form-group">
                                                    <label>Product Description</label>
                                                    <textarea class="form-control" rows="5" placeholder="Product Description"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-12">
                                                <div class="form-group">
                                                    <label>Upload Product Image</label>
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 col-sm-6 col-md-2">
                                                <input type="submit" class="btn btn-success" value="Add Product">
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

    </script>

</body>

</html>
