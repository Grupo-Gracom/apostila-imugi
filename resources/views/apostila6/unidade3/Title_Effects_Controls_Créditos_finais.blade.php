@extends('layouts.template')
@section('titulo','Unit 3 | Title, Eff ects Controls, Créditos finais
Type')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade3" data-etapa="Title_Effects_Controls_Créditos_finais">
			<h3 class="barlow">UNIT 3</h3>
			<h5 class="barlow upper">Aula 09 – Title, Effects Controls, Créditos finais
				Type</h5>
			<h5>Type Tool (Title) e o Painel Essential Graphics</h5>
			<p>
				Ao adicionar texto a um título, você pode usar qualquer fonte no seu sistema. Você pode
				copiar e colar objetos de texto formatados entre o Premiere Pro Titler e outros aplicativos.
			</p><br>
			<h5>After Effects, Photoshop, Encore e Illustrator.</h5>
			<p>
				Dependendo da ferramenta que você escolher, você pode criar point text ou paragrafph text.
				Quando você cria um point text, você especifica o ponto de inserção onde você quer que seja
				digitado. A digitação continuará em uma linha, até que voce habilite a opção word wrap. O
				Word Wrap continua o texto em uma nova linha sempre que este atingir o limite da area da
				área de segurança. Quando voce cria um paragraph text, voce especifica uma caixa de texto
				a qual o texto se adapta a forma. O texto se passa para uma nova linha sempre que atinge a
			</p><br>
			<h5>Type Text sem limites</h5>
			<p>
				Escolha entre as ferramentas Type Tool e Vertical Type Tool para digitar um texto na horizontal
				e vertical respectivamente.
			</p><br>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit3/imagem_unit3_16.png') }}" alt="Type Text sem limites">
				</figure>
			</div><br>
			<p>
				Quando finalizar a digitação do texto, clique na Selection Tool e clique fora da área da caixa.
				Envolver o texto automaticamente. Escolha a ferramenta Type Tool e clique arrastando na tela
				para desenhar uma caixa com a área desejada.
			</p><br>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit3/imagem_unit3_17.png') }}" alt="Type Text sem limites">
				</figure>
			</div><br>
			<h5>Formatando o Texto no Titulo</h5>
			<p>
				Para cada texto horizontal ou caixa de texto criada, o Premiere Pro disponibiliza um grupo
				de opções de configuração no painel Effects Control. É importante observar que a criação de
				caixas de texto na mesma track serão exibidas na janela Effects Control de modo empilhado
				para que possam ser acessadas.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit3/imagem_unit3_18.png') }}" alt="Type Text sem limites">
				</figure>
			</div><br>
			<h5>Painel Effects Control e Grupo Motion Effects</h5>
			<p>
				O painel Effects Control ista todos os efeitos que são aplicados ao clipe atualmente selecionado.
				Os efeitos fixos de vídeo incluem os grupos Motion, Opacity e Time Remapping. Já os
				efeitos de áudio incluem Volume, Channel Volume e Panner.
			</p>
			<p>
				Os controles de efeitos Motion permitem posicionar, girar ou dimensionar um clipe dentro do
				quadro. Alguns ajustes podem ser feitos diretamente no Program Monitor.
				Um Keyframe é uma espécie de marcador que define as configurações em um ponto específico
				da Timeline. Se você usar um ou mais keyframes, o Premiere Pro pode automaticamente
				animar estas configurações entre eles.
			</p><br>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit3/imagem_unit3_19.png') }}" alt="Type Text sem limites">
				</figure>
			</div><br>
			<h5>Adjustando efeitos de Motion</h5>
			<p>
				Todo clip e muma sequencia do Premiere Pro automaticamente tem um efeito de movimento
				aplicado como um conjunto fixo. Para ajustar o efeito, selecione o clipe em uma Seqüência e
				localize seus efeitos no painel Effects Control. Clique no triangulo próximo ao efeito Motion
				para ajustar as configurações.
			</p><br>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit3/imagem_unit3_20.png') }}" alt="Type Text sem limites">
				</figure>
			</div><br>
			<p>
				Embora esses controles sejam chamados de Motion, não há movimento até que você o adicione.
				Por padrão, os clipes são exibidos na escala de 100% no centro do Monitor do Programa.
			</p><br>
			<h5>Position</h5>
			<p>
				Coloca o clipe ao longo dos eixos x e y. As coordenadas são calculadas com base na posição
				de pixel do ponto de ancoragem (coberto mais adiante nesta lista) da parte superior Canto
				da imagem. Assim, a posição padrão para um clipe de 1280 × 720 seria de 640,360; Isto é, o
				centro exato.
			</p><br>
			<h5>Scale(Scale Height, quando a opção Uniform Scale estiver desabilitada)</h5>
			<p>
				Os clipes estão configurados ao máximo tamanho por padrão (100%). Para reduzir um clipe,
				reduza este número. Você pode escalar até 10 000%, mas isso tornará a imagem pixelada
			</p>
			<h5>Scale Width</h5>
			<p>
				Desmarque Uniform Scale para tornar disponível a Largura de Escala. Isso permite que você
				altere a largura e a altura do grampo independentemente.
			</p>
			<h5>Rotation</h5>
			<p>
				Você pode girar uma imagem ao longo do eixo z Girando o controle giratório para cima. Você
				pode inserir graus ou um número de rotações. Por exemplo, 450 é o mesmo que 1 x 90 (o 1
				conta como um total de 360-Giro em grau). Os números positivos fornecem rotação no sentido
				horário, e os números negativos dão rotação anti-horária.
			</p><br>
			<h5>Anchor Point</h5>
			<p>
				Os ajustes de rotação e posição são todos baseados no ponto de ancoragem, que está no
				centro de um clipe por padrão. Isso pode ser alterado para qualquer ponto, incluindo um dos
				cantos do clipe ou mesmo um ponto fora do clipe.
			</p><br>
			<h5>Anti-Flicker Filter</h5>
			<p>
				Este recurso é útil para videoclipes entrelaçados e para imagens que contêm detalhes elevados,
				como linhas finas, bordas rígidas ou linhas paralelas. Essas imagens de alto detalhe
				podem cintilar durante o movimento. Adicionar alguma desfocagem e redução de cintilação,
				use 1,00.
			</p><br>
			<h5>Opacity</h5>
			<p>
				O efeito Opacidade permite controlar o quão opaco ou transparente é um clipe. Você também
				pode acessar modos de mistura especiais para criar efeitos visuais de várias camadas de vídeo.
			</p><br>
			<h5>Time Remapping</h5>
			<p>
				Este efeito permite que você diminua a velocidade, acelere ou retroceda a reprodução, e até
				permite congelar um quadro.
			</p><br>
			<h5>Essential Graphics</h5>
			<p>
				O novo painel Essential Graphics no After Effects CC e o Premiere Pro CC permitem que você
				crie controles personalizados para gráficos em movimento e, em seguida, compartilhe esses
				controles como modelos Motion Graphics através de Creative Cloud Libraries ou como um
				arquivo local.
			</p>
			<p>
				1.Acesse o painel Essential Graphics através do menu Window – Essential Graphics. <br>
				2.Para procurar modelos em suas bibliotecas do Creative Cloud ou sua unidade local, clique na
				guia Procurar no painel Essential Graphics.
			</p>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit3/imagem_unit3_21.png') }}" alt="Type Text sem limites">
				</figure>
			</div><br>
			<p>
				Adicionando modelos Motion Graphics a sua sequência <br>
				1.Selecione o modelo que deseja usar e arraste-o para uma faixa de vídeo em sua seqüência.
			</p><br>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit3/imagem_unit3_22.png') }}" alt="Type Text sem limites">
				</figure>
			</div><br>
			<p>
				2.Quando você adiciona um modelo a uma seqüência, o Premiere Pro mostra a mídia como
				offline até que o modelo complete o carregamento. Se os modelos que você adicionou requerem
				fontes que não tenham sido instaladas, você pode resolver as fontes que estão faltando.
			</p><br>

			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit3/imagem_unit3_23.png') }}" alt="Type Text sem limites">
				</figure>
			</div><br>
			<p>
				3.Para converter um modelo de item de faixa em um item de projeto do clipe principal, arraste
				e solte do painel Timeline para o painel do Projeto.
			</p><br>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit3/imagem_unit3_24.png') }}" alt="Type Text sem limites">
				</figure>
			</div><br>
			<p>
				Depois de adicionar um modelo à sua seqüência, você pode controlar os parâmetros
				do modelo no painel Graphics Essencial para modificar sua aparência.
			</p><br>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit3/imagem_unit3_25.png') }}" alt="Type Text sem limites">
				</figure>
			</div><br>
			<h5>Criando Títulos com o Legacy Title</h5>
			<p>
				No Premiere Pro 2017 ainda há a possibilidade de utilizar o método clássico de criação de
				Titles das versões anteriores. Isso para que seja possível desenvolver modelos e utilizá-los em
				novos projetos.
			</p>
			<p>
				Para criar um novo titulo usando o Legacy você deve:
			</p>
			<p>
				1.Clicar no menu File–New–Legacy Title. <br>
				2.No painel New Title, configurar Width and Height (largura e altura do quadro), Timebase
				(taxa de quadros), Pixel Aspect Ratio (aspecto de tela), ou simplesmente manter as configurações
				atuais, escolher o nome do Title, para em seguida clicar em OK.
			</p><br>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit3/imagem_unit3_26.png') }}" alt="Type Text sem limites">
				</figure>
			</div><br>
			<p>
				3.Na janela de criação do Title, clicar para digitar e em seguida, usar as ferramentas disponíveis
				para formatar e aplicar efeitos no texto.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/video_edition/unit3/imagem_unit3_27.png') }}" alt="Type Text sem limites">
				</figure>
			</div><br>
			<p>
				4.Após o termino, clique no botão fechar no canto superior direito da janela para que o
				novo Title apareça no painel Project.
			</p>
			<p>
				Criando Créditos finais com o Legacy Title
			</p>
			<p>
				1.Clique em File–New–Legacy Title.
			</p>
			<p>
				2.Na janela de creiação do Title, clique na área de edição e arraste para criar uma caixa de
				texto, ou use o botão Área Type Tool.
				<img style="display: inline-block;" src="{{ asset('assets/img/video_edition/unit3/imagem_unit3_28.png') }}" alt="Área Type Tool">
				
				<p>
					3.Digite o cole o texto na caixa criada e em seguida clique na Selection Tool para
					finalizar a edição.
				</p>
				<p>
					4.Após aplicar as formatações desejadas, clique no botão Roll/Crawl Options
					<img style="display: inline-block;" src="{{ asset('assets/img/video_edition/unit3/imagem_unit3_29.png') }}" alt="Roll/Crawl">
				</p>
				
			</p>
			<p>
				5.No painel Roll/Crawl Options, escolha Roll no gropo de opões Title Type. <br>
				6.As opções Start of Screen e End of Screen podem ser habilitadas par que a contagem de
				frames da rolagem seja iniciada apartir do posicionamento no inicio ou fim da tela. <br>
				7.Ainda é possível configurar uma aceleração ou desaceleração da animação da rolagem
				usando as opções Preroll, Ease In, Ease Out ou Postroll.
			</p>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
			<p style="margin-top: 16px"><b>1.</b> Criar creditos inicais de abertura para um video ou curta.</p>
			<p style="margin-top: 16px"><b>2.</b> Criar creditos finais para encerramento de um video ou curta.</p>


		</div>
	</div>

</main>

<script>
	activeMenu();
</script>

@endsection