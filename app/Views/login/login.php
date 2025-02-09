<?= $this->extend('layouts/guest') ?>

<?= $this->section('content') ?>

    <div class="container-fluid" style="background-color: #f5f5f5;">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <main class="form-signin w-100"style="max-width: 400px;">
                <!-- Tambahkan action dan method ke form -->
                <form action="/login" method="post">
                    <?= csrf_field() ?>
                    <!-- Pastikan gambar bisa diakses atau gunakan gambar dari server lokal -->
                    <a href="/" style="text-decoration: none;" class="text-dark">
                        <img class="mb-1 mx-auto d-block" src="<?= base_url('assets/img/logosawitprojek.png') ?>" alt="Bootstrap logo" width="72">
                        
                        <h1 class="h3 mb-3 fw-bolder text-center">Sawit Project</h1>
                    </a>

                    <?php if (session()->has('errors')) : ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach (session('errors') as $error) : ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php elseif (session()->has('error')) : ?>
                        <div class="alert alert-danger">
                            <ul>
                                <li><?= esc(session('error')) ?></li> <!-- Tampilkan langsung sebagai string -->
                            </ul>
                        </div>    
                    <?php endif ?>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
    
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" name="remember" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted text-center">© 2017–2022</p>
                </form>
            </main>
        </div>
    </div>
<?= $this->endSection() ?>
