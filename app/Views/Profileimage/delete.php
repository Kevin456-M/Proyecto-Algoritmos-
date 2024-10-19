<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete profile image<?= $this->endSection() ?>

<?= $this->section('content') ?> 

<h1 class="title">Delete profile image</h1>

<p class="has-text-weight-bold">Are you sure?</p> 

<?= form_open("/profileimage/delete") ?>

    <div class="control">
    <button class="button is-primary">Yes</button>

    <a class="button" href="<?= site_url("/profileimage/delete") ?>">Cancel</a>
</div>

</form>  

<?= $this->endSection() ?>  