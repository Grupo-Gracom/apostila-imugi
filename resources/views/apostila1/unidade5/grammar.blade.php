@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade5" data-etapa="grammar">
				<h3 class="barlow">UNIT 05 - BURN TOOL</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit5/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <p style="text-align:center; margin-top: 36px;"><strong>COMPARATIVE</strong></p>
				<ul class="lista-vertical metade esquerda center-align">
                    <li><h5 class="barlow">Short adjectives</h5></li>
                    <li>Dark - darker</li>
                    <li>Bright - brighter</li>
                    <li>Big - bigger</li>
                    <li>Small - smaller</li>
                </ul>
                
                <ul class="lista-vertical metade direita center-align">
                    <li><h5 class="barlow">Long adjectives</h5></li>
                    <li>Interesting - more interesting</li>
                    <li>Intelligent - more intelligent</li>
                    <li>Creative - more creative</li>
                    <li>Patient - more patient</li>
                </ul>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Complete the sentences using the correct comparative form of the adjectives in parenthesis.</h5>
				<form id="unidade5grammar18" method="post">
                        <p>1. Photoshop CC is <input type="text" name="grammar18-1" required/> (new) than CS6.</p>
                        <p>2. 12 pixels are <input type="text" name="grammar18-2" required/> (big) than 5 pixels.</p>
                        <p>3. This image is <input type="text" name="grammar18-3" required/> (bright) than the other</p>
                        <p>4. That picture is <input type="text" name="grammar18-4" required/> (dark) than this one.</p>
                        <p>5. Kate is <input type="text" name="grammar18-5" required/> (patient) than Carlos.</p>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="5">
                    <input type="hidden" name="atividade_id" value="18">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                
                <h5 class="barlow">B - Correct the comparatives in the sentences.</h5>
                <div class="metade">
                    <form id="unidade5grammar19" method="post">
                        <p>
                            1. That car is expensiver than the other.
                            <input type="text" name="grammar19-1" class="full left-align" required/> 
                        </p>
                        <p>
                            2. An apartment is more small than a house. 
                            <input type="text" name="grammar19-2" class="full left-align" required/>
                        </p>
                        <p>
                            3. Sophia is more old than Carlos. 
                            <input type="text" name="grammar19-3" class="full left-align" required/> 
                        </p>
                        <p>
                            4. Photoshop is interestinger than other programs. 
                            <input type="text" name="grammar19-4" class="full left-align" required/>  
                        </p>
            
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="5">
                        <input type="hidden" name="atividade_id" value="19">
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

        $("#unidade5grammar18").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade5grammar18 input[type="text"]').each(function(index){
                if(($('#unidade5grammar18 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade5grammar18 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade5grammar18'), respostas);
            }else{
                enviarAtividade($('#unidade5grammar18'), respostas);
            }
        });

        $("#unidade5grammar19").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade5grammar19 input[type="text"]').each(function(index){
                if(($('#unidade5grammar19 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade5grammar19 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade5grammar19'), respostas);
            }else{
                enviarAtividade($('#unidade5grammar19'), respostas);
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
                        $('#unidade5grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade5grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade5grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade5grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
