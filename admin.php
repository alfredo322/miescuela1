<html>
<style type="text/css">
.f {
	font-weight: bold;
}
.v {
	font-weight: bold;
}
</style>
<body>
<p>&nbsp;</p>
<div class="mover">
  <p>Estado de líneas: <span class="f">L1</span>:
    <?php $dformat='h:m:s -   d-m-Y';


echo date($dformat,$f[0]['L1']);
 ?>
    <span class="v">L2: </span>
    <?php $dformat='h:m:s -   d-m-Y';


echo date($dformat,$f[0]['L2']);
 ?>
  </p>
  <p>
    <?php      echo anchor('control/users',' Usuarios')  ?>
    
    | 
    <?php      echo anchor('control/index2/yes',' EnviaSMS aun parado')  ?>|  
    <?php      echo anchor('control/inbox/inbox',' Recibido todo')  ?>

  </p>
      <?php echo form_open('control/admin'); ?>
      <table width="80%" border="0">
        <tr>
          <td width="39%">Estado del servicio de envio de SMS:
            <input name="Activo" type="checkbox" id="Activo" <?php if (@$f[0]['online']==1){echo " checked";  } ?>   value="1">
            <?php  if (@$f[0]['online']==1){echo " Activo";  } ?>
            </td>
          
          <td width="61%">Mensaje superior:
            <input name="mensaje" type="text" id="mensaje" value="<?php  echo $f[0]['mensaje']; ?>" size="50"></td>
        </tr>
      </table>
  <p>
    <?php 
  echo form_submit('mysubmit', 'Ok' );

echo form_close(); ?>
  </p>
</div>
<p>Generado en {elapsed_time} seg.</p>

</body>
</html>