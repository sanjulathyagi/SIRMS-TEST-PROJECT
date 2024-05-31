<?php
ob_start();
include_once '../init.php';

$link = "Order Management";
$breadcrumb_item = "Order";
$breadcrumb_item_active = "View Items";

extract($_GET);

$db = dbConn();
$sql = "SELECT o.*,c.FirstName,c.LastName FROM `orders` o INNER JOIN customers c ON c.CustomerId=o.customer_id WHERE o.id='$order_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
?> 
<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Order Item Details</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div> <br>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4>Customer Details</h4>
                                <?= $row['FirstName'] ?> <?= $row['LastName'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4>Billing Details</h4>
                                <?= $row['billing_name'] ?> 
                                <br>
                                <?= $row['billing_address'] ?>   
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4>Delivery Details</h4>
                                <?= $row['delivery_name'] ?> 
                                <br>
                                <?= $row['delivery_address'] ?> 
                                <br>
                                <?= $row['delivery_phone'] ?> 
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                $db = dbConn();
                $sql = "SELECT o.*,i.item_name FROM `order_items` o INNER JOIN items i ON i.id=o.item_id WHERE o.order_id='$order_id'";
                $result = $db->query($sql);
                ?>
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Unit Price</th>
                            <th>Qty</th>
                            <th>Rem.Qty</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?= $row['item_name'] ?></td>
                                    <td><?= $row['unit_price'] ?></td>
                                    <td><?= $row['qty'] ?></td>
                                    <td>
                                        <?php
                                        $item_id=$row['item_id'];
                                        $unit_price=$row['unit_price'];
                                        $sql="SELECT (qty - COALESCE(issued_qty,0)) as remqty FROM `item_stock` WHERE item_id='$item_id' AND unit_price='$unit_price'";
                                        $remqtyresult=$db->query($sql);
                                        $remqtyrow=$remqtyresult->fetch_assoc();
                                        echo $remqtyrow['remqty'];
                                        ?>
                                        <!-- SELECT order_items.item_id,items.item_name,order_items.qty,order_items.unit_price,(stock.tqty- COALESCE(stock.iqty,0)) AS remqty FROM order_items 
                                        INNER JOIN items ON items.id=order_items.item_id 
                                            LEFT JOIN (SELECT item_id,unit_price,SUM(qty) AS tqty,SUM(issued_qty) AS iqty FROM item_stock GROUP BY item_id,unit_price) AS stock ON stock.item_id=order_items.item_id AND stock.unit_price=order_items.unit_price; -->
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<?php
$content = ob_get_clean();
include '../layouts.php';
?>

