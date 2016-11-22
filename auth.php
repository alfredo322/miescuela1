<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><script type="text/JavaScript" src="<?php echo  base_url() ?>css/cor/curvycorners.js"></script> 

<link href="<?php echo  base_url() ?>css/default.css"; rel="stylesheet" type="text/css" /> 
<style type="text/css">
<!--

.input {
    border: 1px solid #006;
    background: #ffc;
}

.input2 { background-color: #06F; color: #FFF; margin-left:150px 


}


.button {
    border: 1px solid #006; 
    background: #9cf;
}
label {
    display: block;
    width: 150px;
    float: left;
    margin: 2px 4px 6px 4px;
    text-align: right;
}
br { clear: left; }


.Estilo1 {
	font-size: xx-small;
	color: #FF0000;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: x-small;
}
body {
	background-image: url(<?php echo  base_url() ?>/css/blue2.jpg);
	margin-left: 200px; margin-top:50px;
}

#myBox {
  margin: 0.5in auto;
  color: #fff;
  width: 580px;
  height: 300px; padding-left:20px; padding-top: 10px; 

  text-align: left;

  background-image: url(<?php echo  base_url() ?>/css/blue3.jpgb);   
  background-repeat: no-repeat;
  
  
}
h1 {
	font-size: medium;
}
.centr {
	text-align: left;
	font-size:12px;
	color: #F00;
}


.titu1 {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	font-style: normal;
	line-height: normal;
	font-weight: lighter;
}


-->
</style>
<script type="text/JavaScript">
exit;
  curvyCorners.addEvent(window, 'load', initCorners);

  function initCorners() {
    var settings = {
      tl: { radius: 20 },
      tr: { radius: 20 },
      bl: { radius: 20 },
      br: { radius: 20 },
      antiAlias: true
    }
    curvyCorners(settings, "#myBox");
  }

</script>
<h1 class="centr">Su IP:
  <?php 
  
  
  $langdefault='es';
	IF (@$_REQUEST['lang']=='')
		{
			$_REQUEST['lang'] = $langdefault;
			if (@$_GET['lang']<>''){ $_REQUEST['lang']=$_GET['lang']; }
			if (@$_POST['lang']<>''){ $_REQUEST['lang']=$_POST['lang']; }		
			
			}
			
					
	$inc='language/'.$_REQUEST['lang'].'.php';	
	if (file_exists($inc)){	include($inc);}else 
	{$_REQUEST['lang'] = $langdefault;$inc='language/'.$_REQUEST['lang'].'.php';include($inc);	
	
	}

  
   echo $_SERVER['REMOTE_ADDR'];  ?>
</h1>
<h1 class="centr">&nbsp;</h1>
<div   class="shadow1"   >
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0"  >
    <tr>
    <td width="27%"  valign="top" background="<?php $logo_url='';$last_msg=''; echo  base_url() ?>css/bg3.gif"  ">
    <span style="font-family: Arial, Helvetica, sans-serif; color: #FFFFFF"><span class="text"><span class="comment2">
      <?php if ($logo_url<>''){ ?>
      <img src="<?php echo $logo_url;  ?>"alt="<?php echo $logo_url; ?>" hspace="2" vspace="2" border="0"  longdesc="Facil Help Desk" />
      <?php } echo $last_msg;?>
    </span></span></span></td><td width="73%"  valign="top" background="<?php  echo  base_url() ?>css/bg3.gif" ><div align="center" >
      <h1 align="left">Autenticación </span></h1>
    </div></td>
  </tr>
  <tr  >
    <td  background="<?php  echo  base_url() ?>/css/bg2.gif"  colspan="2"  style="padding:8; padding-top:15px; padding-left:20px;  font-size: small; color: #666;"><p>
      <?php  echo form_open('panel/login');  ?>	  
	  
	  <?php  echo form_label('Usuario:','name') ?>
      <input name="name"  style=" margin-left:12px"  class="input" type="text" id="name" value="<?php  echo get_cookie('Phtickets_username',TRUE); ?>" size="20" />
    </p>
      <p>
        <?php  echo form_label('Password:','password') ?>
<input name="nivel2" type="hidden" id="nivel2" value="0" />
<input name="password"  style=" margin-left:9px" type="password" class="input" id="password" value="<?php  $pax=get_cookie('Phtickets_password',TRUE);
echo $pax;
 ?>" size="20" />
      </p>
      <p>
        <label>Idioma:
<select name="lang" id="lang" >
<option value="es">Es</option>
<option value="en">En</option>
</select>
</label>
      </p>
      <p>
      <input name="remember" type="checkbox" id="remember"  value="10"<?php
$tt=get_cookie('recordar_borXSD456');
		   if (  $tt<>'' )
		   {		   
		   echo 'checked';
		   }
		   ?> />
        <span class="content"><?php echo 'Mantener la sesión'; ?></span></p>
      <p><span class="content"><br />
        </span>
        <span class="Estilo1">
          <?php 
echo $this->session->userdata('errores');
?>
        </span></p>
      <p>
        <input   name="Submit" type="submit" class="input2" value="Iniciar Sesión" />
<input name="login" type="hidden" id="login" value="1" />
        <span class="menu5"></span></p>
<p class="text">&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="2"  valign="top" bgcolor="#F5F5F5" class="mio"  style="padding:0"><div id="oFilterDIV" style="position: relative; height:10px; padding:1px; font:10pt verdana; background:<?php echo '#FFFFFF'; ?>;
	  filter:progid:DXImageTransform.Microsoft.Alpha( Opacity=90, FinishOpacity=30, Style=2, StartX=40,  FinishX=90, StartY=50, FinishY=100);
left: 0px;"><span class="text" style="color: #FFFFFF"><span style="font-family: Arial, Helvetica, sans-serif; color: #FFFFFF"> </span></span></div></td>
  </tr>
  <tr >
    <td height="38" colspan="2"  background="<?php echo   base_url() ?>css/bg3.gif"  style="padding:0;-moz-border-radius: 0em 0em 1em 1em; padding-left:5px  "><p>Esqueleto de CI</p><div class="copyright"></div></td>
  </tr>
</table>
</div>
<?php echo form_close(); ?> 