<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Subject'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kilasies'), ['controller' => 'Kilasies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kilasy'), ['controller' => 'Kilasies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grades'), ['controller' => 'Grades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grade'), ['controller' => 'Grades', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="subjects index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('teacher') ?></th>
            <th><?= $this->Paginator->sort('coefficient') ?></th>
            <th><?= $this->Paginator->sort('kilasy_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($subjects as $subject): ?>
        <tr>
            <td><?= $this->Number->format($subject->id) ?></td>
            <td><?= h($subject->name) ?></td>
            <td><?= $this->Number->format($subject->teacher) ?></td>
            <td><?= $this->Number->format($subject->coefficient) ?></td>
            <td>
                <?= $subject->has('kilasy') ? $this->Html->link($subject->kilasy->id, ['controller' => 'Kilasies', 'action' => 'view', $subject->kilasy->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $subject->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subject->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->id)]) ?>
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
