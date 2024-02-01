<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do - Detail - ID: <?php echo $todo->id ?></title>
    <link rel="stylesheet" href="../../application/css/style.css">
</head>

<body>

    <main>
        <h1><?php echo $todo->titolo ?></h1>
        <div>
            <label for="todo">Cosa devo fare</label>
            <p><?php echo $todo->descrizione ?>.</p>
        </div>
        <div>
            <label for="date">Quando</label>
            <?php echo $todo->data ?>
        </div>
        <div>
            <a href="<?php echo URL . "todo/delete/" . $todo->id ?>" class="delete">Elimina</a>
            <a href="/">Torna alla lista</a>
        </div>
    </main>

</body>

</html>