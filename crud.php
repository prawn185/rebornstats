<?php
include('global/global.php')
?>


<div class="row">
    <form method="post" action="form-handler.php">
        <div class="col-md-6 ">
            <div class="form-group">
                <label for="customer_name">Customer Name</label>
                <select class="form-control" name="customer_name" id="customer_name">
                    <option value="Rent4Sure">Rent4Sure</option>
                    <option value="Tescos">Tescos</option>
                    <option value="Sainsburys">Sainsburys</option>
                </select>
            </div>
            <div class="form-group">
                <label for="line_1">Property Name</label>
                <input class="form-control" type="text" name="name" placeholder="Dove House">
            </div>
            <div class="form-group">
                <label for="line_1">Address Line 1</label>
                <input class="form-control" type="text" name="line_1" placeholder="Address Line 1">
            </div>
            <div class="form-group">
                <label for="line_2">Address Line 2</label>
                <input class="form-control" type="text" name="line_2" placeholder="Address Line 2">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="country">Country</label>
                <input class="form-control" type="text" name="country" placeholder="Country">
            </div>
            <div class="form-group">
                <label for="county">County</label>
                <input class="form-control" type="text" name="county" placeholder="County">
            </div>

            <div class="form-group">
                <label for="postcode">Postcode</label>
                <input class="form-control" type="text" name="postcode" placeholder="Postcode">
            </div>
            <div class="form-group">
                <label for="postcode">Monthly Price</label>
                <input class="form-control" type="number" name="rent" placeholder="0.00">
            </div>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <input class="form-control btn btn-success" type="submit" value="Submit">
        </div>
    </form>
</div>

</body>
</html>
