
@if(sizeOf($artigos) == 0)
    <li>
        <div><h6>Nenhuma artigo cadastrado!</h6></div>
    </li>
@else
    @foreach($artigos as $artigo)
    <li>
        <div><h6>{{ $artigo->artigo_id }}</h6></div>
        <div><h6>{{ $artigo->artigo_titulo }}</h6></div>
        <?php 
            $vs = 0;
            $vn = 0;
        ?>
        @foreach($artigo->votos as $voto)
            @if($voto->voto_opcao == 0)
                <?php $vn++; ?>
            @else
                <?php $vs++; ?>
            @endif
        @endforeach
        <div><h6>{{ $vs }}</h6></div>
        <div><h6>{{ $vn }}</h6></div>
        <div>
            <h6>
                @if($artigo->artigo_tipo == 1)
                    Novidade
                @else
                    Dúvida
                @endif
            </h6>
        </div>
        <div>
            <h6>
                @if($artigo->artigo_setor == 1)
                    Aluno
                @elseif($artigo->artigo_setor == 2)
                    Professor
                @else
                    Centro Autorizado
                @endif
            </h6>
        </div>
        <div>
            <h6>
                @if($artigo->artigo_status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click suave editar" data-id="{{ $artigo->artigo_id }}">create</i>
            <i class="material-icons click suave deletar" data-id="{{ $artigo->artigo_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif