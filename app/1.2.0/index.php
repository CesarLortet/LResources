<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.min.css">
    <title>v1.2.0 Examples</title>
</head>
<body class="bg-1">
<?php
foreach (glob(__DIR__.'/*.php') as $file) {
    if (basename($file) !== 'index.php') {
        include $file;
    }
}
?>
<script src="script.min.js"></script>
</body>
</html>
