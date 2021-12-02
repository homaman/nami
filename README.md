# nami
   #searchBtn{
        padding: 14px;
        width: 120px;
        font-size: 1em;
        background-color:#512da8;
        color: white;
        border:1px solid #ccc;
        border-radius:0.125rem;
        font-weight:600;
        line-height:1.5;
      }

/*body{
  background:url("../images/back.jpg");
  background-size: cover;
  background-attachment: fixed;
}
*/

body{
  background: rgb(2,0,36);
background: -moz-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(21,57,30,1) 35%, rgba(25,86,91,1) 100%, rgba(0,212,255,1) 100%);
background: -webkit-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(21,57,30,1) 35%, rgba(25,86,91,1) 100%, rgba(0,212,255,1) 100%);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(21,57,30,1) 35%, rgba(25,86,91,1) 100%, rgba(0,212,255,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#020024",endColorstr="#00d4ff",GradientType=1);
}

.suggestion-wrap{
  text-align: center;
}

#viewResult{
  visibility: hidden;
}
html {
  line-height: 1.15;
  /* 1 */
  -ms-text-size-adjust: 100%;
  /* 2 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
}

/* Sections
   ========================================================================== */
/**
 * Remove the margin in all browsers (opinionated).
 */
body {
  margin: 0;
}

/**
 * Add the correct display in IE 9-.
 */
article,
aside,
footer,
header,
nav,
section {
  display: block;
}

/**
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

/* Grouping content
   ========================================================================== */
/**
 * Add the correct display in IE 9-.
 * 1. Add the correct display in IE.
 */
figcaption,
figure,
main {
  /* 1 */
  display: block;
}

/**
 * Add the correct margin in IE 8.
 */
figure {
  margin: 1em 40px;
}

/**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */
hr {
  box-sizing: content-box;
  /* 1 */
  height: 0;
  /* 1 */
  overflow: visible;
  /* 2 */
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */
pre {
  font-family: monospace, monospace;
  /* 1 */
  font-size: 1em;
  /* 2 */
}

/* Text-level semantics
   ========================================================================== */
/**
 * 1. Remove the gray background on active links in IE 10.
 * 2. Remove gaps in links underline in iOS 8+ and Safari 8+.
 */
a {
  background-color: transparent;
  /* 1 */
  -webkit-text-decoration-skip: objects;
  /* 2 */
}

/**
 * 1. Remove the bottom border in Chrome 57- and Firefox 39-.
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */
abbr[title] {
  border-bottom: none;
  /* 1 */
  text-decoration: underline;
  /* 2 */
  text-decoration: underline dotted;
  /* 2 */
}

/**
 * Prevent the duplicate application of `bolder` by the next rule in Safari 6.
 */
b,
strong {
  font-weight: inherit;
}

/**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */
b,
strong {
  font-weight: bolder;
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */
code,
kbd,
samp {
  font-family: monospace, monospace;
  /* 1 */
  font-size: 1em;
  /* 2 */
}

/**
 * Add the correct font style in Android 4.3-.
 */
dfn {
  font-style: italic;
}

/**
 * Add the correct background and color in IE 9-.
 */
mark {
  background-color: #ff0;
  color: #000;
}

/**
 * Add the correct font size in all browsers.
 */
small {
  font-size: 80%;
}

/**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/* Embedded content
   ========================================================================== */
/**
 * Add the correct display in IE 9-.
 */
audio,
video {
  display: inline-block;
}

/**
 * Add the correct display in iOS 4-7.
 */
audio:not([controls]) {
  display: none;
  height: 0;
}

/**
 * Remove the border on images inside links in IE 10-.
 */
img {
  border-style: none;
}

/**
 * Hide the overflow in IE.
 */
svg:not(:root) {
  overflow: hidden;
}

/* Forms
   ========================================================================== */
/**
 * 1. Change the font styles in all browsers (opinionated).
 * 2. Remove the margin in Firefox and Safari.
 */
button,
input,
optgroup,
select,
textarea {
  font-family: sans-serif;
  /* 1 */
  font-size: 100%;
  /* 1 */
  line-height: 1.15;
  /* 1 */
  margin: 0;
  /* 2 */
}

/**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */
button,
input {
  /* 1 */
  overflow: visible;
}

/**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */
button,
select {
  /* 1 */
  text-transform: none;
}

/**
 * 1. Prevent a WebKit bug where (2) destroys native `audio` and `video`
 *    controls in Android 4.
 * 2. Correct the inability to style clickable types in iOS and Safari.
 */
button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
  /* 2 */
}

/**
 * Remove the inner border and padding in Firefox.
 */
button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

/**
 * Restore the focus styles unset by the previous rule.
 */
button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
  outline: 1px dotted ButtonText;
}

/**
 * Correct the padding in Firefox.
 */
fieldset {
  padding: 0.35em 0.75em 0.625em;
}

/**
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *    `fieldset` elements in all browsers.
 */
legend {
  box-sizing: border-box;
  /* 1 */
  color: inherit;
  /* 2 */
  display: table;
  /* 1 */
  max-width: 100%;
  /* 1 */
  padding: 0;
  /* 3 */
  white-space: normal;
  /* 1 */
}

/**
 * 1. Add the correct display in IE 9-.
 * 2. Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */
progress {
  display: inline-block;
  /* 1 */
  vertical-align: baseline;
  /* 2 */
}

/**
 * Remove the default vertical scrollbar in IE.
 */
textarea {
  overflow: auto;
}

/**
 * 1. Add the correct box sizing in IE 10-.
 * 2. Remove the padding in IE 10-.
 */
[type="checkbox"],
[type="radio"] {
  box-sizing: border-box;
  /* 1 */
  padding: 0;
  /* 2 */
}

/**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */
[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

/**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */
[type="search"] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/**
 * Remove the inner padding and cancel buttons in Chrome and Safari on macOS.
 */
[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */
::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/* Interactive
   ========================================================================== */
/*
 * Add the correct display in IE 9-.
 * 1. Add the correct display in Edge, IE, and Firefox.
 */
details,
menu {
  display: block;
}

/*
 * Add the correct display in all browsers.
 */
summary {
  display: list-item;
}

/* Scripting
   ========================================================================== */
/**
 * Add the correct display in IE 9-.
 */
canvas {
  display: inline-block;
}

/**
 * Add the correct display in IE.
 */
template {
  display: none;
}

/* Hidden
   ========================================================================== */
/**
 * Add the correct display in IE 10-.
 */
[hidden] {
  display: none;
}

html {
  height: 100%;
}

fieldset {
  margin: 0;
  padding: 0;
  -webkit-margin-start: 0;
  -webkit-margin-end: 0;
  -webkit-padding-before: 0;
  -webkit-padding-start: 0;
  -webkit-padding-end: 0;
  -webkit-padding-after: 0;
  border: 0;
}

legend {
  margin: 0;
  padding: 0;
  display: block;
  -webkit-padding-start: 0;
  -webkit-padding-end: 0;
}

/*===============================
=            Choices            =
===============================*/
.choices {
  position: relative;
  margin-bottom: 24px;
  font-size: 16px;
}

.choices:focus {
  outline: none;
}

.choices:last-child {
  margin-bottom: 0;
}

.choices.is-disabled .choices__inner, .choices.is-disabled .choices__input {
  background-color: #EAEAEA;
  cursor: not-allowed;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.choices.is-disabled .choices__item {
  cursor: not-allowed;
}

.choices[data-type*="select-one"] {
  cursor: pointer;
}

.choices[data-type*="select-one"] .choices__inner {
  padding-bottom: 7.5px;
}

.choices[data-type*="select-one"] .choices__input {
  display: block;
  width: 100%;
  padding: 10px;
  border-bottom: 1px solid #DDDDDD;
  background-color: #FFFFFF;
  margin: 0;
}

.choices[data-type*="select-one"] .choices__button {
  background-image: url("../../icons/cross-inverse.svg");
  padding: 0;
  background-size: 8px;
  height: 100%;
  position: absolute;
  top: 50%;
  right: 0;
  margin-top: -10px;
  margin-right: 25px;
  height: 20px;
  width: 20px;
  border-radius: 10em;
  opacity: .5;
}

.choices[data-type*="select-one"] .choices__button:hover, .choices[data-type*="select-one"] .choices__button:focus {
  opacity: 1;
}

.choices[data-type*="select-one"] .choices__button:focus {
  box-shadow: 0px 0px 0px 2px #00BCD4;
}

.choices[data-type*="select-one"]:after {
  content: "";
  height: 0;
  width: 0;
  border-style: solid;
  border-color: #333333 transparent transparent transparent;
  border-width: 5px;
  position: absolute;
  right: 11.5px;
  top: 50%;
  margin-top: -2.5px;
  pointer-events: none;
}

.choices[data-type*="select-one"].is-open:after {
  border-color: transparent transparent #333333 transparent;
  margin-top: -7.5px;
}

.choices[data-type*="select-one"][dir="rtl"]:after {
  left: 11.5px;
  right: auto;
}

.choices[data-type*="select-one"][dir="rtl"] .choices__button {
  right: auto;
  left: 0;
  margin-left: 25px;
  margin-right: 0;
}

.choices[data-type*="select-multiple"] .choices__inner, .choices[data-type*="text"] .choices__inner {
  cursor: text;
}

.choices[data-type*="select-multiple"] .choices__button, .choices[data-type*="text"] .choices__button {
  position: relative;
  display: inline-block;
  margin-top: 0;
  margin-right: -4px;
  margin-bottom: 0;
  margin-left: 8px;
  padding-left: 16px;
  border-left: 1px solid #008fa1;
  background-image: url("../../icons/cross.svg");
  background-size: 8px;
  width: 8px;
  line-height: 1;
  opacity: .75;
}

.choices[data-type*="select-multiple"] .choices__button:hover, .choices[data-type*="select-multiple"] .choices__button:focus, .choices[data-type*="text"] .choices__button:hover, .choices[data-type*="text"] .choices__button:focus {
  opacity: 1;
}

.choices__inner {
  display: inline-block;
  vertical-align: top;
  width: 100%;
  background-color: #f9f9f9;
  padding: 7.5px 7.5px 3.75px;
  border: 1px solid #DDDDDD;
  border-radius: 2.5px;
  font-size: 14px;
  min-height: 44px;
  overflow: hidden;
}

.is-focused .choices__inner, .is-open .choices__inner {
  border-color: #b7b7b7;
}

.is-open .choices__inner {
  border-radius: 2.5px 2.5px 0 0;
}

.is-flipped.is-open .choices__inner {
  border-radius: 0 0 2.5px 2.5px;
}

.choices__list {
  margin: 0;
  padding-left: 0;
  list-style: none;
}

.choices__list--single {
  display: inline-block;
  padding: 4px 16px 4px 4px;
  width: 100%;
}

[dir="rtl"] .choices__list--single {
  padding-right: 4px;
  padding-left: 16px;
}

.choices__list--single .choices__item {
  width: 100%;
}

.choices__list--multiple {
  display: inline;
}

.choices__list--multiple .choices__item {
  display: inline-block;
  vertical-align: middle;
  border-radius: 20px;
  padding: 4px 10px;
  font-size: 12px;
  font-weight: 500;
  margin-right: 3.75px;
  margin-bottom: 3.75px;
  background-color: #00BCD4;
  border: 1px solid #00a5bb;
  color: #FFFFFF;
  word-break: break-all;
}

.choices__list--multiple .choices__item[data-deletable] {
  padding-right: 5px;
}

[dir="rtl"] .choices__list--multiple .choices__item {
  margin-right: 0;
  margin-left: 3.75px;
}

.choices__list--multiple .choices__item.is-highlighted {
  background-color: #00a5bb;
  border: 1px solid #008fa1;
}

.is-disabled .choices__list--multiple .choices__item {
  background-color: #aaaaaa;
  border: 1px solid #919191;
}

.choices__list--dropdown {
  display: none;
  z-index: 1;
  position: absolute;
  width: 100%;
  background-color: #FFFFFF;
  border: 1px solid #DDDDDD;
  top: 100%;
  margin-top: -1px;
  border-bottom-left-radius: 2.5px;
  border-bottom-right-radius: 2.5px;
  overflow: hidden;
  word-break: break-all;
}

.choices__list--dropdown.is-active {
  display: block;
}

.is-open .choices__list--dropdown {
  border-color: #b7b7b7;
}

.is-flipped .choices__list--dropdown {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: -1px;
  border-radius: .25rem .25rem 0 0;
}

.choices__list--dropdown .choices__list {
  position: relative;
  max-height: 300px;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  will-change: scroll-position;
}

.choices__list--dropdown .choices__item {
  position: relative;
  padding: 10px;
  font-size: 14px;
}

[dir="rtl"] .choices__list--dropdown .choices__item {
  text-align: right;
}

@media (min-width: 640px) {
  .choices__list--dropdown .choices__item--selectable {
    padding-right: 100px;
  }
  .choices__list--dropdown .choices__item--selectable:after {
    content: attr(data-select-text);
    font-size: 12px;
    opacity: 0;
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
  }
  [dir="rtl"] .choices__list--dropdown .choices__item--selectable {
    text-align: right;
    padding-left: 100px;
    padding-right: 10px;
  }
  [dir="rtl"] .choices__list--dropdown .choices__item--selectable:after {
    right: auto;
    left: 10px;
  }
}

.choices__list--dropdown .choices__item--selectable.is-highlighted {
  background-color: #f2f2f2;
}

.choices__list--dropdown .choices__item--selectable.is-highlighted:after {
  opacity: .5;
}

.choices__item {
  cursor: default;
}

.choices__item--selectable {
  cursor: pointer;
}

.choices__item--disabled {
  cursor: not-allowed;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  opacity: .5;
}

.choices__heading {
  font-weight: 600;
  font-size: 12px;
  padding: 10px;
  border-bottom: 1px solid #f7f7f7;
  color: gray;
}

.choices__button {
  text-indent: -9999px;
  -webkit-appearance: none;
  -moz-appearance: none;
       appearance: none;
  border: 0;
  background-color: transparent;
  background-repeat: no-repeat;
  background-position: center;
  cursor: pointer;
}

.choices__button:focus {
  outline: none;
}

.choices__input {
  display: inline-block;
  vertical-align: baseline;
  background-color: #f9f9f9;
  font-size: 14px;
  margin-bottom: 5px;
  border: 0;
  border-radius: 0;
  max-width: 100%;
  padding: 4px 0 4px 2px;
}

.choices__input:focus {
  outline: 0;
}

[dir="rtl"] .choices__input {
  padding-right: 2px;
  padding-left: 0;
}

.choices__placeholder {
  opacity: .5;
}

/*=====  End of Choices  ======*/
* {
  box-sizing: border-box;
}

.s006 {
  min-height: 100vh;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
      justify-content: center;
  -ms-flex-align: center;
      align-items: center;
  font-family: 'Poppins', sans-serif;
  background-position: center center;
  padding: 15px;
}

.s006 {
  width: 100%;
  max-width: 100%; 
  /*790px;*/
}

.s006 legend {
  font-size: 36px;
  color: #fff;
  font-weight: 800;
  text-align: center;
  margin-bottom: 38px;
}

.s006 .inner-form {
  width: 100%;
  margin-bottom: 17px;
}

.s006 .inner-form .input-field {
  height: 70px;
  width: 100%;
  position: relative;
}

.s006 .inner-form .input-field input {
  height: 100%;
  width: 100%;
  background: transparent;
  border: 0;
  background: #fff;
  display: block;
  width: 100%;
  padding: 10px 32px 10px 70px;
  font-size: 18px;
  color: #666;
  border-radius: 34px;
}

.s006 .inner-form .input-field input.placeholder {
  color: #ccc;
  font-size: 18px;
}

.s006 .inner-form .input-field input:-moz-placeholder {
  color: #ccc;
  font-size: 18px;
}

.s006 .inner-form .input-field input::-webkit-input-placeholder {
  color: #ccc;
  font-size: 18px;
}

.s006 .inner-form .input-field input:hover, .s006 .inner-form .input-field input:focus {
  box-shadow: none;
  outline: 0;
}

.s006 .inner-form .input-field .btn-search {
  width: 70px;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
      align-items: center;
  position: absolute;
  left: 0;
  height: 100%;
  background: transparent;
  border: 0;
  padding: 0;
  cursor: pointer;
  display: flex;
  -ms-flex-pack: center;
      justify-content: center;
  align-items: center;
}

.s006 .inner-form .input-field .btn-search svg {
  fill: #ccc;
  width: 30px;
  height: 30px;
  transition: all .2s ease-out, color .2s ease-out;
}

.s006 .inner-form .input-field .btn-search:hover, .s006 .inner-form .input-field .btn-search:focus {
  outline: 0;
  box-shadow: none;
}

.s006 .inner-form .input-field .btn-search:hover svg, .s006 .inner-form .input-field .btn-search:focus svg {
  fill: #666;
}

.s006 .suggestion-wrap {
  padding: 0 15px;
}

.s006 .suggestion-wrap span {
  font-size: 14px;
  font-family: 'Helvetica', sans-serif;
  display: inline-block;
  background: rgba(0, 0, 0, 0.6);
  padding: 0 15px;
  line-height: 32px;
  color: #fff;
  border-radius: 16px;
  margin-right: 10px;
  margin-bottom: 10px;
}

@media screen and (max-width: 767px) {
  .s006 .inner-form .input-field {
    margin-bottom: 20px;
    height: 50px;
  }
  .s006 .inner-form .input-field input {
    padding-left: 55px;
    font-size: 16px;
  }
  .s006 .inner-form .input-field .btn-search svg {
    width: 26px;
    height: 26px;
  }
}


body {
  padding-top: 20px;
  background: rgb(2,0,36);
background: -moz-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(21,57,30,1) 35%, rgba(25,86,91,1) 100%, rgba(0,212,255,1) 100%);
background: -webkit-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(21,57,30,1) 35%, rgba(25,86,91,1) 100%, rgba(0,212,255,1) 100%);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(21,57,30,1) 35%, rgba(25,86,91,1) 100%, rgba(0,212,255,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#020024",endColorstr="#00d4ff",GradientType=1);

}


#error-msg{
padding:16px;margin-top:90px;font-size:1.3em;
}

.card-deck {
  margin: 0 -15px;
  justify-content: space-between;
}

.card-deck .card {
  margin: 0 0 1rem;
}

@media (min-width: 576px) and (max-width: 767.98px) {
  .card-deck .card {
    -ms-flex: 0 0 48.7%;
    flex: 0 0 48.7%;
  }
}

@media (min-width: 768px) and (max-width: 991.98px) {
  .card-deck .card {
    -ms-flex: 0 0 32%;
    flex: 0 0 32%;
  }
}
@media (min-width: 992px)
{
  .card-deck .card {
    -ms-flex: 0 0 24%;
    flex: 0 0 24%;
  }
}




.card-img-top {
    width: 100%;
    height: 210px;


    object-fit: fill;
}


.result{
  width: 70%;
  margin:auto;
  margin-top:70px;

}



#nums{
  color:white;
}


#cardcss{
    background: rgba(0, 0, 0, 0.5);
}


