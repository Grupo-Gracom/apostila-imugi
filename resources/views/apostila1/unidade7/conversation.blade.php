@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade7" data-etapa="conversation">
				<h3 class="barlow">UNIT 07 - Adjustment Panel</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit7/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px"><b>Carlos :</b> Sophia, my friend says he uses a panel in Photoshop where he creates filters and edits photos. I don’t remember the name of this panel. </p>
				<p><b>Sophia :</b> Right! That is a very important part of the software, especially for Photographers. The name of that panel is Adjustment Panel.</p>
				<p><b>Beatriz :</b>  I have a good friend who is a professional Photographer and he utilizes the Adjustment Panel all the time. He needs it to make his pictures have unique identities.</p>
				<p><b>Lee :</b> Hey, I use that panel with every picture I edit! I especially love the Black & White tool because I like to give a dramatic effect on my photos.</p>
				<p><b>Sophia :</b>  Great comments, everybody! I am really happy to see you all understand a little about the Adjustment Panel.</p>				
				<figure>
					<img src="{{ asset('assets/img/playgo/unit7/ilust_07.jpg') }}" alt="Garotos festejando">
				</figure>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
