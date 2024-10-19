<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete task<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1 class="title">Delete task</h1>

<p class="has-text-weight-bold">Are you sure?</p> 

<?= form_open("/tasks/delete/" . $task->id) ?>

<div class="control">
    <button class="button is-primary">Yes</button>

    <a  class="button" href="<?= site_url('/tasks/show/' . $task->id) ?>">Cancel</a>
</div>

</form>  

<?= $this->endSection() ?>  