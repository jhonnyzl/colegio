@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-4">
        <div class="small-box bg-gradient-success">
            <div class="inner">
                @php
                use App\Models\User;
                $cant_usuarios = User::count();
                @endphp
                <h3>{{$cant_usuarios}}</h3>
                <p>Estudiantes</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-plus"></i>
            </div>

        </div>
    </div>
    <div class="col-4">
        <div class="small-box bg-gradient-primary">
            <div class="inner">
                @php
                use App\Models\Grado;
                $cant_grados = Grado::count();
                @endphp
                <h3>{{$cant_grados}}</h3>
                <p>Grados</p>
            </div>
            <div class="icon">
                <i class="fas fa-book-open"></i>
            </div>

        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop