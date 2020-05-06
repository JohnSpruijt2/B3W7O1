<div id="allPlansdiv">
    <h1>Planning</h1>
    <div>
    <?php  $result = getAllPlans($conn);
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
    ?></div>
    <div id="addGameLink">
        <a href="?page=addNewPlans"><i class="fas fa-plus-circle"></i> Voeg een spel toe aan de planning</a>
    </div>
</div>