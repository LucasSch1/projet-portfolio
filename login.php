<!-- On inclut la navbar  -->
<?php include('elements/header.php'); ?>
<div class="login-form d-flex align-items-center justify-content-center bg-dark align-middle">
    <div class="login-form-container bg-info">
        <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Adresse mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Votre mot de passe">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
