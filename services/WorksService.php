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
}