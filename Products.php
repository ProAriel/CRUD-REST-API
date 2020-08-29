<!--  Ariel Simantov  207366865
      Liron Shemesh 301569075
!-->
<?php include 'DBConn.php';
?>

<body>
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="updateProduct" action="StuffHelper.php" method="POST">
                <div class="modal-body" id="modalBody">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="EditName">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="Enter Description" name="EditDescription">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" min="0" class="form-control" id="price" placeholder="Enter Price" name="EditPrice">
                    </div>
                    <div class="form-group">
                        <label for="picture">Picture</label>
                        <input type="text" class="form-control" id="picture" placeholder="Enter Picture Source" name="EditPicture">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" value="Update" class="btn btn-success" id="submitUpdate" name="updateData">Submit</button>
                    <input type="hidden" id="id_update" name="id_update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" name="close"">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<form action="" method="POST">
<table id="myTable" class="table table-hover table-dark">
    <thead>
    <tr>
        <!--th>ID</th-->
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Picture</th>
        <th colspan="2">Actions</th>
    </tr>
    </thead>
    <tbody id="tableBody">
            <?php
            $result = $conn->query("SELECT * FROM product") or die(mysqli_error());
            while($row = mysqli_fetch_assoc($result))
            {
                    ?>
                    <tr id="<?php echo $row['id']; ?>">
                    <td data-target="name"><?php echo $row['name']; ?></td>
                    <td data-target="description"><?php echo $row['description']; ?></td>
                    <td data-target="price"><?php echo $row['price']; ?></td>
                    <td data-target="picture"><?php echo "<img src='images/".$row['picture']."' /> "; ?></td>
                    <td>
                    <a class="btn btn-secondary" data-role="update" onclick="editModal()" data-id="<?php echo $row['id']; ?>" data-toggle='modal' data-target='#editModal' id="editBtn" href="#">Edit</a>
                    <a class="btn btn-danger" href="StuffHelper.php?delete=<?php echo $row['id']; ?>">Delete</a><?php
                    echo "</td>\n";
                    echo "</tr>\n";
            }
            ?>
    </tbody>
</table>
</form>
</body>