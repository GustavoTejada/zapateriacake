<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale $sale
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sale->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sale->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sales'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Shoes'), ['controller' => 'Shoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shoe'), ['controller' => 'Shoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sales form large-9 medium-8 columns content">
    <?= $this->Form->create($sale) ?>
    <fieldset>
        <legend><?= __('Edit Sale') ?></legend>
        <?php
            echo $this->Form->control('id');
            echo $this->Form->control('Fecha');
            echo $this->Form->control('Cantidad');
            echo $this->Form->control('shoe_id', ['options' => $shoes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
