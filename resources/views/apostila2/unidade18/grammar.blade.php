@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade18" data-etapa="grammar">
				<h3 class="barlow">UNIT 18</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>                
                <h5 class="barlow" style="margin-top:16px;">SIMPLE PAST X PAST CONTINUOUS</h5>
                <div class="espacamento">                                
                    <table class="metade esquerda">           
                        <tr>
                            <td><h5 class="barlow">SIMPLE PAST (isolated action in the past)</h5></td>                    														
                        </tr>                                                    										
                        <tr>
                            <td><p>Justice league <b>was</b> a fantastic movie.<p></td>
                        </tr>                                                    										
                        <tr>
                            <td><p>Last weekend i <b>watched</b> Rangnarok.<p></td>
                        </tr>                                                    										
                        <tr>
                            <td><p>John <b>saw</b> many nice things in Comic Con.<p></td>
                        </tr>                                                    										
                    </table>                
                    <table class="metade direita">           
                        <tr>
                            <td><h5 class="barlow">PAST continuous (progressive action in the past)</h5></td>                    														
                        </tr>                                                    										
                        <tr>
                            <td><p>He <b>was producing</b> a new video clip.<p></td>
                        </tr>                                                    										
                        <tr>
                            <td><p>They<b>were working</b> in Seattle last year.<p></td>
                        </tr>                                                    										
                        <tr>
                            <td><p>We <b>were going</b> to L.A when you called.<p></td>
                        </tr>                                                    										
                    </table>
                </div>
                <div class="clear"></div>                
                <h5 class="barlow">EXERCISES</h5>                
                <h5 class="barlow">A - Complete the sentences with the words in parentheses using the SIMPLE PAST or the PAST PROGRESSIVE:</h5>                
				<form id="unidade18grammar178" method="post">                                                                                           
                    <p><b>1. </b>While Marvel <input type="text" placeholder="responda aqui !" name="grammar178-1" class="inputpequeno" required> 
                    (Shoot) Ragnarok, I <input type="text" placeholder="responda aqui !" name="grammar178-2" class="inputpequeno" required>. 
                    (study) its production.</p>
                    <p><b>2. </b>Mr Smith <input type="text" placeholder="responda aqui !" name="grammar178-3" class="inputpequeno" required>. 
                    (show) Cinema 4D features when he <input type="text" placeholder="responda aqui !" name="grammar178-4" class="inputpequeno" required>
                    (receive) a phone call.</p>
                    <p><b>3. </b>While he <input type="text" placeholder="responda aqui !" name="grammar178-5" class="inputpequeno" required>. 
                    (fly) to NY, Laura <input type="text" placeholder="responda aqui !" name="grammar178-6" class="inputpequeno" required>. 
                    (accept) her new job.</p>
                    <p><b>4. </b>The actors <input type="text" placeholder="responda aqui !" name="grammar178-7" class="inputpequeno" required> 
                    (fight) when the cop <input type="text" placeholder="responda aqui !" name="grammar178-8" class="inputpequeno" required> 
                    (arrest) them.</p>
                    <p><b>5. </b>DC comics<input type="text" placeholder="responda aqui !" name="grammar178-9" class="inputpequeno" required> 
                    (release) Justice League while Marvel <input type="text" placeholder="responda aqui !" name="grammar178-10" class="inputpequeno" required>.
                    (promote) Ragnarok.</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="18">
                    <input type="hidden" name="atividade_id" value="178">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>                
                <h5 class="barlow">B - Watch Ragnarok official trailer and write 5 sentences in the SIMPLE PAST and 5 in PAST
                CONTINUOUS.</h5>
                <figure class="umterco">
					<img src="{{ asset('assets/img/dominating/unit18/grammar1.png') }}" alt="Garotos festejando">
				</figure>
                <figure class="umterco">
					<img src="{{ asset('assets/img/dominating/unit18/grammar2.png') }}" alt="Garotos festejando">
				</figure>
                <figure class="umterco">
					<img src="{{ asset('assets/img/dominating/unit18/grammar3.png') }}" alt="Garotos festejando">
                </figure>
                <div class="clear"></div>
                <h5 class="barlow"><a style="margin: 16px 0;" href="https://www.youtube.com/watch?v=ue80QwXMRHg&pbjreload=10">https://www.youtube.com/watch?v=ue80QwXMRHg&pbjreload=10</a></h5>
                <form id="unidade18grammar179" method="post">
                <p><textarea  class="full" name="grammar179-1" required></textarea></p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="18">
                    <input type="hidden" name="atividade_id" value="179">
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

        $("#unidade18grammar178").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade18grammar178 input[type="text"]').each(function(index){
                if(($('#unidade18grammar178 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade18grammar178 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade18grammar178'), respostas);
            }else{
                enviarAtividade($('#unidade18grammar178'), respostas);
            }
        });

        $("#unidade18grammar179").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade18grammar179 textarea').attr("name")+'":"'+$('#unidade18grammar179 textarea').val()+'"}';
            if($('#unidade18grammar179 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade18grammar179'), respostas);
            }else{
                enviarAtividade($('#unidade18grammar179'), respostas);
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
                        $('#unidade18grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade18grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                        $('#unidade18grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade18grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade18grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade18grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                    
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
