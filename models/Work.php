<?php
class Work
{
    private static string $table = 'works';

    function __construct()
    {
    }

    public static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT w.id, w.name, w.start_date, w.end_date, w.status, ws.name AS status_name
                FROM works w INNER JOIN work_status ws ON w.status = ws.id');

        return $req->fetchAll();
    }

    static function find($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM works WHERE id = :id');
        $req->execute(array('id' => $id));

        $item = $req->fetch();
        if (isset($item['id'])) {
            return $item;
        }
        return null;
    }
}