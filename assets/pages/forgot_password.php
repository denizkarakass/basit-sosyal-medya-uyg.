
    <div class="login">
        <div class="col-lg-4 col-md-8 col-sm-12 bg-white border rounded p-4 shadow-sm">
            <?php
if(isset($_SESSION['forgot_code']) && !isset($_SESSION['auth_temp'])){
    $action = 'verifycode';
}elseif(isset($_SESSION['forgot_code']) && isset($_SESSION['auth_temp'])){
    $action = 'changepassword';
}else{
    $action= 'forgotpassword';
}
            ?>
            <form method="post" action="assets/php/actions.php?<?=$action?>">
                <div class="d-flex justify-content-center">


                </div>
                <h1 class="h5 mb-3 fw-normal">Şifreni mi unuttun ?</h1>
<?php
if($action=='forgotpassword'){
    ?>
  <div class="form-floating">
                    <input type="email" name="email" class="form-control rounded-0" placeholder="username/email">
                    <label for="floatingInput">emailinizi giriniz</label>
                </div>
                <?=showError('email')?>

<br>
                <button class="btn btn-primary" type="submit">Doğrulama Kodu Gönder</button>

    <?php
}
?>
   
   
   <?php
if($action=='verifycode'){
    ?>
<p>Doğrulama Kodunuzu Giriniz  - <?=$_SESSION['forgot_email']?></p>
                <div class="form-floating mt-1">

                    <input type="text" name="code" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">######</label>
                </div>
                <?=showError('email_verify')?>

                <br>
                <button class="btn btn-primary" type="submit">Kod Doğrulandı</button>

    <?php
}
?>


<?php
if($action=='changepassword'){
    ?>
<p>Yeni şifrenizi giriniz.  - <?=$_SESSION['forgot_email']?></p>
<div class="form-floating mt-1">
                    <input type="password" name="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">yeni şifre</label>
                </div> 
                <?=showError('password')?>

                <br>
                <button class="btn btn-primary" type="submit">Şifre Değiştir</button>


    <?php
}
?>

                 
            
                <br>
                <br>

                <a href="?login" class="text-decoration-none mt-5"><i class="bi bi-arrow-left-circle-fill"></i> Giriş Yapmak İçin Geri Dön</a>
            </form>
        </div>
    </div>

