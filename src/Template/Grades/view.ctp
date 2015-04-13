<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Grade'), ['action' => 'edit', $grade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grade'), ['action' => 'delete', $grade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sessions'), ['controller' => 'Sessions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Session'), ['controller' => 'Sessions', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="grades view large-10 medium-9 columns">
    <h2><?= h($grade->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Subject') ?></h6>
            <p><?= $grade->has('subject') ? $this->Html->link($grade->subject->name, ['controller' => 'Subjects', 'action' => 'view', $grade->subject->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Session') ?></h6>
            <p><?= $grade->has('session') ? $this->Html->link($grade->session->name, ['controller' => 'Sessions', 'action' => 'view', $grade->session->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($grade->id) ?></p>
            <h6 class="subheader"><?= __('Grade') ?></h6>
            <p><?= $this->Number->format($grade->grade) ?></p>
            <h6 class="subheader"><?= __('Student') ?></h6>
            <p><?= $this->Number->format($grade->student) ?></p>
        </div>
    </div>
</div>
