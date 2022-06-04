<h1>Listar Contatos</h1>



<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>telefone</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($contatos as $cadacontato){
            echo '<br>';
                echo '<td>' . $cadacontato . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>