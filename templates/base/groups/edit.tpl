{extends file="../main.tpl"}
{block name="title"}Add group{/block}
{block name="page_groups"}active{/block}
{block name="content"}
<div class="container-fluid content">
    <div class="row-fluid">
        <div class="span2 leftside">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{base_url()}groups/">Groups</a></li>
                <li><a href="{base_url()}groups/add">Add group</a></li>
            </ul>
        </div>
        <div class="span10">

            {breadcrumb}

            <div class="page-header">
                <h1>Edit group {$group.g_name}</h1>
            </div>

            <form class="form-horizontal" method="POST">
                <h4>Name</h4>
                <input type="text" class="span4" id="name" value="{$group.g_name}" name="name" placeholder="Name">
                <span class="label help-inline">{form_error('name')}</span>
                <br/><br/>

                <h4>Desciption</h4>
                <textarea rows="3" class="span4" name="desc">{$group.g_desc}</textarea>
                <br/><br/>

                <h4>Privelegues</h4>
                {foreach from=$privs key=g_name item=groups}
                    <div class="checkbox-group">
                        <h6>{$g_name}</h6>
                        {foreach from=$groups key=key item=item}
                            <label class="checkbox">
                                <input type="checkbox" {if in_array($key,$group.g_privs)}checked="checked"{/if} name="{$key}" value="123"> {$item}
                            </label>
                        {/foreach}
                    </div>
                {/foreach}
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn" href="{base_url()}groups/">Back</a>
                </div>
            </form>

        </div>
    </div>
</div>
{/block}