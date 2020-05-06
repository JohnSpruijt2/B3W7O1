<?php $result = getPID($conn); foreach($result as $data) { ?>

<div id="removeGameDiv">
    <h1> Weet je het zeker dat je '<?php echo $data["game"]; ?>' om <?php echo $data["StartTime"]; ?> wilt verwijderen uit de planning? </h1>

    <button onclick="removePlanRedirect(<?php echo $data['ID']; ?>)" id="removeBtn">Ja</button>

    <button onclick="redirectPID(<?php echo $data['ID']; ?>)" id="removeBtn">Nee</button>
</div>


<?php } ?>