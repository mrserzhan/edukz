{extends file="../main.tpl"}
{block name="title"}Add group{/block}
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

            <form class="form-horizontal">
                <div class="control-group">
                    <label class="control-label" for="name">Name</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="name" name="name" placeholder="Name">
                        <span class="label label-warning help-inline">Warning</span>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
{/block}