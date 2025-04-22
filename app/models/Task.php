<?php

require_once 'Database.php';

class Task {
    private $db;
    
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllTasks() {
        $stmt = $this->db->prepare("SELECT * FROM tasks ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getTaskById($id) {
        $stmt = $this->db->prepare("SELECT * FROM tasks WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function createTask($title, $description) {
        $stmt = $this->db->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
        return $stmt->execute([$title, $description]);
    }
    
    public function updateTask($id, $title, $description, $is_completed) {
        $stmt = $this->db->prepare("UPDATE tasks SET title = ?, description = ?, is_completed = ? WHERE id = ?");
        return $stmt->execute([$title, $description, $is_completed, $id]);
    }
    
    public function deleteTask($id) {
        $stmt = $this->db->prepare("DELETE FROM tasks WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
