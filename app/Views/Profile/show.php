<?= $this->extend('layouts/default') ?>

<?= $this->Section('title') ?>Profile<?= $this->endSection() ?>

<?= $this->section('content') ?>  

<h1 class="title">Profile</h1>

<?php if ($user->profile_image): ?>

    <img scr="<?= site_url('profile/image') ?>"with="200" height="200" alt="profile image">

    <div>
    <a class="button is-danger is-light" href="<?= site_url('/profileimage/delete') ?>">Delete profile image</a>   
    </div>

<?php else: ?>

    <img scr="<?= site_url('/images/blank_profile.png') ?>" width="200" height="200" alt="profile image">

<?php endif; ?>

<div class="content">

    <dl>
        <dt class="has-text-weight-bold">Name</dt>
        <dd><?= esc($user->name) ?></dd>

        <dt class="has-text-weight-bold">email</dt>
        <dd><?= esc($user->email) ?></dd>
    </dl>
</div>

<a class="button is-link" href="<?= site_url("/profile/edit") ?>">Edit</a>

<a class="button is-link" href="<?= site_url("/profile/editpassword") ?>">Changed password</a>

<a class="button is-link " href="<?= site_url("/profileimage/edit") ?>">Changed profile image</a>

<?= $this->endSection() ?>   