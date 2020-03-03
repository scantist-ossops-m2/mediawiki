<?php

namespace MediaWiki\Search\Hook;

/**
 * @stable for implementation
 * @ingroup Hooks
 */
interface PrefixSearchExtractNamespaceHook {
	/**
	 * Called if core was not able to extract a
	 * namespace from the search string so that extensions can attempt it.
	 *
	 * @since 1.35
	 *
	 * @param ?mixed &$namespaces array of int namespace keys to search in (change this if you can
	 *   extract namespaces)
	 * @param ?mixed &$search search term (replace this with term without the namespace if you can
	 *   extract one)
	 * @return bool|void True or no return value to continue or false to abort
	 */
	public function onPrefixSearchExtractNamespace( &$namespaces, &$search );
}
