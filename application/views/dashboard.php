<div  class="row-fluid">
	  	<?php
	  		//load the status box
	  		$this->load->view('gen/status');
		?>
		
	  	<div class="span6">
	  		
	  		<div class="row-fluid">
	  			<div class="span4">
	  				<!-- dashboard-->
	  				<div class="button-box" align="center">	
	  					<img src="<?php echo base_url()?>/images/monitor.png"/>	  					
	  					<p>Dashboard</p>
  					</div>	
	  			</div>
	  			
	  			<div class="span4">
	  				<!-- backup-->
	  				<div class="button-box" align="center">
  						<img src="<?php echo base_url()?>/images/cloud_upload.png"/>	  					
	  					<p>Backup</p>	
	  				</div>	  					  			
	  			</div>
	  			
	  			<div class="span4">
	  				<!-- restore-->
	  				<div class="button-box" align="center">	
	  					<img src="<?php echo base_url()?>/images/cloud_download.png"/>	  					
	  					<p>Restore</p>	
	  				</div>
	  			</div>
	  			
	  		</div>	  			  			 	  
	  		
	  		
	  		<div class="row-fluid" style="margin-top:10px">
	  			<div class="span4">
	  				<!-- setting-->
	  				<div class="button-box" align="center">
	  					<a href="<?php echo base_url()?>settings">	
		  					<img src="<?php echo base_url()?>images/settings.png"/>	  					
		  					<p>Settings</p>
	  					</a>
  					</div>	
	  			</div>
	  			
	  			<div class="span4">
	  				<!-- log-->
	  				<div class="button-box" align="center">	
	  					<img src="<?php echo base_url()?>/images/page.png"/>	  					
	  					<p>Log</p>	
	  				</div>	  					  			
	  			</div>
	  			
	  			<div class="span4">
	  				<!-- About-->
	  				<div class="button-box" align="center">	
	  					<img src="<?php echo base_url()?>/images/info.png"/>	  					
	  					<p>About</p>	
	  				</div>
	  			</div>
	  			
	  		</div>	  	
	  	</div>
	  	
	  	<?php
	  		//load database information box
	  		$this->load->view('gen/database_info');
	  	?>
		
	</div>
