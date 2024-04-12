<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <title>Modify profile | NCTerm</title>
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
            <h1>Profile modify</h1>
            <form action="index.php?route=profile_modify_process">
                <label for="first_name">First name</label>
                <input type="text" class="<?= $theme ?>_main_color" id="first_name" value="<?= $firstName ?>">
                <label for="first_name">Last name</label>
                <input type="text" class="<?= $theme ?>_main_color" id="last_name" value="<?= $lastName ?>">
                <label for="first_name">Email</label>
                <input type="email" id="email" value="<?= $email ?>">
                <label for="old_password">Old password</label>
                <input type="password" id="old_password">
                <label for="new_password">New password</label>
                <input type="password" id="new_password">
                <label for="profile_image">Profile image</label>
                <input type="file" id="profile_image"><br><br>
                <select name="favorite_theme" id="favorite_theme">
                    <option value="purple">Purple</option>
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                    <option value="yellow">Yellow</option>
                    <option value="orange">Orange</option>
                    <option value="red">Red</option>
                    <option value="grey">Grey</option>
                </select>
                <input type="submit" class="<?= $theme ?>_main_color" class="<?= isset($_SESSION['user']) ? $user['favorite_theme'] : 'blue'; ?>_main_color" value="Save">
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