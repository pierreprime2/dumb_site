<table id="left_grid" class="<?= $theme ?>_main_border">
<tr>
    <td id="home_button">
        <a
                class="<?= $theme ?>_main_color" id="<?= $theme.'_home' ?>" href="">
            <div id="home_link" class="<?= isset($user) ? $user['favorite_theme'] : 'blue'; ?>_main_background">
                <a
                        class="<?= $theme ?>_main_color" href="index.php?route=home">HOME</a>
            </div>
            <div class="image_container">
            <img width="200" src="images/brscreen.JPG" alt="">
                <table class="overlay_table">
                    <tr>
                        <td class="menu_item <?= $theme.'_main_background' ?>"><a
                                    class="<?= $theme ?>_main_color" href="index.php?route=music">Music</a></td>
                    </tr>
                    <tr>
                        <td class="menu_item <?= $theme.'_main_background' ?>"><a
                                    class="<?= $theme ?>_main_color" href="index.php?route=gaming">Games</a></td>
                    </tr>
                    <tr>
                        <td class="menu_item <?= $theme.'_main_background' ?>"><a
                                    class="<?= $theme ?>_main_color" href="index.php?route=movies">Movies</a></td>
                    </tr>
                    <tr>
                        <td class="menu_item <?= $theme.'_main_background' ?>"><a
                                    class="<?= $theme ?>_main_color" href="index.php?route=books">Books</a></td>
                    </tr>
                    <tr>
                        <td class="menu_item <?= $theme.'_main_background' ?>"><a
                                    class="<?= $theme ?>_main_color" href="index.php?route=tabletop">Tabletop</a></td>
                    </tr>
                    <tr>
                        <td class="menu_item <?= $theme.'_main_background' ?>"><a
                                    class="<?= $theme ?>_main_color" href="index.php?route=forum_index">Forum</a></td>
                    </tr>
                    <tr>
                        <td class="menu_item <?= $theme.'_main_background' ?>"><a
                                    class="<?= $theme ?>_main_color" href="index.php?route=gallery">Gallery</a></td>
                    </tr>
                    <tr>
                        <td class="menu_item <?= $theme.'_main_background' ?>"><a
                                    class="<?= $theme ?>_main_color" href="index.php?route=prog">Programming</a></td>
                    </tr>
                </table>
            </div>
            <!--            //// Home ////-->
<!--            <pre class="neon_text">-->
<!-- _  _  ___  __  __ ___-->
<!--| || |/ _ \|  \/  | __|-->
<!--| __ | (_) | |\/| | _|-->
<!--|_||_|\___/|_|  |_|___|-->
<!--            </pre>-->
        </a>
        <a
                class="<?= $theme ?>_main_color" href="index.php?route=profile"><p id="connected_as" class="<?= isset($user) ? $user['favorite_theme'] : 'blue'; ?>_main_background">Connected as <?= isset($_SESSION['user']) ? $_SESSION['user']['username'] : 'anonymous'; ?></p></a><br>
        <?php
            echo isset($_SESSION['user']) ? '
            <img id="user_avatar" width="50" src="../images/avatars/'.$profileImageUrl.'" alt=""><br>
            ' : '<br>';
        ?>

        <?php

            echo isset($_SESSION['user']) ? '
                <a
                    class="'.$theme.'_main_color" href="index.php?route=logout">Logout</a>
            ' : '
                <a
                    class="'.$theme.'_main_color" href="index.php?route=register">Register</a>
                <a
                    class="'.$theme.'_main_color" href="index.php?route=login">Login</a>
            ';
        ?>
        <a
                class="<?= $theme ?>_main_color" href="index.php?route=contact">Contact</a><br><br>
    </td>
</tr>
</table>