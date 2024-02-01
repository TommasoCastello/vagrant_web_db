<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do</title>
    <link rel="stylesheet" href="application/css/style.css">
</head>

<body>

    <main>
        <h1>Cosa devo fare?</h1>
        <a href="<?php echo URL . "todo" ?>" class="add_todo">Aggiungi un'attività</a>
        <table>
            <thead>
                <tr>
                    <th>Quando</th>
                    <th colspan="2">Titolo della tua attività</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($todoArray); $i++): $todo = $todoArray[$i]; ?>
                <tr>
                    <td><?php echo $todo->data ?></td>
                    <td><?php echo $todo->titolo ?></td>
                    <td><a href="<?php echo URL . "todo/view/" . $todo->id ?>">Visualizza</a></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </main>

</body>

</html>