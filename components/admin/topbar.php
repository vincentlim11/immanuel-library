<header class="app-topbar">
  <div class="page-title">
    // Ket vincent: isset memakai judul halaman bila ada.
    <h1><?= isset($pageTitle) ? $pageTitle : 'Immanuel Library' ?></h1>
    // Ket vincent: isset memakai subjudul halaman bila ada.
    <p><?= isset($pageSubtitle) ? $pageSubtitle : '' ?></p>
  </div>
  <div class="topbar-user">
    <span class="avatar">BS</span>
    <div>
      Budi Santoso<br>
      <span class="badge badge-member" style="margin-top:2px;">Member</span>
    </div>
  </div>
</header>
