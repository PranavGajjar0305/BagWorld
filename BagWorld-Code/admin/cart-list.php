<?php include('header.php'); ?>
<?php
$sql = "select * from  cart order by id  ASC  ";
 $res = mysqli_query($conn,$sql) or die($sql);
$fail = $success = '';
if(isset($_GET['ps'])) {
    $success = "You have successfully deleted";
}
if(isset($_GET['pf'])) {
    $fail = "Cannot delete the product";
}
?>

        <div class="col-md-10 content">
            <div class="panel panel-default">
            <div class="panel-heading">
                <h2>List of products</h2>
            </div>
            <div class="panel-body">
              <form name="form1" method="post" action="">
                 <table class="table table-striped table-bordered table-hover" id="myTable">
                <p><?php echo $success. $fail;?></p>
                <thead>
                    <tr align="center">
                        <th>Order number</th>
                        <th>Product information</th>
                        <th>Customer Information</th>
                        <th>Total amount</th>
                        <th>Details</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    if ($res) {
                        while ($row = mysqli_fetch_array($res) ) {
                            if ($row['product_image'] == null || $row['product_image'] == '') {
                                $thumbImage = "";
                            } else {
                                $thumbImage = "../product_images/" . $row['product_image'];
                            }
                    ?>
                    <tr class="odd gradeX" align="center">
                                <td ><?php echo $row["id"]; ?></td>
                                <td ><?php
                                        echo '<span style="float:left;">Product code: ' . $row["p_id"] . '</span></br>';
                                        echo '<span style="float:left;">Product name: ' .$row["product_title"] . '</span></br>';?>
                                    <br><img src = "<?php echo $thumbImage?>" width =80px; height = 80px;> 
                                </td>
                                <td ><?php
                                        echo '<span style="float:left;">Customer code: ' . $row['user_id'] . '</span></br>';
                                        echo '<span style="float:left">First and last name: ' . $row['user_name'] . '</span></br>';
                                        echo '<span style="float:left">Address:' . $row['user_adress'] . ' </span></br>';
                                        ?></td>
                                <td ><?php echo $row["total_amt"]; ?></td>
                                <td class="center"><a href="cart-detail.php?idProduct=<?php echo $row['id'];?>"><i class="fa fa-pencil fa-fw"></i>Details</a></td>
                                <td class="center"><a href="deleterow.php?idCart=<?php echo $row['id'];?>"> <i class="fa fa-trash-o  fa-fw"></i>Delete</a></td>
                       
                    </tr>
                    <?php 
                    }
                    }else {
                        echo 'error';
                    }
                    ?>

                </tbody>
            </table>
              </form>
            </div>
            </div>
        </div>

<?php include('footer.php') ?>
