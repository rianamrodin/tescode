<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Post</title>
  </head>
  <body>
  	<div class="container">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">idPost</th>
					<th scope="col">Title</th>
					<th scope="col">Content</th>
					<th scope="col">Date</th>
					<th scope="col">Username</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($tes as $key): ?>
					<tr>
						<th scope="row"><?= $key['id'];?></th>
						<td><?= $key['title'];?></td>
						<td><?= $key['content'];?></td>
						<td><?= $key['date'];?></td>
						<td><?= $key['username'];?></td>
						<td>
							<a href="/post/edit/<?= $key['id']; ?>">
								<button type="button" class="btn btn-success">Edit</button>
							</a>
							<a href="/post/delete/<?= $key['id']; ?>">
								<button type="button" class="btn btn-danger">Hapus</button>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<button type="submit" class="btn btn-success" onclick="window.location.replace('/post/add_new');">Tambah Post</button>
  	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>