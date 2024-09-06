
<!DOCTYPE html>
<html lang='en' class=''>

<head>

  <meta charset='UTF-8'>
  <title>CodePen Demo</title>

  <meta name="robots" content="noindex">

  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
  <link rel="mask-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111">
  <link rel="canonical" href="https://codepen.io/ceskblue/pen/QWLMdZW">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <script type="text/javascript" src="/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=xJEy-LOBeeQTpZeAZUBnc0H_7e70gYtBDSrSkaQgRRykWOWho22z-j6gp3ODrT8g6wMU27RFn_NOptCYALqnENZp_uDyr1lObIfxywQu7eM1E5FD48VkvhUzukGL9j0CSUK8RxZEXM-IMPU_jqzcVA" charset="UTF-8"></script><style id="INLINE_PEN_STYLESHEET_ID">
    @import url("https://fonts.googleapis.com/css?family=Material+Icons|Work+Sans:400,700,900");
body {
  overflow: hidden;
}

.roulette {
  font-family: "Work Sans", sans-serif;
  display: block;
  position: absolute;
  width: 400px;
  height: 400px;
  top: 50%;
  left: 50%;
  margin-top: -200px;
  margin-left: -200px;
}
.roulette .shadow {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: 50%;
  box-shadow: 0 0.3em 0 rgba(0, 0, 0, 0.25) inset;
}
.roulette .markers {
  display: block;
  position: absolute;
  top: -1px;
  left: -1px;
  right: -1px;
  bottom: -1px;
  overflow: hidden;
  border-radius: 100%;
}
.roulette .markers .marker {
  position: absolute;
  width: 0;
  height: 0;
  top: -200px;
  left: 200px;
  transform-origin: 0% 400px;
  border: 0 solid transparent;
}
.roulette .markers .triangle {
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 1em 0 1em 1em;
  border-color: transparent transparent transparent #007bff;
  position: absolute;
  border-left-color: #fff;
  top: 50%;
  left: -1px;
  margin-top: -1em;
  filter: drop-shadow(0 0.25em 0 rgba(0, 0, 0, 0.25));
}
.roulette .spinner {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: 50%;
  overflow: hidden;
  transform: rotateZ(0deg);
  /*performance boost*/
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
}
.roulette .spinner .item {
  position: absolute;
  width: 0;
  height: 0;
  top: -200px;
  left: 200px;
  transform-origin: 0% 400px;
  border: 0 solid transparent;
}
.roulette .spinner .item .label {
  display: block;
  position: absolute;
  color: #fff;
  font-weight: 800;
  top: 0;
  left: 0;
  white-space: nowrap;
  transform-origin: 0 0;
  font-size: 0.8em;
}
.roulette .spinner .item .label i,
.roulette .spinner .item .label .text {
  display: inline-block;
  vertical-align: middle;
  line-height: 1;
  font-size: 1em;
  text-indent: 0;
}
.roulette .spinner .item .label i {
  margin-right: 0.1em;
}
.roulette .button {
  width: 10em;
  height: 10em;
  line-height: 10em;
  top: 50%;
  left: 50%;
  margin-left: -5em;
  margin-top: -5em;
  font-weight: 800;
  z-index: 998;
  position: absolute;
  background: #fff;
  border: none;
  border-radius: 100%;
  color: #999;
  outline: none;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  box-shadow: 0 0.4em 0 rgba(0, 0, 0, 0.25);
  text-align: center;
  transition: transform 0.15s;
  transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.roulette .button:hover {
  color: inherit;
}
.roulette .button span {
  font-size: 1.6em;
  letter-spacing: -0.05em;
}
.roulette.busy .button {
  transform: scale(0.9);
  box-shadow: 0 0.15em 0 rgba(0, 0, 0, 0.25);
  color: #999;
  cursor: default;
}

/* CUSTOM LABELS */
.roulette .spinner .item[data-type=quiz] .label {
  font-size: 1.5em;
}
.roulette .spinner .item[data-type=question] .label {
  font-size: 1.3em;
  font-weight: 600;
}
.roulette .spinner .item[data-type=replay] .label .text {
  font-size: 0.6em;
  white-space: initial;
  width: 1em;
  text-align: center;
  line-height: 1.2;
}
.roulette .spinner .item[data-type=replay] .label i {
  font-size: 1.5em;
}
.roulette .spinner .item[data-type=time] .label i {
  font-size: 1.5em;
}
  </style>

  
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeConsoleRunner-6d8bf8b4b479137260842506acbb12717dace0823c023e08b96360e60b0840d9.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-44fe83e49b63affec96918c9af88c0d80b209a862cf87ac46bc933074b8c557d.js"></script>
<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRuntimeErrors-4f205f2c14e769b448bcf477de2938c681660d5038bc464e3700256713ebe261.js"></script>
</head>

<body>
  <button onclick="spinner.spin()">RND</button>
<button onclick="spinner.spin(0)">0</button>
<button onclick="spinner.spin(1)">1</button>
<button onclick="spinner.spin(2)">2</button>
<button onclick="spinner.spin(3)">3</button>
<button onclick="spinner.spin(4)">4</button>

<div class="roulette">
  <div class="spinner"></div>
  <div class="shadow"></div>
  <div class="markers">
    <div class="triangle">
      
    </div>
  </div>
  <div class="button">
    <span>SPIN</span>
  </div>
</div>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone-min.js"></script>
  <script  src="https://cdpn.io/cpe/boomboom/pen.js?key=pen.js-ed83b6eb-04a2-d5b1-7951-fe2075ab8374" crossorigin></script>
</body>

</html>