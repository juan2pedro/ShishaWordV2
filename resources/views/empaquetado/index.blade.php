@extends('layouts.app')

@section('template_title')
    Empaquetado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empaquetado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empaquetados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Formato Id</th>
										<th>Sabore Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empaquetados as $empaquetado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $empaquetado->formato_id }}</td>
											<td>{{ $empaquetado->sabore_id }}</td>

                                            <td>
                                                <form action="{{ route('empaquetados.destroy',$empaquetado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empaquetados.show',$empaquetado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empaquetados.edit',$empaquetado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $empaquetados->links() !!}
            </div>
        </div>
    </div>
@endsection
