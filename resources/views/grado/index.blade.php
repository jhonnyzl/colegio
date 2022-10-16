@extends('adminlte::page')

@section('title', 'Grados')

@section('content')
<div class="container-fluid">
    <div class="row pt-5">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <h2>
                            <span id="card_title">
                                {{ __('Grados') }}
                            </span>
                        </h2>


                        <div class="float-right">
                            <a href="{{ route('grados.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('CREAR NUEVO') }}
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

                                    <th>NOMBRE</th>

                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($grados as $grado)
                                <tr>
                                    <td>{{ $grado->id }}</td>

                                    <td>{{ $grado->nombre }}</td>

                                    <td>
                                        <form action="{{ route('grados.destroy',$grado->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('grados.show',$grado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('grados.edit',$grado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
            {!! $grados->links() !!}
        </div>
    </div>
</div>
@endsection