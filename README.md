# 🍿 Proyecto: ¿Cuándo es la Próxima Película de Marvel?

Este es un pequeño proyecto diseñado como un mini-curso para entender algunos de los conceptos básicos y más útiles de PHP en un entorno web. La aplicación consulta una API pública para obtener información sobre el próximo estreno del Universo Cinematográfico de Marvel y la muestra en una página web sencilla y estilizada.

*Imagina aquí una captura de pantalla de tu proyecto funcionando*

## 🚀 Tecnologías Utilizadas

* **PHP 8+**: El lenguaje de backend que da vida al proyecto.
* **cURL**: Extensión de PHP para realizar peticiones HTTP y consumir APIs externas.
* **HTML5**: Para la estructura semántica de la página.
* **Pico.css**: Un micro-framework CSS para dar estilos atractivos con el mínimo esfuerzo y sin necesidad de clases.

## 🧠 Conceptos Clave de PHP Aprendidos

Este script es una excelente introducción a varias prácticas fundamentales:

### 1. Consumo de APIs Externas con cURL

El corazón del proyecto. Aprenderás el flujo básico para obtener datos de cualquier API REST:

* `const API_URL`: Definir la URL de la API en una constante para fácil mantenimiento.
* `curl_init()`: Iniciar una sesión cURL.
* `curl_setopt()`: Configurar la petición. Aquí se ven dos opciones cruciales:
    * `CURLOPT_RETURNTRANSFER`: Para indicarle a cURL que nos devuelva el resultado como una variable en lugar de imprimirlo directamente en pantalla.
    * `CURLOPT_SSL_VERIFYPEER` y `CURLOPT_SSL_VERIFYHOST`: Se desactivan para evitar problemas de certificados SSL en entornos locales (ver nota de seguridad más abajo).
* `curl_exec()`: Ejecutar la petición y obtener los datos.
* `curl_close()`: Liberar los recursos del sistema cerrando la sesión cURL.

### 2. Manejo de Datos en Formato JSON

Las APIs modernas hablan en JSON. Aquí verás cómo convertir una respuesta JSON en un formato nativo de PHP:

* `json_decode($result, associative: true)`: Transforma el string JSON obtenido de la API en un array asociativo de PHP. El segundo parámetro (`associative: true`) es clave para poder acceder a los datos de forma intuitiva como `$data["title"]`.

### 3. Incrustar PHP en HTML

La magia de PHP para crear páginas dinámicas. Se utiliza la sintaxis de eco abreviada `<?= ... ?>` para insertar directamente los valores del array `$data` en el código HTML, mostrando el póster, el título y las fechas de estreno.

### 4. Estructura Básica de un Script Web

El archivo muestra una estructura común donde el procesamiento de datos (la lógica de PHP) se realiza en la parte superior del archivo, y la presentación (el HTML) se realiza en la parte inferior, utilizando las variables que se prepararon previamente.

## ⚙️ Instalación y Uso

Para ejecutar este proyecto en tu máquina local, sigue estos pasos:

1.  **Prerrequisitos**:
    * Tener **PHP 8** o superior instalado.
    * Asegurarte de que la extensión **cURL** de PHP está activada en tu archivo `php.ini`.

2.  **Clona el repositorio** (o simplemente guarda el archivo `index.php` en una carpeta):

    ```bash
    git clone [https://github.com/tu-usuario/tu-repositorio.git](https://github.com/tu-usuario/tu-repositorio.git)
    cd tu-repositorio
    ```