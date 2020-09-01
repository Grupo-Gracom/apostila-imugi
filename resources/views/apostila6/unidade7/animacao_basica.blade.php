@extends('layouts.template')
@section('titulo','Unit 7 | After Effects CC - ANIMAÇÃO BÁSICA')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade7" data-etapa="animacao_basica">
			<h3 class="barlow">UNIT 7 - After Effects CC</h3>
			<h5 class="barlow upper">AULA 02 - ANIMAÇÃO BÁSICA</h5>

			<h5>Importando arquivos</h5>
			<p>
				Com o after effects é possível importar arquivos de origem para um projeto como base de itens
				de gravação e usá-los como origens de camada. Assim, o mesmo arquivo pode ser a origem
				para vários itens de gravação (cada um com suas próprias configurações de interpretação).
				O usuário pode importar vários tipos diferentes de arquivos, coleções de arquivos ou componentes 
				de arquivos como origens para artigos individuais de gravação, incluindo arquivos de
				imagem de movimento, arquivos de imagens estáticas, sequências de imagem estática e arquivos 
				de áudio. É possível também criar itens de gravação, como sólidos e pré-composições.
			</p>

			<p>
				É viável importar arquivos de mídia para o projeto usando a caixa de diálogo importar
				ou arrastando. Os itens importados aparecem no painel projeto.<br/>
				Para importar itens de gravação usando a caixa de diálogo importar: acesse arquivo > importar
				> selecione o arquivo que deseja importar e clique em ok.<br/>
				Para importar vários arquivos: acesse arquivo > importar > selecione os arquivos
				e clique em ok.
			</p>

			<p>
				Também é possível clicar duas vezes em uma área vazia do painel projeto, a caixa de diálogo
				importar irá abrir em seguida.
			</p>

			<h5>Propriedades das Layers</h5>

			<p>
				Cada layer possui propriedades que podem ser modifi cadas e animadas. O grupo básico de
				propriedades editáveis chama-se transform (que inclui propriedades como posição e opacidade).
			</p>

			<p>
				A layer ganha propriedades adicionais, se o usuário adicionar determinados recursos, por
				exemplo, adição de máscaras ou efeitos, ou conversão da camada em uma camada 3D.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit7/imagem_unit7_5.png') }}" alt="guia1">
				</figure>
			</div>

			<p>
				Todas as propriedades da layer são temporais (podem mudar a layer ao longo do tempo), no
				entanto, algumas layers como opacidade também são espaciais (podem mover a layer ou os
				pixels na área de composição).
			</p>

			<p>
				É possível expandir o contorno da layer para exibir as propriedades da layer e alterar os valores
				das propriedades. Note que a maioria das propriedades possui um cronômetro. Qualquer pro-
				priedade que tenha um símbolo cronômetro pode ser animada. Vale lembrar que, se várias
				layers esti verem selecionadas e você alterar uma propriedade para uma layer, a propriedade
				será alterada para todas as layers selecionadas.
			</p>
	
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
