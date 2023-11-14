{extends file="layout.tpl"}
{block name=title}
  Users Slim Framework
{/block}
{block name=body}
  <ul class="list-group">
    {foreach $users as $user}
      <li class="list-group-item">{$user.firstName}</li>
    {/foreach}
  </ul>
{/block}