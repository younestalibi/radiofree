import{r as u}from"./app-3ac34f17.js";/**
 * @remix-run/router v1.15.1
 *
 * Copyright (c) Remix Software Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE.md file in the root directory of this source tree.
 *
 * @license MIT
 */function B(){return B=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},B.apply(this,arguments)}var P;(function(e){e.Pop="POP",e.Push="PUSH",e.Replace="REPLACE"})(P||(P={}));const F="popstate";function ze(e){e===void 0&&(e={});function t(n,a){let{pathname:l,search:i,hash:s}=n.location;return j("",{pathname:l,search:i,hash:s},a.state&&a.state.usr||null,a.state&&a.state.key||"default")}function r(n,a){return typeof a=="string"?a:J(a)}return te(t,r,null,e)}function v(e,t){if(e===!1||e===null||typeof e>"u")throw new Error(t)}function z(e,t){if(!e){typeof console<"u"&&console.warn(t);try{throw new Error(t)}catch{}}}function ee(){return Math.random().toString(36).substr(2,8)}function T(e,t){return{usr:e.state,key:e.key,idx:t}}function j(e,t,r,n){return r===void 0&&(r=null),B({pathname:typeof e=="string"?e:e.pathname,search:"",hash:""},typeof t=="string"?w(t):t,{state:r,key:t&&t.key||n||ee()})}function J(e){let{pathname:t="/",search:r="",hash:n=""}=e;return r&&r!=="?"&&(t+=r.charAt(0)==="?"?r:"?"+r),n&&n!=="#"&&(t+=n.charAt(0)==="#"?n:"#"+n),t}function w(e){let t={};if(e){let r=e.indexOf("#");r>=0&&(t.hash=e.substr(r),e=e.substr(0,r));let n=e.indexOf("?");n>=0&&(t.search=e.substr(n),e=e.substr(0,n)),e&&(t.pathname=e)}return t}function te(e,t,r,n){n===void 0&&(n={});let{window:a=document.defaultView,v5Compat:l=!1}=n,i=a.history,s=P.Pop,o=null,d=f();d==null&&(d=0,i.replaceState(B({},i.state,{idx:d}),""));function f(){return(i.state||{idx:null}).idx}function c(){s=P.Pop;let h=f(),y=h==null?null:h-d;d=h,o&&o({action:s,location:m.location,delta:y})}function p(h,y){s=P.Push;let E=j(m.location,h,y);r&&r(E,h),d=f()+1;let C=T(E,d),U=m.createHref(E);try{i.pushState(C,"",U)}catch($){if($ instanceof DOMException&&$.name==="DataCloneError")throw $;a.location.assign(U)}l&&o&&o({action:s,location:m.location,delta:1})}function x(h,y){s=P.Replace;let E=j(m.location,h,y);r&&r(E,h),d=f();let C=T(E,d),U=m.createHref(E);i.replaceState(C,"",U),l&&o&&o({action:s,location:m.location,delta:0})}function g(h){let y=a.location.origin!=="null"?a.location.origin:a.location.href,E=typeof h=="string"?h:J(h);return E=E.replace(/ $/,"%20"),v(y,"No window.location.(origin|href) available to create URL for href: "+E),new URL(E,y)}let m={get action(){return s},get location(){return e(a,i)},listen(h){if(o)throw new Error("A history only accepts one active listener");return a.addEventListener(F,c),o=h,()=>{a.removeEventListener(F,c),o=null}},createHref(h){return t(a,h)},createURL:g,encodeLocation(h){let y=g(h);return{pathname:y.pathname,search:y.search,hash:y.hash}},push:p,replace:x,go(h){return i.go(h)}};return m}var D;(function(e){e.data="data",e.deferred="deferred",e.redirect="redirect",e.error="error"})(D||(D={}));function re(e,t,r){r===void 0&&(r="/");let n=typeof t=="string"?w(t):t,a=G(n.pathname||"/",r);if(a==null)return null;let l=A(e);ne(l);let i=null;for(let s=0;i==null&&s<l.length;++s){let o=me(a);i=he(l[s],o)}return i}function A(e,t,r,n){t===void 0&&(t=[]),r===void 0&&(r=[]),n===void 0&&(n="");let a=(l,i,s)=>{let o={relativePath:s===void 0?l.path||"":s,caseSensitive:l.caseSensitive===!0,childrenIndex:i,route:l};o.relativePath.startsWith("/")&&(v(o.relativePath.startsWith(n),'Absolute route path "'+o.relativePath+'" nested under path '+('"'+n+'" is not valid. An absolute child route path ')+"must start with the combined path of all its parent routes."),o.relativePath=o.relativePath.slice(n.length));let d=R([n,o.relativePath]),f=r.concat(o);l.children&&l.children.length>0&&(v(l.index!==!0,"Index routes must not have child routes. Please remove "+('all child routes from route path "'+d+'".')),A(l.children,t,f,d)),!(l.path==null&&!l.index)&&t.push({path:d,score:ce(d,l.index),routesMeta:f})};return e.forEach((l,i)=>{var s;if(l.path===""||!((s=l.path)!=null&&s.includes("?")))a(l,i);else for(let o of q(l.path))a(l,i,o)}),t}function q(e){let t=e.split("/");if(t.length===0)return[];let[r,...n]=t,a=r.endsWith("?"),l=r.replace(/\?$/,"");if(n.length===0)return a?[l,""]:[l];let i=q(n.join("/")),s=[];return s.push(...i.map(o=>o===""?l:[l,o].join("/"))),a&&s.push(...i),s.map(o=>e.startsWith("/")&&o===""?"/":o)}function ne(e){e.sort((t,r)=>t.score!==r.score?r.score-t.score:fe(t.routesMeta.map(n=>n.childrenIndex),r.routesMeta.map(n=>n.childrenIndex)))}const ae=/^:[\w-]+$/,le=3,ie=2,oe=1,se=10,ue=-2,_=e=>e==="*";function ce(e,t){let r=e.split("/"),n=r.length;return r.some(_)&&(n+=ue),t&&(n+=ie),r.filter(a=>!_(a)).reduce((a,l)=>a+(ae.test(l)?le:l===""?oe:se),n)}function fe(e,t){return e.length===t.length&&e.slice(0,-1).every((n,a)=>n===t[a])?e[e.length-1]-t[t.length-1]:0}function he(e,t){let{routesMeta:r}=e,n={},a="/",l=[];for(let i=0;i<r.length;++i){let s=r[i],o=i===r.length-1,d=a==="/"?t:t.slice(a.length)||"/",f=de({path:s.relativePath,caseSensitive:s.caseSensitive,end:o},d);if(!f)return null;Object.assign(n,f.params);let c=s.route;l.push({params:n,pathname:R([a,f.pathname]),pathnameBase:Ce(R([a,f.pathnameBase])),route:c}),f.pathnameBase!=="/"&&(a=R([a,f.pathnameBase]))}return l}function de(e,t){typeof e=="string"&&(e={path:e,caseSensitive:!1,end:!0});let[r,n]=pe(e.path,e.caseSensitive,e.end),a=t.match(r);if(!a)return null;let l=a[0],i=l.replace(/(.)\/+$/,"$1"),s=a.slice(1);return{params:n.reduce((d,f,c)=>{let{paramName:p,isOptional:x}=f;if(p==="*"){let m=s[c]||"";i=l.slice(0,l.length-m.length).replace(/(.)\/+$/,"$1")}const g=s[c];return x&&!g?d[p]=void 0:d[p]=(g||"").replace(/%2F/g,"/"),d},{}),pathname:l,pathnameBase:i,pattern:e}}function pe(e,t,r){t===void 0&&(t=!1),r===void 0&&(r=!0),z(e==="*"||!e.endsWith("*")||e.endsWith("/*"),'Route path "'+e+'" will be treated as if it were '+('"'+e.replace(/\*$/,"/*")+'" because the `*` character must ')+"always follow a `/` in the pattern. To get rid of this warning, "+('please change the route path to "'+e.replace(/\*$/,"/*")+'".'));let n=[],a="^"+e.replace(/\/*\*?$/,"").replace(/^\/*/,"/").replace(/[\\.*+^${}|()[\]]/g,"\\$&").replace(/\/:([\w-]+)(\?)?/g,(i,s,o)=>(n.push({paramName:s,isOptional:o!=null}),o?"/?([^\\/]+)?":"/([^\\/]+)"));return e.endsWith("*")?(n.push({paramName:"*"}),a+=e==="*"||e==="/*"?"(.*)$":"(?:\\/(.+)|\\/*)$"):r?a+="\\/*$":e!==""&&e!=="/"&&(a+="(?:(?=\\/|$))"),[new RegExp(a,t?void 0:"i"),n]}function me(e){try{return e.split("/").map(t=>decodeURIComponent(t).replace(/\//g,"%2F")).join("/")}catch(t){return z(!1,'The URL path "'+e+'" could not be decoded because it is is a malformed URL segment. This is probably due to a bad percent '+("encoding ("+t+").")),e}}function G(e,t){if(t==="/")return e;if(!e.toLowerCase().startsWith(t.toLowerCase()))return null;let r=t.endsWith("/")?t.length-1:t.length,n=e.charAt(r);return n&&n!=="/"?null:e.slice(r)||"/"}function ve(e,t){t===void 0&&(t="/");let{pathname:r,search:n="",hash:a=""}=typeof e=="string"?w(e):e;return{pathname:r?r.startsWith("/")?r:ge(r,t):t,search:Pe(n),hash:Re(a)}}function ge(e,t){let r=t.replace(/\/+$/,"").split("/");return e.split("/").forEach(a=>{a===".."?r.length>1&&r.pop():a!=="."&&r.push(a)}),r.length>1?r.join("/"):"/"}function M(e,t,r,n){return"Cannot include a '"+e+"' character in a manually specified "+("`to."+t+"` field ["+JSON.stringify(n)+"].  Please separate it out to the ")+("`to."+r+"` field. Alternatively you may provide the full path as ")+'a string in <Link to="..."> and the router will parse it for you.'}function xe(e){return e.filter((t,r)=>r===0||t.route.path&&t.route.path.length>0)}function ye(e,t){let r=xe(e);return t?r.map((n,a)=>a===e.length-1?n.pathname:n.pathnameBase):r.map(n=>n.pathnameBase)}function Ee(e,t,r,n){n===void 0&&(n=!1);let a;typeof e=="string"?a=w(e):(a=B({},e),v(!a.pathname||!a.pathname.includes("?"),M("?","pathname","search",a)),v(!a.pathname||!a.pathname.includes("#"),M("#","pathname","hash",a)),v(!a.search||!a.search.includes("#"),M("#","search","hash",a)));let l=e===""||a.pathname==="",i=l?"/":a.pathname,s;if(i==null)s=r;else{let c=t.length-1;if(!n&&i.startsWith("..")){let p=i.split("/");for(;p[0]==="..";)p.shift(),c-=1;a.pathname=p.join("/")}s=c>=0?t[c]:"/"}let o=ve(a,s),d=i&&i!=="/"&&i.endsWith("/"),f=(l||i===".")&&r.endsWith("/");return!o.pathname.endsWith("/")&&(d||f)&&(o.pathname+="/"),o}const R=e=>e.join("/").replace(/\/\/+/g,"/"),Ce=e=>e.replace(/\/+$/,"").replace(/^\/*/,"/"),Pe=e=>!e||e==="?"?"":e.startsWith("?")?e:"?"+e,Re=e=>!e||e==="#"?"":e.startsWith("#")?e:"#"+e;function be(e){return e!=null&&typeof e.status=="number"&&typeof e.statusText=="string"&&typeof e.internal=="boolean"&&"data"in e}const K=["post","put","patch","delete"];new Set(K);const we=["get",...K];new Set(we);/**
 * React Router v6.22.1
 *
 * Copyright (c) Remix Software Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE.md file in the root directory of this source tree.
 *
 * @license MIT
 */function S(){return S=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},S.apply(this,arguments)}const k=u.createContext(null),Be=u.createContext(null),L=u.createContext(null),N=u.createContext(null),b=u.createContext({outlet:null,matches:[],isDataRoute:!1}),Q=u.createContext(null);function O(){return u.useContext(N)!=null}function X(){return O()||v(!1),u.useContext(N).location}function Y(e){u.useContext(L).static||u.useLayoutEffect(e)}function Je(){let{isDataRoute:e}=u.useContext(b);return e?Te():Se()}function Se(){O()||v(!1);let e=u.useContext(k),{basename:t,future:r,navigator:n}=u.useContext(L),{matches:a}=u.useContext(b),{pathname:l}=X(),i=JSON.stringify(ye(a,r.v7_relativeSplatPath)),s=u.useRef(!1);return Y(()=>{s.current=!0}),u.useCallback(function(d,f){if(f===void 0&&(f={}),!s.current)return;if(typeof d=="number"){n.go(d);return}let c=Ee(d,JSON.parse(i),l,f.relative==="path");e==null&&t!=="/"&&(c.pathname=c.pathname==="/"?t:R([t,c.pathname])),(f.replace?n.replace:n.push)(c,f.state,f)},[t,n,i,l,e])}function Ae(){let{matches:e}=u.useContext(b),t=e[e.length-1];return t?t.params:{}}function Ue(e,t){return Ie(e,t)}function Ie(e,t,r,n){O()||v(!1);let{navigator:a}=u.useContext(L),{matches:l}=u.useContext(b),i=l[l.length-1],s=i?i.params:{};i&&i.pathname;let o=i?i.pathnameBase:"/";i&&i.route;let d=X(),f;if(t){var c;let h=typeof t=="string"?w(t):t;o==="/"||(c=h.pathname)!=null&&c.startsWith(o)||v(!1),f=h}else f=d;let p=f.pathname||"/",x=p;if(o!=="/"){let h=o.replace(/^\//,"").split("/");x="/"+p.replace(/^\//,"").split("/").slice(h.length).join("/")}let g=re(e,{pathname:x}),m=Me(g&&g.map(h=>Object.assign({},h,{params:Object.assign({},s,h.params),pathname:R([o,a.encodeLocation?a.encodeLocation(h.pathname).pathname:h.pathname]),pathnameBase:h.pathnameBase==="/"?o:R([o,a.encodeLocation?a.encodeLocation(h.pathnameBase).pathname:h.pathnameBase])})),l,r,n);return t&&m?u.createElement(N.Provider,{value:{location:S({pathname:"/",search:"",hash:"",state:null,key:"default"},f),navigationType:P.Pop}},m):m}function Le(){let e=Fe(),t=be(e)?e.status+" "+e.statusText:e instanceof Error?e.message:JSON.stringify(e),r=e instanceof Error?e.stack:null,a={padding:"0.5rem",backgroundColor:"rgba(200,200,200, 0.5)"},l=null;return u.createElement(u.Fragment,null,u.createElement("h2",null,"Unexpected Application Error!"),u.createElement("h3",{style:{fontStyle:"italic"}},t),r?u.createElement("pre",{style:a},r):null,l)}const Ne=u.createElement(Le,null);class Oe extends u.Component{constructor(t){super(t),this.state={location:t.location,revalidation:t.revalidation,error:t.error}}static getDerivedStateFromError(t){return{error:t}}static getDerivedStateFromProps(t,r){return r.location!==t.location||r.revalidation!=="idle"&&t.revalidation==="idle"?{error:t.error,location:t.location,revalidation:t.revalidation}:{error:t.error!==void 0?t.error:r.error,location:r.location,revalidation:t.revalidation||r.revalidation}}componentDidCatch(t,r){console.error("React Router caught the following error during render",t,r)}render(){return this.state.error!==void 0?u.createElement(b.Provider,{value:this.props.routeContext},u.createElement(Q.Provider,{value:this.state.error,children:this.props.component})):this.props.children}}function $e(e){let{routeContext:t,match:r,children:n}=e,a=u.useContext(k);return a&&a.static&&a.staticContext&&(r.route.errorElement||r.route.ErrorBoundary)&&(a.staticContext._deepestRenderedBoundaryId=r.route.id),u.createElement(b.Provider,{value:t},n)}function Me(e,t,r,n){var a;if(t===void 0&&(t=[]),r===void 0&&(r=null),n===void 0&&(n=null),e==null){var l;if((l=r)!=null&&l.errors)e=r.matches;else return null}let i=e,s=(a=r)==null?void 0:a.errors;if(s!=null){let f=i.findIndex(c=>c.route.id&&(s==null?void 0:s[c.route.id]));f>=0||v(!1),i=i.slice(0,Math.min(i.length,f+1))}let o=!1,d=-1;if(r&&n&&n.v7_partialHydration)for(let f=0;f<i.length;f++){let c=i[f];if((c.route.HydrateFallback||c.route.hydrateFallbackElement)&&(d=f),c.route.id){let{loaderData:p,errors:x}=r,g=c.route.loader&&p[c.route.id]===void 0&&(!x||x[c.route.id]===void 0);if(c.route.lazy||g){o=!0,d>=0?i=i.slice(0,d+1):i=[i[0]];break}}}return i.reduceRight((f,c,p)=>{let x,g=!1,m=null,h=null;r&&(x=s&&c.route.id?s[c.route.id]:void 0,m=c.route.errorElement||Ne,o&&(d<0&&p===0?(De("route-fallback",!1),g=!0,h=null):d===p&&(g=!0,h=c.route.hydrateFallbackElement||null)));let y=t.concat(i.slice(0,p+1)),E=()=>{let C;return x?C=m:g?C=h:c.route.Component?C=u.createElement(c.route.Component,null):c.route.element?C=c.route.element:C=f,u.createElement($e,{match:c,routeContext:{outlet:f,matches:y,isDataRoute:r!=null},children:C})};return r&&(c.route.ErrorBoundary||c.route.errorElement||p===0)?u.createElement(Oe,{location:r.location,revalidation:r.revalidation,component:m,error:x,children:E(),routeContext:{outlet:null,matches:y,isDataRoute:!0}}):E()},null)}var Z=function(e){return e.UseBlocker="useBlocker",e.UseRevalidator="useRevalidator",e.UseNavigateStable="useNavigate",e}(Z||{}),I=function(e){return e.UseBlocker="useBlocker",e.UseLoaderData="useLoaderData",e.UseActionData="useActionData",e.UseRouteError="useRouteError",e.UseNavigation="useNavigation",e.UseRouteLoaderData="useRouteLoaderData",e.UseMatches="useMatches",e.UseRevalidator="useRevalidator",e.UseNavigateStable="useNavigate",e.UseRouteId="useRouteId",e}(I||{});function je(e){let t=u.useContext(k);return t||v(!1),t}function We(e){let t=u.useContext(Be);return t||v(!1),t}function ke(e){let t=u.useContext(b);return t||v(!1),t}function H(e){let t=ke(),r=t.matches[t.matches.length-1];return r.route.id||v(!1),r.route.id}function Fe(){var e;let t=u.useContext(Q),r=We(I.UseRouteError),n=H(I.UseRouteError);return t!==void 0?t:(e=r.errors)==null?void 0:e[n]}function Te(){let{router:e}=je(Z.UseNavigateStable),t=H(I.UseNavigateStable),r=u.useRef(!1);return Y(()=>{r.current=!0}),u.useCallback(function(a,l){l===void 0&&(l={}),r.current&&(typeof a=="number"?e.navigate(a):e.navigate(a,S({fromRouteId:t},l)))},[e,t])}const V={};function De(e,t,r){!t&&!V[e]&&(V[e]=!0)}function _e(e){v(!1)}function qe(e){let{basename:t="/",children:r=null,location:n,navigationType:a=P.Pop,navigator:l,static:i=!1,future:s}=e;O()&&v(!1);let o=t.replace(/^\/*/,"/"),d=u.useMemo(()=>({basename:o,navigator:l,static:i,future:S({v7_relativeSplatPath:!1},s)}),[o,s,l,i]);typeof n=="string"&&(n=w(n));let{pathname:f="/",search:c="",hash:p="",state:x=null,key:g="default"}=n,m=u.useMemo(()=>{let h=G(f,o);return h==null?null:{location:{pathname:h,search:c,hash:p,state:x,key:g},navigationType:a}},[o,f,c,p,x,g,a]);return m==null?null:u.createElement(L.Provider,{value:d},u.createElement(N.Provider,{children:r,value:m}))}function Ge(e){let{children:t,location:r}=e;return Ue(W(t),r)}new Promise(()=>{});function W(e,t){t===void 0&&(t=[]);let r=[];return u.Children.forEach(e,(n,a)=>{if(!u.isValidElement(n))return;let l=[...t,a];if(n.type===u.Fragment){r.push.apply(r,W(n.props.children,l));return}n.type!==_e&&v(!1),!n.props.index||!n.props.children||v(!1);let i={id:n.props.id||l.join("-"),caseSensitive:n.props.caseSensitive,element:n.props.element,Component:n.props.Component,index:n.props.index,path:n.props.path,loader:n.props.loader,action:n.props.action,errorElement:n.props.errorElement,ErrorBoundary:n.props.ErrorBoundary,hasErrorBoundary:n.props.ErrorBoundary!=null||n.props.errorElement!=null,shouldRevalidate:n.props.shouldRevalidate,handle:n.props.handle,lazy:n.props.lazy};n.props.children&&(i.children=W(n.props.children,l)),r.push(i)}),r}export{qe as R,Ge as a,_e as b,ze as c,Ae as d,X as e,Je as u};