{extends file="../main.tpl"}
{block name="title"}Groups list{/block}
{block name="page_groups"}active{/block}
{block name="content"}
<div class="container-fluid content">
    <div class="row-fluid">
        <div class="span2 leftside">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="{base_url()}groups/">Groups</a></li>
                <li><a href="{base_url()}groups/add">Add group</a></li>
            </ul>
        </div>
        <div class="span10">

            {breadcrumb}

            <div class="page-header">
                <h1>Groups list</h1>
            </div>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>ID</th>
                    <th>Group name</th>
                    <th>Description</th>
                    <th width=100></th>
                    <th width=100></th>
                </tr>
                {foreach $groups as $group}
                    <tr>
                        <td>{$group.g_id}</td>
                        <td><a href="{base_url()}groups/show/{$group.g_id}">{$group.g_name}</a></td>
                        <td>{$group.g_desc}</td>
                        <td><a href="{base_url()}groups/edit/{$group.g_id}">Edit</a></td>
                        <td><a href="{base_url()}groups/delete/{$group.g_id}">Delete</a></td>
                    </tr>
                {foreachelse}
                    <tr>
                        <td colspan="5">Groups not found</td>
                    </tr>
                {/foreach}
            </table>

        </div>
    </div>
</div>
{/block}