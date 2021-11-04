<a href="<?= BASEURL; ?>akun">Kembali</a>

<img src="" alt="profpic">

<h1><?= $data['nama']; ?></h1>

<form action="" method="post" enctype="multipart/form-data">
	<ul>
		<li>
			<label for="ProfPic">Picture</label>
			<img src="<?= $data['image']; ?>">
			<input type="file" name="profpic" id="ProfPic">
		</li>

		<li>
			<label for="name">Ubah Nama</label>
			<input type="text" name="nama" id="name">
		</li>

		<li>
			<label for="links">Connected with <?= 'artistName' ?> (social media link)</label>
			<a href="#"><input type="text" name="link" id="links"></a>
		</li>

		<li>
			<label for="desc">Description</label>
			<textarea name="penjelasan" id="desc" cols="30" rows="10"></textarea>
		</li>

		<li>
			<label for="unggulan">Featured</label>
			<a href="#" name="terbaik" id="unggulan"><img src="#" alt="featured"></a>
		</li>

		<li>
			<button type="submit" name="send">Send!</button>
		</li>
	</ul>
</form>

<br><br><br>

<h6>Since <?= 'Year'; ?></h6>