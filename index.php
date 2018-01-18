<html>
    <head>
        <title>Mini Mvc</title>
    </head>
    <body>
        <?php

            use App\Core\Router;
            use App\Core\Request;

            require 'vendor/autoload.php';
            require 'core/Initializer.php';

            Router::load('routes.php')
                -> direct(Request::uri(), Request::method());
        ?>
    </body>
</html>

