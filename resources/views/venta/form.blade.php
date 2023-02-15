<div class="box box-info padding-1">
    <div class="box-body">

        @if ($message = Session::get('no-stock'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
        @endif
        
        <div class="form-group">
            {{ Form::label('producto_id') }}
            {{ Form::select('producto_id',$producto, $venta->producto_id, ['class' => 'form-control' . ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Producto Id']) }}
            {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $venta->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>