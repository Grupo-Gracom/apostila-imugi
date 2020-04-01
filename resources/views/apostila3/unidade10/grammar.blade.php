@extends('layouts.template')
@section('titulo','Unit 10 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade10" data-etapa="grammar">
            <h3 class="barlow">UNIT 10 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span> -->
            <!-- <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>     
            <h5 class="barlow">A –  MAKING GOOD QUESTIONS - REVIEW</h5>
            <p>Making good questions is a key skill for those who want to master any language. In
            English, there are two different types of question. The ones called <b>Yes/No questions</b>
            and the <b>Content questions</b>. Pay attention to the differences between these two types
            of questions.</p>                
            <table class="espacamento center-align bordered" style="margin-top:32px;">
                <tr>
                    <td><h5 class="barlow">Verb Tense</h5></td>                    
                    <td><h5 class="barlow">Examples</h5></td>                              
                </tr>
                <tr class="bordered center-align">
                    <td><p>To Be</p></td>
                    <td><p><b>Are you</b> single? <b>Is he</b> your friend? <b>Is she</b> American?</p></td>                    
                </tr>                          
                <tr class="bordered center-align">
                    <td><p>Simple present</p></td>
                    <td><p><b>Do you play</b> video games? <b>Does he live</b> in Australia?</p></td>                   
                </tr>                          
                <tr class="bordered center-align">
                    <td><p>Simple Past</p></td>
                    <td><p><b>Did you see</b> the last GOT episode? <b>Did she send</b> the report?</p></td>
                </tr>                                         
                <tr class="bordered center-align">
                    <td><p>Simple Future</p></td>
                    <td><p><b>Will you be</b> here tomorrow? <b>Will you arrive</b> in time for the meeting? Will you call the police?</p></td>                    
                </tr>                                         
                <tr class="bordered center-align">
                    <td><p>Going to be</p></td>
                    <td><p><b>Are you gonna buy</b> a new computer? <b>Is she gonna</b> finish the script for the video? <b>Are you gonna be</b>  available by 5pm?</p></td>                    
                </tr>                                         
                <tr class="bordered center-align">
                    <td><p>Present/past perfect</p></td>
                    <td><p><b>Have you finished</b> the project? <b>Had he arrived</b> before the teacher?</p></td>                    
                </tr>                                         
                <tr class="bordered center-align">
                    <td><p>Modal verbs</p></td>
                    <td><p><b>Can</b> you help me? <b>Could</b> you lend me your pen? <b>Would</b> you like some coffee? <b>Should</b> I arrive before 7 am.</p></td>                    
                </tr>                                         
            </table>
            <p><b>CONTENT Questions</b> - Questions aimed at getting as much information as you can
            about one specific topic. Content questions start with WH-words which address
            different areas of information. Below you have a list of common WH-Words and WHexpressions.</p>
            <table class="espacamento center-align bordered" style="margin-top:32px;">
                <tr>
                    <td><h5 class="barlow">Wh-word</h5></td>                    
                    <td><h5 class="barlow">Questions about …</h5></td>                              
                    <td><h5 class="barlow">Examples</h5></td>                              
                </tr>
                <tr class="bordered center-align">
                    <td><p>What</p></td>
                    <td><p>General Information</p></td>                    
                    <td><p><b>What’s</b> you name/address/favorite hobby/nati onality?- <b>What</b>
                    are the best video editing software?</p></td>                    
                </tr>                          
                <tr class="bordered center-align">
                    <td><p>Where</p></td>
                    <td><p>Places</p></td>                   
                    <td><p><b>Where</b> is your office? <b>Where</b> do you live? <b>Where</b> did you
                    study? <b>Where</b> are you gonna buy the computer? </p></td>                   
                </tr>                          
                <tr class="bordered center-align">
                    <td><p>Who</p></td>
                    <td><p>People</p></td>
                    <td><p><b>Who</b> is your favorite designer? <b>Who</b> do you like more?</p></td>
                </tr>                                         
                <tr class="bordered center-align">
                    <td><p>When</p></td>
                    <td><p>Time</p></td>                    
                    <td><p><b>When</b> is your birthday? <b>When</b> will you travel to Europe?</p></td>                    
                </tr>                                         
                <tr class="bordered center-align">
                    <td><p>Why</p></td>
                    <td><p>Reason</p></td>                    
                    <td><p><b>Why</b> do you study so much? <b>Why</b> did he arrive late? <b>Why</b> are
                    you going t to buy this computer? </p></td>                    
                </tr>                                         
                <tr class="bordered center-align">
                    <td><p>Which</p></td>
                    <td><p>Choices/Options</p></td>                    
                    <td><p><b>Which</b> is your favorite Sitcom? The walking dead or Game of
                    Thrones?/ <b>Which</b> one is the best for you? This or that?</p></td>                    
                </tr>                                         
                <tr class="bordered center-align">
                    <td><p>How</p></td>
                    <td><p>Manner/state</p></td>                    
                    <td><p><b>How</b> are you? <b>How</b> do I spell apples? <b>How</b> do I save my work
                    on a hard drive?</p></td>                    
                </tr>                                         
            </table>
            <table class="espacamento center-align bordered" style="margin-top:32px;">
                <tr>
                    <td><h5 class="barlow">WH-expression</h5></td>                    
                    <td><h5 class="barlow">Questions about …</h5></td>                              
                    <td><h5 class="barlow">Examples</h5></td>                              
                </tr>
                <tr class="bordered center-align">
                    <td><p>*How old</p></td>
                    <td><p>Age</p></td>                    
                    <td><p>How old are you?</p></td>                    
                </tr>                          
                <tr class="bordered center-align">
                    <td><p>*How long</p></td>
                    <td><p>Period of time</p></td>                   
                    <td><p><b>How long</b> is the flight? <b>How long</b> did you wait for him. </p></td>                   
                </tr>                          
                <tr class="bordered center-align">
                    <td><p>*How good</p></td>
                    <td><p>Quality of Sth.</p></td>
                    <td><p><b>How good</b> is this software?</p></td>
                </tr>                                         
                <tr class="bordered center-align">
                    <td><p>How much</p></td>
                    <td><p>Price/quantity</p></td>                    
                    <td><p><b>How much</b> is this new pair of shoes? <b>How much</b> money do you have?</p></td>                    
                </tr>                                         
                <tr class="bordered center-align">
                    <td><p>How many</p></td>
                    <td><p>Quantity</p></td>                    
                    <td><p>How many books do you read in a month? How many kids do
                    you have?</p></td>                    
                </tr>                                         
                <tr class="bordered center-align">
                    <td><p>What time</p></td>
                    <td><p>Specific time</p></td>                    
                    <td><p><b>What time</b> does the show start? <b>What time</b> is you fl ight?
                    <b>What time</b> did you arrive</p></td>                    
                </tr>                                         
                <tr class="bordered center-align">
                    <td><p>What for</p></td>
                    <td><p>Purpose</p></td>                    
                    <td><p><b>What</b> is this tool good <b>for?</b></p></td>                    
                </tr>                                         
            </table>
            <p>(*) It’s possible to create different expressions using <b>HOW + ADJECTIVE.</b> The meaning is
            gonna be related to the adjecti ve meaning. <b>Examples: How far, How deep, How crazy, How
            heavy, How beauti ful , etc.</b></p>
            <h5 class="barlow">A)</h5>
            <form id="unidade9grammar552" method="post">
                <ul class="lista-inline">					
                    <li><p><b>1 - How oft en do you</b></p></li>
                    <li><p><b>2 - How oft en do you</b></p></li>
                    <li><p><b>3 - How oft en you do</b></p></li>
                </ul>

                <p>”<input type="text" name="grammar552-1" class="inputpequeno left-align" placeholder="Responda aqui" required> exercise?”</p>
                <p>“About three times a week.”</p>                       
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="10">
                <input type="hidden" name="atividade_id" value="552">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">B)</h5>
            <form id="unidade9grammar553" method="post">
                <ul class="lista-inline">					
                    <li><p><b>1 - Why did you</b></p></li>
                    <li><p><b>2 - Why you did</b></p></li>
                    <li><p><b>3 - Why you.</b></p></li>
                </ul>
                <p>”<input type="text" name="grammar553-1" class="inputpequeno left-align" placeholder="Responda aqui" required>  quit your job?”</p>
                <p>“I wanted to look for some better career opportunities elsewhere.”</p>                       
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="10">
                <input type="hidden" name="atividade_id" value="553">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">C)</h5>
            <form id="unidade9grammar554" method="post">
                <ul class="lista-inline">					
                    <li><p><b>1 - What are Shirley and Dana</b></p></li>
                    <li><p><b>2 - What Shirley and Dana is</b></p></li>
                    <li><p><b>3 - What do Shirley and Dana</b></p></li>
                </ul>                
                <p>”<input type="text" name="grammar554-1" class="inputpequeno left-align" placeholder="Responda aqui" required> working on?”</p>
                <p>“It looks like they’re preparing a presentation.”</p>                       
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="10">
                <input type="hidden" name="atividade_id" value="554">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">D)</h5>
            <form id="unidade9grammar555" method="post">
                <ul class="lista-inline">					
                    <li><p><b>1 - What were your mother</b></p></li>
                    <li><p><b>2 - What your mother was</b></p></li>
                    <li><p><b>3 - What was your mother</b></p></li>
                </ul>
                <p>”<input type="text" name="grammar555-1" class="inputpequeno left-align" placeholder="Responda aqui" required>  making? It smelled delicious?”</p>
                <p>“Her famous chicken soup! You’re welcome to join us for dinner later tonight.”</p>                       
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="10">
                <input type="hidden" name="atividade_id" value="555">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">E)</h5>
            <form id="unidade9grammar556" method="post">
                <ul class="lista-inline">					
                    <li><p><b>1 - How much countries you</b></p></li>
                    <li><p><b>2 - How many countries Have you</b></p></li>
                    <li><p><b>3 - What countries you have</b></p></li>
                </ul>
                <p>”<input type="text" name="grammar556-1" class="inputpequeno left-align" placeholder="Responda aqui" required>  been to?”</p>
                <p>“Four - Mexico, Argenti na, Uruguay, and Chile.”</p>                       
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="10">
                <input type="hidden" name="atividade_id" value="556">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">F)</h5>
            <form id="unidade9grammar557" method="post">
                <ul class="lista-inline">					
                    <li><p><b>1 - Where are you</b></p></li>
                    <li><p><b>2 - When you will</b></p></li>
                    <li><p><b>3 - When will you</b></p></li>
                </ul>
                <p>”<input type="text" name="grammar557-1" class="inputpequeno left-align" placeholder="Responda aqui" required> send me the file”</p>
                <p>“By tomorrow afternoon at the latest.”</p>                       
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="10">
                <input type="hidden" name="atividade_id" value="557">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">G)</h5>
            <form id="unidade9grammar558" method="post">
                <ul class="lista-inline">					
                    <li><p><b>1 - Where are we</b></p></li>
                    <li><p><b>2 - Where we</b></p></li>
                    <li><p><b>3 - Where will we</b></p></li>
                </ul>
                <p>”<input type="text" name="grammar558-1" class="inputpequeno left-align" placeholder="Responda aqui" required>  going to put all these books? There’s no space in the office.”</p>
                <p>“Let’s see if we can store them in the basement for now.”</p>                       
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="10">
                <input type="hidden" name="atividade_id" value="558">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">H)</h5>
            <form id="unidade9grammar559" method="post">
                <ul class="lista-inline">					
                    <li><p><b>1 - Why someone</b></p></li>
                    <li><p><b>2 - Why would anyone</b></p></li>
                    <li><p><b>3 - Why anyone does</b></p></li>
                </ul>
                <p>”<input type="text" name="grammar559-1" class="inputpequeno left-align" placeholder="Responda aqui" required> want to pay $1000 for a watch?”</p>
                <p>“Maybe because it’s a status symbol.”</p>                       
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="10">
                <input type="hidden" name="atividade_id" value="559">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow"> In pairs or trios, pretend you are going to interview a famous Youtuber. Prepare a
            questionnaire with 5 yes/no questi ons and 5 Content questions. Be ready to answer some
            questions as well.</h5>
            <form id="unidade1grammar560" method="post">
                    <textarea name="grammar560-1" class="metade left-align" placeholder="Responda aqui" required></textarea>                    
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="10">
                    <input type="hidden" name="atividade_id" value="560">
                    <div class="clear"></div>
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>            
        </div>
    </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });
    
    $("#unidade10grammar552").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade10grammar552 input[type="text"]').each(function(index){
                if(($('#unidade10grammar552 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade10grammar552 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade10grammar552'), respostas);
            }else{
                enviarAtividade($('#unidade10grammar552'), respostas);
            }
        });
    $("#unidade10grammar553").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade10grammar553 input[type="text"]').each(function(index){
                if(($('#unidade10grammar553 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade10grammar553 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade10grammar553'), respostas);
            }else{
                enviarAtividade($('#unidade10grammar553'), respostas);
            }
        });
    $("#unidade10grammar554").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade10grammar554 input[type="text"]').each(function(index){
                if(($('#unidade10grammar554 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade10grammar554 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade10grammar554'), respostas);
            }else{
                enviarAtividade($('#unidade10grammar554'), respostas);
            }
        });
    $("#unidade10grammar555").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade10grammar555 input[type="text"]').each(function(index){
                if(($('#unidade10grammar555 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade10grammar555 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade10grammar555'), respostas);
            }else{
                enviarAtividade($('#unidade10grammar555'), respostas);
            }
        });
    $("#unidade10grammar556").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade10grammar556 input[type="text"]').each(function(index){
                if(($('#unidade10grammar556 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade10grammar556 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade10grammar556'), respostas);
            }else{
                enviarAtividade($('#unidade10grammar556'), respostas);
            }
        });
    $("#unidade10grammar557").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade10grammar557 input[type="text"]').each(function(index){
                if(($('#unidade10grammar557 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade10grammar557 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade10grammar557'), respostas);
            }else{
                enviarAtividade($('#unidade10grammar557'), respostas);
            }
        });
    $("#unidade10grammar558").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade10grammar558 input[type="text"]').each(function(index){
                if(($('#unidade10grammar558 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade10grammar558 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade10grammar558'), respostas);
            }else{
                enviarAtividade($('#unidade10grammar558'), respostas);
            }
        });
    $("#unidade10grammar559").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade10grammar559 input[type="text"]').each(function(index){
                if(($('#unidade10grammar559 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade10grammar559 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade10grammar559'), respostas);
            }else{
                enviarAtividade($('#unidade10grammar559'), respostas);
            }
        });

        $("#unidade1grammar560").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade1grammar560 textarea').attr("name")+'":"'+$('#unidade1grammar560 textarea').val()+'"}';
            if($('#unidade1grammar560 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1grammar560'), respostas);
            }else{
                enviarAtividade($('#unidade1grammar560'), respostas);
            }
        });


    function checkAtividade(atividade_id) {
        request = $.ajax({
            url: window.location.pathname + '/respostasCheck/' + atividade_id,
            type: 'get',
            error: function() {
                console.log("Erro de retorno de dados.");
            }
        });
        request.done(function(response) {
            if (response == 0) {
                console.log("não veio nada");
            } else {
                var objeto = JSON.parse(response[0].resposta_respostas);
                var chaves = Object.keys(objeto);
                var respostas = Object.values(objeto);
                for (j = 0; j < respostas.length; j++) {
                    $('#unidade10grammar' + atividade_id + ' input[name="' + chaves[j] + '"][value="' + respostas[j] + '"]').attr("checked", true);
                    $('#unidade10grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade10grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade10grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade10grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);

                }
                $('#unidade10grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade10grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
            }
        });
    }

    function enviarAtividade(formId, respostas) {
        var atividade = {
            "_token": formId.find('input[name="_token"]').val(),
            "resposta_respostas": respostas,
            "atividade_id": formId.find('input[name="atividade_id"]').val(),
            "unidade_id": formId.find('input[name="unidade_id"]').val()
        };
        request = $.ajax({
            url: window.location.pathname + '/respostas',
            data: atividade,
            type: 'post',
            error: function() {
                console.log("Erro de envio.");
            }
        });
        request.done(function(response) {
            if (response == "1") {
                alert("Respostas salvas");
                window.location.reload();
            } else if (response == 2) {
                alert("Respostas atualizadas");
                window.location.reload();
            }
        });
    }

    function atualizarAtividade(formId, respostas) {
        var resposta = {
            "_token": formId.find('input[name="_token"]').val(),
            "resposta_id": formId.find('input[name="resposta_id"]').val(),
            "resposta_respostas": respostas
        };
        request = $.ajax({
            url: window.location.pathname + '/respostas',
            data: resposta,
            type: 'post',
            error: function() {
                console.log("Erro de envio.");
            }
        });
        request.done(function(response) {
            if (response == "1") {
                alert("Respostas salvas");
                window.location.reload();
            } else if (response == 2) {
                alert("Respostas atualizadas");
                window.location.reload();
            }
        });
    }
</script>
@endsection