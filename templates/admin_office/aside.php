<div class="bg-dashboard-blocs mb-3">
    <div class="d-flex justify-content-between">
        <div class="user-pic"><?php echo $user['pseudo'][0]; ?></div>
        <div class="">
            <div class="user-id">Admin</div>
        </div>
    </div>
    <div class="">
        <h1><?php echo $user['pseudo']; ?></h1>
    </div>
</div>

<div class="bg-dashboard-blocs p-0 mb-3">
    <a class="btn-aside-db d-flex justify-content-between p-4"
       href="http://localhost/mon-blog/templates/admin_office/dashboard-admin.php">
        <div class="">
            <h2 class="tu-db m-0">Dashboard</h2>
        </div>
        <div class="bloc-icon">
            <i class="fa-regular fa-circle-user"></i>
        </div>
    </a>
</div>

<div class="bg-dashboard-blocs p-0 mb-3">
    <a class="btn-aside-db d-flex justify-content-between p-4"
       href="http://localhost/mon-blog/templates/admin_office/dashboard-admin-settings.php">
        <div class="">
            <h2 class="tu-db m-0">Paramètre</h2>
        </div>
        <div class="bloc-icon">
            <i class="fa-regular fa-sun"></i>
        </div>
    </a>
</div>

<div class="bg-db-disconnect">
    <a class="btn-aside-db-logout d-flex justify-content-between"
       href="http://localhost/mon-blog/src/controllers/deconnexion/deconnexion.php">
        <div class="">
            <h2 class="tu-db-disc m-0">Déconnexion</h2>
        </div>
        <div class="bloc-icon">
            <i class="fa-solid fa-right-to-bracket"></i>
        </div>
    </a>
</div>