#!/usr/bin/env php
<?php
/*
 * Originally based on:
 *     https://github.com/michaelfox/keyboard-maestro-macros/blob/master/kmmexport
 * which was based on:
 *     https://github.com/doubledrones/kmmexport
 */

namespace CFPropertyList;

define("VERBOSE", TRUE);
define("HOME", getenv("HOME"));
define("OUTPUTDIR", __DIR__ . "/macros");
define("KM_MACRO_PLIST", HOME . "/Library/Application Support/Keyboard Maestro/Keyboard Maestro Macros.plist");

require_once 'vendor/autoload.php';

if (!is_dir(OUTPUTDIR)) {
	mkdir(OUTPUTDIR);
}

if (!is_dir(OUTPUTDIR . "/groups")) {
	mkdir(OUTPUTDIR . "/groups");
}

backup_master_plist();

$plist = new CFPropertyList( KM_MACRO_PLIST, CFPropertyList::FORMAT_BINARY );

$macro_groups = $plist->getValue()->get("MacroGroups")->getValue();

foreach ($macro_groups as $macro_group) {
	create_macro_group_folder($macro_group);
	create_kmmacros_file($macro_group);
	export_macros($macro_group);
}

function backup_master_plist() {
	if(copy(KM_MACRO_PLIST, OUTPUTDIR . "/Keyboard Maestro Macros.plist")) {
		$path = escapeshellarg(OUTPUTDIR . "/Keyboard Maestro Macros.plist");
		exec("plutil -convert xml1 {$path}", $output);
	}
}

function create_macro_group_folder($macro_group) {
	$name = $macro_group->Name->getValue();
	if (empty($name)) {
		$name = $macro_group->UID->getValue();
	}
	if (!is_dir(OUTPUTDIR . "/groups/{$name}")) {
		mkdir(OUTPUTDIR . "/groups/{$name}");
	}
}

function create_kmmacros_file($macro_group, $macro=NULL) {
	$group_name = get_kmmacro_name($macro_group);
	if ($macro) {
		$macro_name = get_kmmacro_name($macro);
		msg(" ┣━  {$macro_name}");
		$file = OUTPUTDIR . "/groups/{$group_name}/{$macro_name}.kmmacros";
	} else {
		msg("\n ┏ {$group_name}");
		$file = OUTPUTDIR . "/groups/{$group_name}.kmmacros";
	}

	$macro_group_plist = new CFPropertyList();

	// the Root element of the PList is an Array
	$macro_group_plist->add( $array = new CFArray() );
	$array->add( $macro_group );

	$xml = $macro_group_plist->toXML(TRUE);
	file_put_contents($file, $xml);
}

function export_macros($macro_group) {
	$macros = $macro_group->Macros;
	$macro_group->del('Macros');

	foreach ((array) $macros->getValue() as $macro) {
		$group = $macro_group;
		$group->add( 'Macros', $array = new CFArray() );
		$array->add($macro);
		create_kmmacros_file($group, $macro);
	}
}

function get_kmmacro_name($macro_group) {
	$name = '';
	if ($macro_group && is_object($macro_group)) {
		if (is_object($macro_group->Name)) {
			$name = $macro_group->Name->getValue();
		}
	}
	if (empty($name)) {
		$name = $macro_group->UID->getValue();
	}
	return $name;
}

function msg($message) {
	if (VERBOSE) {
		echo $message . PHP_EOL;
	}
}
