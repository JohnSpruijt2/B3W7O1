<?php if (!empty($_POST)) {
    $players = $_POST["players"];
    $playersArray = explode(";",$players);
    if ($explainer != null) {
        $amountPlayer = sizeof($playersArray)+1;
    } else {
        $amountPlayer = sizeof($playersArray);
    }
   $explainer = $_POST["explainer"];
   $time = $_POST["time"];
   $name = $_POST["name"];

   $update = ("INSERT INTO `plans`(`game`, `Explainer`, `Name of Players`, `amountPlayer`, `StartTime`) VALUES (:gameName,:explainer,:players,:amountPlayer,:startTime)");
   $query = $conn->prepare($update);
   $query->bindParam("gameName",$name);
   $query->bindParam("explainer",$explainer);
   $query->bindParam("players",$players);
   $query->bindParam("amountPlayer",$amountPlayer);
   $query->bindParam("startTime",$time);
   $query->execute();

    echo "<div id='alert'>Je hebt een spel toegevoegd aan de planning</div>";
}
    ?>


<div id="newPlansDiv">
    <h1>Voeg nieuw spel toe aan de planning</h1>
<form method="POST">

<label for="name">Spel naam: </label> <br>
<select name="name" id="name" required>
    <?php $result = getAll($conn); foreach ($result as $data) { ?>
    <option value="<?php echo $data["name"]; ?>"><?php echo $data["name"]; ?></option>
    <?php } ?>
</select><br> <br>

<label for="explainer">Uitlegger : </label> <br>
<input id="explainer" name="explainer" type="text" required> <br> <br>

<label for="players">Spelers (gebruik ';' tussen de verschillende namen) : </label> <br>
<input id="players" name="players" required></input> <br> <br>

<label for="time">Select a start time:</label> <br>
<input type="text"  pattern="([0-1]{1}[0-9]{1}|20|21|22|23):[0-5]{1}[0-9]{1}" id="time" name="time" placeholder="18:25" required> <br> <br>

<input type="submit" value="Submit">

</form>
</div>
