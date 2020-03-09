@include('layouts/header/header')

<main>
    <div id="clientes" class="box">
        <h3>
            Clientes
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Novo cliente<span></div>
        </h3>
        <ul class="list-head">
            <li>
                <div><h6 class="mini-title upper">#</h6></div>
                <div><h6 class="mini-title upper">Nome</h6></div>
                <div><h6 class="mini-title upper">Email</h6></div>
                <div><h6 class="mini-title upper">Cadastro</h6></div>
                <div><h6 class="mini-title upper">Matrícula</h6></div>
                <div><h6 class="mini-title upper">Unidade</h6></div>
                <div><h6 class="mini-title upper">Já acessou ?</h6></div>
                <div><h6 class="mini-title upper">Devendo ?</h6></div>
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
        <h4 class="barlow">Criar cliente <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-cliente" action="{{ route('clientes.store') }}" method="post">
            <label for="cliente_nome">Nome</label>
            <input type="text" name="cliente_nome" id="cliente_nome" placeholder="Nome do cliente" required>
            <label for="cliente_email">Email</label>
            <input type="email" name="cliente_email" id="cliente_email" placeholder="Email do cliente" required>
            <label for="cliente_senha">Senha</label>
            <input type="password" name="cliente_senha" id="cliente_senha" placeholder="Senha do cliente" required>
            <div class="metade esquerda">
                <label for="cliente_matricula">Matrícula</label>
                <input type="text" name="cliente_matricula" id="cliente_matricula" placeholder="000000">
            </div>
            <div class="metade direita">
                <label for="unidade_id">Unidade</label>
                <select name="unidade_id" id="unidade_id">
                    @foreach($unidades as $unidade)
                        <option value="{{ $unidade->unidade_id }}">{{  $unidade->unidade_nome  }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="cliente_status">Ativo ?</label>
                <select name="cliente_status" id="cliente_status">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <div class="clear"></div>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4 class="barlow">Editar cliente <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-cliente" action="{{ route('clientes.store') }}" method="post">
            <input type="hidden" name="e_cliente_id" id="e_cliente_id" value="" required>
            <label for="e_cliente_nome">Nome</label>
            <input type="text" name="e_cliente_nome" id="e_cliente_nome" placeholder="Nome do cliente" required>
            <label for="e_cliente_email">Email</label>
            <input type="email" name="e_cliente_email" id="e_cliente_email" placeholder="Email do cliente" required>
            <label for="e_cliente_senha">Senha</label>
            <input type="password" name="e_cliente_senha" id="e_cliente_senha" placeholder="Senha do cliente" required>
            <div class="metade esquerda">
                <label for="e_cliente_matricula">Matrícula</label>
                <input type="text" name="e_cliente_matricula" id="e_cliente_matricula" placeholder="000000">
            </div>
            <div class="metade direita">
                <label for="e_unidade_id">Unidade</label>
                <select name="e_unidade_id" id="e_unidade_id">
                    @foreach($unidades as $unidade)
                        <option value="{{ $unidade->unidade_id }}">{{  $unidade->unidade_nome  }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="e_cliente_status">Ativo ?</label>
                <select name="e_cliente_status" id="e_cliente_status">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <div class="metade direita">
                <label for="e_cliente_status_financeiro">Devendo ?</label>
                <select name="e_cliente_status_financeiro" id="e_cliente_status_financeiro">
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
        $("#clientes .list-body").load("clientes-lista", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
                $(".next").attr("data-page", 2);
                $(".prev").attr("data-page", 1);
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Erro: " + xhr.status + ": " + xhr.statusText, 2000);
            }
        });
    } carregarLista();

    function recarregarLista(pagina){
        $("#clientes .list-body").load("clientes-lista?page=" + pagina , function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
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
            recarregarLista(pagina);
        }
    });
    
    $(".prev").click(function(){
        var pagina = parseInt($(".pageAtual").text()) - 1;
        if(pagina >= 1){
            $(".pageAtual").text(pagina);
            recarregarLista(pagina);
        }
    });


    $(".criar").click(function(){
        $("#lateral, #criar").addClass("active");
    });
    
    $("#form-criar-cliente").submit(function(e){
        e.preventDefault();
        $("#form-criar-cliente button").prop('disabled', true);
        criar();
    });
    
    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        cliente_id = $(this).attr("data-id");
        consultar(cliente_id);
    });
    
    $("#form-editar-cliente").submit(function(e){
        e.preventDefault();
        $("#form-editar-cliente button").prop('disabled', true);
        editar();
    });
    
    $(document).on("click", ".deletar", function(){
        var cliente_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar este cliente ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(cliente_id);
        });
    });

    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });

    function criar(){
        var form = new FormData($("#form-criar-cliente")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'clientes',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar cliente!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-cliente")[0].reset();
                $("#form-criar-cliente button").prop('disabled', false);
                criaAlerta(0, "Cliente criado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(cliente_id){
        request = $.ajax({
            url: 'clientes/' + cliente_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            console.log(response)
            $('#form-editar-cliente input[name="e_cliente_id"]').val(response.cliente_id);
            $('#form-editar-cliente input[name="e_cliente_nome"]').val(response.cliente_nome);
            $('#form-editar-cliente input[name="e_cliente_email"]').val(response.cliente_email);
            $('#form-editar-cliente input[name="e_cliente_matricula"]').val(response.cliente_matricula);
            $('#form-editar-cliente #e_unidade_id option[value="'+response.unidade_id+'"]').prop("selected", true);
            $('#form-editar-cliente #e_cliente_status option[value="'+response.cliente_status+'"]').prop("selected", true);
            $('#form-editar-cliente #e_cliente_status_financeiro option[value="'+response.cliente_status_financeiro+'"]').prop("selected", true);
        });
    }
    
    function editar(){
        var form = new FormData($("#form-editar-cliente")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'clientes',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar cliente!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-cliente")[0].reset();
                $("#form-editar-cliente button").prop('disabled', false);
                criaAlerta(0, "Cliente atualizado com sucesso!",5000);
                carregarLista();
            }
        });
    }
    
    function deletar(cliente_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'clientes/' + cliente_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar cliente!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Cliente deletado com sucesso!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(() => {
                    $("#alerta").removeClass("active");
                }, 2000);
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

