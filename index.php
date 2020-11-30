<?php
    require('header.php')
?>

<main class="main_content">
    <?php
        if (isset($_SESSION['nameBenutzer'])) {
            echo '<p>Glückwunsch, du bist erfolgreich eingeloggt</p>';
        }
        else {
            echo '<p>Du bist im Moment nicht eingeloggt</p>';
        }
    ?>
</main>

<?php
    require('footer.php')
?>