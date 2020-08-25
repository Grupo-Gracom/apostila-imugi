
@if(sizeOf($users) == 0)
    <li>
        <div><h6>Nenhum usuário cadastrado!</h6></div>
    </li>
@else
    @foreach($users as $user)
    <li>
        <div><h6>{{ $user->id }}</h6></div>
        <div><h6>{{ $user->name }}</h6></div>
        <div><h6>{{ $user->email }}</h6></div>
        <div>
            <h6>
                {{ $user->unidade->unidade_nome }}
            </h6>
        </div>
        <div>
            <h6>
                {{ $user->cargo->cargo_nome }}
            </h6>
        </div>
        <div>
            <h6>
                @if($user->status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click suave editar" data-id="{{ $user->id }}">create</i>
            @if(Auth::user()->nivel == 1)
                <i class="material-icons click suave deletar" data-id="{{ $user->id }}">delete</i>
            @endif
        </div>
    </li>
    @endforeach
@endif