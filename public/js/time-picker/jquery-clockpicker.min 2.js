/*!
 * ClockPicker v0.0.7 (http://weareoutman.github.io/clockpicker/)
 * Copyright 2014 Wang Shenwei.
 * Licensed under MIT (https://github.com/weareoutman/clockpicker/blob/master/LICENSE)
 */
!function(){function t(t){return document.createElementNS(a,t)}function i(t){return(10>t?"0":"")+t}function e(t){var i=++v+"";return t?t+i:i}function s(s,n){function a(t,i){var e=h.offset(),s=/^touch/.test(t.type),c=e.left+m,a=e.top+m,l=(s?t.originalEvent.touches[0]:t).pageX-c,u=(s?t.originalEvent.touches[0]:t).pageY-a,f=Math.sqrt(l*l+u*u),v=!1;if(!i||!(g-w>f||f>g+w)){t.preventDefault();var b=setTimeout(function(){o.addClass("clockpicker-moving")},200);p&&h.append(H.canvas),H.setHand(l,u,!i,!0),r.off(k).on(k,function(t){t.preventDefault();var i=/^touch/.test(t.type),e=(i?t.originalEvent.touches[0]:t).pageX-c,s=(i?t.originalEvent.touches[0]:t).pageY-a;(v||e!==l||s!==u)&&(v=!0,H.setHand(e,s,!1,!0))}),r.off(d).on(d,function(t){r.off(d),t.preventDefault();var e=/^touch/.test(t.type),s=(e?t.originalEvent.changedTouches[0]:t).pageX-c,p=(e?t.originalEvent.changedTouches[0]:t).pageY-a;(i||v)&&s===l&&p===u&&H.setHand(s,p),"hours"===H.currentView?H.toggleView("minutes",M/2):n.autoclose&&(H.minutesView.addClass("clockpicker-dial-out"),setTimeout(function(){H.done()},M/2)),h.prepend(O),clearTimeout(b),o.removeClass("clockpicker-moving"),r.off(k)})}}var l=c(A),h=l.find(".clockpicker-plate"),f=l.find(".clockpicker-hours"),v=l.find(".clockpicker-minutes"),T=l.find(".clockpicker-am-pm-block"),V="INPUT"===s.prop("tagName"),C=V?s:s.find("input"),P=s.find(".input-group-addon"),H=this;if(this.id=e("cp"),this.element=s,this.options=n,this.isAppended=!1,this.isShown=!1,this.currentView="hours",this.isInput=V,this.input=C,this.addon=P,this.popover=l,this.plate=h,this.hoursView=f,this.minutesView=v,this.amPmBlock=T,this.spanHours=l.find(".clockpicker-span-hours"),this.spanMinutes=l.find(".clockpicker-span-minutes"),this.spanAmPm=l.find(".clockpicker-span-am-pm"),this.amOrPm="PM",n.twelvehour){{var x=['<div class="clockpicker-am-pm-block">','<button type="button" class="btn btn-default clockpicker-button clockpicker-am-button">',"AM</button>",'<button type="button" class="btn btn-sm btn-default clockpicker-button clockpicker-pm-button">',"PM</button>","</div>"].join("");c(x)}c('<button type="button" class="btn btn-sm btn-default clockpicker-button am-button">AM</button>').on("click",function(){H.amOrPm="AM",c(".clockpicker-span-am-pm").empty().append("AM")}).appendTo(this.amPmBlock),c('<button type="button" class="btn btn-sm btn-default clockpicker-button pm-button">PM</button>').on("click",function(){H.amOrPm="PM",c(".clockpicker-span-am-pm").empty().append("PM")}).appendTo(this.amPmBlock)}n.autoclose||c('<button type="button" class="btn btn-sm btn-default btn-block clockpicker-button btn-primary">'+n.donetext+"</button>").click(c.proxy(this.done,this)).appendTo(l),"top"!==n.placement&&"bottom"!==n.placement||"top"!==n.align&&"bottom"!==n.align||(n.align="left"),"left"!==n.placement&&"right"!==n.placement||"left"!==n.align&&"right"!==n.align||(n.align="top"),l.addClass(n.placement),l.addClass("clockpicker-align-"+n.align),this.spanHours.click(c.proxy(this.toggleView,this,"hours")),this.spanMinutes.click(c.proxy(this.toggleView,this,"minutes")),C.on("focus.clockpicker click.clockpicker",c.proxy(this.show,this)),P.on("click.clockpicker",c.proxy(this.toggle,this));var E,S,I,D=c('<div class="clockpicker-tick"></div>');if(n.twelvehour)for(E=1;13>E;E+=1){S=D.clone(),I=E/6*Math.PI;var B=g;S.css("font-size","120%"),S.css({left:m+Math.sin(I)*B-w,top:m-Math.cos(I)*B-w}),S.html(0===E?"00":E),f.append(S),S.on(u,a)}else for(E=0;24>E;E+=1){S=D.clone(),I=E/6*Math.PI;var z=E>0&&13>E,B=z?b:g;S.css({left:m+Math.sin(I)*B-w,top:m-Math.cos(I)*B-w}),z&&S.css("font-size","120%"),S.html(0===E?"00":E),f.append(S),S.on(u,a)}for(E=0;60>E;E+=5)S=D.clone(),I=E/30*Math.PI,S.css({left:m+Math.sin(I)*g-w,top:m-Math.cos(I)*g-w}),S.css("font-size","120%"),S.html(i(E)),v.append(S),S.on(u,a);if(h.on(u,function(t){0===c(t.target).closest(".clockpicker-tick").length&&a(t,!0)}),p){var O=l.find(".clockpicker-canvas"),j=t("svg");j.setAttribute("class","clockpicker-svg"),j.setAttribute("width",y),j.setAttribute("height",y);var L=t("g");L.setAttribute("transform","translate("+m+","+m+")");var U=t("circle");U.setAttribute("class","clockpicker-canvas-bearing"),U.setAttribute("cx",0),U.setAttribute("cy",0),U.setAttribute("r",2);var W=t("line");W.setAttribute("x1",0),W.setAttribute("y1",0);var N=t("circle");N.setAttribute("class","clockpicker-canvas-bg"),N.setAttribute("r",w);var X=t("circle");X.setAttribute("class","clockpicker-canvas-fg"),X.setAttribute("r",3.5),L.appendChild(W),L.appendChild(N),L.appendChild(X),L.appendChild(U),j.appendChild(L),O.append(j),this.hand=W,this.bg=N,this.fg=X,this.bearing=U,this.g=L,this.canvas=O}}var o,c=window.jQuery,n=c(window),r=c(document),a="http://www.w3.org/2000/svg",p="SVGAngle"in window&&function(){var t,i=document.createElement("div");return i.innerHTML="<svg/>",t=(i.firstChild&&i.firstChild.namespaceURI)==a,i.innerHTML="",t}(),l=function(){var t=document.createElement("div").style;return"transition"in t||"WebkitTransition"in t||"MozTransition"in t||"msTransition"in t||"OTransition"in t}(),h="ontouchstart"in window,u="mousedown"+(h?" touchstart":""),k="mousemove.clockpicker"+(h?" touchmove.clockpicker":""),d="mouseup.clockpicker"+(h?" touchend.clockpicker":""),f=navigator.vibrate?"vibrate":navigator.webkitVibrate?"webkitVibrate":null,v=0,m=100,g=80,b=54,w=13,y=2*m,M=l?350:1,A=['<div class="popover clockpicker-popover">','<div class="arrow"></div>','<div class="popover-title">','<span class="clockpicker-span-hours txt-primary"></span>'," : ",'<span class="clockpicker-span-minutes"></span>','<span class="clockpicker-span-am-pm"></span>',"</div>",'<div class="popover-content">','<div class="clockpicker-plate">','<div class="clockpicker-canvas"></div>','<div class="clockpicker-dial clockpicker-hours"></div>','<div class="clockpicker-dial clockpicker-minutes clockpicker-dial-out"></div>',"</div>",'<span class="clockpicker-am-pm-block">',"</span>","</div>","</div>"].join("");s.DEFAULTS={"default":"",fromnow:0,placement:"bottom",align:"left",donetext:"Finish",autoclose:!1,twelvehour:!1,vibrate:!0},s.prototype.toggle=function(){this[this.isShown?"hide":"show"]()},s.prototype.locate=function(){var t=this.element,i=this.popover,e=t.offset(),s=t.outerWidth(),o=t.outerHeight(),c=this.options.placement,n=this.options.align,r={};switch(i.show(),c){case"bottom":r.top=e.top+o;break;case"right":r.left=e.left+s;break;case"top":r.top=e.top-i.outerHeight();break;case"left":r.left=e.left-i.outerWidth()}switch(n){case"left":r.left=e.left;break;case"right":r.left=e.left+s-i.outerWidth();break;case"top":r.top=e.top;break;case"bottom":r.top=e.top+o-i.outerHeight()}i.css(r)},s.prototype.show=function(){if(!this.isShown){var t=this;this.isAppended||(o=c(document.body).append(this.popover),n.on("resize.clockpicker"+this.id,function(){t.isShown&&t.locate()}),this.isAppended=!0);var e=((this.input.prop("value")||this.options["default"]||"")+"").split(":");if("now"===e[0]){var s=new Date(+new Date+this.options.fromnow);e=[s.getHours(),s.getMinutes()]}this.hours=+e[0]||0,this.minutes=+e[1]||0,this.spanHours.html(i(this.hours)),this.spanMinutes.html(i(this.minutes)),this.toggleView("hours"),this.locate(),this.isShown=!0,r.on("click.clockpicker."+this.id+" focusin.clockpicker."+this.id,function(i){var e=c(i.target);0===e.closest(t.popover).length&&0===e.closest(t.addon).length&&0===e.closest(t.input).length&&t.hide()}),r.on("keyup.clockpicker."+this.id,function(i){27===i.keyCode&&t.hide()})}},s.prototype.hide=function(){this.isShown=!1,r.off("click.clockpicker."+this.id+" focusin.clockpicker."+this.id),r.off("keyup.clockpicker."+this.id),this.popover.hide()},s.prototype.toggleView=function(t,i){var e="hours"===t,s=e?this.hoursView:this.minutesView,o=e?this.minutesView:this.hoursView;this.currentView=t,this.spanHours.toggleClass("txt-primary",e),this.spanMinutes.toggleClass("txt-primary",!e),o.addClass("clockpicker-dial-out"),s.css("visibility","visible").removeClass("clockpicker-dial-out"),this.resetClock(i),clearTimeout(this.toggleViewTimer),this.toggleViewTimer=setTimeout(function(){o.css("visibility","hidden")},M)},s.prototype.resetClock=function(t){var i=this.currentView,e=this[i],s="hours"===i,o=Math.PI/(s?6:30),c=e*o,n=s&&e>0&&13>e?b:g,r=Math.sin(c)*n,a=-Math.cos(c)*n,l=this;p&&t?(l.canvas.addClass("clockpicker-canvas-out"),setTimeout(function(){l.canvas.removeClass("clockpicker-canvas-out"),l.setHand(r,a)},t)):this.setHand(r,a)},s.prototype.setHand=function(t,e,s,o){var n,r=Math.atan2(t,-e),a="hours"===this.currentView,l=Math.PI/(a||s?6:30),h=Math.sqrt(t*t+e*e),u=this.options,k=a&&(g+b)/2>h,d=k?b:g;if(u.twelvehour&&(d=g),0>r&&(r=2*Math.PI+r),n=Math.round(r/l),r=n*l,u.twelvehour?a?0===n&&(n=12):(s&&(n*=5),60===n&&(n=0)):a?(12===n&&(n=0),n=k?0===n?12:n:0===n?0:n+12):(s&&(n*=5),60===n&&(n=0)),this[this.currentView]!==n&&f&&this.options.vibrate&&(this.vibrateTimer||(navigator[f](10),this.vibrateTimer=setTimeout(c.proxy(function(){this.vibrateTimer=null},this),100))),this[this.currentView]=n,this[a?"spanHours":"spanMinutes"].html(i(n)),!p)return void this[a?"hoursView":"minutesView"].find(".clockpicker-tick").each(function(){var t=c(this);t.toggleClass("active",n===+t.html())});o||!a&&n%5?(this.g.insertBefore(this.hand,this.bearing),this.g.insertBefore(this.bg,this.fg),this.bg.setAttribute("class","clockpicker-canvas-bg clockpicker-canvas-bg-trans")):(this.g.insertBefore(this.hand,this.bg),this.g.insertBefore(this.fg,this.bg),this.bg.setAttribute("class","clockpicker-canvas-bg"));var v=Math.sin(r)*d,m=-Math.cos(r)*d;this.hand.setAttribute("x2",v),this.hand.setAttribute("y2",m),this.bg.setAttribute("cx",v),this.bg.setAttribute("cy",m),this.fg.setAttribute("cx",v),this.fg.setAttribute("cy",m)},s.prototype.done=function(){this.hide();var t=this.input.prop("value"),e=i(this.hours)+":"+i(this.minutes);this.options.twelvehour&&(e+=this.amOrPm),this.input.prop("value",e),e!==t&&(this.input.triggerHandler("change"),this.isInput||this.element.trigger("change")),this.options.autoclose&&this.input.trigger("blur")},s.prototype.remove=function(){this.element.removeData("clockpicker"),this.input.off("focus.clockpicker click.clockpicker"),this.addon.off("click.clockpicker"),this.isShown&&this.hide(),this.isAppended&&(n.off("resize.clockpicker"+this.id),this.popover.remove())},c.fn.clockpicker=function(t){var i=Array.prototype.slice.call(arguments,1);return this.each(function(){var e=c(this),o=e.data("clockpicker");if(o)"function"==typeof o[t]&&o[t].apply(o,i);else{var n=c.extend({},s.DEFAULTS,e.data(),"object"==typeof t&&t);e.data("clockpicker",new s(e,n))}})}}();