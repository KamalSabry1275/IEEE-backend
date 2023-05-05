<?php
    include "aside.php";
    if(isset($_GET["items"])) $items = $_GET["items"];
    else $items = [];
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
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="productAdd.php?username=<?php echo $_COOKIE["data"]["username"]?>">Add</a></li>
                        </ol>
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
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">product</th>
                                <th scope="col">price</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($items as $item){
                                ?>
                            <tr>
                                <td><?php echo $item["productname"];?></td>
                                <td><?php echo $item["price"];?></td>
                                <td align="CENTER">
                                    <a href="productEdit.php?<?php echo "productname=".$item["productname"]."&price=".$item["price"]."&username=".$_GET["username"]; ?>"
                                        style="color:lightgreen">edit</a>
                                    <a href="includes/productDelete.inc.php?<?php echo "productname=".$item["productname"]."&price=".$item["price"]."&username=".$_GET["username"]; ?>"
                                        style="color:red">delete</a>
                                </td>
                            </tr>

                            <?php }?>
                        </tbody>
                    </table>

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