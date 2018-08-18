<form class="form-horizontal" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Регистрация пользователя</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-mail</label>  
  <div class="col-md-4">
  <input id="email" name="register[email]" type="text" placeholder="" class="form-control input-md" 
  value="<?= htmlspecialchars($this->register['email']) ?>">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Пароль</label>
  <div class="col-md-4">
    <input id="password" name="register[password]" type="password" placeholder="" class="form-control input-md" 
	value="<?= htmlspecialchars($this->register['password']) ?>">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Регистрация</button>
  </div>
</div>

</fieldset>
</form>
