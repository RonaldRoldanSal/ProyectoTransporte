<?php
?>
<div class="form-group">
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-log-12">
        <h3><span class="glyphicon glyphicon-cog"></span> Mantenimiento de Clientes:</h3>
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
			      <div class="panel-heading"><i class="fa fa-user fa-2x" aria-hidden="true"></i> Registro de Nuevo Cliente</div>
              <div class="panel-body">

                <!--MENSAJE DE REGISTRO CORRRECTAMENTE-->
                <div class="alert bg-success" role="alert" style="display:none" id="correcto">
                  <svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg>Cliente Registrado <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
                <!--MENSAJE DE REGISTRO CORRRECTAMENTE-->
                <form class="" action="../controller/usuarios/controller_registrar_usuario1.php" method="POST">
                <fieldset>
					       
                <!-- tipo documento cliente -->
                
                <div class="container">
                    
                    <div class="col-md-8">
                        <form action="" method="POST">
                            <div class="col-md-5">
                                <label class="">Tipo Documento:</label>
                                <div class="form-group">
                                    <div class=""><span class=""></span></div>
                                    <select id="tipo_doc" name="tipo_doc" class="form-control" onchange="seleccionar_opcion()">
                                        <option value="0">Seleccione Tipo Documento ...</option>
                                        <option value="1">DNI</option>
                                        <option value="2">RUC</option>
                                        <option value="3">Carnet Extranjería</option>
                                    </select> 
                                </div> 
                                <div class="form-group">
                                    <div class=""><span class=""></span></div>
                                    <input class="form-control" type="text" id="valor_doc" name="valor_doc">
                                </div>
                            </div>
                            
                            <div class="col-md-5">
                                <label class="">Empresa:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="txtnombre" placeholder="Ingrese Nombre de Empresa">
                                </div>
                            </div>
        
                            <div class="col-md-5">
                                <label class="">Nombre:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="txtnombre" placeholder="Ingrese Nombre">
                                </div>
                            </div>
                            
                            

                            <div class="col-md-5">
                                <label class="">Apellido Paterno:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="txtapepat" placeholder="Ingrese Apellido Paterno">
                                </div>
                            </div>
        
                            <div class="col-md-5">
                                <label class="">Apellido Materno:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="txtapemat" placeholder="Ingrese Apellido Materno">
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label class="">Dirección:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="txtdirecccion" placeholder="Ingrese Dirección">
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label class="">Número Teléfono:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="txtfono" placeholder="Ingrese Número Teléfono">
                                </div>
                            </div>
                            
                            <div class="col-md-5">
                                <label class="">Edad:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="txtfono" placeholder="Ingrese Edad">
                                </div>
                            </div>
        
                            <div class="col-md-5">
                                <div class="form-group">
                                <label class="">Sexo:</label>
                                <select class="form-control" id="option">
                                    <option value="">Seleccione ...</option>
                                    <option value="">Masculino</option>
                                    <option value="">Femenino</option>
                                </select>
                                </div>
                            </div> 

                            <div class="col-md-5">
                                <label class="">Teléfono:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="txtfono" placeholder="Ingrese Teléfono">
                                </div>
                            </div>
                        </form>
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
    </div><!--/.row--> <!--ROW PARTICIPANTES-->
  </div>
</div>
</div>  <!--MODAL AGREGAR CLIENTE-->



<div class="row"> <!--BUSCAR USUARIOS-->
  <div class="col-lg-12">
    <div class="panel panel-default">	
      <div class="panel-heading"><i class="fa fa-users fa-2x" aria-hidden="true"></i> Clientes</div>
        <div class="panel-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
          <a target="_blank" href="_reportes/reporte_usuarios.php" class="btn btn-danger">Exportar a PDF</a>
          <form class="form-horizontal">
            <fieldset>
              <!-- Name input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="name"><i class="fa fa-search" aria-hidden="true"></i> Buscar Clientes:</label>
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
</div>
</div>
</div>
<!--MODAL MODIFICAR Clientes-->

<!--MODAL ELIMINAR CLIENTES-->
  
     

              
<script>
  
  
   function seleccionar_opcion(){
            var cbo = document.getElementById("tipo_doc");
            var i = cbo.selectedIndex;
            document.getElementById("valor_doc").setAttribute("placeholder","Ingrese "+cbo.options[i].text);
        }


</script>

<style type="text/css">
    .grande{
        width: 100%;
    }
</style>


       


