@yield('addjs')
@yield('addCss')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale = 1.0,maximum-scale = 1.0" />
<link href="{{{asset('asset/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}}" rel="stylesheet">
<link rel="stylesheet" href="{{{asset('asset/leaflet/leaflet.css')}}}" />
<link rel="stylesheet" href="{{{asset('asset/leaflet-marker-cluster/MarkerCluster.css')}}}" />
<link rel="stylesheet" href="{{{asset('asset/leaflet-marker-cluster/MarkerCluster.Default.css')}}}" />
<link href="{{{asset('asset/bootswatch/bootstrap.min.css')}}}" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.png" >

<script src="{{{asset('asset/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}}"></script>
<script src="{{{asset('asset/js/jquery-3.1.1.min.js')}}}"></script>
<script src="{{{asset('asset/leaflet/leaflet.js')}}}"></script>
<script src="{{{asset('asset/leaflet-marker-cluster/MarkerCluster.js')}}}"></script>
<script src="{{{asset('asset/leaflet-marker-cluster/MarkerClusterGroup.js')}}}"></script>
<script src="{{{asset('asset/leaflet-marker-cluster/DistanceGrid.js')}}}"></script>
<script src="{{{asset('asset/leaflet-marker-cluster/MarkerCluster.Spiderfier.js')}}}"></script>
<script src="{{{asset('asset/leaflet-marker-cluster/MarkerCluster.QuickHull.js')}}}"></script>
<script src="{{{asset('asset/leaflet-marker-cluster/MarkerClusterGroup.Refresh.js')}}}"></script>
<script src="{{{asset('asset/leaflet-marker-cluster/MarkerOpacity.js')}}}"></script>
<style type="text/css">
/*

#F2E9CD
background-color: #F2E9CD;

*/

/*
common
*/
  .margin-top{
    margin-top: 60px;
  }
  .padding-top{
    padding-top: 60px;
    text-align: center;
  }
  a:hover{
    color:#D4D4B4;
  }
  .bg-light{
    background-color: #f8f8f8;
  }
  .height{
    height: 100%;
  }
  .text-center{
    text-align: center;
  }
  .title {
    margin-bottom: 40px;
  }
  .title h1{
    font-family: HelveticaNeue-Bold, Helvetica-Bold, "Helvetica Neue", Helvetica, "ヒラギノ角ゴ Pro W6", HiraKakuPro-W6, メイリオ, Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
    font-size: 1.75em;
    line-height: 128%;
    font-weight: bold;
    color: rgb(51, 51, 51);
    margin-top: 0px;
    display: inline;
  }
  .margin-top h1{
    font-family: HelveticaNeue-Bold, Helvetica-Bold, "Helvetica Neue", Helvetica, "ヒラギノ角ゴ Pro W6", HiraKakuPro-W6, メイリオ, Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
    font-size: 1.75em;
    line-height: 128%;
    font-weight: normal;
    color: rgb(51, 51, 51);
    margin-top: 0px;
    margin-bottom: 10px;
    display: inline;
  }

/*
search box
*/
  .search-box{
    width: 40px;
    height: 40px;
    position: fixed;
    top: 50px;
    right: 0;
    font-size: 2em;
    line-height: 80px;
    border: none;
    font-weight: 300;
    border-radius: 0;
    z-index: 11;
    padding: 0;
    margin: 0;
    outline: 0;
    cursor: pointer;
    border-top: 40px solid rgba(248,248,248,1);
    border-right: 40px solid rgba(248,248,248,1);
    border-bottom: 40px solid rgba(0,0,0,0);
    border-left: 40px solid rgba(0,0,0,0);
  }
  .search-box.close{
    display:none;
  }
  .search-icon{
    position: absolute;
    top: -34px;
    left: 0;
    width: 40px;
    height: 40px;
    z-index: 11;
    line-height: 40px;
    text-align: center;
    border-radius: 3px;
    color: rgba(114,114,114,1);
    background-color: rgba(0,0,0,0);
  }
  .search-menu.in{
    box-shadow: 10px 20px 28px 10px rgba(0,0,0,.22), 0 20px 30px 10px rgba(0,0,0,.21);
    background-color: #f8f8f8;
    width: 0px;
    position: absolute;
    top: 0!important;
    bottom: 0;
    right: 0;
    min-height: 100%;
    margin: 0;
    padding: 0;
    z-index: 10;
    overflow: hidden;
  }

