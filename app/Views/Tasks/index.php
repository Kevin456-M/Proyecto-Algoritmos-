<?= $this->extend("layouts/default") ?>

<?= $this->Section("title ") ?>Tasks<?= $this->endSection() ?>

<?= $this->section("content") ?>
<h1 class="title">Tasks</h1>

<a class="button" href="<?= site_url("/tasks/new") ?>">New task</a> 

<div class="field">
        <label class="label" for="query">Search</label>
        <input class="input" name="query" id="query">
    </div>

<?php if ($tasks): ?>

    <ul>
        <?php foreach($tasks as $task): ?>
            <li>
            <a href="<?= site_url("/tasks/show/" . $task->id) ?>">      
                       <?= esc($task->description) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <?= $pager->simpleLinks() ?> 

    <?php else: ?>
            <p class="has-text-weight-bold">No tasks found.</p>

    <?php endif; ?>

        <script src="<?= site_url('/js/auto-complete.min.js') ?>"></script>

        <script>
            var searchUrl = "<?= site_url('/tasks/search?q=')?>";
            var showUrl = "<?= site_url('/tasks/show')?>";
            var data;
            var i;

            var searchAutoComplete = new autoComplete({
                selector: 'input[name="query"]', 
                cache: false,
                source: function(term, response) {

                    var request = new XMLHttpRequest();

                    request.open('GET', searchUrl + term, true);

                    request.onload = function() {

                        data = JSON.parse(this.response);

                        i = 0;

                        var suggestions = data.map(task => task.description);

                        response(suggestions);
                };

                request.send();

            },
            renderItem: function (item, search) {

                var id = data[i].id;

                i++;

                return '<div class="autocomplete-suggestions" data-id="' +id '">' + itme + '</div>'
            }, 

            onSelect: function(e, term, item){

                    window.location.href = showUrl + item.getAtribute('data-id');
            }
        }); 

        </script>

<?= $this->endSection() ?>
    