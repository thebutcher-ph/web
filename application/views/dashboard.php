<div id="wrapper">
Base URL: <?php echo base_url(); ?>

<div><img src="<?php echo base_url('assets/images/nestle.png')?>" alt="Sample Image" /></div>

<?php echo form_open('', array('id'=>'hello_form','action'=>base_url('people/save'))); ?>
	<div class="the-form">
		<div>
			<label for="">First Name</label>
			<input type="text" name="first_name" class="" placeholder="Enter First Name"/>
		</div>
		<div>
			<label for="">Last Name</label>
			<input type="text" name="last_name" class="" placeholder="Enter Last Name"/>
		</div>
		<div>
			<label for="">Email</label>
			<input type="text" name="email" class="" placeholder="Enter Email"/>
		</div>		
		<div>
			<input type="submit" value="Submit" />
		</div>
	</div>
<?php echo form_close(); ?>
</div>