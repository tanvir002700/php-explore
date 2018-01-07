<?php

require 'core/Initializer.php';

require Router::load('routes.php')
    -> direct(Request::uri());