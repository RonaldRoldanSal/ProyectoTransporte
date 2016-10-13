<?php
?>
<div class="form-group">
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-log-12">
        <h3><span class="glyphicon glyphicon-cog"></span> Mantenimiento de Rutas:</h3>
    </div>
</div>
</div>
				
<!--MODAL REGISTRAR USUARIOS-->
<div class="modal fade bs-example-modal-lg" id="modalagregar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"> <!--MODAL REGISTRAR RUTAS-->
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!--ROW USUARIOS-->
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
			      <div class="panel-heading"><i class="fa fa-user fa-2x" aria-hidden="true"></i> Registro de Nueva Ruta</div>
              <div class="panel-body">

                <!--MENSAJE DE REGISTRO CORRRECTAMENTE-->
                <div class="alert bg-success" role="alert" style="display:none" id="correcto">
                  <svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg>Ruta Registrada <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
                <!--MENSAJE DE REGISTRO CORRRECTAMENTE-->
			          <form class="form-horizontal" action="../controller/usuarios/controller_registrar_usuario1.php" method="POST">
                <fieldset>
					       				       
                  <!-- ciudad origen input-->
		<div class="form-group">
                    <label class="col-md-3 control-label" for="">Ciudad Origen:</label>
                    <div class="col-md-4">
                    <input id="" name="nombre_user" type="text" placeholder="Ingrese Ciudad de Origen" class="form-control">
                    </div>
                </div>

                  <!-- ciudad destino input-->
		<div class="form-group">
                    <label class="col-md-3 control-label" for="">Ciudad Destino:</label>
                    <div class="col-md-4">
                    <input id="" name="nombre_user" type="text" placeholder="Ingrese Ciudad de Destino" class="form-control">
                    </div>
                </div>
                  
                
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
              <button type="button" id="agregar_usuario" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
            </div>
          </div>
        </div>
	    </div>
    </div><!--/.row--> <!--ROW rutas-->
  </div>
</div>
</div>  <!--MODAL REGISTRAR rutas-->

<div class="row"> <!--BUSCAR RUTAS-->
  <div class="col-lg-12">
    <div class="panel panel-default">	
      <div class="panel-heading"><i class="fa fa-users fa-2x" aria-hidden="true"></i> Rutas</div>
        <div class="panel-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
          <a target="_blank" href="_reportes/reporte_usuarios.php" class="btn btn-danger">Exportar a PDF</a>
          <form class="form-horizontal">
            <fieldset>
              <!-- Name input-->
              
            </fieldset>
            </form>     
        </div>
    </div>
  </div>
</div><!--/.row-->	

<!--MODAL MODIFICAR USUARIOS-->
<div class="modal fade grande" id="myModal_modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		    <h4 class="modal-title" id="myModalLabel"><span class="fa fa-cogs"></span> Modificar Usuarios</h4>
		  </div><br>

		  <!--OTRO FORMULARIO-->
      <form class="form-horizontal">
        <fieldset>
          <div class="form-group"> 
            <label class="col-md-4 control-label" for="">Código:</label> 
            <div class="col-md-5">
              <input id="id_user2" name="" type="text" class="form-control" disabled>
              <input id="id_tipouser2" name="" type="text" class="form-control oculto " disabled>
            </div>
          </div>
          <div class="form-group"> 
            <label class="col-md-4 control-label" for="">Descripción usuario</label> 
            <div class="col-md-5">
              <input id="id_nomtipo" name="" type="text" class="form-control " disabled>
            </div>
          </div>
          <div class="form-group"> 
            <label class="col-md-4 control-label" for="">Nombre Usuario:</label> 
            <div class="col-md-5">
              <input id="nombre2" name="" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group"> 
            <label class="col-md-4 control-label" for="">Contraseña:</label> 
            <div class="col-md-5">
              <input id="clave2" name="" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group"> 
            <label class="col-md-4 control-label" for="">Email:</label> 
            <div class="col-md-5">
              <input id="email2" name="" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group"> 
            <label class="col-md-4 control-label" for="">Estado:</label> 
            <div class="col-md-5">
              <input id="estado2" name="" type="text" class="form-control">
            </div>
          </div>
        </fieldset>
      </form>

		  <!--FIN DE FORMULARIO  data-dismiss="modal"-->
		  <br>
      <div class="text-center">
        <button type="button" name="modificar" id="ModificarUsuario" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Modificar</button>
      </div>

      <div class="modal-footer">
		    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> Cerrar</button>
		  </div>
		</div>
	</div>
</div>
<!--MODAL MODIFICAR USUARIO-->

<!--MODAL ELIMINAR CLIENTES-->
  
     