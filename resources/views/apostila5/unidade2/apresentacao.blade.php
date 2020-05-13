@extends('layouts.template')
@section('titulo','Unit 2 | Apresentação')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade2" data-etapa="apresentacao">
			<h3 class="barlow">UNIT 2</h3>
			<h5 class="barlow upper">Aula 2 – Apresentação do Cinema 4D, Unity, Blender e Cryengine.</h5>
			
			<p>
				O Cinema 4d é uma IDE(Integrated Development Environment - Ambiente de desenvolvimento integrado). 
				Existem algumas definições que precisamos entender para compreender
				sobre nosso aplicativo. 
			</p>
			<p>
				Ele é um software, como muitos no seu computador e pertence a categoria de aplicativos,
				sua versão mais atual é compatível com Windows 10. Logo, toda a estrutura do programa é 
				baseada em suas bibliotecas de janelas dispondo de uma interação simples entre barras, menus
				e ícones de acesso rápido, prático e de fácil acesso. Então vamos a área de trabalho.
			</p>
			<div>
                <figure class="caixa2">
                    <img src="{{ asset('assets/img/games_and_animation/unit2/imagem_unit2_01.png') }}" alt="guia1">
                </figure>
			</div>
			<p>
				Com os menus separando e organizando todos os caminhos e ferramentas, vamos a barra
				de menus, com um destaque especial para a opção Layout, localizada a extrema direita da
				mesma barra. Devemos clicar na seta drop down.
			</p>
			<div class="caixa2">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit2/imagem_unit2_02.png') }}" alt="guia2">
				</figure>
				<div>
					<div class="esquerda metade">
						<p>
							Podemos alternar entre as áreas de trabalho presentes
							que disponilizam barras e botões específicos para cada
							atividade. Estaremos constantemente alternando entre essas áreas para animar, mapear, editar, motion track, sculp
							mode e outras tarefas que podemos desenvolver. Ainda não
							saímos da barra de menus. Cuidado, isso muda completamente a área de trabalho.
							Para continuar vamos escolher o layout startup, será
							usado para compreender mais algumas coisas sobre a IDE.
							Essa área de trabalho pré configurada traz ferramentas para
							dar nossos primeiros passos.
							A barra de menus e área de trabalho continuam no
							mesmo lugar. As barras apresentadas a esquerda trazem
							opções de objeto, modos e ferramentas de seleção direta.
							No topo temos uma barra de atalhos e novas ferramentas de seleção. Porém, suas especificações são diferentes,
							dessa vez podemos escolher como queremos interagir
							com nossos objetos, mover, redimensionar ou rotacionar
							o objeto selecionado.
						</p>
					</div>
					<div class="direita metade">
						<figure>
							<img  src="{{ asset('assets/img/games_and_animation/unit2/imagem_unit2_03.png') }}" alt="guia3">
						</figure>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="metade esquerda">
                <figure>
                    <img  src="{{ asset('assets/img/games_and_animation/unit2/imagem_unit2_04.png') }}" alt="guia4">
                </figure>
			</div>
			<p>
				A tela de edição de objetos ou tela <b>Views</b>, nos fornece câmeras e
				formas práticas de navegação bem na barra superior do programa. Por ordem, podemos mover o objeto na direção relativa a sua
				posição pela tela de maneira plana, podemos dar zoom ou rodar
				em torno do objeto, sendo assim nosso painel de navegação.
			</p>
			<div class="caixa2 metade direita">
                <figure>
                    <img  src="{{ asset('assets/img/games_and_animation/unit2/imagem_unit2_05.png') }}" alt="guia5">
                </figure>
			</div>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
