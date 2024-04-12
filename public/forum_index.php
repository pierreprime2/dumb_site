<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <title>Forum | NCTerm</title>
</head>
<?php include_once 'elements/body.php' ?>
<?php include_once 'elements/canvas.php' ?>

<?php include_once 'elements/top_bar.php' ?>

<?php include_once 'elements/user_welcome.php' ?>
<?php include_once 'elements/link_panel.php' ?>

<table id="grid" class="forum_grid">
    <tr>
        <td align="top">
            <pre class="neon_text">
    ______
   / ____/___  _______  ______ ___
  / /_  / __ \/ ___/ / / / __ `__ \
 / __/ / /_/ / /  / /_/ / / / / / /
/_/    \____/_/   \__,_/_/ /_/ /_/
            </pre>
            <img src="images/forum.gif" alt="" id="illustrate">
            <table class="data_array" border="solid" width="100%">
                <tr>
                    <td>Date</td>
                    <td>Sujet</td>
                    <td>Auteur</td>
                </tr>
                <tr>
                    <td>07-11-23</td>
                    <td><a
                                class="<?= $theme ?>_main_color" href="index.php?route=forum_topic">Vous aimez le cyberpunk les amis ?</a></td>
                    <td></td>
                </tr>
            </table>
            <br>
            <?php

                echo isset($_SESSION['user']) ? '
                <form id="post_form" action="create_topic" method="post" enctype="multipart/form-data">
                <label for="title">Title :</label>
                <input type="text" class="'.$theme.'_main_color" id="title" name="title">
                <label for="content">Message :</label>
                <textarea class="'.$theme.'_main_color" name="content" id="content" cols="30" rows="10" placeholder="Please be polite with other forum users."></textarea>
                <input type="submit" class="'.$theme.'_main_color" value="Create topic">
                </form>
                <br><br><br>
            ' : '';
            ?>

        </td>
    </tr>
</table>

<?php include_once 'elements/footer.php' ?>
<!-- Messages overlay -->
<?php include_once 'elements/messages.php' ?>
<?php include_once 'elements/scripts.php' ?>
</body>
</html>