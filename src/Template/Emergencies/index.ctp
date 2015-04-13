<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Emergency'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="emergencies index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('first_name') ?></th>
            <th><?= $this->Paginator->sort('last_name') ?></th>
            <th><?= $this->Paginator->sort('relationship') ?></th>
            <th><?= $this->Paginator->sort('primary_phone') ?></th>
            <th><?= $this->Paginator->sort('secondary_phone') ?></th>
            <th><?= $this->Paginator->sort('full_address') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($emergencies as $emergency): ?>
        <tr>
            <td><?= $this->Number->format($emergency->id) ?></td>
            <td><?= h($emergency->first_name) ?></td>
            <td><?= h($emergency->last_name) ?></td>
            <td><?= h($emergency->relationship) ?></td>
            <td><?= h($emergency->primary_phone) ?></td>
            <td><?= h($emergency->secondary_phone) ?></td>
            <td><?= h($emergency->full_address) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $emergency->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emergency->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emergency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emergency->id)]) ?>
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
