<div class="title-pg">
    <h1 class="title-pg">Lista de itens</h1>
</div>
<div class="content-din bg-white">

    <table class="table table-striped">
        <tr>
            <td>Nome</td>
            <td>Email</td>
            <td>Telefone</td>
            <th width="100">Ação</th>
        </tr>
        <?php
        for($i = 1; $i <=4; $i++){
        ?>
        <tr>
            <td>Nome completo</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>
                <a href="" color="Black" class="editar">Editar</a>
                <a href="" class="apagar">Apagar</a>
            </td>
        </tr>
        <?php }?>
    </table>

    <nav aria-label="Navegação de página exemplo">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Anterior">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Anterior</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Próximo">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Próximo</span>
                </a>
            </li>
        </ul>
    </nav>


</div><!--Content din-->