<! DOCTYPE html PUBLIC "- // W3C // DTD XHTML 1.0 Transitional // EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd "> 
<html xmlns = " http : //www.w3.org/1999/xhtml ">
<head> 
<title>Factura testBRM</title> 
</head>
<body> 
  <h1 align="center">Factura TestBRM No.{{$fid}}</h1> 
  <div> 
     <table align="center" class="table">
     	<tr>
     		<td><b>Empresa:</b></td>
     		<td>TestBrm</td>
     	</tr>
     	<tr>
     		<td><b>Nit:</b></td>
     		<td>900000000</td>
     	</tr>
      <tr>
        <td><b>Cliente:</b></td>
        <td>{{$fac_cliente}}</td>
      </tr>
      <tr>
        <td><b>Fecha:</b></td>
        <td>{{$created_at}}</td>
      </tr>
     </table><br>
    <table align="center" cellspacing="0" border="1">
      <tr>
        <th>Ref.</th>
        <th>Producto</th>
        <th>Precio</th>
        <th>Cant.</th>
        <th>Total</th>
      </tr>
      <tr>
        <td>{{$pid}}</td>
        <td>{{$pro_nombre}}</td>
        <td>$ {{$pro_precio}}</td>
        <td>{{$fac_cantidad}}</td>
        <td>$ {{$fac_total}}</td>
      </tr>
    </table>
  </div> 
</body>
</body> 
</html>