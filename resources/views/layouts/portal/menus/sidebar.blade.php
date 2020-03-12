<div class="sb-slidebar sb-left">
	<div id="sb-slidebar-content" class="sb-slidebar-content ajaxable">
		<div id="logo-sidebar">
			<a href=""><img class="transparent-logo dark-scheme-logo" src="{{asset('assets/portal/images/logo-white.png')}}" alt=""/></a>
		</div>
        <nav id='cssmenu'>
            <ul>
                <li  class="@if(Route::current()->getName() == 'portal') active @endif">
                    <a href='/portal'>
                        <i class="icon_house_alt font-16" style=""></i>
                        <span class="century left font-14"> HOME</span>
                    </a>
                </li>
                <li class="@if(Route::current()->getName() == 'material') active @endif">
                    <a href="/material">
                        <i class="icon_book font-16"></i>
                        <span class="century left font-14"> MATERIAL DIDÁTICO</span>
                    </a>
                </li>
                <li class="@if(Route::current()->getName() == 'nota') active @endif">
                    <a href="/nota">
                        <i class="icon-desktop font-16"></i>
                        <span class="century left font-14"> NOTAS</span>
                    </a>
                </li>
                <li class="@if(Route::current()->getName() == 'frequencia') active @endif">
                    <a href='/frequencia'>
                        <i class="icon_comment_alt font-16"></i>
                        <span class="century left font-14"> FREQUÊNCIA / REPOSIÇÃO</span>
                    </a>
                </li>
                <li class="@if(Route::current()->getName() == 'financeiro') active @endif">
                    <a href='/financeiro'>
                        <i class="icon-money font-16"></i>
                        <span class="century left font-14"> FINANCEIRO</span>
                    </a>
                </li>
                <li class="@if(Route::current()->getName() == 'contato') active @endif">
                    <a href='/contato'>
                        <i class="icon icon_group font-16"></i>
                        <span class="century left font-14"> CONTATO</span>
                    </a>
                </li>
                <li class="@if(Route::current()->getName() == 'perfil') active @endif">
                    <a href='/perfil'>
                        <i class="icon icon_cog font-16"></i>
                        <span class="century left font-14"> CONFIGURACÕES</span>
                    </a>
                </li>
                
            </ul>
        </nav>
        <div class="widget_text widget">
            <span class="font area-social">CURTA E <br> COMPARTILHE:
                <figure class="icones-social">
                    <a href="https://www.facebook.com/imugieducacao/" target="_blank">
                        <img src="{{asset('assets/portal/images/icon/icone-face.png')}}" width="30">
                    </a>
                    <a href="https://www.instagram.com/imugieducacao/" target="_blank">
                        <img src="{{asset('assets/portal/images/icon/icone-instagram.png')}}" width="30">
                    </a>
                    <a href="https://www.youtube.com/channel/UC93pN5GQ5bswL8cyMHMNb0g" target="_blank">
                        <img src="{{asset('assets/portal/images/icon/icone-youtube.png')}}" width="30">
                    </a>
                </figure>
            </span>	
            <br>
            <div class="portais imugi-portal">
                    <ul>
                        <li>
                            <a href="/perfil"><p class="century"><i class="icon icon-user"></i> Olá, {{ Auth::user()->name}}  </p></a>
                            <a href=""><p class="century">|</p></a>
                            <a href="{{route('logout')}}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();"><p class="century"><i class="fa fa-sign-out"></i> Sair</p></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{csrf_field()}}
                            </form>
                        </li>
                    </ul>
                </div>
            <div class="textwidget col-md-8" style=" padding: 0!important;">
                <p class="titulo-rodape">
                            &copy; {{date('Y')}} Imugi Todos os Direitos Reservados 
                </p>
            </div>
		</div>
	</div>
</div>