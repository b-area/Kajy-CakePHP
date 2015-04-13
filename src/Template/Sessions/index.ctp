<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Session'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grades'), ['controller' => 'Grades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grade'), ['controller' => 'Grades', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="sessions index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('start_date') ?></th>
            <th><?= $this->Paginator->sort('end_date') ?></th>
            <th><?= $this->Paginator->sort('school_year') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($sessions as $session): ?>
        <tr>
            <td><?= $this->Number->format($session->id) ?></td>
            <td><?= h($session->name) ?></td>
            <td><?= h($session->start_date) ?></td>
            <td><?= h($session->end_date) ?></td>
            <td><?= h($session->school_year) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $session->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $session->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $session->id], ['confirm' => __('Are you sure you want to delete # {0}?', $session->id)]) ?>
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
