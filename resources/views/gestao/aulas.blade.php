@include('layouts/admin/header/header')

<main>
    <div id="aulas" class="box">
        <h3>
            Aulas
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Nova aula<span></div>
            <div class="click suave filtrar"><i class="material-icons">filter_list</i><span class="mini-title">Filtros<span></div>
        </h3>
        <ul class="list-head">
            <li>
                <div><h6 class="mini-title upper">#</h6></div>
                <div><h6 class="mini-title upper">Título</h6></div>
                <div><h6 class="mini-title upper">Curso</h6></div>
                <div><h6 class="mini-title upper">Ordem</h6></div>
                <div><h6 class="mini-title upper">Ativa ?</h6></div>
                <div><h6 class="mini-title upper">Ações</h6></div>
            </li>
        </ul>
        <ul class="list-body loading active"></ul>
        @if($paginas > 10)
        <ul class="list-foot">
            <li>
                <div>
                    <h6>
                        <i class="material-icons click prev">keyboard_arrow_left</i>
                        <span class="pageAtual">1</span> de <span class="limite" data-limite="<?php echo ceil($paginas / 10); ?>"><?php echo ceil($paginas / 10); ?></span>
                        <i class="material-icons click next">keyboard_arrow_right</i>
                    </h6>
                </div>
            </li>
        </ul>
        @endif
    </div>
</main>

