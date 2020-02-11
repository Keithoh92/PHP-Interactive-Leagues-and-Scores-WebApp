<form class="form-inline">
    <div class="form-group">
        <div class = "form-group mx-2">

        <label for="league">League</label>

        </div>

    <select class = "form-control" name = "league" id="league">
        <option value="">Choose League</option>

<?php
foreach($leagueTables as $leagueTable):
?>

        <option value="<?= $leagueTable->getLeagueTableId(); ?>"><?=$leagueTable->getLeagueName(); ?></option>

        <?php
        endforeach;
        ?>
        </select>
        <div class="btn-toolbar mx-2">
            <input class="btn btn-info" type="submit" name="action" value="Search Leagues">
        </div>
    </div>


</form>




