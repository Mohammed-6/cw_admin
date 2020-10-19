<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chisel & Wood | Catalogues</title>
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
                            <h1 class="m-0 text-dark">Catalogues</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Catalogues</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="card card-default">
                                <div class="card-body">
                                    <a href="new-catalogue.php">
                                        <button class="btn btn-success  btn-block">Add New Catalogue</button>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-12">
                            <div class="card card-default">
                                <div class="card-body products">
                                    <?php
                                include_once('includes/config.php');
                                $query = "select * from catalogue";
                                $result = mysqli_query($link, $query);
                                ?>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Catalogue</th>

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
                                                <td><?php echo $rows['title']; ?></td>
                                                <td>
                                                    <img src="images\catalogue\<?php echo $rows['image'];?>" width="80" alt="">
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="images\catalogue\<?php echo $rows['pdf'];?>" target="_blank">
                                                        <i class="fas fa-file-pdf"></i> &nbsp; View
                                                    </a>
                                                </td>

                                                <td>
                                                    <a class="btn btn-info btn-sm" href="catalogue-edit.php?id=<?php echo $rows['id'];?>">
                                                        <i class="fas fa-pencil-alt"></i> &nbsp; Edit
                                                    </a>

                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm" href="catalogue-delete.php?id=<?php echo $rows['id'];?>" onclick="return confirm('Are you sure you want to delete?');">
                                                        <i class="fas fas fa-trash"></i> &nbsp; Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <?php $n++;
                                            }
                                            ?>
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
