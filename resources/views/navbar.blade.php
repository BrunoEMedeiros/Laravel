<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
        <li @if($current =="home") class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/">Home</a>
        </li>
        <li @if($current =="produtos") class="nav-item active" @else class="nav-item" @endif>
           <a class="nav-link" href="/produtos">Produtos</a>
        </li>
        <li @if($current =="categorias") class="nav-item active" @else class="nav-item" @endif">
            <a class="nav-link" href="/categorias">Categorias</a>
        </li>
        </ul>
    </div>
</nav>