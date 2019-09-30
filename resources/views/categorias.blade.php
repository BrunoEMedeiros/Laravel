@extends('layout.app', ["current" => "categorias"])

<?php
    $my_array = ['Nome'];
?>

@section('body')
    <h4>Pagina de Categorias</h4>
    @component('components.modal', ['titulo' => 'Nova categoria', 'campos' => $my_array])
    @endcomponent
@endsection