<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
		/>

		<title>Gestion de Tienda || Inicio</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<h2>Gestion de tienda</h2>
			</div>

			<div class="row">
				<div class="col-4">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#frmNuevoJuego">
            Nuevo juego
          </button>
				</div>
			</div>

			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Cod. Art</th>
							<th scope="col">Nombre</th>
							<th scope="col">Genero</th>
							<th scope="col">Stock</th>
							<th scope="col">F. Alta</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Age of Empires II</td>
							<td>Estrategia</td>
							<td>10</td>
							<td>2021-07-24</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

    <div class="modal fade" id="frmNuevoJuego" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form action="http://google.com" method="GET">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo juego</h5>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="codArticulo">Codigo de artículo</label>
                <input type="text" class="form-control" id="codArticulo" name="codArt">
              </div>

              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
              </div>

              <div class="form-group">
                <label for="genero">Genero</label>
                <input type="text" class="form-control" id="genero" name="genero">
              </div>

              <div class="form-group">
                <label for="stock">Stock inicial</label>
                <input type="number" class="form-control" id="stock" name="stock">
              </div>

              <div class="form-group">
                <label for="fechaAlta">Fecha de alta</label>
                <input type="date" class="form-control" id="fechaAlta" name="fechaAlta">
              </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </div>
      </form>
      </div>
    </div>

		<!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 
	</body>
</html>
