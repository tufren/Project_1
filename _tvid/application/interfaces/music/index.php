<a href="<?= BASEURL; ?>artist">Kembali</a>
<h3>Discography</h3>
<br>
<?php foreach ($data['objek'] as $per_data): ?>
	<ul>
		<li>
			<label for="title">
				<a href="#">
					<!-- <img src="#" alt="nama album" name="Title" id="title"> -->
					<img src="<?= $per_data['cover']; ?>" alt="image">
					<p><?= $per_data['title']; ?></p>
				</a>
			</label>
		</li><br>
	</ul>
<?php endforeach ?>