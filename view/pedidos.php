<HTML>
 <HEAD>
  <TITLE>
	Pedidos
  </TITLE>
 </HEAD>
 <BODY>
  <TABLE HEIGHT=15% WIDTH=100%>
   <TR>
    <TD BGCOLOR="FFFFDD" ALIGN=CENTER VALIGN=CENTER>
     <H1>
	Electro Astorga
     </H1>
    </TD>
   </TR>
  </TABLE> 
  <TABLE HEIGHT=85% WIDTH=100%>
   <TR>
    <TD WIDTH=15% BGCOLOR="DDFFFF" VALIGN=CENTER>
	<A HREF="index.php">Principal</A>
	<BR>
	<BR>
	<A HREF="listado.php">Productos</A>
	<BR>
	<BR>
	<A HREF='pedidos.php'>Pedidos</A>
	<BR>
	<BR>
	<A HREF='login.php'>Acceso clientes</A>
	<BR>
	<BR>
	<A HREF='logout.php'>Cerrar sesi&oacute;n</A>
    </TD>
    <TD WIDTH=85% ALIGN=CENTER VALIGN=CENTER>
     <H1>
	 Pedidos realizados
     </H1>
	Seleccione un pedido para ver los detalles.
     <BR>
     <BR>
     <!-- Formulario de selecciÃ³n de pedido -->
     <FORM NAME="pedidos" ACTION="detalle_pedido.php" METHOD="POST">
      <TABLE>
       <TR>
        <TD ALIGN="RIGHT">
         Escoja pedido a partir del código del mismo
        </TD>
        <TD>
         <SELECT NAME="pedido">
          <OPTION></OPTION>
         </SELECT>
        </TD>
       </TR>
       <TR>
        <TD>
        </TD>
        <TD>
         <INPUT TYPE="SUBMIT" NAME="SUBMIT" VALUE="Enviar">
        </TD>
       </TR>
      </TABLE>
     </FORM>
    </TD>
   </TR>
  </TABLE>
 </BODY>
</HTML>
