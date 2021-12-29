<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-8 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    {$title}
                   
                </h3>

                {include file="../partials/_mensajes.tpl"}

                {if isset($registros) && count($registros)}
                    <table class="table table-hover">
                        <tr>
                            <th>ID usuario</th>
                            <th>Fecha ingreso</th>
                            <th>Fecha salida</th>
                            <th>Direccion IP</th>
                        </tr>
                        {foreach from=$registros item=registro}
                            <tr>
                          
                               <td>
                                     <a href="{$_layoutParams.root}registros/view/{$registro.id}">{$registro.id}</a>
                                </td>
                           
                           
                                <td>{$registro.created_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>
                                <td>{$registro.updated_at|date_format:"%d-%m-%Y %H:%M:%S"}</td>                              
                                <td>{$registro.ip}</td>
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