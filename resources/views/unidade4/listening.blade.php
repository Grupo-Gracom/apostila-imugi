@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade4" data-etapa="listening">
				<h3 class="barlow">UNIT 04 - NICE TO MEET YOU, KATE!</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit4/Pronuciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A. Observe that the letter 'E' is not pronounced at the end of words.</h5>
                <ul class="lista-inline">
					<li><b>LIKE</b></li>
					<li><b>NICE</b></li>
					<li><b>HAVE</b></li>
					<li><b>LOVE</b></li>
					<li><b>MAKE</b></li>
					<li><b>HERE</b></li>
                </ul>

                <h5 class="barlow" style="margin-top: 16px">B. Read the sentence below to practice the pronunciation of words ending in ‘E’.</h5>
                <ul class="lista-inline">
                    <p>“These are my friends Kate and Kyle.”</p>
                </ul>
                
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit4/Listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Listen and answer the questions.</h5>
                <ul>
                    <p><b>Hello. My name is Pong. I am from Australia.</b></p>
                    <p><b>Hi. I am Jessica. I was born in the United States.</b></p>
                    <p><b>Hey there! My name is Nicolas, but my friends call me Nick. I’m from England.</b></p>
                </ul>
                <div class="metade">
                    <form id="unidade1listening4" method="post">
                        <p>
                            1. What is Nicolas’ nationality?<br>
                            <input type="text" name="listening4-1" class="full left-align" required>
                        </p>
                        <p>
                            2. Where is Pong from?<br>
                            <input type="text" name="listening4-1" class="full left-align" required>
                        </p>
                        <p>
                            3. Where was Jessica born?<br>
                            <input type="text" name="listening4-1" class="full left-align" required>
                        </p>
            
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="1">
                        <input type="hidden" name="atividade_id" value="1">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </form>
                </div>
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
