<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<div class="form-criar">
    <h1>Editar usuário</h1>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id;?>"/>
        <label>Nome:</label></br>
        <input type="text" name="nome" placeholder="Nome completo" value="<?php print $row->nome; ?>"/></br>
        <label>Email:</label></br>
        <input type="email" name="email" placeholder="Seu email" value="<?php print $row->email; ?>"/></br>
        <label>Data de Nascimento:</label></br>
        <input type="date" name="data_nasc" value="<?php print $row->data_nascimento; ?>"/></br>
        <label>Senha:</label></br>
        <input type="password" name="senha" placeholder="Sua senha" value="<?php print $row->senha; ?>"/></br>
        <button type="submit">Enviar</button>
    </form>
</div>