@include('layouts/gestao/header/header')

<main>
    <div class="box">
        <h3>
            Frequência
        </h3>
        <table id="frequencia" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Aluno</th>
                <th>Frequência</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
            </tr>
        </tbody>
    </table>
        
    </div>
</main>

<script>
  $(document).ready( function () {
    $('#frequencia').DataTable();
} );
</script>






