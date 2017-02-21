<?php
//$pagetitle = "Database";
include('global/global.php');
$cquery = "select * from players LIMIT 100";
$cresult = $conn->query($cquery);
$civ = $cresult->fetch_all();

$pquery = "select * from players WHERE coplevel > 1";
$presult = $conn->query($pquery);
$police = $presult->fetch_all();

$wquery = "SELECT * FROM wanted WHERE active = 1  ORDER BY wantedBounty DESC";
$wresult = $conn->query($wquery);
$wanted = $wresult->fetch_all();



?>
<h3>Citizen Database</h3>
<?php
/* fetch object array */ ?>

<div class="col-md-4">
    <table id="civ" class="table table-hover table-striped">
        <thead class="civ-head thead-default">

        <th>Name:</th>
        <th>Cash in Hand</th>
        <th>Bank account</th>
        </thead>
        <tbody>
        <?php

        foreach($civ as $rows) {
            ?>

            <tr>

                <td><?php echo $rows[1]; ?></td>
                <td>£<?php echo $rows[4]; ?></td>
                <td>£<?php echo $rows[5]; ?></td>

            </tr>



            <?php
        }
        ?>
        </tbody>
    </table>
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
            </div>

            <?php
            foreach($police as $rows) {
                switch ($rows[6]) {
                    case 10:
                        $rank =  "Commissioner";
                        break;
                    case 9:
                        $rank =  "Commissioner";
                        break;
                    case 8:
                        $rank = "rank 8";
                        break;
                    case 7:
                        $rank =   "rank 7 ";
                        break;
                    case 6:
                        $rank =   "rank 6 ";
                        break;
                    case 5:
                        $rank =  "rank 5 ";
                        break;
                    case 4:
                        $rank =  "rank 4 ";
                        break;
                    case 3:
                        $rank =  "rank 3 ";
                        break;
                    case 2:
                        $rank =   "CSO";
                        break;
                    case 1:
                        $rank =   "PCSO";
                        break;
                    default:
                        $rank =   "Trainee";
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
                    Most Wanted
                </h1>

            </div>
            <div class="panel-body">
                <div class="col-md-4"><b>Name:</b></div>
                <div class="col-md-4"><b>Wanted Bounty:</b></div>
            </div>

            <?php

            foreach($wanted as $rows) {
                ?>

                <div class="panel-body">
                    <div class="item-player">
                        <div class="col-md-4"><?php echo $rows[1]; ?></div>
                        <div class="col-md-4">£<?php echo $rows[3]; ?></div>
                    </div>

                </div>
                <?php
            }
            ?>

        </div>
    </div>
    <?php
    include('global/footer.php')
    ?>
