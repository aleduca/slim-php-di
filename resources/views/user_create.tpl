{extends file="layout.tpl"}

{block name=title}
  User Create
{/block}

{block name=body}
  {if $success}
    <div class="alert alert-success">{$success}</div>
  {/if}

  {if $error}
    <div class="alert alert-error">{$error}</div>
  {/if}
  <form method="post" action="/register">
    <div class="mb-3">
      {if isset($validate, $validate.firstName)}
        <div class="alert alert-danger">{$validate.firstName}</div>
      {/if}
      <label class="form-label">First Name</label>
      <input type="text" class="form-control" name="firstName" value="Alexandre">
    </div>
    <div class="mb-3">
      {if isset($validate, $validate.lastName)}
        <div class="alert alert-danger">{$validate.lastName}</div>
      {/if}
      <label class="form-label">Last Name</label>
      <input type="text" class="form-control" name="lastName" value="Cardoso">
    </div>
    <div class="mb-3">
      {if isset($validate, $validate.email)}
        <div class="alert alert-danger">{$validate.email}</div>
      {/if}
      <label class="form-label">Email</label>
      <input type="text" class="form-control" name="email" value="xandecar@hotmail.com">
    </div>
    <div class="mb-3">
      {if isset($validate, $validate.password)}
        <div class="alert alert-danger">{$validate.password}</div>
      {/if}
      <label class="form-label">Password</label>
      <input type="text" class="form-control" name="password" value="123456">
    </div>
    <div class="mb-3">
      {if isset($validate, $validate.confirm_password)}
        <div class="alert alert-danger">{$validate.confirm_password}</div>
      {/if}
      <label class="form-label">Confirm Password</label>
      <input type="text" class="form-control" name="confirm_password" value="123456">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
{/block}