<h1>this is submit page</h1>
<?php

App::get('database')->insert('tasks', [
    'title' => $_POST['title'],
    'description' => $_POST['description']
]);