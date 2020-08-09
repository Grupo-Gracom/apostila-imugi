@extends('layouts.template')
@section('titulo','Unit 29 | Renderização')
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
				Desenvolvemos objetos, animações, joint points, animações com partículas e todo o
				necessário para produção da parte visual e simulações que usam extruturas lógicas, essas
				partes separadas podem ser usadas para diversos objetivos como produzir imagens, vídeos e
				mesh, recurso que será usado no nosso próximo módulo para criar um jogo.
				Devemos ficar atentos ao nosso objetivo final, se desejamos criar um filme curta ou longa
				metragem precisamos ficar atentos as configurações de saída do arquivo e principalmente o
				ambiente de reprodução, sem esquecer também da qualidade da captura do arquivo, iluminação,
				composição de quadro e fotografia.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit20/imagem_unit29_1.png') }}" alt="guia1">
				</figure>
			</div>
		</div>
	</div>

</main>

<script>
	activeMenu();
</script>

@endsection