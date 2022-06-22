@extends('layouts.app')

@section('template_title')
    Materiale
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Materiale') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('materiales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Color</th>
										<th>Detalles</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materiales as $materiale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $materiale->nombre }}</td>
											<td>{{ $materiale->color }}</td>
											<td>{{ $materiale->detalles }}</td>

                                            <td>
                                                <form action="{{ route('materiales.destroy',$materiale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('materiales.show',$materiale->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    @if (Session::get('isAdmin') ==1)

                                                    <a class="btn btn-sm btn-success" href="{{ route('materiales.edit',$materiale->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $materiales->links() !!}
            </div>
        </div>
    </div>
@endsection
