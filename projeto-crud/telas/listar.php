<h1>Listar Contatos</h1>



<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>telefone</th>
            <th>ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
                // a função explode quebra uma string em várias partes
                foreach ($contatos as $posicao => $cadacontato){
                    $partes = explode (';', $cadacontato);
            
                    echo '<tr>';
                        echo '<td>' . $partes[0] . '</td>';
                        echo '<td>' . $partes[1] . '</td>';
                        echo '<td>' . $partes[2] . '</td>';
                        echo "<td>
                            <a href= '/excluir?id={$posicao}' class='btn btn-danger btn-sm'>Excluir {$posicao}</a>
                            <a href='/editar?id={$posicao}'class='btn btn-warning btn-sm'>Editar</a>
                            </td>";
                    echo '</tr>';
                }
        ?>
    </tbody>
</table>