@extends('adminlte::page')

@section('title', 'Materias')

@section('content')
    <section class="content container-fluid">
        <div class="row pt-5">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Alumno</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('alumnos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('alumno.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
