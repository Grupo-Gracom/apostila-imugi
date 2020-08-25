
@if(sizeOf($categorias) == 0)
    <li>
        <div><h6>Nenhuma categoria cadastrada!</h6></div>
    </li>
@else
    @foreach($categorias as $categoria)
    <li>
        <div><h6>{{ $categoria->categoria_id }}</h6></div>
        <div><h6>{{ $categoria->categoria_nome }}</h6></div>
        <div>
            <h6>
                @if($categoria->categoria_status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click suave editar" data-id="{{ $categoria->categoria_id }}">create</i>
            <i class="material-icons click suave deletar" data-id="{{ $categoria->categoria_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif