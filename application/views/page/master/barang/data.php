<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3">
	<meta charset="utf-8">
	<h2>Data Barang</h2>

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}



		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
			text-decoration: none;
		}

		a:hover {
			color: #97310e;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
			min-height: 96px;
		}

		p {
			margin: 0 0 10px;
			padding: 0;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			/* margin: 10px; */
			/* border: 1px solid #D0D0D0; */
			box-shadow: 0 0 5px #D0D0D0;
			padding: 15px;
		}
	</style>

	<div id="container">
		<a class="btn btn-primary " href="<?= $base ?>databarang/add">Tambah Barang</a>
		<div class="table-responsive">
			<table class="table table-striped table-sm">
				<thead>
					<tr>
						<th scope="col">No.</th>
						<th scope="col">Kode Barang</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Stock</th>
						<th scope="col">#</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($databarang as $vdata) :
					?>
						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $vdata->kdbarang; ?>
							</td>
							<td>
								<?php echo $vdata->nmbarang; ?>
							</td>
							<td>
								<?php echo $vdata->stok_mn; ?>
							</td>
							<td>
								<a href="<?php echo $base; ?>Databarang/
								edit/<?php echo $vdata->kdbarang ?>">
									<i class="nav-icon fas fa-erase"></i>
									Edit Data
								</a>||
								<a href="<?php echo $base; ?>Databarang/
								delete/<?php echo $vdata->kdbarang ?>">
									<i class="nav-icon fas fa-erase"></i>
									Delete Data
								</a>
							</td>
						</tr>
						<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>

</main>