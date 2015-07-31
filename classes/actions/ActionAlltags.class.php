<?php

class PluginAlltags_ActionAlltags extends ActionPlugin {

	protected $sMenuItemSelect = 'alltags';

	public function Init() {
        $this->SetDefaultEvent('index');	
	}

	protected function RegisterEvent() {		
	    $this->AddEvent('index','EventIndex');
	}	

	protected function EventIndex() {	
              
		/**	
		/**
		 * Получаем список тегов
		 */
		$aTags=$this->oEngine->Topic_GetOpenTopicTags(Config::Get('plugin.alltags.maxtags'));
		/**
		 * Расчитываем логарифмическое облако тегов
		 */
		if ($aTags) {
			$iMinSize=1; // минимальный размер шрифта
			$iMaxSize=10; // максимальный размер шрифта
			$iSizeRange=$iMaxSize-$iMinSize;
			
			$iMin=10000;
			$iMax=0;
			foreach ($aTags as $oTag) {
				if ($iMax<$oTag->getCount()) {
					$iMax=$oTag->getCount();
				}
				if ($iMin>$oTag->getCount()) {
					$iMin=$oTag->getCount();
				}
			}			
			
			$iMinCount=log($iMin+1);
			$iMaxCount=log($iMax+1);
			$iCountRange=$iMaxCount-$iMinCount;
			if ($iCountRange==0) {
				$iCountRange=1;
			}
			foreach ($aTags as $oTag) {
				$iTagSize=$iMinSize+(log($oTag->getCount()+1)-$iMinCount)*($iSizeRange/$iCountRange);
				$oTag->setSize(round($iTagSize)); // результирующий размер шрифта для тега
			}
			/**
		 	* Устанавливаем шаблон вывода
		 	*/
			$this->Viewer_Assign("aTags",$aTags);
			$this->SetTemplateAction('index');
		}

	}
}
?>
