<?php

require_once __DIR__ .'/header.php';
$pageTitle = 'Login';
?>

<div class="mx-auto" style="width: 400px;">
    <h1 class="text-center">Login</h1>
</div>
<div>
    <form class="form-horizontal" action="index.php?action=processLogin" method="POST">
        <p>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="username">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" id="username"
                       placeholder="Username" required>
            </div>
        </div>
        </p>

        <p>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="password">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                       required>
            </div>
        </div>
        </p>
        <p>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="accType">Account Type:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="accType" id="accType"
                       placeholder="Admin or Referee" required>
            </div>
        </div>
        </p>
        <p>
        <div class="form-group row">
            <div class="col-sm-10">
                <input type="submit" class="btn btn-success" id="submit" value="Login">
            </div>
        </div>
        </p>

    </form>

</div>
<?php
require_once __DIR__ . '/../template/footer.php';
?>
