import{r as m,a as u,j as q}from"./app-b2b7f0bd.js";import{_ as a,a as B}from"./hoist-non-react-statics.cjs-3d501c67.js";import{g as j,j as z,f as L,d as O,h as F,l as I,e as W,n as mt,o as Z,T as Y}from"./Typography-7d9a253c.js";import{P as it}from"./Paper-37b0f308.js";import{C as et}from"./CardMedia-71a4d725.js";import{u as lt}from"./useTheme-1a907e4a.js";import{u as ct,o as dt,T as gt,d as bt,r as yt,g as rt,M as vt,L as X,a as xt,i as ht,b as nt,B as Ct,c as kt}from"./ButtonBase-7f40136b.js";function It(t){return j("MuiAppBar",t)}z("MuiAppBar",["root","positionFixed","positionAbsolute","positionSticky","positionStatic","positionRelative","colorDefault","colorPrimary","colorSecondary","colorInherit","colorTransparent","colorError","colorInfo","colorSuccess","colorWarning"]);const $t=["className","color","enableColorOnDark","position"],At=t=>{const{color:o,position:e,classes:r}=t,n={root:["root",`color${O(o)}`,`position${O(e)}`]};return W(n,It,r)},tt=(t,o)=>t?`${t==null?void 0:t.replace(")","")}, ${o})`:o,Tt=L(it,{name:"MuiAppBar",slot:"Root",overridesResolver:(t,o)=>{const{ownerState:e}=t;return[o.root,o[`position${O(e.position)}`],o[`color${O(e.color)}`]]}})(({theme:t,ownerState:o})=>{const e=t.palette.mode==="light"?t.palette.grey[100]:t.palette.grey[900];return a({display:"flex",flexDirection:"column",width:"100%",boxSizing:"border-box",flexShrink:0},o.position==="fixed"&&{position:"fixed",zIndex:(t.vars||t).zIndex.appBar,top:0,left:"auto",right:0,"@media print":{position:"absolute"}},o.position==="absolute"&&{position:"absolute",zIndex:(t.vars||t).zIndex.appBar,top:0,left:"auto",right:0},o.position==="sticky"&&{position:"sticky",zIndex:(t.vars||t).zIndex.appBar,top:0,left:"auto",right:0},o.position==="static"&&{position:"static"},o.position==="relative"&&{position:"relative"},!t.vars&&a({},o.color==="default"&&{backgroundColor:e,color:t.palette.getContrastText(e)},o.color&&o.color!=="default"&&o.color!=="inherit"&&o.color!=="transparent"&&{backgroundColor:t.palette[o.color].main,color:t.palette[o.color].contrastText},o.color==="inherit"&&{color:"inherit"},t.palette.mode==="dark"&&!o.enableColorOnDark&&{backgroundColor:null,color:null},o.color==="transparent"&&a({backgroundColor:"transparent",color:"inherit"},t.palette.mode==="dark"&&{backgroundImage:"none"})),t.vars&&a({},o.color==="default"&&{"--AppBar-background":o.enableColorOnDark?t.vars.palette.AppBar.defaultBg:tt(t.vars.palette.AppBar.darkBg,t.vars.palette.AppBar.defaultBg),"--AppBar-color":o.enableColorOnDark?t.vars.palette.text.primary:tt(t.vars.palette.AppBar.darkColor,t.vars.palette.text.primary)},o.color&&!o.color.match(/^(default|inherit|transparent)$/)&&{"--AppBar-background":o.enableColorOnDark?t.vars.palette[o.color].main:tt(t.vars.palette.AppBar.darkBg,t.vars.palette[o.color].main),"--AppBar-color":o.enableColorOnDark?t.vars.palette[o.color].contrastText:tt(t.vars.palette.AppBar.darkColor,t.vars.palette[o.color].contrastText)},{backgroundColor:"var(--AppBar-background)",color:o.color==="inherit"?"inherit":"var(--AppBar-color)"},o.color==="transparent"&&{backgroundImage:"none",backgroundColor:"transparent",color:"inherit"}))}),Pt=m.forwardRef(function(o,e){const r=F({props:o,name:"MuiAppBar"}),{className:n,color:c="primary",enableColorOnDark:l=!1,position:p="fixed"}=r,d=B(r,$t),i=a({},r,{color:c,position:p,enableColorOnDark:l}),f=At(i);return u(Tt,a({square:!0,component:"header",ownerState:i,elevation:4,className:I(f.root,n,p==="fixed"&&"mui-fixed"),ref:e},d))}),Rt=Pt,Bt=["addEndListener","appear","children","container","direction","easing","in","onEnter","onEntered","onEntering","onExit","onExited","onExiting","style","timeout","TransitionComponent"];function Lt(t,o,e){const r=o.getBoundingClientRect(),n=e&&e.getBoundingClientRect(),c=dt(o);let l;if(o.fakeTransform)l=o.fakeTransform;else{const i=c.getComputedStyle(o);l=i.getPropertyValue("-webkit-transform")||i.getPropertyValue("transform")}let p=0,d=0;if(l&&l!=="none"&&typeof l=="string"){const i=l.split("(")[1].split(")")[0].split(",");p=parseInt(i[4],10),d=parseInt(i[5],10)}return t==="left"?n?`translateX(${n.right+p-r.left}px)`:`translateX(${c.innerWidth+p-r.left}px)`:t==="right"?n?`translateX(-${r.right-n.left-p}px)`:`translateX(-${r.left+r.width-p}px)`:t==="up"?n?`translateY(${n.bottom+d-r.top}px)`:`translateY(${c.innerHeight+d-r.top}px)`:n?`translateY(-${r.top-n.top+r.height-d}px)`:`translateY(-${r.top+r.height-d}px)`}function Dt(t){return typeof t=="function"?t():t}function ot(t,o,e){const r=Dt(e),n=Lt(t,o,r);n&&(o.style.webkitTransform=n,o.style.transform=n)}const Et=m.forwardRef(function(o,e){const r=lt(),n={enter:r.transitions.easing.easeOut,exit:r.transitions.easing.sharp},c={enter:r.transitions.duration.enteringScreen,exit:r.transitions.duration.leavingScreen},{addEndListener:l,appear:p=!0,children:d,container:i,direction:f="down",easing:P=n,in:h,onEnter:R,onEntered:b,onEntering:y,onExit:k,onExited:$,onExiting:G,style:A,timeout:D=c,TransitionComponent:E=gt}=o,_=B(o,Bt),v=m.useRef(null),J=ct(d.ref,v,e),x=s=>g=>{s&&(g===void 0?s(v.current):s(v.current,g))},C=x((s,g)=>{ot(f,s,i),yt(s),R&&R(s,g)}),M=x((s,g)=>{const T=rt({timeout:D,style:A,easing:P},{mode:"enter"});s.style.webkitTransition=r.transitions.create("-webkit-transform",a({},T)),s.style.transition=r.transitions.create("transform",a({},T)),s.style.webkitTransform="none",s.style.transform="none",y&&y(s,g)}),N=x(b),w=x(G),K=x(s=>{const g=rt({timeout:D,style:A,easing:P},{mode:"exit"});s.style.webkitTransition=r.transitions.create("-webkit-transform",g),s.style.transition=r.transitions.create("transform",g),ot(f,s,i),k&&k(s)}),V=x(s=>{s.style.webkitTransition="",s.style.transition="",$&&$(s)}),Q=s=>{l&&l(v.current,s)},H=m.useCallback(()=>{v.current&&ot(f,v.current,i)},[f,i]);return m.useEffect(()=>{if(h||f==="down"||f==="right")return;const s=bt(()=>{v.current&&ot(f,v.current,i)}),g=dt(v.current);return g.addEventListener("resize",s),()=>{s.clear(),g.removeEventListener("resize",s)}},[f,h,i]),m.useEffect(()=>{h||H()},[h,H]),u(E,a({nodeRef:v,onEnter:C,onEntered:N,onEntering:M,onExit:K,onExited:V,onExiting:w,addEndListener:Q,appear:p,in:h,timeout:D},_,{children:(s,g)=>m.cloneElement(d,a({ref:J,style:a({visibility:s==="exited"&&!h?"hidden":void 0},A,d.props.style)},g))}))}),Mt=Et;function Nt(t){return j("MuiDrawer",t)}z("MuiDrawer",["root","docked","paper","paperAnchorLeft","paperAnchorRight","paperAnchorTop","paperAnchorBottom","paperAnchorDockedLeft","paperAnchorDockedRight","paperAnchorDockedTop","paperAnchorDockedBottom","modal"]);const wt=["BackdropProps"],Ot=["anchor","BackdropProps","children","className","elevation","hideBackdrop","ModalProps","onClose","open","PaperProps","SlideProps","TransitionComponent","transitionDuration","variant"],pt=(t,o)=>{const{ownerState:e}=t;return[o.root,(e.variant==="permanent"||e.variant==="persistent")&&o.docked,o.modal]},St=t=>{const{classes:o,anchor:e,variant:r}=t,n={root:["root"],docked:[(r==="permanent"||r==="persistent")&&"docked"],modal:["modal"],paper:["paper",`paperAnchor${O(e)}`,r!=="temporary"&&`paperAnchorDocked${O(e)}`]};return W(n,Nt,o)},zt=L(vt,{name:"MuiDrawer",slot:"Root",overridesResolver:pt})(({theme:t})=>({zIndex:(t.vars||t).zIndex.drawer})),at=L("div",{shouldForwardProp:mt,name:"MuiDrawer",slot:"Docked",skipVariantsResolver:!1,overridesResolver:pt})({flex:"0 0 auto"}),Gt=L(it,{name:"MuiDrawer",slot:"Paper",overridesResolver:(t,o)=>{const{ownerState:e}=t;return[o.paper,o[`paperAnchor${O(e.anchor)}`],e.variant!=="temporary"&&o[`paperAnchorDocked${O(e.anchor)}`]]}})(({theme:t,ownerState:o})=>a({overflowY:"auto",display:"flex",flexDirection:"column",height:"100%",flex:"1 0 auto",zIndex:(t.vars||t).zIndex.drawer,WebkitOverflowScrolling:"touch",position:"fixed",top:0,outline:0},o.anchor==="left"&&{left:0},o.anchor==="top"&&{top:0,left:0,right:0,height:"auto",maxHeight:"100%"},o.anchor==="right"&&{right:0},o.anchor==="bottom"&&{top:"auto",left:0,bottom:0,right:0,height:"auto",maxHeight:"100%"},o.anchor==="left"&&o.variant!=="temporary"&&{borderRight:`1px solid ${(t.vars||t).palette.divider}`},o.anchor==="top"&&o.variant!=="temporary"&&{borderBottom:`1px solid ${(t.vars||t).palette.divider}`},o.anchor==="right"&&o.variant!=="temporary"&&{borderLeft:`1px solid ${(t.vars||t).palette.divider}`},o.anchor==="bottom"&&o.variant!=="temporary"&&{borderTop:`1px solid ${(t.vars||t).palette.divider}`})),ut={left:"right",right:"left",top:"down",bottom:"up"};function _t(t){return["left","right"].indexOf(t)!==-1}function Vt(t,o){return t.direction==="rtl"&&_t(o)?ut[o]:o}const Ut=m.forwardRef(function(o,e){const r=F({props:o,name:"MuiDrawer"}),n=lt(),c={enter:n.transitions.duration.enteringScreen,exit:n.transitions.duration.leavingScreen},{anchor:l="left",BackdropProps:p,children:d,className:i,elevation:f=16,hideBackdrop:P=!1,ModalProps:{BackdropProps:h}={},onClose:R,open:b=!1,PaperProps:y={},SlideProps:k,TransitionComponent:$=Mt,transitionDuration:G=c,variant:A="temporary"}=r,D=B(r.ModalProps,wt),E=B(r,Ot),_=m.useRef(!1);m.useEffect(()=>{_.current=!0},[]);const v=Vt(n,l),x=a({},r,{anchor:l,elevation:f,open:b,variant:A},E),C=St(x),M=u(Gt,a({elevation:A==="temporary"?f:0,square:!0},y,{className:I(C.paper,y.className),ownerState:x,children:d}));if(A==="permanent")return u(at,a({className:I(C.root,C.docked,i),ownerState:x,ref:e},E,{children:M}));const N=u($,a({in:b,direction:ut[v],timeout:G,appear:_.current},k,{children:M}));return A==="persistent"?u(at,a({className:I(C.root,C.docked,i),ownerState:x,ref:e},E,{children:N})):u(zt,a({BackdropProps:a({},p,h,{transitionDuration:G}),className:I(C.root,C.modal,i),open:b,ownerState:x,onClose:R,hideBackdrop:P,ref:e},E,D,{children:N}))}),jt=Ut;function Ft(t){return j("MuiListItem",t)}const Wt=z("MuiListItem",["root","container","focusVisible","dense","alignItemsFlexStart","disabled","divider","gutters","padding","button","secondaryAction","selected"]),U=Wt,Ht=z("MuiListItemButton",["root","focusVisible","dense","alignItemsFlexStart","disabled","divider","gutters","selected"]),Yt=Ht;function Xt(t){return j("MuiListItemSecondaryAction",t)}z("MuiListItemSecondaryAction",["root","disableGutters"]);const qt=["className"],Jt=t=>{const{disableGutters:o,classes:e}=t;return W({root:["root",o&&"disableGutters"]},Xt,e)},Kt=L("div",{name:"MuiListItemSecondaryAction",slot:"Root",overridesResolver:(t,o)=>{const{ownerState:e}=t;return[o.root,e.disableGutters&&o.disableGutters]}})(({ownerState:t})=>a({position:"absolute",right:16,top:"50%",transform:"translateY(-50%)"},t.disableGutters&&{right:0})),ft=m.forwardRef(function(o,e){const r=F({props:o,name:"MuiListItemSecondaryAction"}),{className:n}=r,c=B(r,qt),l=m.useContext(X),p=a({},r,{disableGutters:l.disableGutters}),d=Jt(p);return u(Kt,a({className:I(d.root,n),ownerState:p,ref:e},c))});ft.muiName="ListItemSecondaryAction";const Qt=ft,Zt=["className"],to=["alignItems","autoFocus","button","children","className","component","components","componentsProps","ContainerComponent","ContainerProps","dense","disabled","disableGutters","disablePadding","divider","focusVisibleClassName","secondaryAction","selected","slotProps","slots"],oo=(t,o)=>{const{ownerState:e}=t;return[o.root,e.dense&&o.dense,e.alignItems==="flex-start"&&o.alignItemsFlexStart,e.divider&&o.divider,!e.disableGutters&&o.gutters,!e.disablePadding&&o.padding,e.button&&o.button,e.hasSecondaryAction&&o.secondaryAction]},eo=t=>{const{alignItems:o,button:e,classes:r,dense:n,disabled:c,disableGutters:l,disablePadding:p,divider:d,hasSecondaryAction:i,selected:f}=t;return W({root:["root",n&&"dense",!l&&"gutters",!p&&"padding",d&&"divider",c&&"disabled",e&&"button",o==="flex-start"&&"alignItemsFlexStart",i&&"secondaryAction",f&&"selected"],container:["container"]},Ft,r)},ro=L("div",{name:"MuiListItem",slot:"Root",overridesResolver:oo})(({theme:t,ownerState:o})=>a({display:"flex",justifyContent:"flex-start",alignItems:"center",position:"relative",textDecoration:"none",width:"100%",boxSizing:"border-box",textAlign:"left"},!o.disablePadding&&a({paddingTop:8,paddingBottom:8},o.dense&&{paddingTop:4,paddingBottom:4},!o.disableGutters&&{paddingLeft:16,paddingRight:16},!!o.secondaryAction&&{paddingRight:48}),!!o.secondaryAction&&{[`& > .${Yt.root}`]:{paddingRight:48}},{[`&.${U.focusVisible}`]:{backgroundColor:(t.vars||t).palette.action.focus},[`&.${U.selected}`]:{backgroundColor:t.vars?`rgba(${t.vars.palette.primary.mainChannel} / ${t.vars.palette.action.selectedOpacity})`:Z(t.palette.primary.main,t.palette.action.selectedOpacity),[`&.${U.focusVisible}`]:{backgroundColor:t.vars?`rgba(${t.vars.palette.primary.mainChannel} / calc(${t.vars.palette.action.selectedOpacity} + ${t.vars.palette.action.focusOpacity}))`:Z(t.palette.primary.main,t.palette.action.selectedOpacity+t.palette.action.focusOpacity)}},[`&.${U.disabled}`]:{opacity:(t.vars||t).palette.action.disabledOpacity}},o.alignItems==="flex-start"&&{alignItems:"flex-start"},o.divider&&{borderBottom:`1px solid ${(t.vars||t).palette.divider}`,backgroundClip:"padding-box"},o.button&&{transition:t.transitions.create("background-color",{duration:t.transitions.duration.shortest}),"&:hover":{textDecoration:"none",backgroundColor:(t.vars||t).palette.action.hover,"@media (hover: none)":{backgroundColor:"transparent"}},[`&.${U.selected}:hover`]:{backgroundColor:t.vars?`rgba(${t.vars.palette.primary.mainChannel} / calc(${t.vars.palette.action.selectedOpacity} + ${t.vars.palette.action.hoverOpacity}))`:Z(t.palette.primary.main,t.palette.action.selectedOpacity+t.palette.action.hoverOpacity),"@media (hover: none)":{backgroundColor:t.vars?`rgba(${t.vars.palette.primary.mainChannel} / ${t.vars.palette.action.selectedOpacity})`:Z(t.palette.primary.main,t.palette.action.selectedOpacity)}}},o.hasSecondaryAction&&{paddingRight:48})),no=L("li",{name:"MuiListItem",slot:"Container",overridesResolver:(t,o)=>o.container})({position:"relative"}),ao=m.forwardRef(function(o,e){const r=F({props:o,name:"MuiListItem"}),{alignItems:n="center",autoFocus:c=!1,button:l=!1,children:p,className:d,component:i,components:f={},componentsProps:P={},ContainerComponent:h="li",ContainerProps:{className:R}={},dense:b=!1,disabled:y=!1,disableGutters:k=!1,disablePadding:$=!1,divider:G=!1,focusVisibleClassName:A,secondaryAction:D,selected:E=!1,slotProps:_={},slots:v={}}=r,J=B(r.ContainerProps,Zt),x=B(r,to),C=m.useContext(X),M=m.useMemo(()=>({dense:b||C.dense||!1,alignItems:n,disableGutters:k}),[n,C.dense,b,k]),N=m.useRef(null);xt(()=>{c&&N.current&&N.current.focus()},[c]);const w=m.Children.toArray(p),K=w.length&&ht(w[w.length-1],["ListItemSecondaryAction"]),V=a({},r,{alignItems:n,autoFocus:c,button:l,dense:M.dense,disabled:y,disableGutters:k,disablePadding:$,divider:G,hasSecondaryAction:K,selected:E}),Q=eo(V),H=ct(N,e),s=v.root||f.Root||ro,g=_.root||P.root||{},T=a({className:I(Q.root,g.className,d),disabled:y},x);let S=i||"li";return l&&(T.component=i||"div",T.focusVisibleClassName=I(U.focusVisible,A),S=Ct),K?(S=!T.component&&!i?"div":S,h==="li"&&(S==="li"?S="div":T.component==="li"&&(T.component="div")),u(X.Provider,{value:M,children:q(no,a({as:h,className:I(Q.container,R),ref:H,ownerState:V},J,{children:[u(s,a({},g,!nt(s)&&{as:S,ownerState:a({},V,g.ownerState)},T,{children:w})),w.pop()]}))})):u(X.Provider,{value:M,children:q(s,a({},g,{as:S,ref:H},!nt(s)&&{ownerState:a({},V,g.ownerState)},T,{children:[w,D&&u(Qt,{children:D})]}))})}),so=ao;function io(t){return j("MuiListItemText",t)}const lo=z("MuiListItemText",["root","multiline","dense","inset","primary","secondary"]),st=lo,co=["children","className","disableTypography","inset","primary","primaryTypographyProps","secondary","secondaryTypographyProps"],po=t=>{const{classes:o,inset:e,primary:r,secondary:n,dense:c}=t;return W({root:["root",e&&"inset",c&&"dense",r&&n&&"multiline"],primary:["primary"],secondary:["secondary"]},io,o)},uo=L("div",{name:"MuiListItemText",slot:"Root",overridesResolver:(t,o)=>{const{ownerState:e}=t;return[{[`& .${st.primary}`]:o.primary},{[`& .${st.secondary}`]:o.secondary},o.root,e.inset&&o.inset,e.primary&&e.secondary&&o.multiline,e.dense&&o.dense]}})(({ownerState:t})=>a({flex:"1 1 auto",minWidth:0,marginTop:4,marginBottom:4},t.primary&&t.secondary&&{marginTop:6,marginBottom:6},t.inset&&{paddingLeft:56})),fo=m.forwardRef(function(o,e){const r=F({props:o,name:"MuiListItemText"}),{children:n,className:c,disableTypography:l=!1,inset:p=!1,primary:d,primaryTypographyProps:i,secondary:f,secondaryTypographyProps:P}=r,h=B(r,co),{dense:R}=m.useContext(X);let b=d??n,y=f;const k=a({},r,{disableTypography:l,inset:p,primary:!!b,secondary:!!y,dense:R}),$=po(k);return b!=null&&b.type!==Y&&!l&&(b=u(Y,a({variant:R?"body2":"body1",className:$.primary,component:i!=null&&i.variant?void 0:"span",display:"block"},i,{children:b}))),y!=null&&y.type!==Y&&!l&&(y=u(Y,a({variant:"body2",className:$.secondary,color:"text.secondary",display:"block"},P,{children:y}))),q(uo,a({className:I($.root,c),ownerState:k,ref:e},h,{children:[b,y]}))}),mo=fo;function go(t){return j("MuiToolbar",t)}z("MuiToolbar",["root","gutters","regular","dense"]);const bo=["className","component","disableGutters","variant"],yo=t=>{const{classes:o,disableGutters:e,variant:r}=t;return W({root:["root",!e&&"gutters",r]},go,o)},vo=L("div",{name:"MuiToolbar",slot:"Root",overridesResolver:(t,o)=>{const{ownerState:e}=t;return[o.root,!e.disableGutters&&o.gutters,o[e.variant]]}})(({theme:t,ownerState:o})=>a({position:"relative",display:"flex",alignItems:"center"},!o.disableGutters&&{paddingLeft:t.spacing(2),paddingRight:t.spacing(2),[t.breakpoints.up("sm")]:{paddingLeft:t.spacing(3),paddingRight:t.spacing(3)}},o.variant==="dense"&&{minHeight:48}),({theme:t,ownerState:o})=>o.variant==="regular"&&t.mixins.toolbar),xo=m.forwardRef(function(o,e){const r=F({props:o,name:"MuiToolbar"}),{className:n,component:c="div",disableGutters:l=!1,variant:p="regular"}=r,d=B(r,bo),i=a({},r,{component:c,disableGutters:l,variant:p}),f=yo(i);return u(vo,a({as:c,className:I(f.root,n),ref:e,ownerState:i},d))}),ho=xo,Co="/build/assets/logo-ebb0f0d9.png",ko=()=>{const[t,o]=m.useState(!1),e=r=>()=>{o(r)};return q("div",{children:[u(Rt,{position:"static",children:q(ho,{style:{display:"flex",justifyContent:"space-between"},children:[u(et,{component:"img",alt:"Card Image",style:{margin:"5px",width:"60px",objectFit:"contain"},image:Co}),u(et,{}),u(Y,{textAlign:"right",variant:"h6",component:"div",sx:{flexGrow:1},children:"Voice of Somalia - Country and Abroad"})]})}),u(jt,{anchor:"left",open:t,onClose:e(!1),children:u(kt,{children:["Home","About","Contact"].map((r,n)=>u(so,{button:!0,onClick:e(!1),children:u(mo,{primary:r})},r))})})]})},Lo=Object.freeze(Object.defineProperty({__proto__:null,default:ko},Symbol.toStringTag,{value:"Module"}));export{ko as N,Lo as a,Co as l};