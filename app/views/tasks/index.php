<?php require __DIR__ . '/../header.php'; ?>
<h2>Lista de Tarefas</h2>
<?php if (count($tasks) > 0): ?>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li class="<?php echo $task['is_completed'] ? 'completed' : 'pending'; ?>">
                <div class="task-info">
                    <?php echo htmlspecialchars($task['title']); ?>
                    <br>
                    <small><?php echo $task['is_completed'] ? 'Concluída' : 'Pendente'; ?></small>
                </div>
                <div class="task-actions">
                    <a href="index.php?action=edit&id=<?php echo $task['id']; ?>">Editar</a>
                    <a href="index.php?action=delete&id=<?php echo $task['id']; ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Nenhuma tarefa encontrada.</p>
<?php endif; ?>
<?php require __DIR__ . '/../footer.php'; ?>
