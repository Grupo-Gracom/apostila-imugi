@extends('layouts.template')
@section('titulo','Unit 19 | After Effects CC - TRACKING')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade19" data-etapa="motion_tracking">
			<h3 class="barlow">UNIT 19 - After Effects CC</h3>
			<h5 class="barlow upper">AULA 20 - MOTION TRACKING</h5>

			<h5>Visão geral e recursos de rastreamento de movimento</h5>
			<p>Com o rastreamento de movimento, você pode rastrear o movimento de um objeto e, em seguida, aplicar os dados de rastreamento desse movimento a outro objeto - como outra camada ou um ponto de controle de efeito - para criar composições nas quais imagens e efeitos seguem o movimento. Também é possível estabilizar o movimento, caso em que os dados de rastreamento são usados para animar a layer rastreada para compensar o movimento de um objeto nessa layer.</p>
			<p>É possível vincular propriedades aos dados de rastreamento usando expressões, o que abre uma grande variedade de usos. O after rastreia o movimento, combinando dados de imagem de uma área selecionada em um frame para dados de imagem em cada frame seguinte. Sendo possível aplicar os mesmos dados de rastreamento para diferentes layers ou efeitos. Você também pode rastrear vários objetos na mesma camada.</p><br>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit19/imagem_unit19_1.png') }}" alt="guia1">
				</figure>
			</div>

			<h5>Fluxos de trabalho do Track Motion</h5>
			<p>Há muitas maneiras de fazer o rastreamento de movimento no after, o método e o fluxo de trabalho que você seguir dependem da natureza do seu clipe e do que você deseja acompanhar.</p><br>
			<p>
				• Mask tracker: use o rastreador de máscara para desenhar máscaras em torno de seu objeto e para rastrear apenas determinados objetos em sua cena. <br>
				• Face tracker: o rastreamento de máscara simples permite que você aplique efeitos rapidamente apenas a um rosto, como correção de cor seletiva ou desfocando a face de uma pessoa e muito mais. (Com Face Tracking, você pode rastrear partes específicas do rosto, como pupilas, boca e nariz, permitindo isolar e trabalhar com essas características faciais com maior detalhe. Por exemplo, mude as cores dos olhos ou exagere os movimentos da boca sem ajustes frame a frame.). <br>
				• 3D Camera tracker: use o efeito do rastreador de câmera 3D para analisar seqüências de vídeo para extrair o movimento da câmera e os dados da cena 3D. (É possível compor elementos 3D compostos sobre suas imagens em 2D.). <br>
				• Point tracker: Você pode rastrear um ou vários recursos de referência em um clipe.
			</p>

			<h5>Rastreamento de um ponto</h5>
			<p>Acompanhe um único padrão de referência (uma pequena área de pixels) em um clipe de fifi lme para gravar dados de posição.</p>

			<h5>Rastreamento de dois pontos</h5>
			<p>Rastreie dois padrões de referência em um clipe de filme e use a relação entre os dois pontos rastreados para registrar a posição, a escala e os dados de rotação.</p>

			<h5>sRastreamento de quatro pontos ou faixa de pino de canto</h5>
			<p>Acompanhe quatro padrões de referência em um clipe de filme para registrar a posição, a escala e os dados de rotação. Os quatro rastreadores analisam a relação entre quatro padrões de referência, como os cantos de uma moldura ou monitor de televisão. Estes dados são aplicados em cada canto de uma imagem ou clipe para “pino” o clipe para que ele apareça bloqueado na moldura ou monitor de televisão.</p>

			<h5>Rastreamento de múltiplos pontos</h5>
			<p>Rastreie tantos padrões de referência em um clipe como desejar. Você pode adicionar manualmente rastreadores dentro dos comportamentos Analyze Motion e Stabilize. Quando você aplica um comportamento de Track Points da subcategoria de comportamentos Shape a uma forma ou máscara, um rastreador é atribuído automaticamente a cada ponto de controle de forma.</p><br>
			<p>
				• Warp stabilizer VFX: você pode estabilizar o movimento com o efeito Warp Stabilizer. Ele remove o jitter causado pelo movimento da câmera, possibilitando a transformação de filmagens instáveis e manobras em tiros estáveis e suaves.
			</p>


			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>01.</b>Criar uma animação com texto e gráficos para ser traqueados em vídeos de esporte.</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
