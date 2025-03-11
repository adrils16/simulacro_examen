# Simulacro de prueba de evaluación

## 1. Requisitos

Nuestro cliente, una tienda de venta por Internet, desea informatizar algunos procesos de su negocio para lo que nos solicita que diseñemos una aplicación WEB.

La información que pretende gestionar gira en torno a los clientes, los pedidos que realizan y los productos que compran. Los datos a tener en cuenta para los clientes son:

- **Código de cliente** (único)
- **Nombre**
- **Dirección de facturación**
- **Teléfono**
- **Alias de identificación** en la tienda
- **Contraseña**

Los clientes realizan pedidos. De cada pedido se quiere saber:

- **Código único**
- **Fecha**
- **Importe total**
- **Dirección de envío**
- **Productos de los que se compone**
- **Cantidad de cada producto**

Un pedido sólo puede ser realizado por un cliente. Para cada producto se almacenará:

- **Código único**
- **Nombre**
- **Descripción**
- **Precio**

### La aplicación WEB debe permitir:

- **Solicitar un listado** con todos los productos a la venta, mostrando su **nombre, precio y descripción**. Este listado debe estar disponible para todos los usuarios.
- **Consultar un pedido concreto**, mostrando su **código, fecha, productos y unidades**.  
  - Esta consulta solo estará disponible para usuarios **identificados**.
  - Un usuario identificado solo podrá acceder a los pedidos que ha realizado.

---

## 2. Base de datos

El equipo de bases de datos ha diseñado la base de datos con el siguiente esquema relacional:

```sql
Cliente (#cod, nombre, dir_fac, telef, alias, pass);
Pedido (#cod, fecha, importe, dir_env, cod_cliente);
Formado (#cod_ped, #cod_prod, unidades);
Producto (#cod, nombre, descrip, precio);
```

### Restricciones de integridad referencial:

```sql
Pedido.cod_cliente ⊆ Cliente.cod;
Formado.cod_ped ⊆ Pedido.cod;
Formado.cod_prod ⊆ Producto.cod;
```

A partir de este esquema se ha creado la base de datos. Se puede importar en un **SGBD** desde el archivo:

📄 **[Tienda online.sql](https://app.box.com/s/81lv753hialshl8tbtsg4awj8s2zhceu)**

---

## 3. Presentación

El equipo de diseño WEB ha desarrollado las **páginas estáticas** de la aplicación. El esquema general incluye un **menú a la izquierda**, con opciones restringidas según los requisitos.

Las páginas entregadas son:

- **`index.php`** → Página de inicio accesible para todos los usuarios.
- **`listado.php`** → Listado de productos accesible para todos los usuarios.
- **`login.php`** → Página de acceso solo para usuarios anónimos.  
  - Envío de variables `user` y `pass` por **POST**.
- **`user_page.php`** → Página de bienvenida para usuarios identificados.  
  - **No accesible desde el menú**.
- **`pedidos.php`** → Página con un **desplegable** para seleccionar pedidos.  
  - Solo accesible para usuarios identificados.
  - Muestra los códigos de los pedidos realizados por el usuario.
- **`detalle_pedido.php`** → Página con detalles del pedido seleccionado en `pedidos.php`.  
  - **No accesible desde el menú**.
  - El pedido se recoge mediante **POST** en la variable `"pedido"`.

Las páginas estáticas se pueden descargar en el siguiente archivo:

📄 **[www Tienda online.zip](https://app.box.com/s/0oqtj6ol38o6p88xr0bsmtx1xsjsimyz)**

---

## 4. Se pide

Las tareas a realizar son:

1. **Desplegar la base de datos** en el **SGBD MySQL** de la máquina **Lubuntu1204t** suministrada.
2. **Desarrollar la aplicación WEB** con consultas a la base de datos a partir de las páginas estáticas.
3. **Desplegar la aplicación en un entorno LAMP** en la máquina **Lubuntu1204t**.
4. **Elaborar una pequeña guía** con las tareas y pruebas realizadas.

---