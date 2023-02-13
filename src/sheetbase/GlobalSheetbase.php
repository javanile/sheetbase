<?php

namespace App;

use Javanile\Sheetbase\Database;

/**
 * This class handles setting up dagd to handle a request.
 */
final class GlobalSheetbase
{
    protected static $globalSheetbase;


    public static function getInstance()
    {
        if (GlobalSheetbase::$globalSheetbase === null) {
            GlobalSheetbase::$globalSheetbase = new Database([
                'provider' => 'google',
                'json_file' => getenv('GOOGLE_AUTH_JSON_FILE'),

                'database' => [
                    'test' => getenv('GOOGLE_DATABASE'),
                ],

                'cache' => false,
            ]);
        }

        return GlobalSheetbase::$globalSheetbase;
    }
}

