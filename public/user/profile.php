<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <title>Profile | NCTerm</title>
</head>
<?php include_once 'elements/body.php' ?>
<!-- matrix rain columns -->
<?php include_once 'elements/canvas.php' ?>
<!--<div class="rain"></div>-->
<?php include_once 'elements/top_bar.php' ?>

<?php include_once 'elements/user_welcome.php' ?>
<?php include_once 'elements/link_panel.php' ?>

<!--<img width="300" src="images/chrome.webp" alt="">-->

<table id="grid">
    <tr id="sections">
        <?php include_once 'elements/menu.php' ?>
    </tr>
    <tr>
        <td>
            <h1>Profile</h1>
            <?php
            if (isset($_SESSION['user'])) {
                echo "
                        <img src='$image' alt='$username'>
                        <p>First name : $firstName</p>
                        <p>Last name : $lastName</p>
                        <p>Username : $username</p>
                        <p>Banned status : $banned</p>
                        <p>Email : $email</p>
                        <p>Role : $role</p>
                        <p>Signature : $signature</p>
                        <p>Favorite theme : $favoriteTheme</p>
                        <a
                            class=\"".$theme."_main_color\" href='../index.php?route=profile_modify'>Modify</a>
                    ";
            } else {
                echo "<p>Your are not connected yet.</p>";
            }
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