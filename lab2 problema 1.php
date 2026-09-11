<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Typo: dice "HTLM5" en vez de "HTML5" -->
    <meta name="Description" content="Ejemplo practico de maquetacion de web con HTLM5" />
    <meta name="Keywords" content="HTML5" />

    <meta name="Distribution" content="Global" />
    <meta name="Author" content="Profesor de Desarrollo Web" />
    <meta name="Robots" content="index,follow" />

    <title>Tabla 1</title>
</head>

<body>

<!-- Falta enlazar la hoja de estilos "lab2 problema 2.css",
     que define las clases .tabla, .modo1 y .modo2 pensadas para esta tabla.
     Ejemplo: <link rel="stylesheet" href="lab2 problema 2.css"> -->

<table>
    <caption>Informe de gastos de viaje</caption>

    <!-- Falta envolver esta fila en <thead> para separar
         semánticamente el encabezado del cuerpo de la tabla -->
    <tr>
        <!-- th vacío no aporta nada semánticamente; mejor <td></td>
             o añadir scope explícito en las celdas de abajo -->
        <th></th>
        <!-- Falta scope="col" en cada th de encabezado de columna -->
        <th>Comida</th>
        <th>Hotel</th>
        <th>Transporte</th>
        <th>Subtotal</th>
    </tr>

    <!-- A partir de aquí debería abrir <tbody> -->

    <!-- Esta fila solo tiene 1 celda mientras la tabla tiene 5 columnas,
         por lo que queda descuadrada visualmente.
         Debería llevar colspan="5" para abarcar todo el ancho.
         Además, "axis" es un atributo obsoleto de HTML4, no debe usarse en HTML5. -->
    <tr>
        <th id="buenos-aires" axis="buenos-aires">
            Buenos Aires
        </th>
    </tr>

    <!-- Formato de fecha inconsistente: "25-Ago-97" vs "27-ago97" más abajo -->
    <tr>
        <th headers="buenos-aires">25-Ago-97</th>
        <td>37.34</td>
        <td>112.00</td>
        <td>45.00</td>
        <!-- Esta celda de Subtotal queda vacía en cada fila diaria;
             si no se va a calcular, considera indicarlo con "—" en vez de dejarla vacía -->
        <td></td>
    </tr>

    <tr>
        <th headers="buenos-aires">26-Ago-97</th>
        <td>27.28</td>
        <td>112.00</td>
        <td>45.00</td>
        <td></td>
    </tr>

    <tr>
        <th headers="buenos-aires">Subtotales</th>
        <td>65.00</td>
        <td>224.00</td>
        <td>90.00</td>
        <!-- 65.00 + 224.00 + 90.00 = 379.00, no 379.02.
             Revisar si es un error de tipeo en el dato original -->
        <td>379.02</td>
    </tr>

    <!-- Misma observación que arriba: falta colspan="5" y "axis" está obsoleto -->
    <tr>
        <th id="cordoba" axis="cordoba">
            Córdoba
        </th>
    </tr>

    <!-- Formato de fecha sin guion, inconsistente con "25-Ago-97" -->
    <tr>
        <th headers="cordoba">27-ago97</th>
        <td>96.00</td>
        <td>109.00</td>
        <td>36.00</td>
        <td></td>
    </tr>

    <tr>
        <th headers="cordoba">28-ago97</th>
        <td>35.00</td>
        <td>109.00</td>
        <td>36.00</td>
        <td></td>
    </tr>

    <tr>
        <th headers="cordoba">Subtotales</th>
        <td>196.27</td>
        <td>442.00</td>
        <td>162.00</td>
        <!-- 196.27 + 442.00 + 162.00 = 800.27, este sí cuadra correctamente -->
        <td>800.27</td>
    </tr>

</table>

</body>
</html>
