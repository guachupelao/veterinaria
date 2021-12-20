<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-8 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    {$title}
                   
                </h3>

                {include file="../partials/_mensajes.tpl"}

                {if isset($usuarios) && count($usuarios)}
                    <table class="table table-hover">
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha inicio</th>
                            <th>Fecha termino</th>
                            <th>Direccion IP</th>
                        </tr>
                        {foreach from=$usuarios item=usuario}
                            <tr>
                         
                           
                                 <td>{$usuario.funcionario.nombre}</td>
                                <td>{$usuario.created_at}</td>
                                <td>{$usuario.updated_at}</td>
                            </tr>
                        {/foreach}
                    </table>
                {else}
                    <p class="text-info">No hay funcionarios registrados</p>
                {/if}
            </div>
        </div>
    </div>
</section> <!-- .section -->