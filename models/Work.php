<?php
class Work
{
    private static string $table = 'works';
    protected $id;
    protected $name;
    protected $start_date;
    protected $end_date;
    protected $status;

    function __construct($name, $start_date, $end_date, $status, $id = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->status = $status;
    }

    public static function all()
    {
        $db = DB::getInstance();
        $req = $db->query('SELECT w.id, w.name, w.start_date, w.end_date, w.status, ws.name AS status_name
                FROM works w INNER JOIN work_status ws ON w.status = ws.id ORDER BY w.id DESC');

        return $req->fetchAll();
    }

    public static function find($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM works WHERE id = :id ORDER BY id ASC');
        $req->execute(array('id' => $id));

        $item = $req->fetch();
        if (isset($item['id'])) {
            return $item;
        }

        return null;
    }

    public static function insert(Work $work)
    {
        $db = DB::getInstance();
        $req = $db->prepare('INSERT INTO works(name, start_date, end_date, status)
                                VALUES (:work_name, :start_date, :end_date, :status)');

        return $req->execute([
            'work_name' => $work->name,
            'start_date' => $work->start_date,
            'end_date' => $work->end_date,
            'status' => $work->status,
        ]);
    }

    public static function update(Work $work)
    {
        $db = DB::getInstance();
        $req = $db->prepare('UPDATE works SET name = :work_name, start_date = :start_date, end_date = :end_date,
                                    status = :status
                                    WHERE id = :id');

        return $req->execute([
            'id' => $work->id,
            'work_name' => $work->name,
            'start_date' => $work->start_date,
            'end_date' => $work->end_date,
            'status' => $work->status,
        ]);
    }

    public static function delete($id)
    {
        $work = self::find($id);
        if (!empty($work)) {
            $db = DB::getInstance();
            $req = $db->prepare('DELETE FROM works WHERE id = :id');

            return $req->execute([
                'id' => $id
            ]);
        }
        return false;
    }
}
