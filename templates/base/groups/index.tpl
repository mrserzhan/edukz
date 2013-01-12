{extends file="../main.tpl"}
{block name="title"}Groups list{/block}
{block name="page_groups"}active{/block}
{block name="content"}
<div class="container-fluid content">
    <div class="row-fluid">
        <div class="span2">

        </div>
        <div class="span10">
            <div class="page-header">
                <ul class="nav nav-pills">
                    <li><a href="{base_url()}groups/">Groups</a></li>
                    <li class="active"><a href="{base_url()}groups/add">Add group</a></li>
                </ul>
                <h1>Add group</h1>
            </div>
        </div>
    </div>
</div>
{/block}