<div id="lateral" class="suave">
    <div class="overlay suave"></div>
    <div id="filtrar" class="content suave">
        <h4><i class="material-icons click suave fechar">close</i></h4>
        <form id="form-filtrar-aula">
            <label for="f_curso_id">Curso</label>
            <select name="f_curso_id" id="f_curso_id">
                <option value="0">Todos</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->curso_id }}">{{ $curso->curso_nome }}</option>
                @endforeach
            </select>
            <button type="submit" class="click suave">Buscar <i class="material-icons">search</i></button>
        </form>
    </div>
    <div id="criar" class="content suave">
        <h4>Criar aula <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-aula" enctype="multipart/form-data">
            <label for="aula_nome">Nome</label>
            <input type="text" name="aula_nome" id="aula_nome" placeholder="Nome do aula" required>
            <label for="aula_descricao">Descrição</label>
            <textarea name="aula_descricao" id="aula_descricao" placeholder="Descrição aula"></textarea>
            <label for="aula_link">Link</label>
            <input type="text" name="aula_link" id="aula_link" placeholder="Link do aula">
            <div class="metade esquerda">
                <label for="aula_imagem">Thumb</label>
                <input type="file" name="aula_imagem" id="aula_imagem">
            </div>
            <div class="metade direita">
                <label for="aula_imagem_anuncio">Thumb anúncio</label>
                <input type="file" name="aula_imagem_anuncio" id="aula_imagem_anuncio">
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="aula_ordem">Posição</label>
                <input type="text" name="aula_ordem" id="aula_ordem" placeholder="Ex: 1..." required>
            </div>
            <div class="metade direita">
                <label for="curso_id">Curso</label>
                <select name="curso_id" id="curso_id">
                    @foreach($cursos as $curso)
                        <option value="{{ $curso->curso_id }}">{{ $curso->curso_nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="aula_status">Ativo ?</label>
                <select name="aula_status" id="aula_status">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <div class="metade direita">
                <label for="aula_tipo">Tipo ?</label>
                <select name="aula_tipo" id="aula_tipo">
                    <option value="2">Normal</option>
                    <option value="1">Live</option>
                    <option value="3">Interativa</option>
                    <option value="4">Prova</option>
                </select>
            </div>
            <div class="clear"></div>
            <div class="prova metade esquerda">
                <label for="prova_id">Prova aplicada</label>
                <select name="prova_id" id="prova_id">
                    @foreach($provas as $prova)
                        <option value="{{ $prova->prova_id }}">{{ $prova->prova_nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="interativa metade esquerda">
                <label for="aula_exercicio">Receber exercícios ?</label>
                <select name="aula_exercicio" id="aula_exercicio">
                    <option value="2">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="clear"></div>
            <div class="live metade esquerda">
                <label for="aula_player">Player</label>
                <input type="text" name="aula_player" id="aula_player" placeholder="Link do player" disabled>
            </div>
            <div class="live metade direita">
                <label for="aula_material">Materiais</label>
                <input type="text" name="aula_material" id="aula_material" placeholder="Link do material" disabled>
            </div>
            <div class="clear"></div>
            <div class="live metade esquerda">
                <label for="aula_chat">Chat</label>
                <input type="text" name="aula_chat" id="aula_chat" placeholder="Link do chat" disabled>
            </div>
            <div class="live metade direita">
                <label for="aula_premio">Prêmios</label>
                <input type="text" name="aula_premio" id="aula_premio" placeholder="Link do prêmio" disabled>
            </div>
            <div class="clear"></div>
            <div class="live metade esquerda">
                <label for="aula_agendada">Agendada ?</label>
                <select name="aula_agendada" id="aula_agendada">
                    <option value="2">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="live metade direita">
                <label for="aula_data">Data</label>
                <input type="date" name="aula_data" id="aula_data" disabled>
            </div>
            <div class="clear"></div>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar aula <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-aula" enctype="multipart/form-data">
            <input type="hidden" name="e_aula_id" id="e_aula_id" value="" required>
            <label for="e_aula_nome">Nome</label>
            <input type="text" name="e_aula_nome" id="e_aula_nome" placeholder="Nome do aula" required>
            <label for="e_aula_descricao">Descrição</label>
            <textarea name="e_aula_descricao" id="e_aula_descricao" placeholder="Descrição aula"></textarea>
            <label for="e_aula_link">Link</label>
            <input type="text" name="e_aula_link" id="e_aula_link" placeholder="Link do aula">
            <div class="metade esquerda">
                <label for="e_aula_imagem">Thumb</label>
                <input type="file" name="e_aula_imagem" id="e_aula_imagem">
            </div>
            <div class="metade direita">
                <label for="e_aula_imagem_anuncio">Thumb anúncio</label>
                <input type="file" name="e_aula_imagem_anuncio" id="e_aula_imagem_anuncio">
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="e_aula_ordem">Posição</label>
                <input type="text" name="e_aula_ordem" id="e_aula_ordem" placeholder="Ex: 1...">
            </div>
            <div class="metade direita">
                <label for="e_curso_id">Curso</label>
                <select name="e_curso_id" id="e_curso_id">
                    @foreach($cursos as $curso)
                        <option value="{{ $curso->curso_id }}">{{ $curso->curso_nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="e_aula_status">Ativo ?</label>
                <select name="e_aula_status" id="e_aula_status">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <div class="metade direita">
                <label for="e_aula_tipo">Tipo ?</label>
                <select name="e_aula_tipo" id="e_aula_tipo">
                    <option value="2">Normal</option>
                    <option value="1">Live</option>
                    <option value="3">Interativa</option>
                    <option value="4">Prova</option>
                </select>
            </div>
            <div class="clear"></div>
            <div class="prova metade esquerda">
                <label for="e_prova_id">Prova aplicada</label>
                <select name="e_prova_id" id="e_prova_id">
                    @foreach($provas as $prova)
                        <option value="{{ $prova->prova_id }}">{{ $prova->prova_nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="interativa metade esquerda">
                <label for="e_aula_exercicio">Receber exercícios ?</label>
                <select name="e_aula_exercicio" id="e_aula_exercicio">
                    <option value="2">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="clear"></div>
            <div class="live metade esquerda">
                <label for="e_aula_player">Player</label>
                <input type="text" name="e_aula_player" id="e_aula_player" placeholder="Link do player">
            </div>
            <div class="live metade direita">
                <label for="e_aula_material">Materiais</label>
                <input type="text" name="e_aula_material" id="e_aula_material" placeholder="Link do material">
            </div>
            <div class="clear"></div>
            <div class="live metade esquerda">
                <label for="e_aula_chat">Chat</label>
                <input type="text" name="e_aula_chat" id="e_aula_chat" placeholder="Link do chat">
            </div>
            <div class="live metade direita">
                <label for="e_aula_premio">Prêmios</label>
                <input type="text" name="e_aula_premio" id="e_aula_premio" placeholder="Link do prêmio">
            </div>
            <div class="clear"></div>
            <div class="live metade esquerda">
                <label for="e_aula_agendada">Agendada ?</label>
                <select name="e_aula_agendada" id="e_aula_agendada">
                    <option value="2">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="live metade direita">
                <label for="e_aula_data">Data</label>
                <input type="date" name="e_aula_data" id="e_aula_data" disabled>
            </div>
            <div class="clear"></div>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
</div>

<div id="alerta" class="suave">
    <div class="box">
        <h6 class="mini-title upper">aviso:</h6>
        <p></p>
        <div class="opcoes right-align hide">
            <button class="mini-title upper click suave confirmar">sim</button>
            <button class="mini-title upper click suave cancelar">não</button>
        </div>
    </div>
</div>

<script>

    $("#aula_ordem, #e_aula_ordem").mask("000");

    function carregarLista(){
        $("#aulas .list-body").load("aulas-lista", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Falha ao carregar aulas", 2000);
            }
        });
    } carregarLista();

    function recarregarLista(pagina){
        $("#aulas .list-body").load("aulas-lista?page=" + pagina , function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
                paginadores();
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Erro na paginação", 2000);
            }
        });
    };

    $(".next").click(function(){
        var limite = $(".limite").attr("data-limite");
        var pagina = parseInt($(".pageAtual").text()) + 1;
        if(pagina <= limite){
            $(".pageAtual").text(pagina);
            $(".list-body").addClass("active");
            recarregarLista(pagina);
        }
    });
    
    $(".prev").click(function(){
        var pagina = parseInt($(".pageAtual").text()) - 1;
        if(pagina >= 1){
            $(".pageAtual").text(pagina);
            $(".list-body").addClass("active");
            recarregarLista(pagina);
        }
    });

    $(".criar").click(function(){
        $("#lateral, #criar").addClass("active");
    });

    $("#aula_tipo").change(function(){
        if($(this).val() == 1){
            $("#form-criar-aula .live").css({"display":"block"});
            $("#form-criar-aula .live input").prop('disabled', false);
            $("#form-criar-aula .interativa").css({"display":"none"});
            $("#form-criar-aula .interativa input").prop('disabled', true);
            $("#form-criar-aula .prova").css({"display":"none"});
            $("#form-criar-aula .prova input").prop('disabled', true);
        }else if($(this).val() == 3){
            $("#form-criar-aula .live").css({"display":"none"});
            $("#form-criar-aula .live input").prop('disabled', true);
            $("#form-criar-aula .interativa").css({"display":"block"});
            $("#form-criar-aula .interativa input").prop('disabled', false);
            $("#form-criar-aula .prova").css({"display":"none"});
            $("#form-criar-aula .prova input").prop('disabled', true);
        }else if($(this).val() == 4){
            $("#form-criar-aula .live").css({"display":"none"});
            $("#form-criar-aula .live input").prop('disabled', true);
            $("#form-criar-aula .interativa").css({"display":"none"});
            $("#form-criar-aula .interativa input").prop('disabled', true);
            $("#form-criar-aula .prova").css({"display":"block"});
            $("#form-criar-aula .prova input").prop('disabled', false);
        }else{
            $("#form-criar-aula .live").css({"display":"none"});
            $("#form-criar-aula .live input").prop('disabled', true);
            $("#form-criar-aula .interativa").css({"display":"none"});
            $("#form-criar-aula .interativa input").prop('disabled', true);
            $("#form-criar-aula .prova").css({"display":"none"});
            $("#form-criar-aula .prova input").prop('disabled', true);
        }
    });
    
    $("#e_aula_tipo").change(function(){
        if($(this).val() == 1){
            $("#form-editar-aula .live").css({"display":"block"});
            $("#form-editar-aula .live input").prop('disabled', false);
            $("#form-editar-aula .interativa").css({"display":"none"});
            $("#form-editar-aula .interativa input").prop('disabled', true);
            $("#form-editar-aula .prova").css({"display":"none"});
            $("#form-editar-aula .prova input").prop('disabled', true);
        }else if($(this).val() == 3){
            $("#form-editar-aula .live").css({"display":"none"});
            $("#form-editar-aula .live input").prop('disabled', true);
            $("#form-editar-aula .interativa").css({"display":"block"});
            $("#form-editar-aula .interativa input").prop('disabled', false);
            $("#form-editar-aula .prova").css({"display":"none"});
            $("#form-editar-aula .prova input").prop('disabled', true);
        }else if($(this).val() == 4){
            $("#form-editar-aula .live").css({"display":"none"});
            $("#form-editar-aula .live input").prop('disabled', true);
            $("#form-editar-aula .interativa").css({"display":"none"});
            $("#form-editar-aula .interativa input").prop('disabled', true);
            $("#form-editar-aula .prova").css({"display":"block"});
            $("#form-editar-aula .prova input").prop('disabled', false);
        }else{
            $("#form-editar-aula .live").css({"display":"none"});
            $("#form-editar-aula .live input").prop('disabled', true);
            $("#form-editar-aula .interativa").css({"display":"none"});
            $("#form-editar-aula .interativa input").prop('disabled', true);
            $("#form-editar-aula .prova").css({"display":"none"});
            $("#form-editar-aula .prova input").prop('disabled', true);
        }
    });
    
    $("#form-criar-aula").submit(function(e){
        e.preventDefault();
        $("#form-criar-aula button").prop('disabled', true);
        criar();
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        aula_id = $(this).attr("data-id");
        consultar(aula_id);
    });

    $("#form-editar-aula").submit(function(e){
        e.preventDefault();
        $("#form-editar-aula button").prop('disabled', true);
        editar();
    });

    $(document).on("click", ".deletar", function(){
        var aula_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar esta aula ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(aula_id);
        });
    });

    $(".filtrar").click(function(){
        $("#lateral, #filtrar").addClass("active");
    });
    
    $("#form-filtrar-aula").submit(function(e){
        e.preventDefault();
        $("#form-filtrar-aula button").prop('disabled', true);
        filtrar();
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });
    
    function criar(){
        var form = new FormData($("#form-criar-aula")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'aulas',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar aula!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-aula")[0].reset();
                $("#form-criar-aula button").prop('disabled', false);
                criaAlerta(0, "Aula criada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(aula_id){
        request = $.ajax({
            url: 'aulas/' + aula_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $('#form-editar-aula input[name="e_aula_id"]').val(response.aula_id);
            $('#form-editar-aula input[name="e_aula_nome"]').val(response.aula_nome);
            $('#form-editar-aula textarea[name="e_aula_descricao"]').val(response.aula_descricao);
            $('#form-editar-aula input[name="e_aula_link"]').val(response.aula_link);
            $('#form-editar-aula input[name="e_aula_ordem"]').val(response.aula_ordem);
            $('#form-editar-aula #e_aula_status option[value="'+response.aula_status+'"]').prop("selected", true);
            $('#form-editar-aula #e_aula_tipo option[value="'+response.aula_tipo+'"]').prop("selected", true);
            $('#form-editar-aula #e_curso_id option[value="'+response.curso_id+'"]').prop("selected", true);
            if(response.aula_tipo == 1){
                $("#form-editar-aula .live").css({"display":"block"});
                $("#form-editar-aula .live input").prop('disabled', false);
                $('#form-editar-aula input[name="e_aula_player"]').val(response.aula_player);
                $('#form-editar-aula input[name="e_aula_material"]').val(response.aula_material);
                $('#form-editar-aula input[name="e_aula_chat"]').val(response.aula_chat);
                $('#form-editar-aula input[name="e_aula_premio"]').val(response.aula_premio);
            }
            if(response.aula_agendada == 1){
                $('#form-editar-aula #e_aula_agendada option[value="'+response.aula_agendada+'"]').prop("selected", true);
            }
            if(response.aula_tipo == 4){
                $('#form-editar-aula #e_prova_id option[value="'+response.prova_id+'"]').prop("selected", true);
            }
        });
    }
    
    function editar(){
        var form = new FormData($("#form-editar-aula")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'aulas',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar aula!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-aula")[0].reset();
                $("#form-editar-aula button").prop('disabled', false);
                criaAlerta(0, "Aula atualizada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(aula_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'aulas/' + aula_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar aula!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Aula deletada com sucesso!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 2000);
                carregarLista();
            }else{
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Esta empresa possui unidades atreladas a ela, remova suas unidades primeiro!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 5000);
            }
        });
    }

    function filtrar(){
        var form = new FormData($("#form-filtrar-aula")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'aulas-filtro',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao filtrar aula!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-filtrar-aula")[0].reset();
                $("#form-filtrar-aula button").prop('disabled', false);
                $(".list-body").addClass("active");
                carregarLista();
            }
        });
    }
    
    function paginadores(){
        var limite = $(".limite").attr("data-limite");
        var pagina = parseInt($(".pageAtual").text());
        var next = parseInt(pagina) + 1;
        var prev = parseInt(pagina) - 1;
        if(pagina < limite){
            $(".next").attr("data-page", next);
            $(".prev").attr("data-page", prev);
        }else{
            $(".next").attr("data-page", limite);
            $(".prev").attr("data-page", limite -1);
        }
        if(pagina == 1){
            $(".next").attr("data-page", 2);
            $(".prev").attr("data-page", 1);
        }
    }

</script>

