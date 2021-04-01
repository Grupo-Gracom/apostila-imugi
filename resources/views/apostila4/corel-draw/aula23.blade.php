@extends('layouts.template')
@section('titulo','Corel Draw | Aula 6 – Texto')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula23">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 6 – Texto</h5>
                <figure style="margin-bottom:40px;">
                    <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem1.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
            
            <div class="metade esquerda">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem2.jpg') }}" alt="guia" style="width:50%!important;" >
                </figure>
            </div>
            <div class="metade direita">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem3.jpg') }}" alt="guia" style="width:50%!important;" >
                </figure>
            </div>
            <div style="margin-top:16px">
                <h5 class="barlow">Atividade</h5>
               <p>Montar uma cardápio para um restaurante ou pizzaria.</p>
               <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem4.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
                <p style="margin-top:16px">Fazer uma arte de divulgação com preços para os clientes da lanchonete ou pizzaria.</p>
            </div>
            <h5 class="barlow">Camadas</h5>
            <div class="metade esquerda">
            <p>O sistema de camadas do corelDRAW é semelhante
aos outros programas que trabalham com vetorização
como vão notar na imagem abaixo temos
o exemplo de uma laranja simples.</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem5.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
                <p>A esquerda o painel de camadas e seus controles já
a direta uma laranja feita uti lizando formas básicas
e abaixo um exemplo de como é a hierarquia das
camadas ao criar os objetos, uma das vantagens da
computação gráfi ca diferente de pinturas e desenhos
feitos a mão é que podemos trocar a posição dos objetos
a qualquer momento, já em uma pintura real é
preciso pensar em todas as etapas e em caso de erros
devem ser refeitos os desenhos ou pinturas.</p>
            </div>
            <div class="metade direita">
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem6.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
                <figure style="margin-bottom:16px;">
                    <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem7.jpg') }}" alt="guia" style="width:95%!important;" >
                </figure>
                <p><img src="{{ asset('assets/img/photoshop/corel/aula06/imagem8.jpg') }}" alt=""  style="display: inline-block; width:50px;"> Exibir páginas, camadas e objetos. </p>
                <p><img src="{{ asset('assets/img/photoshop/corel/aula06/imagem9.jpg') }}" alt=""  style="display: inline-block; width:50px;"> Exibir camadas e objetos. </p>
                <p><img src="{{ asset('assets/img/photoshop/corel/aula06/imagem10.jpg') }}" alt=""  style="display: inline-block; width:50px;"> Exibir páginas. <p>
                <p> <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem11.jpg') }}" alt=""  style="display: inline-block; width:50px;">  Nova Camada </p>
                <p> <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem12.jpg') }}" alt=""  style="display: inline-block; width:50px;">  Nova camada principal (todas as páginas) </p>
                <p> <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem13.jpg') }}" alt=""  style="display: inline-block; width:50px;">   Adicionar efeito </p>
                <p> <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem14.jpg') }}" alt=""  style="display: inline-block; width:50px;"> Excluir Atividades</p>
            </div>
            <div class="clear"></div>
            <div style="margin-top:40px;">
                <div class="metade esquerda">
                    <figure>
                        <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem15.jpg') }}" alt="guia" style="width:95%!important;" >
                    </figure>
                </div>
                <div class="metade direita">
                    <figure>
                        <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem16.jpg') }}" alt="guia" style="width:95%!important;" >
                    </figure>
                 </div>
            </div>
            <div class="clear"></div>
            <div style="margin-top:20px;">
            <p>Como podem notar acima o desenho da laranja está com cadeados no lugar dos quadrados indicando que o
grupo de objetos está bloqueado.</p>
<p>Você pode desbloquear o grupo ou objetos bloqueados utilizando o painel de objetos, selecionando o
<img src="{{ asset('assets/img/photoshop/corel/aula06/imagem17.jpg') }}" alt=""  style="display: inline-block; width:50px;">
dentro da camada desejada.</p>
<p>Outro modo é apertando o botão direito do mouse no objeto bloqueado que irá surgir o menu ao abaixo.</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem18.jpg') }}" alt="guia" style="width:25%!important;" >
                </figure>
                <p style="margin-top:20px;">Ao selecionar um ou mais objetos a barra de propriedades muda adicionando <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem19.jpg') }}" alt=""  style="display: inline-block; width:50px;"> botão de alinhar e
distribuir, que ao apertar o mesmo aparece o painel de alinhar e distribuir ao lado direito junto ao painel de
objetos, onde modificamos as camadas e também aparece as opções de formato descrita na imagem abaixo.</p>
            </div>
            <div style="margin-top:40px;">
                <div class="metade esquerda">
                    <figure>
                        <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem20.jpg') }}" alt="guia" style="width:95%!important;" >
                    </figure>
                </div>
                <div class="metade direita">
                    <figure>
                        <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem21.jpg') }}" alt="guia" style="width:95%!important;" >
                    </figure>
                 </div>
            </div>
            <div class="clear"></div>
            <div style="margin-top:40px;">
                <div class="metade esquerda">
                    <figure>
                        <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem22.jpg') }}" alt="guia" style="width:70%!important;" >
                    </figure>
                </div>
                <div class="metade direita">
                    <figure>
                        <img src="{{ asset('assets/img/photoshop/corel/aula06/imagem23.jpg') }}" alt="guia" style="width:95%!important;" >
                    </figure>
                 </div>
            </div>
        </div>
</main>

<script>
	activeMenu();
</script>

@endsection
