<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="Description" content="Ejemplo practico de maquetacion de web con HTLM5" />
    <meta name="Keywords" content="HTML5" />

    <meta name="Distribution" content="Global" />
    <meta name="Author" content="Profesor de Desarrollo Web" />
    <meta name="Robots" content="index,follow" />

    <title>Tabla 1</title>
</head>

<body>

<table>
    <caption>Informe de gastos de viaje</caption>

    <tr>
        <th></th>
        <th>Comida</th>
        <th>Hotel</th>
        <th>Transporte</th>
        <th>Subtotal</th>
    </tr>

    <tr>
        <th id="buenos-aires" axis="buenos-aires">
            Buenos Aires
        </th>
    </tr>

    <tr>
        <th headers="buenos-aires">25-Ago-97</th>
        <td>37.34</td>
        <td>112.00</td>
        <td>45.00</td>
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
        <td>379.02</td>
    </tr>

    <tr>
        <th id="cordoba" axis="cordoba">
            Córdoba
        </th>
    </tr>

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
        <td>800.27</td>
    </tr>

</table>

</body>
</html>