#cardtextcss{
  font-size: 0.9em;color:white;
}
	.checked {
  color: orange;
}
body{
	background: rgb(2,0,36);
background: -moz-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(21,57,30,1) 35%, rgba(25,86,91,1) 100%, rgba(0,212,255,1) 100%);
background: -webkit-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(21,57,30,1) 35%, rgba(25,86,91,1) 100%, rgba(0,212,255,1) 100%);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(21,57,30,1) 35%, rgba(25,86,91,1) 100%, rgba(0,212,255,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#020024",endColorstr="#00d4ff",GradientType=1);
}

#cardtextcss{
color:white;
}

#imgloco{
width: 100%;height: 210px;object-fit: fill;

}


#cardcss{
	background: rgba(0, 0, 0, 0.5);
}

.spaces{
	height: 90px;
}

.notchecked{

	color:#7C7C7C;
}
#contentrow{

	padding: 10px;
}

#imglol{
	width:170px;
}

#titlepg{
	color:white;
	font-size: 1.6rem;
}

#pricediv{
	font-size:1.5em;
	margin-right: 8px;
}



#pricefirstspan{
	color:red;
	text-decoration: line-through;
	margin-right: 12px;
}


#pricelastspan{
	color:white;
}



.breakspace{
	height: 40px;
}


