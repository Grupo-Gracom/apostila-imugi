@extends('layouts.template')
@section('titulo','Unit 11 | Aula 26 – Avaliação Teórica')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila4" data-unidade="unidade11" data-etapa="aula26">
			<h3 class="barlow">UNIT 11</h3>
			<h5 class="barlaw">Aula 26 – Avaliação Teórica</h5>
			<p><b>Avaliação aplicada pelo Instrutor baseada no conteúdo abordado durante o curso de
			Adobe Photoshop.</b></p>						
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
