<?php
    include_once("templates/header.php");
?>
    <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title">Criar contato</h1>
        <!-- O atributo action corresponde ao arquivo que vou processar as informações  -->
        <form id="create-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
            <!-- type="hidden" significa que vai ser oculto na página. Pra que esse input do tipo hidden ?
            Esse input vai guiar o projeto lá no process da seguinte maneira: o que vou fazer com o envio desse formulário ?
            Esse guia vai ser através dos valores de create, update, delete, etc. 
            O process vai conseguir se achar por meio de um if, ou seja,  
            a operação a ser realizada vai ser decidida através desse if em cojunto com o value(create, update, delete, etc).
            -->
            <!-- Em relação à captura dos valores, o back-end vai se orientar através do atributo name -->
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required />
            </div>
            <div class="form-group">
                <label for="phone">Telefone do contato:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required />
            </div>
            <div class="form-group">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

<?php
    include_once("templates/footer.php");
?>