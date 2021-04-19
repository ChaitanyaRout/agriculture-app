{include file="header.tpl"}
{include file="menu.tpl"}
<div class="container body-content" style="{if !$crops}font-size: 40px; padding: 20px !important;{else}font-size: 20px;{/if}">
    {if $crops}
        <ul class="hand-bullets">
            {foreach $crops as $crop}
                    <li class="link-type text-uppercase">{$crop['crop_name']}</li>               
            {/foreach}
        </ul>
    {else}
        No Crops Found...
    {/if}
</div>
{include file="footer.tpl"}