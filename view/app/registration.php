<div class="row">
  <form method="post" action="index.php" class="col s12">
    <div class="row">
      <div class="input-field col s6">
        <input id="name" type="text" name="name" class="validate" value="">
        <label for="name">Name</label>
      </div>
      <div class="input-field col s6">
        <input id="firstname" type="text" name="firstname" class="validate" value="">
        <label for="firstname">First Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="age" type="text" name="age" class="validate" value="">
        <label for="age">age</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="password" type="email" name="email" class="validate" value="">
        <label for="email">Email</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="email" type="password" name="password" class="validate" value="">
        <label for="password">Password</label>
      </div>
    </div>
   <input class="waves-effect waves-light btn" type="submit" name="send" value="S'inscrire" >
  </form>
</div>

<div class="row">
  <form method="post" action="controler/app/home.php" class="col s12">
    <div class="row">
      <div class="input-field col s12">
        <input id="password" type="email" name="email" class="validate" value="">
        <label for="email">Email</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="email" type="password" name="password" class="validate" value="">
        <label for="password">Password</label>
      </div>
    </div>
   <input class="waves-effect waves-light btn" type="submit" name="send" value="Se Connecter" >
  </form>
</div>
