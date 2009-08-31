<div class="pagination">
	<p><?php echo $paginator->counter(array('format' => __('Page %page% of %pages%', true))); ?></p> <?php if(isset($this->params['pass'])) { $paginator->options(array('url' => $this->params['pass'])); } ?>
	<?php echo $paginator->prev('<< '.__('previous', true), array('class'=>'prev', 'tag' => 'span'), null, array('class' => 'prev disabled', 'tag' => 'span'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array('class' => 'next', 'tag' => 'span'), null, array('class' => 'next disabled', 'tag' => 'span'));?>
</div>
