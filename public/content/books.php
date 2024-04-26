<!DOCTYPE html>
<html>
<head>
    <?php include_once 'elements/header.php' ?>
    <title>Books | NCTerm</title>
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
    ____              __
   / __ )____  ____  / /_______
  / __  / __ \/ __ \/ //_/ ___/
 / /_/ / /_/ / /_/ / ,< (__  )
/_____/\____/\____/_/|_/____/

            </pre>
            <img id="illustrate" height="200px" src="../assets/images/books.jpg" alt=""><br><br>
            <table class="data_array" border="solid" width="100%">
                <tr>
                    <td>Titre</td>
                    <td>Auteur</td>
                    <td>Année</td>
                    <td>Résumé</td>
                </tr>
                <tr>
                    <td>Do Androids dream of electronic sheeps ?</td>
                    <td>Philip K. Dick</td>
                    <td>1968</td>
                    <td><img class="cover" src="images/covers/books/DoAndroidsDream.png" alt=""></td>
                </tr>
                <tr>
                    <td>The girl who was plugged in</td>
                    <td>James Tiptree Jr.</td>
                    <td>1973</td>
                    <td><img class="cover" src="images/covers/books/The_Girl_Who_Was_Plugged_In.jpg" alt=""></td>
                </tr>
                <tr>
                    <td>True Names</td>
                    <td>Vernor Vinge</td>
                    <td>1981</td>
                    <td><img class="cover" src="images/covers/books/True_names.cover.jpg" alt=""></td>
                </tr>
                <tr>
                    <td>Ware tetralogy</td>
                    <td>Rudy Rucker</td>
                    <td>1982</td>
                    <td><img class="cover" src="images/covers/books/Software_(novel).jpg" alt=""></td>
                </tr>
                <tr>
                    <td>Sprawl Trilogy</td>
                    <td>William Gibson</td>
                    <td>1984</td>
                    <td><img class="cover" src="images/covers/books/Neuromancer_(Book).jpg" alt=""></td>
                </tr>
                <tr>
                    <td>Dr Adder</td>
                    <td>K.W. Jeter</td>
                    <td>1984</td>
                    <td><img class="cover" src="images/covers/books/Dr._Adder.jpg" alt=""></td>
                </tr>
                <tr>
                    <td>Schismatrix</td>
                    <td>Bruce Sterling</td>
                    <td>1985</td>
                    <td><img class="cover" src="images/covers/books/Schismatrix(1stEd).jpg" alt=""></td>
                </tr>
            </table>
            <?php
            echo (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') ? '
            <h1>Insert a new book</h1>
            <form action="create_book.php" method="post" enctype="multipart/form-data">
                <label for="title">Title :</label>
                <input type="text" class="'.$theme.'_main_color" id="title" name="title">
                <label for="author">Author :</label>
                <input type="text" class="'.$theme.'_main_color" id="author" name="author">
                <label for="illustrator">Illustrator :</label>
                <input type="text" class="'.$theme.'_main_color" id="illustrator" name="illustrator">
                <label for="isbn">ISBN :</label>
                <input type="text" class="'.$theme.'_main_color" id="isbn" name="isbn">
                <label for="release_date">Release date :</label>
                <input type="date" id="release_date" name="release_date">
                <label for="page_nb">Nb of pages :</label>
                <input type="number" id="page_nb" name="page_nb">
                <label for="cover_file">Cover image :</label>
                <input type="file" id="cover_file" name="cover_file">
                <input type="submit" class="'.$theme.'_main_color" content="Add book">
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