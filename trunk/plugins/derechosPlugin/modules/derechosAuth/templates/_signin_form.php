
<form action="<?php echo url_for('@derechos_signin') ?>" method="post">
    <br>
    <div id="LoginData">
        <table id="sf_admin_container">
            <tbody>
                <?php echo $form ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="<?php echo('Entrar') ?>" class="small button green"/>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</form>