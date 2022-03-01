<?php
global $user;
?>
    <div class="login">
        <div class="col-md-4 col-sm-11 bg-white border rounded p-4 shadow-sm">
            <form method="post" action="assets/php/actions.php?verify_email">
                <div class="d-flex justify-content-center">


                </div>
                <h1 class="h5 mb-3 fw-normal">Email ile kimlik doğrulama (<?=$user['email']?>)</h1>


                <p>Emailinize gelen kodu giriniz...</p>
                <div class="form-floating mt-1">

                    <input type="text" name="code" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">######</label>
                </div>
                <?php
if(isset($_GET['resended'])){
    ?>
<p class="text-success">Doğrulama kodu yeniden gönderildi!</p>

<?php
}
                ?>
                <?=showError('email_verify')?>

                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" type="submit">Email Doğrula</button>
                    <a href="assets/php/actions.php?resend_code" class="text-decoration-none" type="submit">Kod Gönder</a>





                </div>
                <br>
                <a href="assets/php/actions.php?logout" class="text-decoration-none mt-5"><i class="bi bi-arrow-left-circle-fill"></i>
                    Çıkış Yap</a>
            </form>
        </div>
    </div>


   