<html>

<head>
   <title>
      Acceso de clientes
   </title>
</head>

<body>
   <table height=15% width=100%>
      <tr>
         <td bgcolor="FFFFDD" align=center valign=center>
            <h1>
               Electro Astorga
            </h1>
         </td>
      </tr>
   </table>
   <table height=85% width=100%>
      <tr>
         <td width=15% bgcolor="DDFFFF" valign=center>
            <a href="index.php">Principal</a>
            <br>
            <br>
            <a href="listado.php">Productos</a>
            <br>
            <br>
            <a href='pedidos.php'>Pedidos</a>
            <br>
            <br>
            <a href='login.php'>Acceso clientes</a>
            <br>
            <br>
            <a href='logout.php'>Cerrar sesi&oacute;n</a>
         </td>
         <td width=85% align=center valign=center>
            <h1>Identif&iacute;quese
            </h1>
            <!-- Formulario de identificación -->
            <form name="login" action="/index.php?controlador=Cliente&accion=login" method="POST">
               <table>
                  <tr>
                     <td align="right">
                        Usuario:
                     </td>
                     <td>
                        <input type="text" name="user">
                     </td>
                  </tr>
                  <tr>
                     <td align="right">
                        Contrase&ntilde;a:
                     </td>
                     <td>
                        <input type="text" name="pass">
                     </td>
                  </tr>
                  <tr>
                     <td>
                     </td>
                     <td>
                        <input type="submit" name="submit" value="Enviar">
                     </td>
                  </tr>
               </table>
            </form>
            <!-- Fin del formulario de identificación -->
         </td>
      </tr>
   </table>
</body>

</html>