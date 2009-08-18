<?php

function check_path($path)
{
	if(is_dir($path))
	{
		return "pass";
	}
	else
	{
		return "fail";
	}
}

$page =
		"
		<!DOCTYPE html>
		<title>Install Check | CSScaffold</title>
		<style>
			.pass { color:green; }
			.fail { color:red; }
		</style>
		<dl>
			<dt>Cache Path</dt>
			<dd class='".check_path(CACHEPATH)."'>".CACHEPATH."</dd>
		</dl>
		<dl>
			<dt>System Path</dt>
			<dd class='".check_path(BASEPATH)."'>".BASEPATH."</dd>
		</dl>
		<dl>
			<dt>System URL</dt>
			<dd class='".check_path(join_path(DOCROOT, BASEURL))."'>".BASEURL."</dd>
		</dl>
		<dl>
			<dt>CSS Path</dt>
			<dd class='".check_path(CSSPATH)."'>".CSSPATH."</dd>
		</dl>
		<dl>
			<dt>URL path to the CSS directory</dt>
			<dd class='".check_path(URLPATH)."'>".URLPATH."</dd>
		</dl>
		";
		
echo $page;