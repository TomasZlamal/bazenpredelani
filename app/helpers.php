<?php

if(! function_exists('getAsset')) {
	/**
	 * Helper function to retrieve files from /public/assets directory
	 * @param  string  $name
	 * @param  bool  $full If a full path should be used
	 * @return string
	 */
	function getAsset(string $name, bool $full = false): string
	{
		return $full
			? public_path() . "/assets/$name"
			: "/assets/$name";
	}
}

if(! function_exists('getImage')) {
	function getImage(string $name, bool $full = false): string
	{
		return $full
			? public_path() . "/assets/images/$name"
			: "/assets/images/$name";
	}
}