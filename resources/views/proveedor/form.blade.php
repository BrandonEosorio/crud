<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" value="{{ old('Nombre', $proveedor?->Nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('Nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_empresa" class="form-label">{{ __('Nombreempresa') }}</label>
            <input type="text" name="NombreEmpresa" class="form-control @error('NombreEmpresa') is-invalid @enderror" value="{{ old('NombreEmpresa', $proveedor?->NombreEmpresa) }}" id="nombre_empresa" placeholder="Nombreempresa">
            {!! $errors->first('NombreEmpresa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nit" class="form-label">{{ __('Nit') }}</label>
            <input type="text" name="Nit" class="form-control @error('Nit') is-invalid @enderror" value="{{ old('Nit', $proveedor?->Nit) }}" id="nit" placeholder="Nit">
            {!! $errors->first('Nit', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ciudad" class="form-label">{{ __('Ciudad') }}</label>
            <input type="text" name="Ciudad" class="form-control @error('Ciudad') is-invalid @enderror" value="{{ old('Ciudad', $proveedor?->Ciudad) }}" id="ciudad" placeholder="Ciudad">
            {!! $errors->first('Ciudad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="text" name="Telefono" class="form-control @error('Telefono') is-invalid @enderror" value="{{ old('Telefono', $proveedor?->Telefono) }}" id="telefono" placeholder="Telefono">
            {!! $errors->first('Telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="Email" class="form-control @error('Email') is-invalid @enderror" value="{{ old('Email', $proveedor?->Email) }}" id="email" placeholder="Email">
            {!! $errors->first('Email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="producto" class="form-label">{{ __('Producto') }}</label>
            <input type="text" name="Producto" class="form-control @error('Producto') is-invalid @enderror" value="{{ old('Producto', $proveedor?->Producto) }}" id="producto" placeholder="Producto">
            {!! $errors->first('Producto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>