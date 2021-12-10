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

    public function store()
    {
        if (isset($_POST['submit']) && !empty($_POST['submit'])) {
            if (empty($_POST['name'])
                || empty($_POST['start_date'])
                || empty($_POST['end_date'])
                || empty($_POST['status'])
            ) {
                flash('works_store', 'Create Failed', FLASH_ERROR);
                header('location: ' . URLROOT . '/?controller=works&action=create');
                exit();
            }

            $this->service->insert_work($_POST);

            flash('works_store', 'Create success', FLASH_SUCCESS);
            header('location: ' . URLROOT . '/?controller=works&action=index');
        } else {
            header('location: ' . URLROOT . '/?controller=works&action=create');
        }
    }

    public function update()
    {
        if (isset($_POST['submit']) && !empty($_POST['submit']) && !empty($_GET['id'])) {
            if (empty($_POST['name'])
                || empty($_POST['start_date'])
                || empty($_POST['end_date'])
                || empty($_POST['status'])
            ) {
                flash('works_store', 'Update Failed', FLASH_ERROR);
                header('location: ' . URLROOT . '/?controller=works&action=show&id=' . $_GET['id']);
            }

            $this->service->update_work($_REQUEST);

            flash('works_store', 'Update success', FLASH_SUCCESS);
            header('location: ' . URLROOT . '/?controller=works&action=index');
        } else {
            header('location: ' . URLROOT . '/?controller=works&action=show&id=' . $_GET['id']);
        }
    }

    public function destroy()
    {
        if (isset($_POST['submit']) && !empty($_POST['submit'])) {
            $result = $this->service->delete_work($_REQUEST);

            if ($result) {
                flash('works_store', 'Delete success', FLASH_SUCCESS);
            } else {
                flash('works_store', 'Delete failed', FLASH_ERROR);
            }
        }
        header('location: ' . URLROOT . '/?controller=works&action=index');
    }

    public function api_list()
    {
        $data = $this->service->data_list();

        $this->response(['data' => $data['works']]);
    }
}
