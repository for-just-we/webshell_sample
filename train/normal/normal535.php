<?php
class AtomParser {
	/**
	 * Map XML namespace to string.
	 *
	 * @param indexish $p XML Namespace element index
	 * @param array $n Two-element array pair. [ 0 => {namespace}, 1 => {url} ]
	 * @return string 'xmlns="{url}"' or 'xmlns:{namespace}="{url}"'
	 */
	public function map_xmlns($p, $n) {
		$xd = "xmlns";
		if( 0 < strlen($n[0]) ) {
			$xd .= ":{$n[0]}";
		}
		return "{$xd}=\"{$n[1]}\"";
	}

}
?>