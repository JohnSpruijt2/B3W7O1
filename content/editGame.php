<?php if (!empty($_POST)) {
    
    $id = $_GET['id'];

    $name = $_POST['name'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $expansions = $_POST['expansions'];
    $skills = $_POST['skills'];
    $url = $_POST['url'];
    $youtube = $_POST['youtube'];
    $minPlayers = $_POST['minPlayers'];
    $maxPlayers = $_POST['maxPlayers'];
    $playTime = $_POST['playTime'];
    $explainTime = $_POST['explainTime'];

    $update = ("UPDATE `games` SET `name`='$name',`image`='$image',`description`='$description',`expansions`='$expansions',`skills`='$skills',`url`='$url',`youtube`='$youtube',`min_players`='$minPlayers',`max_players`='$maxPlayers',`play_minutes`='$playTime',`explain_minutes`='$explainTime' WHERE id = $id");
    $query = $conn->prepare($update);
    $query->execute();



    echo "<div id='alert'>Je hebt een spel aangepast in de database</div>";
}

 $result = getID($conn); foreach($result as $data) { ?>

<div id="editDiv">

<h1>Edit : <?php echo $data['name']; ?></h1>

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
<?php } ?>