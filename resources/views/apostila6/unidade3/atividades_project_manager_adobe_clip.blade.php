@extends('layouts.template')
@section('titulo','Unit 3 | atividades - Project Manager Adobe Clip')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade3" data-etapa="atividades_project_manager_adobe_clip">
			<h3 class="barlow">UNIT 3</h3>
			<h5 class="barlow upper">Aula 7 – Atividades - Tipos de corte</h5>
                <form method="post" class="metade">
					<p>1 - Configurar projetos anteriores usando o project manager.
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">
					</p>
					<p>2 - Realizar ediçoes basicas usando o Adobe Clip.
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true"> 
					</p>
					
                </form>
        </div>
    </div>    
</main>

<script>
	activeMenu();
</script>

@endsection
