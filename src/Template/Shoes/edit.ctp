<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shoe $shoe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $shoe->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shoe->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Shoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shoes form large-9 medium-8 columns content">
    <?= $this->Form->create($shoe) ?>
    <fieldset>
        <legend><?= __('Edit Shoe') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
