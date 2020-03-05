
@if(sizeOf($clientes) == 0)
    <li>
        <div><h6>Nenhum cliente cadastrado!</h6></div>
    </li>
@else
    @foreach($clientes as $cliente)
    <li>
        <div><h6>{{ $cliente->cliente_id }}</h6></div>
        <div><h6>{{ $cliente->cliente_nome }}</h6></div>
        <div><h6>{{ $cliente->cliente_email }}</h6></div>
        <div>
            <h6>
                <?php
                    $data = new DateTime($cliente->cliente_data);
                    $criadoEm = $data->format("d/m/Y");
                    echo $criadoEm;
                ?>
            </h6>
        </div>
        <div>
            <h6>
                @if($cliente->cliente_matricula == "")
                    -
                @else
                    {{ $cliente->cliente_matricula }}
                @endif
            </h6>
        </div>
        <div>
            <h6>
                {{ $cliente->unidade->unidade_nome }}
            </h6>
        </div>
        <div>
            <h6>
                @if($cliente->cliente_primeiro_acesso == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <h6>
                @if($cliente->cliente_status_financeiro == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <h6>
                @if($cliente->cliente_status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click editar" data-id="{{ $cliente->cliente_id }}">create</i>
            <i class="material-icons click deletar" data-id="{{ $cliente->cliente_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif