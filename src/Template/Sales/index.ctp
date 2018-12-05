<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale[]|\Cake\Collection\CollectionInterface $sales
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sale'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shoes'), ['controller' => 'Shoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shoe'), ['controller' => 'Shoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sales index large-9 medium-8 columns content">
    <h3><?= __('Sales') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shoe_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sales as $sale): ?>
            <tr>
                <td><?= $this->Number->format($sale->id) ?></td>
                <td><?= h($sale->Fecha) ?></td>
                <td><?= $this->Number->format($sale->Cantidad) ?></td>
                <td><?= $sale->has('shoe') ? $this->Html->link($sale->shoe->name, ['controller' => 'Shoes', 'action' => 'view', $sale->shoe->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sale->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sale->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sale->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $sale->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
