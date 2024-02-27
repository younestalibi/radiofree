<!DOCTYPE html>
<html lang="en-US">

<head>
@vite(['resources/css/app.css', 'resources/js/app.jsx'])

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="https://radiofreesom.com/xmlrpc.php" />
  <title>Voice of Somalia | RadioFreeSom</title>
  <meta name="robots" content="max-image-preview:large" />
  <link rel="dns-prefetch" href="//fonts.googleapis.com" />
  <link rel="alternate" type="application/rss+xml" title="Voice of Somalia &raquo; Feed"
    href="https://radiofreesom.com/feed/" />
  <link rel="alternate" type="application/rss+xml" title="Voice of Somalia &raquo; Comments Feed"
    href="https://radiofreesom.com/comments/feed/" />
  <link rel="alternate" type="application/rss+xml" title="Voice of Somalia &raquo; Lobby Comments Feed"
    href="https://radiofreesom.com/lobby/feed/" />
  <script type="text/javascript">
    /* <![CDATA[ */
    window._wpemojiSettings = {
      baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
      ext: ".png",
      svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
      svgExt: ".svg",
      source: {
        concatemoji: "./wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3",
      },
    };
    /*! This file is auto-generated */
    !(function (i, n) {
      var o, s, e;
      function c(e) {
        try {
          var t = { supportTests: e, timestamp: new Date().valueOf() };
          sessionStorage.setItem(o, JSON.stringify(t));
        } catch (e) { }
      }
      function p(e, t, n) {
        e.clearRect(0, 0, e.canvas.width, e.canvas.height),
          e.fillText(t, 0, 0);
        var t = new Uint32Array(
          e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
        ),
          r =
            (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
              e.fillText(n, 0, 0),
              new Uint32Array(
                e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
              ));
        return t.every(function (e, t) {
          return e === r[t];
        });
      }
      function u(e, t, n) {
        switch (t) {
          case "flag":
            return n(
              e,
              "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
              "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
            )
              ? !1
              : !n(
                e,
                "\ud83c\uddfa\ud83c\uddf3",
                "\ud83c\uddfa\u200b\ud83c\uddf3"
              ) &&
              !n(
                e,
                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
              );
          case "emoji":
            return !n(
              e,
              "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
              "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
            );
        }
        return !1;
      }
      function f(e, t, n) {
        var r =
          "undefined" != typeof WorkerGlobalScope &&
            self instanceof WorkerGlobalScope
            ? new OffscreenCanvas(300, 150)
            : i.createElement("canvas"),
          a = r.getContext("2d", { willReadFrequently: !0 }),
          o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
        return (
          e.forEach(function (e) {
            o[e] = t(a, e, n);
          }),
          o
        );
      }
      function t(e) {
        var t = i.createElement("script");
        (t.src = e), (t.defer = !0), i.head.appendChild(t);
      }
      "undefined" != typeof Promise &&
        ((o = "wpEmojiSettingsSupports"),
          (s = ["flag", "emoji"]),
          (n.supports = { everything: !0, everythingExceptFlag: !0 }),
          (e = new Promise(function (e) {
            i.addEventListener("DOMContentLoaded", e, { once: !0 });
          })),
          new Promise(function (t) {
            var n = (function () {
              try {
                var e = JSON.parse(sessionStorage.getItem(o));
                if (
                  "object" == typeof e &&
                  "number" == typeof e.timestamp &&
                  new Date().valueOf() < e.timestamp + 604800 &&
                  "object" == typeof e.supportTests
                )
                  return e.supportTests;
              } catch (e) { }
              return null;
            })();
            if (!n) {
              if (
                "undefined" != typeof Worker &&
                "undefined" != typeof OffscreenCanvas &&
                "undefined" != typeof URL &&
                URL.createObjectURL &&
                "undefined" != typeof Blob
              )
                try {
                  var e =
                    "postMessage(" +
                    f.toString() +
                    "(" +
                    [JSON.stringify(s), u.toString(), p.toString()].join(
                      ","
                    ) +
                    "));",
                    r = new Blob([e], { type: "text/javascript" }),
                    a = new Worker(URL.createObjectURL(r), {
                      name: "wpTestEmojiSupports",
                    });
                  return void (a.onmessage = function (e) {
                    c((n = e.data)), a.terminate(), t(n);
                  });
                } catch (e) { }
              c((n = f(s, u, p)));
            }
            t(n);
          })
            .then(function (e) {
              for (var t in e)
                (n.supports[t] = e[t]),
                  (n.supports.everything =
                    n.supports.everything && n.supports[t]),
                  "flag" !== t &&
                  (n.supports.everythingExceptFlag =
                    n.supports.everythingExceptFlag && n.supports[t]);
              (n.supports.everythingExceptFlag =
                n.supports.everythingExceptFlag && !n.supports.flag),
                (n.DOMReady = !1),
                (n.readyCallback = function () {
                  n.DOMReady = !0;
                });
            })
            .then(function () {
              return e;
            })
            .then(function () {
              var e;
              n.supports.everything ||
                (n.readyCallback(),
                  (e = n.source || {}).concatemoji
                    ? t(e.concatemoji)
                    : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
            }));
    })((window, document), window._wpemojiSettings);
    /* ]]> */
  </script>
  <style id="wp-emoji-styles-inline-css" type="text/css">
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 0.07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
  </style>
  <link rel="stylesheet" id="wp-block-library-css" href="./css/dist-block-library-style.min.css" type="text/css"
    media="all" />
  <style id="classic-theme-styles-inline-css" type="text/css">
    /*! This file is auto-generated */
    .wp-block-button__link {
      color: #fff;
      background-color: #32373c;
      border-radius: 9999px;
      box-shadow: none;
      text-decoration: none;
      padding: calc(0.667em + 2px) calc(1.333em + 2px);
      font-size: 1.125em;
    }

    .wp-block-file__button {
      background: #32373c;
      color: #fff;
      text-decoration: none;
    }
  </style>
  <style id="global-styles-inline-css" type="text/css">
    body {
      --wp--preset--color--black: #000000;
      --wp--preset--color--cyan-bluish-gray: #abb8c3;
      --wp--preset--color--white: #ffffff;
      --wp--preset--color--pale-pink: #f78da7;
      --wp--preset--color--vivid-red: #cf2e2e;
      --wp--preset--color--luminous-vivid-orange: #ff6900;
      --wp--preset--color--luminous-vivid-amber: #fcb900;
      --wp--preset--color--light-green-cyan: #7bdcb5;
      --wp--preset--color--vivid-green-cyan: #00d084;
      --wp--preset--color--pale-cyan-blue: #8ed1fc;
      --wp--preset--color--vivid-cyan-blue: #0693e3;
      --wp--preset--color--vivid-purple: #9b51e0;
      --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
          rgba(6, 147, 227, 1) 0%,
          rgb(155, 81, 224) 100%);
      --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
          rgb(122, 220, 180) 0%,
          rgb(0, 208, 130) 100%);
      --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
          rgba(252, 185, 0, 1) 0%,
          rgba(255, 105, 0, 1) 100%);
      --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
          rgba(255, 105, 0, 1) 0%,
          rgb(207, 46, 46) 100%);
      --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
          rgb(238, 238, 238) 0%,
          rgb(169, 184, 195) 100%);
      --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
          rgb(74, 234, 220) 0%,
          rgb(151, 120, 209) 20%,
          rgb(207, 42, 186) 40%,
          rgb(238, 44, 130) 60%,
          rgb(251, 105, 98) 80%,
          rgb(254, 248, 76) 100%);
      --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
          rgb(255, 206, 236) 0%,
          rgb(152, 150, 240) 100%);
      --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
          rgb(254, 205, 165) 0%,
          rgb(254, 45, 45) 50%,
          rgb(107, 0, 62) 100%);
      --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
          rgb(255, 203, 112) 0%,
          rgb(199, 81, 192) 50%,
          rgb(65, 88, 208) 100%);
      --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
          rgb(255, 245, 203) 0%,
          rgb(182, 227, 212) 50%,
          rgb(51, 167, 181) 100%);
      --wp--preset--gradient--electric-grass: linear-gradient(135deg,
          rgb(202, 248, 128) 0%,
          rgb(113, 206, 126) 100%);
      --wp--preset--gradient--midnight: linear-gradient(135deg,
          rgb(2, 3, 129) 0%,
          rgb(40, 116, 252) 100%);
      --wp--preset--font-size--small: 13px;
      --wp--preset--font-size--medium: 20px;
      --wp--preset--font-size--large: 36px;
      --wp--preset--font-size--x-large: 42px;
      --wp--preset--spacing--20: 0.44rem;
      --wp--preset--spacing--30: 0.67rem;
      --wp--preset--spacing--40: 1rem;
      --wp--preset--spacing--50: 1.5rem;
      --wp--preset--spacing--60: 2.25rem;
      --wp--preset--spacing--70: 3.38rem;
      --wp--preset--spacing--80: 5.06rem;
      --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
      --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
        6px 6px rgba(0, 0, 0, 1);
      --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
      gap: 0.5em;
    }

    :where(.is-layout-grid) {
      gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
      max-width: var(--wp--style--global--content-size);
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
      max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
      display: flex;
    }

    body .is-layout-flex {
      flex-wrap: wrap;
      align-items: center;
    }

    body .is-layout-flex>* {
      margin: 0;
    }

    body .is-layout-grid {
      display: grid;
    }

    body .is-layout-grid>* {
      margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
      gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
      gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
      gap: 1.25em;
    }

    .has-black-color {
      color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
      color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
      color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
      color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
      color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
      color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
      color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
      color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
      color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
      color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
      color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
      color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
      background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
      background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
      background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
      background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
      background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
      background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
      background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
      background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
      background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
      background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
      border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
      border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
      border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
      border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
      border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
      border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
      border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
      border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
      border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
      border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
      background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
      background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
      background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
      background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
      background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
      background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
      background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
      background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
      background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
      background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
      font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
      font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
      font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
      font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
      color: inherit;
    }

    :where(.wp-block-post-template.is-layout-flex) {
      gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
      gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
      gap: 2em;
    }

    .wp-block-pullquote {
      font-size: 1.5em;
      line-height: 1.6;
    }
  </style>
  <link rel="stylesheet" id="contact-form-7-css" href="./css/contact-form-7-includes-css-styles.css" type="text/css"
    media="all" />
  <link rel="stylesheet" id="rs-plugin-settings-css" href="./css/revslider-public-assets-css-rs6.css" type="text/css"
    media="all" />
  <style id="rs-plugin-settings-inline-css" type="text/css">
    #rs-demo-id {}
  </style>
  <link rel="stylesheet" id="audioigniter-css" href="./css/audioigniter-player-build-style.css" type="text/css"
    media="all" />
  <link rel="stylesheet" id="mediaelement-css" href="./css/mediaelement-mediaelementplayer-legacy.min.css"
    type="text/css" media="all" />
  <link rel="stylesheet" id="wp-mediaelement-css" href="./css/mediaelement-wp-mediaelement.min.css" type="text/css"
    media="all" />
  <link rel="stylesheet" id="bridge-default-style-css" href="./css/cs-style.css" type="text/css" media="all" />
  <link rel="stylesheet" id="bridge-qode-font_awesome-css" href="./css/cs-css-font-awesome-css-font-awesome.min.css"
    type="text/css" media="all" />
  <link rel="stylesheet" id="bridge-qode-font_elegant-css" href="./css/cs-css-elegant-icons-style.min.css"
    type="text/css" media="all" />
  <link rel="stylesheet" id="bridge-qode-linea_icons-css" href="./css/cs-css-linea-icons-style.css" type="text/css"
    media="all" />
  <link rel="stylesheet" id="bridge-qode-dripicons-css" href="./css/cs-css-dripicons-dripicons.css" type="text/css"
    media="all" />
  <link rel="stylesheet" id="bridge-stylesheet-css" href="./css/cs-css-stylesheet.min.css" type="text/css"
    media="all" />
  <style id="bridge-stylesheet-inline-css" type="text/css">
    .page-id-228.disabled_footer_top .footer_top_holder,
    .page-id-228.disabled_footer_bottom .footer_bottom_holder {
      display: none;
    }
  </style>
  <link rel="stylesheet" id="bridge-print-css" href="./css/cs-css-print.css" type="text/css" media="all" />
  <link rel="stylesheet" id="bridge-style-dynamic-css" href="./css/cs-css-style_dynamic.css" type="text/css"
    media="all" />
  <link rel="stylesheet" id="bridge-responsive-css" href="./css/cs-css-responsive.min.css" type="text/css"
    media="all" />
  <link rel="stylesheet" id="bridge-style-dynamic-responsive-css" href="./css/cs-css-style_dynamic_responsive.css"
    type="text/css" media="all" />
  <style id="bridge-style-dynamic-responsive-inline-css" type="text/css">
    .qode-info-card .qode-info-card-image {
      padding-top: 87px;
    }

    .qode-info-card .qode-info-card-text-holder {
      padding: 32px 40px 86px;
    }

    .qode-info-card .qode-info-card-text {
      margin-top: 7px;
    }

    nav.main_menu ul li a span.underline_dash,
    nav.vertical_menu ul li a span.underline_dash {
      bottom: -5px;
    }

    nav.main_menu ul li a span.underline_dash {
      bottom: -5%;
    }

    .wpcf7-form.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-submit {
      line-height: 42px;
    }

    @media only screen and (max-width: 1000px) {
      .side_menu_button {
        display: none;
      }
    }

    .qode_clients .qode_client_holder_inner {
      position: relative;
      margin: 0 20px 75px;
    }

    .wpcf7-form.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-submit {
      line-height: 30px;
    }

    .q_price_table.qode_pricing_table_advanced .price_table_inner .price {
      font-weight: 700;
      color: #000;
    }

    .q_price_table.qode_pricing_table_advanced .price_table_inner .value {
      top: -4px;
      font-weight: 500;
      font-size: 26px;
      color: #000;
    }

    .q_price_table.qode_pricing_table_advanced .qode_pricing_table_text li.pricing_table_content {
      font-family: Open Sans, sans-serif;
      line-height: 35px;
    }

    .q_price_table.qode_pricing_table_advanced .price_button .qbutton {
      background-color: transparent;
      color: #000;
      padding: 0;
      border: none;
    }

    .q_price_table.qode_pricing_table_advanced .price_button .qbutton:hover {
      color: #2e2e2e;
    }

    .q_price_table.qode_pricing_table_advanced .price_button .qbutton {
      margin: 20px 0px 0px;
    }

    .q_price_table.qode_pricing_table_advanced .qode_pt_subtitle {
      font-size: 18px;
      color: #676767;
      font-weight: 400;
      font-family: Open Sans, sans-serif;
    }

    .q_price_table.qode_pricing_table_advanced .price_table_inner .mark {
      font-family: Open Sans, sans-serif;
    }

    .qode-instagram-feed li {
      padding: 0 3px !important;
      margin: 0 0 6px !important;
    }

    .mob-radio {
      display: none;
    }

    .pc-radio {
      display: block;
    }

    @media only screen and (min-width: 1440px) {
      footer .qode-instagram-feed {
        padding-right: 15%;
      }
    }

    .title.title_size_large h1 {
      font-size: 60px;
      line-height: 75px;
    }

    .qode-advanced-pricing-list .qode-apl-item .qode-apl-item-bottom .qode-apl-item-description {
      font-family: Open Sans, sans-serif;
      font-size: 13px;
    }

    .qode-advanced-pricing-list .qode-apl-item {
      margin-bottom: 14px;
    }

    @media only screen and (min-width: 481px) {
      .error404 .page_not_found p {
        padding: 0 100px;
      }
    }

    #rev_slider_1_1 .zeus .tp-title-wrap {
      display: none;
    }

    #rev_slider_1_1 .zeus.tparrows {
      border: 2px solid #fff;
      transition: all 0.3s ease;
    }

    #rev_slider_1_1 .zeus.tparrows:before {
      transition: all 0.3s ease;
    }

    #rev_slider_1_1 .zeus.tparrows:hover {
      background-color: #fff;
    }

    #rev_slider_1_1 .zeus.tparrows:hover:before {
      color: #000;
    }

    header:not(.with_hover_bg_color) nav.main_menu>ul>li:hover>a {
      opacity: 1;
    }

    .qode-info-card:hover .qode-info-card-image {
      padding-top: 77px;
      padding-bottom: 10px;
    }

    .qode-info-card .qode-info-card-image {
      transition: all 0.3s ease;
    }

    .wpb_single_image.qode_image_hover_bottom_title .vc_single_image-wrapper:hover img {
      transform: scale(1.05);
    }

    .wpb_single_image.qode_image_hover_bottom_title .vc_single_image-wrapper img {
      transition: all 0.3s ease;
    }

    #rev_slider_1_1 .zeus.tparrows:before {
      -webkit-text-stroke: 1px #fff;
    }

    #rev_slider_1_1 .zeus.tparrows:hover:before {
      -webkit-text-stroke: 1px #000;
    }

    @media only screen and (max-width: 480px) {
      .footer_top.footer_top_full {
        padding-left: 20px;
        padding-right: 20px;
      }

      .pc-radio {
        display: none;
      }

      .mob-radio {
        display: block;
      }
    }
  </style>
  <link rel="stylesheet" id="js_composer_front-css" href="./css/js_composer-assets-css-js_composer.min.css"
    type="text/css" media="all" />
  <link rel="stylesheet" id="bridge-style-handle-google-fonts-css"
    href="https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C300italic%2C400italic%2C700italic%7COpen+Sans%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C300italic%2C400italic%2C700italic%7COswald%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C300italic%2C400italic%2C700italic&#038;subset=latin%2Clatin-ext&#038;ver=1.0.0"
    type="text/css" media="all" />
  <script>
    /* <![CDATA[ */
    var rcewpp = {
      ajax_url: "https://radiofreesom.com/wp-admin/admin-ajax.php",
      nonce: "da82d3c5fb",
      home_url: "https://radiofreesom.com/",
      settings_icon:
        "https://radiofreesom.com/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings.png",
      settings_hover_icon:
        "https://radiofreesom.com/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings_hover.png",
    };
    /* ]]\> */
  </script>
  <script type="text/javascript" src="./js/jquery-jquery.min.js" id="jquery-core-js"></script>
  <script type="text/javascript" src="./js/jquery-jquery-migrate.min.js" id="jquery-migrate-js"></script>
  <script type="text/javascript" src="./js/revslider-public-assets-js-rbtools.min.js" id="tp-tools-js"></script>
  <script type="text/javascript" src="./js/revslider-public-assets-js-rs6.min.js" id="revmin-js"></script>
  <link rel="https://api.w.org/" href="https://radiofreesom.com/wp-json/" />
  <link rel="alternate" type="application/json" href="https://radiofreesom.com/wp-json/wp/v2/pages/228" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://radiofreesom.com/xmlrpc.php?rsd" />
  <meta name="generator" content="WordPress 6.4.3" />
  <link rel="canonical" href="https://radiofreesom.com/" />
  <link rel="shortlink" href="https://radiofreesom.com/" />
  <link rel="alternate" type="application/json+oembed"
    href="https://radiofreesom.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fradiofreesom.com%2F" />
  <link rel="alternate" type="text/xml+oembed"
    href="https://radiofreesom.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fradiofreesom.com%2F&#038;format=xml" />
  <style type="text/css">
    .recentcomments a {
      display: inline !important;
      padding: 0 !important;
      margin: 0 !important;
    }
  </style>
  <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
  <meta name="generator"
    content="Powered by Slider Revolution 6.3.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
  <link rel="icon" href="./images/vos-icon-150x150.png" sizes="32x32" />
  <link rel="icon" href="./images/vos-icon-300x300.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="./images/vos-icon-300x300.png" />
  <meta name="msapplication-TileImage"
    content="https://radiofreesom.com/wp-content/uploads/2021/07/vos-icon-300x300.png" />
  <script type="text/javascript">
    function setREVStartSize(e) {
      //window.requestAnimationFrame(function() {
      window.RSIW =
        window.RSIW === undefined ? window.innerWidth : window.RSIW;
      window.RSIH =
        window.RSIH === undefined ? window.innerHeight : window.RSIH;
      try {
        var pw = document.getElementById(e.c).parentNode.offsetWidth,
          newh;
        pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
        e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
        e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
        e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
        e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
        e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
        e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
        e.mh =
          e.mh === undefined || e.mh == "" || e.mh === "auto"
            ? 0
            : parseInt(e.mh, 0);
        if (e.layout === "fullscreen" || e.l === "fullscreen")
          newh = Math.max(e.mh, window.RSIH);
        else {
          e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
          for (var i in e.rl)
            if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
          e.gh =
            e.el === undefined ||
              e.el === "" ||
              (Array.isArray(e.el) && e.el.length == 0)
              ? e.gh
              : e.el;
          e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
          for (var i in e.rl)
            if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

          var nl = new Array(e.rl.length),
            ix = 0,
            sl;
          e.tabw = e.tabhide >= pw ? 0 : e.tabw;
          e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
          e.tabh = e.tabhide >= pw ? 0 : e.tabh;
          e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
          for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
          sl = nl[0];
          for (var i in nl)
            if (sl > nl[i] && nl[i] > 0) {
              sl = nl[i];
              ix = i;
            }
          var m =
            pw > e.gw[ix] + e.tabw + e.thumbw
              ? 1
              : (pw - (e.tabw + e.thumbw)) / e.gw[ix];
          newh = e.gh[ix] * m + (e.tabh + e.thumbh);
        }
        if (window.rs_init_css === undefined)
          window.rs_init_css = document.head.appendChild(
            document.createElement("style")
          );
        document.getElementById(e.c).height = newh + "px";
        window.rs_init_css.innerHTML +=
          "#" + e.c + "_wrapper { height: " + newh + "px }";
      } catch (e) {
        console.log("Failure at Presize of Slider:" + e);
      }
      //});
    }
  </script>
  <style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1626273809983 {
      background-image: url("{{asset('images/background.jpg')}}") !important;
    }
  </style>
  <noscript>
    <style>
      .wpb_animate_when_almost_visible {
        opacity: 1;
      }
    </style>
  </noscript>
