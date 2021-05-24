		<div class="modal fade" id="usuarios">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Fechar</span>
						</button>
						<h4 class="modal-title">Novo Usuário</h4>
					</div>
					<div class="modal-body">
			<form method="post">
			  <div class="form-group">
			    <label for="formGroupExampleInput">Nome do Usuário</label>
			    <input type="text" name="nombreusuario" class="form-control" id="formGroupExampleInput" placeholder="Adicione o nome do Usuário" required="">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Contraseña Usuario</label>
			    <input type="text" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Adicione a senha" required="">
			  </div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
						<button type="submit" name="guardarUsuario" class="btn btn-primary">Salvar informação</button>
           </form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<?php 

		 $usuario = new UsuariosController();
		 $usuario->ingresarUsuariocontroller();
         $usuario->deleteUsuariosController();

		 ?>