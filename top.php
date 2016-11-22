<?php 

@session_start();



//bloque para impedir doble sesion
  $query='';
  $usuario=$this->session->userdata('usua');
  $id_sesion=@$_SESSION['simark'];
  $sql= "SELECT * FROM _usuarios_permisos where username_='$usuario'"; 
  $query = $this->db->query($sql, array($query));
  $vas=$query->result_array();
  //print_r($vas);
// echo "session simarK".$id_sesion.'</br>';  echo "Sesion de DB ".$vas[0]['id_sesion'].'</br>';   
//$confiable=$vas[0]['confiable'];


if ( $id_sesion<>@$vas[0]['id_sesion'] )
{
$this->session->set_userdata('errores','Ya iniciaste sesion en otro equipo');
redirect('/control/login', 'refresh');
echo "Login de nuevo"; exit;
}
//fin de bloque
	

$nivel=$this->session->userdata('leve_u'); //internet explorer y otros no setean la sesion tan pronto como se requiere
//por ende fallan esos navegadores
//to fix errors with few browsers  
 if ($nivel=='')
 { redirect('/control/login', 'refresh'); }


global $level_urgency;

if (!isset($_SESSION['leve_u2']))
{
	$this->session->sess_destroy();
redirect('/control/login', 'refresh');
$_SESSION[]=null;

	}


$permisos=$_SESSION['leve_u2'];
if ($nivel<=1){
$nivel=$_SESSION['leve_u2'];//acceso al tipo de device
//echo $nivel;
	

if (!isset($_SESSION['lunar']))
{
	//echo "2222222222";
	$this->session->sess_destroy();
redirect('/control/login', 'refresh');
$_SESSION[]=null;

	}


    		
				$this->session->set_userdata('usua',$_SESSION['usua2']); 
				$this->session->set_userdata('pas', $_SESSION['pass2'] );
				$this->session->set_userdata('u_validated',1); 
	$this->session->set_userdata('leve_u',$_SESSION['leve_u2'] ); //esto lee header.php si esta seteado, si no, piña!!, son los permisos de usuario de 1 a 63 en binario
				$this->session->set_userdata('level_gui', $_SESSION['level_gui'] );
				$this->session->set_userdata('lunar', $_SESSION['lunar'] );

				$_SESSION['pass2']='';


}
if ($nivel>=1)
{
$level_gui=$this->session->userdata('level_gui');	
//echo $_SESSION['level_gui'];

}
else
{

$this->session->sess_destroy();
redirect('/control/login', 'refresh');

}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" href="<?php echo  base_url() ?>css/default.css" rel="stylesheet" />  

	<link href="<?php echo  base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    	<link href="<?php echo  base_url() ?>css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo  base_url() ?>css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo  base_url() ?>css/style.css" rel="stylesheet">
 
    
    <script type="text/javascript">
var ruta_images ="<?php echo  base_url() ?>js/images2/";
 </script>


  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
  


    <!-- SCRIPT 
    ============================================================-->  
    <script src="<?php echo  base_url() ?>js/jquery.js"></script>
    <script src="<?php echo  base_url() ?>js/bootstrap.min.js"></script>


 <!--HEADER ROW-->
  <div id="header-row">
    <div class="container">
      <div class="row">
              <!--LOGO-->
              <div class="span3"><a class="brand" href="http://www.multimensaje.com"><img src="../../../img/logo.png"/></a>
              
                <?php 

$cliente=$this->session->userdata('usua');
echo $cliente;
 ?> 
  <?php      echo anchor('control/perfil',' Mi Perfil')  ?> |  <?php  
  
   $sql= "select creditos_restantes as a,mensaje from  _usuarios_permisos,config  where username_='$cliente'   "; 
       $query = $this->db->query($sql, array($query));	
	   	$vas=$query->result_array();	
		
		echo $queda=$vas[0]['a'];
  ?>
  créditos </strong>|
  <?php      echo anchor('control/close',' Cerrar_sesi&oacute;n');
echo  $vas[0]['mensaje'];
    ?>
  
  </div>
              <!-- /LOGO -->

            <!-- MAIN NAVIGATION -->  
              <div class="span9">
                <div class="navbar  pull-right">
                  <div class="navbar-inner">
                    <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
                    <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
                        <li class="active"><a href="index">Inicio</a></li>
                        <li><?php      echo anchor('control/grupos',' Grupos')  ?></li>
     <li><?php      echo anchor('control/index2',' Envia SMS')  ?></li>
      <li><?php      echo anchor('control/report',' Reportes')  ?></li>
      
      <li><?php      echo anchor('control/keywords','Palabras Clave')  ?></li>
       <li><?php      echo anchor('control/myInbox',' Recibidos')  ?></li>     
    
      
      
         <?php if ($nivel>2){ ?>
             <li><?php      echo anchor('control/admin',' Admin')  ?></li>   
        <?php } ?>
             
     <li><?php      echo anchor('control/cola',' En cola')  ?></li>

     <li><?php      echo anchor('control/help',' Ayuda')  ?></li>
     <li><?php      echo anchor('control/cargar',' Recargar')  ?></li>

                        
                <?php if( 1==16){ ?>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acerca <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                  <li></li>
                                  <li></li>
                                  <li></li>
                            </ul>
                        <?php } ?>                            
                     
                 
                    </ul>
                  </div>

                  </div>
                </div>
              </div>
            <!-- MAIN NAVIGATION -->  
      </div>
    </div>
  </div>
  <!-- /HEADER ROW -->
