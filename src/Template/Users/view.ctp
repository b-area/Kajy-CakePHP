<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emergencies'), ['controller' => 'Emergencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emergency'), ['controller' => 'Emergencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($user->username) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($user->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($user->last_name) ?></p>
            <h6 class="subheader"><?= __('POB') ?></h6>
            <p><?= h($user->POB) ?></p>
            <h6 class="subheader"><?= __('Image Path') ?></h6>
            <p><?= h($user->image_path) ?></p>
            <h6 class="subheader"><?= __('School') ?></h6>
            <p><?= $user->has('school') ? $this->Html->link($user->school->name, ['controller' => 'Schools', 'action' => 'view', $user->school->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('DOB') ?></h6>
            <p><?= h($user->DOB) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Gender') ?></h6>
            <p><?= $user->gender ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Role') ?></h6>
            <?= $this->Text->autoParagraph(h($user->role)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Addresses') ?></h4>
    <?php if (!empty($user->addresses)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Address Line1') ?></th>
            <th><?= __('Address Line2') ?></th>
            <th><?= __('Zip Code') ?></th>
            <th><?= __('Province Id') ?></th>
            <th><?= __('Region Id') ?></th>
            <th><?= __('District Id') ?></th>
            <th><?= __('Commune Id') ?></th>
            <th><?= __('Fokontany Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->addresses as $addresses): ?>
        <tr>
            <td><?= h($addresses->id) ?></td>
            <td><?= h($addresses->address_line1) ?></td>
            <td><?= h($addresses->address_line2) ?></td>
            <td><?= h($addresses->zip_code) ?></td>
            <td><?= h($addresses->province_id) ?></td>
            <td><?= h($addresses->region_id) ?></td>
            <td><?= h($addresses->district_id) ?></td>
            <td><?= h($addresses->commune_id) ?></td>
            <td><?= h($addresses->fokontany_id) ?></td>
            <td><?= h($addresses->user_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Addresses', 'action' => 'view', $addresses->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Addresses', 'action' => 'edit', $addresses->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Addresses', 'action' => 'delete', $addresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addresses->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Contacts') ?></h4>
    <?php if (!empty($user->contacts)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Primary Phone') ?></th>
            <th><?= __('Secondary Phone') ?></th>
            <th><?= __('Email Address') ?></th>
            <th><?= __('User Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->contacts as $contacts): ?>
        <tr>
            <td><?= h($contacts->id) ?></td>
            <td><?= h($contacts->primary_phone) ?></td>
            <td><?= h($contacts->secondary_phone) ?></td>
            <td><?= h($contacts->email_address) ?></td>
            <td><?= h($contacts->user_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contacts->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contacts->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacts->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Emergencies') ?></h4>
    <?php if (!empty($user->emergencies)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('First Name') ?></th>
            <th><?= __('Last Name') ?></th>
            <th><?= __('Relationship') ?></th>
            <th><?= __('Primary Phone') ?></th>
            <th><?= __('Secondary Phone') ?></th>
            <th><?= __('Full Address') ?></th>
            <th><?= __('User Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->emergencies as $emergencies): ?>
        <tr>
            <td><?= h($emergencies->id) ?></td>
            <td><?= h($emergencies->first_name) ?></td>
            <td><?= h($emergencies->last_name) ?></td>
            <td><?= h($emergencies->relationship) ?></td>
            <td><?= h($emergencies->primary_phone) ?></td>
            <td><?= h($emergencies->secondary_phone) ?></td>
            <td><?= h($emergencies->full_address) ?></td>
            <td><?= h($emergencies->user_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Emergencies', 'action' => 'view', $emergencies->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Emergencies', 'action' => 'edit', $emergencies->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Emergencies', 'action' => 'delete', $emergencies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emergencies->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Students') ?></h4>
    <?php if (!empty($user->students)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Kilasy Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->students as $students): ?>
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
