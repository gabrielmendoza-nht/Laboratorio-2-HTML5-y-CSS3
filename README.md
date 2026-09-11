# Laboratorio 2 — HTML5 y CSS3

Colección de ejercicios prácticos que exploran distintas capacidades de **HTML5** y **CSS3**: maquetación de tablas, metadatos, secciones semánticas y selectores CSS. Los archivos están escritos con extensión `.php` porque incluyen fragmentos mínimos de PHP (por ejemplo, `date("Y")` para el año dinámico en el pie de página), aunque el contenido principal es HTML/CSS.

## 📂 Contenido del repositorio

| Archivo | Descripción |
|---|---|
| `lab2 problema 1.php` | Tabla de informe de gastos de viaje usando `<table>`, `<caption>`, `<th>` con atributos `id`/`headers`/`axis` para asociar celdas de encabezado con datos. |
| `lab2 problema 2.css` | Hoja de estilos para tablas: define clases `.tabla`, `.modo1` y `.modo2` con bordes, tipografías y colores alternados por fila. |
| `lab2 problema 3.css` | Estilos para el selector `p strong`, aplicando tipografía, color y fondo a texto resaltado dentro de párrafos. |
| `lab2 problema 4 .php` | Ejemplo integral de maquetación con metadatos (`description`, `author`), una sección con clase (`.card-seccion`), un enlace externo estilizado y un pie de sección con `id`. |
| `lab2 problema 5.php` | Estructura semántica completa de una página con `<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<aside>` y `<footer>`, cada uno diferenciado visualmente por color de fondo. |
| `lab2 problema 6.php` | Demostración de selectores CSS: universal (`*`), por tipo, por clase, por ID, descendiente (`p strong`) y de hijo directo (`p > strong`). |

## 🎯 Objetivos de aprendizaje

- Practicar la estructura semántica de HTML5 (`header`, `nav`, `main`, `section`, `article`, `aside`, `footer`).
- Construir tablas HTML accesibles usando atributos de asociación (`id`, `headers`, `axis`).
- Aplicar y diferenciar tipos de selectores CSS (universal, tipo, clase, ID, descendiente e hijo).
- Usar metadatos (`meta description`, `meta author`, `meta keywords`) para SEO y accesibilidad básica.
- Combinar HTML/CSS con una línea mínima de PHP dinámico (fecha actual en el footer).

## 🛠️ Tecnologías utilizadas

- **HTML5**
- **CSS3**
- **PHP** (uso puntual, solo para contenido dinámico simple)

## 🚀 Cómo visualizar los ejercicios

Como algunos archivos usan `<?php ... ?>`, necesitas un servidor con PHP para verlos correctamente (los archivos `.css` no requieren servidor; solo están enlazados por los `.php` correspondientes).



**Opción 2 — Abrir directamente en el navegador:**
Los archivos que no dependen de `<?php ?>` (como el problema 1 o el 6) pueden abrirse haciendo doble clic sobre el archivo; el navegador los interpretará como HTML plano (la etiqueta `<?php ?>`, si existe, simplemente no se ejecutará).

## 👤 Autor

**Gabriel Mendoza** ([@gabrielmendoza-nht](https://github.com/gabrielmendoza-nht))
