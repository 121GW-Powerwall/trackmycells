# trackmycells
This is a repo to help build the trackmycells website, a opensource website to 
help DIY powerwall builders track there cells.

To get this site to work you will need to add a db.php file in the config 
directory with the following informtion.

<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=<database location>;dbname=<database name>',
    'username' => '<username>',
    'password' => '<password>',
    'charset' => 'utf8',
];

