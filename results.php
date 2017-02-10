<?php
include('global.php');
$query = "select * from properties";
if ($result = $conn->query($query)) {
    ?>
    <h3> Results Page</h3>
    <?php
    /* fetch object array */
    while ($row = $result->fetch_row()) {   ?>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $row["1"] ?>:
                        £<?php echo $row["8"] ?>/m
                    </h3>
                </div>
                <div class="panel-body">
                    <b>Customer Name: </b><?php echo $row['2'] ?><br/>
                    <b>Address Line 1: </b><?php echo $row['3'] ?><br/>
                    <b>Address Line 2: </b><?php echo $row['4'] ?><br/>
                    <b>County: </b><?php echo $row['5'] ?><br/>
                    <b>Country: </b><?php echo $row['6'] ?><br/>
                    <b>Postcode: </b><?php echo $row['7'] ?><br/>
                </div>
            </div>
        </div>
        <?php
    }
}
?>