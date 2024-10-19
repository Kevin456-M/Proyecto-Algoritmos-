<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete user<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1 class="title">Delete user</h1>

<p class="has-text-weight-bold">Are you sure?</p> 

<?= form_open("/admin/users/delete/" . $user->id) ?>

    <div class="control">
    <button class="button is-primary">Yes</button>
    <a class="button" href="<?= site_url('/admin/users/show/' . $user->id) ?>">Cancel</a>

</form>  

<?= $this->endSection() ?>  