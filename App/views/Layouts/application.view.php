<html>
    <head>Application Layout</head>
    <body>
        <h2>Error: <?= $_SESSION['flash'] ?> </h2>
        <h1>This is layout</h1>
        <?php
            require $child;
        ?>
    </body>
</html>