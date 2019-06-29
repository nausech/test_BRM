<!-- Pro Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_nombre', 'Pro Nombre:') !!}
    {!! Form::text('pro_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Pro Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_cantidad', 'Pro Cantidad:') !!}
    {!! Form::number('pro_cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Pro Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_precio', 'Pro Precio:') !!}
    {!! Form::number('pro_precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Pro Lote Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_lote', 'Pro Lote:') !!}
    {!! Form::text('pro_lote', null, ['class' => 'form-control']) !!}
</div>

<!-- Pro Fecha Vencimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_fecha_vencimiento', 'Pro Fecha Vencimiento:') !!}
    {!! Form::input('date', 'pro_fecha_vencimiento', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('productos.index') !!}" class="btn btn-default">Cancel</a>
</div>
