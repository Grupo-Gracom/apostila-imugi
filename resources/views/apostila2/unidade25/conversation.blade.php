@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">

			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade25" data-etapa="conversation">
				<h3 class="barlow">UNIT 25</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>

				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<p><b>Gleen:</b> Hello my dear students. How are things? I hope everything is ok with you guys.
								Before we start the class, I’d like to agree something with you. Next week I’ll have an
								appointment with my doctor to see my ankle. Just to check if everything is ok. Because
								of that, I may arrive a bit late for the class ok.</p>
				<p><b>Students:</b> No problem teacher. We can start the class with the exercises we have to do
								and when you arrive, you go on with the activities</p>
				<p><b>Gleen:</b>  I might be absent, but Mr. Antony is aware of everything and if necessary he’ll take over the class ok.</p>
				<p><b>Students:</b> ok teacher, don’t worry. Everything is gonna be ok. (to be continued…)</p>
				
				<figure>
					<img src="{{ asset('assets/img/playgo/unit1/unidade1.png') }}" alt="Garotos festejando">
				</figure>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
