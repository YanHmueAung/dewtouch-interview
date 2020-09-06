<div class="row-fluid">
	<div class="alert alert-info">
		<h3>Migration Question</h3>
	</div>

	
	<hr />

	<div class="alert">
		<h3>Import Form For Migration</h3>
	</div>
<?php
echo $this->Form->create('FileUpload');
echo $this->Form->input('file', array('label' => 'File Upload', 'type' => 'file'));
echo $this->Form->submit('Upload', array('class' => 'btn btn-primary'));
echo $this->Form->end();
?>

	<hr />

	<div class="alert alert-success">
		<h3>Data Migrated</h3>
	</div>

	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Date</th>
				<th>Ref No.</th>
				<th>Member Name</th>
				<th>Member No.</th>
				<th>Member Pay Type</th>
				<th>Member Company</th>
				<th>Payment By</th>
				<th>Batch No</th>
				<th>Receipt No</th>
				<th>Cheque No</th>
				<th>Payment Description</th>
				<th>Renewal Year</th>
				<th>subtotal</th>
				<th>totaltax</th>
				<th>total</th>
			</tr>
		</thead>
		<tbody>
<?php
//foreach ($file_uploads as $file_upload) :
?>
			<tr>
				<td><?php// echo $file_upload['FileUpload']['id']; ?>
				<td><?php //echo $file_upload['FileUpload']['name']; ?>
				<td><?php //echo $file_upload['FileUpload']['email']; ?>
				<td><?php //echo $file_upload['FileUpload']['created']; ?>
				<td><?php// echo $file_upload['FileUpload']['id']; ?>
				<td><?php //echo $file_upload['FileUpload']['name']; ?>
				<td><?php //echo $file_upload['FileUpload']['email']; ?>
				<td><?php //echo $file_upload['FileUpload']['created']; ?>
				<td><?php// echo $file_upload['FileUpload']['id']; ?>
				<td><?php //echo $file_upload['FileUpload']['name']; ?>
				<td><?php //echo $file_upload['FileUpload']['email']; ?>
				<td><?php //echo $file_upload['FileUpload']['created']; ?>
				<td><?php// echo $file_upload['FileUpload']['id']; ?>
				<td><?php //echo $file_upload['FileUpload']['name']; ?>
				<td><?php //echo $file_upload['FileUpload']['email']; ?>
			</tr>
<?php
//endforeach;
?>
		</tbody>
	</table>





<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Date</th>
				<th>Ref No.</th>
				<th>Member Name</th>
				<th>Member No.</th>
				<th>Member Pay Type</th>
				<th>Member Company</th>
				<th>Payment By</th>
				<th>Batch No</th>
				<th>Receipt No</th>
				<th>Cheque No</th>
				<th>Payment Description</th>
				<th>Renewal Year</th>
				<th>subtotal</th>
				<th>totaltax</th>
				<th>total</th>
			</tr>
		</thead>
		<tbody>
<?php
//foreach ($file_uploads as $file_upload) :
?>
			<tr>
				<td><?php// echo $file_upload['FileUpload']['id']; ?>
				<td><?php //echo $file_upload['FileUpload']['name']; ?>
				<td><?php //echo $file_upload['FileUpload']['email']; ?>
				<td><?php //echo $file_upload['FileUpload']['created']; ?>
				<td><?php// echo $file_upload['FileUpload']['id']; ?>
				<td><?php //echo $file_upload['FileUpload']['name']; ?>
				<td><?php //echo $file_upload['FileUpload']['email']; ?>
				<td><?php //echo $file_upload['FileUpload']['created']; ?>
				<td><?php// echo $file_upload['FileUpload']['id']; ?>
				<td><?php //echo $file_upload['FileUpload']['name']; ?>
				<td><?php //echo $file_upload['FileUpload']['email']; ?>
				<td><?php //echo $file_upload['FileUpload']['created']; ?>
				<td><?php// echo $file_upload['FileUpload']['id']; ?>
				<td><?php //echo $file_upload['FileUpload']['name']; ?>
				<td><?php //echo $file_upload['FileUpload']['email']; ?>
			</tr>
<?php
//endforeach;
?>
		</tbody>
	</table>



	
</div>