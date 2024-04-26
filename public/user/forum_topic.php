<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <title>Topic: | NCTerm</title>
</head>
<body class="<?= isset($_SESSION['user']) ? $user['favorite_theme'] : 'blue'; ?>_main_color" bgcolor="black"
      text="#32cd32" id="crt">
<?php include_once 'elements/canvas.php' ?>

<?php include_once 'elements/top_bar.php' ?>

<?php include_once 'elements/user_welcome.php' ?>
<?php include_once 'elements/link_panel.php' ?>

<!--<img width="300" src="images/chrome.webp" alt="">-->
<table id="grid" class="forum_grid">
    <tr id="sections">
        <?php include_once 'elements/menu.php' ?>
    </tr>
    <tr>
        <td>
        </td>
        <td>
            <table border="solid" width="100%">
                <tr>
                    <td><h2>Topic : Vous aimez le cyberpunk les amis ?</h2></td>
                </tr>
                <tr>
                    <table border="solid" width="100%">
                        <tr>
                            <td>
                                <p><b>MonPseudonyme</b></p>
                                <i>Membre depuis 24 jours</i>
                            </td>
                            <td>
                                <div>
                                    Je me demandais si vous aimiez ce genre de SF.
                                </div>
                                <div>
                                    <br>
                                    <a
                                            class="<?= $theme ?>_main_color" href="">Répondre</a> <a
                                            class="<?= $theme ?>_main_color" href="">Signaler</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </tr>
            </table>
            <form action="create_post" method="post" enctype="multipart/form-data">
                <label for="message">Your message :</label>
                <textarea class="<?= $theme ?>_main_color" name="message" id="message" cols="30" rows="10" placeholder="Please be polite with users"></textarea>
                <input type="submit" class="<?= $theme ?>_main_color" value="Send">
            </form>
        </td>
    </tr>
</table>
<?php include_once 'elements/footer.php' ?>
<!-- Messages overlay -->
<?php include_once 'elements/messages.php' ?>
<?php include_once 'elements/scripts.php' ?>
</body>
</html>