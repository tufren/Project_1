<a href="<?= BASEURL; ?>">Beranda</a>
<br>
<h3>The Artist's</h3>
<h6>Berdasarkan Abjad</h6>
<br>
<?php foreach ($data['objek'] as $per_data): ?>
	<ul>
		<li>
			<label>
				<a href="<?= BASEURL; ?>music">
					<img src="<?= $per_data['gambar']; ?>" alt="image">
					<p><?= $per_data['nama']; ?></p>
				</a>
			</label>
		</li><br>
	</ul>
<?php endforeach ?>