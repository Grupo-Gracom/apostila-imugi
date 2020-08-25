@include('layouts/admin/header/header')

<main>
    <div id="artigos" class="box">
        <h3>
            Artigos
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Novo artigo<span></div>
            <!-- <div class="click suave filtrar"><i class="material-icons">filter_list</i><span class="mini-title">Filtros<span></div> -->
        </h3>
        <ul class="list-head">
            <li>
                <div><h6 class="mini-title upper">#</h6></div>
                <div><h6 class="mini-title upper">Título</h6></div>
                <div><h6 class="mini-title upper">V. Sim</h6></div>
                <div><h6 class="mini-title upper">V. Não</h6></div>
                <div><h6 class="mini-title upper">Tipo</h6></div>
                <div><h6 class="mini-title upper">Setor</h6></div>
                <div><h6 class="mini-title upper">Ativo ?</h6></div>
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
    <div id="criar" class="content suave">
        <h4>Criar artigo <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-artigo" enctype="multipart/form-data">
            <label for="artigo_titulo">Título</label>
            <input type="text" name="artigo_titulo" id="artigo_titulo" placeholder="Título do artigo" required>
            <label for="artigo_descricao">Descrição</label>
            <textarea name="artigo_descricao" id="artigo_descricao" placeholder="Descrição do artigo"></textarea>
            <div class="metade esquerda">
                <label for="artigo_tipo">Tipo</label>
                <select name="artigo_tipo" id="artigo_tipo">
                    <option value="1">Novidade</option>
                    <option value="2">Dúvida</option>
                </select>
            </div>
            <div class="metade direita">
                <label for="artigo_setor">Setor</label>
                <select name="artigo_setor" id="artigo_setor">
                    <option value="1">Aluno</option>
                    <option value="2">Professor</option>
                    <option value="3">Centro Autorizado</option>
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="artigo_status">Ativo ?</label>
                <select name="artigo_status" id="artigo_status">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <div class="clear"></div>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar artigo <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-artigo" enctype="multipart/form-data">
            <input type="hidden" name="e_artigo_id" id="e_artigo_id" value="" required>
            <label for="e_artigo_titulo">Título</label>
            <input type="text" name="e_artigo_titulo" id="e_artigo_titulo" placeholder="Título do artigo" required>
            <label for="e_artigo_descricao">Descrição</label>
            <textarea name="e_artigo_descricao" id="e_artigo_descricao" placeholder="Descrição do artigo"></textarea>
            <div class="metade esquerda">
                <label for="e_artigo_tipo">Tipo</label>
                <select name="e_artigo_tipo" id="e_artigo_tipo">
                    <option value="1">Novidade</option>
                    <option value="2">Dúvida</option>
                </select>
            </div>
            <div class="metade direita">
                <label for="e_artigo_setor">Setor</label>
                <select name="e_artigo_setor" id="e_artigo_setor">
                    <option value="1">Aluno</option>
                    <option value="2">Professor</option>
                    <option value="3">Centro Autorizado</option>
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="e_artigo_status">Ativo ?</label>
                <select name="e_artigo_status" id="e_artigo_status">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
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

    function carregarLista(){
        $("#artigos .list-body").load("suporte-lista", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Falha ao carregar artigos", 2000);
            }
        });
    } carregarLista();

    function recarregarLista(pagina){
        $("#artigos .list-body").load("suporte-lista?page=" + pagina , function(responseTxt, statusTxt, xhr){
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
    
    $("#form-criar-artigo").submit(function(e){
        e.preventDefault();
        $("#form-criar-artigo button").prop('disabled', true);
        criar();
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        artigo_id = $(this).attr("data-id");
        consultar(artigo_id);
    });

    $("#form-editar-artigo").submit(function(e){
        e.preventDefault();
        $("#form-editar-artigo button").prop('disabled', true);
        editar();
    });

    $(document).on("click", ".deletar", function(){
        var artigo_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar este artigo ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(artigo_id);
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
        var form = new FormData($("#form-criar-artigo")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'artigos',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar artigo!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-artigo")[0].reset();
                $("#form-criar-artigo button").prop('disabled', false);
                criaAlerta(0, "Artigo criado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(artigo_id){
        request = $.ajax({
            url: 'artigos/' + artigo_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $('#form-editar-artigo input[name="e_artigo_id"]').val(response.artigo_id);
            $('#form-editar-artigo input[name="e_artigo_titulo"]').val(response.artigo_titulo);
            $('#form-editar-artigo textarea[name="e_artigo_descricao"]').val(response.artigo_descricao);
            $('#form-editar-artigo #e_artigo_tipo option[value="'+response.artigo_tipo+'"]').prop("selected", true);
            $('#form-editar-artigo #e_artigo_setor option[value="'+response.artigo_setor+'"]').prop("selected", true);
            $('#form-editar-artigo #e_artigo_status option[value="'+response.artigo_status+'"]').prop("selected", true);
        });
    }
    
    function editar(){
        var form = new FormData($("#form-editar-artigo")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'artigos',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar artigo!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-artigo")[0].reset();
                $("#form-editar-artigo button").prop('disabled', false);
                criaAlerta(0, "Artigo atualizado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(artigo_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'artigos/' + artigo_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar artigo!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Artigo deletado com sucesso!");
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

