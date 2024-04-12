<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <title>Tabletop | NCTerm</title>
</head>
<?php include_once 'elements/body.php' ?>
<?php include_once 'elements/canvas.php' ?>

<?php include_once 'elements/top_bar.php' ?>

<?php include_once 'elements/user_welcome.php' ?>
<?php include_once 'elements/link_panel.php' ?>

<!--<img width="300" src="images/chrome.webp" alt="">-->
<font face="Courier New" size="1">
    <table id="grid">
        <tr>
            <td>
                <pre class="neon_text">
  ______      __    __     __
 /_  __/___ _/ /_  / /__  / /_____  ____
  / / / __ `/ __ \/ / _ \/ __/ __ \/ __ \
 / / / /_/ / /_/ / /  __/ /_/ /_/ / /_/ /
/_/  \__,_/_.___/_/\___/\__/\____/ .___/
                                /_/
                </pre>
                <img src="images/tabletop.jpg" alt="" id="illustrate">
                <p><img width="50" src="images/book.png" alt="">
                    Ressources JDR</p>
                <ul>
                    <li><a
                                class="<?= $theme ?>_main_color" href="">Cyberpunk 2013</a></li>
                    <li><a
                                class="<?= $theme ?>_main_color" href="">Cyberpunk 2020</a></li>
                    <li><a
                                class="<?= $theme ?>_main_color" href="">Shadowrun</a></li>
                    <li><a
                                class="<?= $theme ?>_main_color" href="">Alien</a></li>
                </ul>
            </td>
        </tr>
    </table>
</font>

<?php include_once 'elements/footer.php' ?>
<!-- Messages overlay -->
<?php include_once 'elements/messages.php' ?>
<?php include_once 'elements/scripts.php' ?>
</body>
</html>