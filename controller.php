<?php
                            include_once('includes/config.php');
                            if(isset($_GET['get-subcategory'])){
                                $edit_id = $_GET['get-subcategory'];

                            $query = "SELECT * from idea_sub_cat WHERE cat_id='$edit_id'";
                            $result = mysqli_query($link, $query) or die(mysqli_error($link));
                            ?>
<option>Select</option>
<?php
                            while($row = mysqli_fetch_array($result)){
                                ?>
<option value="<?php echo $row['id']; ?>"><?php echo $row['title'] ?></option>
<?php
                            }
                            }
                            
                            