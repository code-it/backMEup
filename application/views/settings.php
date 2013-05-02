<div  class="row-fluid">
	  	
	  	<?php
	  		//load the status box
	  		$this->load->view('gen/status');
		?>
		
	  	<div class="span6 main-content">
			<ul class="breadcrumb">
			  <li><a href="#">Home</a> <span class="divider">/</span></li>
			  <li><a href="#">Library</a> <span class="divider">/</span></li>
			  <li class="active">Data</li>
			</ul>  	
	  	</div>
	  		  	
	  	<?php
	  		//load database information box
	  		$this->load->view('gen/database_info');
	  	?>
		
	</div>
