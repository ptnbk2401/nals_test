<?php
require_once('controllers/BaseController.php');
require_once('services/WorksService.php');

class WorksController extends BaseController
{
    protected $service;

    function __construct()
    {
        $this->folder = 'works';
        $this->service = new WorksService();
    }

    public function index()
    {
        $data = $this->service->data_list();
        $this->render('index', $data);
    }

    public function show()
    {
        $data = $this->service->data_show($_GET['id']);
        $this->render('show', $data);
    }

    public function create()
    {
        $data = $this->service->data_create();
        $this->render('create', $data);
    }
}