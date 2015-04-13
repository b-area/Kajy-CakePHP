<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="schools index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('type') ?></th>
            <th><?= $this->Paginator->sort('president') ?></th>
            <th><?= $this->Paginator->sort('vice_president') ?></th>
            <th><?= $this->Paginator->sort('full_address') ?></th>
            <th><?= $this->Paginator->sort('primary_phone') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($schools as $school): ?>
        <tr>
            <td><?= $this->Number->format($school->id) ?></td>
            <td><?= h($school->name) ?></td>
            <td><?= h($school->type) ?></td>
            <td><?= $this->Number->format($school->president) ?></td>
            <td><?= $this->Number->format($school->vice_president) ?></td>
            <td><?= h($school->full_address) ?></td>
            <td><?= h($school->primary_phone) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $school->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $school->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $school->id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]) ?>
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
