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
                    <form action="includes/productEdit.inc.php" method="post">
                        <input type="text" name="productname" placeholder="product_name"
                            value="<?php echo $_GET["productname"];?> " hidden>
                        <input type="text" value="<?php echo $_GET["productname"];?> " disabled>
                        <input type="text" name="price" placeholder="price" value="<?php echo $_GET["price"];?>">
                        <input type="submit" name="submit" value="Edit">
                    </form>
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