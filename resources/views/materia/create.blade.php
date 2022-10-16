@extends('adminlte::page')

@section('title', 'Materias')

@section('content')
    <section class="content container-fluid">
        <div class="row pt-5">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h2>
                        <span class="card-title">CREAR MATERIA</span>

                        </h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('materias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('materia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
