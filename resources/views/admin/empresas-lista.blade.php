
@if(sizeOf($empresas) == 0)
    <li>
        <div><h6>Nenhuma empresa cadastrada!</h6></div>
    </li>
@else
    @foreach($empresas as $empresa)
    <li>
        <div><h6>{{ $empresa->empresa_id }}</h6></div>
        <div><h6>{{ $empresa->empresa_nome }}</h6></div>
        <div>
            <h6>
                @if($empresa->empresa_status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click editar" data-id="{{ $empresa->empresa_id }}">create</i>
            <i class="material-icons click deletar" data-id="{{ $empresa->empresa_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif