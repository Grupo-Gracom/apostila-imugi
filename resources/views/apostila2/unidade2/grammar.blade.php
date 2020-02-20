@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade2" data-etapa="grammar">
				<h3 class="barlow">UNIT 2</h3>
				<h5 class="barlow">3 – GRAMMAR</h5>

				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>     
                
                <h5 class="barlow" style="margin-top: 16px">A - WH QUESTIONS – WHAT – WHERE – WHO.</h5>
                <p><b>What</b> – Used for <b>general questions.</b></p>
                <p>Examples:</p>
                <p><b>What</b> is your <b>full name? </b> / My full name is <b>Gleen Frey</b></p>
                <p><b>What’s</b> your favorite <b>software?</b> / My favorite Software is<b> Photoshop.</b></p>
                <p><b>Where</b> – Used for <b>questions about places.</b></p>
                <p>Examples:</p>
                <p><b>Where</b> is your book? / It is<b> in my backpack</b></p>
                <p><b>Where</b> are your parents? / They are <b>in Europe.</b></p>
                <p><b>Who</b> – Used for <b>questions about people.</b></p>
                <p>Examples:</p>
                <p><b>Who</b> is your favorite illustrator? / My favorite illustrator is<b> Paul.</b></p>
                <p><b>Who</b>are you? / I am<b> Akira</b> The<b> new game Developer.</b></p>

                <h5 class="barlow" style="margin-top: 16px">A - SUBJECT PRONOUNS X POSSESSIVE ADJECTIVE.</h5>


                <div class="metade">
                    <table class="tabelaVerdeEscuro">
                        <tr>
                            <th><b>Subject Pronoun</b></th>
                        </tr>
                        <tr>
                            <td>I</td>
                        </tr>
                        <tr>
                            <td>You</td>
                        </tr>
                        <tr>
                            <td>He</td>
                        </tr>
                        <tr>
                            <td>She</td>
                        </tr>
                        <tr>
                            <td>It</td>
                        </tr>
                        <tr>
                            <td>We</td>
                        </tr>
                        <tr>
                            <td>You</td>
                        </tr>
                        <tr>
                            <td>They</td>
                        </tr>
                    </table>
                    
                    <table class="tabelaVerdeEscuro">
                        <tr>
                            <th><b>Possessive Adjective</b></th>
                        </tr>
                        <tr>
                            <td>My</td>
                        </tr>
                        <tr>
                            <td>Your</td>
                        </tr>
                        <tr>
                            <td>His</td>
                        </tr>
                        <tr>
                            <td>Her</td>
                        </tr>
                        <tr>
                            <td>Its</td>
                        </tr>
                        <tr>
                            <td>Our</td>
                        </tr>
                        <tr>
                            <td>Your</td>
                        </tr>
                        <tr>
                            <td>Their</td>
                        </tr>
                    </table>
                </div>
                
                             

                <div class="clear"></div>

                <h5 class="barlow" style="margin-top: 16px">B - DEMONSTRATIVE PRONOUNS</h5>

                <div class="umterco">
                <table class="tabelaVerdeEscuro">
                    <tr>
                        <th style="background-color:white"></th>
                        <th><b>Near</b></th>
                        <th><b>Far</b></th>
                    </tr>
                    <tr>
                        <th><b>Singular</b></th>
                        <td>This</td>
                        <td>That</td>
                    </tr>
                    <tr>
                        <th><b>Plural</b></th>
                        <td>These</td>
                        <td>Those</td>
                    </tr>
                </table>
                </div>
                                   
                <div class="clear"></div>

                <p><b>Examples:</b></p>
                
                <p>Aff(+): I <b>am</b> a Special effects specialist. | We <b>are</b> excited to start the class.</p>
                <p>Neg(-): I <b>am</b> not a Special Effects specialist | We <b>are not</b> excited to start the class</p>
                <p>Int(?): <b>Are</b> you a special effects specialist? | <b>Are</b> you excited to start the class?</p>
                <p><b>Contractions: </b>Is + no = <b>isn’t</b> | are + not =<b> aren’t</b></p>
                
                <p><b>EXERCISES:</b></p>
                <h5 class="barlow">A - Choose the best answer:</h5>
                <form id="unidade1grammar100" method="post">
                    <p>1. Maggie and Carol <input type="text" name="grammar100-1" required> designers.</p>
                    <p class="espacamentoWord">a)am - b)are - c)is - d)isn’t</p>
                    <p>2. Sue <input type="text" name="grammar100-2" required> a Youtuber.</p>
                    <p class="espacamentoWord">a)are not  - b)is - c)are - d)am</p>
                    <p>3. Mark Steven <input type="text" name="grammar100-3" required> a student at Gracon. It <input type="text" name="grammar100-4" required>a Visual Art school.</p>
                    <p class="espacamentoWord">a)am/is - b)are/is - c)is/am - d)is/is</p>
                    <p>4. James <input type="text" name="grammar100-5" required> from Spain. I <input type="text" name="grammar100-6" required> from Turkey.</p>
                    <p class="espacamentoWord">a)is/am - b)are/is - c)am/is - d)is/are</p>
                    <p>5. You and I <input type="text" name="grammar100-7" required> at the same age.</p>
                    <p class="espacamentoWord">a)am - b)isn’t - c)are - d)is</p>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="100">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>


                <h5 class="barlow">B - Complete this card by using “AM, IS, ARE, AM NOT , ISN’T,AREN’T”:</h5>
				<form id="unidade1grammar101" method="post">
                    <p>Hello!</p>
                    <p>My name <input type="text" name="grammar101-1" required>is<input type="text" name="grammar101-2" required>Gleen, and this<input type="text" name="grammar101-3" required>is<input type="text" name="grammar101-4" required>Carlos.</p>
                    <p>He <input type="text" name="grammar101-5" required>my friend. Carlos<input type="text" name="grammar101-6" required>twenty four years old and I<input type="text" name="grammar101-7" required>32 years old.</p>
                    <p>I <input type="text" name="grammar101-8" required>A teacher an he<input type="text" name="grammar101-9" required>a designer. We<input type="text" name="grammar101-10" required>Canadians. We<input type="text" name="grammar101-11" required>Americans.</p>
                    <p>We <input type="text" name="grammar101-12" required>from Chicago. Chicago<input type="text" name="grammar101-13" required>in the United States.</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="101">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow">C - Build up good sentences.</h5>
				<form id="unidade1grammar102" method="post">
                    <p>1. Mike / photographer (-) <input type="text" name="grammar102-1" required>Mike isn’t a photographer<input type="text" name="grammar102-2" required></p>
                    <div class="metade">
                        <p>2. Charlie and Chris / policemen(+) <input type="text" name="grammar102-3" class="full left-align" required></p>
                        <p>3. Danny and Rick / singers (-) <input type="text" name="grammar102-4" class="full left-align" required></p>
                        <p>4. Salem and Lucky / friends (+) <input type="text" name="grammar102-5" class="full left-align" required></p>
                        <p>5. Rome / London / cities (+) <input type="text" name="grammar102-6" class="full left-align" required></p>
                    </div>
                                        
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="102">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow">D - Prepare your personal presentation. Tell us your name, age, profession, nationality and any other thing you want to share.</h5>
				<form id="unidade1grammar103" method="post">
                    <div class="metade">
                        <p><input type="text" name="grammar103-1" class="full left-align" required></p>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="103">
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

        $("#unidade1grammar100").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade1grammar100 input[type="text"]').each(function(index){
                if(($('#unidade1grammar100 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade1grammar100 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1grammar100'), respostas);
            }else{
                enviarAtividade($('#unidade1grammar100'), respostas);
            }
        });

        $("#unidade1grammar101").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade1grammar101 input[type="text"]').each(function(index){
                if(($('#unidade1grammar101 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade1grammar101 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1grammar101'), respostas);
            }else{
                enviarAtividade($('#unidade1grammar101'), respostas);
            }
        });

        $("#unidade1grammar102").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade1grammar102 input[type="text"]').each(function(index){
                if(($('#unidade1grammar102 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade1grammar102 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1grammar102'), respostas);
            }else{
                enviarAtividade($('#unidade1grammar102'), respostas);
            }
        });

        $("#unidade1grammar103").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade1grammar103 input[type="text"]').each(function(index){
                if(($('#unidade1grammar103 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade1grammar103 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1grammar103'), respostas);
            }else{
                enviarAtividade($('#unidade1grammar103'), respostas);
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
                        $('#unidade1grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade1grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
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
