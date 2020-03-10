@extends('layouts.template')
@section('titulo','Unit 14 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade14" data-etapa="grammar">
				<h3 class="barlow">UNIT 14</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top:16px;">A – SIMPLE PAST TO BE.</h5>
                <table class="umterco center-align" style="margin-right:16px;">
                    <tr>
                        <th>Simple Present</th>
                    </tr>
                    <tr>
                        <td><b>I</b> am</td>
                    </tr>
                    <tr>
                        <td>You are</td>
                    </tr>
                    <tr>
                        <td>He is</td>
                    </tr>
                    <tr>
                        <td>She is</td>
                    </tr>
                    <tr>
                        <td><b>I</b>t is</td>
                    </tr>
                    <tr>
                        <td>We are</td>
                    </tr>
                    <tr>
                        <td>you are</td>
                    </tr>
                    <tr>
                        <td>They are</td>
                    </tr>
                </table>
                <table class="umterco center-align">
                    <tr>
                        <th>Simple Past</th>
                    </tr>
                    <tr>
                        <td>I <b>Was</td>
                    </tr>
                    <tr>
                        <td>You <b>Were</td>
                    </tr>
                    <tr>
                        <td>He <b>Was</td>
                    </tr>
                    <tr>
                        <td>She <b>Was</td>
                    </tr>
                    <tr>
                        <td>It <b>Was</td>
                    </tr>
                    <tr>
                        <td>We <b>Were</td>
                    </tr>
                    <tr>
                        <td>you <b>Were</td>
                    </tr>
                    <tr>
                        <td>They <b>Were</td>
                    </tr>
                </table>
                <div class="clear"></div>
                <h5 class="barlow">EXERCISES</h5>
                <h5 class="barlow" style="margin-top:16px;">B -  Complete the sentences with verb to be in the past.</h5>
				<form id="unidade14grammar161" method="post">
                    <p>I was in the office last night.</p>
                    <p><b>1. </b>I<input type="text" placeholder="responda aqui !" name="grammar161-1" class="inputMedio" required> at home.</p>
                    <p><b>2. </b>And you, where <input type="text" placeholder="responda aqui !" name="grammar161-2" class="inputMedio" required>you? She <input type="text" placeholder="responda aqui !" name="grammar161-3" class="inputMedio" required> in NY two days ago.</p>
                    <p>She wasn’t in Japan.</p>
                    <p><b>3. </b><input type="text" placeholder="responda aqui !" name="grammar161-4" class="inputMedio" required> in all theses places?</p>
                    <p>The final video was great.</p>
                    <p><b>4. </b>It <input type="text" placeholder="responda aqui !" name="grammar161-5" class="inputMedio" required> very long.</p>
                    <p><b>5. </b>They <input type="text" placeholder="responda aqui !" name="grammar161-6" class="inputMedio" required> very happy with it. The festival <input type="text" placeholder="responda aqui !" name="grammar161-7" class="inputMedio" required> very good.</p>
                    <p><b>6. </b>The weather <input type="text" placeholder="responda aqui !" name="grammar161-8" class="inputMedio" required> terrible.</p>
                    <p><b>7. </b><input type="text" placeholder="responda aqui !" name="grammar161-9" class="inputMedio" required> were in in the front seats?</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="14">
                    <input type="hidden" name="atividade_id" value="161">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow" style="margin-top:16px;">C - Make questions about the text using WAS or WERE:</h5>
                <h5 class="barlow">Example:</h5>
				<form id="unidade14grammar162"  method="post">
                    <p><b>1. </b>How old / Bill / when he visited universal studios?</p>
                    <p><b>R. </b>How old was Bill when he visited universal studios?</p>
                    <p><b>2. </b> / Laura / nervous? <input type="text" placeholder="responda aqui !" name="grammar162-1" class="inputMedio" required>?</p>
                    <p><b>3. </b> Where / Gleen? <input type="text" placeholder="responda aqui !" name="grammar162-2" class="inputMedio" required>?</p>
                    <p><b>4. </b> Where / Gleen’s books? <input type="text" placeholder="responda aqui !" name="grammar162-3" class="inputMedio" required>?</p>
                    <p><b>5. </b> / It nice the event in London?<input type="text" placeholder="responda aqui !" name="grammar162-4" class="inputMedio" required>?</p>
                    <p><b>6. </b> / there nice booths? <input type="text" placeholder="responda aqui !" name="grammar162-5" class="inputMedio" required>?</p>
                    <p><b>7. </b> / there many movie makers?<input type="text" placeholder="responda aqui !" name="grammar162-6" class="inputMedio" required>?</p>
                    <p><b>8. </b> How old / in your first big event?<input type="text" placeholder="responda aqui !" name="grammar162-7" class="inputMedio" required>?</p>
                    <p><b>9. </b> / the gamers excited in the Championship?<input type="text" placeholder="responda aqui !" name="grammar162-8" class="inputMedio" required>?</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="14">
                    <input type="hidden" name="atividade_id" value="162">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <figure>
					<img src="{{ asset('assets/img/dominating/unit14/grammar.png') }}" alt="Garotos festejando">
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

        $("#unidade14grammar161").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade14grammar161 input[type="text"]').each(function(index){
                if(($('#unidade14grammar161 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade14grammar161 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade14grammar161'), respostas);
            }else{
                enviarAtividade($('#unidade14grammar161'), respostas);
            }
        });

        $("#unidade14grammar162").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade14grammar162 input[type="text"]').each(function(index){
                if(($('#unidade14grammar162 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade14grammar162 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade14grammar162'), respostas);
            }else{
                enviarAtividade($('#unidade14grammar162'), respostas);
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
                        $('#unidade14grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade14grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade14grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade14grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
