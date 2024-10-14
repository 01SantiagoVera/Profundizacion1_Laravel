<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
# Practic-os: Sistema de Gestión de Prácticas Empresariales

## Descripción del Proyecto

**Practic-os** es un Sistema de Gestión de Prácticas Empresariales diseñado para los estudiantes de Ingeniería de Software de la Universidad de Santander (UDES). Este sistema busca automatizar el proceso de búsqueda, selección, seguimiento y evaluación de las prácticas empresariales, facilitando la interacción entre los estudiantes y las empresas.

### Problema a Resolver

Actualmente, la gestión de prácticas empresariales en la UDES se realiza manualmente, lo que genera ineficiencias, pérdida de información y dificultades en la conexión entre estudiantes y empresas. **Practic-os** surge como una solución para optimizar este proceso, mejorando la experiencia de estudiantes y empresas.

## Funcionalidades Principales

### 1. Catálogo de Empresas
- Almacena información de empresas interesadas en recibir practicantes.
- Incluye datos de contacto, áreas de interés y perfiles de estudiantes buscados.

### 2. Perfiles de Estudiantes
- Registra la información académica y profesional de los estudiantes.
- Permite registrar habilidades, intereses y disponibilidad para prácticas.

### 3. Ofertas de Prácticas
- Las empresas pueden publicar ofertas de prácticas detallando requisitos, duración, remuneración y beneficios.

### 4. Postulación y Selección
- Los estudiantes pueden buscar y postularse a las ofertas de prácticas.
- Las empresas pueden revisar y seleccionar candidatos para sus vacantes.

### 5. Seguimiento y Evaluación
- Permite realizar un seguimiento del progreso de los estudiantes durante sus prácticas.
- Incluye la asignación de tutores (empresariales y académicos) y la evaluación del desempeño de los estudiantes.

### 6. Generación de Reportes
- Facilita la generación de informes sobre la participación de estudiantes y empresas.
- Permite analizar resultados y detectar áreas de mejora en el programa de prácticas.

## Arquitectura del Sistema

El proyecto está basado en el framework PHP **Laravel**. Se están utilizando las siguientes tecnologías:

- **Backend**: Laravel
- **Frontend**: Blade con Livewire
- **Base de Datos**: MySQL
- **Agrupación de Activos**: Vite

El proyecto se está desarrollando localmente utilizando **Laragon** como entorno de servidor.

## API

### Endpoints Principales:

1. **Gestión de Empresas y Estudiantes**: Permite registrar, actualizar y consultar información sobre empresas y estudiantes.
2. **Ofertas de Prácticas**: Las empresas pueden crear, editar y listar ofertas de prácticas.
3. **Postulación y Selección**: Los estudiantes pueden postularse a ofertas, y las empresas pueden seleccionar a los candidatos.
4. **Seguimiento y Evaluación**: Registro del progreso de los estudiantes y asignación de tutores.
5. **Reportes**: Generación de informes personalizados.

## Consideraciones Adicionales

- **Integración con Sistemas Existentes**: El sistema podría integrarse con el sistema académico de la UDES para obtener información sobre los estudiantes.
- **Notificaciones**: Implementación de un sistema de notificaciones para mantener a los usuarios informados sobre ofertas, postulaciones y selecciones.
- **Privacidad y Seguridad**: Cumplir con las regulaciones de protección de datos personales.

## Configuración del Proyecto

### Requisitos Previos

- **PHP 8.0 o superior**
- **Composer**
- **MySQL**
- **Node.js y npm** (para manejar activos con Vite)
- **Laragon** (para ejecutar el entorno localmente)

### Pasos para Configurar

1. Clonar el repositorio:

   ```bash
   git clone https://github.com/usuario/practic-os.git
   cd practic-os

2. Instalar dependencias de PHP y JavaScript:
     ```bash
   composer install
   npm install
   
3. Configurar el archivo .env con tus credenciales de base de datos.

4. Ejecutar migraciones:
    ```bash
   php artisan migrate
5. Ejecutar el servidor de desarrollo con Laragon o usando el comando:
-   Abre Laragon.
-  Asegúrate de que el servicio Apache o Nginx esté activo.
-  Navega hasta la carpeta del proyecto y selecciona la opción "www" en Laragon para acceder al sitio localmente.
     ```bash
      php artisan serve

6. (Opcional) Compilar activos front-end:
   ```bash
    npm run build

### Contribuciones
Si deseas contribuir a este proyecto, puedes hacer un fork y enviar un pull request. Todos los comentarios y sugerencias son bienvenidos.

### Licencia
Este proyecto está bajo la Licencia MIT.

