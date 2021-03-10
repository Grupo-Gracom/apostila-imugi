@extends('layouts.template')
@section('titulo','Corel Draw | Aula 2 – Recursos básicos do Corel Draw')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula20">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 2 – Recursos básicos do Corel Draw</h5>
            
            <div class="umquarto">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/corel/aula02/imagem1.png') }}" alt="guia" style="width:25%!important;" >
                </figure>
            </div>
            <div class="metade esquerda">
                <div style="margin-top:16px">
                <h5 class="barlow">Caixa de ferramentas: <span class="dark-font"> utilizada para criar artes, desenhos e detalhes de vetores. </span></h5>
                <h5 class="barlow"> <span class="dark-font"> Diferença entre </span> Bitmap <span class="dark-font"> e </span> Vetor </span></h5>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/corel/aula02/imagem2.png') }}" alt="guia" >
                </figure>
                <p>Quando se trabalhar com programas vetoriais como CorelDRAW, Adobe Illustrator, InkScape entre
outros eles trabalham com vetores e são uti lizados para fazer logos a identi dade visual de artes de
uma loja ou empresa por não perder a qualidade.</p>
                <p>Na imagem acima vocês podem notar que ao trabalhar com bitmap ele perde a qualidade como na
foto de cima.</p>
<p>Os vetores não perdem proporção ou modifica sua forma pois são feitos por medidas matemáticas e
seus detalhes podem tanto reduzir quanto aumentar sem perda de qualidade nos seus trabalhos e
serviços gráficos.</p>       
            </div>
        </div>
        <div class="clear"></div> 
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
