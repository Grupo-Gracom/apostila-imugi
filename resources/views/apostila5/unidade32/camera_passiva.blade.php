@extends('layouts.template')
@section('titulo','Unit 21 | Camera passiva')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade20" data-etapa="camera_passiva">
			<h3 class="barlow">UNIT 21</h3>
			<h5 class="barlow upper">Aula 1 – Camera passiva - Camera e seus instrumentos</h5>
			<p>
				Já estudamos detalhadamente o render e as configurações de camera, agora vamos fazer o mesmo com iluminação.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit20/imagem_unit20_1.png') }}" alt="guia1">
				</figure>
			</div>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
