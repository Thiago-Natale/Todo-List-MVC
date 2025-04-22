<?php require __DIR__ . '/../header.php'; ?>
<h2>Criar Nova Tarefa</h2>
<form action="index.php?action=store" method="post">
    <label for="title">Título:</label><br>
    <input type="text" id="title" name="title" required><br><br>
    
    <label for="description">Descrição:</label><br>
    <textarea id="description" name="description"></textarea><br><br>
    
    <button type="submit">Criar</button>
</form>
<?php require __DIR__ . '/../footer.php'; ?>
