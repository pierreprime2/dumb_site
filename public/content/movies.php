<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <title>Movies | NCTerm</title>
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
   /  |/  /___ _   __(_)__  _____
  / /|_/ / __ \ | / / / _ \/ ___/
 / /  / / /_/ / |/ / /  __(__  )
/_/  /_/\____/|___/_/\___/____/

            </pre>
            <img id="illustrate" src="../assets/images/movies.gif" alt="">
            <!-- content here -->
            <table class="data_array" border="solid" width="100%">
                <h1>Movies to watch</h1>
                <tr>
                    <td>Title</td>
                    <td>Poster</td>
                    <td>Year</td>
                    <td>Director</td>
                </tr>
                <tr>
                    <td>Westworld</td>
                    <td><img class="cover" src="images/covers/movies/mondwest.jpg" alt=""></td>
                    <td>1973</td>
                    <td>Michael Crichton</td>
                </tr>
                <tr>
                    <td>Futureworld</td>
                    <td><img class="cover" src="images/covers/movies/les_rescapes_du_futur.jpg" alt=""></td>
                    <td>1976</td>
                    <td>Richard T. Heffron</td>
                </tr>
                <tr>
                    <td>Escape from New-York</td>
                    <td><img class="cover" src="images/covers/movies/new_york_1997.jpg" alt=""></td>
                    <td>1981</td>
                    <td>John Carpenter</td>
                </tr>
                <tr>
                    <td>Burst City</td>
                    <td><img class="cover" src="images/covers/movies/burst_city.jpg" alt=""></td>
                    <td>1982</td>
                    <td>Sogo Ishii</td>
                </tr>
                <tr>
                    <td>Tron</td>
                    <td><img class="cover" src="images/covers/movies/tron.jpg" alt=""></td>
                    <td>1982</td>
                    <td>Steven Lisberger</td>
                </tr>
                <tr>
                    <td>Blade Runner</td>
                    <td><img class="cover" src="images/covers/movies/blade_runner.jpg" alt=""></td>
                    <td>1982</td>
                    <td>Ridley Scott</td>
                </tr>
                <tr>
                    <td>Brainstorm</td>
                    <td><img class="cover" src="images/covers/movies/brainstorm.jpg" alt=""></td>
                    <td>1983</td>
                    <td>Douglas Trumbull</td>
                </tr>
                <tr>
                    <td>Videodrome</td>
                    <td><img class="cover" src="images/covers/movies/videodrome.png" alt=""></td>
                    <td>1983</td>
                    <td>David Cronenberg</td>
                </tr>
                <tr>
                    <td>Repo Man</td>
                    <td><img class="cover" src="images/covers/movies/la_mort_en_prime.jpg" alt=""></td>
                    <td>1984</td>
                    <td>Alex Cox</td>
                </tr>
                <tr>
                    <td>Terminator</td>
                    <td><img class="cover" src="images/covers/movies/terminator.png" alt=""></td>
                    <td>1984</td>
                    <td>James Cameron</td>
                </tr>
                <tr>
                    <td>Brazil</td>
                    <td><img class="cover" src="images/covers/movies/brazil.jpg" alt=""></td>
                    <td>1985</td>
                    <td>Terry Gilliam</td>
                </tr>
            </table>
            <?php

            echo (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') ? '
            <form action="create_movie.php" method="post" enctype="multipart/form-data">
                <label for="title">Title :</label>
                <input type="text" class="'.$theme.'_main_color" id="title" name="title">
                <label for="director">Director :</label>
                <input type="text" class="'.$theme.'_main_color" id="director" name="director">
                <label for="release_date">Release date :</label>
                <input type="date" id="release_date" name="release_date">
                <label for="producer">Producer :</label>
                <input type="text" class="'.$theme.'_main_color" id="producer" name="producer">
                <!-- find correct input for duration -->
                <label for="duration">Duration :</label>
                <input type="number" id="duration" name="duration">
                <label for="poster">Poster image :</label>
                <input type="file" id="poster" name="poster">
                <input type="submit" class="'.$theme.'_main_color" value="Add movie">
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