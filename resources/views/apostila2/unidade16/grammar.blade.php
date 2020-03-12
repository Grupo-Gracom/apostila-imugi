@extends('layouts.template')
@section('titulo','Unit 16 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade16" data-etapa="grammar">
				<h3 class="barlow">UNIT 16</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<!-- <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
                <!-- nao tem audio ainda -->
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top:16px;">A – SIMPLE PAST (REGULAR VERBS)</h5>
                <p><b>Simple Past</b> is used to express that something <b>happened in a specific time in the past.</b></p>
                <table class="umterco center-align" style="margin-right:16px;">
                    <tr>
                        <td colspan="2"><h5 class="barlow">Infinitive</h5></td>
                    </tr>
                    <tr>
                        <td><p>To be</p></td>
                        <td><p>To go</p></td>
                    </tr>
                    <tr>
                        <td><p>To spend</p></td>
                        <td><p>To take</p></td>
                    </tr>
                    <tr>
                        <td><p>To get</p></td>
                        <td><p>To buy</p></td>
                    </tr>
                    <tr>
                        <td><p>To feel</p></td>
                        <td><p>To understand</p></td>
                    </tr>
                </table>
                <table class="umterco center-align">
                    <tr>
                        <td colspan="2"><h5 class="barlow">Past form (*) (I,you,he,she,it,we,you,they)</h5></td>
                    </tr>
                    <tr>
                        <td><p>Was / were</p></td>
                        <td><p>Went</p></td>
                    </tr>
                    <tr>
                        <td><p>Spent</p></td>
                        <td><p>Took</p></td>
                    </tr>
                    <tr>
                        <td><p>Got</p></td>
                        <td><p>Bought</p></td>
                    </tr>
                    <tr>
                        <td><p>Felt</p></td>
                        <td><p>Understood</p></td>
                    </tr>
                </table>
                <div class="clear"></div>
                <table class="metade center-align">
                    <tr>
                        <td colspan="2"><h5 class="barlow"><b>Yes/no Questions</b></h5></td>
                    </tr>
                    <tr>
                        <td><p><b>Did you have</b> an office in California?</p></td>
                        <td><p><b>Yes, I had</b> an office in California. / <b>Yes, I did.</b></p></td>
                    </tr>
                    <tr>
                        <td><p><b>Did he understand</b> the project outline?</p></td>
                        <td><p><b>No, he didn’t understand</b> it<b> /No, He didn’t.</b></p></td>
                    </tr>
                    <tr>
                        <td><p><b>Did they bring</b> the notes of yesterday?</p></td>
                        <td><p><b>Yes, they broung ht</b> all the notes. /<b>Yes, they did.</b></p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><h5 class="barlow"><b>Wh-Questions</b></h5></td>
                    </tr>
                    <tr>
                        <td><p><b>What did he feel</b> with the picture?</p></td>
                        <td><p><b>He got</b> speechless.</p></td>
                    </tr>
                    <tr>
                        <td><p><b>How much did you spend</b> in NY?</p></td>
                        <td><p><b>I spent</b> around 3 thousand bucks.</p></td>
                    </tr>
                    <tr>
                        <td><p><b>How many</b> comic books <b>did you buy?</b></p></td>
                        <td><p>We bought <b>a bunch of them.</b></p></td>
                    </tr>
                </table>
                <div class="clear"></div>

                <h5 class="barlow">EXERCISES</h5>
                <h5 class="barlow espacamento">B -  Complete the sentences. Use the past simple form of the verb in brackets.</h5>
				<form id="unidade16grammar168" method="post">
                    <p><b>1. </b>They<input type="text" placeholder="responda aqui !" name="grammar168-1" class="inputMedio" required>(get up) very early today.</p>
                    <p><b>2. </b>John and Akira<input type="text" placeholder="responda aqui !" name="grammar168-2" class="inputMedio" required>(spend) two hours working on a new project.</p>
                    <p><b>3. </b>I <input type="text" placeholder="responda aqui !" name="grammar168-3" class="inputMedio" required> (go) to the movies with my family.</p>
                    <p><b>4. </b>Last year, we <input type="text" placeholder="responda aqui !" name="grammar168-4" class="inputMedio" required>(see) a comic books show in Manhatan.</p>
                    <p><b>5. </b>Gleen <input type="text" placeholder="responda aqui !" name="grammar168-5" class="inputMedio" required> (meet) some friends at the movies last week.</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="16">
                    <input type="hidden" name="atividade_id" value="168">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">C - What’s the question?</h5>
                <div class="espacamento umterco bordaVerde">
                    <ul class="lista-inline">
                        <li><b>What time</li></b>
                        <li><b>when</li></b>
                        <li><b>how</li></b>
                        <li><b>how long</li></b>
                        <li><b>how many</li></b>
                    </ul>
                </div>
                <div class="clear"></div>
				<form class="espacamento" id="unidade16grammar169"  method="post">
                    <p><b>1. </b><input type="text" placeholder="responda aqui !" name="grammar169-1" class="inputpequeno" required>Who did you visit<input type="text" placeholder="responda aqui !" name="grammar169-2" class="inputpequeno" required>? I visited my cousin.</p>
                    <p><b>2. </b><input type="text" placeholder="responda aqui !" name="grammar169-3" class="inputMedio" required>? I left the office very late yesterday.</p>
                    <p><b>3. </b><input type="text" placeholder="responda aqui !" name="grammar169-4" class="inputMedio" required>? They bought at least 3 new boxes of movies.</p>
                    <p><b>4. </b><input type="text" placeholder="responda aqui !" name="grammar169-5" class="inputMedio" required>? We went to Sana last summer.</p>
                    <p><b>5. </b><input type="text" placeholder="responda aqui !" name="grammar169-6" class="inputMedio" required>? They took 2 hours to arrive here today.</p>
                    <p><b>6. </b><input type="text" placeholder="responda aqui !" name="grammar169-7" class="inputMedio" required>? She felt great when she saw the special effects she did.</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="16">
                    <input type="hidden" name="atividade_id" value="169">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">D - Write about your last vacation. Use as many verbs as you can.</h5>
                    <ul class="lista-inline">
                        <li><b>Drink</li></b> <li><b>Eat</li></b> <li><b>Travel</li></b> <li><b>Meet</li></b> <li><b>Swim</li></b> <li><b>Play</li></b> <li><b>Break</li></b> <li><b>Climb</li></b> <li><b>Call</li></b>
                    </ul>
                    <ul class="lista-inline">
                        <li><b>Date</li></b> <li><b>Visit</li></b> <li><b>Write</li></b> <li><b>Fix</li></b> <li><b>Run</li></b> <li><b>Cut</li></b> <li><b>Drive</li></b> <li><b>Forget</li></b> <li><b>leave</li></b>
                    </ul>
                    <ul class="lista-inline">
                        <li><b>Fight</li></b> <li><b>Buy</li></b> <li><b>Sell</li></b> <li><b>Read</li></b> <li><b>See</li></b> <li><b>Arrive</li></b> <li><b>Leave</li></b> <li><b>Watch</li></b> <li><b>spend</li></b>
                    </ul>
                <form id="unidade16grammar170"  method="post">
                    <p><textarea  class="full" name="grammar170" required></textarea></p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="16">
                    <input type="hidden" name="atividade_id" value="170">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <figure>
                    <img src="{{ asset('assets/img/dominating/unit16/grammar.jpg') }}" alt="estatua liberdade">
				</figure>
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade16grammar168").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade16grammar168 input[type="text"]').each(function(index){
                if(($('#unidade16grammar168 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade16grammar168 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade16grammar168'), respostas);
            }else{
                enviarAtividade($('#unidade16grammar168'), respostas);
            }
        });

        $("#unidade16grammar169").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade16grammar169 input[type="text"]').each(function(index){
                if(($('#unidade16grammar169 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade16grammar169 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade16grammar169'), respostas);
            }else{
                enviarAtividade($('#unidade16grammar169'), respostas);
            }
        });
        $("#unidade16grammar170").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade16grammar170 textarea').attr("name")+'":"'+$('#unidade16grammar170 textarea').val()+'"}';
            if($('#unidade16grammar170 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade16grammar170'), respostas);
            }else{
                enviarAtividade($('#unidade16grammar170'), respostas);
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
                        $('#unidade16grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade16grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                        $('#unidade16grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade16grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade16grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade16grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);

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
