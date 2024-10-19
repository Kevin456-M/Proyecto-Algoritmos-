<?= $this->extend('layouts/default') ?>

<?= $this->Section('title') ?>Forgot password<?= $this->endSection() ?>

<?= $this->section('content') ?>  

<h1 class="title">Forgot password</h1>

<?= form_open("/password/processforgot") ?>

    <div class="field"> 
        <label class="label" for="email">email</label>
        <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>

    <div class="control">
    <button class="button is-primary">Send</button>
</div>

</form>

<?= $this->endSection() ?>   