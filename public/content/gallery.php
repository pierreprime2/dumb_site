<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <title>Gallery | NCTerm</title>
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
   ______      ____
  / ____/___ _/ / /__  _______  __
 / / __/ __ `/ / / _ \/ ___/ / / /
/ /_/ / /_/ / / /  __/ /  / /_/ /
\____/\__,_/_/_/\___/_/   \__, /
                         /____/
            </pre>
            <img src="../assets/images/gallery.png" alt="" id="illustrate">

            <p id="img_gallery">////////// VISIT MY IMAGES GALLERY ! //////////</p><br><br>
<!--            <img class="poster" src="images/gallery/blade_runner.jpg" alt="">-->
<!--            <img class="poster" src="images/gallery/akira.jpg" alt="">-->
<!--            <img class="poster" src="images/gallery/terminator_2_le_jugement_dernier.png" alt="">-->
<!--            <img class="poster" src="images/gallery/johnny_mnemonic.jpg" alt="">-->
<!--            <img class="poster" src="images/gallery/matrix.jpg" alt="">-->
<!--            <img class="poster" src="images/gallery/megazone_23.jpg" alt="">-->
<!--            <img class="poster" src="images/gallery/robocop.jpg" alt="">-->
<!--            <img class="poster" src="images/gallery/total_recall.webp" alt="">-->
<!--            <img class="poster" src="images/gallery/judge_dredd.png" alt="">-->
            <?= (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') ? '
            <form action="create_image.php" method="post" enctype="multipart/form-data">
                <label for="file">Upload an image file :</label>
                <input id="illustration_file" name="illustration_file" type="file" accept=".jpg,.jpeg,.png,.gif">
                <label for="title">Légende :</label>
                <input type="text" class="'.$theme.'_main_color" id="title" name="title">
                <input type="submit" class="'.$theme.'_main_color" value="Validate">
            </form>' : '<br>'; ?>
        </td>
    </tr>
</table>

<?php include_once 'elements/footer.php' ?>
<!-- Messages overlay -->
<div style="display: none" id="overlay" class="hidden">
    <?php include_once 'elements/messages.php' ?>
    <?php include_once 'elements/gallery.php' ?>
</div>
<?php include_once 'elements/scripts.php' ?>
</body>
</html>