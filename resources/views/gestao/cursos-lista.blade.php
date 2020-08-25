
@if(sizeOf($cursos) == 0)
    <li>
        <div><h6>Nenhum curso cadastrado!</h6></div>
    </li>
@else
    @foreach($cursos as $curso)
    <li>
        <div><h6>{{ $curso->curso_id }}</h6></div>
        <div><h6>{{ $curso->curso_nome }}</h6></div>
        <div><h6>{{ $curso->curso_nivel }}</h6></div>
        <div><h6>{{ $curso->unidade->unidade_nome }}</h6></div>
        <div>
            <h6>
                @if($curso->curso_destaque == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <h6>
                @if($curso->curso_status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click suave editar" data-id="{{ $curso->curso_id }}">create</i>
            <i class="material-icons click suave deletar" data-id="{{ $curso->curso_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif