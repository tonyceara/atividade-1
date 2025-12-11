<?php
// TaskController.php - Intermediário entre a View e o Model

require_once 'TaskModel.php';

class TaskController {
    private $model;

    public function __construct() {
        $this->model = new TaskModel();
    }

    /**
     * Lida com a requisição de visualização da lista.
     */
    public function index() {
        // 1. O Controller solicita os dados ao Model.
        $tasks = $this->model->getAllTasks();

        // 2. O Controller carrega a View, passando os dados.
        // O array $tasks estará disponível dentro do arquivo View.
        require 'TaskView.php';
    }
}
