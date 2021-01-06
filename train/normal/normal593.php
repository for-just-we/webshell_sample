<?php 
	foreach ($attr as $k => $v){	
		if ('placeholder' === $k || 'title' === $k)
			printf('%s="%s" ', $view->escape($k), $view->escape(false !== $translation_domain ? $view['translator']->trans($v, array(), $translation_domain) : $v));
		elseif (true === $v)
			printf('%s="%s" ', $view->escape($k), $view->escape($k));
		elseif (false !== $v)
			printf('%s="%s" ', $view->escape($k), $view->escape($v));
	}
?>
