@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade7" data-etapa="grammar">
				<h3 class="barlow">UNIT 07 - Adjustment Panel</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit7/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio> 
                <div class="clear"></div> <br>
				<div class="lista-vertical metade center-align tabelaVerde">
                    <div class="metade esquerda">                   
                        <li>I REMEMBER</li>
                        <li>YOU ULTILIZE</li>
                        <li>WE NEED</li>
                        <li>THEY GIVE</li>
                        <li>Do i remember?</li>
                        <li>Do you ultilize?</li>
                        <li>Do we need?</li>
                        <li>Do they give?</li>
                    </div>
                    <div class="metade direita">
                    <li>HE REMEMBERS</li>
                        <li>SHE UTILIZES</li>
                        <li>IT NEED</li>
                        <li>HE/SHE/IT GIVES</li>
                        <li>Does he remember?</li>
                        <li>Does she utilize?</li>
                        <li>Does it need?</li>
                    </div>
                    <div class="clear"></div>
                </div> <br>               
                <div class="clear"></div>
				<h5 class="barlow">A - COMPLETE THE SENTENCES USING THE CORRECT VERB FORM.</h5>
				<form id="unidade7grammar23" method="post">
                    <p><b>1. </b>Carlos <input type="text" name="grammar23-1" required>  (use/uses) the Adjustment Panel for his pictures.</p>
                    <p><b>2. </b>My friend and I <input type="text" name="grammar23-2" required>   (need/needs) it to edit our photos.</p>
                    <p><b>3. </b>I <input type="text" name="grammar23-3" required>   (remember/remembers) the name of the tool.</p>
                    <p><b>4. </b>The teacher <input type="text" name="grammar23-4" required>   (say/says) the Adjustment Panel is crucial for photographers.</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="7">
                    <input type="hidden" name="atividade_id" value="23">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">B - CHOOSE THE CORRECT HELPING VERB FOR EACH SENTENCE.</h5>
				<form id="unidade7grammar24" method="post">
                    <p><b>1. </b><input type="radio" name="grammar24-1" value="1" required><b>DO</b></input> <input type="radio" name="grammar24-1" value="2" required><b>Does</b></input>  Lee know how to use the Black & White effect?</p>
                    <p><b>2. </b><input type="radio" name="grammar24-2" value="1" required><b>DO</b></input> <input type="radio" name="grammar24-2" value="2" required><b>Does</b></input>  you remember how to edit the contrast with the Adjustment Panel?</p>
                    <p><b>3. </b><input type="radio" name="grammar24-3" value="1" required><b>DO</b></input> <input type="radio" name="grammar24-3" value="2" required><b>Does</b></input>  Beatriz remember the name of the panel?</p>
                    <p><b>4. </b><input type="radio" name="grammar24-4" value="1" required><b>DO</b></input> <input type="radio" name="grammar24-4" value="2" required><b>Does</b></input>  Lee and Sophia use Photoshop?</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="7">
                    <input type="hidden" name="atividade_id" value="24">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>                
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        checkAtividade(23);
        checkAtividade2(24);

        $("#unidade7grammar23").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade7grammar23 input[type="text"]').each(function(index){
                if(($('#unidade7grammar23 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade7grammar23 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade7grammar23'), respostas);
            }else{
                enviarAtividade($('#unidade7grammar23'), respostas);
            }
        });

        $("#unidade7grammar24").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade7grammar24 input[type="radio"]:checked').each(function(index){
                if(($('#unidade7grammar24 input[type="radio"]:checked').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade7grammar24 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade7grammar24'), respostas);
            }else{
                enviarAtividade($('#unidade7grammar24'), respostas);                
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
                        $('#unidade7grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade7grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade7grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade7grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                }
            });
        }
        
        function checkAtividade2(atividade_id){
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
                        $('#unidade7grammar'+atividade_id+' input[name="'+chaves[j]+'"][value="'+respostas[j]+'"]').attr("checked", true);
                    }
                    $('#unidade7grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade7grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
