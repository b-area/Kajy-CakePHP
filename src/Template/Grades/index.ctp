<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Grade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sessions'), ['controller' => 'Sessions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Session'), ['controller' => 'Sessions', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="grades index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('grade') ?></th>
            <th><?= $this->Paginator->sort('subject_id') ?></th>
            <th><?= $this->Paginator->sort('student') ?></th>
            <th><?= $this->Paginator->sort('session_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($grades as $grade): ?>
        <tr>
            <td><?= $this->Number->format($grade->id) ?></td>
            <td><?= $this->Number->format($grade->grade) ?></td>
            <td>
                <?= $grade->has('subject') ? $this->Html->link($grade->subject->name, ['controller' => 'Subjects', 'action' => 'view', $grade->subject->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($grade->student) ?></td>
            <td>
                <?= $grade->has('session') ? $this->Html->link($grade->session->name, ['controller' => 'Sessions', 'action' => 'view', $grade->session->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $grade->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $grade->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $grade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grade->id)]) ?>
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
