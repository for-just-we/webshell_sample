<?php
class AtomParser {

    var $feed;
    var $current;

	/**
	 * PHP5 constructor.
	 */
    function __construct() {

        $this->feed = new AtomFeed();
        $this->current = null;
        $this->map_attrs_func = array( __CLASS__, 'map_attrs' );
        $this->map_xmlns_func = array( __CLASS__, 'map_xmlns' );
    }

}
?>