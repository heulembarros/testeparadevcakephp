<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Tem certeza que desexa excluir # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Litsar Usuários'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend>Editar Usuário</legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('email');
            echo $this->Form->control('cpf', ['class' => 'form-control cpf']);
            echo $this->Form->control('cnpj', ['class' => 'form-control cnpj']);
            echo $this->Form->control('telefone', ['class' => 'form-control telefone']);
            echo $this->Form->control('obs');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Atualizar'),['class' => 'btn btn-primary mt-5']) ?>
    <?= $this->Form->end() ?>
</div>
