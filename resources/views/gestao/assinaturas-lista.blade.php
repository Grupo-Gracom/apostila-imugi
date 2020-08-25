
@if(sizeOf($assinaturas) == 0)
    <li>
        <div><h6>Nenhuma assinatura cadastrada!</h6></div>
    </li>
@else
    @foreach($assinaturas as $assinatura)
    <li>
        <div><h6>{{ $assinatura->assinatura_id }}</h6></div>
        <div><h6>{{ $assinatura->assinatura_email }}</h6></div>
        <div><h6>{{ date("d/m/Y", strtotime($assinatura->assinatura_data)) }}</h6></div>
        <div><h6>{{ $assinatura->assinatura_cpf }}</h6></div>
        <div>
            <h6>
                @if($assinatura->unidade->unidade_franquia == 3)
                    Consultor
                @else
                    {{ $assinatura->unidade->unidade_nome }}
                @endif
            </h6>
        </div>
        <div>
            <h6>
                @if($assinatura->assinatura_status == 2)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <!-- <i class="material-icons click suave editar" data-id="{{ $assinatura->assinatura_id }}">create</i>
            <i class="material-icons click suave deletar" data-id="{{ $assinatura->assinatura_id }}">delete</i> -->
            ---
        </div>
    </li>
    @endforeach
@endif