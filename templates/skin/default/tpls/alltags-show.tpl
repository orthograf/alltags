<div class="panel panel-default">
    <div class="panel-body">
   
    <div class="form-group">
        <input type="text" placeholder="{$aLang.search}" id="text-search" class="form-control">
    </div>

        <div class="panel-content">
			<div class="js-widget-tags-all">
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

<script>
   $(function() {
    $('#text-search').bind('keyup change', function(ev) {
        var searchTerm = $(this).val();
 
        $('.panel-content').removeHighlight();
        if ( searchTerm ) {
            $('.panel-content').highlight( searchTerm );
        }
    });
});
</script>
