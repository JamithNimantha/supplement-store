<?php $title="Products"; ?>

<?php include_once "includes/head.php"?>

<?php include_once "includes/nav.php" ?>

<?php include_once "includes/sidebar.php" ?>
    <!-- Breadcrumbs-->
<?php include_once "includes/breadcrumb.php"?>
            <!-- Content-->
            <form id="ProductForm">
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="ProductID">ID</label>
                            <input type="text" name="ProductID" class="form-control" id="ProductID" placeholder="Product ID">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ProductName">Name</label>
                            <input type="text" name="ProductName" class="form-control" id="ProductName" placeholder="Product Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ProductDescription">Description</label>
                            <input type="text" name="ProductDescription" class="form-control" id="ProductDescription" placeholder="Product Description">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="UnitPrice">Unit Price</label>
                            <input type="text" name="UnitPrice" class="form-control" id="UnitPrice" placeholder="Product Unit Price">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="ProductQTY">Quantity</label>
                            <input type="text" name="ProductQTY" class="form-control" id="ProductQTY" placeholder="Product Quantity">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="ProductImage">Product Image</label>
                            <input type="file" name="ProductImage" class="form-control-file ui" id="ProductImage" placeholder="Choose Image">
                        </div>
                    </div>
                <button id="btnSave" type="button" class="btn btn-primary">Add Product</button>
                <button id="btnUpdate" type="submit" class="btn btn-success">Update Product</button>
                <button id="btnDelete" type="submit" class="btn btn-danger">Remove Product</button>
            </form>
                <br><br>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Quantity</th>
                </tr>
                </thead>
                <tbody id="productTable">
                </tbody>
            </table>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?php include_once "includes/footer.php"?>
<script src="../dist/js/jquery.validate.min.js"></script>

<script>
    $(document).click(function () {

        $('#ProductForm').validate({ // initialize the plugin
            rules: {
                UnitPrice: {
                    required: true,
                    number: true
                },
                ProductName:{
                    required:true,
                    minlength:4
                },
                ProductDescription:{
                    required:false,
                    minlength:4
                },
                ProductQTY:{
                    required:false,
                    number:true
                }
            },
            messages:{
                ProductName:"Please Enter a Product Name",
                
            }
        });

    });
    $('#btnSave').click(function () {
        let productForm=$('#ProductForm').serialize();
        $.ajax({
            url:"../api/service/ProductService.php" ,
            method:"POST",
            async:true,
            data:productForm
        }).done(function (resp) {
            if (resp == true) {
                loadData();
                alert("new  product added");
                $('#myModal').modal();
            }else {
                alert("Operation failed");
            }
        })
    });
    function loadData() {
        $('#productTable').empty();
        $.ajax({
            url: "../api/service/ProductService.php",
            method: "GET",
            async: true,
            dataType: "json"
        }).done(function (resp) {
            for (var i in resp) {
                var tempA = resp[i];
                let row = "<tr><td>" + tempA[0] + "</td><td>" + tempA[1] + "</td><td>" + tempA[2] + "</td><td>" + tempA[3] + "</td><td>" + tempA[4] + "</td></tr>";
                $('#productTable').append(row);
            }
        });
    };
    loadData();

</script>
