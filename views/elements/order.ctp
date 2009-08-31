<?php $javascript->link('/core/js/jquery.tablednd', false); ?> 

<script type="text/javascript">
	$(document).ready(function() {
	    // Initialise the table
		$('ul.actions:first').after('<div id="jsMessage"></div>');

	    $('#jsMessage').hide();
	    
	    $('table.listing').tableDnD({
	        onDragClass: 'drag',
	        dragHandle: 'drag',
	        onDrop: function(table, row) {
	            $('#jsMessage').load("<?php echo $html->url(array('controller' => $this->params['controller'], 'action' => 'order')); ?>?" + $.tableDnD.serialize(), null, function() {
	            	$('#jsMessage').hide().fadeIn('fast');            	
	            });
	        }
	    });
	});
</script>
