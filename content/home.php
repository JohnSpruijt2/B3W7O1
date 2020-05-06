<div id="gamedivdiv">
    <h1>Spellen</h1>
    <?php  $result = getFive($conn);
    foreach ($result as $data) {
    ?>
    <button onclick='redirectID(<?php echo "`".$data["id"]."`" ?>)' class='gamediv'>
    <img src="img/<?php echo $data['image']; ?>" alt="<?php echo $data["name"]; ?>">
    </button>

    <?php
    }
    ?>
    <button onclick="redirect('games')" class="seemore"><a>Bekijk meer <i class="fas fa-arrow-circle-right"></i></a></button>
</div>

<div id="planningdivdiv">
    <h1>Planning</h1>
    <?php  $result = getFivePlans($conn);
    foreach ($result as $data) {
        $result2 = plansGetID($conn,$data["game"]); foreach ($result2 as $data2) {
    ?>
    <button onclick='redirectPID(<?php echo $data["ID"]; ?>)' class='planningdiv'>
    <img src="img/<?php echo $data2['image']; ?>" alt="<?php echo $data2["Name"]; ?>">
    <a id="planningdivtitle"><?php echo $data["StartTime"]; ?></a>
    </button>

    <?php
        }
    }
    ?>
    <button onclick="redirect('planning')" class="seemoreP"><a>Bekijk meer <i class="fas fa-arrow-circle-right"></i></a></button>
</div>