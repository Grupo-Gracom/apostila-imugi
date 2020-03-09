@include('layouts/header/header')

<main>
    <div id="turmas" class="box">
        <h3>
            Turmas
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Nova turma<span></div>
        </h3>
        <ul class="list-head">
            <li>
                <div><h6 class="mini-title upper">#</h6></div>
                <div><h6 class="mini-title upper">Nome</h6></div>
                <div><h6 class="mini-title upper">Horário</h6></div>
                <div><h6 class="mini-title upper">Período</h6></div>
                <div><h6 class="mini-title upper">Iniciou em</h6></div>
                <div><h6 class="mini-title upper">Termina em</h6></div>
                <div><h6 class="mini-title upper">Curso</h6></div>
                <div><h6 class="mini-title upper">Professor</h6></div>
                <div><h6 class="mini-title upper">Unidade</h6></div>
                <div><h6 class="mini-title upper">Ativa ?</h6></div>
                <div><h6 class="mini-title upper">Ações</h6></div>
            </li>
        </ul>
        <ul class="list-body loading active"></ul>
    </div>
</main>

<div id="lateral" class="suave">
    <div class="overlay suave"></div>
    <div id="criar" class="content suave">
        <h4 class="barlow">Criar turma <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-turma" action="{{ route('turmas.store') }}" method="post" enctype="multipart/form-data">
            <label for="turma_nome">Nome</label>
            <input type="text" name="turma_nome" id="turma_nome" placeholder="Nome da turma" required>
            <label for="turma_descricao">Descrição</label>
            <textarea name="turma_descricao" id="turma_descricao" placeholder="Descreva está nova turma" required></textarea>
            <div class="clear" style="margin-top:16px;"></div>
            <div class="metade esquerda">
                <label for="turma_foto">Foto perfil</label>
                <input type="file" name="turma_foto" id="turma_foto">
            </div>
            <div class="metade direita">
                <label for="turma_capa">Capa</label>
                <input type="file" name="turma_capa" id="turma_capa">
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="turma_data_inicio">Data de início</label>
                <input type="date" name="turma_data_inicio" id="turma_data_inicio" required>
            </div>
            <div class="metade direita">
                <label for="turma_data_fim">Data de termino</label>
                <input type="date" name="turma_data_fim" id="turma_data_fim" required>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="horario_id">Horário</label>
                <select name="horario_id" id="curso_id">
                    @foreach($horarios as $horario)
                        <option value="{{ $horario->horario_id }}">
                            <?php
                                $dias = str_replace('[','', $horario->horario_dias);
                                $dias = str_replace(']','', $dias);
                                $dias = str_replace('"','', $dias);
                                $dias = str_replace(',',', ', $dias);
                                echo date('H:i', strtotime($horario->horario_inicio)).' - '.date('H:i', strtotime($horario->horario_fim)).' '.$dias;
                            ?>
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="metade direita">
                <label for="turma_periodo">Período</label>
                <select name="turma_periodo" id="turma_periodo">
                    <option value="Manhã">Manhã</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="curso_id">Curso</label>
                <select name="curso_id" id="curso_id">
                    @foreach($cursos as $curso)
                        <option value="{{ $curso->curso_id }}">{{ $curso->curso_nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="metade direita">
                <label for="professor_id">Professor</label>
                <select name="professor_id" id="professor_id">
                    @foreach($professores as $professor)
                        <option value="{{ $professor->id }}">{{ $professor->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="unidade_id">Unidade</label>
                <select name="unidade_id" id="unidade_id">
                    @foreach($unidades as $unidade)
                        <option value="{{ $unidade->unidade_id }}">{{ $unidade->unidade_nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="metade direita">
                <label for="turma_status">Ativa ?</label>
                <select name="turma_status" id="turma_status">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <div class="clear"></div>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4 class="barlow">Editar turma <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-turma" action="{{ route('turmas.store') }}" method="post">
            <input type="hidden" name="e_turma_id" id="e_turma_id" value="">
            <label for="e_turma_nome">Nome</label>
            <input type="text" name="e_turma_nome" id="e_turma_nome" placeholder="Nome da turma" required>
            <label for="e_turma_descricao">Descrição</label>
            <textarea name="e_turma_descricao" id="e_turma_descricao" placeholder="Descreva está nova turma" required></textarea>
            <div class="clear" style="margin-top:16px;"></div>
            <div class="metade esquerda">
                <label for="e_turma_foto">Foto perfil</label>
                <input type="file" name="e_turma_foto" id="e_turma_foto">
            </div>
            <div class="metade direita">
                <label for="e_turma_capa">Capa</label>
                <input type="file" name="e_turma_capa" id="e_turma_capa">
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="e_turma_data_inicio">Data de início</label>
                <input type="date" name="e_turma_data_inicio" id="e_turma_data_inicio" required>
            </div>
            <div class="metade direita">
                <label for="e_turma_data_fim">Data de termino</label>
                <input type="date" name="e_turma_data_fim" id="e_turma_data_fim" required>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="e_turma_horario">Horário</label>
                <input type="text" name="e_turma_horario" id="e_turma_horario" placeholder="" required>
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
                <label for="e_professor_id">Professor</label>
                <select name="e_professor_id" id="e_professor_id">
                    @foreach($professores as $professor)
                        <option value="{{ $professor->id }}">{{ $professor->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="metade direita">
                <label for="e_unidade_id">Unidade</label>
                <select name="e_unidade_id" id="e_unidade_id">
                    @foreach($unidades as $unidade)
                        <option value="{{ $unidade->unidade_id }}">{{ $unidade->unidade_nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="e_turma_status">Ativa ?</label>
                <select name="e_turma_status" id="e_turma_status">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="adicionar" class="content suave">
        <h4 class="barlow">Adicionar alunos <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-pesquisar-alunos">
            <label for="cliente_busca">Pesquisar cliente</label>
            <input type="text" name="cliente_busca" id="cliente_busca" required>
            <input type="hidden" name="cliente_excecoes" id="cliente_excecoes">
            <input type="hidden" name="cliente_unidade_id" id="cliente_unidade_id" value="">
            <button type="submit" class="click suave">Procurar <i class="material-icons">search</i></button>
        </form>
        <form id="form-adicionar-alunos">
            <input type="hidden" name="a_turma_id" id="a_turma_id" value="">
            <div id="clientes" class="turmas">
                <ul class="list-head">
                    <li>
                        <div><h6 class="mini-title upper">#</h6></div>
                        <div><h6 class="mini-title upper">id</h6></div>
                        <div><h6 class="mini-title upper">Nome</h6></div>
                        <div><h6 class="mini-title upper">Matrícula</h6></div>
                    </li>
                </ul>
                <ul class="list-body loading"></ul>
            </div>
            <button type="submit" class="click suave">Adicionar <i class="material-icons">person_add</i></button>
            <div id="alunos">
                <ul class="list-head">
                    <li>
                        <div><h6 class="mini-title upper">#</h6></div>
                        <div><h6 class="mini-title upper">id</h6></div>
                        <div><h6 class="mini-title upper">Aluno</h6></div>
                        <div><h6 class="mini-title upper">Ações</h6></div>
                    </li>
                </ul>
                <ul class="list-body loading"></ul>
            </div>
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

    $(document).on("click", ".checkbox", function(){
        if($(this).find("input").prop("checked")){
            $(this).addClass("active");
        }else{
            $(this).removeClass("active");
        }
    });

    function carregarLista(){
        $("#turmas .list-body").load("turmas-lista", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Erro: " + xhr.status + ": " + xhr.statusText, 2000);
            }
        });
    } carregarLista();
    
    function carregarAlunos(turma_id){
        $("#alunos .list-body").load("turma-lista/"+ turma_id, function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
                var excecoes = [];
                $("#alunos .list-body li").each(function(){
                    excecoes.push($(this).find("div:nth-child(2)").text());
                });
                $("#cliente_excecoes").val(excecoes);
                if($("#cliente_busca").val() != ''){
                    buscarLista($("#cliente_busca").val(), $("#cliente_unidade_id").val(), $("#cliente_excecoes").val());
                }
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Erro: " + xhr.status + ": " + xhr.statusText, 2000);
            }
        });
    }
    
    function buscarLista(busca, unidade, excecoes){
        $("#clientes .list-body").load("clientes-busca/"+ busca + '/' + unidade, function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
                var ids = excecoes.split(',');
                $("#clientes .list-body li").each(function(){
                    var id = parseInt($(this).find("div").text());
                    ids.forEach( e => {
                        if(id == parseInt(e)){
                            $('#clientes .list-body li[data-item="'+id+'"]').remove();
                        }
                    });
                });
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Erro ao carregar lista ", 2000);
            }
        });
    }

    $(".criar").click(function(){
        $("#lateral, #criar").addClass("active");
    });
    
    $("#form-criar-turma").submit(function(e){
        e.preventDefault();
        if(CKEDITOR.instances.turma_descricao.getData() == ''){
            criaAlerta(0, "A descrição não pode estar vazia!", 5000);
            $(this).find('button').prop('disabled', false);
        }else{
            criar();
        }
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        turma_id = $(this).attr("data-id");
        consultar(turma_id);
    });

    $("#form-editar-turma").submit(function(e){
        e.preventDefault();
        $("#form-editar-turma button").prop('disabled', true);
        editar();
    });

    $(document).on("click", ".deletar", function(){
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar esta turma ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta").attr("modelo","turma");
        $("#alerta .confirmar").attr("turma_id", $(this).attr("data-id"));
    });

    $(document).on("click", ".deletar-aluno", function(){
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente remover este aluno ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta").attr("modelo","aluno");
        $("#alerta .confirmar").attr("aluno_id", $(this).attr("data-id"));
    });
    
    $("#alerta .confirmar").click(function(){
        $(this).prop('disabled', true);
        var modelo = $("#alerta").attr("modelo");
        if(modelo == "turma"){
            deletar($(this).attr("turma_id"));
            $("#alerta.turma").removeClass("turma");
        }else{
            deletarAluno($(this).attr("aluno_id"), $("#a_turma_id").val());
            $("#alerta.aluno").removeClass("aluno");
        }
    });

    $(document).on("click",".adicionar", function(){
        $("#lateral, #adicionar").addClass("active");
        turma_id = $(this).attr("data-id");
        unidade_id = $(this).attr("unidade-id");
        $("#form-adicionar-alunos #a_turma_id").val(turma_id);
        $("#form-pesquisar-alunos #cliente_unidade_id").val(unidade_id);
        carregarAlunos(turma_id);
    });
    
    $("#form-pesquisar-alunos").submit(function(e){
        e.preventDefault();
        if($("#cliente_busca").val().length > 3){
            $("#clientes .list-body").addClass("active");
            buscarLista($("#cliente_busca").val(), $("#cliente_unidade_id").val(), $("#cliente_excecoes").val());
        }
    });
    
    $("#form-adicionar-alunos").submit(function(e){
        e.preventDefault();
        $(this).find("button").prop("disabled", true);
        adicionarAlunos();
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
        $("#clientes .list-body").empty();
        $("#form-pesquisar-alunos")[0].reset();
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
        $("#alerta .confirmar").prop('disabled', false);
    });

    function criar(){
        var form = new FormData($("#form-criar-turma")[0]);
        form.append("turma_descricao", CKEDITOR.instances.turma_descricao.getData());
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'turmas',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar turma!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-turma")[0].reset();
                $("#form-criar-turma button").prop('disabled', false);
                criaAlerta(0, "Turma criada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(turma_id){
        request = $.ajax({
            url: 'turmas/' + turma_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $('#form-editar-turma input[name="e_turma_id"]').val(response.turma_id);
            $('#form-editar-turma input[name="e_turma_nome"]').val(response.turma_nome);
            CKEDITOR.instances.e_turma_descricao.setData(response.turma_descricao);
            $('#form-editar-turma input[name="e_turma_data_inicio"]').val(response.turma_data_inicio);
            $('#form-editar-turma input[name="e_turma_data_fim"]').val(response.turma_data_fim);
            $('#form-editar-turma input[name="e_turma_horario"]').val(response.turma_horario);
            $('#form-editar-turma #e_turma_status option[value="'+response.turma_status+'"]').prop("selected", true);
            $('#form-editar-turma #e_curso_id option[value="'+response.curso_id+'"]').prop("selected", true);
            $('#form-editar-turma #e_professor_id option[value="'+response.professor_id+'"]').prop("selected", true);
            $('#form-editar-turma #e_unidade_id option[value="'+response.unidade_id+'"]').prop("selected", true);
        });
    }
    
    function editar(){
        var form = new FormData($("#form-editar-turma")[0]);
        form.append("e_turma_descricao", CKEDITOR.instances.e_turma_descricao.getData());
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'turmas',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar turma!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-turma")[0].reset();
                $("#form-editar-turma button").prop('disabled', false);
                criaAlerta(0, "Turma atualizada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(turma_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'turmas/' + turma_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar turma!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Turma deletada com sucesso!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 2000);
                carregarLista();
            }else{
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Esta turma possui alunos atrelados a ela, remova seus alunos primeiro!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 5000);
            }
        });
    }

    function deletarAluno(aluno_id, turma_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'aluno/' + aluno_id + '/' + turma_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao remover aluno!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Aluno removido com sucesso!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 2000);
                carregarAlunos($("#a_turma_id").val());
            }
        });
    }

    function adicionarAlunos(){
        var form = new FormData($("#form-adicionar-alunos")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'turmas',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao adicionar alunos!",5000);
            }
        });
        request.done(function(response){
            if(response == "3"){
                carregarAlunos(form.get("a_turma_id"));
                $("#form-adicionar-alunos button").prop('disabled', false);
                criaAlerta(0, "Aluno(s) adicionado(s) com sucesso!",5000);
            }
        });
    }
    
    CKEDITOR.replace( 'turma_descricao', {
        height: 400,
        filebrowserUploadUrl: "{{route('turmaCarregarImagem', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace( 'e_turma_descricao', {
        height: 400,
        filebrowserUploadUrl: "{{route('turmaCarregarImagem', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    

</script>

