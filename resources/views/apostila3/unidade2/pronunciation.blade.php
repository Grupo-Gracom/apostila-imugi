@extends('layouts.template')
@section('titulo','Unit 2 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade2" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 2</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 29/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow">A – Homophones 2</h5>
                <p>Example: <b>Here/Hear</b></p>
				<p>Complete the sentences below with the appropriate word.</p>
				<h5 class="barlow">Complete the sentences below with the appropriate word.</h5>
				<form id="unidade2pronunciation506" method="post">					
					<p><b>1</b> - We can see the ocean from 
                    <input type="text" name="pronunciation506-1" class="inputpequeno left-align" placeholder="Responda aqui" required>
                    </p>
					
					<p><b>2</b> - Can you 
					<input type="text" name="pronunciation506-2" class="inputpequeno left-align" placeholder="Responda aqui" required>
					The birds singing.</p>

					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="resposta_id" value="0">
					<input type="hidden" name="unidade_id" value="2">
					<input type="hidden" name="atividade_id" value="506">
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

        $("#unidade2pronunciation506").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade2pronunciation506 input[type="text"]').each(function(index){
                if(($('#unidade2pronunciation506 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade2pronunciation506 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade2pronunciation506'), respostas);
            }else{
                enviarAtividade($('#unidade2pronunciation506'), respostas);
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
                    var chaves = Object.keys(objeto);
                    var respostas = Object.values(objeto);
                    for(j = 0; j < respostas.length; j++){
                        $('#unidade2pronunciation'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade2pronunciation'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade2pronunciation'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade2pronunciation'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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