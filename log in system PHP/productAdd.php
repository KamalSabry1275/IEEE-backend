<?php
    include "aside.php";
?>
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Products</h1>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Table Head</strong>
                </div>
                <div class="card-body">
                    <form action="includes/productAdd.inc.php" method="post">
                        <input type="text" name="productname" placeholder="product_name">
                        <input type="text" name="price" placeholder="price">
                        <input type="submit" value="Add">
                    </form>
                    <label style="color:red;"><?php if(isset($_GET["error"])) echo $_GET["error"];?></label>
                </div>
            </div>
        </div>
    </div>
</div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>

<?php
    include "footer.php";
?>