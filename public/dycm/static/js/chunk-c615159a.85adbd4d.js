(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-c615159a"],{"1f27":function(e,t,r){"use strict";r.d(t,"c",(function(){return n})),r.d(t,"a",(function(){return o})),r.d(t,"e",(function(){return i})),r.d(t,"b",(function(){return l})),r.d(t,"f",(function(){return c})),r.d(t,"d",(function(){return s}));var a=r("b775");function n(){return Object(a["a"])({url:"/menus",method:"get"})}function o(){return Object(a["a"])({url:"/menus/create",method:"get"})}function i(e){return Object(a["a"])({url:"/menus",method:"post",data:e})}function l(e){return Object(a["a"])({url:"/menus/"+e,method:"delete"})}function c(e,t){return Object(a["a"])({url:"/menus/"+e,method:"put",data:t})}function s(e){return Object(a["a"])({url:"/menus/"+e,method:"get"})}},"5d94":function(e,t,r){"use strict";var a=r("b8e8"),n=r.n(a);n.a},"5dbc":function(e,t,r){var a=r("d3f4"),n=r("8b97").set;e.exports=function(e,t,r){var o,i=t.constructor;return i!==r&&"function"==typeof i&&(o=i.prototype)!==r.prototype&&a(o)&&n&&n(e,o),e}},"5f3e":function(e,t,r){"use strict";var a=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",[r("div",{staticClass:"fix-nav"},[r("el-row",{attrs:{type:"flex",justify:"end"}},[r("el-col",{attrs:{span:1,xs:5}},[r("customize",{attrs:{extra:e.form.extra},on:{"update:extra":function(t){return e.$set(e.form,"extra",t)}}})],1),e._v(" "),r("el-col",{attrs:{span:1,xs:5}},[r("el-button",{attrs:{size:"mini",type:"success"},on:{click:e.save}},[e._v("保存")])],1)],1)],1),e._v(" "),r("div",{staticClass:"app-container"},[r("el-form",{ref:"form",attrs:{model:e.form,"label-width":"100px",rules:e.rules}},[r("el-form-item",{attrs:{label:"栏目名称",prop:"title"}},[r("el-input",{attrs:{placeholder:"请输入栏目名称"},model:{value:e.form.title,callback:function(t){e.$set(e.form,"title",t)},expression:"form.title"}})],1),e._v(" "),r("el-form-item",{attrs:{label:"所属栏目"}},[r("SelectTree",{attrs:{props:e.props,options:e.treeList,value:e.valueId,accordion:e.isAccordion},on:{getValue:function(t){return e.getValue(t)}}})],1),e._v(" "),r("el-form-item",{attrs:{label:"类型"}},[r("el-select",{attrs:{placeholder:"请选择"},model:{value:e.form.type,callback:function(t){e.$set(e.form,"type",t)},expression:"form.type"}},e._l(e.typeList,(function(e,t){return r("el-option",{key:t,attrs:{value:e.value,label:e.label}})})),1)],1),e._v(" "),r("el-form-item",{attrs:{label:"是否隐藏"}},[r("el-tooltip",{staticClass:"item",attrs:{effect:"dark",content:"打开为隐藏栏目",placement:"right"}},[r("el-switch",{model:{value:e.form.hide,callback:function(t){e.$set(e.form,"hide",t)},expression:"form.hide"}})],1)],1),e._v(" "),r("el-form-item",{attrs:{label:"排序"}},[r("el-input",{attrs:{placeholder:"排序"},model:{value:e.form.sort,callback:function(t){e.$set(e.form,"sort",t)},expression:"form.sort"}})],1),e._v(" "),r("el-form-item",{attrs:{label:"重定向"}},[r("el-input",{staticStyle:{width:"500px"},attrs:{placeholder:"重定向地址"},model:{value:e.form.redirect,callback:function(t){e.$set(e.form,"redirect",t)},expression:"form.redirect"}}),e._v(" "),r("a-tag",[r("a-icon",{attrs:{type:"exclamation-circle"}}),e._v('  如果重定向内部地址则不需要带"http//"，需要以"/"开头。\n        ')],1)],1),e._v(" "),r("el-form-item",{attrs:{label:"推荐"}},[r("el-switch",{attrs:{"active-color":"#13ce66","inactive-color":"#ff4949"},model:{value:e.form.recommend,callback:function(t){e.$set(e.form,"recommend",t)},expression:"form.recommend"}})],1),e._v(" "),r("el-form-item",{attrs:{label:"url",prop:"url"}},[r("el-input",{attrs:{placeholder:"请输入url"},model:{value:e.form.url,callback:function(t){e.$set(e.form,"url",t)},expression:"form.url"}})],1),e._v(" "),2==e.form.type?r("el-form-item",{attrs:{prop:"viewListCheck",label:"列表视图"}},[r("el-select",{attrs:{placeholder:"请选择"},model:{value:e.form.view.pageList,callback:function(t){e.$set(e.form.view,"pageList",t)},expression:"form.view.pageList"}},e._l(e.view,(function(e){return r("el-option",{key:e,attrs:{value:e,label:e}})})),1),e._v(" "),e.checkViewList?e._e():r("a-tag",{attrs:{color:"orange"}},[r("a-icon",{attrs:{type:"exclamation-circle"}}),e._v("  视图不存在，可能造成程序不显示\n        ")],1)],1):e._e(),e._v(" "),2==e.form.type?r("el-form-item",{attrs:{label:"分页"}},[r("el-input",{attrs:{placeholder:"请输入分页数量"},model:{value:e.form.perPage,callback:function(t){e.$set(e.form,"perPage",t)},expression:"form.perPage"}}),e._v(" "),r("a-tag",{attrs:{color:"orange"}},[r("a-icon",{attrs:{type:"exclamation-circle"}}),e._v("  为 0 则部不分页，反之为分页 每页多少条。\n        ")],1)],1):e._e(),e._v(" "),r("el-form-item",{attrs:{label:"内容视图",prop:"view"}},[r("el-select",{attrs:{placeholder:"请选择"},model:{value:e.form.view.pageView,callback:function(t){e.$set(e.form.view,"pageView",t)},expression:"form.view.pageView"}},e._l(e.view,(function(e){return r("el-option",{key:e,attrs:{value:e,label:e}})})),1),e._v(" "),e.checkPageView?e._e():r("a-tag",{attrs:{color:"orange"}},[r("a-icon",{attrs:{type:"exclamation-circle"}}),e._v("  视图不存在，可能造成程序不显示\n        ")],1)],1),e._v(" "),1==e.form.type?r("el-form-item",{attrs:{label:"主要内容"}},[r("tinymce",{attrs:{height:300},model:{value:e.form.pageInfo,callback:function(t){e.$set(e.form,"pageInfo",t)},expression:"form.pageInfo"}})],1):e._e(),e._v(" "),r("CustomizeView",{attrs:{extra:e.form.extra},on:{"update:extra":function(t){return e.$set(e.form,"extra",t)}}})],1)],1),e._v(" "),r("a-back-top")],1)},n=[],o=(r("6762"),r("2fdb"),r("f751"),r("3de8")),i=r("1f27"),l=r("ed08"),c=r("a879"),s=r("957c5"),u=r("8256"),f=r("2ef0"),p=r.n(f),m={id:void 0,title:"",parentId:0,path:0,url:"",perPage:0,redirect:"",recommend:!1,pageInfo:"",view:{pageList:"",pageView:""},type:void 0,sort:99,extra:[]},d={name:"MenuDetail",components:{SelectTree:o["a"],customize:c["a"],CustomizeView:s["a"],Tinymce:u["a"]},props:{isEdit:{type:Boolean,default:!1}},data:function(){var e=this,t=function(t,r,a){if("2"===e.form.type){if(!e.form.view.pageList)return a(new Error("列表视图不能为空"));a()}else a()};return{form:Object.assign({},m),tempRoute:{},isClearable:!0,isAccordion:!0,valueId:-1,props:{value:"id",label:"title",children:"children"},treeList:[],typeList:l["c"],typeValue:0,viewList:[],rules:{title:[{required:!0,message:"请输入标题",trigger:"blur"}],url:[{required:!0,message:"请输入url",trigger:"blur"}],view:[{required:!0,message:"选择视图",trigger:"blur"}],viewListCheck:[{validator:t,trigger:"blur"}]}}},computed:{view:function(){return this.viewList.filter((function(e){return"."!==e&&".."!==e}))},checkViewList:function(){return!!this.viewList.includes(this.form.view.pageList)},checkPageView:function(){return!!this.viewList.includes(this.form.view.pageView)}},watch:{form:{handler:function(e,t){"2"!==e.type&&(e.view.pageList="")},deep:!0}},created:function(){var e=this.$route.params.id?this.$route.params.id:"";this.isEdit?this.fetchData(e):this.getTree(),this.tempRoute=Object.assign({},this.$route)},mounted:function(){},methods:{fetchData:function(e){var t=this;Object(i["d"])(e).then((function(e){var r=e.view,a=e.menuTree,n=e.content,o=e.component;t.form=n,t.viewList=r,t.treeList=t.appendTopMenu(a),t.handleComponent(n.extra,o),0===t.form.parentId?t.valueId=-1:t.valueId=t.form.parentId,t.setTagsViewTitle(),t.setPageTitle()})).catch((function(e){console.log(e)}))},handleComponent:function(e,t){var r=p.a.concat(e,t),a=p.a.uniqBy(r,"label");this.form.extra=a},setTagsViewTitle:function(){var e="栏目编辑",t=Object.assign({},this.tempRoute,{title:"".concat(e,"-").concat(this.form.title)});this.$store.dispatch("tagsView/updateVisitedView",t)},appendTopMenu:function(e){var t=JSON.parse(JSON.stringify(e)),r={id:-1,parentId:0,title:"顶级栏目",sort:99};return t.unshift(r),t},setPageTitle:function(){var e="栏目编辑";document.title="".concat(e," - ").concat(this.form.title)},getValue:function(e){var t=e[0],r=e[1];-1!==t?(this.form.parentId=t,this.form.path=r.path+"-"+t):(this.form.parentId=0,this.form.path=0)},getTree:function(){var e=this;Object(i["a"])().then((function(t){e.treeList=e.appendTopMenu(t.menu),e.viewList=t.view,e.form.extra=t.component}))},save:function(){var e=this;this.$refs["form"].validate((function(t){if(!t)return console.log("error validate!!"),!1;if(e.isEdit){var r=e.$route.params.id?e.$route.params.id:"";Object(i["f"])(r,e.form).then((function(t){e.$router.back(-1),e.$store.dispatch("tagsView/delVisitedView",e.$route)}))}else"2"===e.form.type&&(e.form.pageInfo=""),Object(i["e"])(e.form).then((function(t){e.$router.back(-1)}))}))}}},v=d,h=(r("5d94"),r("2877")),b=Object(h["a"])(v,a,n,!1,null,"2cf5e45a",null);t["a"]=b.exports},"8b97":function(e,t,r){var a=r("d3f4"),n=r("cb7c"),o=function(e,t){if(n(e),!a(t)&&null!==t)throw TypeError(t+": can't set as prototype!")};e.exports={set:Object.setPrototypeOf||("__proto__"in{}?function(e,t,a){try{a=r("9b43")(Function.call,r("11e9").f(Object.prototype,"__proto__").set,2),a(e,[]),t=!(e instanceof Array)}catch(n){t=!0}return function(e,r){return o(e,r),t?e.__proto__=r:a(e,r),e}}({},!1):void 0),check:o}},"91b6":function(e,t,r){"use strict";r.d(t,"b",(function(){return n})),r.d(t,"a",(function(){return o}));var a=r("b775");function n(e){return Object(a["a"])({url:"admin/upload/common",method:"post",headers:{"Content-Type":"multipart/form-data"},data:e})}function o(e){return Object(a["a"])({url:"admin/upload/file",method:"post",headers:{"Content-Type":"multipart/form-data"},data:e})}},aa77:function(e,t,r){var a=r("5ca1"),n=r("be13"),o=r("79e5"),i=r("fdef"),l="["+i+"]",c="​",s=RegExp("^"+l+l+"*"),u=RegExp(l+l+"*$"),f=function(e,t,r){var n={},l=o((function(){return!!i[e]()||c[e]()!=c})),s=n[e]=l?t(p):i[e];r&&(n[r]=s),a(a.P+a.F*l,"String",n)},p=f.trim=function(e,t){return e=String(n(e)),1&t&&(e=e.replace(s,"")),2&t&&(e=e.replace(u,"")),e};e.exports=f},ad8d:function(e,t,r){"use strict";r.r(t);var a=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("MenuDetail",{attrs:{"is-edit":!1}})},n=[],o=r("5f3e"),i={name:"CreateMenu",components:{MenuDetail:o["a"]}},l=i,c=r("2877"),s=Object(c["a"])(l,a,n,!1,null,null,null);t["default"]=s.exports},b8e8:function(e,t,r){},c5f6:function(e,t,r){"use strict";var a=r("7726"),n=r("69a8"),o=r("2d95"),i=r("5dbc"),l=r("6a99"),c=r("79e5"),s=r("9093").f,u=r("11e9").f,f=r("86cc").f,p=r("aa77").trim,m="Number",d=a[m],v=d,h=d.prototype,b=o(r("2aeb")(h))==m,g="trim"in String.prototype,w=function(e){var t=l(e,!1);if("string"==typeof t&&t.length>2){t=g?t.trim():p(t,3);var r,a,n,o=t.charCodeAt(0);if(43===o||45===o){if(r=t.charCodeAt(2),88===r||120===r)return NaN}else if(48===o){switch(t.charCodeAt(1)){case 66:case 98:a=2,n=49;break;case 79:case 111:a=8,n=55;break;default:return+t}for(var i,c=t.slice(2),s=0,u=c.length;s<u;s++)if(i=c.charCodeAt(s),i<48||i>n)return NaN;return parseInt(c,a)}}return+t};if(!d(" 0o1")||!d("0b1")||d("+0x1")){d=function(e){var t=arguments.length<1?0:e,r=this;return r instanceof d&&(b?c((function(){h.valueOf.call(r)})):o(r)!=m)?i(new v(w(t)),r,d):w(t)};for(var _,x=r("9e1e")?s(v):"MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,EPSILON,isFinite,isInteger,isNaN,isSafeInteger,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,parseFloat,parseInt,isInteger".split(","),y=0;x.length>y;y++)n(v,_=x[y])&&!n(d,_)&&f(d,_,u(v,_));d.prototype=h,h.constructor=d,r("2aba")(a,m,d)}},ed08:function(e,t,r){"use strict";r.d(t,"c",(function(){return a})),r.d(t,"b",(function(){return n})),r.d(t,"a",(function(){return o}));r("28a5"),r("f576"),r("a481"),r("6b54"),r("7618");var a=[{value:"0",label:"默认"},{value:"1",label:"单篇"},{value:"2",label:"列表"}];var n={input:"文本",fileUpload:"文件上传组件",editor:"富文本编辑器",imgMoreUpload:"多图上传",textarea:"文本域",time:"日期选择器",OneImgupload:"单图上传",switch:"滑块"},o=[{value:"input",label:"文本"},{value:"fileUpload",label:"文件上传组件"},{value:"editor",label:"富文本编辑器"},{value:"imgMoreUpload",label:"多图上传"},{value:"textarea",label:"文本域"},{value:"time",label:"日期选择器"},{value:"OneImgupload",label:"单图上传"},{value:"switch",label:"滑块"}]},fdef:function(e,t){e.exports="\t\n\v\f\r   ᠎             　\u2028\u2029\ufeff"}}]);