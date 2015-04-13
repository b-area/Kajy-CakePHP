<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Subject'), ['action' => 'edit', $subject->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subject'), ['action' => 'delete', $subject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Kilasies'), ['controller' => 'Kilasies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kilasy'), ['controller' => 'Kilasies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grades'), ['controller' => 'Grades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grade'), ['controller' => 'Grades', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="subjects view large-10 medium-9 columns">
    <h2><?= h($subject->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($subject->name) ?></p>
            <h6 class="subheader"><?= __('Kilasy') ?></h6>
            <p><?= $subject->has('kilasy') ? $this->Html->link($subject->kilasy->id, ['controller' => 'Kilasies', 'action' => 'view', $subject->kilasy->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($subject->id) ?></p>
            <h6 class="subheader"><?= __('Teacher') ?></h6>
            <p><?= $this->Number->format($subject->teacher) ?></p>
            <h6 class="subheader"><?= __('Coefficient') ?></h6>
            <p><?= $this->Number->format($subject->coefficient) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Grades') ?></h4>
    <?php if (!empty($subject->grades)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Grade') ?></th>
            <th><?= __('Subject Id') ?></th>
            <th><?= __('Student') ?></th>
            <th><?= __('Session Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($subject->grades as $grades): ?>
        <tr>
            <td><?= h($grades->id) ?></td>
            <td><?= h($grades->grade) ?></td>
            <td><?= h($grades->subject_id) ?></td>
            <td><?= h($grades->student) ?></td>
            <td><?= h($grades->session_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Grades', 'action' => 'view', $grades->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Grades', 'action' => 'edit', $grades->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Grades', 'action' => 'delete', $grades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grades->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
