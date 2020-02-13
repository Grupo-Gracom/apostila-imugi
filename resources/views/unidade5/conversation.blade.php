@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade5" data-etapa="conversation">
				<h3 class="barlow">UNIT 05 - BURN TOOL</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit5/Conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px"><b>Sophia :</b> What’s up everyone? I have an interesting tool to teach you today. It is called Burn Tool.</p>
				<p><b>Sophia :</b> Do any of you know what it is used for?</p>
				<p><b>Lee Steve :</b> Professor, I think I know. Is it used to make a picture brighter?</p>
				<p><b>Beatriz Lima :</b> I think it’s to make a picture darker.</p>
				<p><b>Sophia : </b>  I’m sorry Lee, but Beatriz is right. Burn tool is used when an area in your picture is bright and you want to make it darker.</p>
				<div class="full" style="margin-top: 36px">
					<figure>
						<img src="{{ asset('assets/img/playgo/unit5/ilust_05.jpg') }}" alt="Garotos festejando">
					</figure>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
