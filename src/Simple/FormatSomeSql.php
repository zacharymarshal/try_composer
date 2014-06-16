<?php

namespace Simple;

use SqlFormatter;

class FormatSomeSql
{
    public static function format($query)
    {
        return SqlFormatter::format($query);
    }
}
