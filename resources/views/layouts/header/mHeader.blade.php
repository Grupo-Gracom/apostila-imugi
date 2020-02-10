 <!-- HEADER -->
 <i class="material-icons menu-btn">menu</i>
 <header class="">
     <a href="" class="mini-title">Versão Anterior</a>
     <a href="" class="mini-title"><i class="material-icons">arrow_back</i> Voltar</a>
    <!-- <div class="perfil">
        <div class="infos">
            <h6 class="barlow">
                {{ Auth::user()->name }}
                <span>
                    @if(Auth::user()->nivel == 1)
                    Admin
                    @else
                    Colaborador
                    @endif
                </span>
            </h6>
            <figure>
                <img src="{{asset('assets/img/dashboard/user.jpg')}}" alt="">
            </figure>
        </div>
        <ul class="box suave">
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="mini-title">Sair</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
            </li>
        </ul>
    </div> -->
</header>
<!-- /HEADER -->
<script>
    $(".menu-btn").click(function(){
        $("nav").toggleClass("active");
    });
    $(".submenu").click(function(){
        $(this).toggleClass("active");
        $(this).next("ul").slideToggle("fast");
        $(this).offsetParent().toggleClass("active-item");
    });
    function activeMenu(){
        var base = $("#unidade");
        if(base){
            var unidade = base.attr("data-unidade");
            var etapa = base.attr("data-etapa");
            $('nav li[data-unidade="'+unidade+'"]').addClass("active-item");
            $('nav li[data-unidade="'+unidade+'"] .submenu').addClass("active");
            $('nav li[data-unidade="'+unidade+'"] ul').slideToggle("fast");
            $('nav li[data-unidade="'+unidade+'"] ul li a[data-etapa="'+etapa+'"]').addClass("active");
        }
        console.log(base.attr("data-unidade"))
    }
</script>