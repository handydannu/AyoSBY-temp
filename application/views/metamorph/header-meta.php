
        <meta charset="utf-8">
<?php $meta = metadata_seo(); ?>
        <title><?php echo $meta['title']; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta http-equiv="refresh" content="900" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <meta name="description" content="<?php echo $meta['desc']; ?>" />
        <meta name="keywords" content="<?php echo $meta['keyword']; ?>" />
        <meta name="author" content="<?php echo $this->config->item('page_meta')['site_author']; ?>" />
        <meta name="copyright" content="<?php echo $this->config->item('page_meta')['copyright']; ?>" />

        <meta name="robots" content="index, follow, noodp, noydir" />
        <meta name="googlebot" content="index, follow" />
        <meta name="language" content="id" />
        <meta name="geo.country" content="id" />
        <meta http-equiv="content-language" content="In-Id" />
        <meta name="geo.placename" content="Indonesia" /> 
        <meta name="google-site-verification" content="<?php echo $this->config->item('page_meta')['google_ver']; ?>" />
        <meta name="msvalidate.01" content="<?php echo $this->config->item('page_meta')['bing_ver']; ?>" />
        <meta name="alexaVerifyID" content="<?php echo $this->config->item('page_meta')['alexa_ver']; ?>" />
        <meta property="fb:app_id" content="<?php echo $this->config->item('page_meta')['fb_app_id']; ?>"/>
        <meta content="http://www.facebook.com/<?php echo $this->config->item('page_meta')['fb_page_name']; ?>" property="fb:admins"/>
<?php meta_ogp(); ?>
        <?php echo (isset($meta['canonical']) || $meta['canonical'] != '') ? $meta['canonical'] : ''; ?>

        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="shortcut icon" href="/assets/img/footer-logo.png">