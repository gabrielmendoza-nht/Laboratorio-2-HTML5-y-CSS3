<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Ejemplo de Estructura con Secciones Semánticas</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        header, nav, main, section, article, aside, footer {
            padding: 1.5em;
            margin: 0.5em;
            border: 2px dashed #ccc;
        }

        header {
            background-color: #f4f4f4;
        }

        nav {
            background-color: #e2e2e2;
        }

        main {
            background-color: #fff;
        }

        section {
            background-color: #fafafa;
        }

        article {
            background-color: #f0f8ff;
        }

        aside {
            background-color: #fff8dc;
        }

        footer {
            background-color: #333;
            color: #fff;
        }

    </style>

</head>

<body>

    <!-- Cabecera principal de la página -->
    <header>

        <h1>Diseño Web con HTML5 y CSS3</h1>

        <p>Aprendiendo HTML5 y CSS paso a paso</p>

    </header>


    <!-- Barra de navegación -->
    <nav>

        <ul>
            <!-- Estos dos enlaces apuntan a #inicio y #contacto, pero en
                 todo el documento no existe ningún elemento con
                 id="inicio" ni id="contacto". Son enlaces rotos:
                 al hacer clic, el navegador no desplazará la página
                 a ningún lado -->
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#cursos">Cursos</a></li>
            <li><a href="#contacto">Contacto</a></li>
