<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Carteiras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pessoas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Downloads</a>
      </li>
    </ul>
  </div>
</nav>

<?php echo $this->Form->create($user); ?>


<div class="row mt-5">
    <div class="col-lg-6">
    </div>
    <div class="col-lg-4">
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Password</label>
            <input type="search" class="form-control search" id="search" placeholder="Nomde da Cidade">
        </div>        
    </div>
    <div class="col-lg-2">
        <button type="button" class="btn btn-primary buscar mb-2">Buscar</button>       
    </div>
    <div class="col-lg-12 text-right">
        <h3 for="staticEmail2" class=""><span class='cidade'></span><span class='tempdesc'></span><span class='temp'></span></h3>        
    </div>
</div>



<div class="row mt-5">
    <div class="col-lg-12">
        <h3 class="title">Cadastrar Usuário</h3>
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="form-group">
            <?php echo $this->Form->control('nome', ['class' => 'form-control']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->control('email', ['type' => 'email', 'class' => 'form-control']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->control('telefone', ['class' => 'form-control telefone']); ?>
        </div>
    </div>

    <div class="col-lg-4 col-sm-12">
        <div class="form-group">
            <?php echo $this->Form->control('cpf', ['class' => 'form-control cpf']); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->control('cnpj', ['class' => 'form-control cnpj']); ?>
        </div>
    </div>

    <div class="col-lg-4 col-sm-12">
        <div class="form-group">
            <label for="obs">Observação</label>
            <?php echo$this->Form->textarea('obs', ['class' => 'form-control']); ?>
        </div>
    </div>

    <div class="col-lg-12 col-sm-12">
    <?php echo $this->Form->button('Cadastrar', ['class' => 'btn btn-primary']); ?>
    </div>
</div>
<?php
echo $this->Form->end();
?>


<div class="row mt-5">

    <div class="col-lg-12 col-sm-12">
        <h3 class="title">Usuários Cadastrados</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th width="5%" scope="col"><?php echo $this->Paginator->sort('id'); ?></th>
                    <th scope="col"><?php echo $this->Paginator->sort('nome'); ?></th>
                    <th scope="col">Email</th>
                    <th scope="col">CPF</th>
                    <th scope="col">CNPJ</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $user): ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user['nome']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['cpf']; ?></td>
                    <td><?php echo $user['cnpj']; ?></td>
                    <td class="text-center">
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?> | 
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Tem certeza que deseja excluir # {0}?', $user->id)]) ?>
                </td>
                </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php echo $this->Paginator->prev('< ' . __('Anterior')); ?>
                <?php echo $this->Paginator->numbers(); ?>
                <?php echo $this->Paginator->next(__('Seguinte'). ' >' ); ?>
            </ul>
        </nav>
    </div>


</div>



