@extends('layouts.template')
@section('titulo','Unit 2 | Atividades')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade2" data-etapa="atividades">
			<h3 class="barlow">UNIT 3</h3>
			<h5 class="barlow upper">Aula 7 – Atividades</h5>
                <form method="post" class="metade">
					<p>1 - Criar transições entre cenas de videos capturados com a camera.
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">
					</p>
					<p>2- Aplicar tecnicas de ti pos de corte apresentados em sala usando tecnicas de edição.
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
