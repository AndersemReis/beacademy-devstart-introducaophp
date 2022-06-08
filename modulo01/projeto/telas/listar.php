
<div class="container">
    <h1>Contatos Cadastrados</h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($contatos as $contato) {
                echo "<tr>";
                echo "<td>{$contato}</td>";
                echo "<td>{$contato}</td>";
                echo "<td>{$contato}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>