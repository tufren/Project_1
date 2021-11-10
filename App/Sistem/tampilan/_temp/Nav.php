<nav class="navbar navbar-light bg-secondary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">JUDUL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end bg-secondary" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Judul</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="navigasi">
                    <div class="admin">
                        <ul>
                            <li>
                                <h5>Admin</h5>
                            </li>
                            <ol><a href="#">Home</a></ol>
                            <ol><a href="#">Video</a></ol>
                            <ol><a href="#">Artist</a></ol>
                            <ol><a href="#">Net</a></ol>
                            <ol><a href="#">About</a></ol>
                            <ol><a href="#">Kelola Tab</a></ol>
                        </ul>
                    </div>
                    <div class="pengguna">
                        <ul>
                            <li>
                                <h5>User</h5>
                            </li>
                            <ol><a href="#">Home</a></ol>
                            <ol><a href="#">Video</a></ol>
                            <ol><a href="#">Artist</a></ol>
                            <ol><a href="#">Net</a></ol>
                            <ol><a href="#">About</a></ol>
                        </ul>
                    </div>
                </div>
            </div>
            <footer class="discography about contact" id="contact">
                <p><a href="<?= BASEURL; ?>">TVID Production</a>&copy; Copyright <?= date('Y'); ?></p>
                <img src="#" alt="Instagram"><a href="#">Logo Instagram Link</a></img>
                <img src="#" alt="YouTube"><a href="#">Logo YouTube Link</a></img>
                <img src="#" alt="Facebook"><a href="#">Logo Facebook Link</a></img>
            </footer>
        </div>
</nav>