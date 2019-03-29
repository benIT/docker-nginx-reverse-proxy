<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php $color = getenv('color');
        echo $color ?>
    </title>
    <style>
        body {
            background-color: black;
        }

        .circle {
            width: 250px;
            height: 250px;
            border-radius: 125px;
            font-size: 15px;
            color: #fff;
            line-height: 250px;
            text-align: center;
            background-color: <?php echo getenv('color');?>;
        }
    </style>
</head>
<body>
<?php
file_put_contents('/data/log', $color . "\n", FILE_APPEND);
?>
<div class="circle">
    <span> <?php echo sprintf('dispatched on %s', $_SERVER['SERVER_ADDR']); ?></span>
</div>
<script>
    setTimeout(function () {
        window.location.reload(1);
    }, 1000);
</script>
</body>
</html>