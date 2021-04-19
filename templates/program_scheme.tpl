{include file="header.tpl"}
{include file="menu.tpl"}
<div class="container body-content" style="{if !$schemes}font-size: 40px; padding: 20px !important;{else}font-size: 20px;{/if}">
    {if $schemes}
        <ul class="hand-bullets">
            {foreach $schemes as $scheme}
                {if $scheme['type']}
                    <li><a href="{$upload_path}{$scheme['link']}" class="link-type text-uppercase" target="_blank">{$scheme['scheme_name']}</a></li>
                {else}
                    <li><a href="{$scheme['link']}" class="link-type text-uppercase" target="_blank">{$scheme['scheme_name']}</a></li>
                {/if}
            {/foreach}
        </ul>
    {else}
        No Scheme Found...
    {/if}
</div>
{include file="footer.tpl"}