<?php
class WorkStatus
{
    public static function all()
    {
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM work_status');

        return $req->fetchAll();
    }
}