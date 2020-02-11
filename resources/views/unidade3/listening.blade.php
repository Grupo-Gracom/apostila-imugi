@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade3" data-etapa="listening">
				<h3 class="barlow">UNIT 01 - INTRODUCTION TO GRAPHIC DESIGN PRODUCTION</h3>
				<h5 class="barlow">3 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Observe how the sound of the letters “PH” resembles an “F”. Practice by repeating the words below.</h5>
				<ul class="lista-inline">
                    <li><b class="upper">Photo</b></li>
                    <li><b class="upper">Graph</b></li>
                    <li><b class="upper">Phone</b></li>
                    <li><b class="upper">Laugh</b></li>
                    <li><b class="upper">Pharmacy</b></li>
                    <li><b class="upper">Alphabet</b></li>
                    <li><b class="upper">Pamphlet</b></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B - Listen to your teacher say the words bellow and repeat after him. Observe the pronunciation of the suffixtion.</h5>
                <ul class="lista-inline">
                    <li><b class="upper">Production</b></li>
                    <li><b class="upper">Edition</b></li>
                    <li><b class="upper">Solution</b></li>
                    <li><b class="upper">Position</b></li>
                    <li><b class="upper">Option</b></li>
                    <li><b class="upper">Introduction</b></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">C - Read the following sentence to practice pronunciation. Observe the underlined letters.</h5>
                <p class="center-align">Photoshop is for the edition of photos and other graphic designing production.</p>
                <h5 class="barlow">3.1 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/listining/listining_a.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Listen and write the words you hear on the lines.</h5>
                <p>Graphic design is an important <b>tool</b> that enhances how you <b>communicate</b> with people. It is used to <b>transmit</b> ideas in an effective and beautiful way. Professionally designed graphics cause positive opinions about your <b>product</b> , service or <b>brand</b>.</p>
                <h5 class="barlow" style="margin-top: 16px">B - List the professionals who use Photoshop.</h5>
                <p>Photoshop is an important tool used by many professionals of different areas. It is extremely important for photographers, web designers, game designers, illustrators and many others.</p>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/listining/listining_b.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <form id="unidade1listening4" method="post">
                    <p>1 - <input type="text" name="listening4-1" required></p>
                    <p>2 - <input type="text" name="listening4-2" required></p>
                    <p>3 - <input type="text" name="listening4-3" required></p>
                    <p>4 - <input type="text" name="listening4-4" required></p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="4">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade1listening4").submit(function(e){
            e.preventDefault();
            var respostas = '{';
            $('#unidade1listening4 input[type="text"]').each(function(index){
                if(($('#unidade1listening4 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade1listening4 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1listening4'), respostas);
            }else{
                enviarAtividade($('#unidade1listening4'), respostas);
            }
        });

        function checkAtividade(atividade_id){
            request = $.ajax({
                url: window.location.pathname+'/respostasCheck/'+atividade_id,
                type: 'get',
                error: function(){
                    console.log("Erro de retorno de dados.");
                }
            });
            request.done(function(response){
                if(response == 0){
                    console.log("não veio nada");
                }else{
                    var objeto = JSON.parse(response[0].resposta_respostas);
                    var respostas = Object.keys(objeto).map(i => JSON.parse(objeto[String(i)]));
                    for(i = 0; i < respostas.length; i++){
                        var next = i + 1;
                        $('#unidade1listening'+atividade_id+' input[name="listening'+atividade_id+'-'+next+'"]').val(respostas[i]);
                        $('#unidade1listening'+atividade_id+' input[name="listening'+atividade_id+'-'+next+'"]').attr("value", respostas[i]);
                    }
                    $('#unidade1listening'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade1listening'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                }
            });
        }

        function enviarAtividade(formId, respostas){
            var resposta = {
                "_token" : formId.find('input[name="_token"]').val(),
                "resposta_respostas" : respostas,
                "atividade_id" : formId.find('input[name="atividade_id"]').val(),
                "unidade_id" : formId.find('input[name="unidade_id"]').val()
            };
            request = $.ajax({
                url: window.location.pathname+'/respostas',
                data: resposta,
                type: 'post',
                error: function(){
                    console.log("Erro de envio.");
                }
            });
            request.done(function(response){
                if(response == "1"){
                    alert("Respostas salvas");
                    window.location.reload();
                }else if(response == 2){
                    alert("Respostas atualizadas");
                    window.location.reload();
                }
            });
        }

        function atualizarAtividade(formId, respostas){
            var resposta = {
                "_token" : formId.find('input[name="_token"]').val(),
                "resposta_id" : formId.find('input[name="resposta_id"]').val(),
                "resposta_respostas" : respostas
            };
            request = $.ajax({
                url: window.location.pathname+'/respostas',
                data: resposta,
                type: 'post',
                error: function(){
                    console.log("Erro de envio.");
                }
            });
            request.done(function(response){
                if(response == "1"){
                    alert("Respostas salvas");
                    window.location.reload();
                }else if(response == 2){
                    alert("Respostas atualizadas");
                    window.location.reload();
                }
            });
        }

    </script>

@endsection
