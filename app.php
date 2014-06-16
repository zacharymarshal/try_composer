<?php

require_once 'vendor/autoload.php';

use Simple\FormatSomeSql;

echo FormatSomeSql::format("SELECT * FROM users");
