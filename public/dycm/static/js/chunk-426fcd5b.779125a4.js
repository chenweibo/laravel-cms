(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-426fcd5b"],{"386b":function(t,e,r){var n=r("5ca1"),o=r("79e5"),i=r("be13"),a=/"/g,l=function(t,e,r,n){var o=String(i(t)),l="<"+e;return""!==r&&(l+=" "+r+'="'+String(n).replace(a,"&quot;")+'"'),l+">"+o+"</"+e+">"};t.exports=function(t,e){var r={};r[t]=e(l),n(n.P+n.F*o((function(){var e=""[t]('"');return e!==e.toLowerCase()||e.split('"').length>3})),"String",r)}},"396b":function(t,e,r){},"424d":function(t,e,r){"use strict";var n=r("b1a7"),o=r.n(n);o.a},"432a":function(t,e,r){"use strict";r.r(e);var n=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"app-container"},[r("a-button",{staticStyle:{"margin-bottom":"10px"},attrs:{type:"primary",ghost:"",size:"small",icon:"plus"},on:{click:t.showModal}}),t._v(" "),t._l(t.listTemp,(function(e,n){return r("el-row",{key:n,attrs:{gutter:32}},t._l(e,(function(e,n){return r("el-col",{key:n,attrs:{xs:24,sm:24,lg:8}},[r("el-card",{staticClass:"box-card"},[r("div",{staticClass:"clearfix",attrs:{slot:"header"},slot:"header"},[r("a-tag",{attrs:{color:"pink"}},[t._v("\n            序号"+t._s(e.id)+"\n          ")]),t._v(" "),r("span",[t._v(t._s(e.title))]),t._v(" "),r("el-popconfirm",{attrs:{"confirm-button-text":"好的","cancel-button-text":"不用了",icon:"el-icon-info","icon-color":"red",title:"确定删除幻灯片组吗"},on:{onConfirm:function(r){return t.remove(e)}}},[r("el-button",{staticStyle:{float:"right",padding:"3px 0",color:"#eb2f96"},attrs:{slot:"reference",type:"text"},slot:"reference"},[t._v("移除")])],1)],1),t._v(" "),r("bannerView",{attrs:{id:e.id,"img-list":e.banners},on:{"update:imgList":function(r){return t.$set(e,"banners",r)},"update:img-list":function(r){return t.$set(e,"banners",r)}}})],1)],1)})),1)})),t._v(" "),r("a-modal",{attrs:{title:"创建幻灯片组",visible:t.visible,"confirm-loading":t.confirmLoading,"ok-text":"创建","cancel-text":"取消"},on:{ok:t.handleOk,cancel:t.handleCancel}},[r("a-form-model",{ref:"ruleForm",attrs:{rules:t.rules,model:t.form,"label-col":t.labelCol,"wrapper-col":t.wrapperCol}},[r("a-form-model-item",{attrs:{label:"标题",prop:"title"}},[r("a-input",{model:{value:t.form.title,callback:function(e){t.$set(t.form,"title",e)},expression:"form.title"}})],1),t._v(" "),r("a-form-model-item",{attrs:{label:"描述",prop:"description"}},[r("a-input",{model:{value:t.form.description,callback:function(e){t.$set(t.form,"description",e)},expression:"form.description"}})],1)],1)],1)],2)},o=[],i=r("b775");function a(){return Object(i["a"])({url:"banners",method:"get"})}function l(t){return Object(i["a"])({url:"banners",method:"post",data:t})}function s(t){return Object(i["a"])({url:"banners/".concat(t),method:"delete"})}function c(t,e){return Object(i["a"])({url:"banners/".concat(t),method:"put",data:e})}var u=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("el-carousel",{attrs:{interval:5e3,autoplay:!1,arrow:"always"}},t._l(t.list.length?t.imgList:1,(function(e,n){return r("el-carousel-item",{key:n},[r("div",{staticClass:"box"},[r("div",{staticClass:"btn-container"},[r("a-button",{staticStyle:{display:"block","margin-bottom":"5px"},attrs:{type:"danger",shape:"circle",ghost:"",icon:"plus"},on:{click:t.showModal}}),t._v(" "),r("a-button",{staticStyle:{display:"block","margin-bottom":"5px"},attrs:{type:"danger",shape:"circle",ghost:"",icon:"edit"},on:{click:function(r){return t.edit(e)}}}),t._v(" "),r("el-popconfirm",{attrs:{"confirm-button-text":"好的","cancel-button-text":"不用了",icon:"el-icon-info","icon-color":"red",title:"确定删除吗"},on:{onConfirm:function(r){return t.remove(e)}}},[r("a-button",{staticStyle:{display:"block"},attrs:{slot:"reference",type:"danger",shape:"circle",ghost:"",icon:"close"},slot:"reference"})],1)],1),t._v(" "),r("el-image",{staticStyle:{width:"100%",height:"300px"},attrs:{src:e.url,fit:"fill"}},[r("div",{staticClass:"image-slot",attrs:{slot:"error"},slot:"error"},[r("i",{staticClass:"el-icon-picture-outline"})])])],1)])})),1),t._v(" "),r("a-modal",{attrs:{title:"添加幻灯片",visible:t.visible,"confirm-loading":t.confirmLoading,"ok-text":"保存","cancel-text":"取消"},on:{ok:t.handleOk,cancel:t.handleCancel}},[r("a-form-model",{ref:"ruleForm",attrs:{rules:t.rules,model:t.form,"label-col":t.labelCol,"wrapper-col":t.wrapperCol}},[r("a-form-model-item",{attrs:{label:"标题",prop:"title"}},[r("a-input",{model:{value:t.form.title,callback:function(e){t.$set(t.form,"title",e)},expression:"form.title"}})],1),t._v(" "),r("a-form-model-item",{attrs:{label:"附加文字1"}},[r("a-input",{model:{value:t.form.txt1,callback:function(e){t.$set(t.form,"txt1",e)},expression:"form.txt1"}})],1),t._v(" "),r("a-form-model-item",{attrs:{label:"附加文字2"}},[r("a-input",{model:{value:t.form.txt2,callback:function(e){t.$set(t.form,"txt2",e)},expression:"form.txt2"}})],1),t._v(" "),r("a-form-model-item",{attrs:{label:"附加文字3"}},[r("a-input",{model:{value:t.form.txt3,callback:function(e){t.$set(t.form,"txt3",e)},expression:"form.txt3"}})],1),t._v(" "),r("a-form-model-item",{attrs:{label:"主要图片"}},[r("imgUpload",{attrs:{img:t.form.url},on:{"update:img":function(e){return t.$set(t.form,"url",e)}}})],1),t._v(" "),r("a-form-model-item",{attrs:{label:"附加图片"}},[r("imgUpload",{attrs:{img:t.form.otherurl},on:{"update:img":function(e){return t.$set(t.form,"otherurl",e)}}})],1),t._v(" "),r("a-form-model-item",{attrs:{label:"链接"}},[r("a-input",{model:{value:t.form.link,callback:function(e){t.$set(t.form,"link",e)},expression:"form.link"}})],1)],1)],1)],1)},f=[],m=(r("b54a"),r("20d6"),r("c5f6"),r("2ba0")),d="undefined"!=typeof crypto&&crypto.getRandomValues&&crypto.getRandomValues.bind(crypto)||"undefined"!=typeof msCrypto&&"function"==typeof msCrypto.getRandomValues&&msCrypto.getRandomValues.bind(msCrypto),p=new Uint8Array(16);function b(){if(!d)throw new Error("crypto.getRandomValues() not supported. See https://github.com/uuidjs/uuid#getrandomvalues-not-supported");return d(p)}for(var h=[],v=0;v<256;++v)h[v]=(v+256).toString(16).substr(1);function g(t,e){var r=e||0,n=h;return[n[t[r++]],n[t[r++]],n[t[r++]],n[t[r++]],"-",n[t[r++]],n[t[r++]],"-",n[t[r++]],n[t[r++]],"-",n[t[r++]],n[t[r++]],"-",n[t[r++]],n[t[r++]],n[t[r++]],n[t[r++]],n[t[r++]],n[t[r++]]].join("")}var x=g;function y(t,e,r){var n=e&&r||0;"string"==typeof t&&(e="binary"===t?new Array(16):null,t=null),t=t||{};var o=t.random||(t.rng||b)();if(o[6]=15&o[6]|64,o[8]=63&o[8]|128,e)for(var i=0;i<16;++i)e[n+i]=o[i];return e||x(o)}var _=y,k={name:"BannerView",components:{imgUpload:m["a"]},props:{imgList:{type:Array,default:function(){}},id:{type:Number,default:void 0}},data:function(){return{visible:!1,list:this.imgList,confirmLoading:!1,form:{id:void 0,title:"",txt1:"",txt2:"",txt3:"",url:"",otherurl:"",link:""},isEdit:!1,labelCol:{span:4},wrapperCol:{span:14},rules:{title:[{required:!0,message:"标题不为空",trigger:"change"}]}}},watch:{list:function(t,e){this.$emit("update:imgList",t)}},methods:{showModal:function(){this.visible=!0},handleOk:function(t){var e=this;this.$refs.ruleForm.validate((function(t){if(!t)return console.log("error sumbit"),!1;if(e.isEdit){e.confirmLoading=!0;var r=e.list.findIndex((function(t){return t.id===e.form.id}));e.$set(e.list,r,e.form),c(e.id,{banners:e.list}).then((function(t){e.confirmLoading=!1,e.visible=!1,e.resetForm()})).catch((function(){e.confirmLoading=!1}))}else{var n=JSON.parse(JSON.stringify(e.list));e.form.id=_(),n.push(e.form),e.confirmLoading=!0,c(e.id,{banners:n}).then((function(t){e.confirmLoading=!1,e.visible=!1,e.list.push(e.form),e.resetForm()})).catch((function(){e.confirmLoading=!1}))}}))},edit:function(t){this.form={id:t.id,title:t.title,txt1:t.txt1,txt2:t.txt2,txt3:t.txt3,url:t.url,otherurl:t.otherurl,link:t.link},this.isEdit=!0,this.visible=!0},remove:function(t){var e=this,r=this.imgList.filter((function(e){return e.id!==t.id}));c(this.id,{banners:r}).then((function(t){e.list=r})).catch((function(){}))},handleCancel:function(t){this.resetForm(),this.visible=!1},resetForm:function(){this.isEdit=!1,this.form={id:void 0,title:"",txt1:"",txt2:"",txt3:"",url:"",otherurl:"",link:""}}}},w=k,C=(r("424d"),r("2877")),L=Object(C["a"])(w,u,f,!1,null,"1659f28e",null),E=L.exports,N={name:"Banner",components:{bannerView:E},props:{},data:function(){return{list:[],visible:!1,confirmLoading:!1,labelCol:{span:4},wrapperCol:{span:14},form:{title:"",description:"",banners:[]},rules:{title:[{required:!0,message:"标题不为空",trigger:"change"}],description:[{required:!0,message:"标题不为空",trigger:"change"}]}}},computed:{listTemp:function(){for(var t=0,e=3,r=[],n=this.list,o=0;o<n.length;o++)t=parseInt(o/e),r.length<=t&&r.push([]),r[t].push(n[o]);return r}},created:function(){this.fetchList()},mounted:function(){},methods:{fetchList:function(){var t=this;a().then((function(e){var r=e.data;t.list=r}))},remove:function(t){var e=this;s(t.id).then((function(t){e.fetchList()}))},showModal:function(){this.resetForm(),this.visible=!0},handleOk:function(t){var e=this;this.$refs.ruleForm.validate((function(t){if(!t)return console.log("error submit!!"),!1;e.confirmLoading=!0,l(e.form).then((function(t){e.confirmLoading=!1,e.visible=!1,e.fetchList()})).catch((function(){e.confirmLoading=!1}))}))},handleCancel:function(t){this.visible=!1},resetForm:function(){this.form.title="",this.form.description=""}}},I=N,S=(r("46ff"),Object(C["a"])(I,n,o,!1,null,"3129d5e0",null));e["default"]=S.exports},"46ff":function(t,e,r){"use strict";var n=r("396b"),o=r.n(n);o.a},"5dbc":function(t,e,r){var n=r("d3f4"),o=r("8b97").set;t.exports=function(t,e,r){var i,a=e.constructor;return a!==r&&"function"==typeof a&&(i=a.prototype)!==r.prototype&&n(i)&&o&&o(t,i),t}},"8b97":function(t,e,r){var n=r("d3f4"),o=r("cb7c"),i=function(t,e){if(o(t),!n(e)&&null!==e)throw TypeError(e+": can't set as prototype!")};t.exports={set:Object.setPrototypeOf||("__proto__"in{}?function(t,e,n){try{n=r("9b43")(Function.call,r("11e9").f(Object.prototype,"__proto__").set,2),n(t,[]),e=!(t instanceof Array)}catch(o){e=!0}return function(t,r){return i(t,r),e?t.__proto__=r:n(t,r),t}}({},!1):void 0),check:i}},"91b6":function(t,e,r){"use strict";r.d(e,"a",(function(){return o}));var n=r("b775");function o(t){return Object(n["a"])({url:"admin/upload/common",method:"post",headers:{"Content-Type":"multipart/form-data"},data:t})}},aa77:function(t,e,r){var n=r("5ca1"),o=r("be13"),i=r("79e5"),a=r("fdef"),l="["+a+"]",s="​",c=RegExp("^"+l+l+"*"),u=RegExp(l+l+"*$"),f=function(t,e,r){var o={},l=i((function(){return!!a[t]()||s[t]()!=s})),c=o[t]=l?e(m):a[t];r&&(o[r]=c),n(n.P+n.F*l,"String",o)},m=f.trim=function(t,e){return t=String(o(t)),1&e&&(t=t.replace(c,"")),2&e&&(t=t.replace(u,"")),t};t.exports=f},b1a7:function(t,e,r){},b54a:function(t,e,r){"use strict";r("386b")("link",(function(t){return function(e){return t(this,"a","href",e)}}))},c5f6:function(t,e,r){"use strict";var n=r("7726"),o=r("69a8"),i=r("2d95"),a=r("5dbc"),l=r("6a99"),s=r("79e5"),c=r("9093").f,u=r("11e9").f,f=r("86cc").f,m=r("aa77").trim,d="Number",p=n[d],b=p,h=p.prototype,v=i(r("2aeb")(h))==d,g="trim"in String.prototype,x=function(t){var e=l(t,!1);if("string"==typeof e&&e.length>2){e=g?e.trim():m(e,3);var r,n,o,i=e.charCodeAt(0);if(43===i||45===i){if(r=e.charCodeAt(2),88===r||120===r)return NaN}else if(48===i){switch(e.charCodeAt(1)){case 66:case 98:n=2,o=49;break;case 79:case 111:n=8,o=55;break;default:return+e}for(var a,s=e.slice(2),c=0,u=s.length;c<u;c++)if(a=s.charCodeAt(c),a<48||a>o)return NaN;return parseInt(s,n)}}return+e};if(!p(" 0o1")||!p("0b1")||p("+0x1")){p=function(t){var e=arguments.length<1?0:t,r=this;return r instanceof p&&(v?s((function(){h.valueOf.call(r)})):i(r)!=d)?a(new b(x(e)),r,p):x(e)};for(var y,_=r("9e1e")?c(b):"MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,EPSILON,isFinite,isInteger,isNaN,isSafeInteger,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,parseFloat,parseInt,isInteger".split(","),k=0;_.length>k;k++)o(b,y=_[k])&&!o(p,y)&&f(p,y,u(b,y));p.prototype=h,h.constructor=p,r("2aba")(n,d,p)}},fdef:function(t,e){t.exports="\t\n\v\f\r   ᠎             　\u2028\u2029\ufeff"}}]);