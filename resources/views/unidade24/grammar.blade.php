@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade24" data-etapa="grammar">
				<h3 class="barlow">UNIT 24 - ERASER TOOL</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio>
        
                <p>There To Be</p>
                <p>The Verb There To Be Is Used To Express The Existance Or Presence Of Something Or Someone.</p>
                
                <p style="word-spacing: 12em;">Affirmative Interrogative Negative</p>
                <p style="word-spacing: 2em;">Singular There Is. Is There? There Isn’t/ There Is No.</p>
                <p style="word-spacing: 2em;">Plural There Are Are There? There Aren’t/ There Are No</p>
                
                <div class="metade">
                <div class="clear"></div>
                    <h5 class="barlow">A - complete The Sentences With The Correct Form Of The Verb There To Be.</h5>
                    <form id="unidade24grammar64" method="post">
                    <p>1. <input type="text" name="grammar64-1" required>  Many People At The Party</p>
                    <p>2. <input type="text" name="grammar64-2" required> Animals In The Park?</p>
                    <p>3. <input type="text" name="grammar64-3" required> Cars Parked On The Street. (Negative)</p>
                    <p>4. <input type="text" name="grammar64-4" required> Anyone Home?</p>
                    <p>5. <input type="text" name="grammar64-5" required>  Tickets For The Movie?</p>
                        
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="24">
                        <input type="hidden" name="atividade_id" value="64">
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

        $("#unidade24grammar64").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade24grammar64 input[type="text"]').each(function(index){
                if(($('#unidade24grammar64 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade24grammar64 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade24grammar64'), respostas);
            }else{
                enviarAtividade($('#unidade24grammar64'), respostas);
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
                        $('#unidade24grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade24grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade24grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade24grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
