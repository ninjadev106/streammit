(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-7f6e5bf8"],{a15b:function(t,e,a){"use strict";var i=a("23e7"),s=a("44ad"),l=a("fc6a"),r=a("a640"),n=[].join,o=s!=Object,c=r("join",",");i({target:"Array",proto:!0,forced:o||!c},{join:function(t){return n.call(l(this),void 0===t?",":t)}})},a232:function(t,e,a){"use strict";a("baff")},baff:function(t,e,a){},bb84:function(t,e,a){"use strict";a.r(e);var i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("section",{staticClass:"m-profile"},[1==t.loading?a("b-container",[a("h4",{staticClass:"main-title mb-4"},[t._v("Pricing Plan")]),a("b-row",{staticClass:"justify-content-center"},[a("b-col",{attrs:{lg:"12"}},[a("div",{staticClass:"sign-user_card"},[a("div",{staticClass:"table-responsive pricing pt-2"},[a("table",{staticClass:"table",attrs:{id:"my-table"}},[a("thead",[a("tr",[a("th",{staticClass:"text-center prc-wrap"}),t._l(t.memships,(function(e,i){return a("th",{key:i,staticClass:"text-center prc-wrap"},[a("div",{class:t.user.memship.name==e.name?"prc-box active":"prc-box"},[a("div",{staticClass:"h3 pt-4 text-white"},[t._v(t._s(e.feePerMonth)+"$"),a("small",[t._v(" / Per month")])]),a("span",{staticClass:"type"},[t._v(t._s(e.name))])])])}))],2)]),a("tbody",[a("tr",[a("th",{staticClass:"text-center",attrs:{scope:"row"}},[t._v("Multi Login Count")]),t._l(t.memships,(function(e,i){return a("td",{key:i,class:t.user.memship.name==e.name?"text-center child-cell active":"text-center child-cell"},[t._v(" "+t._s(e.multiLoginCount)+" ")])}))],2),a("tr",[a("th",{staticClass:"text-center",attrs:{scope:"row"}},[t._v("Unlimited Movies")]),t._l(t.memships,(function(e,i){return a("td",{key:i,class:t.user.memship.name==e.name?"text-center child-cell active":"text-center child-cell"},[e.unLimitContent?a("i",{staticClass:"ri-check-line ri-2x"}):a("i",{staticClass:"ri-close-line i-close"})])}))],2),a("tr",[a("th",{staticClass:"text-center",attrs:{scope:"row"}},[t._v("Watch on your laptop, tablet and phone")]),t._l(t.memships,(function(e,i){return a("td",{key:i,class:t.user.memship.name==e.name?"text-center child-cell active":"text-center child-cell"},[e.enbAllDevice?a("i",{staticClass:"ri-check-line ri-2x"}):a("i",{staticClass:"ri-close-line i-close"})])}))],2),a("tr",[a("th",{staticClass:"text-center",attrs:{scope:"row"}},[t._v("HD(720~1080p) Video Quality")]),t._l(t.memships,(function(e,i){return a("td",{key:i,class:t.user.memship.name==e.name?"text-center child-cell active":"text-center child-cell"},[e.enbHDQuality?a("i",{staticClass:"ri-check-line ri-2x"}):a("i",{staticClass:"ri-close-line i-close"})])}))],2),a("tr",[a("th",{staticClass:"text-center",attrs:{scope:"row"}},[t._v("UHD(4K+) Video Quality")]),t._l(t.memships,(function(e,i){return a("td",{key:i,class:t.user.memship.name==e.name?"text-center child-cell active":"text-center child-cell"},[e.enbUHDQuality?a("i",{staticClass:"ri-check-line ri-2x"}):a("i",{staticClass:"ri-close-line i-close"})])}))],2),a("tr",[a("td",{staticClass:"text-center"},[a("i",{staticClass:"ri-close-line i_close"})]),t._l(t.memships,(function(e,i){return a("td",{key:i,staticClass:"text-center"},[a("a",{staticClass:"btn btn-hover mt-3",attrs:{href:"#"},on:{click:function(a){return t.purchaseMemship(e)}}},[t._v("Purchase")])])}))],2)])])])])])],1)],1):t._e(),a("div",{staticClass:"modal fade bd-example-modal-xl",attrs:{id:"payOption",tabindex:"-1",role:"dialog","aria-hidden":"true"}},[a("div",{staticClass:"modal-dialog modal-lg"},[a("div",{staticClass:"modal-content",staticStyle:{background:"var(--iq-body-bg)"}},[t._m(0),a("div",{staticClass:"modal-body"},[a("iq-card",{scopedSlots:t._u([{key:"headerTitle",fn:function(){return[a("h4",{staticClass:"card-title"},[t._v("You can select pay modes below")])]},proxy:!0},{key:"headerAction",fn:function(){return[a("a",{directives:[{name:"b-toggle",rawName:"v-b-toggle.collapse-7",modifiers:{"collapse-7":!0}}],staticClass:"text-primary float-right",attrs:{role:"button"}},[a("i",{staticClass:"ri-code-s-slash-line"})])]},proxy:!0},{key:"body",fn:function(){return[a("tab-nav",{staticClass:"nav-fill mb-3",attrs:{pills:!0,id:"pills-tab-1"}},[a("tab-nav-items",{attrs:{active:!0,id:"pills-paypal-tab-fill",href:"#pills-paypal-fill",ariaControls:"pills-paypal-fill",role:"tab",ariaSelected:!0,title:"Paypal"}}),a("tab-nav-items",{attrs:{active:!1,id:"pills-stripe-tab-fill",href:"#pills-stripe-fill",ariaControls:"pills-stripe-fill",role:"tab",ariaSelected:!1,title:"Stripe"}})],1),a("tab-content",{staticClass:"mt-0",attrs:{id:"pills-tabContent-1"}},[a("tab-content-item",{attrs:{active:!0,id:"pills-paypal-fill","aria-labelled-by":"pills-paypal-tab-fill"}},[a("form",{attrs:{id:"paypal-form",action:"https://onyxstreaming.com/api/payment/add-funds/paypal",method:"POST"}},[a("input",{attrs:{type:"hidden",name:"_token"},domProps:{value:t.csrf}}),a("input",{directives:[{name:"model",rawName:"v-model",value:t.fee,expression:"fee"}],attrs:{type:"hidden",name:"amount"},domProps:{value:t.fee},on:{input:function(e){e.target.composing||(t.fee=e.target.value)}}})]),a("button",{staticClass:"btn btn-primary paypal",on:{click:function(e){return t.payViaPaypal(e)}}},[t._v("Pay Now")])]),a("tab-content-item",{attrs:{active:!1,id:"pills-stripe-fill","aria-labelled-by":"pills-stripe-tab-fill"}},[a("b-col",{attrs:{lg:"12"}},[a("div",{staticClass:"panel panel-default"},[a("div",{staticClass:"panel-body"},[a("form",{staticClass:"validation",attrs:{role:"form",action:"https://onyxstreaming.com/api/payment/add-funds/stripe",method:"post","data-cc-on-file":"false","data-stripe-publishable-key":"STRIPE_KEY=pk_test_51Hvx9gKTG3bBPojijmHjyeaa7KZ4QJ1WcyqlDiQFCEyX42YClQACvCBSS6G4ot4nNGj9OPtjdO6FwHXu6H44kS6Q00mu3S1EoT",id:"stripe-form"}},[a("input",{attrs:{type:"hidden",name:"_token"},domProps:{value:t.csrf}}),a("div",{staticClass:"form-row row"},[a("div",{staticClass:"col-lg-12 form-group required"},[a("label",{staticClass:"control-label"},[t._v("Name on Card")]),t._v(" "),a("input",{staticClass:"form-control",attrs:{size:"4",type:"text"}})])]),a("div",{staticClass:"form-row row"},[a("div",{staticClass:"col-lg-12 form-group card required"},[a("label",{staticClass:"control-label"},[t._v("Card Number")]),t._v(" "),a("input",{staticClass:"form-control card-num",attrs:{autocomplete:"off",size:"20",type:"text"}})])]),a("div",{staticClass:"form-row row"},[a("div",{staticClass:"col-xs-12 col-md-4 form-group cvc required"},[a("label",{staticClass:"control-label"},[t._v("CVC")]),a("input",{staticClass:"form-control card-cvc",attrs:{autocomplete:"off",placeholder:"e.g 415",size:"4",type:"text"}})]),a("div",{staticClass:"col-xs-12 col-md-4 form-group expiration required"},[a("label",{staticClass:"control-label"},[t._v("Expiration Month")]),t._v(" "),a("input",{staticClass:"form-control card-expiry-month",attrs:{placeholder:"MM",size:"2",type:"text"}})]),a("div",{staticClass:"col-xs-12 col-md-4 form-group expiration required"},[a("label",{staticClass:"control-label"},[t._v("Expiration Year")]),t._v(" "),a("input",{staticClass:"form-control card-expiry-year",attrs:{placeholder:"YYYY",size:"4",type:"text"}})])]),a("div",{staticClass:"form-row row"},[a("div",{staticClass:"col-md-12 hide error form-group"},[a("div",{staticClass:"alert-danger alert"},[t._v("Fix the errors before you begin.")])])]),a("div",{staticClass:"row"},[a("button",{staticClass:"btn btn-primary stripe",on:{click:function(e){return t.payViaStripe(e)}}},[t._v("Pay Now")])])])])])])],1)],1)]},proxy:!0}])}),a("b-row")],1)])])])],1)},s=[function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"modal-header"},[a("h5",{staticClass:"modal-title"},[t._v("Pay via")]),a("button",{staticClass:"close",attrs:{type:"button","data-dismiss":"modal","aria-label":"Close"}},[a("span",{attrs:{"aria-hidden":"true"}},[t._v("×")])])])}],l=(a("7db0"),a("a15b"),a("d3b7"),a("5530")),r=a("bcae"),n=a("bc3a"),o=a.n(n),c=a("2f62"),p=a("c4c6"),d={name:"PricingPlan",components:{},created:function(){this.csrf=document.querySelector('meta[name="csrf-token"]').content},mounted:function(){var t=this;r["c"].index(),o.a.get("https://onyxstreaming.com/api/memship").then((function(e){console.log(e),t.memships=e.data,t.loading=!0})),this.$loadScript("https://js.stripe.com/v2/"),this.paypalForm=$("#paypal-form"),this.stripeForm=$("#stripe-form")},updated:function(){$("#my-table tr th").click((function(){$("#my-table tr th").children().removeClass("active"),$(this).children().addClass("active"),$("#my-table td").each((function(){$(this).hasClass("active")&&$(this).removeClass("active")}));var t=$(this).index();$("#my-table tr td:nth-child("+parseInt(t+1)+")").addClass("active")}))},data:function(){return{loading:!1,memships:[],csrf:null,fee:8.99,paypalForm:null,stripeForm:null}},computed:Object(l["a"])({},Object(c["b"])({user:"Auth/userState"})),methods:{stripeHandleResponse:function(t,e){if(e.error)$(".error").removeClass("hide").find(".alert").text(e.error.message);else{var a=e["id"];this.stripeForm.find("input[type=text]").empty(),this.stripeForm.append("<input type='hidden' name='stripeToken' value='"+a+"'/>"),this.stripeForm.append("<input type='hidden' name='amount' value='"+this.fee+"'/>"),this.stripeForm.get(0).submit()}},payViaPaypal:function(t){t.preventDefault(),this.paypalForm.submit()},payViaStripe:function(t){var e=$(".validation"),a=["input[type=email]","input[type=password]","input[type=text]","input[type=file]","textarea"].join(", "),i=e.find(".required").find(a),s=e.find("div.error");s.addClass("hide"),$(".has-error").removeClass("has-error"),i.each((function(e,a){var i=$(a);""===i.val()&&(i.parent().addClass("has-error"),s.removeClass("hide"),t.preventDefault())})),e.data("cc-on-file")||(t.preventDefault(),Stripe.setPublishableKey(e.data("stripe-publishable-key")),Stripe.createToken({number:$(".card-num").val(),cvc:$(".card-cvc").val(),exp_month:$(".card-expiry-month").val(),exp_year:$(".card-expiry-year").val()},this.stripeHandleResponse))},purchaseMemship:function(t){$("#payOption").modal("show"),this.fee=t.feePerMonth},paypalCheckout:function(){paypal.Button.render({env:"sandbox",client:{sandbox:"AS3JSQLLgzQVRep3VZJx1Kzw6kqT7fEv-0K1trl7zef4gGJ77QUWraOsxDsv-VirjcqUlCNnuLl5E4Ug",production:"EJlT5-YFhKKdR1K62Ug_H7MgEWgkxcZuLtSpVpXrE_dVTK3_AqkEL4iXdbr_-wiDcJvhJ4fc5OoDPyve"},locale:"en_US",style:{size:"medium",color:"gold",shape:"pill"},commit:!0,payment:function(t,e){var a="'https://onyxstreaming.com/"+this.$router.currentRoute.path,i=.01;return new Promise((function(t,e){o.a.post("/checkout-paypal",{return_url:a,amount:i},{headers:Object(p["a"])()}).then((function(e){t(e.data.id)})).catch((function(t){e(t)}))}))},onAuthorize:function(t,e){return e.payment.execute().then((function(){window.alert("Thank you for your purchase!")}))}},"#paypal-button")}}},u=d,m=(a("a232"),a("2877")),h=Object(m["a"])(u,i,s,!1,null,"692d0e46",null);e["default"]=h.exports}}]);
//# sourceMappingURL=chunk-7f6e5bf8.3b0bacb1.js.map