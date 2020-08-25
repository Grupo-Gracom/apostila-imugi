
@if(sizeOf($cargos) == 0)
    <li>
        <div><h6>Nenhum cargo cadastrado!</h6></div>
    </li>
@else
    @foreach($cargos as $cargo)
    <li>
        <div><h6>{{ $cargo->cargo_id }}</h6></div>
        <div><h6>{{ $cargo->cargo_nome }}</h6></div>
        <div>
            <h6>
                @if($cargo->cargo_status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click suave editar" data-id="{{ $cargo->cargo_id }}">create</i>
            <i class="material-icons click suave deletar" data-id="{{ $cargo->cargo_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif