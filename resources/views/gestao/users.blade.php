@include('layouts/admin/header/header')

<main>
    <div id="usuarios" class="box">
        <h3>
            Usuários
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Novo usuário<span></div>
        </h3>
        <ul class="list-head">
            <li>
                <div><h6 class="mini-title upper">#</h6></div>
                <div><h6 class="mini-title upper">Nome</h6></div>
                <div><h6 class="mini-title upper">Email</h6></div>
                <div><h6 class="mini-title upper">Unidade</h6></div>
                <div><h6 class="mini-title upper">Cargo</h6></div>
                <div><h6 class="mini-title upper">Ativo ?</h6></div>
                <div><h6 class="mini-title upper">Ações</h6></div>
            </li>
        </ul>
        <ul class="list-body loading active"></ul>
    </div>
</main>

<div id="lateral" class="suave">
    <div class="overlay suave"></div>
    <div id="criar" class="content suave">
        <h4>Criar usuario <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-usuario" action="{{ route('colaboradores.store') }}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <label for="usuario_nome">Nome</label>
            <input type="text" name="usuario_nome" id="usuario_nome" placeholder="Nome do usuário" required>
            <label for="usuario_email">Email</label>
            <input type="email" name="usuario_email" id="usuario_email" placeholder="Email do usuário" required>
            <label for="usuario_senha">Senha</label>
            <input type="password" name="usuario_senha" id="usuario_senha" placeholder="Senha do usuário" required>
            <label for="usuario_telefone">Telefone</label>
            <input type="text" name="usuario_telefone" id="usuario_telefone" placeholder="telefone do usuário" required>
            <div class="clear"></div>    
            <div class="metade esquerda">
                <label for="unidade_id">Unidade</label>
                <select name="unidade_id" id="unidade_id">
                    @foreach($unidades as $unidade)
                        <option value="{{ $unidade->unidade_id }}">{{  $unidade->unidade_nome  }}</option>
                    @endforeach
                </select>
            </div>
            <div class="metade direita">
                <label for="cargo_id">Cargo</label>
                <select name="cargo_id" id="cargo_id">
                    @foreach($cargos as $cargo)
                        <option value="{{ $cargo->cargo_id }}">{{  $cargo->cargo_nome  }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="usuario_nivel">Nível</label>
                <select name="usuario_nivel" id="usuario_nivel">
                    <option value="1">Administrador</option>
                    <option value="2">Colaborador</option>
                </select>
            </div>
            <div class="metade direita">
                <label for="usuario_status">Ativo ?</label>
                <select name="usuario_status" id="usuario_status">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <div class="clear"></div>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar usuário <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-usuario" action="{{ route('colaboradores.store') }}" method="post">
            <input type="hidden" name="e_usuario_id" id="e_usuario_id" value="">
            <label for="e_usuario_nome">Nome</label>
            <input type="text" name="e_usuario_nome" id="e_usuario_nome" placeholder="Nome do usuário" required>
            <label for="e_usuario_email">Email</label>
            <input type="text" name="e_usuario_email" id="e_usuario_email" placeholder="Email do usuário" required>            
            <label for="e_usuario_senha">Senha</label>
            <input type="password" name="e_usuario_senha" id="e_usuario_senha" placeholder="Senha do usuário" required>
            <label for="e_usuario_telefone">Telefone</label>
            <input type="text" name="e_usuario_telefone" id="e_usuario_telefone" placeholder="Telefone do usuário" required>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="e_unidade_id">Unidade</label>
                <select name="e_unidade_id" id="e_unidade_id">
                    @foreach($unidades as $unidade)
                        <option value="{{ $unidade->unidade_id }}">{{  $unidade->unidade_nome  }}</option>
                    @endforeach
                </select>
            </div>
            <div class="metade direita">
                <label for="e_cargo_id">Cargo</label>
                <select name="e_cargo_id" id="e_cargo_id">
                    @foreach($cargos as $cargo)
                        <option value="{{ $cargo->cargo_id }}">{{  $cargo->cargo_nome  }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="e_usuario_nivel">Nível</label>
                <select name="e_usuario_nivel" id="e_usuario_nivel">
                    <option value="1">Administrador</option>
                    <option value="2">Colaborador</option>
                </select>
            </div>
            <div class="metade direita">
                <label for="e_usuario_status">Ativo ?</label>
                <select name="e_usuario_status" id="e_usuario_status">
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
    $("#e_usuario_telefone, #usuario_telefone").mask("(00) 00000-0000");

    function carregarLista(){
        $("#usuarios .list-body").load("users-lista", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Erro: " + xhr.status + ": " + xhr.statusText, 2000);
            }
        });
    } carregarLista();

    $(".criar").click(function(){
        $("#lateral, #criar").addClass("active");
    });
    
    $("#form-criar-usuario").submit(function(e){
        e.preventDefault();
        $("#form-criar-usuario button").prop('disabled', true);
        criar();
    });
    
    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        usuario_id = $(this).attr("data-id");
        consultar(usuario_id);
    });
    
    $("#form-editar-usuario").submit(function(e){
        e.preventDefault();
        $("#form-editar-usuario button").prop('disabled', true);
        editar();
    });

    $(document).on("click", ".deletar", function(){
        var usuario_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar este usuário ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(usuario_id);
        });
    });

    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });

    function criar(){
        var form = new FormData($("#form-criar-usuario")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'colaboradores',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar usuário!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-usuario")[0].reset();
                $("#form-criar-usuario button").prop('disabled', false);
                criaAlerta(0, "Usuário criado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(usuario_id){
        request = $.ajax({
            url: 'colaboradores/' + usuario_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $('#form-editar-usuario input[name="e_usuario_id"]').val(response.id);
            $('#form-editar-usuario input[name="e_usuario_nome"]').val(response.name);
            $('#form-editar-usuario input[name="e_usuario_email"]').val(response.email);
            $('#form-editar-usuario input[name="e_usuario_endereco"]').val(response.endereco);
            $('#form-editar-usuario input[name="e_usuario_rua"]').val(response.rua);
            $('#form-editar-usuario input[name="e_usuario_cidade"]').val(response.cidade);
            $('#form-editar-usuario input[name="e_usuario_telefone"]').val(response.telefone);
            $('#form-editar-usuario #e_usuario_status option[value="'+response.status+'"]').prop("selected", true);
            $('#form-editar-usuario #e_usuario_nivel option[value="'+response.nivel+'"]').prop("selected", true);
            $('#form-editar-usuario #e_unidade_id option[value="'+response.unidade_id+'"]').prop("selected", true);
            $('#form-editar-usuario #e_cargo_id option[value="'+response.cargo_id+'"]').prop("selected", true);
        });
    }

    function editar(){
        var form = new FormData($("#form-editar-usuario")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'colaboradores',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar usuario!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-usuario")[0].reset();
                $("#form-editar-usuario button").prop('disabled', false);
                criaAlerta(0, "Usuário atualizado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(usuario_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'colaboradores/' + usuario_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar usuario!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Usuário deletado com sucesso!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 2000);
                carregarLista();
            }else{
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Este usuário possui turmas atreladas a ele, remova suas turmas primeiro!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 5000);
            }
        });
    }

</script>

