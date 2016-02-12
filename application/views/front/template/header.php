<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url(); ?>">
        <span class="teknik">TEKNIK</span><span class="informatika">INFORMATIKA</span>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li class="menu dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-bookglyphicon glyphicon-book"></span> Prodi <span class="caret"></span></a>
          <ul id="menu1" class="dropdown-menu" role="menu">
            <li class="menu"><a href="<?php echo site_url('content/profil'); ?>">Profil</a></li>
            <li class="menu"><a href="<?php echo site_url('content/kalender'); ?>">Kalender</a></li>
            <li class="menu"><a href="<?php echo site_url('content/kurikulum'); ?>">Kurikulum</a></li>
          </ul>
        </li>
        <li class="menu"><a href="<?php echo site_url('content/get_pegawai'); ?>"><span class="glyphicon glyphicon-user"></span> Dosen &amp; Karyawan</a></li>
        <li class="menu"><a href="<?php echo site_url('content/unduh'); ?>"><span class="glyphicon glyphicon-download-alt"></span> Unduh<span class="sr-only">(current)</span></a></li>
        <li class="menu"><a href="<?php echo site_url('content/berita'); ?>"><span class="glyphicon glyphicon-book"></span> Berita<span class="sr-only">(current)</span></a></li>
        <li class="menu"><a href="<?php echo site_url('content/magang'); ?>"><span class="glyphicon glyphicon-tasks"></span> Magang<span class="sr-only">(current)</span></a></li>
        <li class="menu"><a href="<?php echo site_url('content/galery'); ?>"><span class="glyphicon glyphicon-film"></span> Galery<span class="sr-only">(current)</span></a></li>
        <li class="menu"><a href="<?php echo site_url('content/get_kontak'); ?>"><span class="glyphicon glyphicon-envelope"></span> Kontak<span class="sr-only">(current)</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
