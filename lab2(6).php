<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Ejemplo de Selectores CSS</title>

    <style>

        /* Selector universal */
        * {
            box-sizing: border-box;
        }


        /* Selector por tipo */
        p {
            font-family: Arial, sans-serif;
            font-size: 16px;
        }


        /* Selector de clase */
        .attention {
            background-color: #ffc;
            padding: 10px;
        }


        /* Selector ID */
        h2#offers {
            background-color: #ffc;
            padding: 10px;
        }


        /* Selector descendiente */
        p strong {
            background-color: #ffc;
        }


        /* Selector hijo */
        p > strong {
            border: 2px solid black;
        }

    </style>

</head>

<body>

    <h1>Ejemplo de Selectores CSS</h1>

    <h2 id="offers">Información importante</h2>

    <p>
        Este es un párrafo normal para demostrar
        el selector por tipo.
    </p>

    <p class="attention">
        Este párrafo utiliza un selector de clase.
    </p>

    <p>
        Este texto contiene un elemento
        <strong>strong directamente dentro del párrafo</strong>.
    </p>

    <div>

        <p>
            Este párrafo también contiene un
            <strong>elemento strong</strong>.
        </p>

    </div>

</body>
</html>