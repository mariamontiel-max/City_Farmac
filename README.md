# City Farmac

Sitio web de ejemplo para una farmacia, desarrollado con PHP, HTML, CSS y Bootstrap.

## Tecnologías utilizadas

- PHP 8+
- HTML5
- CSS3
- Bootstrap 5
- Font Awesome

## Instalación

1. Clonar o descargar el proyecto.
2. Copiar la carpeta dentro de `htdocs` si se utiliza XAMPP.
3. Iniciar Apache.
4. Revisar la ruta base en:

```php
config/ruta.php
```

La configuración actual es:

```php
define("BASE_URL", "/Maria_Montiel_ACN2AV_P1/City_Farmac/");
```

5. Abrir en el navegador:

```text
http://localhost/Maria_Montiel_ACN2AV_P1/City_Farmac/
```

Si la carpeta del proyecto cambia de nombre o ubicación, actualizar `BASE_URL`.

## Estructura del proyecto

```text
City_Farmac/
│
├── admin/
│   ├── categorias_admin.php
│   ├── comentarios_admin.php
│   ├── login.php
│   ├── marcas_admin.php
│   ├── panel_admin.php
│   ├── perfiles_admin.php
│   ├── productos_admin.php
│   ├── registro.php
│   └── usuarios_admin.php
│
├── assets/
│   ├── css/
│   │   └── style.css
│   └── img/
│       ├── agua-micelar.jpg
│       ├── crema-corporal.jpg
│       ├── desodorante-antitranspirante.jpg
│       ├── EDP.jpg
│       ├── protector-solar.jpg
│       └── shampoo-anticaida.php
│
├── config/
│   └── ruta.php
│
├── includes/
│   ├── footer_admin.php
│   ├── footer_publico.php
│   ├── header_admin.php
│   ├── header_publico.php
│   ├── mensaje_error.php
│   └── mensaje_exito.php
│
├── 404.php
├── contacto.php
├── index.php
├── listado_productos.php
└── producto.php
```

## Vistas públicas

- `/index.php` — Inicio
- `/listado_productos.php` — Listado de productos
- `/producto.php` — Detalle de producto
- `/contacto.php` — Contacto
- `/404.php` — Página de error 404

## Panel de administración

- `/admin/login.php` — Inicio de sesión
- `/admin/registro.php` — Registro
- `/admin/panel_admin.php` — Panel principal
- `/admin/productos_admin.php` — Administración de productos
- `/admin/categorias_admin.php` — Administración de categorías
- `/admin/marcas_admin.php` — Administración de marcas
- `/admin/comentarios_admin.php` — Administración de comentarios
- `/admin/usuarios_admin.php` — Administración de usuarios
- `/admin/perfiles_admin.php` — Administración de perfiles

## Características

- Diseño responsive con Bootstrap
- Navegación pública y administrativa
- Componentes reutilizables para header y footer
- Formularios con validación HTML5
- Vistas de productos, categorías, marcas, usuarios, perfiles y comentarios
- Página 404 personalizada
- Mensajes reutilizables de éxito y error

## Estado del proyecto

Actualmente el proyecto utiliza datos de ejemplo y no está conectado a una base de datos.

## Autor

Proyecto desarrollado para City Farmac.
