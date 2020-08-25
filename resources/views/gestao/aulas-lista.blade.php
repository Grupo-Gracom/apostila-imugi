
@if(sizeOf($aulas) == 0)
    <li>
        <div><h6>Nenhuma aula cadastrada!</h6></div>
    </li>
@else
    @foreach($aulas as $aula)
    <li>
        <div><h6>{{ $aula->aula_id }}</h6></div>
        <div><h6>{{ $aula->aula_nome }}</h6></div>
        <div><h6>{{ $aula->curso->curso_nome }}</h6></div>
        <div><h6>{{ $aula->aula_ordem }}</h6></div>
        <div>
            <h6>
                @if($aula->aula_status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click suave editar" data-id="{{ $aula->aula_id }}">create</i>
            <i class="material-icons click suave deletar" data-id="{{ $aula->aula_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif