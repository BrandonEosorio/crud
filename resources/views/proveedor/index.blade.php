@extends('layouts.app')

@section('template_title')
    Proveedor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proveedor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('proveedors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Nombreempresa</th>
										<th>Nit</th>
										<th>Ciudad</th>
										<th>Telefono</th>
										<th>Email</th>
										<th>Producto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proveedors as $proveedor)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $proveedor->Nombre }}</td>
											<td>{{ $proveedor->NombreEmpresa }}</td>
											<td>{{ $proveedor->Nit }}</td>
											<td>{{ $proveedor->Ciudad }}</td>
											<td>{{ $proveedor->Telefono }}</td>
											<td>{{ $proveedor->Email }}</td>
											<td>{{ $proveedor->Producto }}</td>

                                            <td>
                                                <form action="{{ route('proveedors.destroy',$proveedor->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proveedors.show',$proveedor->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('proveedors.edit',$proveedor->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proveedors->links() !!}
            </div>
        </div>
    </div>
@endsection
