<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Addresses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="addresses form large-10 medium-9 columns">
    <?= $this->Form->create($address); ?>
    <fieldset>
        <legend><?= __('Add Address') ?></legend>
        <?php
            echo $this->Form->input('address_line1');
            echo $this->Form->input('address_line2');
            echo $this->Form->input('zip_code');
            echo $this->Form->input('province_id');
            echo $this->Form->input('region_id');
            echo $this->Form->input('district_id');
            echo $this->Form->input('commune_id');
            echo $this->Form->input('fokontany_id');
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
