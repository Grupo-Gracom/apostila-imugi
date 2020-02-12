@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade2" data-etapa="listening">
				<h3 class="barlow">UNIT 02 - INTRODUCTION TO PHOTOSHOP</h3>
				<h5 class="barlow">3 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit2/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Listen to your teacher and repeat the words to practi ce the pronunciati on of words with the lett er ‘R’.</h5>
				<ul class="lista-inline">
                    <li><b class="upper">For</b></li>
                    <li><b class="upper">Designer</b></li>
                    <li><b class="upper">Importance</b></li>
                    <li><b class="upper">Photographer</b></li>
                    <li><b class="upper">Great</b></li>
                    <li><b class="upper">Brother</b></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B - Listen to your teacher and repeat the words to practi ce the pronunciati on of words with the lett er ‘P’.</h5>
                <ul class="lista-inline">
                    <li><b class="upper">Production</b></li>
                    <li><b class="upper">Professional</b></li>
                    <li><b class="upper">Professor</b></li>
                    <li><b class="upper">Develop</b></li>
                    <li><b class="upper">Photoshop</b></li>
                    <li><b class="upper">Profession</b></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">C - Now, read the sentence below to check your understanding.</h5>
                <p class="center-align">“Photoshop, for professionals of graphic producti on, is of great importance.”</p>
                <h5 class="barlow">3.1 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit2/listining/listining_a.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Listen to the track and fill in the blanks with the words you hear.</h5>
                <p>Photoshop was <b>developed</b> in 1987 by two brothers. The <b>software</b>  is very important for <b>graphic</b> designing.  You can <b>create</b>
                everything you imagine if you understand the program and use your creativity.</p>
                <h5 class="barlow" style="margin-top: 16px">B - Listen to the passage and circle the subject of the audio.</h5>
                <p>Did you know that you can edit videos with Adobe’s image-editing program? It is not necessary to study other programs because Photoshop can do simple editing and transformations.</p>				
                <div class="clear"></div>
                <div class="metade">
                    <form id="unidade2listening9" method="post">
                        <p>a - The creati on of Photoshop <input class="full" type="text" name="listening9-1" required></p>
                        <p>b - The professionals who use Photoshop <input class="full" type="text" name="listening9-2" required></p>
                        <p>c - The tools in Photoshop <input class="full" type="text" name="listening9-3" required></p>
                        <p>d - The video-editing features of Photoshop <input class="full" type="text" name="listening9-4" required></p>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="2">
                        <input type="hidden" name="atividade_id" value="9">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </form>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade2listening9").submit(function(e){
            e.preventDefault();
            var respostas = '{';
            $('#unidade2listening9 input[type="text"]').each(function(index){
                if(($('#unidade2listening9 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade2listening9 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade2listening9'), respostas);
            }else{
                enviarAtividade($('#unidade2listening9'), respostas);
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
                        $('#unidade2listening'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade2listening'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade2listening'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade2listening'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