.desc{
	background: rgba(255,255,255, 0.4);padding: 12px;color:black;font-size: 18px;
}
div.dataTables_wrapper div.dataTables_length select,div.dataTables_wrapper div.dataTables_length input{width:auto}div.dataTables_wrapper div.dataTables_length.d-flex.flex-row label{margin-top:1.2rem;margin-right:1rem}div.dataTables_wrapper div.dataTables_length.d-flex.flex-row .select-wrapper.mdb-select span,div.dataTables_wrapper div.dataTables_length.d-flex.flex-row .select-wrapper.mdb-select .select-dropdown{margin-top:1rem}div.dataTables_wrapper div.dataTables_length label,div.dataTables_wrapper div.dataTables_filter label{padding-top:.5rem;padding-bottom:.5rem;font-weight:400;text-align:left}div.dataTables_wrapper div.dataTables_filter{text-align:right}div.dataTables_wrapper div.dataTables_filter select,div.dataTables_wrapper div.dataTables_filter input{width:auto}div.dataTables_wrapper div.dataTables_filter input{display:inline-block;margin-left:.5rem}div.dataTables_wrapper div.dataTables_info,div.dataTables_wrapper div.dataTables_paginate{padding-top:1rem;padding-bottom:1rem;font-weight:400}div.dataTables_wrapper div.dataTables_paginate{margin:0;text-align:right}div.dataTables_wrapper div.dataTables_paginate ul.pagination{-ms-flex-pack:end;justify-content:flex-end;-webkit-box-pack:end}div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.active .page-link:focus{background-color:#4285f4}div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item .page-link:focus{-webkit-box-shadow:none;box-shadow:none}@media (max-width: 767px){div.dataTables_wrapper div .dataTables_length,div.dataTables_wrapper div .dataTables_filter,div.dataTables_wrapper div .dataTables_info,div.dataTables_wrapper div .dataTables_paginate ul.pagination{-ms-flex-pack:center;justify-content:center;text-align:center;-webkit-box-pack:center}}.bs-select select{display:inline-block !important}table.dataTable thead{cursor:pointer}table.dataTable thead>tr>th.sorting_asc,table.dataTable thead>tr>th.sorting_desc,table.dataTable thead>tr>th.sorting,table.dataTable thead>tr>td.sorting_asc,table.dataTable thead>tr>td.sorting_desc,table.dataTable thead>tr>td.sorting{padding-right:30px}table.dataTable thead>tr>th:active,table.dataTable thead>tr>td:active{outline:none}table.dataTable thead .sorting,table.dataTable thead .sorting_asc,table.dataTable thead .sorting_desc,table.dataTable thead .sorting_asc_disabled,table.dataTable thead .sorting_desc_disabled{position:relative;cursor:pointer}table.dataTable thead .sorting:before,table.dataTable thead .sorting:after,table.dataTable thead .sorting_asc:before,table.dataTable thead .sorting_asc:after,table.dataTable thead .sorting_desc:before,table.dataTable thead .sorting_desc:after,table.dataTable thead .sorting_asc_disabled:before,table.dataTable thead .sorting_asc_disabled:after,table.dataTable thead .sorting_desc_disabled:before,table.dataTable thead .sorting_desc_disabled:after{position:absolute;bottom:.9em;display:block;opacity:.3}table.dataTable thead .sorting:before,table.dataTable thead .sorting_asc:before,table.dataTable thead .sorting_desc:before,table.dataTable thead .sorting_asc_disabled:before,table.dataTable thead .sorting_desc_disabled:before{right:1em;font-family:"Font Awesome\ 5 Free", sans-serif;font-size:1rem;font-weight:900;content:"\f0de"}table.dataTable thead .sorting:after,table.dataTable thead .sorting_asc:after,table.dataTable thead .sorting_desc:after,table.dataTable thead .sorting_asc_disabled:after,table.dataTable thead .sorting_desc_disabled:after{right:16px;font-family:"Font Awesome\ 5 Free", sans-serif;font-size:1rem;font-weight:900;content:"\f0dd"}table.dataTable thead .sorting_asc:before,table.dataTable thead .sorting_desc:after{opacity:1}table.dataTable thead .sorting_asc_disabled:before,table.dataTable thead .sorting_desc_disabled:after{opacity:0}


/*# sourceMappingURL=datatables.min.css.map*/