.form-section{
  width: 400px;
  margin: 40px auto 0px auto;
}

.form-target ul li{
  list-style: none;
  color: #000;
/*  font-size:25px;*/
  position: relative;
  /*margin-bottom: 25px;*/
}

.form-target input[type="checkbox"] {
  display: none !important;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  display: inline-block;
  width: 35px;
  height: 35px;
  background: #fff;
  vertical-align: top;
  position: relative;
  top: -5px;
  margin-right: 10px;
  box-sizing: border-box;
  border: 3px solid #999;
  border-radius: 3px;
  transition: border 0.3s;
  
}
.form-target input[type="checkbox"]:focus {
  outline: transparent;
}
.form-target input[type="checkbox"]:checked {
  border: 3px solid #000;
}
.form-target input[type="checkbox"]:checked ~ label {
  color: #000;
}
.form-target input[type="checkbox"]:checked ~ label:before {
  border: 3px solid #000;
}
.form-target input[type="checkbox"]:checked ~ label svg path {
  stroke-dashoffset: 0;
  stroke-opacity: 1;
  fill: rgb(75, 75, 75);
}

.form-target label{
  cursor: pointer;
  color: #999;
  transition: color 0.3s;
}

.form-target label:before{
  content : '';
  display: inline-block;
  width: 28px;
  height: 28px;
  margin-right: 15px;
  position: relative;
  top: 7px;
  border: 3px solid #999;
  border-radius: 3px;
}

.form-target svg {
  width: 24px;
  height: 24px;
  left: 6px;
  top: 11px;
  position: absolute;
  z-index: 1;
}
.form-target svg path {
  fill: none;
  stroke: #000;
  stroke-linejoin: round;
  stroke-linecap: round;
  stroke-dasharray: 250;
  stroke-dashoffset: 250;
  stroke-opacity: 0;
  stroke-width: 3px;
  transition: stroke-dashoffset 0.3s ease, stroke-opacity 0.3s;
}



/*
chat box
*/
  .friends{
  }
  .friend{
    overflow: auto;
    overflow-wrap: break-word;
    word-wrap:break-all;
    display: block;
    min-height: 70px;
    border-bottom: 1px solid #e7ebee;
    position: relative;
  }
  .friend img{
    width: 40px;
    border-radius: 50%;
    margin: 15px;
    float: left;
  }
  .friend p{
    display: block;
    margin: 0px;
    padding: 15px 0 0 0;
  }
  .friend:hover {
    background: #f1f4f6;
    cursor: pointer;
  }

  .profile{
    height: 120px;
    overflow: auto;
    text-align: center;
    background-color: #f1f4f6;
  }
  .profile img{
    width: 40px;
    border-radius: 50%;
    margin: 15px;
  }
  .chat-messages{
    width: 290px;
    height: 270px;
    overflow-y: scroll;
    overflow-x: hidden;
  }
  .chat-messages label{
    color: #aab8c2;
    font-weight: 600;
    font-size: 12px;
    text-align: center;
    margin: 15px 0;
    width: 290px;
    display: block;
  }
  .chat-messages .message{
    padding: 0 0 30px 58px;
    clear: both;
    margin-bottom: 45px;
  }
  .chat-messages .message .right{
    padding: 0 58px 30px 0;
    margin-right: -19px;
    margin-left: 19px;
  }
  .right .bubble{
    background-color: #F2E9CD !important;
  }
 .right .corner{
    position: absolute;
    width: 7px;
    height: 7px;
    bottom: 0;
    left: auto;
    right: -18px;
    width: 0;
    height: 0;
    border-right: 20px solid rgba(0,0,0,0);
    border-bottom: 10px solid #F2E9CD;

  }
  .chat-messages img{
    float: left;
    margin-left: -38px;
    border-radius: 50%;
    width: 30px;
    margin-top: 12px;
  }

  .message .bubble {
    background: #f0f4f7;
    font-size: 13px;
    font-weight: 600;
    padding: 12px 13px;
    border-radius: 5px 5px 5px 5px;
    color: #8495a3;
    position: relative;
    float: left;
    margin-bottom: 20px;
    margin-right: 20px;
  }
  .bubble span{
    color: #aab8c2;
    font-size: 11px;
    position: absolute;
    right: 0;
    bottom: -22px;
  }
  #close {
    background-color: black;
    position: absolute;
    top: 8px;
    opacity: 0.8;
    right: 10px;
    width: 20px;
    height: 20px;
    cursor: pointer;
  }

  .cy.s3 {
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    -webkit-transition: all 100ms ease-out;
    -moz-transition: all 100ms ease-out;
    -ms-transition: all 100ms ease-out;
    -o-transition: all 100ms ease-out;
    transition: all 100ms ease-out;
  }

  .cy.s2 {
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    -webkit-transition: all 100ms ease-out;
    -moz-transition: all 100ms ease-out;
    -ms-transition: all 100ms ease-out;
    -o-transition: all 100ms ease-out;
    transition: all 100ms ease-out;
  }
