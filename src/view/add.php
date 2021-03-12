<?php
if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>

<div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Add New Product</h1>
            </div>
            <div class="col-12">
                <form method="post">
                    <div class="form-group">
                        <label>Product's name</label>
                        <input type="text" class="form-control" name="name"  placeholder="Type in Product's name" required>
                    </div>

                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" class="form-control" name="category"  placeholder="Type in Product's category" required>
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price"  placeholder="Type in Price" required>
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" name="quantity"  placeholder="Type in Quantity" required>
                    </div>

                    <div class="form-group">
                        <label>Created Date</label>
                        <input type="date" class="form-control" name="createdDate"  placeholder="Type in Quantity" required>
                    </div>

                    <div class="form-group">
                        <label>Info</label>
                        <input type="text" class="form-control" name="info"  placeholder="Type in Quantity" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
    </div>
</div>