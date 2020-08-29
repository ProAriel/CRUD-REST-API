<!--  Ariel Simantov 207366865
      Liron Shemesh 301569075
!-->
<?php include ('DBConn.php'); ?>
<?php include ('Stuff.php'); ?>
<?php
$stuff = new Stuff($conn);

if (isset($_POST['insertData']) == "Create") {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $picture = $_POST['picture'];
    if(trim($name)."" !="" && trim($description)."" !=""  && $price >=0 && trim($picture)."" !="" ){
            $stuff->insert($name, $description, $price, $picture);
        }
    else{
        echo ("Error was occurred by inserting data");
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stuff->delete($id);
}

if (isset($_POST['updateData']) == "Update") {
    $id = $_POST['id_update'];
    $name = $_POST['EditName'];
    $description = $_POST['EditDescription'];
    $price = $_POST['EditPrice'];
    $picture = $_POST['EditPicture'];
    if (trim($name) . "" != "" && trim($description) . "" != "" && $price >= 0 && trim($picture) . "" != "") {
        $stuff->update($id, $name, $description, $price, $picture);
    }
    else{
        echo ("Error was occurred by updating data");
    }
}
?>
