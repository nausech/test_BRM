<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatefacturasRequest;
use App\Http\Requests\UpdatefacturasRequest;
use App\Repositories\facturasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;
use Flash;
use Response;

class comprarController extends Controller
{
    public function index(){
    	$productos=DB::select("select * from productos where pro_cantidad > 0");
    	return view('compras.index')
            ->with('productos', $productos);
    }

    public function consCantidad(Request $request){
    	$id=$request->id;
    	$cantidad=DB::select("select pro_cantidad, pro_precio from productos where id=".$id);
    	return Response::json($cantidad);
    }
    public function guardar(Request $request, facturasRepository $facturasRepo){
    	$productos=DB::select("select * from productos where pro_cantidad > 0");
    	$this->facturasRepository = $facturasRepo;
    	$token=$request->_token;
    	$producto=$request->producto;
    	$cliente=auth()->user()->name;
    	$cantidad=$request->cantidad;
    	$total=$request->total;
      $existencia=$request->existencia;
    	$datos = array('_token'=>$token, 'fac_producto'=>$producto, 'fac_cliente'=>$cliente, 'fac_cantidad'=>$cantidad, 'fac_total'=>$total);
    	$facturas = $this->facturasRepository->create($datos);
    	$id_factura=$facturas->id;
      $cant_actual=$existencia-$cantidad;
      $actualizar=DB::UPDATE("UPDATE productos SET pro_cantidad=".$cant_actual." where id=".$producto);
        Flash::success('Factura guardada exitosamente.');
        return view('compras.index')->with('productos', $productos)->with('datos', $datos)->with('id_factura', $id_factura);

    }
    public function crear_pdf(Request $request){
    	$id=$request->id_factura;
    	$data=DB::select("select f.id as fid, p.id as pid, p.pro_nombre, p.pro_precio, f.fac_cliente, f.fac_cantidad, f.fac_total, f.created_at from facturas f  inner join productos p on p.id=f.fac_producto where f.id=".$id);
    	$data = [
          'pro_nombre' => $data[0]->pro_nombre,
          'fac_cliente' => $data[0]->fac_cliente,
          'fac_cantidad' => $data[0]->fac_cantidad,
          'fac_total' => $data[0]->fac_total,
          'created_at' => $data[0]->created_at,
          'pid' => $data[0]->pid,
          'fid' => $data[0]->fid,
          'pro_precio'=>$data[0]->pro_precio
      	];
    	$pdf = PDF::loadView('compras.pdf_factura', $data);  
        return $pdf->download('factura.pdf');
    }

}
