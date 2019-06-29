<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $facturas[0]->fid !!}</p>
</div>

<!-- Fac Producto Field -->
<div class="form-group">
    {!! Form::label('fac_producto', 'Fac Producto:') !!}
    <p>{!! $facturas[0]->pro_nombre !!}</p>
</div>

<!-- Fac Cliente Field -->
<div class="form-group">
    {!! Form::label('fac_cliente', 'Fac Cliente:') !!}
    <p>{!! $facturas[0]->fac_cliente !!}</p>
</div>

<!-- Fac Cantidad Field -->
<div class="form-group">
    {!! Form::label('fac_cantidad', 'Fac Cantidad:') !!}
    <p>{!! $facturas[0]->fac_cantidad !!}</p>
</div>

<!-- Fac Total Field -->
<div class="form-group">
    {!! Form::label('fac_total', 'Fac Total:') !!}
    <p>{!! $facturas[0]->fac_total !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $facturas[0]->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $facturas[0]->updated_at !!}</p>
</div>

