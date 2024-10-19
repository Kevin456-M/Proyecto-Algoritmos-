<?= $this->extend("layouts/default") ?>

<?= $this->Section("title ") ?>New task<?= $this->endSection() ?>

<?= $this->section("content") ?>  

<h1 class="title">New task</h1>

<?php if (session()->has('errors')): ?> 

    <ul>
        <?php foreach(session('errors') as $errors): ?> 
            <li><?= $errors ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?> 

<?= form_open("/tasks/create") ?> 

<?= $this->include('/Tasks/form') ?>  

    
    <div class="control">
    <button class="button is-primary">Save</button>
        

<a class="button is-link" href="<?= site_url("tasks") ?>">Cancel</a>
        </div>
</form> 

<?= $this->endSection() ?>  