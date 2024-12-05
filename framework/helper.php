<?php

use SosoRicsi\Collection\SmartCollection;

if (!function_exists("wrap")) {
	/**
	 * Wraps the given input into a SmartCollection instance.
	 *
	 * This helper function ensures that any input is converted into a
	 * SmartCollection. It handles arrays, existing SmartCollection
	 * instances, null values, and single items.
	 *
	 * @param mixed $things The input to wrap. Can be:
	 *                      - array: Directly converted to a SmartCollection.
	 *                      - SmartCollection: Returned as-is.
	 *                      - null: Treated as an empty array.
	 *                      - any other type: Wrapped in a single-element array.
	 * 
	 * @return SmartCollection A new or existing SmartCollection instance.
	 */
	function wrap($things): SmartCollection
	{
		if ($things instanceof SmartCollection) {
			return $things;
		}

		if (is_array($things)) {
			return new SmartCollection($things);
		}

		if ($things === null) {
			return new SmartCollection([]);
		}

		return new SmartCollection([$things]);
	}
}
