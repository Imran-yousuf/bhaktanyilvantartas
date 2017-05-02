<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gurus'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gurus index large-9 medium-8 columns content">
    <h3><?= __('Gurus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nev_rovid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nev_full') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gurus as $gurus): ?>
            <tr>
                <td><?= $this->Number->format($gurus->id) ?></td>
                <td><?= h($gurus->name) ?></td>
                <td><?= h($gurus->nev_full) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gurus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gurus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gurus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gurus->id)]) ?>
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
