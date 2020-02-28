@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade28" data-etapa="conversation">
				<h3 class="barlow">UNIT 28</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit28/Conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px">
					<b>Laura :</b>  Can I start teacher? As I told you before I accepted the work for the NGO that deal
					with orphan kids. We had our first meeting and now I know what they need. They want
					to be present in the social media like Facebook, Instagran and etc. I told them they had
					better be present in the social media. It’s a great way to get known. To do so, the first
					thing they have to do is to define the target group. The people they want to reach with
					their campaigns. Only after defining this, it is possible to plan the next steps.
				</p>
				<p>
					<b>Akira :</b>  Do they have to create a site? I think they had better have it. This way, people
					interested in getting information about the NGO, could get it easily. 
				</p>
				<p>
					<b>Laura :</b>  It all depends on what type of message they want to transmit to the target group.
					Sometimes, you have to create just a youtube channel and a page on facebook to show
					what the NGO is doing, and how a person could help them. (to be continued) 
				</p>
				<div style="margin-top: 36px">
					<figure>
						<img src="{{ asset('assets/img/playgo/unit10/pagina-1.png') }}" alt="rede social">
					</figure>
				</div>
			</div>
		</div>
	</main>
	
	<script>
        activeMenu();
    </script>

@endsection
