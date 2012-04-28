<div id="visor">
	<div id="cabecera">
		<div id="titulo">
			<h2>
				<span>Conferencia:</span>
				<?php echo $actual['Conference']['name']; ?>
			</h2>
			<span class="restante">Tiempo Restante</span>
		</div>
		
		
		<!-- Area del Contandor -->
		
		<div id="contador">
			<div id="countdown"></div>
			<script type="text/javascript" charset="UTF-8">

			//Aqui es donde se debe asignar la fecha del evento y sumarle la duracion de la conferencia
			
					var limit = new Date(
						<?php echo $data["year"]; ?>,
						<?php echo $data["month"]-1; ?>,
						<?php echo $data["day"]; ?>,
						<?php echo $data["hour"]; ?>,
						<?php echo $data["min"]; ?>,
						<?php echo $data["sec"]; ?>
					); 
					//$('#countdown').countdown($.countdown.regional['es']);
					$('#countdown').countdown({until: limit, compact: true,
    					format: 'HMS', description: ''});
					
				</script>
		</div>
		<div class="clear"></div>

	</div>
	<div id="contenido">
		<div id="autor">
			<div class="cuadro cautor">
				<p>Datos Conferencista(s)</p>
			</div>

			<ul>
				<li><p>
						Nombre:<span><?php echo $actual['Author']['name'] ?></span>
					</p>
				
				<li>

					<p>
						Titulo:<span><?php echo $actual['Author']['profession'] ?></span>
					</p>


				</li>
				<li>
					<p>
						Twitter:<span><?php echo $actual['Author']['twitter'] ?></span>
					</p>
				</li>
			</ul>
		</div>
		<div id="twitter">
			<div class="cuadro">
				<p>Tweets</p>
			</div>
			<div id="tweets">
				<div id="twitter_time"></div>
				<script type="text/javascript" charset="UTF-8">
						$(document).ready(function(){
							get_post();
							setInterval(get_post, 5000);
						});
					</script>
			</div>

		</div>
	</div>
	<div id="siguiente">
		<p>Siguiente Conferencia: <span><?php echo $proxima ?></span></p>
	</div>



</div>
