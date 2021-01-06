<?php
class AtomParser {

    var $NS = 'http://www.w3.org/2005/Atom';
    var $ATOM_CONTENT_ELEMENTS = array('content','summary','title','subtitle','rights');
    var $ATOM_SIMPLE_ELEMENTS = array('id','updated','published','draft');

    var $debug = false;

    var $depth = 0;
    var $indent = 2;
    var $in_content;
    var $ns_contexts = array();
    var $ns_decls = array();
    var $content_ns_decls = array();
    var $content_ns_contexts = array();
    var $is_xhtml = false;
    var $is_html = false;
    var $is_text = true;
    var $skipped_div = false;

    var $FILE = "php://input";

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


	/**
	 * Map XML namespace to string.
	 *
	 * @param indexish $p XML Namespace element index
	 * @param array $n Two-element array pair. [ 0 => {namespace}, 1 => {url} ]
	 * @return string 'xmlns="{url}"' or 'xmlns:{namespace}="{url}"'
	 */
	public static function map_xmlns($p, $n) {
		$xd = "xmlns";
		if( 0 < strlen($n[0]) ) {
			$xd .= ":{$n[0]}";
		}
		return "{$xd}=\"{$n[1]}\"";
	}

    function _p($msg) {
        print str_repeat(" ", $this->depth * $this->indent) . $msg ."\n";
    }
	
    function parse() {

        set_error_handler(array(&$this, 'error_handler'));

        array_unshift($this->ns_contexts, array());

        if ( ! function_exists( 'xml_parser_create_ns' ) ) {
        	trigger_error( __( "PHP's XML extension is not available. Please contact your hosting provider to enable PHP's XML extension." ) );
        	return false;
        }

        $parser = xml_parser_create_ns();
        xml_set_object($parser, $this);
        xml_set_element_handler($parser, "start_element", "end_element");
        xml_parser_set_option($parser,XML_OPTION_CASE_FOLDING,0);
        xml_parser_set_option($parser,XML_OPTION_SKIP_WHITE,0);
        xml_set_character_data_handler($parser, "cdata");
        xml_set_default_handler($parser, "_default");
        xml_set_start_namespace_decl_handler($parser, "start_ns");
        xml_set_end_namespace_decl_handler($parser, "end_ns");

        $this->content = '';

        $ret = true;

        $fp = fopen($this->FILE, "r");
        while ($data = fread($fp, 4096)) {
            if($this->debug) $this->content .= $data;

            if(!xml_parse($parser, $data, feof($fp))) {
                /* translators: 1: error message, 2: line number */
                trigger_error(sprintf(__('XML Error: %1$s at line %2$s')."\n",
                    xml_error_string(xml_get_error_code($parser)),
                    xml_get_current_line_number($parser)));
                $ret = false;
                break;
            }
        }
        fclose($fp);

        xml_parser_free($parser);

        restore_error_handler();

        return $ret;
    }

   
   
    function start_ns($parser, $prefix, $uri) {
        $this->_p("starting: " . $prefix . ":" . $uri);
        array_push($this->ns_decls, array($prefix,$uri));
    }

    function end_ns($parser, $prefix) {
        $this->_p("ending: #" . $prefix . "#");
    }

    function cdata($parser, $data) {
        $this->_p("data: #" . str_replace(array("\n"), array("\\n"), trim($data)) . "#");
        if(!empty($this->in_content)) {
            array_push($this->in_content, $data);
        }
    }

    function ns_to_prefix($qname, $attr=false) {
        # split 'http://www.w3.org/1999/xhtml:div' into ('http','//www.w3.org/1999/xhtml','div')
        $components = explode(":", $qname);

        # grab the last one (e.g 'div')
        $name = array_pop($components);

        if(!empty($components)) {
            # re-join back the namespace component
            $ns = join(":",$components);
            foreach($this->ns_contexts as $context) {
                foreach($context as $mapping) {
                    if($mapping[1] == $ns && strlen($mapping[0]) > 0) {
                        return array($mapping, "$mapping[0]:$name");
                    }
                }
            }
        }

        if($attr) {
            return array(null, $name);
        } else {
            foreach($this->ns_contexts as $context) {
                foreach($context as $mapping) {
                    if(strlen($mapping[0]) == 0) {
                        return array($mapping, $name);
                    }
                }
            }
        }
    }

    function is_declared_content_ns($new_mapping) {
        foreach($this->content_ns_contexts as $context) {
            foreach($context as $mapping) {
                if($new_mapping == $mapping) {
                    return true;
                }
            }
        }
        return false;
    }

    function xml_escape($string)
    {
             return str_replace(array('&','"',"'",'<','>'),
                array('&amp;','&quot;','&apos;','&lt;','&gt;'),
                $string );
    }
}
?>