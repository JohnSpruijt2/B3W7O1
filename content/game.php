<div id="darkBackground">

<div id="singleGameDiv">

<?php $result = getID($conn); foreach($result as $data) {
?>
<div id="gameTitleDiv">
    <a href="<?php echo $data['url'] ?>" style="float: left;" id="title"><?php echo $data['name']; ?></a>
    <a style="float: right;"> <i class="fas fa-users"></i> <?php echo $data['min_players'].'-'.$data['max_players']; ?> <i class="far fa-clock"></i> <?php echo $data['play_minutes'].' Minuten'; ?> <i class="far fa-comment"></i> <?php echo $data['explain_minutes'].' Minuten'; ?></a>
</div>


<div id="singleGameImgDiv">
    <div id="singleGameImgEmptySpace">
    <img id="singleGameImg" src="img/<?php echo $data['image']; ?>" alt="<?php echo $data["name"]; ?>">
    </div>
    <div class="card">
        <a><i class="fas fa-puzzle-piece"></i> Uitbreidingen: <?php if($data['expansions'] != null) {echo $data['expansions'];} else {echo "-";}  ?> <br> <br>
        <i class="fas fa-hammer"></i> Skills: <?php echo $data['skills'] ?>
        </a>
    </div>

</div>



<div id="singeGameDescriptionDiv">
<?php echo $data['description']; ?>
</div>

<?php echo $data['youtube']; ?>

<div id="editRemoveDiv">
<a href="?page=editGame&id=<?php echo $_GET['id']; ?>"> <i class="fas fa-wrench"></i>Edit</a> <a> </a> <a href="?page=removeGame&id=<?php echo $_GET['id']; ?>"> <i class="fas fa-trash-alt"></i>Remove</a>
</div>

<?php
} ?>

</div>

</div>