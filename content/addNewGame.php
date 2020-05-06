<?php if (!empty($_POST)) {
    

    $name = $_POST['name'];
    $image = $_POST['image'];
    $description = '<p>'.$_POST['description']."</p>";
    $expansions = $_POST['expansions'];
    $skills = $_POST['skills'];
    $url = $_POST['url'];
    $youtube = $_POST['youtube'];
    $minPlayers = $_POST['minPlayers'];
    $maxPlayers = $_POST['maxPlayers'];
    $playTime = $_POST['playTime'];
    $explainTime = $_POST['explainTime'];
    

    $update = ("INSERT INTO `games`(`name`, `image`, `description`, `expansions`, `skills`, `url`, `youtube`, `min_players`, `max_players`, `play_minutes`, `explain_minutes`) VALUES ('$name','$image','$description','$expansions','$skills','$url','$youtube','$minPlayers','$maxPlayers','$playTime','$explainTime')");
    $query = $conn->prepare($update);
    $query->execute();

    echo "<div id='alert'>Je hebt een spel toegevoegd aan de database</div>";

}




    ?>

<div id="newGameDiv">
    <h1>Voeg nieuw spel toe</h1>
<form method="POST">

<label for="gameName">Spel naam: </label> <br>
<input id="gameName" name="name" type="text" value="<?php echo $data['name']; ?>" required> <br> <br>

<label for="gameImage">Spel foto : </label> <br>
<input id="gameImage" name="image" type="text" value="<?php echo $data['image']; ?>"> <br> <br>

<label for="gameDescription">Spel beschrijving : </label> <br>
<textarea cols="40" rows="10" id="gameDescription" name="description" required><?php echo $data['description']; ?> </textarea> <br> <br>

<label for="gameExpansions">Spel uitbreidingen : </label> <br>
<input id="gameExpansions" name="expansions" type="text" value="<?php echo $data['expansions']; ?>"> <br> <br>

<label for="gameSkills">skills : </label> <br>
<input id="gameSkills" name="skills" type="text" value="<?php echo $data['skills']; ?>"> <br> <br>

<label for="gameUrl">website : </label> <br>
<input id="gameUrl" name="url" type="text" value="<?php echo $data['url']; ?>"> <br> <br>

<label for="gameYoutube">youtube : </label> <br>
<textarea cols="40" rows="10" id="gameYoutube" name="youtube" required><?php echo $data['youtube']; ?> </textarea> <br> <br>

<label for="gameMinPlayers">min spelers : </label> <br>
<input min="1" id="gameMinPlayers" name="minPlayers" type="number"  value="<?php echo $data['min_players']; ?>" required> <br> <br>

<label for="gameMaxPlayers">max spelers : </label> <br>
<input min="1" id="gameMaxPlayers" name="maxPlayers" type="number" value="<?php echo $data['max_players']; ?>" required> <br> <br>

<label for="gamePlayTime">play time : </label> <br>
<input min="5" id="gamePlayTime" name="playTime" type="number" value="<?php echo $data['play_minutes']; ?>" required> <br> <br>

<label for="gameExplainTime">explain time : </label> <br>
<input min="5" id="gameExplainTime" name="explainTime" type="number" value="<?php echo $data['explain_minutes']; ?>" required> <br> <br>


<input type="submit" value="Submit">

</form>
</div>
