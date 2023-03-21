<?php
include("includes/header.php");
include("includes/navbar.php");
include("includes/sidebar.php");
include("config/dbcon.php");

if(isset($_POST['submit']))
{
    $name=$_POST['txtpname'];
    $details=$_POST['txtpdetail'];
    $price=$_POST['txtprice'];
    // Image
    $img_name=$_FILES['txtimg']['name'];
    $tmp=$_FILES['txtimg']['tmp_name'];

    if($img_name!='')
    {
        move_uploaded_file($tmp,"../images/".$img_name);
        $qry="INSERT INTO `product`(`pname`, `pdetails`, `pprice`, `pimg`) VALUES ('$name','$details','$price','$img_name')";
        $result=$con->query($qry);
        if($result)
        {
            echo "<script>alert('Data Added Successfully')</script>";
        }
        else
        {
            echo "<script>alert('Failed To Add')</script>";
        }
    }
}
?>
<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Product</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example2">Product Name</label>
                                <input type="text" id="form4Example2" class="form-control" name="txtpname" />
                            </div>

                            <div class="form-outline">
                                <label class="form-label" for="textAreaExample">Product Details</label>
                                <textarea class="form-control" id="textAreaExample" rows="4" name="txtpdetail"></textarea>
                            </div>
                           
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form4Example2">Product Price</label>
                                <input type="text" id="summernote1" class="form-control" name="txtprice" />
                            </div>
                            <div class="form-outline mb-4">
                                <input type="file" id="form4Example2" class="form-control" name="txtimg" />
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
include("includes/scripts.php");
?>