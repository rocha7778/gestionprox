<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once ('../modelo/validar_usuario.php');
validar_user_amd();
?>

<head>

    <script language="javascript" src="../script/submitAjax.js"></script>
    <script language="javascript" src="../script/admin.js"></script> 
    
    
             
        
   
   
</head>

<div class="container">
    <div class=" row">
        <div class="col-md-4 ol-md-offset-4" > </div>

        <div class="col-md-4">


          <form role="form" id="amd_rg_maquina" action= "../controlador/amdCrearMaquina_controller.php"   method="post" >
                <h3 class="text-center"> REGISTRO  <small>MAQUINA</small></h3>

                <div class="form-group">

                    
                    <input type="text" class="form-control"  name="maquina"    placeholder="Nobre Maquina" required autofocus/>

                </div>
                

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>






        </div> <!-- fin class columna -->



    </div> <!-- fin row-->

</div>