<td width="15%" bgcolor="#DDFFFF" valign="center">
  <a href="../index.php?controlador=Principal&accion=principal">Principal</a>
  <br><br>
  <a href="../index.php?controlador=Producto&accion=getProductos">Productos</a>
  <br><br>
  <?php
  if (isset($_SESSION['logged']) && $_SESSION['logged'] === true): ?>
    <a href="../index.php?controlador=Pedido&accion=getPedidos">Pedidos realizados</a>
    <br><br>
    <a href="../index.php?controlador=Cliente&accion=logout">Cerrar Sesión</a>
  <?php else: ?>
    <a href="../index.php?controlador=Cliente&accion=login">Acceso clientes</a>
  <?php endif; ?>
</td>