</head>

<body
  class="home page-template page-template-full_width page-template-full_width-php page page-id-228 bridge-core-1.0.6 qode-title-hidden qode_grid_1300 footer_responsive_adv qode-theme-ver-18.2 qode-theme-cs disabled_footer_top disabled_footer_bottom qode_header_in_grid wpb-js-composer js-comp-ver-6.4.1 vc_responsive"
  itemscope itemtype="http://schema.org/WebPage">
  <div class="wrapper">
    <div class="wrapper_inner">
      <!-- Google Analytics start -->
      <!-- Google Analytics end -->
      <header class="scroll_header_top_area fixed scrolled_not_transparent page_header">
        <div class="header_inner clearfix">
          <div class="header_top_bottom_holder">
            <div class="header_bottom clearfix" style="background-color: rgba(0, 0, 0, 0.8)">
              <div class="container">
                <div class="container_inner clearfix">
                  <div class="header_inner_left">
                    <div class="logo_wrapper">
                      <div class="q_logo">
                        <a itemprop="url" href="/index">
                          <img itemprop="image" class="normal" src="{{asset('images/logo.png')}}" alt="Logo" />
                          <img itemprop="image" class="light" src="{{asset('images/logo.png')}}" alt="Logo" />
                          <img itemprop="image" class="dark" src="{{asset('images/logo.png')}}" alt="Logo" />
                          <img itemprop="image" class="sticky" src="{{asset('images/logo.png')}}" alt="Logo" />
                          <img itemprop="image" class="mobile" src="{{asset('images/logo.png')}}" alt="Logo" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="header_inner_right">
                    <div class="side_menu_button_wrapper right">
                      <div class="header_bottom_right_widget_holder">
                        <div class="widget_text header_bottom_widget widget_custom_html">
                          <div class="textwidget custom-html-widget">
                            <!--[icons icon="fa-envelope" size="fa-2x" type="transparent" custom_size="16" custom_shape_size="20" icon_color="#ffffff" icon_hover_color="#D61C62" background_color="transparent" hover_background_color="transparent"]-->
                            <h3 style="
                                  color: #f60f5d;
                                  margin-left: 5px;
                                  font-weight: 700;
                                ">
                              Voice of Somalia - Country and Abroad
                            </h3>
                          </div>
                        </div>
                      </div>
                      <div class="side_menu_button"></div>
                    </div>
                  </div>
                  <nav class="main_menu drop_down center"></nav>
                  <nav class="mobile_menu"></nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <a id="back_to_top" href="#">
        <span class="fa-stack">
          <i class="qode_icon_font_awesome fa fa-arrow-up"></i>
        </span>
      </a>
      <div class="content">
        <div class="content_inner">
          <div class="full_width">
            <div class="full_width_inner">
              <div
                class="vc_row wpb_row section vc_row-fluid full-screen-section relative vc_custom_1626273809983 full_screen_section"
                style="text-align: left">
                <div class="full_section_inner clearfix">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                      <div class="wpb_wrapper">
                        <div class="vc_row wpb_row section vc_row-fluid vc_inner grid_section use_row_as_box"
                          style="text-align: left">
                          <div class="section_inner clearfix">
                            <div class="section_inner_margin clearfix">
                              <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                  <div class="wpb_wrapper"></div>
                                </div>
                              </div>
                              <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="vc_column-inner">
                                  <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element">
                                      <div class="wpb_wrapper">
                                        <p style="text-align: center"></p>
                                        <div id="audioigniter-231" class="audioigniter-root" data-player-type="full"
                                          data-tracks-url="{{env('APP_URL')}}/radio/audio" data-display-track-no="true"
                                          data-reverse-track-order="false" data-display-tracklist-covers="true"
                                          data-display-active-cover="true" data-display-artist-names="true"
                                          data-display-buy-buttons="true" data-buy-buttons-target="false"
                                          data-cycle-tracks="false" data-display-credits="false"
                                          data-display-tracklist="false" data-allow-tracklist-toggle="false"
                                          data-allow-tracklist-loop="false" data-limit-tracklist-height="true"
                                          data-volume="100" data-tracklist-height="185"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="vc_row wpb_row section vc_row-fluid vc_inner" style="text-align: left">
                          <div class="full_section_inner clearfix">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                              <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                  <div class="wpb_text_column wpb_content_element">
                                    <div class="wpb_wrapper">
                                      <div class="marquee-hsas-shortcode-24" style="width: 100%; overflow: hidden">
                                        &nbsp;&nbsp;&nbsp;Dhagaystayaasha
                                        shararfta leh, waxaan ogaysiinaynaa,
                                        RadioFreeSom uu soo galay Hawadda,
                                        kalana socon kartid wararka Soomaaliya
                                        maalin kasta si toos ah. Waxaan kaloo,
                                        la dhiri galinaynaa, dhalin yarada ku
                                        howlan media, Maamulka Sare, ee
                                        RadioFreeSom uu ku wargelinayaan, in
                                        aay furayso Wadashaqeen toos ah ee
                                        Maalinle ah, Wariyahii diyaar in uu si
                                        toos ah ula shaqeeyo RadioFreeSom.
                                        warqad aad ku codsanaysid noola soo
                                        xiriir emailka radiofreesom@gmail.com
                                      </div>
                                      <script>
                                        jQuery(function () {
                                          jQuery(
                                            ".marquee-hsas-shortcode-24"
                                          ).marquee({
                                            allowCss3Support: true,
                                            css3easing: "linear",
                                            easing: "linear",
                                            delayBeforeStart: 2000,
                                            direction: "left",
                                            duplicated: true,
                                            duration: 20000,
                                            gap: 100,
                                            pauseOnCycle: true,
                                            pauseOnHover: true,
                                            startVisible: true,
                                          });
                                        });
                                      </script>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="footer_inner clearfix">
          <div class="footer_top_holder">
            <div class="footer_top footer_top_full">
              <div class="three_columns clearfix">
                <div class="column1 footer_col1">
                  <div class="column_inner">
                    <div id="text-5" class="widget widget_text">
                      <h5>Voice of Somalia</h5>
                      <div class="textwidget">
                        <div style="
                              max-width: 90%;
                              font-family: Open Sans, sans-serif;
                              margin-top: 22px;
                              text-align: justify;
                            ">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Ut enim ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut aliquip
                          ex ea commodo consequat.
                        </div>
                      </div>
                    </div>
                    <span class="q_social_icon_holder circle_social" data-color="#fff"
                      data-hover-background-color="#fff" data-hover-border-color="#fff" data-hover-color="#000"><a
                        itemprop="url" href="https://www.facebook.com/" target="_blank"><span class="fa-stack" style="
                              background-color: transparent;
                              border-color: #fff;
                              border-width: 2px;
                              margin: 27px 10px 0px 0px;
                              font-size: 18px;
                            "><span aria-hidden="true" class="qode_icon_font_elegant social_facebook"
                            style="color: #fff; font-size: 12px"></span></span></a></span><span
                      class="q_social_icon_holder circle_social" data-color="#fff" data-hover-background-color="#fff"
                      data-hover-border-color="#fff" data-hover-color="#000"><a itemprop="url"
                        href="https://www.twitter.com/" target="_blank"><span class="fa-stack" style="
                              background-color: transparent;
                              border-color: #fff;
                              border-width: 2px;
                              margin: 27px 10px 0px 0px;
                              font-size: 18px;
                            "><span aria-hidden="true" class="qode_icon_font_elegant social_twitter"
                            style="color: #fff; font-size: 12px"></span></span></a></span><span
                      class="q_social_icon_holder circle_social" data-color="#fff" data-hover-background-color="#fff"
                      data-hover-border-color="#fff" data-hover-color="#000"><a itemprop="url"
                        href="https://www.instagram.com/" target="_blank"><span class="fa-stack" style="
                              background-color: transparent;
                              border-color: #fff;
                              border-width: 2px;
                              margin: 27px 10px 0px 0px;
                              font-size: 18px;
                            "><span aria-hidden="true" class="qode_icon_font_elegant social_instagram"
                            style="color: #fff; font-size: 12px"></span></span></a></span><span
                      class="q_social_icon_holder circle_social" data-color="#fff" data-hover-background-color="#fff"
                      data-hover-border-color="#fff" data-hover-color="#000"><a itemprop="url"
                        href="https://www.linkedin.com/" target="_blank"><span class="fa-stack" style="
                              background-color: transparent;
                              border-color: #fff;
                              border-width: 2px;
                              margin: 27px 10px 0px 0px;
                              font-size: 18px;
                            "><span aria-hidden="true" class="qode_icon_font_elegant social_linkedin"
                            style="color: #fff; font-size: 12px"></span></span></a></span>
                  </div>
                </div>
                <div class="column2 footer_col2">
                  <div class="column_inner">
                    <div id="custom_html-3" class="widget_text widget widget_custom_html">
                      <h5>Reach Us</h5>
                      <div class="textwidget custom-html-widget">
                        <div class="q_icon_with_title tiny normal_icon">
                          <div class="icon_holder" style="">
                            <span data-icon-type="normal" style=""
                              class="qode_iwt_icon_holder q_font_awsome_icon fa-lg"><i
                                class="qodef-icon-dripicons dripicon dripicons-location qode_iwt_icon_element"
                                style="color: #fff"></i></span>
                          </div>
                          <div class="icon_text_holder" style="">
                            <div class="icon_text_inner" style="">
                              <h4 class="icon_title" style=""></h4>
                              <p style="color: #ababab">
                                6318 Bearcat Loop, Colorado Springs, CO 80925,
                                USA
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="wpb_text_column wpb_content_element">
                          <div class="wpb_wrapper">
                            <p>
                              <span data-type="normal" class="qode_icon_shortcode q_font_awsome_icon fa-lg"
                                style="margin: 0px 12px 0px 0px"><i
                                  class="qodef-icon-dripicons dripicon dripicons-mail qode_icon_element"
                                  style="font-size: 20px; color: #fff"></i></span>    <a style="color: #ababab"
                                href="mailto:info@voiceofsomalia.com">info@voiceofsomalia.com</a>
                            </p>
                          </div>
                        </div>
                        <div class="q_icon_with_title tiny normal_icon">
                          <div class="icon_holder" style="">
                            <span data-icon-type="normal" style=""
                              class="qode_iwt_icon_holder q_font_awsome_icon fa-lg"><i
                                class="qodef-icon-dripicons dripicon dripicons-phone qode_iwt_icon_element"
                                style="color: #fff"></i></span>
                          </div>
                          <div class="icon_text_holder" style="">
                            <div class="icon_text_inner" style="">
                              <h5 class="icon_title" style=""></h5>
                              <p style="color: #ababab">+(123) 789 -4560</p>
                            </div>
                          </div>
                        </div>
                        <div class="q_icon_with_title tiny normal_icon">
                          <div class="icon_holder" style="">
                            <span data-icon-type="normal" style=""
                              class="qode_iwt_icon_holder q_font_awsome_icon fa-lg"><i
                                class="qodef-icon-dripicons dripicon dripicons-phone qode_iwt_icon_element"
                                style="color: #fff"></i></span>
                          </div>
                          <div class="icon_text_holder" style="">
                            <div class="icon_text_inner" style="">
                              <h5 class="icon_title" style=""></h5>
                              <p style="color: #ababab">+(123) 456 -7890</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column3 footer_col3">
                  <div class="column_inner">
                    <div id="custom_html-2" class="widget_text widget widget_custom_html">
                      <h5>Send Us A Message</h5>
                      <div class="textwidget custom-html-widget">
                        <div role="form" class="wpcf7" id="wpcf7-f52-o1" lang="en-US" dir="ltr">
                          <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                          </div>
                          <form action="/#wpcf7-f52-o1" method="post" class="wpcf7-form init cf7_custom_style_2"
                            novalidate="novalidate" data-status="init">
                            <div style="display: none">
                              <input type="hidden" name="_wpcf7" value="52" />
                              <input type="hidden" name="_wpcf7_version" value="5.4.2" />
                              <input type="hidden" name="_wpcf7_locale" value="en_US" />
                              <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f52-o1" />
                              <input type="hidden" name="_wpcf7_container_post" value="0" />
                              <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                            </div>
                            <div id="contact" class="vc_col-md-6 vc_column_container pad-right">
                              <span class="wpcf7-form-control-wrap text-321"><input type="text" name="text-321" value=""
                                  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                  aria-required="true" aria-invalid="false" placeholder="Name *" /></span>
                            </div>
                            <div class="vc_col-md-6 vc_column_container pad-left">
                              <span class="wpcf7-form-control-wrap email-322"><input type="email" name="email-322"
                                  value="" size="40"
                                  class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                  aria-required="true" aria-invalid="false" placeholder="Email *" /></span>
                            </div>
                            <div class="vc_col-md-12 vc_column_container">
                              <span class="wpcf7-form-control-wrap textarea-836">
                                <textarea name="textarea-836" cols="40" rows="10"
                                  class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                  aria-required="true" aria-invalid="false" placeholder="Message *"></textarea>
                              </span>
                            </div>
                            <p>
                              <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
                            </p>
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer_bottom_holder">
            <div class="footer_bottom">
              <div class="textwidget">
                <p>Voice of Somalia © 2021. All Rights Reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script>
    jQuery(document).ready(function ($) {
      if ($(".audioigniter-root").length > 0) {
        setTimeout(function () {
          var winH = $(window).height();
          var objH = $(".audioigniter-root").height();
          var margin = winH - objH;
          var marginBoth = Math.ceil(margin / 2);
          var marginMarquee = 0;
          if (marginBoth > 100) {
            marginMarquee = marginBoth - 50;
          }
          $(".audioigniter-root").css({
            "margin-top": marginMarquee + "px",
            visibility: "visible",
          });
        }, 2000);
      }

      $("a.scroll").click(function (e) {
        e.preventDefault();
        var target = $(this).attr("href");
        $("html, body").animate(
          {
            scrollTop: $(target).offset().top,
          },
          1000
        );
      });
    });
  </script>
  <script type="text/html" id="wpb-modifications"></script>
  <script type="text/javascript" src="./js/dist-vendor-wp-polyfill-inert.min.js" id="wp-polyfill-inert-js"></script>
  <script type="text/javascript" src="./js/dist-vendor-regenerator-runtime.min.js" id="regenerator-runtime-js"></script>
  <script type="text/javascript" src="./js/dist-vendor-wp-polyfill.min.js" id="wp-polyfill-js"></script>
  <script type="text/javascript" id="contact-form-7-js-extra">
    /* <![CDATA[ */
    var wpcf7 = {
      api: { root: "./wp-json\/", namespace: "contact-form-7\/v1" },
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="./js/contact-form-7-includes-js-index.js" id="contact-form-7-js"></script>
  <script type="text/javascript" id="audioigniter-js-extra">
    /* <![CDATA[ */
    var aiStrings = {
      play_title: "Play %s",
      pause_title: "Pause %s",
      previous: "Previous track",
      next: "Next track",
      toggle_list_repeat: "Toggle track listing repeat",
      toggle_track_repeat: "Toggle track repeat",
      toggle_list_visible: "Toggle track listing visibility",
      buy_track: "Buy this track",
      download_track: "Download this track",
      volume_up: "Volume Up",
      volume_down: "Volume Down",
      open_track_lyrics: "Open track lyrics",
      set_playback_rate: "Set playback rate",
      skip_forward: "Skip forward",
      skip_backward: "Skip backward",
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="./js/audioigniter-player-build-app.js" id="audioigniter-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-core.min.js" id="jquery-ui-core-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-accordion.min.js" id="jquery-ui-accordion-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-menu.min.js" id="jquery-ui-menu-js"></script>
  <script type="text/javascript" src="./js/dist-dom-ready.min.js" id="wp-dom-ready-js"></script>
  <script type="text/javascript" src="./js/dist-hooks.min.js" id="wp-hooks-js"></script>
  <script type="text/javascript" src="./js/dist-i18n.min.js" id="wp-i18n-js"></script>
  <script type="text/javascript" id="wp-i18n-js-after">
    /* <![CDATA[ */
    wp.i18n.setLocaleData({ "text direction\u0004ltr": ["ltr"] });
    /* ]]> */
  </script>
  <script type="text/javascript" src="./js/dist-a11y.min.js" id="wp-a11y-js"></script>
  <script type="text/javascript" id="jquery-ui-autocomplete-js-extra">
    /* <![CDATA[ */
    var uiAutocompleteL10n = {
      noResults: "No results found.",
      oneResult: "1 result found. Use up and down arrow keys to navigate.",
      manyResults:
        "%d results found. Use up and down arrow keys to navigate.",
      itemSelected: "Item selected.",
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="./js/jquery-ui-autocomplete.min.js" id="jquery-ui-autocomplete-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-controlgroup.min.js" id="jquery-ui-controlgroup-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-checkboxradio.min.js" id="jquery-ui-checkboxradio-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-button.min.js" id="jquery-ui-button-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-datepicker.min.js" id="jquery-ui-datepicker-js"></script>
  <script type="text/javascript" id="jquery-ui-datepicker-js-after">
    /* <![CDATA[ */
    jQuery(function (jQuery) {
      jQuery.datepicker.setDefaults({
        closeText: "Close",
        currentText: "Today",
        monthNames: [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
          "September",
          "October",
          "November",
          "December",
        ],
        monthNamesShort: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        nextText: "Next",
        prevText: "Previous",
        dayNames: [
          "Sunday",
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
        ],
        dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
        dateFormat: "MM d, yy",
        firstDay: 1,
        isRTL: false,
      });
    });
    /* ]]> */
  </script>
  <script type="text/javascript" src="./js/jquery-ui-mouse.min.js" id="jquery-ui-mouse-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-resizable.min.js" id="jquery-ui-resizable-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-draggable.min.js" id="jquery-ui-draggable-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-dialog.min.js" id="jquery-ui-dialog-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-droppable.min.js" id="jquery-ui-droppable-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-progressbar.min.js" id="jquery-ui-progressbar-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-selectable.min.js" id="jquery-ui-selectable-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-sortable.min.js" id="jquery-ui-sortable-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-slider.min.js" id="jquery-ui-slider-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-spinner.min.js" id="jquery-ui-spinner-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-tooltip.min.js" id="jquery-ui-tooltip-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-tabs.min.js" id="jquery-ui-tabs-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect.min.js" id="jquery-effects-core-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect-blind.min.js" id="jquery-effects-blind-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect-bounce.min.js" id="jquery-effects-bounce-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect-clip.min.js" id="jquery-effects-clip-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect-drop.min.js" id="jquery-effects-drop-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect-explode.min.js" id="jquery-effects-explode-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect-fade.min.js" id="jquery-effects-fade-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect-fold.min.js" id="jquery-effects-fold-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect-highlight.min.js" id="jquery-effects-highlight-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect-pulsate.min.js" id="jquery-effects-pulsate-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect-size.min.js" id="jquery-effects-size-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect-scale.min.js" id="jquery-effects-scale-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect-shake.min.js" id="jquery-effects-shake-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect-slide.min.js" id="jquery-effects-slide-js"></script>
  <script type="text/javascript" src="./js/jquery-ui-effect-transfer.min.js" id="jquery-effects-transfer-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-doubletaptogo.js" id="doubleTapToGo-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-modernizr.min.js" id="modernizr-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.appear.js" id="appear-js"></script>
  <script type="text/javascript" src="./js/4wt-hoverIntent.min.js" id="hoverIntent-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-counter.js" id="counter-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-easypiechart.js" id="easyPieChart-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-mixitup.js" id="mixItUp-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.prettyPhoto.js" id="prettyphoto-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.fitvids.js" id="fitvids-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.flexslider-min.js" id="flexslider-js"></script>
  <script type="text/javascript" id="mediaelement-core-js-before">
    /* <![CDATA[ */
    var mejsL10n = {
      language: "en",
      strings: {
        "mejs.download-file": "Download File",
        "mejs.install-flash":
          "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
        "mejs.fullscreen": "Fullscreen",
        "mejs.play": "Play",
        "mejs.pause": "Pause",
        "mejs.time-slider": "Time Slider",
        "mejs.time-help-text":
          "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
        "mejs.live-broadcast": "Live Broadcast",
        "mejs.volume-help-text":
          "Use Up\/Down Arrow keys to increase or decrease volume.",
        "mejs.unmute": "Unmute",
        "mejs.mute": "Mute",
        "mejs.volume-slider": "Volume Slider",
        "mejs.video-player": "Video Player",
        "mejs.audio-player": "Audio Player",
        "mejs.captions-subtitles": "Captions\/Subtitles",
        "mejs.captions-chapters": "Chapters",
        "mejs.none": "None",
        "mejs.afrikaans": "Afrikaans",
        "mejs.albanian": "Albanian",
        "mejs.arabic": "Arabic",
        "mejs.belarusian": "Belarusian",
        "mejs.bulgarian": "Bulgarian",
        "mejs.catalan": "Catalan",
        "mejs.chinese": "Chinese",
        "mejs.chinese-simplified": "Chinese (Simplified)",
        "mejs.chinese-traditional": "Chinese (Traditional)",
        "mejs.croatian": "Croatian",
        "mejs.czech": "Czech",
        "mejs.danish": "Danish",
        "mejs.dutch": "Dutch",
        "mejs.english": "English",
        "mejs.estonian": "Estonian",
        "mejs.filipino": "Filipino",
        "mejs.finnish": "Finnish",
        "mejs.french": "French",
        "mejs.galician": "Galician",
        "mejs.german": "German",
        "mejs.greek": "Greek",
        "mejs.haitian-creole": "Haitian Creole",
        "mejs.hebrew": "Hebrew",
        "mejs.hindi": "Hindi",
        "mejs.hungarian": "Hungarian",
        "mejs.icelandic": "Icelandic",
        "mejs.indonesian": "Indonesian",
        "mejs.irish": "Irish",
        "mejs.italian": "Italian",
        "mejs.japanese": "Japanese",
        "mejs.korean": "Korean",
        "mejs.latvian": "Latvian",
        "mejs.lithuanian": "Lithuanian",
        "mejs.macedonian": "Macedonian",
        "mejs.malay": "Malay",
        "mejs.maltese": "Maltese",
        "mejs.norwegian": "Norwegian",
        "mejs.persian": "Persian",
        "mejs.polish": "Polish",
        "mejs.portuguese": "Portuguese",
        "mejs.romanian": "Romanian",
        "mejs.russian": "Russian",
        "mejs.serbian": "Serbian",
        "mejs.slovak": "Slovak",
        "mejs.slovenian": "Slovenian",
        "mejs.spanish": "Spanish",
        "mejs.swahili": "Swahili",
        "mejs.swedish": "Swedish",
        "mejs.tagalog": "Tagalog",
        "mejs.thai": "Thai",
        "mejs.turkish": "Turkish",
        "mejs.ukrainian": "Ukrainian",
        "mejs.vietnamese": "Vietnamese",
        "mejs.welsh": "Welsh",
        "mejs.yiddish": "Yiddish",
      },
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="./js/mediaelement-mediaelement-and-player.min.js"
    id="mediaelement-core-js"></script>
  <script type="text/javascript" src="./js/mediaelement-mediaelement-migrate.min.js"
    id="mediaelement-migrate-js"></script>
  <script type="text/javascript" id="mediaelement-js-extra">
    /* <![CDATA[ */
    var _wpmejsSettings = {
      pluginPath: "\/wp-includes\/js\/mediaelement\/",
      classPrefix: "mejs-",
      stretching: "responsive",
      audioShortcodeLibrary: "mediaelement",
      videoShortcodeLibrary: "mediaelement",
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="./js/mediaelement-wp-mediaelement.min.js" id="wp-mediaelement-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-infinitescroll.min.js" id="infiniteScroll-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.waitforimages.js" id="waitforimages-js"></script>
  <script type="text/javascript" src="./js/jquery-jquery.form.min.js" id="jquery-form-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-waypoints.min.js" id="waypoints-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jplayer.min.js" id="jplayer-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-bootstrap.carousel.js" id="bootstrapCarousel-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-skrollr.js" id="skrollr-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-Chart.min.js" id="charts-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.easing.1.3.js" id="easing-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-abstractBaseClass.js" id="abstractBaseClass-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.countdown.js" id="countdown-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.multiscroll.min.js" id="multiscroll-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.justifiedGallery.min.js"
    id="justifiedGallery-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-bigtext.js" id="bigtext-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.sticky-kit.min.js" id="stickyKit-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-owl.carousel.min.js" id="owlCarousel-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-typed.js" id="typed-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.carouFredSel-6.2.1.min.js"
    id="carouFredSel-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-lemmon-slider.min.js" id="lemmonSlider-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.fullPage.min.js" id="one_page_scroll-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.mousewheel.min.js" id="mousewheel-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.touchSwipe.min.js" id="touchSwipe-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.isotope.min.js" id="isotope-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-packery-mode.pkgd.min.js" id="packery-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.stretch.js" id="stretch-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-imagesloaded.js" id="imagesLoaded-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-rangeslider.min.js" id="rangeSlider-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.event.move.js" id="eventMove-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-jquery.twentytwenty.js" id="twentytwenty-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-TweenLite.min.js" id="TweenLite-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-ScrollToPlugin.min.js" id="ScrollToPlugin-js"></script>
  <script type="text/javascript" src="./js/cs-js-plugins-smoothPageScroll.min.js" id="smoothPageScroll-js"></script>
  <script type="text/javascript" src="./js/cs-js-default_dynamic.js" id="bridge-default-dynamic-js"></script>
  <script type="text/javascript" id="bridge-default-js-extra">
    /* <![CDATA[ */
    var QodeAdminAjax = { ajaxurl: "./wp-admin\/admin-ajax.php" };
    var qodeGlobalVars = {
      vars: {
        qodeAddingToCartLabel: "Adding to Cart...",
        page_scroll_amount_for_sticky: "",
      },
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="./js/cs-js-default.min.js" id="bridge-default-js"></script>
  <script type="text/javascript" src="./js/60h-comment-reply.min.js" id="comment-reply-js" async="async"
    data-wp-strategy="async"></script>
  <script type="text/javascript" src="./js/js_composer-assets-js-dist-js_composer_front.min.js"
    id="wpb_composer_front_js-js"></script>
  <script type="text/javascript" id="qode-like-js-extra">
    /* <![CDATA[ */
    var qodeLike = { ajaxurl: "./wp-admin\/admin-ajax.php" };
    /* ]]> */
  </script>
  <script type="text/javascript" src="./js/cs-js-plugins-qode-like.min.js" id="qode-like-js"></script>
  <script type="text/javascript" src="./js/horizontal-scrolling-announcements-script-jquery.marquee.min.js"
    id="jquery.marquee.min-js"></script>

  <style>
    .room-button {

      background-color: #007bff;
      /* Change the color as needed */
      border-radius: 50%;
      position: fixed;
      bottom: 10px;
      right: 10px;
      padding: 20px;
      cursor: pointer;
      z-index: 3999;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 70px;
      height: 70px;
      /* Ensure it's above other elements */
    }

    /* Optional: Add hover effect */
    .room-button:hover {
      background-color: #0056b3;
      /* Change the hover color as needed */
    }
  </style>
  <a href="/rooms" class="room-button "><i class="bi bi-caret-down-square-fill"></i></a>

</body>

</html>