# Berkley Mexico - Aplicación Web

Aplicación web corporativa para **Berkley Mexico** desarrollada con [CakePHP](https://cakephp.org) 5.2.

El código fuente del framework se encuentra aquí: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Características

- Sitio web corporativo con información institucional
- Gestión de productos de seguros y fianzas
- Sistema de siniestros (seguros y fianzas)
- Portal para asegurados y productores (BIWeb)
- Formularios de contacto
- Integración con Google Maps
- Detección de dispositivos móviles
- Content Security Policy (CSP) configurado
- Protección CSRF habilitada
- Diseño responsive con Bootstrap
- Accesibilidad web (WCAG)

## Requisitos

- PHP >= 8.2, < 8.5 (compatible con PHP 8.2 y 8.3)
- Composer
- Extensiones PHP requeridas: `intl`, `mbstring`, `json`
- MySQL/MariaDB (opcional, no se utiliza actualmente)

> **Nota**: El proyecto está configurado para ser compatible con PHP 8.2. Las dependencias han sido restringidas para evitar paquetes que requieran PHP 8.4+.

## Instalación

1. Descarga [Composer](https://getcomposer.org/doc/00-intro.md) o actualiza con `composer self-update`.

2. Clona el repositorio:

```bash
git clone [url-del-repositorio] bkly_mexico
cd bkly_mexico
```

3. Instala las dependencias:

```bash
composer install
```

Si Composer está instalado globalmente:

```bash
composer install
```

4. Configura el archivo de entorno:

Copia `config/app.default.php` a `config/app.php` y edita la configuración según tu entorno:

```bash
cp config/app.default.php config/app.php
```

5. Configura los permisos de escritura:

Asegúrate de que los directorios `tmp/` y `logs/` tengan permisos de escritura:

```bash
chmod -R 775 tmp logs
```

En Windows, asegúrate de que estos directorios sean escribibles.

## Ejecución

### Servidor de desarrollo

Puedes usar el servidor web integrado de CakePHP:

```bash
bin/cake server -p 8765
```

O usar el servidor de desarrollo de PHP:

```bash
php -S localhost:8765 -t webroot
```

Luego visita `http://localhost:8765` para ver la aplicación.

### Servidor de producción

Configura tu servidor web (Apache/Nginx) para que apunte al directorio `webroot/` como raíz del documento.

## Configuración

### Archivos de configuración principales

- `config/app.php` - Configuración principal de la aplicación
- `config/routes.php` - Definición de rutas
- `config/csp.php` - Configuración de Content Security Policy
- `config/bootstrap.php` - Inicialización de la aplicación

### Variables de entorno

Puedes usar un archivo `.env` para configurar variables de entorno. Las principales son:

- `DEBUG` - Modo debug (true/false)
- `SECURITY_SALT` - Salt para seguridad
- `APP_ENCODING` - Codificación de caracteres (UTF-8)
- `APP_DEFAULT_LOCALE` - Idioma por defecto (es_MX, en_US, etc.)
- `APP_DEFAULT_TIMEZONE` - Zona horaria (America/Mexico_City, UTC, etc.)

> **Nota**: El proyecto no utiliza base de datos actualmente. La configuración de `Datasources` en `config/app.php` está presente pero con conexión lazy, por lo que no se establecerá conexión hasta que sea necesaria en el futuro.

## Estructura del Proyecto

```
bkly_mexico/
├── bin/                    # Scripts de consola
├── config/                  # Archivos de configuración
│   ├── app.php             # Configuración principal
│   ├── routes.php          # Definición de rutas
│   └── csp.php             # Configuración CSP
├── logs/                    # Archivos de log
├── plugins/                 # Plugins de CakePHP
├── src/                     # Código fuente de la aplicación
│   ├── Controller/         # Controladores
│   │   ├── PagesController.php
│   │   ├── InstitucionalesController.php
│   │   ├── SegurosController.php
│   │   ├── FianzasController.php
│   │   ├── SiniestrosController.php
│   │   └── ContactosController.php
│   ├── Model/               # Modelos y entidades
│   ├── templates/           # Plantillas de vistas
│   │   ├── Pages/           # Páginas estáticas
│   │   ├── Institucionales/ # Páginas institucionales
│   │   ├── Seguros/         # Páginas de seguros
│   │   ├── Fianzas/         # Páginas de fianzas
│   │   ├── Siniestros/      # Páginas de siniestros
│   │   ├── Contactos/       # Formularios de contacto
│   │   ├── Element/         # Elementos reutilizables
│   │   └── Layout/          # Layouts
│   └── View/                # Vistas y helpers
├── tmp/                     # Archivos temporales
├── vendor/                  # Dependencias de Composer
└── webroot/                 # Directorio público
    ├── css/                 # Hojas de estilo
    ├── js/                  # Scripts JavaScript
    ├── img/                 # Imágenes
    └── index.php            # Punto de entrada
```

## Funcionalidades Principales

### Secciones Institucionales

- **Berkley Corporation** - Información corporativa
- **Misión y Compromiso** - Valores y compromisos de la empresa
- **Carta del Presidente** - Mensaje del presidente
- **Grupo Berkley** - Información del grupo empresarial
- **RRHH** - Recursos humanos y oportunidades laborales

### Productos de Seguros

- **Seguros Corporativos**
  - Construcción
  - Monolínea
  - Seguro de Responsabilidad Civil
  - Seguro Múltiple Todo Riesgo
  - Seguro Marítimo Terrestre Aéreo

### Productos de Fianzas

- **Fianzas Administrativas**
- **Fianzas de Crédito**
- **Fianzas Judiciales**

### Siniestros

- **Siniestros de Seguros** - Gestión de siniestros de seguros
- **Siniestros de Fianzas** - Gestión de siniestros de fianzas

### Formularios y Contacto

- **Formulario de Contacto General**
- **Contacto ART** (Aseguradora de Riesgos del Trabajo)
- **Integración con Google Maps** para ubicación de oficinas

### Portales Externos

- **BIWeb** - Portal para productores, asegurados, empleados y recuperadores
- **Sistemas de Berkley** - Integración con sistemas corporativos

## Seguridad

- **CSRF Protection**: Habilitado en todas las rutas mediante `CsrfProtectionMiddleware`
- **Content Security Policy**: Configurado en modo report-only (ver `config/csp.php`)
  - Políticas configuradas para scripts, estilos, fuentes, imágenes y frames
  - Soporte para recursos externos (jQuery, Bootstrap, Font Awesome, Google Maps)
- **Security Headers**: Configurados mediante middleware

### Configuración CSP

El archivo `config/csp.php` contiene la configuración de Content Security Policy. Actualmente está en modo `report-only`, lo que significa que reporta violaciones sin bloquear recursos. Para activarlo completamente:

1. Edita `config/csp.php`
2. Cambia `'report-only' => false`
3. Verifica que no haya violaciones en la consola del navegador

## Tecnologías Utilizadas

- **Backend**: CakePHP 5.2
- **Frontend**: 
  - Bootstrap (CSS Framework)
  - jQuery 3.3.1
  - Font Awesome 5.2.0
  - iziModal (Modales)
  - iziToast (Notificaciones)
- **Seguridad**: 
  - paragonie/csp-builder ^3.0
  - CSRF Protection nativo de CakePHP
- **Utilidades**:
  - mobiledetect/mobiledetectlib ^3.74 (Detección de dispositivos móviles)

## Desarrollo

### Comandos útiles

```bash
# Verificar código (CodeSniffer)
composer cs-check

# Corregir automáticamente problemas de código
composer cs-fix

# Ver rutas disponibles
bin/cake routes

# Iniciar servidor de desarrollo
bin/cake server -p 8765
```

### Plugins de desarrollo

- **DebugKit**: Herramientas de depuración (solo en modo debug)
- **Bake**: Generador de código (solo en CLI)

## Rutas Principales

- `/` - Página de inicio
- `/berkley-corporation` - Berkley Corporation
- `/mision-y-compromiso` - Misión y Compromiso
- `/carta-del-presidente` - Carta del Presidente
- `/grupo-berkley` - Grupo Berkley
- `/rrhh` - Recursos Humanos
- `/seguros` - Productos de Seguros
- `/fianzas` - Productos de Fianzas
- `/siniestros/seguros` - Siniestros de Seguros
- `/siniestros/fianzas` - Siniestros de Fianzas
- `/contacto` - Formulario de Contacto
- `/aviso-de-privacidad` - Aviso de Privacidad
- `/informacion-financiera` - Información Financiera

## Actualización

Como este es un proyecto personalizado y varios archivos han sido modificados según las necesidades específicas, no hay una forma automatizada de actualizar. Las actualizaciones deben realizarse manualmente.

### Actualizar CakePHP

```bash
composer update cakephp/cakephp
```

### Actualizar todas las dependencias

```bash
composer update
```

> **Importante**: Antes de actualizar, asegúrate de tener un backup del proyecto y revisa las notas de versión de CakePHP para cambios que puedan afectar tu código.

## Versiones

- **PHP**: 8.2 o 8.3 (compatible con servidores que usan PHP 8.2)
- **CakePHP**: 5.2.*
- **Composer**: Última versión estable

> **Importante**: El proyecto está configurado con restricciones de plataforma para asegurar compatibilidad con PHP 8.2. Si necesitas instalar dependencias en un servidor con PHP 8.2, asegúrate de que `composer.json` tenga la configuración `"platform": {"php": "8.2"}` en la sección `config`.

## Soporte

Para más información sobre CakePHP, consulta:
- [Documentación oficial de CakePHP](https://book.cakephp.org/)
- [API Reference](https://api.cakephp.org/)
- [Foro de CakePHP](https://discourse.cakephp.org/)

## Licencia

Este proyecto es propiedad de Berkley Mexico.
