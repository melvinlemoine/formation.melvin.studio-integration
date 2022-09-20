<!DOCTYPE html>

<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <title>Support de formation | Intégration</title>

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="assets/css/reset.css" />

  <link rel="stylesheet" href="assets/css/styles.css" />

  <link rel="stylesheet" href="assets/css/fontawesome.min.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700;900&display=swap" rel="stylesheet" />

  <script src="./assets/js/moment.min.js"></script>

  <script src="./assets/js/moment-fr.js"></script>

  <?php date_default_timezone_set('Europe/Paris'); ?>

  <script>
    moment.locale("fr");
  </script>
</head>

<body class="body">
  <div class="left">
    <div class="left__header">
      <p class="left__header_ontitle">Formation</p>
      <h1 class="left__header_title">Intégration</h1>
      <p class="left__header_subtitle">Apprendre à intégrer en HTML et CSS.</p>
    </div>
    <div class="left__downloads">
      <div class="left__downloads_download">
        <h2 class="left__downloads_download_title">Support d'introduction</h2>
        <p class="left__downloads_download_description">Un support PDF pour bien commencer. Qu'est-ce que l'intégration et comment s'y prendre.</p>
        <a class="left__downloads_download_button" href="#">
          <span class="icon">
            <i class="fa-solid fa-download"></i>
          </span>
          Télécharger
        </a>
        <div class="left__downloads_download_file">
          <p class="left__downloads_download_file_format left__downloads_download_file_format--pdf">
            <i class="fa-solid fa-file-pdf"></i>
            PDF
          </p>
          <p class="left__downloads_download_file_update">Dernière mise à jour <span id="moment--pdf">il ya 3 jours</span></p>
          <script>
            document.getElementById("moment--pdf").innerHTML = moment(
              "<?php echo date('d.m.Y H:i', filemtime('./introduction-integration.pdf')); ?>",
              "DD.MM.YYYY hh:mm"
            ).fromNow();
          </script>
        </div>
      </div>
      <div class="left__downloads_download">
        <h2 class="left__downloads_download_title">Support de pratique</h2>
        <p class="left__downloads_download_description">
          Un support pour pratiquer sous forme de challenges avec toute la documentation nécessaire.
        </p>
        <a class="left__downloads_download_button" href="#">
          <span class="icon">
            <i class="fa-solid fa-download"></i>
          </span>
          Télécharger
        </a>
        <div class="left__downloads_download_file">
          <p class="left__downloads_download_file_format left__downloads_download_file_format--zip">
            <i class="fa-solid fa-file-zipper"></i>
            ZIP
          </p>
          <p class="left__downloads_download_file_update">Dernière mise à jour <span id="moment--zip">il ya 3 jours</span></p>
          <script>
            document.getElementById("moment--zip").innerHTML = moment(
              "<?php echo date('d.m.Y H:i', filemtime('workshop-integration.zip')); ?>",
              "DD.MM.YYYY hh:mm"
            ).fromNow();
          </script>
        </div>
      </div>
    </div>
  </div>
  <div class="right"></div>
</body>

</html>