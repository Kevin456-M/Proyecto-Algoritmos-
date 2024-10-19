<?= $this->extend("layouts/default") ?>

<?= $this->Section("title ") ?>New user<?= $this->endSection() ?>

<?= $this->section("content") ?>  

<h1 class="title">New user</h1>

<div class="container">

<?php if (session()->has('errors')): ?> 

    <ul>
        <?php foreach(session('errors') as $errors): ?> 
            <li><?= $errors ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?> 

<?= form_open("/admin/users/create") ?> 

<?= $this->include('/Admin/Users//form') ?> 

 <div class="field is-group">
        <div class="control">
            <button class="button is-primary">Save</button>
        </div> 

    <div class="control">
    <a class="button" href="<?= site_url("/admin/users") ?>">Cancel</a>
        </div>
        </div>

</form> 

<?= $this->endSection() ?>  