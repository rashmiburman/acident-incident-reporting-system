<?php
include_once"view/nav.php"; 
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">A&IMS </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
   <div class="container home">
   <div class="well">
   	<h2 class="text-orange"><i class="fa fa-heartbeat"></i>caption....</h2>
   </div>
    <div class="row">
    	<div class="col-lg-6">
    		<div class="panel panel-danger">
  	<div class="panel-heading">
    <h3 class="panel-title">Previous Data</h3>
  	</div>
 	 	<div class="panel-body div-scroll">
 	 <ul class="list-group">
 	 <?php
 	 include_once'getData.php'; 
 	 ?>
  
  
</ul>

  	</div>
  	
			</div>
    	</div>
    	<div class="col-lg-6">
    	<div id="response">
  		
  		</div>
    		<div class="panel panel-warning">
  	<div class="panel-heading">
    <h3 class="panel-title">Report an accident</h3>
  	</div>
  	<div class="panel-body">

    <form id="incidentForm">
    	<div class="form-group">
    		<input type="text" id="location" name="location" class="form-control"><label for="location" class="lead"><i class="fa fa-map-marker"></i> Location</label>
    	</div>
    	<div class="form-group">
    		<select class="form-control" name="numberOfPerson">
    			<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option>
    		</select><label for="location" class="lead"><i class="fa fa-user-o"></i> Number of person</label>
    	</div>
    	<div class="form-group">
    		<input type="range" name="injuryLevel" min="0" max="10" >
    		<p class="lead"><i class="fa fa-heartbeat"></i> Level of injury&nbsp;<span id="rangeHint" class="text-red">0</span></p>
    	</div>
    	<div class="form-group">
    		<textarea class="form-control" name="reasonOfAccident"></textarea><label class="lead"><i class="fa fa-file-text"></i> Reason of accident</label>
    	</div>
    	<div class="row margin-bot-0">
    		<div class="col-sm-6 col-lg-6">
    			<div class="form-group">
 						<label class="lead margin-bot-0"><i class="fa fa-ambulance "></i> Any Death</label>
    				<p>
    					<input type="radio" name="anyDeath" value="true"><label class="lead">Yes</label>&nbsp; &nbsp;&nbsp;&nbsp;<input type="radio" name="anyDeath" value="false" checked><label class="lead" >No</label>
    				</p>
    			</div>
    		</div>
    		<div class="col-sm-6">
    			<div class="form-group">
    			<input type="text" name="reportingPersonName" class="form-control"><label class="lead"><i class="fa fa-address-card"></i> Reporting person Name</label>
    				
    			</div>
    		</div>
    	</div>
    <div class="row">
    		<div class="form-group col-sm-6 ">
    		<input type="text" name="reportingPersonPhone" class="form-control" minlength="10" maxlength="10"><label class="lead"><i class="fa fa-phone"></i> Reporting person Phone</label>
    		</div>
    		<div class="form-group col-sm-6 ">
    			<input type="email" name="reportingPersonEmail" class="form-control"><label class="lead"><i class="fa fa-envelope"></i> 
    			Reporting person Email</label>
    		</div>
    		<div class="form-group col-sm-6">
    			
    		</div>
    </div>
    
    
  	</div>
  	<div class="panel-footer">
  		<button class="btn btn-primary " type="submit" id="submitBtn">Submit</button>
  		
  	</div>
  	</form>
			</div>
    	</div>
    </div>			
     </div>
     <script type="text/javascript">
     	$(document).ready(function(){
     	$("[type=range]").val(0);	
  $("[type=range]").change(function(){
    var newval=$(this).val();

    $("#rangeHint").text(newval);
  });
  $('#iconChange').click(function(){
  	$('#iconChange').removeClass('fa-plus');
  	$('#iconChange').addClass('fa-minus');
  	
  });
  
});
     </script>
     <script type="text/javascript" src="js/submit.js"></script>
</body>
</html>