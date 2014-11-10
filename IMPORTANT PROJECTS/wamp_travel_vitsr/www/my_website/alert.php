<?php

$variable_1=10;
$variable_2=20;

if($variable_1 >= $variable_2):
	//echo "lol";
	?>
	<script type="text/javascript">
	alert("<?php echo $variable_1; ?>");
	</script>
<?php
else:
	//echo "lol";
	?>
	<script type="text/javascript">
	alert("<?php echo $variable_2; ?>");
	</script>

<?php
if(condition)	
<?php endif; ?>
