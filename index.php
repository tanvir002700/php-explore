<html>
    <head>
        <title>Mini Mvc</title>
    </head>
    <body>
        <?php

            require 'vendor/autoload.php';
            require 'core/Initializer.php';

            require Router::load('routes.php')
                -> direct(Request::uri(), Request::method());
        ?>
    </body>
</html>

