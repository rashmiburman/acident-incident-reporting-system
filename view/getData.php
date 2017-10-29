<?php
 include_once 'controller.php'; 
$obj=new controller();

$sql="select * from incident";
	//echo $sql;
	$res=mysql_query($sql);
$count=mysql_num_rows($res);
//	echo $count;
	while($data=mysql_fetch_array($res)){
		?>
		<li class="list-group-item"><i class="fa fa-map-marker"></i>&nbsp;
		<?php echo $data['location']."&nbsp;". $data['date']; 
			$data_target='demo'.$data['id'];
		?>
  <i  data-toggle="collapse" data-target=<?php echo '#'.$data_target.''; ?> class="fa fa-plus pull-right" id="iconChange"></i>
  <div id=<?php echo $data_target; ?> class="collapse"><hr>
   	<p >
   			number of injured people :<?php echo $data['number_of_person']; ?> level of injury :<?php echo($data['injury_level']); ?>/10
   			<br>
   			<div class="lead">Reason :<?php echo($data['reason_accident']); ?>
   				<div class="pull-right" style="margin-right:100px;"><i class="fa fa-heartbeat"></i> Any death:<?php
   			echo $data['any_death']; 
   			?></div>
   			</div>
   			
   			reported by:
   			<?php 
   			echo($data['reporting_person']);
   			?><span class="pull-right " style="margin-right:  120px;"><i class="fa fa-phone"></i> <?php 
   				echo($data['reporting_phone']);
   			?></span> <br>
   			<i class="fa fa-envelope-o"></i> <?php echo $data['reporting_email']; ?>

   	</p>
  </div>
  </li>
		<?php 

	}
?>