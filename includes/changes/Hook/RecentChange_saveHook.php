<?php

namespace MediaWiki\Hook;

// phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps
/**
 * @stable for implementation
 * @ingroup Hooks
 */
interface RecentChange_saveHook {
	/**
	 * Called at the end of RecentChange::save().
	 *
	 * @since 1.35
	 *
	 * @param ?mixed $recentChange RecentChange object
	 * @return bool|void True or no return value to continue or false to abort
	 */
	public function onRecentChange_save( $recentChange );
}
