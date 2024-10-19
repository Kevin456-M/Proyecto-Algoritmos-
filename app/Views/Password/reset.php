<?= $this->extend('layouts/default') ?>

<?= $this->Section('title') ?>Password reset<?= $this->endSection() ?>

<?= $this->section('content') ?>  

<h1 class="title">Password reset</h1>

<?php if (session()->has('errors')) : ?>
    <ul>
        <?php foreach(session('errors')as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<?= form_open("/password/processreset") ?>

<div class="field">
         <label class="label" for="password">password</label>
         <input class="input" type="password" name="password"?>
    </div> 

    <div class="field">
        <label class="label" for="password_confirmation">Repeat password</label>
        <input class="input" type="password" name="password_confirmation">
    </div>

<div class="control">
<button class="button is-primary">Reset password</button>
        </div>

    </form>

<?= $this->endSection() ?>  