<div class="span12">
    <div class="well-white">
        <div class="page-header">
            <h1>New Ticket</h1>
        </div>

        <div class="body">

<?php
if (validation_errors() == TRUE)
{
	echo validation_errors('<div class="alert alert-danger">', '</div>');
}
if (isset($error))
{
	echo '<div class="alert alert-danger">' . $error . '</div>';
}
?>

<div class="row">
	<div class="span5">
		
<?php echo form_open_multipart('index/create'); ?>

<fieldset>
<label>Email Address</label>
<input type="text" name="email" placeholder="Enter a valid email address" required value="<?php echo set_value('email'); ?>"  />
</fieldset>

<input type="hidden" name="department" value="<?php echo $departmentid; ?>">

          
<fieldset>
    <label>Subject</label>
    <input type="text" name="subject" placeholder="Subject of your request" required="required" value="<?php echo set_value('subject'); ?>"  />
</fieldset>

<fieldset>
    <label>Your Query</label>
    <textarea class="span5" rows="15" name="body"><?php echo set_value('body'); ?></textarea>
</fieldset>

<fieldset>
    <label>Priority</label>
    <select class="select2 " name="priority">
        <?php foreach($priorities as $priority): ?>
            <option value="<?php echo $priority['priority']; ?>"><?php echo $priority['priority']; ?></option>
        <?php endforeach; ?>
    </select>
</fieldset>
<fieldset>
<div id="attachments" >    
	<p></p>
  <span class="btn">Attachment <input type="file" name="userfile" size="30" /></span>
<a href="#" title="Allowed File Types" data-content="The following file types are allowed to upload, .gif .jpg, .jpeg, .png and .pdf. Maximum file size : 5MB " rel="tooltip">File Types?</a>    
</div>
</fieldset>


	</div>
	
	
	<div class="span6 ">
		
		
<?php
if (is_array($additional) && !empty($additional))
{
	echo '
	<div class="well">
	<p></p><div class="badge badge-important">Additional Fields</div>';
	echo '<a class="btn btn-link" href="#" rel="tooltip" title="Additional Fields" data-content="Additional fields are useful if you want to send us additional data such as username or password. These values are encrypted before saving to the database and deleted once the ticket is closed"> ?</a>  ';

	foreach ($additional as $item)
	{
		echo '<fieldset>';
		echo '<label>' . $item['name'] . '</label>';
		if ($item['type'] == 'text')
		{
			echo '<input type="text" name="' . $item['uniqid'] . '">  ';
		}
		echo '</fieldset>' . "\n";
	}
	
	echo '</div>';
}
?>


</div>
	
	
</div>






<?php
	$array = array(
		'class' => 'btn btn-primary',
		'name' => 'submit'
	);
	echo form_submit($array, 'Create Ticket');
?>
   <?php echo form_close(); ?>

    </div>

    </div>

</div>
