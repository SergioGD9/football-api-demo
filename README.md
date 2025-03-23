# football-api-demo

Este proyecto es una demostración de cómo utilizar una API pública para obtener información relacionada con el fútbol. Utilizando TheSportsDB, que proporciona datos gratuitos sobre equipos, jugadores y partidos, hemos construido una aplicación en PHP para hacer peticiones y mostrar los resultados dinámicamente en una página web.

## Tecnologías Utilizadas

- **PHP**: Backend para hacer las peticiones a la API y procesar los datos.
- **CSS**: Estilizado de la página para crear una interfaz visual atractiva.
- **TheSportsDB API**: API gratuita que proporciona datos sobre deportes, centrada en fútbol.

## Descripción

La aplicación permite hacer búsquedas de:

- Equipos por país.
- Equipos por nombre.
- Jugadores por nombre.

## Instalación

1. Clona este repositorio:

   ```bash
   git clone https://github.com/usuario/football-api-demo.git
      ```
   Asegúrate de tener XAMPP o un servidor local con PHP.

2. Coloca los archivos en la carpeta del servidor (por ejemplo, htdocs en XAMPP).

3. Accede al proyecto desde tu navegador local: http://localhost/football-api-demo.

¿Cómo funciona?
La aplicación realiza una solicitud GET a la API de TheSportsDB según el tipo de búsqueda (equipo, país o jugador). Los resultados se muestran dinámicamente en la página sin necesidad de recargar.

Contribuciones
Si quieres mejorar el proyecto, puedes realizar un fork, hacer tus cambios y enviar un pull request.
