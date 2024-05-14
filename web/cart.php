<?php
session_start();
extract($_GET);
if($_SERVER['REQUEST_METHOD']=='GET' && @$action=='del'){
    $cart=$_SESSION['cart'];
    unset($cart[$id]);
    $_SESSION['cart']=$cart;
}
?>
<html>
    <head>
        <title>
            Cart
        </title>
    </head>
    <body>
         <a href="cart.php?action=empty">Empty Cart</a>
        <table border="1" width="100%" style="border: 1px solid #055160">
            <thead>
                <tr>
                    <th>#</th>                    
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total=0;
                foreach ($_SESSION['cart'] as $key=>$value){
                    ?>
                <tr>
                    <td></td>
                    <td><?= $value['item_name'] ?></td>
                    <td><?= $value['unit_price'] ?></td>
                    <td>
                        <form method="get" action="cart.php">
                            <input type="hidden" name="id" value="<?= $key ?>">
                            <input type="hidden" name="action" value="update_qty">
                            <input type="text" value="<?= $value['qty'] ?>" name="qty" onchange="form.submit()">
                            <select name="qty" onchange="form.submit()">
                                <option value="">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </form>
                    </td>
                    <td style="text-align: right"><?php $amt=$value['unit_price']*$value['qty']; $total+=$amt; echo number_format($amt,2) ; ?></td>
                    <td>
                        <a href="cart.php?id=<?= $key ?>&action=del">Remove</a>
                    </td>
                </tr>
                    <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="text-align: right"><?= number_format($total,2) ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Discount(3%)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="text-align: right"><?= number_format($total*0.03,2) ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Net</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="text-align: right"><?= number_format(($total-$total*0.03),2) ?></td>
                </tr>
                
            </tfoot>
        </table>
                
        <a href="checkout.php">Checkout</a>
    </body>
</html>