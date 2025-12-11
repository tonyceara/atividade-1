<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas (MVC Simples)</title>
</head>
<body>

    <h1>Minhas Tarefas</h1>

    <?php if (!empty($tasks)): ?>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li><?php echo htmlspecialchars($task); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhuma tarefa encontrada.</p>
    <?php endif; ?>

</body>
</html>
