<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <title>Login | NCTerm</title>
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
            <h1>Login</h1>
            <!--            <h2>This page was not found</h2>-->
            <form action="login_process.php" method="post">
                <label for="usernameOrEmail">Username or email:</label>
                <input type="text" class="<?= $theme ?>_main_color" id="usernameOrEmail" name="usernameOrEmail" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
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
