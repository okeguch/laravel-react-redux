@extends('common.layout_top')

@section('title', "TOP")

@section('head')
    <meta name="_token" content="{{ csrf_token() }}">
    <script src="{{{asset('asset/js/jquery-3.1.1.min.js')}}}"></script>
    @include('common.head')
@endsection

@section('content')
@include('common.header')
<div class="map-container">
    <main class="main">
        <div class="side-menu-toggle-container" id="react-side-menu-conteiner">
            <button class='side-menu-toggle' onclick=openSideMenu();>
                <span class="view-content" id="view-content">MENU</span>
            </button>
            <button class='side-menu-toggle' onclick=closeSideMenu();>
                <span class="view-map" id="view-map"><img class="view-content" src="{{ url('img/map.svg') }}"></span>
            </button>
            <button class='side-menu-toggle' onclick=openSideMenu();>
                <span><img class="view-content" id="view-chat" src="{{ url('img/chat.svg') }}"></span>
            </button>
            <button class='side-menu-toggle' onclick=openSideMenu();>
                <span class="view-content" id="view-search"><img class="view-content" src="{{ url('img/search.svg') }}"></span>
            </button>
            <button class='side-menu-toggle' onclick=openSideMenu();>
                <span class="view-content" id="view-human"><img class="view-content" src="{{ url('img/human.svg') }}"></span>
            </button>
        </div>
        <div id="map" class="map"></div>

        <!-- search box -->
        <div class='search-box' onclick=openSearchMenu();><i class='search-icon glyphicon glyphicon-search'></i></div>
        <div class='search-box close' onclick=closeSearchMenu();><i class='search-icon glyphicon glyphicon-remove'></i></div>
        <div class='search-menu in' id=search-menu>


        <section>
        <h1>Search</h1>
        <div class="form-section">
            <form class="form-target">
                <ul>
                <li>
                    <input type="checkbox" id="check-00" />
                    <label for="check-00">check box
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 20px; height: 20px; opacity: 1;" xml:space="preserve">
                        <path class="st0" d="M469.402,35.492C334.09,110.664,197.114,324.5,197.114,324.5L73.509,184.176L0,254.336l178.732,222.172
        		l65.15-2.504C327.414,223.414,512,55.539,512,55.539L469.402,35.492z"></path></svg>
                    </label>
                </li>
                <li>
                    <input type="checkbox" id="check-01" />
                    <label for="check-01">check box
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 20px; height: 20px; opacity: 1;" xml:space="preserve">
                        <path class="st0" d="M469.402,35.492C334.09,110.664,197.114,324.5,197.114,324.5L73.509,184.176L0,254.336l178.732,222.172
        		l65.15-2.504C327.414,223.414,512,55.539,512,55.539L469.402,35.492z"></path></svg>
                    </label>
                </li>
                <li>
                    <input type="checkbox" id="check-02" />
                    <label for="check-02">check box
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 20px; height: 20px; opacity: 1;" xml:space="preserve">
                        <path class="st0" d="M469.402,35.492C334.09,110.664,197.114,324.5,197.114,324.5L73.509,184.176L0,254.336l178.732,222.172
        		l65.15-2.504C327.414,223.414,512,55.539,512,55.539L469.402,35.492z"></path></svg>
                    </label>
                </li>
                </ul>
            </form>
        </div>
        </section>


        </div>

        <div class="side-menu" id="side-menu">
            <div class="side-menu-container">
                <section class="side-menu-content-set" id="shop_content">
                    <div class='side-menu-content panel panel-default' id=content-$marker_key>
                        <a class='hvr-grow-shadow' onclick=contentClick(this);  id=$marker_key>
                            <div class='side-menu-title' >
                                <div class='img-cover panel-heading'>
                                    <strong>About us</strong>
                                </div>
                            </div>
                        </a>
                        <div class='panel-body'>
                            <div class= >name</div>
                            <div>example</div>
                            <div class='side-menu-url'>
                                <a href=$shop->URL</a>
                            </div>
                            <div>example</div>
                        </div>
                    </div>

                    <div class='side-menu-content panel panel-default' id=content-$marker_key>
                        <div class="content-info-container">
                            <a>
                                <div class="content-info">
                                    <div class="content-info-imgbox">
                                        <img src="{{{asset('img/content.jpg')}}}">
                                        <p><span>name</span>example</p>
                                    </div>
                                    <div class="content-info-textbox">
                                        <div class="title">
                                            title
                                        </div>

                                        <div class="clearfix">
                                            <div class="info-textbox">name</div>
                                        </div>

                                        <div class="clearfix">
                                            <div class="info-textbox-disc"><i></i>example:</div>
                                            <div class="info-textbox-right">
                                                <div class="clearfix">
                                                    <div class="star">
                                                        ☆☆☆☆☆☆
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="clearfix-last">
                                            <div class="info-textbox-disc">
                                                <img src="{{{asset('img/cat.jpg')}}}">
                                            </div>
                                            <div class="info-textbox-right">
                                                <p>name</p>
                                                <p>example</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class='side-menu-content panel panel-default' id=content-$marker_key>
                        <div class="content-info-container">
                            <a>
                                <div class="content-info">
                                    <div class="content-info-imgbox">
                                        <img src="{{{asset('img/content.jpg')}}}">
                                        <p><span>name</span>example</p>
                                    </div>
                                    <div class="content-info-textbox">
                                        <div class="title">
                                            title
                                        </div>

                                        <div class="clearfix">
                                            <div class="info-textbox">name</div>
                                        </div>

                                        <div class="clearfix">
                                            <div class="info-textbox-disc"><i></i>example:</div>
                                            <div class="info-textbox-right">
                                                <div class="clearfix">
                                                    <div class="star">
                                                        ☆☆☆☆☆☆
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="clearfix-last">
                                            <div class="info-textbox-disc">
                                                <img src="{{{asset('img/cat.jpg')}}}">
                                            </div>
                                            <div class="info-textbox-right">
                                                <p>name</p>
                                                <p>example</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
