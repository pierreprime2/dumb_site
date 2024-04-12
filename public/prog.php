<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <title>Prog | NCTerm</title>
</head>
<body class="<?= isset($_SESSION['user']) ? $user['favorite_theme'] : 'blue'; ?>_main_color" text="#32cd32" bgcolor="black" id="crt">
<?php include_once 'elements/canvas.php' ?>

<?php include_once 'elements/top_bar.php' ?>

<?php include_once 'elements/user_welcome.php' ?>
<?php include_once 'elements/link_panel.php' ?>

<table id="grid">
    <tr>
        <td>
            <pre class="neon_text">
   ______          ___
  / ____/___  ____/ (_)___  ____ _
 / /   / __ \/ __  / / __ \/ __ `/
/ /___/ /_/ / /_/ / / / / / /_/ /
\____/\____/\__,_/_/_/ /_/\__, /
                         /____/
            </pre>
            <img id="illustrate" src="images/prog.gif" alt="">
            <p>
                So you decided to code like it's 1995 or so ? Here are some resources.
            </p><br>
            <!-- content here -->
            <table border="solid">
                <tr>
                    <td>
                        Topic
                    </td>
                    <td>Link & stuff</td>
                </tr>
                <tr>
                    <td>Linux in the 1990s</td>
                    <td>
                        <p>You can download Debian 2.1 "Slink" and see how this distro looked like in march
                            1999.</p>
                        <a
                                class="<?= $theme ?>_main_color" href="https://www.debian.org/releases/slink/">Debian 2.1 Slink</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Windows 98 ISO Download
                    </td>
                    <td>
                        <a
                                class="<?= $theme ?>_main_color" href="https://lecrabeinfo.net/telecharger/windows-98-second-edition">Windows 98 SE</a>
                        <p>Avec Windows 98 vous pourrez faire tourner les jeux nécessitant un environnement
                            MS-DOS.</p>
                    </td>
                </tr>
                <tr>
                    <td>The GNU Project</td>
                    <td>
                        <a
                                class="<?= $theme ?>_main_color" href="https://www.gnu.org/home.fr.html">GNU Project</a>
                        <p>Project started in 1984 with RMS</p>
                    </td>
                </tr>
                <tr>
                    <td>Kid Pix, the classic drawing program</td>
                    <td><a
                                class="<?= $theme ?>_main_color" href="https://kidpix.app/">Visit here to remember childhood memories !</a></td>
                </tr>
                <tr>
                    <td>Mac OS 8, the last 68K Mac OS</td>
                    <td>Discover Mac OS 8, released in 1997 and running best on Macintosh LC 475 !</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<?php include_once 'elements/footer.php' ?>
<!-- Messages overlay -->
<?php include_once 'elements/messages.php' ?>
<?php include_once 'elements/scripts.php' ?>
</body>
</html>