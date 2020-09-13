@include('layouts/admin/header/header')

<main>
    <div id="unidades" class="box">
        <h3>
            Unidades
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Nova unidade<span></div>
        </h3>
        <ul class="list-head">
            <li>
                <div><h6 class="mini-title upper">#</h6></div>
                <div><h6 class="mini-title upper">Nome</h6></div>
                <div><h6 class="mini-title upper">Código</h6></div>
                <div><h6 class="mini-title upper">Cidade</h6></div>
                <div><h6 class="mini-title upper">Estado</h6></div>
                <div><h6 class="mini-title upper">Empresa</h6></div>
                <div><h6 class="mini-title upper">Franquia ?</h6></div>
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
    <div id="criar" class="content suave">
        <h4>Criar unidade <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-unidade" action="{{ route('unidades.store') }}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <label for="unidade_nome">Nome</label>
            <input type="text" name="unidade_nome" id="unidade_nome" placeholder="Nome da unidade" required>
            <div class="metade esquerda">
                <label for="unidade_codigo">Código</label>
                <input type="text" name="unidade_codigo" id="unidade_codigo" placeholder="Código da unidade" required>
            </div>
            <div class="metade direita">
                <label for="unidade_hora_aula">Valor da hora aula</label>
                <input type="text" name="unidade_hora_aula" id="unidade_hora_aula" placeholder="Ex: 20.00" required>
            </div>
            <div class="clear"></div>
            <label for="unidade_endereco">Endereco</label>
            <input type="text" name="unidade_endereco" id="unidade_endereco" placeholder="Endereco da unidade" required>
            <div class="metade esquerda">
                <label for="unidade_numero">Numero</label>
                <input type="text" name="unidade_numero" id="unidade_numero" placeholder="Numero da unidade" required>
            </div>
            <div class="metade direita">
                <label for="unidade_cidade">Cidade</label>
                <input type="text" name="unidade_cidade" id="unidade_cidade" placeholder="Cidade da unidade" required>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="unidade_estado">Estado</label>
                <select name="unidade_estado" id="unidade_estado">
                    <option value="---">Nenhum</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Góias</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
            <div class="metade direita">
                <label for="empresa_id">Empresa</label>
                <select name="empresa_id" id="empresa_id">
                    @foreach($empresas as $empresa)
                        <option value="{{ $empresa->empresa_id }}">{{  $empresa->empresa_nome  }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="unidade_franquia">Franquia ?</label>
                <select name="unidade_franquia" id="unidade_franquia">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                    <option value="3">Consultor</option>
                </select>
            </div>
            <div class="metade direita">
                <label for="unidade_status">Ativa ?</label>
                <select name="unidade_status" id="unidade_status">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <div class="clear"></div>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar unidade <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-unidade" action="{{ route('unidades.store') }}" method="post">
            <input type="hidden" name="e_unidade_id" id="e_unidade_id" value="">
            <label for="e_unidade_nome">Nome</label>
            <input type="text" name="e_unidade_nome" id="e_unidade_nome" placeholder="Nome da unidade" required>
            <div class="metade esquerda">
                <label for="e_unidade_codigo">Código</label>
                <input type="text" name="e_unidade_codigo" id="e_unidade_codigo" placeholder="Código da unidade" required>
            </div>
            <div class="metade direita">
                <label for="e_unidade_hora_aula">Valor da hora aula</label>
                <input type="text" name="e_unidade_hora_aula" id="e_unidade_hora_aula" placeholder="Ex: 20.00" required>
            </div>
            <div class="clear"></div>
            <label for="e_unidade_endereco">Endereco</label>
            <input type="text" name="e_unidade_endereco" id="e_unidade_endereco" placeholder="Endereco da unidade" required>
            <div class="metade esquerda">
                <label for="e_unidade_numero">Numero</label>
                <input type="text" name="e_unidade_numero" id="e_unidade_numero" placeholder="Numero da unidade" required>
            </div>
            <div class="metade direita">
                <label for="e_unidade_cidade">Cidade</label>
                <input type="text" name="e_unidade_cidade" id="e_unidade_cidade" placeholder="Cidade da unidade" required>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="e_unidade_estado">Estado</label>
                <select name="e_unidade_estado" id="e_unidade_estado">
                    <option value="---">Nenhum</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Góias</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
            <div class="metade direita">
                <label for="e_empresa_id">Empresa</label>
                <select name="e_empresa_id" id="e_empresa_id">
                    @foreach($empresas as $empresa)
                        <option value="{{ $empresa->empresa_id }}">{{  $empresa->empresa_nome  }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="e_unidade_franquia">Franquia ?</label>
                <select name="e_unidade_franquia" id="e_unidade_franquia">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                    <option value="3">Consultor</option>
                </select>
            </div>
            <div class="metade direita">
                <label for="e_unidade_status">Ativa ?</label>
                <select name="e_unidade_status" id="e_unidade_status">
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

    //Máscaras
    $("#unidade_codigo, #e_unidade_codigo").mask("000");
    $("#unidade_hora_aula, #e_unidade_hora_aula").mask("0.000,00", { reverse: true });

    function carregarLista(){
        $("#unidades .list-body").load("unidades-lista", function(responseTxt, statusTxt, xhr){
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
        $("#unidades .list-body").load("unidades-lista?page=" + pagina , function(responseTxt, statusTxt, xhr){
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
    
    $("#form-criar-unidade").submit(function(e){
        e.preventDefault();
        $("#form-criar-unidade button").prop('disabled', true);
        criar();
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        unidade_id = $(this).attr("data-id");
        consultar(unidade_id);
    });

    $("#form-editar-unidade").submit(function(e){
        e.preventDefault();
        $("#form-editar-unidade button").prop('disabled', true);
        editar();
    });

    $(document).on("click", ".deletar", function(){
        var unidade_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar esta unidade ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(unidade_id);
        });
    });

    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });

    
    
    function criar(){
        var form = new FormData($("#form-criar-unidade")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'unidades',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar unidade!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-unidade")[0].reset();
                $("#form-criar-unidade button").prop('disabled', false);
                criaAlerta(0, "Unidade criada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(unidade_id){
        request = $.ajax({
            url: 'unidades/' + unidade_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $('#form-editar-unidade input[name="e_unidade_id"]').val(response.unidade_id);
            $('#form-editar-unidade input[name="e_unidade_nome"]').val(response.unidade_nome);
            $('#form-editar-unidade input[name="e_unidade_codigo"]').val(response.unidade_codigo);
            $('#form-editar-unidade input[name="e_unidade_hora_aula"]').val(response.unidade_hora_aula);
            $('#form-editar-unidade input[name="e_unidade_endereco"]').val(response.unidade_endereco);
            $('#form-editar-unidade input[name="e_unidade_numero"]').val(response.unidade_numero);
            $('#form-editar-unidade input[name="e_unidade_cidade"]').val(response.unidade_cidade);
            $('#form-editar-unidade #e_unidade_estado option[value="'+response.unidade_estado+'"]').prop("selected", true);
            $('#form-editar-unidade #e_empresa_id option[value="'+response.empresa_id+'"]').prop("selected", true);
            $('#form-editar-unidade #e_unidade_franquia option[value="'+response.unidade_franquia+'"]').prop("selected", true);
            $('#form-editar-unidade #e_unidade_status option[value="'+response.unidade_status+'"]').prop("selected", true);
        });
    }
    
    function editar(){
        var form = new FormData($("#form-editar-unidade")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'unidades',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar unidade!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-unidade")[0].reset();
                $("#form-editar-unidade button").prop('disabled', false);
                criaAlerta(0, "Unidade atualizada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(unidade_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'unidades/' + unidade_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar unidade!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Unidade deletada com sucesso!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 2000);
                carregarLista();
            }else if(response == "2"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Esta unidade possui clientes atrelados a ela, remova seus clientes primeiro!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 5000);
            }else if(response == "3"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Esta unidade possui colaboradores atrelados a ela, remova seus colaboradores primeiro!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 5000);
            }else if(response == "4"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Esta unidade possui cursos atrelados a ela, remova seus cursos primeiro!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 5000);
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

