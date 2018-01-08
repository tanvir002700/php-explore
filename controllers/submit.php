<h1>this is submit page</h1>
<?php

$app['database']->insert('tasks', [
    'title' => $_POST['title'],
    'description' => $_POST['description']
]);