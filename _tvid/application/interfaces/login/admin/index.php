<a href="<?= BASEURL; ?>akun">Kembali</a>
<h3>Tampilan Beranda</h3>
<ul>
	<li>
		<label for="edit">Edit Desc 800 Char</label>
		<textarea name="desc" id="edit" cols="30" rows="10"><?= $data['800']; ?></textarea>
	</li>

	<li>
		<label for="profpic">Edit ProfPic</label>
		<img src="" alt="edit profpic" name="ProfPic" id="profpic">
		<input type="file" name="ProfPic">
	</li>

	<li>
		<label for="prodpic">Edit ProdPic</label>
		<img src="" alt="edit prodpic" name="ProdPic" id="prodpic">
		<input type="file" name="ProdPic">
	</li>
</ul>

<h3>Tampilan Navigasi</h3>
<ul>
	<li>Home</li>
	<li>Artist</li>
	<li>Video</li>
	<li>Net</li>
	<li><a href="">Tambah</a></li>
</ul>

<h3>Tampilan C Line</h3>
<p>&copy; Copyright Years | Signature by. <a href="#">TVID Production</a></p>