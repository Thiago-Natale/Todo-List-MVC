<?php

require_once __DIR__ . '/../models/Task.php';

class TaskController {
    private $taskModel;
    
    public function __construct() {
        $this->taskModel = new Task();
    }
    
    public function index() {
        $tasks = $this->taskModel->getAllTasks();
        require __DIR__ . '/../views/tasks/index.php';
    }
    
    public function create() {
        require __DIR__ . '/../views/tasks/create.php';
    }
    
    public function store() {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $this->taskModel->createTask($title, $description);
        header('Location: index.php');
    }
    
    public function edit() {
        $id = $_GET['id'];
        $task = $this->taskModel->getTaskById($id);
        require __DIR__ . '/../views/tasks/edit.php';
    }
    
    public function update() {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $is_completed = isset($_POST['is_completed']) ? 1 : 0;
        $this->taskModel->updateTask($id, $title, $description, $is_completed);
        header('Location: index.php');
    }
    
    public function delete() {
        $id = $_GET['id'];
        $this->taskModel->deleteTask($id);
        header('Location: index.php');
    }
}
