!function(o){o.fn.zolowave=function(n){var e=o.extend({colorStart:"#00AABB",colorEnd:"rgba(0,200,250,0)",height:500,mousehover:!0},n),t=this;return t.init=function(){function n(o,n){var e=l[Math.round(o/x*l.length)];e&&(e.force.y+=n)}function r(o){var n=window.innerWidth,t=e.height;a.width=n,a.height=t;for(var r=0;r<m+1;r++)l[r].x=n/(m-4)*(r-2),l[r].y=.5*t,l[r].original.x=l[r].x,l[r].original.y=l[r].y}function i(o,n){var e=n.x-o.x,t=n.y-o.y;return Math.sqrt(e*e+t*t)}var a,y,l,x=window.innerWidth,c=e.colorStart,h=e.colorEnd,f=e.height,v=e.mousehover,d=.75,u=1.14,g=.09,s=200,m=Math.round(x/60),M={x:0,y:0},w={x:0,y:0};if((a=t[0])&&a.getContext){y=a.getContext("2d"),l=[];for(var T=0;T<m+1;T++)l.push({x:x/(m-4)*(T-2),y:.5*f,original:{x:0,y:.5*f},velocity:{x:0,y:3*Math.random()},force:{x:0,y:0},mass:10});1==v&&o(a).mousemove(function(o){M.x=Math.max(Math.min(o.screenX-w.x,40),-40),M.y=Math.max(Math.min(o.screenY-w.y,40),-40),w.x=o.screenX,w.y=o.screenY}),o(window).resize(r),setInterval(function(o){var n=y.createLinearGradient(.5*x,.2*f,.5*x,f);n.addColorStop(0,c),n.addColorStop(1,h),y.clearRect(0,0,x,f),y.fillStyle=n,y.beginPath(),y.moveTo(l[0].x,l[0].y);var e,t,r,a,v=l.length;for(e=0;e<v;e++)if(t=l[e],r=l[e-1],a=l[e+1],r&&a){var m=0;if(m+=-d*(r.y-t.y),m+=d*(t.y-a.y),m+=d/15*(t.y-t.original.y),t.velocity.y+=-m/t.mass+t.force.y,t.velocity.y/=u,t.force.y/=u,t.y+=t.velocity.y,(T=i(w,t))<s){var T=i(w,{x:t.original.x,y:t.original.y});M.x=.98*M.x,M.y=.98*M.y,t.force.y+=g*(1-T/s)*M.y}y.quadraticCurveTo(r.x,r.y,r.x+(t.x-r.x)/2,r.y+(t.y-r.y)/2)}y.lineTo(l[l.length-1].x,l[l.length-1].y),y.lineTo(x,f),y.lineTo(0,f),y.lineTo(l[0].x,l[0].y),y.fill()},40),setInterval(function(){(M.x<6||M.y<6)&&n(Math.random()*x,10*Math.random()-5)},500),r()}},t.init(),t}}(jQuery);