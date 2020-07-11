<div class="bred">
    <a href="?pag=home" class="bred">Home &nbsp;></a> <a href="?pag=locais" class="bred">Locais</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Lista de locais</h1>
</div>
<div class="content-din bg-white">

    <div class="form-search">
        <form action="" class="form form-inline form-group">
            <input type="text" class="form-control col-6" name="nome" placeholder="Nome">
            <input type="text" class="form-control col-4" name="email" placeholder="Email">
            <button class="btn btn-primary">Pesquisar</button>
        </form>
    </div>

    <div class="class-btn-insert">
        <a href="" class=" btn-insert">
            <span>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                  <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
                </svg>
            </span>
            Cadastrar
        </a>
    </div>

    <table class="table table-striped">
        <tr>
            <td>Local</td>
            <td>Endereço
            </td>
            <td>Telefone</td>
            <th width="200">Ação</th>
        </tr>
        <?php
        for($i = 1; $i <=4; $i++){
            ?>
            <tr>
                <td>Local</td>
                <td>Endereço</td>
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