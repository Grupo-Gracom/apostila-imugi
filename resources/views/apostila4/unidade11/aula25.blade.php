@extends('layouts.template')
@section('titulo','Unit 11 | Aula 25 – Avaliação Prática')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila4" data-unidade="unidade11" data-etapa="aula25">
			<h3 class="barlow">UNIT 11</h3>
			<h5 class="barlaw">Aula 25 – Avaliação Prática</h5>
			<p><b>Sugestões para trabalho Final:</b></p>
			<p>• Trabalho Final de Composição Avançada</p>
			<p>• Trabalho Final de Pintura Digital</p>
			<p>• Trabalho Final de Animação</p>
			<p>• Trabalho Final de Mockup</p>			
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
