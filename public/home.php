<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <title>Home | NCTerm</title>
</head>
<?php include_once 'elements/body.php' ?>
<!-- matrix rain columns -->
<?php include_once 'elements/canvas.php'; ?>

<?php include_once 'elements/top_bar.php' ?>

<?php include_once 'elements/user_welcome.php' ?>

<?php include_once 'elements/link_panel.php' ?>

<table id="grid">
    <tr>
        <td>
            <br>
            <pre class="neon_text">
 _       __     __
| |     / /__  / /________  ____ ___  ___
| | /| / / _ \/ / ___/ __ \/ __ `__ \/ _ \
| |/ |/ /  __/ / /__/ /_/ / / / / / /  __/
|__/|__/\___/_/\___/\____/_/ /_/ /_/\___/
            </pre>
            <br>
            <img id="banner" src="images/neighborhood.gif" alt="hongkong"><br><br>
            <p align="justified">
                Here on this site you will find all the resources I love about classic Cyberpunk culture, mainly from
                the 80s and 90s. Immerse in a universe defined by the aesthetics of huge neon scryscrapers in the rainy
                night of Hong-Kong, cyber triads, flying cop cars with embedded CRT screens and speakers telling the
                population to beware of replicant android all accross the city. Wander in the depths of a haunted
                Bradbury Building or join the Section 9 to fight cyberspace terrorists, helped by Fuchikomas ! Happy
                trip, and turn on the Synthwave !
            </p>
        </td>
    </tr>
    <tr>
        <td align="center">
            <h3>Livre d'or</h3>
            <div>
                <p>----------------------------------</p>
                <p>Par <b>pseudonyme</b>, à 23:20, 04/10/1992</p>
                <p>----------------------------------</p>
                <p>Des commentaires s'afficheront quand nous serons dans le futur !!</p>
                <p>----------------------------------</p>
            </div>
            <form id="contact_form" action="">
                <label for="email">Email : </label><br>
                <input type="text" class="<?= $theme ?>_main_color" id="email" name="email"><br>
                <label for="username">Pseudo</label><br>
                <input type="text" class="<?= $theme ?>_main_color" id="username" name="username"><br>
                <label for="message">Votre commentaire : </label><br>
                <textarea class="<?= $theme ?>_main_color" id="comment"></textarea><br>
                <input type="submit" class="<?= $theme ?>_main_color" class="<?= $theme ?>_main_color"
                       value="Envoyer">
            </form>
        </td>
    </tr>
    <!--    <tr>-->
    <!--        <td id="footer" class="<?= $theme ?>_main_background">-->
    <?php //include_once 'elements/footer.php' ?><!--</td>-->
    <!--    </tr>-->
</table>

<?php include_once 'elements/footer.php' ?>

<!-- Messages overlay -->

<?php include_once 'elements/messages.php' ?>

<!--</font>-->
<?php include_once 'elements/scripts.php' ?>
</body>
</html>