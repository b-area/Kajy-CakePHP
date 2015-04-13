<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Sessions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grades'), ['controller' => 'Grades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grade'), ['controller' => 'Grades', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="sessions form large-10 medium-9 columns">
    <?= $this->Form->create($session); ?>
    <fieldset>
        <legend><?= __('Add Session') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('start_date', array('empty' => true, 'default' => ''));
            echo $this->Form->input('end_date', array('empty' => true, 'default' => ''));
            echo $this->Form->input('school_year');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
