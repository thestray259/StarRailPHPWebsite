<?php

?>
<nav>
    <ul>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/About/AboutPage.php">About</a></li>
        <li><a href="/Contact/ContactPage.php">Contact</a></li>
        <li><a href="/Preferences.php">My Preferences </a></li>

        <?php
        if ($_SESSION["isAdmin"] == 1) {
            echo '<li><a href="\ManagePages.php">Manage Pages</a></li>';
        } else {
            echo '<li><a href="\Login.php">Login</a></li>';
        }
        ?>
</ul>
</nav>