<?php

namespace Controller;

use Model\Product;
use Model\ProductDB;

class ProductController
{

    public $productDB;

    public function __construct()
    {
        $this->productDB = new ProductDB();
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $products = $this->productDB->getAll();
            include 'src/view/list.php';
        } else {
            $search = $_POST['search'];
            $products = $this->productDB->search($search);
            include 'src/view/list.php';
        }
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/view/add.php';
        } else {
            $name = $_POST['name'];
            $category = $_POST['category'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $createdDate = $_POST['createdDate'];
            $info = $_POST['info'];
            $product = new Product($name, $category, $price, $quantity, $createdDate, $info);
            $this->productDB->create($product);
            include 'src/view/add.php';
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'src/view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->productDB->delete($id);
            header('Location: index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'src/view/edit.php';
        } else {
            $id = $_POST['id'];
            $product = new Product($_POST['name'], $_POST['category'], $_POST['price'], $_POST['quantity'], $_POST['createdDate'], $_POST['info']);
            $this->productDB->update($id, $product);
            header('Location: index.php');
        }
    }
}
