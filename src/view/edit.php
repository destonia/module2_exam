<h2>Update Product's Info</h2>
<form method="post" action="./index.php?page=edit" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $product->id; ?>"/>
    <div class="form-group">
        <label>Product's Name</label>
        <input type="text" name="name" value="<?php echo $product->name; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Category</label>
        <input type="text" name="category" value="<?php echo $product->category; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Quantity</label>
        <input type="text" name="quantity" value="<?php echo $product->quantity; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" value="<?php echo $product->price; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Created Date</label>
        <input type="text" name="location" value="<?php echo $product->createdDate; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Info</label>
        <input type="text" name="location" value="<?php echo $product->info; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>