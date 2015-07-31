<?php

class PluginAlltags extends Plugin {

	public function Activate() {
		return true;
	}
	
	/**
     * Инициализация плагина
     */
    public function Init() {
        $this->Viewer_AppendStyle(Plugin::GetTemplateWebPath(__CLASS__) . 'assets/css/alltags.css');
        $this->Viewer_AppendScript(Plugin::GetTemplateDir(__CLASS__) . 'assets/js/highlight.js');
    }	
}

?>
