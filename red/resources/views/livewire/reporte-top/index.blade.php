@extends('adminlte::page')

@section('title', 'Top Peliculas')

@section('content_header')
    
@stop

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('report-top')
        </div>     
    </div>   
</div>
@endsection

@section('css')
<!-- Ionicons -->

@stop


@section('js')

@endsection