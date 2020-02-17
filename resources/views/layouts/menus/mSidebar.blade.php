<!-- DASHBOARD MENU -->
<nav class="suave">
    <div class="logo">
        <a href="{{route('home')}}">
            <figure>
                <img src="{{asset('assets/img/logo-imugi.png')}}" alt="">
            </figure>
        </a>
    </div>
    <ul class="nav">
        <li class="@if(Route::current()->getName() == 'home') active-item @endif item">
            <a href="{{ route('home') }}">
                <i class="material-icons">home</i> Bem vindo
            </a>
        </li>
        <li class="item" data-unidade="unidade1">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 1
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade1/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade1/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade1/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade1/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade1/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade1/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        <li class="item" data-unidade="unidade2">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 2
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade2/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade2/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade2/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade2/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        <li class="item" data-unidade="unidade3">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 3
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade3/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                    <a href="{{ route('unidade3/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade3/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade3/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade3/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade3/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        <li class="item" data-unidade="unidade4">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 4
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade4/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade4/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade4/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade4/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade4/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade4/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        <li class="item" data-unidade="unidade5">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 5
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade5/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade5/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade5/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade5/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade5/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade5/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        
        <li class="item" data-unidade="unidade6">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 6
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade6/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade6/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade6/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade6/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade6/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade6/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        <li class="item" data-unidade="unidade7">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 7
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade7/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade7/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade7/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade7/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade7/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade7/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>

        <li class="item" data-unidade="unidade8">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 8
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade8/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade8/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade8/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade8/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade8/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade8/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        
        <li class="item" data-unidade="unidade9">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 9
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade9/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade9/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade9/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade9/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade9/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade9/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        <li class="item" data-unidade="unidade10">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 10
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade10/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade10/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade10/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade10/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade10/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade10/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>  
        
        <li class="item" data-unidade="unidade8">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 8
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade8/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade8/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade8/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade8/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade8/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade8/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>        
        <li class="item" data-unidade="unidade11">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 11
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade11/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade11/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade11/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade11/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade11/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade11/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        <li class="item" data-unidade="unidade12">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 12
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade12/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade12/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade12/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade12/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade12/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade12/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        <li class="item" data-unidade="unidade13">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 13
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade13/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade13/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade13/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade13/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade13/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade13/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        <li class="item" data-unidade="unidade16">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 16
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade16/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade16/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade16/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade16/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade16/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade16/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        <li class="item" data-unidade="unidade17">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 17
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade17/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade17/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade17/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade17/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade17/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade17/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        <li class="item" data-unidade="unidade21">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 21
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade21/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade21/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade21/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade21/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade21/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade21/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        <li class="item" data-unidade="unidade22">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 22
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade22/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade22/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade22/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade22/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade22/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade22/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        <li class="item" data-unidade="unidade23">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 23
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade23/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade23/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade23/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade23/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade23/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade23/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
        <li class="item" data-unidade="unidade24">
            <a class="click submenu">
                <i class="material-icons">folder</i> UNIT 24
            </a>
            <ul>
                <li>
                    <a href="{{ route('unidade24/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                    <a href="{{ route('unidade24/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                    <a href="{{ route('unidade24/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                    <a href="{{ route('unidade24/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                    <a href="{{ route('unidade24/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                    <a href="{{ route('unidade24/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- @if(Auth::user()->nivel == 1)
        <div class="logo">
            <a href="{{route('home')}}">
                <figure>
                    <img src="{{asset('assets/img/logo-imugi.png')}}" alt="">
                </figure>
            </a>
        </div>
        <ul class="nav">
            <li>
                <a href="{{route('home')}}" class="@if(Route::current()->getName() == 'admin') active-item @endif item">
                    <i class="material-icons">home</i>Início
                </a>
            </li>
            
        </ul>
    @else -->
        
    <!-- @endif -->
</nav>
<!-- /DASHBOARD MENU -->		