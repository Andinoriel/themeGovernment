<!DOCTYPE html>
<html lang="[[++cultureKey]]">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>[[*longtitle:notempty=`[[*longtitle:htmlent]]`:default=`[[*pagetitle:htmlent]][[%lf_site_name:htmlent]]`]]</title>
        <meta name="description" content="[[*description:notempty=`[[*description:htmlent]]`:default=`[[%lf_description:htmlent]]`]]" />
        <base href="[[++site_url]]" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="[[*pagetitle:htmlent]]">

        <meta property="og:title" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] / [[++site_name]]`]]" />
        <meta property="og:description" content="[[*description:htmlent:default=`[[%lf_description:htmlent]]`]]" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="[[~[[*id]]? &scheme=`full`]]" />
        <meta property="og:image" content="[[*img:notempty=`[[++site_url:replace=`/[[++cultureKey]]/==`]][[*img]]`:default=`[[++site_url]]assets/design/images/logo.png`]]" />
        <meta property="og:site_name" content="[[++site_name]]" />

        <meta http-equiv="x-dns-prefetch-control" content="on">
        <link rel="dns-prefetch" href="http://code.jquery.com" />
        <link rel="dns-prefetch" href="http://fonts.googleapis.com" />
        <link rel="dns-prefetch" href="http://www.google-analytics.com" /> 

        <link rel="icon" href="[[++themeclubcube.design_url]]images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="[[++themeclubcube.design_url]]images/favicon.ico" type="image/x-icon" />
        
        [[Molt?
            &minifyCss=`1`
            &minifyJs=`1`
            &cssRegister=`placeholder`
            &cacheFolder=`[[++themegovernment.design_url]]/css/min-molt/`
            &jsSources=`
				[[++themegovernment.design_url]]js/jquery/plugins/Chart.js
                ,[[++themegovernment.design_url]]js/jquery/plugins/bootstrap-select.js
                ,[[++themegovernment.design_url]]js/jquery/plugins/slick/slick.js
                ,[[++themegovernment.design_url]]js/jquery/plugins/topEventsAnimate.js
				,[[++themegovernment.design_url]]js/jquery/plugins/skrollr.js
				,[[++themegovernment.design_url]]js/jquery/plugins/jquery.sharrre.min.js
				,[[++themegovernment.design_url]]js/jquery/plugins/jquery.parallax.min.js
				,[[++themegovernment.design_url]]js/jquery/plugins/jquery.form.js
				,[[++themegovernment.design_url]]js/jquery/plugins/validation/jquery.validate.js
                ,[[++themegovernment.design_url]]js/app/lib/site.js
				,[[++themegovernment.design_url]]js/app/lib/siteMode.js
				,[[++themegovernment.design_url]]js/app/mode/themeMode.js
				,[[++themegovernment.design_url]]js/app/modules/mainSlider.js
				,[[++themegovernment.design_url]]js/app/modules/menuAligns.js
				,[[++themegovernment.design_url]]js/app/modules/bgStretch.js
				,[[++themegovernment.design_url]]js/app/modules/eventAnimate.js
				,[[++themegovernment.design_url]]js/app/modules/stuffSlider.js
				,[[++themegovernment.design_url]]js/app/modules/gridsDiagramms.js
				,[[++themegovernment.design_url]]js/app/modules/barChart.js
				,[[++themegovernment.design_url]]js/app/modules/disquis.js
				,[[++themegovernment.design_url]]js/app/modules/stickyHeader.js
                ,[[++themegovernment.design_url]]js/app/modules/globalScripts.js
                ,[[++themegovernment.design_url]]js/app/modules/backgroundImg.js
				,[[++themegovernment.design_url]]js/app/modules/scrollPlugin.js
                ,[[++themegovernment.design_url]]js/app/modules/googleMap.js
				,[[++themegovernment.design_url]]js/app/modules/eventSlider.js
                ,[[++themegovernment.design_url]]js/app/modules/stuffPage.js
                ,[[++themegovernment.design_url]]js/app/modules/sharrre.js
                ,[[++themegovernment.design_url]]js/app/modules/dtMenu.js
				,[[++themegovernment.design_url]]js/app/modules/formSubscribe.js
                ,[[++themegovernment.design_url]]js/app/modules/formFieldsSubscribe.js
                ,[[++themegovernment.design_url]]js/init.js
            `
            &cssSources=`
                 [[++themegovernment.design_url]]css/min/style.min.css
				,[[++themegovernment.design_url]]js/jquery/plugins/slick/slick.css
                ,[[++themegovernment.design_url]]css/[[++themegovernment.color_scheme]]-color.css
            `
        ]]
        [[+Molt.css]]
		<script>
			var designUrl = '[[++themegovernment.design_url]]';
		</script>
        
        <!--[if lt IE 9]>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

		[[++themeclubcube.ga_tracking_id:notempty=`
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', '[[++themegovernment.ga_tracking_id]]', 'auto');
			ga('send', 'pageview');
		</script>
		`]]
    </head>
    <body id="body">