<?php

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav> -->
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


<script src="webroot/js/jquery.mask.js"></script>


<script>
    $(document).ready(function(){
        $('.cpf').mask('000.000.000-00');
        $('.cnpj').mask('00.000.000/0000-00');
        $('.telefone').mask('(00) 0 0000-0000');

    });

        
        
        
        var button = document.querySelector ('.buscar');
        var inputValue = document.querySelector ('.search');
        var cidade = document.querySelector ('.cidade');
        var tempdesc = document.querySelector ('.tempdesc');
        var temp = document.querySelector ('.temp');
        
        button.addEventListener('click', function (){

            // console.log(inputValue.value);
            fetch('https://api.openweathermap.org/data/2.5/weather?q='+inputValue.value+'&appid=e72f3083b4cdf06a27d003c8dec6c544&units=metric&lang=pt_br')
            
            .then(response => response.json ())
            .then(data => {
                console.log(data);
                var cidadeValor = data['name'];
                var tempValor = data['main']['temp'];
                var descValor = data['weather'][0]['description'];

                cidade.innerHTML = cidadeValor + ', '
                tempdesc.innerHTML = tempValor + '°C, '
                temp.innerHTML = descValor
            })
            .catch(err => alert ("Error ao informar a cidade!"));
        });

        

</script>
</body>
</html>
