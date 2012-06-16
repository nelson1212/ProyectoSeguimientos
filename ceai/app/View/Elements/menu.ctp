<?php header('Content-type: text/html; charset=UTF-8') ;?>
<h2 id="titulo_menu">&nbsp;Menu principal</h2>
<ul id="browser" class="filetree">
		<li><span class="folder">&nbsp;Gestion de seguimientos</span>
			<ul>
				<li><span class="file"><?php echo $this->Html->link(__('Crear acta'), array('action' => 'add')); ?></span></li>
                <li><span class="file"><?php echo $this->Html->link(__('Ver actas'), array('action' => 'index')); ?></span></li>
			</ul>
		</li>
		<li><span class="folder">&nbsp;Gestion de aprendices</span>
			<ul>
				<li><span class="file"><?php echo $this->Html->link(__('Crear acta'), array('action' => 'add')); ?></span></li>
                <li><span class="file"><?php echo $this->Html->link(__('Especialidades'), array('action' => 'index')); ?></span></li>
			</ul>
		</li>
		<li><span class="folder">&nbsp;Folder 2</span>
			<ul>
				<li><span class="folder">Subfolder 2.1</span>
					<ul id="folder21">
						<li><span class="file">File 2.1.1</span></li>
						<li><span class="file">File 2.1.2</span></li>
					</ul>
				</li>
				<li><span class="file">File 2.2</span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">&nbsp;Folder 3 (closed at start)</span>
			<ul>
				<li><span class="file">File 3.1</span></li>
			</ul>
		</li>
		<li><span class="file">&nbsp;File 4</span></li>
	</ul>