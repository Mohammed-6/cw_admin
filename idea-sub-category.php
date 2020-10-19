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
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="card card-default">
                                <div class="card-body">
                                    <table class="table table-bordered">
                                         <?php
                                        include_once('includes/config.php');
                                        $query = "SELECT sa.*,ca.title as ctitle from idea_sub_cat sa inner join idea_cat ca on ca.cat_id=sa.cat_id";
                                        $result = mysqli_query($link, $query);
                                    ?>
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Category</th>
                                                <th>Sub Category</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $n = 1;
                                            while ($rows = mysqli_fetch_array($result)) {
                                            ?>
                                            <tr>
                                                <td><?= $n ?></td>
                                                <td><?php echo $rows['ctitle']; ?></td>
                                                <td><?php echo $rows['title']; ?></td>
                                                <td class="text-center"><a href=""><button class="btn btn-info btn-xs"><i class="far fa-edit"></i></button></a></td>
                                                <td class="text-center"><a href=""><button class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i></button></a></td>


                                            </tr>
                                            <?php $n++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>


                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="card card-default">
                                <div class="card-body">
                                    <form enctype="multipart/form-data" method="post">
                                        <div>
                                            <div class="form-group">
                                                <?php
                                        
                                        $query = "select * from idea_cat";
                                        $result = mysqli_query($link, $query);
                                    ?>

                                                <select class="form-control select2" name="cat_id">
                                                    <option selected disabled="disabled">Select Main Category</option>
                                                    <?php $n = 1;
                                                while ($rows = mysqli_fetch_array($result)) {
                                            ?>
                                                    <option value="<?php echo $rows['cat_id']; ?>"><?php echo $rows['title']; ?></option>
                                                    <?php $n++;
                                                }
                                            ?>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Enter Sub Category Name" name="title">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                            
                                            if(isset($_REQUEST['submit'])){
                                                    
                                                $title = $_REQUEST['title'];
                                                $cat_id = $_REQUEST['cat_id'];
                    
                                                $success_message = 
                                                    "<div class='alert alert-success' role='alert'>
                                                        Success! New record created successfully
                                                    </div>";
                                                $faild_message = 
                                                    "<div class='alert alert-danger' role='alert'>
                                                        Failed to insert new record
                                                    </div>";
                                               
                                                $sql = "INSERT INTO  idea_sub_cat (title,cat_id) values('$title','$cat_id')";
                                                if(mysqli_query($link, $sql)){
                                                    echo $success_message;
                                                }
                                                    else{
                                                    echo $faild_message;
                                                }
                                            }

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
