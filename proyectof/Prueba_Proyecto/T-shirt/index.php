<?php
	/* Connect To Database*/
	include("conexion.php");
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Script PHP para control de notas de gastos" />
    <meta name="author" content="Obed Alvarado" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Formulario de pedidos de camisetas gratis </title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->

    <link href="assets/css/style.css" rel="stylesheet" />
	<link rel=icon href='http://obedalvarado.pw/img/logo-icon.png' sizes="32x32" type="image/png">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
</head>
<body >
    <div class="container outer-section" >
        
       <form class="form-horizontal" role="form" id="datos_presupuesto" method="post">
        <div id="print-area">
                  <div class="row pad-top font-big">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <a href="https://obedalvarado.pw/" target="_blank">  <img src="assets/img/logo.png" alt="Logo sistemas web" /></a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <strong>E-mail : </strong> <?php echo $rw['email'];?>
                    <br />
                    <strong>Teléfono :</strong> <?php echo $rw['telefono'];?> <br />
					<strong>Sitio web :</strong> <?php echo $rw['web'];?> 
                   
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <strong><?php echo $rw['nombre_comercial'];?>  </strong>
                    <br />
                    Dirección : <?php echo $rw['direccion'];?> 
                </div>

            </div>
          
            
            

            <div class="row ">
			<hr />
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Detalles del cliente :</h2>
                     <select class="cliente form-control" name="cliente" id="cliente" required>
						<option value="">Selecciona el cliente</option>
					</select>
                    <span id="direccion"></span>
                    <h4><strong>E-mail: </strong><span id="email"></span></h4>
                    <h4><strong>Teléfono: </strong><span id="telefono"></span></h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Información de la orden:</h2>
					<div class="row">
						<div class="col-lg-6">
						  <h4><strong>Orden #: </strong><?php echo $numero;?></h4>
						</div>
						<div class="col-lg-6">
							 <h4><strong>Fecha: </strong> <?php echo date("d/m/Y");?></h4>
						</div>
					
					</div>
					<div class="row">
						<div class="col-lg-12">
						<label>Términos y condiciones:</label>
						<input type="text" name="condiciones" id="condiciones" class="form-control" placeholder="Términos y condiciones de la orden">
						</div>
						
						
						
					</div>
                  
                   
				
								
                   
                    
                  
                </div>
            </div>
            
         
            <div class="row">
			<hr />
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped  table-hover">
                            <thead>
                                <tr style="background-color:#c0392b;color:white;">
                                    <th >Descripción</th>
									<th class='text-center'>Color</th>
									<th class='text-center'>Talla</th>
									<th class='text-center'>Cantidad</th>
									<th class='text-right'>Precio unitario</th>
                                    <th class='text-right'>Total</th>
									<th class='text-right'></th>
                                </tr>
                            </thead>
                            <tbody class='items'>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
           
           
            
		
        </div>
       <div class="row"> <hr /></div>
        <div class="row pad-bottom  pull-right">
		
            <div class="col-lg-12 col-md-12 col-sm-12">
                <button type="submit" class="btn btn-success ">Guardar orden de pedido</button>
             
              

                
            </div>
        </div>
		</form>
    </div>
	<form class="form-horizontal" name="guardar_item" id="guardar_item">
			<!-- Modal -->
			<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Agregar producto</h4>
				  </div>
				  <div class="modal-body">
					
					  <div class="row">
						<div class="col-md-12">
							<label>Descripción del producto</label>
							<textarea class="form-control" id="descripcion" name="descripcion"  required></textarea>
							<input type="hidden" class="form-control" id="action" name="action"  value="ajax">
						</div>
						
					  </div>

					  <div class="row">
						
						<div class="col-md-6">
							<label>Color</label>
							<input type="text" class="form-control" id="color" name="color" required>
						</div>
						
						<div class="col-md-6">
							<label>Talla</label>
							<select class="form-control" name="talla" id="talla" required>
								<option value="">Selecciona talla</option>
								<option value="S">S</option>
								<option value="L">L</option>
								<option value="M">M</option>
								<option value="XL">XL</option>
								<option value="2XL">2XL</option>
							
								
								
							</select>
						</div>
						
						
						
					  </div>
					  
					  <div class="row">
						<div class="col-md-6">
							<label>Cantidad</label>
							<input type="text" class="form-control" id="cantidad" name="cantidad" required>
						</div>
												
						<div class="col-md-6">
							<label>Precio</label>
						  <input type="text" class="form-control" id="precio" name="precio" required>
						</div>
						
					  </div>
				
					
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-info" >Guardar</button>
					
				  </div>
				</div>
			  </div>
			</div>
	</form>
	
   
</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $( ".cliente" ).select2({        
    ajax: {
        url: "ajax/json.php",
        dataType: 'json',
        delay: 250,
        data: function (params) {
            return {
                q: params.term // search term
            };
        },
        processResults: function (data) {
            return {
                results: data
            };
        },
        cache: true
    },
    minimumInputLength: 2
}).on('change', function (e){
		var email = $('.cliente').select2('data')[0].email;
		var telefono = $('.cliente').select2('data')[0].telefono;
		var direccion = $('.cliente').select2('data')[0].direccion;
		$('#email').html(email);
		$('#telefono').html(telefono);
		$('#direccion').html(direccion);
})
});

	function mostrar_items(){
		var parametros={"action":"ajax"};
		$.ajax({
			url:'ajax/items.php',
			data: parametros,
			 beforeSend: function(objeto){
			 $('.items').html('Cargando...');
		  },
			success:function(data){
				$(".items").html(data).fadeIn('slow');
		}
		})
	}
	function eliminar_item(id){
		$.ajax({
			type: "GET",
			url: "ajax/items.php",
			data: "action=ajax&id="+id,
			 beforeSend: function(objeto){
				 $('.items').html('Cargando...');
			  },
			success: function(data){
				$(".items").html(data).fadeIn('slow');
			}
		});
	}
	
	$( "#guardar_item" ).submit(function( event ) {
		parametros = $(this).serialize();
		$.ajax({
			type: "POST",
			url:'ajax/items.php',
			data: parametros,
			 beforeSend: function(objeto){
				 $('.items').html('Cargando...');
			  },
			success:function(data){
				$(".items").html(data).fadeIn('slow');
				$("#myModal").modal('hide');
			}
		})
		
	  event.preventDefault();
	})
	$("#datos_presupuesto").submit(function(){
		  var cliente = $("#cliente").val();
		  var condiciones = $("#condiciones").val();
		  
		 
		  
		  if (cliente>0)
		 {
			VentanaCentrada('./pdf/documentos/orden.php?cliente='+cliente+'&condiciones='+condiciones,'Orden','','1024','768','true');	
		 } else {
			 alert("Selecciona el cliente");
			 return false;
		 }
		 
	 });
		

		mostrar_items();
		
		
</script>
</html>
