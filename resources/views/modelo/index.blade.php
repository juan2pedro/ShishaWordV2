@extends('layouts.app')

@section('template_title')
    Modelo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Modelo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('modelos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Marca Id</th>
										<th>Fecha</th>
										<th>Nombre</th>
										<th>Color</th>
										<th>Detalles</th>
										<th>Base</th>
										<th>Imagenes</th>
										<th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($modelos as $modelo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $modelo->marca_id }}</td>
											<td>{{ $modelo->fecha }}</td>
											<td>{{ $modelo->nombre }}</td>
											<td>{{ $modelo->color }}</td>
											<td>{{ $modelo->detalles }}</td>
											<td>{{ $modelo->base }}</td>
											<td>{{ $modelo->imagenes }}</td>
											<td>{{ $modelo->precio }}</td>

                                            <td>
                                                <form action="{{ route('modelos.destroy',$modelo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('modelos.show',$modelo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('modelos.edit',$modelo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $modelos->links() !!}
            </div>
        </div>
    </div>
@endsection
