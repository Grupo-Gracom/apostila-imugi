
@if(sizeOf($questoes) == 0)
    <li>
        <div><h6>Nenhuma questão cadastrada!</h6></div>
    </li>
@else
    @foreach($questoes as $questao)
    <li>
        <div><h6>{{ $questao->questao_id }}</h6></div>
        <div><h6>{{ $questao->questao_nome }}</h6></div>
        <div>
            <h6>
                @if($questao->questao_status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click suave editar" data-id="{{ $questao->questao_id }}">create</i>
            <i class="material-icons click suave deletar" data-id="{{ $questao->questao_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif