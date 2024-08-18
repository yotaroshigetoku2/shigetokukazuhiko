 <head>
   <!-- Google Tag Manager -->
   <script>
     (function(w, d, s, l, i) {
       w[l] = w[l] || [];
       w[l].push({
         'gtm.start': new Date().getTime(),
         event: 'gtm.js'
       });
       var f = d.getElementsByTagName(s)[0],
         j = d.createElement(s),
         dl = l != 'dataLayer' ? '&l=' + l : '';
       j.async = true;
       j.src =
         'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
       f.parentNode.insertBefore(j, f);
     })(window, document, 'script', 'dataLayer', 'GTM-5D5J8F58');
   </script>
   <!-- End Google Tag Manager -->
   <meta charset="utf-8">
   <title><?php the_title(); ?></title>
   <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
   <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/page.css" rel="stylesheet">
   <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/common.css" rel="stylesheet">
   <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/top.css" rel="stylesheet">
   <script>
     (function(d) {
       var config = {
           kitId: 'cvl3pnb',
           scriptTimeout: 3000,
           async: true
         },
         h = d.documentElement,
         t = setTimeout(function() {
           h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
         }, config.scriptTimeout),
         tk = d.createElement("script"),
         f = false,
         s = d.getElementsByTagName("script")[0],
         a;
       h.className += " wf-loading";
       tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
       tk.async = true;
       tk.onload = tk.onreadystatechange = function() {
         a = this.readyState;
         if (f || a && a != "complete" && a != "loaded") return;
         f = true;
         clearTimeout(t);
         try {
           Typekit.load(config)
         } catch (e) {}
       };
       s.parentNode.insertBefore(tk, s)
     })(document);
   </script>
   <?php wp_head(); ?>
 </head>

 <body <?php body_class(); ?>>
   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5D5J8F58" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->