<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <title>Music | NCTerm</title>
</head>

<?php include_once 'elements/body.php' ?>
<?php include_once 'elements/canvas.php' ?>
<?php include_once 'elements/top_bar.php' ?>

<?php include_once 'elements/user_welcome.php' ?>
<?php include_once 'elements/link_panel.php' ?>

<table id="grid">
    <tr>
        <td>
            <pre class="neon_text">
    __  ___           _
   /  |/  /_  _______(_)____
  / /|_/ / / / / ___/ / ___/
 / /  / / /_/ (__  ) / /__
/_/  /_/\__,_/____/_/\___/
            </pre>
            <img id="illustrate" width="200" src="images/jogger.gif" alt="">
            <table border="solid" class="data_array" style="font-size: 5px">
                <tr>
                    <td>Album name</td>
                    <td>Artiste</td>
                    <td>Year</td>
                    <td>Cover</td>
                </tr>
                <tr>
                    <td>Computer World</td>
                    <td>Kraftwerk</td>
                    <td>1981</td>
                    <td><img src="images/covers/computerwelt.jpg" alt="" class="cover"></td>
                </tr>
                <tr>
                    <td>Planet Rock</td>
                    <td>Afrika Bambaata</td>
                    <td>1986</td>
                    <td><img src="images/covers/planet_rock.jpg" alt="" class="cover"></td>
                </tr>
                <tr>
                    <td>Twitch</td>
                    <td>Ministry</td>
                    <td>1986</td>
                    <td><img src="images/covers/twitch.jpg" alt="" class="cover"></td>
                </tr>
                <tr>
                    <td>Front by Front</td>
                    <td>Front 242</td>
                    <td>1988</td>
                    <td><img src="images/covers/front_by_front.jpg" class="cover" alt=""></td>
                </tr>
                <tr>
                    <td>Pretty Hate Machine</td>
                    <td>Nine Inch Nails</td>
                    <td>1989</td>
                    <td><img src="images/covers/pretty_hate_machine.jpg" class="cover" alt=""></td>
                </tr>
            </table>
            <br>
            <?php
            echo (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') ? '
            <h1>Add album</h1>
            <br>
            <form action="create_album.php" method="post" enctype="multipart/form-data">
                <label for="title">Title :</label>
                <input type="text" class="'.$theme.'_main_color" id="title" name="title" required>
                <label for="artist">Artist :</label>
                <input type="text" class="'.$theme.'_main_color" id="artist" name="artist">
                <label for="illustration_file">Cover illustration (optional) :</label>
                <input type="file" id="illustration_file" name="illustration_file">
                <label for="year">Release year :</label>
                <input type="number" id="year" min="0" max="9999" name="year" required>
                <input type="submit" class="'.$theme.'_main_color" value="Add album">
            </form><br>' : '<br>'; ?>
        </td>
    </tr>
    <tr>
        <td align="center">
        </td>
    </tr>
    <tr>
        <td>
        </td>
    </tr>
    <tr>
        <td>
        </td>
    </tr>
</table>

<?php include_once 'elements/footer.php' ?>
<!-- Messages overlay -->
<?php include_once 'elements/messages.php' ?>
<?php include_once 'elements/scripts.php' ?>
</body>
</html>