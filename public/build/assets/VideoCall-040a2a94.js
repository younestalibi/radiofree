import{r as c,j as b,a as l}from"./app-b2b7f0bd.js";import{u as j,a as x,C as w,c as d}from"./Controls-1f206dd8.js";import I from"./Video-b95e185b.js";import{G as p}from"./AgoraRTC_N-production-df3bfb92.js";import"./index.modern-ff278555.js";import"./interopRequireDefault-01ffd8a5.js";import"./hoist-non-react-statics.cjs-3d501c67.js";import"./index-45da83ee.js";import"./TransitionGroup-2e0c1e78.js";import"./assertThisInitialized-a147f0d7.js";import"./createClass-5d1a4de6.js";function z(m){const{setInCall:h,channelName:u}=m,[y,s]=c.useState([]),[C,f]=c.useState(!1),i=j(),{ready:a,tracks:r}=x();return c.useEffect(()=>{let g=async n=>{i.on("user-published",async(t,e)=>{await i.subscribe(t,e),e==="video"&&s(o=>[...o,t]),e==="audio"&&t.audioTrack.play()}),i.on("user-unpublished",(t,e)=>{e==="audio"&&t.audioTrack&&t.audioTrack.stop(),e==="video"&&s(o=>o.filter(k=>k.uid!==t.uid))}),i.on("user-left",t=>{s(e=>e.filter(o=>o.uid!==t.uid))});try{await i.join(d.appId,n,d.token,null)}catch{console.log("error")}r&&await i.publish([r[0],r[1]]),f(!0)};if(a&&r)try{g(u)}catch(n){console.log(n)}},[u,i,a,r]),b(p,{container:!0,direction:"column",style:{height:"100%"},children:[a&&r&&l(w,{tracks:r,setStart:f,setInCall:h}),l(p,{item:!0,style:{height:"100%",justifyContent:"center",alignItems:"center",display:"flex"},children:C&&r&&l(I,{tracks:r,users:y})})]})}export{z as default};