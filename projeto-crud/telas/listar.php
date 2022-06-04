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
            $partes = explode(';', $cadacontato);    // a função explode quebra uma string em várias partes
            
            echo '<br>';
                echo '<td>' . $partes[0] . '</td>';
                echo '<td>' . $partes[1] . '</td>';
                echo '<td>' . $partes[2] . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>