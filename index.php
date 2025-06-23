<?php
    const API_URL = "https://www.whenisthenextmcufilm.com/api";

    #Inicializar una nueva sesión de curl; ch = curl handle
    $ch = curl_init(url: API_URL);
    #Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
    curl_setopt(handle: $ch, option: CURLOPT_RETURNTRANSFER, value: true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    #Ejecutar la petición y guardar el resultado
    $result = curl_exec(handle: $ch);
    $data = json_decode(json: $result, associative: true);
    curl_close(handle: $ch);
?>

<head>
    <meta charset="UTF-8" />
    <title>
        🍿 La próxima película de Marvel
    </title>
    <meta name="description" content="La próxima película de Marvel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
</head>
<main>
    <section>
        <img 
            src="<?= $data["poster_url"] ?>" 
            width="300"
            alt="Poster de <?=$data["title"] ?>"
            style="border-radius: 20px;" />
    </section>
    <hgroup>
        <h2>La próxima película o serie de Marvel:</h2>
        <h3><?=$data["title"]; ?> se estrena en <?= $data["days_until"] ?> día(s)</h3>
        <p>Fecha de estreno: <?=$data["release_date"]  ?></p>
        <p>Y la siguiente es: <b><?=$data["following_production"]["title"] ?></b> y se estrena en <b><?=$data["following_production"]["release_date"] ?></b></p>
    </hgroup>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img {
        margin: 0 auto;
    }
</style>