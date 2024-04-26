<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0.7, maximum-scale=1.1">
    <title>Register | NCTerm</title>
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
 _       __     __
| |     / /__  / /________  ____ ___  ___
| | /| / / _ \/ / ___/ __ \/ __ `__ \/ _ \
| |/ |/ /  __/ / /__/ /_/ / / / / / /  __/
|__/|__/\___/_/\___/\____/_/ /_/ /_/\___/
            </pre>
            <br>
            <form action="register_process.php" method="post">
                <label for="first_name">First name</label>
                <input type="text" class="<?= $theme ?>_main_color" id="first_name" name="first_name" required>

                <label for="last_name">Last name</label>
                <input type="text" class="<?= $theme ?>_main_color" id="last_name" name="last_name" required>

                <label for="username">Username</label>
                <input type="text" class="<?= $theme ?>_main_color" id="username" name="username" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <!-- confirm email -->

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <button type="submit">Register</button>
            </form>
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