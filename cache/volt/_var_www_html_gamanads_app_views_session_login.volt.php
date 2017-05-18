<title>Login - GamanAds</title>
<?php $this->assets->outputCss(); ?>
<p><?php $this->flashSess->output() ?></p>
<?= $this->getContent() ?>
<div class="container">
<div class="row">

    <div class="col-md-6">
        <div class="page-header">
            <h2>Log In</h2>
        </div>
        <?= $this->tag->form([]) ?>
            <fieldset>
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="controls">
												<?= $form->render('email', ['class' => 'form-control']) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="controls">
												<?= $form->render('password', ['class' => 'form-control']) ?>
                    </div>
                </div>
                <div class="form-group">
										<?= $form->render('Login', ['class' => 'btn btn-primary btn-large']) ?>
                </div>
            </fieldset>
						<?= $form->render('csrf', ['value' => $this->security->getToken()]) ?>
        </form>
    </div>

    <div class="col-md-6">

        <div class="page-header">
            <h2>Don't have an account yet?</h2>
        </div>

        <p>Create an account offers the following advantages:</p>
        <ul>
            <li>Create, track and export your invoices online</li>
            <li>Gain critical insights into how your business is doing</li>
            <li>Stay informed about promotions and special packages</li>
        </ul>

        <div class="clearfix center">
            <?= $this->tag->linkTo(['session/signup', 'Sign Up', 'class' => 'btn btn-primary btn-large btn-success']) ?>
						<?= $this->tag->linkTo(['session/forgotPassword', 'Forgot my password', 'class' => 'btn btn-primary btn-large']) ?>
        </div>
    </div>

</div>

</div>

 <?php $this->assets->outputJs(); ?>
