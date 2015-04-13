<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Address'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="addresses index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('address_line1') ?></th>
            <th><?= $this->Paginator->sort('address_line2') ?></th>
            <th><?= $this->Paginator->sort('zip_code') ?></th>
            <th><?= $this->Paginator->sort('province_id') ?></th>
            <th><?= $this->Paginator->sort('region_id') ?></th>
            <th><?= $this->Paginator->sort('district_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($addresses as $address): ?>
        <tr>
            <td><?= $this->Number->format($address->id) ?></td>
            <td><?= h($address->address_line1) ?></td>
            <td><?= h($address->address_line2) ?></td>
            <td><?= $this->Number->format($address->zip_code) ?></td>
            <td><?= $this->Number->format($address->province_id) ?></td>
            <td><?= $this->Number->format($address->region_id) ?></td>
            <td><?= $this->Number->format($address->district_id) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $address->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $address->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
