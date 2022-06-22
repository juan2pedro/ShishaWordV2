@extends('layouts.app')

@section('template_title')
    Sabore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sabore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('sabores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>ID</th>
                                        
										<th>Marca</th>
										<th>Nombre</th>
										<th>Detalles</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sabores as $sabore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $sabore->marca->nombre }}</td>
											<td>{{ $sabore->nombre }}</td>
											<td>{{ $sabore->detalles }}</td>

                                            <td>
                                                <form action="{{ route('sabores.destroy',$sabore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sabores.show',$sabore->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    @if (Session::get('isAdmin') ==1)

                                                    <a class="btn btn-sm btn-success" href="{{ route('sabores.edit',$sabore->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                @endif
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $sabores->links() !!}
            </div>
        </div>
    </div>
@endsection
