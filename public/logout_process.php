<?php

session_destroy();
header('Location: index.php?route=home');
exit();