<?php

class User
{
    private static $table = 'users';

    function __construct()
    {
    }

    public static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM '.self::$table);

//        foreach ($req->fetchAll() as $item) {
//            $list[] = new User();
//        }

        return $req->fetchAll();
    }
}