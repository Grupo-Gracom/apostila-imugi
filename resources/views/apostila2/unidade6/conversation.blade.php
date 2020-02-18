@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade6" data-etapa="conversation">
				<h3 class="barlow">UNIT 6</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px"><b>VICTOR :</b>  Hey class, this is our final lesson. You are all wonderful students and you will go far in life. All you need is dedication! To wrap up our lessons, we are going to do a little review today.</p>
				<p><b>VICTOR :</b>  Please, someone tell me what tool we can use to add animated effects to the video?</p>
				<p><b>MARCELO :</b> It’s the key frame! You can add it to any point of the video to add an effect and determine its duration.</p>
				<p><b>VICTOR :</b> Great! And where can you create effects for the videos?</p>
				<p><b>LAURA :</b> You can create them in the adjustment panel?</p>
				<p><b>VICTOR :</b> Way to go! You see? You guys are brilliant!</p>
				<div class="metade" style="margin-top: 36px">
					<figure>
						<img src="{{ asset('assets/img/playgo/unit29/pagina-1.png') }}" alt="Garotos festejando">
					</figure>
				</div>
			</div>
		</div>
	</main>
	
	<script>
        activeMenu();
    </script>

@endsection
