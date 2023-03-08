<div class="form-criar">
    <h1>Novo usuario</h1>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <label>Nome:</label></br>
        <input type="text" name="nome" placeholder="Nome completo"/></br>
        <label>Email:</label></br>
        <input type="email" name="email" placeholder="Seu email"/></br>
        <label>Data de Nascimento:</label></br>
        <input type="date" name="data_nasc"/></br>
        <label>Senha:</label></br>
        <input type="password" name="senha" placeholder="Sua senha"/></br>
        <button type="submit">Enviar</button>
    </form>
</div>