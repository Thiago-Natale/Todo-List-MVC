<?php require __DIR__ . '/../header.php'; ?>
<h2>Editar Tarefa</h2>
<form action="index.php?action=update" method="post">
    <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
    
    <label for="title">Título:</label><br>
    <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($task['title']); ?>" required><br><br>
    
    <label for="description">Descrição:</label><br>
    <textarea id="description" name="description"><?php echo htmlspecialchars($task['description']); ?></textarea><br><br>
    
    <label for="is_completed">
        <input type="checkbox" id="is_completed" name="is_completed" <?php echo $task['is_completed'] ? 'checked' : ''; ?>> Concluída
    </label><br><br>
    
    <button type="submit">Atualizar</button>
</form>
<?php require __DIR__ . '/../footer.php'; ?>
