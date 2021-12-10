<?php

class BaseController
{
    protected $folder;

    function render($file, $data = array())
    {
        $view_file = 'views/' . $this->folder . '/' . $file . '.php';
        if (is_file($view_file)) {
            extract($data);
            ob_start();
            require_once($view_file);
            $content = ob_get_clean();
            require_once('views/layouts/application.php');
        } else {
            header('Location: index.php?controller=pages&action=error');
        }
    }

    function response($data = null)
    {
        $response = [
            'STATUS' => 0
        ];

        if ($data != null) {
            $response = array_merge($data, $response);
        }

        echo json_encode($response);
    }
}
