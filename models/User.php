<?php

class User
{
    private static $table = 'users';

    function __construct()
    {
    }

    public static function all()
    {
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM '.self::$table);

        return $req->fetchAll();
    }
}