/*
top-page
*/
  html, body {
    height: 100%; margin: 0; padding: 0;
  }
  a.overlay {
    background-color: rgba(166,169,133,0.5);
    padding: 15px;
  }
  .container-fluid{
    background-color: #fff;
    border-color: #e7e7e7;
  }
  .navbar-color{
    background-color: #f8f8f8;
    border-color: #e7e7e7;
  }
  .navbar-default {
    height: 50px;
  }
  .navbar-header {
    background-color: #fff;
  }
  .header-logo {
    height: 40px;
    margin: 5px 5px; /* height + margin-bottom + margin-top = navbar-default::height */
  }
  .fixed-screen-bottom {
    position: fixed;
    bottom: 0px;
    left: 0px;
  }
  .page-footer {
    border-top: 3px solid #efefef;
    background-color: #f8f8f8;
    position: relative;
    float: left;
    width: 100%;
    padding: 40px 0;
    margin: 0;
    text-align: center;
  }
  .text-color{
    font-size: 0.9em;
    color: #333;
    font-weight: bold;
  }
  .map-container {
    padding-top: 50px;    /* = height of header */
    padding-bottom: 60px; /* = height of footer */
    height: 100%;
    position: relative;
  }
  .page-container {
    margin-right: auto;
    margin-left: auto;
    position: relative;
    display: table;
    height: 100%;
  }
  .page-container-review {
    margin: 0 auto;
    position: relative;
    display: table;
    height: 100%;
    max-width: 1000px
  }
  .terms-content{
    padding-top:50px;
    padding-bottom:50px;
  }
  .page-content {
    display: table-cell;
    vertical-align: middle;
  }
  h1 {
    text-align: center;
    font-size: 18px;
    color: #666;
  }
  .max-with{
    max-width: 440px;
    min-height: 100%;
    margin: 0 auto;
  }
  .container-size2{
    max-width: 770px;
    margin-right: 20px;
    margin-left:20px;
  }
  .headline{
    padding-top:0px;
    padding-bottom:0px;
    border-top:0px;
  }
  .headline-text{
    margin-top:84px;
  }
  .headline-logo{
    width: 75px;
    height:75px;
  }
  .headline-panel{
    background-color: #F3F3F3;
  }
  .regist-headline{
    background-color: #C5C5C5;
    margin-bottom: 0px;
  }
  .regist-headline-text{
    padding-left:30px;
    padding-right:30px;
  }
  .regist-headline-logo{
    width: 45px;
    height:45px;
  }
  #map {
    height: 100%;
  }
  .page-map{
    height:300px;
    width: 300px
  }
  .current-location{
    display: block;
    position: fixed;
    top: 86.5%;
    right: 40px;
    z-index: 2!important;
    text-align: right;
    height:54px;
  }
  .current-location button{
    background-color: rgb(255, 255, 255);
    border: 1px solid transparent;
    box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px;
    border-radius: 2px;
    height:54px;
  }
  .current-location img{
    width: 25px;
    height:25px;
  }
  .shop-counter {
    display: block;
    position: fixed;
    top: 70px;
    right: 10px;
    font-size:50px;
    padding: 0 5px 0 10px;
    font-weight: 700;
    line-height: 60px;
    color: rgba(255, 255, 255, 1);
    z-index: 1!important;
    text-align: right;
    text-shadow:
        0 0 25px #5a5649,
        0 0 20px #d4a817,
        0 0 0.40px #d4a817;
  }
  .panel-heading {
    padding: 15px 15px;
  }
  .shop-counter-text {
    display: block;
    font-size: 32;
  }
  .shop-counter-figure {
    display: block;
  }
  .shop-content-container{
    z-index: 4!important;
  }
  .shop-content{
    font-family: "メイリオ", sans-serif;
    background-color: #FAFAF7;
    padding:10px;
  }
  .shop-content-title{
    font-weight:bold;
    font-family: "メイリオ", sans-serif;
    background-color: rgba(241,241,160,0.6);
    padding:10px;
  }
  .search-select{
    border-radius: 0 !important;
  }
  .navbar-default{
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.25);
  }
  .main{
    position: absolute;
    top: 50px;
    right: 0;
    bottom: 0px;
    left: 0;
  }
  .map {
    height: 100%;
    z-index: 0;
  }

