<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <title>Contact | NCTerm</title>
</head>
<?php include_once 'elements/body.php' ?>
<!-- matrix rain columns -->
<?php include_once 'elements/canvas.php' ?>
<!--<div class="rain"></div>-->

<!--<img width="300" src="images/chrome.webp" alt="">-->
<!--<font face="Courier New" size="1">-->
<?php include_once 'elements/top_bar.php' ?>

<?php include_once 'elements/user_welcome.php' ?>
<?php include_once 'elements/link_panel.php' ?>
<table id="grid">
    <tr>
        <td>
            <br>
            <pre class="neon_text">
   ______            __             __
  / ____/___  ____  / /_____ ______/ /_
 / /   / __ \/ __ \/ __/ __ `/ ___/ __/
/ /___/ /_/ / / / / /_/ /_/ / /__/ /_
\____/\____/_/ /_/\__/\__,_/\___/\__/
            </pre>
            <br>
            <p align="justified">
            </p>
        </td>
    </tr>
    <!--    <tr>-->
    <!--        <td id="footer" class="<?= isset($user) ? $user['favorite_theme'] : 'blue'; ?>_main_background">--><?php //include_once 'elements/footer.php' ?><!--</td>-->
    <!--    </tr>-->
</table>
<?php include_once 'elements/footer.php' ?>

<!-- Messages overlay -->
<?php include_once 'elements/messages.php' ?>

<!--</font>-->
<?php include_once 'elements/scripts.php' ?>
</body>
</html>