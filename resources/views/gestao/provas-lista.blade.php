
@if(sizeOf($provas) == 0)
    <li>
        <div><h6>Nenhuma prova cadastrada!</h6></div>
    </li>
@else
    @foreach($provas as $prova)
    <li>
        <div><h6>{{ $prova->prova_id }}</h6></div>
        <div><h6>{{ $prova->prova_nome }}</h6></div>
        <div>
            <h6>
                @if($prova->prova_status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click suave editar" data-id="{{ $prova->prova_id }}">create</i>
            <i class="material-icons click suave deletar" data-id="{{ $prova->prova_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif