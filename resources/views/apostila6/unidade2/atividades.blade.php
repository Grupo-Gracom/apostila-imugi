@extends('layouts.template')
@section('titulo','Unit 2 | Atividades')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade2" data-etapa="atividades">
			<h3 class="barlow">UNIT 2</h3>
			<h5 class="barlow upper">Aula 3 – Atividades</h5>
                <form method="post" class="metade">
					<p>1 - Separar trechos de um plano sequencia fornecido pelo professor, apontando quais planos 
						de enquadramento e movimentos de camera se tratam.
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
