@extends('layouts.template')
@section('titulo','Unit 1 | Aula 2')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade1" data-etapa="apresentacao">
			<h3 class="barlow">UNIT 1</h3>
			<h5 class="barlow upper">Aula 02 - Aula pratica de Edição I</h5>

			<p>
				- Capturar videos com a camera e fazer a importaçao para um projeto.<br/>
				- Criar uma sequencia aparti r de tracks de video obti dos no pré-corte .
			</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
