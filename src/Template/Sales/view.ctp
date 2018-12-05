<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale $sale
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sale'), ['action' => 'edit', $sale->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sale'), ['action' => 'delete', $sale->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $sale->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Sales'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sale'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shoes'), ['controller' => 'Shoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shoe'), ['controller' => 'Shoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sales view large-9 medium-8 columns content">
    <h3><?= h($sale->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Shoe') ?></th>
            <td><?= $sale->has('shoe') ? $this->Html->link($sale->shoe->name, ['controller' => 'Shoes', 'action' => 'view', $sale->shoe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sale->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($sale->Cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($sale->Fecha) ?></td>
        </tr>
    </table>
</div>
