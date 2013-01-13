{extends file="../main.tpl"}
{block name="title"}Add group{/block}
{block name="page_users"}active{/block}
{block name="content"}
<div class="container-fluid content">
    <div class="row-fluid">
        <div class="span2 leftside">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{base_url()}users/">Users</a></li>
                <li class="active"><a href="{base_url()}users/add">Add user</a></li>
            </ul>
        </div>
        <div class="span10">

            {breadcrumb}

            <div class="page-header">
                <h1>Add user</h1>
            </div>

            <form class="form-horizontal" method="POST">
                
                <label for="fname"><h4>First name</h4></label>
                <input type="text" class="span4" id="fname" name="fname" placeholder="First name">
                <span class="label help-inline">{form_error('fname')}</span>
                <br/><br/>


                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a class="btn" href="{base_url()}users/">Back</a>
                </div>
            </form>

        </div>
    </div>
</div>
{/block}