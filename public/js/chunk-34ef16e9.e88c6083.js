(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-34ef16e9"],{"442b":function(t,e,s){"use strict";s.r(e);var i=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("Detail"),s("Sesson")],1)},a=[],m=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("section",{staticClass:"movie-detail container-fluid"},[i("b-row",[i("b-col",{attrs:{lg:"12"}},[i("div",{staticClass:"trending-info g-border"},[i("h1",{staticClass:"trending-text big-title text-uppercase mt-0"},[t._v("The Hero Camp")]),i("ul",{staticClass:"p-0 list-inline d-flex align-items-center movie-content"},[i("li",{staticClass:"text-white"},[t._v("Action")]),i("li",{staticClass:"text-white"},[t._v("Drama")])]),i("div",{staticClass:"d-flex align-items-center text-white text-detail"},[i("span",{staticClass:"badge badge-secondary p-3"},[t._v("18+")]),i("span",{staticClass:"ml-3"},[t._v("3 Seasons")]),i("span",{staticClass:"trending-year"},[t._v("2020")])]),i("div",{staticClass:"d-flex align-items-center series mb-4"},[i("a",{attrs:{href:"javascript:void();"}},[i("img",{staticClass:"img-fluid",attrs:{src:s("f1fa"),alt:""}})]),i("span",{staticClass:"text-gold ml-3"},[t._v("#2 in Series Today")])]),i("p",{staticClass:"trending-dec w-100 mb-0"},[t._v("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.")])])])],1)],1)},l=[],n={name:"Detail",components:{},mounted:function(){},data:function(){return{}}},o=n,d=s("2877"),p=Object(d["a"])(o,m,l,!1,null,null,null),r=p.exports,c=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("section",{staticClass:"container-fluid seasons"},[s("div",{staticClass:"iq-custom-select d-inline-block sea-epi s-margin"},[s("V-select",{attrs:{options:t.sessonOption},model:{value:t.selected,callback:function(e){t.selected=e},expression:"selected"}},[s("option",{attrs:{disabled:"",value:"0"}},[t._v("Select one")])])],1),t._m(0),s("div",{staticClass:"tab-content"},[s("div",{staticClass:"tab-pane fade active show",attrs:{id:"episodes",role:"tabpanel"}},[s("div",{staticClass:"block-space"},[s("b-row",t._l(t.sessonData,(function(e,i){return s("b-col",{key:i,staticClass:"col-1-5 iq-mb-30",attrs:{md:"6"}},[s("div",{staticClass:"epi-box"},[s("div",{staticClass:"epi-img position-relative"},[s("img",{staticClass:"img-fluid img-zoom",attrs:{src:e.image,alt:""}}),s("div",{staticClass:"episode-number"},[t._v(t._s(e.episode))]),s("div",{staticClass:"episode-play-info"},[s("div",{staticClass:"episode-play"},[s("router-link",{attrs:{to:{name:"landing-page.category-detail"}}},[s("i",{staticClass:"ri-play-fill"})])],1)])]),s("div",{staticClass:"epi-desc p-3"},[s("div",{staticClass:"d-flex align-items-center justify-content-between"},[s("span",{staticClass:"text-white"},[t._v(t._s(e.date))]),s("span",{staticClass:"text-primary"},[t._v(t._s(e.time))])]),s("router-link",{attrs:{to:{name:"landing-page.category-detail"}}},[s("h6",{staticClass:"epi-name text-white mb-0"},[t._v(t._s(e.text))])])],1)])])})),1)],1)]),s("div",{staticClass:"tab-pane fade",attrs:{id:"popularclips",role:"tabpanel"}},[s("div",{staticClass:"block-space"},[s("b-row",t._l(t.popularclips,(function(e,i){return s("b-col",{key:i,staticClass:"col-1-5 iq-mb-30",attrs:{md:"6"}},[s("div",{staticClass:"epi-box"},[s("div",{staticClass:"epi-img position-relative"},[s("img",{staticClass:"img-fluid img-zoom",attrs:{src:e.image,alt:""}}),s("div",{staticClass:"episode-number"},[t._v(t._s(e.episode))]),s("div",{staticClass:"episode-play-info"},[s("div",{staticClass:"episode-play"},[s("router-link",{attrs:{to:{name:"landing-page.category-detail"}}},[s("i",{staticClass:"ri-play-fill"})])],1)])]),s("div",{staticClass:"epi-desc p-3"},[s("div",{staticClass:"d-flex align-items-center justify-content-between"},[s("span",{staticClass:"text-white"},[t._v(t._s(e.date))]),s("span",{staticClass:"text-primary"},[t._v(t._s(e.time))])]),s("router-link",{attrs:{to:{name:"landing-page.category-detail"}}},[s("h6",{staticClass:"epi-name text-white mb-0"},[t._v(t._s(e.text))])])],1)])])})),1)],1)])])])},u=[function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("ul",{staticClass:"trending-pills d-flex nav nav-pills align-items-center text-center s-margin",attrs:{role:"tablist"}},[s("li",{staticClass:"nav-item"},[s("a",{staticClass:"nav-link active show",attrs:{"data-toggle":"pill",href:"#episodes",role:"tab","aria-selected":"true"}},[t._v("Episodes")])]),s("li",{staticClass:"nav-item"},[s("a",{staticClass:"nav-link",attrs:{"data-toggle":"pill",href:"#popularclips",role:"tab","aria-selected":"false"}},[t._v("Popular Clips")])])])}],g={name:"Sesson",components:{},mounted:function(){},data:function(){return{selected:3,sessonOption:[{id:1,value:"season1",text:"Season 1"},{id:2,value:"season2",text:"Season 2"},{id:3,value:"season3",text:"Season 3"}],sessonData:[{image:s("800a"),episode:"1",date:"11 Aug 20",time:"30m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"2",date:"12 Aug 20",time:"35m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"3",date:"14 Aug 20",time:"20m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"4",date:"15 Aug 20",time:"40m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"5",date:"16 Aug 20",time:"25m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"6",date:"20 Aug 20",time:"35m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"7",date:"21 Aug 20",time:"40m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"8",date:"23 Aug 20",time:"45m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"9",date:"24 Aug 20",time:"25m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"10",date:"25 Aug 20",time:"30m",text:"Lorem Ipsum is simply dummy text"}],popularclips:[{image:s("800a"),episode:"1",date:"11 Aug 20",time:"30m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"2",date:"12 Aug 20",time:"35m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"3",date:"14 Aug 20",time:"20m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"4",date:"15 Aug 20",time:"40m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"5",date:"16 Aug 20",time:"25m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"6",date:"20 Aug 20",time:"35m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"7",date:"21 Aug 20",time:"40m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"8",date:"23 Aug 20",time:"45m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"9",date:"24 Aug 20",time:"25m",text:"Lorem Ipsum is simply dummy text"},{image:s("800a"),episode:"10",date:"25 Aug 20",time:"30m",text:"Lorem Ipsum is simply dummy text"}]}}},C=g,x=Object(d["a"])(C,c,u,!1,null,null,null),A=x.exports,v={name:"SinglePage",components:{Detail:r,Sesson:A},mounted:function(){}},y=v,f=Object(d["a"])(y,i,a,!1,null,null,null);e["default"]=f.exports},"800a":function(t,e,s){t.exports=s.p+"img/01.bb4f7428.jpg"},f1fa:function(t,e){t.exports="data:image/png;base64,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"}}]);
//# sourceMappingURL=chunk-34ef16e9.e88c6083.js.map