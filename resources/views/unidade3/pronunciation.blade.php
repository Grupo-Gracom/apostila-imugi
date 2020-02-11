@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade3" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 01 - INTRODUCTION TO GRAPHIC DESIGN PRODUCTION</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Listen to and repeat the pronunciati on of the following words. Observe the pronunciati on of the lett er ‘L’.</h5>
				<ul class="lista-inline">
                    <li><b class="upper">Wildlife</b></li>
                    <li><b class="upper">Original</b></li>
                    <li><b class="upper">Old</b></li>
                    <li><b class="upper">Tool</b></li>
                    <li><b class="upper">Call</b></li>
                    <li><b class="upper">Professional</b></li>
                    <li><b class="upper">All</b></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B - Listen to and repeat the pronunciati on of the following words. Pay att enti on to the pronunciati on of “CH”.</h5>
                <ul class="lista-inline">
                    <li><b class="upper">Choose</b></li>
                    <li><b class="upper">Teach</b></li>
                    <li><b class="upper">Check</b></li>
                    <li><b class="upper">Touch</b></li>
                    <li><b class="upper">Change</b></li>
                    <li><b class="upper">Chat</b></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">C - Listen to your teacher read the sentence, and then repeat it aft er him.</h5>
                <p>I teach children to use professional Photoshop tools.</p>
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
