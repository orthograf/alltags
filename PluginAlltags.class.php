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
    }	
}

?>
