<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style/crt_test.css">
    <meta charset="utf-8">
</head>
<body class="<?= isset($_SESSION['user']) ? $user['favorite_theme'] : 'blue'; ?>_main_color">
<label for="switch" class="switch_label">Turn</label>
<input type="checkbox" id="switch" checked>
<div class="container">
    <iframe src="http://localhost:8000" class="screen" width="1024" height="768"></iframe>
    <div class="overlay">CRT</div>
</div>
</body>
</html>

