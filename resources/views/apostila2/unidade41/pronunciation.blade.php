@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade41" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 41</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear espacamento"></div>                             
                <p class="esquerda" style="color:green;">Improving pronunciation - / g / / j /</p>           
                <div class="clear"></div>
                <p><b>G</b>eorge <b>g</b>oes to the <b>g</b>ym by jeep.
                Jane <b>g</b>enerally jo<b>g</b>s in January with <b>G</b>eena and <b>G</b>ary.
                Joanna enjoys Jazz at <b>G</b>utemberg’s club.
                Jelly, <b>g</b>ooseberry jam and juice is Jim and <b>G</b>eorge’s favorite breakfast.
                <b>G</b>ee, Jim <b>G</b>oldber<b>g</b>, the Jewish <b>g</b>uy, jumps just like a ja<b>g</b>uar.
                <b>J</b>ames is <b>j</b>olly <b>g</b>ood at <b>G</b>ymnastics.</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
