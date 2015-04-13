<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit School'), ['action' => 'edit', $school->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School'), ['action' => 'delete', $school->id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="schools view large-10 medium-9 columns">
    <h2><?= h($school->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($school->name) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= h($school->type) ?></p>
            <h6 class="subheader"><?= __('Full Address') ?></h6>
            <p><?= h($school->full_address) ?></p>
            <h6 class="subheader"><?= __('Primary Phone') ?></h6>
            <p><?= h($school->primary_phone) ?></p>
            <h6 class="subheader"><?= __('Secondary Phone') ?></h6>
            <p><?= h($school->secondary_phone) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($school->email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($school->id) ?></p>
            <h6 class="subheader"><?= __('President') ?></h6>
            <p><?= $this->Number->format($school->president) ?></p>
            <h6 class="subheader"><?= __('Vice President') ?></h6>
            <p><?= $this->Number->format($school->vice_president) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($school->users)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Username') ?></th>
            <th><?= __('Password') ?></th>
            <th><?= __('First Name') ?></th>
            <th><?= __('Last Name') ?></th>
            <th><?= __('DOB') ?></th>
            <th><?= __('POB') ?></th>
            <th><?= __('Gender') ?></th>
            <th><?= __('Image Path') ?></th>
            <th><?= __('Role') ?></th>
            <th><?= __('School Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($school->users as $users): ?>
        <tr>
            <td><?= h($users->id) ?></td>
            <td><?= h($users->username) ?></td>
            <td><?= h($users->password) ?></td>
            <td><?= h($users->first_name) ?></td>
            <td><?= h($users->last_name) ?></td>
            <td><?= h($users->DOB) ?></td>
            <td><?= h($users->POB) ?></td>
            <td><?= h($users->gender) ?></td>
            <td><?= h($users->image_path) ?></td>
            <td><?= h($users->role) ?></td>
            <td><?= h($users->school_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
