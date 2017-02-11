<?php
//$pagetitle = "Database";
include('global/global.php');
$query = "select * from players";
$result = $conn->query($query);

    $row = $result->fetch_all();



    ?>
    <h3>Citizen Database</h3>
    <?php
    /* fetch object array */ ?>

    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="">
                <div class="civ-head">
                    <h3 class="panel-title">:
                        Civilians
                    </h3>
                </div>

            </div>
            <?php

            foreach($row as $rows) {
                ?>

                <div class="panel-body">
                    <div class="item-player">
                        <div class="col-md-4"><?php echo $rows[1]; ?></div>
                        <div class="col-md-4"><?php echo $rows[4]; ?></div>
                        <div class="col-md-4"><?php echo $rows[5]; ?></div>
                    </div>

                </div>
                <?php
            }
            ?>

        </div>
    </div>
    <?php

?>