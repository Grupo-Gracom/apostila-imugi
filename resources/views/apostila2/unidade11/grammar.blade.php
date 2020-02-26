@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade11" data-etapa="grammar">
				<h3 class="barlow">UNIT 11</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top:16px;">A - SIMPLE FUTURE – WILL.</h5>
                <p><b>Will</b> is used to express decisions or unquestionable facts in the future.</p>                
                <h5 class="barlow"> Future decision / unquestionable fact = Subject + will + verb(infinitive)</h5>
                <table class="tabelaVerdeEscuro tabelaGramar11">
                    <tr class="tabelaVerde">
                        <th class="center-align">Subject</th>
                        <th class="center-align">Verb(inf)</th>
							<th >Future decision / fact</th>							
						</tr>
						<tr class="tabelaVerde">
                            <td class="center-align">Akira</td>
							<td class="center-align">take</td>
							<td>Akira <b>will take</b> a course before getting back to work. (decision)</td>							
						</tr>
						<tr class="tabelaVerde">
                            <td class="center-align">Laura</td>
							<td class="center-align">do</td>
							<td>Laura <b>will do</b><b> a video for an NGO. (decision)</td>							
						</tr>
						<tr class="tabelaVerde">
                            <td class="center-align">John</td>
							<td class="center-align">learn</td>
							<td>John <b>will learn</b><b> more about movies. (fact)</td>						
						</tr>						
                </table>                    
                <table class="tabelaVerdeEscuro umterco marginCustomizada" style="margin-right: 5px;">
                    <tr class="tabelaVerde">
                        <th>To be (future with will)</th>														
                    </tr>
                    <tr class="tabelaVerde">
                        <td>(+) Comic Com <b>will be</b> fantastic.</td>														
                    </tr>										
                    <tr class="tabelaVerde">
                        <td>(-) Comic Com <b>will not be</b> fantastic.</td>														
                    </tr>										
                    <tr class="tabelaVerde">
                        <td>(?) <b>will</b> Comic Com be fantastic?</td>														
                    </tr>										
                </table>
                <table class="tabelaVerdeEscuro marginCustomizada" style="width:40%;">
                    <tr class="tabelaVerde">
                        <th>Other verbs (future with will)</th>														
                    </tr>
                    <tr class="tabelaVerde">
                        <td>(+) She <b>will present</b> the final version next month.</td>														
                    </tr>                									
                    <tr class="tabelaVerde">
                        <td>(+) She <b>Won't present</b> the final version next month.</td>														
                    </tr>                									
                    <tr class="tabelaVerde">
                        <td>(+) <b>will </b>She <b>present</b> the final version next month?</td>														
                    </tr>                									
                </table>                    
                <table class="tabelaVerdeEscuro umterco marginCustomizada" style="margin-right: 5px;">                    
                    <tr class="tabelaVerde">
                        <td>(+) I think I’<b>ll be</b> a youtuber dad.</td>														
                    </tr>										
                    <tr class="tabelaVerde">
                        <td>(-) I think I <b>won’t</b> be a youtuber dad.</td>														
                    </tr>										
                    <tr class="tabelaVerde">
                        <td>(?) <b>Will</b> you <b>be</b> a youtuber honey?</td>														
                    </tr>										
                </table>
                <table class="tabelaVerdeEscuro marginCustomizada" style="width:40%;">                    
                    <tr class="tabelaVerde">
                        <td>(+) We <b>Will talk</b> during the meeting.</td>														
                    </tr>										
                    <tr class="tabelaVerde">
                        <td>(-) We <b>Won't talk</b> during the meeting.</td>														
                    </tr>										
                    <tr class="tabelaVerde">
                        <td>(?) <b>Will</b> you <b>talk</b> during the meeting.</td>														
                    </tr>                									
                </table>                    
                <table class="tabelaVerdeEscuro umterco marginCustomizada" style="margin-right: 5px;">                    
                    <tr class="tabelaVerde">
                        <td>(+) They <b>will be</b> the winners, for sure.</td>														
                    </tr>										
                    <tr class="tabelaVerde">
                        <td>(-) They <b>won’t be</b> the winners, for sure.</td>														
                    </tr>										
                    <tr class="tabelaVerde">
                        <td>(?) <b>Will</b> they <b>be</b> the winners?</td>														
                    </tr>										
                </table>
                <table class="tabelaVerdeEscuro" style="width:40%;">                    
                    <tr class="tabelaVerde">
                        <td>(+) The market <b>will grow</b> a lot this year.</td>														
                    </tr>										
                    <tr class="tabelaVerde">
                        <td>(-) The market <b>will not grow</b> a lot this year.</td>														
                    </tr>										
                    <tr class="tabelaVerde">
                        <td>(?) <b>will</b> The market <b>grow</b> a lot this year?</td>														
                    </tr>                									
                </table>
                <div class="clear"></div>
                <h5 class="barlow">B - PREPOSITION + VER(ING)</h5>
                <h5 class="barlow">After prepositions (<b>in,</b> <b> on,</b> <b>at,</b> <b>before,</b> <b>after</b> <b>etc</b>), verbs end in ing.</h5>
                <table class="tabelaVerdeEscuro tabelaGramar11">
                    <tr class="tabelaVerde">
                        <th class="center-align"></th>
                        <th class="center-align">preposition</th>
                        <th class="center-align">Verb(ing)</th>
                        <th class="center-align"></th>                        							
                    </tr>
                    <tr class="tabelaVerde">
                        <td class="center-align">I’m interested</td>
                        <td class="center-align"><b>in</b></td>
                        <td class="center-align">learn<b>ing</b></td>
                        <td>more about this app</td>							
                    </tr>
                    <tr class="tabelaVerde">
                        <td class="center-align">She can help me</td>
                        <td class="center-align"><b>after</b></td>
                        <td class="center-align">finesh<b>ing</b></td>
                        <td>her project</td>							
                    </tr>                    						
                    <tr class="tabelaVerde">
                        <td class="center-align">-------</td>
                        <td class="center-align"><b>Before</b></td>
                        <td class="center-align">leav<b>ing</b></td>
                        <td>turn off your machines.</td>							
                    </tr>
                    <tr class="tabelaVerde">
                        <td class="center-align">I’m thinking</td>
                        <td class="center-align"><b>about</b></td>
                        <td class="center-align">study<b>ing</b></td>
                        <td>in Europe.</td>							
                    </tr>                    						
                    <tr class="tabelaVerde">
                        <td class="center-align">He’s very good</td>
                        <td class="center-align"><b>at</b></td>
                        <td class="center-align">mode<b>ling</b></td>
                        <td>3D characters</td>							
                    </tr>                    						
                </table>
                <h5 class="barlow">C - EXERCICIOS</h5>
                <h5 class="barlow">Write sentences about the future following the instruction. Use will.</h5>
				<form id="unidade11grammar148" method="post" class="metade">
                    <p><b>1. </b> You / earn / lot of money.(+) <input type="text" name="grammar148-1" class="full" required></p>
                    <p><b>2. </b> Why / She / accept / the NGO project. (?) <input type="text" name="grammar148-2" class="full" required> </p>
                    <p><b>3. </b> Akira / take a course / on SQL. (-) <input type="text" name="grammar148-3" class="full" required> </p>
                    <p><b>4. </b> When / John / travel / to NY. (?) <input type="text" name="grammar148-4" class="full" required> </p>
                    <p><b>5. </b> Gleen / study / London. (?) <input type="text" name="grammar148-5" class="full" required></p>                    
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="11">
                    <input type="hidden" name="atividade_id" value="148">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">Complete the sentences with your own words.</h5>
				<form id="unidade11grammar149"  method="post">
                    <p><b>1.</b> Are you interested <b>in</b> (Learn) <input type="text" name="grammar149-1" class="full" required></p>
                    <p><b>2.</b> Mr. Smith is good <b>at</b> (explain) <input type="text" name="grammar149-2" class="full" required></p>
                    <p><b>3.</b> Laura has the intension <b>of</b> (take) <input type="text" name="grammar149-3" class="full" required></p>
                    <p><b>4.</b> <b>Before</b> (start) <input style="width: 38%;" type="text" name="grammar149-4" required>the course,<input style="width: 38%;" type="text" name="grammar149-5" required></p>
                    <p><b>5.</b> He’s thinking <b>about</b> (visit) <input type="text" name="grammar149-6" class="full" required></p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="11">
                    <input type="hidden" name="atividade_id" value="149">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow"> </h5>
                <form id="unidade11grammar150" method="post">                    
                    <p>In the text, Akira and Laura share what they think they’ll do in the future. Think about your life and list 3 things you think you will do and 3 things you think you won’t do.
                    Re ready to justify your answers. <input type="text" name="grammar150-1" class="full" required></p>             
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="11">
                    <input type="hidden" name="atividade_id" value="150">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <figure>
					<img src="{{ asset('assets/img/dominating/unit11/grammar.png') }}" alt="Garotos festejando">
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

        $("#unidade11grammar148").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade11grammar148 input[type="text"]').each(function(index){
                if(($('#unidade11grammar148 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade11grammar148 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade11grammar148'), respostas);
            }else{
                enviarAtividade($('#unidade11grammar148'), respostas);
            }
        });

        $("#unidade11grammar149").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade11grammar149 input[type="text"]').each(function(index){
                if(($('#unidade11grammar149 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade11grammar149 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade11grammar149'), respostas);
            }else{
                enviarAtividade($('#unidade11grammar149'), respostas);
            }
        });

        $("#unidade11grammar150").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade11grammar150 input[type="text"]').each(function(index){
                if(($('#unidade11grammar150 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade11grammar150 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade11grammar150'), respostas);
            }else{
                enviarAtividade($('#unidade11grammar150'), respostas);
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
