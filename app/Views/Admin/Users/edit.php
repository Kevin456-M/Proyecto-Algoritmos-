<?= $this->extend('layouts/default') ?>

<?= $this->Section('title') ?>Edit user<?= $this->endSection() ?>

<?= $this->section('content') ?>  

<h1 class="title">Edit user</h1>

<?php if (session()->has('errors')): ?> 

    <ul>
        <?php foreach(session('errors') as $errors): ?> 
            <li><?= $errors ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?> 

<?= form_open("/admin/users/update/" . $user->id) ?> 

<?= $this->include('Admin/Users/form') ?>

<div class="control">
<button class="button is-primary">Save</button>
<a class="button" href="<?= site_url("/admin/users/show/" . $user->id) ?>">Cancel</a>
        </div>

</form> 

<?= $this->endSection() ?>  