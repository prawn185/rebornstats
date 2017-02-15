<?php
//$pagetitle = "Database";
include('global/global.php');
$cquery = "select * from players";
$cresult = $conn->query($cquery);
$civ = $cresult->fetch_all();

$pquery = "select * from players WHERE coplevel > 1";
$presult = $conn->query($pquery);
$police = $presult->fetch_all();

$rquery = "select * from players WHERE synlevel > 1";
$rresult = $conn->query($rquery);
$rebel = $rresult->fetch_all();



    ?>
    <h3>Citizen Database</h3>
    <?php
    /* fetch object array */ ?>

    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="civ-head">
                <h1 class="panel-title">
                    Civilians
                </h1>

            </div>
            <div class="panel-body">
                <div class="col-md-4"><b>Name:</b></div>
                <div class="col-md-4"><b>Cash in Hand</b></div>
                <div class="col-md-4"><b>Bank account</b></div>
            </div>

            <?php

            foreach($civ as $rows) {
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

/* fetch object array */ ?>

<div class="col-md-4">
    <div class="panel panel-default">
        <div class="police-head">
            <h1 class="panel-title">
                Police Department
            </h1>

        </div>
        <div class="panel-body">
            <div class="col-md-4"><b>Name:</b></div>
            <div class="col-md-4"><b>Police Ranking</b></div>
            <div class="col-md-4"><b>Specialism</b></div>
        </div>

        <?php

        foreach($police as $rows) {


            switch ($row[6]) {
                case 10:
                    code to be executed if n=label1;
                    break;
                case 9:
                    code to be executed if n=label2;
                    break;
                case 8:
                    code to be executed if n=label3;
                    break;

                default:
                    code to be executed if n is different from all labels;
            }



            ?>

            <div class="panel-body">
                <div class="item-player">
                    <div class="col-md-4"><?php echo $rows[1]; ?></div>
                    <div class="col-md-4"><?php echo $rank; ?></div>

                </div>

            </div>
            <?php
        }
        ?>

    </div>
</div>
<?php


/* fetch object array */ ?>

<div class="col-md-4">
    <div class="panel panel-default">
        <div class="rebel-head">
            <h1 class="panel-title">
                Rebels
            </h1>

        </div>
        <div class="panel-body">
            <div class="col-md-4"><b>Name:</b></div>
            <div class="col-md-4"><b>Police Ranking</b></div>
            <div class="col-md-4"><b>Specialism</b></div>
        </div>

        <?php

        foreach($rebel as $rows) {
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
