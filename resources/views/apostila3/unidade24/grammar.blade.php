@extends('layouts.template')
@section('titulo','Unit 24 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade24" data-etapa="grammar">
            <h3 class="barlow">UNIT 24</h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/Unit24/Grammar/completo.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <div style="margin-top: 16px">
                <h5 class="barlow">A - PASSIVE VOICE (2)</h5>
                <p>
                    When reporting questions, we should introduce the reporting sentence with the
                    verb <b>To Ask</b> and <b>turn the question to the affirmative.</b>
                </p>

                <table class="espacamento center-align bordered">
                    <tr>
                        <td><h5 class="barlow"><b>DIRECT SPEECH (Yes/No questi ons)</b></td>
                        <td><h5 class="barlow"><b>REPORTED SPEECH (Add if)</b></td>
                    </tr>
                    <tr class="bordered">
                        <td>
                            <p><b>Jake :</b>  Akira, do you need help with the project?</p>
                            <p><b>Laura :</b> John , can you call Akira please?</p>
                            <p><b>Akira :</b> John, did you get a laptop to use?</p>
                        </td>
                        <td>
                            <p>Jake <b>asked</b> Akira <b>if</b> he needed any help</p>
                            <p>Laura <b>asked</b> John <b>if</b> he could call Akira.</p>
                            <p>Akira <b>asked</b> John <b>if</b> he had gott en a laptop to use.</p>
                        </td>
                    </tr>
                </table>
                
                <table class="espacamento center-align bordered" style="margin-top:32px">
                    <tr>
                        <td><h5 class="barlow"><b>DIRECT SPEECH (Wh - questions)</b></h5></td>
                        <td><h5 class="barlow"><b>REPORTED SPEECH (Wh – affirmative)</b></h5></td>
                    </tr>
                    <tr class="bordered">
                        <td>
                            <p><b>Jake :</b> Akira, <b>what’s</b> the main problem with the project?<p>
                            <p><b>Laura :</b> John, <b>what’s</b> your new telephone number?<p>
                            <p><b>Akira :</b> John, <b>where</b> do you come from?<p>
                        </td>
                        <td>
                            <p>Jake <b>asked</b> Akira <b>what</b> the main problem <b>was</b> with the project.</p>
                            <p>Laura <b>asked</b> John <b>what</b> his new telephone number <b>was</b>.</p>
                            <p>Akira <b>asked</b> John <b>where</b> did he come from?.</p>
                        </td>
                    </tr>
                </table>

                <h5 class="barlow" style="margin-top:32px"><b>EXERCISES</b></h5>
                <h5 class="barlow">1 - Look at the Hotel Information table and write sentences as in the example:</h5>
                <table class="espacamento center-align borderedfull">
                    <tr>
                        <td colspan="2"><h5 class="barlow">Hotel Information</td>
                    </tr>
                    <tr> 
                        <td>
                            <p>Breakfast</p>
                            <p>In Pierrot’s Restaurant 7-9:30 am</p>
                        </td>
                        <td>
                            <p>Rooms</p>
                            <p>Maid Service daily</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Dinner</p>
                            <p>In Main Restaurant 8-10 pm</p>
                        </td>
                        <td>
                            <p>Hot water</p>
                            <p>24 hours a day</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Newspapers – Telephone calls</p>
                            <p>At the Reception Desk</p>
                        </td>
                        <td>
                            <p>Hotel Cinema</p>
                            <p>Film every night at 10 pm</p>
                        </td>
                    </tr>
                </table>

                <form id="unidade24grammar601" method="post" class="metade" style="margin-top:32px">
                    <p>
                        <p>
                            1. Breakfast / serve – where and when?
                            <p><b>Breakfast is served in Pierrot’s Restaurant between 7 and 9:30 am.</b></p>
                        </p>
                        <p>
                            2. Dinner / serve – where and when?
                            <input type="text" name="grammar601-1" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            3. Newspapers / sell – where?
                            <input type="text" name="grammar601-2" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            4. Telephone calls / can make – where?
                            <input type="text" name="grammar601-3" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            5. Rooms / clean – who by and how oft en?
                            <input type="text" name="grammar601-4" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            6. Hot water / supply – when?
                            <input type="text" name="grammar601-5" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            7. Films / show – where and when?
                            <input type="text" name="grammar601-6" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="24">
                    <input type="hidden" name="atividade_id" value="601">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow">2 - Turn from ACTIVE into PASSIVE:</h5>
                <form id="unidade24grammar602" method="post" class="metade">
                    <p>
                        <p>
                            1. The gardener has planted some trees.
                            <p><b>Some trees have been planted by the gardener.</b></p>
                        </p>
                        <p>
                            2. Doctor Brown will give you some advice.
                            <input type="text" name="grammar602-1" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            3. A famous designer will redecorate the hotel.
                            <input type="text" name="grammar602-2" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            4. Steven Spielberg directed “E.T.”
                            <input type="text" name="grammar602-3" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            5. Someone has broken the crystal vase.
                            <input type="text" name="grammar602-4" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            6. His parents have brought him up to be polite.
                            <input type="text" name="grammar602-5" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            7. Fleming discovered penicillin.
                            <input type="text" name="grammar602-6" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            8. They will advertise the producton television.
                            <input type="text" name="grammar602-7" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            9. Someone is remaking that film.
                            <input type="text" name="grammar602-8" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                        <p>
                            10. Picasso painted that picture.
                            <input type="text" name="grammar602-9" class="full left-align" placeholder="Responda aqui" required />
                        </p>
                    </p>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="24">
                    <input type="hidden" name="atividade_id" value="602">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>

                <h5 class="barlow" style="margin-top:16px">3 - Rewrite the following passage in the PASSIVE:</h5>
                <p>
                    Our school is organizing a contest. The teachers will choose the best project about the
                    environment. The students must include pictures and drawings in their projects. The
                    students will also have to do all the writing themselves. The school will give the winner a
                    passport for a Coursera course..
                </p>
                <form id="unidade24grammar603" method="post" style="margin-top:32px">
                    <textarea name="grammar603-1" class="metade left-align" placeholder="Responda aqui" required></textarea>
    
                    <div class="clear"></div>
    
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="24">
                    <input type="hidden" name="atividade_id" value="603">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit24/grammar.jpg') }}" alt="colocação">
				</figure>
            </div>
        </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade24grammar601").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade24grammar601 input[type="text"]').each(function(index) {
            if (($('#unidade24grammar601 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade24grammar601 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade24grammar601'), respostas);
        } else {
            enviarAtividade($('#unidade24grammar601'), respostas);
        }
    });

    $("#unidade24grammar602").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade24grammar602 input[type="text"]').each(function(index) {
            if (($('#unidade24grammar602 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade24grammar602 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade24grammar602'), respostas);
        } else {
            enviarAtividade($('#unidade24grammar602'), respostas);
        }
    });

    $("#unidade24grammar603").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{"' + $('#unidade24grammar603 textarea').attr("name") + '":"' + $('#unidade24grammar603 textarea').val() + '"}';
        if ($('#unidade24grammar603 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade24grammar603'), respostas);
        } else {
            enviarAtividade($('#unidade24grammar603'), respostas);
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
                    $('#unidade24grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade24grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade24grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade24grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade24grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade24grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
