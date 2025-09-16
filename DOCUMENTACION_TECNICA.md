# Documentación Técnica: soon-InnovaByte

## Descripción General

soon-InnovaByte es una aplicación web de tipo "coming soon" que presenta una página de inicio atractiva y funcional para anunciar el lanzamiento de un producto o servicio. Incluye integración para envío de correos electrónicos, recursos gráficos, y una estructura moderna basada en HTML, CSS y JavaScript.

## Estructura de Carpetas y Archivos

* `index.html`, `index1.html`: Páginas principales de la aplicación.
* `send\\\_email.php`: Script PHP para el envío de correos electrónicos.
* `assets/`: Recursos adicionales, incluyendo plantillas y librerías externas.

  * `PHPMailer-master/`: Librería para el envío de correos vía PHP.

* `css/`: Hojas de estilo para la interfaz (Bootstrap, estilos personalizados, iconos, etc.).
* `fonts/`: Fuentes utilizadas en la aplicación.
* `images/`: Imágenes y recursos gráficos.
* `js/`: Scripts JavaScript para animaciones, interacción y funcionalidades adicionales.
* `PHPMailer/`: Librería PHPMailer y archivos relacionados para el envío de emails.

## Principales Tecnologías Utilizadas

* **HTML5**: Estructura de las páginas web.
* **CSS3**: Estilos visuales, animaciones y diseño responsivo.
* **JavaScript/jQuery**: Interactividad, animaciones y manejo de eventos.
* **Bootstrap**: Framework CSS para diseño responsivo.
* **PHP**: Backend para el envío de correos electrónicos.
* **PHPMailer**: Librería para el envío seguro y flexible de emails.

## Funcionalidades Clave

* Página "coming soon" con diseño moderno y responsivo.
* Animaciones y efectos visuales (flexslider, headlines, zoomslider, etc.).
* Formulario de contacto con validación y envío de email.
* Integración con PHPMailer para el envío de correos.
* Recursos gráficos optimizados para web.

## Configuración y Uso

1. **Despliegue**: Copiar todos los archivos y carpetas al servidor web.
2. **Configuración de correo**: Editar `send\\\_email.php` para configurar los parámetros SMTP y credenciales de correo.
3. **Personalización**: Modificar imágenes, textos y estilos en las carpetas `images/`, `css/` y los archivos HTML según la marca.
4. **Dependencias**: PHPMailer ya está incluido en la carpeta `PHPMailer/` y `assets/PHPMailer-master/`.

## Seguridad

* Se recomienda proteger el script de envío de correo (`send\\\_email.php`) contra spam y ataques de inyección.
* Mantener actualizada la librería PHPMailer.

## Créditos y Licencias

* PHPMailer: [https://github.com/PHPMailer/PHPMailer](https://github.com/PHPMailer/PHPMailer)
* Bootstrap: [https://getbootstrap.com/](https://getbootstrap.com/)
* Otros recursos y plantillas están sujetos a sus respectivas licencias.

## Contacto y Soporte

Para soporte técnico, contactar al equipo de desarrollo o revisar la documentación de las librerías incluidas.

---

*Última actualización: 4 de septiembre de 2025*
Subido a GITHUB - 04-09/2025 a las 19:30 horas

