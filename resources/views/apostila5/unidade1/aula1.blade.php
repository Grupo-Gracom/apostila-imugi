@extends('layouts.template')
@section('titulo','Unit 1 | Aula 20 – Animação Quadro-a-Quadro')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade1" data-etapa="aula1">
			<h3 class="barlow">UNIT 1</h3>
            <h5 class="barlow upper">Aula 1 – Apresentação IDE - Softwares e Hardwares</h5>
        </div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
