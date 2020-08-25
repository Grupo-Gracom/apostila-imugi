
@if(sizeOf($softwares) == 0)
    <li>
        <div><h6>Nenhum programa cadastrado!</h6></div>
    </li>
@else
    @foreach($softwares as $software)
    <li>
        <div><h6>{{ $software->software_id }}</h6></div>
        <div><h6>{{ $software->software_nome }}</h6></div>
        <div>
            <h6>
                @if($software->software_status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click suave editar" data-id="{{ $software->software_id }}">create</i>
            <i class="material-icons click suave deletar" data-id="{{ $software->software_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif