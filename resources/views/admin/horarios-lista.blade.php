
@if(sizeOf($horarios) == 0)
    <li>
        <div><h6>Nenhum horário cadastrado!</h6></div>
    </li>
@else
    @foreach($horarios as $horario)
    <li>
        <div><h6>{{ $horario->horario_id }}</h6></div>
        <div><h6>{{ $horario->horario_inicio }}</h6></div>
        <div><h6>{{ $horario->horario_fim }}</h6></div>
        <div><h6>{{ $horario->horario_dias }}</h6></div>
        <div>
            <i class="material-icons click editar" data-id="{{ $horario->horario_id }}">create</i>
            <i class="material-icons click deletar" data-id="{{ $horario->horario_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif