<div class="panel panel-default">
    <div class="panel-body">
        <div class="panel-content">
			<div class="tab-pane active js-widget-tags-all">
                {if $aTags}
                    <ul class="list-unstyled list-inline tag-cloud word-wrap">
                        {foreach $aTags as $oTag}
                            <li>
                                <a class="link"
                                   href="{router page='tag'}{$oTag->getText()|escape:'url'}/">
                                    <span class="tag-size tag-size-{$oTag->getSize()}">
                                        {$oTag->getText()|escape:'html'}
                                    </span>
                                </a>
                            </li>
                        {/foreach}
                    </ul>
                {else}
                    <div class="bg-warning">{$aLang.widget_tags_empty}</div>
                {/if}
            </div>   
        </div>
    </div>
</div>
