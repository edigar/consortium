    
        <div id="content" class="tabbable tabs-left">
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <?php foreach($principal as $key => $pagina) { ?>
                    <?php $class = ($key == 0) ? 'active' : ''; ?>
                    <li class="<?php echo $class; ?>" ><a href="#<?php echo $pagina['Page']['slug']; ?>" data-toggle="tab"><?php echo $pagina['Page']['titulo']; ?> </a></li>
                <?php } ?>
                <li><a href="#contato" data-toggle="tab">Contato</a></li>
            </ul>
            <div id="my-tab-content" class="tab-content">
                <?php foreach($principal as $key => $pagina) { ?>
                    <?php $class = ($key == 0) ? 'active' : ''; ?>    
                    <div class="tab-pane <?php echo $class; ?>" id="<?php echo $pagina['Page']['slug']; ?>">
                        <h1><?php echo $pagina['Page']['titulo']; ?></h1>
                        <?php echo $pagina['Page']['conteudo']; ?><br /><br />
                        <p><img class="imagem" src="<?php echo $pagina['Page']['imagem']; ?>"></p>
                    </div>
                <?php } ?>
                <div class="tab-pane" id="contato">
                    <h1>Contato</h1>
                    <?php echo $this->Form->create('Contato', array('action' => 'contatar'));
                        echo $this->Form->input('nome', array('label' => 'Nome'));
                        echo $this->Form->input('email', array('label' => 'E-mail'));
                        echo $this->Form->input('telefone', array('label' => 'Telefone'));
                        echo $this->Form->input('mensagem', array(
                            'label' => 'Mensagem',
                            'type' => 'textarea',
                            'style' => 'width:700px; height:150px')
                        );
                        echo $this->Form->submit('Enviar', array('class' => 'btn btn-info'));
                        echo $this->Form->end();
                    ?>
                </div>
            </div>
        </div>