<?php if (count($error)>0): {
	# code...
} ?>
<div class="error">
	<?php  foreach ($errors as $$error): ?>
	<?php endforeach ?>
</div>
<?php endif ?>