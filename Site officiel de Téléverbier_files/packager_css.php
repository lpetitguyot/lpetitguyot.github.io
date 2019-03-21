
/*! normalize.css v3.0.0 | MIT License | git.io/normalize */

/**
 * 1. Set default font family to sans-serif.
 * 2. Prevent iOS text size adjust after orientation change, without disabling
 *    user zoom.
 */

html {
  font-family: sans-serif; /* 1 */
  -ms-text-size-adjust: 100%; /* 2 */
  -webkit-text-size-adjust: 100%; /* 2 */
}

/**
 * Remove default margin.
 */

body {
  margin: 0;
}

/* HTML5 display definitions
   ========================================================================== */

/**
 * Correct `block` display not defined in IE 8/9.
 */

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
  display: block;
}

/**
 * 1. Correct `inline-block` display not defined in IE 8/9.
 * 2. Normalize vertical alignment of `progress` in Chrome, Firefox, and Opera.
 */

audio,
canvas,
progress,
video {
  display: inline-block; /* 1 */
  vertical-align: baseline; /* 2 */
}

/**
 * Prevent modern browsers from displaying `audio` without controls.
 * Remove excess height in iOS 5 devices.
 */

audio:not([controls]) {
  display: none;
  height: 0;
}

/**
 * Address `[hidden]` styling not present in IE 8/9.
 * Hide the `template` element in IE, Safari, and Firefox < 22.
 */

[hidden],
template {
  display: none;
}

/* Links
   ========================================================================== */

/**
 * Remove the gray background color from active links in IE 10.
 */

a {
  background: transparent;
}

/**
 * Improve readability when focused and also mouse hovered in all browsers.
 */

a:active,
a:hover {
  outline: 0;
}

/* Text-level semantics
   ========================================================================== */

/**
 * Address styling not present in IE 8/9, Safari 5, and Chrome.
 */

abbr[title] {
  border-bottom: 1px dotted;
}

/**
 * Address style set to `bolder` in Firefox 4+, Safari 5, and Chrome.
 */

b,
strong {
  font-weight: bold;
}

/**
 * Address styling not present in Safari 5 and Chrome.
 */

dfn {
  font-style: italic;
}

/**
 * Address variable `h1` font-size and margin within `section` and `article`
 * contexts in Firefox 4+, Safari 5, and Chrome.
 */

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

/**
 * Address styling not present in IE 8/9.
 */

mark {
  background: #ff0;
  color: #000;
}

/**
 * Address inconsistent and variable font size in all browsers.
 */

small {
  font-size: 80%;
}

/**
 * Prevent `sub` and `sup` affecting `line-height` in all browsers.
 */

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sup {
  top: -0.5em;
}

sub {
  bottom: -0.25em;
}

/* Embedded content
   ========================================================================== */

/**
 * Remove border when inside `a` element in IE 8/9.
 */

img {
  border: 0;
}

/**
 * Correct overflow displayed oddly in IE 9.
 */

svg:not(:root) {
  overflow: hidden;
}

/* Grouping content
   ========================================================================== */

/**
 * Address margin not present in IE 8/9 and Safari 5.
 */

figure {
  margin: 1em 40px;
}

/**
 * Address differences between Firefox and other browsers.
 */

hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
}

/**
 * Contain overflow in all browsers.
 */

pre {
  overflow: auto;
}

/**
 * Address odd `em`-unit font size rendering in all browsers.
 */

code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}

/* Forms
   ========================================================================== */

/**
 * Known limitation: by default, Chrome and Safari on OS X allow very limited
 * styling of `select`, unless a `border` property is set.
 */

/**
 * 1. Correct color not being inherited.
 *    Known issue: affects color of disabled elements.
 * 2. Correct font properties not being inherited.
 * 3. Address margins set differently in Firefox 4+, Safari 5, and Chrome.
 */

button,
input,
optgroup,
select,
textarea {
  color: inherit; /* 1 */
  font: inherit; /* 2 */
  margin: 0; /* 3 */
}

/**
 * Address `overflow` set to `hidden` in IE 8/9/10.
 */

button {
  overflow: visible;
}

/**
 * Address inconsistent `text-transform` inheritance for `button` and `select`.
 * All other form control elements do not inherit `text-transform` values.
 * Correct `button` style inheritance in Firefox, IE 8+, and Opera
 * Correct `select` style inheritance in Firefox.
 */

button,
select {
  text-transform: none;
}

/**
 * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
 *    and `video` controls.
 * 2. Correct inability to style clickable `input` types in iOS.
 * 3. Improve usability and consistency of cursor style between image-type
 *    `input` and others.
 */

button,
html input[type="button"], /* 1 */
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button; /* 2 */
  cursor: pointer; /* 3 */
}

/**
 * Re-set default cursor for disabled elements.
 */

button[disabled],
html input[disabled] {
  cursor: default;
}

/**
 * Remove inner padding and border in Firefox 4+.
 */

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}

/**
 * Address Firefox 4+ setting `line-height` on `input` using `!important` in
 * the UA stylesheet.
 */

input {
  line-height: normal;
}

/**
 * It's recommended that you don't attempt to style these elements.
 * Firefox's implementation doesn't respect box-sizing, padding, or width.
 *
 * 1. Address box sizing set to `content-box` in IE 8/9/10.
 * 2. Remove excess padding in IE 8/9/10.
 */

input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box; /* 1 */
  padding: 0; /* 2 */
}

/**
 * Fix the cursor style for Chrome's increment/decrement buttons. For certain
 * `font-size` values of the `input`, it causes the cursor style of the
 * decrement button to change from `default` to `text`.
 */

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

/**
 * 1. Address `appearance` set to `searchfield` in Safari 5 and Chrome.
 * 2. Address `box-sizing` set to `border-box` in Safari 5 and Chrome
 *    (include `-moz` to future-proof).
 */

input[type="search"] {
  -webkit-appearance: textfield; /* 1 */
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box; /* 2 */
  box-sizing: content-box;
}

/**
 * Remove inner padding and search cancel button in Safari and Chrome on OS X.
 * Safari (but not Chrome) clips the cancel button when the search input has
 * padding (and `textfield` appearance).
 */

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/**
 * Define consistent border, margin, and padding.
 */

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}

/**
 * 1. Correct `color` not being inherited in IE 8/9.
 * 2. Remove padding so people aren't caught out if they zero out fieldsets.
 */

legend {
  border: 0; /* 1 */
  padding: 0; /* 2 */
}

/**
 * Remove default vertical scrollbar in IE 8/9.
 */

textarea {
  overflow: auto;
}

/**
 * Don't inherit the `font-weight` (applied by a rule above).
 * NOTE: the default cannot safely be changed in Chrome and Safari on OS X.
 */

optgroup {
  font-weight: bold;
}

/* Tables
   ========================================================================== */

/**
 * Remove most spacing between table cells.
 */

table {
  border-collapse: collapse;
  border-spacing: 0;
}

td,
th {
  padding: 0;
}


/*!
 *  Font Awesome 4.5.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('/css/../polices/fontawesome-webfont.eot?v=4.5.0');
  src: url('/css/../polices/fontawesome-webfont.eot?#iefix&v=4.5.0') format('embedded-opentype'), url('/css/../polices/fontawesome-webfont.woff2?v=4.5.0') format('woff2'), url('/css/../polices/fontawesome-webfont.woff?v=4.5.0') format('woff'), url('/css/../polices/fontawesome-webfont.ttf?v=4.5.0') format('truetype'), url('/css/../polices/fontawesome-webfont.svg?v=4.5.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eeeeee;
  border-radius: .1em;
}
.fa-pull-left {
  float: left;
}
.fa-pull-right {
  float: right;
}
.fa.fa-pull-left {
  margin-right: .3em;
}
.fa.fa-pull-right {
  margin-left: .3em;
}
/* Deprecated as of 4.4.0 */
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: .3em;
}
.fa.pull-right {
  margin-left: .3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #ffffff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: "\f000";
}
.fa-music:before {
  content: "\f001";
}
.fa-search:before {
  content: "\f002";
}
.fa-envelope-o:before {
  content: "\f003";
}
.fa-heart:before {
  content: "\f004";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-o:before {
  content: "\f006";
}
.fa-user:before {
  content: "\f007";
}
.fa-film:before {
  content: "\f008";
}
.fa-th-large:before {
  content: "\f009";
}
.fa-th:before {
  content: "\f00a";
}
.fa-th-list:before {
  content: "\f00b";
}
.fa-check:before {
  content: "\f00c";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: "\f00d";
}
.fa-search-plus:before {
  content: "\f00e";
}
.fa-search-minus:before {
  content: "\f010";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-signal:before {
  content: "\f012";
}
.fa-gear:before,
.fa-cog:before {
  content: "\f013";
}
.fa-trash-o:before {
  content: "\f014";
}
.fa-home:before {
  content: "\f015";
}
.fa-file-o:before {
  content: "\f016";
}
.fa-clock-o:before {
  content: "\f017";
}
.fa-road:before {
  content: "\f018";
}
.fa-download:before {
  content: "\f019";
}
.fa-arrow-circle-o-down:before {
  content: "\f01a";
}
.fa-arrow-circle-o-up:before {
  content: "\f01b";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-play-circle-o:before {
  content: "\f01d";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: "\f01e";
}
.fa-refresh:before {
  content: "\f021";
}
.fa-list-alt:before {
  content: "\f022";
}
.fa-lock:before {
  content: "\f023";
}
.fa-flag:before {
  content: "\f024";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-down:before {
  content: "\f027";
}
.fa-volume-up:before {
  content: "\f028";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-print:before {
  content: "\f02f";
}
.fa-camera:before {
  content: "\f030";
}
.fa-font:before {
  content: "\f031";
}
.fa-bold:before {
  content: "\f032";
}
.fa-italic:before {
  content: "\f033";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-list:before {
  content: "\f03a";
}
.fa-dedent:before,
.fa-outdent:before {
  content: "\f03b";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-video-camera:before {
  content: "\f03d";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: "\f03e";
}
.fa-pencil:before {
  content: "\f040";
}
.fa-map-marker:before {
  content: "\f041";
}
.fa-adjust:before {
  content: "\f042";
}
.fa-tint:before {
  content: "\f043";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: "\f044";
}
.fa-share-square-o:before {
  content: "\f045";
}
.fa-check-square-o:before {
  content: "\f046";
}
.fa-arrows:before {
  content: "\f047";
}
.fa-step-backward:before {
  content: "\f048";
}
.fa-fast-backward:before {
  content: "\f049";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-play:before {
  content: "\f04b";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-fast-forward:before {
  content: "\f050";
}
.fa-step-forward:before {
  content: "\f051";
}
.fa-eject:before {
  content: "\f052";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-plus-circle:before {
  content: "\f055";
}
.fa-minus-circle:before {
  content: "\f056";
}
.fa-times-circle:before {
  content: "\f057";
}
.fa-check-circle:before {
  content: "\f058";
}
.fa-question-circle:before {
  content: "\f059";
}
.fa-info-circle:before {
  content: "\f05a";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-times-circle-o:before {
  content: "\f05c";
}
.fa-check-circle-o:before {
  content: "\f05d";
}
.fa-ban:before {
  content: "\f05e";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-mail-forward:before,
.fa-share:before {
  content: "\f064";
}
.fa-expand:before {
  content: "\f065";
}
.fa-compress:before {
  content: "\f066";
}
.fa-plus:before {
  content: "\f067";
}
.fa-minus:before {
  content: "\f068";
}
.fa-asterisk:before {
  content: "\f069";
}
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: "\f071";
}
.fa-plane:before {
  content: "\f072";
}
.fa-calendar:before {
  content: "\f073";
}
.fa-random:before {
  content: "\f074";
}
.fa-comment:before {
  content: "\f075";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-arrows-h:before {
  content: "\f07e";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: "\f080";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-key:before {
  content: "\f084";
}
.fa-gears:before,
.fa-cogs:before {
  content: "\f085";
}
.fa-comments:before {
  content: "\f086";
}
.fa-thumbs-o-up:before {
  content: "\f087";
}
.fa-thumbs-o-down:before {
  content: "\f088";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-heart-o:before {
  content: "\f08a";
}
.fa-sign-out:before {
  content: "\f08b";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-thumb-tack:before {
  content: "\f08d";
}
.fa-external-link:before {
  content: "\f08e";
}
.fa-sign-in:before {
  content: "\f090";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-upload:before {
  content: "\f093";
}
.fa-lemon-o:before {
  content: "\f094";
}
.fa-phone:before {
  content: "\f095";
}
.fa-square-o:before {
  content: "\f096";
}
.fa-bookmark-o:before {
  content: "\f097";
}
.fa-phone-square:before {
  content: "\f098";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: "\f09a";
}
.fa-github:before {
  content: "\f09b";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-credit-card:before {
  content: "\f09d";
}
.fa-feed:before,
.fa-rss:before {
  content: "\f09e";
}
.fa-hdd-o:before {
  content: "\f0a0";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-hand-o-right:before {
  content: "\f0a4";
}
.fa-hand-o-left:before {
  content: "\f0a5";
}
.fa-hand-o-up:before {
  content: "\f0a6";
}
.fa-hand-o-down:before {
  content: "\f0a7";
}
.fa-arrow-circle-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before {
  content: "\f0aa";
}
.fa-arrow-circle-down:before {
  content: "\f0ab";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-tasks:before {
  content: "\f0ae";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-arrows-alt:before {
  content: "\f0b2";
}
.fa-group:before,
.fa-users:before {
  content: "\f0c0";
}
.fa-chain:before,
.fa-link:before {
  content: "\f0c1";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-cut:before,
.fa-scissors:before {
  content: "\f0c4";
}
.fa-copy:before,
.fa-files-o:before {
  content: "\f0c5";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-save:before,
.fa-floppy-o:before {
  content: "\f0c7";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: "\f0c9";
}
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-magic:before {
  content: "\f0d0";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-plus:before {
  content: "\f0d5";
}
.fa-money:before {
  content: "\f0d6";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-columns:before {
  content: "\f0db";
}
.fa-unsorted:before,
.fa-sort:before {
  content: "\f0dc";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: "\f0dd";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: "\f0de";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-linkedin:before {
  content: "\f0e1";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: "\f0e2";
}
.fa-legal:before,
.fa-gavel:before {
  content: "\f0e3";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: "\f0e4";
}
.fa-comment-o:before {
  content: "\f0e5";
}
.fa-comments-o:before {
  content: "\f0e6";
}
.fa-flash:before,
.fa-bolt:before {
  content: "\f0e7";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-paste:before,
.fa-clipboard:before {
  content: "\f0ea";
}
.fa-lightbulb-o:before {
  content: "\f0eb";
}
.fa-exchange:before {
  content: "\f0ec";
}
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-user-md:before {
  content: "\f0f0";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-bell-o:before {
  content: "\f0a2";
}
.fa-coffee:before {
  content: "\f0f4";
}
.fa-cutlery:before {
  content: "\f0f5";
}
.fa-file-text-o:before {
  content: "\f0f6";
}
.fa-building-o:before {
  content: "\f0f7";
}
.fa-hospital-o:before {
  content: "\f0f8";
}
.fa-ambulance:before {
  content: "\f0f9";
}
.fa-medkit:before {
  content: "\f0fa";
}
.fa-fighter-jet:before {
  content: "\f0fb";
}
.fa-beer:before {
  content: "\f0fc";
}
.fa-h-square:before {
  content: "\f0fd";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-angle-double-left:before {
  content: "\f100";
}
.fa-angle-double-right:before {
  content: "\f101";
}
.fa-angle-double-up:before {
  content: "\f102";
}
.fa-angle-double-down:before {
  content: "\f103";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-desktop:before {
  content: "\f108";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-tablet:before {
  content: "\f10a";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: "\f10b";
}
.fa-circle-o:before {
  content: "\f10c";
}
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right:before {
  content: "\f10e";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-circle:before {
  content: "\f111";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: "\f112";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-folder-o:before {
  content: "\f114";
}
.fa-folder-open-o:before {
  content: "\f115";
}
.fa-smile-o:before {
  content: "\f118";
}
.fa-frown-o:before {
  content: "\f119";
}
.fa-meh-o:before {
  content: "\f11a";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-keyboard-o:before {
  content: "\f11c";
}
.fa-flag-o:before {
  content: "\f11d";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-code:before {
  content: "\f121";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: "\f122";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: "\f123";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-crop:before {
  content: "\f125";
}
.fa-code-fork:before {
  content: "\f126";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: "\f127";
}
.fa-question:before {
  content: "\f128";
}
.fa-info:before {
  content: "\f129";
}
.fa-exclamation:before {
  content: "\f12a";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-shield:before {
  content: "\f132";
}
.fa-calendar-o:before {
  content: "\f133";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-chevron-circle-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before {
  content: "\f139";
}
.fa-chevron-circle-down:before {
  content: "\f13a";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-unlock-alt:before {
  content: "\f13e";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-ellipsis-h:before {
  content: "\f141";
}
.fa-ellipsis-v:before {
  content: "\f142";
}
.fa-rss-square:before {
  content: "\f143";
}
.fa-play-circle:before {
  content: "\f144";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-minus-square:before {
  content: "\f146";
}
.fa-minus-square-o:before {
  content: "\f147";
}
.fa-level-up:before {
  content: "\f148";
}
.fa-level-down:before {
  content: "\f149";
}
.fa-check-square:before {
  content: "\f14a";
}
.fa-pencil-square:before {
  content: "\f14b";
}
.fa-external-link-square:before {
  content: "\f14c";
}
.fa-share-square:before {
  content: "\f14d";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: "\f150";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: "\f151";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: "\f152";
}
.fa-euro:before,
.fa-eur:before {
  content: "\f153";
}
.fa-gbp:before {
  content: "\f154";
}
.fa-dollar:before,
.fa-usd:before {
  content: "\f155";
}
.fa-rupee:before,
.fa-inr:before {
  content: "\f156";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: "\f157";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: "\f158";
}
.fa-won:before,
.fa-krw:before {
  content: "\f159";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: "\f15a";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-text:before {
  content: "\f15c";
}
.fa-sort-alpha-asc:before {
  content: "\f15d";
}
.fa-sort-alpha-desc:before {
  content: "\f15e";
}
.fa-sort-amount-asc:before {
  content: "\f160";
}
.fa-sort-amount-desc:before {
  content: "\f161";
}
.fa-sort-numeric-asc:before {
  content: "\f162";
}
.fa-sort-numeric-desc:before {
  content: "\f163";
}
.fa-thumbs-up:before {
  content: "\f164";
}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-youtube-square:before {
  content: "\f166";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-youtube-play:before {
  content: "\f16a";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-adn:before {
  content: "\f170";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitbucket-square:before {
  content: "\f172";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-apple:before {
  content: "\f179";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-android:before {
  content: "\f17b";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-trello:before {
  content: "\f181";
}
.fa-female:before {
  content: "\f182";
}
.fa-male:before {
  content: "\f183";
}
.fa-gittip:before,
.fa-gratipay:before {
  content: "\f184";
}
.fa-sun-o:before {
  content: "\f185";
}
.fa-moon-o:before {
  content: "\f186";
}
.fa-archive:before {
  content: "\f187";
}
.fa-bug:before {
  content: "\f188";
}
.fa-vk:before {
  content: "\f189";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-arrow-circle-o-right:before {
  content: "\f18e";
}
.fa-arrow-circle-o-left:before {
  content: "\f190";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: "\f191";
}
.fa-dot-circle-o:before {
  content: "\f192";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: "\f195";
}
.fa-plus-square-o:before {
  content: "\f196";
}
.fa-space-shuttle:before {
  content: "\f197";
}
.fa-slack:before {
  content: "\f198";
}
.fa-envelope-square:before {
  content: "\f199";
}
.fa-wordpress:before {
  content: "\f19a";
}
.fa-openid:before {
  content: "\f19b";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: "\f19c";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: "\f19d";
}
.fa-yahoo:before {
  content: "\f19e";
}
.fa-google:before {
  content: "\f1a0";
}
.fa-reddit:before {
  content: "\f1a1";
}
.fa-reddit-square:before {
  content: "\f1a2";
}
.fa-stumbleupon-circle:before {
  content: "\f1a3";
}
.fa-stumbleupon:before {
  content: "\f1a4";
}
.fa-delicious:before {
  content: "\f1a5";
}
.fa-digg:before {
  content: "\f1a6";
}
.fa-pied-piper:before {
  content: "\f1a7";
}
.fa-pied-piper-alt:before {
  content: "\f1a8";
}
.fa-drupal:before {
  content: "\f1a9";
}
.fa-joomla:before {
  content: "\f1aa";
}
.fa-language:before {
  content: "\f1ab";
}
.fa-fax:before {
  content: "\f1ac";
}
.fa-building:before {
  content: "\f1ad";
}
.fa-child:before {
  content: "\f1ae";
}
.fa-paw:before {
  content: "\f1b0";
}
.fa-spoon:before {
  content: "\f1b1";
}
.fa-cube:before {
  content: "\f1b2";
}
.fa-cubes:before {
  content: "\f1b3";
}
.fa-behance:before {
  content: "\f1b4";
}
.fa-behance-square:before {
  content: "\f1b5";
}
.fa-steam:before {
  content: "\f1b6";
}
.fa-steam-square:before {
  content: "\f1b7";
}
.fa-recycle:before {
  content: "\f1b8";
}
.fa-automobile:before,
.fa-car:before {
  content: "\f1b9";
}
.fa-cab:before,
.fa-taxi:before {
  content: "\f1ba";
}
.fa-tree:before {
  content: "\f1bb";
}
.fa-spotify:before {
  content: "\f1bc";
}
.fa-deviantart:before {
  content: "\f1bd";
}
.fa-soundcloud:before {
  content: "\f1be";
}
.fa-database:before {
  content: "\f1c0";
}
.fa-file-pdf-o:before {
  content: "\f1c1";
}
.fa-file-word-o:before {
  content: "\f1c2";
}
.fa-file-excel-o:before {
  content: "\f1c3";
}
.fa-file-powerpoint-o:before {
  content: "\f1c4";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: "\f1c5";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: "\f1c6";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: "\f1c7";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: "\f1c8";
}
.fa-file-code-o:before {
  content: "\f1c9";
}
.fa-vine:before {
  content: "\f1ca";
}
.fa-codepen:before {
  content: "\f1cb";
}
.fa-jsfiddle:before {
  content: "\f1cc";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: "\f1cd";
}
.fa-circle-o-notch:before {
  content: "\f1ce";
}
.fa-ra:before,
.fa-rebel:before {
  content: "\f1d0";
}
.fa-ge:before,
.fa-empire:before {
  content: "\f1d1";
}
.fa-git-square:before {
  content: "\f1d2";
}
.fa-git:before {
  content: "\f1d3";
}
.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
  content: "\f1d4";
}
.fa-tencent-weibo:before {
  content: "\f1d5";
}
.fa-qq:before {
  content: "\f1d6";
}
.fa-wechat:before,
.fa-weixin:before {
  content: "\f1d7";
}
.fa-send:before,
.fa-paper-plane:before {
  content: "\f1d8";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: "\f1d9";
}
.fa-history:before {
  content: "\f1da";
}
.fa-circle-thin:before {
  content: "\f1db";
}
.fa-header:before {
  content: "\f1dc";
}
.fa-paragraph:before {
  content: "\f1dd";
}
.fa-sliders:before {
  content: "\f1de";
}
.fa-share-alt:before {
  content: "\f1e0";
}
.fa-share-alt-square:before {
  content: "\f1e1";
}
.fa-bomb:before {
  content: "\f1e2";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: "\f1e3";
}
.fa-tty:before {
  content: "\f1e4";
}
.fa-binoculars:before {
  content: "\f1e5";
}
.fa-plug:before {
  content: "\f1e6";
}
.fa-slideshare:before {
  content: "\f1e7";
}
.fa-twitch:before {
  content: "\f1e8";
}
.fa-yelp:before {
  content: "\f1e9";
}
.fa-newspaper-o:before {
  content: "\f1ea";
}
.fa-wifi:before {
  content: "\f1eb";
}
.fa-calculator:before {
  content: "\f1ec";
}
.fa-paypal:before {
  content: "\f1ed";
}
.fa-google-wallet:before {
  content: "\f1ee";
}
.fa-cc-visa:before {
  content: "\f1f0";
}
.fa-cc-mastercard:before {
  content: "\f1f1";
}
.fa-cc-discover:before {
  content: "\f1f2";
}
.fa-cc-amex:before {
  content: "\f1f3";
}
.fa-cc-paypal:before {
  content: "\f1f4";
}
.fa-cc-stripe:before {
  content: "\f1f5";
}
.fa-bell-slash:before {
  content: "\f1f6";
}
.fa-bell-slash-o:before {
  content: "\f1f7";
}
.fa-trash:before {
  content: "\f1f8";
}
.fa-copyright:before {
  content: "\f1f9";
}
.fa-at:before {
  content: "\f1fa";
}
.fa-eyedropper:before {
  content: "\f1fb";
}
.fa-paint-brush:before {
  content: "\f1fc";
}
.fa-birthday-cake:before {
  content: "\f1fd";
}
.fa-area-chart:before {
  content: "\f1fe";
}
.fa-pie-chart:before {
  content: "\f200";
}
.fa-line-chart:before {
  content: "\f201";
}
.fa-lastfm:before {
  content: "\f202";
}
.fa-lastfm-square:before {
  content: "\f203";
}
.fa-toggle-off:before {
  content: "\f204";
}
.fa-toggle-on:before {
  content: "\f205";
}
.fa-bicycle:before {
  content: "\f206";
}
.fa-bus:before {
  content: "\f207";
}
.fa-ioxhost:before {
  content: "\f208";
}
.fa-angellist:before {
  content: "\f209";
}
.fa-cc:before {
  content: "\f20a";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: "\f20b";
}
.fa-meanpath:before {
  content: "\f20c";
}
.fa-buysellads:before {
  content: "\f20d";
}
.fa-connectdevelop:before {
  content: "\f20e";
}
.fa-dashcube:before {
  content: "\f210";
}
.fa-forumbee:before {
  content: "\f211";
}
.fa-leanpub:before {
  content: "\f212";
}
.fa-sellsy:before {
  content: "\f213";
}
.fa-shirtsinbulk:before {
  content: "\f214";
}
.fa-simplybuilt:before {
  content: "\f215";
}
.fa-skyatlas:before {
  content: "\f216";
}
.fa-cart-plus:before {
  content: "\f217";
}
.fa-cart-arrow-down:before {
  content: "\f218";
}
.fa-diamond:before {
  content: "\f219";
}
.fa-ship:before {
  content: "\f21a";
}
.fa-user-secret:before {
  content: "\f21b";
}
.fa-motorcycle:before {
  content: "\f21c";
}
.fa-street-view:before {
  content: "\f21d";
}
.fa-heartbeat:before {
  content: "\f21e";
}
.fa-venus:before {
  content: "\f221";
}
.fa-mars:before {
  content: "\f222";
}
.fa-mercury:before {
  content: "\f223";
}
.fa-intersex:before,
.fa-transgender:before {
  content: "\f224";
}
.fa-transgender-alt:before {
  content: "\f225";
}
.fa-venus-double:before {
  content: "\f226";
}
.fa-mars-double:before {
  content: "\f227";
}
.fa-venus-mars:before {
  content: "\f228";
}
.fa-mars-stroke:before {
  content: "\f229";
}
.fa-mars-stroke-v:before {
  content: "\f22a";
}
.fa-mars-stroke-h:before {
  content: "\f22b";
}
.fa-neuter:before {
  content: "\f22c";
}
.fa-genderless:before {
  content: "\f22d";
}
.fa-facebook-official:before {
  content: "\f230";
}
.fa-pinterest-p:before {
  content: "\f231";
}
.fa-whatsapp:before {
  content: "\f232";
}
.fa-server:before {
  content: "\f233";
}
.fa-user-plus:before {
  content: "\f234";
}
.fa-user-times:before {
  content: "\f235";
}
.fa-hotel:before,
.fa-bed:before {
  content: "\f236";
}
.fa-viacoin:before {
  content: "\f237";
}
.fa-train:before {
  content: "\f238";
}
.fa-subway:before {
  content: "\f239";
}
.fa-medium:before {
  content: "\f23a";
}
.fa-yc:before,
.fa-y-combinator:before {
  content: "\f23b";
}
.fa-optin-monster:before {
  content: "\f23c";
}
.fa-opencart:before {
  content: "\f23d";
}
.fa-expeditedssl:before {
  content: "\f23e";
}
.fa-battery-4:before,
.fa-battery-full:before {
  content: "\f240";
}
.fa-battery-3:before,
.fa-battery-three-quarters:before {
  content: "\f241";
}
.fa-battery-2:before,
.fa-battery-half:before {
  content: "\f242";
}
.fa-battery-1:before,
.fa-battery-quarter:before {
  content: "\f243";
}
.fa-battery-0:before,
.fa-battery-empty:before {
  content: "\f244";
}
.fa-mouse-pointer:before {
  content: "\f245";
}
.fa-i-cursor:before {
  content: "\f246";
}
.fa-object-group:before {
  content: "\f247";
}
.fa-object-ungroup:before {
  content: "\f248";
}
.fa-sticky-note:before {
  content: "\f249";
}
.fa-sticky-note-o:before {
  content: "\f24a";
}
.fa-cc-jcb:before {
  content: "\f24b";
}
.fa-cc-diners-club:before {
  content: "\f24c";
}
.fa-clone:before {
  content: "\f24d";
}
.fa-balance-scale:before {
  content: "\f24e";
}
.fa-hourglass-o:before {
  content: "\f250";
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
  content: "\f251";
}
.fa-hourglass-2:before,
.fa-hourglass-half:before {
  content: "\f252";
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
  content: "\f253";
}
.fa-hourglass:before {
  content: "\f254";
}
.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
  content: "\f255";
}
.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
  content: "\f256";
}
.fa-hand-scissors-o:before {
  content: "\f257";
}
.fa-hand-lizard-o:before {
  content: "\f258";
}
.fa-hand-spock-o:before {
  content: "\f259";
}
.fa-hand-pointer-o:before {
  content: "\f25a";
}
.fa-hand-peace-o:before {
  content: "\f25b";
}
.fa-trademark:before {
  content: "\f25c";
}
.fa-registered:before {
  content: "\f25d";
}
.fa-creative-commons:before {
  content: "\f25e";
}
.fa-gg:before {
  content: "\f260";
}
.fa-gg-circle:before {
  content: "\f261";
}
.fa-tripadvisor:before {
  content: "\f262";
}
.fa-odnoklassniki:before {
  content: "\f263";
}
.fa-odnoklassniki-square:before {
  content: "\f264";
}
.fa-get-pocket:before {
  content: "\f265";
}
.fa-wikipedia-w:before {
  content: "\f266";
}
.fa-safari:before {
  content: "\f267";
}
.fa-chrome:before {
  content: "\f268";
}
.fa-firefox:before {
  content: "\f269";
}
.fa-opera:before {
  content: "\f26a";
}
.fa-internet-explorer:before {
  content: "\f26b";
}
.fa-tv:before,
.fa-television:before {
  content: "\f26c";
}
.fa-contao:before {
  content: "\f26d";
}
.fa-500px:before {
  content: "\f26e";
}
.fa-amazon:before {
  content: "\f270";
}
.fa-calendar-plus-o:before {
  content: "\f271";
}
.fa-calendar-minus-o:before {
  content: "\f272";
}
.fa-calendar-times-o:before {
  content: "\f273";
}
.fa-calendar-check-o:before {
  content: "\f274";
}
.fa-industry:before {
  content: "\f275";
}
.fa-map-pin:before {
  content: "\f276";
}
.fa-map-signs:before {
  content: "\f277";
}
.fa-map-o:before {
  content: "\f278";
}
.fa-map:before {
  content: "\f279";
}
.fa-commenting:before {
  content: "\f27a";
}
.fa-commenting-o:before {
  content: "\f27b";
}
.fa-houzz:before {
  content: "\f27c";
}
.fa-vimeo:before {
  content: "\f27d";
}
.fa-black-tie:before {
  content: "\f27e";
}
.fa-fonticons:before {
  content: "\f280";
}
.fa-reddit-alien:before {
  content: "\f281";
}
.fa-edge:before {
  content: "\f282";
}
.fa-credit-card-alt:before {
  content: "\f283";
}
.fa-codiepie:before {
  content: "\f284";
}
.fa-modx:before {
  content: "\f285";
}
.fa-fort-awesome:before {
  content: "\f286";
}
.fa-usb:before {
  content: "\f287";
}
.fa-product-hunt:before {
  content: "\f288";
}
.fa-mixcloud:before {
  content: "\f289";
}
.fa-scribd:before {
  content: "\f28a";
}
.fa-pause-circle:before {
  content: "\f28b";
}
.fa-pause-circle-o:before {
  content: "\f28c";
}
.fa-stop-circle:before {
  content: "\f28d";
}
.fa-stop-circle-o:before {
  content: "\f28e";
}
.fa-shopping-bag:before {
  content: "\f290";
}
.fa-shopping-basket:before {
  content: "\f291";
}
.fa-hashtag:before {
  content: "\f292";
}
.fa-bluetooth:before {
  content: "\f293";
}
.fa-bluetooth-b:before {
  content: "\f294";
}
.fa-percent:before {
  content: "\f295";
}


@font-face {
font-family: 'DinRegular';
src: url('/css/../polices/dinregular-webfont.eot');
src: url('/css/../polices/dinregular-webfont.eot?#iefix') format('embedded-opentype'),
url('/css/../polices/dinregular-webfont.woff2') format('woff2'),
url('/css/../polices/dinregular-webfont.woff') format('woff'),
url('/css/../polices/dinregular-webfont.ttf') format('truetype'),
url('/css/../polices/dinregular-webfont.svg#DinRegular') format('svg');
font-weight: normal;
font-style: normal;
}

@font-face {
font-family: 'DinBold';
src: url('/css/../polices/dinbold-webfont.eot');
src: url('/css/../polices/dinbold-webfont.eot?#iefix') format('embedded-opentype'),
url('/css/../polices/dinbold-webfont.woff2') format('woff2'),
url('/css/../polices/dinbold-webfont.woff') format('woff'),
url('/css/../polices/dinbold-webfont.ttf') format('truetype'),
url('/css/../polices/dinbold-webfont.svg#DinBold') format('svg');
font-weight: normal;
font-style: normal;
}

@font-face {
font-family: 'OpenSans';
src: url('/css/../polices/OpenSans.eot');
src: url('/css/../polices/OpenSans.eot?#iefix') format('embedded-opentype'),
url('/css/../polices/OpenSans.woff2') format('woff2'),
url('/css/../polices/OpenSans.woff') format('woff'),
url('/css/../polices/OpenSans.ttf') format('truetype'),
url('/css/../polices/OpenSans.svg#OpenSans') format('svg');
font-weight: normal;
font-style: normal;
}

@font-face {
font-family: 'OpenSansLight';
src: url('/css/../polices/OpenSans-Light.eot');
src: url('/css/../polices/OpenSans-Light.eot?#iefix') format('embedded-opentype'),
url('/css/../polices/OpenSans-Light.woff2') format('woff2'),
url('/css/../polices/OpenSans-Light.woff') format('woff'),
url('/css/../polices/OpenSans-Light.ttf') format('truetype'),
url('/css/../polices/OpenSans-Light.svg#OpenSansLight') format('svg');
font-weight: normal;
font-style: normal;
}

@font-face {
font-family: 'OpenSansBold';
src: url('/css/../polices/OpenSans-Bold.eot');
src: url('/css/../polices/OpenSans-Bold.eot?#iefix') format('embedded-opentype'),
url('/css/../polices/OpenSans-Bold.woff2') format('woff2'),
url('/css/../polices/OpenSans-Bold.woff') format('woff'),
url('/css/../polices/OpenSans-Bold.ttf') format('truetype'),
url('/css/../polices/OpenSans-Bold.svg#OpenSansBold') format('svg');
font-weight: normal;
font-style: normal;
}

@font-face {
font-family: 'OpenSansExtrabold';
src: url('/css/../polices/OpenSans-Extrabold.eot');
src: url('/css/../polices/OpenSans-Extrabold.eot?#iefix') format('embedded-opentype'),
url('/css/../polices/OpenSans-Extrabold.woff2') format('woff2'),
url('/css/../polices/OpenSans-Extrabold.woff') format('woff'),
url('/css/../polices/OpenSans-Extrabold.ttf') format('truetype'),
url('/css/../polices/OpenSans-Extrabold.svg#OpenSansExtrabold') format('svg');
font-weight: normal;
font-style: normal;
}

@font-face {
font-family: 'OpenSansSemibold';
src: url('/css/../polices/OpenSans-Semibold.eot');
src: url('/css/../polices/OpenSans-Semibold.eot?#iefix') format('embedded-opentype'),
url('/css/../polices/OpenSans-Semibold.woff2') format('woff2'),
url('/css/../polices/OpenSans-Semibold.woff') format('woff'),
url('/css/../polices/OpenSans-Semibold.ttf') format('truetype'),
url('/css/../polices/OpenSans-Semibold.svg#OpenSansSemibold') format('svg');
font-weight: normal;
font-style: normal;
}

@font-face {
font-family: 'OpenSansSemiboldItalic';
src: url('/css/../polices/OpenSans-SemiboldItalic.eot');
src: url('/css/../polices/OpenSans-SemiboldItalic.eot?#iefix') format('embedded-opentype'),
url('/css/../polices/OpenSans-SemiboldItalic.woff2') format('woff2'),
url('/css/../polices/OpenSans-SemiboldItalic.woff') format('woff'),
url('/css/../polices/OpenSans-SemiboldItalic.ttf') format('truetype'),
url('/css/../polices/OpenSans-SemiboldItalic.svg#OpenSansSemiboldItalic') format('svg');
font-weight: normal;
font-style: normal;
}

@font-face {
font-family: 'RobotoCondensedLight';
src: url('/css/../polices/RobotoCondensed-Light.eot');
src: url('/css/../polices/RobotoCondensed-Light.eot?#iefix') format('embedded-opentype'),
url('/css/../polices/RobotoCondensed-Light.woff2') format('woff2'),
url('/css/../polices/RobotoCondensed-Light.woff') format('woff'),
url('/css/../polices/RobotoCondensed-Light.ttf') format('truetype'),
url('/css/../polices/RobotoCondensed-Light.svg#RobotoCondensedLight') format('svg');
font-weight: normal;
font-style: normal;
}

@font-face {
font-family: 'RobotoCondensedBold';
src: url('/css/../polices/RobotoCondensed-Bold.eot');
src: url('/css/../polices/RobotoCondensed-Bold.eot?#iefix') format('embedded-opentype'),
url('/css/../polices/RobotoCondensed-Bold.woff2') format('woff2'),
url('/css/../polices/RobotoCondensed-Bold.woff') format('woff'),
url('/css/../polices/RobotoCondensed-Bold.ttf') format('truetype'),
url('/css/../polices/RobotoCondensed-Bold.svg#RobotoCondensedBold') format('svg');
font-weight: normal;
font-style: normal;
}

@font-face {
font-family: 'RobotoRegular';
src: url('/css/../polices/RobotoRegular.eot');
src: url('/css/../polices/RobotoRegular.eot?#iefix') format('embedded-opentype'),
url('/css/../polices/RobotoRegular.woff2') format('woff2'),
url('/css/../polices/RobotoRegular.woff') format('woff'),
url('/css/../polices/RobotoRegular.ttf') format('truetype'),
url('/css/../polices/RobotoRegular.svg#RobotoRegular') format('svg');
font-weight: normal;
font-style: normal;
}


.clearing-thumbs li, [data-clearing] li {
    float: none !important;
    margin: 0 1px 0 1px !important;
}

.clearing-blackout .clearing-thumbs li, .clearing-blackout [data-clearing] li {
    float: left !important;
}

a {
    color: #e2001a;
    font-weight: bold;
    text-decoration: none;
}

a:hover {
    color: #ff0000;
}

body {
    background-color: #fff;
    font: 14px OpenSans, Arial, Helvetica, Sans-serif;
    color: #494949;
    margin: 0;
}

form {
    margin: 0;
}

h1 {
    color: #b0c9e7;
    font: 40px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 42px;
}

h2 {
    color: #b0c9e7;
    font: 30px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 32px;
}

h3 {
    color: #b0c9e7;
    font: 20px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 22px;
}

input {
    margin: 0;
}

input[type="text"], input[type="password"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="week"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="time"], input[type="url"], textarea {
    width: inherit;
    box-shadow: none;
    display: inline-block;
    margin: 0;
    color: #000;
    font-size: 14px !important;
    background-color: #fff;
    border: 1px solid #bdbdbd;
}

input[type="radio"] {
    margin: 5px 5px 5px 0;
}

label {
    color: #000;
    font-size: 14px;
}

p {
    font-size: 14px;
}

select {
    background-color: #fff;
    border: 1px solid #bdbdbd;
    color: #000;
    font-size: 14px;
}

table {
    border: 0;
}

table thead tr th, table tfoot tr th, table tbody tr td, table tr td, table tfoot tr td {
    color: #494949;
    font-size: 14px;
}

td {
    color: #494949;
    font-size: 14px;
}

ul, li {
    font-size: 14px;
}

/* Debut des styles pour la partie contenu generique via l'editeur wysiwyg */
.blanc {
    color: #fff;
}

.blancgras {
    color: #fff;
    font-weight: bold;
}

.bouton1 {
    color: #fff;
    font-size: 20px;
    font-family: DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    background-color: #e2001a;
    border: 0;
    cursor: pointer;
    padding: 7px 15px 7px 15px;
    vertical-align: middle;
    display: inline-block;
}

.bouton1:focus {
    color: #fff;
}

.bouton1:hover {
    background-color: #ff0000;
    color: #fff;
}

.bouton2 {
    color: #fff;
    font-size: 20px;
    font-family: RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    background-color: #e2001a;
    border: 0;
    cursor: pointer;
    padding: 7px 15px 7px 15px;
    vertical-align: middle;
    display: inline-block;
}

.bouton2 strong {
    color: #fff;
    font-size: 20px;
    font-family: OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
}

.bouton2:focus {
    color: #fff;
}

.bouton2:hover {
    background-color: #ff0000;
    color: #fff;
}

.boutonformulaire {
    color: #fff;
    font-size: 18px;
    font-family: OpenSansBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    background-color: #e2001a;
    border: 0;
    cursor: pointer;
    padding: 7px 15px 6px 15px;
    vertical-align: middle;
}

.boutonformulaire:hover {
    background-color: #ff0000;
    color: #fff;
}

.image-a-droite {
    float: right;
    margin: 0 0 10px 10px;
}

.important {
    color: #000;
    font-weight: bold;
}

.importantgras {
    color: #000;
    font-weight: bold;
    text-decoration: underline;
}

.fond1 {
    background-color: #929292;
}

.fond2 {
    background-color: #e5e5e5;
}

.fond3 {
    background-color: #f6f6f6;
}

.fond4 {
    background-color: #fff;
}

.formulaire {
    font: 14px OpenSans, Arial, Helvetica, Sans-serif !important;
    font-weight: normal !important;
    color: #000 !important;
    vertical-align: middle;
    background-color: #fff !important;
    border: 1px solid #bdbdbd !important;
    height: inherit !important;
}

.legende {
    color: #bdbdbd;
}

.legendegras {
    color: #bdbdbd;
    font-weight: bold;
}

.soustitre {
    color: #b0c9e7;
    font: 30px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 32px;
}

.titre {
    color: #b0c9e7;
    font: 40px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 42px;
}

/* Fin des styles pour la partie contenu generique via l'editeur wysiwyg */

/* Debut des styles pour la partie reservation */
a.r-prestation {
    color: #e2001a;
}

a.r-prestation:hover {
    color: #ff0000;
}

.Dlvs0 {
}

.Dlvs1 {
    text-decoration: underline;
}

.Dlvs2 {
    font-weight: bold;
    text-decoration: underline;
}

.Dvvs0 {
}

.Dvvs1 {
    text-decoration: underline;
}

.Dvvs2 {
    font-weight: bold;
    text-decoration: underline;
}

.fiche-tarifscontour {
    background-color: #e5e5e5;
    color: #313131;
}

.fiche-tarifsentete {
    background-color: #e5e5e5;
    color: #313131;
}

.fiche-tarifsinterieur {
    background-color: #fff;
    color: #313131;
}

.fiche-tarifsoptions {
    background-color: #fff;
    color: #313131;
}

.liN1 {
    text-align: justify;
    list-style-type: none;
    list-style-position: outside;
    padding: 0;
    margin: 0;
    line-height: inherit;
    list-style-image: url(/images/puce1.png);
    font-size: 13px !important;
    line-height: 18px;
}

.liN2 {
    text-align: justify;
    list-style-type: none;
    list-style-position: outside;
    padding: 0;
    margin: 0;
    line-height: inherit;
    list-style-image: url(/images/puce1.png);
    font-size: 13px !important;
    line-height: 18px;
}

.liN3 {
    text-align: justify;
    list-style-type: none;
    list-style-position: outside;
    padding: 0;
    margin: 0;
    line-height: inherit;
    list-style-image: url(/images/puce1.png);
    font-size: 13px !important;
    line-height: 18px;
}

.liNi1 {
    text-align: justify;
    list-style-type: none;
    list-style-position: outside;
    padding: 0;
    margin: 0;
    line-height: inherit;
    list-style-image: url(/images/puce1.png);
    font-size: 13px !important;
    line-height: 18px;
}

.liNi2 {
    text-align: justify;
    list-style-type: none;
    list-style-position: outside;
    padding: 0;
    margin: 0;
    line-height: inherit;
    list-style-image: url(/images/puce1.png);
    font-size: 13px !important;
    line-height: 18px;
}

.liNi3 {
    text-align: justify;
    list-style-type: none;
    list-style-position: outside;
    padding: 0;
    margin: 0;
    line-height: inherit;
    list-style-image: url(/images/puce1.png);
    font-size: 13px !important;
    line-height: 18px;
}

.r-bouton1 {
    background-color: #e2001a;
    border: none;
    text-align: center;
    color: #fff;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    border: 0;
    cursor: pointer;
    padding: 7px 15px 7px 15px;
    vertical-align: middle;
}

.r-bouton1:hover {
    background-color: #ff0000;
    color: #fff;
}

.r-bouton2 {
    background-color: #e2001a;
    border: none;
    text-align: center;
    color: #fff;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    border: 0;
    cursor: pointer;
    padding: 7px 15px 7px 15px;
    vertical-align: middle;
}

.r-bouton2:hover {
    background-color: #ff0000;
    color: #fff;
}

.r-fond1, td.r-fond1 {
    background-color: #929292;
    font-size: 14px;
}

.r-fond2, td.r-fond2 {
    background-color: #e5e5e5;
    font-size: 14px;
}

.r-fond3, td.r-fond3 {
    background-color: #f6f6f6;
    font-size: 14px;
}

.r-fond4, td.r-fond4 {
    background-color: #fff;
    font-size: 14px;
}

.r-fondspecial {
    background-color: #cac3cb;
    font-size: 14px;
}

.r-fondversement1 {
    background-color: #b1a7b2;
}

.r-fondversement2 {
    background-color: #cac3cb;
}

.r-formulaire {
    font: 16px DinRegular, Arial, Helvetica, Sans-serif !important;
    font-weight: normal !important;
    color: #000 !important;
    vertical-align: middle;
    background-color: #fff !important;
    border: 1px solid #bdbdbd !important;
    height: inherit !important;
    margin: 0 !important
}

.r-important {
    color: #000;
    font-weight: bold;
}

.r-importantgras {
    color: #000;
    font-weight: bold;
    text-decoration: underline;
}

.r-legende {
    color: #bdbdbd;
}

.r-legendegras {
    color: #bdbdbd;
    font-weight: bold;
}

.r-orange {
    color: #ff9c00;
}

.r-orangegras {
    color: #ff9c00;
    font-weight: bold;
}

.r-prix1, input.r-prix1 {
    background-color: #e5e5e5 !important;
    border: 0 !important;
    font-size: 14px !important;
    color: #313131 !important;
    text-align: right;
    height: inherit !important;
    padding: 0 !important;
}

.r-prix2, input.r-prix2 {
    background-color: #929292 !important;
    border: 0 !important;
    font-size: 14px !important;
    color: #fff !important;
    text-align: right;
    height: inherit !important;
    padding: 0 !important;
}

.r-prix3, input.r-prix3 {
    background-color: #f6f6f6 !important;
    border: 0 !important;
    font-size: 14px !important;
    color: #313131 !important;
    text-align: right;
    height: inherit !important;
    padding: 0 !important;
}

.r-prix4, input.r-prix4 {
    background-color: #fff !important;
    border: 0 !important;
    font-size: 14px !important;
    color: #313131 !important;
    text-align: right;
    height: inherit !important;
    padding: 0 !important;
}

.r-prixspecial, input.r-prixspecial {
    background-color: #cac3cb !important;
    border: 0 !important;
    font-size: 14px !important;
    color: #fff !important;
    text-align: right;
    height: inherit !important;
    padding: 0 !important;
}

.r-soustitre {
    color: #000;
    font: 30px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 32px;
}

.r-texteprestation {
    color: #313131;
}

.r-textespecial {
    color: #fff;
    font-size: 14px;
}

.r-textespecialgras {
    color: #fff;
    font-size: 14px;
    font-weight: bold;
}

.r-titre {
    color: #000;
    font: 30px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 36px;
    text-transform: uppercase;
}

.r-titreprestation {
    color: #000;
    font-size: 20px;
    text-transform: uppercase;
    line-height: 22px;
    font-weight: bold;
}

#positiontitre {
    position: relative;
    width: auto;
    height: auto;
    left: 0;
    top: 0;
    z-index: 10;
    visibility: visible;
    border: 0;
    text-align: right;
}

.validationCodePromo {
    width: 23px;
    height: 18px;
    background-image: url(/css/../images/validation-numerodevis.gif);
    background-repeat: no-repeat;
    vertical-align: middle;
    margin-left: 2px;
}

.suppressionCodePromo {
    width: 23px;
    height: 18px;
    background-image: url(/css/../images/delete.gif);
    background-repeat: no-repeat;
    vertical-align: middle;
    margin-left: 2px;
}

.erreurcodepromo {
    position: relative;
    left: 0px;
    top: 0px;
    z-index: 4;
    font-weight: bold;
    visibility: visible;
    border: 0px none #000000;
    text-align: left;
    margin-left: 12px;
    color: red;
}

/* Fin des styles pour la partie reservation */

/* Debut des styles pour le diaporama */
.diaporama {
    position: relative;
    width: 100%;
    height: 637px;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.diaporama .diapo {
    position: absolute;
    width: 1700px;
    height: 900px;
    left: 50%;
    top: 0;
    margin-left: -850px;
    text-align: center;
    overflow: hidden;
}

.diaporama .diapo img {
    width: 100%;
    height: auto;
    margin: 0;
    padding: 0;
    margin-top: 36vh;
    transform: translateY(-50%);
}

.diaporama .diapo_txt_1 {
    display: block;
}

.diaporama .diapo_txt_1 span {
    display: inline-block;
    height: 63px;
    margin: 0 auto 0 auto;
    color: #fff;
    font: 63px RobotoCondensedLight, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 63px;
    overflow: hidden;
}

.diaporama .diapo_txt_2 {
    display: block;
    margin-top: 2px;
}

.diaporama .diapo_txt_2 span {
    display: inline-block;
    height: 205px;
    margin: 0 auto 0 auto;
    color: #fff;
    font: 100px OpenSansExtrabold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 105px;
    overflow: hidden;
}

.diaporama .diapo_txt_zone {
    position: absolute;
    width: 850px;
    margin: 0 calc((100% - 850px) / 2) !important;
    top: 150px;
    text-align: center;
}

.diaporama .diaporama-zone {
    position: absolute;
    width: 100%;
    height: 900px;
    margin: 0 auto 0 auto;
    padding: 0;
    text-align: center;
    overflow: hidden;
}

.diaporama .fleche-bas {
    position: absolute;
    z-index: 2;
    width: 80px;
    height: auto;
    left: calc((100% - 80px) / 2);
    bottom: -10px;
    text-align: center;
}

.diaporama .fleche-bas a i {
    color: #fff;
    font-size: 80px;
    text-shadow: 0px 0px 1px rgba(0, 0, 0, 1);
}

.diaporama .fleche-bas a:hover i {
    color: #ff0000;
    text-shadow: 0px 0px 1px rgba(255, 255, 255, 1);
}

.diaporama .fleche-droite1 {
    position: absolute;
    z-index: 3;
    width: auto;
    height: 47px;
    left: 0;
    top: 78px;
}

.diaporama .fleche-droite1 a {
    display: block;
    width: auto;
    height: 47px;
}

.diaporama .fleche-droite1 a .texte {
    display: block;
    width: auto;
    height: 47px;
    background-color: #e2001a;
    color: #fff;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    line-height: 47px;
    text-transform: uppercase;
    padding-left: 10px;
    padding-right: 22px;
    border: 0;
    -webkit-border-top-right-radius: 23px;
    -webkit-border-bottom-right-radius: 23px;
    -moz-border-radius-topright: 23px;
    -moz-border-radius-bottomright: 23px;
    border-top-right-radius: 23px;
    border-bottom-right-radius: 23px;
    opacity: 0.4;
}

.diaporama .fleche-droite1 a:hover .texte {
    opacity: 1;
    padding-left: 12px;
}

.diaporama .fleche-droite1 a .texte-rm {
    position: absolute;
    width: 336px;
    height: 65px;
    -ms-transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    color: #000;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 65px;
    text-transform: uppercase;
    left: -134px;
    top: 190px;
    text-align: right;
    overflow: hidden;
}

.diaporama .fleche-gauche1 {
    position: absolute;
    z-index: 3;
    width: auto;
    height: 47px;
    left: 0;
    top: 25px;
}

.diaporama .fleche-gauche1 a {
    display: block;
    width: auto;
    height: 47px;
}

.diaporama .fleche-gauche1 a .texte {
    display: block;
    width: auto;
    height: 47px;
    background-color: #e2001a;
    color: #fff;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    line-height: 47px;
    text-transform: uppercase;
    padding-left: 10px;
    padding-right: 22px;
    border: 0;
    -webkit-border-top-right-radius: 23px;
    -webkit-border-bottom-right-radius: 23px;
    -moz-border-radius-topright: 23px;
    -moz-border-radius-bottomright: 23px;
    border-top-right-radius: 23px;
    border-bottom-right-radius: 23px;
    opacity: 0.4;
}

.diaporama .fleche-gauche1 a:hover .texte {
    opacity: 1;
    padding-left: 12px;
}

.diaporama .fleche-gauche1 a .texte-rm {
    position: absolute;
    width: 336px;
    height: 65px;
    -ms-transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    color: #000;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 65px;
    text-transform: uppercase;
    left: -136px;
    top: 144px;
    text-align: right;
    overflow: hidden;
}

.diaporama .fleches {
    position: absolute;
    z-index: 3;
    right: 10px;
    bottom: -25px;
}

.diaporama .fleches i {
    color: #fff;
    font-size: 50px;
    text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.75);
    margin: 5px;
}

.diaporama .slick-prev::before {
    display: none;
}

.diaporama .slick-next::before {
    display: none;
}

.diaporama-accueil {
    position: relative;
}

.diaporama-accueil-fin {
    display: block;
}

.diaporama-accueil-fin-rm {
    display: block;
}

.diaporama-accueil-rm {
    position: relative;
}

.diaporama-illustration {
    display: none;
}

/* Fin des styles pour le diaporama */

/* Debut des styles pour le calendrier du moteur de recherche */
.calendar-moisannee {
    display: block;
    text-align: center;
    color: #000;
    font-size: 16px;
    text-transform: uppercase;
    margin-bottom: -10px;
}

.calendar-moisannee a.after, .calendar-moisannee a.before {
    display: inline-block;
    padding: 10px;
    color: #e2001a;
}

.calendar-moisannee a.after:hover, .calendar-moisannee a.before:hover {
    color: #ff0000;
    text-decoration: none;
}

.calendar-titre {
    display: block;
    text-align: center;
    background-color: #cac3cb;
    color: #000;
    padding: 5px !important;
    margin-top: 5px;
}

.calendar-moteur {
    width: auto;
    height: auto;
    background-color: #fff;
    border: 0;
    margin: 10px 0 10px 0;
}

.calendar-moteur td {
    border: 1px solid #fff;
    padding: 0;
    font-size: 12px !important;
}

.calendar-entete {
    background-color: #000;
    color: #fff !important;
    text-align: center;
    height: 26px;
    width: 34px;
}

.calendar-vide {
    background-color: #fff;
    margin: 0;
    padding: 0;
    height: 26px;
    width: 34px;
}

.calendar-piedpage {
    background-color: #fff;
    margin: 0;
    padding: 0;
    height: 26px;
    width: 34px;
}

.calendar-jour-non-dispo {
    background-color: #f2f2f2;
    color: #bdbdbd !important;
    text-align: center;
    vertical-align: middle;
    margin: 0;
    padding: 0;
    height: 26px;
    width: 34px;
    font-size: 12px !important;
}

.calendar-jour-dispo-pdm {
    background-color: #b9d065;
    color: #fff;
    text-align: center;
    vertical-align: middle;
    margin: 0;
    padding: 0;
    height: 26px;
    width: 34px;
    font-size: 12px !important;
}

.calendar-jour-dispo {
    background-color: #7c9a13;
    color: #fff;
    text-align: center;
    vertical-align: middle;
    margin: 0;
    padding: 0;
    height: 26px;
    width: 34px;
    font-size: 12px !important;
}

.calendar-jour-dispo a {
    background-color: #7c9a13;
    color: #fff !important;
    display: block;
    margin: auto;
    padding: auto;
    height: 26px;
    line-height: 26px;
    font-size: 12px !important;
}

.calendar-jour-dispo a:hover {
    background-color: #ff0000;
    color: #fff !important;
    display: block;
    margin: auto;
    padding: auto;
    height: 26px;
    line-height: 26px;
    text-decoration: none;
    font-size: 12px !important;
}

.calendar-jour-dispo-pdm a {
    background-color: #b9d065;
    color: #fff !important;
    display: block;
    margin: auto;
    padding: auto;
    height: 26px;
    line-height: 26px;
    font-size: 12px !important;
}

.calendar-jour-dispo-pdm a:hover {
    background-color: #ff0000;
    color: #fff !important;
    display: block;
    margin: auto;
    padding: auto;
    height: 26px;
    line-height: 26px;
    text-decoration: none;
    font-size: 12px !important;
}

.tableau-prix-itea {
    border: 1px solid #bdbdbd;
    margin: 0;
    padding: 0;
    border-collapse: collapse;
    background-color: #e5e5e5;
}

.tableau-prix-itea td {
    border: 0;
    margin: 0;
    padding: 10px;
}

.tableau-prix-itea-libelletarif {
    font-weight: bold;
}

.tableau-prix-itea-nomproduit {
    font-weight: bold;
    color: #000;
}

/* Fin des styles pour le calendrier du moteur de recherche */

/* Debut des styles pour le calendrier de la fiche produit */
#calendriercontenu .selectresultats {
    width: 100%;
    background-color: #fff;
    border: 1px solid #bdbdbd;
    color: #000;
    font-size: 12px;
    margin: 0;
}

#calendriercontenu {
    position: relative;
    width: 100%;
    height: auto;
    left: 0;
    top: 0;
    z-index: 4;
    visibility: visible;
    border: 0;
    text-align: left;
}

#calendriercontenu table {
    border: 0;
    margin: 0;
    padding: 0;
}

#calendriermoisannee {
    position: relative;
    width: 100%;
    height: auto;
    left: 0;
    top: 0;
    z-index: 5;
    visibility: visible;
    border: 0;
    text-align: center;
    margin-top: 15px;
    background-color: #e2001a;
    font-size: 16px;
    color: #fff;
    vertical-align: middle;
}

#calendriermoisannee img {
    vertical-align: middle;
    margin-top: 5px;
    margin-bottom: 5px;
}

#calendriermoisannee img.flechedroite {
    margin-left: 20px;
    height: 30px;
}

#calendriermoisannee img.flechegauche {
    margin-right: 20px;
    height: 30px;
}

#calendriertableau1 {
    width: 100%;
}

#calendriertableau1col1 {
    width: 77%;
    text-align: left;
    vertical-align: middle;
    font-size: 12px;
}

#calendriertableau1col2 {
    width: 4%;
    text-align: left;
    vertical-align: middle;
}

#calendriertableau1col3 {
    width: 19%;
    text-align: left;
    vertical-align: middle;
}

#calendriertableau2 #noselection {
    background-color: #f2f2f2;
    color: #bdbdbd;
    font-size: 12px;
}

#calendriertableau2 #noselection a {
    color: #bdbdbd;
    font-weight: normal;
    font-size: 12px;
}

#calendriertableau2 #noselection a:hover {
    color: #bdbdbd;
}

#calendriertableau2 #request {
    background-color: #b9d065;
    border: 1px solid #bdbdbd;
    vertical-align: top;
}

#calendriertableau2 #request a.indication_prix {
    display: block;
    color: #fff;
    font-weight: normal;
    font-size: 11px;
}

#calendriertableau2 #request a.indication_prix:hover {
    color: #fff;
}

#calendriertableau2 #request a.jour {
    display: block;
    color: #fff;
    font-weight: normal;
    font-size: 11px;
    padding-top: 17px;
}

#calendriertableau2 #request a.jour:hover {
    color: #fff;
}

#calendriertableau2 #request a.prix {
    display: block;
    color: #fff;
    font-weight: bold;
    font-size: 13px;
}

#calendriertableau2 #request a.prix:hover {
    color: #fff;
}

#calendriertableau2 #request a.prix_barre {
    display: block;
    color: #fff;
    font-weight: normal;
    font-size: 13px;
}

#calendriertableau2 #request a.prix_barre:hover {
    color: #fff;
}

#calendriertableau2 #request.on {
    background-color: #dce7b2;
}

#calendriertableau2 #requesttop {
    background-color: #7c9a13;
    border: 1px solid #bdbdbd;
    vertical-align: top;
}

#calendriertableau2 #requesttop a.indication_prix {
    display: block;
    color: #fff;
    font-weight: normal;
    font-size: 11px;
}

#calendriertableau2 #requesttop a.indication_prix:hover {
    color: #fff;
}

#calendriertableau2 #requesttop a.jour {
    display: block;
    color: #fff;
    font-weight: normal;
    font-size: 11px;
    padding-top: 2px;
}

#calendriertableau2 #requesttop a.jour:hover {
    color: #fff;
}

#calendriertableau2 #requesttop a.prix {
    display: block;
    color: #fff;
    font-weight: bold;
    font-size: 13px;
}

#calendriertableau2 #requesttop a.prix:hover {
    color: #fff;
}

#calendriertableau2 #requesttop a.prix_barre {
    display: block;
    color: #fff;
    font-weight: normal;
    font-size: 13px;
}

#calendriertableau2 #requesttop a.prix_barre:hover {
    color: #fff;
}

#calendriertableau2 #requesttop a.titre {
    display: block;
    width: 100%;
    color: #fff;
    font-weight: normal;
    font-size: 11px;
    background-color: #5e750f;
    text-transform: none;
    line-height: 11px;
    padding: 2px 0 2px 0;
}

#calendriertableau2 #requesttop a.titre:hover {
    color: #fff;
    background-color: #5e750f;
}

#calendriertableau2 #requesttop.on {
    background-color: #bdcc89;
}

#calendriertableau2 #requesttop.on a.titre {
    background-color: #b0c271;
}

#calendriertableau2 #selection {
    background-color: #b9d065;
    border: 1px solid #bdbdbd;
    vertical-align: top;
}

#calendriertableau2 #selection a.indication_prix {
    display: block;
    color: #fff;
    font-weight: normal;
    font-size: 11px;
}

#calendriertableau2 #selection a.indication_prix:hover {
    color: #fff;
}

#calendriertableau2 #selection a.jour {
    display: block;
    color: #fff;
    font-weight: normal;
    font-size: 11px;
    padding-top: 17px;
}

#calendriertableau2 #selection a.jour:hover {
    color: #fff;
}

#calendriertableau2 #selection a.prix {
    display: block;
    color: #fff;
    font-weight: bold;
    font-size: 13px;
}

#calendriertableau2 #selection a.prix:hover {
    color: #fff;
}

#calendriertableau2 #selection a.prix_barre {
    display: block;
    color: #fff;
    font-weight: normal;
    font-size: 13px;
}

#calendriertableau2 #selection a.prix_barre:hover {
    color: #fff;
}

#calendriertableau2 #selectiontop {
    background-color: #7c9a13;
    border: 1px solid #bdbdbd;
    vertical-align: top;
}

#calendriertableau2 #selectiontop a.indication_prix {
    display: block;
    color: #fff;
    font-weight: normal;
    font-size: 11px;
}

#calendriertableau2 #selectiontop a.indication_prix:hover {
    color: #fff;
}

#calendriertableau2 #selectiontop a.jour {
    display: block;
    color: #fff;
    font-weight: normal;
    font-size: 11px;
    padding-top: 2px;
}

#calendriertableau2 #selectiontop a.jour:hover {
    color: #fff;
}

#calendriertableau2 #selectiontop a.prix {
    display: block;
    color: #fff;
    font-weight: bold;
    font-size: 13px;
}

#calendriertableau2 #selectiontop a.prix:hover {
    color: #fff;
}

#calendriertableau2 #selectiontop a.prix_barre {
    display: block;
    color: #fff;
    font-weight: normal;
    font-size: 13px;
}

#calendriertableau2 #selectiontop a.prix_barre:hover {
    color: #fff;
}

#calendriertableau2 #selectiontop a.titre {
    display: block;
    width: 100%;
    color: #fff;
    font-weight: normal;
    font-size: 11px;
    background-color: #5e750f;
    text-transform: none;
    line-height: 11px;
    padding: 2px 0 2px 0;
}

#calendriertableau2 #selectiontop a.titre:hover {
    color: #fff;
    background-color: #5e750f;
}

#calendriertableau2 #selectiontop.on {
    background-color: #e2001a;
}

#calendriertableau2 #selectiontop.on a.titre {
    background-color: #a20114;
}

#zonelogin .r-identification-fermer {
    display: block;
    padding: 5px 10px;
    text-align: center;
    background: #e2001a;
    width: 251px;
    margin: 15px auto;
}

#zonelogin .r-identification-fermer a {
    color: #fff;
    font-weight: normal;
    font-size: 20px;
}

#calendriertableau2 {
    width: 100%;
    border-spacing: 2px;
}

#calendriertableau2 td {
    width: 14%;
    height: 55px;
    text-align: center;
    vertical-align: middle;
    border: 1px solid #bdbdbd;
    padding: 0 0 5px 0;
    margin: 0;
    background-color: #fff;
    line-height: 14px !important;
}

#calendriertableau2 th {
    width: 14%;
    text-align: center;
    vertical-align: middle;
    font-size: 12px;
    font-weight: normal;
    background-color: #fff;
    padding: 3px 0 3px 0;
    margin: 0;
}

#calendriertableaudispos {
    text-align: left;
    vertical-align: middle;
    font-size: 12px;
    margin: 0;
    padding: 0;
}

#calendriertableaudispos select {
    background-color: #fff;
    border: 1px solid #bdbdbd;
    color: #000;
    font-size: 12px;
    margin: 0 0 0 5px;
}

#calendriertableaudispos td {
    text-align: left;
    vertical-align: middle;
    font-size: 12px;
    margin: 0;
    padding: 0;
}

#calendrierzone {
    position: relative;
    width: 100%;
    height: auto;
    left: 0;
    top: 0;
    z-index: 3;
    visibility: visible;
    border: 0;
    text-align: left;
}

/* Fin des styles pour le calendrier de la fiche produit */

/* Debut des styles pour le comparateur */
.comparateur-boutons {
    padding-top: 50px;
    padding-bottom: 40px;
}

.comparateur-bouton1 {
    padding-right: 5px;
}

.comparateur-bouton1 a {
    display: block;
    background-color: #e2001a;
    border: 0;
    color: #fff;
    font-size: 14px;
    text-transform: uppercase;
    line-height: 16px;
    text-align: center;
    padding: 20px 5px 20px 5px;
}

.comparateur-bouton1 a:hover {
    background-color: #ff0000;
    color: #fff;
    text-decoration: none;
}

.comparateur-bouton2 {
    padding-left: 0;
    padding-right: 0;
}

.comparateur-bouton2 a {
    display: block;
    background-color: #e2001a;
    border: 0;
    color: #fff;
    font-size: 14px;
    text-transform: uppercase;
    line-height: 16px;
    text-align: center;
    padding: 20px 5px 20px 5px;
}

.comparateur-bouton2 a:hover {
    background-color: #ff0000;
    color: #fff;
    text-decoration: none;
}

.comparateur-bouton3 {
    padding-left: 5px;
}

.comparateur-bouton3 a {
    display: block;
    background-color: #e2001a;
    border: 0;
    color: #fff;
    font-size: 14px;
    text-transform: uppercase;
    line-height: 16px;
    text-align: center;
    padding: 20px 5px 20px 5px;
}

.comparateur-bouton3 a:hover {
    background-color: #ff0000;
    color: #fff;
    text-decoration: none;
}

.comparateur-liste {
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 5px;
    margin-top: 30px;
    border-top: 3px solid #e5e5e5;
}

.comparateur-liste .STYLE-COMPARATEUR-COMPAR_F_LIB {
    padding: 5px;
    text-align: center;
    font-size: 14px;
    line-height: 16px;
}

.comparateur-liste .STYLE-COMPARATEUR-COMPAR_PAR0 {
    padding: 5px;
    text-align: center;
}

.comparateur-liste .STYLE-COMPARATEUR-COMPAR_PAR0 img {
    height: 17px;
}

.comparateur-liste .STYLE-COMPARATEUR-COMPAR_PAR2 {
    padding: 0 5px 5px 5px;
    text-align: center;
    font-size: 14px;
    line-height: 16px;
}

.comparateur-liste .STYLE-COMPARATEUR-COMPAR_PAR2 .commune {
    display: block;
    padding: 15px 5px 0 5px;
}

.comparateur-liste .STYLE-COMPARATEUR-COMPAR_PAR7 {
    padding: 5px;
    text-align: center;
    font-size: 14px;
    line-height: 16px;
}

.comparateur-liste .STYLE-COMPARATEUR-COMPAR_PAR7 li {
    text-align: center;
}

.comparateur-liste .STYLE-COMPARATEUR-COMPAR_PAR7 ul {
    text-align: center;
}

.comparateur-liste .STYLE-COMPARATEUR-COMPAR_F_PHOTO {
    padding: 5px 5px 0 5px;
    text-align: center;
}

.comparateur-liste .STYLE-COMPARATEUR-COMPAR_F_PHOTO img {
    border: 0;
}

.comparateur-liste .STYLE-COMPARATEUR-DEL {
    padding: 0 5px 5px 5px;
    text-align: center;
}

.comparateur-liste .STYLE-COMPARATEUR-DEL a {
    display: block;
    background-color: #e2001a;
    border: 0;
    color: #fff;
    font-size: 14px;
    text-transform: uppercase;
    line-height: 16px;
    text-align: center;
    padding: 10px 5px 10px 5px;
}

.comparateur-liste .STYLE-COMPARATEUR-DEL a:hover {
    background-color: #ff0000;
    color: #fff;
    text-decoration: none;
}

.comparateur-liste .STYLE-COMPARATEUR-FP {
    padding: 0 5px 0 5px;
    text-align: center;
}

.comparateur-liste .STYLE-COMPARATEUR-FP a {
    display: block;
    background-color: #e2001a;
    border: 0;
    color: #fff;
    font-size: 14px;
    text-transform: uppercase;
    line-height: 16px;
    text-align: center;
    padding: 20px 5px 20px 5px;
    margin-bottom: 1px;
}

.comparateur-liste .STYLE-COMPARATEUR-FP a:hover {
    background-color: #ff0000;
    color: #fff;
    text-decoration: none;
}

.comparateur-liste .STYLE-COMPARATEUR-PRIX {
    padding: 5px 5px 0 5px;
    text-align: center;
}

.comparateur-liste .STYLE-COMPARATEUR-PRIX .comparateur-prix {
    padding: 5px;
    min-height: 100px;
    text-align: center;
    background-color: #757575;
    color: #fff;
    font-size: 14px;
}

.comparateur-liste .STYLE-COMPARATEUR-PRIX .comparateur-prix .prix1 {
    color: #c6c6c6;
    font-size: 18px;
    ine-height: 20px;
    text-decoration: line-through;
}

.comparateur-liste .STYLE-COMPARATEUR-PRIX .comparateur-prix .prix2 {
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    line-height: 20px;
}

#comparateur-partager {
    padding-top: 5px;
}

#comparateur-partager a {
    display: block;
    background-color: #e2001a;
    border: 0;
    color: #fff;
    font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    text-align: center;
    padding: 10px 5px 10px 5px;
    margin-top: 1px;
}

#comparateur-partager a:hover {
    background-color: #ff0000;
    color: #fff;
    text-decoration: none
}

.comparateur-texte .partager {
    display: inline-block;
    background-color: #e2001a;
    border: 0;
    color: #fff;
    font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
    text-align: center;
    padding: 5px;
    margin: 2px;
    vertical-align: middle;
}

/* Fin des styles pour le comparateur */

/* Debut des styles pour l'idenfication du formulaire des infos client */
.r-identification1, .r-identification2 {
    text-align: center;
    font-weight: bold;
    padding-top: 10px;
    padding-bottom: 10px;
}

.r-identification1 {
    padding-right: 5px;
}

.r-identification2 {
    padding-left: 5px;
}

.r-identification1 input, .r-identification2 input {
    width: 100%;
    margin: 5px 0 5px 0 !important;
}

.r-identification-bouton {
    display: block;
    padding-top: 10px;
    text-align: center;
}

.r-identification-bouton input {
    margin: 0 0 5px 0;
    padding-right: 40px;
    padding-left: 40px;
}

.r-identification-fermer {
    display: block;
    padding-top: 30px;
    text-align: right;
}

#zonelogin {
}

#zonelogin h2 {
    padding-top: 30px;
}

#zonelogin h2, #zonelogin p {
    text-align: center;
}

/* Fin des styles pour l'idenfication du formulaire des infos client */

/* Debut des styles pour le formulaire infos client */
.infosclient-bouton a.r-bouton1 {
    display: block;
    text-align: center;
}

.infosclient-bouton a.r-bouton1:hover {
    color: #fff;
    text-decoration: none;
}

.infosclient-bouton a.r-bouton2 {
    display: block;
    text-align: center;
}

.infosclient-bouton a.r-bouton2:hover {
    color: #fff;
    text-decoration: none;
}

.infosclient-bouton .saisie-attente {
    position: absolute;
    width: 100%;
    z-index: 4;
    text-align: center;
}

.infosclient-bouton .saisie-attente img {
    width: 35px;
    height: 35px;
    margin: 30px 30px 0 auto;
}

.infosclient-cases1 input {
    width: auto;
    margin: 2px 6px 4px 0 !important;
    vertical-align: middle;
}

.infosclient-cases1 label {
    font-size: 15px;
    color: #313131;
    font-weight: normal;
    padding-top: 8px;
    padding-bottom: 10px;
}

.infosclient-cases2 input {
    width: auto;
    margin: 2px 6px 4px 0 !important;
    vertical-align: middle;
}

.infosclient-cases2 label {
    font-size: 15px;
    color: #313131;
    font-weight: normal;
    padding-top: 8px;
    padding-bottom: 10px;
}

.infosclient-formulaire input, .infosclient-formulaire select, .infosclient-formulaire textarea {
    width: 100%;
    font-size: 15px;
}

.infosclient-formulaire input.infosclient-mini, .infosclient-ligne.required .infosclient-formulaire input.infosclient-mini {
    width: 50%;
}

.infosclient-formulaire select.infosclient-mini, .infosclient-ligne.required .infosclient-formulaire select.infosclient-mini {
    width: 50%;
}

.infosclient-formulaire textarea {
    height: 100px !important;
}

.infosclient-ligne.required .infosclient-titre label {
    font-size: 15px;
    font-weight: bold;
}

.infosclient-ligne.required .infosclient-formulaire input, .infosclient-ligne.required .infosclient-formulaire select, .infosclient-ligne.required .infosclient-formulaire textarea {
    width: 100%;
    font-size: 15px;
}

.infosclient-participant {
    display: block;
    background-color: #e2001a;
    padding: 5px;
    margin: 20px 0 12px 0;
    color: #fff;
    font-size: 18px;
    line-height: 20px;
}

.infosclient-separation {
    display: block;
    border-top: 3px solid #e5e5e5;
    margin-top: 10px;
    padding-bottom: 10px;
}

.infosclient-texte {
    padding-top: 5px;
    padding-bottom: 5px;
}

.infosclient-titre label {
    font-size: 15px;
    font-weight: normal;
}

.infosclient-titre-cases1 label {
    font-size: 15px;
    font-weight: normal;
}

.infosclient-titre-cases2 label {
    font-size: 15px;
    font-weight: bold;
}

/* Fin des styles pour le formulaire infos client */

/* Debut des styles pour la partie compte client */
#compte-bouton1 {
    position: relative;
    width: auto;
    height: auto;
    left: 0;
    top: 0;
    z-index: 10;
    visibility: visible;
    border: 0;
    text-align: left;
    margin: 0;
}

#compte-bouton1 a {
    display: block;
    height: auto;
    background-color: #e2001a;
    border: 0;
    text-align: center;
    color: #fff;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 16px;
    padding: 10px 5px 10px 5px;
    vertical-align: middle;
}

#compte-bouton1 a:hover {
    background-color: #ff0000;
    color: #fff;
}

#compte-bouton1 li {
    display: block;
    list-style-type: none;
    list-style-position: outside;
    text-align: center;
    overflow: hidden;
}

#compte-bouton2 {
    position: relative;
    width: auto;
    height: auto;
    left: 0;
    top: 0;
    z-index: 10;
    visibility: visible;
    border: 0;
    text-align: left;
    margin: 0;
}

#compte-bouton2 a {
    display: block;
    height: auto;
    background-color: #e2001a;
    border: 0;
    text-align: center;
    color: #fff;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 16px;
    padding: 10px 5px 10px 5px;
    vertical-align: middle;
}

#compte-bouton2 a:hover {
    background-color: #ff0000;
    color: #fff;
}

#compte-bouton2 li {
    display: block;
    list-style-type: none;
    list-style-position: outside;
    text-align: center;
    overflow: hidden;
}

.compte-info {
    padding: 10px;
    border-bottom: 5px solid #fff;
}

/* Fin des styles pour la partie compte client */

/* Debut des styles pour le formulaire de contact */
.contact-captcha {
    display: block;
    width: 100%;
    margin: 2px 0 0 0;
    overflow: hidden;
}

.contact-formulaire iframe {
    width: 100%;
    background-color: #e5e5e5;
    overflow: hidden;
}

.contact-formulaire input, .contact-formulaire select, .contact-formulaire textarea {
    width: 100%;
    margin: 2px 0 20px 0;
}

.contact-formulaire select {
}

.contact-formulaire textarea {
    height: 200px !important;
}

.contact-formulaire .boutonformulaire {
    margin-top: 20px;
}

.contact-formulaire-zone {
    padding-top: 30px;
}

/* Fin des styles pour le formulaire de contact */

/* Debut des styles pour les formulaires forfaits de ski */
#eliberty-auth-result-outer {
    padding: 0;
}

#formulaire-rm .infosclient-texte h2 {
    background-color: #fff;
    color: #000;
    padding: 0;
}

#formulaire-rm .skieur1 {
    padding-top: 3px;
    font-size: 14px;
}

#formulaire-rm .skieur2 {
    padding-top: 3px;
    padding-left: 0;
    text-align: right;
    font-size: 14px;
    font-weight: bold;
}

#formulaire-rm .skieur3 {
    padding-top: 3px;
    padding-bottom: 10px;
    font-size: 14px;
}

#formulaire-rm .skieur4 {
    padding-top: 3px;
    padding-bottom: 10px;
    padding-left: 0;
    text-align: right;
    font-size: 14px;
    font-weight: bold;
}

#formulaire-rm .zone1 {
    padding-top: 5px;
    padding-bottom: 15px;
}

#formulaire-rm .zone2 {
    padding-top: 5px;
    padding-bottom: 15px;
}

#formulaire-rm h2, #formulaire-rm-recap h2 {
    display: block;
    background-color: #FFF;
    color: #494949;
    border-bottom: 2px solid #929292;
    font-size: 20px;
    font-family: 'OpenSans';
    padding: 10px 0 0;
}

#formulaire-rm h3, #formulaire-rm-recap h3 {
    display: block;
    font-weight: bold;
    padding: 20px 0 0 0;
    margin: 0 0 10px 0;
    font: 19px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
}

#formulaire-rm small {
    display: block;
    font-size: 12px;
}

#formulaire-rm-recap .tableau-rm-zone {
    display: block;
    padding: 8px 0;
    margin-bottom: 20px;
}

#formulaire-rm-recap .tableau-rm1 {
    padding: 5px 5px 5px 15px;
    font-size: 14px;
}

#formulaire-rm-recap .tableau-rm2 {
    padding: 5px 15px 5px 5px;
    font-size: 14px;
    font-weight: bold;
}

.alert-box.radius {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    border: 0;
}

.formulaire-rm-bouton1 {
    text-align: right;
}

.formulaire-rm-separateur1 {
    padding: 0 0 15px 0;
}

/* Fin des styles pour les formulaires forfaits de ski */

/* Debut des styles pour la recherche Google */
#___gcse_0 {
    margin: 30px auto 30px auto !important;
}

.cse .gs-result .gs-snippet, .gs-result .gs-snippet, .cse .gs-spelling-original, .gs-spelling-original {
    color: #494949 !important;
    font-size: 14px !important;
    font-family: OpenSans, Arial, Helvetica, Sans-serif !important;
}

.cse .gs-webResult .gs-visibleUrl, .gs-webResult .gs-visibleUrl, .cse .gs-webResult .gs-visibleUrl-short, .gs-webResult .gs-visibleUrl-short, .gs-imageResult .gs-visibleUrl, .gs-imageResult .gs-visibleUrl-short {
    color: #bdbdbd !important;
    font-weight: normal !important;
    font-size: 14px !important;
    font-style: italic !important;
    font-family: OpenSans, Arial, Helvetica, Sans-serif !important;
}

.cse .gsc-control-cse, .gsc-control-cse {
    background-color: transparent !important;
    border: 0 !important;
    padding: 0 !important;
}

.cse .gsc-cursor-box, .gsc-cursor-box {
    border-top: 1px solid #dfdfde !important;
    padding: 30px 12px 10px 12px !important;
}

.cse .gsc-results .gsc-cursor-page.gsc-cursor-current-page, .gsc-results .gsc-cursor-page.gsc-cursor-current-page {
    background-color: #e5e5e5 !important;
    text-shadow: none !important;
}

.cse form.gsc-search-box, form.gsc-search-box {
    padding: 4px 0 0 2px !important;
    margin-bottom: 5px !important;
}

.cse input.gsc-input, input.gsc-input {
    width: 100% !important;
    height: 40px !important;
    border: 1px solid #bdbdbd !important;
    -moz-border-radius: 0 !important;
    -webkit-border-radius: 0 !important;
    border-radius: 0 !important;
    padding: 5px !important;
    margin: 0 !important;
    color: #000 !important;
    font-size: 14px !important;
    font-family: OpenSans, Arial, Helvetica, Sans-serif !important;
}

.cse input.gsc-search-button, input.gsc-search-button {
    width: 100% !important;
    height: 40px !important;
    background-color: #e2001a !important;
    border: none !important;
    border: 0 !important;
    -moz-border-radius: 0 !important;
    -webkit-border-radius: 0 !important;
    border-radius: 0 !important;
    text-align: center !important;
    color: #fff !important;
    font-size: 18px !important;
    font-family: OpenSansBold, Arial, Helvetica, Sans-serif !important;
    font-weight: normal !important;
    text-transform: uppercase !important;
    cursor: pointer !important;
    vertical-align: middle !important;
    padding: 0 40px 0 40px !important;
    margin: 0 !important;
}

.cse input.gsc-search-button:hover, input.gsc-search-button:hover {
    background-color: #ff0000 !important;
    color: #fff !important;
}

.gs-result .gs-title, .gs-result .gs-title {
    text-decoration: none !important;
}

.gs-web-image-box {
    display: none !important;
}

.gsc-above-wrapper-area {
    border: 0 !important;
}

.gsc-adBlock {
    display: none !important;
}

.gcsc-branding-text {
    display: none !important;
}

.gcsc-branding-text-name {
    display: none !important;
}

.gsc-orderby-label {
    color: #b0c9e6 !important;
    font-size: 20px !important;
    font-family: OpenSansExtraBold, Arial, Helvetica, Sans-serif !important;
    line-height: 22px !important;
}

.gsc-result-info {
    color: #b0c9e6 !important;
    font-size: 20px !important;
    font-family: OpenSansExtraBold, Arial, Helvetica, Sans-serif !important;
    line-height: 22px !important;
    padding-left: 2px !important;
}

.gsc-selected-option-container {
    background-color: #fff !important;
}

.gsc-results .gsc-cursor-box .gsc-cursor-page {
    padding: 10px !important;
    margin-bottom: 10px;
    border: 0 !important;
    background-color: #fff;
    color: #e2001a !important;
    font-size: 24px !important;
    font-family: OpenSans, Arial, Helvetica, Sans-serif !important;
    text-decoration: none !important;
    display: inline-block !important;
}

.gsc-results .gsc-cursor-box .gsc-cursor-page:hover {
    color: #fff !important;
    background-color: #e2001a !important;
}

.gsc-table-cell-snippet-close, .gs-promotion-text-cell {
    padding: 0 !important;
}

.gsc-table-cell-thumbnail, .gs-promotion-image-cell {
    padding: 0 !important;
}

.gsc-webResult .gsc-result {
    border: 0 !important;
    padding: 0 12px 0 12px !important;
}

a.gs-title, a.gs-title b {
    color: #e2001a !important;
    font-size: 20px !important;
    font-family: OpenSans, Arial, Helvetica, Sans-serif !important;
    font-weight: normal !important;
    line-height: 24px !important;
    text-decoration: none !important;
    text-transform: uppercase !important;
}

a.gs-title:hover, a.gs-title:hover b {
    color: #ff0000 !important;
}

a.gcsc-branding-clickable {
    display: none !important;
}

img.gcsc-branding-img-noclear {
    display: none !important;
}

td.gsc-clear-button {
    padding-left: 10px !important;
    padding-right: 10px !important;
}

td.gsc-input {
    padding-right: 5px !important;
}

td.gsc-search-button {
    padding-left: 0 !important;
    padding-right: 0 !important;
}

/* Fin des styles pour la recherche Google */

.actualite-grande {
    padding-top: 30px;
}

.actualite-grande .contenu {
    position: absolute;
    z-index: 1;
    right: 0;
    top: 0;
    width: 34%;
    height: 100%;
    overflow: hidden;
}

.actualite-grande .contenu:hover {
    width: 34.2%;
}

.actualite-grande .contenu a {
    display: block;
    width: 100%;
    height: 100%;
    background: url(/images/fond1.png) repeat;
    padding: 20px 30px 0 30px;
    color: #fff;
    font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
}

.actualite-grande .contenu a:hover {
    background-image: none;
    background-color: #e2001a;
}

.actualite-grande .contenu a span.lienpicto {
    display: inline-block;
    width: 17px;
    height: 14px;
    background: url(/images/fleche1.png) no-repeat;
    background-size: 17px 14px;
    margin-left: 5px;
}

.actualite-grande .contenu a span.lientexte {
    display: block;
    padding-top: 20px;
    font-size: 18px;
    font-weight: bold;
}

.actualite-grande .contenu a strong {
    display: block;
    font-size: 18px;
    line-height: 22px;
    padding-bottom: 5px;
}

.actualite-grande .lien {
    position: absolute;
    z-index: 5;
    left: 20px;
    top: 20px;
}

.actualite-grande .lien a {
    display: block;
    background-color: #e2001a;
    border: 1px solid #e2001a;
    padding: 4px;
    color: #fff;
    font-size: 14px;
    text-transform: uppercase;
}

.actualite-grande .lien a:hover {
    background-color: #fff;
    color: #e2001a;
}

.actualite-grande .photo {
    display: block;
}

.actualite-grande .zone {
    position: relative;
}

.actualite-petite {
    padding-top: 30px;
}

.actualite-petite .contenu {
    position: absolute;
    z-index: 1;
    bottom: 0;
    width: 100%;
}

.actualite-petite .contenu a {
    display: block;
    min-height: 84px;
    background: url(/images/fond1.png) repeat;
    padding: 20px;
    color: #fff;
    font-size: 14px;
    text-transform: uppercase;
}

.actualite-petite .contenu a:hover {
    background-image: none;
    background-color: #e2001a;
    min-height: 87px;
    padding-bottom: 23px;
}

.actualite-petite .contenu a strong {
    display: block;
    font-size: 18px;
}

.actualite-petite .lien {
    position: absolute;
    z-index: 5;
    right: 20px;
    top: 20px;
}

.actualite-petite .lien a {
    display: block;
    background-color: #e2001a;
    border: 1px solid #e2001a;
    padding: 4px;
    color: #fff;
    font-size: 14px;
    text-transform: uppercase;
}

.actualite-petite .lien a:hover {
    background-color: #fff;
    color: #e2001a;
}

.actualite-petite .photo {
    display: block;
}

.actualite-petite .zone {
    position: relative;
}

.avisclient {
    padding: 5px 15px 5px 15px;
}

.avisclient-contenu {
    margin-top: 15px;
    padding-right: 0;
    color: #4e6f86;
    font-size: 14px;
    line-height: 16px;
}

.avisclient-contenu .date {
    display: block;
    color: #bdbdbd;
    font-size: 12px;
    margin: 0;
    padding: 0 0 10px 0;
}

.avisclient-contenu .note {
    display: block;
    width: 32px;
    height: 32px;
    color: #e2001a;
    font-size: 14px;
    font-weight: bold;
    margin: 0 0 5px 5px;
    padding: 4px 0 0 0;
    float: right;
    background: url(/images/avis-bulle.png) no-repeat;
    background-size: 32px 32px;
    text-align: center;
    overflow: hidden;
}

.avisclient-contenu img {
    border: 0;
    margin: 0 7px 0 0;
}

.avisclient-contenu p {
    margin: 0;
    padding: 0;
    color: #757575;
    font-size: 14px;
    line-height: 16px;
}

.avisclient-notes {
    padding: 10px 10px 6px 10px;
    background-color: #f2f2f2;
}

.avisclient-notes img {
    border: 0;
    margin: 0 1px 4px 1px;
}

.avisclient-notes li {
    display: block;
    list-style-type: none;
    list-style-position: outside;
    text-align: left;
    color: #757575;
    font-size: 12px;
    font-size: 13px;
    vertical-align: middle;
}

.avisclient-produit {
    background-color: #f2f2f2;
    padding: 10px 10px 0 10px;
    color: #000;
    font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
}

.avisclient-produit-notes {
    margin-top: 15px;
    padding-left: 0;
    padding-right: 0;
}

.avisclients {
    padding: 10px 30px 0 30px;
}

.avisclients .avisclients-nom {
    padding-top: 15px;
    padding-bottom: 0;
}

.avisclients .avisclients-entete {
    padding-top: 15px;
}

.avisclients .avisclients-lien {
    padding-right: 0;
}

.avisclients-bas {
    display: block;
    height: 10px;
}

.avisclients-entete {
    text-align: center;
    margin: 0;
    padding: 0 25px 0 25px;
}

.avisclients-entete .libelle {
    margin: 0 5px 0 0;
    color: #000;
    font-size: 18px;
}

.avisclients-entete .nb {
    margin: 0 0 0 5px;
    color: #000;
    font-size: 18px;
}

.avisclients-entete .note {
    display: inline-table;
    width: auto;
    height: 30px;
    background-image: none;
    background-color: #e5e5e5;
    margin: 0 0 0 5px;
    padding: 0 5px 0 5px;
    color: #757575;
    font-size: 18px;
    line-height: 30px;
    float: none;
}

.avisclients-entete .note strong {
    color: #000;
}

.avisclients-entete .pictos {
    display: inline-table;
    height: 30px;
    background-color: #e5e5e5;
    margin: 0;
    padding: 0 5px 0 5px;
    color: #fff;
    font-size: 18px;
    line-height: 30px;
}

.avisclients-entete .pictos img {
    border: 0;
    margin: 0 1px 0 1px;
    vertical-align: middle;
}

.avisclients-lien {
    display: block;
    text-align: right;
    padding-top: 15px;
}

.avisclients-lien a {
    color: #e2001a;
    font-size: 14px;
}

.avisclients-lien a:hover {
    color: #ff0000;
}

.avisclients-lien a .plus {
    vertical-align: middle;
    margin: 0 0 0 4px;
    display: inline-block;
    width: 41px;
    height: 41px;
    background: url(/images/avis-lien.png) no-repeat;
    background-size: 41px 82px;
}

.avisclients-lien a:hover .plus {
    background: url(/images/avis-lien.png) no-repeat scroll 0 -41px;
    background-size: 41px 82px;
}

.avisclients-nom {
    text-align: center;
    color: #000;
    font-size: 24px;
    line-height: 26px;
    text-transform: uppercase;
    padding-bottom: 10px;
}

.avisclients-titre {
    display: block;
    background-color: #e2001a;
    color: #fff;
    font-size: 24px;
    text-transform: uppercase;
    line-height: 26px;
    padding: 10px 15px 10px 15px;
    text-align: center;
}

.b2f {
    padding-top: 25px;
    padding-bottom: 15px;
    text-align: right;
    font-size: 12px;
}

.b2f a {
    color: #e2001a;
    font-weight: normal;
    text-decoration: none;
}

.b2f a:hover {
    color: #ff0000;
}

.bonsplans-choix {
    display: block;
    padding: 10px;
    background-color: #e5e5e5;
    text-align: center;
}

.bonsplans-choix a {
    color: #e2001a;
}

.bonsplans-choix a:hover {
    color: #ff0000;
}

.bonsplans-choix .separateur {
    display: inline-block;
    width: 11px;
    height: 14px;
    border-right: 1px solid #757575;
    margin-right: 10px;
    vertical-align: middle;
}

.bonsplans-choix-libelle {
    display: block;
    margin-top: 20px;
    padding: 10px;
    background-color: #bdbdbd;
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    font-size: 18px;
    line-height: 20px;
}

.bonsplans-choix-retour {
    display: block;
}

.bonsplans-choix-retour a {
    display: block;
    border: 1px solid #e2001a;
    margin-top: -1px;
    padding: 10px;
    text-align: center;
    color: #e2001a;
}

.bonsplans-choix-retour a:hover {
    border: 1px solid #ff0000;
    color: #ff0000;
}

.bonsplans-contenu {
    padding-top: 15px;
    padding-left: 0;
}

.bonsplans-contenu .lien {
    display: block;
    text-align: right;
    padding-top: 10px;
}

.bonsplans-contenu .texte {
    display: block;
}

.bonsplans-contenu h2 {
    color: #000;
    font: 24px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 26px;
}

.bonsplans-photo {
    padding-top: 15px;
}

.bonsplans-separation {
    display: block;
    border-top: 1px solid #e2001a;
    margin-top: 15px;
}

.bonsplans-titre span {
    display: block;
    background-color: #e2001a;
    padding: 15px;
    color: #fff;
    font-size: 24px;
    line-height: 26px;
    text-transform: uppercase;
}

.bonsplans-titre-zone {
    padding-top: 30px;
}

.bouton-comparateur {
    display: block;
    margin-bottom: 1px;
}

.bouton-comparateur a {
    display: block;
    background-color: #e5e5e5;
    text-align: center;
    color: #000;
    font-size: 14px;
    line-height: 16px;
    font-weight: normal;
    padding: 15px 10px 15px 10px;
}

.bouton-comparateur a:hover {
    background-color: #ff0000;
    color: #fff;
    text-decoration: none;
}

.bouton-comparateur a strong {
    color: #e2001a;
    font-weight: normal;
    font: 24px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 26px;
    text-transform: uppercase;
}

.bouton-comparateur a:hover strong {
    background-color: #ff0000;
    color: #fff;
}

.bouton-comparer-bulle-fiche {
    position: absolute;
    width: 220px;
    height: auto;
    left: 0;
    top: -5px;
    z-index: 60;
    border: 1px solid #000;
    text-align: left;
    background-color: #fff;
    padding: 10px;
    text-align: center;
}

.cartographie {
    padding: 0;
}

.cartographie-zone {
    display: block;
    width: 100%;
    border: 1px solid #e2001a;
    padding: 5px 5px 0 5px;
    margin: 0;
}

.cartographie-zone iframe {
    width: 100%;
    height: 750px;
}

.connaitre-bloc1 {
    position: relative;
    width: 100%;
    height: 330px;
    background-repeat: no-repeat !important;
    background-position: center !important;
    background-size: cover !important;
}

.connaitre-bloc2 {
    position: relative;
    width: 100%;
    height: 330px;
    background-repeat: no-repeat !important;
    background-position: center !important;
    background-size: cover !important;
}

.connaitre-bloc3-m {
    display: none;
}

.connaitre-bloc-grand-libelle {
    display: block;
    padding: 30px 10px 30px 10px;
    text-align: center;
    text-transform: uppercase;
}

.connaitre-bloc-grand-libelle a {
    display: block;
    color: #fff;
    font: 31px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    line-height: 35px;
}

.connaitre-bloc-grand-libelle a .picto {
    display: block;
    width: 34px;
    height: 35px;
    background: url(/images/plus.png) no-repeat;
    background-size: 34px 70px;
    margin: 0 auto 15px auto;
}

.connaitre-bloc-grand-libelle a:hover .picto {
    background: url(/images/plus.png) no-repeat scroll 0 -35px;
    background-size: 34px 70px;
}

.connaitre-bloc-grand-libelle a strong {
    font: 37px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    line-height: 41px;
}

.connaitre-bloc-libelle {
    position: absolute;
    width: 100%;
    bottom: 0;
}

.connaitre-bloc-libelle a {
    display: block;
    background-color: #e2001a;
    padding: 18px 20px 18px 20px;
    color: #fff;
    font: 20px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 22px;
}

.connaitre-bloc-libelle a .picto {
    display: block;
    width: 24px;
    height: 24px;
    background: url(/images/plus2.png) no-repeat;
    background-size: 24px 48px;
    float: right;
    margin: 0 0 0 10px;
}

.connaitre-bloc-libelle a strong {
    font-family: OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    line-height: 22px;
}

.connaitre-bloc-libelle a:hover {
    background-color: #ff0000;
}

.connaitre-bloc-lien {
    /*    position: absolute;*/
    width: 100%;
    right: 0;
    height: 330px;
}

@media screen and (min-width: 1024px) {
    .connaitre-tableau2 .connaitre-bloc-lien {
        width: calc(100% - 316px);
    }
}

.connaitre-bloc-lien a {
    display: block;
    height: 330px;
}

.connaitre-contenu {
    display: table;
    position: relative;
    width: 100%;
    height: 660px;
    background: url(/images/bloc3-ombre.png) repeat-x bottom;
}

.connaitre-contenu1 {
    display: table-cell;
/ / width: 65 %;
    height: 660px;
    text-align: left;
    vertical-align: bottom;
}

#accueilBlocDiaporama_HIVER .connaitre-contenu1 {
/ / width: 70 %;
}

#accueilBlocDiaporama_ .connaitre-contenu1 {
/ / width: 100 %;
}

.connaitre-tableau2 .connaitre-contenu1 {
/ / width: 100 %;
}

.connaitre-contenu2 {
    display: table-cell;
    width: 35%;
    height: 660px;
    text-align: left;
    vertical-align: top;
    padding: 15px 15px 15px 0;
}

.connaitre-news {
    display: block;
    height: 600px;
    overflow: auto;
    padding: 5px;
}

.connaitre-news-fond {
    display: block;
    height: 630px;
    background-color: #fff;
    padding: 10px;
}

.connaitre-news-contenu {
    display: block;
    padding: 20px 0 20px 0;
    border-bottom: 1px solid #d5d9df;
}

.connaitre-news-contenu a {
    display: block;
    color: #738294;
    font: 12px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    line-height: 14px;
}

.connaitre-news-contenu a:hover {
    color: #3f4751;
}

.connaitre-news-contenu a .picto {
    display: block;
    width: 24px;
    height: 23px;
    background: url(/images/news-fleche.png) no-repeat;
    background-size: 24px 46px;
    float: right;
    margin: 0 0 20px 20px;
}

.connaitre-news-contenu a:hover .picto {
    background: url(/images/news-fleche.png) no-repeat scroll 0 -23px;
    background-size: 24px 46px;
}

.connaitre-news-contenu a strong {
    font: 16px RobotoCondensedBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    line-height: 18px;
}

.connaitre-news-lien {
    display: block;
    padding: 20px 0 20px 0;
    text-align: center;
}

.connaitre-news-lien a {
    display: block;
    color: #e2001a;
    font: 16px RobotoCondensedBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    line-height: 18px;
}

.connaitre-news-lien a:hover {
    color: #ff0000;
}

.connaitre-news-lien a .picto {
    display: inline-block;
    width: 23px;
    height: 23px;
    background: url(/images/news-lien.png) no-repeat;
    background-size: 23px 46px;
    margin: 0 10px 2px 0;
    vertical-align: middle;
}

.connaitre-news-lien a:hover .picto {
    background: url(/images/news-lien.png) no-repeat scroll 0 -23px;
    background-size: 23px 46px;
}

.connaitre-news-titre {
    display: block;
    padding: 20px 20px 0 20px;
    color: #373737;
    font: 20px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 22px;
}

.connaitre-news-titre strong {
    font-family: OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    line-height: 22px;
}

.connaitre-tableau {
    display: table;
    width: 100%;
    margin-top: 20px;
}

.connaitre-tableau1 {
    display: table-cell;
    width: 316px;
    height: 660px;
    text-align: left;
    vertical-align: top;
}

.connaitre-tableau2 {
    display: table-cell;
    width: auto;
    height: 660px;
    text-align: left;
    vertical-align: top;
    background-repeat: no-repeat !important;
    background-position: center !important;
    background-size: cover !important;
}

.connaitre-titre {
    padding: 100px 40px 0 40px;
    color: #373737;
    font: 26px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 30px;
}

.connaitre-titre strong {
    font-family: OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    line-height: 30px;
}

.contain-to-grid {
    background-color: #fff;
    padding-top: 5px;
}

.contain-to-grid .top-bar {
    max-width: 100em;
}

.contenu-accueil {
    padding-top: 30px;
    text-align: center;
}

.contenu-rm-accueil {
    padding-top: 0px;
    padding-bottom: 20px;
    text-align: center;
}

.contenu-poi1 {
    padding-top: 15px;
}

.contenu-poi2 {
    padding-top: 15px;
}

.contenu-wysiwyg {
    padding-top: 25px;
}

.contenu-wysiwyg-vel td {
    font-size: 14px;
}

.contenu-wysiwyg-vel ul {
    margin-left: 0;
}

.criteres-affichage {
    background-color: #e2001a;
}

.criteres-affichage1 {
    padding: 15px 15px 15px 30px;
}

.criteres-affichage1 .bouton a {
    display: inline-block;
    background-color: #ec777b;
    text-align: center;
    color: #fff;
    font-size: 16px;
    line-height: 18px;
    text-transform: uppercase;
    font-weight: normal;
    padding: 9px 15px 9px 15px;
    margin-left: 1px;
}

.criteres-affichage1 .bouton a:hover {
    background-color: #ff0000;
    color: #fff;
}

.criteres-affichage1 .bouton-on a {
    display: inline-block;
    background-color: #fff;
    text-align: center;
    color: #e2001a;
    font-size: 16px;
    line-height: 18px;
    text-transform: uppercase;
    font-weight: normal;
    padding: 9px 15px 9px 15px;
    margin-left: 1px;
}

.criteres-affichage1 .bouton-on a:hover {
    background-color: #ff0000;
    color: #fff;
}

.criteres-affichage1 .libelle {
    display: inline-block;
    color: #fff;
    font-size: 16px;
    line-height: 18px;
    text-transform: uppercase;
    padding: 0 10px 0 0;
    margin: 0;
}

.criteres-affichage2 {
    padding: 15px 30px 15px 8px;
    text-align: right;
}

.criteres-affichage2 .libelle {
    display: inline-block;
    color: #fff;
    font-size: 16px;
    line-height: 18px;
    text-transform: uppercase;
    padding: 0;
    margin: 0;
}

.criteres-affichage2 select {
    width: 75%;
    background: url(/images/select.png) no-repeat right #fff;
    background-size: 18px 8px;
    border: 0;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    color: #b2b2b2;
    font-size: 14px;
    text-transform: uppercase;
    background-color: #fff;
    border: 1px solid #fff;
    margin: 0 0 0 10px;
    padding: 5px 20px 5px 5px;
    cursor: pointer;
}

.criteres-affichage3 {
    padding: 15px 7px 15px 30px;
}

.criteres-affichage3 .bouton a {
    display: inline-block;
    background-color: #ec777b;
    text-align: center;
    color: #fff;
    font-size: 16px;
    line-height: 18px;
    text-transform: uppercase;
    font-weight: normal;
    padding: 9px 15px 9px 15px;
    margin-left: 1px;
}

.criteres-affichage3 .bouton a:hover {
    background-color: #ff0000;
    color: #fff;
}

.criteres-affichage3 .bouton-on a {
    display: inline-block;
    background-color: #fff;
    text-align: center;
    color: #e2001a;
    font-size: 16px;
    line-height: 18px;
    text-transform: uppercase;
    font-weight: normal;
    padding: 9px 15px 9px 15px;
    margin-left: 1px;
}

.criteres-affichage3 .bouton-on a:hover {
    background-color: #ff0000;
    color: #fff;
}

.criteres-affichage3 .libelle {
    display: inline-block;
    color: #fff;
    font-size: 16px;
    line-height: 18px;
    text-transform: uppercase;
    padding: 0 10px 0 0;
    margin: 0;
}

#criteres-poi .bloc-contenu {
    display: block;
    padding: 10px 0 25px 10px;
    color: #313131;
    font-size: 18px;
}

#criteres-poi .bloc-contenu input {
    margin: 2px 7px 7px 0;
    vertical-align: middle;
}

#criteres-poi .bloc-titre {
    display: block;
    margin-top: 1px;
    background-color: #e5e5e5;
    color: #e2001a;
    font-size: 18px;
    font-weight: bold;
    line-height: 20px;
    text-transform: uppercase;
    padding: 10px;
}

#criteres-poi .bloc-titre a .fa-angle-down {
    display: block;
    margin: -8px 0 0 10px;
    padding: 0;
    color: #e2001a;
    font-size: 36px;
    float: right;
}

#criteres-poi .bloc-titre a .fa-angle-up {
    display: block;
    margin: -10px 0 0 10px;
    padding: 0;
    color: #e2001a;
    font-size: 36px;
    float: right;
}

#criteres-poi .bloc-titre a:hover i {
    color: #ff0000;
}

.criteres-poi-titre {
    display: block;
    margin-top: 1px;
}

.criteres-poi-titre a {
    display: block;
    background-color: #e2001a;
    color: #fff;
    font-size: 24px;
    text-transform: uppercase;
    font-weight: bold;
    line-height: 28px;
    padding: 10px;
}

.criteres-poi-titre a:hover {
    background-color: #ff0000;
}

.dernieres-offres {
    display: block;
    margin-bottom: 10px;
}

.dernieres-offres-liens {
    display: block;
    padding: 10px 0 0 0;
}

.dernieres-offres-liens a {
    display: block;
    color: #000;
    font-size: 16px;
    line-height: 18px;
    font-weight: normal;
}

.dernieres-offres-liens a:hover {
    color: #ff0000;
}

.dernieres-offres-liens li {
    padding: 0 0 10px 16px;
    margin: 0;
    list-style-type: none;
    list-style-position: outside;
    background: url(/images/dernieres-offres-fleche.png) no-repeat;
    background-size: 6px 12px;
    line-height: 13px;
}

.dernieres-offres-liens a strong {
    color: #e2001a;
    text-transform: uppercase;
}

.dernieres-offres-liens a:hover strong {
    color: #ff0000;
}

.dernieres-offres-liens ul {
    padding: 0;
    margin: 0;
}

.dernieres-offres-titre {
    display: block;
    border-bottom: 1px solid #000;
    text-align: center;
    color: #000;
    font: 24px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 28px;
    padding: 20px 0 20px 0;
}

.detailActualite .actualite-contenu {
    display: block;
}

.detailActualite .actualite-contenu .image-a-droite {
    max-width: 400px;
}

.detailActualite .actualite-lien {
    display: block;
    padding-top: 15px;
    text-align: right;
    clear: both;
}

.detailActualite .actualite-lien a {
    display: inline-block;
    color: #fff;
    font-size: 20px;
    font-family: DinBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    background-color: #e2001a;
    padding: 15px;
}

.detailActualite .actualite-lien a:hover {
    background-color: #ff0000;
    color: #fff;
}

.detailActualite .actualite-titre {
    display: block;
    padding-bottom: 15px;
    color: #000;
    font: 30px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 36px;
    text-transform: uppercase;
}

.detailAgenda .agenda-contenu {
    display: block;
}

.detailAgenda .agenda-contenu .image-a-droite {
    max-width: 400px;
}

.detailAgenda .agenda-date {
    display: block;
    padding-bottom: 15px;
    color: #000;
    font: 30px DinRegular, Arial, Helvetica, Sans-serif;
    line-height: 36px;
    text-transform: uppercase;
}

.detailAgenda .agenda-lien {
    display: block;
    padding-top: 15px;
    text-align: right;
    clear: both;
}

.detailAgenda .agenda-lien a {
    display: inline-block;
    color: #fff;
    font-size: 20px;
    font-family: DinBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    background-color: #e2001a;
    padding: 15px;
}

.detailAgenda .agenda-lien a:hover {
    background-color: #ff0000;
    color: #fff;
}

.detailAgenda .agenda-titre {
    display: block;
    padding-bottom: 15px;
    color: #000;
    font: 30px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 36px;
    text-transform: uppercase;
}

.direct {
    display: block;
    border-top: 1px solid #dadada;
}

.direct:hover {
    background-color: #f9f9f9;
}

.direct-contenu {
    padding-top: 5px;
}

.direct-contenu, .direct-contenu a {
    color: #494949;
    font: 14px OpenSans, Arial, Helvetica, Sans-serif;
    font-style: italic;
    line-height: 18px;
}

.direct-contenu img, .direct-contenu a img {
    display: block;
    max-height: 20px;
    margin: 6px 15px 0 0;
    float: left;
}

.direct-contenu strong, .direct-contenu a strong {
    display: block;
    padding-bottom: 5px;
    color: #b0c9e7;
    font: 28px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 30px;
    font-weight: normal;
}

.direct-photo {
    padding-left: 25px;
}

.direct-picto {
    text-align: center;
    padding-top: 15px;
}

.direct-picto .picto, .direct-picto a .picto {
    display: inline-block;
    width: 24px;
    height: 24px;
    background: url(/images/plus4.png) no-repeat;
    background-size: 24px 48px;
}

.direct-picto .picto:hover, .direct-picto a:hover .picto {
    background: url(/images/plus4.png) no-repeat scroll 0 -24px;
    background-size: 24px 48px;
}

.direct-titre {
    padding: 57px 15px 20px 15px;
    color: #738294;
    font: 26px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 30px;
}

.direct-titre strong {
    font-family: OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    line-height: 30px;
}

.direct-zone a {
    display: table;
    width: 100%;
    height: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
}

.entite-live-fond {
    display: block;
    background-color: #e2001a;
    overflow: hidden;
}

.entite-live2 {
    height: 46px;
    color: #fff;
    font: 14px OpenSans, DinRegular, Arial, Helvetica, Sans-serif;
    font-style: italic;
    line-height: 46px;
    padding-left: 0;
    padding-right: 0;
}

.entite-live2 span {
    line-height: 16px;
    vertical-align: middle;
    display: inline-block;
}

.entite-live3 {
    padding-right: 0;
}

.evenement-calendrier {
    display: block;
    padding: 20px 0 20px 0;
    border-bottom: 1px solid #cedef0;
}

.evenement-calendrier a {
    display: block;
    color: #fff;
    font: 12px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    line-height: 14px;
}

.evenement-calendrier a:hover {
    color: #3f4751;
}

.evenement-calendrier a strong {
    font: 16px RobotoCondensedBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    line-height: 18px;
}

.evenements {
    padding-right: 0;
}

.evenements .evenement .date {
    display: block;
    height: 18px;
    margin-top: 10px;
    padding: 0 10px 0 10px;
    color: #505050;
    font: 14px OpenSansLight, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    font-style: italic;
    overflow: hidden;
}

.evenements .evenement .descriptif {
    display: block;
    max-height: 30px;
    margin-top: 10px;
    padding: 0 10px 0 10px;
    color: #494949;
    font: 12px OpenSans, Arial, Helvetica, Sans-serif;
    font-style: italic;
    line-height: 14px;
    overflow: hidden;
}

.evenements .evenement .libelle {
    display: block;
    max-height: 68px;
    margin-top: 10px;
    padding: 0 10px 0 10px;
    color: #738294;
    font: 20px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 22px;
    overflow: hidden;
}

.evenements .evenement .lien {
    display: block;
    margin-top: 10px;
    padding: 0 10px 0 10px;
}

.evenements .evenement .lien .picto {
    display: inline-block;
    width: 24px;
    height: 24px;
    background: url(/images/plus3.png) no-repeat;
    background-size: 24px 48px;
}

.evenements .evenement .photo {
    display: block;
    max-height: 240px;
    overflow: hidden;
}

.evenements .evenement .slick-dots {
    position: relative;
    margin: 0;
    padding: 15px;
    bottom: 0;
    text-align: center;
}

.evenements .evenement .slick-dots li {
    margin: 5px;
    width: 15px;
    height: 15px;
    line-height: 15px;
}

.evenements .evenement .slick-dots li button::before {
    color: #738294;
    font-size: 16px;
}

.evenements .evenement .slick-dots li.slick-active button::before {
    color: #738294;
    opacity: 1 !important;
}

.evenements .evenement .slick-next::before {
    font-family: FontAwesome;
    content: "\f105" !important;
}

.evenements .evenement .slick-prev::before, .evenements .evenement .slick-next::before {
    color: #738294;
    font-size: 50px;
    line-height: inherit;
}

.evenements .evenement .slick-prev::before {
    font-family: FontAwesome;
    content: "\f104" !important;
}

.evenements .evenement button {
    padding: 0 !important;
    margin: 0;
    width: 40px;
    height: 40px;
    position: relative;
}

.evenements .evenement button.slick-next {
    margin: 15px 30px 0 0;
    float: right;
}

.evenements .evenement button.slick-prev {
    margin: 15px 0 0 30px;
    float: left;
}

.evenements .evenement .slick-slide {
    height: 430px;
    border-left: 1px solid #d5d9df;
}

.evenements .evenement div {
    text-align: center;
    overflow: hidden;
}

.evenements .evenement div a {
    display: block;
    width: 100%;
    height: 100%;
}

.evenements-calendrier {
    padding-left: 0;
}

.evenements-calendrier1 {
    display: table-cell;
    width: 50%;
    padding: 15px;
    border-right: 1px solid #cedef0;
    text-align: left;
    vertical-align: top;
}

.evenements-calendrier2 {
    display: table-cell;
    width: 50%;
    padding: 15px;
    text-align: left;
    vertical-align: top;
}

.evenements-calendrier-contenu {
    display: block;
    width: 100%;
    height: 470px;
    padding: 5px;
    overflow: auto;
}

.evenements-calendrier-fond {
    display: block;
    background-color: #b0c9e6;
    height: 480px;
    padding: 5px;
}

.evenements-calendrier-lien {
    display: block;
    padding: 20px 0 20px 0;
    text-align: center;
}

.evenements-calendrier-lien a {
    display: block;
    color: #738294;
    font: 16px RobotoCondensedBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    line-height: 18px;
}

.evenements-calendrier-lien a:hover {
    color: #3f4751;
}

.evenements-calendrier-lien a .picto {
    display: inline-block;
    width: 23px;
    height: 23px;
    background: url(/images/evenements-lien.png) no-repeat;
    background-size: 23px 46px;
    margin: 0 10px 2px 0;
    vertical-align: middle;
}

.evenements-calendrier-lien a:hover .picto {
    background: url(/images/evenements-lien.png) no-repeat scroll 0 -23px;
    background-size: 23px 46px;
}

.evenements-calendrier-mois {
    display: inline-block;
    padding-bottom: 5px;
    color: #738294;
    font: 14px OpenSansBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 16px;
    border-bottom: 2px solid #738294;
}

.evenements-calendrier-tableau {
    display: table;
    width: 100%;
}

.evenements-titre {
    padding: 60px 40px 0 40px;
    color: #373737;
    font: 26px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 30px;
}

.evenements-titre strong {
    font-family: OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    line-height: 30px;
}

.evenements-zone {
    margin: 20px auto;
}

.rm-domaineskiable-zone {
    margin: 75px auto;
}

.fiche-avis {
    display: block;
    color: #757575;
    font-size: 18px;
    line-height: 20px;
    text-align: center;
    padding-bottom: 8px;
}

.fiche-avis a {
    display: block;
    margin-top: -5px;
    color: #e2001a;
    font-size: 14px;
    line-height: 16px;
    font-weight: normal;
}

.fiche-avis a:hover {
    color: #ff0000;
}

.fiche-avis img {
    margin: -5px 1px 0 1px;
}

.fiche-avis strong {
    color: #000;
}

.fiche-bouton-poi {
    display: block;
    padding-bottom: 30px;
}

.fiche-bouton-poi a {
    display: block;
    border: 1px solid #e2001a;
    padding: 10px;
    color: #e2001a;
    font-size: 24px;
    line-height: 28px;
    text-transform: uppercase;
}

.fiche-bouton-poi a:hover {
    background-color: #e5e5e5;
    border: 1px solid #ff0000;
    color: #ff0000;
}

.fiche-entete-gauche .classement {
    margin: 0 0 6px 0;
    vertical-align: middle;
}

.fiche-entete-gauche .fournisseur {
    display: block;
    color: #b0c9e6;
    font: 40px OpenSansExtraBold, Arial, Helvetica, Sans-serif;
    line-height: 48px;
    text-transform: uppercase;
}

.fiche-entete-gauche .produit {
    display: block;
    padding-top: 5px;
    color: #b0c9e6;
    font: 22px OpenSansExtraBold, Arial, Helvetica, Sans-serif;
    line-height: 26px;
}

.fiche-entete-gauche .promo {
    display: block;
    padding-top: 15px;
    color: #000;
    font: 18px OpenSans, Arial, Helvetica, Sans-serif;
    line-height: 22px;
    text-transform: uppercase;
}

.fiche-entete-gauche .promo img {
    width: 61px;
    height: 31px;
    float: left;
    margin: 2px 10px 2px 0;
}

.fiche-entete-gauche .zonegeo {
    display: block;
    padding-top: 10px;
    color: #494949;
    font: 18px OpenSans, Arial, Helvetica, Sans-serif;
    line-height: 22px;
}

.fiche-entete-gauche h1, .fiche-entete-gauche h2 {
    margin: 0;
}

.fiche-libelle-produit-poi {
    color: #000;
    font: 48px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 54px;
    margin: 0;
}

.fiche-photo-grande {
    text-align: center;
    padding-bottom: 5px;
}

.fiche-photos-petites {
    text-align: center;
    height: 55px;
    overflow: hidden;
}

.fiche-photos-petites div.carousel img {
    border: 4px solid #fff;
    height: 50px;
    margin: 0 5px 5px 5px;
}

.fiche-photos-petites > div:not(.clearing-blackout) img {
    border: 5px solid #fff;
    height: 50px;
    margin: 0 1px 5px 1px;
}

.fiche-photos-petites li {
    list-style-type: none;
    list-style-position: outside;
    display: inline-block;
}

.fiche-photos-petites ul {
    padding: 0;
    margin: 0;
}

.fiche-photos-petites-fleche1 {
    text-align: center;
    height: 50px;
}

.fiche-photos-petites-fleche1 a i {
    color: #fff;
    font-size: 60px;
    line-height: 45px;
}

.fiche-photos-petites-fleche1 a:hover i {
    color: #e5e5e5;
}

.fiche-photos-petites-fleche2 {
    text-align: center;
    height: 50px;
}

.fiche-photos-petites-fleche2 a i {
    color: #fff;
    font-size: 60px;
    line-height: 45px;
}

.fiche-photos-petites-fleche2 a:hover i {
    color: #e5e5e5;
}

.fiche-pictos {
    text-align: right;
    padding: 10px 40px 0 25px;
}

.fiche-pictos a i {
    color: #fff;
    font-size: 36px;
    vertical-align: middle;
    margin-bottom: 10px;
    margin-left: 12px;
}

.fiche-pictos a:hover i {
    color: #e5e5e5;
    text-decoration: none;
}

.fiche-pictos a.envoiami {
    display: inline-block;
    width: 29px;
    height: 35px;
    background: url(/images/picto-envoiami.png) no-repeat;
    background-size: 29px 70px;
    vertical-align: middle;
    margin-bottom: 10px;
    margin-left: 12px;
}

.fiche-pictos a.envoiami:hover {
    background: url(/images/picto-envoiami.png) no-repeat scroll 0 -35px;
    background-size: 29px 70px;
}

.fiche-pictos a.envoiami .at-icon-wrapper {
    display: none;
}

#fiche-poi .bloc-contenu {
    display: block;
    padding: 25px 0 0 10px;
}

#fiche-poi .bloc-contenu-localisation {
    display: block;
    padding: 0 0 10px 0;
}

#fiche-poi .bloc-contenu-localisation-zone {
    display: block;
    width: 100%;
    border: 1px solid #e2001a;
    padding: 5px 5px 0 5px;
    margin: 0;
}

#fiche-poi .bloc-contenu-localisation-zone iframe {
    width: 100%;
    height: 500px;
}

#fiche-poi .bloc-contenu-photos {
    display: block;
    text-align: center;
}

#fiche-poi .bloc-contenu-photos-fleche1 {
    text-align: center;
    height: 130px;
}

#fiche-poi .bloc-contenu-photos-fleche1 a i {
    color: #e2001a;
    font-size: 60px;
    line-height: 130px;
}

#fiche-poi .bloc-contenu-photos-fleche1 a:hover i {
    color: #ff0000;
}

#fiche-poi .bloc-contenu-photos-fleche2 {
    text-align: center;
    height: 130px;
}

#fiche-poi .bloc-contenu-photos-fleche2 a i {
    color: #e2001a;
    font-size: 60px;
    line-height: 130px;
}

#fiche-poi .bloc-contenu-photos-fleche2 a:hover i {
    color: #ff0000;
}

#fiche-poi .bloc-contenu-photos-fond {
    display: block;
    background-color: #e5e5e5;
    padding: 0;
}

#fiche-poi .bloc-contenu-photos-petites {
    text-align: center;
    height: 130px;
    overflow: hidden;
    padding: 0;
}

#fiche-poi .bloc-contenu-photos-petites img {
    height: 120px;
    margin: 5px 1px 5px 1px;
}

#fiche-poi .bloc-contenu-photos-petites div.carousel img {
    height: 120px;
    margin: 5px 1px 5px 1px;
}

#fiche-poi .bloc-contenu-photos-petites li {
    list-style-type: none;
    list-style-position: outside;
    display: inline-block;
}

#fiche-poi .bloc-contenu-photos-petites ul {
    padding: 0;
    margin: 0;
}

#fiche-poi .bloc-titre {
    display: block;
    margin-top: 25px;
    background-color: #e2001a;
    color: #fff;
    font-size: 24px;
    font-weight: bold;
    line-height: 28px;
    text-transform: uppercase;
    padding: 10px;
}

#fiche-poi .bloc-titre a .fa-angle-down {
    display: block;
    margin: -8px 0 0 10px;
    padding: 0;
    color: #fff;
    font-size: 36px;
    float: right;
}

#fiche-poi .bloc-titre a .fa-angle-up {
    display: block;
    margin: -10px 0 0 10px;
    padding: 0;
    color: #fff;
    font-size: 36px;
    float: right;
}

#fiche-poi .bloc-titre a:hover i {
    color: #e5e5e5;
}

.fiche-poi-n-bouton1 {
    position: relative;
    width: 100%;
    background-color: #738294;
    padding: 30px;
    margin-top: -5px;
    text-align: center;
    color: #fff;
    font: 16px RobotoCondensedLight, DinBold, Arial, Helvetica, Sans-serif;
    line-height: 20px;
}

.fiche-poi-n-bouton1 .bouton {
    display: block;
}

.fiche-poi-n-bouton1 .bouton a {
    display: inline-block;
    background-color: #e2001a;
    padding: 15px 50px 15px 50px;
    color: #fff;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
}

.fiche-poi-n-bouton1 .bouton a:hover {
    background-color: #ff0000;
    text-decoration: none;
}

.fiche-poi-n-boutons {
    position: relative;
    width: 100%;
    background-color: #738294;
    padding: 25px;
    margin-top: -5px;
    text-align: center;
    color: #fff;
    font: 16px RobotoCondensedLight, DinBold, Arial, Helvetica, Sans-serif;
    line-height: 20px;
}

.fiche-poi-n-boutons .bouton {
    display: inline-block;
}

.fiche-poi-n-boutons .bouton a {
    display: inline-block;
    background-color: #e2001a;
    padding: 15px;
    margin: 5px;
    color: #fff;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
}

.fiche-poi-n-boutons .bouton a:hover {
    background-color: #ff0000;
    text-decoration: none;
}

.fiche-poi-n-contenu2 {
    padding-left: 0;
}

.fiche-poi-n-contenu-bas1, .fiche-poi-n-contenu-bas2 {
    padding: 15px 40px 15px 109px;
}

.fiche-poi-n-contenu-bas1 .chapitre, .fiche-poi-n-contenu-bas2 .chapitre {
    display: block;
    padding-top: 57px;
}

.fiche-poi-n-contenu-bas1 .chapitre-texte, .fiche-poi-n-contenu-bas2 .chapitre-texte {
    display: block;
    padding-top: 5px;
    color: #505154;
    font: 14px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
}

.fiche-poi-n-contenu-bas1 .chapitre-titre, .fiche-poi-n-contenu-bas2 .chapitre-titre {
    display: block;
    color: #b0c9e6;
    font: 18px RobotoCondensedBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 20px;
}

.fiche-poi-n-contenu-bas1 .chapitre-titre img, .fiche-poi-n-contenu-bas2 .chapitre-titre img {
    width: 44px;
    height: 45px;
    float: left;
    margin: -12px 15px 0 -59px;
}

.fiche-poi-n-contenu-carte, .fiche-poi-n-contenu-carte2 {
    display: block;
}

.fiche-poi-n-contenu-carte iframe, .fiche-poi-n-contenu-carte2 iframe {
    width: 100%;
    height: 350px;
}

.fiche-poi-n-contenu-carte2 {
    margin-top: 2px;
}

.fiche-poi-n-contenu-coordonnees {
    display: block;
    background-color: #b0c9e6;
    padding: 30px;
    margin-top: -5px;
}

.fiche-poi-n-contenu-coordonnees .texte {
    display: block;
    padding-top: 5px;
    color: #494949;
    font: 14px OpenSans, DinBold, Arial, Helvetica, Sans-serif;
    line-height: 20px;
}

.fiche-poi-n-contenu-coordonnees .texte a {
    color: #494949;
    font: 14px OpenSans, DinBold, Arial, Helvetica, Sans-serif;
    text-decoration: underline;
    word-break: break-word;
}

.fiche-poi-n-contenu-coordonnees .texte a:hover {
    color: #000;
    text-decoration: underline;
}

.fiche-poi-n-contenu-prix h2,
.fiche-poi-n-contenu-coordonnees h2 {
    color: #fff;
    font: 26px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 30px;
    text-transform: uppercase;
}

.fiche-poi-n-contenu-prix p {
    text-align: left;
    font-family: OpenSans, DinBold, Arial, Helvetica, Sans-serif;
}

.fiche-poi-n-contenu-descriptif1 {
    position: relative;
    width: 100%;
    height: auto;
    color: #494949;
}

.fiche-poi-n-contenu-descriptif1 li {
    list-style-type: none;
    list-style-position: outside;
    padding: 0;
    margin: 0 0 0 10px;
    line-height: inherit;
    list-style-image: url(/images/puce1.png);
}

.fiche-poi-n-contenu-haut {
    display: block;
}

.fiche-poi-n-contenu-haut1 {
    display: block;
    color: #738294;
    font: 16px OpenSans, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    text-decoration: underline;
    font-style: italic;
}

.fiche-poi-n-contenu-haut1 a {
    display: block;
    color: #738294;
    font: 16px OpenSans, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    text-decoration: underline;
}

.fiche-poi-n-contenu-haut1 a:hover {
    color: #505b67;
    text-decoration: underline;
}

.fiche-poi-n-contenu-haut2 {
    display: block;
    padding-top: 10px;
}

.fiche-poi-n-contenu-haut2 .capacite {
    display: inline-block;
    border: 4px solid #b0c9e7;
    padding: 10px 20px 10px 20px;
    margin: 4px 4px 4px 0;
    color: #b0c9e7;
    font: 16px OpenSansBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
}

.fiche-poi-n-contenu-haut2 .picto {
    display: block;
}

.fiche-poi-n-contenu-haut2 .picto img {
    display: block;
    height: 13px;
    margin: 15px 0 0 0;
}

.fiche-poi-n-contenu-haut2 .picto2 {
    display: inline-block;
    padding-right: 25px;
}

.fiche-poi-n-contenu-haut2 .picto2 img {
    display: block;
    height: 24px;
    margin: 15px 0 0 0;
}

.fiche-poi-n-contenu-haut2 .pieces {
    display: inline-block;
    border: 4px solid #b0c9e7;
    padding: 10px 20px 10px 20px;
    margin: 4px 4px 4px 0;
    color: #b0c9e7;
    font: 16px OpenSansBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
}

.fiche-poi-n-contenu-haut2 h1 {
    color: #b0c9e7;
    font: 40px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    text-transform: none;
    line-height: 42px;
}

.fiche-poi-n-contenu-haut3 {
    display: block;
    padding-top: 30px;
}

.fiche-poi-n-contenu-ouverture {
    display: block;
    background-color: #b0c9e6;
    padding: 30px;
    margin-top: 1px;
}

.fiche-poi-n-contenu-ouverture .texte {
    display: block;
    padding-top: 5px;
    color: #494949;
    font: 14px OpenSans, DinBold, Arial, Helvetica, Sans-serif;
    line-height: 20px;
}

.fiche-poi-n-contenu-ouverture .texte a {
    color: #494949;
    font: 14px OpenSans, DinBold, Arial, Helvetica, Sans-serif;
    text-decoration: underline;
}

.fiche-poi-n-contenu-ouverture .texte a:hover {
    color: #000;
    text-decoration: underline;
}

.fiche-poi-n-contenu-ouverture h2 {
    color: #fff;
    font: 26px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 30px;
    text-transform: uppercase;
}

.fiche-poi-n-contenu-prix {
    position: relative;
    width: 100%;
    background-color: #738294;
    padding: 30px;
    margin-top: 0;
    text-align: center;
    color: #fff;
    font: 16px RobotoCondensedLight, DinBold, Arial, Helvetica, Sans-serif;
    line-height: 20px;
}

.fiche-poi-n-contenu-prix a {
    color: #fff;
}

.fiche-poi-n-contenu-prix a:hover {
    color: #fff;
    text-decoration: underline;
}

.fiche-poi-n-contenu-prix .bouton {
    display: block;
}

.fiche-poi-n-contenu-prix .bouton a {
    display: inline-block;
    background-color: #e2001a;
    padding: 15px 50px 15px 50px;
    margin-top: 20px;
    color: #fff;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
}

.fiche-poi-n-contenu-prix .bouton a.sansMargin {
    margin-top: 0px;
}

.fiche-poi-n-contenu-prix .bouton a:hover {
    background-color: #ff0000;
    text-decoration: none;
}

.fiche-poi-n-contenu-prix strong {
    font: 50px RobotoCondensedBold, DinBold, Arial, Helvetica, Sans-serif;
    line-height: 50px;
}

.fiche-poi-n-grandephoto {
    position: relative;
    width: 100%;
    height: 580px;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-illustration {
    display: none;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone {
    position: absolute;
    width: 100%;
    height: 580px;
    margin: 0 auto 0 auto;
    padding: 0;
    text-align: center;
    overflow: hidden;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .diapo {
    position: absolute;
    width: 1700px;
    height: 580px;
    left: 50%;
    top: 0;
    margin-left: -850px;
    text-align: center;
    overflow: hidden;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .diapo img {
    width: 1700px;
    height: 580px;
    margin: 0;
    padding: 0;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos {
    position: absolute;
    width: 90px;
    height: auto;
    left: 0;
    top: 100px;
    background-color: #fff;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-video {
    display: block;
    height: 110px;
    border: 1px solid #dfdfde;
    text-align: center;
    padding-left: 5px;
    padding-right: 5px;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-video a .picto {
    display: block;
    width: 47px;
    height: 33px;
    background: url(/images/picto-video.png) no-repeat;
    background-size: 47px 66px;
    margin: 0 auto 3px auto;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-video a:hover .picto {
    background: url(/images/picto-video.png) no-repeat scroll 0 -33px;
    background-size: 47px 66px;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-video a {
    display: block;
    color: #738294;
    font: 14px OpenSans, DinBold, Arial, Helvetica, Sans-serif;
    line-height: 110px;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-video a:hover {
    color: #49586c;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-video a span {
    line-height: 14px;
    vertical-align: middle;
    display: inline-block;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-visite {
    display: block;
    height: 110px;
    border: 1px solid #dfdfde;
    border-top: 0;
    text-align: center;
    padding-left: 5px;
    padding-right: 5px;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-visite a .picto {
    display: block;
    width: 43px;
    height: 41px;
    background: url(/images/picto-visitevirtuelle.png) no-repeat;
    background-size: 43px 82px;
    margin: 0 auto 3px auto;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-visite a:hover .picto {
    background: url(/images/picto-visitevirtuelle.png) no-repeat scroll 0 -41px;
    background-size: 43px 82px;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-visite a {
    display: block;
    color: #738294;
    font: 14px OpenSans, DinBold, Arial, Helvetica, Sans-serif;
    line-height: 110px;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-visite a:hover {
    color: #49586c;
}

.fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-visite a span {
    line-height: 14px;
    vertical-align: middle;
    display: inline-block;
}

.fiche-poi-n-photos {
    padding: 8px 30px 0 45px;
}

.fiche-poi-n-photos button {
    padding: 0;
    margin: 0;
    height: 54px;
    top: 6px;
}

.fiche-poi-n-photos .slick-next::before {
    color: #e2001a;
    font-size: 38px;
    margin-top: 0;
    line-height: inherit;
    font-family: FontAwesome;
    content: "\f105" !important;
    opacity: 1;
}

.fiche-poi-n-photos .slick-prev::before {
    color: #e2001a;
    font-size: 38px;
    margin-top: 0;
    line-height: inherit;
    font-family: FontAwesome;
    content: "\f104" !important;
    opacity: 1;
}

.fiche-poi-n-photos .slick-slide {
    height: 54px;
}

.fiche-poi-n-photos .slick-slide img {
    height: 54px;
    margin: 0 1px 0 1px;
}

.fiche-poi-n-pictos {
    display: none;
}

.fiche-poi-n-contenu-prix .listepoi-n-critere .filtre-contenu .listeMoteur {
    margin-bottom: 30px;
    border: none;
}

.fiche-poi-n-contenu-prix .listepoi-n-critere .filtre-contenu .listeMoteur .cal_dateDeb > a:first-child {
    color: #e2001a;
    display: block;
    text-align: left !important;
}

.fiche-poi-n-contenu-prix .listepoi-n-critere .filtre-contenu .listeMoteur .calendar-moteur {
    width: 100%;
}

.fiche-poi-n-contenu-prix .filtre-ouvert-fermer a:hover {
    color: #3c3c3c;
    text-decoration: none;
}

.fiche-poi-n-contenu-prix .listepoi-n-critere-contenu.listeMoteur {
    background: none;
    padding: 0px;
}

.fiche-poi-n-contenu-prix .listepoi-n-critere-contenu.listeMoteur .saisie {
    display: inline-block;
    width: 163px !important;
    margin: 0 7px !important;
    height: 45px;
}

.fiche-poi-n-contenu-prix .listepoi-n-critere-contenu.listeMoteur h2 {
    color: #fff;
    font: 26px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 30px;
    text-transform: uppercase;
}

.fiche-poi-n-contenu-prix .listepoi-n-critere h2 {
    color: #fff;
}

.fiche-poi-n-contenu-prix .listepoi-n-critere-contenu.listeMoteur #div_depart_cal, .fiche-poi-n-contenu-prix .listepoi-n-critere-contenu.listeMoteur #div_fin_cal {
    position: absolute;
    background: white;
    z-index: 9;
    top: 7px;
    padding: 7px;
}

.fiche-poi-n-contenu-prix .listepoi-n-critere .filtre-contenu .listeMoteur .cal_dateFin > a:first-child {
    color: #e2001a;
    display: block;
    text-align: left !important;
}

.fiche-prixduree {
    display: block;
    background-color: #738294;
    padding: 30px 10px 30px 10px;
    text-align: center;
    color: #fff;
    font: 16px RobotoCondensedLight, DinBold, Arial, Helvetica, Sans-serif;
    line-height: 19px;
}

.fiche-prixduree .ancienprix {
    display: block;
    color: #c6c6c6;
    font-size: 28px;
    text-decoration: line-through;
    line-height: 30px;
}

.fiche-prixduree .nouveauprix {
    color: #fff;
    font: 28px RobotoCondensedBold, Arial, Helvetica, Sans-serif;
    line-height: 30px;
}

.fiche-suite-fond {
    background-color: #738294;
    margin-top: 20px;
}

.fiche-suite-zone {
    padding-bottom: 20px;
}

.fichepoi-addthis {
    padding-top: 30px;
    padding-bottom: 30px;
}

.fichepoi-addthis .addthis_sharing_toolbox a {
    margin: -6px 0 0 0 !important;
}

.fichepoi-addthis .libelle {
    font-size: 20px;
    text-transform: uppercase;
    padding-right: 25px;
    float: left;
}

.fichepoi-carte iframe {
    width: 100%;
    height: 500px;
}

.fichepoi-contenu {
    display: block;
    padding: 10px 10px 30px 10px;
}

.fichepoi-grand {
    padding-right: 23px;
}

.fichepoi-grandephoto {
    position: relative;
    width: 100%;
    height: 580px;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.fichepoi-grandephoto .fichepoi-grandephoto-zone {
    position: absolute;
    width: 100%;
    height: 580px;
    margin: 0 auto 0 auto;
    padding: 0;
    text-align: center;
    overflow: hidden;
}

.fichepoi-grandephoto .fichepoi-grandephoto-zone .diapo {
    position: absolute;
    width: 1700px;
    height: 580px;
    left: 50%;
    top: 0;
    margin-left: -850px;
    text-align: center;
    overflow: hidden;
}

.fichepoi-grandephoto .fichepoi-grandephoto-zone .diapo img {
    width: 1700px;
    height: 580px;
    margin: 0;
    padding: 0;
}

.fichepoi-libelle {
    opacity: 0.5;
    color: #fff;
}

.fichepoi-libelle .categorie {
    color: #fff;
    font: 18px OpenSans, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    text-decoration: underline;
    font-style: italic;
}

.fichepoi-libelle h1 {
    color: #fff;
    font: 46px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 50px;
}

.fichepoi-libelle-zone-m {
    display: none;
}

.fichepoi-libelle-zone1 {
    position: absolute;
    width: 100%;
    bottom: 80px;
    text-align: left;
}

.fichepoi-milieu {
    margin-top: 23px;
}

.fichepoi-milieu-droite {
    padding-left: 8px;
}

.fichepoi-patrimoine-addthis .libelle-addthis {
    padding-top: 40px;
    text-align: center;
}

.fichepoi-patrimoine-addthis .libelle-addthis .addthis {
    display: inline-block;
    padding-left: 20px;
    padding-top: 5px;
    vertical-align: middle;
}

.fichepoi-patrimoine-addthis .libelle-addthis .libelle {
    display: inline-block;
    padding-right: 20px;
    vertical-align: middle;
    color: #738294;
    font: 24px OpenSansLight, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
}

.fichepoi-patrimoine-p1 .photo2 {
    padding: 40px 10px 0 15px;
}

.fichepoi-patrimoine-p1 .photo3 {
    padding: 40px 15px 0 10px;
}

.fichepoi-patrimoine-p2 .photo4 {
    padding-top: 20px;
}

.fichepoi-patrimoine-t1 .citation, .fichepoi-patrimoine-t2 .citation, .fichepoi-patrimoine-t4 .citation {
    padding: 40px 40px 0 40px;
    font-size: 18px;
    font-style: italic;
    text-align: center;
}

.fichepoi-patrimoine-t1 .citation .debut, .fichepoi-patrimoine-t2 .citation .debut, .fichepoi-patrimoine-t4 .citation .debut {
    display: inline-block;
    width: 14px;
    height: 23px;
    background: url(/images/citation-debut.png) no-repeat;
    background-size: 14px 23px;
    margin: 0 10px 0 0;
    vertical-align: top;
}

.fichepoi-patrimoine-t1 .citation .fin, .fichepoi-patrimoine-t2 .citation .fin, .fichepoi-patrimoine-t4 .citation .fin {
    display: inline-block;
    width: 14px;
    height: 23px;
    background: url(/images/citation-fin.png) no-repeat;
    background-size: 14px 23px;
    margin: 0 0 0 10px;
    vertical-align: bottom;
}

.fichepoi-patrimoine-t1 .citation strong, .fichepoi-patrimoine-t2 .citation strong, .fichepoi-patrimoine-t4 .citation strong {
    color: #b0c9e6;
}

.fichepoi-patrimoine-t1 .description, .fichepoi-patrimoine-t2 .description, .fichepoi-patrimoine-t3 .description {
    padding: 40px 40px 0 40px;
}

.fichepoi-patrimoine-t4 .description {
    padding: 30px 40px 0 40px;
}

.fichepoi-patrimoine-v1 .video {
    padding-top: 40px;
}

.fichepoi-petit {
    padding-left: 0;
}

.fichepoi-photos {
    margin-top: 12px;
}

.fichepoi-photos-boutons {
    display: block;
    height: 38px;
    text-align: center;
    overflow: hidden;
    border-left: 1px solid #738294;
}

.fichepoi-photos-boutons a {
    display: block;
    float: left;
    width: 33.33%;
    height: 38px;
    border: 1px solid #738294;
    border-left: 0;
    padding-left: 5px;
    padding-right: 5px;
    color: #738294;
    font: 12px OpenSansBold, Arial, Helvetica, Sans-serif;
    line-height: 34px;
    text-transform: uppercase;
}

.fichepoi-photos-boutons a:hover {
    background-color: #fff;
    color: #738294;
}

.fichepoi-photos-boutons a.on {
    background-color: #738294;
    color: #fff;
}

.fichepoi-photos-boutons a.on:hover {
    background-color: #738294;
    color: #fff;
}

.fichepoi-photos-boutons a span, .fichepoi-photos-boutons a:hover span {
    line-height: 14px;
    vertical-align: middle;
    display: inline-block;
}

.fichepoi-photos-boutons-zone {
    display: block;
    padding: 8px;
}

.fichepoi-photos-droite {
    padding-left: 0;
}

.fichepoi-photos-droite-fond {
    display: block;
    background-color: #efefef;
}

.fichepoi-photo-grande {
    padding-right: 0;
}

.fichepoi-photos-petites {
    padding-left: 0;
    overflow: auto;
}

.fichepoi-photos-petites .clearing-assembled .clearing-container .visible-img {
    height: 100% !important;
}

.fichepoi-photos-petites .clearing-assembled .clearing-container .carousel {
    display: none !important;
}

.fichepoi-photos-petites .imgClearingFichePOIV2 {
    float: left;
    margin: 0 0 8px 8px;
    width: 47%;
}

#fichepoi-photos-video {
    position: absolute;
    width: 100%;
    height: auto;
    text-align: center;
    z-index: 3;
}

.fichepoi-photos-video {
    position: relative;
}

.fichepoi-photos-video-contenu {
    position: relative;
    padding: 20px 20px 5px 20px;
    text-align: left;
}

.fichepoi-photos-video-contenu iframe {
    padding: 0;
    margin: 0;
    max-width: 100% !important;
}

.fichepoi-photos-video-fermer {
    position: absolute;
    top: -25px;
    right: -5px;
    text-align: center;
    z-index: 4;
}

.fichepoi-photos-video-fermer a {
    display: block;
    width: 30px;
    height: 30px;
    font-size: 20px;
    color: #fff;
    text-decoration: none;
    background-color: #e2001a;
    line-height: 30px;
}

.fichepoi-photos-video-fermer a:hover {
    color: #fff;
    background-color: #ff0000;
}

.fichepoi-photos-video-fond {
    display: block;
    margin: -10px auto 0 auto;
    width: auto;
    height: auto;
    background-color: #fff;
    border: 5px solid #e2001a;
}

#fichepoi-photos-visite {
    position: absolute;
    width: 100%;
    height: auto;
    text-align: center;
    z-index: 3;
}

.fichepoi-photos-visite {
    position: relative;
}

.fichepoi-photos-visite-contenu {
    position: relative;
    padding: 20px 20px 5px 20px;
    text-align: left;
}

.fichepoi-photos-visite-contenu .flex-video {
    padding-bottom: 46.2%;
}

.fichepoi-photos-visite-contenu iframe {
    padding: 0;
    margin: 0;
    max-width: 100% !important;
}

.fichepoi-photos-visite-fermer {
    position: absolute;
    top: -25px;
    right: -5px;
    text-align: center;
    z-index: 4;
}

.fichepoi-photos-visite-fermer a {
    display: block;
    width: 30px;
    height: 30px;
    font-size: 20px;
    color: #fff;
    text-decoration: none;
    background-color: #e2001a;
    line-height: 30px;
}

.fichepoi-photos-visite-fermer a:hover {
    color: #fff;
    background-color: #ff0000;
}

.fichepoi-photos-visite-fond {
    display: block;
    margin: -10px auto 0 auto;
    width: auto;
    height: auto;
    background-color: #fff;
    border: 5px solid #e2001a;
}

.fichepoi-pictos {
    display: block;
    padding: 10px 0 10px 0;
}

.fichepoi-pictos ul {
    padding: 0;
    margin: 0;
}

.fichepoi-pictos ul li {
    list-style-type: none;
    list-style-position: outside;
    padding: 10px 15px 10px 0;
    margin: 0;
    display: inline-block;
}

.fichepoi-pictos ul li .picto {
    display: block;
}

.fichepoi-pictos ul li .picto .libelle {
    display: block;
    font-size: 12px;
}

.fichepoi-pictos ul li .picto img {
    display: block;
    height: 25px;
    margin: 0 auto 1px auto;
}

.fichepoi-prix {
    display: block;
    border: 2px solid #e2001a;
    padding: 10px;
    margin: 10px -10px 10px -10px;
    text-align: center;
    color: #797979;
    font-size: 14px;
}

.fichepoi-prix a {
    display: block;
    padding-top: 10px;
    color: #000;
    font-size: 16px;
    text-transform: uppercase;
}

.fichepoi-prix a:hover {
    color: #ff0000;
}

.fichepoi-prix strong {
    display: block;
    padding-top: 5px;
    font-size: 26px;
    font-weight: normal;
}

.fichepoi-retourliste {
    padding-top: 30px;
    padding-bottom: 30px;
}

.fichepoi-retourliste a {
    font-size: 20px;
    text-transform: uppercase;
}

.fichepoi-retourliste a i {
    padding-right: 5px;
}

.fichepoi-titre {
    display: block;
    background-color: #e2001a;
    color: #fff;
    font-size: 22px;
    line-height: 24px;
    font-weight: bold;
    text-transform: uppercase;
    padding: 10px;
}

.fichepoi-titre small {
    font-size: 12px;
    line-height: 14px;
    font-family: DinRegular, Arial, Helvetica, Sans-serif;
}

.fil-ariane-rm {
    text-align: left;
    color: #505050;
    font: 14px OpenSans, Arial, Helvetica, Sans-serif;
    line-height: 18px;
    padding-top: 20px;
    padding-bottom: 20px;
}

.fil-ariane-rm .addthis {
    display: block;
    float: right;
    margin: 0 0 10px 10px;
}

.fil-ariane-rm .addthis .at-style-responsive .at-share-btn {
    padding: 0;
    margin: 0 2px 0 2px;
}

.fil-ariane-rm .separateur {
    display: inline-block;
    color: #bfd3eb;
    margin-left: 3px;
    margin-right: 3px;
}

.fil-ariane-rm a {
    color: #bfd3eb;
    font-weight: normal;
    text-decoration: underline;
    font-style: italic;
}

.fil-ariane-rm a:hover {
    color: #ff0000;
    text-decoration: none;
}

#flashContentHublo {
    position: absolute;
    width: 275px;
    height: 140px;
    top: 0;
    left: 0;
}

.flechebas {
    display: inline-block;
    background: url(/images/fleche-top-fond.png) repeat;
}

.flechebas a i {
    color: #fff;
    font-size: 40px;
    padding: 0 7px 0 7px;
    margin-top: -3px;
}

.flechebas a:hover i {
    color: #fff;
    padding: 0 7px 2px 7px;
    margin-top: -5px;
}

.flechebas-fixe {
    position: fixed;
    z-index: 99;
    width: auto;
    right: 0;
    bottom: 0;
}

.flechetop {
    display: inline-block;
    background: url(/images/fleche-top-fond.png) repeat;
}

.flechetop a i {
    color: #fff;
    font-size: 40px;
    padding: 0 7px 0 7px;
    margin-top: -3px;
}

.flechetop a:hover i {
    color: #fff;
    padding: 0 7px 2px 7px;
    margin-top: -5px;
}

.flechetop-fixe {
    position: fixed;
    z-index: 99;
    width: auto;
    right: 0;
    bottom: 40px;
}

.garanties {
    display: block;
    margin-top: 20px;
}

.garanties-contenu {
    display: block;
    padding: 5px 0 20px 0;
    color: #000;
    font-size: 12px;
}

.garanties-picto {
    padding-top: 12px;
    text-align: center;
    color: #e2001a;
    font-size: 30px;
}

.garanties-telephone {
    display: block;
    background-color: #e2001a;
    text-align: center;
    color: #fff;
    font-size: 24px;
    font-family: DinBold, Arial, Helvetica, Sans-serif;
    line-height: 26px;
    padding: 5px;
}

.garanties-telephone i {
    font-size: 30px;
    vertical-align: middle;
    margin-right: 10px;
}

.garanties-texte {
    padding-top: 15px;
    color: #000;
    font-size: 14px;
    line-height: 16px;
}

.garanties-texte .paiement {
    width: 170px;
    height: 77px;
    margin-top: 5px;
}

.garanties-titre {
    display: block;
    border-bottom: 1px solid #000;
    text-align: center;
    color: #000;
    font: 24px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 28px;
    padding: 20px 0 20px 0;
}

.grandephoto {
    position: relative;
    width: 100%;
    height: 580px;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.grandephoto .grandephoto-illustration {
    display: none;
}

.grandephoto .grandephoto-zone {
    position: absolute;
    width: 100%;
    height: 580px;
    margin: 0 auto 0 auto;
    padding: 0;
    text-align: center;
    overflow: hidden;
}

.grandephoto .grandephoto-zone .diapo {
    position: absolute;
    width: 1700px;
    height: 580px;
    left: 50%;
    top: 0;
    margin-left: -850px;
    text-align: center;
    overflow: hidden;
}

.grandephoto .grandephoto-zone .diapo img {
    width: 1700px;
    height: 580px;
    margin: 0;
    padding: 0;
}

.grandephoto .grandephoto-zone .diapo-libelle {
    display: inline-block;
    text-align: center;
}

.grandephoto .grandephoto-zone .diapo-libelle span {
    display: inline-block;
    height: 58px;
    margin: 0 auto 0 auto;
    padding-top: 4px;
    padding-left: 5px;
    padding-right: 5px;
    background-color: #e2001a;
    color: #fff;
    font: 60px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 58px;
    overflow: hidden;
}

.grandephoto .grandephoto-zone .diapo-libelle-zone {
    position: absolute;
    width: 95%;
    margin: 0 calc((100% - 95%) / 2) !important;
    top: 80px;
    text-align: center;
}

.infobox-bas {
    padding: 5px 0 0 0;
}

.infobox-bouton {
    padding: 0;
    margin-bottom: 5px;
}

.infobox-bouton a {
    display: block;
    background-color: #e2001a;
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    text-align: center;
    padding: 15px 5px 15px 5px;
    line-height: 18px;
}

.infobox-bouton a:hover {
    background-color: #ff0000;
    color: #fff;
}

.infobox-contenu {
    padding: 5px;
}

.infobox-contenu p {
    font-size: 14px;
    line-height: 16px;
}

.infobox-contenu ul {
    margin-left: 15px;
}

.infobox-descriptif {
    color: #757575;
}

.infobox-droite {
    padding: 0 0 0 5px;
}

.infobox-entete-produit {
    color: #000;
    font-size: 14px;
}

.infobox-entete-produit .fournisseur {
    display: inline-block;
    color: #000;
    font-size: 18px;
    line-height: 20px;
    font-weight: bold;
    text-transform: uppercase;
}

.infobox-entete-produit .produit {
    color: #000;
    font-size: 14px;
    line-height: 16px;
    font-weight: bold;
    text-transform: uppercase;
}

.infobox-entete-produit img {
    border: 0;
    vertical-align: middle;
    margin: 0 0 3px 0;
    height: 17px;
}

.infobox-entete-produit strong {
    color: #757575;
    font-size: 14px;
    line-height: 16px;
    text-transform: uppercase;
}

.infobox-gauche {
    padding: 0 5px 0 0;
}

.infobox-prix {
    background-color: #757575;
    padding: 10px 5px 10px 5px;
    text-align: center;
    color: #fff;
    font-size: 14px;
    line-height: 16px;
}

.infobox-prix .ancienprix {
    color: #e5e5e5;
    font-size: 18px;
    line-height: 20px;
    text-decoration: line-through;
}

.infobox-prix .duree {
    font-size: 14px;
    line-height: 16px;
}

.infobox-prix .nouveauprix {
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    line-height: 22px;
}

.infobox-produits {
    padding: 10px 0 0;
}

.infobox-produits select {
    padding: 0;
    margin: 0;
    width: 100%;
    height: 48px;
    background: url(/images/select.png) no-repeat right #fff;
    background-size: 18px 8px;
    border: 1px solid #bdbdbd;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    color: #b2b2b2;
    text-transform: uppercase;
    background-color: #fff;
    font-size: 12px;
    margin: 0;
    padding: 5px;
    cursor: pointer;
}

.infospromos {
    padding-bottom: 30px;
}

.infospromos img {
    display: block;
    width: 300px;
    float: right;
    margin: 0 0 5px 10px;
}

.infospromos-texte {
    padding-top: 5px;
}

.infospromos-titre {
    color: #000;
    font: 30px RobotoCondensedBold, Arial, Helvetica, Sans-serif;
    line-height: 36px;
    text-transform: uppercase;
}

.liste-bouton-poi {
    display: block;
    margin-top: 30px;
    text-align: center;
}

.liste-bouton-poi a {
    display: block;
    border: 1px solid #e2001a;
    padding: 10px;
    color: #e2001a;
    font-size: 24px;
    text-transform: uppercase;
}

.liste-bouton-poi a:hover {
    background-color: #e5e5e5;
    border: 1px solid #ff0000;
    color: #ff0000;
}

.liste-carte-poi {
    padding: 0;
}

.liste-carte-poi-zone {
    display: block;
    width: 100%;
    border: 1px solid #e2001a;
    padding: 5px 5px 0 5px;
    margin: 0;
}

.liste-carte-poi-zone iframe {
    width: 100%;
    height: 500px;
}

.liste-criteres-poi {
    display: table;
    width: 100%;
    padding: 0;
    margin-top: 50px;
    background-color: #e2001a;
}

.liste-criteres-poi1 {
    display: table-cell;
    padding: 10px 5px 10px 15px;
    color: #fff;
    font-size: 24px;
    text-transform: uppercase;
}

.liste-criteres-poi1 strong {
    font-weight: normal;
    font-family: DinBold, Arial, Helvetica, Sans-serif;
}

.liste-criteres-poi2 {
    display: table-cell;
    padding: 10px 15px 10px 5px;
    color: #fff;
    font-size: 24px;
    text-transform: uppercase;
    text-align: right;
}

.liste-criteres-poi2 .texte {
    display: inline-block;
    padding-right: 30px;
}

.liste-criteres-poi2 a.off i.fa-map-marker {
    color: #ec777b;
    font-size: 49px;
    margin-bottom: 4px;
    vertical-align: middle;
}

.liste-criteres-poi2 a.off:hover i.fa-map-marker {
    color: #fff;
}

.liste-criteres-poi2 a.on i.fa-map-marker {
    color: #fff;
    font-size: 49px;
    margin-bottom: 4px;
    vertical-align: middle;
}

.liste-criteres-poi2 a.on:hover i.fa-map-marker {
    color: #fff;
}

.liste-criteres-poi2 a.off i.fa-th-large {
    color: #ec777b;
    font-size: 54px;
    margin-right: 15px;
    vertical-align: middle;
}

.liste-criteres-poi2 a.off:hover i.fa-th-large {
    color: #fff;
}

.liste-criteres-poi2 a.on i.fa-th-large {
    color: #fff;
    font-size: 54px;
    margin-right: 15px;
    vertical-align: middle;
}

.liste-criteres-poi2 a.on:hover i.fa-th-large {
    color: #fff;
}

.liste-poi article {
    background-color: #e30715;
    text-align: center;
}

.liste-poi article .liste-lien-poi {
    position: relative;
    height: 49px;
    padding-top: 10px;
    text-align: right;
    overflow: hidden;
}

.liste-poi article .liste-lien-poi a {
    display: inline-block;
    background-color: #a30000;
    padding: 0 10px 0 10px;
    height: 39px;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 41px;
    overflow: hidden;
}

.liste-poi article .liste-lien-poi a:hover {
    background-color: #ff0000;
    color: #fff;
}

.liste-poi article .liste-contenu-poi {
    position: relative;
    padding: 10px;
    color: #fff;
    font-size: 16px;
    line-height: 18px;
    text-align: left;
    min-height: 120px;
}

.liste-poi article .liste-contenu-poi .point-situation {
    display: block;
    float: right;
    margin-top: -34px;
}

.liste-poi article .liste-contenu-poi .point-situation a i {
    color: #fff;
    font-size: 60px;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 1);
    margin: 0 0 3px 3px;
}

.liste-poi article .liste-contenu-poi .point-situation a:hover i {
    color: #e5e5e5;
}

.liste-poi article .liste-contenu-poi a {
    color: #fff;
    font-weight: normal;
}

.liste-poi article .liste-contenu-poi strong {
    font-size: 20px;
    line-height: 22px;
    text-transform: uppercase;
}

.liste-poi li {
    padding-top: 30px;
    padding-bottom: 0;
}

.listeActualites .actualites-titre {
    display: block;
    color: #000;
    font: 30px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 36px;
    text-transform: uppercase;
}

.listeActualites article {
    background-color: #e30715;
    text-align: center;
}

.listeActualites article .liste-lien-actualite {
    position: relative;
    height: 49px;
    padding-top: 10px;
    text-align: right;
    overflow: hidden;
}

.listeActualites article .liste-lien-actualite a {
    display: inline-block;
    background-color: #a30000;
    padding: 0 10px 0 10px;
    height: 39px;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 41px;
    overflow: hidden;
}

.listeActualites article .liste-lien-actualite a:hover {
    background-color: #ff0000;
    color: #fff;
}

.listeActualites article .liste-contenu-actualite {
    position: relative;
    padding: 10px;
    color: #fff;
    font-size: 16px;
    line-height: 18px;
    text-align: left;
    min-height: 120px;
}

.listeActualites article .liste-contenu-actualite a {
    color: #fff;
    font-weight: normal;
}

.listeActualites article .liste-contenu-actualite strong {
    font-size: 20px;
    line-height: 22px;
    text-transform: uppercase;
}

.listeActualites li {
    padding-top: 30px;
    padding-bottom: 0;
}

.listeAgenda .agenda-mois {
    display: table;
    width: 100%;
    padding: 0;
    margin-top: 15px;
    background-color: #e2001a;
}

.listeAgenda .agenda-mois1 {
    display: table-cell;
    padding: 15px;
    text-align: left;
    vertical-align: middle;
}

.listeAgenda .agenda-mois1 a i {
    color: #fff;
    font-size: 40px;
}

.listeAgenda .agenda-mois1 a:hover i {
    color: #f9cdd0;
}

.listeAgenda .agenda-mois2 {
    display: table-cell;
    padding: 15px 0 15px 0;
    text-align: center;
    vertical-align: middle;
    color: #fff;
    font-size: 30px;
    font-weight: bold;
    text-transform: uppercase;
}

.listeAgenda .agenda-mois3 {
    display: table-cell;
    padding: 15px;
    text-align: right;
    vertical-align: middle;
}

.listeAgenda .agenda-mois3 a i {
    color: #fff;
    font-size: 40px;
}

.listeAgenda .agenda-mois3 a:hover i {
    color: #f9cdd0;
}

.listeAgenda .agenda-mois-lien {
    display: block;
    text-align: center;
    margin-top: 30px;
}

.listeAgenda .agenda-mois-lien a {
    display: block;
    border: 1px solid #e2001a;
    padding: 10px;
    color: #e2001a;
    font-size: 24px;
    text-transform: uppercase;
}

.listeAgenda .agenda-mois-lien a:hover {
    background-color: #e5e5e5;
    border: 1px solid #ff0000;
    color: #ff0000;
}

.listeAgenda .agenda-titre {
    display: block;
    color: #000;
    font: 30px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 36px;
    text-transform: uppercase;
}

.listeAgenda .agenda-titre-mois {
    display: block;
    padding-top: 30px;
}

.listeAgenda .agenda-titre-mois a {
    color: #e2001a;
    font: 30px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 32px;
    font-weight: normal;
    text-decoration: none;
}

.listeAgenda .agenda-titre-mois a:hover {
    color: #ff0000;
}

.listeAgenda article {
    background-color: #e30715;
    text-align: center;
}

.listeAgenda article .liste-lien-agenda {
    position: relative;
    height: 49px;
    padding-top: 10px;
    text-align: right;
    overflow: hidden;
}

.listeAgenda article .liste-lien-agenda a {
    display: inline-block;
    background-color: #a30000;
    padding: 0 10px 0 10px;
    height: 39px;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 41px;
    overflow: hidden;
}

.listeAgenda article .liste-lien-agenda a:hover {
    background-color: #ff0000;
    color: #fff;
}

.listeAgenda article .liste-contenu-agenda {
    position: relative;
    padding: 10px;
    color: #fff;
    font-size: 16px;
    line-height: 18px;
    text-align: left;
    min-height: 160px;
}

.listeAgenda article .liste-contenu-agenda .date {
    font-size: 20px;
    line-height: 22px;
    text-transform: uppercase;
}

.listeAgenda article .liste-contenu-agenda a {
    color: #fff;
    font-weight: normal;
}

.listeAgenda article .liste-contenu-agenda strong {
    font-size: 20px;
    line-height: 22px;
    text-transform: uppercase;
}

.listeAgenda li {
    padding-top: 30px;
    padding-bottom: 0;
}

.listepoi article {
    background-color: #e30715;
    height: 375px;
    text-align: center;
}

.listepoi article .liste-lien-poi {
    position: relative;
    height: 38px;
    padding: 7px 2px 2px 2px;
    text-align: right;
    overflow: hidden;
}

.listepoi article .liste-lien-poi a {
    display: inline-block;
    background-color: #fff;
    padding-left: 5px;
    padding-right: 5px;
    height: 29px;
    color: #e30715;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 29px;
    overflow: hidden;
}

.listepoi article .liste-lien-poi a:hover {
    background-color: #e5e5e5;
    color: #e30715;
}

.listepoi article .liste-contenu-poi {
    position: relative;
    padding: 10px;
    color: #fff;
    font-size: 15px;
    line-height: 16px;
    font-weight: bold;
    text-align: left;
}

.listepoi article .liste-contenu-poi .libelle {
    display: block;
    height: 36px;
    overflow: hidden;
}

.listepoi article .liste-contenu-poi .libelle strong, .listepoi article .liste-contenu-poi .libelle h2 {
    color: #fff;
    font-size: 17px;
    line-height: 19px;
    margin: 0;
    padding: 0;
    text-transform: uppercase;
    width: calc(100% - 37px);
}

.listepoi article .liste-contenu-poi .point-situation {
    display: block;
    float: right;
    margin-top: -26px;
}

.listepoi article .liste-contenu-poi .point-situation a i {
    color: #fff;
    font-size: 50px;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 1);
    margin: 0 0 3px 3px;
}

.listepoi article .liste-contenu-poi .point-situation a:hover i {
    color: #e5e5e5;
}

.listepoi article .liste-contenu-poi .texte {
    display: block;
    height: 80px;
    margin-top: 2px;
    overflow: hidden;
}

.listepoi article .liste-contenu-poi .texte .etoiles {
    display: block;
}

.listepoi article .liste-contenu-poi .texte .etoiles img {
    height: 17px;
    margin: 0 0 2px 0;
}

.listepoi article .liste-contenu-poi .texte .tel {
    display: block;
}

.listepoi article .liste-contenu-poi .texte .tel-m {
    display: none;
}

.listepoi article .liste-contenu-poi a {
    color: #fff;
}

.listepoi article .liste-haut {
    position: relative;
    height: 337px;
    overflow: hidden;
}

.listepoi article .liste-photo-poi {
    position: absolute;
    width: 100%;
    height: 208px;
    margin: 0 auto 0 auto;
    padding: 0;
    text-align: center;
    overflow: hidden;
}

.listepoi article .liste-photo-poi .image {
    position: absolute;
    width: 314px;
    height: 208px;
    left: 50%;
    top: 0;
    margin-left: -157px;
    text-align: center;
    overflow: hidden;
}

.listepoi article .liste-photo-poi .image img {
    width: 314px;
    height: 208px;
    margin: 0;
    padding: 0;
}

.listepoi article .liste-photo-poi-zone {
    position: relative;
    height: 208px;
}

.listepoi li {
    padding: 0 20px 20px 0 !important;
}

.listepoi-bouton {
    padding-top: 20px;
}

.listepoi-bouton a {
    display: inline-block;
    background-color: #7f7f7f;
    padding: 10px 40px 10px 40px;
    color: #fff;
    font-size: 15px;
    line-height: 17px;
    text-transform: uppercase;
    text-align: center;
}

.listepoi-bouton a:hover {
    background-color: #e5e5e5;
    color: #e30715;
}

.listepoi-bouton-m {
    padding-bottom: 15px;
}

.listepoi-bouton-m a {
    display: block;
    background-color: #7f7f7f;
    padding: 10px;
    color: #fff;
    font-size: 15px;
    line-height: 17px;
    text-transform: uppercase;
    text-align: center;
}

.listepoi-bouton-m a:hover {
    background-color: #e5e5e5;
    color: #e30715;
}

.listepoi-carte {
    height: 770px;
    padding-left: 0;
    overflow: hidden;
}

.listepoi-carte iframe {
    width: 100%;
    height: 770px;
}

#listepoi-criteresp dialog .close-reveal-modal, .reveal-modal .close-reveal-modal {
    color: #000;
}

#listepoi-criteresp dialog {
    margin-left: -20%;
    width: 40%;
    height: 95%;
    overflow: auto;
    border: 10px solid #000;
    top: 15px;
}

#listepoi-criteresp-attente {
    position: absolute;
    z-index: 4;
}

#listepoi-criteresp-attente img {
    width: 212px;
    height: 13px;
    background-color: #fff;
}

.listepoi-criteresp-contenu {
    width: 98%;
}

.listepoi-criteresp-contenu .zone-cases {
    display: block;
    padding-bottom: 15px;
    text-align: left;
}

.listepoi-criteresp-contenu .zone-cases-contenu {
    display: block;
    text-align: left;
    font-size: 14px;
    color: #000;
}

.listepoi-criteresp-contenu .zone-cases-contenu input {
    margin: 1px 5px 3px 0;
    vertical-align: middle;
}

.listepoi-criteresp-contenu .zone-cases-titre {
    display: block;
    background-color: #e5e5e5;
    color: #000;
    padding: 5px;
    margin-bottom: 5px;
    font-size: 16px;
    line-height: 18px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: left;
}

.listepoi-criteresp-contenu .zone-select {
    display: block;
    padding-bottom: 10px;
}

.listepoi-criteresp-contenu .zone-select select {
    width: 100%;
    height: 48px;
    background: url(/images/select.png) no-repeat right #fff;
    background-size: 18px 8px;
    border: 0;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    color: #000;
    font-size: 14px;
    text-transform: uppercase;
    background-color: #fff;
    border: 1px solid #bdbdbd;
    margin: 0;
    padding: 5px;
    cursor: pointer;
}

.listepoi-blocs {
    height: 790px;
    padding-right: 0;
    overflow: auto;
}

.listepoi-grandephoto {
    position: relative;
    width: 100%;
    height: 580px;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.listepoi-grandephoto .listepoi-grandephoto-illustration {
    display: none;
}

.listepoi-grandephoto .listepoi-grandephoto-zone {
    position: absolute;
    width: 100%;
    height: 580px;
    margin: 0 auto 0 auto;
    padding: 0;
    text-align: center;
    overflow: hidden;
}

.listepoi-grandephoto .listepoi-grandephoto-zone .diapo {
    position: absolute;
    width: 1700px;
    height: 580px;
    left: 50%;
    top: 0;
    margin-left: -850px;
    text-align: center;
    overflow: hidden;
}

.listepoi-grandephoto .listepoi-grandephoto-zone .diapo img {
    width: 1700px;
    height: auto;
    margin: 0;
    padding: 0;
    margin-top: 36vh;
    transform: translateY(-50%);
}

.listepoi-grandephoto .listepoi-grandephoto-zone .listepoi-libelle {
    display: inline-block;
    text-align: center;
}

.listepoi-grandephoto .listepoi-grandephoto-zone .listepoi-libelle .descriptif {
    display: none;
    margin-top: 10px;
    text-align: center;
    color: #fff;
    font-style: italic;
}

.listepoi-grandephoto .listepoi-grandephoto-zone .listepoi-libelle span, .listepoi-grandephoto .listepoi-grandephoto-zone .listepoi-libelle h1 {
    display: inline-block;
    margin: 0 auto 0 auto;
    padding-top: 4px;
    padding-left: 5px;
    padding-right: 5px;
    color: #fff;
    font: 50px OpenSansExtrabold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 60px;
    text-transform: uppercase;
    text-shadow: 0 0 20px #1a171b;
}

.listepoi-grandephoto .listepoi-grandephoto-zone .listepoi-libelle-zone {
    position: absolute;
    width: 95%;
    margin: 0 calc((100% - 95%) / 2) !important;
    bottom: 45px;
    text-align: center;
}

.listepoi-n-carte {
    height: 840px;
    padding-left: 5px;
    overflow: hidden;
}

.listepoi-n-carte .carte {
    display: block;
}

.listepoi-n-carte .carte .carte-bouton {
    position: absolute;
    left: 15px;
    bottom: 15px;
}

.listepoi-n-carte .carte .carte-bouton a {
    display: block;
    height: 30px;
    background-color: #738294;
    padding-left: 20px;
    padding-right: 20px;
    color: #fff;
    font: 13px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 30px;
}

.listepoi-n-carte .carte .carte-bouton a:hover {
    background-color: #5b6674;
}

.listepoi-n-carte .carte #listingMaps {
    width: 100%;
    height: 780px;
}

.listepoi-n-carte .tri {
    display: block;
}

.listepoi-n-carte .tri select {
    width: 100%;
    height: 54px;
    background: url(/images/select.png) no-repeat right #fff;
    background-size: 18px 8px;
    border: 0;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    color: #3c3c3c;
    font-size: 14px;
    font-family: OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    background-color: #fff;
    border: 1px solid #dfdfde;
    margin: 0 0 6px 0;
    padding: 5px 20px 5px 10px;
    cursor: pointer;
}

.listepoi-n-critere {
    display: block;
}

.listepoi-n-critere-contenu {
    display: block;
    border: 1px solid #dfdfde;
    border-top: 0;
    padding: 15px;
}

.listepoi-n-critere-contenu .case {
    display: block;
    padding-top: 5px;
    padding-bottom: 5px;
    color: #3c3c3c;
    font-size: 14px;
    line-height: 15px;
}

.listepoi-n-critere-contenu .case input {
    margin: 0 7px 3px 0;
    vertical-align: middle;
}

.listepoi-n-critere-contenu .radio {
    display: block;
    padding-top: 5px;
    padding-bottom: 5px;
}

.listepoi-n-critere-contenu .radio input[type="radio"] {
    margin: 5px 0 0 0;
}

.listepoi-n-critere-contenu .radio label {
    color: #3c3c3c;
    font-size: 14px;
    font-family: OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
}

.listepoi-n-critere-contenu .radio label.question {
    font-family: OpenSans, DinBold, Arial, Helvetica, Sans-serif;
    line-height: 16px;
    padding-bottom: 5px;
}

.listepoi-n-critere-contenu .saisie {
    display: block;
    padding-top: 5px;
    padding-bottom: 5px;
}

.listepoi-n-critere-contenu .saisie input {
    width: 100%;
    height: 40px;
    background-color: #fff;
    border: 1px solid #dfdfde;
    color: #3c3c3c;
    font-size: 14px;
    font-family: OpenSans, DinBold, Arial, Helvetica, Sans-serif;
    margin: 0;
    padding: 5px 20px 5px 10px;
}

.listepoi-n-critere-contenu .saisie .cleanDates {
    width: 35px;
    float: left;
    height: 40px;
}

.listepoi-n-critere-contenu .saisie .noReload {
    width: 75% !important;
}

.listepoi-n-critere-contenu .saisie .imgCalendar {
    margin-left: 0 !important;
}

.listepoi-n-critere-contenu .select {
    display: block;
    padding-top: 5px;
    padding-bottom: 5px;
}

.listepoi-n-critere-contenu .select select {
    width: 100%;
    height: 40px;
    background: url(/images/select.png) no-repeat right #fff;
    background-size: 18px 8px;
    border: 0;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    color: #3c3c3c;
    font-size: 14px;
    font-family: OpenSans, DinBold, Arial, Helvetica, Sans-serif;
    background-color: #fff;
    border: 1px solid #dfdfde;
    margin: 0;
    padding: 5px 20px 5px 10px;
    cursor: pointer;
}

.listepoi-n-critere-titre {
    display: block;
}

.listepoi-n-critere-titre a {
    display: block;
    background-color: #f0f0f0;
    border: 1px solid #dfdfde;
    border-top: 0;
    color: #3c3c3c;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 16px;
    padding: 15px;
}

.listepoi-n-critere-titre a .picto-ouvert {
    display: block;
    float: right;
    width: 12px;
    height: 8px;
    background: url(/images/critere-titre.png) no-repeat scroll 0 -8px;
    background-size: 12px 16px;
    margin: 3px 0 0 10px;
}

.listepoi-n-critere-titre a .picto-ferme {
    display: block;
    float: right;
    width: 12px;
    height: 8px;
    background: url(/images/critere-titre.png) no-repeat;
    background-size: 12px 16px;
    margin: 3px 0 0 10px;
}

.moteurPoi {
    float: left;
    width: 25%;
}

@media only screen and (max-width: 64em) {
    .moteurPoi {
        width: 100%;
    }
}

.listepoi-n-criteres {
    height: 840px;
    overflow: auto;
}

.listepoi-n-criteres-bouton1 {
    display: block;
    padding-top: 14px;
    padding-bottom: 6px;
    text-align: right;
}

.listepoi-n-criteres-bouton1 a {
    display: inline-block;
    height: 30px;
    background-color: #b6cde8;
    padding-left: 20px;
    padding-right: 20px;
    color: #fff;
    font: 13px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 30px;
}

.listepoi-n-criteres-bouton1 a:hover {
    background-color: #9bafc6;
}

.listepoi-n-criteres-bouton2 {
    display: none;
}

.listepoi-n-criteres-bouton2-m {
    display: none;
}

.listepoi-n-criteres-boutons {
    display: block;
}

.listepoi-n-criteres-titre {
    display: block;
    overflow: hidden;
    height: 54px;
    background-color: #e2001a;
    padding-left: 5px;
    padding-right: 5px;
    text-align: center;
    color: #fff;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 54px;
}

.listepoi-n-criteres-titre2 {
    display: block;
    background-color: #738294;
    padding: 15px 10px 15px 10px;
    text-align: center;
    color: #fff;
    font: 16px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
}

.listepoi-n-liste {
    height: 840px;
    padding-left: 5px;
    overflow: auto;
}

.listepoi-n-resultat-contenu {
    padding: 0 21px 6px 15px;
}

.listepoi-n-resultat-contenu span.typagePOI {
    background-color: #e2001a;
    display: inline-block;
    padding: 5px;
    margin: 5px 5px 5px 0;
    float: left;
    font-weight: 600;
    color: white;
}

.listepoi-n-resultat-contenu .adresse {
    display: block;
    height: 16px;
    overflow: hidden;
    margin-top: 3px;
}

.listepoi-n-resultat-contenu .adresse a {
    display: block;
    color: #505050;
    font: 12px OpenSansLight, DinBold, Arial, Helvetica, Sans-serif;
    font-style: italic;
    text-transform: uppercase;
    line-height: 16px;
}

.listepoi-n-resultat-contenu .autres {
    display: block;
    height: 30px;
    overflow: hidden;
    margin-top: 6px;
    line-height: 30px;
}

.listepoi-n-resultat-contenu .autres a .ferme {
    display: inline-block;
    color: #e2001a;
    font: 13px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
}

.listepoi-n-resultat-contenu .autres a.info {
    display: block;
    float: right;
    height: 30px;
    background-color: #b6cde8;
    padding-left: 20px;
    padding-right: 20px;
    color: #fff;
    font: 13px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 30px;
}

.listepoi-n-resultat-contenu .autres a.info:hover {
    background-color: #9bafc6;
}

.listepoi-n-resultat-contenu .autres.liste-contenu-poi a {
    position: relative;
}

.listepoi-n-resultat-contenu .autres a .ouvert {
    display: inline-block;
    color: #00bc16;
    font: 13px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    position: absolute;
}

.listepoi-n-resultat-contenu .autres a.reservation {
    display: block;
    float: right;
    height: 30px;
    background-color: #e2001a;
    padding-left: 20px;
    padding-right: 20px;
    color: #fff;
    font: 13px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 30px;
}

.listepoi-n-resultat-contenu .autres a.reservation:hover {
    background-color: #ff0000;
}

.listepoi-n-resultat-contenu .autres a .situation {
    display: block;
    float: right;
    width: 18px;
    height: 28px;
    background: url(/images/picto-situation.png) no-repeat;
    background-size: 18px 56px;
    margin: 1px 20px 1px 0;
}

.listepoi-n-resultat-contenu .autres a:hover .situation {
    background: url(/images/picto-situation.png) no-repeat scroll 0 -28px;
    background-size: 18px 56px;
}

.listepoi-n-resultat-contenu .autres a .tel {
    display: block;
    float: right;
    width: 28px;
    height: 28px;
    background: url(/images/picto-tel.png) no-repeat;
    background-size: 24px 55px;
    margin: 1px 6px 1px 0;
}

.listepoi-n-resultat-contenu .autres a:hover .tel {
    background: url(/images/picto-tel.png) no-repeat scroll 0 -28px;
    background-size: 24px 55px;
}

.listepoi-n-resultat-contenu .descriptif {
    display: block;
    height: 28px;
    overflow: hidden;
    margin-top: 6px;
}

.listepoi-n-resultat-contenu .descriptif a {
    display: block;
    color: #505050;
    font: 12px OpenSansLight, DinBold, Arial, Helvetica, Sans-serif;
    line-height: 14px;
}

.listepoi-n-resultat-contenu .libelle {
    display: block;
    height: 45px;
    overflow: hidden;
}

.listepoi-n-resultat-contenu .libelle a h2 {
    display: block;
    color: #b0c9e6;
    font: 18px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 21px;
}

.listepoi-n-resultat-contenu .libelle a h2 img {
    display: block;
    float: right;
    height: 13px;
    margin: 2px 0 2px 5px;
}

.listepoi-n-resultat-contenu .telephone {
    display: block;
    height: 16px;
    overflow: hidden;
    margin-top: 3px;
}

.listepoi-n-resultat-contenu .telephone a {
    display: block;
    color: #505050;
    font: 12px OpenSansLight, DinBold, Arial, Helvetica, Sans-serif;
    font-style: italic;
    text-transform: uppercase;
    line-height: 16px;
}

.listepoi-n-resultat-fond {
    display: block;
    border: 1px solid #dfdfde;
    margin-bottom: 6px;
}

.listepoi-n-resultat-fond:hover {
    background-color: #f6f6f6;
}

.listepoi-n-resultat-photo {
    padding: 6px 0 6px 21px;
}

.listepoi-n-resultat-photo .resultat-prixduree img {
    height: 15px;
}

.listepoi-n-nbresultats {
    display: block;
    min-height: 60px;
    padding-bottom: 15px;
    color: #373737;
    font: 20px RobotoCondensedLight, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 22px;
}

.listepoi-n-nbresultats strong {
    font-family: OpenSansExtrabold, DinBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
}

.listepoi-n-trait-bas {
    display: none;
}

.listepoi-nt-bouton-zone {
    display: none;
}

.listepoi-nt-bouton-zone-m {
    display: none;
}

.listepoi-zone {
    margin-top: 20px;
}

.live {
    text-align: right;
    z-index: 5;
}

.live-animations {
    padding: 0;
    margin-top: 20px;
    text-align: center;
}

.live-animations a {
    display: block;
    background-color: #8f0000;
    color: #fff;
    font-size: 24px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 30px;
    padding: 40px 10px 40px 10px;
}

.live-animations a:hover {
    background-color: #ff0000;
    color: #fff;
}

.live-autres {
    display: inline-block;
    height: 50px;
    padding: 0 0 0 10px;
}

.live-avalanche {
    display: block;
    margin-top: 10px;
}

.live-avalanche-t {
    display: table;
    width: 100%;
    padding: 0;
}

.live-avalanche-t1 {
    display: table-cell;
    padding: 5px 0 5px 0;
    color: #000;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    vertical-align: middle;
}

.live-avalanche-t2 {
    display: table-cell;
    padding: 5px;
    vertical-align: middle;
}

.live-avalanche-t2 .picto {
    display: inline-block;
    width: 73px;
    height: 40px;
    background: url(/images/live-avalanche.png) no-repeat;
    background-size: 73px 40px;
}

.live-avalanche-t3 {
    display: table-cell;
    padding: 5px 0 5px 0;
    text-align: right;
    color: #000;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 20px;
    vertical-align: middle;
}

.live-avalanche-t3 strong {
    color: #fff;
    font-weight: bold;
}

.live-bikepark-contenu {
    display: block;
    margin-top: 15px;
    border-top: 1px solid #000;
    padding-top: 5px;
}

.live-bikepark-contenu .ligne {
    display: block;
    padding-top: 7px;
    text-align: center;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 20px;
}

.live-bikepark-contenu .ligne strong {
    color: #000;
}

.live-bikepark-fond {
    background-color: #e2001a;
    padding: 10px 10px 30px 10px;
    color: #fff;
}

.live-bikepark-titre {
    display: block;
    text-align: center;
    color: #fff;
    font-size: 36px;
    font-weight: bold;
    text-transform: uppercase;
    padding-top: 5px;
}

.live-bikepark-titre .picto {
    display: inline-block;
    width: 50px;
    height: 50px;
    background: url(/images/live-bikepark.png) no-repeat;
    background-size: 50px 50px;
    vertical-align: middle;
    margin: 0 0 0 20px;
}

.live-choix {
    display: block;
    height: 50px;
    float: left;
    padding-left: 0;
}

.live-choix a {
    display: inline-block;
    background-color: #e2001a;
    color: #fff;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 50px;
    padding: 0 30px 0 30px;
    border-right: 1px solid #fff;
    vertical-align: middle;
}

.live-choix a:hover {
    background-color: #ff0000;
    color: #fff;
}

.live-choix a i {
    font-size: 24px;
    margin-left: 5px;
    vertical-align: middle;
}

.live-contact {
    display: inline-block;
    background-color: #fff;
    border: 2px solid #e2001a;
    padding: 0 10px 0 10px;
    margin: 0;
    height: 60px;
    line-height: 60px;
    display: none;
}

.live-contact a.mail {
    display: inline-block;
    width: 35px;
    height: 25px;
    background: url(/images/live-mail.png) no-repeat;
    background-size: 35px 25px;
    vertical-align: middle;
    margin: 0 10px 0 10px;
}

.live-contact a.mail:hover {
    width: 33px;
    height: 24px;
    background-size: 33px 24px;
    margin: 0 11px 0 11px;
}

.live-contact a.telephone {
    display: inline-block;
    width: 25px;
    height: 25px;
    background: url(/images/live-telephone.png) no-repeat;
    background-size: 25px 25px;
    vertical-align: middle;
    margin: 0 10px 0 10px;
}

.live-contact a.telephone:hover {
    width: 23px;
    height: 23px;
    background-size: 23px 23px;
    margin: 0 11px 0 11px;
}

.live-contenu1 {
    padding: 10px;
}

.live-contenu1-fond {
    background-color: #e2001a;
    padding: 10px;
    color: #fff;
    min-height: 570px;
}

.live-contenu2 {
    padding: 10px;
}

.live-contenu2-fond {
    background-color: #e2001a;
    padding: 10px;
    color: #fff;
    min-height: 570px;
}

.live-contenu3 {
    padding: 10px;
}

.live-contenu-fond {
    position: absolute;
    width: 100%;
    z-index: 10;
    background-color: #bf0000;
    padding: 10px;
}

.live-contenu-zone {
    padding-right: 30px;
}

.live-enneigement,
.live-mobilite {
    display: inline-block;
    padding: 0 10px 0 10px;
}

.live-enneigement a,
.live-mobilite a {
    display: inline-block;
    color: #f5bfbf;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    vertical-align: middle;
}

.live-enneigement a:hover {
    color: #fff;
}

.live-enneigement a .picto {
    display: inline-block;
    width: 30px;
    height: 33px;
    background: url(/images/live-enneigement.png) no-repeat;
    background-size: 30px 33px;
    vertical-align: middle;
    margin: 0 5px 0 0;
}

.live-mobilite a .picto {
    display: inline-block;
    width: 30px;
    height: 33px;
    background: url(/images/live-mobilite.png) no-repeat;
    background-size: 30px 33px;
    vertical-align: middle;
    margin: 0 5px 0 0;
}

.live-enneigement a:hover .picto,
.live-mobilite a:hover .picto {
    width: 28px;
    height: 31px;
    background-size: 28px 31px;
    margin: 1px 6px 1px 1px;
}

.live-enneigement-bouton {
    display: block;
    margin-top: 10px;
    text-align: center;
}

.live-enneigement-bouton a {
    display: block;
    background-color: #a30000;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
    padding: 10px;
}

.live-enneigement-bouton a:hover {
    background-color: #ff0000;
    color: #fff;
}

.live-fond {
    display: inline-block;
    background-color: #e2001a;
    height: 50px;
    text-align: right;
    line-height: 50px;
    vertical-align: middle;
    overflow: hidden;
}

.live-luge {
    display: block;
}

.live-luge-t {
    display: table;
    width: 100%;
    padding: 0;
}

.live-luge-t1 {
    display: table-cell;
    padding: 5px 0 5px 0;
    color: #000;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
}

.live-luge-t2 {
    display: table-cell;
    padding: 5px 0 5px 5px;
    text-align: right;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 20px;
}

.live-meteo {
    display: inline-block;
    padding: 0 10px 0 10px;
}

.live-meteo a {
    display: inline-block;
    color: #f5bfbf;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    vertical-align: middle;
}

.live-meteo a:hover {
    color: #fff;
}

.live-meteo a img {
    width: 37px;
    height: 34px;
    vertical-align: middle;
    margin: 0 5px 2px 0;
}

.live-meteo a:hover img {
    width: 35px;
    height: 32px;
    margin: 1px 6px 3px 1px;
}

.live-meteo-lien {
    position: absolute;
    bottom: 15px;
    right: 15px;
}

.live-meteo-lien a {
    display: block;
    width: 39px;
    height: 39px;
    background: url(/images/plus2.png) no-repeat;
    background-size: 39px 78px;
}

.live-meteo-lien a:hover {
    width: 39px;
    height: 39px;
    background: url(/images/plus2.png) no-repeat scroll 0 -39px;
    background-size: 39px 78px;
}

.live-meteo-previsions {
    display: table;
    width: 100%;
    padding: 0;
    margin-top: 5px;
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;
}

.live-meteo-previsions1 {
    display: table-cell;
    width: 50%;
    padding: 15px;
    text-align: center;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    border-right: 1px solid #000;
}

.live-meteo-previsions1 img {
    height: 62px;
    margin: 5px;
    vertical-align: middle;
}

.live-meteo-previsions2 {
    display: table-cell;
    width: 50%;
    padding: 15px;
    text-align: center;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
}

.live-meteo-previsions2 img {
    height: 62px;
    margin: 5px;
    vertical-align: middle;
}

.live-meteo-temperatures {
    display: block;
    margin-top: 15px;
    border-top: 1px solid #000;
}

.live-meteo-temperatures strong {
    display: block;
    padding-top: 5px;
    padding-bottom: 5px;
    text-align: center;
    color: #000;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
}

.live-meteo-temperatures-t {
    display: table;
    width: 100%;
    padding: 0;
}

.live-meteo-temperatures-t1 {
    display: table-cell;
    width: 50%;
    padding: 5px 0 5px 0;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 20px;
}

.live-meteo-temperatures-t2 {
    display: table-cell;
    width: 23%;
    padding: 5px;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 20px;
}

.live-meteo-temperatures-t3 {
    display: table-cell;
    width: 27%;
    padding: 5px 0 5px 0;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 20px;
    text-align: right;
}

.live-meteo-titre {
    display: block;
    text-align: center;
    color: #fff;
    font-size: 36px;
    font-weight: bold;
    text-transform: uppercase;
    padding-top: 5px;
}

.live-meteo-titre img {
    width: 76px;
}

.live-neige {
    display: block;
    margin-top: 15px;
    border-top: 1px solid #000;
}

.live-neige strong {
    display: block;
    padding-top: 5px;
    padding-bottom: 5px;
    text-align: center;
    color: #000;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
}

.live-neige-lien {
    position: absolute;
    bottom: 15px;
    right: 15px;
}

.live-neige-lien a {
    display: block;
    width: 39px;
    height: 39px;
    background: url(/images/plus2.png) no-repeat;
    background-size: 39px 78px;
}

.live-neige-lien a:hover {
    width: 39px;
    height: 39px;
    background: url(/images/plus2.png) no-repeat scroll 0 -39px;
    background-size: 39px 78px;
}

.live-neige-t {
    display: table;
    width: 100%;
    padding: 0;
}

.live-neige-t1 {
    display: table-cell;
    width: 50%;
    padding: 5px 0 5px 0;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 20px;
}

.live-neige-t2 {
    display: table-cell;
    width: 23%;
    padding: 5px;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 20px;
}

.live-neige-t3 {
    display: table-cell;
    width: 27%;
    padding: 5px 0 5px 0;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 20px;
    text-align: right;
}

.live-neige-titre {
    display: block;
    text-align: center;
    color: #fff;
    font-size: 36px;
    font-weight: bold;
    text-transform: uppercase;
    padding-top: 5px;
}

.live-neige-titre .picto {
    display: inline-block;
    width: 45px;
    height: 50px;
    background: url(/images/live-enneigement.png) no-repeat;
    background-size: 45px 50px;
    vertical-align: middle;
    margin: 0 0 0 20px;
}

.live-news { /* display:inline-block; */
    display: none;
}

.live-news a {
    display: inline-block;
    width: 28px;
    height: 27px;
    background: url(/images/live-news.png) no-repeat;
    background-size: 28px 27px;
    vertical-align: middle;
    margin: 0 10px 0 10px;
}

.live-news a:hover {
    width: 26px;
    height: 25px;
    background-size: 26px 25px;
    margin: 0 11px 0 11px;
}

.live-pistes-contenu {
    display: block;
    margin-top: 15px;
    border-top: 1px solid #000;
    padding-top: 5px;
}

.live-pistes-contenu .ligne {
    display: block;
    padding-top: 7px;
    text-align: center;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 20px;
}

.live-pistes-contenu .ligne strong {
    color: #000;
}

.live-pistes-fond {
    background-color: #e2001a;
    padding: 10px 10px 30px 10px;
    color: #fff;
}

.live-pistes-titre {
    display: block;
    text-align: center;
    color: #fff;
    font-size: 36px;
    font-weight: bold;
    text-transform: uppercase;
    padding-top: 5px;
}

.live-pistes-titre .picto {
    display: inline-block;
    width: 52px;
    height: 50px;
    background: url(/images/live-pistes.png) no-repeat;
    background-size: 52px 50px;
    vertical-align: middle;
    margin: 0 0 0 20px;
}

.live-plan { /* display:inline-block; */
    display: none;
}

.live-plan a {
    display: inline-block;
    width: 33px;
    height: 34px;
    background: url(/images/plan-station.png) no-repeat;
    background-size: 33px 34px;
    vertical-align: middle;
    margin: 0 10px 4px 10px;
}

.live-plan a:hover {
    width: 31px;
    height: 32px;
    background-size: 31px 32px;
    margin: 0 11px 4px 11px;
}

.live-remontees {
    display: inline-block;
    padding: 0 10px 0 10px;
}

.live-remontees a {
    display: inline-block;
    color: #f5bfbf;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
    vertical-align: middle;
}

.live-remontees a:hover {
    color: #fff;
}

.live-remontees a strong {
    font-size: 16px;
}

.live-remontees a .picto {
    display: inline-block;
    width: 27px;
    height: 35px;
    background: url(/images/live-remontees.png) no-repeat;
    background-size: 27px 35px;
    vertical-align: middle;
    margin: 0 5px 6px 0;
}

.live-remontees a:hover .picto {
    width: 25px;
    height: 32px;
    background-size: 25px 32px;
    margin: 1px 6px 8px 1px;
}

.live-remontees-contenu {
    display: block;
    margin-top: 15px;
    border-top: 1px solid #000;
}

.live-remontees-contenu strong {
    display: block;
    padding-top: 5px;
    padding-bottom: 5px;
    text-align: center;
    color: #000;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
}

.live-remontees-lien {
    position: absolute;
    bottom: 15px;
    right: 15px;
}

.live-remontees-lien a {
    display: block;
    width: 39px;
    height: 39px;
    background: url(/images/plus2.png) no-repeat;
    background-size: 39px 78px;
}

.live-remontees-lien a:hover {
    width: 39px;
    height: 39px;
    background: url(/images/plus2.png) no-repeat scroll 0 -39px;
    background-size: 39px 78px;
}

.live-remontees-t {
    display: table;
    width: 100%;
    padding: 0;
}

.live-remontees-t1 {
    display: table-cell;
    width: 67%;
    padding: 5px 0 5px 0;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 18px;
}

.live-remontees-t2 {
    display: table-cell;
    width: 33%;
    padding: 5px 0 5px 5px;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 16px;
    text-align: right;
}

.live-remontees-titre {
    display: block;
    text-align: center;
    color: #fff;
    font-size: 36px;
    font-weight: bold;
    text-transform: uppercase;
    padding-top: 5px;
}

.live-remontees-titre .picto {
    display: inline-block;
    width: 39px;
    height: 50px;
    background: url(/images/live-remontees.png) no-repeat;
    background-size: 39px 50px;
    vertical-align: middle;
    margin: 0 0 0 20px;
}

.live-webcams {
    display: inline-block;
}

.live-webcams a {
    display: inline-block;
    width: 34px;
    height: 24px;
    background: url(/images/live-webcams.png) no-repeat;
    background-size: 34px 24px;
    vertical-align: middle;
    margin: 0 10px 0 10px;
}

.live-webcams a:hover {
    width: 32px;
    height: 22px;
    background-size: 32px 22px;
    margin: 0 11px 0 11px;
}

.live-webcams-fond {
    padding: 0;
    margin-top: 20px;
    text-align: center;
}

.live-webcams-fond a {
    display: block;
    background-color: #8f0000;
    color: #fff;
    font-size: 24px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 30px;
    padding: 40px 10px 40px 10px;
}

.live-webcams-fond a:hover {
    background-color: #ff0000;
    color: #fff;
}

.live-webcams-fond a .picto, .live-webcams-fond a:hover .picto {
    display: block;
    width: 45px;
    height: 32px;
    background: url(/images/live-webcams.png) no-repeat;
    background-size: 45px 32px;
    margin: 5px auto 0 auto;
}

.logo {
    padding: 0;
}

.logo img {
    width: 250px;
}

.logo-m {
    display: none;
}

.logo-m-rm {
    display: none;
}

.logo-menu-zone {
    background: white;
}

.milieu {
    padding-top: 20px;
}

.milieu-droite {
    padding-left: 10px;
}

.milieu-droite .bloc-carte {
    display: block;
    width: 100%;
    border: 1px solid #e2001a;
    padding: 5px 5px 0 5px;
    margin: -1px 0 30px 0;
}

.milieu-droite .bloc-carte iframe {
    width: 100%;
    height: 500px;
}

.milieu-droite .bloc-contenu {
    display: block;
    padding: 15px 15px 30px 15px;
}

.milieu-droite .bloc-titre {
    display: block;
    border-bottom: 1px solid #dadada;
    color: #738294;
    font: 26px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 30px;
    text-transform: uppercase;
    padding: 10px 15px 10px 15px;
    margin-top: 1px;
}

.milieu-droite .bloc-titre strong {
    font-weight: normal;
}

.milieu-droite .bloc-titre a .fa-angle-down {
    display: block;
    margin: -2px 0 0 10px;
    padding: 0;
    color: #738294;
    font-size: 36px;
    float: right;
}

.milieu-droite .bloc-titre a .fa-angle-up {
    display: block;
    margin: -4px 0 0 10px;
    padding: 0;
    color: #738294;
    font-size: 36px;
    float: right;
}

.milieu-droite .bloc-titre a:hover i {
    color: #ff0000;
}

.milieu-droite .bloc-titre-special {
    display: block;
    border-bottom: 1px solid #dadada;
    color: #e2001a;
    font: 26px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 30px;
    text-transform: uppercase;
    padding: 10px 15px 10px 15px;
    margin-top: 1px;
}

.milieu-droite .bloc-titre-special a .fa-angle-down {
    display: block;
    margin: -2px 0 0 10px;
    padding: 0;
    color: #738294;
    font-size: 36px;
    float: right;
}

.milieu-droite .bloc-titre-special a .fa-angle-up {
    display: block;
    margin: -4px 0 0 10px;
    padding: 0;
    color: #738294;
    font-size: 36px;
    float: right;
}

.milieu-droite .bloc-titre-special a:hover i {
    color: #ff0000;
}

.milieu-gauche {
    padding-right: 10px;
}

.milieu-gauche .moteur-formulaire .f-jourski1 {
    position: relative;
}

.milieu-gauche .moteur-formulaire .f-jourski1 #div_depart_cal {
    position: absolute;
    width: auto;
    height: auto;
    left: -5px;
    top: -50px;
    z-index: 50;
    visibility: visible;
    background-color: #f0f0f0;
    border: 0;
    border-bottom: 1px solid #dfdfde;
    text-align: left;
    padding: 10px;
}

.milieu-gauche .moteur-formulaire .f-jourski1 .calendrier {
    display: inline-block;
    background-color: #f0f0f0;
    border: 0;
    border-bottom: 1px solid #dfdfde;
    width: 15%;
    height: 48px;
    margin: 0;
    text-align: right;
    vertical-align: middle;
}

.milieu-gauche .moteur-formulaire .f-jourski1 .calendrier img {
    height: 36px;
    margin: 6px 6px 0 0;
}

.milieu-gauche .moteur-formulaire .f-jourski1 input, .milieu-gauche .moteur-formulaire .f-jourski1 input:focus {
    width: 85%;
    vertical-align: middle;
}

.milieu-gauche .moteur-formulaire #r-jourarrivee {
    position: relative;
}

.milieu-gauche .moteur-formulaire #r-jourarrivee #div_depart_cal {
    position: absolute;
    width: auto;
    height: auto;
    left: -5px;
    top: -50px;
    z-index: 50;
    visibility: visible;
    background-color: #f0f0f0;
    border: 0;
    border-bottom: 1px solid #dfdfde;
    text-align: left;
    padding: 10px;
}

.milieu-gauche .moteur-formulaire #r-jourarrivee .calendrier {
    display: inline-block;
    background-color: #f0f0f0;
    border: 0;
    border-bottom: 1px solid #dfdfde;
    width: 15%;
    height: 48px;
    margin: 0;
    text-align: right;
    vertical-align: middle;
}

.milieu-gauche .moteur-formulaire #r-jourarrivee .calendrier img {
    height: 36px;
    margin: 6px 6px 0 0;
}

.milieu-gauche .moteur-formulaire #r-jourarrivee input, .milieu-gauche .moteur-formulaire #r-jourarrivee input:focus {
    width: 85%;
    vertical-align: middle;
}

.milieu-gauche .moteur-formulaire #r-jourdepart {
    position: relative;
}

.milieu-gauche .moteur-formulaire #r-jourdepart #div_depart_cal {
    position: absolute;
    width: auto;
    height: auto;
    left: -5px;
    top: -50px;
    z-index: 50;
    visibility: visible;
    background-color: #f0f0f0;
    border: 0;
    border-bottom: 1px solid #dfdfde;
    text-align: left;
    padding: 10px;
}

.milieu-gauche .moteur-formulaire #r-jourdepart .calendrier {
    display: inline-block;
    background-color: #f0f0f0;
    border: 0;
    border-bottom: 1px solid #dfdfde;
    width: 15%;
    height: 48px;
    margin: 0;
    text-align: right;
    vertical-align: middle;
}

.milieu-gauche .moteur-formulaire #r-jourdepart .calendrier img {
    height: 36px;
    margin: 6px 6px 0 0;
}

.milieu-gauche .moteur-formulaire #r-jourdepart select {
    width: 85%;
    vertical-align: middle;
}

.milieu-gauche .moteur-formulaire .autrescriteres {
    display: block;
    padding: 10px;
    margin-top: 1px;
    color: #3c3c3c;
    font-size: 14px;
}

.milieu-gauche .moteur-formulaire .autrescriteres input, .milieu-gauche .moteur-formulaire .autrescriteres input:focus {
    width: auto;
    height: auto;
    margin: 2px 6px 5px 0;
    vertical-align: middle;
}

.milieu-gauche .moteur-formulaire div {
    padding: 0;
}

.milieu-gauche .moteur-formulaire input, .milieu-gauche .moteur-formulaire input:focus {
    width: 100%;
    height: 48px;
    color: #444444;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    background-color: #f0f0f0;
    border: 0;
    border-bottom: 1px solid #dfdfde;
    margin: 0;
    padding: 7px;
    cursor: pointer;
}

.milieu-gauche .moteur-formulaire select {
    width: 100%;
    height: 48px;
    background: url(/images/select.png) no-repeat right #fff;
    background-size: 18px 8px;
    border: 0;
    border-bottom: 1px solid #dfdfde;
    background-color: #f0f0f0;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    color: #444444 !important;
    font-size: 14px;
    text-transform: uppercase;
    margin: 0;
    padding: 5px;
    cursor: pointer;
    color: #444444;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
}

.milieu-gauche .moteur-zone {
    display: block;
    border: 1px solid #dfdfde;
}

.milieu-gauche .moteur-zone .bouton {
    display: block;
}

.milieu-gauche .moteur-zone .bouton a {
    display: block;
    padding: 15px 5px 15px 5px;
    background-color: #f0f0f0;
    border: 0;
    border-top: 1px solid #dfdfde;
    text-align: center;
    color: #444444;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 18px;
}

.milieu-gauche .moteur-zone .bouton a:hover {
    background-color: #e5e5e5;
    color: #e2001a;
}

.moteur {
    margin-top: -200px;
    text-align: center;
}

.moteur select {
    width: 100%;
    height: 83px;
    background: url(/images/select.png) no-repeat right #fff;
    background-size: 18px 8px;
    border: 0;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    color: #3c3c3c;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    padding: 5px;
    margin: 0;
    vertical-align: middle;
    cursor: pointer;
}

.moteur-bouton input {
    width: 100%;
    height: 48px;
    background-color: #e2001a;
    border: 0;
    text-align: center;
    color: #fff;
    font: 18px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 48px;
    font-weight: normal;
}

.moteur-bouton input:hover {
    background-color: #ff0000;
    color: #fff;
}

.moteur-bouton-light input {
    width: 100%;
    height: 48px;
    background-color: transparent;
    border: 0;
    text-align: center;
    color: #e2001a;
    font: 18px OpenSans, DinBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    line-height: 48px;
}

.moteur-bouton-light input:hover {
    background-color: #ff0000;
    color: #fff;
}

.moteur-boutons {
    display: block;
}

#moteur-formulaire1, #moteur-formulaire2, #moteur-formulaire3 {
    display: block;
    width: 70%;
    text-align: center;
    padding: 8px 0 0 0;
    margin: 0 auto 0 auto;
}

#moteur-formulaire1 {
    /* REFONTE */
    width: 100%;
}

#moteur-formulaire1 .r-bouton {
    display: inline-block;
    width: 100%;
    vertical-align: middle;
}

#moteur-formulaire1 .r-bouton input {
    display: block;
    width: 100%;
    height: 83px;
    background-color: #e2001a;
    border: 0;
    text-align: center;
    color: #fff;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 83px;
}

#moteur-formulaire1 .r-bouton input:hover {
    background-color: #ff0000;
    color: #fff;
}

#moteur-formulaire1 #r-jourarrivee {
    text-align: left;
    background-color: #fff;
}

#moteur-formulaire1 #r-jourarrivee .calendrier {
    display: inline-block;
    width: 25%;
    height: 83px;
    margin: 0;
    text-align: center;
    vertical-align: middle;
}

#moteur-formulaire1 #r-jourarrivee .calendrier img {
    height: 23px;
    margin: 30px 0 0 0;
}

#moteur-formulaire1 #r-jourarrivee #div_depart_cal {
    position: absolute;
    width: auto;
    height: auto;
    top: -50px;
    z-index: 50;
    visibility: visible;
    background-color: #fff;
    border: 1px solid #000;
    text-align: left;
    padding: 10px;
    margin-left: -50px;
}

#moteur-formulaire1 #r-jourarrivee input {
    width: 75%;
    height: 83px;
    background-color: #fff;
    border: 1px solid #fff;
    color: #3c3c3c;
    font-size: 14px !important;
    font-family: OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    padding: 5px;
    margin: 0;
    vertical-align: middle;
    cursor: pointer;
}

#moteur-formulaire1 #r-jourdepart {
    text-align: left;
    background-color: #fff;
}

#moteur-formulaire1 #r-jourdepart .calendrier {
    display: inline-block;
    width: 25%;
    height: 83px;
    margin: 0;
    text-align: center;
    vertical-align: middle;
}

#moteur-formulaire1 #r-jourdepart .calendrier img {
    height: 23px;
    margin: 30px 0 0 0;
}

#moteur-formulaire1 #r-jourdepart #div_fin_cal {
    position: absolute;
    width: auto;
    height: auto;
    top: -50px;
    z-index: 50;
    visibility: visible;
    background-color: #fff;
    border: 1px solid #000;
    text-align: left;
    padding: 10px;
    margin-left: -50px;
}

#moteur-formulaire1 #r-jourdepart input {
    width: 75%;
    height: 83px;
    background-color: #fff;
    border: 1px solid #fff;
    color: #3c3c3c;
    font-size: 14px !important;
    font-family: OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    margin: 0;
    vertical-align: middle;
    cursor: pointer;
}

.zone4.personneZone {
    vertical-align: top;
}

#moteur-formulaire1 #r-nombrepersonnes {
    height: 83px;
    align-items: center;
    text-align: left;
    background-color: #fff;
    position: relative;
}

#moteur-formulaire1 #r-nombrepersonnes .buttonPersonnesLabel {
    border: none;
    /* REFONTE */
    width: auto;
    padding-right: 50px;
    color: #3c3c3c;
    font-family: OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    cursor: pointer;
}

#moteur-formulaire1 .buttonPersonnes {
    color: #3c3c3c;
    position: absolute;
    right: 0;
}

#moteur-formulaire1 .buttonPersonnes[data-inc="plus"] {
    top: 5px;
}

#moteur-formulaire1 .buttonPersonnes[data-inc="less"] {
    bottom: 5px;
}

#moteur-formulaire1 .buttonPersonnes:hover {
    color: white !important;
    background: #3c3c3c !important;
}

@media only screen and (max-width: 64em) {
    #moteur-formulaire1 #r-nombrepersonnes {
        height: 48px;
    }

    #moteur-formulaire1 #r-nombrepersonnes,
    #moteur-formulaire1 .buttonPersonnes {
        position: static;
    }
}

#moteur-formulaire1 .zone1, #moteur-formulaire1 .zone2, #moteur-formulaire1 .zone3, #moteur-formulaire1 .zone4, #moteur-formulaire1 .zone5 {
    display: inline-block;
    /*width: 19.5%;*/
    width: auto;
    margin: 0 -1px 0 -2px;
}

#moteur-formulaire1 .zone1 select {
    padding-right: 22px;
}

/*


#moteur-formulaire1 .zone1 select {
    !*width: 24.5%;*!
    !*width: 20.5%;*!
    padding-right: 22px;
}

#moteur-formulaire1 .zone2 img, #moteur-formulaire1 .zone3 img {
    margin-left: -40px !important;
    margin-right: 20px !important;
}

#moteur-formulaire1 #r-jourarrivee input {
    width: auto;
}

#moteur-formulaire1 .zone4 {
    min-width: 180px;
}
*/

#moteur-formulaire2 .f-bouton {
    display: inline-block;
    width: 100%;
    vertical-align: middle;
}

#moteur-formulaire2 .f-bouton input {
    display: block;
    width: 100%;
    height: 83px;
    background-color: #e2001a;
    border: 0;
    text-align: center;
    color: #fff;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 83px;
}

#moteur-formulaire2 .f-bouton input:hover {
    background-color: #ff0000;
    color: #fff;
}

#moteur-formulaire2 .f-jourski1 {
    text-align: left;
    background-color: #fff;
}

#moteur-formulaire2 .f-jourski1 .calendrier {
    display: inline-block;
    width: 25%;
    height: 83px;
    margin: 0;
    text-align: center;
    vertical-align: middle;
}

#moteur-formulaire2 .f-jourski1 .calendrier img {
    height: 23px;
    margin: 30px 0 0 0;
}

#moteur-formulaire2 .f-jourski1 #div_depart_cal {
    position: absolute;
    width: auto;
    height: auto;
    top: -50px;
    z-index: 50;
    visibility: visible;
    background-color: #fff;
    border: 1px solid #000;
    text-align: left;
    padding: 10px;
    margin-left: -50px;
}

#moteur-formulaire2 .f-jourski1 input {
    width: 75%;
    height: 83px;
    background-color: #fff;
    border: 1px solid #fff;
    color: #3c3c3c;
    font-size: 14px !important;
    font-family: OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    padding: 5px;
    margin: 0;
    vertical-align: middle;
    cursor: pointer;
}

#moteur-formulaire2 .zone1, #moteur-formulaire2 .zone2, #moteur-formulaire2 .zone3, #moteur-formulaire2 .zone4, #moteur-formulaire2 .zone5 {
    display: inline-block;
    width: 19.5%;
    margin: 0 -1px 0 -2px;
}

#moteur-formulaire3 .bouton {
    display: block;
}

#moteur-formulaire3 .bouton a {
    display: block;
    height: 83px;
    padding-left: 5px;
    padding-right: 5px;
    background-color: #fff;
    text-align: center;
    color: #3c3c3c;
    font: 12px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 83px;
    overflow: hidden;
}

#r-nombrepersonnes {
    display: flex;
    flex-direction: row;
}

#r-nombrepersonnes input {
    display: none;
}

.buttonPersonnesLabel {
    width: calc(100% - 64px);
    height: 40px;
    line-height: 30px;
    border: 1px solid #dfdfde;
    color: #8e8e8e;
    background: #FFF;
    padding: 5px 20px 5px 10px;
    font-family: "OpenSans", "DinBold", Arial, Helvetica, Sans-serif;
}

.buttonPersonnes {
    width: 32px;
    height: 40px;
    line-height: 40px;
    font-size: 20px;
    color: #FFF;
    background: rgba(73, 73, 73, 0.9);
    text-align: center;
    user-select: none;
    cursor: pointer;
    touch-action: manipulation;
    transition: background 0.25s ease-out;
}

.buttonPersonnes:last-child {
    border-left: solid 1px rgba(255, 255, 255, 0.2);
}

.buttonPersonnes:hover {
    background: #494949;
    color: #FFF !important;
}

.buttonPersonnes.is-disabled {
    cursor: not-allowed;
    background: rgba(73, 73, 73, 0.5) !important;
}

#moteur-formulaire3 .bouton a:hover {
    background-color: #e2001a;
    color: #fff;
}

#moteur-formulaire3 .zone1, #moteur-formulaire3 .zone2, #moteur-formulaire3 .zone3, #moteur-formulaire3 .zone4, #moteur-formulaire3 .zone5 {
    display: inline-block;
    width: 19.5%;
    margin: 0 -1px 0 -2px;
}

@media only screen and (max-width: 64em) and (min-width: 40.063em) {

}

.moteur-m {
    display: block;
}

.moteur-m-bouton1-zone {
    display: none;
}

.moteur-m-bouton2-zone {
    display: none;
}

.moteur-m-message {
    display: none;
    width: 0;
    height: 0;
    padding: 0;
    top: 0;
    background-image: none;
    overflow: hidden;
}

.moteur-onglets {
    position: relative;
    width: 70%;
    text-align: center;
    padding: 0;
    color: #3c3c3c;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    margin: 0 auto 0 auto;
}

.moteur-onglets a {
    display: inline-block;
    color: #3c3c3c;
    font-weight: normal;
    margin: 0 3px 0 3px;
    opacity: 0.4;
}

.moteur-onglets a .libelle {
    display: inline-block;
    background-color: #fff;
    padding: 10px 30px 10px 30px;
}

.moteur-onglets a .picto {
    display: none;
}

.moteur-onglets a:hover {
    opacity: 1;
}

.moteur-onglets a.on {
    opacity: 1;
}

.moteur-onglets a.on .picto {
    display: block;
    width: 13px;
    height: 8px;
    background: url(/images/moteur-onglet.png) no-repeat;
    background-size: 13px 8px;
    margin: 0 auto 0 auto;
}

.moteurFixe {
    position: fixed;
    width: 100%;
    bottom: 0;
}

.nbresultats {
    display: block;
    color: #373737;
    font: 26px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    line-height: 32px;
    text-transform: uppercase;
    padding-bottom: 20px;
    margin: 0;
}

.nbresultats strong {
    font-family: RobotoCondensedBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
}

.non {
    display: none;
}

.onglet a {
    display: block;
    background-color: #738294;
    text-align: center;
    color: #fff;
    font: 16px OpenSansBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 22px;
    padding: 15px 10px 15px 10px;
    margin-bottom: 1px;
}

.onglet a:hover {
    background-color: #e2001a;
    color: #fff;
}

.onglet-actif {
    display: block;
    background-color: #738294;
    text-align: center;
    color: #fff;
    font: 16px OpenSansBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 22px;
    padding: 15px 10px 15px 10px;
}

.pages, .pages-bas {
    display: block;
    background-color: #e5e5e5;
    padding: 5px 15px 5px 15px;
    color: #e2001a;
    font-size: 18px;
    line-height: 20px;
    text-transform: uppercase;
}

.pages .off, .pages-bas .off {
    display: inline-block;
    color: #000;
    padding: 5px;
}

.pages a, .pages-bas a {
    display: inline-block;
    color: #e2001a;
    font-weight: normal;
    padding: 5px;
}

.pages a:hover, .pages-bas a:hover {
    color: #ff0000;
}

.pages-bas {
    margin-top: 25px;
}

.panier {
    display: block;
    padding-bottom: 20px;
}

.panier a {
    display: block;
    background-color: #e2001a;
    text-align: center;
    color: #fff;
    font: 16px DinRegular, Arial, Helvetica, Sans-serif;
    line-height: 18px;
    padding: 12px 10px 12px 10px;
}

.panier a:hover, .panier a:hover strong {
    background-color: #ff0000;
    color: #fff;
}

.panier a strong {
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 22px;
    text-transform: uppercase;
}

.panier-m-entete {
    display: none;
}

.pied1 {
    text-align: center;
    padding-top: 30px;
}

.pied1 a {
    display: inline-block;
    font: 12px OpenSansBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 15px;
    margin: 2px 21px 2px 21px;
}

.pied1-zone-m {
    display: none;
}

.pied2 {
    padding-right: 0;
}

.pied2-coordonnees-horaires {
    display: table-cell;
    width: 31.7%;
    text-align: center;
    vertical-align: middle;
    padding: 15px;
    color: #fff;
    font: 14px OpenSans, Arial, Helvetica, Sans-serif;
    line-height: 18px;
}

.pied2-coordonnees-horaires .telephone {
    display: inline-block;
    background-color: #fff;
    padding: 10px 15px 10px 15px;
    margin: 20px 0 20px 0;
    color: #e2001a;
    font-family: OpenSansBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
}

.pied2-coordonnees-horaires .telephone a, .pied2-coordonnees-horaires .telephone a:hover {
    color: #e2001a;
    font-weight: normal;
    text-decoration: none;
}

.pied2-coordonnees-horaires .zone {
    display: inline-block;
    width: auto;
    margin: 0 auto 0 auto;
    text-align: left;
}

.pied2-coordonnees-horaires a.telephone, .pied2-coordonnees-horaires a.telephone:hover {
    color: #e2001a;
    font-weight: normal;
    text-decoration: none;
}

.pied2-coordonnees-horaires a {
    color: #fff;
}

.pied2-coordonnees-horaires a:hover {
    color: #fff;
    text-decoration: underline;
}

.pied2-coordonnees-horaires strong {
    font-family: OpenSansBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
}

.pied2-fond {
    display: block;
    background-color: #e2001a;
    margin-top: 15px;
}

.pied2-logo-messenger {
    display: table-cell;
    width: 28.8%;
    border-right: 1px solid #f1646d;
    text-align: center;
    padding: 15px;
}

.pied2-logo-messenger .pied-logo-messenger {
    display: table;
    width: 280px;
}

.pied2-logo-messenger .pied-logo-messenger1 {
    display: table-row;
}

.pied2-logo-messenger .pied-logo-messenger1 .pied-logo {
    display: table-cell;
    width: 280px;
    height: 210px;
    text-align: center;
    vertical-align: middle;
}

.pied2-logo-messenger .pied-logo-messenger1 .pied-logo img {
    width: 280px;
}

.pied2-logo-messenger .pied-logo-messenger2 {
    display: table-row;
}

.pied2-logo-messenger .pied-logo-messenger2 .pied-messenger {
    display: table-cell;
    width: 280px;
    border-top: 1px solid #f1646d;
    padding: 20px 15px 0 15px;
    text-align: left;
    vertical-align: top;
    color: #fff;
}

.pied2-logo-messenger .pied-logo-messenger2 .pied-messenger a {
    color: #fff;
    font: 14px OpenSansBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    line-height: 18px;
}

.pied2-logo-messenger .pied-logo-messenger2 .pied-messenger a .picto {
    display: block;
    width: 31px;
    height: 29px;
    background: url(/images/picto-messenger.png) no-repeat;
    background-size: 31px 29px;
    float: left;
    margin: 3px 10px 15px 0;
}

.pied2-plan {
    display: table-cell;
    width: 31.7%;
    background: url(/images/pied-plan-station.jpg) no-repeat center;
    text-align: center;
    vertical-align: middle;
    padding: 15px;
    color: #fff;
    text-transform: uppercase;
}

.pied2-plan a {
    display: block;
    color: #fff;
    font: 34px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    line-height: 35px;
}

.pied2-plan a .picto {
    display: block;
    width: 34px;
    height: 35px;
    background: url(/images/plus.png) no-repeat;
    background-size: 34px 70px;
    margin: 0 auto 20px auto;
}

.pied2-plan a:hover .picto {
    background: url(/images/plus.png) no-repeat scroll 0 -35px;
    background-size: 34px 70px;
}

.pied2-plan a strong {
    font: 38px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    line-height: 35px;
}

.pied2-social {
    display: table-cell;
    width: 7.8%;
    border-right: 1px solid #f1646d;
    text-align: center;
    vertical-align: middle;
    padding: 15px 5px 30px 5px;
}

.pied2-social a i {
    display: block;
    width: 50px;
    height: 50px;
    background-color: #fff;
    border: 2px solid #fff;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    color: #e2001a;
    line-height: 46px;
    text-align: center;
    vertical-align: middle;
    margin: 15px auto 0 auto;
}

.pied2-social a i.fa-facebook {
    font-size: 32px;
    font-weight: bold;
}

.pied2-social a i.fa-instagram {
    font-size: 30px;
}

.pied2-social a i.fa-twitter {
    font-size: 34px;
}

.pied2-social a i.fa-youtube-play {
    font-size: 30px;
}

.pied2-social a:hover i {
    background-color: #e2001a;
    border: 2px solid #fff;
    color: #fff;
}

.pied2-social-m {
    display: none;
}

.pied2-tableau {
    display: table;
    width: 100%;
}

.pied3 {
    padding-top: 25px;
    text-align: center;
    color: #373737;
    font: 14px OpenSans, Arial, Helvetica, Sans-serif;
    line-height: 18px;
}

.pied3 p {
    color: #373737;
    font: 14px OpenSans, Arial, Helvetica, Sans-serif;
    line-height: 18px;
}

.presentation {
    display: block;
    padding-bottom: 20px;
}

/*
.r-horaires-jour { padding-top:5px; }
.r-horaires-jour a.calendrierImage { display:inline-block; width:36px; height:36px; background:url(/images/calendrier.png) no-repeat; vertical-align:middle; margin:0 0 0 4px; }
.r-horaires-jour input { width:200px; background-color:#fff; border:1px solid #bdbdbd; color:#000; font:16px DinRegular, Arial, Helvetica, Sans-serif; font-weight:normal; vertical-align:middle; }
.r-horaires-jour-texte { padding-top:5px; }
.r-horaires-jour-titre { font-weight:bold; }
.r-horaires-jour-titre img { vertical-align:middle; }
.r-horaires-jour-zone { padding-top:20px; }
.r-horaires-jour-zone #divCalendrier { position:absolute; width:auto; height:auto; left:10px; top:0; z-index:60; border:1px solid #000; text-align:left; background-color:#fff; color:#000; padding:10px; }
.r-horaires-libelle strong { display:block; font:24px DinBold, Arial, Helvetica, Sans-serif; line-height:26px; }
.r-horaires-options { padding-top:5px; }
.r-horaires-options select { background-color:#fff; border:1px solid #bdbdbd; margin:0; color:#000; font:16px DinRegular, Arial, Helvetica, Sans-serif; font-weight:normal; vertical-align:middle; }
.r-horaires-options-date { padding-top:5px; }
.r-horaires-options-date strong { display:block; font-size:16px; line-height:17px; }
.r-horaires-options-titre { font-weight:bold; }
.r-horaires-options-titre img { vertical-align:middle; }
.r-horaires-options-zone { padding-top:20px; }
.r-horaires-options-zone #divPrixOption { padding-top:20px; padding-bottom:20px; }
*/

.resultat {
    padding: 10px;
    margin-top: 10px;
    border: 1px solid #dfdfde;
}

.resultat-avis {
    display: block;
    padding-top: 5px;
    color: #757575;
    font-size: 18px;
    line-height: 20px;
    text-align: right;
}

.resultat-avis a {
    display: block;
    margin-top: -5px;
    color: #e2001a;
    font-size: 14px;
    line-height: 16px;
    font-weight: normal;
}

.resultat-avis a:hover {
    color: #ff0000;
}

.resultat-avis img {
    margin: -5px 0 0 2px;
}

.resultat-avis strong {
    color: #000;
}

.resultat-bouton {
    display: block;
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: right;
}

.resultat-bouton a.carte {
    display: inline-block;
    width: 18px;
    height: 28px;
    background: url(/images/picto-carte.png) no-repeat;
    background-size: 18px 56px;
    vertical-align: middle;
}

.resultat-bouton a.carte:hover {
    background: url(/images/picto-carte.png) no-repeat scroll 0 -28px;
    background-size: 18px 56px;
}

.resultat-bouton a.infos {
    display: inline-block;
    max-width: 85%;
    background-color: #e2001a;
    text-align: center;
    color: #fff;
    font: 14px OpenSansBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    line-height: 18px;
    padding: 13px 35px 13px 35px;
    margin-left: 25px;
    vertical-align: middle;
}

.resultat-bouton a.infos:hover {
    background-color: #ff0000;
    color: #fff;
}

.resultat-descriptif {
    padding-top: 10px;
    font-size: 13px;
    line-height: 17px;
}

.resultat-droite {
    padding-left: 0;
}

.resultat-entete-produit1 .fournisseur, .resultat-entete-produit1 .fournisseur a,
.resultat-entete-produit1 .produit, .resultat-entete-produit1 .produit a,
.resultat-entete-produit2 {
    color: #b0c9e6;
    font: 26px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 30px;
    text-transform: uppercase;
}

/*
.resultat-entete-produit1 .produit, .resultat-entete-produit1 .produit a {
    padding-top: 5px;
    padding-right: 20px;
    color: #505050;
    font: 15px OpenSansLight, Arial, Helvetica, Sans-serif;
    line-height: 19px;
    text-transform: uppercase;
    font-style: italic;
}
*/

.resultat-entete-produit1 a {
    font-weight: normal;
}

.resultat-entete-produit1 h2, .resultat-entete-produit1 h3 {
    margin: 0;
}

.resultat-entete-produit1 img {
    height: 18px;
    vertical-align: middle;
    margin: 0 0 4px 0;
}

/*
.resultat-entete-produit2 {
    display: block;
    color: #505050;
    font: 15px OpenSansLight, Arial, Helvetica, Sans-serif;
    line-height: 19px;
    font-style: italic;
    padding-top: 5px;
}
*/

.resultat-photo {
    position: relative;
}

.resultat-photolien {
    display: block;
    text-align: center;
}

.resultat-photolien a.comparer {
    display: block;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #e2001a;
    color: #e2001a;
    font: 14px OpenSansBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 16px;
    padding: 10px;
}

.resultat-photolien a.comparer:hover {
    border: 1px solid #ff0000;
    color: #ff0000;
}

.resultat-photolien a.photos {
    display: block;
    margin-top: 10px;
    border: 1px solid #e2001a;
    color: #e2001a;
    font: 14px OpenSansBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 16px;
    padding: 10px;
}

.resultat-photolien a.photos:hover {
    border: 1px solid #ff0000;
    color: #ff0000;
}

.resultat-photolien .bouton-comparer-bulle {
    position: absolute;
    width: 100%;
    height: auto;
    left: 0;
    top: -16px;
    z-index: 60;
    border: 2px solid #000;
    text-align: left;
    background-color: #fff;
    padding: 10px;
    text-align: center;
}

.resultat-pictos img {
    border: 0;
    margin: 2px 4px 2px 0;
}

.resultat-prixduree {
    background-color: #738294;
    padding: 15px 5px 15px 5px;
    text-align: center;
    color: #fff;
    font: 16px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    line-height: 18px;
}

.resultat-prixduree .ancienprix {
    display: block;
    color: #c6c6c6;
    font: 30px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    text-decoration: line-through;
    line-height: 30px;
}

.resultat-prixduree .nouveauprix {
    display: block;
    color: #fff;
    font: 30px RobotoCondensedBold, Arial, Helvetica, Sans-serif;
    line-height: 30px;
}

.resultat-produit {
    background-color: #e5e5e5;
    border: 1px solid #e5e5e5;
    margin-bottom: 3px !important;
    padding: 5px;
    overflow: hidden;
}

.resultat-produit.actif {
    border: 1px solid #000;
}

.resultat-produit:hover {
    background-color: #fff;
    border: 1px solid #000;
}

.resultat-produit-dispos {
    text-align: center;
    background-color: #fff;
    color: #000;
    font-size: 12px;
    line-height: 13px;
    padding: 5px;
}

.resultat-produit-libelle {
    color: #757575;
    font-size: 12px;
    line-height: 13px;
    padding-left: 0;
}

.resultat-produit-libelle strong {
    color: #000;
    font-size: 12px;
    line-height: 13px;
}

.resultat-produit-prix {
    text-align: right;
    padding-right: 0;
    color: #757575;
    font-size: 12px;
    line-height: 13px;
}

.resultat-produit-prix .prix1 {
    font-size: 14px;
    line-height: 16px;
    color: #e2001a;
    text-decoration: line-through;
    margin: 0 5px 0 0;
}

.resultat-produit-prix .prix2 {
    font: 14px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 16px;
    color: #000;
}

.resultat-produit-remise {
    text-align: center;
    background-color: #000;
    padding-left: 2px;
    padding-right: 2px;
}

.resultat-produit-remise img {
    border: 0;
}

.resultat-produit-remise-none {
    padding-left: 5px;
    padding-right: 5px;
}

.resultat-produits-zone {
    padding: 0 15px 0 15px;
}

.resultat-produits-zone a, .resultat-produits-zone a:hover {
    font-weight: normal;
    text-decoration: none;
}

.resultat-promo-image {
    position: absolute;
    width: 61px;
    height: 31px;
    left: 0;
    top: 0;
    z-index: 3;
}

.resultat-promo-image img {
    width: 61px;
    height: 31px;
    border: 0;
}

.resultat-promo-texte {
    display: block;
    color: #000;
    font-size: 18px;
    line-height: 20px;
    text-transform: uppercase;
    padding-bottom: 5px;
}

.retour-liste {
    padding-bottom: 30px;
}

.retour-liste a {
    display: block;
    border-bottom: 1px solid #e2001a;
    padding-bottom: 10px;
    color: #e2001a;
    font-size: 24px;
    line-height: 28px;
    text-transform: uppercase;
}

.retour-liste a:hover {
    border-bottom: 1px solid #ff0000;
    color: #ff0000;
}

.rm-contenu {
    padding-top: 30px;
}

.rm-contenu iframe {
    vertical-align: middle;
}

.rm-contenu img {
    vertical-align: middle;
}

.rm-contenu-titre {
    padding: 100px 40px 0 40px;
    color: #373737;
    font: 26px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 30px;
}

.rm-contenu-titre strong {
    font-family: OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    line-height: 30px;
}

.rm-contenu-trait .trait {
    display: block;
    border-top: 1px solid #dadada;
    margin-top: 15px;
}

.rm-direct {
    display: block;
    border-bottom: 1px solid #dadada;
}

.rm-direct:hover {
    background-color: #f9f9f9;
}

.rm-direct-contenu {
    padding-top: 5px;
}

.rm-direct-contenu, .rm-direct-contenu a {
    color: #494949;
    font: 14px OpenSans, Arial, Helvetica, Sans-serif;
    font-style: italic;
    line-height: 18px;
}

.rm-direct-contenu img, .rm-direct-contenu a img {
    display: block;
    max-height: 20px;
    margin: 6px 15px 0 0;
    float: left;
}

.rm-direct-contenu strong, .rm-direct-contenu a strong {
    display: block;
    padding-bottom: 5px;
    color: #b0c9e7;
    font: 28px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 30px;
    font-weight: normal;
}

.rm-direct-photo {
    padding-left: 25px;
}

.rm-direct-picto {
    text-align: center;
    padding-top: 15px;
}

.rm-direct-picto .picto, .rm-direct-picto a .picto {
    display: inline-block;
    width: 24px;
    height: 24px;
    background: url(/images/plus4.png) no-repeat;
    background-size: 24px 48px;
}

.rm-direct-picto .picto:hover, .rm-direct-picto a:hover .picto {
    background: url(/images/plus4.png) no-repeat scroll 0 -24px;
    background-size: 24px 48px;
}

.rm-direct-zone a {
    display: table;
    width: 100%;
    height: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
}

.rm-domaineskiable {
    padding-top: 0;
}

.rm-domaineskiable iframe {
    width: 100%;
    height: 700px;
    margin-bottom: -5px;
}

.rm-evenement-calendrier {
    display: block;
    padding: 20px 0 20px 0;
    border-bottom: 1px solid #cedef0;
}

.rm-evenement-calendrier a {
    display: block;
    color: #fff;
    font: 12px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    line-height: 14px;
}

.rm-evenement-calendrier a:hover {
    color: #3f4751;
}

.rm-evenement-calendrier a strong {
    font: 16px RobotoCondensedBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    line-height: 18px;
}

.rm-evenements {
    padding-right: 0;
    overflow: hidden;
}

.rm-evenements .rm-evenement {
    text-align: center;
    overflow: hidden;
}

.rm-evenements .rm-evenement .date {
    display: block;
    height: 18px;
    margin-top: 10px;
    padding: 0 10px 0 10px;
    color: #505050;
    font: 14px OpenSansLight, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    font-style: italic;
    overflow: hidden;
}

.rm-evenements .rm-evenement .descriptif {
    display: block;
    max-height: 30px;
    margin-top: 10px;
    padding: 0 10px 0 10px;
    color: #494949;
    font: 12px OpenSans, Arial, Helvetica, Sans-serif;
    font-style: italic;
    line-height: 14px;
    overflow: hidden;
}

.rm-evenements .rm-evenement .libelle {
    display: block;
    max-height: 68px;
    margin-top: 10px;
    padding: 0 10px 0 10px;
    color: #b0c9e7;
    font: 20px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 22px;
    overflow: hidden;
}

.rm-evenements .rm-evenement .lien {
    display: block;
    margin-top: 10px;
    padding: 0 10px 0 10px;
}

.rm-evenements .rm-evenement .lien .picto {
    display: inline-block;
    width: 24px;
    height: 24px;
    background: url(/images/plus3.png) no-repeat;
    background-size: 24px 48px;
}

.rm-evenements .rm-evenement .photo {
    display: block;
    max-height: 310px;
    overflow: hidden;
}

.rm-evenements .rm-evenement a {
    display: block;
    width: 100%;
    height: 100%;
}

.rm-evenements-calendrier {
    padding-left: 0;
    padding-right: 0;
}

.rm-evenements-calendrier1 {
    display: block;
    padding: 0 20px 0 20px;
}

.rm-evenements-calendrier-contenu {
    display: block;
    width: 100%;
    height: 490px;
    padding: 5px;
    overflow: auto;
}

.rm-evenements-calendrier-fond {
    display: block;
    background-color: #b0c9e6;
    height: 500px;
    padding: 5px;
}

.rm-evenements-calendrier-lien {
    display: block;
    padding: 20px 0 20px 0;
    text-align: center;
}

.rm-evenements-calendrier-lien a {
    display: block;
    color: #738294;
    font: 16px RobotoCondensedBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    line-height: 18px;
}

.rm-evenements-calendrier-lien a:hover {
    color: #3f4751;
}

.rm-evenements-calendrier-lien a .picto {
    display: inline-block;
    width: 23px;
    height: 23px;
    background: url(/images/evenements-lien.png) no-repeat;
    background-size: 23px 46px;
    margin: 0 10px 2px 0;
    vertical-align: middle;
}

.rm-evenements-calendrier-lien a:hover .picto {
    background: url(/images/evenements-lien.png) no-repeat scroll 0 -23px;
    background-size: 23px 46px;
}

.rm-evenements-coeur {
    padding-left: 0;
}

.rm-evenements-coeur .rm-coeur {
    text-align: center;
    overflow: hidden;
}

.rm-evenements-coeur .rm-coeur .descriptif {
    display: block;
    max-height: 30px;
    margin-top: 10px;
    padding: 0 10px 0 10px;
    color: #494949;
    font: 12px OpenSans, Arial, Helvetica, Sans-serif;
    font-style: italic;
    line-height: 14px;
    overflow: hidden;
}

.rm-evenements-coeur .rm-coeur .libelle {
    display: block;
    max-height: 68px;
    margin-top: 10px;
    padding: 0 10px 0 10px;
    color: #e2001a;
    font: 20px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    line-height: 22px;
    overflow: hidden;
}

.rm-evenements-coeur .rm-coeur .lien {
    display: block;
    margin-top: 10px;
    padding: 0 10px 0 10px;
}

.rm-evenements-coeur .rm-coeur .lien .picto {
    display: inline-block;
    width: 24px;
    height: 24px;
    background: url(/images/plus3.png) no-repeat;
    background-size: 24px 48px;
}

.rm-evenements-coeur .rm-coeur .photo {
    display: block;
    max-height: 310px;
    overflow: hidden;
}

.rm-evenements-coeur .rm-coeur .pretitre {
    display: block;
    height: 18px;
    margin-top: 10px;
    padding: 0 10px 0 10px;
    color: #505050;
    font: 14px OpenSansLight, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    font-style: italic;
    overflow: hidden;
}

.rm-evenements-coeur .rm-coeur a {
    display: block;
    width: 100%;
    height: 100%;
}

.rm-evenements-titre1 {
    padding: 100px 15px 0 40px;
    color: #373737;
    font: 26px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 30px;
}

.rm-evenements-titre1 strong {
    font-family: OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    line-height: 30px;
}

.rm-evenements-titre2 {
    padding: 100px 40px 0 15px;
    color: #373737;
    font: 26px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 30px;
}

.rm-evenements-titre2 strong {
    font-family: OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    line-height: 30px;
}

.rm-evenements-titre2-m {
    display: none;
}

.rm-evenements-zone {
    margin-top: 20px;
}

.rm-formulaire-livraison {
    display: block;
    font-size: 12px;
    font-weight: bold;
}

.rm-formulaire-promotions {
    display: block;
    padding: 10px 25px 10px 25px;
    margin-bottom: 15px;
    background-color: #ececec;
}

.rm-formulaire-promotions .liste {
    padding: 0;
}

.rm-formulaire-promotions .liste-tableau {
    display: table;
    width: 100%;
    margin-bottom: 15px;
}

.rm-formulaire-promotions .liste-tableau-ligne {
    display: table-row;
}

.rm-formulaire-promotions .liste-tableau-promo1 {
    display: table-cell;
    border-bottom: 1px solid #fff;
    text-align: left;
    vertical-align: top;
    padding: 5px;
    font-size: 12px;
}

.rm-formulaire-promotions .liste-tableau-promo2 {
    display: table-cell;
    border-bottom: 1px solid #fff;
    text-align: left;
    vertical-align: top;
    padding: 5px;
    font-size: 12px;
}

.rm-formulaire-promotions .liste-tableau-titre1 {
    display: table-cell;
    background-color: #fff;
    border-right: 1px solid #ececec;
    text-align: left;
    vertical-align: top;
    padding: 5px;
    font-size: 12px;
}

.rm-formulaire-promotions .liste-tableau-titre2 {
    display: table-cell;
    background-color: #fff;
    border-left: 1px solid #ececec;
    text-align: left;
    vertical-align: top;
    padding: 5px;
    font-size: 12px;
}

.rm-formulaire-promotions .liste-titre {
    padding: 5px;
    background-color: #d4d4d4;
    font-size: 12px;
    font-weight: bold;
}

.rm-formulaire-promotions .saisie {
    padding: 0;
}

.rm-formulaire-promotions .saisie button {
    width: auto;
    padding-left: 15px;
    padding-right: 15px;
    margin: 0;
    background-color: #e2001a;
    float: left;
    font-size: 12px;
    font-family: 'OpenSans';
}

.rm-formulaire-promotions .saisie button:hover {
    background-color: #ff0000;
}

.rm-formulaire-promotions .saisie input {
    width: 60%;
    margin-right: 2px;
    float: left;
    font-size: 12px !important;
}

.rm-formulaire-promotions .saisie-attente {
    position: absolute;
    z-index: 4;
    right: 0;
}

.rm-formulaire-promotions .saisie-attente img {
    width: 35px;
    height: 35px;
}

.rm-live {
    text-align: right;
    z-index: 5;
    padding-right: 245px;
}

.rm-moteur {
    position: absolute;
    width: 228px;
    height: auto;
    top: 0;
    right: 15px;
    background-color: #1b222a;
}

.rm-moteur .f-jourski1 {
    position: relative;
}

.rm-moteur .f-jourski1 #div_depart_cal {
    position: absolute;
    width: auto;
    height: auto;
    right: -5px;
    top: -50px;
    z-index: 50;
    visibility: visible;
    background-color: #fff;
    border: 1px solid #000;
    text-align: left;
    padding: 10px;
}

.rm-moteur .f-jourski1 .calendrier {
    display: inline-block;
    background-color: #fff;
    width: 15%;
    height: 30px;
    margin: 0;
    text-align: right;
    vertical-align: middle;
}

.rm-moteur .f-jourski1 .calendrier img {
    height: 18px;
    margin: 6px 5px 0 0;
}

.rm-moteur .f-jourski1 input, .rm-moteur .f-jourski1 input:focus {
    width: 85% !important;
    vertical-align: middle;
}

.rm-moteur #r-jourarrivee {
    position: relative;
}

.rm-moteur #r-jourarrivee #div_depart_cal {
    position: absolute;
    width: auto;
    height: auto;
    right: -5px;
    top: -50px;
    z-index: 50;
    visibility: visible;
    background-color: #fff;
    border: 1px solid #000;
    text-align: left;
    padding: 10px;
}

.rm-moteur #r-jourarrivee .calendrier {
    display: inline-block;
    background-color: #fff;
    width: 15%;
    height: 30px;
    margin: 0;
    text-align: right;
    vertical-align: middle;
}

.rm-moteur #r-jourarrivee .calendrier img {
    height: 18px;
    margin: 6px 5px 0 0;
}

.rm-moteur #r-jourarrivee input, .rm-moteur #r-jourarrivee input:focus {
    width: 85%;
    vertical-align: middle;
}

.rm-moteur #r-jourdepart {
    position: relative;
}

.rm-moteur #r-jourdepart #div_fin_cal {
    position: absolute;
    width: auto;
    height: auto;
    right: -5px;
    top: -50px;
    z-index: 50;
    visibility: visible;
    background-color: #fff;
    border: 1px solid #000;
    text-align: left;
    padding: 10px;
}

.rm-moteur #r-jourdepart .calendrier {
    display: inline-block;
    background-color: #fff;
    width: 15%;
    height: 30px;
    margin: 0;
    text-align: right;
    vertical-align: middle;
}

.rm-moteur #r-jourdepart .calendrier img {
    height: 18px;
    margin: 6px 5px 0 0;
}

.rm-moteur #r-jourdepart input, .rm-moteur #r-jourdepart input:focus {
    width: 85% !important;
    vertical-align: middle;
}

.rm-moteur .zone {
    display: block;
    margin: 5px 0 0 0;
    background-color: #fff;
}

.rm-moteur .zone .bouton a {
    display: block;
    padding: 8px 5px 8px 5px;
    background-color: #fff;
    text-align: center;
    color: #b2b2b2;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 14px;
}

.rm-moteur .zone .bouton a:hover {
    background-color: #e5e5e5;
    color: #e2001a;
}

.rm-moteur .zone input {
    width: 100%;
    height: 30px;
    background-color: #fff;
    border: 0;
    color: #b2b2b2;
    font-size: 14px !important;
    text-transform: uppercase;
    padding: 5px 5px 5px 7px;
    margin: 0;
    vertical-align: middle;
    cursor: pointer;
}

.rm-moteur .zone-bouton {
    display: block;
    margin: 5px 0 0 0;
}

.rm-moteur .zone-bouton input {
    width: 100%;
    background-color: #e2001a;
    border: 0;
    padding: 10px 0 10px 0;
    text-align: center;
    color: #fff;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
}

.rm-moteur .zone-bouton input:hover {
    background-color: #ff0000;
    color: #fff;
}

.rm-moteur select {
    width: 100%;
    height: 30px;
    background: url(/images/select.png) no-repeat right #fff;
    background-size: 18px 8px;
    border: 0;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    color: #b2b2b2;
    font-size: 14px;
    text-transform: uppercase;
    padding: 5px;
    margin: 0;
    vertical-align: middle;
    cursor: pointer;
}

#rm-moteur-formulaire1, #rm-moteur-formulaire2, #rm-moteur-formulaire3 {
    display: block;
    padding: 5px 10px 10px 10px;
    border-top: 1px solid #fff;
}

.rm-moteur-onglets {
    display: block;
}

.rm-moteur-onglets a {
    display: block;
    background-color: #1b222a;
    border-top: 1px solid #fff;
    padding: 8px;
    text-align: center;
    color: #fff;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 22px;
    text-transform: uppercase;
}

.rm-moteur-onglets a.on {
    background-color: #54595f;
}

.rm-moteur-onglets a:hover {
    background-color: #54595f;
    color: #fff;
}

.rm-moteur-titre {
    display: block;
    background-color: #e2001a;
    padding: 10px;
    text-align: center;
    color: #fff;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 22px;
    text-transform: uppercase;
}

.rm-moteur-titre-lien a {
    display: block;
    background-color: #e2001a;
    padding: 10px;
    text-align: center;
    color: #fff;
    font: 20px DinBold, Arial, Helvetica, Sans-serif;
    line-height: 22px;
    text-transform: uppercase;
    font-weight: normal;
}

.rm-moteur-titre-lien a:hover {
    background-color: #ff0000;
    color: #fff;
}

.rm-moteur-zone2 {
    margin-top: -60px;
    z-index: 4;
}

/* ATTENTION : Ne surtout pas modifier ce parametre ! */
.row {
    max-width: 1520px !important;
}

/* /ATTENTION : Ne surtout pas modifier ce parametre ! */

.separation-fiche-poi {
    display: none;
}

.social-photos {
    display: block;
    padding: 0;
    text-align: center;
}

.social-photos img {
    height: 120px;
    margin: 0 20px 20px 0;
}

.social-titre {
    display: inline-block;
    padding: 80px 0 0 25px;
    color: #373737;
    font: 26px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 30px;
}

.social-titre strong {
    font-family: OpenSansExtrabold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    line-height: 30px;
}

.social-titre-pictos {
    display: inline-block;
    padding: 0 0 15px 25px;
    vertical-align: middle;
}

.social-titre-pictos a i {
    display: inline-block;
    vertical-align: middle;
    width: 50px;
    height: 50px;
    border: 0;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    color: #fff;
    text-align: center;
    font-size: 30px;
    line-height: 50px;
    margin: 7px 14px 7px 0;
}

.social-titre-pictos a i.fa-facebook {
    background-color: #3b5998;
    font-weight: bold;
}

.social-titre-pictos a i.fa-instagram {
    background-color: #262626;
}

.social-titre-pictos a i.fa-twitter {
    background-color: #45b1e3;
}

.social-titre-pictos a i.fa-youtube-play {
    background-color: #f00;
}

.social-titre-pictos a:hover i {
    background-color: #e2001a;
    color: #fff;
}

#thematiques-poi .bloc-contenu {
    display: block;
    padding: 0 0 10px 10px;
    color: #313131;
    font-size: 18px;
}

#thematiques-poi .bloc-contenu ul li {
    list-style-type: none;
    list-style-position: outside;
    padding: 0;
    margin: 12px 0 12px -18px;
}

#thematiques-poi .bloc-contenu ul li a {
    display: block;
    color: #000;
    font-size: 18px;
    line-height: 18px;
    font-weight: bold;
}

#thematiques-poi .bloc-contenu ul li a:hover {
    color: #e2001a;
}

#thematiques-poi .bloc-contenu ul li ul li {
    list-style-type: none;
    list-style-position: outside;
    padding: 0;
    margin: 12px 0 12px 0;
}

#thematiques-poi .bloc-contenu ul li ul li a {
    display: block;
    color: #000;
    font-size: 18px;
    line-height: 18px;
    font-weight: normal;
}

#thematiques-poi .bloc-contenu ul li ul li a:hover {
    color: #e2001a;
}

#thematiques-poi .bloc-titre {
    display: block;
    margin-top: 1px;
    background-color: #e5e5e5;
    color: #e2001a;
    font-size: 18px;
    font-weight: bold;
    line-height: 20px;
    text-transform: uppercase;
    padding: 10px;
}

#thematiques-poi .bloc-titre a .fa-angle-down {
    display: block;
    margin: -8px 0 0 10px;
    padding: 0;
    color: #e2001a;
    font-size: 36px;
    float: right;
}

#thematiques-poi .bloc-titre a .fa-angle-up {
    display: block;
    margin: -10px 0 0 10px;
    padding: 0;
    color: #e2001a;
    font-size: 36px;
    float: right;
}

#thematiques-poi .bloc-titre a:hover i {
    color: #ff0000;
}

.thematiques-poi-titre {
    display: block;
    margin-top: 1px;
}

.thematiques-poi-titre a {
    display: block;
    background-color: #e2001a;
    color: #fff;
    font-size: 24px;
    text-transform: uppercase;
    font-weight: bold;
    line-height: 28px;
    padding: 10px;
}

.thematiques-poi-titre a:hover {
    background-color: #ff0000;
}

.top-bar {
    background-color: #fff;
}

.top-bar.expanded .title-area {
    background-color: #fff;
}

.top-bar .toggle-topbar.menu-icon a {
    color: #e2001a;
    font: 20px OpenSansLight, Arial, Helvetica, Sans-serif;
}

.top-bar .toggle-topbar.menu-icon a:after {
    box-shadow: 0 8px 0 1px #e2001a, 0 14px 0 1px #e2001a, 0 20px 0 1px #e2001a;
}

.top-bar-section .dropdown {
    min-width: inherit;
}

.top-bar-section .dropdown li:not(.has-form) a:not(.button) {
    background-color: #fff;
    color: #000;
    font-size: 14px;
    font-family: OpenSansLight, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: none;
}

.top-bar-section .dropdown li:not(.has-form) a:hover:not(.button) {
    background-color: #fff;
    color: #e2001a;
}

.top-bar-section .dropdown {
    background-color: #fff !important;
    overflow: hidden !important;
    border-top: 1px solid #9a9b9c;
    padding-top: 10px;
    padding-bottom: 10px;
}

.top-bar-section .dropdown.ssRubrique1 li {
    width: 100%;
}

.top-bar-section .dropdown.ssRubrique1 li ul li {
    width: 100%;
}

.top-bar-section .dropdown.ssRubrique2 li {
    width: 50%;
}

.top-bar-section .dropdown.ssRubrique2 li ul li {
    width: 100%;
}

.top-bar-section .dropdown.ssRubrique3 li {
    width: 33.33%;
}

.top-bar-section .dropdown.ssRubrique3 li ul li {
    width: 100%;
}

.top-bar-section .dropdown li {
    width: 25%;
}

.top-bar-section .dropdown li:nth-child(6), .top-bar-section .dropdown li:nth-child(10), .top-bar-section .dropdown li:nth-child(14), .top-bar-section .dropdown li:nth-child(18), .top-bar-section .dropdown li:nth-child(22), .top-bar-section .dropdown li:nth-child(26) {
    clear: both;
}

.top-bar-section .dropdown li:not(.has-form) a:not(.button) {
    background-color: #fff;
    color: #e2001a;
    font-size: 15px;
    font-family: OpenSans, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    text-align: left;
    border-right: 0;
    margin-top: 0;
    margin-bottom: 0;
    height: auto;
}

.top-bar-section .dropdown li:not(.has-form) a:hover:not(.button) {
    background-color: #fff;
    color: #e2001a;
}

.top-bar-section .dropdown li a {
    white-space: normal;
    line-height: 16px !important;
    padding: 10px !important;
}

.top-bar-section .dropdown li ul li {
    width: 100%;
}

.top-bar-section .dropdown li ul li:not(.has-form) a:not(.button) {
    background-color: #fff;
    color: #000;
    font-size: 14px;
    font-family: OpenSansLight, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: none;
    text-align: left;
    border-right: 0;
    margin-top: 0;
    margin-bottom: 0;
}

.top-bar-section .dropdown li ul li:not(.has-form) a:hover:not(.button) {
    background-color: #fff;
    color: #e2001a;
}

.top-bar-section .has-dropdown {
    position: static;
    width: 240px;
}

.top-bar-section .has-dropdown > a {
    padding-right: 15px !important;
}

.top-bar-section .has-dropdown > a:after {
    display: none;
}

.top-bar-section .langues .dropdown li {
    width: auto;
    padding-right: 13px !important;
}

.top-bar-section .right li .dropdown.ssRubrique1 {
    right: inherit;
    width: auto !important;
    max-width: 50%;
}

.top-bar-section .right li .dropdown.ssRubrique1 .dropdown li {
    float: none;
}

.top-bar-section .right li .dropdown.ssRubrique2 {
    right: inherit;
    width: auto !important;
    max-width: 50%;
}

.top-bar-section .right li .dropdown.ssRubrique2 .dropdown li {
    float: none;
}

.top-bar-section .right li .dropdown {
    width: 100% !important;
}

.top-bar-section .right li .dropdown li .dropdown {
    right: 0;
    position: static !important;
}

.top-bar-section .right li.langues .dropdown {
    right: inherit;
    width: auto !important;
}

.top-bar-section .right li.langues .dropdown li {
    float: none;
}

.top-bar-section .right li.langues .dropdown li a {
    padding: 15px !important;
    height: 30px;
}

.top-bar-section li.active:not(.has-form) a:not(.button) {
    background-color: #e2001a;
    color: #fff;
}

.top-bar-section li.langues:not(.has-form) a:not(.button) {
    background-color: #fff;
    color: #e2001a;
    font-size: 14px !important;
    font-family: OpenSansBold, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    padding-right: 15px !important;
    border-right: 0;
}

.top-bar-section li.langues:not(.has-form) a:hover:not(.button) {
    background-color: #fff;
    color: #000;
}

.top-bar-section li.langues:not(.has-form) a:not(.button) i {
    font-size: 20px;
    vertical-align: middle;
    margin-left: 5px;
}

.top-bar-section li.langues:not(.has-form) a:hover:not(.button) i {
    background-color: #fff;
    color: #e2001a;
}

.top-bar-section li.langues:not(.has-form) a:not(.button) img {
    width: 27px;
}

.top-bar-section li.langues .dropdown {
    border-top: 0;
}

.top-bar-section li.langues .dropdown li:not(.has-form) a:not(.button) {
    border: 0;
    background-color: #fff;
    padding: 0 0 0 15px !important;
}

.top-bar-section li.panier-entete {
    position: relative;
    display: block;
}

.top-bar-section li.panier-entete:not(.has-form) a:not(.button) .panier-articles {
    position: absolute;
    left: 0;
    top: 15px;
    width: 28px;
    text-align: center;
    color: #fff;
    font-size: 12px;
    font-family: OpenSansBold, Arial, Helvetica, Sans-serif;
}

.top-bar-section li.panier-entete:not(.has-form) a:not(.button) {
    display: inline-block;
    width: 28px;
    height: 28px;
    background: url(/images/panier.png) no-repeat;
    background-size: 28px 56px;
    margin: 5px 10px 0 0;
    border-right: 0;
}

.top-bar-section li.panier-entete:not(.has-form) a:hover:not(.button) {
    background: url(/images/panier.png) no-repeat scroll 0 -28px;
    background-size: 28px 56px;
}

.top-bar-section li.recherche:not(.has-form) a:not(.button) {
    background-color: #fff;
    color: #e2001a;
    padding-left: 5px !important;
    display: block;
    border-right: 0;
}

.top-bar-section li.recherche:not(.has-form) a:hover:not(.button) {
    background-color: #fff;
    color: #e2001a;
}

.top-bar-section li.recherche:not(.has-form) a:not(.button) i {
    font-size: 28px;
    vertical-align: middle;
}

.top-bar-section li.recherche:not(.has-form) a:hover:not(.button) i {
    background-color: #fff;
    color: #ff0000;
}

.top-bar-section li.title a {
    color: #000 !important;
    font-size: 14px !important;
    font-family: OpenSansLight, Arial, Helvetica, Sans-serif !important;
    font-weight: normal !important;
    font-style: italic !important;
    text-transform: none !important;
}

.top-bar-section li.title a:hover {
    background-color: #fff !important;
    color: #e2001a !important;
}

.top-bar-section li:not(.has-form) a:not(.button) {
    background-color: #fff;
    border-right: 1px solid #9a9b9c;
    color: #000;
    font-size: 17px;
    font-family: OpenSansLight, Arial, Helvetica, Sans-serif;
    font-weight: normal;
    text-transform: uppercase;
    line-height: 19px;
    height: 42px;
    margin-top: 5px;
    margin-bottom: 5px;
    overflow: hidden;
}

.top-bar-section li:not(.has-form) a:hover:not(.button) {
    background-color: #fff;
    color: #e2001a;
}

.top-bar-section ul {
    background-color: #fff;
}

.top-bar-section ul li {
    width: 240px;
}

.top-bar-section ul li.langues {
    width: auto;
}

.top-bar-section ul li.langues:hover:not(.has-form) > a {
    background-color: #fff;
    color: #000;
}

.top-bar-section ul li.panier-entete {
    width: auto;
}

.top-bar-section ul li.recherche {
    width: auto;
}

.top-bar-section ul li:hover:not(.has-form) > a {
    background-color: #fff;
    color: #e2001a;
}

.top-bar-section ul li:hover:not(.has-form) > a:after {
    border-color: rgba(0, 0, 0, 1) transparent transparent;
}

#topContenu {
    position: relative;
    width: 100%;
    height: auto;
}

/* Specificites pour les �crans de plus de 1520 pixels de large */
@media only screen and (min-width: 95em) {

    .connaitre-bloc-grand-libelle a {
        font-size: 51px;
        line-height: 55px;
    }

    .connaitre-bloc-grand-libelle a strong {
        font-size: 57px;
        line-height: 61px;
    }

    #accueilBlocDiaporama_HIVER .connaitre-contenu1 {
    / / width: 70 %;
    }

    #accueilBlocDiaporama_ .connaitre-contenu1 {
    / / width: 100 %;
    }

    .connaitre-tableau2 .connaitre-contenu1 {
    / / width: 100 %;
    }

    .connaitre-contenu2 {
        width: 30%;
        padding: 20px 20px 20px 0;
    }

    .connaitre-news {
        height: 550px;
    }

    .connaitre-news-fond {
        height: 620px;
        padding: 30px;
    }

    .diaporama {
        height: auto;
    }

    .diaporama .diapo {
        position: relative;
        width: 100%;
        height: auto;
        left: 0;
        margin-left: 0;
        top: 0;
    }

    .diaporama .diapo img {
        width: 100%;
        height: auto;
        margin-top: 36vh;
        transform: translateY(-50%);
    }

    .diaporama .diaporama-zone {
        position: relative;
        width: 100%;
        height: 710px;
    }

    .direct-contenu img, .direct-contenu a img {
        max-height: 24px;
        margin: 7px 15px 0 0;
    }

    .direct-contenu strong, .direct-contenu a strong {
        font-size: 34px;
        line-height: 36px;
    }

    .direct-photo {
        padding-right: 30px;
    }

    .evenements .evenement .date {
        height: 24px;
        margin-top: 25px;
        padding: 0 10px 0 10px;
        font-size: 20px;
    }

    .evenements .evenement .descriptif {
        max-height: 40px;
        margin-top: 25px;
        padding: 0 10px 0 10px;
        font-size: 16px;
        line-height: 20px;
    }

    .evenements .evenement .libelle {
        max-height: 88px;
        margin-top: 25px;
        padding: 0 10px 0 10px;
        font-size: 24px;
        line-height: 28px;
    }

    .evenements .evenement .lien {
        margin-top: 25px;
        padding: 0 10px 0 10px;
    }

    .evenements .evenement .photo {
        max-height: 310px;
    }

    .evenements .evenement .slick-slide {
        height: 600px;
    }

    .evenements-calendrier1 {
        padding: 30px;
    }

    .evenements-calendrier2 {
        padding: 30px;
    }

    .evenements-calendrier-contenu {
        height: 640px;
    }

    .evenements-calendrier-fond {
        height: 650px;
    }

    .fiche-poi-n-grandephoto {
        height: auto;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone {
        position: relative;
        width: 100%;
        height: auto;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .diapo {
        position: relative;
        width: 100%;
        height: auto;
        left: 0;
        margin-left: 0;
        top: 0;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .diapo img {
        width: 100%;
        height: auto;
    }

    .fichepoi-carte iframe {
        height: 600px;
    }

    .fichepoi-grandephoto {
        height: auto;
    }

    .fichepoi-grandephoto .fichepoi-grandephoto-zone {
        position: relative;
        width: 100%;
        height: auto;
    }

    .fichepoi-grandephoto .fichepoi-grandephoto-zone .diapo {
        position: relative;
        width: 100%;
        height: auto;
        left: 0;
        margin-left: 0;
        top: 0;
    }

    .fichepoi-grandephoto .fichepoi-grandephoto-zone .diapo img {
        width: 100%;
        height: auto;
    }

    .fichepoi-libelle h1 {
        font-size: 56px;
        line-height: 60px;
    }

    .fichepoi-libelle-zone1 {
        bottom: 100px;
    }

    .grandephoto {
        height: auto;
    }

    .grandephoto .grandephoto-zone {
        position: relative;
        width: 100%;
        height: auto;
    }

    .grandephoto .grandephoto-zone .diapo {
        position: relative;
        width: 100%;
        height: auto;
        left: 0;
        margin-left: 0;
        top: 0;
    }

    .grandephoto .grandephoto-zone .diapo img {
        width: 100%;
        height: auto;
    }

    .grandephoto .grandephoto-zone .diapo-libelle-zone {
        top: 150px;
        max-width: 1648px;
    }

    .listepoi article .liste-contenu-poi .point-situation {
        margin-top: -34px;
    }

    .listepoi article .liste-contenu-poi .point-situation a i {
        font-size: 60px;
    }

    .listepoi-grandephoto {
        height: 600px;
    }

    .listepoi-grandephoto .listepoi-grandephoto-zone {
        position: relative;
        width: 100%;
        height: 580px;
    }

    .listepoi-grandephoto .listepoi-grandephoto-zone .diapo {
        position: relative;
        width: 100%;
        height: auto;
        left: 0;
        margin-left: 0;
        top: 0;
    }

    .listepoi-grandephoto .listepoi-grandephoto-zone .diapo img {
        width: 100%;
        height: auto;
    }

    .listepoi-n-criteres-bouton1 a {
        height: 40px;
        font-size: 14px;
        line-height: 40px;
    }

    .listepoi-n-carte .carte .carte-bouton a {
        height: 40px;
        font-size: 14px;
        line-height: 40px;
    }

    .listepoi-n-resultat-contenu .adresse {
        margin-top: 5px;
    }

    .listepoi-n-resultat-contenu .autres {
        height: 40px;
        margin-top: 20px;
        line-height: 40px;
    }

    .listepoi-n-resultat-contenu .descriptif {
        margin-top: 10px;
    }

    .listepoi-n-resultat-contenu .autres a .ferme {
        font-size: 14px;
    }

    .listepoi-n-resultat-contenu .autres a.info {
        height: 40px;
        font-size: 14px;
        line-height: 40px;
    }

    .listepoi-n-resultat-contenu .autres a .ouvert {
        font-size: 14px;
    }

    .listepoi-n-resultat-contenu .autres a.reservation {
        height: 40px;
        font-size: 14px;
        line-height: 40px;
    }

    .listepoi-n-resultat-contenu .autres a .situation {
        margin: 6px 25px 6px 0;
    }

    .listepoi-n-resultat-contenu .autres a .tel {
        margin: 6px 5px 6px 0;
    }

    .listepoi-n-resultat-contenu .libelle {
        height: 55px;
    }

    .listepoi-n-resultat-contenu .libelle a h2 {
        font-size: 22px;
        line-height: 26px;
    }

    .logo {
        position: absolute;
        left: 0;
    }

    .rm-direct-contenu img, .rm-direct-contenu a img {
        max-height: 24px;
        margin: 7px 15px 0 0;
    }

    .rm-direct-contenu strong, .rm-direct-contenu a strong {
        font-size: 34px;
        line-height: 36px;
    }

    .rm-direct-photo {
        padding-right: 30px;
    }

    .rm-evenements .rm-evenement .date {
        height: 24px;
        margin-top: 25px;
        padding: 0 10px 0 10px;
        font-size: 20px;
    }

    .rm-evenements .rm-evenement .descriptif {
        max-height: 40px;
        margin-top: 25px;
        padding: 0 10px 0 10px;
        font-size: 16px;
        line-height: 20px;
    }

    .rm-evenements .rm-evenement .libelle {
        max-height: 88px;
        margin-top: 25px;
        padding: 0 10px 0 10px;
        font-size: 24px;
        line-height: 28px;
    }

    .rm-evenements .rm-evenement .lien {
        margin-top: 25px;
        padding: 0 10px 0 10px;
    }

    .rm-evenements .rm-evenement .photo {
        max-height: 370px;
    }

    .rm-evenements-calendrier1 {
        padding: 50px;
    }

    .rm-evenements-calendrier-contenu {
        height: 650px;
    }

    .rm-evenements-calendrier-fond {
        height: 660px;
    }

    .rm-evenements-coeur .rm-coeur .descriptif {
        max-height: 40px;
        margin-top: 25px;
        padding: 0 10px 0 10px;
        font-size: 16px;
        line-height: 20px;
    }

    .rm-evenements-coeur .rm-coeur .libelle {
        max-height: 88px;
        margin-top: 25px;
        padding: 0 10px 0 10px;
        font-size: 24px;
        line-height: 28px;
    }

    .rm-evenements-coeur .rm-coeur .lien {
        margin-top: 25px;
        padding: 0 10px 0 10px;
    }

    .rm-evenements-coeur .rm-coeur .photo {
        max-height: 370px;
    }

    .rm-evenements-coeur .rm-coeur .pretitre {
        height: 24px;
        margin-top: 25px;
        padding: 0 10px 0 10px;
        font-size: 20px;
    }

    .social-photos img {
        height: 190px;
    }

}

/* Specificites pour les �crans de 1260 pixels a 1025 pixels de large */
@media only screen and (min-width: 64.063em) and (max-width: 78.750em) {

    .connaitre-contenu1 {
    / / width: 60 %;
    }

    .connaitre-tableau2 .connaitre-contenu1 {
    / / width: 100 %;
    }

    .connaitre-contenu2 {
        width: 40%;
    }

    .listepoi article {
        height: 335px;
    }

    .listepoi article .liste-haut {
        height: 297px;
    }

    .listepoi article .liste-photo-poi {
        height: 168px;
    }

    .listepoi article .liste-photo-poi .image {
        width: 254px;
        height: 168px;
        margin-left: -127px;
    }

    .listepoi article .liste-photo-poi .image img {
        width: 254px;
        height: 168px;
    }

    .listepoi article .liste-photo-poi-zone {
        height: 168px;
    }

    .listepoi-carte {
        height: 690px;
    }

    .listepoi-carte iframe {
        height: 690px;
    }

    .listepoi-blocs {
        height: 710px;
    }

    .logo {
        position: absolute;
        left: 0;
    }

}

/* Specificites pour les tablettes (de 641 a 1024 pixels de large maxi) */
@media only screen and (min-width: 40.063em) and (max-width: 64em) {
    /*REFONTE*/
    #moteur-formulaire1 #r-nombrepersonnes .buttonPersonnesLabel {
        width: 100%;
        padding-right: 0;
    }

    h1 {
        font-size: 30px;
        line-height: 32px;
    }

    h2 {
        font-size: 24px;
        line-height: 26px;
    }

    h3 {
        font-size: 18px;
        line-height: 20px;
    }

    .soustitre {
        font-size: 24px;
        line-height: 26px;
    }

    .titre {
        font-size: 30px;
        line-height: 32px;
    }

    .r-fond1, td.r-fond1 {
        font-size: 12px;
    }

    .r-fond2, td.r-fond2 {
        font-size: 12px;
    }

    .r-fond3, td.r-fond3 {
        font-size: 12px;
    }

    .r-fond4, td.r-fond4 {
        font-size: 12px;
    }

    .r-fondspecial {
        font-size: 12px;
    }

    .r-prix1, input.r-prix1 {
        font-size: 12px !important;
    }

    .r-prix2, input.r-prix2 {
        font-size: 12px !important;
    }

    .r-prix3, input.r-prix3 {
        font-size: 12px !important;
    }

    .r-prix4, input.r-prix4 {
        font-size: 12px !important;
    }

    .r-prixspecial, input.r-prixspecial {
        font-size: 12px !important;
    }

    .r-soustitre {
        font-size: 26px;
        line-height: 28px;
    }

    .r-textespecial {
        font-size: 12px;
    }

    .r-textespecialgras {
        font-size: 12px;
    }

    .r-titre {
        font-size: 26px;
        line-height: 30px;
    }

    .r-identification1 {
        padding-right: 15px;
    }

    .r-identification2 {
        padding-left: 15px;
    }

    #compte-bouton1 a {
        font-size: 14px;
        line-height: 16px;
    }

    #compte-bouton2 a {
        font-size: 14px;
        line-height: 16px;
    }

    .comparateur-bouton1 a {
        font-size: 14px;
        line-height: 14px;
    }

    .comparateur-bouton2 a {
        font-size: 14px;
        line-height: 14px;
    }

    .comparateur-bouton3 a {
        font-size: 14px;
        line-height: 14px;
    }

    .comparateur-liste .STYLE-COMPARATEUR-COMPAR_F_LIB {
        font-size: 12px;
        line-height: 12px;
    }

    .comparateur-liste .STYLE-COMPARATEUR-COMPAR_PAR2 {
        font-size: 12px;
        line-height: 12px;
    }

    .comparateur-liste .STYLE-COMPARATEUR-COMPAR_PAR7 {
        font-size: 12px;
        line-height: 12px;
    }

    .comparateur-liste .STYLE-COMPARATEUR-PRIX .comparateur-prix {
        font-size: 12px;
    }

    .comparateur-liste .STYLE-COMPARATEUR-PRIX .comparateur-prix .prix1 {
        font-size: 14px;
        line-height: 14px;
    }

    .comparateur-liste .STYLE-COMPARATEUR-PRIX .comparateur-prix .prix2 {
        font-size: 18px;
        line-height: 18px;
    }

    .comparateur-liste .STYLE-COMPARATEUR-DEL a {
        font-size: 14px;
        line-height: 14px;
    }

    .comparateur-liste .STYLE-COMPARATEUR-FP a {
        font-size: 14px;
        line-height: 14px;
    }

    #comparateur-partager a {
        font-size: 14px;
        line-height: 14px;
    }

    .actualite-grande {
        padding-left: 10px;
        padding-right: 6px;
    }

    .actualite-grande .contenu {
        width: 50%;
    }

    .actualite-grande .contenu:hover {
        width: 50.5%;
    }

    .actualite-grande .contenu a {
        padding: 10px 10px 0 10px;
        font-size: 12px;
        line-height: 14px;
    }

    .actualite-grande .contenu a span.lienpicto {
        width: 12px;
        height: 10px;
        background-size: 12px 10px;
    }

    .actualite-grande .contenu a span.lientexte {
        padding-top: 5px;
        font-size: 14px;
    }

    .actualite-grande .contenu a strong {
        font-size: 14px;
        line-height: 16px;
    }

    .actualite-grande .lien {
        left: 5px;
        top: 5px;
    }

    .actualite-grande .lien a {
        padding: 2px;
        font-size: 12px;
    }

    .actualite-petite {
        padding-left: 9px;
        padding-right: 10px;
    }

    .actualite-petite .contenu a {
        min-height: 54px;
        padding: 10px;
        font-size: 12px;
    }

    .actualite-petite .contenu a:hover {
        min-height: 57px;
        padding-bottom: 13px;
    }

    .actualite-petite .contenu a strong {
        font-size: 14px;
    }

    .actualite-petite .lien {
        right: 5px;
        top: 5px;
    }

    .actualite-petite .lien a {
        padding: 2px;
        font-size: 12px;
    }

    .agenda-calendrier {
        padding-left: 10px;
        padding-right: 6px;
    }

    .agenda-calendrier .contenu {
        padding: 10px 0 0 0;
    }

    .agenda-calendrier .contenu-mois {
        padding-top: 10px;
    }

    .agenda-calendrier .contenu-mois1 {
        width: 50%;
        padding: 0 10px 0 10px;
    }

    .agenda-calendrier .contenu-mois2 {
        width: 50%;
        padding: 0 10px 0 10px;
        border-right: 0;
    }

    .agenda-calendrier .contenu-mois3 {
        display: none;
    }

    .agenda-calendrier .contenu-mois-element {
        padding-top: 5px;
        font-size: 12px;
        line-height: 13px;
    }

    .agenda-calendrier .contenu-mois-libelle {
        padding-bottom: 5px;
        font-size: 14px;
        line-height: 14px;
    }

    .agenda-calendrier .contenu-mois-lien1 {
        width: 50%;
        padding: 0 10px 0 10px;
    }

    .agenda-calendrier .contenu-mois-lien1 a, .agenda-calendrier .contenu-mois-lien2 a, .agenda-calendrier .contenu-mois-lien3 a {
        margin: 10px 0 10px 0;
    }

    .agenda-calendrier .contenu-mois-lien2 {
        width: 50%;
        padding: 0 10px 0 10px;
    }

    .agenda-calendrier .contenu-mois-lien3 {
        display: none;
    }

    .agenda-calendrier .contenu-titre {
        height: 30px;
        padding: 0 10px 0 10px;
        font-size: 20px;
    }

    .agenda-evenement {
        padding-left: 9px;
        padding-right: 10px;
    }

    .agenda-evenement .contenu a {
        padding: 10px;
        font-size: 12px;
        line-height: 14px;
        font-weight: normal;
    }

    .agenda-evenement .contenu a:hover {
        padding-bottom: 13px;
    }

    .agenda-evenement .contenu a strong {
        font-size: 14px;
        line-height: 16px;
    }

    .agenda-evenement .lien {
        right: 5px;
        top: 5px;
    }

    .agenda-evenement .lien a {
        padding: 2px;
        font-size: 12px;
    }

    .avisclient-contenu {
        margin-top: 10px;
        padding-left: 0;
        padding-right: 0;
    }

    .avisclients-entete .libelle {
        margin: 0;
        display: block;
    }

    .avisclients-entete .nb {
        margin: 0;
        display: block;
    }

    .avisclients-entete .note {
        margin-top: 2px;
        margin-bottom: 3px;
    }

    .avisclients-entete .pictos {
        margin-top: 2px;
        margin-bottom: 3px;
    }

    .avisclients-nom {
        font-size: 18px;
        line-height: 20px;
    }

    .avisclients-titre {
        font-size: 18px;
        line-height: 20px;
        padding: 10px;
    }

    .bonsplans-contenu h2 {
        font-size: 22px;
        line-height: 24px;
    }

    .bonsplans-titre span {
        padding: 10px;
        font-size: 18px;
        line-height: 20px;
    }

    .bouton-comparateur a strong {
        font-size: 20px;
        line-height: 24px;
    }

    .bouton-comparer-bulle-fiche {
        width: 180px;
        left: -50px;
        padding: 5px;
    }

    .connaitre-bloc1 {
        width: 50%;
        height: 400px;
        float: left;
    }

    .connaitre-bloc2 {
        width: 50%;
        height: 400px;
        float: right;
        border-left: 1px solid #fff;
    }

    .connaitre-contenu {
        height: 550px;
    }

    .connaitre-contenu1 {
        height: 550px;
    }

    .connaitre-contenu2 {
        height: 550px;
    }

    .connaitre-bloc-grand-libelle a {
        font-size: 27px;
        line-height: 31px;
    }

    .connaitre-bloc-grand-libelle a strong {
        font-size: 33px;
        line-height: 37px;
    }

    .connaitre-bloc-lien {
        height: 400px;
    }

    .connaitre-bloc-lien a {
        height: 400px;
    }

    .connaitre-news {
        height: 490px;
    }

    .connaitre-news-fond {
        height: 530px;
        padding: 15px;
    }

    .connaitre-tableau {
        display: block;
    }

    .connaitre-tableau1 {
        display: block;
        width: 100%;
        height: auto;
    }

    .connaitre-tableau2 {
        display: block;
        width: 100%;
        height: auto;
        clear: both;
    }

    .connaitre-titre {
        padding: 50px 40px 0 40px;
    }

    .contenu-poi1 {
        padding-right: 0;
    }

    .contenu-wysiwyg-vel td {
        font-size: 12px;
    }

    .criteres-affichage1 {
        padding: 5px 2px 5px 20px;
    }

    .criteres-affichage1 .bouton a {
        font-size: 14px;
        line-height: 18px;
    }

    .criteres-affichage1 .bouton-on a {
        font-size: 14px;
        line-height: 18px;
    }

    .criteres-affichage1 .libelle {
        display: none;
    }

    .criteres-affichage2 {
        padding: 5px 20px 5px 3px;
    }

    .criteres-affichage2 .libelle {
        display: none;
    }

    .criteres-affichage2 select {
        width: 90%;
        font-size: 14px;
    }

    .criteres-affichage3 {
        padding: 5px 5px 5px 20px;
    }

    .criteres-affichage3 .bouton a {
        font-size: 14px;
        line-height: 18px;
    }

    .criteres-affichage3 .bouton-on a {
        font-size: 14px;
        line-height: 18px;
    }

    .criteres-affichage3 .libelle {
        display: none;
    }

    #criteres-poi .bloc-contenu {
        font-size: 16px;
    }

    #criteres-poi .bloc-contenu input {
        margin: 2px 7px 6px 0;
    }

    #criteres-poi .bloc-titre {
        font-size: 16px;
        line-height: 18px;
    }

    .criteres-poi-titre a {
        font-size: 18px;
        line-height: 22px;
    }

    .dernieres-offres-liens a {
        font-size: 14px;
        line-height: 16px;
    }

    .dernieres-offres-titre {
        font-size: 20px;
        line-height: 24px;
        padding: 15px 0 15px 0;
    }

    .detailActualite .actualite-contenu .image-a-droite {
        max-width: 300px;
    }

    .detailActualite .actualite-titre {
        font-size: 26px;
        line-height: 30px;
    }

    .detailAgenda .agenda-contenu .image-a-droite {
        max-width: 300px;
    }

    .detailAgenda .agenda-date {
        font-size: 26px;
        line-height: 30px;
    }

    .detailAgenda .agenda-titre {
        font-size: 26px;
        line-height: 30px;
    }

    .diaporama {
        height: 542px;
    }

    .diaporama .diapo {
        width: 1024px;
        height: 542px;
        margin-left: -512px;
    }

    .diaporama .diapo img {
        width: 1024px;
        height: 542px;
    }

    .diaporama .diapo_txt_1 span {
        height: 38px;
        font-size: 30px;
        line-height: 38px;
        padding-top: 2px;
    }

    .diaporama .diapo_txt_2 {
        display: block;
        margin-top: -1px;
    }

    .diaporama .diapo_txt_2 span {
        height: 76px;
        font-size: 30px;
        line-height: 36px;
        padding-top: 2px;
    }

    .diaporama .diapo_txt_zone {
        width: 50%;
        margin: 0 calc((100% - 50%) / 2) !important;
        top: 150px;
    }

    .diaporama .diaporama-zone {
        height: 542px;
    }

    .diaporama .fleche-bas {
        display: none;
    }

    .diaporama .fleche-droite1 a .texte-rm {
        width: 258px;
        height: 50px;
        font-size: 16px;
        line-height: 50px;
        left: -103px;
        top: 150px;
    }

    .diaporama .fleche-gauche1 a .texte-rm {
        width: 258px;
        height: 50px;
        font-size: 16px;
        line-height: 50px;
        left: -105px;
        top: 114px;
    }

    .diaporama-accueil .diaporama .diapo_txt_zone {
        top: 150px;
    }

    .diaporama-accueil-rm {
        top: -40px;
    }

    .diaporama-accueil-rm .diaporama .diapo_txt_zone {
        top: 100px;
    }

    .direct-contenu {
        padding-right: 0;
    }

    .direct-contenu, .direct-contenu a {
        font-size: 12px;
        line-height: 16px;
    }

    .direct-contenu img, .direct-contenu a img {
        max-height: 18px;
        margin: 5px 10px 0 0;
    }

    .direct-contenu strong, .direct-contenu a strong {
        font-size: 20px;
        line-height: 22px;
    }

    .direct-photo {
        padding-right: 0;
        padding-left: 15px;
    }

    .direct-titre {
        padding: 30px 15px 20px 15px;
    }

    .entite-live2 {
        font-size: 13px;
        padding-left: 15px;
    }

    .entite-live2 span {
        line-height: 15px;
    }

    .evenements {
        padding-right: 15px;
    }

    .evenements-calendrier {
        padding-left: 15px;
        margin-top: 10px;
    }

    .evenements-calendrier-contenu {
        height: auto;
        overflow: visible;
    }

    .evenements-calendrier-fond {
        height: auto;
    }

    .evenements-titre {
        padding: 50px 40px 0 40px;
    }

    .fiche-bouton-poi a {
        font-size: 20px;
        line-height: 22px;
    }

    .fiche-entete-droite {
        padding-left: 0;
    }

    .fiche-entete-gauche .classement {
        display: block;
        height: 18px;
        margin: 2px 0 6px 0;
    }

    .fiche-entete-gauche .fournisseur {
        font-size: 20px;
        line-height: 24px;
    }

    .fiche-entete-gauche .produit {
        font-size: 16px;
        line-height: 18px;
    }

    .fiche-entete-gauche .promo {
        font-size: 14px;
        line-height: 16px;
    }

    .fiche-entete-gauche .promo img {
        margin: 1px 5px 1px 0;
    }

    .fiche-entete-gauche .zonegeo {
        font-size: 14px;
        line-height: 16px;
    }

    .fiche-libelle-produit-poi {
        font-size: 30px;
        line-height: 34px;
    }

    .fiche-photos-petites div.carousel img {
        margin: 0 1px 5px 1px;
    }

    .fiche-photos-petites img {
        margin: 0 1px 5px 1px;
    }

    .fiche-poi-n-bouton1 {
        padding: 15px 10px 15px 10px;
    }

    .fiche-poi-n-bouton1 .bouton a {
        padding: 10px 20px 10px 20px;
    }

    .fiche-poi-n-boutons {
        padding: 10px 5px 10px 5px;
    }

    .fiche-poi-n-boutons .bouton a {
        padding: 10px;
    }

    .fiche-poi-n-contenu-bas1 .chapitre, .fiche-poi-n-contenu-bas2 .chapitre {
        padding-top: 42px;
    }

    .fiche-poi-n-contenu-bas1 {
        padding-bottom: 0;
    }

    .fiche-poi-n-contenu-bas2 {
        padding-top: 0;
    }

    .fiche-poi-n-contenu-coordonnees {
        padding: 15px 10px 15px 10px;
    }

    .fiche-poi-n-contenu-coordonnees .texte {
        font-size: 12px;
        line-height: 18px;
    }

    .fiche-poi-n-contenu-coordonnees .texte a {
        font-size: 12px;
    }

    .fiche-poi-n-contenu-prix h2,
    .fiche-poi-n-contenu-coordonnees h2 {
        font-size: 18px;
        line-height: 22px;
    }

    .fiche-poi-n-contenu-haut2 .capacite {
        padding: 10px 15px 10px 15px;
    }

    .fiche-poi-n-contenu-haut2 .picto2 {
        display: block;
        padding-right: 0;
    }

    .fiche-poi-n-contenu-haut2 .picto2 img {
        height: 18px;
    }

    .fiche-poi-n-contenu-haut2 .pieces {
        padding: 10px 15px 10px 15px;
        margin: 10px 4px 4px 0;
    }

    .fiche-poi-n-contenu-haut2 h1 {
        font-size: 30px;
        line-height: 32px;
    }

    .fiche-poi-n-contenu-ouverture {
        padding: 15px 10px 15px 10px;
    }

    .fiche-poi-n-contenu-ouverture .texte {
        font-size: 12px;
        line-height: 18px;
    }

    .fiche-poi-n-contenu-ouverture .texte a {
        font-size: 12px;
    }

    .fiche-poi-n-contenu-ouverture h2 {
        font-size: 18px;
        line-height: 22px;
    }

    .fiche-poi-n-contenu-prix {
        padding: 15px 10px 15px 10px;
    }

    .fiche-poi-n-contenu-prix .bouton a {
        padding: 10px 20px 10px 20px;
        margin-top: 15px;
    }

    .fiche-poi-n-contenu-prix strong {
        font-size: 28px;
        line-height: 28px;
    }

    .fiche-poi-n-grandephoto {
        height: auto;
        overflow: visible;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone {
        position: relative;
        height: auto;
        overflow: visible;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .diapo {
        position: relative;
        width: 100%;
        height: auto;
        left: 0;
        margin-left: 0;
        overflow: visible;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .diapo img {
        width: 100%;
        height: auto;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos {
        width: 80px;
        top: 15px;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-video {
        height: 90px;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-video a .picto {
        margin: 0 auto 2px auto;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-video a {
        font-size: 12px;
        line-height: 90px;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-video a span {
        line-height: 12px;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-visite {
        height: 90px;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-visite a .picto {
        margin: 0 auto 2px auto;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-visite a {
        font-size: 12px;
        line-height: 90px;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos .picto-visite a span {
        line-height: 12px;
    }

    .fiche-prixduree {
        padding: 15px 5px 15px 5px;
        font-size: 12px;
        line-height: 14px;
    }

    .fiche-prixduree .ancienprix {
        font-size: 20px;
        line-height: 22px;
    }

    .fiche-prixduree .nouveauprix {
        font-size: 20px;
        line-height: 22px;
    }

    #fiche-poi .bloc-contenu-localisation-zone iframe {
        height: 425px;
    }

    #fiche-poi .bloc-contenu-photos-fleche1 {
        height: 70px;
    }

    #fiche-poi .bloc-contenu-photos-fleche1 a i {
        line-height: 70px;
    }

    #fiche-poi .bloc-contenu-photos-fleche2 {
        height: 70px;
    }

    #fiche-poi .bloc-contenu-photos-fleche2 a i {
        line-height: 70px;
    }

    #fiche-poi .bloc-contenu-photos-petites {
        height: 70px;
    }

    #fiche-poi .bloc-contenu-photos-petites img {
        height: 60px;
    }

    #fiche-poi .bloc-contenu-photos-petites div.carousel img {
        height: 60px;
    }

    #fiche-poi .bloc-titre {
        font-size: 18px;
        line-height: 22px;
    }

    .fichepoi-grand {
        padding-right: 15px;
    }

    .fichepoi-grandephoto {
        height: 349px;
    }

    .fichepoi-grandephoto .fichepoi-grandephoto-zone {
        height: 349px;
    }

    .fichepoi-grandephoto .fichepoi-grandephoto-zone .diapo {
        width: 1024px;
        height: 349px;
        margin-left: -512px;
    }

    .fichepoi-grandephoto .fichepoi-grandephoto-zone .diapo img {
        width: 1024px;
        height: 349px;
    }

    .fichepoi-libelle h1 {
        font-size: 36px;
        line-height: 40px;
    }

    .fichepoi-libelle-zone1 {
        bottom: 15px;
    }

    .fichepoi-milieu-droite {
        padding-left: 5px;
    }

    .fichepoi-patrimoine-addthis .libelle-addthis {
        padding-top: 30px;
    }

    .fichepoi-patrimoine-addthis .libelle-addthis .addthis {
        padding-left: 15px;
    }

    .fichepoi-patrimoine-addthis .libelle-addthis .libelle {
        padding-right: 15px;
    }

    .fichepoi-patrimoine-p1 .photo2 {
        padding: 20px 5px 0 15px;
    }

    .fichepoi-patrimoine-p1 .photo3 {
        padding: 20px 15px 0 5px;
    }

    .fichepoi-patrimoine-p2 .photo4 {
        padding-top: 10px;
    }

    .fichepoi-patrimoine-t1 .citation, .fichepoi-patrimoine-t2 .citation, .fichepoi-patrimoine-t4 .citation {
        padding: 30px 30px 0 30px;
        font-size: 16px;
    }

    .fichepoi-patrimoine-t1 .citation .debut, .fichepoi-patrimoine-t2 .citation .debut, .fichepoi-patrimoine-t4 .citation .debut {
        margin: 0 5px 0 0;
    }

    .fichepoi-patrimoine-t1 .citation .fin, .fichepoi-patrimoine-t2 .citation .fin, .fichepoi-patrimoine-t4 .citation .fin {
        margin: 0 0 0 5px;
    }

    .fichepoi-patrimoine-t1 .description, .fichepoi-patrimoine-t2 .description, .fichepoi-patrimoine-t3 .description {
        padding: 30px 30px 0 30px;
    }

    .fichepoi-patrimoine-t4 .description {
        padding: 20px 30px 0 30px;
    }

    .fichepoi-patrimoine-v1 .video {
        padding-top: 30px;
    }

    .fichepoi-petit {
        padding-left: 15px;
    }

    .fichepoi-photos-boutons a {
        padding-left: 2px;
        padding-right: 2px;
        font-size: 9px;
    }

    .fichepoi-photos-boutons a span, .fichepoi-photos-boutons a:hover span {
        line-height: 12px;
    }

    .fichepoi-photos-boutons-zone {
        padding: 5px;
    }

    .fichepoi-photos-petites {
        padding-bottom: 6px;
    }

    .fichepoi-photos-petites .imgClearingFichePOIV2 {
        margin: 0 0 5px 5px;
    }

    .fichepoi-photos-video-contenu {
        padding: 15px 15px 0 15px;
    }

    .fichepoi-photos-visite-contenu {
        padding: 15px 15px 0 15px;
    }

    .fichepoi-photos-visite-contenu .flex-video {
        padding-bottom: 63.2%;
    }

    .fichepoi-titre {
        font-size: 18px;
        line-height: 20px;
    }

    .fil-ariane-rm .addthis {
        float: none;
        text-align: right;
    }

    .flechebas-fixe {
        display: none;
    }

    .flechetop-fixe {
        display: none;
    }

    .garanties-contenu {
        padding: 5px 0 10px 0;
    }

    .garanties-picto {
        padding-right: 0;
    }

    .garanties-telephone {
        font-size: 20px;
        line-height: 22px;
    }

    .garanties-telephone i {
        font-size: 28px;
        margin-right: 5px;
    }

    .garanties-titre {
        font-size: 20px;
        line-height: 24px;
        padding: 15px 0 15px 0;
    }

    .grandephoto {
        height: 349px;
    }

    .grandephoto .grandephoto-illustration {
        height: 43px;
        background-size: 1024px 43px;
    }

    .grandephoto .grandephoto-zone {
        height: 349px;
    }

    .grandephoto .grandephoto-zone .diapo {
        width: 1024px;
        height: 349px;
        margin-left: -512px;
    }

    .grandephoto .grandephoto-zone .diapo img {
        width: 1024px;
        height: 349px;
    }

    .grandephoto .grandephoto-zone .diapo-libelle span {
        height: 38px;
        font-size: 30px;
        line-height: 38px;
        padding-top: 2px;
    }

    .infospromos img {
        width: 150px;
    }

    .infospromos-titre {
        font-size: 20px;
        line-height: 24px;
    }

    .liste-carte-poi-zone iframe {
        height: 425px;
    }

    .liste-criteres-poi {
        margin-top: 25px;
    }

    .liste-criteres-poi1 {
        padding: 10px 5px 10px 10px;
        font-size: 18px;
    }

    .liste-criteres-poi2 {
        padding: 10px 10px 10px 5px;
        font-size: 18px;
    }

    .liste-criteres-poi2 .texte {
        padding-right: 10px;
    }

    .liste-criteres-poi2 a.off i.fa-map-marker {
        font-size: 35px;
    }

    .liste-criteres-poi2 a.on i.fa-map-marker {
        font-size: 35px;
    }

    .liste-criteres-poi2 a.off i.fa-th-large {
        font-size: 40px;
        margin-right: 10px;
    }

    .liste-criteres-poi2 a.on i.fa-th-large {
        font-size: 40px;
        margin-right: 10px;
    }

    .liste-poi article .liste-lien-poi {
        height: 35px;
        padding-top: 5px;
    }

    .liste-poi article .liste-lien-poi a {
        height: 30px;
        padding: 0 5px 0 5px;
        font-size: 14px;
        line-height: 30px;
    }

    .liste-poi article .liste-lien-poi a:hover {
        background-color: #ff0000;
        color: #fff;
    }

    .liste-poi article .liste-contenu-poi {
        font-size: 14px;
        line-height: 16px;
    }

    .liste-poi article .liste-contenu-poi .point-situation {
        margin-top: -24px;
    }

    .liste-poi article .liste-contenu-poi .point-situation a i {
        font-size: 40px;
    }

    .liste-poi article .liste-contenu-poi strong {
        font-size: 16px;
        line-height: 18px;
    }

    .liste-poi li:nth-of-type(2n+1) {
        padding: 10px 5px 0 0;
    }

    .liste-poi li:nth-of-type(2n) {
        padding: 10px 0 0 5px;
    }

    .listeActualites .actualites-titre {
        font-size: 26px;
        line-height: 30px;
    }

    .listeActualites article .liste-lien-actualite {
        height: 35px;
        padding-top: 5px;
    }

    .listeActualites article .liste-lien-actualite a {
        height: 30px;
        padding: 0 5px 0 5px;
        font-size: 14px;
        line-height: 30px;
    }

    .listeActualites article .liste-lien-actualite a:hover {
        background-color: #ff0000;
        color: #fff;
    }

    .listeActualites article .liste-contenu-actualite {
        font-size: 14px;
        line-height: 16px;
    }

    .listeActualites article .liste-contenu-actualite strong {
        font-size: 16px;
        line-height: 18px;
    }

    .listeAgenda .agenda-mois1 {
        padding: 10px;
    }

    .listeAgenda .agenda-mois1 a i {
        font-size: 36px;
    }

    .listeAgenda .agenda-mois2 {
        padding: 10px 0 10px 0;
        font-size: 26px;
    }

    .listeAgenda .agenda-mois3 {
        padding: 10px;
    }

    .listeAgenda .agenda-mois3 a i {
        font-size: 36px;
    }

    .listeAgenda .agenda-mois-lien a {
        font-size: 20px;
    }

    .listeAgenda .agenda-titre {
        font-size: 26px;
        line-height: 30px;
    }

    .listeAgenda article .liste-lien-agenda {
        height: 35px;
        padding-top: 5px;
    }

    .listeAgenda article .liste-lien-agenda a {
        height: 30px;
        padding: 0 5px 0 5px;
        font-size: 14px;
        line-height: 30px;
    }

    .listeAgenda article .liste-lien-agenda a:hover {
        background-color: #ff0000;
        color: #fff;
    }

    .listeAgenda article .liste-contenu-agenda {
        font-size: 14px;
        line-height: 16px;
    }

    .listeAgenda article .liste-contenu-agenda .date {
        font-size: 16px;
        line-height: 18px;
    }

    .listeAgenda article .liste-contenu-agenda strong {
        font-size: 16px;
        line-height: 18px;
    }

    #listepoi-criteresp dialog {
        margin-left: -30%;
        width: 60%;
    }

    .listepoi-grandephoto {
        height: 349px;
    }

    .listepoi-grandephoto .listepoi-grandephoto-illustration {
        height: 43px;
        background-size: 1024px 43px;
    }

    .listepoi-grandephoto .listepoi-grandephoto-zone {
        height: 349px;
    }

    .listepoi-grandephoto .listepoi-grandephoto-zone .diapo {
        width: 1024px;
        height: 349px;
        margin-left: -512px;
    }

    .listepoi-grandephoto .listepoi-grandephoto-zone .diapo img {
        margin-top: 22vh;
    }

    /*	.listepoi-grandephoto .listepoi-grandephoto-zone .diapo img { width:1024px; height:349px; }*/
    .listepoi-grandephoto .listepoi-grandephoto-zone .listepoi-libelle .descriptif {
        margin-top: 0;
    }

    .listepoi-grandephoto .listepoi-grandephoto-zone .listepoi-libelle span, .listepoi-grandephoto .listepoi-grandephoto-zone .listepoi-libelle h1 {
        font-size: 30px;
        line-height: 36px;
    }

    .listepoi-grandephoto .listepoi-grandephoto-zone .listepoi-libelle-zone {
        bottom: 15px;
    }

    .listepoi-n-carte {
        height: 590px;
    }

    .listepoi-n-carte .carte .carte-bouton a {
        padding-left: 10px;
        padding-right: 10px;
        font-size: 11px;
    }

    .listepoi-n-carte .carte #listingMaps {
        height: 530px;
    }

    .listepoi-n-criteres {
        display: none;
        height: auto;
        overflow: visible;
    }

    .listepoi-n-criteres-bouton1 {
        display: inline-block;
    }

    .listepoi-n-criteres-bouton2 {
        display: inline-block;
        padding-top: 14px;
        padding-bottom: 6px;
        text-align: right;
    }

    .listepoi-n-criteres-bouton2 a {
        display: block;
        height: 30px;
        background-color: #e2001a;
        padding-left: 20px;
        padding-right: 20px;
        color: #fff;
        font: 13px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
        text-transform: uppercase;
        line-height: 30px;
    }

    .listepoi-n-criteres-bouton2 a:hover {
        background-color: #ff0000;
    }

    .listepoi-n-criteres-boutons {
        text-align: right;
    }

    .listepoi-n-resultat-contenu .autres a .ferme {
        font-size: 12px;
    }

    .listepoi-n-resultat-contenu .autres a.info {
        padding-left: 10px;
        padding-right: 10px;
        font-size: 11px;
    }

    .listepoi-n-resultat-contenu .autres a .ouvert {
        font-size: 12px;
    }

    .listepoi-n-resultat-contenu .autres a.reservation {
        padding-left: 10px;
        padding-right: 10px;
        font-size: 11px;
    }

    .listepoi-n-resultat-contenu .autres a .situation {
        margin: 1px 10px 1px 0;
    }

    .listepoi-n-resultat-contenu .libelle {
        height: 43px;
    }

    .listepoi-n-resultat-contenu .libelle a h2 {
        font-size: 16px;
        line-height: 20px;
    }

    .listepoi-n-liste {
        height: 590px;
        padding-left: 15px;
    }

    .listepoi-n-trait-bas {
        display: block;
        height: 20px;
        border-top: 5px solid #738294;
        margin-top: 5px;
    }

    .listepoi-nt-bouton {
        padding-bottom: 15px;
    }

    .listepoi-nt-bouton a {
        display: block;
        overflow: hidden;
        height: 54px;
        background-color: #e2001a;
        padding-left: 5px;
        padding-right: 5px;
        text-align: center;
        color: #fff;
        font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
        text-transform: uppercase;
        line-height: 54px;
    }

    .listepoi-nt-bouton a:hover {
        background-color: #ff0000;
    }

    .listepoi-nt-bouton-zone {
        display: block;
    }

    .live {
        padding-right: 10px;
    }

    .live-animations {
        margin-top: 10px;
    }

    .live-animations a {
        font-size: 18px;
        line-height: 24px;
    }

    .live-autres {
        height: 50px;
        padding: 0 5px 0 5px;
    }

    .live-avalanche {
        margin-top: 5px;
    }

    .live-avalanche-t1 {
        font-size: 14px;
    }

    .live-avalanche-t2 .picto {
        width: 37px;
        height: 20px;
        background-size: 37px 20px;
    }

    .live-avalanche-t3 {
        font-size: 14px;
        line-height: 16px;
    }

    .live-bikepark-contenu .ligne {
        font-size: 14px;
        line-height: 16px;
    }

    .live-bikepark-fond {
        padding: 5px 5px 20px 5px;
    }

    .live-bikepark-titre {
        font-size: 20px;
    }

    .live-bikepark-titre .picto {
        width: 33px;
        height: 33px;
        background-size: 33px 33px;
        margin: 0 0 0 5px;
    }

    .live-choix {
        height: 50px;
    }

    .live-choix a {
        font-size: 16px;
        line-height: 50px;
        padding: 0 10px 0 10px;
    }

    .live-choix a i {
        font-size: 20px;
        margin-left: 2px;
    }

    .live-contact {
        padding: 0 5px 0 5px;
        height: 50px;
        line-height: 50px;
    }

    .live-contact a.mail {
        margin: 0 5px 0 5px;
    }

    .live-contact a.mail:hover {
        margin: 0 6px 0 6px;
    }

    .live-contact a.telephone {
        margin: 0 5px 0 5px;
    }

    .live-contact a.telephone:hover {
        margin: 0 6px 0 6px;
    }

    .live-contenu1 {
        padding: 5px;
    }

    .live-contenu1-fond {
        padding: 5px;
    }

    .live-contenu2 {
        padding: 5px;
    }

    .live-contenu2-fond {
        padding: 5px;
    }

    .live-contenu3 {
        padding: 5px;
    }

    .live-contenu-fond {
        padding: 5px;
    }

    .live-contenu-zone {
        padding-right: 25px;
    }

    .live-enneigement {
        padding: 0 5px 0 5px;
    }

    .live-enneigement a {
        font-size: 14px;
    }

    .live-enneigement a .picto {
        margin: 0 2px 0 0;
    }

    .live-enneigement a:hover .picto {
        margin: 1px 3px 1px 1px;
    }

    .live-enneigement-bouton a {
        font-size: 12px;
        padding: 10px 5px 10px 5px;
    }

    .live-fond {
        height: 50px;
        line-height: 50px;
    }

    .live-luge-t1 {
        font-size: 14px;
    }

    .live-luge-t2 {
        font-size: 12px;
        line-height: 14px;
    }

    .live-meteo {
        padding: 0 5px 0 5px;
    }

    .live-meteo a {
        font-size: 14px;
    }

    .live-meteo a img {
        margin: 0 2px 2px 0;
    }

    .live-meteo a:hover img {
        margin: 1px 3px 3px 1px;
    }

    .live-meteo-lien {
        bottom: 10px;
        right: 10px;
    }

    .live-meteo-temperatures strong {
        font-size: 14px;
    }

    .live-meteo-temperatures-t1 {
        font-size: 14px;
        line-height: 16px;
    }

    .live-meteo-temperatures-t2 {
        font-size: 14px;
        line-height: 16px;
    }

    .live-meteo-temperatures-t3 {
        font-size: 14px;
        line-height: 16px;
    }

    .live-meteo-titre {
        font-size: 20px;
    }

    .live-neige strong {
        font-size: 14px;
    }

    .live-neige-lien {
        bottom: 10px;
        right: 10px;
    }

    .live-neige-t1 {
        font-size: 14px;
        line-height: 16px;
    }

    .live-neige-t2 {
        font-size: 14px;
        line-height: 16px;
    }

    .live-neige-t3 {
        font-size: 14px;
        line-height: 16px;
    }

    .live-neige-titre {
        font-size: 20px;
    }

    .live-neige-titre .picto {
        width: 30px;
        height: 33px;
        background-size: 30px 33px;
        margin: 0 0 0 5px;
    }

    .live-news a {
        margin: 0 5px 0 5px;
    }

    .live-news a:hover {
        margin: 0 6px 0 6px;
    }

    .live-pistes-contenu .ligne {
        font-size: 14px;
        line-height: 16px;
    }

    .live-pistes-fond {
        padding: 5px 5px 20px 5px;
    }

    .live-pistes-titre {
        font-size: 20px;
    }

    .live-pistes-titre .picto {
        width: 34px;
        height: 33px;
        background-size: 34px 33px;
        margin: 0 0 0 5px;
    }

    .live-plan a {
        margin: 0 5px 4px 5px;
    }

    .live-plan a:hover {
        margin: 0 6px 4px 6px;
    }

    .live-remontees {
        padding: 0 5px 0 5px;
    }

    .live-remontees a {
        font-size: 10px;
    }

    .live-remontees a strong {
        font-size: 14px;
    }

    .live-remontees a .picto {
        margin: 0 2px 6px 0;
    }

    .live-remontees a:hover .picto {
        margin: 1px 3px 8px 1px;
    }

    .live-remontees-contenu strong {
        font-size: 14px;
    }

    .live-remontees-lien {
        bottom: 10px;
        right: 10px;
    }

    .live-remontees-t1 {
        font-size: 12px;
        line-height: 16px;
    }

    .live-remontees-titre {
        font-size: 20px;
    }

    .live-remontees-titre .picto {
        width: 26px;
        height: 33px;
        background-size: 26px 33px;
        margin: 0 0 0 5px;
    }

    .live-webcams a {
        margin: 0 5px 0 5px;
    }

    .live-webcams a:hover {
        margin: 0 6px 0 6px;
    }

    .live-webcams-fond {
        margin-top: 10px;
    }

    .live-webcams-fond a {
        font-size: 18px;
        line-height: 24px;
    }

    .live-webcams-fond a .picto, .live-webcams-fond a:hover .picto {
        width: 30px;
        height: 21px;
        background-size: 30px 21px;
    }

    .logo img {
        margin-top: 0;
    }

    .milieu-droite .bloc-carte {
        margin: -1px 0 20px 0;
    }

    .milieu-droite .bloc-carte iframe {
        height: 425px;
    }

    .milieu-droite .bloc-titre a .fa-angle-down {
        margin: -6px 0 0 10px;
    }

    .milieu-droite .bloc-titre a .fa-angle-up {
        margin: -8px 0 0 10px;
    }

    .milieu-droite .bloc-titre-special a .fa-angle-down {
        margin: -6px 0 0 10px;
    }

    .milieu-droite .bloc-titre-special a .fa-angle-up {
        margin: -8px 0 0 10px;
    }

    .milieu-droite .bloc-contenu {
        padding: 10px 10px 20px 10px;
    }

    .milieu-droite .bloc-titre {
        font-size: 18px;
        line-height: 22px;
        padding: 10px;
    }

    .milieu-droite .bloc-titre-special {
        font-size: 18px;
        line-height: 22px;
        padding: 10px;
    }

    .moteur-bouton input {
        font-size: 16px;
    }

    .moteur-bouton-light input {
        font-size: 16px;
    }

    .milieu-gauche .moteur-zone .bouton a {
        font-size: 12px;
        line-height: 14px;
    }

    .moteur {
        margin-top: -175px;
    }

    .moteur select {
        font-size: 12px;
        height: 48px;
    }

    #moteur-formulaire1, #moteur-formulaire2, #moteur-formulaire3 {
        width: 85%;
    }

    #moteur-formulaire1 #r-jourdepart #div_depart_cal {
        margin-left: -150px;
    }

    #moteur-formulaire1 #r-jourarrivee .calendrier {
        height: 48px;
    }

    #moteur-formulaire1 #r-jourarrivee .calendrier img {
        margin: 12px 0 0 0;
    }

    #moteur-formulaire1 #r-jourarrivee input {
        height: 48px;
        font-size: 12px !important;
    }

    #moteur-formulaire1 #r-jourdepart .calendrier {
        height: 48px;
    }

    #moteur-formulaire1 #r-jourdepart .calendrier img {
        margin: 12px 0 0 0;
    }

    #moteur-formulaire1 #r-jourdepart input {
        height: 48px;
        font-size: 12px !important;
    }

    #moteur-formulaire1 #r-nombrepersonnes input {
        height: 48px;
        font-size: 12px !important;
    }

    #moteur-formulaire1 .r-bouton input {
        height: 48px;
        line-height: 48px;
    }

    #moteur-formulaire1 .zone1, #moteur-formulaire1 .zone2, #moteur-formulaire1 .zone3, #moteur-formulaire1 .zone4 {
        width: 24.2%;
    }

    #moteur-formulaire1 .zone3 {
        width: 24.1%;
    }

    #moteur-formulaire1 .zone5 {
        width: 97.5%;
        margin-top: 0;
    }

    #moteur-formulaire2 .f-bouton input {
        height: 48px;
        line-height: 48px;
    }

    #moteur-formulaire2 .f-jourski1 .calendrier {
        height: 48px;
    }

    #moteur-formulaire2 .f-jourski1 .calendrier img {
        margin: 12px 0 0 0;
    }

    #moteur-formulaire2 .f-jourski1 #div_depart_cal {
        margin-left: -150px;
    }

    #moteur-formulaire2 .f-jourski1 input {
        height: 48px;
        font-size: 12px !important;
    }

    #moteur-formulaire2 .zone1, #moteur-formulaire2 .zone2, #moteur-formulaire2 .zone3, #moteur-formulaire2 .zone4 {
        width: 24.2%;
    }

    #moteur-formulaire2 .zone3 {
        width: 24.1%;
    }

    #moteur-formulaire2 .zone5 {
        width: 97.5%;
        margin-top: 0;
    }

    #moteur-formulaire3 .bouton a {
        height: 48px;
        line-height: 48px;
    }

    #moteur-formulaire3 .zone1, #moteur-formulaire3 .zone2, #moteur-formulaire3 .zone3 {
        width: 32.6%;
    }

    #moteur-formulaire3 .zone4, #moteur-formulaire3 .zone5 {
        width: 49.2%;
    }

    #moteur-formulaire3 .zone1, #moteur-formulaire3 .zone2, #moteur-formulaire3 .zone3, #moteur-formulaire3 .zone4, #moteur-formulaire3 .zone5 {
        margin: 0 -1px 0 -1px;
    }

    .moteur-onglets {
        width: 85%;
    }

    .moteurFixe {
        position: relative;
    }

    .nbresultats {
        font-size: 22px;
        line-height: 26px;
    }

    .pages, .pages-bas {
        padding: 5px 15px 5px 15px;
        font-size: 24px;
        line-height: 25px;
    }

    .pages .off, .pages-bas .off {
        padding: 10px;
    }

    .pages a, .pages-bas a {
        padding: 10px;
    }

    .pages-bas {
        margin-top: 10px;
    }

    .pied2-coordonnees-horaires {
        font-size: 12px;
        line-height: 16px;
    }

    .pied2-coordonnees-horaires .telephone {
        padding: 5px 10px 5px 10px;
        margin: 10px 0 10px 0;
    }

    .pied2-logo-messenger {
        padding: 10px 10px 10px 0;
    }

    .pied2-logo-messenger .pied-logo-messenger {
        width: 100%;
    }

    .pied2-logo-messenger .pied-logo-messenger1 .pied-logo {
        width: 100%;
        height: 180px;
    }

    .pied2-logo-messenger .pied-logo-messenger1 .pied-logo img {
        width: 100%;
    }

    .pied2-logo-messenger .pied-logo-messenger2 .pied-messenger {
        width: 100%;
        padding: 15px 0 0 0;
    }

    .pied2-logo-messenger .pied-logo-messenger2 .pied-messenger a {
        font-size: 12px;
        line-height: 16px;
    }

    .pied2-logo-messenger .pied-logo-messenger2 .pied-messenger a .picto {
        margin: 3px 10px 15px 0;
    }

    .pied2-plan {
        padding: 10px;
    }

    .pied2-plan a {
        font-size: 20px;
        line-height: 22px;
    }

    .pied2-plan a .picto {
        margin: 0 auto 10px auto;
    }

    .pied2-plan a strong {
        font-size: 24px;
        line-height: 22px;
    }

    .pied2-social a i {
        width: 40px;
        height: 40px;
        -webkit-border-radius: 40px;
        -moz-border-radius: 40px;
        border-radius: 40px;
        line-height: 36px;
    }

    .pied2-social a i.fa-facebook {
        font-size: 26px;
    }

    .pied2-social a i.fa-instagram {
        font-size: 24px;
    }

    .pied2-social a i.fa-twitter {
        font-size: 28px;
    }

    .pied2-social a i.fa-youtube-play {
        font-size: 24px;
    }

    .resultat {
        padding: 5px;
    }

    .resultat-bouton a.infos {
        max-width: 80%;
        padding: 10px 15px 10px 15px;
        margin-left: 15px;
    }

    .resultat-entete-produit1 .fournisseur, .resultat-entete-produit1 .fournisseur a {
        font-size: 20px;
        line-height: 24px;
    }

    .resultat-entete-produit1 .produit, .resultat-entete-produit1 .produit a {
        padding-right: 0;
        font-size: 14px;
        line-height: 18px;
    }

    .resultat-entete-produit1 img {
        display: block;
        height: 18px;
        margin: 4px 0 4px 0;
    }

    .resultat-entete-produit2 {
        font-size: 14px;
        line-height: 18px;
    }

    .resultat-photolien a.comparer {
        font-size: 12px;
        line-height: 14px;
        padding: 5px;
    }

    .resultat-photolien a.photos {
        font-size: 12px;
        line-height: 14px;
        padding: 5px;
    }

    .resultat-photolien .bouton-comparer-bulle {
        font-size: 12px;
        padding: 5px;
    }

    .resultat-prixduree {
        font-size: 14px;
        line-height: 16px;
    }

    .resultat-prixduree .ancienprix {
        font-size: 18px;
        line-height: 20px;
    }

    .resultat-prixduree .nouveauprix {
        font-size: 18px;
        line-height: 20px;
    }

    .resultat-produit-remise img {
        height: 31px;
    }

    .resultat-promo-texte {
        font-size: 14px;
        line-height: 16px;
    }

    .retour-liste a {
        font-size: 22px;
        line-height: 26px;
    }

    .rm-contenu-titre {
        padding: 50px 40px 0 40px;
    }

    .rm-direct-contenu, .rm-direct-contenu a {
        font-size: 12px;
        line-height: 16px;
    }

    .rm-direct-contenu img, .rm-direct-contenu a img {
        max-height: 18px;
        margin: 5px 10px 0 0;
    }

    .rm-direct-contenu strong, .rm-direct-contenu a strong {
        font-size: 24px;
        line-height: 26px;
    }

    .rm-domaineskiable iframe {
        height: 500px;
    }

    .rm-evenement-calendrier {
        padding: 10px 0 10px 0;
    }

    .rm-evenements-calendrier1 {
        padding: 0 5px 0 5px;
    }

    .rm-evenements .rm-evenement .date {
        height: auto;
        max-height: 32px;
        font-size: 12px;
    }

    .rm-evenements .rm-evenement .descriptif {
        max-height: 42px;
    }

    .rm-evenements .rm-evenement .libelle {
        max-height: 72px;
        font-size: 16px;
        line-height: 18px;
    }

    .rm-evenements .rm-evenement .photo {
        max-height: 490px;
    }

    .rm-evenements-coeur .rm-coeur .descriptif {
        max-height: 42px;
    }

    .rm-evenements-coeur .rm-coeur .libelle {
        max-height: 72px;
        font-size: 16px;
        line-height: 18px;
    }

    .rm-evenements-coeur .rm-coeur .photo {
        max-height: 490px;
    }

    .rm-evenements-coeur .rm-coeur .pretitre {
        height: auto;
        max-height: 32px;
        font-size: 12px;
    }

    .rm-evenements-titre1 {
        padding: 50px 15px 0 30px;
        font-size: 20px;
        line-height: 24px;
    }

    .rm-evenements-titre1 strong {
        line-height: 24px;
    }

    .rm-evenements-titre2 {
        padding: 50px 15px 0 15px;
        font-size: 20px;
        line-height: 24px;
    }

    .rm-evenements-titre2 strong {
        line-height: 24px;
    }

    #rm-moteur-formulaire {
        display: none;
    }

    .rm-live {
        padding-right: 15px;
        padding-right: 10px;
    }

    .rm-moteur {
        top: 5px;
    }

    .rm-moteur-zone2 {
        margin-top: 0;
    }

    .social-photos {
        padding: 10px 10px 0 10px;
    }

    .social-photos img {
        height: 80px;
        margin: 0 10px 10px 0;
    }

    .social-titre {
        padding: 50px 0 0 25px;
    }

    #thematiques-poi .bloc-contenu {
        font-size: 16px;
    }

    #thematiques-poi .bloc-contenu ul li a {
        font-size: 16px;
        line-height: 16px;
    }

    #thematiques-poi .bloc-contenu ul li ul li a {
        font-size: 16px;
        line-height: 16px;
    }

    #thematiques-poi .bloc-titre {
        font-size: 16px;
        line-height: 18px;
    }

    .thematiques-poi-titre a {
        font-size: 18px;
        line-height: 22px;
    }

    .top-bar-section .dropdown li {
        width: 33.333%;
    }

    .top-bar-section .dropdown li:nth-child(5), .top-bar-section .dropdown li:nth-child(8), .top-bar-section .dropdown li:nth-child(11), .top-bar-section .dropdown li:nth-child(14), .top-bar-section .dropdown li:nth-child(17), .top-bar-section .dropdown li:nth-child(20), .top-bar-section .dropdown li:nth-child(23), .top-bar-section .dropdown li:nth-child(26) {
        clear: both;
    }

    .top-bar-section .dropdown li:nth-child(6), .top-bar-section .dropdown li:nth-child(10), .top-bar-section .dropdown li:nth-child(14), .top-bar-section .dropdown li:nth-child(18), .top-bar-section .dropdown li:nth-child(22), .top-bar-section .dropdown li:nth-child(26) {
        clear: none;
    }

    .top-bar-section .has-dropdown {
        width: 220px;
    }

    .top-bar-section .right li .dropdown.ssRubrique2 {
        max-width: 75%;
    }

    .top-bar-section li:not(.has-form) a:not(.button) {
        font-size: 15px;
        line-height: 18px;
        height: 42px;
    }

    .top-bar-section ul li {
        width: 220px;
    }

}

/* Specificites pour les tablettes de moins de 870 pixels de large */
@media only screen and (min-width: 40.063em) and (max-width: 54.375em) {

    .connaitre-contenu1 {
    / / width: 55 %;
    }

    .connaitre-tableau2 .connaitre-contenu1 {
    / / width: 100 %;
    }

    .connaitre-contenu2 {
        width: 45%;
    }

    .fil-ariane-rm .addthis {
        float: none;
        text-align: right;
    }

    .flechebas-fixe {
        display: none;
    }

    .flechetop-fixe {
        display: none;
    }

    .listepoi article {
        height: 338px;
    }

    .listepoi article .liste-haut {
        height: 300px;
    }

    .listepoi article .liste-photo-poi {
        height: 171px;
    }

    .listepoi article .liste-photo-poi .image {
        width: 258px;
        height: 171px;
        margin-left: -129px;
    }

    .listepoi article .liste-photo-poi .image img {
        width: 258px;
        height: 171px;
    }

    .listepoi article .liste-photo-poi-zone {
        height: 171px;
    }

    .listepoi-carte {
        height: 696px;
    }

    .listepoi-carte iframe {
        height: 696px;
    }

    .listepoi-blocs {
        height: 716px;
    }

    .moteurFixe {
        position: relative;
    }

}

/* Specificites pour les mobiles (de 0 a 640 pixels de large maxi) */
@media only screen and (max-width: 40em) {

    .listepoi-n-carte {
        display: none; /* BSUPPORT-231 */
    }

    h1 {
        font-size: 24px;
        line-height: 26px;
    }

    h2 {
        font-size: 20px;
        line-height: 22px;
    }

    h3 {
        font-size: 16px;
        line-height: 18px;
    }

    .image-a-droite {
        display: block;
        float: none;
        margin: 10px 0 10px 0;
    }

    .soustitre {
        font-size: 20px;
        line-height: 22px;
    }

    .titre {
        font-size: 24px;
        line-height: 26px;
    }

    .r-fond1, td.r-fond1 {
        font-size: 12px;
    }

    .r-fond2, td.r-fond2 {
        font-size: 12px;
    }

    .r-fond3, td.r-fond3 {
        font-size: 12px;
    }

    .r-fond4, td.r-fond4 {
        font-size: 12px;
    }

    .r-fondspecial {
        font-size: 12px;
    }

    .r-prix1, input.r-prix1 {
        font-size: 12px !important;
    }

    .r-prix2, input.r-prix2 {
        font-size: 12px !important;
    }

    .r-prix3, input.r-prix3 {
        font-size: 12px !important;
    }

    .r-prix4, input.r-prix4 {
        font-size: 12px !important;
    }

    .r-prixspecial, input.r-prixspecial {
        font-size: 12px !important;
    }

    .r-soustitre {
        font-size: 22px;
        line-height: 24px;
    }

    .r-textespecial {
        font-size: 12px;
    }

    .r-textespecialgras {
        font-size: 12px;
    }

    .r-titre {
        font-size: 22px;
        line-height: 26px;
    }

    #calendriermoisannee {
        font-size: 12px;
    }

    #calendriermoisannee img.flechedroite {
        margin-left: 5px;
    }

    #calendriermoisannee img.flechegauche {
        margin-right: 5px;
    }

    .r-identification1 {
        padding-right: 15px;
    }

    .r-identification2 {
        padding-left: 15px;
    }

    .infosclient-bouton {
        margin-bottom: 1px;
    }

    .infosclient-bouton .saisie-attente img {
        margin: 5px 30px 0 auto;
        background-color: #fff;
        padding: 5px;
    }

    .infosclient-cases1 label {
        padding-top: 0;
    }

    .infosclient-formulaire input, .infosclient-formulaire select, .infosclient-formulaire textarea {
        margin: 2px 0 8px 0 !important;
    }

    .infosclient-formulaire label {
        display: inline;
    }

    .infosclient-titre label.inline {
        margin: 0;
        padding: 0;
    }

    .infosclient-titre-cases1 label.inline {
        margin: 0;
        padding: 5px 0 0 0;
    }

    .infosclient-titre-cases2 label.inline {
        margin: 0;
        padding: 5px 0 0 0;
    }

    #compte-bouton1 a {
        font-size: 14px;
        line-height: 16px;
    }

    #compte-bouton2 a {
        font-size: 14px;
        line-height: 16px;
    }

    .comparateur-bouton1 {
        padding-top: 10px;
        padding-right: 15px;
    }

    .comparateur-bouton2 {
        padding-top: 10px;
        padding-left: 15px;
        padding-right: 15px;
    }

    .comparateur-bouton3 {
        padding-top: 10px;
        padding-left: 15px;
    }

    .comparateur-liste {
        margin-top: 0;
        background-color: #fff;
        border: 0;
    }

    .comparateur-liste .STYLE-COMPARATEUR-idProduit {
        display: none;
    }

    .comparateur-liste .STYLE-COMPARATEUR-PRIX .comparateur-prix {
        min-height: inherit;
    }

    #comparateur-partager {
        padding-top: 0;
    }

    .comparateur-produit1, .comparateur-produit2, .comparateur-produit3, .comparateur-produit4 {
        margin-top: 40px !important;
        border-top: 3px solid #e5e5e5;
        padding-top: 5px;
    }

    #___gcse_0 {
        width: 100% !important;
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }

    .cse form.gsc-search-box, form.gsc-search-box {
        padding: 0 !important;
        margin-bottom: -2px !important;
    }

    .cse input.gsc-search-button, input.gsc-search-button {
        font-size: 12px !important;
        padding: 0 8px 0 8px !important;
    }

    .gsc-orderby-label {
        font-size: 16px !important;
        line-height: 18px !important;
    }

    .gsc-result-info {
        font-size: 16px !important;
        line-height: 18px !important;
    }

    a.gs-title, a.gs-title b {
        font-size: 14px !important;
    }

    td.gsc-clear-button {
        padding-left: 5px !important;
        padding-right: 5px !important;
    }

    td.gsc-input {
        padding-right: 1px !important;
    }

    .actualite-grande .contenu {
        position: relative;
        width: 100%;
        height: auto;
    }

    .actualite-grande .contenu:hover {
        width: 100%;
    }

    .actualite-grande .contenu a {
        background-image: none;
        background-color: #e2001a;
        padding: 10px;
        font-size: 12px;
        line-height: 14px;
    }

    .actualite-grande .contenu a span.lienpicto {
        width: 12px;
        height: 10px;
        background-size: 12px 10px;
    }

    .actualite-grande .contenu a span.lientexte {
        padding-top: 5px;
        font-size: 14px;
    }

    .actualite-grande .contenu a strong {
        font-size: 14px;
        line-height: 16px;
    }

    .actualite-grande .lien {
        left: 10px;
        top: 10px;
    }

    .actualite-grande .lien a {
        padding: 2px;
        font-size: 12px;
    }

    .actualite-petite {
        padding-top: 15px;
    }

    .actualite-petite .contenu {
        position: relative;
    }

    .actualite-petite .contenu a {
        min-height: inherit;
        background-image: none;
        background-color: #e2001a;
        padding: 10px;
        font-size: 12px;
    }

    .actualite-petite .contenu a:hover {
        min-height: inherit;
        padding-bottom: 10px;
    }

    .actualite-petite .contenu a strong {
        font-size: 14px;
    }

    .actualite-petite .lien {
        right: 10px;
        top: 10px;
    }

    .actualite-petite .lien a {
        padding: 2px;
        font-size: 12px;
    }

    .avisclient-contenu {
        margin-top: 10px;
        padding-left: 0;
        padding-right: 0;
    }

    .avisclient-notes {
        padding: 5px 5px 1px 5px;
    }

    .avisclient-produit {
        padding: 5px 5px 0 5px;
    }

    .avisclients-entete .libelle {
        margin: 0;
        display: block;
    }

    .avisclients-entete .nb {
        margin: 0;
        display: block;
    }

    .avisclients-entete .note {
        margin-top: 2px;
        margin-bottom: 3px;
    }

    .avisclients-entete .pictos {
        margin-top: 2px;
        margin-bottom: 3px;
    }

    .avisclients-nom {
        font-size: 18px;
        line-height: 20px;
    }

    .avisclients-titre {
        font-size: 18px;
        line-height: 20px;
        padding: 10px;
    }

    .b2f {
        text-align: center;
    }

    .bonsplans-choix a {
        display: block;
        padding: 5px 10px 5px 10px;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .bonsplans-choix .separateur {
        display: none;
    }

    .bonsplans-contenu {
        padding-left: 15px;
    }

    .bonsplans-contenu h2 {
        font-size: 22px;
        line-height: 24px;
    }

    .bonsplans-titre span {
        padding: 10px;
        font-size: 18px;
        line-height: 20px;
    }

    .bouton-comparateur a strong {
        font-size: 20px;
        line-height: 24px;
    }

    .bouton-comparer-bulle-fiche {
        left: -5px;
        padding: 5px;
    }

    .cartographie iframe {
        height: 350px;
    }

    .connaitre-bloc1 {
        height: 350px;
    }

    .connaitre-bloc2 {
        height: 350px;
        margin-top: 15px;
    }

    .connaitre-bloc3-m {
        display: block;
        position: relative;
        width: 100%;
        height: 350px;
        margin-top: 15px;
        background-repeat: no-repeat !important;
        background-position: center !important;
        background-size: cover !important;
    }

    .connaitre-bloc3-m-libelle {
        position: absolute;
        width: 100%;
        bottom: 15px;
        padding: 0 10px 0 10px;
        text-align: center;
        text-transform: uppercase;
    }

    .connaitre-bloc3-m-libelle a {
        display: block;
        color: #fff;
        font: 21px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
        line-height: 25px;
    }

    .connaitre-bloc3-m-libelle a .picto {
        display: block;
        width: 34px;
        height: 35px;
        background: url(/images/plus.png) no-repeat;
        background-size: 34px 70px;
        margin: 0 auto 15px auto;
    }

    .connaitre-bloc3-m-libelle a:hover .picto {
        background: url(/images/plus.png) no-repeat scroll 0 -35px;
        background-size: 34px 70px;
    }

    .connaitre-bloc3-m-libelle a strong {
        font: 27px OpenSansExtrabold, Arial, Helvetica, Sans-serif;
        font-weight: normal;
        line-height: 31px;
    }

    .connaitre-bloc3-m-lien {
        position: absolute;
        width: 100%;
        height: 350px;
        background: url(/images/bloc3-filtre.png) repeat;
    }

    .connaitre-bloc3-m-lien a {
        display: block;
        height: auto;
    }

    .connaitre-bloc-lien {
        height: auto;
    }

    .connaitre-bloc-lien a {
        height: auto;
    }

    .connaitre-contenu {
        display: block;
        height: auto;
        background-image: none;
    }

    .connaitre-contenu1 {
        display: none;
    }

    .connaitre-contenu2 {
        display: block;
        width: 100%;
        height: auto;
        padding: 0;
    }

    .connaitre-news {
        height: auto;
        overflow: visible;
        padding: 0;
    }

    .connaitre-news-fond {
        height: auto;
        padding: 15px 15px 0 15px;
    }

    .connaitre-news-titre {
        padding: 20px 0 0 0;
    }

    .connaitre-tableau {
        display: block;
        margin-top: 15px;
    }

    .connaitre-tableau1 {
        display: block;
        width: 100%;
        height: auto;
    }

    .connaitre-tableau2 {
        display: block;
        width: 100%;
        height: auto;
        background-image: none !important;
    }

    .connaitre-titre {
        display: none;
    }

    .contenu-wysiwyg-vel {
        padding-top: 30px;
    }

    .contenu-wysiwyg-vel td {
        font-size: 12px;
    }

    .criteres-affichage1 {
        padding: 10px 10px 5px 10px;
        text-align: center;
    }

    .criteres-affichage1 .libelle {
        display: none;
    }

    .criteres-affichage2 {
        padding: 5px 10px 10px 10px;
        text-align: center;
    }

    .criteres-affichage2 .libelle {
        display: none;
    }

    .criteres-affichage2 select {
        width: 90%;
        margin: 0 auto 0 auto;
        font-size: 14px;
    }

    .criteres-affichage3 {
        padding: 10px;
        text-align: center;
    }

    .criteres-affichage3 .libelle {
        display: none;
    }

    #criteres-poi .bloc-contenu {
        font-size: 16px;
    }

    #criteres-poi .bloc-contenu input {
        margin: 2px 7px 6px 0;
    }

    #criteres-poi .bloc-titre {
        font-size: 16px;
        line-height: 18px;
    }

    .criteres-poi-titre a {
        font-size: 18px;
        line-height: 22px;
    }

    .dernieres-offres-liens a {
        font-size: 14px;
        line-height: 16px;
    }

    .dernieres-offres-titre {
        font-size: 20px;
        line-height: 24px;
        padding: 15px 0 15px 0;
    }

    .detailActualite .actualite-contenu .image-a-droite {
        max-width: 100%;
    }

    .detailActualite .actualite-lien {
        text-align: center;
    }

    .detailActualite .actualite-lien a {
        display: block;
        font-size: 18px;
        padding: 10px;
    }

    .detailActualite .actualite-titre {
        font-size: 22px;
        line-height: 26px;
    }

    .detailAgenda .agenda-contenu .image-a-droite {
        max-width: 100%;
    }

    .detailAgenda .agenda-date {
        font-size: 22px;
        line-height: 26px;
    }

    .detailAgenda .agenda-lien {
        text-align: center;
    }

    .detailAgenda .agenda-lien a {
        display: block;
        font-size: 18px;
        padding: 10px;
    }

    .detailAgenda .agenda-titre {
        font-size: 22px;
        line-height: 26px;
    }

    .diaporama {
        height: auto;
        overflow: visible;
        top: 0;
    }

    .diaporama .diapo {
        position: relative;
        width: 100%;
        height: auto;
        left: 0;
        margin-left: 0;
        top: 0;
        overflow: visible;
    }

    .diaporama .diapo img {
        width: 100%;
        height: auto;
        margin-top: 0;
        transform: none;
    }

    .diaporama .diapo_txt_1 span {
        height: auto;
        font-size: 38px;
        line-height: 39px;
        padding-top: 0;
    }

    .diaporama .diapo_txt_2 {
        display: block;
        margin-top: -2px;
    }

    .diaporama .diapo_txt_2 span {
        height: auto;
        font-size: 33px;
        line-height: 34px;
        padding-top: 0;
    }

    .diaporama .diapo_txt_zone {
        width: 65%;
        margin: 0 calc((100% - 65%) / 2) !important;
        top: 30px;
    }

    .diaporama .diaporama-zone {
        position: relative;
        width: 100%;
        height: auto;
    }

    .diaporama .fleche-bas {
        display: none;
    }

    .diaporama .fleche-droite1 {
        display: none;
    }

    .diaporama .fleche-gauche1 {
        display: none;
    }

    .diaporama-accueil-fin-rm {
        margin-top: 0;
    }

    .diaporama-accueil-rm {
        top: 0;
    }

    .direct:hover {
        background-color: #fff;
    }

    .direct-contenu {
        padding-left: 10px;
        padding-top: 0;
    }

    .direct-contenu, .direct-contenu a {
        font-size: 10px;
        line-height: 14px;
    }

    .direct-contenu img, .direct-contenu a img {
        display: none;
    }

    .direct-contenu strong, .direct-contenu a strong {
        font-size: 16px;
        line-height: 18px;
    }

    .direct-photo {
        padding-left: 15px;
        padding-right: 0;
    }

    .direct-picto {
        display: none;
    }

    .direct-titre {
        padding: 30px 15px 20px 15px;
        font-size: 20px;
        line-height: 22px;
    }

    .direct-titre strong {
        line-height: 22px;
    }

    .directs {
        padding-bottom: 20px;
    }

    .espacement {
        display: block;
        height: 60px;
    }

    .evenements {
        padding-right: 15px;
    }

    .evenements .evenement .photo {
        max-height: 490px;
        overflow: visible;
    }

    .evenements .evenement .slick-slide {
        height: auto;
        border-left: 0;
    }

    .evenements-calendrier {
        padding-right: 0;
        margin-top: 10px;
    }

    .evenements-calendrier1 {
        width: 100%;
        border-right: 0;
    }

    .evenements-calendrier2 {
        display: none;
    }

    .evenements-calendrier-contenu {
        height: auto;
        padding: 0;
        overflow: visible;
    }

    .evenements-calendrier-fond {
        height: auto;
        padding: 0;
    }

    .evenements-titre {
        padding: 30px 15px 0 15px;
        font-size: 20px;
        line-height: 22px;
    }

    .evenements-titre strong {
        line-height: 22px;
    }

    .evenements-titre-zone {
        border-top: 1px solid #d5d9df;
    }

    .fiche-avis {
        text-align: right;
    }

    .fiche-bouton-poi a {
        font-size: 20px;
        line-height: 22px;
    }

    .fiche-entete-droite {
        padding-top: 15px;
    }

    .fiche-entete-gauche .classement {
        display: block;
        height: 18px;
        margin: 2px 0 6px 0;
    }

    .fiche-entete-gauche .fournisseur {
        font-size: 24px;
        line-height: 28px;
    }

    .fiche-entete-gauche .produit {
        font-size: 18px;
        line-height: 20px;
    }

    .fiche-entete-gauche .promo {
        font-size: 14px;
        line-height: 16px;
    }

    .fiche-entete-gauche .promo img {
        margin: 1px 5px 1px 0;
    }

    .fiche-entete-gauche .zonegeo {
        font-size: 14px;
        line-height: 16px;
    }

    .fiche-libelle-produit-poi {
        font-size: 24px;
        line-height: 26px;
    }

    .fiche-photos-petites div.carousel img {
        margin: 0 1px 5px 1px;
    }

    .fiche-photos-petites img {
        margin: 0 1px 5px 1px;
    }

    .fiche-photos-petites-fleche1 a i {
        font-size: 50px;
    }

    .fiche-photos-petites-fleche2 a i {
        font-size: 50px;
    }

    .fiche-pictos {
        text-align: center;
        padding: 10px 20px 0 20px;
    }

    .fiche-pictos a i {
        margin-left: 6px;
        margin-right: 6px;
    }

    .fiche-pictos a.envoiami {
        margin-left: 6px;
        margin-right: 6px;
    }

    #fiche-poi .bloc-contenu-localisation-zone iframe {
        height: 350px;
    }

    #fiche-poi .bloc-contenu-photos-fleche1 {
        height: 50px;
    }

    #fiche-poi .bloc-contenu-photos-fleche1 a i {
        font-size: 40px;
        line-height: 50px;
    }

    #fiche-poi .bloc-contenu-photos-fleche2 {
        height: 50px;
    }

    #fiche-poi .bloc-contenu-photos-fleche2 a i {
        font-size: 40px;
        line-height: 50px;
    }

    #fiche-poi .bloc-contenu-photos-petites {
        height: 50px;
    }

    #fiche-poi .bloc-contenu-photos-petites img {
        height: 40px;
    }

    #fiche-poi .bloc-contenu-photos-petites div.carousel img {
        height: 40px;
    }

    #fiche-poi .bloc-titre {
        font-size: 18px;
        line-height: 22px;
    }

    .fiche-poi-n-contenu2 {
        padding-left: 15px;
    }

    .fiche-poi-n-photos {
        padding: 8px 35px 0 35px;
    }

    .fiche-poi-n-photos-vide {
        display: none;
    }

    .fichepoi-addthis {
        text-align: center;
    }

    .fichepoi-addthis .addthis_sharing_toolbox a {
        margin: 2px 0 0 0 !important;
    }

    .fichepoi-addthis .libelle {
        display: block;
        padding-right: 0;
        padding-bottom: 3px;
        float: none;
    }

    .fichepoi-carte iframe {
        height: 350px;
    }

    .fichepoi-contenu {
        padding: 10px 0 30px 0;
    }

    .fichepoi-grand {
        padding-right: 15px;
    }

    .fichepoi-grandephoto {
        height: auto;
    }

    .fichepoi-grandephoto .fichepoi-grandephoto-zone {
        position: relative;
        height: auto;
    }

    .fichepoi-grandephoto .fichepoi-grandephoto-zone .diapo {
        position: relative;
        width: 100%;
        height: auto;
        left: 0%;
        margin-left: 0;
    }

    .fichepoi-grandephoto .fichepoi-grandephoto-zone .diapo img {
        width: 100%;
        height: auto;
    }

    .fichepoi-libelle-zone1 {
        display: none;
    }

    .fichepoi-libelle-m .categorie {
        color: #738294;
        font: 16px OpenSans, Arial, Helvetica, Sans-serif;
        text-transform: uppercase;
        text-decoration: underline;
        font-style: italic;
    }

    .fichepoi-libelle-zone-m {
        display: block;
    }

    .fichepoi-milieu-droite {
        padding-left: 15px;
    }

    .fiche-poi-n-bouton1 {
        padding: 15px;
    }

    .fiche-poi-n-bouton1 .bouton a {
        padding: 10px 30px 10px 30px;
    }

    .fiche-poi-n-boutons {
        padding: 10px;
    }

    .fiche-poi-n-boutons .bouton a {
        padding: 10px 15px 10px 15px;
    }

    .fiche-poi-n-contenu-carte2 {
        margin-top: 0;
    }

    .fiche-poi-n-contenu-bas1 {
        padding: 40px 15px 0 74px;
    }

    .fiche-poi-n-contenu-bas1 .chapitre {
        padding-top: 25px;
    }

    .fiche-poi-n-contenu-bas1 .chapitre-titre img, .fiche-poi-n-contenu-bas2 .chapitre-titre img {
        margin: -12px 10px 0 -54px;
    }

    .fiche-poi-n-contenu-bas2 {
        padding: 0 15px 30px 74px;
    }

    .fiche-poi-n-contenu-bas2 .chapitre {
        padding-top: 25px;
    }

    .fiche-poi-n-contenu-coordonnees {
        padding: 15px 10px 15px 10px;
        text-align: center;
    }

    .fiche-poi-n-contenu-prix h2,
    .fiche-poi-n-contenu-coordonnees h2 {
        font-size: 20px;
        line-height: 24px;
    }

    .fiche-poi-n-contenu-haut2 .capacite {
        padding: 10px 15px 10px 15px;
    }

    .fiche-poi-n-contenu-haut2 .picto2 {
        display: block;
        padding-right: 0;
    }

    .fiche-poi-n-contenu-haut2 .picto2 img {
        height: 18px;
    }

    .fiche-poi-n-contenu-haut2 .pieces {
        padding: 10px 15px 10px 15px;
        margin: 10px 4px 4px 0;
    }

    .fiche-poi-n-contenu-haut2 h1 {
        font-size: 20px;
        line-height: 24px;
    }

    .fiche-poi-n-contenu-ouverture {
        padding: 15px 10px 15px 10px;
        text-align: center;
    }

    .fiche-poi-n-contenu-ouverture h2 {
        font-size: 20px;
        line-height: 24px;
    }

    .fiche-poi-n-contenu-prix {
        padding: 15px;
        margin-top: 5px;
    }

    .fiche-poi-n-contenu-prix .bouton a {
        padding: 10px 30px 10px 30px;
        margin-top: 15px;
    }

    .fiche-poi-n-contenu-prix strong {
        font-size: 32px;
        line-height: 32px;
    }

    .fiche-poi-n-grandephoto {
        height: auto;
        overflow: visible;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone {
        position: relative;
        height: auto;
        overflow: visible;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .diapo {
        position: relative;
        width: 100%;
        height: auto;
        left: 0;
        margin-left: 0;
        overflow: visible;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .diapo img {
        width: 100%;
        height: auto;
    }

    .fiche-poi-n-grandephoto .fiche-poi-n-grandephoto-zone .pictos {
        display: none;
    }

    .fiche-poi-n-pictos {
        display: block;
        position: relative;
        width: 100%;
        text-align: center;
        padding-top: 25px;
    }

    .fiche-poi-n-pictos .picto-video {
        display: inline-block;
        padding-right: 10px;
        vertical-align: middle;
    }

    .fiche-poi-n-pictos .picto-video a {
        display: block;
        width: 47px;
        height: 33px;
        background: url(/images/picto-video.png) no-repeat;
        background-size: 47px 66px;
        margin: 0 auto 3px auto;
    }

    .fiche-poi-n-pictos .picto-video a:hover {
        background: url(/images/picto-video.png) no-repeat scroll 0 -33px;
        background-size: 47px 66px;
    }

    .fiche-poi-n-pictos .picto-visite {
        display: inline-block;
        padding-left: 10px;
        vertical-align: middle;
    }

    .fiche-poi-n-pictos .picto-visite a {
        display: block;
        width: 43px;
        height: 41px;
        background: url(/images/picto-visitevirtuelle.png) no-repeat;
        background-size: 43px 82px;
    }

    .fiche-poi-n-pictos .picto-visite a:hover {
        background: url(/images/picto-visitevirtuelle.png) no-repeat scroll 0 -41px;
        background-size: 43px 82px;
    }

    .fichepoi-patrimoine-addthis .libelle-addthis {
        padding-top: 30px;
        text-align: left;
    }

    .fichepoi-patrimoine-addthis .libelle-addthis .addthis {
        display: block;
        padding-left: 0;
        padding-top: 0;
    }

    .fichepoi-patrimoine-addthis .libelle-addthis .addthis .at-resp-share-element .at-share-btn {
        margin: 0 10px 0 -4px !important;
    }

    .fichepoi-patrimoine-addthis .libelle-addthis .addthis .at-resp-share-element.at-mobile .at-share-btn {
        margin: 0 10px 0 -4px !important;
    }

    .fichepoi-patrimoine-addthis .libelle-addthis .addthis .at-style-responsive .at-share-btn {
        padding: 0 !important;
    }

    .fichepoi-patrimoine-addthis .libelle-addthis .libelle {
        display: block;
        padding-right: 0;
        font-size: 20px;
    }

    .fichepoi-patrimoine-p1 .photo2 {
        padding: 20px 5px 0 15px;
    }

    .fichepoi-patrimoine-p1 .photo3 {
        padding: 20px 15px 0 5px;
    }

    .fichepoi-patrimoine-p2 .photo4 {
        padding-top: 10px;
    }

    .fichepoi-patrimoine-t1 .citation, .fichepoi-patrimoine-t2 .citation, .fichepoi-patrimoine-t4 .citation {
        padding: 20px 15px 0 15px;
        font-size: 16px;
        text-align: left;
    }

    .fichepoi-patrimoine-t1 .citation .debut, .fichepoi-patrimoine-t2 .citation .debut, .fichepoi-patrimoine-t4 .citation .debut {
        margin: 0 5px 0 0;
    }

    .fichepoi-patrimoine-t1 .citation .fin, .fichepoi-patrimoine-t2 .citation .fin, .fichepoi-patrimoine-t4 .citation .fin {
        margin: 0 0 0 5px;
    }

    .fichepoi-patrimoine-t1 .description, .fichepoi-patrimoine-t2 .description, .fichepoi-patrimoine-t3 .description {
        padding: 20px 15px 0 15px;
    }

    .fichepoi-patrimoine-t4 .description {
        padding: 10px 15px 0 15px;
    }

    .fichepoi-patrimoine-v1 .video {
        padding-top: 20px;
    }

    .fichepoi-petit {
        padding-left: 15px;
    }

    .fichepoi-photos-boutons a {
        padding-left: 2px;
        padding-right: 2px;
        font-size: 9px;
    }

    .fichepoi-photos-boutons a span, .fichepoi-photos-boutons a:hover span {
        line-height: 12px;
    }

    .fichepoi-photos-boutons-zone {
        padding: 4px;
    }

    .fichepoi-photo-grande {
        padding-right: 15px;
    }

    .fichepoi-photos-petites {
        text-align: center;
    }

    .fichepoi-photos-droite {
        padding-left: 15px;
    }

    .fichepoi-photos-droite-fond {
        padding: 4px;
    }

    .fichepoi-photos-petites .imgClearingFichePOIV2 {
        float: none;
        margin: 4px 2px 4px 2px;
        width: 17%;
    }

    .fichepoi-photos-petites li {
        display: inline;
        margin: 0 !important;
        padding: 0 !important;
    }

    .fichepoi-photos-video-contenu {
        padding: 15px 15px 0 15px;
    }

    .fichepoi-photos-visite-contenu {
        padding: 15px 15px 0 15px;
    }

    .fichepoi-photos-visite-contenu .flex-video {
        padding-bottom: 100%;
    }

    .fichepoi-prix {
        margin: 10px 0 10px 0;
    }

    .fichepoi-retourliste {
        text-align: center;
    }

    .fichepoi-titre {
        font-size: 18px;
        line-height: 20px;
    }

    .fil-ariane-rm .addthis {
        float: none;
        text-align: right;
    }

    .flechebas-fixe {
        display: none;
    }

    .flechetop-fixe {
        display: none;
    }

    .garanties-m {
        display: block;
        margin-top: 15px;
    }

    #garanties-m-contenu {
        display: block;
        padding: 5px 0 10px 0;
        color: #000;
        font-size: 12px;
    }

    #garanties-m-telephone a {
        display: block;
        background-color: #e2001a;
        text-align: center;
        color: #fff;
        font-size: 18px;
        font-family: DinBold, Arial, Helvetica, Sans-serif;
        line-height: 20px;
        font-weight: normal;
        padding: 5px;
    }

    #garanties-m-telephone a:hover {
        background-color: #ff0000;
        color: #fff;
    }

    #garanties-m-telephone a i {
        font-size: 28px;
        vertical-align: middle;
        margin-right: 5px;
    }

    #garanties-m-titre1 a, #garanties-m-titre2 a {
        display: block;
        background-color: #757575;
        text-align: center;
        color: #fff;
        font-size: 20px;
        font-family: DinBold, Arial, Helvetica, Sans-serif;
        text-transform: uppercase;
        line-height: 24px;
        font-weight: normal;
        padding: 15px 5px 15px 5px;
    }

    #garanties-m-titre1 a:hover, #garanties-m-titre2 a:hover {
        background-color: #5b5b5b;
        color: #fff;
    }

    .garanties-picto {
        padding-right: 0;
        font-size: 26px;
    }

    .garanties-texte .paiement {
        width: 140px;
        height: 63px;
    }

    .grandephoto {
        height: auto;
        overflow: visible;
        top: 0;
    }

    .grandephoto .grandephoto-illustration {
        height: 27px;
        background-size: 640px 27px;
    }

    .grandephoto .grandephoto-zone {
        position: relative;
        width: 100%;
        height: auto;
    }

    .grandephoto .grandephoto-zone .diapo {
        position: relative;
        width: 100%;
        height: auto;
        left: 0;
        margin-left: 0;
        top: 0;
        overflow: visible;
    }

    .grandephoto .grandephoto-zone .diapo img {
        width: 100%;
        height: auto;
    }

    .grandephoto .grandephoto-zone .diapo-libelle span {
        height: 20px;
        font-size: 14px;
        line-height: 20px;
        padding-top: 0;
    }

    .grandephoto .grandephoto-zone .diapo-libelle-zone {
        top: 20px;
    }

    .infospromos img {
        width: 100%;
        float: none;
        margin: 0 0 15px 0;
    }

    .infospromos-titre {
        font-size: 20px;
        line-height: 24px;
    }

    .liste-bouton-poi a {
        font-size: 22px;
    }

    .liste-carte-poi-zone iframe {
        height: 350px;
    }

    .liste-criteres-poi {
        margin-top: 25px;
    }

    .liste-criteres-poi1 {
        padding: 5px 2px 5px 5px;
        font-size: 14px;
    }

    .liste-criteres-poi2 {
        padding: 5px 5px 5px 3px;
        font-size: 14px;
    }

    .liste-criteres-poi2 .texte {
        display: none;
    }

    .liste-criteres-poi2 a.off i.fa-map-marker {
        font-size: 35px;
    }

    .liste-criteres-poi2 a.on i.fa-map-marker {
        font-size: 35px;
    }

    .liste-criteres-poi2 a.off i.fa-th-large {
        font-size: 40px;
        margin-right: 7px;
    }

    .liste-criteres-poi2 a.on i.fa-th-large {
        font-size: 40px;
        margin-right: 7px;
    }

    .liste-poi article .liste-lien-poi {
        height: 35px;
        padding-top: 5px;
    }

    .liste-poi article .liste-lien-poi a {
        height: 30px;
        padding: 0 5px 0 5px;
        font-size: 14px;
        line-height: 30px;
    }

    .liste-poi article .liste-lien-poi a:hover {
        background-color: #ff0000;
        color: #fff;
    }

    .liste-poi article .liste-contenu-poi {
        font-size: 14px;
        line-height: 16px;
        min-height: inherit;
    }

    .liste-poi article .liste-contenu-poi .point-situation {
        margin-top: -24px;
    }

    .liste-poi article .liste-contenu-poi .point-situation a i {
        font-size: 40px;
    }

    .liste-poi article .liste-contenu-poi strong {
        font-size: 16px;
        line-height: 18px;
    }

    .liste-poi li {
        padding-top: 15px;
    }

    .listeActualites .actualites-titre {
        font-size: 22px;
        line-height: 26px;
    }

    .listeActualites article .liste-lien-actualite {
        height: 35px;
        padding-top: 5px;
    }

    .listeActualites article .liste-lien-actualite a {
        height: 30px;
        padding: 0 5px 0 5px;
        font-size: 14px;
        line-height: 30px;
    }

    .listeActualites article .liste-lien-actualite a:hover {
        background-color: #ff0000;
        color: #fff;
    }

    .listeActualites article .liste-contenu-actualite {
        font-size: 14px;
        line-height: 16px;
        min-height: inherit;
    }

    .listeActualites article .liste-contenu-actualite strong {
        font-size: 16px;
        line-height: 18px;
    }

    .listeActualites li {
        padding-top: 15px;
    }

    .listeAgenda .agenda-mois1 {
        padding: 10px;
    }

    .listeAgenda .agenda-mois1 a i {
        font-size: 30px;
    }

    .listeAgenda .agenda-mois2 {
        padding: 10px 0 10px 0;
        font-size: 18px;
    }

    .listeAgenda .agenda-mois3 {
        padding: 10px;
    }

    .listeAgenda .agenda-mois3 a i {
        font-size: 30px;
    }

    .listeAgenda .agenda-mois-lien a {
        font-size: 18px;
    }

    .listeAgenda .agenda-titre {
        font-size: 22px;
        line-height: 26px;
    }

    .listeAgenda article .liste-lien-agenda {
        height: 35px;
        padding-top: 5px;
    }

    .listeAgenda article .liste-lien-agenda a {
        height: 30px;
        padding: 0 5px 0 5px;
        font-size: 14px;
        line-height: 30px;
    }

    .listeAgenda article .liste-lien-agenda a:hover {
        background-color: #ff0000;
        color: #fff;
    }

    .listeAgenda article .liste-contenu-agenda {
        font-size: 14px;
        line-height: 16px;
        min-height: inherit;
    }

    .listeAgenda article .liste-contenu-agenda .date {
        font-size: 16px;
        line-height: 18px;
    }

    .listeAgenda article .liste-contenu-agenda strong {
        font-size: 16px;
        line-height: 18px;
    }

    .listeAgenda li {
        padding-top: 15px;
    }

    .listepoi article {
        height: auto;
    }

    .listepoi article .liste-contenu-poi .libelle {
        height: auto;
        overflow: visible;
    }

    .listepoi article .liste-contenu-poi .texte {
        height: auto;
        margin-top: 2px;
        overflow: visible;
    }

    .listepoi article .liste-contenu-poi .texte .tel {
        display: none;
    }

    .listepoi article .liste-contenu-poi .texte .tel-m {
        display: block;
    }

    .listepoi article .liste-haut {
        height: auto;
        overflow: visible;
    }

    .listepoi article .liste-photo-poi {
        position: relative;
        height: auto;
        overflow: visible;
    }

    .listepoi article .liste-photo-poi .image {
        position: relative;
        width: auto;
        height: auto;
        left: 0;
        margin-left: 0;
        overflow: visible;
    }

    .listepoi article .liste-photo-poi .image img {
        width: auto;
        height: auto;
    }

    .listepoi article .liste-photo-poi-zone {
        height: auto;
    }

    .listepoi li {
        padding: 0 15px 15px 0 !important;
    }

    .listepoi-carte {
        height: auto;
        padding-left: 15px;
        overflow: visible;
    }

    .listepoi-carte iframe {
        width: 100%;
        height: 350px;
    }

    .listepoi-blocs {
        height: auto;
        padding-right: 0;
        overflow: visible;
    }

    #listepoi-criteresp dialog, .reveal-modal {
        margin-left: inherit;
        width: 100%;
        top: 0;
    }

    .listepoi-criteresp-contenu {
        width: 92%;
    }

    .listepoi-grandephoto {
        height: auto;
        overflow: visible;
        top: 0;
    }

    .listepoi-grandephoto .listepoi-grandephoto-illustration {
        display: none;
    }

    .listepoi-grandephoto .listepoi-grandephoto-zone {
        position: relative;
        width: 100%;
        height: auto;
        overflow: visible;
    }

    .listepoi-grandephoto .listepoi-grandephoto-zone .diapo {
        display: none;
    }

    .listepoi-grandephoto .listepoi-grandephoto-zone .listepoi-libelle .descriptif {
        marging-top: 0;
        color: #000;
    }

    .listepoi-grandephoto .listepoi-grandephoto-zone .listepoi-libelle span, .listepoi-grandephoto .listepoi-grandephoto-zone .listepoi-libelle h1 {
        margin: 0 auto 0 auto;
        padding-top: 4px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 20px;
        line-height: 24px;
        color: #000;
        text-shadow: none;
    }

    .listepoi-grandephoto .listepoi-grandephoto-zone .listepoi-libelle-zone {
        display: block;
        position: relative;
        bottom: 0;
    }

    .listepoi-n-carte {
        height: auto;
        padding-left: 15px;
        overflow: visible;
        padding-top: 5px;
    }

    .listepoi-n-carte .carte .carte-bouton {
        left: 25px;
        bottom: 15px;
    }

    .listepoi-n-carte .carte .carte-bouton a {
        padding-left: 15px;
        padding-right: 15px;
    }

    .listepoi-n-carte .carte iframe {
        height: 350px;
    }

    .listepoi-n-carte .tri {
        display: none;
    }

    .listepoi-n-criteres {
        display: none;
        height: auto;
        overflow: visible;
    }

    .listepoi-n-criteres-bouton1 {
        display: block;
        padding: 1px 0 0 0;
        text-align: center;
    }

    .listepoi-n-criteres-bouton1 a {
        display: block;
        height: 40px;
        line-height: 40px;
        padding-left: 5px;
        padding-right: 5px;
    }

    .listepoi-n-criteres-bouton2-m {
        position: fixed;
        z-index: 10;
        width: 100%;
        padding: 0;
        text-align: center;
        bottom: 0;
    }

    .listepoi-n-criteres-bouton2-m a {
        display: block;
        height: auto;
        background-color: #e2001a;
        border-top: 1px solid #fff;
        padding: 10px 15px 10px 15px;
        color: #fff;
        font: 13px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
        text-transform: uppercase;
        line-height: 16px;
    }

    .listepoi-n-criteres-bouton2-m a:hover {
        background-color: #ff0000;
    }

    .listepoi-n-criteres-boutons {
        text-align: center;
        padding-top: 10px;
        padding-bottom: 30px;
    }

    .listepoi-n-criteres-titre {
        height: 40px;
        line-height: 40px;
    }

    .listepoi-n-liste {
        height: auto;
        padding-left: 15px;
        overflow: visible;
    }

    .listepoi-n-nbresultats {
        min-height: inherit;
        padding-bottom: 10px;
        font-size: 16px;
        line-height: 18px;
        text-align: center;
    }

    .listepoi-n-resultat-contenu {
        padding: 4px 23px 8px 23px;
    }

    .listepoi-n-resultat-contenu .adresse {
        height: auto;
        overflow: visible;
    }

    .listepoi-n-resultat-contenu .autres {
        height: auto;
        overflow: visible;
        line-height: normal;
        vertical-align: middle;
        padding-top: 4px;
    }

    .listepoi-n-resultat-contenu .autres a .ferme {
        font-size: 12px;
    }

    .listepoi-n-resultat-contenu .autres a.info {
        padding-left: 15px;
        padding-right: 15px;
    }

    .listepoi-n-resultat-contenu .autres a .ouvert {
        font-size: 12px;
    }

    .listepoi-n-resultat-contenu .autres a.reservation {
        padding-left: 15px;
        padding-right: 15px;
    }

    .listepoi-n-resultat-contenu .autres a .situation {
        margin: 1px 10px 1px 0;
    }

    .listepoi-n-resultat-contenu .descriptif {
        height: auto;
        overflow: visible;
    }

    .listepoi-n-resultat-contenu .libelle {
        height: auto;
        overflow: visible;
    }

    .listepoi-n-resultat-contenu .telephone {
        height: auto;
        overflow: visible;
    }

    .listepoi-n-resultat-fond {
        margin-bottom: 10px;
    }

    .listepoi-n-resultat-photo {
        padding: 8px 23px 8px 23px;
    }

    .listepoi-nt-bouton {
        padding-bottom: 15px;
    }

    .listepoi-nt-bouton a {
        display: block;
        overflow: hidden;
        height: 40px;
        background-color: #e2001a;
        padding-left: 5px;
        padding-right: 5px;
        text-align: center;
        color: #fff;
        font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
        text-transform: uppercase;
        line-height: 40px;
    }

    .listepoi-nt-bouton a:hover {
        background-color: #ff0000;
    }

    .listepoi-nt-bouton-zone {
        display: none;
    }

    .listepoi-nt-bouton-zone-m {
        display: block;
    }

    .live {
        padding-left: 0;
        padding-right: 0;
    }

    .live-animations {
        margin-top: 10px;
    }

    .live-animations a {
        font-size: 14px;
        line-height: normal;
        padding: 10px 5px 10px 5px;
    }

    .live-autres {
        height: 50px;
        padding: 0 5px 0 5px;
    }

    .live-avalanche {
        margin-top: 5px;
    }

    .live-avalanche-t1 {
        font-size: 14px;
    }

    .live-avalanche-t2 .picto {
        width: 37px;
        height: 20px;
        background-size: 37px 20px;
    }

    .live-avalanche-t3 {
        font-size: 14px;
        line-height: 16px;
    }

    .live-bikepark-contenu .ligne {
        font-size: 14px;
        line-height: 16px;
    }

    .live-bikepark-fond {
        padding: 5px 5px 20px 5px;
    }

    .live-bikepark-titre {
        font-size: 20px;
    }

    .live-bikepark-titre .picto {
        width: 33px;
        height: 33px;
        background-size: 33px 33px;
        margin: 0 0 0 5px;
    }

    .live-choix {
        height: 50px;
        float: right;
        padding-right: 15px;
    }

    .live-choix a {
        font-size: 16px;
        line-height: 50px;
        padding: 0 5px 0 5px;
        border-right: 0;
    }

    .live-choix a i {
        font-size: 20px;
        margin-left: 2px;
    }

    .live-contact {
        padding: 0 5px 0 5px;
        height: 50px;
        line-height: 50px;
    }

    .live-contact a.mail {
        margin: 0 5px 0 5px;
    }

    .live-contact a.mail:hover {
        margin: 0 6px 0 6px;
    }

    .live-contact a.telephone {
        margin: 0 5px 0 5px;
    }

    .live-contact a.telephone:hover {
        margin: 0 6px 0 6px;
    }

    .live-contenu {
        padding-left: 0;
    }

    .live-contenu1 {
        padding: 5px;
    }

    .live-contenu1-fond {
        padding: 5px;
        min-height: inherit;
    }

    .live-contenu2 {
        padding: 5px;
    }

    .live-contenu2-fond {
        padding: 5px;
        min-height: inherit;
    }

    .live-contenu3 {
        padding: 5px;
    }

    .live-contenu-fond {
        padding: 5px;
    }

    .live-contenu-zone {
        padding-right: 0;
    }

    .live-enneigement {
        display: none;
    }

    .live-enneigement-bouton a {
        padding: 10px 5px 10px 5px;
    }

    .live-fond {
        display: block;
        height: 50px;
        line-height: 50px;
    }

    .live-luge-t1 {
        font-size: 14px;
    }

    .live-luge-t2 {
        font-size: 12px;
        line-height: 14px;
    }

    .live-meteo {
        display: none;
    }

    .live-meteo-lien {
        position: relative;
        width: 100%;
        text-align: right;
        bottom: 0;
        right: 0;
    }

    .live-meteo-lien a {
        display: inline-block;
        margin-top: 10px;
    }

    .live-meteo-temperatures strong {
        font-size: 14px;
    }

    .live-meteo-temperatures-t1 {
        font-size: 14px;
        line-height: 16px;
    }

    .live-meteo-temperatures-t2 {
        font-size: 14px;
        line-height: 16px;
    }

    .live-meteo-temperatures-t3 {
        font-size: 14px;
        line-height: 16px;
    }

    .live-meteo-titre {
        font-size: 20px;
    }

    .live-neige strong {
        font-size: 14px;
    }

    .live-neige-lien {
        position: relative;
        width: 100%;
        text-align: right;
        bottom: 0;
        right: 0;
    }

    .live-neige-lien a {
        display: inline-block;
        margin-top: 10px;
    }

    .live-neige-t1 {
        font-size: 14px;
        line-height: 16px;
    }

    .live-neige-t2 {
        font-size: 14px;
        line-height: 16px;
    }

    .live-neige-t3 {
        font-size: 14px;
        line-height: 16px;
    }

    .live-neige-titre {
        font-size: 20px;
    }

    .live-neige-titre .picto {
        width: 30px;
        height: 33px;
        background-size: 30px 33px;
        margin: 0 0 0 5px;
    }

    .live-news a {
        margin: 0 5px 0 5px;
    }

    .live-news a:hover {
        margin: 0 6px 0 6px;
    }

    .live-pistes-contenu .ligne {
        font-size: 14px;
        line-height: 16px;
    }

    .live-pistes-fond {
        padding: 5px 5px 20px 5px;
    }

    .live-pistes-titre {
        font-size: 20px;
    }

    .live-pistes-titre .picto {
        width: 34px;
        height: 33px;
        background-size: 34px 33px;
        margin: 0 0 0 5px;
    }

    .live-plan a {
        margin: 0 5px 4px 5px;
    }

    .live-plan a:hover {
        margin: 0 6px 4px 6px;
    }

    .live-remontees {
        display: none;
    }

    .live-remontees-contenu strong {
        font-size: 14px;
    }

    .live-remontees-lien {
        position: relative;
        width: 100%;
        text-align: right;
        bottom: 0;
        right: 0;
    }

    .live-remontees-lien a {
        display: inline-block;
        margin-top: 10px;
    }

    .live-remontees-t1 {
        font-size: 12px;
        line-height: 16px;
    }

    .live-remontees-titre {
        font-size: 20px;
    }

    .live-remontees-titre .picto {
        width: 26px;
        height: 33px;
        background-size: 26px 33px;
        margin: 0 0 0 5px;
    }

    .live-webcams {
        display: none;
    }

    .live-webcams-fond {
        margin-top: 10px;
    }

    .live-webcams-fond a {
        font-size: 14px;
        line-height: normal;
        padding: 10px 5px 10px 5px;
    }

    .live-webcams-fond a .picto, .live-webcams-fond a:hover .picto {
        width: 30px;
        height: 21px;
        background-size: 30px 21px;
    }

    .logo {
        display: none;
    }

    .logo-m {
        display: block;
        float: left;
    }

    .logo-m img {
        width: 125px;
        margin-left: 5px;
    }

    .logo-m-rm {
        display: block;
        float: left;
    }

    .logo-m-rm img {
        height: 40px;
        margin-left: 5px;
        margin-top: 0;
    }

    .milieu {
        padding-top: 0;
    }

    .milieu-droite {
        padding-left: 15px;
        padding-top: 15px;
    }

    .milieu-droite .bloc-carte {
        margin: -1px 0 20px 0;
    }

    .milieu-droite .bloc-carte iframe {
        height: 350px;
    }

    .milieu-droite .bloc-contenu {
        padding: 10px 0 20px 0;
    }

    .milieu-droite .bloc-titre {
        font-size: 16px;
        line-height: 20px;
        padding: 10px 0 10px 0;
    }

    .milieu-droite .bloc-titre a .fa-angle-down {
        margin: -8px 0 0 10px;
    }

    .milieu-droite .bloc-titre a .fa-angle-up {
        margin: -10px 0 0 10px;
    }

    .milieu-droite .bloc-titre-special {
        font-size: 16px;
        line-height: 20px;
        padding: 10px 0 10px 0;
    }

    .milieu-droite .bloc-titre-special a .fa-angle-down {
        margin: -8px 0 0 10px;
    }

    .milieu-droite .bloc-titre-special a .fa-angle-up {
        margin: -10px 0 0 10px;
    }

    .milieu-gauche {
        padding-right: 15px;
    }

    .moteur-bouton input {
        font-size: 16px;
    }

    .moteur-bouton-light input {
        font-size: 16px;
        background: white;
    }

    .milieu-gauche .moteur-formulaire .f-jourski1 #div_depart_cal {
        left: -20px;
        padding: 5px;
    }

    .milieu-gauche .moteur-formulaire #r-jourarrivee #div_depart_cal {
        left: 0px;
        padding: 5px;
        top: -5px;
    }

    .milieu-gauche .moteur-formulaire #r-jourdepart #div_fin_cal {
        left: -20px;
        padding: 5px;
    }

    .milieu-gauche .moteur-zone .bouton a {
        font-size: 12px;
        line-height: 14px;
    }

    .moteur {
        margin-top: 15px;
    }

    .moteur select {
        height: 48px;
        border: 1px solid #b0c9e6;
    }

    #moteur-formulaire1, #moteur-formulaire2, #moteur-formulaire3 {
        width: 100%;
        padding: 0;
    }

    #moteur-formulaire1 #r-jourarrivee .calendrier {
        text-align: right;
        width: 15%;
        height: 48px;
    }

    #moteur-formulaire1 #r-jourarrivee .calendrier img {
        margin: 15px 5px 0 0;
    }

    #moteur-formulaire1 #r-jourarrivee #div_depart_cal {
        margin-left: -15px;
    }

    #moteur-formulaire1 #r-jourarrivee input {
        width: 85%;
        height: 48px;
    }

    #moteur-formulaire1 #r-jourdepart .calendrier {
        text-align: right;
        width: 15%;
        height: 48px;
    }

    #moteur-formulaire1 #r-jourdepart .calendrier img {
        margin: 15px 5px 0 0;
    }

    #moteur-formulaire1 #r-jourdepart #div_fin_cal {
        margin-left: -15px;
    }

    #moteur-formulaire1 #r-jourdepart input {
        width: 85%;
        height: 48px;
    }

    #moteur-formulaire1 .r-bouton input {
        height: 48px;
        line-height: 48px;
    }

    #moteur-formulaire1 .zone1, #moteur-formulaire1 .zone2, #moteur-formulaire1 .zone3, #moteur-formulaire1 .zone4, #moteur-formulaire1 .zone5 {
        display: block;
        width: 100% !important;
        margin: 1px 0 0 0;
    }

    #moteur-formulaire1 .zone2, #moteur-formulaire1 .zone3, #moteur-formulaire1 .zone2, #moteur-formulaire1 .zone4 {
        border: 1px solid #b0c9e6;
    }

    #moteur-formulaire2 .f-bouton input {
        height: 48px;
        line-height: 48px;
    }

    #moteur-formulaire2 .f-jourski1 .calendrier {
        text-align: right;
        width: 15%;
        height: 48px;
    }

    #moteur-formulaire2 .f-jourski1 .calendrier img {
        margin: 15px 5px 0 0;
    }

    #moteur-formulaire2 .f-jourski1 #div_depart_cal {
        margin-left: -15px;
    }

    #moteur-formulaire2 .f-jourski1 input {
        width: 85%;
        height: 48px;
    }

    #moteur-formulaire2 .zone1, #moteur-formulaire2 .zone2, #moteur-formulaire2 .zone3, #moteur-formulaire2 .zone4, #moteur-formulaire2 .zone5 {
        display: block;
        width: 100%;
        margin: 1px 0 0 0;
    }

    #moteur-formulaire2 .zone3 {
        border: 1px solid #b0c9e6;
    }

    #moteur-formulaire3 .bouton a {
        height: auto;
        padding: 15px 5px 15px 5px;
        line-height: 16px;
        overflow: visible;
        border: 1px solid #b0c9e6;
    }

    #moteur-formulaire3 .bouton a:hover {
        border: 1px solid #e2001a;
    }

    #moteur-formulaire3 .zone1, #moteur-formulaire3 .zone2, #moteur-formulaire3 .zone3, #moteur-formulaire3 .zone4, #moteur-formulaire3 .zone5 {
        display: block;
        width: 100%;
        margin: 1px 0 0 0;
    }

    .moteur-m {
        display: none;
        position: relative;
        z-index: 98;
        width: auto;
        top: 0;
        height: 100%;
        left: 0px;
        padding: 0;
    }

    .moteur-m-bouton1 a {
        display: block;
        background-color: #e2001a;
        padding: 10px;
        text-align: center;
        color: #fff;
        font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
        text-transform: uppercase;
        line-height: 18px;
    }

    .moteur-m-bouton1 a:hover {
        background-color: #ff0000;
    }

    .moteur-m-bouton1-zone {
        display: block;
        position: static;
        top: 100px;
        /*        width: 100%!important;*/
        z-index: 9999;
    }

    .moteur-m-bouton2 a {
        display: block;
        background-color: #e2001a;
        border-bottom: 1px solid #fff;
        padding: 10px;
        text-align: center;
        color: #fff;
        font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
        text-transform: uppercase;
        line-height: 18px;
    }

    .moteur-m-bouton2 a:hover {
        background-color: #ff0000;
    }

    .moteur-m-message {
        position: fixed;
        z-index: 99;
        width: 100%;
        height: auto;
        padding: 30px 10px 30px 10px;
        top: 45%;
        background: url(/images/moteur-message.png) repeat;
        color: #fff;
        font-size: 16px;
        text-align: center;
        overflow: visible;
    }

    .moteur-onglets {
        width: 100%;
    }

    .moteur-onglets a {
        display: block;
        color: #fff;
        margin: 1px 0 0 0;
    }

    .moteur-onglets a .libelle {
        display: block;
        background-color: #b0c9e6;
    }

    .moteur-onglets a.on .picto {
        display: none;
    }

    .moteurFixe {
        position: relative;
    }

    .nbresultats {
        font-size: 20px;
        line-height: 24px;
        padding-bottom: 15px;
    }

    .nbresultats-m {
        display: block;
        text-align: center;
        color: #373737;
        font: 20px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
        line-height: 24px;
        text-transform: uppercase;
        padding-bottom: 10px;
        margin: 0;
    }

    .nbresultats-m strong {
        font-family: RobotoCondensedBold, Arial, Helvetica, Sans-serif;
        font-weight: normal;
    }

    .pages, .pages-bas {
        padding: 5px 10px 5px 10px;
        font-size: 24px;
        line-height: 25px;
        text-align: center;
    }

    .pages .off, .pages-bas .off {
        padding: 10px;
    }

    .pages a, .pages-bas a {
        padding: 10px;
    }

    .pages-bas {
        margin-top: 10px;
    }

    .panier-m-entete {
        display: block;
        position: relative;
        width: 1px;
        height: 1px;
    }

    .panier-m-articles {
        position: absolute;
        z-index: 51;
        left: 15px;
        top: 13px;
        width: 28px;
        text-align: center;
    }

    .panier-m-articles a, .panier-m-articles a:hover {
        display: block;
        color: #fff;
        font-size: 12px;
    }

    .panier-m-picto {
        position: absolute;
        z-index: 50;
        left: 15px;
        top: 2px;
    }

    .panier-m-picto a {
        display: block;
        width: 28px;
        height: 28px;
        background: url(/images/panier.png) no-repeat;
        background-size: 28px 56px;
    }

    .pied1-m {
        text-align: center;
        padding-top: 20px;
    }

    .pied1-m a {
        display: block;
        font: 12px OpenSansBold, Arial, Helvetica, Sans-serif;
        text-transform: uppercase;
        line-height: 15px;
        margin: 10px 0 10px 0;
    }

    .pied1-zone {
        display: none;
    }

    .pied1-zone-m {
        display: block;
    }

    .pied2 {
        padding-left: 0;
    }

    .pied2-coordonnees-horaires {
        display: block;
        width: 100%;
        padding: 30px 15px 30px 15px;
    }

    .pied2-coordonnees-horaires .telephone {
        padding: 10px 15px 10px 15px;
        margin: 15px 0 15px 0;
    }

    .pied2-coordonnees-horaires .zone {
        display: block;
        text-align: center;
    }

    .pied2-logo-messenger {
        display: block;
        width: 100%;
        padding: 0;
    }

    .pied2-logo-messenger .pied-logo-messenger1 {
        display: none;
    }

    .pied2-logo-messenger .pied-logo-messenger2 {
        display: block;
        border-bottom: 1px solid #f1646d;
    }

    .pied2-logo-messenger .pied-logo-messenger2 .pied-messenger {
        display: block;
        width: 100%;
        border: 0;
        padding: 20px 15px 20px 15px;
        text-align: center;
    }

    .pied2-logo-messenger .pied-logo-messenger2 .pied-messenger a .picto {
        display: block;
        float: none;
        margin: 0 auto 2px auto;
    }

    .pied2-plan {
        display: block;
        width: 100%;
        padding: 75px 15px 30px 15px;
    }

    .pied2-plan a {
        font-size: 30px;
        line-height: 30px;
    }

    .pied2-plan a .picto {
        margin: 0 auto 15px auto;
    }

    .pied2-plan a strong {
        font-size: 34px;
        line-height: 30px;
    }

    .pied2-social {
        display: none;
    }

    .pied2-social-m {
        display: block;
        border-top: 1px solid #f1646d;
        padding: 15px;
        text-align: center;
    }

    .pied2-social-m a i {
        display: inline-block;
        width: 50px;
        height: 50px;
        background-color: #fff;
        border: 2px solid #fff;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
        color: #e2001a;
        line-height: 46px;
        text-align: center;
        vertical-align: middle;
        margin: 4px 2px 4px 2px;
    }

    .pied2-social-m a i.fa-facebook {
        font-size: 32px;
        font-weight: bold;
    }

    .pied2-social-m a i.fa-instagram {
        font-size: 30px;
    }

    .pied2-social-m a i.fa-twitter {
        font-size: 34px;
    }

    .pied2-social-m a i.fa-youtube-play {
        font-size: 30px;
    }

    .pied2-social-m a:hover i {
        background-color: #e2001a;
        border: 2px solid #fff;
        color: #fff;
    }

    .pied2-tableau {
        display: block;
    }

    .pied3-zone {
        display: none;
    }

    .presentation {
        padding-bottom: 15px;
    }

    .r-horaires-jour input {
        width: 60%;
    }

    .r-horaires-jour-zone #divCalendrier {
        left: 5px;
    }

    .resultat {
        padding: 5px;
    }

    .resultat-bouton a.infos {
        max-width: 80%;
        padding: 10px 15px 10px 15px;
        margin-left: 15px;
    }

    .resultat-droite {
        padding-left: 15px;
    }

    .resultat-entete-produit1 .fournisseur, .resultat-entete-produit1 .fournisseur a {
        font-size: 20px;
        line-height: 24px;
    }

    .resultat-entete-produit1 .produit, .resultat-entete-produit1 .produit a {
        padding-right: 0;
        font-size: 14px;
        line-height: 18px;
    }

    .resultat-entete-produit1 img {
        display: block;
        height: 18px;
        margin: 4px 0 4px 0;
    }

    .resultat-entete-produit2 {
        font-size: 14px;
        line-height: 18px;
    }

    .resultat-produit-libelle {
        text-align: center;
        padding-bottom: 5px;
        padding-right: 0;
    }

    .resultat-produit-prix {
        text-align: center;
        padding-left: 0;
        padding-top: 5px;
    }

    .resultat-produit-remise img {
        height: 31px;
    }

    .resultat-promo-texte {
        font-size: 14px;
        line-height: 16px;
    }

    .retour-liste a {
        font-size: 22px;
        line-height: 26px;
    }

    .rm-contenu {
        text-align: center;
    }

    .rm-contenu-titre {
        padding: 30px 15px 0 15px;
        font-size: 20px;
        line-height: 22px;
        text-align: center;
    }

    .rm-contenu-titre strong {
        line-height: 22px;
    }

    .rm-direct:hover {
        background-color: #fff;
    }

    .rm-direct-contenu {
        padding-left: 10px;
        padding-top: 0;
    }

    .rm-direct-contenu, .rm-direct-contenu a {
        font-size: 10px;
        line-height: 14px;
    }

    .rm-direct-contenu img, .rm-direct-contenu a img {
        display: none;
    }

    .rm-direct-contenu strong, .rm-direct-contenu a strong {
        font-size: 16px;
        line-height: 18px;
    }

    .rm-direct-photo {
        padding-left: 15px;
        padding-right: 0;
    }

    .rm-direct-picto {
        display: none;
    }

    .rm-domaineskiable-zone {
        margin: 30px auto;
    }

    .rm-domaineskiable {
        padding-top: 15px;
    }

    .rm-domaineskiable iframe {
        height: 350px;
    }

    .rm-evenement {
        padding-bottom: 15px;
    }

    .rm-evenements {
        padding-right: 15px;
        overflow: visible;
    }

    .rm-evenements .rm-evenement {
        overflow: visible;
    }

    .rm-evenements .rm-evenement .date {
        height: auto;
        overflow: visible;
    }

    .rm-evenements .rm-evenement .descriptif {
        max-height: inherit;
        overflow: visible;
    }

    .rm-evenements .rm-evenement .libelle {
        max-height: inherit;
        overflow: visible;
    }

    .rm-evenements .rm-evenement .photo {
        max-height: inherit;
        overflow: visible;
    }

    .rm-evenements-calendrier1 {
        padding: 0 15px 0 15px;
    }

    .rm-evenements-calendrier-contenu {
        height: auto;
        padding: 0;
        overflow: visible;
    }

    .rm-evenements-calendrier-fond {
        height: auto;
        padding: 0;
    }

    .rm-evenements-coeur {
        padding-left: 15px;
    }

    .rm-evenements-coeur .rm-coeur {
        overflow: visible;
    }

    .rm-evenements-coeur .rm-coeur .descriptif {
        max-height: inherit;
        overflow: visible;
    }

    .rm-evenements-coeur .rm-coeur .libelle {
        max-height: inherit;
        overflow: visible;
    }

    .rm-evenements-coeur .rm-coeur .photo {
        max-height: inherit;
        overflow: visible;
    }

    .rm-evenements-coeur .rm-coeur .pretitre {
        height: auto;
        overflow: visible;
    }

    .rm-evenements-titre1 {
        padding: 30px 15px 0 15px;
        font-size: 20px;
        line-height: 22px;
        text-align: center;
    }

    .rm-evenements-titre1 strong {
        line-height: 22px;
    }

    .rm-evenements-titre2 {
        display: none;
    }

    .rm-evenements-titre2-m {
        display: block;
        text-align: center;
        padding: 30px 15px 15px 15px;
        color: #373737;
        font: 20px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
        text-transform: uppercase;
        line-height: 22px;
    }

    .rm-evenements-titre2-m strong {
        font-family: OpenSansExtrabold, Arial, Helvetica, Sans-serif;
        font-weight: normal;
        line-height: 22px;
    }

    .rm-evenements-zone {
        margin-top: 15px;
    }

    .rm-formulaire-promotions .liste-tableau {
        display: block;
    }

    .rm-formulaire-promotions .liste-tableau-ligne {
        display: block;
    }

    .rm-formulaire-promotions .liste-tableau-promo1 {
        display: block;
        border: 0;
        padding: 5px 5px 0 5px;
        font-weight: bold;
    }

    .rm-formulaire-promotions .liste-tableau-promo2 {
        display: block;
        border-bottom: 2px solid #fff;
        padding: 0 5px 5px 5px;
    }

    .rm-formulaire-promotions .liste-tableau-titre1 {
        display: none;
    }

    .rm-formulaire-promotions .liste-tableau-titre2 {
        display: none;
    }

    .rm-formulaire-promotions .saisie button {
        width: 100%;
        float: none;
    }

    .rm-formulaire-promotions .saisie input {
        width: 100%;
        margin-right: 0;
        float: none;
    }

    .rm-formulaire-promotions .saisie-attente {
        width: 100%;
        text-align: center;
        right: inherit;
    }

    .rm-formulaire-promotions .saisie-attente img {
        margin: -4px auto 0 auto;
    }

    .rm-live {
        padding-left: 0;
        padding-right: 0;
    }

    .rm-moteur {
        position: relative;
        width: 100%;
        right: inherit;
    }

    #rm-moteur-formulaire {
        display: none;
    }

    .rm-moteur-zone2 {
        margin-top: 0;
        padding: 1px 0 0 0;
    }

    .social-photos {
        padding: 3px 0 0 0;
    }

    .social-photos img {
        height: 60px;
        margin: 0 3px 6px 3px;
    }

    .social-photos-zone {
        text-align: center;
    }

    .social-titre {
        display: block;
        padding: 30px 0 0 0;
        font-size: 20px;
        line-height: 22px;
        text-align: center;
    }

    .social-titre strong {
        display: block;
        line-height: 22px;
    }

    .social-titre-pictos {
        display: block;
        padding: 10px 0 15px 0;
        text-align: center;
    }

    .social-titre-pictos a i {
        margin: 7px;
    }

    #thematiques-poi .bloc-contenu {
        font-size: 16px;
    }

    #thematiques-poi .bloc-contenu ul li a {
        font-size: 16px;
        line-height: 16px;
    }

    #thematiques-poi .bloc-contenu ul li ul li a {
        font-size: 16px;
        line-height: 16px;
    }

    #thematiques-poi .bloc-titre {
        font-size: 16px;
        line-height: 18px;
    }

    .thematiques-poi-titre a {
        font-size: 18px;
        line-height: 22px;
    }

    .top-bar-section .dropdown.ssRubrique2 li {
        width: 100%;
    }

    .top-bar-section .dropdown.ssRubrique3 li {
        width: 100%;
    }

    .top-bar-section .dropdown li {
        width: 100%;
    }

    .top-bar-section .has-dropdown {
        position: static;
        width: inherit;
    }

    .top-bar-section .right li .dropdown.ssRubrique1 {
        width: 100% !important;
        max-width: 100%;
    }

    .top-bar-section .right li .dropdown.ssRubrique2 {
        width: 100% !important;
        max-width: 100%;
    }

    .top-bar-section .right li.langues .dropdown {
        width: 100% !important;
    }

    .top-bar-section li.langues:not(.has-form) a:not(.button) {
        background-color: #fff;
        color: #000;
        padding-right: 15px !important;
        border: 0;
    }

    .top-bar-section li.langues .dropdown li:not(.has-form) a:not(.button) {
        padding: 7px 15px 8px 15px !important;
    }

    .top-bar-section li.panier-entete {
        display: none;
    }

    .top-bar-section li.recherche:not(.has-form) a:not(.button) {
        padding-left: 15px !important;
    }

    .top-bar-section li:not(.has-form) a:not(.button) {
        font-size: 15px;
        line-height: inherit;
        text-align: left;
        height: inherit;
        padding-top: 10px;
        overflow: auto;
        border-right: 0;
    }

    .top-bar-section ul li {
        width: inherit;
    }

}

.btn_1 {
    background-color: #e2001a;
    border: 0;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-family: OpenSansBold, Arial, Helvetica, Sans-serif;
    font-size: 14px;
    margin-bottom: 3px;
    padding: 7px 15px 6px 15px;
    text-align: center;
    text-transform: uppercase;
    vertical-align: middle;
}

.btn_1:hover, a.btn_1:hover {
    color: #fff;
}

.btn_1:focus, a.btn_1:focus {
    color: #fff;
}

.x4 {
    display: block;
}

@media only screen and (min-width: 642px) {
    .x4 {
        display: inline-block;
        width: 48%;
    }
}

@media only screen and (min-width: 1200px) {
    .x4 {
        width: 23%;
    }
}

.facebook-responsive {
    overflow: hidden;
    padding-bottom: 56.25%;
    position: relative;
    height: 0;
}

.facebook-responsive iframe {
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    position: absolute;
}

.infosadresses-ligne.required label {
    font-weight: bold;
}

.portail .rm-directs-zone {
    margin-bottom: 50px;
    margin-top: 0px;
}

.portail .portail-lien-resa-zone {
    margin-top: 50px;
}

.portail .PageVideo-zone {
    margin-top: 50px;
}

/*Gestion formulaire 2017/06/08*/
.contact label {
    display: inline-block;
    margin-right: 12px;
    margin-bottom: 29px;
    width: 70px;
}

.block label {
    min-width: 72px;
    width: 33%;
}

.contact .conditions {
    width: 200px;
    margin-top: 20px;
}

.contact input[type="text"], input[type="password"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="week"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="time"], input[type="url"], textarea, select {
    width: 55%;
}

.bouton-reserver a {
    display: inline-block;
    background-color: #e2001a;
    padding: 15px;
    margin: 10px 0px;
    color: #fff;
    font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
}

.bouton-reserver a:hover {
    background-color: #ff0000;
    text-decoration: none;
}

/*Gestion formulaire*/

/*Video responsive, limitee a 700px de large*/
@media only screen and (min-width: 730px) {
    .flex-video.vid_700max {
        margin: auto auto 1rem auto;
        max-width: 700px;
        padding-bottom: 400px;
    }
}

/*gestion formulaire 13/06/2017*/
.direct-titre {
    margin: 50px 0px 25px 0px;
}

@media only screen and (min-width: 64em) {
    .infosclient-formulaire .large-6:first-child .columns {
        padding: 0 44px 0px 10px;
    }
}

.infosclient-ligne.required .infosclient-titre label {
    min-width: 86px;
}

.captcha .columns {
    margin-top: 17px;
}

.infosclient-ligne .g-recaptcha {
    float: right;
}

#formulaire-estivillette {
    max-width: 973px;
}

.text-captcha {
    font-weight: bold;
    color: red;
}

.infosclient-ligne.required .infosclient-titre label:after, .infosadresses-ligne.required .infosadresses-titre label:after {
    content: "*";
    color: #e2001a;
}

@media only screen and (max-width: 40em) {
    .reveal-modal {
        top: -13 !important;
        width: 105%;
        height: 109% !important;
        overflow: scroll;
        left: -6px;
        position: fixed;
    }
}

/*!gestion formulaire 13/06/2017*/

/*Gestion du mon compte*/
.r-identification1 input[type="password"], .r-identification2 input[type="password"] {
    width: 100% !important;
}

.moncompte-menu-identite {
    text-align: center;
}

.moncompte-menu {
    margin: 0 auto;
}

.moncompte-menu-contenu-texte {
    text-align: center;
    font-style: italic;
}

.moncompte-ldossier {
    width: 97%;
    margin: 16px auto;
}

.moncompte-ldossier.fond1 tr td {
    padding: 9px 3px;
}

.moncompte-menu-contenu h3 {
    text-align: center;
    color: #000;
    margin-top: 20px;
}

table.moncompte-ldossier tr:first-child td {
    color: #fff;
    font-weight: bold;
    font-size: 14px;
}

#detaildossier .r-fond3 {
    background-color: #fff;
    padding: 8px;
    width: 100%;
    display: block;
}

#montab4 .r-fond4 {
    padding: 6px 1px;
}

#montab3 {
    margin-bottom: 17px !important;
}

#email {
    width: 100%;
}

#detaildossier .r-importantgras {
    padding-left: 7px;
    display: block;
}

#detaildossier table tr:nth-of-type(2n) {
    background-color: #fff;
}

#detaildossier #montab {
    margin-left: 14px;
    width: 98%;
}

#detaildossier #montab .r-fond3 .important {
    font-size: 13px;
}

#detaildossier .fa-question-circle {
    color: #494949;
}

@media only screen and (min-width: 1024px) and (max-width: 64em) {
    table.moncompte-ldossier tr:first-child td {
        font-size: 11px;
        padding: 4px;
    }

    .moncompte-ldossier .r-fond4 td {
        font-size: 11px;
    }
}

@media only screen and (max-width: 1024px) {
    .moncompte-ldossier.r-fond4 td {
        font-size: 12px;
    }

    .moncompte-ldossier.fond1 {
        background-color: #fff;
    }

    .moncompte-ldossier tr:first-child {
        display: none;
    }

    .moncompte-ldossier tr {
        display: block;
        margin: 15px auto;
    }

    .moncompte-ldossier td {
        display: block;
        padding: 10px;
        text-align: right;
    }

    .moncompte-ldossier span {
        font-size: 12px;
        min-width: 135px;
        width: 40%;
        background-color: #929292;
        color: white;
        padding: 10px;
        position: absolute;
        left: 17px;
        text-align: left;
        margin-top: -10px;
        font-weight: bold;
    }
}

@media only screen and (max-width: 40em) {
    .moncompte-menu td {
        display: block;
    }

    #detaildossier .r-fond3 {
        width: 100%;
        display: block;
    }
}

/*!Gestion du mon compte*/

/*** OVERRIDE JQUERY UI TABS ***/

.ui-corner-all {
    border: none !important;
}

.ui-widget {
    font-family: inherit !important;
    font-size: inherit !important;
}

.ui-widget-header {
    background: none !important;
}

.ui-widget-header li {
    border: none !important;
    color: black !important;
    text-transform: uppercase;
}

.ui-state-default a {
    font-family: RobotoCondensedLight, Arial, Helvetica, sans-serif !important;
    color: inherit !important;
    font-size: 18px !important;
    font-weight: normal !important;
}

.ui-state-active a {
    font-family: RobotoCondensedBold, Arial, Helvetica, sans-serif !important;
}

.ui-tabs-nav {
    border: none !important;
    margin-bottom: 15px !important;
}

.ui-tabs .ui-tabs-nav li {
    border: none !important;
    background: none !important;
    border-right: 1px solid lightgray !important;
    border-radius: 0 !important;

}

#tabs-horaires .ui-tabs-nav {
    display: flex !important;
    align-items: stretch !important;
    flex-wrap: wrap !important;
}

#tabs-horaires .ui-tabs-nav li {
    display: flex !important;
    align-items: center !important;
}

#tabs-horaires .ui-tabs-nav .ui-tabs-anchor {
    line-height: 20px !important;
}

.ui-tabs .ui-tabs-nav li:last-child {
    border-right-width: 0 !important;
}

.ui-tabs .ui-tabs-nav li a:focus {
    outline: 0 !important;
}

.ui-tabs .ui-tabs-nav li:focus {
    outline: 0 !important;
}

.ui-tabs-panel {
    padding: 0 !important;
}

/****** portail blocs - 19/12/2017 ******/
.portail-bloc-zone [class*="column"] + [class*="column"]:last-child {
    float: left;
}

.portail-bloc-zone [class*="column"] {
    margin-bottom: 20px;
}

.blocliens-zone {
    margin-top: 30px !important;
}

.portail-bloc {
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: cover;
    height: 250px;
    background-color: rgba(180, 207, 234, 0.79);
    background-blend-mode: luminosity;
    -webkit-transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) 0s;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) 0s;
}

.portail-bloc a {
    display: table;
    width: 100%;
    height: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
    transition: 1s;
}

.portail-bloc:hover {
    background-color: rgba(180, 207, 234, 0);
    box-shadow: 0px 0px 14px #00000070;
}

.portail-bloc:hover a .portail-bloc-titre {
    -webkit-transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) 0s;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) 0s;
    transform: scale(1.1);
}

.portail-bloc:hover a .portail-bloc-prix {
    display: block;
}

.portail-bloc-titre {
    display: block;
    font-family: 'RobotoCondensedLight';
    font-size: 46px;
    margin-top: 83px;
    text-align: center;
    color: #ffffff;
    text-shadow: 0 0 11px black;
    text-transform: uppercase;
    line-height: 47px;
}

.portail-bloc-desc {
    color: #1e1b1f;
    display: block;
    font-family: 'RobotoCondensedLight';
    font-size: 20px;
    line-height: 20px;
    margin: 15px 0;
    text-align: center;
}

.portail-bloc-prix {
    bottom: 0px;
    display: block;
    font-family: 'RobotoCondensedLight';
    font-size: 20px;
    line-height: 20px;
    position: absolute;
    text-align: center;
    width: 100%;
    display: none;
    background-color: #ffffff80;
    padding: 6px;
}

@media only screen and (max-width: 1024px) {
    .portail-bloc-titre {
        margin-top: 20px;
        font-size: 32px;
        line-height: 1;
    }

    .portail-bloc-prix {
        display: block;
    }
}

.recap-paiement .liste-produit .produit {
    display: block;
    font-weight: bold;
}

.recap-paiement .liste-produit .produit span {
    color: #738294;
}

.fond-paiement .fond1, .fond-paiement .fond2, .fond-paiement td {
    background-color: #FFF;
}

@media only screen and (max-width: 40em) {
    .garanties-m {
        clear: both;
    }

    .recap-paiement {
        margin-bottom: 20px;
    }
}

/* Live flux */

.live-flux.row {
    padding: 1%;
    max-width: 1300px !important;
    animation: animationFrames ease 1s;
    animation-iteration-count: 1;
    transform-origin: 50% 50%;
    animation-fill-mode: forwards;
    -webkit-animation: animationFrames ease 1s;
    -webkit-animation-iteration-count: 1;
    -webkit-transform-origin: 50% 50%;
    -webkit-animation-fill-mode: forwards;
    -moz-animation: animationFrames ease 1s;
    -moz-animation-iteration-count: 1;
    -moz-transform-origin: 50% 50%;
    -moz-animation-fill-mode: forwards; /*FF 5+*/
    -o-animation: animationFrames ease 1s;
    -o-animation-iteration-count: 1;
    -o-transform-origin: 50% 50%;
    -o-animation-fill-mode: forwards;
    -ms-animation: animationFrames ease 1s;
    -ms-animation-iteration-count: 1;
    -ms-transform-origin: 50% 50%;
    -ms-animation-fill-mode: forwards;
    margin: 0 auto;
}

.live-flux .columns {
    padding: 0;
}

.live-flux h2 {
    color: #212121;
    text-transform: uppercase;
}

.live-flux .langues {
    font-size: 16px;
    text-align: right;
    margin: 10px 0 0;
}

.live-flux .langues a.active {
    color: #212121;
}

.live-flux .langues a {
    margin: 0 3px;
}

.live-flux .langues a:last-child {
    margin-right: 0;
}

.live-flux .groupe-bloc {
    margin-bottom: 40px;
    border-right: 0;
}

.live-flux .groupe-bloc .bloc {
    height: 690px;
}

.live-flux .groupe-bloc .bloc.infos,
.live-flux .groupe-bloc .col-droite {
    height: auto;
}

.live-flux .groupe-bloc2 {
    margin-bottom: 30px;
    border-right: 0;
}

.live-flux .groupe-bloc2 .bloc {
    min-height: 557px;
}

.live-flux .groupe-bloc2 .libelle {
    text-align: center;
}

.live-flux .bloc {
    background-color: #FFFFFF;
    border-right: 5px solid #eeeeee;
    border-top: 10px solid #eeeeee;
    padding: 30px 40px;
    -webkit-box-shadow: inset 0 0 0 1px #dfdfdd;
    -moz-box-shadow: inset 0 0 0 1px #dfdfdd;
    box-shadow: inset 0 0 0 1px #dfdfdd;

}

@keyframes animationFrames {
    0% {
        opacity: 0;
        transform: translate(0px, 10px);
    }
    100% {
        opacity: 1;
        transform: translate(0px, 0px);
    }
}

@-moz-keyframes animationFrames {
    0% {
        opacity: 0;
        -moz-transform: translate(0px, 10px);
    }
    100% {
        opacity: 1;
        -moz-transform: translate(0px, 0px);
    }
}

@-webkit-keyframes animationFrames {
    0% {
        opacity: 0;
        -webkit-transform: translate(0px, 10px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translate(0px, 0px);
    }
}

@-o-keyframes animationFrames {
    0% {
        opacity: 0;
        -o-transform: translate(0px, 10px);
    }
    100% {
        opacity: 1;
        -o-transform: translate(0px, 0px);
    }
}

@-ms-keyframes animationFrames {
    0% {
        opacity: 0;
        -ms-transform: translate(0px, 10px);
    }
    100% {
        opacity: 1;
        -ms-transform: translate(0px, 0px);
    }
}

.live-flux .bloc .line {
    border-bottom: 1px solid #dfdfdd;
    height: 16px;
    width: 100% !important;
    position: relative;
}

.live-flux .bloc .line:first-child {
    top: -64px;
}

.live-flux .bloc .line {
    top: -32px;
}

.live-flux .bloc h3 {
    font-family: OpenSansBold, Arial, Helvetica, sans-serif;
    color: #212121;
    background-color: #ffffff;
    width: auto !important;
    padding-right: 12px;
    position: relative;
    z-index: 9;
    margin-top: 20px;
}

.live-flux .bloc h3:first-child {
    margin-top: 0;
    margin-bottom: 10px;
}

.live-flux .bloc h3 span {
    color: #e2001a;
}

.live-flux .liens-droite {
    background-color: #ffffff;
    position: relative;
    top: -47px;
    padding: 3px 15px;
    -webkit-box-shadow: inset 0 0 0 0 #fff;
    box-shadow: inset 0 0 0 0 #fff;
    -webkit-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out 0s;
}

.live-flux .liens-droite:hover {
    -webkit-box-shadow: inset -300px 0 0 0 #e2001a;
    box-shadow: inset -300px 0 0 0 #e2001a;
    color: #fff;
}

.live-flux .meteo,
.live-flux .neige {
    text-align: center;
    margin-bottom: 30px;
}

.live-flux .meteo p {
    color: #b1b3b5;
    font-size: 16px;
    margin-bottom: 10px;
}

.live-flux .meteo figure {
    margin: 0;
}

.live-flux .meteo figure figcaption {
    margin: 10px 0;
}

.live-flux .meteo figure figcaption::first-letter {
    text-transform: uppercase;
}

.live-flux .maj b {
    font-size: 15px;
}

.live-flux .maj i {
    font-size: 13px;
}

.live-flux .domaine span {
    display: block;
    font-size: 18px;
    line-height: 19px;
    font-weight: bold;
}

.live-flux .domaine {
    font-size: 17px;
    text-align: center;
    height: 60px;
}

.live-flux .libelle {
    font-size: 16px;
    color: #b1b3b5;
    height: 60px;
    padding: 10px 0;
}

.live-flux .donnees {
    font-size: 23px;
    font-weight: bold;
    text-align: center;
}

.live-flux .donnees span {
    font-size: 18px;
    font-weight: bold;
}

.live-flux .donnees span {
    font-size: 18px;
    font-weight: bold;
}

.live-flux .bloc.infos {
    padding: 20px 40px;
    border-right: 0;
    border-left: 5px solid #eeeeee;
}

.live-flux .bloc.col-droite {
    border-right: 0;
    border-left: 5px solid #eeeeee;
}

.live-flux .bloc.col-droite div:nth-of-type(2) > div {
    float: left;
}

.live-flux .infos img {
    max-width: 226px;
    margin-bottom: 10px;
}

.live-flux .liens a {
    margin: 3px 0;
}

.live-flux .liens a:first-child {
    margin-top: 0;
}

.live-flux .liens a span,
.live-flux a .boutonformulaire {
    font-size: 14px;
    font-weight: normal;
    padding: 5px 10px;
    text-align: center;
}

.live-flux a .boutonformulaire.btn2 {
    position: relative;
    top: 8px;
}

.live-flux .liens a span.liens-2 {
    background-color: #afc9e6;
}

.live-flux .liens a:hover span.liens-2 {
    background-color: #90a4bb;
}

.live-flux .avalanche img {
    max-width: 102px;
}

.live-flux .avalanche .indice span {
    color: #fb0200;
    font-size: 28px;
    line-height: 29px;
}

.live-flux .avalanche .indice {
    font-size: 18px;
    display: inline-block;
    margin-right: 40px;
}

.live-flux .avalanche .nom-indice {
    display: inline-block;
    font-size: 24px;
    line-height: 26px;
    font-weight: bold;
}

.live-flux .avalanche .nom-indice::first-letter {
    text-transform: uppercase;
}

.live-flux .avalanche p {
    color: #b1b3b5;
    font-size: 16px;
    line-height: 17px;
    margin-top: 10px;
}

.live-flux .accordion {
    transform: translateZ(0);
}

.live-flux .accordion > .accordion-toggle {
    position: absolute;
    opacity: 0;
    display: none;
}

.live-flux .accordion > label {
    position: relative;
    display: block;
    height: 50px;
    line-height: 50px;
    font-size: 18px;
    font-weight: 700;
    background: #fff;
    cursor: pointer;
    margin: 0 !important;
    /*	background: url("/css/../images/chevron-up.png") no-repeat right;*/
}

.live-flux .accordion > label:after {
    content: "\f107";
    position: absolute;
    top: 1px;
    right: 2px;
    font-family: 'FontAwesome';
    transform: rotate(0deg);
    transition: .3s transform;
    font-size: 23px;
    /*	background-color: #fff;*/
}

.live-flux .accordion > section {
    height: 0;
    transition: .3s all;
    overflow: hidden;
}

.live-flux .accordion > section div {
    height: auto;
}

.live-flux .accordion > section div:last-child {
    float: left;
}

.live-flux .accordion > .accordion-toggle:checked ~ label:after {
    transform: rotate(180deg) !important;
}

.live-flux .accordion > .accordion-toggle:checked ~ section {
    height: auto;
    animation: animationFrames ease 1s;
    animation-iteration-count: 1;
    transform-origin: 50% 50%;
    animation-fill-mode: forwards;
    -webkit-animation: animationFrames ease 1s;
    -webkit-animation-iteration-count: 1;
    -webkit-transform-origin: 50% 50%;
    -webkit-animation-fill-mode: forwards;
    -moz-animation: animationFrames ease 1s;
    -moz-animation-iteration-count: 1;
    -moz-transform-origin: 50% 50%;
    -moz-animation-fill-mode: forwards;
    -o-animation: animationFrames ease 1s;
    -o-animation-iteration-count: 1;
    -o-transform-origin: 50% 50%;
    -o-animation-fill-mode: forwards;
    -ms-animation: animationFrames ease 1s;
    -ms-animation-iteration-count: 1;
    -ms-transform-origin: 50% 50%;
    -ms-animation-fill-mode: forwards;
}

.live-flux .infos-ligne p {
    font-weight: bold;
    font-style: italic;
}

.live-flux .infos-ligne p.fermee {
    color: #e22923;
}

.live-flux .infos-ligne p.ouverte {
    color: #01803b;
}

.live-flux .infos-ligne p.en-cours {
    color: #f19c37;
    font-size: 11px;
}

.live-flux .infos-ligne figure {
    margin: 0;
}

.live-flux .infos-ligne figure img {
    max-width: 30px;
    left: 15px;
}

.live-flux .infos-ligne .donnees {
    font-size: 20px;
}

.live-flux .infos-ligne .donnees span {
    font-size: 13px;
}

.live-flux a.end {
    float: right !important;
    width: auto !important;
}

@media only screen and (max-width: 64em) {

    .live-flux.row {
        padding: 0;
    }

    .live-flux h2.columns {
        padding-left: 40px;
        margin: 20px 0 10px;
    }

    .live-flux .bloc {
        border: none;
        box-shadow: none;
        min-height: auto;
    }

    .live-flux .groupe-bloc2 .bloc {
        min-height: auto;
    }

    .live-flux .groupe-bloc {
        margin-bottom: 10px;
    }

    .live-flux .groupe-bloc .bloc {
        height: auto;
    }

    .live-flux .bloc.col-droite {
        border-left: 0px;
    }

    .live-flux .langues {
        padding: 0 10px 10px 10px;
    }

    .live-flux a .boutonformulaire.btn2 {
        top: 24px;
        margin: 0 0 0 15px;
    }
}

@media only screen and (max-width: 40em) {

    .live-flux {
        padding: 0px;
    }

    .live-flux h2.columns {
        padding-left: 20px;
        font-size: 28px;
    }

    .live-flux .bloc {
        border: none;
        box-shadow: none;
        padding: 20px;
    }

    .live-flux .meteo p {
        font-size: 20px;
    }

    .live-flux .donnees {
        font-size: 21px;
        padding-bottom: 15px;
    }

    .live-flux .domaine {
        height: auto;
    }

    .live-flux .liens a {
        display: block;
    }

    .live-flux .liens a span {
        width: 100%;
        display: block;
    }

    .live-flux .libelle {
        margin-top: 12px;
        height: auto;
    }

    .live-flux .liens-droite {
        top: -16px;
    }

    .live-flux a.end {
        float: left !important;
        padding-left: 0;
        width: 100% !important;
    }

    .live-flux .avalanche img {
        padding-right: 10px;
    }

    .live-flux .groupe-bloc2 {
        margin-top: 30px;
    }

    .live-flux .bloc h3 {
        font-size: 20px;
        line-height: 21px;
    }

    .live-flux .domaine span {
        font-size: 16px;
        line-height: 18px;
    }

    .live-flux .maj {
        margin-bottom: 10px;
    }

    .live-flux .maj img,
    .live-flux .maj p {
        text-align: center;
        display: block;
        margin: 0 auto;
    }

    .live-flux .liens-droite:hover {
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #e2001a;
    }

}

/*/ Live flux */

.fideliteCard {
    margin-top: 20px;
    clear: both;
    color: white;
    border-radius: 5px;
    padding: 12px;
    display: inline-block;
    background: #e2001a;
    transition-duration: 0.2s;
}

.fideliteCard:hover {
    transform: scale(1.02);
}

.fideliteCard h3 span {
    color: #ffffff;
    font-family: OpenSans, Arial, Helvetica, Sans-serif;
}

.fideliteCard h3 {
    text-transform: uppercase;
    text-align: center;
}

.fideliteCard p {
    margin-bottom: .5rem;
}

.fideliteCard p:nth-of-type(1),
.fideliteCard p:nth-of-type(2) {
    font-size: 15px;
    line-height: 1.4;
}

.fideliteCard p:nth-of-type(3) {
    font-style: italic;
    font-size: 12px;
    float: left;
    padding-right: 10px;
}

.fideliteCard p:nth-of-type(1):before,
.fideliteCard p:nth-of-type(2):before {
    content: "\25CF";
    padding-right: 5px;
}

.fideliteCard a {
    color: #fff;
    float: right;
    border: 1px solid #fff;
    padding: 5px 10px;
    border-radius: 3px;
    transition-duration: 0.2s;
}

.fideliteCard a:hover {
    color: #e2001a;
    border: 1px solid #fff;
    background: white;
}

.descpass {
    color: #e2001a;
}

a.reservation.pass {
    font: 9px OpenSansLight, DinBold, Arial, Helvetica, Sans-serif;
    padding: 2px 5px;
    margin-top: 4px;
    position: absolute;
    left: 5px;
/ / bottom: 5 px;
    text-align: center;
    display: inline-block;
    background-color: #e2001a;
    color: #fff;
    text-transform: uppercase;
    width: auto !important;
    height: auto !important;
}

.listepoi-event a.reservation.pass {
    bottom: 5px;
}

a.reservation.pass:hover {
    background-color: #ff0000;
}

a.reservation.pass.noabs {
    position: relative;
    display: inline-block;
    margin-top: 0px;
}

a.butt + .f-dropdown {
    background: transparent;
    border: none;
    margin-top: 14px;
    text-align: left;
}

a.butt + .f-dropdown:before {
    top: -16px;
}

a.butt + .f-dropdown:after {
    top: -18px;
}

a.butt + .f-dropdown li {
    margin-top: 0 !important;
}

a.butt + .f-dropdown li:hover,
a.butt + .f-dropdown li:focus {
    background: transparent;
}

.listepoi-event .grille .image,
.listepoi-event .liste .image {
    height: auto !important;
    overflow: initial !important;
    text-align: left !important;
}

.listepoi-event .grille .block_click .image {
    height: 167px !important;
}

.listepoi-event .liste a.reservation.pass {
    top: 26px;
    bottom: auto;
}

.listepoi-event .liste a.reservation.pass.noabs {
    top: 0;
}

.evenement a.reservation.pass,
.news a.reservation.pass {
    position: absolute;
    top: 10px;
    bottom: auto;
    left: 20px;
    right: auto;
    width: auto;
    float: none;
}

.evenement a.reservation.pass.noabs,
.news a.reservation.pass.noabs {
    position: relative !important;
    margin-top: 0;
    top: 0;
}

/* *********** Steps VIP PASS */

.step-vip-pass {
    max-width: 1200px;
    padding: 0 6%;
}

.step-vip-pass .step {
    padding-left: 21%;
}

.step .number {
    font: 40px 'RobotoCondensedBold', Arial, Helvetica, Sans-serif;
    height: 70px;
    width: 70px;
    border: 5px solid #E30613;
    text-align: center;
    border-radius: 50px;
    padding-top: 2px;
    margin: 4% 0;
    background: white;
    /* left: 27%; */
}

.step p {
    font-size: 20px;
    line-height: 1.4;
    background: #EBEBEB;
    padding: 7px 15px;
    width: auto !important;
    margin: 4% 5%;
    text-align: left;
    float: left !important;
}

.step-vip-pass .step:nth-of-type(1) p,
.step-vip-pass .step:nth-of-type(3) p {
    float: right;
}

.step-vip-pass .step:nth-of-type(4) {
    padding-bottom: 3%;
}

.line1 {
    position: absolute;
    top: -129%;
    left: 308%;
    width: 3px;
    height: 620%;
    background-color: #e30613;
    border-radius: 4px;
    transform: rotate(0deg);
    z-index: -9;
    top: 28%;
    left: 29px;
    width: 3px;
    height: 250%;
}

.line2 {
    position: absolute;
    top: -95%;
    left: -174%;
    width: 3px;
    height: 575%;
    background-color: #e30613;
    border-radius: 4px;
    transform: rotate(0deg);
    z-index: -9;
    top: 28%;
    left: 29px;
    width: 3px;
    height: 300%;
}

@media only screen and (max-width: 1125px) {

    .step-vip-pass {
        padding: 0;
    }

    .step-vip-pass .step {
        padding-left: 28%;
    }

    .step .number {
        font: 35px 'RobotoCondensedBold', Arial, Helvetica, Sans-serif;
        height: 65px;
        width: 65px;
        margin: 10px 0;
    }

    .step-vip-pass .step p {
        font-size: 14px;
        margin: 10px 5%;
    }

    .line1 {
        height: 100px;
        left: 26px;
    }

    .line2 {
        height: 150px;
        left: 26px;
    }

    .step-vip-pass .step:nth-of-type(1) p,
    .step-vip-pass .step:nth-of-type(3) p {
        float: right;
    }
}

@media only screen and (max-width: 642px) {
    .line1 {
        position: absolute;
        top: -6%;
        left: 298%;
        width: 3px;
        height: 629%;
    }
}

@media only screen and (max-width: 641px) {
    .step .number {
        font: 29px 'RobotoCondensedBold', Arial, Helvetica, Sans-serif;
        height: 50px;
        width: 50px;
        margin: 0.5% 0;
        border: 3px solid #E30613;
    }

    .step p {
        width: 77% !important;
        margin: 0.5% 0 !important;
        text-align: left !important;
        float: left !important;
    }

    .step-vip-pass .step {
        margin: 15px 0;
        padding: 0;
    }

    .step:nth-of-type(1) .number,
    .step:nth-of-type(3) .number {
        margin-left: 0% !important;
    }

    .step:nth-of-type(2) .number {
        margin-left: 0% !important;
    }

    .step-vip-pass .step:nth-of-type(1) p,
    .step-vip-pass .step:nth-of-type(2) p,
    .step-vip-pass .step:nth-of-type(3) p,
    .step-vip-pass .step:nth-of-type(4) p {
        margin-left: 4% !important;
        margin-right: 0% !important;
    }

    .line1,
    .line2 {
        top: 16%;
        left: 21px;
        width: 3px;
        height: 240%;
        transform: rotate(0deg);
    }

    .step-vip-pass .step:nth-of-type(2),
    .step-vip-pass .step:nth-of-type(3),
    .step-vip-pass .step:nth-of-type(4) {
        margin-top: auto;
    }

    .step-vip-pass .boutonformulaire {
        font-size: 15px;
    }

}

@media only screen and (max-width: 352px) {
    .step:nth-of-type(1) .number,
    .step:nth-of-type(4) .number {
        margin: 3.5% 0;
    }
}

/*Avantages VIP PASS*/

.avantages-vip-pass .small-centered {
    max-width: 1200px;
    margin-top: 35px;
}

.avantages-vip-pass .theme img {
    max-width: 290px;
    width: 100%;
}

.avantages-vip-pass .theme span {
    background: #E2001A;
    display: block;
    color: white;
    font: 20px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    text-transform: uppercase;
    line-height: 1.7;
    margin: 0px 0px 12px;
    max-width: 290px;
}

.avantages-vip-pass .activites .small-3 {
    padding: 0 5px;
    color: #E2001A;
    text-align: right;
    max-height: 45px;

}

.avantages-vip-pass .activites .small-6 {
    padding: 3px 7px;
    text-align: left;
}

.avantages-vip-pass .activites .small-12 {
    margin: 5px 0;
}

.avantages-vip-pass center > div {
    border-right: 1px solid #D5D9DF;
    padding: 25px 1.2%;
    margin: 30px 0;
}

.avantages-vip-pass center > div:last-child {
    border-right: none;
}

.ui-datepicker {
    z-index: 2 !important;
}

#formAccueil .buttonPersonnes {
    background-color: inherit;
    padding: 5px;
}

@media screen and (min-width: 40.01em) and (max-width: 840px) {
    .avantages-vip-pass center > div {
        width: 100%;
        border: none;
        border-bottom: 1px solid #D5D9DF;
        padding: 10px 0;
        margin: 5px 0;
    }

    .avantages-vip-pass center > div:last-child {
        border: none;
    }

    .avantages-vip-pass .theme {
        width: 30%;
        padding: 0;
    }

    .avantages-vip-pass .activites {
        width: 70%;
        padding: 0;
    }

    .avantages-vip-pass .activites .small-12 {
        margin: 10px 0px;
    }

}

@media screen and (max-width: 40em) {
    .avantages-vip-pass center > div {
        border-bottom: 1px solid #D5D9DF;
        padding: 15px 0;
        margin: 0;
        border-right: 0;
    }

    .avantages-vip-pass center > div:last-child {
        border: none;
    }

    .avantages-vip-pass .theme,
    .avantages-vip-pass .activites,
    .avantages-vip-pass .activites .small-12,
    .avantages-vip-pass .activites .small-3 {
        padding: 0;
    }

    .avantages-vip-pass .theme img,
    .avantages-vip-pass .theme span {
        width: 100%;
        max-width: 100%;
    }

    .avantages-vip-pass .activites .small-3 img {
        float: left;
    }

}

/*Avantages VIP PASS*/

/** Avantages Pass PORTAIL, mise en avant de contenu */
.pushContent {
    margin: 30px auto;
    max-width: 1200px;
}

.pushContent .media {
    overflow: hidden;
}

.pushContent h2 {
    text-transform: uppercase;
    text-align: center;
}

.cntColTitre {
    position: relative;
}

.cntColTitre .titre {
    background: #e2001a;
    text-transform: uppercase;
    text-align: center;
}

.cntColTitre .titre h3 {
    font: 20px RobotoCondensedLight, Arial, Helvetica, Sans-serif;
    color: #fff;
    margin: 0;
    padding: 2px 5px 5px;
}

.cntCol {
    width: 33%;
    padding: 0 60px;
    border-left: 1px solid transparent;
    border-right: 1px solid transparent;
}

.cntCol:nth-child(2) {
    border-left: 1px solid #eee;
    border-right: 1px solid #eee;
}

.media img {
    transition: all .5s ease;
    transform: scale(1.015);
}

.cntColTitre:hover .media img {
    transform: scale(1.08);
}

.poi:hover .media img {
    transform: scale(1.08);
}

.cntr {
    margin-top: 40px;
    display: flex;
}

.cntr .poi {
    margin: 10px 0;
    transition: all .5s ease;
}

.cntr .poi:hover {
    background: #eee;
}

.cntr .poi a {
    display: flex;
    font-weight: normal;
    color: #494949;
}

.cntr .poi .media {
    width: 25%;
}

.cntr .poi .titrePoi {
    font-weight: bold;
    width: 60%;
    padding: 0 10px;
}

.cntr .poi .promo {
    color: #e2001a;
    padding-right: 5px;
    text-align: right;
}

@media screen and (max-width: 1200px) {
    .cntCol {
        padding: 0 40px;
    }
}

@media screen and (max-width: 1024px) {
    .cntCol {
        padding: 0 30px;
    }
}

@media screen and (max-width: 840px) {

    .cntr {
        display: block;
    }

    .cntr .poi:first-child {
        margin-top: 0;
    }

    .cntr .poi:last-child {
        margin-bottom: 0;
    }

    .cntr .poi .media {
        max-width: 94px;
    }

    .cntCol {
        display: flex;
        width: 100%;
        padding: 10px;
    }

    .cntCol:nth-child(2) {
        border-left: none;
        border-right: none;
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
    }

    .cntColTitre {
        width: 30%;
        margin-right: 40px;
    }

    .cntColPush {
        width: 70%;
    }
}

@media screen and (max-width: 430px) {

    .cntCol {
        display: block;
    }

    .cntColTitre {
        width: 100%;
        margin-bottom: 10px;
    }

    .cntColPush {
        width: 100%;
    }
}

#carte4vallees {
    display: none;
}


@font-face {
	font-family: 'Gotham-Bold';
	src: url('/polices/Gotham-Bold.eot');
	src: url('/polices/Gotham-Bold.eot?#iefix') format('embedded-opentype'),
	url('/polices/Gotham-Bold.woff2') format('woff2'),
	url('/polices/Gotham-Bold.woff') format('woff'),
	url('/polices/Gotham-Bold.ttf') format('truetype'),
	url('/polices/Gotham-Bold.svg#Gotham-Bold') format('svg');
	font-weight: normal;
	font-style: normal;
}
@font-face {
	font-family: 'Gotham-BookItalic';
	src: url('/polices/Gotham-BookItalic.eot');
	src: url('/polices/Gotham-BookItalic.eot?#iefix') format('embedded-opentype'),
	url('/polices/Gotham-BookItalic.woff2') format('woff2'),
	url('/polices/Gotham-BookItalic.woff') format('woff'),
	url('/polices/Gotham-BookItalic.ttf') format('truetype'),
	url('/polices/Gotham-BookItalic.svg#Gotham-BookItalic') format('svg');
	font-weight: normal;
	font-style: normal;
}
@font-face {
	font-family: 'Gotham-Light';
	src: url('/polices/Gotham-Light.eot');
	src: url('/polices/Gotham-Light.eot?#iefix') format('embedded-opentype'),
		url('/polices/Gotham-Light.woff2') format('woff2'),
		url('/polices/Gotham-Light.woff') format('woff'),
		url('/polices/Gotham-Light.ttf') format('truetype'),
		url('/polices/Gotham-Light.svg#Gotham-Light') format('svg');
	font-weight: normal;
	font-style: normal;
}

.boutonformulaire { font-family:Gotham-Light, Arial, Helvetica, Sans-serif;background-color:#23376a;}
.boutonformulaire:hover { background-color:#f8b92c;}
.bouton1 {font-family:Gotham-Light, Arial, Helvetica, Sans-serif;background-color:#23376a;}
.bouton1:hover { background-color:#f8b92c;}
.formulaire { font:14px Gotham-Light, Arial, Helvetica, Sans-serif !important;}
.legende { color:#8d8d8d; }
.legendegras { color:#8d8d8d;}
.soustitre {font:25px Gotham-Bold, Arial, Helvetica, Sans-serif;}
.titre { color:black; font:40px Gotham-Bold, Arial, Helvetica, Sans-serif;}
a { color:#23376a;}
a:hover { color:#f8b92c;}
body {font:15px Gotham-Light, Arial, Helvetica, Sans-serif;}
h1 { color:black; font:30px Gotham-Bold, Arial, Helvetica, Sans-serif; text-transform: uppercase; }
h2 { color:black; font:25px Gotham-Bold, Arial, Helvetica, Sans-serif; text-transform: uppercase;}
h3 { color:black; font:20px Gotham-Bold, Arial, Helvetica, Sans-serif; text-transform: uppercase; }
h4 { color:black; font:15px Gotham-Light, Arial, Helvetica, Sans-serif; text-transform: uppercase;}
input[type="text"], input[type="password"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="week"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="time"], input[type="url"], textarea {font-size:14px !important; border:1px solid #bdbdbd; }
p { font-size:14px; }
select {border:1px solid #bdbdbd;}



/* Début des styles pour la page d'acceuil */
.diaporama-accueil { width:100%; height:100%; overflow:hidden; }
.diaporama-accueil .diaporama .diapo img {width: 100%;height: auto;}
.diaporama-accueil .diaporama {height:auto;}
.diaporama-accueil .diaporama .diapo_txt_zone {top:92px;}
.diaporama-accueil .diaporama .diapo_txt_1 span { max-height:142px;height: auto; font:63px Gotham-Bold, DinBold, Arial, Helvetica, Sans-serif; text-transform:inherit;line-height: 67px;overflow:hidden; }
.diaporama-accueil .diaporama .diapo_txt_2 span { max-height:141px; font:65px Gotham-BookItalic, DinBold, Arial, Helvetica, Sans-serif; text-transform:inherit; line-height:66px;overflow:hidden;padding: 0 10px; }
.lien-site { margin-top: 320px; }
.lien-site.row { max-width: 1000px !important;}
.lien1 {text-align: right;padding-right: 25px;}
.lien2 {text-align: left;padding-left: 25px;}
.logo-televerbier,.logo-verbier4vallees { width:236px;display:inline-block;background-color: rgba(255,255,255,0.8);border: 9px solid #dadada;padding: 29px;min-height: 251px;}
.logo-televerbier a { text-align: center;/*display: inline-block;*/ }
.logo-televerbier img {margin-bottom: 24px;}
.logo-verbier4vallees img {margin-top: 8px;margin-bottom: 17px;}
.lien-site span { color: black;text-transform: uppercase;font:14px Gotham-Bold, DinBold, Arial, Helvetica, Sans-serif;display: block;text-align: center; }
.copyright-home { position:absolute;bottom:31px;left:10%;}
.copyright-home span { font:11px Gotham-Bold, DinBold, Arial, Helvetica, Sans-serif;text-transform:uppercase;color:black;}
.copyright-home a { color:black; }
/* Fin des styles pour la page d'acceuil */

/* Début des styles du header */
.row {max-width:1200px!important;}
.logo-menu-zone {height:108px;}
.logo {width: 200px;padding:7px 0px;margin: 0px 22px;}

.top-bar-section li:not(.has-form) a:not(.button).active{font-family: Gotham-Bold, Arial, Helvetica, Sans-serif;color: #23376a;}
.top-bar-section li:not(.has-form) a:hover:not(.button),.top-bar-section ul li:hover:not(.has-form) > a {color: #f8b92c!important;}
.top-bar-section .has-dropdown { width:auto;}
.top-bar-section li:not(.has-form) a:not(.button) {padding: 10px 20px;font-family: Gotham-Light, Arial, Helvetica, Sans-serif;}
.top-bar-section .has-dropdown > a {padding-right: 19px !important;}
.top-bar-section li.langues:not(.has-form) a:not(.button) img { width: auto;}
.top-bar-section li.recherche:not(.has-form) a:not(.button) i {font-size: 19px;}
.top-bar-section li.recherche:not(.has-form) a:not(.button) {color: #111111;}
.top-bar-section li.recherche:not(.has-form) a:hover:not(.button) i {color: #f8b92c;}
.menu .contain-to-grid {padding: 50px 0px 0px 0px;}
.top-bar-section li:not(.has-form) a:hover:not(.button) {color: #23376a;}
.top-bar-section .right li .dropdown.ssRubrique2 {right: 0;width: 100% !important;max-width: 100%;}
.top-bar-section .dropdown li {width: 20%;}
.top-bar-section .dropdown > li { margin-bottom:30px;}
.top-bar-section ul li.langues .dropdown li { margin-bottom: 0; }
.top-bar-section .dropdown li:nth-child(6), .top-bar-section .dropdown li:nth-child(10), .top-bar-section .dropdown li:nth-child(14), .top-bar-section .dropdown li:nth-child(18), .top-bar-section .dropdown li:nth-child(22), .top-bar-section .dropdown li:nth-child(26) {clear:none;}/*surcharge du style hérité de la css commune aux MB */
.top-bar-section .dropdown > li:nth-of-type(5n+2) {clear: both;}
.top-bar-section .dropdown li:not(.has-form) a:not(.button) {background-color:transparent;font-size:14px;color: #23376a;font-family: Gotham-Bold, Arial, Helvetica, Sans-serif;height: 60px;line-height: 17px !important;}
.top-bar-section .dropdown li ul li:not(.has-form) a:not(.button) {font-family: Gotham-Light, Arial, Helvetica, Sans-serif;}
.top-bar-section .dropdown li ul li:not(.has-form) a:not(.button) {height: auto;background-color:transparent;}
.top-bar-section .dropdown li:not(.has-form) a:hover:not(.button),.top-bar-section .dropdown li ul li:not(.has-form) a:hover:not(.button) {color: #23376a;background-color:transparent;}
.top-bar-section .dropdown {background-color: rgba(255, 255, 255, 0.9)!important;}
/* Fin des styles du header */

/* Début des styles pour la page contenu */
#topPage .diaporama {height:385px;}
#topPage .diaporama .diapo img {width: 100%;height: auto;}
span.legende-photo {display:block;padding:10px 0px;font-family: Gotham-Light;}
.contenu-gris {background-color: #f2f2f2;margin-top: 20px;} 
.contenu-wysiwyg-gris .contenu-wysiwyg:first-child {margin-top:50px;padding-right: 30px;font-size:12px;}
.contenu-wysiwyg-gris .contenu-wysiwyg:first-child p {font-size:12px;}
.contenu-wysiwyg-gris .contenu-wysiwyg:first-child img {padding-bottom:5px;}
.contenu-wysiwyg-gris .contenu-wysiwyg:nth-child(2) {margin-top:50px;}
.contenu-wysiwyg-zone { margin-top: 40px;}
.contenu-wysiwyg {padding-top: 12px;padding-bottom: 40px;font-family: Gotham-Light;font-size:15px;}
.flechebas { display:inline-block; background:url(/images-mb-televerbier/fleche-top-fond.png) repeat; }
.flechetop { display:inline-block; background:url(/images-mb-televerbier/fleche-top-fond.png) repeat; }
/* Fin des styles pour la page contenu */

/* Début des styles pour la page sous-menu */
.contenu-wysiwyg-ss-rubrique.row {max-width: 1035px !important;margin-top: 40px;}
.contenu-wysiwyg:first-child {padding-right:80px;}
.side-nav {margin: 140px auto;}
.side-nav li {padding: 12px 9px;border: 4px solid #858585;margin: 0px 0px -4px 0px;height: auto;}
.side-nav li.active > a:first-child:not(.button) {color: #666666}
.side-nav li.active a:hover:not(.button) {font-weight:bold;}
.side-nav li a:not(.button) {text-transform: uppercase;color: #666666;font-family: Gotham-Bold,Helvetica,Arial,sans-serif;font-weight:normal;display: inline-block;line-height: 17px;width: 159px;vertical-align: middle;}
.side-nav li a:hover:not(.button), .side-nav li a:focus:not(.button) {color: #666666;font-weight:bold;}
.fa-fw {text-align:left;vertical-align:middle;color: #b3b3b3;}
.top-bar-section .right li.langues .dropdown { right:45px;}
.top-bar-section li.langues .dropdown li:not(.has-form) a:not(.button) {background-color:transparent;}  
/* Début des styles pour la page sous-menu */


/* Début des styles du footer */
.pied2-fond {background-color: #23376a;} 
.pied2-social a:hover i {background-color: #23376a;}
.pied2-logo-messenger .pied-logo-messenger2 .pied-messenger a {font: 14px Gotham-Bold, Arial, Helvetica, Sans-serif;font-weight: normal;text-transform: inherit;}
.pied2-logo-messenger,.pied2-social {border-right: 1px solid white;}
.pied2-coordonnees-horaires strong {font-family: Gotham-Bold, Arial, Helvetica, Sans-serif;}
.pied2-coordonnees-horaires {font-family: Gotham-Light, Arial, Helvetica, Sans-serif;}
.pied2-logo-messenger .pied-logo-messenger2 .pied-messenger {border-top: 1px solid white;}
.pied2-coordonnees-horaires .telephone,.pied2-coordonnees-horaires .telephone a, .pied2-coordonnees-horaires .telephone a:hover,.pied2-social a i,.b2f a,.b2f a:hover {color: #23376a;}
.pied2-plan {background: url(/images-mb-televerbier/pied-plan-station.jpg) no-repeat center;}
.pied2-plan a .picto { display:block; width:34px; height:35px; background:url(/images-mb-televerbier/plus.png) no-repeat; background-size:34px 70px; margin:0 auto 20px auto; }
.pied2-plan a:hover .picto { background:url(/images-mb-televerbier/plus.png) no-repeat scroll 0 -35px; background-size:34px 70px; } 
.pied2-plan a strong {font: 30px Gotham-Bold, Arial, Helvetica, Sans-serif;}
.b2f {text-align: left;}
.copyright span {font:11px Gotham-Bold, DinBold, Arial, Helvetica, Sans-serif;text-transform:uppercase;color:black;}
.lienACacherFooter {color: #23376a!important;}
/* Début des styles du footer */


/* Début des styles grand format */
@media only screen and (min-width:95em) {
.logo {position: inherit;}
#topPage .diaporama .diapo {position: relative;width: 100%;height: auto;left: 0;margin-left: 0;top: 0;}
#topPage .diaporama .diaporama-zone {position: relative;width: 100%;height: auto;}}

@media only screen and (min-width:1521px) { 
.lien-site.row {position: absolute;top: 0;left: 16%;right: 16%;}
.copyright-home {left: 18%;}}
/* Fin des styles grand format */

/* Début des styles entre tablette et grand format */
@media only screen and (min-width: 1025px) and (max-width:1520px) {
.diaporama-accueil .diaporama { height:1024px;}
.diaporama-accueil .diaporama .diapo { width:1520px; height:1024px; margin-left:-760px; }
.diaporama-accueil .diaporama .diapo img {width:100%; height:auto; }
.diaporama-accueil .diaporama .diaporama-zone { height:1024px; }

}
/* Fin des styles entre tablette et grand format */

/* Début des styles tablette */
@media only screen and (min-width: 40.063em) and (max-width: 64em) {
#topPage .diaporama {height: 290px;}
.diaporama-accueil .diaporama { height:1024px; }
.diaporama-accueil .diaporama .diapo { width:1524px; height:1024px; margin-left:-717px; }
.diaporama-accueil .diaporama .diapo img {width:100%; height:auto; }
.diaporama-accueil .diaporama .diaporama-zone { height:1024px; }
.diaporama-accueil .diaporama .diapo_txt_zone {top:54px;width:31%;margin: 0 calc((100% - 36%) / 2) !important;}
.diaporama-accueil .diaporama .diapo_txt_1 span { max-height:115px; font:47px Gotham-Bold, DinBold, Arial, Helvetica, Sans-serif; text-transform:inherit;line-height:53px;overflow:hidden; }
.diaporama-accueil .diaporama .diapo_txt_2 span { height:117px; font:49px Gotham-BookItalic, DinBold, Arial, Helvetica, Sans-serif; text-transform:inherit; line-height:54px;overflow:hidden; }
.menu {width: 70%;}
.top-bar-section ul li.langues {margin-left: 0px;}
.top-bar-section .dropdown li {width: 33%;}
.contenu-wysiwyg-gris .contenu-wysiwyg:first-child {font-size:11px;}
.contenu-wysiwyg-gris .contenu-wysiwyg:first-child p {font-size:11px;}
.diaporama {height: 343px;}
.contenu-wysiwyg:first-child {padding-right: 40px;}
.side-nav {margin: 38px auto;}
.fa-2x {font-size: 1em;}
.side-nav li a:not(.button) {line-height:13px;font-size:10px;width:96px;}
.side-nav li {padding: 9px 5px;height: 50px;border: 2px solid #858585;margin: 0px 0px -2px 0px;}}

@media only screen and (max-width: 813px) {
.menu {width: 58%;}
.menu .contain-to-grid {padding: 0px 0px 0px 0px;}
.top-bar-section .dropdown li {width: 32%;}
.top-bar-section .dropdown li:not(.has-form) a:not(.button) {font-size: 12px;}}
/* Fin des styles tablette */



/* Début des styles mobile portrait */
@media only screen and (max-width: 40em) {
#topPage .diaporama {position: inherit;height: auto;}
.diaporama-accueil .diaporama { height:1024px; overflow:hidden; }
.diaporama-accueil .diaporama .diapo { position:absolute; width:1920px; height:1024px; left:50%; margin-left:-732px; }
.diaporama-accueil .diaporama .diapo img { width:81%; height:auto; }
.diaporama-accueil .diaporama .diaporama-zone { position:absolute; width:100%; height:1024px; }
.diaporama-accueil .diaporama .diapo_txt_zone {top:23px;width:21%; margin:0 calc((100% - 44%) / 2) !important;}
.diaporama-accueil .diaporama .diapo_txt_1 span { height:36px; font:31px Gotham-Bold, DinBold, Arial, Helvetica, Sans-serif;line-height: 32px; }
.diaporama-accueil .diaporama .diapo_txt_2 span { height:36px; font:33px Gotham-BookItalic, DinBold, Arial, Helvetica, Sans-serif;line-height:32px; }
.lien-site.row { margin-top: 120px; }
.lien1,.lien2 {text-align:center;padding-right:inherit;padding-left:inherit;}
.logo-televerbier { width: 205px;padding: 22px;min-height: 205px;margin-bottom: 10px;}
.logo-verbier4vallees { width: 205px;padding: 22px;min-height: 205px;}
.logo-m img {width: 99px;margin-left: 7px;margin-top: 7px;margin-bottom: 7px;}
.logo-menu-zone {height: auto;}
.top-bar .toggle-topbar.menu-icon a::after {box-shadow: 0 8px 0 1px #23376a, 0 14px 0 1px #23376a, 0 20px 0 1px #22376a;}
.top-bar .toggle-topbar.menu-icon a {color: #23376a;font: 22px Gotham-Light, Arial, Helvetica, Sans-serif;}
.menu {width: 100%;}
.top-bar-section ul li.langues {margin-left: 0px;}
.top-bar-section li.recherche:not(.has-form) a:not(.button) {padding-left: 20px !important;}
.contenu-wysiwyg-gris .contenu-wysiwyg:first-child {margin-top: 7px;padding-right: 13px;}
.contenu-wysiwyg-gris .contenu-wysiwyg:nth-child(2) {margin-top:7px;}
.contenu-wysiwyg {padding-bottom: 0px;}
.contenu-wysiwyg-zone {margin-top: 0px;}
.top-bar-section .dropdown li:not(.has-form) a:not(.button) {height:inherit;line-height:inherit!important;}
.top-bar-section .dropdown li {width: 100%;}
.top-bar-section .dropdown > li { margin-bottom: 0px;}
.pied2-logo-messenger .pied-logo-messenger2 {display: block;border-bottom: 1px solid white;}
.pied2-social-m {border-top: 1px solid white;}
.pied2-social-m a:hover i {background-color: #23376a;}
.pied2-social-m a i {color: #23376a;}
.side-nav {margin: 0px auto;}}
/* Fin des styles mobile portrait */

/* Début des styles mobile paysage */

@media only screen and (max-height: 600px) {
.lien-site {margin-top: 232px;}}

@media only screen and (max-height: 560px) {
.diaporama-accueil .diaporama .diapo_txt_zone {top: 10px;}
.diaporama-accueil .diaporama .diapo_txt_1 span {font: 42px Gotham-Bold, DinBold, Arial, Helvetica, Sans-serif;line-height: 36px;}
.diaporama-accueil .diaporama .diapo_txt_2 span {height: 54px;font: 43px Gotham-BookItalic, DinBold, Arial, Helvetica, Sans-serif;line-height: 45px;}
.lien-site {margin-top: 116px;}}

@media only screen and (max-height: 430px) {
.logo-televerbier, .logo-verbier4vallees {width: 174px;min-height:174px;padding: 23px;}
.lien-site span {font: 11px Gotham-Bold, DinBold, Arial, Helvetica, Sans-serif;}}
/* Fin des styles mobile paysage */

body { background-color:#fff; margin:0; padding:0; }

.hublot-timekeeper{
	display: block;
	border: none;
	width:		179px;
	height:		140px;
	position:	relative;
	overflow:	hidden;
	color:		#FFFFFF;

	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);
	-moz-opacity: 0;
	-khtml-opacity: 0;
	opacity: 0;

	-webkit-transition: all 1s ease-out;
    -moz-transition: all 1s ease-out;
    -o-transition: all 1s ease-out;
    transition: all 1s ease-out;
}
.hublot-timekeeper img{
	border: none;
}
.hublot-timekeeper.visible{ 
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	-moz-opacity: 1;
	-khtml-opacity: 1;
	opacity: 1;
}
.hublot-timekeeper.hover .hublot-text{
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	-moz-opacity: 1;
	-khtml-opacity: 1;
	opacity: 1;

	-moz-transform: scale(1);
   -webkit-transform: scale(1);
   -o-transform: scale(1);
   transform: scale(1);
   -ms-transform: scale(1);
}
.hublot-timekeeper.static .hublot-watch-static{
	display:block;
}
.hublot-timekeeper.static .hublot-watch{
	display:none;
}
.hublot-timekeeper.hover .hublot-watch, .hublot-timekeeper.hover .hublot-watch-static{
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);
	-moz-opacity: 0;
	-khtml-opacity: 0;
	opacity: 0;

	-moz-transform: scale(0.8);
   -webkit-transform: scale(0.8);
   -o-transform: scale(0.8);
   transform: scale(0.8);
   -ms-transform: scale(0.8);
}
.hublot-timekeeper .hublot-text, .hublot-timekeeper .hublot-watch, .hublot-timekeeper .hublot-watch-static{
	position:absolute;
	top: 0;
	
	width: 100%;
	height: 100%;

	-webkit-transition: all 0.2s ease-out;
    -moz-transition: all 0.2s ease-out;
    -o-transition: all 0.2s ease-out;
    transition: all 0.2s ease-out;
}

.hublot-timekeeper .hublot-watch-static{
	display:none;
	z-index:5;
}
.hublot-timekeeper .hublot-text{
	z-index:10;

	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);
	-moz-opacity: 0;
	-khtml-opacity: 0;
	opacity: 0;

	-moz-transform: scale(1.2);
   -webkit-transform: scale(1.2);
   -o-transform: scale(1.2);
   transform: scale(1.2);
   -ms-transform: scale(1.2);
}
.hublot-timekeeper .hublot-text .hublot-logo-glow{
	
	width: 200px;
	height: 134px;
	margin: auto;
}
.hublot-timekeeper .hublot-watch{
	z-index:5;

	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	-moz-opacity: 1;
	-khtml-opacity: 1;
	opacity: 1;

}
.hublot-timekeeper img.watch {
	position: 				absolute;
    margin-right: 			0px;
}
.hublot-timekeeper div.handles {
    height: 				180px;
    overflow: 				hidden;
    position: 				absolute;
    left: 					-1px;
    top: 					-14px;
    width: 					200px;
}

.hublot-timekeeper .handles div.handle {
    width: 					100%;
    height: 				100%;
    position: 				absolute;
    left: 					0;
    top: 					0;


    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
	-o-transform: rotate(0deg);
    transform: rotate(0deg);
}

.hublot-timekeeper .handles div.ease {
    -webkit-transition: all 0.99s ease-out 0s;
    -moz-transition: all 0.99s ease-out 0s;
    -o-transition: all 0.99s ease-out 0s;
    transition: all 0.99s ease-out 0s;
}

.hublot-timekeeper .handles div.hour {
	background: 			url(/css/../images/pub/hours.png) no-repeat scroll center 5px;
	height:					80px;
	left: 					77px;
    top: 					40px;
	width: 					15px;
	z-index: 				1;
}

.hublot-timekeeper .handles div.minute {
	background: 			url(/css/../images/pub/minutes.png) no-repeat scroll center 5px;
	height:					108px;
	left: 					77px;
	top: 					28px;
	width: 					15px;
	z-index: 				2;
}

.hublot-timekeeper .handles div.second {
	background: 			url(/css/../images/pub/seconds.png) no-repeat scroll center 18px;
	height: 				144px;
	left: 					77px;
	top: 					10px;
	width: 					15px;
	z-index: 				3;
}

/* IE9 */
.hublot-timekeeper .handles div.handle.hour {
    -ms-transform: rotate(60deg);
}
.hublot-timekeeper .handles div.handle.minute {
    -ms-transform: rotate(295deg);
}


.hublot-logo{
	width: 90px;
	height: 50px;
	float:left;
	margin-top: 40px;
}


/*Calendrier
#calendriertableau2 #noselection { background-color:#e3ecf3; color:#78abce; font-size:12px; }
#calendriertableau2 #noselection a { color:#78abce; text-decoration:none; font-size:12px; }
#calendriertableau2 #noselection a:hover { color:#78abce; text-decoration:none;  }
/* Gestion de la couleur 
#calendriertableau2 #request 		{ background-color:#fd8200; vertical-align:top; border:1px solid #aac1cf;}
#calendriertableau2 #requesttop 	{ background-color:#fd8200; vertical-align:top; border:1px solid #aac1cf;}
#calendriertableau2 #requesttop a.titre,
#calendriertableau2 #requesttop a.titre:hover 	{ background-color:#ff5a00;}
#calendriertableau2 #selection 		{ background-color:#00b9e9; vertical-align:top; border:1px solid #aac1cf;}
#calendriertableau2 #selectiontop 	{ background-color:#00b9e9; vertical-align:top; border:1px solid #aac1cf;}
#calendriertableau2 #selectiontop a.titre,
#calendriertableau2 #selectiontop a.titre:hover { background-color:#009add;}
*/

/* gestion de l'affichage 
#calendriertableau2 td a,						#calendriertableau2 td a:hover 						{ display:block; color:#fff; text-decoration:none; font-size:11px; }
#calendriertableau2 td a.jour,					#calendriertableau2 td a.jour:hover 				{ padding-top:17px; }
#calendriertableau2 td a.prix,					#calendriertableau2 td a.prix:hover 				{ font-size:13px; }
#calendriertableau2 td.selection a.prix_barre,	#calendriertableau2 td.selection a.prix_barre:hover	{ font-size:13px; }
#calendriertableau2 td.selectiontop a.jour,		#calendriertableau2 td.selectiontop a.jour:hover	{ padding-top:2px; }
#calendriertableau2 td.selectiontop a.titre,	#calendriertableau2 td.selectiontop a.titre:hover	{ width:100%; line-height:11px; padding:2px 0 2px 0; }
#calendriertableau2 td.request a.prix_barre,	#calendriertableau2 td.request a.prix_barre:hover 	{ color:#f3dfbf; font-size:13px; }
#calendriertableau2 td.requesttop a,			#calendriertableau2 td.selectiontop a:hover			{ color:#fff;}
#calendriertableau2 td.requesttop a.jour,		#calendriertableau2 td.requesttop a.jour:hover 		{ padding-top:2px; }
#calendriertableau2 td.requesttop a.titre,		#calendriertableau2 td.requesttop a.titre:hover 	{ width:100%; line-height:11px; padding:2px 0 2px 0; }
*/

.lienACacherFooter { color:white !important;}

.comparateur-liste .STYLE-COMPARATEUR-COMPAR_PAR7 li { text-align:justify; }
.comparateur-liste .STYLE-COMPARATEUR-COMPAR_PAR7 ul { text-align:justify; }



.list-TC					{border-bottom:1px solid #aac1cf;padding-bottom: 10px;margin-bottom: 10px;}
.list-TC .fondprixproduit	{margin-bottom: 10px;}
.list-TC .content			{text-align:justify;}
@media only screen and (min-width: 40em) {
	.list-TC .content{
		clear:both;
		margin-bottom: 10px;
		margin-top: 15px;
		margin-left: 40px;
		margin-right: 10px;
	}
	.list-TC .bloc-title{display: flex;}
	.list-TC .title{margin: auto;}
	
}

.panier-sous-titre{
text-align: center;
color:#fff;
padding:15px 0px;
margin-bottom: 10px;
}

#requestTextePanier.panier-sous-titre{
	background-color: #ff5a00;
}
#dispoTextePanier.panier-sous-titre{
	background-color: #3e850a;

}

#requestTextePanier{
	color: #ED1C24;
		margin-bottom: 10px;
		margin-top: 15px;
		margin-left: 40px;
		margin-right: 10px;	
		padding:15px 0px;
		font-size: 28px;
}
#dispoTextePanier{
	/*background-color: #3e850a;*/
		margin-bottom: 10px;
		margin-top: 15px;
		margin-left: 40px;
		margin-right: 10px;	
		padding:15px 0px;		
}


.r-textespecialgras.request{
color: black;
font-weight: inherit;
font-size: 18px;
}

.contactDispoTitre{font-size:18px; font-weight:bold;line-height:26px;}
.contactDispo{font-size:14px;}


/* gmaps */
#listingMaps{
}
#listingMaps >*, #listingMaps > *:before, #listingMaps > *:after {
    -moz-box-sizing: content-box!important;
    -webkit-box-sizing: content-box!important;
    box-sizing: content-box!important;  
}
#listingMaps img {
    max-width: none;
}
#listingMaps .infobox-photo img {
    max-width: 100%;
}
#listingMaps label {
    width: auto;
    display: inline;
}   


.vel2-moteur-select-outer label{
	display:none;

}

/* Pour celui de la liste de résultat */
.comparateur-bulle{
	position:relative;
	display:none;
}

/* Pour celui de la fiche produit */
.fiche-pictos .comparateur-bulle { 
	position:absolute;
	display:none;
}


.bloc-fp-close{
	display:none;
}

.bloc-fp-open{
	display:block;
}


#r-jourdepart select{
	width: 75%;
}

/* anti foundation */
#detaildossier table, #detaildossier tr,#detaildossier td , 
#panierm table, #panierm tr,#panierm td , 
#divDureeSejour select,#divDureeSejour p, #divPrixOption input,#divPrixOption select, #panier-vel2-meta table tr, #panier-vel2-meta table tr td {
	margin:0px;
	padding:0px;
}

#panierm .r-fondspecial{background-color:#ED1C24 !important;color:#fff}
/* /anti foundation */

/* VEL 2 - Resa*/

#divPrixOption td > p {
	margin-top: 3px;
	margin-bottom: 3px;
}
.r-fond6, .r-fond6 p {
	color : #fff;
	background-color: #000;
	font-size: 18px;
	font-weight: bold;
}
#divPrixOption tr#prixtotal td {
	padding-top: 10px;
	padding-bottom: 10px;
}
#divPrixOption tr#prixtotal td .r-textespecialgras,#divPrixOption tr#prixtotal td .r-textespecialgras input{
	font-size: 18px !important;
}
.r-textespecialgras{font-weight: bold;}

#panierm tr#prixtotal td .r-textespecialgras,#divPrixOption tr#prixtotal td .r-textespecialgras input{
	font-size: 18px !important;
}
#divPrixOption.r-prix1, input.r-prix1 {background-color:#fff !important}
#divPrixOption .r-titre{   font-size: 18px; }
#divPrixOption .r-fond4 {  margin-top:2px; margin-bottom:2px; padding-top:2px; padding-bottom:2px;  }

#divPrixOption  tr td{  margin:2px;padding: 2px 2px 2px 10px;}

#panierm .r-fond2 {background-color: #DBDBDB;}
#panierm .r-fond3, td.r-fond3 {background-color: #DBDBDB;}
#panierm .r-fond4 {font-size: 14px}
#panierm .r-importantgras,
#detaildossier .r-importantgras,
#divPrixOption .r-importantgras{
	font-weight: bold;
	text-decoration: none;
	font-size: 15px
}
.panier_total .panier_montant{
	font-size: 18px;
}
.panier_accompte .panier_montant,.panier_accompte{
	color : black;
	background-color: #fff;
}
.panier_assu, .panier_assu  .panier_montant,
.panier_solde,.panier_solde .panier_montant,
.panier_taxesejour, .panier_taxesejour .r-importantgras,
.panier_accompte .panier_montant,.panier_accompte{
	color: black;
	background-color: #fff;
	font-weight: bold;
}
.panier_accompte .panier_montant,.panier_accompte{
	color : black;
}


#panierm form > table > tbody > tr,
#detaildossier > table > tbody > tr,
#divPrixOption > table > tbody > tr,
#panier-vel2-meta form > table > tbody > tr{ border: 1px solid #e0e0e0 ;}
#divPrixOption > table > tbody > tr:last-of-type { border-top-width:0px}
#divPrixOption select {   border:1px solid #e0e0e0; height:auto; padding:5px 25px 5px 5px; 	min-width: 30px; width:auto;  }


.r-textespecialgras small{font-size: 100%;}

#prixtotal,#panier_total{line-height: 45px;}
input#btAjoutPanier{margin-top: 15px;padding:7px 15px 7px 15px;}


#panier-vel2-meta td.r-fond2{padding: 0px 15px !important}

/* Couleur #78ABCE #ED1C24*/
#divPrixOption .r-fond5 ,#prixtotal, #prixtotal input:focus,.panier_total{
	background-color:#929292;
}

#divPrixOption .r-fond5 .r-titre,.panier_total {
	color:#fff;
	font-weight: bold;
}

#divPrixOption  .r-titre{   }







/* *** AFFICHAGE DE L'IMAGE GRAND FORMAT *** */

.clearing-container{}
.clearing-container .phototh_mini li{ margin:auto 5px;}
.clearing-container .phototh_titre_img{ font-size:.75em;}

/* définition de la couleur de fond et son opacité */
.clearing-blackout{
	background:rgba(0,0,0,0.75);
}
/* définition de la couleur du fond derrière la grande image et son opacité */
.visible-img{
	background:rgba(0,0,0,0) !important;
}

/* définition de la couleur du fond derrière le titre de la grande image et son opacité */
.clearing-caption{
	background:rgba(0,0,0,0) !important;
	color:#fff;
	
}

.clearing-assembled .clearing-container .visible-img{ 
	/* ************************************************************************************************* */
	/* ******** ATTENTION : hauteur de la gde photo = 100% - hauteur du carousel (les vignettes dessous) */
	height: calc(100% - 120px); 
	height: -o-calc(100% - 120px); 
	height: -moz-calc(100% - 120px); 
	height: -webkit-calc(100% - 120px); 
	/* ******** / ATTENTION */
}

.clearing-assembled .clearing-container .carousel > ul li{clear:none}
.clearing-assembled .clearing-container .carousel > ul li.visible{
	border: 1px solid white;
    box-shadow: 0 0 7px white;
	opacity: 1;
}
/* *** définition des flèches de défilement *** */

/* Choisir ici les pictos pour les flèches */
.clearing-main-next {
	position:absolute;
	right:0;
}
.clearing-main-prev {
	left:0;
	position:absolute;
}

.clearing-main-next > span, .clearing-main-prev > span{
	border:none;
}
.clearing-main-next > span:before, .clearing-main-prev > span:before{
	color:#aaa;
	font: normal normal normal 2em/1 FontAwesome;
}
/* Choisir ici les pictos pour les flèches */
.clearing-main-next > span:before{content:"\f138";}
.clearing-main-prev > span:before{content:"\f137";}

.clearing-blackout .clearing-close {position:relative; text-align: right;}
@media (min-width: 639px) {
	.clearing-blackout .clearing-close {position:absolute;}
}
.clearing-main-prev.disabled, .clearing-main-next.disabled{opacity: 0.3;}

.Listing-Photo ul.clearing-thumbs {
    display: none;
}

/*
.infobox-bouton { padding:5px 0 5px 0; }
.infobox-bouton a { display:block; background-color:#fe9900; color:#fff; font:14px CenturyGothicBold, Arial, Helvetica, Sans-serif; text-transform:uppercase; text-decoration:none; text-align:center; padding:15px 5px 15px 5px; line-height:16px; }
.infobox-bouton a:hover { background-color:#fe6000; color:#fff; font-weight:normal; text-decoration:none; }
.infobox-prix { background-color:#00a3e9; padding:10px 5px 10px 5px; margin-top:10px; text-align:center; color:#fff; font:14px CenturyGothic, Arial, Helvetica, Sans-serif; text-transform:uppercase; line-height:16px; }
.infobox-prix .duree { color:#fff; font-family:CenturyGothicBold, Arial, Helvetica, Sans-serif; }
.infobox-prix .nouveauprix { color:#fff; font-family:CenturyGothicBold, Arial, Helvetica, Sans-serif; }
.infobox-produits { padding:10px 0 0 0; }
*/

/* Gestion des voir tout*/
.resultat-milieu .voirTout .texte.off{
	height: 192px;
	overflow: hidden;
}
.resultat-milieu .voirTout .texte.off * {
    line-height: 16px;
}

#amb-descriptif1-1, #amb-descriptif1-2, #amb-descriptif1-3, #amb-descriptif1-4,
#amb-descriptif2-1, #amb-descriptif2-2, #amb-descriptif2-3, #amb-descriptif2-4,
#amb-descriptif3-1, #amb-descriptif3-2, #amb-descriptif3-3, #amb-descriptif3-4,
#amb-descriptif4-1, #amb-descriptif4-2, #amb-descriptif4-3, #amb-descriptif4-4,
#amb-descriptif5-1, #amb-descriptif5-2, #amb-descriptif5-3, #amb-descriptif5-4,
#amb-descriptif6-1, #amb-descriptif6-2, #amb-descriptif6-3, #amb-descriptif6-4,
#topventes-descriptif1,#topventes-descriptif2,#topventes-descriptif3,#topventes-descriptif4,#topventes-descriptif5,#topventes-descriptif6{
	text-align: justify;
}

.bonsplans-choix a {text-transform: uppercase;}
/*.at-icon-wrapper{display:none !important;}*/

ul .liN1{list-style-type: square !important;}
.Rlvs0, .Dlvs0{font-weight:bold}


/* styles gestion horaire */
.r-horaires-jour { padding-top:5px; }
/* .r-horaires-jour a.calendrierImage { display:inline-block; width:29px; height:31px; background:url(/images/charte-graphique.png) no-repeat; vertical-align:middle; margin-left:2px; }*/
.r-horaires-jour a.calendrierImage i { display: inline-block; height: 48px; color: #85969f; font-size: 37px; vertical-align: middle; margin: 5px 0 0 7px; }
.r-horaires-jour input { width:200px; background-color:#fff; border:1px solid #ccc; color:#000; font:12px Arial, Helvetica, Sans-serif; font-weight:bold; vertical-align:middle; }
.r-horaires-jour-texte { padding-top:5px; }
.r-horaires-jour-titre { color:#000; font:16px RobotoCondensedBold, Arial, Helvetica, Sans-serif; line-height:17px; }
.r-horaires-jour-titre img { vertical-align:middle; }
.r-horaires-jour-zone { padding-top:20px; }
.r-horaires-jour-zone #divCalendrier { position:absolute; width:auto; height:auto; left:10px; top:0; z-index:60; border:3px solid #403438; text-align:left; background-color:#fff; color:#000; padding:10px; }
.r-horaires-libelle { color:#000; }
.r-horaires-libelle strong { display:block; font:18px RobotoCondensedBold, Arial, Helvetica, Sans-serif; line-height:19px; }
.r-horaires-options { padding-top:5px; }
.r-horaires-options select { background-color:#fff; border:1px solid #ccc; margin:0; color:#000; font:12px Arial, Helvetica, Sans-serif; font-weight:bold; vertical-align:middle; }
.r-horaires-options-date { padding-top:5px; color:#000; }
.r-horaires-options-date strong { display:block; font:16px RobotoCondensedBold, Arial, Helvetica, Sans-serif; line-height:17px; }
.r-horaires-options-titre { color:#000; font:16px RobotoCondensedBold, Arial, Helvetica, Sans-serif; line-height:17px; }
.r-horaires-options-titre img { vertical-align:middle; }
.r-horaires-options-zone { padding-top:20px; }
.r-horaires-options-zone #divPrixOption { padding-top:20px; padding-bottom:20px; }
/* /styles gestion horaire */




.Rlvs1  { font-weight:bold;}

#zonelogin a.nav-direction-left { position: absolute;left:0;font-size: 22px;display: none; }
#zonelogin a.nav-direction-right { position: absolute;right:0;font-size: 22px;display: none; }
#zonelogin a.nav-direction-left:focus,#zonelogin a.nav-direction-right:focus { transition: 0.2s; }

#zonelogin .top-bar { border-bottom: 1px solid #dadada; }
#zonelogin .compte { margin: 0 auto; min-width: 175px; font-size: 23px;padding-left: 0;font-family: "OpenSansBold";font-weight: bold;text-transform: uppercase; }
#zonelogin ul.moncompte-menu { margin:0;padding: 14px 0;min-width: 460px; }
#zonelogin ul.moncompte-menu li { display: inline-block; margin: 0 10px}
#zonelogin ul.moncompte-menu li a { color: initial;}
#zonelogin ul.moncompte-menu li a.active,#zonelogin ul.moncompte-menu li a:hover,#zonelogin .nom a:hover { color:#e2001a; }
#zonelogin .identite { min-width: 290px; padding: 0;float: right; }
#zonelogin .identite img { max-height: 40px;vertical-align: middle;padding-left: 0;width: 60px;}
#zonelogin .nom { padding:0;text-align: right; }
#zonelogin .nom span { font-size: 18px;display: block;line-height: 22px; }
#zonelogin .nom a { font-size: 11px;color: initial;position: relative;top: -13px; }

#zonelogin .moncompte-menu-contenu { max-width: 1000px; float: left; }
#zonelogin .moncompte-menu-contenu h1 { font-size: 30px;margin-top: 50px;margin-bottom: 20px; }
#zonelogin .recap-produit { border: 1px solid #dadada;padding: 0px;margin-bottom: 15px; }
#zonelogin .recap-produit .info { padding-right: 0; }
#zonelogin .recap-produit .col-r.info { position: relative;padding: 0;min-width: 171px; }
#zonelogin .recap-produit img { padding: 0; margin-right:0px; }
#zonelogin .recap-produit h2 { padding:0px;text-align: left;margin: 0;font-size: 16px;color: #494949;    padding-top: 5px;    max-height: 60px;overflow: hidden;line-height: 29px; }
#zonelogin .recap-produit .nbr,#zonelogin .recap-produit .nbr-resultat { font-size: 12px; }
#zonelogin .col-r { position: relative; }
#zonelogin .recap-produit .prix-resultat { font-size: 24px; font-family: "OpenSansBold";display: block; text-align: center;color: #738294;padding: 29px 0 30px 0;}
#zonelogin .recap-produit a.lien, #zonelogin .heberg a.lien, #zonelogin .activite a.lien { background-color: #e2001a;display: block;padding: 10px;color: #fff;text-align: center; }

#zonelogin .moncompte-menu-contenu.dashboard,#zonelogin .moncompte-menu-contenu.detail  { max-width: 100%; float: left;padding: 0 20px; }
#zonelogin .dashboard .profil,#zonelogin .dashboard .aide { float: right;text-align: center;background-color: #dadada;min-width: 178px;margin-bottom: 20px; }
#zonelogin .dashboard .profil span,#zonelogin .dashboard .aide span { font-size: 15px;line-height: 16px;text-align: center;}
#zonelogin .dashboard .profil img { margin-bottom: 10px; }
#zonelogin .dashboard .profil span.title,#zonelogin .dashboard .recap span.title,#zonelogin .dashboard .aide span.title { font-size: 20px;display: inline-block;text-transform: uppercase;font-weight: bold;padding: 0;margin: 25px 0 10px; }
#zonelogin .dashboard .profil span.title,#zonelogin .dashboard .aide span.title { text-align: center;display: block;margin: 15px 0 30px 0;line-height: 22px;font-size: 16px; }
#zonelogin .dashboard .profil .nom a,#zonelogin .dashboard .aide .nom a { position: static;display: block;margin-top: 20px;font-size: 13px;text-align: center;margin-bottom: 20px; }
#zonelogin .dashboard .recap { padding: 0;margin-bottom: 60px;}
#zonelogin .dashboard .recap a.reservations { position: absolute;right: 0;top:30px; }
#zonelogin .dashboard .sidebar { float: right;padding: 0; }

#zonelogin .mon-profil { text-align: left; }
#zonelogin .mon-profil span.title { font-size: 17px;display: inline-block;text-transform: uppercase;font-weight: bold;padding:0;margin: 25px 0 20px; }
#zonelogin .mon-profil img { width: 231px; }
#zonelogin .mon-profil div:nth-of-type(1) > a {  background-color: #e2001a;padding: 10px;position: relative;top: -39px;width: 231px;text-align: center;padding-left: 10px;bottom: 0;color: #fff;display: block;}
#zonelogin .mon-profil div:nth-of-type(2) > a { font-size: 15px;color: #454545;border: 1px solid;padding: 15px;display: block;margin-bottom: 10px;  }
#zonelogin .mon-profil div:nth-of-type(2) > a:hover { color: #e2001a;}
#zonelogin .mon-profil div:nth-of-type(2) i { font-size: 19px;float: right; }
#zonelogin .mon-profil .r-identification1, #zonelogin .mon-profil .r-identification2 { text-align: left;padding-left: 10px; }
#zonelogin .mon-profil .r-identification-bouton { margin-top:21px; }
#zonelogin .mon-profil .moncompte-menu-contenu { float: none; }

#zonelogin .mon-compte span.title { font-size: 20px;display: inline-block;text-transform: uppercase;font-weight: bold;padding:0;margin: 25px 0 20px; }
#zonelogin .mon-compte .ajouter-adresse { padding:0;margin-bottom: 10px; }
#zonelogin .mon-compte .info-compte { border: 1px solid #dadada;padding:20px;width: 48%;margin-right: 2%;  }
#zonelogin .mon-compte .info-compte span:nth-of-type(1) { font-size: 15px;font-weight: bold;margin-bottom: 10px; }
#zonelogin .mon-compte span { display: block; }
#zonelogin .mon-compte a.lien { margin: 10px 10px 0 0;display: inline-block; }
#zonelogin .mon-compte .moncompte-menu-contenu .r-identification-bouton { margin-top:20px; }

#zonelogin .detail-dossier .info-dossier { position: relative;top: -20px;font-size: 12px; }
#zonelogin .detail-dossier .title { font-size: 20px;font-weight: bold;margin: 20px 0 10px 0;text-transform: uppercase;padding-left:0; }
#zonelogin .detail-dossier .total { color:#494949; }
#zonelogin .detail-dossier .img-recap { padding: 0;width: 161px; }
#zonelogin .detail-dossier .produit { font-size: 16px;font-weight: bold; }
#zonelogin .detail-dossier .prix-resultat { text-align: center;font-size: 20px;display: block;color:#738294;font-family: "OpenSansBold";float: right; padding: 21px; }
#zonelogin .detail-dossier p { text-align: left;margin-top: 20px;margin-bottom: 0;}
#zonelogin .detail-dossier .heberg,#zonelogin .detail-dossier .activite { border: 1px solid #dadada;padding: 0px; margin-bottom: 10px;}
#zonelogin .detail-dossier .info { margin-top:6px;padding: 0 0 5px 0;height: auto; }
#zonelogin .col-r-hotel { background-color: #b0c9e7;padding: 20px;text-align: center;float: right; }
#zonelogin .col-r-hotel .title { text-align: center;margin-top:0;padding-right: 0; }
#zonelogin .detail-dossier .activite { float: left; }
#zonelogin .detail-dossier .activite .titre-option { padding-right: 0; }
#zonelogin .detail-dossier .activite label .r-formulaire { font:13px DinRegular, Arial, Helvetica, Sans-serif !important; padding: 3px; }
#zonelogin .detail-dossier .activite .option { padding: 0;font-size: 12px;}
#zonelogin .detail-dossier .activite .option .nb-option { padding-left: 0; }
#zonelogin .detail-dossier .activite .personnes { margin-bottom: 5px; }
#zonelogin .detail-dossier .total-prix { float: right;padding-left: 0; }
#zonelogin .title.total { color: #e2001a; } 
#zonelogin .panier { position: absolute;top:-20px;right: 3%; } 
#zonelogin .panier a { font: none;line-height: 16px; padding: 7px 10px; }
#zonelogin .panier a strong {font: 15px DinBold, Arial, Helvetica, Sans-serif;line-height: 0px;}

@media only screen and (max-width: 1108px) { 
.dashboard .recap-produit .img-recap { display: none; }
}

@media only screen and (max-width: 1025px) {
.detail-dossier .img-recap { display: none; }
#zonelogin .compte { display: none; }
}

@media only screen and (max-width: 1070px) { 
#zonelogin .mon-profil div:nth-of-type(1) > a { width: 100%; }
}

@media only screen and (max-width: 1010px) { 
#zonelogin .dashboard .recap a.reservations { position: static;width: 100%;display: block;margin-bottom: 10px; }
}

@media only screen and (max-width: 850px) { 
#zonelogin .identite { display: none; }
}

@media only screen and (min-width: 642px) and (max-width: 761px) { 
.recap-produit .img-recap { display: none; }
}

@media only screen and (max-width: 641px) { 
.recap-produit .img-recap { width: 100%; }
#zonelogin .recap-produit { margin-bottom: 15px; }
#zonelogin .recap-produit .info,#zonelogin .recap-produit h2 { text-align: center;padding-left: 0; }
#zonelogin .mon-profil img { width: 43%; }
#zonelogin .mon-profil div:nth-of-type(1) > a { width: 43%;font-size: 12px; }
#zonelogin .mon-profil .r-identification-bouton {margin-top: 0;}
#zonelogin .mon-compte .info-compte {  width: 100%;margin-right: 0;margin-bottom: 15px; }
#zonelogin .panier { position: static;}
#zonelogin .moncompte-menu-contenu h1 { display: none; }
#zonelogin .detail-dossier .info-dossier { position: static;top:9px;margin-top: 15px;padding: 0;  }
#zonelogin .moncompte-menu-contenu { margin-top: 10px;padding: 0; }
}

#zonelogin .recap-produit h2 { padding:0px;text-align: left;margin: 0;font-size: 16px;color: #494949; padding-top: 5px;max-height: 60px;overflow: hidden;line-height: 18px; }
#zonelogin .recap-produit .img-recap {width: 200px;display: inline-block;margin-right: 18px;vertical-align: bottom;}
#zonelogin .recap-produit .nbr { display: inline-block;font-weight: bold; }

@media only screen and (max-width: 510px) {
#zonelogin a.nav-direction-left,#zonelogin a.nav-direction-right { display: block; }
#zonelogin nav { overflow-y: hidden; }
}

/****** Style TARIFS - 18/12/2017 ******/

/**** CATEGORIES TABLE ****/
#tabs-tarifs {
    max-width: 680px;
    background: none;
}

#tabs-tarifs ul.ui-tabs-nav {
    width: 900px;
    max-width: 93vw;
}

.tarifs_categories {
    position: relative;
}

.tarifs_categories table {
    width: 100%;
    background-color: #e2001a;
    margin: 0;
}

.tarifs_categories tr {
    display: flex;
    text-align: left;
    height: 50px;
}

.ie .tarifs_categories table td:not(:first-child) {
    text-align: center
}


.tarifs_categories table td:first-child {
    flex-grow: 2;
    text-align: left;
    text-transform: uppercase;
    padding: 0 10px;
}

.tarifs_categories table td {
    flex: 1 1 10%;
    padding: 0;
    align-self: center;
    color: white;
    font-family: RobotoCondensedBold, Arial, Helvetica, sans-serif;
    font-size: 15px;
    display: inline-block;
}


.tarifs_categories table td i {
    cursor: pointer;
}

.tarifs_categories .categories-detail {
    position: absolute;
    width: auto;
    border: 2px solid lightgrey;
    padding: 20px;
    background: rgba(255, 255, 255, 0.9);
    color: black;
    top: 10px;
    left: 70px;
    display: none;
}

.tarifs_categories .categories-detail ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

.tarifs_categories .categories-detail ul span {
    font-family: OpenSansBold, Arial, Helvetica, sans-serif;
}

/**** STATION TITLE TABLE ****/

.tarifs_station-title {
    display: flex;
    justify-content: space-between;
    cursor: pointer;
    background: #f0f0f0;
    padding: 10px 10px 10px 30px;
    border: 1px solid lightgrey;
    /*margin-top: 40px;*/
}

.tarifs_station-title p {
    margin-bottom: 0;
    font-family: OpenSansBold, Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    color: black;
    font-size: 18px;
}

.tarifs_station-title i {
    font-size: 23px;
    transition: transform 0.25s ease-in;
    margin-right: 30px;
}

.tarifs_station-title.open i {
    transform: rotate(-180deg);
}

/**** STATION CONTENT TABLE ****/

.tarifs_station-content {
    display: none;

}

.tarifs_station-content.open {
    display: block;
}

.tarifs_station-content > table {
    width: 100%;
    text-align: center;
    margin-bottom: 0;
    font-family: OpenSans, Arial, Helvetica, sans-serif;
    color: black;
}

.tarifs_station-content > table tr {
    display: flex;
    flex-wrap: wrap;
    text-align: center;
    padding: 10px 5px 10px 0;
}

.tarifs_station-content > table tr:hover {
    background-color: #f0f0f0;
}

.tarifs_station-content > table td {
    flex: 1 1 10%;
    padding: 0;
    align-self: center;
    color: black;
    display: inline-block;
    text-align: left;
}

.tarifs_station-content > table td:first-child {
    flex-grow: 1;
    text-align: left;
    font-size: 14px;
    padding: 5px;
    margin: 10px;
    border-bottom: 1px solid #cec5c6;
    font-family: OpenSansSemibold, Arial, Helvetica, sans-serif;
}

.tarifs_station-content > table td:first-child small {
    font-size: 11px;
}

.tarifs_station-content > table td:nth-child(2) {
/*    text-align: center;
    font-size: 12px;
    font-family: OpenSansSemiboldItalic, Arial, Helvetica, sans-serif;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-direction: column;
    !*display: inline-block;*!

    flex-grow: 2;*/
}

/*.tarifs_station-content > table td:not(:nth-child(2)):not(:first-child) {
    display: flex;
    align-items: left;
    flex-direction: column;
    justify-content: space-around;
    padding-left: 15px;
}*/

.tarifs_station-content > table td:not(:first-child) {
    display: block;
    align-items: left;
    flex-direction: column;
    justify-content: space-around;
    padding-left: 15px;
}

.tarifs_station-content > table td:not(:nth-child(1)) small {
}

.tarifs_station-content > table td:first-child {
    border: none;
    margin-right: 0;
}

.tarifs_station-content span[style="color:#FF0000;"] {
    color: #e2001a !important;
}

.tarifs_text {
    margin: 25px 0;
}

.tarifs_text .importantgras, .tarifs_text strong, .tarifs_station-content strong {
    font-weight: normal;
    font-family: OpenSansBold, Arial, Helvetica, sans-serif;
}


@media only screen and (min-width: 360px) {
    .tarifs_station-content > table td:not(:nth-child(1)) small {
        display: inline-block;
    }
}

@media only screen and (min-width: 480px) {

    .tarifs_categories table td, .tarifs_station-content table td {
        flex-basis: 130px;
        flex-grow: 0;
        padding: 10px;
    }

    .tarifs_categories table td {
        font-size: 20px;
    }

    .tarifs_categories table td:first-child {
        flex-basis: 260px;
        padding: 0 0 0 30px;
    }

    .tarifs_categories .categories-detail {
        left: 130px;
    }

    .tarifs_station-content > table tr {
        flex-wrap: nowrap;
        border: 1px solid lightgrey;
        padding: 0 5px 0 0;
    }

    .tarifs_station-content > table td:first-child {
        flex-basis: 260px;
        border: none;
        padding-left: 20px;
    }

    /*.tarifs_station-content > table td:nth-child(2) {
        !*display: table-cell;*!
        line-height: initial;
        font-size: 13px;
    }*/

    .ui-state-default a {
        font-size: 22px !important;
    }
}

/****** Style horaires - 18/12/2017 ******/

.horaires_content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
}

.horaires_content .titre_page {
    flex-basis: 100%;
}

/**** CATEGORIES TABLE ****/
#tabs-horaires {
    max-width: 750px;
    background: none;
    width: 100%;
}

.horaires_categories {
    position: relative;
}

.horaires_categories table {
    width: 100%;
    background-color: #e2001a;
    margin: 0;
    height: auto;
}

.horaires_categories tr {
    display: flex;
    text-align: left;
    height: 50px;
    padding: 0 5px 0 0;
}

.horaires_categories table td {
    flex: 1 3 50%;
    padding: 0;
    align-self: center;
    color: white;
    font-family: RobotoCondensedBold, Arial, Helvetica, sans-serif;
    font-size: 15px;
    display:inline-block;
}

.horaires_categories table td:first-child {
    text-align: left;
    text-transform: uppercase;
    padding: 0;
    flex-shrink: 2;
    flex-grow: 0;
    margin: 0 0 0 10px;
}

.horaires_categories table td:nth-child(2) {
    flex-shrink: 1;
}

.horaires_categories table td i {
    cursor: pointer;
}

.horaires_categories .categories-detail {
    position: absolute;
    width: auto;
    border: 2px solid lightgrey;
    padding: 20px;
    background: rgba(255, 255, 255, 0.9);
    color: black;
    top: 10px;
    left: 70px;
    display: none;
}

.horaires_categories .categories-detail ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

.horaires_categories .categories-detail ul span {
    font-family: OpenSansBold, Arial, Helvetica, sans-serif;
}

/**** STATION TITLE TABLE ****/

.horaires_station-title {
    display: flex;
    justify-content: space-between;
    cursor: pointer;
    background: #f0f0f0;
    padding: 10px 10px 10px 30px;
    border: 1px solid lightgrey;
    align-items: center;
    flex-wrap: wrap;
}

.horaires_station-title p {
    margin-bottom: 0;
    font-family: OpenSansBold, Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    color: black;
    font-size: 18px;
}

.horaires_station-title p:not(:first-child) {
    font-size: 13px;
    font-family: 'Open Sans', Helvetica, Arial, sans-serif;
    text-transform: none;
    font-style: italic;
    order: 1;
    flex-basis: 100%;
}

.horaires_station-title i {
    font-size: 23px;
    transition: transform 0.25s ease-in;
    margin-right: 30px;
}

.horaires_station-title.open i {
    transform: rotate(-180deg);
}

/**** STATION CONTENT TABLE ****/

.horaires_station-content {
    display: none;

}

.horaires_station-content.open {
    display: block;
}

.horaires_station-content > table {
    width: 100%;
    text-align: center;
    margin-bottom: 0;
    font-family: OpenSans, Arial, Helvetica, sans-serif;
    color: black;
    height: auto;
}

.horaires_station-content > table tr {
    display: flex;
    flex-wrap: wrap;
    text-align: center;
    padding: 10px 5px 10px 0;
}

.horaires_station-content > table tr:hover {
    background-color: #f0f0f0;
}

.horaires_station-content > table td {
    flex: 1 1 10%;
    padding: 0;
    align-self: center;
    color: black;
    display: inline-block;
}

.horaires_station-content > table td:first-child {
    flex-grow: 1;
    text-align: left;
    font-size: 14px;
    padding: 5px;
    border-bottom: 1px solid #cec5c6;
    font-family: OpenSansSemibold, Arial, Helvetica, sans-serif;
    flex-basis: 100%;
    margin: 0 10px 0 0;
}

.horaires_station-content > table td:first-child[colspan="5"] {
    font-style: italic;
    color: grey;
    padding: 10px 5px;
}

.horaires_station-content > table td:first-child small {
    font-size: 11px;
}

.horaires_station-content > table td:nth-child(2) {
    font-size: 12px;
    font-family: OpenSansSemiboldItalic, Arial, Helvetica, sans-serif;
    display: flex;
    align-items: left;
    justify-content: space-around;
    flex-direction: column;
    padding-left: 15px;
    flex-grow: 2;
}

.horaires_station-content > table td:not(:nth-child(2)):not(:first-child) {
    display: flex;
    align-items: left;
    flex-direction: column;
    justify-content: space-around;
    font-size: 12px;
    padding: 5px;
    text-align: left;
}

.horaires_station-content > table td:not(:nth-child(1)) small {
    /*display: none;*/
}

.horaires_station-content span[style="color:#FF0000;"] {
    color: #e2001a !important;
}

.horaires_text {
    margin: 25px 0;
    font-family: OpenSansSemibold, Arial, Helvetica, sans-serif;
    color: black;
}

.horaires_text .importantgras, .horaires_text strong {
    font-weight: normal;
    font-family: OpenSansBold, Arial, Helvetica, Sans-serif;
}

.horaires_information {
    width: 100%;
    max-width: 100%;
    background-color: #f0f0f0;
    padding: 20px 30px;
}

.horaires_information h2 {
    text-transform: uppercase;
    color: #414141;
    margin-bottom: 30px;
}
.horaires_information p {
    margin-bottom: 0;
}

@media only screen and (min-width: 480px) {
    .horaires_station-content > table td:not(:nth-child(2)):not(:first-child)  {
        font-size: 13px;
        line-height: 30px;
    }

    .horaires_station-content > table td:nth-child(2) {
        line-height: 30px;
    }
}

@media only screen and (min-width: 768px) {

    .horaires_categories table td, .horaires_station-content table td {
        flex-basis: 130px;
        flex-grow: 0;
        padding: 10px;
    }

    .horaires_categories table td {
        font-size: 20px;
    }

    .horaires_categories table td:first-child {
        flex-basis: 130px;
        margin: 0 0 0 30px;
        padding: 0;
        flex-grow: 1;
    }

    .horaires_categories table td:nth-child(2) {
        flex-grow: 1;
        padding-left: 40px;
    }

    .horaires_categories .categories-detail {
        left: 130px;
    }

    .horaires_station-title p:not(:first-child) {
        order: 0;
        flex-basis: auto;
    }

    .horaires_station-content > table tr {
        flex-wrap: nowrap;
        border: 1px solid lightgrey;
        padding: 0 0px 0 0;
    }

    .horaires_station-content > table td:first-child {
        flex-basis: 130px;
        border: none;
        margin-left: 20px;
    }

    .horaires_station-content > table td:nth-child(2) {
        display: inline-block;
        line-height: 30px;
        font-size: 13px;
        align-items: center;
        flex-grow: 2;
        padding-left: 0;
    }

    .ui-state-default a {
        font-size: 22px !important;
    }

    .horaires_information {
        width: 450px;
    }
}

.ob-container {

}

.ob-container .label {
    font-family: inherit;
    background-color: inherit;
}

.ob-container h3 {
    float: none;
}

@media screen and (min-width: 768px) {
    .bootstrap-pxl .ob-container .row.ob-message.active,.bootstrap-pxl .ob-container .ob-main-container.show-message .row.ob-message {
        height: 98px;
    }
}

.zone4 .f-nombreskieurs a.button { display: block;background-color: #fff;color: #3c3c3c;font-size: 14px !important;font-family: OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;text-transform: uppercase;vertical-align: middle;padding: 30px 30px 34px;position: relative; background: url(/images/select.png) no-repeat right #fff;background-size: 19px;}
.zone4 .f-nombreskieurs .f-dropdown.open:before,.zone4 .f-nombreskieurs .f-dropdown.open:after { border-color: #fff #fff #fff #fff;    border: inset 0px;position: static; }
.zone4 .f-nombreskieurs .f-dropdown { border:1px solid #fff;margin-top: 0px;width:auto;padding: 0 8px;max-width: none; }
.zone4 .f-nombreskieurs .f-dropdown li:hover, .f-dropdown li:focus { background: #fff; }
.zone4 .f-nombreskieurs .f-dropdown li { border-bottom: 1px solid #aeabab;text-align: left; }
.zone4 .f-nombreskieurs .f-dropdown li:last-child { border-bottom: none; }
.zone4 .f-nombreskieurs .f-dropdown li span:nth-of-type(1) { font-size: 14px;top: 1px;position: relative;margin-left:-3px; }
.zone4 .f-nombreskieurs .f-dropdown li span:nth-of-type(2) { font-size: 10px;margin-right: 6px;color:#738294;top:1px;position: relative;}
.zone4 .f-nombreskieurs .f-dropdown li:nth-of-type(2) span:nth-of-type(2) { margin-right:12px;}
.zone4 .f-nombreskieurs .f-dropdown li .btn-quantite { display: inline-block;float: right;
    margin-top: 7px; }
.zone4 .f-nombreskieurs .f-dropdown li .plus-minus-input { display: inline-block; }
.zone4 .f-nombreskieurs .f-dropdown li .plus-minus-input {-webkit-align-items: center;-ms-flex-align: center;align-items: center;width: 100%;}
.zone4 .f-nombreskieurs .f-dropdown li .plus-minus-input .input-group-field { text-align: center;border: 1px solid #fff;padding: 0;width: 19px;font-size: 15px!important;font-weight: bold;}
.zone4 .f-nombreskieurs .f-dropdown li .plus-minus-input input[type=number].input-group-field {-moz-appearance: textfield;}
.zone4 .f-nombreskieurs .f-dropdown li .plus-minus-input input::-webkit-inner-spin-button,
.zone4 .f-nombreskieurs .f-dropdown li .plus-minus-input input::-webkit-outer-spin-button { -webkit-appearance: none;	margin:0; }
.zone4 .f-nombreskieurs .f-dropdown li .plus-minus-input input::-o-inner-spin-button,
.zone4 .f-nombreskieurs .f-dropdown li .plus-minus-input input::-o-outer-spin-button { -o-appearance: none;	margin:0 }
.zone4 .f-nombreskieurs .f-dropdown li .plus-minus-input .input-group-field::-webkit-inner-spin-button,
.zone4 .f-nombreskieurs .f-dropdown li .plus-minus-input .input-group-field ::-webkit-outer-spin-button {-webkit-appearance: none;appearance: none; }
.zone4 .f-nombreskieurs .f-dropdown li .plus-minus-input .input-group-button .circle { border-radius: 50%;padding: 0.5px 4px 1px 4.6px;background-color: #fff;margin-bottom: 0;border: 1px solid #e0dfdf;height: 23px; }
.zone4 .f-nombreskieurs .f-dropdown li .plus-minus-input .input-group-button .circle i.fa-minus { font-size: 15px;color: #3c3c3c;vertical-align: middle; }    
.zone4 .f-nombreskieurs .f-dropdown li .plus-minus-input .input-group-button .circle i.fa-plus { font-size: 15px;color: #3c3c3c;vertical-align: middle;margin-bottom: 2px; }
.zone4 .f-nombreskieurs .f-dropdown li .input-group-button { width: 17px;display: inline-block; margin: 0 2px; }


@media only screen and (min-width: 40.063em) and (max-width: 64em) {
.zone4 .f-nombreskieurs a.button { height: 48px;padding-top: 16px;top: 1px;font-size: 12px!important }
}

@media only screen and (max-width: 40em) {
.zone4 .f-nombreskieurs .f-dropdown li .btn-quantite { float: right;margin-top: 9px;margin-right: 25px; }
.zone4 .f-nombreskieurs .f-dropdown li span:nth-of-type(2) { margin-left: 10px; }	.zone4 .f-nombreskieurs a.button { top: 0px;text-align: left;padding: 14px 8px;border: 1px solid #b0c9e6;height: 50px; }
.zone4 .f-nombreskieurs .f-dropdown.open { position: static!important;margin-top:-18px 0 10px 0; width: 100%!important; }
}

.reveal-modal {margin-left:-42%;top: 5%!important;min-width: 66%;height: 92%!important;overflow: auto;border: 5px solid #748393;position: fixed;left: calc((100%-164px) / 2)!important;width: 84%;} 
@media only screen and (max-width: 40em) {
	.reveal-modal {top:-13px!important;width: 105%;height: 109%!important;overflow: scroll;left: -7px!important;position: fixed;margin-left: 0px;}
}
@media only screen and (max-width: 375px) {
	.reveal-modal .contact-formulaire iframe { transform: scale(0.72);margin-left: -41px; }
	.reveal-modal .boutonformulaire { font-size: 15px; }
}
#detaildossier #montab.r-fond1{  background-color: transparent;}



#listeTcDiff .r-horaires-jour-zone { padding-top: 0px; }
#listeTcDiff .r-horaires-jour-zone .r-horaires-jour-titre:nth-of-type(1) { padding: 0; }

#dureeDepart { margin-top: 30px; }
#dureeDepart > table tbody tr td:nth-of-type(1) { padding: 0; }
#dureeDepart > table tbody tr td:nth-of-type(1) img { max-width: 35px; }
#dureeDepart #divDureeSejour p select#nb_jours { float: left;min-width:100%;padding-left: 9px }

.listepoi-n-resultat-photo .resultat-prixduree {padding: 5px;line-height: 16px;font: 12px RobotoCondensedLight, Arial, Helvetica, Sans-serif;}
.listepoi-n-resultat-photo .resultat-prixduree .nouveauprix {font: 18px RobotoCondensedBold, Arial, Helvetica, Sans-serif;line-height: 18px;}



#panierm table.r-fond1 tbody tr:nth-of-type(1) { background-color: #ed1c24; }
#panierm .colSejour { width: 100%;padding: 7px 8px;position: relative;left: -9px; }
#panierm .colNbPers { position: relative;left: -18px;top: 0px;padding: 0 10px; }
#panierm .colPrix { position: relative;padding: 0 25px 0 26px;left: 5px; }
#panierm a.panier-bouton-valid {background-color: #929292;margin-bottom: 5px;display: inline-block;vertical-align: top;}



#form_client #formulaire-rm .rm-formulaire-promos .rm-formulaire-promotions { background-color: transparent;padding: 0; }
#form_client #formulaire-rm .liste-titre-zone .liste-titre { background-color: transparent; }
#form_client #formulaire-rm .rm-formulaire-promotions .liste-tableau-titre1 { border-right: 0px solid #ececec; }
#form_client #formulaire-rm .rm-formulaire-promotions .liste-tableau-titre2 { border-left: 0px solid #ececec; }
#form_client #formulaire-rm .forfait .skieur1 { font-weight: bold;font-size: 16px; }
#form_client #formulaire-rm .forfait .skieur { background-color: #ececec;padding: 15px;margin-bottom: 20px; }
#form_client #formulaire-rm .forfait .skieur .infosclient-formulaire label.inline { margin-bottom: 0px; }
#form_client #formulaire-rm .forfait .skieur .infosclient-ligne .infosclient-formulaire img.documents_ageproof { width: 100px; }
#form_client #formulaire-rm .forfait .skieur .infosclient-formulaire label.file { display: inline-block;min-width: 60%; }


#detaildossier > table > tbody > tr {  border: none; }
#detaildossier > table:nth-of-type(1) {text-align: right;background-color: #efefef;}
#detaildossier > table:nth-of-type(1) tr { display: inline-flex;vertical-align: top; }
#detaildossier > table:nth-of-type(1) tr:nth-of-type(1) { text-align: left;float: left; }
#detaildossier > table:nth-of-type(1) tr:nth-of-type(1) td:nth-of-type(1) { background-color: #b0c9e7;}
#detaildossier .r-fond1,#detaildossier .r-fondspecial { background-color: #FFF;}
#detaildossier .r-fondspecial .r-textespecialgras { color:#494949;}
#detaildossier #montab4 .r-fond2 .r-importantgras { text-transform: uppercase;color: #494949;border-bottom: 2px solid #000;padding-bottom: 5px; }
#detaildossier td.r-fond2 { background-color: #FFF; }
#detaildossier tr:last-child .r-fond3 .r-importantgras {float: right;}
#detaildossier .r-fond3 { background-color: #efefef;padding: 15px ;}

@media only screen and (max-width: 40em) {
	#detaildossier > table:nth-of-type(1) tr { display: block;width: 100%; }
	#detaildossier .r-fond3 { padding: 10px;text-align: left; }
	#detaildossier .r-fond3 .r-importantgras { float: inherit; }
}

#panierm form > table > tbody > tr { border: none; }
#panierm .r-fond2,#panierm td { background:#FFF;padding:5px; }
#panierm .r-fond2 { border-bottom: 2px solid #000; }
#panierm .panier_total { background-color: #e2001a;color:#FFF; }
#panierm .colSejour { padding: 0; left: -20px;}
#panierm .colSejour .r-textespecialgras {  font-size: 21px; font-weight: bold;line-height: 25px;color: #494949;text-transform: uppercase; }
#panierm .r-importantgras { text-transform: uppercase; color: #494949;}
#panierm .r-fondspecial { background-color: #ffffff !important; }
#panierm .r-textespecialgras { color:#494949; }
#panierm table.r-fond1 tbody tr:nth-of-type(1) { background-color: #ffffff }

@media only screen and (max-width: 40em) {
#panierm .colSejour .r-textespecialgras { font-size:14px;line-height:15px; }
}

.infosclient-bouton a.r-bouton2:focus { color: #FFF; }
@media only screen and (max-width: 641px) {
    #zonelogin .recap-produit .img-recap { width: 100%; }
    #zonelogin .recap-produit h2 { text-align: center; }
}
.retour-liste a {
    display: block;
    border-bottom: 1px solid #e2001a;
    padding-bottom: 0px;
    color: #e2001a;
    font-size: 16px;
    line-height: 18px;
    text-transform: uppercase;
}
.fiche-entete-gauche .produit {
    display: block;
    padding-top: 5px;
    color: #b0c9e6;
    font: 34px OpenSansExtraBold, Arial, Helvetica, Sans-serif
}

/* D�but des styles pour le listing events */

.titre-event {
	margin-bottom: 0px;
}

.titre-event h1 {
	line-height: 42px;
	text-transform: uppercase;
}

.titre-event p {
	line-height: 18px;
	font-size: 13px;
	width: 75%;
}

.ui-datepicker td a:hover { color: #e10019; }

.listepoi-event {
	padding: 0px 30px;
}

.listepoi-event .affichage {
	font-size: 15px;
	font-weight: bold;
	text-transform: uppercase;
	text-align: right;
	border-bottom: 4px solid #3b3b3b;
	padding: 0 0 5px 0;
	margin-top: -25px;
}

.listepoi-event .affichage a {
	color: #858484;
	margin: 0 10px;
}

.listepoi-event .affichage a.active,
.listepoi-event .affichage a:hover {
	color: #e10019;
}

.listepoi-event .affichage a:last-child {
	margin: 0;
}


.listepoi-event .grille {
	margin-top: 20px;
	padding: 0;
}

.listepoi-event .grille > span,
.listepoi-event .liste > span {
	font-family: "Myriad Pro";
	font-size: 19px;
	font-style: italic;
}

.listepoi-event .grille .row {
	padding: 10px 6px;
}

.listepoi-event .liste .row {
	padding: 0px 0px 20px;
    animation: animationFrames ease 1s;
	animation-iteration-count: 1;
	transform-origin: 50% 50%;
	animation-fill-mode:forwards;
	-webkit-animation: animationFrames ease 1s;
	-webkit-animation-iteration-count: 1;
	-webkit-transform-origin: 50% 50%;
	-webkit-animation-fill-mode:forwards;
	-moz-animation: animationFrames ease 1s;
	-moz-animation-iteration-count: 1;
	-moz-transform-origin: 50% 50%;
	-moz-animation-fill-mode:forwards; /*FF 5+*/
	-o-animation: animationFrames ease 1s;
	-o-animation-iteration-count: 1;
	-o-transform-origin: 50% 50%;
	-o-animation-fill-mode:forwards;
	-ms-animation: animationFrames ease 1s;
	-ms-animation-iteration-count: 1;
	-ms-transform-origin: 50% 50%;
	-ms-animation-fill-mode:forwards;
}

.listepoi-event .grille .row div {
	padding: 0 9px 20px;
}

.listepoi-event .grille .row div:last-child {
    float: left;
}

.listepoi-event .liste .row div {
	padding: 10px 12px 3px;
}

.listepoi-event .grille .row div:hover,
.listepoi-event .liste .row div:hover {
	// cursor: pointer;
}

.listepoi-event .grille .row div:hover .desc,
.listepoi-event .grille .row div:hover .desc2,
.listepoi-event .grille .row div:hover .desc,
.listepoi-event .liste .row div:hover .desc,
.listepoi-event .liste .row div:hover .desc2,
.listepoi-event .liste .row div:hover span.type
{
	background-color: #d4d4d4;
}

span.date,
span.heure,
span.type {
	height: 25px;
}

.listepoi-event .grille div span.date,
.listepoi-event .liste div span.date {
	background-color: #e10019;
	text-transform: uppercase;
	color: #fff;
	padding: 2px 2px;
	font-size: 15px;
	text-align: center;
}

.listepoi-event .grille div span.heure,
.listepoi-event .liste div span.heure {
	background-color: rgba(255, 255, 255, 0.65);
	text-transform: uppercase;
	color: #4b4b4b;
	padding: 3px 15px;
	font-size: 15px;
	text-align: center;
    position: absolute;
    top: 25px;
    left: 9px;
    z-index: 9;
    font-weight: bold;
    width: auto;
}

.listepoi-event .liste div span.heure {
    top: 35px;
}

.listepoi-event .grille div span.type {
	text-transform: uppercase;
	color: #fff;
	padding: 2.5px 5px;
	font-size: 15px;
	text-align: center;
	display: block;
}

.listepoi-event .liste div span.type {
	text-transform: uppercase;
	color: #fff;
	padding: 2.5px 5px;
	font-size: 15px;
	text-align: center;
	display: block;
    background-color: #efefef;
}

.listepoi-event .grille div span.type.animation {
	background-color: #bcbaba;
}

.listepoi-event .grille div span.type.topevent,
.listepoi-event .liste div span.type.topevent
{
	background-color: #e10019;
}

.listepoi-event .grille div span.type.event,
.listepoi-event .liste div span.type.event {
	background-color: #646262;
}

.listepoi-event .liste .image {
	padding: 0!important;
	height: 162px;
	text-align: center;
	background-color: #d0d0d0;
    overflow: hidden;
}

/*
.listepoi-event .liste .image img {
	height: 100%; 
}
*/

.listepoi-event .grille .image {
	padding: 0!important;
	height: 167px;
	text-align: center;
	background-color: #d0d0d0;
	/*min-height: 170px;
	max-height: 153px;
	width: 100%;*/
	overflow: hidden;
}

.listepoi-event .grille div > img {
	text-align: center;
    height: auto;
  
}

.listepoi-event .grille div .desc {
	background-color: #efefef;
	padding: 10px;
	height: 85px;
	display: block;
	position: relative;
	float: left;
}

.listepoi-event .liste div .desc {
	background-color: #efefef;
	padding: 17px;
	height: 125px;
	display: block;
	float: right;
}

.listepoi-event .grille div.top .desc,
.listepoi-event .grille div.top .desc2,
.listepoi-event .liste div.top .desc,
.listepoi-event .liste div.top .desc2,
.listepoi-event .liste .row div.top span.type {
	background-color: #e10019;
}

.listepoi-event .grille .row div.top:hover .desc,
.listepoi-event .grille .row div.top:hover .desc2,
.listepoi-event .liste .row div.top:hover .desc,
.listepoi-event .liste .row div.top:hover .desc2,
.listepoi-event .liste .row div.top:hover span.type{
	background-color: #bf0116;
}

.listepoi-event .grille div.top .desc span:nth-of-type(1),
.listepoi-event .grille div.top .desc span:nth-of-type(2),
.listepoi-event .grille div.top .desc2 span:nth-of-type(1),
.listepoi-event .grille div.top .desc2 span:nth-of-type(2),
.listepoi-event .liste div.top .desc span:nth-of-type(1),
.listepoi-event .liste div.top .desc span:nth-of-type(2),
.listepoi-event .liste div.top .desc2 span:nth-of-type(1),
.listepoi-event .liste div.top .desc2 span:nth-of-type(2) {
	color: #fff;
}

.listepoi-event .grille div .desc span:nth-of-type(1),
.listepoi-event .liste div .desc span:nth-of-type(1) {
	text-transform: uppercase;
	display: block;
	font-weight: bold;
	font-size: 13px;
	line-height: 17px;
	color: #494949;
	overflow: hidden;
	height: auto;
	max-height: 34px;
}

.listepoi-event .grille div .desc span:nth-of-type(2),
.listepoi-event .liste div .desc span:nth-of-type(2) {
	font-size: 11px;
	display: block;
	margin-top: 2px;
	color: #494949;
/*	overflow: hidden;*/
	height: 38px;
	line-height: 17px;
}

.listepoi-event .grille div .desc .ellipsisText {
    display: block;
    display: -webkit-box;
    max-height: 4em;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;

}

.listepoi-event .grille div .desc2 {
	background-color: #efefef;
	border-top: 1px solid rgba(43, 41, 42, 0.25);
	height: 23px;
	padding: 3px 10px;
}

.listepoi-event .liste div .desc2 {
	background-color: #efefef;
	height: 37px;
	padding: 11px 17px;
	float: right;
}

.listepoi-event .grille div .desc2 span:nth-of-type(1),
.listepoi-event .liste div .desc2 span:nth-of-type(1) {
	float: left;
	font-size: 11px;
	font-style: italic;
	font-weight: bold;
    overflow-x: hidden;
    width: 50%;
    text-overflow: ellipsis;
    white-space: pre;
}

.listepoi-event .grille div .desc2 span:nth-of-type(2) {
	float: right;
	font-size: 11px;
	font-style: italic;
	font-weight: bold;
    width: 50%;
    text-align: right;
    text-overflow: ellipsis;
    white-space: pre;
    overflow-x: hidden;
}

.listepoi-event .liste div .desc2 span:nth-of-type(2) {
	float: right;
	font-size: 11px;
	font-style: italic;
	font-weight: bold;
	vertical-align: middle;
	margin-top: -3px;
	right: 0px;
	position: relative;
}

.listepoi-event .liste div .desc2 a {
	float: right;
	background-color: #e10019;
	color: #fff;
	padding: 6px 15px;
	text-transform: uppercase;
	font-size: 10px;
	top: -7px;
	position: relative;
	right: -66px;
	display: none;
}

.listepoi-event .liste div.top .desc2 a {
	background-color: #fff;
	color: #e10019;
}

.listepoi-event .grille span img {
	display: inline-block;
	width: 11px;
	margin-top: -3px;
}

.listepoi-event .liste span img {
	display: inline-block;
	width: 18px;
	margin-top: -1px;
	vertical-align: middle;
	height: auto;
}

.listepoi-event .grille div.top span img {
	background-color: transparent;
}

.listepoi-event .grille .row {
	perspective: 1300px;
    animation: animationFrames ease 1s;
	animation-iteration-count: 1;
	transform-origin: 50% 50%;
	animation-fill-mode:forwards;
	-webkit-animation: animationFrames ease 1s;
	-webkit-animation-iteration-count: 1;
	-webkit-transform-origin: 50% 50%;
	-webkit-animation-fill-mode:forwards;
	-moz-animation: animationFrames ease 1s;
	-moz-animation-iteration-count: 1;
	-moz-transform-origin: 50% 50%;
	-moz-animation-fill-mode:forwards; /*FF 5+*/
	-o-animation: animationFrames ease 1s;
	-o-animation-iteration-count: 1;
	-o-transform-origin: 50% 50%;
	-o-animation-fill-mode:forwards;
	-ms-animation: animationFrames ease 1s;
	-ms-animation-iteration-count: 1;
	-ms-transform-origin: 50% 50%;
	-ms-animation-fill-mode:forwards;
    
}

@keyframes animationFrames{
  0% {
    opacity:0;
    transform:  translate(0px,10px)  ;
  }
  100% {
    opacity:1;
    transform:  translate(0px,0px)  ;
  }
}

@-moz-keyframes animationFrames{
  0% {
    opacity:0;
    -moz-transform:  translate(0px,10px)  ;
  }
  100% {
    opacity:1;
    -moz-transform:  translate(0px,0px)  ;
  }
}

@-webkit-keyframes animationFrames {
  0% {
    opacity:0;
    -webkit-transform:  translate(0px,10px)  ;
  }
  100% {
    opacity:1;
    -webkit-transform:  translate(0px,0px)  ;
  }
}

@-o-keyframes animationFrames {
  0% {
    opacity:0;
    -o-transform:  translate(0px,10px)  ;
  }
  100% {
    opacity:1;
    -o-transform:  translate(0px,0px)  ;
  }
}

@-ms-keyframes animationFrames {
  0% {
    opacity:0;
    -ms-transform:  translate(0px,10px)  ;
  }
  100% {
    opacity:1;
    -ms-transform:  translate(0px,0px)  ;
  }
}

.listepoi-event .grille .row .block_click {
	-webkit-animation: fadeIn 0.65s ease forwards;
	animation: fadeIn 0.65s ease forwards;
}

@-webkit-keyframes fadeIn {
	0% { }
	100% { opacity: 1; }
}

@keyframes fadeIn {
	0% { }
	100% { opacity: 1; }
}

.listepoi-event .liste {
	margin-top: 20px;
	padding: 0 16px 0 3px;
	height: 840px;
	overflow: auto;
}

.listepoi-event .listepoi-n-carte {
	padding: 20px 0 0 30px;
	height: 760px;
}

.listepoi-event .listepoi-n-carte iframe {
	height: 93%;
}

.listepoi-event .listepoi-carte a {
	background: #738294;
	color: #fff;
	text-transform: uppercase;
	padding: 8px 19px;
	margin: 10px 0;
	width: auto;
	font: 14px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
	height: 35px;
}

.listepoi-event .listepoi-carte a:hover {
	background-color: #5b6674;
}

.listepoi-event a.loadmorenews, .listing-news a.loadmorenews {
    display: table;
    margin: 0 auto 20px;
    text-align: center;
    padding: 10px;
    width: auto;
    text-transform: uppercase;
    color: #e3001b;
    border: 1px solid #e3001b;
    border-radius: 4px;
    height: 43px;
    clear: both;
}

.listepoi-event a.loadmorenews:hover, .listing-news a.loadmorenews:hover {
    border: 2px solid #e3001b;
}

.fixedsticky {
	position: -webkit-sticky;
	position: -moz-sticky;
	position: -ms-sticky;
	position: -o-sticky;
	position: sticky;
	top: 0;
}
/* When position: sticky is supported but native behavior is ignored */
.fixedsticky-withoutfixedfixed .fixedsticky-off,
.fixed-supported .fixedsticky-off {
	position: static;
}
.fixedsticky-withoutfixedfixed .fixedsticky-on,
.fixed-supported .fixedsticky-on {
	position: fixed;
}
.fixedsticky-dummy {
	display: none;
}
.fixedsticky-on + .fixedsticky-dummy {
	display: block;
}

@media only screen and (max-width: 64em) {  
.fixedsticky { position: static; }  
}

a.programme:hover {
	color: #fff;
	text-decoration: underline;
}

.programme {
	position: absolute;
	bottom: 0px;
	right: 6%;
	background: rgba(225, 0, 25, 0.68);
	padding: 16px;
	color: #fff;
	width: 240px;
}

.programme i {
	font-size: 24px;
	float: left;
	margin-right: 10px;
	vertical-align: middle;
}

.programme div span:nth-of-type(1) {
	text-transform: uppercase;
	font-weight: bold;
	display: block;
	line-height: 11px;
}

.programme div span:nth-of-type(2) {
	font-size: 11px;
	line-height: 13px;
}


/* Fin des styles pour le listing events*/

/* D�but des styles pour la fiche events */
#fiche-event { margin-top: 20px; }

#fiche-event a.back {
	color: #3b3b3b;
	text-transform: uppercase;
	font-size: 17px;
	margin: 20px 0 10px;
	display: block;
}

#fiche-event .fiche-diapo .slider-for {
	background-color: #bcbbbb;
}

#fiche-event .fiche-diapo .slider-for img {
	margin: 0 auto;
}

#fiche-event .fiche-diapo .slick-prev {
	left: 20px;
}

#fiche-event .fiche-diapo .slick-next {
	right: 20px;
}

#fiche-event .fiche-diapo .slick-prev:before {
	content: '\F104';
	font-family: 'FontAwesome';
	font-size: 35px;
	font-weight: bold;
}

#fiche-event .fiche-diapo .slick-next:before {
	content: '\F105';
	font-family: 'FontAwesome';
	font-size: 35px;
	font-weight: bold;
}

#fiche-event .fiche-diapo .slider-nav .slick-track {
	text-align: center;
	margin-bottom: 10px;
	background: #fff;
}

#fiche-event .fiche-diapo .slider-nav .slick-slide {
	width: 50px!important;
	margin: 7px 6px;
	cursor: pointer;
	float: initial;
	display: inline-block;
}

#fiche-event .fiche-diapo .slider-nav .slick-slide:hover,
#fiche-event .fiche-diapo .slider-nav .slick-slide.slick-actived {
	box-shadow: 0px 0px 0px 2px #f18793;
	-moz-box-shadow: 0px 0px 0px 2px #f18793;
	-webkit-box-shadow: 0px 0px 0px 2px #f18793;
	-o-box-shadow: 0px 0px 0px 2px #f18793;
}

#fiche-event .fiche-diapo .slider-nav .slick-cloned {
	display: none
}

#fiche-event .slick-slide {
    position: relative;
/*
    padding-bottom: 15.25%;
    padding-top: 0px;
    height: 0;
*/
}

#fiche-event .slick-slide iframe,  
#fiche-event .slick-slide object,  
#fiche-event .slick-slide embed {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

#fiche-event .contenu-fiche {
	margin-bottom: 50px;
}

#fiche-event .contenu-fiche p.columns,
#fiche-event .contenu-fiche span.columns {
	padding: 0
}

#fiche-event .contenu-fiche span.date {
	background-color: #e10019;
	text-transform: uppercase;
	color: #fff;
	padding: 4px 5px;
	font-size: 12px;
	text-align: center;
}

#fiche-event .contenu-fiche span.heure {
	background-color: #868484;
	text-transform: uppercase;
	color: #fff;
	padding: 4px 5px;
	font-size: 12px;
	text-align: center;
}

#fiche-event .contenu-fiche span.type {
	text-transform: uppercase;
	color: #fff;
	padding: 2.5px 5px;
	font-size: 15px;
	text-align: center;
	display: block;
}

#fiche-event .contenu-fiche span.type.animation {
	background-color: #bcbaba;
}

#fiche-event .contenu-fiche h1.title {
	text-transform: uppercase;
	font-weight: bold;
	font-size: 29px;
	font-family: "OpenSansExtraBold";
	display: block;
	margin-top: 20px;
	padding: 0;
	line-height: 26px;
	color: #494949;
}

#fiche-event .contenu-fiche span.title2 {
	text-transform: uppercase;
	font-weight: bold;
	font-size: 25px;
	display: block;
	padding: 0;
}

#fiche-event .contenu-fiche h3 { 
    text-align: left;
}

#fiche-event .contenu-fiche ul {
    clear: both;
}

#fiche-event .articles .title, #fiche-event .autres-events .title {
    margin: 3px 0;
}

#fiche-event .contenu-fiche p {
	margin-top: 10px;
	line-height: 19px;
}

#fiche-event .contenu-fiche span.sub-title i {
	font-size: 20px;
	margin-right: 5px;
}

#fiche-event .contenu-fiche span.sub-title {
	font-size: 18px;
	margin:20px 0;
}

#fiche-event .contenu-fiche p:last-child {
	float: left;
}

#fiche-event .packages {
	padding: 0;
	margin-bottom: 50px;
}

#fiche-event .packages .title {
	text-transform: uppercase;
	font-weight: bold;
	font-size: 25px;
	font-family: "OpenSansExtraBold";
	display: block;
	margin: 20px 0 30px;
	padding: 0;
	line-height: 20px;
	color: #494949;
}

#fiche-event .packages > div {
	padding: 10px 8px;
	float: left;
	border-bottom: 2px solid #bbbaba;
}

#fiche-event .packages > div:hover {
	background-color: #f3f1f1;
}

#fiche-event .packages div img {
	padding: 0;
}

#fiche-event .packages div div span {
	font-weight: bold;
	font-size: 15px;
	color: #afc9e6;
	padding: 0;
	height: 24px;
	overflow: hidden;
}

#fiche-event .packages div > span {
	font-weight: bold;
	font-size: 15px;
	color: #afc9e6;
	padding: 17px 0;
}

#fiche-event .packages div div p {
	font-size: 11px;
	line-height: 16px;
	margin: 0;
	padding: 0
}

#fiche-event .packages div .bouton a {
	background-color: #e10019;
	color: #fff;
	padding: 7px 23%;
	text-transform: uppercase;
	font-size: 13px;
	margin: 13px 11px;
	float: left;
}

#fiche-event .articles {
	padding: 0;
	margin-bottom: 50px;
	background: #f0f0f0;
	padding: 15px 0 15px 15px;
	max-width: 101% !important;
}

#fiche-event .articles .title {
	text-transform: uppercase;
	font-weight: bold;
	font-size: 25px;
	font-family: "OpenSansExtraBold";
	float: left;
	color: #494949;
	line-height: normal;
}

#fiche-event .articles .title-2 {
	text-transform: uppercase;
	font-weight: bold;
	font-size: 23px;
	float: inherit;
	margin-left: 6px;
	line-height: 41px;
}

#fiche-event .articles a.voirplus {
	text-transform: uppercase;
	font-weight: bold;
	margin-left: 50px;
	color: #494949;
	margin: 9px 0 0 50px;
	display: inline-block;
}

#fiche-event .articles a.voirplus:hover {
	color: #e10019;
}

#fiche-event .articles .slider-articles {
	padding: 0;
	margin-top: 20px;
}

#fiche-event .articles .slider-articles a {
	padding: 10px;
}

#fiche-event .articles .slider-articles a:hover {
	background-color: rgba(73, 73, 73, 0.12);
	color: #494949;
}

#fiche-event .articles .slider-articles a img {
	width: 100%;
}

#fiche-event .articles .slider-articles a span {
	text-transform: uppercase;
	color: #494949;
	margin-top: 5px;
	display: block;
	line-height: 16px;
	font-size: 13px;
	height: 48px;
	overflow: hidden;
}

#fiche-event .articles .slider-articles .slick-prev:before {
	content: '\F104'!important;
	font-family: 'FontAwesome';
	font-size: 35px;
	font-weight: bold;
	color: #494949!important
}

#fiche-event .articles .slider-articles .slick-next:before {
	content: '\F105'!important;
	font-family: 'FontAwesome';
	font-size: 35px;
	font-weight: bold;
	color: #494949!important
}

#fiche-event .articles .slider-articles .slick-prev {
	left: 0px!important;
	height: 180px;
	top: 0px;
	margin: 0;
	width: 25px;
	background: rgba(240, 240, 240, 0.89);
}

#fiche-event .articles .slider-articles .slick-prev.slick-disabled {
	opacity: 0;
}

#fiche-event .articles .slider-articles .slick-next {
	right: -1px!important;
	height: 180px;
	top: 0px;
	margin: 0;
	width: 25px;
	background: rgba(240, 240, 240, 0.89);
}

#fiche-event .autres-events {
	margin-bottom: 80px;
	padding: 0 0 30px 0;
}

#fiche-event .autres-events .title {
	color: #494949;
	line-height: normal;
	text-transform: uppercase;
	font-weight: bold;
	font-size: 25px;
	font-family: "OpenSansExtraBold";
	float: left;
}

#fiche-event .autres-events .title-2 {
	text-transform: uppercase;
	font-weight: bold;
	font-size: 23px;
	margin-left: 6px;
	line-height: 41px;
}

#fiche-event .autres-events a.voirplus {
	text-transform: uppercase;
	font-weight: bold;
	margin-left: 50px;
	color: #494949;
	margin: 9px 0 0 50px;
	display: inline-block;
}

#fiche-event .autres-events a.voirplus:hover {
	color: #e10019;
}

#fiche-event .autres-events .liste-events {
	padding: 0;
	margin-top: 30px;
}

#fiche-event .autres-events .liste-events div {
	padding: 0px 10px 10px 10px;
	margin-bottom: 7px;
}

#fiche-event .autres-events .liste-events div:last-child {
	float: left;
}

#fiche-event .autres-events .liste-events .des {
	padding: 0;
}

#fiche-event .autres-events .liste-events span.date {
	background-color: #e10019;
	text-transform: uppercase;
	color: #fff;
	padding: 4px 5px;
	font-size: 12px;
	text-align: center;
}

#fiche-event .autres-events .liste-events img {
	background-color: #fff;
	text-align: center;
	padding: 0;
	overflow: hidden;
}

#fiche-event .autres-events .liste-events .desc span:nth-of-type(1) {
	text-transform: uppercase;
	display: block;
	font-weight: bold;
	font-size: 13px;
	line-height: 15px;
	height: auto;
	overflow: hidden;
	max-height: 47px;
}

#fiche-event .autres-events .liste-events .desc span:nth-of-type(2) {
	font-size: 11px;
	line-height: 15px;
	padding-right: 8px;
	display: block;
	height: 33px;
	overflow: hidden;
}

#fiche-event .autres-events .liste-events .desc {
	height: 93px;
	position: relative;
}


#fiche-event .autres-events .liste-events .desc:hover span, 
#fiche-event .autres-events .liste-events > div:hover {
color: #e10019;
transition: 0.2s;
cursor: pointer;
}
	

#fiche-event .autres-events .liste-events .desc a {
	position: absolute;
	bottom: 5px;
	right: 5px;
	border: 2px solid;
	border-radius: 30px;
	padding: 0px 4px 0px 4px;
}

#fiche-event .autres-events .liste-events .desc a i {
	font-size: 13px;
}

#fiche-event .fiche-poi-n-contenu-prix {
	padding: 25px;
	margin-bottom: 5px;
}

#fiche-event .fiche-poi-n-contenu-prix .bouton a {
	margin-top: 0;
}

#fiche-event .fiche-poi-n-contenu2 {
	margin-top: 75px;
}

#fiche-event .fiche-poi-informations {
	background: #f0f0f0;
	margin-bottom: 5px;
}

#fiche-event .fiche-poi-informations .title {
	text-transform: uppercase;
	font-weight: bold;
	font-size: 25px;
	font-family: "OpenSansExtraBold";
	display: block;
	padding: 25px 25px 10px 25px;
	margin-bottom: 10px;
}

#fiche-event .fiche-poi-informations iframe {
	width: 100%;
	height: 300px;
	padding: 0px 25px;
}

#fiche-event .fiche-poi-informations .infos {
	margin: 10px 0;
	padding: 10px 25px;
}

#fiche-event .fiche-poi-informations .infos i {
	font-size: 25px;
	margin: 10px 10px 5px 0;
	vertical-align: middle;
}

#fiche-event .fiche-poi-informations .infos i:first-child {
	margin: 10px 10px 5px 4px;
}

#fiche-event .fiche-poi-informations .infos span {
	font-size: 13px;
	line-height: 15px;
	vertical-align: middle;
	width: 151px;
	display: inline-block;
	margin-top: 4px;
}

#fiche-event .fiche-poi-informations .infos span a {
	color: #454545;
	font-weight: 100;
}

#fiche-event .fiche-poi-informations .infos span a:hover {
	color: #e10019;
}

#fiche-event .fiche-poi-informations .liens-reseaux {
	padding: 10px 25px 25px 25px;
}

#fiche-event .fiche-poi-informations .liens-reseaux i {
	font-size: 30px;
	margin: 0 5px;
}

#fiche-event .fiche-poi-informations .liens-reseaux img {
	width: 36px;
	margin: -14px 4px 0 0;
}

#fiche-event .fiche-poi-informations .liens-reseaux i:first-child {
	margin: 0 5px 0 0;
}

#fiche-event .fiche-poi-informations .liens-reseaux a i.fa-facebook-official {
	color: #3b5998;
}

#fiche-event .fiche-poi-informations .liens-reseaux a i.fa-twitter {
	color: #33ccff;
}

#fiche-event .fiche-poi-informations .liens-reseaux a i.fa-youtube-play {
	color: #ff3333;
}

#fiche-event .fiche-poi-informations .liens-reseaux a i.fa-instagram {
	color: rgba(255, 251, 0, 1);
}

#fiche-event .fiche-poi-informations .liens-reseaux a i.fa-linkedin-square {
	color: #0e76a8
}

#fiche-event .fiche-poi-n-contenu-dates {
	background: #738295;
	padding: 25px;
}

#fiche-event .fiche-poi-n-contenu-dates .title {
	text-transform: uppercase;
	font-weight: bold;
	font-size: 25px;
	font-family: "OpenSansExtraBold";
	display: block;
	padding: 0;
	margin-bottom: 10px;
	color: #fff;
    /*-ms-word-break: break-all;
    word-break: break-all;*/
}

#fiche-event .fiche-poi-n-contenu-dates .texte {
	text-transform: uppercase;
	color: #fff;
	margin-top: 20px;
	font-size: 15px;
}

#fiche-event a.ajout-calendrier {
	color: #454545;
	font-weight: 100;
	padding: 25px;
	display: block;
}

#fiche-event a.ajout-calendrier i {
	font-size: 27px;
	margin-right: 10px;
	vertical-align: -3px;
}

#fiche-event a.ajout-calendrier:hover {
	color: #e10019;
}

#fiche-event .partage {
	padding: 15px 25px;
}

#fiche-event .partage .title {
	text-transform: uppercase;
	font-weight: bold;
	font-size: 25px;
	font-family: "OpenSansExtraBold";
	display: block;
	padding: 0;
	color: #b0c9e7;
}

/* Fin des styles pour la fiche events */

@media only screen and (max-width: 1380px) {
	#fiche-event .autres-events a.voirplus {
		position: absolute;
		bottom: 2px;
		right: 16px;
	}
}

@media only screen and (max-width: 1200px) {
	#fiche-event .fiche-diapo .slider-for img {
		height: auto;
	}
}

@media only screen and (min-width: 1026px) and (max-width: 1130px) {
	.listepoi-n-critere-titre a {
		font: 12px OpenSansBold, DinBold, Arial, Helvetica, Sans-serif;
	}
	.listepoi-event .liste div span.date,
	.listepoi-event .liste div span.type {
		font-size: 11px;
		padding: 4px 5px;
	}
	.listepoi-event .liste {
		padding: 0 6px 0 3px;
	}
}

/* Sp�cificit�s pour les �crans de 1260 pixels � 1025 pixels de large */

@media only screen and (min-width: 64.063em) and (max-width: 78.750em) {
	#fiche-event .articles .slider-articles .slick-next,
	#fiche-event .articles .slider-articles .slick-prev {
		height: 168px;
	}
}

@media only screen and (min-width: 642px) and (max-width: 800px) {
	#fiche-event .contenu-fiche span.date {
		font-size: 10px;
		padding: 5.5px 5px;
	}
}

/* Sp�cificit�s pour les tablettes (de 641 � 1024 pixels de large maxi) */

@media only screen and (min-width: 40.063em) and (max-width: 64em) {
	#fiche-event .fiche-poi-informations .title,
	#fiche-event .fiche-poi-n-contenu-dates .title,
	#fiche-event .partage .title {
		font-size: 18px;
	}

	#fiche-event .articles a.voirplus {
		margin-left: 0px;
		margin: 0;
		width: 170px;
		position: absolute;
		bottom: 9px;
		right: 19px;
	}
	#fiche-event .articles .title,
	#fiche-event .autres-events .title {
		font-size: 25px;
		line-height: initial;
	}
	#fiche-event .autres-events .title-2,
	#fiche-event .articles .title-2 {
		font-size: 20px;
		vertical-align: bottom;
	}
	.titre-event p {
		width: 100%;
	}
	.listepoi-event .affichage {
		display: none;
	}
	#fiche-event .packages div > span.medium-3 {
		text-align: center;
		padding: 0;
	}
	#fiche-event .packages div.bouton {
		float: left;
	}
	#fiche-event .articles {
		padding: 15px 0 30px 15px;
	}
	#fiche-event .articles .slider-articles {
		margin-top: 0;
	}
	.listepoi-event .grille .row div:last-child {
		float: left!important;
	}
	.listepoi-event .listepoi-carte a {
		font-size: 12px;
		padding: 7px 5px;
		height: 30px;
	}
}

/* Sp�cificit�s pour les tablettes de moins de 870 pixels de large */

@media only screen and (min-width: 40.063em) and (max-width: 54.375em) {

	#fiche-event .fiche-poi-informations .title,
	#fiche-event .fiche-poi-informations iframe,
	#fiche-event .fiche-poi-informations .infos {
		padding: 10px 10px;
	}
	#fiche-event .autres-events .liste-events > div {
		padding: 0px 0px 10px 0px;
		margin-bottom: 7px;
	}
	#fiche-event .partage {
		padding: 15px 15px;
	}
	#fiche-event .fiche-poi-n-contenu-dates,
	#fiche-event a.ajout-calendrier {
		padding: 15px;
	}
	#fiche-event .fiche-poi-informations .infos span {
		font-size: 12px;
	}
	#fiche-event .fiche-poi-informations .infos i {
		margin: 0px 9px 0px 1px;
		font-size: 19px;
	}
	.titre-event p {
		width: 100%;
	}
	.listepoi-event .liste {
		padding: 0 6px 0 3px;
	}
}

@media only screen and (min-width: 40.063em) and (max-width: 710px) {
	#fiche-event .fiche-poi-informations .infos i {
		font-size: 12px;
		vertical-align: initial;
	}
	#fiche-event .fiche-poi-informations .infos span {
		vertical-align: initial;
	}
	#fiche-event .fiche-poi-informations .liens-reseaux i {
		font-size: 22px;
	}
	#fiche-event .fiche-poi-informations .liens-reseaux img {
		width: 27px;
		margin: -9px 4px 0 0;
	}
	#fiche-event .fiche-poi-informations .title,
	#fiche-event .fiche-poi-n-contenu-dates .title,
	#fiche-event .partage .title {
		font-size: 16px;
	}
	.listepoi-event .liste div span.date {
		font-size: 11px;
	}

}

/* Sp�cificit�s pour les mobiles (de 0 � 640 pixels de large maxi) */

@media only screen and (max-width: 40em) {

	#fiche-event .partage {
		padding: 15px 0;
	}
	#fiche-event a.ajout-calendrier {
		padding: 15px 0 0 0px;
	}
	#fiche-event .packages > div:last-child {
		border-bottom: 0px solid #bbbaba;
	}
	#fiche-event .packages {
		margin-bottom: 3px;
	}
	#fiche-event .autres-events {
		margin-bottom: 0px;
	}
	#fiche-event .autres-events .liste-events,
	#fiche-event .articles {
		margin-top: 15px;
	}
	#fiche-event .articles .slider-articles {
		margin-top: 8px;
	}
	#fiche-event .packages .title {
		margin: 20px 0 0px;
	}
	#fiche-event .fiche-diapo .slider-nav {
		display: none;
	}
	#fiche-event .fiche-poi-informations iframe {
		padding: 0;
	}
	#fiche-event .fiche-poi-informations .title {
		display: none;
	}
	#fiche-event .fiche-poi-n-contenu-prix {
		padding: 14px;
		position: fixed;
		bottom: -5px;
		left: 0px;
		z-index: 999;
	}
	#fiche-event .autres-events .liste-events > div {
		padding: 0px 0px 10px 0px;
		margin-bottom: 7px;
	}
	#fiche-event .fil-ariane-rm-zone,
	#fiche-event #topdescriptif {
		display: none;
	}
	.listepoi-event .affichage {
		display: none;
	}

/*
	#fiche-event .fiche-poi-informations {
		display: none;
	}
*/

	#fiche-event .articles .slider-articles .slick-next,
	#fiche-event .articles .slider-articles .slick-prev {
		height: 100%;
	}
	#fiche-event .fiche-poi-informations .title,
	#fiche-event .fiche-poi-n-contenu-dates .title,
	#fiche-event .partage .title {
		font-size: 17px;
	}
	#fiche-event .fiche-poi-n-contenu2 {
		margin-top: 0px;
	}
	#fiche-event .articles .title,
	,
	#fiche-event .autres-events .title,
	#fiche-event .autres-events .title-2 {
		font-size: 16px;
		vertical-align: initial;
	}
	#fiche-event .articles .title-2,
	#fiche-event .autres-events .title-2 {
		font-size: 15px;
		vertical-align: bottom;
		margin-top: 3px;
	}
	#fiche-event .articles a.voirplus {
		margin-left: 0px;
		margin: 0;
		width: 169px!important;
		font-size: 14px;
		width: 163px;
		position: absolute;
		bottom: 9px;
		right: 19px;
	}
	
	#fiche-event .articles {
		max-width: 105% !important;
		padding: 15px 0 30px 15px;
	}
	#fiche-event .packages div > span.medium-3,
	#fiche-event .packages div .bouton {
		padding: 1% 0;
		font-size: 12px;
	}
	#fiche-event .packages div div span {
		font-weight: initial;
		font-size: 11px;
		color: initial;
		height: 31px;
	}
	#fiche-event .packages > div {
		padding: 10px 0px;
	}
	#fiche-event .packages div .bouton a {
		float: initial;
		margin: 0;
		font-size: 8px;
	}
	.listepoi-event .liste .row div {
		padding: 10px 0px 3px 13px;
	}
	.listepoi-event .liste {
		height: auto;
	}
	.listepoi-event {
		padding: 0px 16px;
	}
	.listepoi-event .affichage {
		margin-top: 0px;
	}
	.listepoi-event .liste div .desc2 a {
		right: -52px;
		top: -4px;
	}
	.listepoi-event .liste div.top .desc2 a {
		right: -56px;
	}
	.listepoi-event .listepoi-carte {
		padding: 20px 0 0 0px;
	}
	.listepoi-event .liste div .desc2 span:nth-of-type(2) {
		right: 15px!important;
	}
	.listepoi-event .liste .row div .desc,
	.listepoi-event .liste .row div .desc2 {
		width: 100%!important;
	}
	.titre-event p {
		width: 100%;
	}
	.listepoi-event .liste .image {
		max-height: initial;
		overflow: hidden;
		height: 100%;
	}
    
	.programme {
		position: relative;
		bottom: 0;
		right: 0;
		float: left;
		z-index: 9;
	}
	.listepoi-event .listepoi-n-carte {
		height: auto;
		padding-left: 0px;
		overflow: visible;
	}
	.listepoi-event .listepoi-n-carte iframe {
		width: 100%;
		height: 350px;
	}
}


@media only screen and (max-width: 450px) {
	.listepoi-event .liste div span.date,
	.listepoi-event .liste div span.heure {
		width: 50%;
	}
	.listepoi-event .liste div span.type {
		width: 100%;
	}
	.listepoi-event .liste > div img {
		width: 100%;
		height: initial;
	}
	.listepoi-event .liste div .desc,
	.listepoi-event .liste div .desc2 {
		width: 100%;
	}
	.listepoi-event .liste span img {
		width: 20px!important;
	}
	#fiche-event .articles .title-2,
	#fiche-event .autres-events .title-2 {
		margin-top: -3px;
	}
	#fiche-event .articles {
		max-width: 107% !important;
	}
	#fiche-event .articles .title,
	#fiche-event .autres-events .title,
	#fiche-event .packages .title {
		font-size: 19px;
	}
	#fiche-event .autres-events .title-2 {
		font-size: 12px;
		margin-top: -3px;
		float: left;
		line-height: 10px;
		margin-left: 0;
	}
}

@media only screen and (max-width: 320px) {
	.slider-for .slick-slide {
		margin-top: 0;
		transform: translateY(0);
		max-height: 155px;
	}
	#fiche-event .articles {
		max-width: 107% !important;
	}
}



/* D�but des styles news */

.titre-event h1 {
	line-height: 42px;
	text-transform: uppercase;
}

.listing-news {
	padding-left: 0;
}

.listing-news .news:nth-of-type(1),
.listing-news .news:nth-of-type(2) {
	width: 50%;
}

.listing-news .news:nth-of-type(1),
.listing-news .news:nth-of-type(2) {
	min-height: 500px;
}

.listing-news .news {
	margin-bottom: 40px;
        animation: animationFrames ease 1s;
	animation-iteration-count: 1;
	transform-origin: 50% 50%;
	animation-fill-mode:forwards;
	-webkit-animation: animationFrames ease 1s;
	-webkit-animation-iteration-count: 1;
	-webkit-transform-origin: 50% 50%;
	-webkit-animation-fill-mode:forwards;
	-moz-animation: animationFrames ease 1s;
	-moz-animation-iteration-count: 1;
	-moz-transform-origin: 50% 50%;
	-moz-animation-fill-mode:forwards; /*FF 5+*/
	-o-animation: animationFrames ease 1s;
	-o-animation-iteration-count: 1;
	-o-transform-origin: 50% 50%;
	-o-animation-fill-mode:forwards;
	-ms-animation: animationFrames ease 1s;
	-ms-animation-iteration-count: 1;
	-ms-transform-origin: 50% 50%;
	-ms-animation-fill-mode:forwards;
    min-height: 300px;
}

.listing-news .news a {
	float: left;
	width: 100%;
	height: auto;
}

.listing-news .news:last-child {
	float: left;
}

.listing-news .news:nth-of-type(1) span:nth-of-type(1),
.listing-news .news:nth-of-type(2) span:nth-of-type(1) {
	font-family: 'OpenSansBold';
	font-size: 30px;
	color: #3b3b3b;
	line-height: 37px;
	display: block;
	margin: 5px 0;
	height: auto;
	max-height: 79px;
    -moz-line-clamp: 2;
    -webkit-line-clamp: 2;
    -moz-box-orient: vertical;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
}

.listing-news .news:nth-of-type(1) span.descrip,
.listing-news .news:nth-of-type(2) span.descrip {
	color: #000;
	font-family: 'OpenSans', sans-serif;
	font-weight: initial;
	font-size: 12.5px;
	text-align: justify;
	height: auto;
    max-height: 88px;
    /*line-height: 16px;*/
}

.listing-news .news:nth-of-type(1) .tag a:first-child(1) { margin-left: none; }

.listing-news .news:nth-of-type(1) .tag a,
.listing-news .news:nth-of-type(2) .tag a {
	color: #e10019;
	font-family: 'OpenSans', sans-serif;
	font-size: 13px;
	font-weight: bold;
	display: inline-block;
	margin-left:5px;
	height: auto;
	min-height: 3px;
	float: none;
    width: auto;
}

    .listing-news .news .tag a {
    min-height: auto;
    font-size: 13px;
    width: auto;
    }

.listing-news .news:nth-of-type(1) .tag,
.listing-news .news:nth-of-type(2) .tag {
	display: block;
	margin-top: 5px;
	margin-left: -4px;
}

.news .video {
	position: relative;
}

.news .video img {
	filter: brightness(60%);
	-webkit-filter: brightness(60%);
	-moz-filter: brightness(60%);
	-o-filter: brightness(60%);
	-ms-filter: brightness(60%);
}

.news a:hover .video i {
	transform: scale(1.25);
	transition: 0.5s;
}

.news.actu_img:hover .video i {
	transform: scale(1.25);
	transition: 0.5s;
}

.news .video i {
	position: absolute;
	z-index: 9999;
	color: #fff;
	font-size: 50px;
	top: calc((100% - 43px) / 2);
	left: calc((100% - 47px) / 2);
}

.news a span:nth-of-type(1) {
	font-family: 'OpenSansBold';
	font-size: 14px;
	color: #3b3b3b;
	line-height: 16px;
	display: block;
	margin: 7px 0;
	font-weight: bold;
	max-height: 49px;
	height: auto;
	overflow: hidden;
}

.news a span:nth-of-type(1)::first-letter {
    text-transform: uppercase;
}

.news a span.date { font-size: 12.5px;color: #000;font-weight: initial;font-size: 12.5px; }

.news a span.heure {
    color: black;
    font-weight: initial;
    font-size: 12.5px;
}

.news a span.descrip {
	color: #000;
	font-family: 'OpenSans', sans-serif;
	font-weight: initial;
	font-size: 12.5px;
	text-align: justify;
	display: block;
    height: auto;
    line-height: 1,4;
    max-height: 53px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}


.news a:hover span:nth-of-type(1),
.news:nth-of-type(1) a:hover span:nth-of-type(1),
.news:nth-of-type(2) a:hover span:nth-of-type(1) {
	color: #e10019;
	transition: 0.2s;
}

.hashtag {
	text-align: right;
}

.hashtag a {
	font-family: 'OpenSans', sans-serif;
    color: #e10019;
	height: 38px;
	padding: 2px 0;
    font-size: 17px;
    font-weight: bold;
    display: inline-block;
    margin-right: 10px;
    height: auto;
}

.hashtag.sticky a:hover { font-size: 17px; }

.categorie span {
	color: #3b3b3b;
	font-size: 16px;
	font-style: italic;
	text-decoration: underline;
	text-transform: uppercase;
	display: block;
    margin: 25px 0 10px;
}

.retour span {
	color: #3b3b3b;
	font-size: 21px;
	display: block;
	margin: 10px 0;
	text-transform: uppercase;
	font-weight: bold;
}

.retour a:hover span {
	color: #e10019;
	transition: 0.2s;
}

.actu > div:nth-of-type(1) {
	position: relative;
	margin: 20px 0;
}

.actu img {
	width: 100%;
}

.actu .flex-video {
    padding-bottom: 60%;
}

.actu .flex-video span {
	position: absolute;
	bottom: 0;
	right: 0;
	background-color: rgba(255, 255, 255, 0.75);
	padding: 5px 15px;
	color: #3b3b3b;
	font-size: 14px;
	font-weight: bold;
}

.actu span.accroche {
	color: #3b3b3b;
	font-size: 24px;
	line-height: 25px;
	display: block;
	margin-bottom: 10px;
}

.actu p {
	margin-bottom: 0;
}

.actu .video-responsive {
	padding: 0;
	overflow: hidden;
	padding-bottom: 56.25%;
	position: relative;
	height: 0;
}

.actu .video-responsive iframe {
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	position: absolute;
}

.tag {
	padding: 0;
	margin-top: 20px;
}

.tag span {
	color: #3b3b3b;
	font-size: 30px;
	font-weight: bold;
}

.tag a {
	font-size: 28px;
	margin-left: 5px;
}

.tag .slider-articles {
	padding: 0;
	margin-top: 10px;
	height: 340px;
}

.tag .slider-articles .slick-track a:first-child {
	margin-left: 0;
}

.tag .slider-articles .slick-track a {
	padding: 0 5px;
    margin-left: 0;
}

.tag .slider-articles .slick-track a span {
	color: #3b3b3b;
	font-size: 21px;
	line-height: 25px;
	font-weight: bold;
	display: block;
	margin-top: 10px;
	max-height: 75px;
	height: auto;
	overflow: hidden;
}

.tag .slider-articles .slick-track a:hover span {
	color: #e10019;
	transition: 0.2s;
}

.tag .slider-articles .slick-next {
	right: -1px;
	height: 100%;
	top: 0px;
	margin: 0;
	width: 35px;
	background: rgba(255, 255, 255, 0.89);
}

.tag .slider-articles .slick-prev {
	left: 0px;
	height: 100%;
	top: 0px;
	margin: 0;
	width: 35px;
	background: rgba(255, 255, 255, 0.89);
}

.tag .slider-articles .slick-prev:before {
	content: '\F104';
	font-family: 'FontAwesome';
	font-size: 40px;
	font-weight: bold;
	color: #494949
}

.tag .slider-articles .slick-next:before {
	content: '\F105';
	font-family: 'FontAwesome';
	font-size: 40px;
	font-weight: bold;
	color: #494949
}

.tag .slider-articles .slick-prev.slick-disabled {
	opacity: 0;
}

.actu .autres-events {
	padding: 0;
	margin-top: 30px;
	margin-bottom: 70px;
}

.actu .autres-events .title {
	font-weight: bold;
	vertical-align: middle;
	margin: 0;
    display: inline-block;
}

.actu .autres-events .title::first-letter {
    text-transform: uppercase;}

.actu .autres-events .title-2 {
	font-size: 32px;
	margin-left: 6px;
	vertical-align: middle;
}

.actu .autres-events a.voirplus {
	text-transform: uppercase;
	font-weight: bold;
	margin-left: 50px;
	color: #494949;
	margin: 0 0 0 50px;
	display: inline-block;
	font-size: 16px;
	font-family: 'OpenSansBold';
	vertical-align: middle;
}

.actu .autres-events a:hover.voirplus {
	color: #e10019;
	transition: 0.2s;
}

.actu .autres-events .liste-events {
	margin-top: 30px;
	padding-left: 0;
}

.actu .autres-events .liste-events > div:first-child {
	padding-left: 0;
}

.actu .autres-events .liste-events > div {
	padding: 0 10px;
}

.actu .autres-events .liste-events .des {
	padding: 0;
    background-color: #c8c8c8;
    max-height: 100%;
    min-height: 106px;
}

.actu .autres-events .liste-events span.date {
	background-color: #e10019;
	text-transform: uppercase;
	color: #fff;
	padding: 4px 5px;
	font-size: 12px;
	text-align: center;
}

.actu .autres-events .liste-events img {
	background-color: #fff;
	text-align: center;
	padding: 0;
	overflow: hidden;
}

.actu .autres-events .liste-events .block_click:hover {
    cursor: pointer;
}

.actu .autres-events .liste-events .desc span:nth-of-type(1) {
	text-transform: uppercase;
	display: block;
	font-weight: bold;
	font-size: 15px;
	line-height: 18px;
	height: auto;
	overflow: hidden;
	max-height: 74px;
}

.actu .autres-events .liste-events .block_click:hover .desc span:nth-of-type(1) {
	color: #e10019;
	transition: 0.2s;
}

.actu .autres-events .liste-events .desc span:nth-of-type(2) {
	font-size: 14px;
	line-height: 16px;
	padding-right: 8px;
	display: block;
	height: 48px;
	overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.actu .autres-events .liste-events .desc {
	height: 114px;
	position: relative;
	padding: 0 10px 0 15px;
}

.actu .autres-events .liste-events .desc a {
	position: absolute;
	bottom: 5px;
	right: 18px;
	border: 2px solid;
	border-radius: 30px;
	padding: 0px 4px 0px 4px;
}

.actu .autres-events .liste-events .desc a i {
	font-size: 13px;
}

.hashtag .tag a {
	color: #e10019;
	font-family: 'OpenSans', sans-serif;
	font-size: 17px;
	font-weight: bold;
	display: inline-block;
	margin-right: 10px;
	height: auto;
}

.hashtag .fiche-tag a,.hashtag.fixedsticky a {
    color: #3b3b3b;
    font-family: 'OpenSans', sans-serif;
    font-size: 25px;
    font-weight: bold;
    padding: 2px 0;
    display: block;
}

.hashtag .fiche-tag a:hover,.hashtag.fixedsticky a:hover {
	color: #e10019;
	transition: 0.2s;
	font-size: 26px;
}

.hashtag .partage .title {
	text-transform: uppercase;
	font-weight: bold;
	font-size: 17px;
	font-family: 'OpenSansBold';
	display: block;
	padding: 0;
	color: #b0c9e7;
}

.hashtag .partage {
	margin: 40px 0;
}

@media only screen and (max-width: 1250px) {

    .listing-news .news:nth-of-type(1),
    .listing-news .news:nth-of-type(2) {
        min-height: 400px;
    }
    
    .hashtag .fiche-tag a,.hashtag.fixedsticky a {
        font-size: 18px;
    }
    
    .hashtag .fiche-tag a:hover,.hashtag.fixedsticky a:hover {
	    font-size: 19px;
    }
}

@media only screen and (max-width: 64em) {
	.listing-news .news:nth-of-type(1) span:nth-of-type(1),
	.listing-news .news:nth-of-type(2) span:nth-of-type(1) {
		font-size: 19px;
		line-height: 22px;
		max-height: 66px;
	}
	.listing-news .news:nth-of-type(1) span.descrip,
	.listing-news .news:nth-of-type(2) span.descrip {
		display: block;
	}
	.news a span.descrip,.news a span:nth-of-type(2) {
		display: none;
	}
    
    .listing-news .news {
        min-height: 243px;
    }
    
    .news a span:nth-of-type(1) {
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      text-transform: initial!important;  
    } 
    
	.listing-news .news:nth-of-type(1) .tag span,
	.listing-news .news:nth-of-type(2) .tag span {
		color: #e10019;
		font-family: 'OpenSans', sans-serif;
		font-size: 13px;
		font-weight: bold;
		display: inline-block;
		margin-right: 10px;
	}

    
	.actu h1 {
		font-size: 30px;
		line-height: 35px;
	}
	.actu > div:nth-of-type(1) span {
		font-size: 11px;
		padding: 3px 15px;
		bottom: -2px;
	}
	.actu > div:nth-of-type(1) {
		margin: 10px 0;
	}
	.actu span.accroche {
		font-size: 18px;
		line-height: 23px;
	}
	.tag .slider-articles .slick-track a span {
		font-size: 16px;
		line-height: 18px;
		margin-top: 5px;
	}
	.tag .slider-articles {
		height: 263px;
	}
	.actu .autres-events .title {
		font-size: 26px;
	}
	.actu .autres-events .title-2 {
		font-size: 26px;
	}
	.actu .autres-events {
		position: relative;
	}
	.actu .autres-events a.voirplus {
		position: absolute;
		bottom: 5px;
		right: 5px;
	}
	.actu .autres-events {
		padding-bottom: 50px;
	}
	.actu .autres-events .liste-events {
		padding-right: 0;
	}
	.actu .autres-events .liste-events .des {
		margin-bottom: 10px;
        min-height: 163px;
	}
	.actu .autres-events .liste-events > div {
		padding-left: 0;
		padding-right: 0;
	}
    
/*    .listepoi-event .grille div .desc2 span:nth-of-type(1), .listepoi-event .liste div .desc2 span:nth-of-type(1) { width: 54%; }*/
    
    
}

@media only screen and (max-width: 920px) {
    .listing-news .news:nth-of-type(1),
    .listing-news .news:nth-of-type(2) {
        min-height: 320px;
    }
    
    .listing-news .news .tag a { 
        display: none;
    }
    
    .listing-news .news .tag a:nth-of-type(1),
    .listing-news .news .tag a:nth-of-type(2),
    .listing-news .news .tag a:nth-of-type(3) { 
        display: inline-block;
    }
}

@media only screen and (max-width: 40em) {
	.titre-event {
		margin-bottom: 20px;
	}
	.titre-event h1 {
		font-size: 34px;
	}
	.listing-news {
		padding-right: 0;
	}
	.listing-news .news {
		width: 100%!important;
		margin-bottom: 16px;
	}
	
	.listing-news .news a {
		min-height: 0;
		max-height: none;
	}
	
	.listing-news .news img {
		width: 100%;
	}
    
    .news a span:nth-of-type(1) { font-size: 18px!important; line-height: 1.3; }
    
	 .news a span.descrip {
		display: block;
		max-height: 0;
		min-height: 0;
	}
    
    .hashtag .fiche-tag a,.hashtag.fixedsticky a { display: inline-block; }
    
	.hashtag {
		position: static!important;
	}
    
	.hashtag a {
		display: inline-block;
		margin-left: 10px;
	}
    
    .hashtag .fiche-tag a { display: none; }
    
	.actu h1 {
		font-size: 24px;
		line-height: 30px;
	}
	.actu span.accroche {
		font-size: 16px;
		line-height: 19px;
	}
	.tag .slider-articles {
		height: auto;
	}
	.tag .slider-articles .slick-track a span {
		font-size: 17px;
		line-height: 21px;
		max-height: 105px;
	}
    
    .tag span {
        font-size: 22px;
    }    
    
    .actu .tag a {
        font-size: 22px;
    }
    
	.actu .autres-events .liste-events .desc span:nth-of-type(1) {
		font-size: 13px;
		line-height: 16px;
	}
	.actu .autres-events .liste-events .desc span:nth-of-type(2) {
		font-size: 13px;
	}
	.actu .autres-events a.voirplus {
		text-align: center;
		left: -43px;
	}
	.hashtag .partage {
		margin: 20px 0;
        text-align: center;
	}
    
    .hashtag {
        margin-bottom: 20px!important;
    }
    
    .listepoi-event .grille .image { height: auto;/*min-height: 337px;*/  }
    
    .listepoi-event .grille div > img { margin-top: 0;transform: none;width: 100%; }
}

@media only screen and (max-width: 435px) {
	.tag .slider-articles {
		height: 282px;
	}
}

/* Fin des styles news */


.ui-datepicker .ui-datepicker-title{color :#000; }
.ui-datepicker .ui-datepicker-header{width:87%;}
 
.eventpoi.prefix, .eventpoi.postfix{
height: 40px;
}


.top-bar.heb {
    border-bottom: 1px solid #dadada; 
    margin-bottom: 30px;
    height: auto;
}

.top-bar.heb span.compte {
    margin: 0 auto;
    min-width: 175px;
    font-size: 23px;
    padding-left: 0;
    font-family: "OpenSansBold";
    font-weight: bold;
    text-transform: uppercase;
} 

.top-bar.heb .moncompte-menu {
    margin: 0;
    padding: 14px 0;
}

.top-bar.heb .moncompte-menu li {
    display: inline-block;
    margin: 0 10px;
}

.top-bar.heb .moncompte-menu li:last-child {
    float: right;
}

.top-bar.heb .moncompte-menu li a {
    color: initial;
}

.top-bar.heb .moncompte-menu li a.active, .top-bar.heb .moncompte-menu li a:hover, .top-bar.heb .moncompte-menu li a:hover {
    color: #e2001a;
}

.r-identification.hebergeur label {
    padding: 0 5px;
}

.r-identification.hebergeur input,
.r-identification.hebergeur select {
    padding: 0.5rem;
    height: 2.3125rem;
    margin-bottom: 15px;
}

.r-identification.hebergeur input[type="password"],
.r-identification.hebergeur input[type="text"],
.r-identification.hebergeur input[type="date"],
.r-identification.hebergeur input[type="number"] {
    width: 58.33333%;
}

.r-identification.hebergeur input[type="radio"] {
    height: auto;
    width: auto;
    margin: 5px 0;
}

.r-identification.hebergeur input[type="radio"] + label {
    margin: 0;
}

.r-identification.hebergeur input[type="radio"] + label:last-child {
  float:left
}

.r-identification.hebergeur .r-identification-bouton input {
    margin: 0;
    padding: 0 40px;
    height: 34px;
}

.r-identification.hebergeur .r-identification > div:first-child {
    margin-bottom: 15px;
}

.deco {
    display: block;
    text-align: right;
}

#listStay table thead tr,
#listStay table tbody tr {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

#listStay table thead tr th,
#listStay table tbody tr td {
	display: block;
    width: 7%;
}

#listStay table thead tr th:first-child,
#listStay table tbody tr td:first-child {
    width: 4%;
}

#listStay table thead tr th:nth-of-type(13n+2),
#listStay table tbody tr td:nth-of-type(13n+2) {
    width: 13%;
}

#listStay table thead tr th:nth-of-type(13n+3),
#listStay table thead tr th:nth-of-type(13n+4),
#listStay table thead tr th:nth-of-type(13n+6),
#listStay table tbody tr td:nth-of-type(13n+3),
#listStay table tbody tr td:nth-of-type(13n+4),
#listStay table tbody tr td:nth-of-type(13n+6) {
    width: 11.6%;
}

#listStay table tbody tr td:nth-of-type(13n+6) {  
    padding-left: 20px;
}

#listStay table thead tr th:nth-of-type(13n+10),
#listStay table thead tr th:nth-of-type(13n+11),
#listStay table thead tr th:nth-of-type(13n+12),
#listStay table tbody tr td:nth-of-type(13n+10),
#listStay table tbody tr td:nth-of-type(13n+11),
#listStay table tbody tr td:nth-of-type(13n+12),
#listStay table tbody tr td:nth-of-type(13n+13),
#listStay table tbody tr td:nth-of-type(13n+14) {
    width: 4%;
}

#listStay .pagination {
    text-align: center;
}

.reveal-modal .r-identification.hebergeur > div {
    padding: 0;
}

.reveal-modal .r-identification.hebergeur div.medium-12 table tr {
    display: inherit;
}

.reveal-modal .columns { min-height: 15px; }

.reveal-modal table thead tr,
.reveal-modal table tbody tr {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

.reveal-modal table input { width:100%;min-width:50px; }

.reveal-modal .checkin table tr th, .reveal-modal .checkin table tr td{
	display: block;
}

.reveal-modal .checkin table tr th:nth-of-type(1),
.reveal-modal .checkin table tr td:nth-of-type(1)
 {
    width: 12%;
}

.reveal-modal .checkin table tr th:nth-of-type(2),
.reveal-modal .checkin table tr td:nth-of-type(2),
.reveal-modal .checkin table tr th:nth-of-type(3),
.reveal-modal .checkin table tr td:nth-of-type(3) {
    width: 12%;
}

.reveal-modal .checkin table tr th:nth-of-type(4),
.reveal-modal .checkin table tr td:nth-of-type(4)
 {
    width: 9%;
}

.reveal-modal .checkin table tr th:nth-of-type(5),
.reveal-modal .checkin table tr td:nth-of-type(5),
.reveal-modal .checkin table tr th:nth-of-type(6),
.reveal-modal .checkin table tr td:nth-of-type(6)
 {
    width: 13%;
}

#listStay table tbody tr .etape1,
#listStay table tbody tr .etape2,
#listStay table tbody tr .etape3,
#listStay table tbody tr .etape4 {
    padding-left: 20px;
}

.checkin table tbody tr .etape1,
.checkin table tbody tr .etape2,
.checkin table tbody tr .etape3,
.checkin table tbody tr .etape4 {
    padding-left: 20px;
}

.legend table tbody tr .etape1,
.legend table tbody tr .etape2,
.legend table tbody tr .etape3,
.legend table tbody tr .etape4 {
    padding-left: 20px;
}



#listStay table tbody tr .etape1:before,
#listStay table tbody tr .etape2:before,
#listStay table tbody tr .etape3:before,
#listStay table tbody tr .etape4:before,
.checkin table tbody tr .etape1:before,
.checkin table tbody tr .etape2:before,
.checkin table tbody tr .etape3:before,
.checkin table tbody tr .etape4:before,
.legend table tbody tr .etape1:before,
.legend table tbody tr .etape2:before,
.legend table tbody tr .etape3:before,
.legend table tbody tr .etape4:before {
	display: block;
	width: 20px;
}

#listStay table tbody tr .etape1:before {
    content: url(/images/square-red.svg);
}

#listStay table tbody tr .etape2:before {
    content: url(/images/square-orange.svg);
}

#listStay table tbody tr .etape3:before {
  content: url(/images/square-yellow.svg);
}

#listStay table tbody tr .etape4:before {
 content: url(/images/square-green.svg);
}

.checkin table tbody tr .etape1:before {
    content: url(/images/square-red.svg);
}

.checkin table tbody tr .etape2:before {
    content: url(/images/square-orange.svg);
}

.checkin table tbody tr .etape3:before {
  content: url(/images/square-yellow.svg);
}

.checkin table tbody tr .etape4:before {
 content: url(/images/square-green.svg);
}

.legend table tbody tr .etape1:before {
    content: url(/images/square-red.svg);
}

.legend table tbody tr .etape2:before {
    content: url(/images/square-orange.svg);
}

.legend table tbody tr .etape3:before {
  content: url(/images/square-yellow.svg);
}

.legend table tbody tr .etape4:before {
 content: url(/images/square-green.svg);
}

.r-identification-bouton a.addFam {
    background: #a0a0a0;
    height: 34px;
    display: inline-block;
    vertical-align: top;
    padding: 5px 16px;
    color: #fff;
    text-transform: uppercase;
    font-size: 17px;
}

.r-identification-bouton a.addFam svg {
    display: inline-block;
    vertical-align: sub;
}
 
.nbParticipant{padding: 0;}

#listStay .legend .etape1,
#listStay .legend .etape2,
#listStay .legend .etape3,
#listStay .legend .etape4 {
    width: 40px!important;
}

#listStay .legend td {
    width: 19%!important;
}

.checkin table thead tr,
.checkin table tbody tr { 
    display: flex;
    flex-direction: row;
    flex-wrap: wrap; 
    }

.checkin table thead tr th, .checkin table tbody tr td {
    width: 9%;
}

.checkin table thead tr th:nth-of-type(2),
.checkin table tbody tr td:nth-of-type(2),
.checkin table thead tr th:nth-of-type(3),
.checkin table tbody tr td:nth-of-type(3) {
    width: 16%;
}

.checkin table thead tr th:nth-of-type(4),
.checkin table tbody tr td:nth-of-type(4) {
    width: 9%;
}

.checkin table thead tr th:nth-of-type(5),
.checkin table tbody tr td:nth-of-type(5),
.checkin table thead tr th:nth-of-type(6),
.checkin table tbody tr td:nth-of-type(6) {
    width: 11%;
}

.checkin table thead tr th:nth-of-type(8),
.checkin table tbody tr td:nth-of-type(8) {
    width: 7%;
}

.checkin table thead tr th:nth-of-type(10),
.checkin table tbody tr td:nth-of-type(10) {
    width: 4%;
}

.checkin table thead tr th:nth-of-type(8) {
    color: #e2001a;
}

.checkin input[type="password"], .checkin input[type="text"], .checkin input[type="date"], .checkin input[type="number"] {
    width: 100%!important;
}

@media only screen and (max-width: 60em) {
      #listStay .legend td {
        width: 43%!important;
    }  
    
    .checkin table thead tr th,
    .checkin table tbody tr td {
        width: 16%;
    }

    .checkin table thead tr th:nth-of-type(2),
    .checkin table tbody tr td:nth-of-type(2),
    .checkin table thead tr th:nth-of-type(3),
    .checkin table tbody tr td:nth-of-type(3) {
        width: 34%;
    }

    .checkin table thead tr th:nth-of-type(4),
    .checkin table tbody tr td:nth-of-type(4) {
        width: 14%;
    }

    .checkin table thead tr th:nth-of-type(5),
    .checkin table tbody tr td:nth-of-type(5),
    .checkin table thead tr th:nth-of-type(6),
    .checkin table tbody tr td:nth-of-type(6) {
        width: 23%;
    }

    .checkin table thead tr th:nth-of-type(8),
    .checkin table tbody tr td:nth-of-type(8) {
        width: 10%;
    }
}

@media only screen and (max-width: 1125px) {
    .top-bar.heb span.compte {
        display: none;
    }

    .reveal-modal .checkin table tr th:nth-of-type(1),
    .reveal-modal .checkin table tr td:nth-of-type(1)
     {
        width: 21%;
    }

    .reveal-modal .checkin table tr th:nth-of-type(2),
    .reveal-modal .checkin table tr td:nth-of-type(2),
    .reveal-modal .checkin table tr th:nth-of-type(3),
    .reveal-modal .checkin table tr td:nth-of-type(3) {
        width: 39%;
    }

    .reveal-modal .checkin table tr th:nth-of-type(4),
    .reveal-modal .checkin table tr td:nth-of-type(4)
     {
        width: 17%;
    }

    .reveal-modal .checkin table tr th:nth-of-type(5),
    .reveal-modal .checkin table tr td:nth-of-type(5),
    .reveal-modal .checkin table tr th:nth-of-type(6),
    .reveal-modal .checkin table tr td:nth-of-type(6)
     {
        width: 41%;
    }

     .reveal-modal .checkin table tr th:nth-of-type(7),
    .reveal-modal .checkin table tr td:nth-of-type(7) {
        width: 37%;
    }

     .reveal-modal .checkin table tr th:nth-of-type(9),
    .reveal-modal .checkin table tr td:nth-of-type(9) {
        width: 43%;
    }
}

@media only screen and (max-width: 1025px) {
    .r-identification.hebergeur.saisie input[type="password"],
    .r-identification.hebergeur.saisie input[type="text"],
    .r-identification.hebergeur.saisie input[type="date"],
    .r-identification.hebergeur.saisie input[type="number"] {
        width: 100%;
    }
    
}

@media only screen and (max-width: 40em) {
    
    .top-bar.heb .moncompte-menu li:last-child {
        margin-top: 12px;
    }
    
    .r-identification.hebergeur input[type="password"],
    .r-identification.hebergeur input[type="text"],
    .r-identification.hebergeur input[type="date"],
    .r-identification.hebergeur input[type="number"] {
        width: 100%;
    }

    .r-identification.hebergeur .r-identification-bouton input,
    .r-identification.hebergeur .r-identification-bouton a {
        display: block;
        width: 100%;
        margin-bottom: 10px;
    }
    
    #listStay table thead tr th:first-child,
    #listStay table tbody tr td:first-child {
        width: 12%;
    }
    
    #listStay table thead tr th:nth-of-type(13n+2),
    #listStay table thead tr th:nth-of-type(13n+3),
    #listStay table tbody tr td:nth-of-type(13n+2),
    #listStay table tbody tr td:nth-of-type(13n+3){
        width: 29%;
    }
    
    #listStay table thead tr th:nth-of-type(13n+4),
    #listStay table thead tr th:nth-of-type(13n+5),
    #listStay table tbody tr td:nth-of-type(13n+4),
    #listStay table tbody tr td:nth-of-type(13n+5) {
        width: 17%;
    }
    
    #listStay table thead tr th:nth-of-type(13n+6),
    #listStay table tbody tr td:nth-of-type(13n+6) {
        width: 21%;
    }  
    
    #listStay table thead tr th:nth-of-type(13n+7),
    #listStay table tbody tr td:nth-of-type(13n+7),
    #listStay table thead tr th:nth-of-type(13n+8),
    #listStay table tbody tr td:nth-of-type(13n+8){
        width: 14%;
    }  
    
    #listStay table thead tr th,
    #listStay table tbody tr td {
        width: 18%;
    }
    
    #listStay table thead tr th:nth-of-type(13n+10),
    #listStay table thead tr th:nth-of-type(13n+11),
    #listStay table thead tr th:nth-of-type(13n+12),
    #listStay table tbody tr td:nth-of-type(13n+10),
    #listStay table tbody tr td:nth-of-type(13n+11),
    #listStay table tbody tr td:nth-of-type(13n+12),
    #listStay table tbody tr td:nth-of-type(13n+13),
    #listStay table tbody tr td:nth-of-type(13n+14) {
        width: 9%;
    }
    
    #listStay .legend td {
        width: 90%!important;
        padding-left: 0px!important;
        padding-right: 0px!important;
    }
    
     #check-in .legend table tr {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .legend table tbody tr .etape1,
    .legend table tbody tr .etape2,
    .legend table tbody tr .etape3,
    .legend table tbody tr .etape4 {
        padding-left: 0px;
        width: 30px;
    }

    .legend table tbody tr td,
    .legend table tbody tr td,
    .legend table tbody tr td,
    .legend table tbody tr td {
        width: 92%;
        padding-left: 0!important;
    }
    
    .checkin table thead tr th,
    .checkin table tbody tr td {
        width: 34%;
    }

    .checkin table thead tr th:nth-of-type(2),
    .checkin table tbody tr td:nth-of-type(2),
    .checkin table thead tr th:nth-of-type(3),
    .checkin table tbody tr td:nth-of-type(3) {
        width: 58%;
    }

    .checkin table thead tr th:nth-of-type(4),
    .checkin table tbody tr td:nth-of-type(4) {
        width: 42%;
    }

    .checkin table thead tr th:nth-of-type(5),
    .checkin table tbody tr td:nth-of-type(5),
    .checkin table thead tr th:nth-of-type(6),
    .checkin table tbody tr td:nth-of-type(6) {
        width: 50%;
    }

    .checkin table thead tr th:nth-of-type(8),
    .checkin table tbody tr td:nth-of-type(8) {
        width: 21%;
    }
    
    .reveal-modal .checkin table tr th:nth-of-type(1),
    .reveal-modal .checkin table tr td:nth-of-type(1)
     {
        width: 31%;
    }

    .reveal-modal .checkin table tr th:nth-of-type(2),
    .reveal-modal .checkin table tr td:nth-of-type(2),
    .reveal-modal .checkin table tr th:nth-of-type(3),
    .reveal-modal .checkin table tr td:nth-of-type(3) {
        width: 50%;
    }

    .reveal-modal .checkin table tr th:nth-of-type(4),
    .reveal-modal .checkin table tr td:nth-of-type(4)
     {
        width: 31%;
    }

    .reveal-modal .checkin table tr th:nth-of-type(5),
    .reveal-modal .checkin table tr td:nth-of-type(5),
    .reveal-modal .checkin table tr th:nth-of-type(6),
    .reveal-modal .checkin table tr td:nth-of-type(6)
     {
        width: 50%;
    }

     .reveal-modal .checkin table tr th:nth-of-type(7),
    .reveal-modal .checkin table tr td:nth-of-type(7) {
        width: 37%;
    }

     .reveal-modal .checkin table tr th:nth-of-type(9),
    .reveal-modal .checkin table tr td:nth-of-type(9) {
        width: 25%;
    }
        
}

@media only screen and (max-width: 460px) {
    #listStay .legend td {
        width: 80%!important;
        padding-left: 0px!important;
        padding-right: 0px!important;
    }
    
   .legend table tbody tr td,
   .legend table tbody tr td,
   .legend table tbody tr td,
   .legend table tbody tr td {
        width: 87%;
        padding-left: 0!important;
    }
}

/* Slider */
.slick-slider
{
    position: relative;

    display: block;

    -moz-box-sizing: border-box;
         box-sizing: border-box;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;

    display: block;
    overflow: hidden;

    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;

    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;

    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;

    height: auto;

    border: 1px solid transparent;
}

@charset 'UTF-8';
/* Slider */
.slick-loading .slick-list
{
    background: #fff url('/slick/ajax-loader.gif') center center no-repeat;
}

/* Icons */
@font-face
{
    font-family: 'slick';
    font-weight: normal;
    font-style: normal;

    src: url('/slick/slick.eot');
    src: url('/slick/slick.eot?#iefix') format('embedded-opentype'), url('/slick/slick.woff') format('woff'), url('/slick/slick.ttf') format('truetype'), url('/slick/slick.svg#slick') format('svg');
}
/* Arrows */
.slick-prev,
.slick-next
{
    font-size: 0;
    line-height: 0;

    position: absolute;
    top: 50%;

    display: block;

    width: 20px;
    height: 20px;
    margin-top: -10px;
    padding: 0;

    cursor: pointer;

    color: transparent;
    border: none;
    outline: none;
    background: transparent;
}
.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus
{
    color: transparent;
    outline: none;
    background: transparent;
}
.slick-prev:hover:before,
.slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before
{
    opacity: 1;
}
.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before
{
    opacity: .25;
}

.slick-prev:before,
.slick-next:before
{
    font-family: 'slick';
    font-size: 20px;
    line-height: 1;

    opacity: .75;
    color: white;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-prev
{
    left: -25px;
}
[dir='rtl'] .slick-prev
{
    right: -25px;
    left: auto;
}
.slick-prev:before
{
    content: '?';
}
[dir='rtl'] .slick-prev:before
{
    content: '?';
}

.slick-next
{
    right: -25px;
}
[dir='rtl'] .slick-next
{
    right: auto;
    left: -25px;
}
.slick-next:before
{
    content: '?';
}
[dir='rtl'] .slick-next:before
{
    content: '?';
}

/* Dots */
.slick-slider
{
    margin-bottom: 0;
}

.slick-dots
{
    position: absolute;
    bottom: -45px;

    display: block;

    width: 100%;
    padding: 0;

    list-style: none;

    text-align: center;
}
.slick-dots li
{
    position: relative;

    display: inline-block;

    width: 20px;
    height: 20px;
    margin: 0 5px;
    padding: 0;

    cursor: pointer;
}
.slick-dots li button
{
    font-size: 0;
    line-height: 0;

    display: block;

    width: 20px;
    height: 20px;
    padding: 5px;

    cursor: pointer;

    color: transparent;
    border: 0;
    outline: none;
    background: transparent;
}
.slick-dots li button:hover,
.slick-dots li button:focus
{
    outline: none;
}
.slick-dots li button:hover:before,
.slick-dots li button:focus:before
{
    opacity: 1;
}
.slick-dots li button:before
{
    font-family: 'slick';
    font-size: 6px;
    line-height: 20px;

    position: absolute;
    top: 0;
    left: 0;

    width: 20px;
    height: 20px;

    content: '�';
    text-align: center;

    opacity: .25;
    color: black;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.slick-dots li.slick-active button:before
{
    opacity: .75;
    color: black;
}


/*
    Colorbox Core Style:
    The following CSS is consistent between example themes and should not be altered.
*/
#colorbox, #cboxOverlay, #cboxWrapper{position:absolute; top:0; left:0; z-index:9999; overflow:hidden;}
#cboxWrapper {max-width:none;}
#cboxOverlay{position:fixed; width:100%; height:100%;}
#cboxMiddleLeft, #cboxBottomLeft{clear:left;}
#cboxContent{position:relative;}
#cboxLoadedContent{overflow:auto; -webkit-overflow-scrolling: touch;}
#cboxTitle{margin:0;}
#cboxLoadingOverlay, #cboxLoadingGraphic{position:absolute; top:0; left:0; width:100%; height:100%;}
#cboxPrevious, #cboxNext, #cboxClose, #cboxSlideshow{cursor:pointer;}
.cboxPhoto{float:left; margin:auto; border:0; display:block; max-width:none; -ms-interpolation-mode:bicubic;}
.cboxIframe{width:100%; height:100%; display:block; border:0; padding:0; margin:0;}
#colorbox, #cboxContent, #cboxLoadedContent{box-sizing:content-box; -moz-box-sizing:content-box; -webkit-box-sizing:content-box;}

/* 
    User Style:
    Change the following styles to modify the appearance of Colorbox.  They are
    ordered & tabbed in a way that represents the nesting of the generated HTML.
*/
#cboxOverlay{background:#000; opacity: 0.9; filter: alpha(opacity = 90);}
#colorbox{outline:0;}
    #cboxContent{margin-top:20px;background:#000;}
        .cboxIframe{background:#fff;}
        #cboxError{padding:50px; border:1px solid #ccc;}
        #cboxLoadedContent{border:5px solid #000; background:#fff;}
        #cboxTitle{position:absolute; top:-20px; left:0; color:#ccc;}
        #cboxCurrent{position:absolute; top:-20px; right:0px; color:#ccc;}
        #cboxLoadingGraphic{background:url(/js/lib/jquery/colorbox/skin3/images/loading.gif) no-repeat center center;}

        /* these elements are buttons, and may need to have additional styles reset to avoid unwanted base styles */
        #cboxPrevious, #cboxNext, #cboxSlideshow, #cboxClose {border:0; padding:0; margin:0; overflow:visible; width:auto; background:none; }
        
        /* avoid outlines on :active (mouseclick), but preserve outlines on :focus (tabbed navigating) */
        #cboxPrevious:active, #cboxNext:active, #cboxSlideshow:active, #cboxClose:active {outline:0;}
        
        #cboxSlideshow{position:absolute; top:-20px; right:90px; color:#fff;}
        #cboxPrevious{position:absolute; top:50%; left:5px; margin-top:-32px; background:url(/js/lib/jquery/colorbox/skin3/images/controls.png) no-repeat top left; width:28px; height:65px; text-indent:-9999px;}
        #cboxPrevious:hover{background-position:bottom left;}
        #cboxNext{position:absolute; top:50%; right:5px; margin-top:-32px; background:url(/js/lib/jquery/colorbox/skin3/images/controls.png) no-repeat top right; width:28px; height:65px; text-indent:-9999px;}
        #cboxNext:hover{background-position:bottom right;}
        #cboxClose{position:absolute; top:5px; right:5px; display:block; background:url(/js/lib/jquery/colorbox/skin3/images/controls.png) no-repeat top center; width:38px; height:19px; text-indent:-9999px;}
        #cboxClose:hover{background-position:bottom center;}


/*! jQuery UI - v1.11.2 - 2014-10-16
* http://jqueryui.com
* Includes: core.css, accordion.css, autocomplete.css, button.css, datepicker.css, dialog.css, draggable.css, menu.css, progressbar.css, resizable.css, selectable.css, selectmenu.css, slider.css, sortable.css, spinner.css, tabs.css, tooltip.css, theme.css
* To view and modify this theme, visit http://jqueryui.com/themeroller/?ffDefault=Trebuchet%20MS%2CTahoma%2CVerdana%2CArial%2Csans-serif&fwDefault=bold&fsDefault=1.1em&cornerRadius=4px&bgColorHeader=f6a828&bgTextureHeader=gloss_wave&bgImgOpacityHeader=35&borderColorHeader=e78f08&fcHeader=ffffff&iconColorHeader=ffffff&bgColorContent=eeeeee&bgTextureContent=highlight_soft&bgImgOpacityContent=100&borderColorContent=dddddd&fcContent=333333&iconColorContent=222222&bgColorDefault=f6f6f6&bgTextureDefault=glass&bgImgOpacityDefault=100&borderColorDefault=cccccc&fcDefault=1c94c4&iconColorDefault=ef8c08&bgColorHover=fdf5ce&bgTextureHover=glass&bgImgOpacityHover=100&borderColorHover=fbcb09&fcHover=c77405&iconColorHover=ef8c08&bgColorActive=ffffff&bgTextureActive=glass&bgImgOpacityActive=65&borderColorActive=fbd850&fcActive=eb8f00&iconColorActive=ef8c08&bgColorHighlight=ffe45c&bgTextureHighlight=highlight_soft&bgImgOpacityHighlight=75&borderColorHighlight=fed22f&fcHighlight=363636&iconColorHighlight=228ef1&bgColorError=b81900&bgTextureError=diagonals_thick&bgImgOpacityError=18&borderColorError=cd0a0a&fcError=ffffff&iconColorError=ffd27a&bgColorOverlay=666666&bgTextureOverlay=diagonals_thick&bgImgOpacityOverlay=20&opacityOverlay=50&bgColorShadow=000000&bgTextureShadow=flat&bgImgOpacityShadow=10&opacityShadow=20&thicknessShadow=5px&offsetTopShadow=-5px&offsetLeftShadow=-5px&cornerRadiusShadow=5px
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */

.ui-helper-hidden{display:none}.ui-helper-hidden-accessible{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.ui-helper-reset{margin:0;padding:0;border:0;outline:0;line-height:1.3;text-decoration:none;font-size:100%;list-style:none}.ui-helper-clearfix:before,.ui-helper-clearfix:after{content:"";display:table;border-collapse:collapse}.ui-helper-clearfix:after{clear:both}.ui-helper-clearfix{min-height:0}.ui-helper-zfix{width:100%;height:100%;top:0;left:0;position:absolute;opacity:0;filter:Alpha(Opacity=0)}.ui-front{z-index:100}.ui-state-disabled{cursor:default!important}.ui-icon{display:block;text-indent:-99999px;overflow:hidden;background-repeat:no-repeat}.ui-widget-overlay{position:fixed;top:0;left:0;width:100%;height:100%}.ui-accordion .ui-accordion-header{display:block;cursor:pointer;position:relative;margin:2px 0 0 0;padding:.5em .5em .5em .7em;min-height:0;font-size:100%}.ui-accordion .ui-accordion-icons{padding-left:2.2em}.ui-accordion .ui-accordion-icons .ui-accordion-icons{padding-left:2.2em}.ui-accordion .ui-accordion-header .ui-accordion-header-icon{position:absolute;left:.5em;top:50%;margin-top:-8px}.ui-accordion .ui-accordion-content{padding:1em 2.2em;border-top:0;overflow:auto}.ui-autocomplete{position:absolute;top:0;left:0;cursor:default}.ui-button{display:inline-block;position:relative;padding:0;line-height:normal;margin-right:.1em;cursor:pointer;vertical-align:middle;text-align:center;overflow:visible}.ui-button,.ui-button:link,.ui-button:visited,.ui-button:hover,.ui-button:active{text-decoration:none}.ui-button-icon-only{width:2.2em}button.ui-button-icon-only{width:2.4em}.ui-button-icons-only{width:3.4em}button.ui-button-icons-only{width:3.7em}.ui-button .ui-button-text{display:block;line-height:normal}.ui-button-text-only .ui-button-text{padding:.4em 1em}.ui-button-icon-only .ui-button-text,.ui-button-icons-only .ui-button-text{padding:.4em;text-indent:-9999999px}.ui-button-text-icon-primary .ui-button-text,.ui-button-text-icons .ui-button-text{padding:.4em 1em .4em 2.1em}.ui-button-text-icon-secondary .ui-button-text,.ui-button-text-icons .ui-button-text{padding:.4em 2.1em .4em 1em}.ui-button-text-icons .ui-button-text{padding-left:2.1em;padding-right:2.1em}input.ui-button{padding:.4em 1em}.ui-button-icon-only .ui-icon,.ui-button-text-icon-primary .ui-icon,.ui-button-text-icon-secondary .ui-icon,.ui-button-text-icons .ui-icon,.ui-button-icons-only .ui-icon{position:absolute;top:50%;margin-top:-8px}.ui-button-icon-only .ui-icon{left:50%;margin-left:-8px}.ui-button-text-icon-primary .ui-button-icon-primary,.ui-button-text-icons .ui-button-icon-primary,.ui-button-icons-only .ui-button-icon-primary{left:.5em}.ui-button-text-icon-secondary .ui-button-icon-secondary,.ui-button-text-icons .ui-button-icon-secondary,.ui-button-icons-only .ui-button-icon-secondary{right:.5em}.ui-buttonset{margin-right:7px}.ui-buttonset .ui-button{margin-left:0;margin-right:-.3em}input.ui-button::-moz-focus-inner,button.ui-button::-moz-focus-inner{border:0;padding:0}.ui-datepicker{width:17em;padding:.2em .2em 0;display:none}.ui-datepicker .ui-datepicker-header{position:relative;padding:.2em 0}.ui-datepicker .ui-datepicker-prev,.ui-datepicker .ui-datepicker-next{position:absolute;top:2px;width:1.8em;height:1.8em;background-color:#aaa;}.ui-datepicker .ui-datepicker-prev-hover,.ui-datepicker .ui-datepicker-next-hover{top:1px}.ui-datepicker .ui-datepicker-prev{left:2px}.ui-datepicker .ui-datepicker-next{right:2px}.ui-datepicker .ui-datepicker-prev-hover{left:1px}.ui-datepicker .ui-datepicker-next-hover{right:1px}.ui-datepicker .ui-datepicker-prev span,.ui-datepicker .ui-datepicker-next span{display:block;position:absolute;left:50%;margin-left:-8px;top:50%;margin-top:-8px}.ui-datepicker .ui-datepicker-title{margin:0 2.3em;line-height:1.8em;text-align:center}.ui-datepicker .ui-datepicker-title select{font-size:1em;margin:1px 0}.ui-datepicker select.ui-datepicker-month,.ui-datepicker select.ui-datepicker-year{width:45%}.ui-datepicker table{width:100%;font-size:.9em;border-collapse:collapse;margin:0 0 .4em}.ui-datepicker th{padding:.7em .3em;text-align:center;font-weight:bold;border:0}.ui-datepicker td{border:0;padding:1px}.ui-datepicker td span,.ui-datepicker td a{display:block;padding:.2em;text-align:right;text-decoration:none}.ui-datepicker .ui-datepicker-buttonpane{background-image:none;margin:.7em 0 0 0;padding:0 .2em;border-left:0;border-right:0;border-bottom:0}.ui-datepicker .ui-datepicker-buttonpane button{float:right;margin:.5em .2em .4em;cursor:pointer;padding:.2em .6em .3em .6em;width:auto;overflow:visible}.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current{float:left}.ui-datepicker.ui-datepicker-multi{width:auto}.ui-datepicker-multi .ui-datepicker-group{float:left}.ui-datepicker-multi .ui-datepicker-group table{width:95%;margin:0 auto .4em}.ui-datepicker-multi-2 .ui-datepicker-group{width:50%}.ui-datepicker-multi-3 .ui-datepicker-group{width:33.3%}.ui-datepicker-multi-4 .ui-datepicker-group{width:25%}.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header,.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header{border-left-width:0}.ui-datepicker-multi .ui-datepicker-buttonpane{clear:left}.ui-datepicker-row-break{clear:both;width:100%;font-size:0}.ui-datepicker-rtl{direction:rtl}.ui-datepicker-rtl .ui-datepicker-prev{right:2px;left:auto}.ui-datepicker-rtl .ui-datepicker-next{left:2px;right:auto}.ui-datepicker-rtl .ui-datepicker-prev:hover{right:1px;left:auto}.ui-datepicker-rtl .ui-datepicker-next:hover{left:1px;right:auto}.ui-datepicker-rtl .ui-datepicker-buttonpane{clear:right}.ui-datepicker-rtl .ui-datepicker-buttonpane button{float:left}.ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current,.ui-datepicker-rtl .ui-datepicker-group{float:right}.ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header,.ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header{border-right-width:0;border-left-width:1px}.ui-dialog{overflow:hidden;position:absolute;top:0;left:0;padding:.2em;outline:0}.ui-dialog .ui-dialog-titlebar{padding:.4em 1em;position:relative}.ui-dialog .ui-dialog-title{float:left;margin:.1em 0;white-space:nowrap;width:90%;overflow:hidden;text-overflow:ellipsis}.ui-dialog .ui-dialog-titlebar-close{position:absolute;right:.3em;top:50%;width:20px;margin:-10px 0 0 0;padding:1px;height:20px}.ui-dialog .ui-dialog-content{position:relative;border:0;padding:.5em 1em;background:none;overflow:auto}.ui-dialog .ui-dialog-buttonpane{text-align:left;border-width:1px 0 0 0;background-image:none;margin-top:.5em;padding:.3em 1em .5em .4em}.ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset{float:right}.ui-dialog .ui-dialog-buttonpane button{margin:.5em .4em .5em 0;cursor:pointer}.ui-dialog .ui-resizable-se{width:12px;height:12px;right:-5px;bottom:-5px;background-position:16px 16px}.ui-draggable .ui-dialog-titlebar{cursor:move}.ui-draggable-handle{-ms-touch-action:none;touch-action:none}.ui-menu{list-style:none;padding:0;margin:0;display:block;outline:none}.ui-menu .ui-menu{position:absolute}.ui-menu .ui-menu-item{position:relative;margin:0;padding:3px 1em 3px .4em;cursor:pointer;min-height:0;list-style-image:url("/js/lib/jquery/ui/theme/data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7")}.ui-menu .ui-menu-divider{margin:5px 0;height:0;font-size:0;line-height:0;border-width:1px 0 0 0}.ui-menu .ui-state-focus,.ui-menu .ui-state-active{margin:-1px}.ui-menu-icons{position:relative}.ui-menu-icons .ui-menu-item{padding-left:2em}.ui-menu .ui-icon{position:absolute;top:0;bottom:0;left:.2em;margin:auto 0}.ui-menu .ui-menu-icon{left:auto;right:0}.ui-progressbar{height:2em;text-align:left;overflow:hidden}.ui-progressbar .ui-progressbar-value{margin:-1px;height:100%}.ui-progressbar .ui-progressbar-overlay{background:url("/js/lib/jquery/ui/theme/data:image/gif;base64,R0lGODlhKAAoAIABAAAAAP///yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJAQABACwAAAAAKAAoAAACkYwNqXrdC52DS06a7MFZI+4FHBCKoDeWKXqymPqGqxvJrXZbMx7Ttc+w9XgU2FB3lOyQRWET2IFGiU9m1frDVpxZZc6bfHwv4c1YXP6k1Vdy292Fb6UkuvFtXpvWSzA+HycXJHUXiGYIiMg2R6W459gnWGfHNdjIqDWVqemH2ekpObkpOlppWUqZiqr6edqqWQAAIfkECQEAAQAsAAAAACgAKAAAApSMgZnGfaqcg1E2uuzDmmHUBR8Qil95hiPKqWn3aqtLsS18y7G1SzNeowWBENtQd+T1JktP05nzPTdJZlR6vUxNWWjV+vUWhWNkWFwxl9VpZRedYcflIOLafaa28XdsH/ynlcc1uPVDZxQIR0K25+cICCmoqCe5mGhZOfeYSUh5yJcJyrkZWWpaR8doJ2o4NYq62lAAACH5BAkBAAEALAAAAAAoACgAAAKVDI4Yy22ZnINRNqosw0Bv7i1gyHUkFj7oSaWlu3ovC8GxNso5fluz3qLVhBVeT/Lz7ZTHyxL5dDalQWPVOsQWtRnuwXaFTj9jVVh8pma9JjZ4zYSj5ZOyma7uuolffh+IR5aW97cHuBUXKGKXlKjn+DiHWMcYJah4N0lYCMlJOXipGRr5qdgoSTrqWSq6WFl2ypoaUAAAIfkECQEAAQAsAAAAACgAKAAAApaEb6HLgd/iO7FNWtcFWe+ufODGjRfoiJ2akShbueb0wtI50zm02pbvwfWEMWBQ1zKGlLIhskiEPm9R6vRXxV4ZzWT2yHOGpWMyorblKlNp8HmHEb/lCXjcW7bmtXP8Xt229OVWR1fod2eWqNfHuMjXCPkIGNileOiImVmCOEmoSfn3yXlJWmoHGhqp6ilYuWYpmTqKUgAAIfkECQEAAQAsAAAAACgAKAAAApiEH6kb58biQ3FNWtMFWW3eNVcojuFGfqnZqSebuS06w5V80/X02pKe8zFwP6EFWOT1lDFk8rGERh1TTNOocQ61Hm4Xm2VexUHpzjymViHrFbiELsefVrn6XKfnt2Q9G/+Xdie499XHd2g4h7ioOGhXGJboGAnXSBnoBwKYyfioubZJ2Hn0RuRZaflZOil56Zp6iioKSXpUAAAh+QQJAQABACwAAAAAKAAoAAACkoQRqRvnxuI7kU1a1UU5bd5tnSeOZXhmn5lWK3qNTWvRdQxP8qvaC+/yaYQzXO7BMvaUEmJRd3TsiMAgswmNYrSgZdYrTX6tSHGZO73ezuAw2uxuQ+BbeZfMxsexY35+/Qe4J1inV0g4x3WHuMhIl2jXOKT2Q+VU5fgoSUI52VfZyfkJGkha6jmY+aaYdirq+lQAACH5BAkBAAEALAAAAAAoACgAAAKWBIKpYe0L3YNKToqswUlvznigd4wiR4KhZrKt9Upqip61i9E3vMvxRdHlbEFiEXfk9YARYxOZZD6VQ2pUunBmtRXo1Lf8hMVVcNl8JafV38aM2/Fu5V16Bn63r6xt97j09+MXSFi4BniGFae3hzbH9+hYBzkpuUh5aZmHuanZOZgIuvbGiNeomCnaxxap2upaCZsq+1kAACH5BAkBAAEALAAAAAAoACgAAAKXjI8By5zf4kOxTVrXNVlv1X0d8IGZGKLnNpYtm8Lr9cqVeuOSvfOW79D9aDHizNhDJidFZhNydEahOaDH6nomtJjp1tutKoNWkvA6JqfRVLHU/QUfau9l2x7G54d1fl995xcIGAdXqMfBNadoYrhH+Mg2KBlpVpbluCiXmMnZ2Sh4GBqJ+ckIOqqJ6LmKSllZmsoq6wpQAAAh+QQJAQABACwAAAAAKAAoAAAClYx/oLvoxuJDkU1a1YUZbJ59nSd2ZXhWqbRa2/gF8Gu2DY3iqs7yrq+xBYEkYvFSM8aSSObE+ZgRl1BHFZNr7pRCavZ5BW2142hY3AN/zWtsmf12p9XxxFl2lpLn1rseztfXZjdIWIf2s5dItwjYKBgo9yg5pHgzJXTEeGlZuenpyPmpGQoKOWkYmSpaSnqKileI2FAAACH5BAkBAAEALAAAAAAoACgAAAKVjB+gu+jG4kORTVrVhRlsnn2dJ3ZleFaptFrb+CXmO9OozeL5VfP99HvAWhpiUdcwkpBH3825AwYdU8xTqlLGhtCosArKMpvfa1mMRae9VvWZfeB2XfPkeLmm18lUcBj+p5dnN8jXZ3YIGEhYuOUn45aoCDkp16hl5IjYJvjWKcnoGQpqyPlpOhr3aElaqrq56Bq7VAAAOw==");height:100%;filter:alpha(opacity=25);opacity:0.25}.ui-progressbar-indeterminate .ui-progressbar-value{background-image:none}.ui-resizable{position:relative}.ui-resizable-handle{position:absolute;font-size:0.1px;display:block;-ms-touch-action:none;touch-action:none}.ui-resizable-disabled .ui-resizable-handle,.ui-resizable-autohide .ui-resizable-handle{display:none}.ui-resizable-n{cursor:n-resize;height:7px;width:100%;top:-5px;left:0}.ui-resizable-s{cursor:s-resize;height:7px;width:100%;bottom:-5px;left:0}.ui-resizable-e{cursor:e-resize;width:7px;right:-5px;top:0;height:100%}.ui-resizable-w{cursor:w-resize;width:7px;left:-5px;top:0;height:100%}.ui-resizable-se{cursor:se-resize;width:12px;height:12px;right:1px;bottom:1px}.ui-resizable-sw{cursor:sw-resize;width:9px;height:9px;left:-5px;bottom:-5px}.ui-resizable-nw{cursor:nw-resize;width:9px;height:9px;left:-5px;top:-5px}.ui-resizable-ne{cursor:ne-resize;width:9px;height:9px;right:-5px;top:-5px}.ui-selectable{-ms-touch-action:none;touch-action:none}.ui-selectable-helper{position:absolute;z-index:100;border:1px dotted black}.ui-selectmenu-menu{padding:0;margin:0;position:absolute;top:0;left:0;display:none}.ui-selectmenu-menu .ui-menu{overflow:auto;overflow-x:hidden;padding-bottom:1px}.ui-selectmenu-menu .ui-menu .ui-selectmenu-optgroup{font-size:1em;font-weight:bold;line-height:1.5;padding:2px 0.4em;margin:0.5em 0 0 0;height:auto;border:0}.ui-selectmenu-open{display:block}.ui-selectmenu-button{display:inline-block;overflow:hidden;position:relative;text-decoration:none;cursor:pointer}.ui-selectmenu-button span.ui-icon{right:0.5em;left:auto;margin-top:-8px;position:absolute;top:50%}.ui-selectmenu-button span.ui-selectmenu-text{text-align:left;padding:0.4em 2.1em 0.4em 1em;display:block;line-height:1.4;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.ui-slider{position:relative;text-align:left}.ui-slider .ui-slider-handle{position:absolute;z-index:2;width:1.2em;height:1.2em;cursor:default;-ms-touch-action:none;touch-action:none}.ui-slider .ui-slider-range{position:absolute;z-index:1;font-size:.7em;display:block;border:0;background-position:0 0}.ui-slider.ui-state-disabled .ui-slider-handle,.ui-slider.ui-state-disabled .ui-slider-range{filter:inherit}.ui-slider-horizontal{height:.8em}.ui-slider-horizontal .ui-slider-handle{top:-.3em;margin-left:-.6em}.ui-slider-horizontal .ui-slider-range{top:0;height:100%}.ui-slider-horizontal .ui-slider-range-min{left:0}.ui-slider-horizontal .ui-slider-range-max{right:0}.ui-slider-vertical{width:.8em;height:100px}.ui-slider-vertical .ui-slider-handle{left:-.3em;margin-left:0;margin-bottom:-.6em}.ui-slider-vertical .ui-slider-range{left:0;width:100%}.ui-slider-vertical .ui-slider-range-min{bottom:0}.ui-slider-vertical .ui-slider-range-max{top:0}.ui-sortable-handle{-ms-touch-action:none;touch-action:none}.ui-spinner{position:relative;display:inline-block;overflow:hidden;padding:0;vertical-align:middle}.ui-spinner-input{border:none;background:none;color:inherit;padding:0;margin:.2em 0;vertical-align:middle;margin-left:.4em;margin-right:22px}.ui-spinner-button{width:16px;height:50%;font-size:.5em;padding:0;margin:0;text-align:center;position:absolute;cursor:default;display:block;overflow:hidden;right:0}.ui-spinner a.ui-spinner-button{border-top:none;border-bottom:none;border-right:none}.ui-spinner .ui-icon{position:absolute;margin-top:-8px;top:50%;left:0}.ui-spinner-up{top:0}.ui-spinner-down{bottom:0}.ui-spinner .ui-icon-triangle-1-s{background-position:-65px -16px}.ui-tabs{position:relative;padding:.2em}.ui-tabs .ui-tabs-nav{margin:0;padding:.2em .2em 0}.ui-tabs .ui-tabs-nav li{list-style:none;float:left;position:relative;top:0;margin:1px .2em 0 0;border-bottom-width:0;padding:0;white-space:nowrap}.ui-tabs .ui-tabs-nav .ui-tabs-anchor{float:left;padding:.5em 1em;text-decoration:none}.ui-tabs .ui-tabs-nav li.ui-tabs-active{margin-bottom:-1px;padding-bottom:1px}.ui-tabs .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor,.ui-tabs .ui-tabs-nav li.ui-state-disabled .ui-tabs-anchor,.ui-tabs .ui-tabs-nav li.ui-tabs-loading .ui-tabs-anchor{cursor:text}.ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor{cursor:pointer}.ui-tabs .ui-tabs-panel{display:block;border-width:0;padding:1em 1.4em;background:none}.ui-tooltip{padding:8px;position:absolute;z-index:9999;max-width:300px;-webkit-box-shadow:0 0 5px #aaa;box-shadow:0 0 5px #aaa}body .ui-tooltip{border-width:2px}.ui-widget{font-family:Trebuchet MS,Tahoma,Verdana,Arial,sans-serif;font-size:1.1em}.ui-widget .ui-widget{font-size:1em}.ui-widget input,.ui-widget select,.ui-widget textarea,.ui-widget button{font-family:Trebuchet MS,Tahoma,Verdana,Arial,sans-serif;font-size:1em}.ui-widget-content{border:1px solid #ddd;background:#eee url("/js/lib/jquery/ui/theme/images/ui-bg_highlight-soft_100_eeeeee_1x100.png") 50% top repeat-x;color:#333}.ui-widget-content a{color:#333}.ui-widget-header{border:1px solid #e78f08;background:#f6a828 url("/js/lib/jquery/ui/theme/images/ui-bg_gloss-wave_35_f6a828_500x100.png") 50% 50% repeat-x;color:#fff;font-weight:bold}.ui-widget-header a{color:#fff}.ui-state-default,.ui-widget-content .ui-state-default,.ui-widget-header .ui-state-default{border:1px solid #f6f6f6;background:#f6f6f6 url("/js/lib/jquery/ui/theme/images/ui-bg_glass_100_f6f6f6_1x400.png") 50% 50% repeat-x;font-weight:bold;color:#666}.ui-state-default a,.ui-state-default a:link,.ui-state-default a:visited{color:#1c94c4;text-decoration:none}.ui-state-hover,.ui-widget-content .ui-state-hover,.ui-widget-header .ui-state-hover,.ui-state-focus,.ui-widget-content .ui-state-focus,.ui-widget-header .ui-state-focus{border:1px solid #868484;background:#bbb url("/js/lib/jquery/ui/theme/images/ui-bg_glass_100_bbbbbb_1x400.png") 50% 50% repeat-x;font-weight:bold;color:#fff}.ui-state-hover a,.ui-state-hover a:hover,.ui-state-hover a:link,.ui-state-hover a:visited,.ui-state-focus a,.ui-state-focus a:hover,.ui-state-focus a:link,.ui-state-focus a:visited{color:#c77405;text-decoration:none}.ui-state-active,.ui-widget-content .ui-state-active,.ui-widget-header .ui-state-active{border:1px solid #999;background:#868484 url("/js/lib/jquery/ui/theme/images/ui-bg_glass_65_868484_1x400.png") 50% 50% repeat-x;font-weight:bold;color:#fff}.ui-state-active a,.ui-state-active a:link,.ui-state-active a:visited{color:#eb8f00;text-decoration:none}.ui-state-highlight,.ui-widget-content .ui-state-highlight,.ui-widget-header .ui-state-highlight{border:1px solid #ddd;background:none;color:#363636}.ui-state-highlight a,.ui-widget-content .ui-state-highlight a,.ui-widget-header .ui-state-highlight a{color:#363636}.ui-state-error,.ui-widget-content .ui-state-error,.ui-widget-header .ui-state-error{border:1px solid #cd0a0a;background:#b81900 url("/js/lib/jquery/ui/theme/images/ui-bg_diagonals-thick_18_b81900_40x40.png") 50% 50% repeat;color:#fff}.ui-state-error a,.ui-widget-content .ui-state-error a,.ui-widget-header .ui-state-error a{color:#fff}.ui-state-error-text,.ui-widget-content .ui-state-error-text,.ui-widget-header .ui-state-error-text{color:#fff}.ui-priority-primary,.ui-widget-content .ui-priority-primary,.ui-widget-header .ui-priority-primary{font-weight:bold}.ui-priority-secondary,.ui-widget-content .ui-priority-secondary,.ui-widget-header .ui-priority-secondary{opacity:.7;filter:Alpha(Opacity=70);font-weight:normal}.ui-state-disabled,.ui-widget-content .ui-state-disabled,.ui-widget-header .ui-state-disabled{opacity:.35;filter:Alpha(Opacity=35);background-image:none}.ui-state-disabled .ui-icon{filter:Alpha(Opacity=35)}.ui-icon{width:16px;height:16px}.ui-icon,.ui-widget-content .ui-icon{background-image:url("/js/lib/jquery/ui/theme/images/ui-icons_222222_256x240.png")}.ui-widget-header .ui-icon{background-image:url("/js/lib/jquery/ui/theme/images/ui-icons_ffffff_256x240.png")}.ui-state-default .ui-icon{background-image:url("/js/lib/jquery/ui/theme/images/ui-icons_ef8c08_256x240.png")}.ui-state-hover .ui-icon,.ui-state-focus .ui-icon{background-image:url("/js/lib/jquery/ui/theme/images/ui-icons_ffffff_256x240.png")}.ui-state-active .ui-icon{background-image:url("/js/lib/jquery/ui/theme/images/ui-icons_ef8c08_256x240.png")}.ui-state-highlight .ui-icon{background-image:url("/js/lib/jquery/ui/theme/images/ui-icons_228ef1_256x240.png")}.ui-state-error .ui-icon,.ui-state-error-text .ui-icon{background-image:url("/js/lib/jquery/ui/theme/images/ui-icons_ffd27a_256x240.png")}.ui-icon-blank{background-position:16px 16px}.ui-icon-carat-1-n{background-position:0 0}.ui-icon-carat-1-ne{background-position:-16px 0}.ui-icon-carat-1-e{background-position:-32px 0}.ui-icon-carat-1-se{background-position:-48px 0}.ui-icon-carat-1-s{background-position:-64px 0}.ui-icon-carat-1-sw{background-position:-80px 0}.ui-icon-carat-1-w{background-position:-96px 0}.ui-icon-carat-1-nw{background-position:-112px 0}.ui-icon-carat-2-n-s{background-position:-128px 0}.ui-icon-carat-2-e-w{background-position:-144px 0}.ui-icon-triangle-1-n{background-position:0 -16px}.ui-icon-triangle-1-ne{background-position:-16px -16px}.ui-icon-triangle-1-e{background-position:-32px -16px}.ui-icon-triangle-1-se{background-position:-48px -16px}.ui-icon-triangle-1-s{background-position:-64px -16px}.ui-icon-triangle-1-sw{background-position:-80px -16px}.ui-icon-triangle-1-w{background-position:-96px -16px}.ui-icon-triangle-1-nw{background-position:-112px -16px}.ui-icon-triangle-2-n-s{background-position:-128px -16px}.ui-icon-triangle-2-e-w{background-position:-144px -16px}.ui-icon-arrow-1-n{background-position:0 -32px}.ui-icon-arrow-1-ne{background-position:-16px -32px}.ui-icon-arrow-1-e{background-position:-32px -32px}.ui-icon-arrow-1-se{background-position:-48px -32px}.ui-icon-arrow-1-s{background-position:-64px -32px}.ui-icon-arrow-1-sw{background-position:-80px -32px}.ui-icon-arrow-1-w{background-position:-96px -32px}.ui-icon-arrow-1-nw{background-position:-112px -32px}.ui-icon-arrow-2-n-s{background-position:-128px -32px}.ui-icon-arrow-2-ne-sw{background-position:-144px -32px}.ui-icon-arrow-2-e-w{background-position:-160px -32px}.ui-icon-arrow-2-se-nw{background-position:-176px -32px}.ui-icon-arrowstop-1-n{background-position:-192px -32px}.ui-icon-arrowstop-1-e{background-position:-208px -32px}.ui-icon-arrowstop-1-s{background-position:-224px -32px}.ui-icon-arrowstop-1-w{background-position:-240px -32px}.ui-icon-arrowthick-1-n{background-position:0 -48px}.ui-icon-arrowthick-1-ne{background-position:-16px -48px}.ui-icon-arrowthick-1-e{background-position:-32px -48px}.ui-icon-arrowthick-1-se{background-position:-48px -48px}.ui-icon-arrowthick-1-s{background-position:-64px -48px}.ui-icon-arrowthick-1-sw{background-position:-80px -48px}.ui-icon-arrowthick-1-w{background-position:-96px -48px}.ui-icon-arrowthick-1-nw{background-position:-112px -48px}.ui-icon-arrowthick-2-n-s{background-position:-128px -48px}.ui-icon-arrowthick-2-ne-sw{background-position:-144px -48px}.ui-icon-arrowthick-2-e-w{background-position:-160px -48px}.ui-icon-arrowthick-2-se-nw{background-position:-176px -48px}.ui-icon-arrowthickstop-1-n{background-position:-192px -48px}.ui-icon-arrowthickstop-1-e{background-position:-208px -48px}.ui-icon-arrowthickstop-1-s{background-position:-224px -48px}.ui-icon-arrowthickstop-1-w{background-position:-240px -48px}.ui-icon-arrowreturnthick-1-w{background-position:0 -64px}.ui-icon-arrowreturnthick-1-n{background-position:-16px -64px}.ui-icon-arrowreturnthick-1-e{background-position:-32px -64px}.ui-icon-arrowreturnthick-1-s{background-position:-48px -64px}.ui-icon-arrowreturn-1-w{background-position:-64px -64px}.ui-icon-arrowreturn-1-n{background-position:-80px -64px}.ui-icon-arrowreturn-1-e{background-position:-96px -64px}.ui-icon-arrowreturn-1-s{background-position:-112px -64px}.ui-icon-arrowrefresh-1-w{background-position:-128px -64px}.ui-icon-arrowrefresh-1-n{background-position:-144px -64px}.ui-icon-arrowrefresh-1-e{background-position:-160px -64px}.ui-icon-arrowrefresh-1-s{background-position:-176px -64px}.ui-icon-arrow-4{background-position:0 -80px}.ui-icon-arrow-4-diag{background-position:-16px -80px}.ui-icon-extlink{background-position:-32px -80px}.ui-icon-newwin{background-position:-48px -80px}.ui-icon-refresh{background-position:-64px -80px}.ui-icon-shuffle{background-position:-80px -80px}.ui-icon-transfer-e-w{background-position:-96px -80px}.ui-icon-transferthick-e-w{background-position:-112px -80px}.ui-icon-folder-collapsed{background-position:0 -96px}.ui-icon-folder-open{background-position:-16px -96px}.ui-icon-document{background-position:-32px -96px}.ui-icon-document-b{background-position:-48px -96px}.ui-icon-note{background-position:-64px -96px}.ui-icon-mail-closed{background-position:-80px -96px}.ui-icon-mail-open{background-position:-96px -96px}.ui-icon-suitcase{background-position:-112px -96px}.ui-icon-comment{background-position:-128px -96px}.ui-icon-person{background-position:-144px -96px}.ui-icon-print{background-position:-160px -96px}.ui-icon-trash{background-position:-176px -96px}.ui-icon-locked{background-position:-192px -96px}.ui-icon-unlocked{background-position:-208px -96px}.ui-icon-bookmark{background-position:-224px -96px}.ui-icon-tag{background-position:-240px -96px}.ui-icon-home{background-position:0 -112px}.ui-icon-flag{background-position:-16px -112px}.ui-icon-calendar{background-position:-32px -112px}.ui-icon-cart{background-position:-48px -112px}.ui-icon-pencil{background-position:-64px -112px}.ui-icon-clock{background-position:-80px -112px}.ui-icon-disk{background-position:-96px -112px}.ui-icon-calculator{background-position:-112px -112px}.ui-icon-zoomin{background-position:-128px -112px}.ui-icon-zoomout{background-position:-144px -112px}.ui-icon-search{background-position:-160px -112px}.ui-icon-wrench{background-position:-176px -112px}.ui-icon-gear{background-position:-192px -112px}.ui-icon-heart{background-position:-208px -112px}.ui-icon-star{background-position:-224px -112px}.ui-icon-link{background-position:-240px -112px}.ui-icon-cancel{background-position:0 -128px}.ui-icon-plus{background-position:-16px -128px}.ui-icon-plusthick{background-position:-32px -128px}.ui-icon-minus{background-position:-48px -128px}.ui-icon-minusthick{background-position:-64px -128px}.ui-icon-close{background-position:-80px -128px}.ui-icon-closethick{background-position:-96px -128px}.ui-icon-key{background-position:-112px -128px}.ui-icon-lightbulb{background-position:-128px -128px}.ui-icon-scissors{background-position:-144px -128px}.ui-icon-clipboard{background-position:-160px -128px}.ui-icon-copy{background-position:-176px -128px}.ui-icon-contact{background-position:-192px -128px}.ui-icon-image{background-position:-208px -128px}.ui-icon-video{background-position:-224px -128px}.ui-icon-script{background-position:-240px -128px}.ui-icon-alert{background-position:0 -144px}.ui-icon-info{background-position:-16px -144px}.ui-icon-notice{background-position:-32px -144px}.ui-icon-help{background-position:-48px -144px}.ui-icon-check{background-position:-64px -144px}.ui-icon-bullet{background-position:-80px -144px}.ui-icon-radio-on{background-position:-96px -144px}.ui-icon-radio-off{background-position:-112px -144px}.ui-icon-pin-w{background-position:-128px -144px}.ui-icon-pin-s{background-position:-144px -144px}.ui-icon-play{background-position:0 -160px}.ui-icon-pause{background-position:-16px -160px}.ui-icon-seek-next{background-position:-32px -160px}.ui-icon-seek-prev{background-position:-48px -160px}.ui-icon-seek-end{background-position:-64px -160px}.ui-icon-seek-start{background-position:-80px -160px}.ui-icon-seek-first{background-position:-80px -160px}.ui-icon-stop{background-position:-96px -160px}.ui-icon-eject{background-position:-112px -160px}.ui-icon-volume-off{background-position:-128px -160px}.ui-icon-volume-on{background-position:-144px -160px}.ui-icon-power{background-position:0 -176px}.ui-icon-signal-diag{background-position:-16px -176px}.ui-icon-signal{background-position:-32px -176px}.ui-icon-battery-0{background-position:-48px -176px}.ui-icon-battery-1{background-position:-64px -176px}.ui-icon-battery-2{background-position:-80px -176px}.ui-icon-battery-3{background-position:-96px -176px}.ui-icon-circle-plus{background-position:0 -192px}.ui-icon-circle-minus{background-position:-16px -192px}.ui-icon-circle-close{background-position:-32px -192px}.ui-icon-circle-triangle-e{background-position:-48px -192px}.ui-icon-circle-triangle-s{background-position:-64px -192px}.ui-icon-circle-triangle-w{background-position:-80px -192px}.ui-icon-circle-triangle-n{background-position:-96px -192px}.ui-icon-circle-arrow-e{background-position:-112px -192px}.ui-icon-circle-arrow-s{background-position:-128px -192px}.ui-icon-circle-arrow-w{background-position:-144px -192px}.ui-icon-circle-arrow-n{background-position:-160px -192px}.ui-icon-circle-zoomin{background-position:-176px -192px}.ui-icon-circle-zoomout{background-position:-192px -192px}.ui-icon-circle-check{background-position:-208px -192px}.ui-icon-circlesmall-plus{background-position:0 -208px}.ui-icon-circlesmall-minus{background-position:-16px -208px}.ui-icon-circlesmall-close{background-position:-32px -208px}.ui-icon-squaresmall-plus{background-position:-48px -208px}.ui-icon-squaresmall-minus{background-position:-64px -208px}.ui-icon-squaresmall-close{background-position:-80px -208px}.ui-icon-grip-dotted-vertical{background-position:0 -224px}.ui-icon-grip-dotted-horizontal{background-position:-16px -224px}.ui-icon-grip-solid-vertical{background-position:-32px -224px}.ui-icon-grip-solid-horizontal{background-position:-48px -224px}.ui-icon-gripsmall-diagonal-se{background-position:-64px -224px}.ui-icon-grip-diagonal-se{background-position:-80px -224px}.ui-corner-all,.ui-corner-top,.ui-corner-left,.ui-corner-tl{border-top-left-radius:4px}.ui-corner-all,.ui-corner-top,.ui-corner-right,.ui-corner-tr{border-top-right-radius:4px}.ui-corner-all,.ui-corner-bottom,.ui-corner-left,.ui-corner-bl{border-bottom-left-radius:4px}.ui-corner-all,.ui-corner-bottom,.ui-corner-right,.ui-corner-br{border-bottom-right-radius:4px}.ui-widget-overlay{background:#666 url("/js/lib/jquery/ui/theme/images/ui-bg_diagonals-thick_20_666666_40x40.png") 50% 50% repeat;opacity:.5;filter:Alpha(Opacity=50)}.ui-widget-shadow{margin:-5px 0 0 -5px;padding:5px;background:#000 url("/js/lib/jquery/ui/theme/images/ui-bg_flat_10_000000_40x100.png") 50% 50% repeat-x;opacity:.2;filter:Alpha(Opacity=20);border-radius:5px}
