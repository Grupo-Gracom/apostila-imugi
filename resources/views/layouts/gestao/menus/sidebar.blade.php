<!-- DASHBOARD MENU -->
<nav class="suave">
    <div class="logo">
        <a href="gestao">
            <figure>
                <img src="{{asset('assets/img/logo-imugi-branco.png')}}" alt="logo Imugi">
            </figure>
        </a>
    </div>
    <div class="perfil">
        <div class="infos">
            <h6 class="barlow">
                 {{ Auth::user()->name }}
                 <span>
                    {{ Auth::user()->cargo->cargo_nome }}
                </span>
            </h6>
        </div>
    </div>
    <ul>
        <li data-menu-id="1" class="suave">
            <a href="gestao">
                <i class="material-icons">home</i>Início
            </a>
        </li>
        <li data-menu-id="1" class="suave">
            <a href="gestao-frequencia">
                <i class="material-icons">list</i>Frequência
            </a>
        </li>
        <li data-menu-id="1" class="suave">
            <a href="gestao">
                <i class="material-icons">perm_contact_calendar</i>Notas
            </a>
        </li>
        <li style="display: block">
            <a href="logout">
                <i class="material-icons">lock</i>Sair
            </a>
        </li>
    </ul>
</nav>
<!-- /DASHBOARD MENU -->		