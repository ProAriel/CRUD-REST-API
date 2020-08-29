<!--  Ariel Simantov 207366865
      Liron Shemesh 301569075
!-->

<?php
include ('DBConn.php');
class Stuff
{
    private $DB;
    public function __construct(mysqli $DB){
    $this->DB = $DB;
}

public function insert(string $name, string $description, float $price, string $picture): bool
{
    $query = "INSERT INTO `product` (`name`,`description`,`price`,`picture`) VALUES ('$name','$description','$price','$picture')";
    header("Location: index.php");
    return $this->DB->query($query);

}
public function delete(int $id): bool
{
    $query = "DELETE FROM `product` WHERE id=$id";
    header("Location: index.php");
    return $this->DB->query($query);
}

public function update(int $id, string $name, string $description, float $price, string $picture): bool
{
    $query = "UPDATE `product` SET name='$name', description='$description', price='$price', picture='$picture' WHERE id=$id";
    $this->DB->query($query);
    header("Location: index.php");
    return $this->DB->query($query);

}
/*
public function getAllStuff(): array {
    $result = [];
    $res = $this->DB->query('SELECT * FROM product');
    while ($row = $res->fetch_assoc()){
        $result[] = $row;
    }
    return $result;
    }

    public function numOfRecords(): int {
       $result = $this->DB->query("SELECT COUNT(*) FROM product");
       return $num_rows = mysqli_fetch_row($result)[0];
    }

*/
}