var React = require('react');
var ReactDOM = require('react-dom');

var Index = React.createClass({
    openSideMenu: function() {
        document.getElementById("side-menu").className="side-menu in";
    },
    closeSideMenu: function() {
        document.getElementById("side-menu").className="side-menu";
    },
    render:function(){
        var mapSvg    = `img/map.svg`;
        var chatSvg   = `img/chat.svg`;
        var searchSvg = `img/search.svg`;
        var humanSvg  = `img/human.svg`;
        return (
            <div>
                <button className="side-menu-toggle" onClick={this.closeSideMenu}>
                    <span className="view-map" id="view-map"><img className="view-content" src={mapSvg} /></span>
                </button>
                <button className="side-menu-toggle" onClick={this.openSideMenu} >
                    <span className="view-content" id="view-content" >検索結果</span>
                </button>
                <button className="side-menu-toggle" onClick={this.openSideMenu} >
                    <span className="view-content" ><img className="view-content" src={chatSvg} /></span>
                </button>
                <button className="side-menu-toggle" onClick={this.openSideMenu} >
                    <span className="view-content" ><img className="view-content" src={searchSvg} /></span>
                </button>
                <button className="side-menu-toggle" onClick={this.openSideMenu} >
                    <span className="view-content" ><img className="view-content" src={humanSvg} /></span>
                </button>
            </div>
        );
    }
});

ReactDOM.render(
  <Index />,
  document.getElementById('react-side-menu-conteiner')
);