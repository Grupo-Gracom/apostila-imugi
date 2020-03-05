
@if(sizeOf($turmas) == 0)
    <li>
        <div><h6>Nenhuma turma cadastrada!</h6></div>
    </li>
@else
    @foreach($turmas as $turma)
    <li>
        <div><h6>{{ $turma->turma_id }}</h6></div>
        <div><h6>{{ $turma->turma_nome }}</h6></div>
        <div>
            <h6>
                <?php
                    $dias = str_replace('[','', $turma->horario->horario_dias);
                    $dias = str_replace(']','', $dias);
                    $dias = str_replace('"','', $dias);
                    $dias = str_replace(',',', ', $dias);
                    echo date('H:i', strtotime($turma->horario->horario_inicio)).' - '.date('H:i', strtotime($turma->horario->horario_fim)).' '.$dias;
                    ?>
            </h6>
        </div>
        <div><h6>{{ $turma->turma_periodo }}</h6></div>
        <div><h6>{{ date("d/m/Y", strtotime($turma->turma_data_inicio)) }}</h6></div>
        <div><h6>{{ date("d/m/Y", strtotime($turma->turma_data_fim)) }}</h6></div>
        <div><h6>{{ $turma->curso->curso_nome }}</h6></div>
        <div><h6>{{ $turma->professor->name }}</h6></div>
        <div><h6>{{ $turma->unidade->unidade_nome }}</h6></div>
        <div>
            <h6>
                @if($turma->turma_status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click adicionar" data-id="{{ $turma->turma_id }}" unidade-id="{{ $turma->unidade_id }}">group_add</i>
            <i class="material-icons click editar" data-id="{{ $turma->turma_id }}">create</i>
            <i class="material-icons click deletar" data-id="{{ $turma->turma_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif