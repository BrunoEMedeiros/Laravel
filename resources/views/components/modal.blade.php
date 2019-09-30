<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCadastro">{{$titulo}}</button>

<div class="modal fade" id="ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{$titulo}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <div class="card border">
                        <div class="card-body">
                        <form action="/categorias" method="POST">
                        @csrf
                        @foreach ($campos as $c)
                        <div class="form-group">
                        <label for="nomeCategoria">{{$c}}</label>
                          <input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" placeholder="Categoria">
                        </div> 
                        @endforeach
                        <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
                        <button type="submit" class="btn btn-danger btn-sn">Cancelar</button>
                    </form>
                </div>
        </div>
      </div>
    </div>
  </div>