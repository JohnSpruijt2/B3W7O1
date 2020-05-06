<?php $result = getID($conn); foreach($result as $data) { ?>

    <div id="removeGameDiv">
        <h1> Weet je het zeker dat je '<?php echo $data["name"]; ?>' wilt verwijderen uit de database? </h1>

        <button onclick="removeRedirect(<?php echo $data['id']; ?>)" id="removeBtn">Ja</button>

        <button onclick="redirectID(<?php echo $data['id']; ?>)" id="removeBtn">Nee</button>
    </div>
    

<?php } ?>