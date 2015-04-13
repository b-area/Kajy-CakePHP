<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Grades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sessions'), ['controller' => 'Sessions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Session'), ['controller' => 'Sessions', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="grades form large-10 medium-9 columns">
    <?= $this->Form->create($grade); ?>
    <fieldset>
        <legend><?= __('Add Grade') ?></legend>
        <?php
            echo $this->Form->input('grade');
            echo $this->Form->input('subject_id', ['options' => $subjects]);
            echo $this->Form->input('student');
            echo $this->Form->input('session_id', ['options' => $sessions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
