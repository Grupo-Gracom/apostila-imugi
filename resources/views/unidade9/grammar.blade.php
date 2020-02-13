@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade9" data-etapa="grammar">
				<h3 class="barlow">UNIT 09 - PROFESSOR ANA BEATRIZ</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio>

                <div class="clear"></div>
                <p>WH- QUESTIONS (WHAT; WHERE; HOW)</p>
                <p>Where is used to make questions about place/location.</p>
                <p>What is used to make questions about things.</p>
                <p>How is used to make questions about the way something is done, or condition.</p>
                <p><b>EXAMPLES:</b></p>
                <p>Where are you from?</p>
                <p>What is your profession?</p>
                <p>How are you today?</p>
				<h5 class="barlow">A - Complete The Questions Using The Appropriate Interrogative Pronoun.</h5>
				<form id="unidade9grammar29" method="post">
                    <p>1. <input type="text" name="grammar29-1" required> are Caio and Felipe from?</p>
                    <p>2. <input type="text" name="grammar29-2" required> do you go to work?</p>
                    <p>3. <input type="text" name="grammar29-3" required> is your favorite color?</p>
                    <p>4. <input type="text" name="grammar29-4" required> are you today?</p>
                    <p>5. <input type="text" name="grammar29-5" required> do you live?</p>
                    <p>6. <input type="text" name="grammar29-6" required> does she work?</p>
                    <p>7. <input type="text" name="grammar29-7" required> does he take beautiful photos?</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="9">
                    <input type="hidden" name="atividade_id" value="29">
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

        $("#unidade9grammar29").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade9grammar29 input[type="text"]').each(function(index){
                if(($('#unidade9grammar29 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade9grammar29 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade9grammar29'), respostas);
            }else{
                enviarAtividade($('#unidade9grammar29'), respostas);
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
                        $('#unidade9grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade9grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade9grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade9grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
