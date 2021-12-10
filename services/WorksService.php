<?php
require_once('models/Work.php');
require_once('models/WorkStatus.php');

class WorksService
{
    function __construct()
    {
        $this->folder = 'works';
    }

    /**
     * data_list
     *
     * @return array
     */
    public function data_list()
    {
        return array(
            'works' => Work::all()
        );
    }

    /**
     * data_show
     *
     * @param $id
     * @return array
     */
    public function data_show($id)
    {
        $work = Work::find($id);
        $workStatus = WorkStatus::all();
        return array('work' => $work, 'work_status' => $workStatus);
    }

    /**
     * data_create
     *
     * @return array
     */
    public function data_create()
    {
        $workStatus = WorkStatus::all();
        return array('work_status' => $workStatus);
    }

    /**
     * insert work
     *
     * @return bool
     */
    public function insert_work($request)
    {
        $param = [
            'name' => strip_tags($request['name']),
            'start_date' => strip_tags($request['start_date']),
            'end_date' => strip_tags($request['end_date']),
            'status' => strip_tags($request['status']),
        ];
        $work = new Work($param['name'], $param['start_date'], $param['end_date'], $param['status']);

        return Work::insert($work);
    }

    /**
     * update work
     *
     * @return bool
     */
    public function update_work($request)
    {
        $param = [
            'id' => strip_tags($request['id']),
            'name' => strip_tags($request['name']),
            'start_date' => strip_tags($request['start_date']),
            'end_date' => strip_tags($request['end_date']),
            'status' => strip_tags($request['status']),
        ];
        $work = new Work($param['name'], $param['start_date'], $param['end_date'], $param['status'], $param['id']);

        return Work::update($work);
    }

    /**
     * delete work
     *
     * @return bool
     */
    public function delete_work($request)
    {
        return Work::delete(strip_tags($request['id']));
    }
}