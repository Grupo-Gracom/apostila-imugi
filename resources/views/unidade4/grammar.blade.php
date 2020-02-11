@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade4" data-etapa="grammar">
				<h3 class="barlow">UNIT 04 - NICE TO MEET YOU, KATE!</h3>
				<h5 class="barlow">3 - Grammar (demonstrati ve pronouns)</h5>
                <table class="tabelagrammar">
                    <tr>
                        <td></td>
                        <td class="upper"><b>Close</b></td>
                        <td class="upper"><b>far</b></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="upper"><b>singular</b></td>
                        <td>This</td>
                        <td>That</td>
                        <td>(is)</td>
                    </tr>
                    <tr>
                        <td class="upper"><b>plural</b></td>
                        <td>These</td>
                        <td>Those</td>
                        <td>(are)</td>
                    </tr>
                </table>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit4/Grammar/gramar.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Complete the exercise with the correct demonstrative pronouns in the questions and personal pronouns in the answers.</h5>
				<form>
                    <div class="umterco">
                        <figure>
                            <img src="{{ asset('assets/img/playgo/unit4/01.png') }}" alt="Garotos festejando">
                        </figure>
                        <p>What <input type="text"/> ?</p>
                        <p><input type="text" /> book.</p>
                    </div>
                    <div class="umterco">
                        <figure>
                            <img src="{{ asset('assets/img/playgo/unit4/02.png') }}" alt="Garotos festejando">
                        </figure>
                        <p>What <input type="text"/> ?</p>
                        <p><input type="text" /> book.</p>
                    </div>
                    <div class="umterco">
                        <figure>
                            <img src="{{ asset('assets/img/playgo/unit4/03.png') }}" alt="Garotos festejando">
                        </figure>
                        <p>What <input type="text"/> ?</p>
                        <p><input type="text" /> book.</p>
                    </div>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="1">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                
				<h5 class="barlow">B. Fill in the blanks with the appropriate form of the verb be using informati on from the text.</h5>
				<form id="unidade1grammar1" method="post">
                    <p>1. This <input type="text"/> Kate. She <input type="text"/> from here. She <input type="text"/> from Japan.</p>
                    <p>2. Carlos and Kate <input type="text"/>  Photoshop students. They <input type="text"/> from Australia. Carlos <input type="text"/> Brasilia and she <input type="text"/> Japanese.</p>
                    <p>3. <input type="text"/> you Brazilian?</p>
           
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="1">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow" style="margin-top: 30px">4 - PRONUNCIATION</h5>
                <h5 class="barlow">A. Observe that the letter 'E' is not pronounced at the end of words.</h5>
                <ul class="lista-inline">
					<li><b>NEWS</b></li>
					<li><b>HAVE</b></li>
					<li><b>SPEAK</b></li>
					<li><b>UNDERSTAND</b></li>
					<li><b>MEET</b></li>
					<li><b>MAKE</b></li>
					<li><b>WANT</b></li>
                </ul>
                <h5 class="barlow">B. Read the sentence below to practi ce the pronunciati on of words ending in ‘E’.</h5>
                <ul class="lista-inline">
                <p>“These are my friends Kate and Kyle.”</p>
                </ul>
               
               
                <!-- <h5 class="barlow">B - Use the correct punctuati on at the end of the sentences. Use “?” or “.”.</h5>
				<form id="unidade1grammar2" method="post">
                    <p>1. Is Professor Ludemann from Germany <input type="text" name="grammar2-1" required></p>
                    <p>2. Bruna is a web designer <input type="text" name="grammar2-2" required></p>
                    <p>3. Is João a professional photographer <input type="text" name="grammar2-3" required></p>
                    <p>4. Is Bruno’s hobby photography <input type="text" name="grammar2-4" required></p>
                    <p>5. Photoshop is a soft ware with innumerous tools <input type="text" name="grammar2-5" required></p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="2">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">C - Connect the questions to the correct answers.</h5>
                <form id="unidade1grammar3" method="post">
                    <div class="metade esquerda">
                        <p>1. What is the professional photographer’s name?</p>
                        <p>2. What does Bruno do?</p>
                        <p>3. When did the professor move to Brazil?</p>
                        <p>4. Where is the professor from?</p>
                        <p>5. Why does João need Photoshop?</p>
                    </div>
                    <div class="metade direita">
                        <p><input type="text" name="grammar3-1" required> His name is João.</p>
                        <p><input type="text" name="grammar3-2" required> To edit his photos.</p>
                        <p><input type="text" name="grammar3-3" required> He is a photographer</p>
                        <p><input type="text" name="grammar3-4" required> He is from Canada.</p>
                        <p><input type="text" name="grammar3-5" required> 5 years ago.</p>
                    </div>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="3">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form> -->
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade1grammar1").submit(function(e){
            e.preventDefault();
            var respostas = '{';
            $('#unidade1grammar1 input[type="text"]').each(function(index){
                if(($('#unidade1grammar1 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade1grammar1 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1grammar1'), respostas);
            }else{
                enviarAtividade($('#unidade1grammar1'), respostas);
            }
        });

        $("#unidade1grammar2").submit(function(e){
            e.preventDefault();
            var respostas = '{';
            $('#unidade1grammar2 input[type="text"]').each(function(index){
                if(($('#unidade1grammar2 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade1grammar2 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1grammar2'), respostas);
            }else{
                enviarAtividade($('#unidade1grammar2'), respostas);
            }
        });

        $("#unidade1grammar3").submit(function(e){
            e.preventDefault();
            var respostas = '{';
            $('#unidade1grammar3 input[type="text"]').each(function(index){
                if(($('#unidade1grammar3 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade1grammar3 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1grammar3'), respostas);
            }else{
                enviarAtividade($('#unidade1grammar3'), respostas);
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
                        $('#unidade1grammar'+atividade_id+' input[name="grammar'+atividade_id+'-'+next+'"]').val(respostas[i]);
                        $('#unidade1grammar'+atividade_id+' input[name="grammar'+atividade_id+'-'+next+'"]').attr("value", respostas[i]);
                    }
                    $('#unidade1grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade1grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