/*
sidemenu-contents
*/
  .content-info-container{
    padding: 10px 5px 10px 10px;
  }
  .content-info-container a{
    display: block;
    cursor: pointer;
  }
  .content-info{
    display: table;
    table-layout: fixed;
    width: 100%;
  }
  .content-info-imgbox{
    display: table-cell;
    margin-right: 2px;
    position: relative;
    width: 110px;
    border-radius: 4px;
    background-color: #F2E9CD;
    color: #fff;
  }
  .content-info-imgbox img{
    position: absolute;
    top: 0;
    left: 0;
    width: 110px;
    height: 75px;
    border-radius: 4px 4px 0 0;
    vertical-align: middle;
  }
  .content-info-imgbox p{
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    padding: 2px 5px 2px 0;
    margin-bottom: 0px;
    color: black;
    font-size: 12px;
    line-height: 14px;
    text-align: right;
    border-radius: 0 0 4px 4px;
    display: block;
    -webkit-margin-before: 1em;
/*    -webkit-margin-after: 1em;*/
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
  }
  .content-info-imgbox span{
    display: block;
    padding-bottom: 2px;
    font-size: 9px;
  }
  .content-info-textbox{
    display: table-cell;
    padding-left: 5px;
    vertical-align: top;
  }
  .content-info-textbox .title{
    color: #333;
    font-size: 12px;
    font-weight: 400;
    line-height: 18px;
    max-width: 225px;
    height: 40px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
  }
  .clearfix{
    max-width:170px;
  }
  .clearfix-last{
    max-width:170px;
    padding-top: 12px;
  }
  .clearfix::before{
    display: table;
    content: " ";
  }
  .clearfix .star{
    color: #fc0;
    font-size: 12px;
    line-height: 14px;
  }
  .info-textbox{
    color: #333;
    font-size: 10px;
    line-height: 14px;
  }
  .info-textbox-disc{
    float: left !important;
    margin-right: 5px;
    color: #333;
    font-size: 10px;
    line-height: 14px;
  }
  .info-textbox-disc img{
    border-radius: 50%;
    vertical-align: middle;
    width: 30px;
    height: 30px;
  }
  .info-textbox-right{
    float: right !important;
  }
  .info-textbox-right p{
    color: #333;
    font-size: 10px;
    line-height: 15px;
    margin-bottom: 0;
  }

  .side-menu-container{
    position: relative;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    z-index: 3;
    flex-direction: column;
    min-height: 100%;
    display: flex;
  }
  .side-menu-content-set{
    padding-top: 40px;
    padding-bottom: 40px;
    padding-left: 40px;
    padding-right: 40px;
    min-width: 0;
    min-height: 100%;
    display: flex;
    flex-direction: column;
  }
  .side-menu-content{
    font-family: "メイリオ", sans-serif;
    font-size: 12px;
    background-color: #fff;
    margin-bottom: 20px;
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.25);
    min-width: 0;
    min-height: 0;
    display: block;
    flex: 0 0 auto;
    overflow-wrap: break-word;
    word-wrap:break-all;
  }
  .side-menu-content a{
    display:block;
  }
  .side-menu-content-container{
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
  }
  .side-menu-title{
/*    background-image: url("img/title.jpg");*/
    background-size:100% auto;
  }
  .img-cover {
    background-color:	rgba(242,233,205,0.9);
  }
  .img-cover strong{
    color: rgb(0,0,0);
  }
  .side-menu-url a{
    color: #EF0000;
  }
  .read-more{
    margin-left: -40px;
    margin-right: -40px;
    margin-top: 0!important;
    flex: 0 0 auto;
    min-width: 0;
    min-height: 0;
    bottom: 0px;
  }
  .read-more-button{
    display: block;
    width: 100%;
    background-color: #ebedeb;
    color: #DBD952;
    line-height: 1;
    text-transform: uppercase;
    border: 1px solid transparent;
  }
  .content-read-more-button{
    display: block;
    background-color: #fff;
    color: black;
    line-height: 1;
    text-transform: uppercase;
    border: 1px solid transparent;
  }
  .side-menu-toggle-container{
      position: fixed;
      right: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #fff;
      border: none;
      box-shadow: 0 1px 3px 0 rgba(0,0,0,.25);
      text-align: center;
  }
  .side-menu-toggle{
/*      position: fixed;*/
      float: left;
      right: 0;
      bottom: 0;
      left: 0;
      width: 19.99%;
      background-color: #fff;
      border: none;
      box-shadow: 0 1px 3px 0 rgba(0,0,0,.25);
      text-align: center;
  }
  .view-content{
    height: 30px;
  }
  .view-map{

  }
  @media (min-width: 800px){
    .side-menu{
      box-shadow:10px -20px 28px 0 rgba(0,0,0,.22), 0 -20px 30px 0 rgba(0,0,0,.21);
      background-color: #f8f8f8;
      width: 30%;
      position: absolute;
      top: 0!important;
      bottom: 0;
      left: 0;
      min-height: 100%;
      margin: 0;
      padding: 0;
      z-index: 3;
      overflow: hidden;
    }
    .page-container {
      min-width: 600px
    }
    .map{
      width:70%;
      left: 30%;
    }
    .table-content{
      min-width: 620px
    }
    .shop-counter {
      font-size: 50px;
    }
  }
  @media (max-width: 800px){
    .map{
      width: 100%;
    }
    .table-content{
      min-width: 600px
    }
  }
  @media (max-width: 768px){
    .search-btn{
      padding: 23px 12px;
    }
    .page-container {
      min-width: 300px
    }
    .side-menu.in{
      position: absolute;
      top: 0;
      margin-top: 0;
    }
    .side-menu{
      transition: top .3s cubic-bezier(.4,0,.2,1);
      position: fixed;
      top: 100%;
      width: 100%;
      height: auto!important;
      min-height: 100%;
      margin-top: 50px;
      z-index: 8;
      overflow: hidden;
      background-color: #fff;
      box-shadow: 0 1px 3px 0 rgba(0,0,0,.25);
    }

    .side-menu-toggle-container{
      height: 60px;
      z-index: 12;
    }
    .side-menu-toggle{
      height: 60px;
      padding: 10px 20px;
      z-index: 12;
    }
    #map {
      height: 100%;
      bottom: 60px;
    }
    .main{
      padding-top: 60px;
    }
  }
  @media (max-width: 500px){
    .table-content{
      min-width: 300px
    }
    .shop-counter {
      font-size: 30px;
      line-height: 35px;
    }
    .shop-counter-text {
      display: block;
      font-size: 10;
    }
    .side-menu.in{
      position: absolute;
      top: 0;
      margin-top: 0;
    }
    .side-menu{
      transition: top .3s cubic-bezier(.4,0,.2,1);
      position: fixed;
      top: 100%;
      width: 100%;
      height: auto!important;
      min-height: 100%;
      margin-top: 50px;
      z-index: 8;
      overflow: hidden;
      background-color: #fff;
      box-shadow: 0 1px 3px 0 rgba(0,0,0,.25);
    }
    .side-menu-toggle-container{
      height: 60px;
      z-index: 12;
    }
    .side-menu-toggle{
      height: 60px;
      padding: 10px 20px;
      z-index: 12;
    }
    #map {
      height: 100%;
      bottom: 60px;
    }
    .main{
      padding-top: 60px;
    }
  }
</style>
