```markdown
# Laravel SQL Queries - Actividad 2

Este proyecto es una actividad de la Academia Kodigo donde se realiza una serie de consultas SQL en Laravel usando Query Builder y Eloquent ORM. El objetivo es interactuar con una base de datos de usuarios y pedidos.

## Requisitos previos

- Tener Laravel 11 instalado.
- Tener MySQL instalado y funcionando.
- Tener Postman instalado para probar las APIs.

## Instalación

1. Clona este repositorio:

   ```bash
   git clone https://github.com/tuusuario/tu-repo.git
   ```

2. Navega al directorio del proyecto:

   ```bash
   cd tu-repo
   ```

3. Instala las dependencias:

   ```bash
   composer install
   ```

4. Configura el archivo `.env` con las credenciales de tu base de datos:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_base_de_datos
   DB_USERNAME=usuario
   DB_PASSWORD=contraseña
   ```

5. Ejecuta las migraciones para crear las tablas:

   ```bash
   php artisan migrate
   ```

6. Corre el servidor de desarrollo de Laravel:

   ```bash
   php artisan serve
   ```

   Ahora tu aplicación estará disponible en `http://127.0.0.1:8000`.

## Endpoints de la API

A continuación, se detallan los endpoints disponibles y cómo usarlos con Postman.

### 1. Insertar Datos (Usuarios y Pedidos)

Este endpoint insertará 5 usuarios y 5 pedidos asociados.

**Método:** `POST`

**URL:** `/insertar`

**Descripción:** Este endpoint insertará 5 registros de usuarios y 5 pedidos aleatorios asociados a esos usuarios.

Para probarlo con Postman:

1. Configura la solicitud como `POST`.
2. Ingresa la URL `http://127.0.0.1:8000/insertar`.
3. Haz clic en "Send" para ejecutar la petición.

### 2. Recuperar Pedidos de un Usuario (ID 2)

Este endpoint obtiene todos los pedidos asociados al usuario con ID 2.

**Método:** `GET`

**URL:** `/pedidos-usuario`

**Descripción:** Recupera todos los pedidos del usuario con ID 2.

Para probarlo con Postman:

1. Configura la solicitud como `GET`.
2. Ingresa la URL `http://127.0.0.1:8000/pedidos-usuario`.
3. Haz clic en "Send" para obtener los pedidos.

### 3. Obtener Información de los Pedidos con Detalles del Usuario

Este endpoint obtiene los pedidos junto con la información de los usuarios asociados.

**Método:** `GET`

**URL:** `/pedidos-detalles`

**Descripción:** Recupera todos los pedidos junto con los datos de los usuarios (nombre, correo, teléfono).

Para probarlo con Postman:

1. Configura la solicitud como `GET`.
2. Ingresa la URL `http://127.0.0.1:8000/pedidos-detalles`.
3. Haz clic en "Send" para obtener la información.

### 4. Recuperar Pedidos con Total entre $100 y $250

Este endpoint obtiene los pedidos cuyo total esté entre $100 y $250.

**Método:** `GET`

**URL:** `/pedidos-rango`

**Descripción:** Recupera todos los pedidos cuyo total esté dentro del rango de $100 a $250.

Para probarlo con Postman:

1. Configura la solicitud como `GET`.
2. Ingresa la URL `http://127.0.0.1:8000/pedidos-rango`.
3. Haz clic en "Send" para obtener los pedidos.

### 5. Encontrar Usuarios cuyo Nombre Comienza con 'R'

Este endpoint busca a los usuarios cuyo nombre comienza con la letra "R".

**Método:** `GET`

**URL:** `/usuarios-r`

**Descripción:** Recupera todos los usuarios cuyo nombre comienza con "R".

Para probarlo con Postman:

1. Configura la solicitud como `GET`.
2. Ingresa la URL `http://127.0.0.1:8000/usuarios-r`.
3. Haz clic en "Send" para obtener los usuarios.

### 6. Calcular el Total de Pedidos del Usuario con ID 5

Este endpoint obtiene la cantidad total de pedidos realizados por el usuario con ID 5.

**Método:** `GET`

**URL:** `/total-pedidos`

**Descripción:** Calcula el número total de pedidos realizados por el usuario con ID 5.

Para probarlo con Postman:

1. Configura la solicitud como `GET`.
2. Ingresa la URL `http://127.0.0.1:8000/total-pedidos`.
3. Haz clic en "Send" para obtener el total.

### 7. Obtener Pedidos Ordenados por Total (Descendente)

Este endpoint obtiene todos los pedidos ordenados de manera descendente según el total.

**Método:** `GET`

**URL:** `/pedidos-ordenados`

**Descripción:** Recupera todos los pedidos junto con la información de los usuarios, ordenados de forma descendente según el total del pedido.

Para probarlo con Postman:

1. Configura la solicitud como `GET`.
2. Ingresa la URL `http://127.0.0.1:8000/pedidos-ordenados`.
3. Haz clic en "Send" para obtener los pedidos ordenados.

### 8. Obtener la Suma Total del Campo 'Total' en Pedidos

Este endpoint obtiene la suma total del campo `total` de la tabla `pedidos`.

**Método:** `GET`

**URL:** `/suma-total`

**Descripción:** Calcula la suma total del campo `total` en la tabla de pedidos.

Para probarlo con Postman:

1. Configura la solicitud como `GET`.
2. Ingresa la URL `http://127.0.0.1:8000/suma-total`.
3. Haz clic en "Send" para obtener la suma.

### 9. Encontrar el Pedido Más Económico

Este endpoint obtiene el pedido más económico junto con el nombre del usuario asociado.

**Método:** `GET`

**URL:** `/pedido-economico`

**Descripción:** Recupera el pedido más económico y el nombre del usuario que lo realizó.

Para probarlo con Postman:

1. Configura la solicitud como `GET`.
2. Ingresa la URL `http://127.0.0.1:8000/pedido-economico`.
3. Haz clic en "Send" para obtener el pedido.

### 10. Obtener Producto, Cantidad y Total de Cada Pedido (Agrupado por Usuario)

Este endpoint agrupa los pedidos por usuario y muestra el producto, cantidad y total de cada uno.

**Método:** `GET`

**URL:** `/pedidos-agrupados`

**Descripción:** Recupera todos los pedidos agrupados por usuario con la información de producto, cantidad y total.

Para probarlo con Postman:

1. Configura la solicitud como `GET`.
2. Ingresa la URL `http://127.0.0.1:8000/pedidos-agrupados`.
3. Haz clic en "Send" para obtener los pedidos agrupados.

