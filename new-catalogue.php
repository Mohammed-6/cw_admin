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
                        <div class="col-12 col-sm-6 col-md-12">
                            <div class="card card-default">
                                <div class="card-body Catalogues">
                                    <form enctype="multipart/form-data" method="post">
                                        <div class="form-group">
                                            <label>Catalogue Title</label>
                                            <input type="text" class="form-control" placeholder="Catalogue Title" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label>Catalogue File</label>
                                            <input type="file" class="form-control" name="pdf">
                                        </div>
                                        <div class="form-group">
                                            <label>Catalogue Image <small>(Image Size = Height : 450px, Width : 450px, Max 80KB)</small></label>
                                             <input type="file" class="form-control" name="image">
                                        </div>
                                        <input type="submit" class="btn btn-success" name="submit" value="Add Catalogue">
                                    </form>
                                    <?php
                                            include_once('includes/config.php');
                                            if(isset($_REQUEST['submit'])){

                                                $title = $_REQUEST['title'];
                    
                                                $success_message = 
                                                    "<div class='alert alert-success' role='alert'>
                                                        Success! New record created successfully
                                                    </div>";
                                                $faild_message = 
                                                    "<div class='alert alert-danger' role='alert'>
                                                        Failed to insert new record
                                                    </div>";
                                                $image_name = $_FILES['image'] ['name'];
                                                $image_type = $_FILES['image'] ['type'];
                                                $image_size = $_FILES['image'] ['size'];
                                                $image_tmp = $_FILES['image'] ['tmp_name'];
                                                if($image_type=="image/jpeg" or $image_type=="image/png" or $image_type=="image/jpg" or $image_type=="image/gif"){
                                                        move_uploaded_file($image_tmp, "images/catalogue/$image_name");
                                                }
                                                
                                                $pdf_name = $_FILES['pdf'] ['name'];
                                                $pdf_type = $_FILES['pdf'] ['type'];
                                                $pdf_size = $_FILES['pdf'] ['size'];
                                                $pdf_tmp = $_FILES['pdf'] ['tmp_name'];
                                                 move_uploaded_file($pdf_tmp, "images/catalogue/$pdf_name");

                                                $sql = "INSERT INTO catalogue (title,pdf,image) values('$title','$pdf_name','$image_name')";
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
    
</body>

</html>
