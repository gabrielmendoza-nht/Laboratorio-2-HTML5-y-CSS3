<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Ejemplo práctico de maquetación web con HTML5">

    <meta name="author"
          content="Profesor de Desarrollo Web">

    <!-- A diferencia de otros archivos del laboratorio (que usan "Description",
         "Author" con mayúscula inicial), aquí se usa minúsculas. Los nombres de
         meta son insensibles a mayúsculas para el navegador, pero conviene
         mantener un mismo estilo en todo el proyecto -->

    <title>Ejemplo Integral con Metadatos</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 2em;
            line-height: 1.6;
        }

        .card-seccion {
            background-color: #f4f6f9;
            border-left: 4px solid #007bff;
            padding: 1.5em;
            margin-bottom: 1em;
            border-radius: 4px;
        }

        #footer-recurso {
            margin-top: 1em;
            padding-top: 0.5em;
            border-top: 1px solid #dcdcdc;
            font-size: 0.9em;
            color: #555;
        }

        .link-externo {
            color: #d9534f;
            font-weight: bold;
            text-decoration: none;
        }

        .link-externo:hover {
            text-decoration: underline;
        }

        /* Esta regla no se usa en ningún lado del HTML: no hay ningún
           elemento <code> en el cuerpo del documento. Es CSS muerto;
           conviene eliminarlo o usarlo en algún ejemplo (por ejemplo,
           mostrando una etiqueta HTML como texto) */
        code {
            background-color: #e2e8f0;
            padding: 0.2em 0.4em;
            border-radius: 4px;
        }

    </style>
</head>

<body>

    <!-- Usamos una clase (.card-seccion) para dar estilo a esta sección en particular -->
    <section class="card-seccion">

        <h2>Ejemplo Práctico: Navegación Web</h2>

        <p>
            El siguiente párrafo contiene un hipervínculo que redirige
            al usuario hacia una página externa:
        </p>

        <p>
            Para obtener más información técnica, puedes visitar el siguiente

            <!-- Usamos una clase (.link-externo) para estilizar este enlace -->
            <!-- Buena práctica: se usa rel="noopener" junto con target="_blank",
                 lo cual evita que la página nueva tenga acceso a "window.opener"
                 (previene un vector de seguridad conocido) -->
            <!-- Punto de accesibilidad: como el enlace abre en una pestaña nueva,
                 sería recomendable añadir algo como aria-label="Enlace a PHP
                 (se abre en una pestaña nueva)" para avisar a usuarios de
                 lectores de pantalla -->
            <a href="https://es.wikipedia.org/wiki/PHP"
               target="_blank"
               rel="noopener"
               class="link-externo">
                Enlace a PHP
            </a>.
        </p>

        <!-- Usamos un ID (#footer-recurso) para un pie de sección -->
        <!-- Uso correcto de <footer> anidado dentro de <section>: en HTML5
             esto es válido y representa el pie de esa sección en particular,
             no el pie de toda la página -->
        <footer id="footer-recurso">
            <p>
                <strong>Nota:</strong>
                Este enlace abre una fuente externa de consulta académica.
                Última revisión: 2026.
            </p>
        </footer>

    </section>

</body>
</html>
