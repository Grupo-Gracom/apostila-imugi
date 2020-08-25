
@if(sizeOf($unidades) == 0)
    <li>
        <div><h6>Nenhuma unidade cadastrada!</h6></div>
    </li>
@else
    @foreach($unidades as $unidade)
    <li>
        <div><h6>{{ $unidade->unidade_id }}</h6></div>
        <div><h6>{{ $unidade->unidade_nome }}</h6></div>
        <div><h6>{{ $unidade->unidade_codigo }}</h6></div>
        <div><h6>{{ $unidade->unidade_cidade }}</h6></div>
        <div><h6>{{ $unidade->unidade_estado }}</h6></div>
        <div>
            <h6>
                {{ $unidade->empresa->empresa_nome }}
            </h6>
        </div>
        <div>
            <h6>
                @if($unidade->unidade_franquia == 1)
                    Sim
                @elseif($unidade->unidade_franquia == 3)
                    Consultor
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <h6>
                @if($unidade->unidade_status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click suave editar" data-id="{{ $unidade->unidade_id }}">create</i>
            <i class="material-icons click suave deletar" data-id="{{ $unidade->unidade_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif