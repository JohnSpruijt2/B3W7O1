<div id="darkBackground">

<div id="singleGameDiv">

<?php $result = getPID($conn); foreach($result as $data) {
    $result2 = plansGetID($conn,$data['game']); foreach ($result2 as $data2) {
        $playersArray = explode(";",$data["Name of Players"]);
?>
<div id="gameTitleDiv">
    <a href="<?php echo $data2['url'] ?>" style="float: left;" id="titleP"><?php echo $data2['name']; ?> ( <?php echo $data['StartTime']; ?> )</a>
    <a style="float: right;"> <i class="fas fa-users"></i> <?php echo $data2['min_players'].'-'.$data2['max_players']; ?> <i class="far fa-clock"></i> <?php echo $data2['play_minutes'].' Minuten'; ?> <i class="far fa-comment"></i> <?php echo $data2['explain_minutes'].' Minuten'; ?></a>
</div>


<div id="singleGameImgDiv">
    <div id="singleGameImgEmptySpace">
    <img id="singleGameImg" src="img/<?php echo $data2['image']; ?>" alt="<?php echo $data2["name"]; ?>">
    </div>
    <div class="card">
        <a><i class="fas fa-puzzle-piece"></i> Uitbreidingen: <?php if($data2['expansions'] != null) {echo $data2['expansions'];} else {echo "-";}  ?> <br> <br>
        <i class="fas fa-hammer"></i> Skills: <?php echo $data2['skills'] ?>
        </a>
    </div>

</div>

<div id="peopleDiv" class="card">
    <p>
        <i class="fas fa-info"></i> Uitlegger : <?php echo $data["Explainer"]; ?> <br><br>
        <i class="fas fa-user-alt"></i> Spelers : 
        
            <?php for ($i=0; $i<sizeof($playersArray)-1; $i++) { 
                    if($i == sizeof($playersArray)-2) { 
                        echo $playersArray[$i]." ";
                        } else {
                            echo $playersArray[$i].", ";
                        } 
                    } ?>
        
    </p>
</div>



<div id="singeGameDescriptionDiv">
<?php echo $data2['description']; ?>
</div>

<?php echo $data2['youtube']; ?>

<div id="editRemoveDiv">
<a href="?page=editPlanning&id=<?php echo $_GET['id']; ?>"> <i class="fas fa-wrench"></i>Edit</a> <a> </a> <a href="?page=removePlanning&id=<?php echo $_GET['id']; ?>"> <i class="fas fa-trash-alt"></i>Remove</a>
</div>

<?php
}
}
 ?>

</div>

</div>