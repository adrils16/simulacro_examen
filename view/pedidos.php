<html>
 <head>
     <title>
     Pedidos
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
           <h1>
      Pedidos realizados
           </h1>
     Seleccione un pedido para ver los detalles.
           <br>
           <br>
           <!-- Formulario de selección de pedido -->
           <form name="pedidos" action="detalle_pedido.php" method="post">
               <table>
                <tr>
                    <td align="right">
                     Escoja pedido a partir del c�digo del mismo
                    </td>
                    <td>
                     <select name="pedido">
                         <option></option>
                     </select>
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
          </td>
      </tr>
     </table>
 </body>
</html>
