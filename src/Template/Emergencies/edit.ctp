<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $emergency->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $emergency->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Emergencies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="emergencies form large-10 medium-9 columns">
    <?= $this->Form->create($emergency); ?>
    <fieldset>
        <legend><?= __('Edit Emergency') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('relationship');
            echo $this->Form->input('primary_phone');
            echo $this->Form->input('secondary_phone');
            echo $this->Form->input('full_address');
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
