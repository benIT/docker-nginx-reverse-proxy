<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: <?php echo getenv('color'); ?>;
            color:white;
        }
    </style>
    <meta charset="UTF-8">
    <title><?php echo getenv('color'); ?></title>
</head>
<body>
<h1><?php echo getenv('color'); ?></h1>

<script>
    setTimeout(function(){
        window.location.reload(1);
    }, 1000);
</script>
</body>
</html>