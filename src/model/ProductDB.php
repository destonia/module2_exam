<?php


namespace Model;

use PDO;

class ProductDB
{
    public $connection;

    /*public function __construct($connection)
    {
        $this->connection = $connection;
    }*/
    public function __construct()
    {
        $db = new DBConnect();
        $this->connection = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM Products";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row['ProductName'],
                $row['Category'],
                $row['Price'],
                $row['Quantity'],
                $row['CreatedDate'],
                $row['ProductInfo']
            );
            $product->id = $row['ProductId'];
            $products[] = $product;
        }
        return $products;
    }

    public function create($product)
    {
        $sql = "INSERT INTO Products(ProductName, Category, Price, Quantity, CreatedDate, ProductInfo)
                VALUE (:ProductName, :Category, :Price, :Quantity, :CreatedDate, :ProductInfo)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(":ProductName", $product->name);
        $stmt->bindValue(":Category", $product->category);
        $stmt->bindValue(":Price", $product->price);
        $stmt->bindValue(":Quantity", $product->quantity);
        $stmt->bindValue(":CreatedDate", $product->createdDate);
        $stmt->bindValue(":ProductInfo", $product->info);
        $stmt->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM Products WHERE ProductId = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $product = new Product($row['ProductName'],
            $row['Category'],
            $row['Price'],
            $row['Quantity'],
            $row['CreatedDate'],
            $row['ProductInfo']
            );
        $product->id = $row['ProductId'];
        return $product;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM Products WHERE ProductId = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindValue(1, $id);
        return $statement->execute();
    }

    public function update($id, $product)
    {
        $sql = "UPDATE Products SET 
                ProductName = :ProductName,
                Category = :Category,
                Price = :Price,
                Quantity = :Quantity,
                CreatedDate = :CreatedDate,
                ProductInfo = :ProductInfo
                Where ProductId = :ProductId;
                ";

        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(":ProductName", $product->name);
        $stmt->bindValue(":Category", $product->category);
        $stmt->bindValue(":Price", $product->price);
        $stmt->bindValue(":Quantity", $product->quantity);
        $stmt->bindValue(":CreatedDate", $product->CreatedDate);
        $stmt->bindValue(":ProductInfo", $product->ProductInfo);
        $stmt->bindValue(":ProductId", $id);

        return $stmt->execute();
    }

    public function search($search)
    {
        if ($search == '') {
            header('location: index.php');
        } else {
            $sql = "SELECT * FROM Products where ProductName like ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindValue(1, '%'.$search.'%');
            $statement->execute();
            $result = $statement->fetchAll();
            if ($result == null) {
                header('location: index.php');
            } else {
                $products = [];
                foreach ($result as $row) {
                    $product = new Product($row['ProductName'],
                        $row['Category'],
                        $row['Price'],
                        $row['Quantity'],
                        $row['CreatedDate'],
                        $row['ProductInfo']);
                    $product->id = $row['ProductId'];
                }
                $products[] = $product;
            }
            //var_dump($result);die();

        }
        return $products;
    }
}