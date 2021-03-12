<div class="row">
    <article class="col-sm-9">
        <div class="container">
            <h2>List of Products</h2>
            <a href="./index.php?page=add">Add new Product</a>
            <table class="table">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Product's Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Created Date</th>
                    <th>Product's Info</th>

                </tr>
                </thead>
                <tbody>

                <?php foreach ($products as $key => $product): ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $product->name ?></td>
                    <td><?php echo $product->category ?></td>
                    <td><?php echo $product->price ?></td>
                    <td><?php echo $product->quantity ?></td>
                    <td><?php echo $product->createdDate ?></td>
                    <td><?php echo $product->info ?></td>
                    <td colspan="2">
                        <a href="./index.php?page=delete&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Delete</a>
                        <a href="./index.php?page=edit&id=<?php echo $product->id; ?>" class="btn btn-sm">Update</a>
                    </td>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </article>
</div>
