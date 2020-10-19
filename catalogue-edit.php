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
                                    <?php
                            include_once('includes/config.php');
                            $edit_id = $_GET['id'];

                            $query = "select * from catalogue WHERE id='$edit_id'";
                            $result = mysqli_query($link, $query);
                            ?>
                                    <?php
                                while ($rows = mysqli_fetch_array($result)) {
                                ?>
                                    <form method="post" enctype="multipart/form-data" action="catalogue-edit.php?id=<?php echo $edit_id; ?>">
                                        <div class="form-group">
                                            <label>Catalogue Title</label>
                                            <input type="text" class="form-control" value="<?php echo $rows['title']; ?>" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label>Catalogue File</label>
                                            <input type="file" class="form-control" name="pdf">
                                        </div>
                                        <div class="form-group">
                                            <label>Catalogue Image</label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                        <input type="submit" class="btn btn-success" name="update" value="Add Catalogue">
                                    </form>
                                    <?php
                                }
                                ?>
                                    <?php


                                if (isset($_POST['update'])) {
                                    $update_id = $_GET['id'];
                                    $title = $_POST['title'];
                                   
                                    


                                    $image_name = $_FILES['image'] ['name'];
                                    $image_type = $_FILES['image'] ['type'];
                                    $image_size = $_FILES['image'] ['size'];
                                    $image_tmp = $_FILES['image'] ['tmp_name'];
                                   
                                    
                                    if($image_name!=''){
                                            move_uploaded_file($image_tmp, "images/$image_name");
                                      }

                                    
                                    $pdf_name = $_FILES['pdf'] ['name'];
                                                $pdf_type = $_FILES['pdf'] ['type'];
                                                $pdf_size = $_FILES['pdf'] ['size'];
                                                $pdf_tmp = $_FILES['pdf'] ['tmp_name'];
                                                 
                                    
                                    if($pdf_name!=''){
                                            move_uploaded_file($pdf_tmp, "images/catalogue/$pdf_name");
                                      }
                                    
                                    $sql = "update catalogue set title='$title',pdf='$pdf_name', image='$image_name' where id=$update_id";
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

</body>

</html>
