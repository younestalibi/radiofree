import{r as a,j as h,a as t}from"./app-81c59769.js";import{A as n}from"./index.modern-d1ba5661.js";import{G as o}from"./AgoraRTC_N-production-2aaa42b4.js";import"./hoist-non-react-statics.cjs-c4f441ae.js";import"./createClass-5d1a4de6.js";import"./assertThisInitialized-a147f0d7.js";function x(l){const{users:e,tracks:i}=l,[s,c]=a.useState(12);return a.useEffect(()=>{c(Math.max(Math.floor(12/(e.length+1)),4)),console.log("---------------------"),console.log(e.length),console.log("---------------------")},[e,i]),h(o,{container:!0,spacing:4,style:{height:"100%"},children:[t(o,{item:!0,xs:12,sm:s,children:t(n,{videoTrack:i[1],style:{height:"100%",width:"100%"}})}),e.length>0&&e.map(r=>r.videoTrack?t(o,{item:!0,xs:e.length>1?6:12,sm:s,children:t(n,{videoTrack:r.videoTrack,style:{height:"100%",width:"100%"}},r.uid)}):null)]})}export{x as default};