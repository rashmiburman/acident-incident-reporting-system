$(document).ready(function(){
	$('#incidentForm').submit(function(e){
		e.preventDefault();
		var data=$('#incidentForm').serialize();
		alert(data);
		$.ajax({
			url:"./view/submitData.php",
			type:'post',
			data:data,
			beforeSend:function(){
			$('#submitBtn').html(`<i class="fa fa-spinner"></i> &nbsp;Data is being Submit`);

			},
			success:function(responseFromServer){
				if(responseFromServer=='1'){
	$('#submitBtn').html('submit');

					$('#response').html(`
						<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Data has been saved</strong>
</div>
						`);
					setTimeout(' window.location.href = "./"; ',2000);
				}
				else{
					$('#submitBtn').html('submit');
						$('#response').html(`
						<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Data has been saved</strong>
</div>
						`);

				}
			}
		});
	});
});