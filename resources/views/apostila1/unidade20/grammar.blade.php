@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade20" data-etapa="grammar">
				<h3 class="barlow">UNIT 20 - Akira’S REVIEW</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit20/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> 
                <div class="clear"></div> <br>
				<p>Simple Present Vs. Present Continuous</p>
                <p>The Simple Present Is Used To Talk About Routi ne Actions, To Describe, Or To Express
                Facts.<br> The Present Continuous Is Used When The Action Is Temporary Or Isolated. Look At
                The Two Following Examples:</p>
                <ul>
					<li><b>I EXERCISE (EVERY DAY)</b></li>
					<li><b>I’M EXERCISING (NOW/ THIS WEEK)</b></li>					                    										
				</ul>
				<h5 class="barlow">A - Complete The Exercise Using The Verbs In The Simple Present Or Present Continuous. </h5>
				<form id="unidade20grammar54" method="post">
                    <p><b>I</b> <input type="text" name="grammar54-1" required> (Work) Right Now.</p>
                    <p><b>SHE</b> <input type="text" name="grammar54-2" required> The Sofa.</p>
                    <p><input type="text" name="grammar54-3" required> They<input type="text" name="grammar54-4" required>(Talk) On The Phone Now?</p>
                    <p><b>HE</b> <input type="text" name="grammar54-5" required>  (Study) At Night.</p>
                    <p><b>I</b><input type="text" name="grammar54-6" required> (Not Watch) T.v. In The Morning. </p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="20">
                    <input type="hidden" name="atividade_id" value="54">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">B - Use The Verb To Be To Complete The Sentences. Abreviate Where Possible.</h5>
				<form id="unidade20grammar55" method="post">
                    <p><b>I</b> <input type="text" name="grammar55-1" required> Working For An International Company.</p>
                    <p><b>SHE</b> <input type="text" name="grammar55-2" required> Traveling For Christmas This Year.</p>
                    <p><b>WE</b><input type="text" name="grammar55-3" required> Going To School.</p>
                    <p><b>THEY</b> <input type="text" name="grammar55-4" required>  Not Studying For The Test.</p>
                    <p><input type="text" name="grammar55-5" required>  He American?</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="20">
                    <input type="hidden" name="atividade_id" value="55">
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

        $("#unidade20grammar54").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade20grammar54 input[type="text"]').each(function(index){
                if(($('#unidade20grammar54 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade20grammar54 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade20grammar54'), respostas);
            }else{
                enviarAtividade($('#unidade20grammar54'), respostas);
            }
        });
        $("#unidade20grammar55").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade20grammar55 input[type="text"]').each(function(index){
                if(($('#unidade20grammar55 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade20grammar55 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade20grammar55'), respostas);
            }else{
                enviarAtividade($('#unidade20grammar55'), respostas);
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
                        $('#unidade20grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade20grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade20grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade20grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
