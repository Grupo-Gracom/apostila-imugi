
@if(sizeOf($materiais) == 0)
    <li>
        <div><h6>Nenhum material cadastrado!</h6></div>
    </li>
@else
    @foreach($materiais as $material)
    <li>
        <div><h6>{{ $material->material_id }}</h6></div>
        <div><h6>{{ $material->material_nome }}</h6></div>
        <div><h6>{{ $material->curso->curso_nome }}</h6></div>
        <div>
            <h6>
                @if($material->material_status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click suave editar" data-id="{{ $material->material_id }}">create</i>
            <i class="material-icons click suave deletar" data-id="{{ $material->material_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif