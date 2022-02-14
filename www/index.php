<?php require_once __DIR__ . '/../../delsol-mm-portal/vendor/engaged-nation/portal-core/FrontEnd/Bootstrap/client-front-end.php'; ?>
<?php $clientDBName = $enConfigClient['environment']['database_name'];
// planing to check the database name and change the client name for title
$title = $description = '';

$title = 'Million Dollar March Mania Challenge presented by Casino Del Sol';
$description = "Fill out brackets for free online to take your shot at winning over $1,000,000 in cash during the men’s college basketball tournament!";

?>
<!DOCTYPE html>
<html lang="en" class="setTo100 themed-layout">
<head>
    <title><?php echo $title; ?></title>
    <?php require_once __DIR__ . '/../../delsol-mm-portal/vendor/engaged-nation/portal-core/GoogleTagManager/Resources/public/gtm.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $description; ?>">
    <base href="//<?php echo $enConfigClient['environment']['site_front_end']; ?>"/>
    <link rel="canonical" href="//<?php echo $enConfigClient['environment']['site_front_end']; ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="<?php echo $enConfigClient['environment']['s3_uploads_url']; ?>/skins/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://ds94t24nq4vzb.cloudfront.net/fontawesome/5-15-2/css/all.css">
    <link rel="stylesheet" href="https://ds94t24nq4vzb.cloudfront.net/bootstrap/4-4-1/bootstrap.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $enConfigClient['environment']['s3_uploads_url']; ?>/skins/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $enConfigClient['environment']['s3_uploads_url']; ?>/skins/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $enConfigClient['environment']['s3_uploads_url']; ?>/skins/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $enConfigClient['environment']['s3_uploads_url']; ?>/skins/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $enConfigClient['environment']['s3_uploads_url']; ?>/skins/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#FFFFFF">
    <script async defer src="https://tools.luckyorange.com/core/lo.js?site-id=08a2ff19"></script>
</head>
<body>
    <div id="en-header-layout-container"></div>
    <div class="takeover">
        <div class="container main-container">
            <div id="page_outer_wrap">
                <div id="body_wrap">
                    <div id="page_wrap">
                        <div class="embed" data-embed="fzone"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="en-footer-layout-container"></div>

    <script src="https://ds94t24nq4vzb.cloudfront.net/jquery/3-3-1/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script type="text/javascript" src="https://ds94t24nq4vzb.cloudfront.net/bootstrap/4-4-1/bootstrap.min.js"></script>
    <!-- Should not include in branch instead should be in s3 -->
    <script type="text/javascript" src="<?php echo $enConfigClient['environment']['s3_uploads_url']; ?>/images/themed/fresh.js"></script>
    <!-- End of Should not include in branch instead should be in s3 -->
    <script type="text/javascript">
        // Allow to support our new template.
        var ThemedTemplateInitiated = '';
        (
            function($) {
                $(
                    function() {
                        /* Initiate themed-fresh once its ready */
                        ThemedTemplateInitiated = new ThemedFresh();
                    }
                );
            }(jQuery)
        );
    </script>
    <script src="//<?php echo $enConfigClient['environment']['site_portal']; ?>/lib/js/engage.php?client_name=delsol-mm&client_id=9e02043d60b5e5b2c25d4e0b35a1ba17" type="text/javascript"></script>
</body>
</html>
