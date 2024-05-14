<?php
include 'config.php';

if(isset($_post['update_update_btn'])){
    $update_value = $_post['update_value'];
    $update_id = $_post['update_quantity_id'];
    $update_quantity_query = mysqli_query($conn,"UPDATE 'cart' SET quantity = '$update_value' WHERE id = '$update_id'");
    if($update_quantity_query){
        header('location:cart.php');
    }
}
if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn," DELETE FROM 'cart' WHERE id = '$remove_id'");
    header('location:cart.php');

}
if(isset($_GET['delete_all'])){
    mysqli_query($conn," DELETE FROM 'cart'");
    header('location:cart.php');

}
?>

<div class="container">
    <section class="shopping_cart">
        <h1 class="shopping_cart"></h1>
        <table>
            <thead>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                $select_cart = mysqli_query($conn, "SELECT * FROM item_stock INNER JOIN items 
                ON (items.id = item_stock.item_id) WHERE item_stock.id='$id'");
                $grand_total=0;

                if(mysqli_num_rows($select_cart) >0){
                    while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                ?>
                <tr>
                    <td><img src="assets/img/<?php echo $fetch_cart['image_name']; ?>" height="100"></td>
                    <td><?php echo $fetch_cart['name']; ?></td>
                    <td><?php echo number_format($fetch_cart['price']); ?>-</td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id'];?>">
                            <input type="number" name="update_quantity" value="<?php echo $fetch_cart['quantity'];?>">
                            <input type="submit" name="update_update_btn" value="update">
                        </form>
                    </td>
                    <td>Rs.<?php $sub_total=number_format($fetch_cart['price']*$fetch_cart['quantity']);?>-</td>
                    <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>"
                            onclick="return confirm('remove item from cart?')" class="delete-btn"><i
                                class="fas fa-trash"></i>Remove</a></td>
                </tr>
                <?php  
                $grand_total += $sub_total;      
                    };
                };
                ?>
                <tr class="table-bottom">
                    <td><a href="items.php" class="option-btn" style="margin-top:0;">Continue Shopping</a></td>
                    <td colspan="3">Grand Total</td>
                    <td><?php echo $grand_total; ?></td>
                    <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');"
                            class="delete-btn"><i class="fas fa-trash"></i>Delete All</a></td>
                </tr>
            </tbody>
        </table>
    </section>
</div>