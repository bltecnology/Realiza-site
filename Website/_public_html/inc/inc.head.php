<?php include 'inc/inc.seo.php'; ?>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=%%NOVA_GTAG%%"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '%%NOVA_GTAG%%');
  </script>
  <!-- Title -->
  <title><?= $pageTitle ?></title>
  <!-- CharSet -->
  <meta charset="utf-8">
  <!-- Canonical -->
  <link rel="canonical" href="<?= $Config['protocol'].$Config['fqd'].$_SERVER['REQUEST_URI'] ?>">
  <!-- Preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <!-- MetaTags -->
  <meta name="author"      content="Volkertek">
  <meta name="title"       content="<?= $pageTitle ?>">
  <meta name="description" content="<?= $pageDescription ?>">
  <meta name="robots"      content="index, follow">
  <meta name="viewport"    content="width=device-width, initial-scale=1">
  <!-- GeoTags -->
  <meta name="city"    content="São Caetano do Sul">
  <meta name="country" content="Brasil">
  <!-- GeoTags -->
  <meta name="geo.placename" content="São Caetano do Sul">
  <meta name="geo.region"    content="BR-SP">
  <meta name="geo.position"  content="-23.617017;-46.560429">
  <meta name="ICBM"          content="-23.617017,-46.560429">
  <!-- Facebook -->
  <meta property="og:locale"           content="pt_BR">
  <meta property="og:url"              content="<?= $Config['protocol'].$Config['fqd'].$_SERVER['REQUEST_URI'] ?>">
  <meta property="og:site_name"        content="Volkertek">
  <meta property="og:title"            content="<?= $pageTitle ?>">
  <meta property="og:description"      content="<?= $pageDescription ?>">
  <meta property="og:image"            content="https://content.<?= $Config['fqd'] ?>/img/logo-og.webp">
  <meta property="og:image:alt"        content="Volkertek">
  <meta property="og:image:type"       content="image/webp">
  <meta property="og:image:height"     content="630">
  <meta property="og:image:secure_url" content="https://content.<?= $Config['fqd'] ?>/img/logo-og.webp">
  <meta property="og:image:width"      content="1200">
  <meta property="og:type"             content="business.business">
  <!-- Twitter -->
  <meta name="twitter:card"        content="summary">
  <meta name="twitter:title"       content="<?= $pageTitle ?>">
  <meta name="twitter:description" content="<?= $pageDescription ?>">
  <meta name="twitter:image"       content="https://content.<?= $Config['fqd'] ?>/img/logo-og.webp">
  <!-- GeoTags -->
  <meta property="business:contact_data:street_address" content="Rua Tiradentes 141 - Santa Paula">
  <meta property="business:contact_data:locality"       content="São Caetano do Sul">
  <meta property="business:contact_data:postal_code"    content="09541-220">
  <meta property="business:contact_data:country_name"   content="Brasil">
  <meta property="place:location:latitude"              content="-23.617017">
  <meta property="place:location:longitude"             content="-46.560429">
