{extends file="../main.tpl"}
{block name="title"}Show groups {$group.g_name}{/block}
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
                <h1>{$group.g_name}</h1>
            </div>

            <blockquote>{$group.g_desc}</blockquote>

            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#members">Members</a></li>
                <li><a href="#privs">Privelegues</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="members">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </table>
                </div>
                <div class="tab-pane" id="privs">
                    {foreach from=$privs key=g_name item=groups}
                        <legend>{$g_name}</legend>
                        {foreach from=$groups key=key item=item}
                            {if in_array($key,$group.g_privs)}
                                <dl class="dl-horizontal">
                                    <dt>{$key}</dt>
                                    <dd>{$item}</dd>
                                </dl>
                            {/if}
                        {/foreach}
                    {/foreach}
                </div>
            </div>
            <script>
                $('#myTab a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            })
            </script>
        </div>
    </div>
</div>
{/block}