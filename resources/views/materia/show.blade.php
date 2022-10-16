@extends('adminlte::page')

@section('title', 'Materias')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $materia->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Grado Id:</strong>
                            {{ $materia->grado_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
