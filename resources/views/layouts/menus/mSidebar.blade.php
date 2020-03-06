<!-- DASHBOARD MENU -->
<!-- verificar tipo da unidade e modulo doaluno -->
        @if($aluno->turma->tipo->tipo_unidade == 0)
			<input type="hidden" name="liberaMaterial" data-tipo="{{ $aluno->turma->tipo->tipo_unidade }}" data-material="{{$aluno->turma->curso ?? ''}}">
		@else
			<input type="hidden" name="liberaMaterial" data-tipo="{{ $aluno->turma->tipo->tipo_unidade }}" data-material="{{$aluno->material->nivel ?? ''}}">
		@endif		

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

        <!--APOSTILA PLAY GO-->
        <li class="item apostila-playgo" data-apostila="apostila1">
            <a class="click submenu">
                <i class="material-icons">flag</i> PLAY GO
            </a>
            <ul>
                <!-- INTRO 1 -->
                <li class="item" data-unidade="intro1">
                    <a href="{{ route('apostila1/intro1/intro') }}" data-etapa="intro"><i class="material-icons suave">bookmarks</i> INTRODUCTION</a>
                </li>
                <!--UNIDADE 1-->
                <li class="item" data-unidade="unidade1">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 1
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade1/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade1/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade1/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade1/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade1/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade1/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 2-->
                <li class="item" data-unidade="unidade2">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 2
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade2/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade2/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade2/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade2/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade2/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade2/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 3-->
                <li class="item" data-unidade="unidade3">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 3
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade3/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade3/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade3/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade3/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade3/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade3/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 4-->
                <li class="item" data-unidade="unidade4">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 4
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade4/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade4/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade4/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade4/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade4/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade4/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 5-->
                <li class="item" data-unidade="unidade5">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 5
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade5/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade5/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade5/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade5/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade5/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade5/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 6-->
                <li class="item" data-unidade="unidade6">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 6
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade6/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade6/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade6/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade6/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade6/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade6/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 7-->
                <li class="item" data-unidade="unidade7">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 7
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade7/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade7/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade7/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade7/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade7/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade7/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 8-->
                <li class="item" data-unidade="unidade8">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 8
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade8/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade8/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade8/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade8/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade8/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade8/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 9-->
                <li class="item" data-unidade="unidade9">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 9
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade9/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade9/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade9/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade9/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade9/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade9/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 10-->    
                <li class="item" data-unidade="unidade10">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 10
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade10/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade10/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade10/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade10/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade10/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade10/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>  
                <!--UNIDADE 11-->  
                <li class="item" data-unidade="unidade11">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 11
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade11/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade11/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade11/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade11/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade11/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade11/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                 <!--UNIDADE 12-->
                <li class="item" data-unidade="unidade12">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 12
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade12/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade12/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade12/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade12/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade12/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade12/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 13-->
                <li class="item" data-unidade="unidade13">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 13
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade13/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade13/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade13/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade13/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade13/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade13/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 14-->
                <li class="item" data-unidade="unidade14">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 14
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade14/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade14/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade14/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade14/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade14/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade14/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 15-->
                <li class="item" data-unidade="unidade15">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 15
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade15/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade15/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade15/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade15/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade15/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade15/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 16-->
                <li class="item" data-unidade="unidade16">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 16
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade16/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade16/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade16/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade16/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade16/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade16/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 17-->
                <li class="item" data-unidade="unidade17">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 17
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade17/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade17/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade17/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade17/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade17/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade17/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 18-->
                <li class="item" data-unidade="unidade18">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 18
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade18/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade18/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade18/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade18/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade18/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade18/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 19-->
                <li class="item" data-unidade="unidade19">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 19
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade19/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade19/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade19/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade19/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade19/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade19/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 20-->
                <li class="item" data-unidade="unidade20">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 20
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade20/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade20/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade20/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade20/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade20/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade20/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 21-->
                <li class="item" data-unidade="unidade21">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 21
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade21/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade21/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade21/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade21/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade21/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade21/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 22-->
                <li class="item" data-unidade="unidade22">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 22
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade22/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade22/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade22/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade22/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade22/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade22/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 23-->
                <li class="item" data-unidade="unidade23">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 23
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade23/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade23/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade23/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade23/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade23/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade23/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 24-->
                <li class="item" data-unidade="unidade24">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 24
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade24/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade24/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade24/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade24/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade24/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade24/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 25-->
                <li class="item" data-unidade="unidade25">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 25
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade25/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade25/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade25/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade25/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade25/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade25/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 26-->
                <li class="item" data-unidade="unidade26">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 26
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade26/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade26/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade26/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade26/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade26/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade26/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 27-->
                <li class="item" data-unidade="unidade27">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 27
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade27/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade27/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade27/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade27/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade27/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade27/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 28-->
                <li class="item" data-unidade="unidade28">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 28
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade28/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade28/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade28/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade28/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade28/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade28/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 29-->
                <li class="item" data-unidade="unidade29">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 29
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade29/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade29/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade29/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade29/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade29/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade29/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 30-->
                <li class="item" data-unidade="unidade30">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 30
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade30/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade30/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade30/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade30/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade30/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade30/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 31-->
                <li class="item" data-unidade="unidade31">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 31
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade31/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade31/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade31/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade31/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade31/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade31/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 32-->
                <li class="item" data-unidade="unidade32">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 32
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila1/unidade32/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila1/unidade32/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila1/unidade32/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila1/unidade32/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila1/unidade32/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila1/unidade32/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
         <!-- APOSTILA PHOTOSHOP -->
         <li class="item apostila-photoshop" data-apostila="apostila4">
            <a class="click submenu">
                <i class="material-icons">flag</i> PHOTOSHOP
            </a>
        </li>

        <!--APOSTILA DOMINATING-->
        <li class="item apostila-dominating" data-apostila="apostila2">
            <a class="click submenu">
                <i class="material-icons">flag</i> DOMINATING
            </a>
            <ul>
                <!-- INTRO 2 -->
                <li class="item" data-unidade="intro2">
                    <a href="{{ route('apostila2/intro2/intro') }}" data-etapa="intro"><i class="material-icons suave">bookmarks</i> INTRO</a>
                </li>
                <!--UNIDADE 1-->
                <li class="item" data-unidade="unidade1">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 1
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade1/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade1/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade1/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade1/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade1/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade1/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 2-->
                <li class="item" data-unidade="unidade2">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 2
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade2/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade2/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade2/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade2/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade2/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade2/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                 <!--UNIDADE 3-->
                <li class="item" data-unidade="unidade3">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 3
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade3/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade3/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade3/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade3/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade3/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade3/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                 <!--UNIDADE 4-->
                 <li class="item" data-unidade="unidade4">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 4
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade4/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade4/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade4/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade4/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade4/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade4/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 5-->
                <li class="item" data-unidade="unidade5">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 5
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade5/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade5/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade5/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade5/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade5/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade5/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 6-->
                <li class="item" data-unidade="unidade6">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 6
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade6/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade6/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade6/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade6/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade6/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade6/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 7-->
                <li class="item" data-unidade="unidade7">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 7
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade7/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade7/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade7/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade7/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade7/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade7/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 8-->
                <li class="item" data-unidade="unidade8">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 8
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade8/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade8/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade8/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade8/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade8/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade8/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 9-->
                <li class="item" data-unidade="unidade9">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 9
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade9/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade9/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade9/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade9/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade9/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade9/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 10-->
                <li class="item" data-unidade="unidade10">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 10
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade10/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade10/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade10/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade10/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade10/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade10/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 11-->
                <li class="item" data-unidade="unidade11">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 11
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade11/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade11/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade11/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade11/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade11/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade11/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 12-->
                <li class="item" data-unidade="unidade12">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 12
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade12/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade12/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade12/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade12/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade12/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade12/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 13-->
                <li class="item" data-unidade="unidade13">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 13
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade13/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade13/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade13/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade13/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade13/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade13/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 14-->
                <li class="item" data-unidade="unidade14">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 14
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade14/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade14/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade14/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade14/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade14/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade14/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 15-->
                <li class="item" data-unidade="unidade15">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 15
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade15/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade15/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade15/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade15/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade15/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade15/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 16-->
                <li class="item" data-unidade="unidade16">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 16
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade16/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade16/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade16/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade16/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade16/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade16/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 17-->
                <li class="item" data-unidade="unidade17">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 17
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade17/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade17/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade17/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade17/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade17/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade17/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 18-->
                <li class="item" data-unidade="unidade18">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 18
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade18/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade18/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade18/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade18/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade18/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade18/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 19-->
                <li class="item" data-unidade="unidade19">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 19
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade19/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade19/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade19/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade19/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade19/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade19/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 20-->
                <li class="item" data-unidade="unidade20">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 20
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade20/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade20/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade20/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade20/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade20/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade20/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>                
                <!--UNIDADE 21-->
                 <li class="item" data-unidade="unidade21">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 21
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade21/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade21/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade21/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade21/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade21/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade21/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 22-->
                <li class="item" data-unidade="unidade22">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 22
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade22/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade22/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade22/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade22/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade22/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade22/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 23-->
                <li class="item" data-unidade="unidade23">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 23
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade23/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade23/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade23/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade23/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade23/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade23/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 24-->
                <li class="item" data-unidade="unidade24">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 24
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade24/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade24/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade24/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade24/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade24/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade24/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 25-->
                <li class="item" data-unidade="unidade25">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 25
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade25/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade25/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade25/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade25/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade25/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade25/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 26-->
                <li class="item" data-unidade="unidade26">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 26
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade26/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade26/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade26/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade26/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade26/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade26/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                 <!--UNIDADE 27-->
                 <li class="item" data-unidade="unidade27">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 27
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade27/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade27/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade27/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade27/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade27/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade27/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                 <!--UNIDADE 28-->
                 <li class="item" data-unidade="unidade28">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 28
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade28/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade28/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade28/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade28/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade28/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade28/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                 <!--UNIDADE 29-->
                 <li class="item" data-unidade="unidade29">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 29
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade29/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade29/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade29/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade29/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade29/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade29/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 30-->
                 <li class="item" data-unidade="unidade30">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 30
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade30/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade30/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade30/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade30/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade30/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade30/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 31-->
                <li class="item" data-unidade="unidade31">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 31
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade31/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade31/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade31/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade31/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade31/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade31/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 32-->
                <li class="item" data-unidade="unidade32">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 32
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade32/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade32/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade32/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade32/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade32/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade32/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 33-->
                <li class="item" data-unidade="unidade33">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 33
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade33/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade33/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade33/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade33/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade33/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade33/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 34-->
                <li class="item" data-unidade="unidade34">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 34
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade34/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade34/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade34/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade34/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade34/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade34/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 35-->
                <li class="item" data-unidade="unidade35">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 35
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade35/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade35/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade35/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade35/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade35/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade35/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 36-->
                <li class="item" data-unidade="unidade36">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 36
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade36/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade36/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade36/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade36/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade36/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade36/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 37-->
                <li class="item" data-unidade="unidade37">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 37
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade37/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade37/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade37/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade37/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade37/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade37/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 38-->
                <li class="item" data-unidade="unidade38">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 38
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade38/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade38/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade38/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade38/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade38/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade38/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 39-->
                <li class="item" data-unidade="unidade39">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 39
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade39/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade39/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade39/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade39/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade39/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade39/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 40-->
                <li class="item" data-unidade="unidade40">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 40
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade40/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade40/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade40/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade40/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade40/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade40/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 46-->
                <li class="item" data-unidade="unidade46">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 46
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade46/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade46/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade46/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade46/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade46/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade46/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 47-->
                <li class="item" data-unidade="unidade47">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 47
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade47/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade47/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade47/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade47/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade47/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade47/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 48-->
                <li class="item" data-unidade="unidade48">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 48
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade48/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade48/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade48/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade48/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade48/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade48/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 49-->
                <li class="item" data-unidade="unidade49">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 49
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade49/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade49/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade49/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade49/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade49/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade49/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 50-->
                <li class="item" data-unidade="unidade50">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 50
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade50/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade50/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade50/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade50/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade50/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade50/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 51-->
                <li class="item" data-unidade="unidade51">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 51
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade51/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade51/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade51/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade51/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade51/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade51/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 52-->
                <li class="item" data-unidade="unidade52">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 52
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade52/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade52/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade52/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade52/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade52/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade52/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 53-->
                <li class="item" data-unidade="unidade53">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 53
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade53/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade53/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade53/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade53/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade53/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade53/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 54-->
                <li class="item" data-unidade="unidade54">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 54
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade54/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade54/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade54/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade54/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade54/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade54/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 55-->
                <li class="item" data-unidade="unidade55">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 55
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade55/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade55/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade55/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade55/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade55/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade55/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 56-->
                <li class="item" data-unidade="unidade56">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 56
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade56/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade56/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade56/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade56/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade56/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade56/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 57-->
                <li class="item" data-unidade="unidade57">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 57
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade57/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade57/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade57/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade57/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade57/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade57/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 58-->
                <li class="item" data-unidade="unidade58">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 58
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade58/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade58/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade58/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade58/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade58/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade58/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 59-->
                <li class="item" data-unidade="unidade59">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 59
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade59/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade59/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade59/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade59/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade59/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade59/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 60-->
                <li class="item" data-unidade="unidade60">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 60
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('apostila2/unidade60/vocabulary') }}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{ route('apostila2/unidade60/conversation') }}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{ route('apostila2/unidade60/grammar') }}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{ route('apostila2/unidade60/pronunciation') }}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{ route('apostila2/unidade60/listening') }}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{ route('apostila2/unidade60/understanding') }}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
       
        <!-- APOSTILA GAMES AND ANIMATION -->
        <li class="item apostila-games" data-apostila="apostila5">
            <a class="click submenu">
                <i class="material-icons">flag</i> GAMES AND ANIMATION
            </a>
        </li>
        <!-- APOSTILA MASTER OF LANGUAGE -->
        <li class="item apostila-master" data-apostila="apostila3">
            <a class="click submenu">
                <i class="material-icons">flag</i> MASTER OF LANGUAGE
            </a>
        </li>
        <!-- APOSTILA VIDEO EDITION -->
        <li class="item apostila-video" data-apostila="apostila6">
            <a class="click submenu">
                <i class="material-icons">flag</i> VIDEO EDITION
            </a>
        </li>
    </ul>
</nav>
<!-- /DASHBOARD MENU -->	
<script>
    $(document).ready(function(){
        var material = $('input[name="liberaMaterial"]').attr("data-material");
        var tipo = $('input[name="liberaMaterial"]').attr("data-tipo");
        
        if(tipo == 0){
        }else{
            if(material == 1){
                $(".apostila-master").addClass("menu-hidden");
                $(".apostila-dominating").addClass("menu-hidden");
                $(".apostila-games").addClass("menu-hidden");
                $(".apostila-video").addClass("menu-hidden");
            }else if(material == 2){
                $(".apostila-master").addClass("menu-hidden");
                $(".apostila-video").addClass("menu-hidden");
            }
        }
    });
</script>	