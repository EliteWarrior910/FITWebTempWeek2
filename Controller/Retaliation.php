<?php
if (isset($_POST["ValueEntered"]))

    $_SESSION["sumition"] = htmlentities($_POST["ValueEntered"]);

    echo"<p>Stored Soul: {$_SESSION['sumition']}</p>";
    ?>