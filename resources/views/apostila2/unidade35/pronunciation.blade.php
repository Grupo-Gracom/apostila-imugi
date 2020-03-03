@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade35" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 35</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>

                <table  class="metede center-align">
                    <tr>
                        <td><p>When /t/ </p></td>
                        <td class="vertical-align" colspan="2" rowspan="2"><p>Quick 'd sound' /t/</p></td>
                        <td class="vertical-align" colspan="2" rowspan="2"><p>Glottal stop /?/O</p></td>
                        <td class="vertical-align" colspan="2" rowspan="2"><p>mitted /t/: /t/</p></td>
                    </tr>
                    <tr >
                        <td><p>doesn't</p></td>
                    </tr >
                    <tr >
                        <td><p>sound like /t/</p></td>
                        <td><p>Daughter</p></td>
                        <td><p>Computer</p></td>
                        <td><p>Fitness</p></td>
                        <td><p>Partner</p></td>
                        <td><p>Advantage</p></td>
                        <td><p>Center</p></td>
                    </tr>
                </table>

                <p>The compu<b>t</b>er of the fi<b>t</b>ness cen<b>t</b>er my daugh<b>t</b>er usually goes, has some advan<b>t</b>ages over her par<b>t</b>ner computer.</p>
                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
