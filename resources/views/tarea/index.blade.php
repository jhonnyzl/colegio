@extends('adminlte::page')

@section('title', 'Tareas')

@section('content')
<div class="container-fluid">
    <div class="row pt-5">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <h2>
                            <span id="card_title">
                                {{ __('Tarea') }}
                            </span>
                        </h2>


                        <div class="float-right">
                            <a href="{{ route('tareas.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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
                                    <th>FECHA LIMITE</th>
                                    <th>DESCRIPCION</th>
                         
                                    <th>GRADO</th>

                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tareas as $tarea)
                                <tr>
                                    <td>{{ $tarea->id }}</td>

                                    <td>{{ $tarea->nombre }}</td>
                                    <td>{{ $tarea->fechalimite }}</td>
                                    <td>{{ $tarea->descripcion }}</td>
                                   
                                    <td>{{ $tarea->grado->nombre }}</td>

                                    <td>
                                        <form action="{{ route('tareas.destroy',$tarea->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('tareas.download',$tarea->archivo) }}"><i class="fa fa-fw fa-eye"></i> VER TAREA</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('tareas.edit',$tarea->id) }}"><i class="fa fa-fw fa-edit"></i> EDITAR</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> ELIMINAR</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $tareas->links() !!}
        </div>
    </div>
</div>
@endsection