<?php
?>

<div class="form-group">
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-log-12">
        <h3><span class="glyphicon glyphicon-cog"></span> Mantenimiento de Usuarios:</h3>
    </div>
</div>
</div>
				
<!--MODAL REGISTRAR USUARIOS-->
<div class="modal fade bs-example-modal-lg" id="modalagregar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"> <!--MODAL REGISTRAR USUARIOS-->
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!--ROW USUARIOS-->
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
			      <div class="panel-heading"><i class="fa fa-user fa-2x" aria-hidden="true"></i> Registro de Nuevo Usuario</div>
              <div class="panel-body">

                <!--MENSAJE DE REGISTRO CORRRECTAMENTE-->
                <div class="alert bg-success" role="alert" style="display:none" id="correcto">
                  <svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg>Usuario Registrado <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
                <!--MENSAJE DE REGISTRO CORRRECTAMENTE-->
			          <form class="form-horizontal" action="../controller/usuarios/controller_registrar_usuario1.php" method="POST">
                <fieldset>
                <!-- tipo de usuario input-->
		<div class="form-group">
                  <label class="col-md-3 control-label" for="">Tipo de Usuario:</label>
                  <div class="col-md-4">
                    <select class="form-control" id="optionuser" name="optionuser" >
                      <option value="">Seleccione...</option>
                      <option value="1">Administrador</option>
                      <option value="2">Responsable Ventas</option>
                    </select>   
                  </div>
		</div>

                  <!-- nombre usuario input-->
					       <div class="form-group">
                    <label class="col-md-3 control-label" for="">Nombre de Usuario:</label>
                    <div class="col-md-4">
						          <input id="nombre_user" name="nombre_user" type="text" placeholder="Ingrese Nombre de Usuario" class="form-control">
                    </div>
					       </div>

                  <!-- contraseña input-->
					       <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Contraseña:</label>
                    <div class="col-md-4">
						          <input id="contra_user" name="contra_user" type="text" placeholder="Ingrese Contraseña" class="form-control">
                    </div>
					       </div>

                  <!-- email input-->
					      <div class="form-group">
                  <label class="col-md-3 control-label" for="name">E-Mail:</label>
                  <div class="col-md-4">
						        <input id="email_user" name="email_user" type="text" placeholder="Ingrese E-Mail"  class="form-control">
                  </div>
					     </div>

					       <!-- estado input-->
					     <div class="form-group">
                  <label class="col-md-3 control-label" for="">Estado:</label>
                  <div class="col-md-4">
                    <select class="form-control" id="optionestado" name="optionestado">
                      <option value="">Seleccione...</option>
                      <option value="Activo">Activo</option>
                      <option value="Inactivo">Inactivo</option>
                    </select>   
                  </div>
                </div>			     
              </fieldset>
              </form>
                                
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
              <button type="button" id="agregar_usuario" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
            </div>
          </div>
        </div>
	    </div>
    </div><!--/.row--> <!--ROW USUARIOS-->
  </div>
</div>
</div>  <!--MODAL REGISTRAR USUARIOS-->

<div class="row"> <!--BUSCAR USUARIOS-->
  <div class="col-lg-12">
    <div class="panel panel-default">	
      <div class="panel-heading"><i class="fa fa-users fa-2x" aria-hidden="true"></i> Usuarios</div>
        <div class="panel-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
          <a target="_blank" href="" class="btn btn-danger">Exportar a PDF</a>
          <form class="form-horizontal">
            <fieldset>
              <!-- Name input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="name"><i class="fa fa-search" aria-hidden="true"></i> Buscar Usuarios:</label>
                <div class="col-md-4">
                  <input id="" name="name" onkeyup="" type="text" placeholder="Ingrese Nombre o Email" class="form-control">
                </div>
              </div><br>
            <div class="cargartodo">
                <div id="lista"></div> 
                <div id="paginador" class="text-center"></div>
            </div>
            </fieldset>
            </form>     
        </div>
    </div>
  </div>
</div><!--/.row-->	

<!--MODAL MODIFICAR USUARIOS-->

<!--MODAL MODIFICAR USUARIO-->

<!--MODAL ELIMINAR USUARIOS-->
  
     
<style type="text/css">
    .grande{
        width: 100%;
    }
</style>



