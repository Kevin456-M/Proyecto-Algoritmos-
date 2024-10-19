<?= $this->extend('layouts/default') ?>

<?= $this->Section('title') ?>Password reset<?= $this->endSection() ?>

<?= $this->section('content') ?>  

<h1 class="title">Password reset</h1>

<p class="has-text-weight-bold">Password reset succesful.</p>

<a class="button is-link" href="<?= site_url("/login") ?>">Login</a></p>

<?= $this->endSection() ?>  