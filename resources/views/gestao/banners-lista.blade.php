
@if(sizeOf($banners) == 0)
    <li>
        <div><h6>Nenhum banner cadastrado!</h6></div>
    </li>
@else
    @foreach($banners as $banner)
    <li>
        <div><h6>{{ $banner->banner_id }}</h6></div>
        <div><h6>{{ $banner->banner_nome }}</h6></div>
        <div><h6>{{ $banner->banner_ordem }}</h6></div>
        <div>
            <h6>
                @if($banner->banner_status == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <h6>
                @if($banner->banner_principal == 1)
                    Sim
                @else
                    Não
                @endif
            </h6>
        </div>
        <div>
            <i class="material-icons click suave editar" data-id="{{ $banner->banner_id }}">create</i>
            <i class="material-icons click suave deletar" data-id="{{ $banner->banner_id }}">delete</i>
        </div>
    </li>
    @endforeach
@endif