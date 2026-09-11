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

        /* El problema pedagógico está aquí: "p strong" (descendiente) y
           "p > strong" (hijo directo) solo se comportan distinto cuando el
           <strong> NO es hijo directo de <p> sino que está más anidado
           (por ejemplo dentro de un <em> o <span> intermedio). En el HTML
           de abajo, los DOS ejemplos de <strong> son hijos directos de <p>,
           así que ambos selectores coinciden en ambos casos y el resultado
           visual es idéntico. El ejemplo no llega a demostrar la diferencia
           real entre selector descendiente y selector hijo */

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

    <!-- Este <strong> es hijo directo de <p>: coincide tanto con
         "p strong" como con "p > strong". Recibirá fondo amarillo
         Y borde negro -->
    <p>
        Este texto contiene un elemento
        <strong>strong directamente dentro del párrafo</strong>.
    </p>

    <div>

        <!-- Este <strong> también es hijo directo de su <p> (el <div>
             que lo envuelve no cambia esa relación, porque la relación
             padre-hijo se evalúa entre <p> y <strong>, no con el <div>).
             Por eso recibe exactamente el mismo estilo que el anterior,
             en vez de mostrar una diferencia -->
        <p>
            Este párrafo también contiene un
            <strong>elemento strong</strong>.
        </p>

    </div>

</body>
</html>
