<?php if (!empty($_POST)) {
    
    $id = $_GET['id'];
    $game = $_POST["name"];
    $explainer = $_POST["explainer"];
    $players = $_POST["players"];
    $time = $_POST["time"];

    $playersArray = explode(";",$players);
    if ($explainer != null) {
        $amountPlayer = sizeof($playersArray)+1;
    } else {
        $amountPlayer = sizeof($playersArray);
    }
    

    

    $update = ("UPDATE `plans` SET `game`=:game,`Explainer`=:explainer,`Name of Players`=:nPlayer,`amountPlayer`=:aPlayer,`StartTime`=:STime WHERE id = :id");
    $query = $conn->prepare($update);
    $query->bindParam("game",$game);
    $query->bindParam("explainer",$explainer);
    $query->bindParam("nPlayer",$players);
    $query->bindParam("aPlayer",$amountPlayer);
    $query->bindParam("STime",$time);
    $query->bindParam("id",$id);
    $query->execute();



    echo "<div id='alert'>Je hebt een spel aangepast in de database</div>";

}

 $result = getPID($conn); foreach($result as $data) { ?>

<div id="editDiv">

<h1>Edit : <?php echo $data['game']; ?></h1>

<form method="POST">


<?php $time = str_split($data['StartTime']); ?>


<form method="POST">

<label for="name">Spel : </label> <br>
<select name="name" id="name" value="" required>
    <?php $result2 = getAll($conn); foreach ($result2 as $data2) {
        if ($data2["name"] == $data["game"]) {
?>
        <option value="<?php echo $data2["name"]; ?>" selected><?php echo $data2["name"]; ?></option>
<?php
        } else {?>
        <option value="<?php echo $data2["name"]; ?>"><?php echo $data2["name"]; ?></option>
    
    <?php } } ?>
</select><br> <br>

<label for="explainer">Uitlegger : </label> <br>
<input id="explainer" name="explainer" type="text" value="<?php echo $data['Explainer'];?>" required> <br> <br>

<label for="players">Spelers (gebruik ';' tussen de verschillende namen) : </label> <br>
<input id="players" name="players" value="<?php echo $data['Name of Players']; ?>"  required></input> <br> <br>

<label for="time">Select a start time:</label> <br>
<input type="text" value="<?php for ($i=0; $i<5; $i++) {echo $time[$i];} ?>"  pattern="([0-1]{1}[0-9]{1}|20|21|22|23):[0-5]{1}[0-9]{1}" id="time" name="time" placeholder="18:25" required> <br> <br>

<input type="submit" value="Submit">

</form>

</div>
    <?php } ?>