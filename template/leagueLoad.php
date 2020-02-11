<?php
require_once __DIR__ .'/header.php';
?>

<div class="mx-auto" style="width: 400px;">
    <h1 class="text-center">Search Leagues</h1>
</div>
<?php
require_once __DIR__ .'/_leagueSearchBar.php';
?>
<br>
<h1><?= $leagueTable->getLeagueName() ?></h1>

    <table class="table table-striped table-dark">
        <tr class="text-warning">
            <th> Pos </th>
            <th> Team </th>
            <th> Pl </th>
            <th> GF </th>
            <th> GA </th>
            <th> GD </th>
            <th> Pts </th>
        </tr>

<!--        --><?php
//        if($leagueTableId == team->teamId):
//        ?>
            <?php
            foreach ($teams as $team):
                ?>
        <tr>
            <td> <?= $team['pos'] ?> </td>
            <td> <?= $team['teamName'] ?></td>
            <td> <?= $team['played'] ?></td>
            <td> <?= $team['goalsFor'] ?></td>
            <td> <?= $team['goalsAgainst'] ?></td>
            <td> <?= $team['goalDifference'] ?></td>
            <td> <?= $team['points'] ?></td>
        </tr>
        <?php
        endforeach;
        ?>
    </table>