</div>
<script type="text/javascript">
$(function() {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });
});

function openSearchMenu(){
	$("#search-menu").animate({
		width: "240px",
	},{
		duration: "100",
		easing: "linear"
	});
    
    $(".search-box").css('display','none');
    $(".search-box.close").css('display','block');

}

function closeSearchMenu(){
	$("#search-menu").animate({
		width: "0px",
	},{
		duration: "100",
		easing: "linear"
	});
    $(".search-box").css('display','block');
    $(".search-box.close").css('display','none');
}

function openSideMenu() {
    document.getElementById("side-menu").className="side-menu in";
}

function closeSideMenu() {
    document.getElementById("side-menu").className="side-menu";
}

function MapInit(){


    var geoJsonData = {
        "type": "FeatureCollection", 
        "features": [
            { "type": "Feature", "id":"1", "properties": { "popup": "これは1番目です。"   }, "geometry": { "type": "Point", "coordinates": [139.768898, 35.672737] } },
            { "type": "Feature", "id":"2", "properties": { "popup": "これは2番目です。"   }, "geometry": { "type": "Point", "coordinates": [139.758496, 35.671062] } },
            { "type": "Feature", "id":"3", "properties": { "popup": "これは3番目です。"   }, "geometry": { "type": "Point", "coordinates": [139.768100, 35.672737] } },
            { "type": "Feature", "id":"4", "properties": { "popup": "これは4番目です。"   }, "geometry": { "type": "Point", "coordinates": [139.768200, 35.672737] } },
            { "type": "Feature", "id":"5", "properties": { "popup": "これは5番目です。"   }, "geometry": { "type": "Point", "coordinates": [139.768300, 35.672737] } },
            { "type": "Feature", "id":"6", "properties": { "popup": "これは6番目です。"   }, "geometry": { "type": "Point", "coordinates": [139.768300, 35.672737] } },
        ]
    };

    var tiles = L.tileLayer('http://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    });

    var map = L.map('map').addLayer(tiles);

    var markers = L.markerClusterGroup();

    var geoJsonLayer = L.geoJson(geoJsonData, {
        onEachFeature: function (feature, layer) {
            layer.bindPopup(feature.properties.popup);
        }
    });
    
    markers.addLayer(geoJsonLayer);

    map.addLayer(markers);
    map.fitBounds(markers.getBounds());
}

</script>
</script>
<script type="text/javascript">MapInit();</script>
<!-- <script src="{{{asset('js/menu.js')}}}"></script> -->
@endsection
