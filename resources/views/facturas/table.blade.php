<div class="table-responsive">
    <table class="table" id="facturas-table">
        <thead>
            <tr>
                <th>Fac Producto</th>
        <th>Fac Cliente</th>
        <th>Fac Cantidad</th>
        <th>Fac Total</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($facturas as $facturas)
            <tr>
                <td>{!! $facturas->pro_nombre !!}</td>
            <td>{!! $facturas->fac_cliente !!}</td>
            <td>{!! $facturas->fac_cantidad !!}</td>
            <td>{!! $facturas->fac_total !!}</td>
                <td>
                    {!! Form::open(['route' => ['facturas.destroy', $facturas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('facturas.show', [$facturas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
