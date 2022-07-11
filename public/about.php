<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UiTM Club Activities Attendance System - About</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="https://saringc19.uitm.edu.my/statics/icons/favicon.ico">
    </head>
    <body>
        <?php
            include("../header/header.php");
        ?>
        <div class="px-5 text-center">
            <h1>About the UiTM Club Activities Attendance System</h1>
        </div>
        <?php
            $currDir = $_SERVER['PHP_SELF'];
            $currUrl = $_SERVER['PHP_HOST'];
            $pageTitle = "About Us";
            include('../header/breadcrumb.php');
        ?>
        <div class="px-5 py-4">
            <h4 style="text-align: justify; text-justify: inter-word;">The UiTM Club Activities Attendance System aims to help streamline club activities attendance process.
            This system was created to ease the process of club activity attendance. The system features a lot of useful features which would enable the users to easily mark
            their attendance without hassle.</h4>
        </div>
        <div class="px-5 py-4">
            <h5>This system is a fork by: </h5>
            <p>DIGITTEND SYSTEMS SDN. BHD.</p>

            <h5>and is licensed under the:</h5>
            <p>GNU General Public License v3.0</p>

            <p>The source code for this project can be found <a href="https://github.com/digittend/clubattendance">here</a>.</p>
        </div>
        <?php
            include("../header/footer.php");
        ?>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>