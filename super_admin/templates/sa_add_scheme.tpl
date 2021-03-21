{include file='header.tpl'}
{include file="menu.tpl"}
	<div class="container">
        <div class="row">
            <div class="col-md-12 margin-bottom-10"></div>
            <div class="col-md-12" style="border: 1px solid #CCCCCC; border-radius: 3px; padding: 20px;">
                <form class="form" action="index.php?p=sa_add_scheme_process" id="scheme_form" method="post" enctype="multipart/form-data">
                    <h1 class="text-center" style="margin-bottom: 20px;">{if isset($id)}Edit{else}Add{/if} Scheme</h1>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-12"><label for="state_name"><strong>State Name</strong></label></div>
                            <div class="col-md-10 col-sm-8 col-xs-12">
                                {if isset($scheme['state_name'])}
                                    <select class="form-control" name="state_name" disabled>
                                        <option value="{$scheme['st_id']}">{$scheme['state_name']}</option>
                                    </select>
                                {else}
                                    <select class="form-control" name="state_name">
                                        <option value="">Select</option>
                                        {if isset($states)}
                                            {foreach $states as $state}
                                                <option value="{$state['id']}">{$state['state_name']}</option>
                                            {/foreach}
                                        {/if}
                                    </select>
                                {/if}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-12"><label for="scheme_name"><strong>Scheme Name</strong></label></div>
                            <div class="col-md-10 col-sm-8 col-xs-12">
                                <input type="text" name="scheme_name" class="form-control" {if isset($scheme['scheme_name'])}value="{$scheme['scheme_name']}"{/if}>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-12"><label for="type"><strong>Type</strong></label></div>
                            <div class="col-md-10 col-sm-8 col-xs-12">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="type" value="0" {if isset($scheme['type']) && $scheme['type'] == 0}checked{else if !isset($scheme['type'])}checked{/if}> Link
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="type" value="1" {if isset($scheme['type']) && $scheme['type'] == 1}checked{/if}> File
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="link" {if isset($scheme['type']) && $scheme['type'] != 0}style="display: none;"{/if}>
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-12"><label for="Link"><strong>Link</strong></label></div>
                            <div class="col-md-10 col-sm-8 col-xs-12">
                                <input type="text" name="link" class="form-control" {if isset($scheme['type']) && $scheme['type'] == 0}value="{$schme['link']}"{/if}>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="file" {if !isset($scheme['type']) || $scheme['type'] != 1}style="display: none;"{/if}>
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-12"><label for="Link"><strong>File</strong></label></div>
                            <div class="col-md-10 col-sm-8 col-xs-12">
                                <input type="file" name="file" {if isset($scheme['type']) && $scheme['type'] == 1}value="{$schme['link']}"{/if}>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-5">
                        <div class=" col-md-12 text-center">
                            <button type="submit" class="btn btn-lg btn-primary ">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>