@extends('layouts.template')
@section('titulo','Unit 11 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade11" data-etapa="grammar">
				<h3 class="barlow">UNIT 11 - COLOR TOOLS</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit11/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                   <h5 class="barlow">Present continuos</h5>
                   <p>Structure</p>
                   <p><b>Affirmative:</b> SUBJECT + TO BE + VERB + ING</p>
                   <p>EXAMPLE: I AM WORKING</p>
                   <p><b>Interrogative:</b> TO BE + SUBJECT + VERB + ING</p>
                   <p>EXAMPLE: ARE YOU STUDYING?</p>
                   <p><b>Negative:</b> SUBJECT + TO BE + NOT + VERB + ING</p>
                   <p>EXAMPLE: SHE IS NOT GOING.</p>
                </div>
                <h5 class="barlow" style="margin-top: 16px">A - Use the verbs in parenthesis in the present continuos form to complete the sentences.</h5>
				<form id="unidade11grammar33" method="post">
                    <p>1 - ADAM <input type="text" name="grammar33-1" placeholder="Responda aqui" required/>  (develop) a birthday card for his friend. <b>(Affirmative)</b></p>
                    <p>2 - <input type="text" name="grammar33-2" placeholder="Responda aqui" required/> ADAM <input type="text" name="grammar33-3" placeholder="Responda aqui" required/> (create) a card for a friend? <b>(Interrogative)</b></p>
                    <p>3 - ADAM <input type="text" name="grammar33-4" placeholder="Responda aqui" required/>  (make) a birthday card for his friend. <b>(Negative)</b></p>
                    <p>4 - Bia <input type="text" name="grammar33-5" placeholder="Responda aqui" required/>  (teach) ADAM to use color tools. <b>(Affirmative)</b></p>
                    <p>5 - <input type="text" name="grammar33-6" placeholder="Responda aqui" required/> Bia <input type="text" name="grammar33-7" placeholder="Responda aqui" required/>  (help) ADAM with the birthday card? <b>(Interrogative)</b></p>
                    <p>6 - Bia <input type="text" name="grammar33-8" placeholder="Responda aqui" required/>   (talk) to ADAM about color tools. <b>(Negative)</b></p>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="11">
                    <input type="hidden" name="atividade_id" value="33">
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

        $("#unidade11grammar33").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade11grammar33 input[type="text"]').each(function(index){
                if(($('#unidade11grammar33 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade11grammar33 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade11grammar33'), respostas);
            }else{
                enviarAtividade($('#unidade11grammar33'), respostas);
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
                        $('#unidade11grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade11grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade11grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade11grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
