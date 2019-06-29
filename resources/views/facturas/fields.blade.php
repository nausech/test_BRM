<!-- Fac Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fac_producto', 'Fac Producto:') !!}
    {!! Form::text('fac_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Fac Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fac_cliente', 'Fac Cliente:') !!}
    {!! Form::text('fac_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Fac Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fac_cantidad', 'Fac Cantidad:') !!}
    {!! Form::number('fac_cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Fac Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fac_total', 'Fac Total:') !!}
    {!! Form::number('fac_total', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('facturas.index') !!}" class="btn btn-default">Cancel</a>
</div>
