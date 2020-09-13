@include('layouts/admin/header/header')

<main>
    <div id="assinaturas" class="box">
        <h3>
            Assinaturas
            <div class="click suave filtrar"><i class="material-icons">filter_list</i><span class="mini-title">Filtros<span></div>
            <form id="pesquisar">
                <input type="text" name="busca" placeholder="Email, CPF...">
                <button type="submit" class="suave click"><i class="material-icons">search</i></button>
            </form>
            <!-- <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Nova empresa<span></div> -->
        </h3>
        <ul class="list-head">
            <li>
                <div><h6 class="mini-title upper">#</h6></div>
                <div><h6 class="mini-title upper">Email</h6></div>
                <div><h6 class="mini-title upper">Data</h6></div>
                <div><h6 class="mini-title upper">CPF</h6></div>
                <div><h6 class="mini-title upper">Unidade</h6></div>
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
        <form id="form-filtrar-assinatura">
            <label for="f_unidade_id">Unidade</label>
            <select name="f_unidade_id" id="f_unidade_id">
                <option value="0">Todos</option>
                @foreach($unidades as $unidade)
                    <option value="{{ $unidade->unidade_codigo }}">{{ $unidade->unidade_nome }}</option>
                @endforeach
            </select>
            <button type="submit" class="click suave">Buscar <i class="material-icons">search</i></button>
        </form>
    </div>
    <div id="criar" class="content suave">
        <h4>Criar empresa <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-empresa" action="{{ route('empresas.store') }}" method="post">
            <label for="empresa_nome">Nome</label>
            <input type="text" name="empresa_nome" id="empresa_nome" placeholder="Nome da empresa" required>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar empresa <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-empresa" action="{{ route('empresas.store') }}" method="post">
            <input type="hidden" name="e_empresa_id" id="e_empresa_id" value="">
            <label for="e_empresa_nome">Título</label>
            <input type="text" name="e_empresa_nome" id="e_empresa_nome" placeholder="Nome da empresa" required>
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
        $("#assinaturas .list-body").load("assinaturas-lista", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Erro: " + xhr.status + ": " + xhr.statusText, 2000);
            }
        });
    } carregarLista();

    function recarregarLista(pagina){
        $("#assinaturas .list-body").load("assinaturas-lista?page=" + pagina , function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
                paginadores();
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Erro na paginação", 2000);
            }
        });
    };

    function carregarPesquisa(){
        $("#assinaturas .list-body").load("assinaturas-pesquisa", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Erro ao carregar a lista!", 2000);
            }
        });
    }

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

    $(".criar").click(function(){
        $("#lateral, #criar").addClass("active");
    });
    
    $("#form-criar-empresa").submit(function(e){
        e.preventDefault();
        $("#form-criar-empresa button").prop('disabled', true);
        criar();
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        empresa_id = $(this).attr("data-id");
        consultar(empresa_id);
    });

    $("#form-editar-empresa").submit(function(e){
        e.preventDefault();
        $("#form-editar-empresa button").prop('disabled', true);
        editar();
    });

    $(document).on("click", ".deletar", function(){
        var empresa_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar esta empresa ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(empresa_id);
        });
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });

    $("#pesquisar").submit(function(e){
        e.preventDefault();
        $(".list-body").addClass("active");
        $(this).find('button').prop('disabled', true);
        pesquisar();
    });

    $(".filtrar").click(function(){
        $("#lateral, #filtrar").addClass("active");
    });
    
    $("#form-filtrar-assinatura").submit(function(e){
        e.preventDefault();
        $("#form-filtrar-assinatura button").prop('disabled', true);
        filtrar();
    });
    
    function criar(){
        var form = new FormData($("#form-criar-empresa")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'empresas',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar empresa!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-empresa")[0].reset();
                $("#form-criar-empresa button").prop('disabled', false);
                criaAlerta(0, "Empresa criada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(empresa_id){
        request = $.ajax({
            url: 'empresas/' + empresa_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $('#form-editar-empresa input[name="e_empresa_id"]').val(response.empresa_id);
            $('#form-editar-empresa input[name="e_empresa_nome"]').val(response.empresa_nome);
        });
    }

    function pesquisar(){
        var data = new FormData($("#pesquisar")[0]);
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: 'pesquisarAssinatura',
            data: data,
            type: 'post',
            cache: false,
            processData: false,
            contentType: false,
            error: function(){
                criaAlerta(0,"Erro ao pesquisar!",2000);
            },
            success: function(response){ 
                $("#pesquisar button").prop("disabled", false);
                carregarPesquisa();
            }
        });
    }
    
    function editar(){
        var form = new FormData($("#form-editar-empresa")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'empresas',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar empresa!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-empresa")[0].reset();
                $("#form-editar-empresa button").prop('disabled', false);
                criaAlerta(0, "Empresa atualizada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(empresa_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'empresas/' + empresa_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar empresa!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Empresa deletada com sucesso!");
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
        var form = new FormData($("#form-filtrar-assinatura")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'assinaturas-filtro',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao filtrar assinaturas!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-filtrar-assinatura")[0].reset();
                $("#form-filtrar-assinatura button").prop('disabled', false);
                $(".list-body").addClass("active");
                carregarLista();
            }
        });
    }
    
    

</script>

