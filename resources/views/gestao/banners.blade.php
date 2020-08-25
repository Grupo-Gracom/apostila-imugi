@include('layouts/admin/header/header')

<main>
    <div id="banners" class="box">
        <h3>
            Banners
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Novo banner<span></div>
        </h3>
        <ul class="list-head">
            <li>
                <div><h6 class="mini-title upper">#</h6></div>
                <div><h6 class="mini-title upper">Nome</h6></div>
                <div><h6 class="mini-title upper">Ordem</h6></div>
                <div><h6 class="mini-title upper">Ativa ?</h6></div>
                <div><h6 class="mini-title upper">Principal ?</h6></div>
                <div><h6 class="mini-title upper">Ações</h6></div>
            </li>
        </ul>
        <ul class="list-body loading active"></ul>
    </div>
</main>

<div id="lateral" class="suave">
    <div class="overlay suave"></div>
    <div id="criar" class="content suave">
        <h4>Criar banner <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-banner" enctype="multipart/form-data">
            <label for="banner_nome">Título</label>
            <input type="text" name="banner_nome" id="banner_nome" placeholder="Título do banner" required>
            <label for="banner_descricao">Descrição</label>
            <textarea name="banner_descricao" id="banner_descricao" placeholder="Descrição banner"></textarea>
            <label for="banner_link">Link</label>
            <input type="text" name="banner_link" id="banner_link" placeholder="Link do banner">
            <label for="banner_imagem">Imagem</label>
            <input type="file" name="banner_imagem" id="banner_imagem">
            <label for="banner_ordem">Posição</label>
            <input type="text" name="banner_ordem" id="banner_ordem" placeholder="Ex: 1..." required>
            <label for="banner_principal">Principal ?</label>
            <select name="banner_principal" id="banner_principal">
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
            <label for="banner_status">Ativo ?</label>
            <select name="banner_status" id="banner_status">
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar banner <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-banner" enctype="multipart/form-data">
            <input type="hidden" name="e_banner_id" id="e_banner_id" value="" required>
            <label for="e_banner_nome">Título</label>
            <input type="text" name="e_banner_nome" id="e_banner_nome" placeholder="Título do banner" required>
            <label for="e_banner_descricao">Descrição</label>
            <textarea name="e_banner_descricao" id="e_banner_descricao" placeholder="Descrição banner"></textarea>
            <label for="e_banner_link">Link</label>
            <input type="text" name="e_banner_link" id="e_banner_link" placeholder="Link do banner">
            <label for="e_banner_imagem">Imagem</label>
            <input type="file" name="e_banner_imagem" id="e_banner_imagem">
            <label for="e_banner_ordem">Posição</label>
            <input type="text" name="e_banner_ordem" id="e_banner_ordem" placeholder="Ex: 1...">
            <label for="e_banner_principal">Principal ?</label>
            <select name="e_banner_principal" id="e_banner_principal">
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
            <label for="e_banner_status">Ativo ?</label>
            <select name="e_banner_status" id="e_banner_status">
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
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
        $("#banners .list-body").load("banners-lista", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Falha ao carregar banners", 2000);
            }
        });
    } carregarLista();

    $(".criar").click(function(){
        $("#lateral, #criar").addClass("active");
    });
    
    $("#form-criar-banner").submit(function(e){
        e.preventDefault();
        $("#form-criar-banner button").prop('disabled', true);
        criar();
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        banner_id = $(this).attr("data-id");
        consultar(banner_id);
    });

    $("#form-editar-banner").submit(function(e){
        e.preventDefault();
        $("#form-editar-banner button").prop('disabled', true);
        editar();
    });

    $(document).on("click", ".deletar", function(){
        var banner_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar este banner ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(banner_id);
        });
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });
    
    function criar(){
        var form = new FormData($("#form-criar-banner")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'banners',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar banner!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-banner")[0].reset();
                $("#form-criar-banner button").prop('disabled', false);
                criaAlerta(0, "Banner criado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(banner_id){
        request = $.ajax({
            url: 'banners/' + banner_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $('#form-editar-banner input[name="e_banner_id"]').val(response.banner_id);
            $('#form-editar-banner input[name="e_banner_nome"]').val(response.banner_nome);
            $('#form-editar-banner textarea[name="e_banner_descricao"]').val(response.banner_descricao);
            $('#form-editar-banner input[name="e_banner_link"]').val(response.banner_link);
            $('#form-editar-banner input[name="e_banner_ordem"]').val(response.banner_ordem);
            $('#form-editar-banner #e_banner_status option[value="'+response.banner_status+'"]').prop("selected", true);
        });
    }
    
    function editar(){
        var form = new FormData($("#form-editar-banner")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'banners',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar banner!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-banner")[0].reset();
                $("#form-editar-banner button").prop('disabled', false);
                criaAlerta(0, "Banner atualizado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(banner_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'banners/' + banner_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar banner!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Banner deletado com sucesso!");
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
    
    

</script>

