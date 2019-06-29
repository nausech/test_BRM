@if(Auth::user()->tipo=='P')
<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{!! route('productos.index') !!}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>
<li class="{{ Request::is('facturas*') ? 'active' : '' }}">
    <a href="{!! route('facturas.index') !!}"><i class="fa fa-edit"></i><span>Facturas</span></a>
</li>
@endif
@if(Auth::user()->tipo=='C')
<li class="{{ Request::is('compras*') ? 'active' : '' }}">
    <a href="{!! route('compras.index') !!}"><i class="fa fa-edit"></i><span>Comprar</span></a>
</li>
@endif


