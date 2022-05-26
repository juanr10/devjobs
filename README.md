<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About DEVJobs

DEVJobs es una aplicación hecha con el Framwork Laravel que simula una plataforma de búsqueda de empleo. Está destinada a que usuarios (applicants) puedan buscar una oferta y suscribirse a la misma. 

Por otra parte estaría el rol del administrador (creador de la vacante) que dispone de un backend destinado a un CRUD de las vacantes. Desde allí también podrá activar o deshabilitar sus vacantes y ver todos los usuarios suscritos a las mismas para establecer contacto (será notificado cada vez que alguien se suscriba a una).

## Características

Por el momento algunas de las características de este proyecto son:

- Maquetación realizada con el Framework CSS TailwindCSS.
- Autenticación básica y registro.
- Uso de relaciones entre modelos (N:N y 1:1).
- CRUD del modelo Vacant.
- Uso de seeders para inicializar rápidamente el proyecto.
- Uso de policies para limitar las acciones en el modelo Vacante.
- Uso de Notificaciones.
- Uso de componentes VUEJS para añadir reactividad a la administración de vacantes.
- Subida de archivos al servidor.

## Setup proyecto

- Inicializar cualquier servidor local.
- Clonar el proyecto: git clone https://github.com/juanr10/devjobs.git
- Configuración .env (bases de datos y Mailer)
- Ejecutar comando: composer install.
- Ejecutar comando: npm run dev.
- Ejecutar comando: php artisan migrate --seed
- Acceder al proyecto vía web.
- Acceso backend vacantes -> usuario: admin@admin.com | contraseña: password
