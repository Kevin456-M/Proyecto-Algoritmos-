<?= $this->extend("layouts/default") ?>

<?= $this->Section("title ") ?>Edit task<?= $this->endSection() ?>

<?= $this->section("content") ?>  

<h1 class="title">Edit task</h1>

<?php if (session()->has('errors')): ?> 

    <ul>
        <?php foreach(session('errors') as $errors): ?> 
            <li><?= $errors ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?> 

<?= form_open("/tasks/update/" . $task->id) ?> 

<?= $this->include('/Tasks/form') ?>

        <div class="control">
            <button class="button is-primary">Save</button>
       
            <a class="button " href="<?= site_url("/tasks/show/" . $task->id) ?>">Cancel</a>
        </div>
        </div>

</form> 

<?= $this->endSection() ?>  