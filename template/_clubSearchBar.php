<form>
<span class="label">
<label for="club">Clubs</label>
</span>
    <select name="club" id="club">
        <option value="'">Choose Club</option>

<?php
foreach($clubs as $club):
?>
    <option value="<?= $club->getClub(); ?>"><?=$club->getClub(); ?></option>

<?php
endforeach;
?>
        <select>
            <input type="submit" name="action" value="Search Club">

