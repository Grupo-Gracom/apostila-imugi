@extends('layouts.template')
@section('titulo','Unit 3 | atividades Tiposde de corte')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade3" data-etapa="atividades_aula_09">
			<h3 class="barlow">UNIT 3</h3>
			<h5 class="barlow upper">Aula 9 – Atividades - Title, Effects Controls, Créditos finais</h5>
                <form method="post" class="metade">
					<p>1 - Criar creditos inicais de abertura para um video ou curta.
						<input type="text" class="full left-align" placeholder="Atividade Prática" disabled="true">
					</p>
					<p>2 - Criar creditos finais para encerramento de um video ou curta.
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
