<?php

$config = array ();

Config::Set('router.page.alltags', 'PluginAlltags_ActionAlltags');

$config ['maxtags'] = 1000;
$config ['pagetags'] = 'alltags';

return $config;
?>
