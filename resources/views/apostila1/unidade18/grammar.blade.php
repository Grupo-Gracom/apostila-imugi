@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade18" data-etapa="grammar">
				<h3 class="barlow">UNIT 18 - SHAPE TOOL & ADOBE KULER</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit18/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> 
                <div class="clear"></div> <br>
				<p>Irregular Verbs</p>
                <p>Irregular Verbs Differ From Regular Verbs Because Their Form In The Past Does Not Follow A Specific Rule.</p>
                <p>Examples Of Common Irregular Verbs:</p>
                <ul class="lista-inline">
                    <div id="gramar18Verde">
                        <p style="margin-bottom: 16px;"><b>PRESENT</b></p>
                        <p>GO</p>
                        <p>MAKE</p>
                        <p>AM / ARE / IS</p>
                        <p>THINK</p>
                        <p>CHOOSE</p>
                        <p>CUTE</p>
                    </div>
                    <div id="gramar18VerdeEscuro">
                    <p style="margin-bottom: 16px;"><b>PASTE</b></p>
                        <p>WENT</p>
                        <p>MADE</p>
                        <p>WAS / WHERE</p>
                        <p>THOUGHT</p>
                        <p>CHOSE</p>
                        <p>CUT</p>                        
                    </div>                    
                </ul>                             
                <div class="clear"></div>
				<h5 class="barlow">A - Change The Sentence Into The Other Two Forms.</h5>
				<form class="metade" id="unidade18grammar50" method="post">
                    <p><b>1. Affirmative:</b> She Went To Class Yesterday.</p>
                    <p><b>Interrogative:</b> <input class="full" type="text" name="grammar50-1" required></p>
                    <p><b>negative:</b> <input class="full" type="text" name="grammar50-2" required></p>

                    <p style="margin-top:40px;"><b>2. Affirmative:</b> <input class="full" type="text" name="grammar50-3" required></p>
                    <p><b>Interrogative:</b>  Did He Choose The Color? </p>
                    <p><b>negative:</b> <input class="full" type="text" name="grammar50-4" required></p>

                    <p style="margin-top:40px;"><b>3. Affirmative:</b> <input class="full" type="text" name="grammar50-5" required></p>
                    <p><b>Interrogative:</b> <input class="full" type="text" name="grammar50-6" required></p>
                    <p><b>negative:</b> They Didn’t Make The Layout.</p>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="18">
                    <input type="hidden" name="atividade_id" value="50">
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

        $("#unidade18grammar50").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade18grammar50 input[type="text"]').each(function(index){
                if(($('#unidade18grammar50 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade18grammar50 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade18grammar50'), respostas);
            }else{
                enviarAtividade($('#unidade18grammar50'), respostas);
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
                        $('#unidade18grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade18grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade18grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade18grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
