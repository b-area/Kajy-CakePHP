<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Address'), ['action' => 'edit', $address->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Address'), ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="addresses view large-10 medium-9 columns">
    <h2><?= h($address->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Address Line1') ?></h6>
            <p><?= h($address->address_line1) ?></p>
            <h6 class="subheader"><?= __('Address Line2') ?></h6>
            <p><?= h($address->address_line2) ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $address->has('user') ? $this->Html->link($address->user->id, ['controller' => 'Users', 'action' => 'view', $address->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($address->id) ?></p>
            <h6 class="subheader"><?= __('Zip Code') ?></h6>
            <p><?= $this->Number->format($address->zip_code) ?></p>
            <h6 class="subheader"><?= __('Province Id') ?></h6>
            <p><?= $this->Number->format($address->province_id) ?></p>
            <h6 class="subheader"><?= __('Region Id') ?></h6>
            <p><?= $this->Number->format($address->region_id) ?></p>
            <h6 class="subheader"><?= __('District Id') ?></h6>
            <p><?= $this->Number->format($address->district_id) ?></p>
            <h6 class="subheader"><?= __('Commune Id') ?></h6>
            <p><?= $this->Number->format($address->commune_id) ?></p>
            <h6 class="subheader"><?= __('Fokontany Id') ?></h6>
            <p><?= $this->Number->format($address->fokontany_id) ?></p>
        </div>
    </div>
</div>
