import{r as s,j as p,a as t}from"./app-81c59769.js";import{D as m,a as u,b as d,T as c,B as h}from"./Button-cdd047b2.js";import"./hoist-non-react-statics.cjs-c4f441ae.js";import"./Typography-c71d19cf.js";import"./interopRequireDefault-01ffd8a5.js";import"./useTheme-d3f7b7a8.js";import"./ButtonBase-a8f2d70e.js";import"./assertThisInitialized-a147f0d7.js";import"./TransitionGroup-ac9ce4eb.js";import"./Paper-fc7ff9ae.js";import"./createSvgIcon-5c9483b2.js";function A({open:o,onClose:r,onSubmit:n}){const[e,a]=s.useState(""),i=()=>{a(""),r()};return p(m,{open:o,onClose:i,children:[t(u,{children:"Enter Value"}),t(d,{children:t(c,{label:"Value",variant:"outlined",value:e,onChange:l=>a(l.target.value)})}),t("div",{style:{padding:"16px",textAlign:"center"},children:t(h,{variant:"contained",color:"primary",onClick:()=>{n(e),i()},children:"Submit"})})]})}export{A as default};