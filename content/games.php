
<div id="allGamesdiv">
    <h1>Alle Spellen</h1>
    <div>
    <?php  $result = getAll($conn);
    foreach ($result as $data) {
    ?>
    <button onclick='redirectID(<?php echo "`".$data["id"]."`" ?>)' class='allGameDiv'>
    <img src="img/<?php echo $data['image']; ?>" alt="<?php echo $data['name']; ?>">
    </button>


    <?php
    }
    ?></div>
    <div id="addGameLink">
        <a href="?page=addNewGame"><i class="fas fa-plus-circle"></i> Voeg niew spel toe</a>
    </div>
</div>