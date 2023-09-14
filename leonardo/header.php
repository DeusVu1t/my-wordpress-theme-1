<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package leonardo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">



  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.event.move.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.twentytwenty.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/twentytwenty.css" type="text/css" media="screen" />

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Unica+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/twentytwenty-no-compass.css" type="text/css" media="screen" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header id="masthead" class="site-header">
    <a class="logo-top" href="<?php echo home_url(); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="282.169" height="96" viewBox="0 0 282.169 96">
        <g id="group_3" data-name="group 3" transform="translate(-63.727 -72.201)">
          <path id="kont_1" data-name="kont 1" d="M72.6,138.957H63.727V72.2H72.6Zm12.885-22.182L108.2,94.49H95.309L72.6,116.775l22.708,22.182H108.2Z" transform="translate(0 0)" fill="#122035" />
          <path id="kont_2" data-name="kont 2" d="M144.4,87.453v22.285a22.316,22.316,0,0,1-22.182,22.182h-.107a22.315,22.315,0,0,1-22.181-22.182V87.453h8.874v22.285a13.39,13.39,0,0,0,13.307,13.312h.107a13.39,13.39,0,0,0,13.309-13.312V87.453Z" transform="translate(16.705 7.037)" fill="#122035" />
          <path id="kont_3" data-name="kont 3" d="M180.608,116.67a22.338,22.338,0,0,1-22.182,22.288H136.138V72.2h8.874v57.886h13.414a13.363,13.363,0,0,0,0-26.726h-4.542V94.49h4.542A22.315,22.315,0,0,1,180.608,116.67Z" transform="translate(33.409 0)" fill="#122035" />
          <path id="kont_4" data-name="kont 4" d="M215.638,131.752V87.817H193.726a21.968,21.968,0,1,0,0,43.935h2.959v-5.917h-2.959a16.051,16.051,0,1,1,0-32.1H209.72v38.019Z" transform="translate(49.818 7.205)" fill="#122035" />
          <path id="kont_5" data-name="kont 5" d="M232.946,93.733h3.07V87.817h-2.959a21.959,21.959,0,0,0-22.023,21.909v22.026h5.917V109.726A16.013,16.013,0,0,1,232.946,93.733Z" transform="translate(67.966 7.205)" fill="#122035" />
          <path id="kont_6" data-name="kont 6" d="M247.718,138.957h7.811v-5.831h-7.811A6.477,6.477,0,0,1,241.2,126.7V101.49h9.476V95.661H241.2V72.2h-5.919v54.5A12.36,12.36,0,0,0,247.718,138.957Z" transform="translate(79.154 0)" fill="#122035" />
          <g id="group_2" data-name="group 2" transform="translate(63.727 156.45)">
            <g id="group_1" data-name="group 1">
              <path id="kont_7" data-name="kont 7" d="M65.584,141.487a13.58,13.58,0,0,1-1.717-.281V139.38q1.39.14,3.512.14a3.134,3.134,0,0,0,1.435-.257.941.941,0,0,0,.484-.912v-.422a1,1,0,0,0-.3-.788,1.258,1.258,0,0,0-.867-.273h-.982a3.788,3.788,0,0,1-2.568-.75,3.111,3.111,0,0,1-.851-2.449v-.561q0-3.246,3.729-3.246a14.426,14.426,0,0,1,1.811.117q.936.116,1.685.272v1.827q-2.137-.14-3.23-.14a2.656,2.656,0,0,0-1.343.272,1.081,1.081,0,0,0-.452,1.007v.313a1.053,1.053,0,0,0,.335.867,1.605,1.605,0,0,0,1.023.272h1.138a3.027,3.027,0,0,1,2.287.82,2.968,2.968,0,0,1,.788,2.145v.656a3.655,3.655,0,0,1-.484,2.036,2.463,2.463,0,0,1-1.358,1,7.4,7.4,0,0,1-2.169.273A17.781,17.781,0,0,1,65.584,141.487Z" transform="translate(-63.727 -129.846)" fill="#0ba0a6" />
              <path id="kont_8" data-name="kont 8" d="M73.235,141.142a3.027,3.027,0,0,1-1.365-1.748,11.09,11.09,0,0,1-.476-3.691,10.384,10.384,0,0,1,.491-3.589,3.214,3.214,0,0,1,1.4-1.771,4.851,4.851,0,0,1,2.325-.491,11.554,11.554,0,0,1,2,.164,11.844,11.844,0,0,1,1.608.383v1.793A10.689,10.689,0,0,0,77.885,132q-.857-.077-1.795-.077a2.913,2.913,0,0,0-1.435.288,1.733,1.733,0,0,0-.726,1.093,9.569,9.569,0,0,0-.227,2.411,10.371,10.371,0,0,0,.2,2.388,1.737,1.737,0,0,0,.7,1.108,2.836,2.836,0,0,0,1.482.311,25.488,25.488,0,0,0,3.122-.155v1.779a12.044,12.044,0,0,1-3.636.453A5.107,5.107,0,0,1,73.235,141.142Z" transform="translate(-60.19 -129.851)" fill="#0ba0a6" />
              <path id="kont_9" data-name="kont 9" d="M79.243,129.926h2.309v4.805h4.353v-4.805h2.325v11.548H85.905v-4.666H81.552v4.666H79.243Z" transform="translate(-56.568 -129.816)" fill="#0ba0a6" />
              <path id="kont_10" data-name="kont 10" d="M88.138,129.926h2.309v11.548H88.138Z" transform="translate(-52.464 -129.816)" fill="#0ba0a6" />
              <path id="kont_11" data-name="kont 11" d="M93.144,140.834a2.79,2.79,0,0,1-.671-2.091v-8.817h2.309v8.442a.9.9,0,0,0,1.03,1.014h3.652v2.091H95.2A2.89,2.89,0,0,1,93.144,140.834Z" transform="translate(-50.464 -129.816)" fill="#0ba0a6" />
              <path id="kont_12" data-name="kont 12" d="M99.574,129.926h4.884a3.349,3.349,0,0,1,3.122,1.5,8.34,8.34,0,0,1,.9,4.276,7.643,7.643,0,0,1-1,4.346,3.45,3.45,0,0,1-3.028,1.428H99.574Zm4.65,9.471a1.551,1.551,0,0,0,1.5-.912,6.562,6.562,0,0,0,.453-2.785,9.361,9.361,0,0,0-.212-2.271,1.96,1.96,0,0,0-.631-1.117,1.819,1.819,0,0,0-1.108-.311h-2.341v7.4Z" transform="translate(-47.188 -129.816)" fill="#0ba0a6" />
              <path id="kont_13" data-name="kont 13" d="M109.065,141.052a2.186,2.186,0,0,1-.842-2.044v-6.445a2.44,2.44,0,0,1,.772-2.021,2.9,2.9,0,0,1,1.866-.615q2.387,0,4.992.2v1.935h-4.307q-1.015,0-1.014.953v1.669l4.573.126v1.825l-4.573.126v1.591q0,1.03.967,1.03h4.353v1.935a43.473,43.473,0,0,1-4.821.234A3.785,3.785,0,0,1,109.065,141.052Z" transform="translate(-43.197 -129.816)" fill="#0ba0a6" />
              <path id="kont_14" data-name="kont 14" d="M115.986,129.926h4.774a3.4,3.4,0,0,1,2.411.818,3.83,3.83,0,0,1,.883,2.879,3.79,3.79,0,0,1-.492,2.154,3.031,3.031,0,0,1-1.334,1.061l2.154,4.636h-2.357l-1.856-4.276q-.75,0-1.873-.032v4.308h-2.309Zm4.37,5.414a1.343,1.343,0,0,0,1.03-.383,1.945,1.945,0,0,0,.358-1.334,1.765,1.765,0,0,0-.358-1.271,1.415,1.415,0,0,0-1.03-.351h-2.061v3.339Z" transform="translate(-39.615 -129.816)" fill="#0ba0a6" />
              <path id="kont_15" data-name="kont 15" d="M129.431,141.164a2.681,2.681,0,0,1-1.084-1.07,3.213,3.213,0,0,1-.39-1.6,3.75,3.75,0,0,1,1.483-2.949l1.03-.874-.282-.421a3.7,3.7,0,0,1-.795-2.185,1.767,1.767,0,0,1,.741-1.577,3.394,3.394,0,0,1,1.928-.5,16.011,16.011,0,0,1,2.668.2v.89h-2.465q-1.64,0-1.64,1.2a1.953,1.953,0,0,0,.18.8,5.626,5.626,0,0,0,.6.983l3.105,4.229,2.325-2.17.453.53-1.077,1.451-1.061,1.014,1.732,2.327h-1.342l-1.2-1.608-.53.468a5.216,5.216,0,0,1-1.381.953,3.563,3.563,0,0,1-1.429.281A3.267,3.267,0,0,1,129.431,141.164Zm2.731-.984a3.548,3.548,0,0,0,.991-.719l.5-.468-2.575-3.464-.811.7a3.334,3.334,0,0,0-.867,1.038,2.472,2.472,0,0,0-.257,1.1,1.965,1.965,0,0,0,.554,1.467,2.03,2.03,0,0,0,1.491.545A2.406,2.406,0,0,0,132.162,140.18Z" transform="translate(-34.093 -129.787)" fill="#122035" />
              <path id="kont_16" data-name="kont 16" d="M141.2,129.968h4.542a3.136,3.136,0,0,1,2.9,1.437,8.378,8.378,0,0,1,.881,4.307,7.869,7.869,0,0,1-.96,4.245,3.136,3.136,0,0,1-2.816,1.5H141.2Zm4.448,10.377a2.119,2.119,0,0,0,1.982-1.225,7.311,7.311,0,0,0,.655-3.409,10.8,10.8,0,0,0-.273-2.715,2.62,2.62,0,0,0-.851-1.458,2.408,2.408,0,0,0-1.513-.446h-3.2v9.254Z" transform="translate(-27.983 -129.797)" fill="#122035" />
              <path id="kont_17" data-name="kont 17" d="M150.409,141.056a2,2,0,0,1-.68-1.771v-7.006a2.173,2.173,0,0,1,.656-1.764,2.427,2.427,0,0,1,1.608-.547q2.5.048,3.886.11l.919.031v1H152.3a1.194,1.194,0,0,0-1.327,1.374V135.2l5.135.077v.951l-5.135.079V139a1.28,1.28,0,0,0,.376,1.077,1.654,1.654,0,0,0,1.014.281H156.8v1q-2.964.156-4.728.155A2.89,2.89,0,0,1,150.409,141.056Z" transform="translate(-24.047 -129.797)" fill="#122035" />
              <path id="kont_18" data-name="kont 18" d="M158.894,141.117a2.865,2.865,0,0,1-1.279-1.724,12.3,12.3,0,0,1-.422-3.683,11.292,11.292,0,0,1,.437-3.551,3.052,3.052,0,0,1,1.327-1.755,4.835,4.835,0,0,1,2.372-.5,13.473,13.473,0,0,1,1.647.117,13.062,13.062,0,0,1,1.646.305v.921c-.364-.053-.833-.1-1.4-.156s-1.14-.079-1.7-.079a3.648,3.648,0,0,0-1.825.383,2.275,2.275,0,0,0-.96,1.39,10.762,10.762,0,0,0-.3,2.94,11.638,11.638,0,0,0,.289,3,2.181,2.181,0,0,0,.927,1.374,3.768,3.768,0,0,0,1.843.365,19.126,19.126,0,0,0,3.136-.2v.937a13.519,13.519,0,0,1-1.615.272,15.5,15.5,0,0,1-1.771.1A4.992,4.992,0,0,1,158.894,141.117Z" transform="translate(-20.603 -129.827)" fill="#122035" />
              <path id="kont_19" data-name="kont 19" d="M166.559,141.148a2.839,2.839,0,0,1-1.4-1.67,14.357,14.357,0,0,1,.016-7.4,2.987,2.987,0,0,1,1.428-1.724,5.842,5.842,0,0,1,2.512-.453,6.051,6.051,0,0,1,2.559.446,2.859,2.859,0,0,1,1.4,1.716,11.311,11.311,0,0,1,.469,3.722,10.868,10.868,0,0,1-.476,3.69,2.839,2.839,0,0,1-1.4,1.67,7.792,7.792,0,0,1-5.1,0Zm4.463-1.022a2.126,2.126,0,0,0,.976-1.343,10.761,10.761,0,0,0,.311-3A11.32,11.32,0,0,0,172,132.7a2.1,2.1,0,0,0-.976-1.35,4.341,4.341,0,0,0-1.911-.336,4.219,4.219,0,0,0-1.857.336,2.17,2.17,0,0,0-1.005,1.365,10.523,10.523,0,0,0-.336,3.075,11.224,11.224,0,0,0,.3,3,2.068,2.068,0,0,0,.959,1.334,4.364,4.364,0,0,0,1.944.342A4.269,4.269,0,0,0,171.022,140.126Z" transform="translate(-17.15 -129.827)" fill="#122035" />
              <path id="kont_20" data-name="kont 20" d="M173.584,129.968h4.524a3.161,3.161,0,0,1,2.161.718,3.459,3.459,0,0,1,.82,2.669,3.5,3.5,0,0,1-.624,2.357,2.8,2.8,0,0,1-1.561.874l2.357,4.869H180l-2.232-4.7-.859-.016-2.075-.047v4.76h-1.248Zm4.337,5.774a1.949,1.949,0,0,0,1.429-.5,2.663,2.663,0,0,0,.507-1.89,2.4,2.4,0,0,0-.516-1.786,2.014,2.014,0,0,0-1.42-.476h-3.089v4.65Z" transform="translate(-13.04 -129.797)" fill="#122035" />
              <path id="kont_21" data-name="kont 21" d="M184.939,129.968h1.591l3.933,11.487h-1.28l-1.154-3.278h-4.619l-1.124,3.278h-1.279Zm2.778,7.085-1.983-5.992-2.012,5.992Z" transform="translate(-9.616 -129.797)" fill="#122035" />
              <path id="kont_22" data-name="kont 22" d="M192.423,131.092h-3.558v-1.124H197.2v1.124h-3.544v10.363h-1.232Z" transform="translate(-5.99 -129.797)" fill="#122035" />
              <path id="kont_23" data-name="kont 23" d="M196.948,129.968H198.2v11.487h-1.248Z" transform="translate(-2.261 -129.797)" fill="#122035" />
              <path id="kont_24" data-name="kont 24" d="M201.514,141.056a2,2,0,0,1-.678-1.771v-7.006a2.168,2.168,0,0,1,.655-1.764,2.427,2.427,0,0,1,1.608-.547q2.495.048,3.884.11l.922.031v1h-4.5a1.194,1.194,0,0,0-1.327,1.374V135.2l5.135.077v.951l-5.135.079V139a1.28,1.28,0,0,0,.376,1.077,1.654,1.654,0,0,0,1.014.281H207.9v1q-2.966.156-4.729.155A2.893,2.893,0,0,1,201.514,141.056Z" transform="translate(-0.467 -129.797)" fill="#122035" />
              <path id="kont_25" data-name="kont 25" d="M208.033,129.968h1.279l2.465,9.785,2.839-9.785h1.25l2.825,9.785,2.465-9.785h1.28l-2.951,11.487h-1.342l-2.9-9.753-2.918,9.753h-1.342Z" transform="translate(2.854 -129.797)" fill="#122035" />
              <path id="kont_26" data-name="kont 26" d="M220.875,141.056a2,2,0,0,1-.68-1.771v-7.006a2.168,2.168,0,0,1,.656-1.764,2.427,2.427,0,0,1,1.608-.547q2.495.048,3.884.11l.922.031v1h-4.5a1.194,1.194,0,0,0-1.327,1.374V135.2l5.135.077v.951l-5.135.079V139a1.284,1.284,0,0,0,.374,1.077,1.662,1.662,0,0,0,1.016.281h4.432v1q-2.966.156-4.729.155A2.894,2.894,0,0,1,220.875,141.056Z" transform="translate(8.465 -129.797)" fill="#122035" />
              <path id="kont_27" data-name="kont 27" d="M227.852,129.968h4.524a3.166,3.166,0,0,1,2.161.718,3.459,3.459,0,0,1,.818,2.669,3.5,3.5,0,0,1-.623,2.357,2.8,2.8,0,0,1-1.561.874l2.356,4.869h-1.264l-2.232-4.7-.858-.016-2.075-.047v4.76h-1.248Zm4.337,5.774a1.946,1.946,0,0,0,1.428-.5,2.656,2.656,0,0,0,.507-1.89,2.408,2.408,0,0,0-.514-1.786,2.014,2.014,0,0,0-1.42-.476H229.1v4.65Z" transform="translate(11.998 -129.797)" fill="#122035" />
              <path id="kont_28" data-name="kont 28" d="M235.732,129.968h1.248v5.2h2.014l3.151-5.2h1.311l-3.48,5.743,3.526,5.743h-1.325l-3.183-5.166H236.98v5.166h-1.248Z" transform="translate(15.634 -129.797)" fill="#122035" />
              <path id="kont_29" data-name="kont 29" d="M244.045,141.056a2,2,0,0,1-.678-1.771v-7.006a2.172,2.172,0,0,1,.655-1.764,2.427,2.427,0,0,1,1.608-.547q2.495.048,3.884.11l.922.031v1h-4.5q-1.326,0-1.326,1.374V135.2l5.134.077v.951l-5.134.079V139a1.28,1.28,0,0,0,.374,1.077,1.654,1.654,0,0,0,1.014.281h4.432v1q-2.966.156-4.729.155A2.894,2.894,0,0,1,244.045,141.056Z" transform="translate(19.157 -129.797)" fill="#122035" />
              <path id="kont_30" data-name="kont 30" d="M251.172,129.968h1.014l5.993,9.349v-9.349h1.232v11.487H258.4l-5.992-9.348v9.348h-1.233Z" transform="translate(22.758 -129.797)" fill="#122035" />
            </g>
          </g>
          <rect id="ugol_1" data-name="ugol 1" width="5.866" height="5.866" transform="translate(340.03 133.091)" fill="#0ba0a6" />
        </g>
      </svg>
    </a>

    <div class="hamburger">

      <div class="menu-icon menu-icon-1">
        <div class="bar bar-1"></div>
        <div class="bar bar-2"></div>
        <div class="bar bar-3"></div>




      </div>
    </div>
    <nav id="site-navigation" class="main-navigation">

      <?php wp_nav_menu(array('theme_location' => 'menu-1')); ?>
      <div class="mobile-social">



        <?php if (is_active_sidebar('footer_area_three')) {
          dynamic_sidebar('footer_area_three');
        } ?>



      </div>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->