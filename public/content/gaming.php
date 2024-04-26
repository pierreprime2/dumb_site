<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <title>Gaming | NCTerm</title>
</head>
<?php include_once 'elements/body.php' ?>
<?php include_once 'elements/canvas.php' ?>

<?php include_once 'elements/top_bar.php' ?>

<?php include_once 'elements/user_welcome.php' ?>
<?php include_once 'elements/link_panel.php' ?>
<!--<img width="300" src="images/chrome.webp" alt="">-->
<table id="grid">
    <tr>
        <td>
            <pre class="neon_text">
   ______                _
  / ____/___ _____ ___  (_)___  ____ _
 / / __/ __ `/ __ `__ \/ / __ \/ __ `/
/ /_/ / /_/ / / / / / / / / / / /_/ /
\____/\__,_/_/ /_/ /_/_/_/ /_/\__, /
                             /____/
            </pre>
            <img src="../assets/images/gaming.png" alt="" id="illustrate">
            <p>Here we'll focus on 1980s and 1990s computer gaming mainly, centered on science-fiction themes.</p>
            <table border="solid" class="data_array" style="font-size: 5px">
                <tr>
                    <td>Game name</td>
                    <td>Studio</td>
                    <td>Year</td>
                    <td>Cover</td>
                </tr>
                <tr>
                    <td>Imitation City</td>
                    <td>DataWest</td>
                    <td>1987</td>
                    <td><img src="images/covers/games/imitation_city.jpg" alt="" class="cover"></td>
                </tr>
                <tr>
                    <td>Metal Gear</td>
                    <td>Konami</td>
                    <td>1987</td>
                    <td><img src="images/covers/games/metal_gear.png" alt="" class="cover"></td>
                </tr>
                <tr>
                    <td>Akira</td>
                    <td>Taito</td>
                    <td>1988</td>
                    <td><img src="images/covers/twitch.jpg" alt="" class="cover"></td>
                </tr>
                <tr>
                    <td>Flashback</td>
                    <td>Delphine Software</td>
                    <td>1992</td>
                    <td><img src="images/covers/front_by_front.jpg" class="cover" alt=""></td>
                </tr>
                <tr>
                    <td>Shadowrun</td>
                    <td>Beam Software</td>
                    <td>1993</td>
                    <td><img src="images/covers/pretty_hate_machine.jpg" class="cover" alt=""></td>
                </tr>
                <tr>
                    <td>Syndicate</td>
                    <td>Bullfrog</td>
                    <td>1993</td>
                    <td><img src="images/covers/pretty_hate_machine.jpg" class="cover" alt=""></td>
                </tr>
                <tr>
                    <td>System Shock</td>
                    <td>Looking Glass Studios</td>
                    <td>1994</td>
                    <td><img src="images/covers/pretty_hate_machine.jpg" class="cover" alt=""></td>
                </tr>
                <tr>
                    <td>Syndicate Wars</td>
                    <td>Bullfrog</td>
                    <td>1996</td>
                    <td><img src="images/covers/pretty_hate_machine.jpg" class="cover" alt=""></td>
                </tr>
                <tr>
                    <td>Final Fantasy VII</td>
                    <td>Square</td>
                    <td>1997</td>
                    <td><img src="images/covers/pretty_hate_machine.jpg" class="cover" alt=""></td>
                </tr>
                <tr>
                    <td>Ghost in the Shell</td>
                    <td>Exact</td>
                    <td>1998</td>
                    <td><img src="images/covers/pretty_hate_machine.jpg" class="cover" alt=""></td>
                </tr>
                <tr>
                    <td>Half-Life</td>
                    <td>Valve</td>
                    <td>1998</td>
                    <td><img src="images/covers/pretty_hate_machine.jpg" class="cover" alt=""></td>
                </tr>
                <tr>
                    <td>System Shock</td>
                    <td>Irrational/Looking Glass</td>
                    <td>1999</td>
                    <td><img src="images/covers/pretty_hate_machine.jpg" class="cover" alt=""></td>
                </tr>
                <tr>
                    <td>Deus Ex</td>
                    <td>Ion Storm</td>
                    <td>2000</td>
                    <td><img src="images/covers/pretty_hate_machine.jpg" class="cover" alt=""></td>
                </tr>
            </table>
            <?php

            echo (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') ? '
            <form action="create_game.php" method="post" enctype="multipart/form-data">
                <label for="title">Title :</label>
                <input type="text" class="'.$theme.'_main_color" id="title" name="title" required>
                <label for="studio">Studio :</label>
                <input type="text" class="'.$theme.'_main_color" id="studio" name="studio" required>
                <label for="editor">Editor :</label>
                <input type="text" class="'.$theme.'_main_color" id="editor" name="editor" required>
                <label for="max_players">Max players</label>
                <input type="number" id="max_players" name="max_players">
                <label for="illustration_file">Cover illustration (optional) :</label>
                <input type="file" id="illustration_file" name="illustration_file">
                <label for="year">Release year :</label>
                <input type="number" id="year" min="0" max="9999" name="year" required>
                <label for="online">Online ?</label>
                <input type="checkbox" id="online" name="online" value="1">
                <input type="submit" class="'.$theme.'_main_color" value="Add game">
            </form>' : '<br>'; ?>
        </td>
    </tr>
</table>
<?php include_once 'elements/footer.php' ?>
<!-- Messages overlay -->
<?php include_once 'elements/messages.php' ?>
<?php include_once 'elements/scripts.php' ?>
</body>
</html>