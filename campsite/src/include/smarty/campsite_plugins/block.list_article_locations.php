<?php
/**
 * Campsite customized Smarty plugin
 * @package Campsite
 */


/**
 * Campsite list_article_locations block plugin
 *
 * Type:     block
 * Name:     list_article_locations
 * Purpose:  Provides a...
 *
 * @param string
 *     $p_params
 * @param string
 *     $p_smarty
 * @param string
 *     $p_content
 *
 * @return
 *
 */
function smarty_block_list_article_locations($p_params, $p_content, &$p_smarty, &$p_repeat)
{
    require_once $p_smarty->_get_plugin_filepath('shared','escape_special_chars');

    // gets the context variable
    $campContext = $p_smarty->get_template_vars('campsite');

    if (!isset($p_content)) {
        $start = $campContext->next_list_start('ArticleLocationsList');
        $articleLocationsList = new ArticleLocationsList($start, $p_params);
        if ($articleLocationsList->isEmpty()) {
            $campContext->setCurrentList($articleLocationsList, array());
            $campContext->resetCurrentList();
        	$p_repeat = false;
            return null;
        }
    	$campContext->setCurrentList($articleLocationsList, array('location'));
    	$campContext->location = $campContext->current_article_locations_list->current;
    	$p_repeat = true;
    } else {
        $campContext->current_article_locations_list->defaultIterator()->next();
        if (!is_null($campContext->current_article_locations_list->current)) {
            $campContext->location = $campContext->current_article_locations_list->current;
            $p_repeat = true;
        } else {
            $campContext->resetCurrentList();
            $p_repeat = false;
        }
    }

    return $p_content;
}

?>