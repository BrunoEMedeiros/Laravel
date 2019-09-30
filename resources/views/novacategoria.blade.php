@extends('layout.app', ["current" => "categorias"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/categorias" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome da categoria</label>
                    <input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" placeholder="Categoria">
                </div>
                <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
                <button type="submit" class="btn btn-danger btn-sn">Cancelar</button>
            </form>
        </div>
    </div>

@endsection
