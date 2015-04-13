<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Subjects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Kilasies'), ['controller' => 'Kilasies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kilasy'), ['controller' => 'Kilasies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grades'), ['controller' => 'Grades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grade'), ['controller' => 'Grades', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="subjects form large-10 medium-9 columns">
    <?= $this->Form->create($subject); ?>
    <fieldset>
        <legend><?= __('Add Subject') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('teacher');
            echo $this->Form->input('coefficient');
            echo $this->Form->input('kilasy_id', ['options' => $kilasies]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
