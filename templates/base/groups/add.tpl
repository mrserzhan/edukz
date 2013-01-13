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

            <form class="form-horizontal" method="POST">
                <h4>Name</h4>
                <input type="text" class="span4" id="name" name="name" placeholder="Name">
                <span class="label help-inline">{form_error('name')}</span>
                <br/><br/>

                <h4>Desciption</h4>
                <textarea rows="3" class="span4" name="desc"></textarea>
                <br/><br/>

                <h4>Privelegues</h4>
                {foreach from=$privs key=g_name item=group}
                    <div class="checkbox-group">
                        <h6>{$g_name}</h6>
                        {foreach from=$group key=key item=item}
                            <label class="checkbox">
                                <input type="checkbox" name="{$key}" value="123"> {$item}
                            </label>
                        {/foreach}
                    </div>
                {/foreach}
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a class="btn" href="{base_url()}groups/">Back</a>
                </div>
            </form>

        </div>
    </div>
</div>
{/block}