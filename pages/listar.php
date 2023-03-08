<div class="listar">
    <?php
        $sql = "SELECT * FROM usuarios";

        $res = $conn->query($sql);

        $qtd = $res->num_rows;

        if($qtd > 0){
            print "<table>";
            print "<tr>";
            print   "<th>#</th>";
            print   "<th>Nome</th>";
            print   "<th>Email</th>";
            print   "<th>Data de Nascimento</th>";
            print   "<th>Opções</th>";
            print "</tr>";
            while($row = $res->fetch_object()){
                print "<tr>";
                print "<td>".$row->id."</td>";
                print "<td>".$row->nome."</td>";
                print "<td>".$row->email."</td>";
                print "<td>".$row->data_nascimento."</td>";
                print "<td>
                        <button onclick=\"location.href='?page=editar&id=".$row->id."'\" class='btn-editar'>Editar</button>
                        <button onclick=\"if(confirm('Deseja mesmo excluir?')){location.href='?page=salvar&acao=deletar&id=".$row->id."'}else{false}\" class='btn-excluir'>Excluir</button></td>";
                print "</tr>";
            }
            print "</table>";
        }
        else{
            print "<p>Nenhum usuário cadastrado</p>";
        }
    ?>
</div>