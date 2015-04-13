<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Emergency'), ['action' => 'edit', $emergency->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Emergency'), ['action' => 'delete', $emergency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emergency->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emergencies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emergency'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="emergencies view large-10 medium-9 columns">
    <h2><?= h($emergency->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($emergency->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($emergency->last_name) ?></p>
            <h6 class="subheader"><?= __('Relationship') ?></h6>
            <p><?= h($emergency->relationship) ?></p>
            <h6 class="subheader"><?= __('Primary Phone') ?></h6>
            <p><?= h($emergency->primary_phone) ?></p>
            <h6 class="subheader"><?= __('Secondary Phone') ?></h6>
            <p><?= h($emergency->secondary_phone) ?></p>
            <h6 class="subheader"><?= __('Full Address') ?></h6>
            <p><?= h($emergency->full_address) ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $emergency->has('user') ? $this->Html->link($emergency->user->id, ['controller' => 'Users', 'action' => 'view', $emergency->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($emergency->id) ?></p>
        </div>
    </div>
</div>
