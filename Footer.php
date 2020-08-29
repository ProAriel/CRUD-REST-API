<!--  Ariel Simantov 207366865
      Liron Shemesh 301569075
!-->
<!-- Modal -->
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="AddProduct" action="StuffHelper.php" method="POST">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="insertName">Name</label>
                        <input type="text" class="form-control" id="insertName" placeholder="Enter Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="insertDescription">Description</label>
                        <input type="text" class="form-control" id="insertDescription" placeholder="Enter Description" name="description">
                    </div>
                    <div class="form-group">
                        <label for="insertPrice">Price</label>
                        <input type="number" min="0" class="form-control" id="insertPrice" placeholder="Enter Price" name="price">
                    </div>
                    <div class="form-group">
                        <label for="insertPicture">Picture</label>
                        <input type="text" class="form-control" id="insertPicture" placeholder="Enter Picture Source" name="picture">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" value="Create" class="btn btn-success" id="submit" name="insertData">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

<footer>
    <button type="button" onclick="refreshTable()" id="refreshBtn" class="btn btn-primary btn-lg btn-block" >Refresh Table</button>
    <!-- Button trigger modal -->
    <button type="button" id="newBtn" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#insertModal">Create New Product</button>
    <br>
    <div class="text-center">
        <p>&copy; 2020 Ariel Simantov & Liron Shemesh. All rights reserved. &copy;</p>
    </div>
</footer>
