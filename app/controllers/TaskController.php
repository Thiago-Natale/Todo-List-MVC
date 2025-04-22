<?php
// app/controllers/TaskController.php

require_once __DIR__ . '/../models/dao/TaskDAO.php';

class TaskController {
    private $taskModel;
    
    public function __construct() {
        $this->taskModel = new TaskDAO();
    }
    
    // Lista as tarefas
    public function index() {
        $tasks = $this->taskModel->getAll();
        require __DIR__ . '/../views/tasks/index.php';
    }
    
    // Exibe o formulário para criar nova tarefa
    public function create() {
        require __DIR__ . '/../views/tasks/create.php';
    }
    
    // Salva a nova tarefa no banco de dados
    public function store() {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $this->taskModel->create($title, $description);
        header('Location: index.php');
    }
    
    // Exibe o formulário para editar a tarefa
    public function edit() {
        $id = $_GET['id'];
        $task = $this->taskModel->getById($id);
        require __DIR__ . '/../views/tasks/edit.php';
    }
    
    // Atualiza os dados da tarefa
    public function update() {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $is_completed = isset($_POST['is_completed']) ? 1 : 0;
        $this->taskModel->update($id, $title, $description, $is_completed);
        header('Location: index.php');
    }
    
    // Exclui a tarefa
    public function delete() {
        $id = $_GET['id'];
        $this->taskModel->delete($id);
        header('Location: index.php');
    }
}
