define(["require","react","jquery"],function(e){var t=e("react"),n=e("jquery"),r=t.createClass({displayName:"Threads",render:function(){var n=this.props.threads.map(function(e){var n=[];e.users.forEach(function(e){n.push(e.username)});var r="/threads/view/"+e.id,i=new Intl.DateTimeFormat("en",{month:"short"}),s=i.format(new Date(e.modified))+" "+(new Date(e.modified)).getDay();return t.createElement("div",null,t.createElement("hr",null),t.createElement("a",{href:r},t.createElement("div",{className:"row"},t.createElement("div",{className:"col-md-3 text-center"},t.createElement("img",{src:"/TwbsTheme/img/avatar.jpg",className:"img-circle img-responsive center-block"})),t.createElement("div",{className:"col-md-9"},t.createElement("span",{className:"pull-right"},s),n,t.createElement("p",null,e.messages[0].body)))))});return t.createElement("div",null,n)}});return r});