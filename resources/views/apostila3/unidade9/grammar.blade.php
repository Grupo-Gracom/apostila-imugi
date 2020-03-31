@extends('layouts.template')
@section('titulo','Unit 09 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade9" data-etapa="grammar">
            <h3 class="barlow">UNIT 9 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span> -->
            <!-- <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>     
            <h5 class="barlow">A –  TALKING ABOUT THE FUTURE.</h5>                
            <table class="espacamento center-align bordered" style="margin-top:32px;">
                <tr>
                    <td><h5 class="barlow">Verb Tense</h5></td>                    
                    <td><h5 class="barlow">Explanation</h5></td>                    
                    <td><h5 class="barlow">Use</h5></td>                    
                </tr>
                <tr class="bordered center-align">
                    <td><p>Simple Future (Will)</p></td>
                    <td><p>Predictions based on the speaker’s opinion and decisions made at the moment of speaking.</p></td>
                    <td><p>I think I’ll have some ice cream today. Out of the blue I thought about that. I thing I need some iced sugar.</p></td>
                </tr>                          
                <tr class="bordered center-align">
                    <td><p>Future Contiuous</p></td>
                    <td><p>Express emphasis on a futures action</p></td>
                    <td><p>Sorry. I can’t go out tomorrow. <B>I’ll be preparing</B> my project presentation. </p></td>
                </tr>                          
                <tr class="bordered center-align">
                    <td><p>To be + Going to</p></td>
                    <td><p>Plans and predictions based on future evidences.</p></td>
                    <td><p>Avengers the ultimate is for sure, going to be nominated to the special effects Oscar next year. </p></td>
                </tr>                                         
                <tr class="bordered center-align">
                    <td><p>Simple Present</p></td>
                    <td><p>Actions that are part of a schedule that are considered facts</p></td>
                    <td><p>I <b>travel</b> to comic com on Monday night.</p></td>
                </tr>                                         
                <tr class="bordered center-align">
                    <td><p>Present continuous</p></td>
                    <td><p>Appointments and prearranged activities</p></td>
                    <td><p>I’m giving a speech on how to develop presence on the net using social media. </p></td>
                </tr>                                         
            </table>            
            <h5 class="barlow">A - Fill in the blanks with the correct FUTURE forms: (Will / Going to / Present Conti nuous / Simple Present)</h5>
            <form id="unidade9grammar544" method="post">
                <p><b>1.</b> What <input type="text" name="grammar544-1" class="inputpequeno left-align" placeholder="Responda aqui" required>
                you <input type="text" name="grammar544-2" class="inputpequeno left-align" placeholder="Responda aqui" required> (do) when you grow up?</p>
                <p> I <input type="text" name="grammar544-3" class="inputpequeno left-align" placeholder="Responda aqui" required>
                (be) an acrobat in a circus.</p>
                <p><b>2.</b> I haven’t seen him for a long time but I think I 
                <input type="text" name="grammar544-4" class="inputpequeno left-align" placeholder="Responda aqui" required> (recognize) him.</p>
                <p><b>3. </b> I need some tokens to telephone my friend.</p>
                <p> I <input type="text" name="grammar544-5" class="inputpequeno left-align" placeholder="Responda aqui" required> (give) you some.</p>
                <p><b>4. </b>I got the plane tickets. I 
                <input type="text" name="grammar544-6" class="inputpequeno left-align" placeholder="Responda aqui" required>
                (fly) on Sunday.</p>
                <p><b>5. </b> Have you got any plans for the summer?</p>
                <p> Yes, we <input type="text" name="grammar544-7" class="inputpequeno left-align" placeholder="Responda aqui" required>
                (go) to Italy in June.</p>
                <p><b>6. </b>Don’t play with those matches; you 
                <input type="text" name="grammar544-8" class="inputpequeno left-align" placeholder="Responda aqui" required> 
                burn yourself.</p>
                <p><b>7. </b> Whose is that night dress?</p>
                <p> It’s mine. I <input type="text" name="grammar544-9" class="inputpequeno left-align" placeholder="Responda aqui" required> 
                (wear) it at John’s graduati on party.</p>
                <p><b>8. </b> Why did you call your grandma?</p>
                <p> I <input type="text" name="grammar544-10" class="inputpequeno left-align" placeholder="Responda aqui" required> 
                (visit) her at the weekend.</p>
                <p><b>9. </b>If your passport isn’t valid any more, you 
                <input type="text" name="grammar544-11" class="inputpequeno left-align" placeholder="Responda aqui" required> 
                (not / be able to) go abroad this month.</p>
                <p><b>10. </b> What are you doing with that brush?</p>
                <p> I <input type="text" name="grammar544-12" class="inputpequeno left-align" placeholder="Responda aqui" required> 
                (paint) my room.</p>                                     
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="9">
                <input type="hidden" name="atividade_id" value="544">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">B -  Use the correct form of the FUTURE TENSE:</h5>
            <form id="unidade9grammar545" method="post">
                <p><b>1.</b> Oh! You’ve got a ti cket for the party.</p>
                <p> Yes. I <input type="text" name="grammar545-1" class="inputpequeno left-align" placeholder="Responda aqui" required>
                (see) it on Friday.</p>
                <p><b>2.</b> Tea or coffee?</p>
                <p> I <input type="text" name="grammar545-2" class="inputpequeno left-align" placeholder="Responda aqui" required>
                (have) coff ee, please.</p>
                <p><b>3.</b> There isn’t any cloud in the sky. It 
                <input type="text" name="grammar545-3" class="inputpequeno left-align" placeholder="Responda aqui" required> 
                (be) a lovely day.</p>
                <p><b>4.</b> We <input type="text" name="grammar545-4" class="inputpequeno left-align" placeholder="Responda aqui" required> 
                (win) the match. We’re playing really well.</p>
                <p><b>5.</b> The festival <input type="text" name="grammar545-5" class="inputpequeno left-align" placeholder="Responda aqui" required> 
                (last) for ten days.</p>
                <p><b>6.</b> I<input type="text" name="grammar545-6" class="inputpequeno left-align" placeholder="Responda aqui" required>
                (have) a meal with a few friends. There 
                <input type="text" name="grammar545-7" class="inputpequeno left-align" placeholder="Responda aqui" required> 
                (be) about ten of us.</p>                                               
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="9">
                <input type="hidden" name="atividade_id" value="545">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">C - Look at Tom and Sally’s diary below. Then, use the PRESENT CONTINUOUS form to
            say what their arrangements are for this week, as in the example:</h5>
            <p>Monday - go to the cinema</p>
            <p>Tuesday - visit Sally’s parents</p>
            <p>Wednesday - take the car to a mechanic</p>
            <p>Thursday - buy a computer</p>
            <p>Friday - clean the house</p>
            <p>Saturday - have a dinner party</p>
            <p>Sunday - go on a picnic</p>     
            <form id="unidade9grammar546" method="post">
                <p><b>1. They’re going to the cinema on Monday
                <input type="text" name="grammar546-1" class="inputpequeno left-align" placeholder="Responda aqui" required></b></p>
                <p><b>2.</b> <input type="text" name="grammar546-2" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>3.</b> <input type="text" name="grammar546-3" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>4.</b> <input type="text" name="grammar546-4" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>5.</b> <input type="text" name="grammar546-5" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>6.</b> <input type="text" name="grammar546-6" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>7.</b> <input type="text" name="grammar546-7" class="inputpequeno left-align" placeholder="Responda aqui" required></p>                                
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="9">
                <input type="hidden" name="atividade_id" value="546">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">D - Fill in WILL or BE GOING TO:</h5>
            <form id="unidade9grammar547" method="post">
                <p><b>1.</b> Why do you need so much sugar?</p>
                <p> I <input type="text" name="grammar547-1" class="inputpequeno left-align" placeholder="Responda aqui" required> 
                make a cake.</p>
                <p><b>2.</b> Oh no! I’ve left my purse at home and I haven’t got any money on me!</p>
                <p> Don’t worry. I 
                <input type="text" name="grammar547-2" class="inputpequeno left-align" placeholder="Responda aqui" required>
                lend you some.</p>
                <p><b>3.</b> I don’t know how to use this mixer.</p>
                <p> That’s OK. I
                <input type="text" name="grammar547-3" class="inputpequeno left-align" placeholder="Responda aqui" required>
                show you.</p>
                <p><b>4.</b> Why are all these people gathered here?</p>
                <p> The Prime Minister 
                <input type="text" name="grammar547-4" class="inputpequeno left-align" placeholder="Responda aqui" required> 
                open the new hospital ward.</p>                                               
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="9">
                <input type="hidden" name="atividade_id" value="547">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">E - Put the verb in to the correct from using WILL or GOING TO:</h5>
            <form id="unidade9grammar548" method="post">
                <p><b>1. </b>Why are you turning on the television?</p>
                <p>I <input type="text" name="grammar548-1" class="inputpequeno left-align" placeholder="Responda aqui" required> (watch) the news.</p>
                <p><b>2. </b>Oh, I’ve just realized. I haven’t got any money.</p>
                <p>Don’t worry. That’s no problem. I <input type="text" name="grammar548-2" class="inputpequeno left-align" placeholder="Responda aqui" required>(lend) you some.</p>
                <p><b>3. </b>Those clouds are very black, aren’t they? I think it <input type="text" name="grammar548-3" class="inputpequeno left-align" placeholder="Responda aqui" required>(rain).</p>
                <p><b>4. </b>I’ve got a terrible headache.</p>
                <p>Have you? Wait here and I <input type="text" name="grammar548-4" class="inputpequeno left-align" placeholder="Responda aqui" required>(get) an aspirin for you.</p>
                <p><b>5. </b>Why are you fi lling that bucket with water?</p>
                <p>I <input type="text" name="grammar548-5" class="inputpequeno left-align" placeholder="Responda aqui" required>(wash) the car.</p>                            
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="9">
                <input type="hidden" name="atividade_id" value="548">
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

    
    $("#unidade9grammar544").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade9grammar544 input[type="text"]').each(function(index){
                if(($('#unidade9grammar544 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade9grammar544 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade9grammar544'), respostas);
            }else{
                enviarAtividade($('#unidade9grammar544'), respostas);
            }
        });
    $("#unidade9grammar545").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade9grammar545 input[type="text"]').each(function(index){
                if(($('#unidade9grammar545 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade9grammar545 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade9grammar545'), respostas);
            }else{
                enviarAtividade($('#unidade9grammar545'), respostas);
            }
        });
    $("#unidade9grammar546").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade9grammar546 input[type="text"]').each(function(index){
                if(($('#unidade9grammar546 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade9grammar546 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade9grammar546'), respostas);
            }else{
                enviarAtividade($('#unidade9grammar546'), respostas);
            }
        });
    $("#unidade9grammar547").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade9grammar547 input[type="text"]').each(function(index){
                if(($('#unidade9grammar547 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade9grammar547 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade9grammar547'), respostas);
            }else{
                enviarAtividade($('#unidade9grammar547'), respostas);
            }
        });
    $("#unidade9grammar548").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade9grammar548 input[type="text"]').each(function(index){
                if(($('#unidade9grammar548 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade9grammar548 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade9grammar548'), respostas);
            }else{
                enviarAtividade($('#unidade9grammar548'), respostas);
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
                    $('#unidade9grammar' + atividade_id + ' input[name="' + chaves[j] + '"][value="' + respostas[j] + '"]').attr("checked", true);
                    $('#unidade9grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade9grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade9grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade9grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);

                }
                $('#unidade9grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade9grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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