<?php
if(empty($leaguesPageStyle)) $leaguesPageStyle = '';
if(empty($clubsPageStyle)) $clubsPageStyle = '';
if(empty($resultsPageStyle)) $resultsPageStyle = '';
if(empty($fixturesPageStyle)) $fixturesPageStyle = '';
if(empty($registersPageStyle)) $registersPageStyle = '';
if(empty($loginPageStyle)) $loginPageStyle = '';
?>

<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?= $pageTitle ?></title>
    <meta charset="utf-8">


</head>
<body class="container-fluid bg-light">

<header class="bg-light">
    <div class="mx-auto text-uppercase text-info text-danger font-italic page-header" style="width: 150px; height: 80px;">

                <strong>E-Scores Dublin</strong>

    </div>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark flex-column flex-sm-row">
        <ul class="nav nav-pills">
            <div class="btn-toolbar mx-2 ">
                <li class="nav-item<?= $homePageStyle ?>">
                    <a href="/index.php?action=leagues" class="flex-sm-fill text-sm-center nav-link active bg-danger text-white">Home</a>
                </li>
            </div>
            <div class="btn-toolbar mx-2 ">
                <li class="nav-item<?= $leaguesPageStyle ?>">
                    <a href="/index.php?action=leagues" class="flex-sm-fill text-sm-center nav-link active bg-danger text-white">Leagues</a>
                </li>
            </div>
            <div class="btn-toolbar mx-2">
                <li class="nav-item<?= $clubsPageStyle ?>">
                    <a href="/index.php?action=clubs" class="flex-sm-fill text-sm-center nav-link active bg-danger text-white">Clubs</a>
                </li>
            </div>
            <div class="btn-toolbar mx-2">
                <li class="nav-item<?= $resultsPageStyle ?>">
                    <a href="/index.php?action=results" class="flex-sm-fill text-sm-center nav-link active bg-danger text-white">Results</a>
                </li>
            </div>
            <div class="btn-toolbar mx-2">
                <li class="nav-item<?= $fixturesPageStyle ?>">
                    <a href="/index.php?action=fixtures" class="flex-sm-fill text-sm-center nav-link active bg-danger text-white">Fixtures</a>
                </li>
            </div>
        </ul>

        <form class="form-inline my-2 my-lg-0 ">

            <input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-1" type="submit">Search</button>
        </form>

        <div class="btn-toolbar mx-2">
            <li class="nav-item<?= $loginPageStyle ?>">
                <a href="/index.php?action=login" class="flex-sm-fill text-sm-center nav-link active bg-danger text-white">Login</a>
            </li>
        </div>

    </nav>
            <main class="mb-5">
                <div class="container-fluid">
                    <div class="page-header">




