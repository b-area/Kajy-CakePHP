<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Kilasy'), ['action' => 'edit', $kilasy->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Kilasy'), ['action' => 'delete', $kilasy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kilasy->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Kilasies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kilasy'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="kilasies view large-10 medium-9 columns">
    <h2><?= h($kilasy->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Section') ?></h6>
            <p><?= h($kilasy->section) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($kilasy->id) ?></p>
            <h6 class="subheader"><?= __('Level') ?></h6>
            <p><?= $this->Number->format($kilasy->level) ?></p>
            <h6 class="subheader"><?= __('Teacher Responsible') ?></h6>
            <p><?= $this->Number->format($kilasy->teacher_responsible) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Students') ?></h4>
    <?php if (!empty($kilasy->students)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Kilasy Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($kilasy->students as $students): ?>
        <tr>
            <td><?= h($students->id) ?></td>
            <td><?= h($students->kilasy_id) ?></td>
            <td><?= h($students->user_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Students', 'action' => 'view', $students->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Students', 'action' => 'edit', $students->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Students', 'action' => 'delete', $students->id], ['confirm' => __('Are you sure you want to delete # {0}?', $students->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Subjects') ?></h4>
    <?php if (!empty($kilasy->subjects)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Teacher') ?></th>
            <th><?= __('Coefficient') ?></th>
            <th><?= __('Kilasy Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($kilasy->subjects as $subjects): ?>
        <tr>
            <td><?= h($subjects->id) ?></td>
            <td><?= h($subjects->name) ?></td>
            <td><?= h($subjects->teacher) ?></td>
            <td><?= h($subjects->coefficient) ?></td>
            <td><?= h($subjects->kilasy_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Subjects', 'action' => 'view', $subjects->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Subjects', 'action' => 'edit', $subjects->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subjects', 'action' => 'delete', $subjects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subjects->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
