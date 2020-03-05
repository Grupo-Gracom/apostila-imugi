
@if(sizeOf($clientes) == 0)
    <li>
        <div><h6>Nenhum cliente encontrado!</h6></div>
    </li>
@else
    @foreach($clientes as $cliente)
    <li data-item="{{ $cliente->cliente_id }}">
        <div>
            <h6>
                <p class="checkbox" style="margin-top: 0;">
                    <input type="checkbox" name="alunos[]" value="{{ $cliente->cliente_id }}">
                </p>    
            </h6>
        </div>
        <div data-item="{{ $cliente->cliente_id }}"><h6>{{ $cliente->cliente_id }}</h6></div>
        <div><h6>{{ $cliente->cliente_nome }}</h6></div>
        <div>
            <h6>
                @if($cliente->cliente_matricula == "")
                    -
                @else
                    {{ $cliente->cliente_matricula }}
                @endif
            </h6>
        </div>
    </li>
    @endforeach
@endif