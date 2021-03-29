{include file="header.tpl"}
{include file="menu.tpl"}
<div class="container">
    <div class="modal fade" id="del_scheme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="del_scheme_label_h">Delete Scheme</h4>
				</div>
				<div class="modal-body">
					<h4>Do you really want to delete this Scheme ?</h4>
				</div>
				<div class="modal-footer">
					<button type="button" class="app_information_label-yes btn btn-primary text-capitalize" data-dismiss="modal" data-value="">Yes</button>
				    <button type="button" class="btn btn-default text-capitalize" data-dismiss="modal">No</button>
				</div>
			</div>
		</div>
	</div>
    <div class="row">
        <div class="col-md-12 margin-bottom-10">
			<a  href="index.php?p=sa_add_scheme" class="btn btn-primary fq-text-lg text-uppercase">Add Scheme</a>
		</div>
		<div class="col-md-12">
			<table id="app_schemeTable" class="table table-striped dataTable no-footer" role="grid" aria-describedby="schemeTable">
				<thead>
					<th class="text-center fq-theme-bg">Id</th>
                    <th class="text-center fq-theme-bg">State Name</th>
					<th class="text-center fq-theme-bg">Scheme</th>
                    <th class="text-center fq-theme-bg">Scheme Type</th>
                    <th class="text-center fq-theme-bg" colspan="3">Action</th>
				</thead>
				<tbody style="text-align:center;">
                    {if $schemes}
                        {foreach $schemes as $scheme}
                            <tr>
                                <td>{$scheme['id']}</td>
                                <td>{$scheme['state_name']}</td>
                                <td>{$scheme['scheme_name']}</td>
                                <td>{if $scheme['type'] == 0}Link{else if $scheme['type'] == 1}File{/if}
                                <td class="text-center text-capitalize vertical_center">
                                    <a href="index.php?p=sa_add_scheme&id={$scheme['id']}" class="glyphicon glyphicon-edit color-red curser-pointer" aria-hidden="Edit" data-toggle="tooltip" data-placement="top" title="Edit"></a>
                                    <a href="index.php?p=sa_scheme_process&id={$scheme['id']}&action=delete" class="glyphicon glyphicon-trash color-red curser-pointers" data-value="{$scheme['id']}"  aria-hidden="Delete" data-toggle="tooltip" data-placement="top" data-target="" title="Delete App Information??"></a>
                                </td>
                            </tr>
                        {/foreach}
                    {else}
                        <tr class="odd">
                            <td class="dataTables_empty" colspan="7" valign="top">
                                No data available in table
                            </td>
                        </tr>
                    {/if}
                </body>
            </table>
        </div>
    </div>
</div>