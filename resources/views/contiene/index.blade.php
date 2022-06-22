@extends('layouts.app')

@section('template_title')
    Contiene
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contiene') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contienes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Mezcla Id</th>
										<th>Sabore Id</th>
										<th>Porcentaje</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contienes as $contiene)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contiene->mezcla_id }}</td>
											<td>{{ $contiene->sabore_id }}</td>
											<td>{{ $contiene->porcentaje }}</td>

                                            <td>
                                                <form action="{{ route('contienes.destroy',$contiene->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contienes.show',$contiene->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>

                                                    @if(Auth::user()->isAdmin==1)
                                                    <a class="btn btn-sm btn-success" href="{{ route('contienes.edit',$contiene->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $contienes->links() !!}
            </div>
        </div>
    </div>
@endsection
