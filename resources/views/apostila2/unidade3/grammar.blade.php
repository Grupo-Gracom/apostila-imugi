@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade3" data-etapa="grammar">
				<h3 class="barlow">UNIT 3</h3>
				<h5 class="barlow">3 – GRAMMAR</h5>

				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>     
                
                <h5 class="barlow" style="margin-top: 16px">A - SIMPLE PRESENT</h5>
                <p>Simple present refers to <b>facts</b> or <b>repeated actions </b>in the present.</p>                
                
                <table class="metade center-align">
                    <tr>
                        <td colspan="2" class="barlow"><p>HE – SHE – IT (3rd person)(+)</p></td>
                    </tr>
                    <tr>
                        <td><p>Works</p></td>
                        <td><p>Reads</p></td>
                    </tr>
                    <tr>
                        <td><p>Goes</p></td>
                        <td><p>Fixes</p></td>
                    </tr> 
                    <tr>
                        <td><p>Plays</p></td>
                        <td><p>Studies</p></td>
                    </tr> 
                    <tr>
                        <td><p>Washes</p></td>
                        <td><p>Watches</p></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="barlow"><p>Has</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p>For (-) and (?) use DOES.</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p>(+) She studies Vusual Art.</p></td>
                    </tr>                    
                    <tr>
                        <td colspan="2"><p>(?) Does she study Visual Art?</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p>(-) She does not study Visual Art.</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p>*does + not = doesn’t</p></td>
                    </tr>         
                </table>                

                <h5 class="barlow" style="margin-top: 16px">A - SUBJECT PRONOUNS X POSSESSIVE ADJECTIVE.</h5>

                <div class="center-align metade">
                    <table class="tabelaVerdeEscuro tabelagrammar">
                        <tr>
                            <th><b>Subject Pronoun</b></th>
                        </tr>
                        <tr>
                            <td >I</td>
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
                    
                    <table class="tabelaVerdeEscuro tabelagrammar">
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
                <br>
                <p><b>Examples:</b></p>
                <p><b>Laura </b>works as a video Maker<b> Her </b>favorite software is Sony Vegas.</p>
                <p><b>Akira and John </b>love super hero movies.<b> Their </b>favorite heroes are Batman and Super Man.</p>
                <h5 class="barlow" style="margin-top: 16px">B - DEMONSTRATIVE PRONOUNS</h5>

                <div class="center-align metade">
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
                <br>
                <div class="clear"></div>

                <p><b>Examples:</b></p>

                <div class="umterco esquerda">
                    <p><b>This is</b> Mr. Antony, the Coordinator.</b></p>
                    <p><b>These</b> new tools are fantastic.</b></p>
                </div>
                
                <div class="umterco direita">
                   <p><b>That</b> lady is the marketing manager.</p>
                    <p><b>Those</b> Graffiti on the wall are great</p>
                </div>
                
                <div class="clear"></div>
                <p><b>EXERCISES:</b></p>
                <h5 class="barlow">A - Build up questions for the answers.</h5>
                <form id="unidade2grammar106" method="post">
                    <p>E.g She’s Laura./ Who is she?</p>
                    <div class="umterco esquerda">
                        <p>1. He’s Akira <br> 
                            <input type="text" name="grammar106-1" class="full" required>
                        </p>
                        <p>2. They are in New York <br> 
                            <input type="text" name="grammar106-2" class="full" required>
                        </p>
                        <p>3. That is a new app <br> 
                            <input type="text" name="grammar106-3" class="full" required>
                        </p>
                        <p>4. Gleen is the teacher <br> 
                            <input type="text" name="grammar106-4" class="full" required>
                        </p>
                        <p>5. It’s in Brooklin <br> 
                            <input type="text" name="grammar106-5" class="full" required>
                        </p>
                    </div>
                    
                    <div class="umterco direita">
                        <p>6. I am the new manager <br> 
                            <input type="text" name="grammar106-6" class="full" required>
                        </p>
                        <p>7. This is Carlos, an old student <br> 
                            <input type="text" name="grammar106-7" class="full" required>
                        </p>
                        <p>8. It’s in the drawer <br> 
                            <input type="text" name="grammar106-8" class="full" required>
                        </p>
                        <p>9. My favorite hero is Batman <br> 
                            <input type="text" name="grammar106-9" class="full" required>
                        </p>
                        <p>10. This a new editing software <br> 
                            <input type="text" name="grammar106-10" class="full" required>
                        </p>
                    </div>
                    
                    <div class="clear"></div>                                      

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="2">
                    <input type="hidden" name="atividade_id" value="106">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>


                <h5 class="barlow">B - Rewrite these sentences using HE, SHE, IT, THEY, WE, HIS, HER, THEIR, OUR, ITS:</h5>
				<form id="unidade2grammar107" method="post">

                <div class="umterco esquerda">
                        <p>1. Akira’s father is Japanese. <br> 
                            <input type="text" name="grammar107-1" class="full" required>
                        </p>
                        <p>2. Editing softwares are very expensive. <br> 
                            <input type="text" name="grammar107-2" class="full" required>
                        </p>
                        <p>3. John’s experience is very good. <br> 
                            <input type="text" name="grammar107-3" class="full" required>
                        </p>
                        <p>4. Is your brother a businessman? <br> 
                            <input type="text" name="grammar107-4" class="full" required>
                        </p>
                        <p>5. My friend and I love comic books. <br> 
                            <input type="text" name="grammar107-5" class="full" required>
                        </p>
                    </div>
                    
                    <div class="umterco direita">
                        <p>6. These are Laura’s and my books. <br> 
                            <input type="text" name="grammar107-6" class="full" required>
                        </p>
                        <p>7. Where is Gleen’s marker? <br> 
                            <input type="text" name="grammar107-7" class="full" required>
                        </p>
                        <p>8. My father’s favorite computer is Mac. <br> 
                            <input type="text" name="grammar107-8" class="full" required>
                        </p>
                        <p>9. The students’ books are in the classroom. <br> 
                            <input type="text" name="grammar107-9" class="full" required>
                        </p>
                        <p>10. This is Mrs. Brown’s coat, but these are the children’s coats. <br> 
                            <input type="text" name="grammar107-10" class="full" required>
                        </p>
                    </div>
                    
                    <div class="clear"></div> 

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="2">
                    <input type="hidden" name="atividade_id" value="107">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow">C - Complete the passage. Use these words.</h5>
				<form id="unidade2grammar108" method="post">

                    <div class="center-align metade">
                        <table class="tabelaVerdeEscuro">
                            <th>my - your - his - her - its - our - their - his</th>
                        </table>
                    </div>
                    <br>
                    <p>Hello<input type="text" name="grammar108-1" required>name is Patrick. I’m fourteen. I have a brother. His name is Andy and he’s ninenteen.
                        We are on holiday in California. The hotel is very good and <input type="text" name="grammar108-2" required>swimming-pool is large.</p>
                    <b><p>Andy and I have a sister<input type="text" name="grammar108-3" required>sname is Liz. She’s sixteen years old<input type="text" name="grammar108-4" required>
                        smother and father are in the restaurant now. Their friends, Mr. and Mrs. Bolton, are in the restaurant, too<input type="text" name="grammar108-5" required>stwo sons are in the pool.</b></p>
                    <p>Andy has a girl-friend<input type="text" name="grammar108-6" required>sgirl-friend’s name is Sandra. She’s in<input type="text" name="grammar108-7" required>sclass at school.</p>
                    <p>Where is your family? Is<input type="text" name="grammar108-8" required>sfamily here, too?</p>
               
                    <div class="clear"></div> 

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="2">
                    <input type="hidden" name="atividade_id" value="108">
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

        $("#unidade2grammar106").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade2grammar106 input[type="text"]').each(function(index){
                if(($('#unidade2grammar106 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade2grammar106 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade2grammar106'), respostas);
            }else{
                enviarAtividade($('#unidade2grammar106'), respostas);
            }
        });

        $("#unidade2grammar107").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade2grammar107 input[type="text"]').each(function(index){
                if(($('#unidade2grammar107 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade2grammar107 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade2grammar107'), respostas);
            }else{
                enviarAtividade($('#unidade2grammar107'), respostas);
            }
        });

        $("#unidade2grammar108").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade2grammar108 input[type="text"]').each(function(index){
                if(($('#unidade2grammar108 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade2grammar108 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade2grammar108'), respostas);
            }else{
                enviarAtividade($('#unidade2grammar108'), respostas);
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
                        $('#unidade2grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade2grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade2grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade2grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
