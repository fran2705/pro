<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
Login de usuarios con el framework codeIgniter


<!--mostramos los errores del formulario, si los hay-->
<?php echo validation_errors(); ?>
<?php echo form_open('http://localhost/prueba/index.php/verificar/nueva_sesion') ?>
<table>
    <tbody>
    <tr>
        <td>Nombre de usuario:</td>
        <td><input type="text" name="nom" /></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="pass" /></td>
    </tr>
    <tr>
        <td></td>
        <td><input title="Iniciar sesi�n" type="submit" value="Iniciar sesion" /></td>
    </tr>
    </tbody>
</table>
<pre>
<?php echo form_close() ?>
