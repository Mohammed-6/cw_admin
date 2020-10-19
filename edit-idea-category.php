<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chisel & Wood | Living Space Category</title>
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
                            <h1 class="m-0 text-dark">Living Space Category</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                                <li class="breadcrumb-item active">Living Space Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-7">
                            <div class="card card-default">
                                <div class="card-body">
                                    <?php
                            include_once('includes/config.php');
                            $edit_id = $_GET['id'];

                            $query = "select * from idea_cat WHERE cat_id='$edit_id'";
                            $result = mysqli_query($link, $query);
                            ?>
                                    <?php
                                while ($rows = mysqli_fetch_array($result)) {
                                ?>
                                    <form method="post" enctype="multipart/form-data" action="">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" value="<?php echo $rows['title']; ?>" name="title">
                                        </div>
                                        
                                        <input type="submit" class="btn btn-success" name="update" value="Edit">
                                    </form>
                                    <?php
                                }
                                ?>
                                    <?php


                                if (isset($_POST['update'])) {
                                    $update_id = $_GET['id'];
                                    $title = $_POST['title'];
                                   
                                    


                                    
                                    $sql = "UPDATE idea_cat set title='$title' where cat_id=$update_id";
                                    if (mysqli_query($link, $sql)) {
                                        echo "File Updated Successfully";
                                    } else {
                                        echo "File Update Failed, Upload Again";
                                    }
                                }
                                mysqli_close($link);




                                ?>
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
