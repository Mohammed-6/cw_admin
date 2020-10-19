<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chisel & Wood | Living Space Ideas
</title>
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
                            <h1 class="m-0 text-dark">Living Space Ideas</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Living Space Ideas</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-9">
                            <div class="card card-default">
                                <div class="card-body">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-5">

                                                <select class="form-control select2">
                                                    <option selected disabled="disabled">Select Main Category</option>
                                                    <option value="Bed">Bed</option>
                                                    <option value="Wardrobe">Wardrobe</option>
                                                    <option value="Consoles">Consoles</option>
                                                    <option value="TV units">TV units</option>
                                                    <option value="Side tables">Side tables</option>
                                                    <option value="Dressing unit">Dressing unit</option>
                                                    <option value="L-Shape kitchen">L-Shape kitchen</option>
                                                    <option value="L-Shape kitchen">L-Shape kitchen</option>
                                                    <option value="U-Shape kitchen">U-Shape kitchen</option>
                                                    <option value="One wall kithen">One wall kithen</option>
                                                    <option value="Peninsula kitchen">Peninsula kitchen</option>
                                                    <option value="Open kitchen">Open kitchen</option>
                                                    <option value="Parallel kitchen">Parallel kitchen</option>
                                                    <option value="Sofa">Sofa</option>
                                                    <option value="Center table">Center table</option>
                                                    <option value="Coffee table">Coffee table</option>
                                                    <option value="Side table">Side table</option>
                                                    <option value="Library storage">Library storage</option>
                                                    <option value="Dinning table">Dinning table</option>
                                                    <option value="Dining chairs">Dining chairs</option>
                                                    <option value="Crockery unit">Crockery unit</option>
                                                    <option value="Tall unit">Tall unit</option>
                                                    <option value="Shoe rack">Shoe rack</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-5">
                                                <select class="form-control select2">
                                                    <option selected disabled="disabled">Select Sub Category</option>
                                                    <option>Bed</option>
                                                    <option>Wardrobe</option>
                                                    <option>Consoles</option>
                                                    <option>TV units</option>
                                                    <option>Side tables</option>

                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-2">
                                                <input type="submit" class="btn btn-primary btn-block" value="Filter Product">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                

                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="card card-default">
                                <div class="card-body">
                                    <a href="new-living-space-ideas.php">
                                        <button class="btn btn-success  btn-block">New Living Space Ideas</button>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-12">
                            <div class="card card-default">
                                <div class="card-body products">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Sub Category</th>
                                                <th>Image</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Product Name</td>
                                                <td>Peninsula kitchen</td>
                                                <td>Coffee table</td>
                                                <td>
                                                    <img src="dist/img/products/1.png" alt="">
                                                </td>
                                                <td>
                                                    <a href=""><i class="far fa-edit"></i></a>
                                                    
                                                </td>
                                                <td><a href=""><i class="far fa-trash-alt"></i></a></td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                        
                                    </table>

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
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
</body>

</html>
