@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Compras</h1>
        <h1 class="pull-right">
           <!--<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('facturas.create') !!}">Add New</a>-->
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                         <input type="hidden" id='_token' name="csrf-token" value="{{ csrf_token() }}">
                        {!! Form::open(['route' => 'comprarProducto']) !!}
                            <input type="hidden" name="existencia" id="existencia">
                            <input type="hidden" name="precio" id="precio">
                            <select name="producto" id="producto" class="select2 form-control" required="required">
                                <option value="">Seleccione un producto</option>
                                @foreach($productos as $obj)
                                    <option value="{{$obj->id}}">{{$obj->pro_nombre}}</option>
                                @endforeach
                            </select><br><label id="precio_text">Precio unidad: </label><br><br>
                            <input type="number" id="cantidad" name="cantidad" autocomplete="off" class=" form-control" placeholder="Ingrese la cantidad a comprar" required="required"><br>
                            <label>Total</label>
                            <input type="text" name="total" readonly="true" id='total' class="form-control"><br>
                            <input type="submit" name="enviar" value="Enviar" id="enviar" class="btn btn-success">
                            <br><br>
                            @if(isset($datos))
                            <b><a href="{{url('crear_pdf', ['id_factura' => $id_factura])}}">Descargar factura</a>
                            @endif
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $("#producto").change(function(){
            var id=$("#producto").val();
            var token=$("#_token").val();
            $.ajax({
                url:'consAjax',
                data: {'id':id, '_token':token},
                type:'post',
                success: function(data){
                    $("#precio_text").text("Precio unidad: $"+data[0]['pro_precio']);
                    $("#precio").val(data[0]['pro_precio']);
                    $("#existencia").val(data[0]['pro_cantidad']);
                }
            });
        });
        $("#cantidad").keyup(function(){
            debugger;
            var existencia=$("#existencia").val();
            var cantidad=$("#cantidad").val();
            var precio=$("#precio").val();
            var total;
            existencia=parseInt(existencia);
            cantidad=parseInt(cantidad);
            if(cantidad > existencia){
                alert("La cantidad ingresada es mayor a que tenemos en Inventario");
                var cantidad=$("#cantidad").val("");
                var cantidad=$("#total").val("");
            }else{
                total=cantidad*precio;
                $("#total").val(total); 
            }
            
        });
    </script>
@endsection