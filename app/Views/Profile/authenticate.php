<?= $this->extend('layouts/default') ?>

<?= $this->Section('title') ?>Edit profile<?= $this->endSection() ?>

<?= $this->section('content') ?>  

<h1 class="title">Edit profile</h1>

<p class="has-text-weight-bold">Please enter your password to continue</p>

<?= form_open("/profile/processauthenticate") ?>

<div class="field">
            <label class="label" for="password">Password</label>
            <input class="input" type="password" name="password">
        </div>

        <div class="control">
         <button class="button is-primary">Save</button>

    <a class="button" href="<?= site_url('/profile/show') ?>">Cancel</a>
</div>

</form>

<?= $this->endSection() ?>  