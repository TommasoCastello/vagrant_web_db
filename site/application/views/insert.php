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
    <h1>Aggiungi un'attività</h1>
    <form action="<?php echo URL . "todo/create" ?>" method="post">
        <div>
            <label for="titolo">Il titolo della tua attività</label>
            <input type="text" name="titolo" id="titolo" placeholder="Automobile"></textarea>
        </div>
        <div>
            <label for="descrizione">Cosa devo fare</label>
            <textarea name="descrizione" id="descrizione" placeholder="Lavare l'automobile prima del viaggio."></textarea>
        </div>
        <div>
            <label for="data">Quando</label>
            <input type="date" name="data" id="data">
        </div>
        <div>
            <button type="submit">Salva</button>
            <a href="/">Annulla</a>
        </div>
    </form>
</main>

</body>

</html>