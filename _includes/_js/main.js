                                                                                     // JavaScript Document


$(document).ready(function() {
    thisResize();
	
	$('#btn-nosotros').on('click touchend', function(e) {
    var el = $(this);
    var link = el.attr('href');
    window.location = link;
	});
	
	var device = navigator.userAgent;

		if ( device.match(/iPhone|iPad|iPod/i))
		{  $('.lista-ciudades').css('opacity','1');
			$('#ciudades-index .sect-title').css('opacity',1);
			$('#ciudades-index .sect-title').css('width','100%');
			$('.img-title h1').css('position','inherit');
			$('.img-title h1').css('top','50%');
			$('.background-fixed').css('background-attachment','inherit');
			$('#img-reclutamiento').css('background-attachment','inherit');
			$('#ciudades-index .sect-title').css('top','20%');
			$('#img-nosotros').css('background-size','contain');
			$('#contacto-index span').css('opacity','1');
		 }
	
	
	if($('.word-carousel')){
	var palabra_actual = 0;
	var word_interval = 3000;
	
	setTimeout(function() {
	word_change();
	}, 1000);
	setInterval(function() {word_change();}, word_interval);
	
	function word_change(){
	if(palabra_actual == $('.word-carousel').length){palabra_actual=0;}
	palabra_actual++;
	$('.word-carousel').removeClass('actual');
	
	$('.word-carousel').each(function(index, element) {
	//alert(rcm_actual + ' ' + $(this).data('index'));
	   if($(this).data('index') == palabra_actual){ $(this).addClass('actual');}
	});   
	}
	}   
	
	
	
	if($('#large-header').length){
	animatedBack();}
	/*$('.prueba').click(function(e) {
       
	    var texto = $(this).html();
		$(this).css('background-color','#000');
		
		$(this).css('margin-top','100px');
		//alert(texto);
    });*/
	
	$('.menu-container').click(function(){
		$('.menu-container').toggleClass('is-menu-open') ;
		$('#menu_header').toggleClass('menu-height');
		});
	

});

//Cambio de tamaño en la vetana

function animatedBack() {
	"use strict";
    var width, height, largeHeader, canvas, ctx, points, target, animateHeader = true;
	var secwidth = $("#large-header").width();

    // Main
    initHeader();
    initAnimation();
    addListeners();

    function initHeader() {
        width = secwidth;
        height = 500;
        target = {x: width/2, y: height/2};

        largeHeader = document.getElementById('large-header');
        largeHeader.style.height = height+'px';

        canvas = document.getElementById('demo-canvas');
        canvas.width = width;
        canvas.height = height;
        ctx = canvas.getContext('2d');

        // create points
        points = [];
        for(var x = 0; x < width; x = x + width/20) {
            for(var y = 0; y < height; y = y + height/20) {
                var px = x + Math.random()*width/20;
                var py = y + Math.random()*height/20;
                var p = {x: px, originX: px, y: py, originY: py };
                points.push(p);
            }
        }

        // for each point find the 5 closest points
        for(var i = 0; i < points.length; i++) {
            var closest = [];
            var p1 = points[i];
            for(var j = 0; j < points.length; j++) {
                var p2 = points[j];
                if(p1 != p2) {
                    var placed = false;
                    for(var k = 0; k < 5; k++) {
                        if(!placed) {
                            if(closest[k] == undefined) {
                                closest[k] = p2;
                                placed = true;
                            }
                        }
                    }

                    for(var l = 0; l < 5; l++) {
                        if(!placed) {
                            if(getDistance(p1, p2) < getDistance(p1, closest[l])) {
                                closest[l] = p2;
                                placed = true;
                            }
                        }
                    }
                }
            }
            p1.closest = closest;
        }

        // assign a circle to each point
        for(var i in points) {
            var c = new Circle(points[i], 2+Math.random()*2, 'rgba(255,255,255,0.3)');
            points[i].circle = c;
        }
    }

    // Event handling
    function addListeners() {
        if(!('ontouchstart' in window)) {
            window.addEventListener('mousemove', mouseMove);
        }
        window.addEventListener('scroll', scrollCheck);
       // window.addEventListener('resize', resize);
    }

	//var headersect = $("#large-header");
 	function mouseMove(e) {
		//var posy = 0;
		var posx = posy = 0;
		if (e.pageX || e.pageY) {
			posx = e.pageX;
			posy = e.pageY;
		}
		else if (e.clientX || e.clientY)    {
			posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
			posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
		}
		target.x = posx;
		target.y = posy;
	}

    function scrollCheck() {
      //  if(document.body.scrollTop > height) {animateHeader = false;}
        //else {
			animateHeader = true;
			//}
    }

   /* function resize() {
        width = window.innerWidth;
        height = window.innerHeight;
        largeHeader.style.height = height+'px';
        canvas.width = width;
        canvas.height = height;
    }*/

    // animation
    function initAnimation() {
        animate();
        for(var i in points) {
            shiftPoint(points[i]);
        }
    }

    function animate() {
        if(animateHeader) {
            ctx.clearRect(0,0,width,height);
            for(var i in points) {
                // detect points in range
                if(Math.abs(getDistance(target, points[i])) < 4000) {
                    points[i].active = 0.3;
                    points[i].circle.active = 0.6;
                } else if(Math.abs(getDistance(target, points[i])) < 20000) {
                    points[i].active = 0.1;
                    points[i].circle.active = 0.3;
                } else if(Math.abs(getDistance(target, points[i])) < 40000) {
                    points[i].active = 0.02;
                    points[i].circle.active = 0.1;
                } else {
                    points[i].active = 0;
                    points[i].circle.active = 0;
                }

                drawLines(points[i]);
                points[i].circle.draw();
            }
        }
        requestAnimationFrame(animate);
    }

    function shiftPoint(p) {
        TweenLite.to(p, 1+1*Math.random(), {x:p.originX-5+Math.random()*100,
            y: p.originY-5+Math.random()*100, ease:Circ.easeInOut,
            onComplete: function() {
                shiftPoint(p);
            }});
    }

    // Canvas manipulation
    function drawLines(p) {
        if(!p.active) return;
        for(var i in p.closest) {
            ctx.beginPath();
            ctx.moveTo(p.x, p.y);
            ctx.lineTo(p.closest[i].x, p.closest[i].y);
            ctx.strokeStyle = 'rgba(0,0,0,'+ p.active+')';
            ctx.stroke();
        }
    }

    function Circle(pos,rad,color) {
        var _this = this;

        // constructor
        (function() {
            _this.pos = pos || null;
            _this.radius = rad || null;
            _this.color = color || null;
        })();

        this.draw = function() {
            if(!_this.active) { return; }
            ctx.beginPath();
            ctx.arc(_this.pos.x, _this.pos.y, _this.radius, 0, 2 * Math.PI, false);
            ctx.fillStyle = 'rgba(0,0,0,'+ _this.active+')';
            ctx.fill();
        };
    }

    // Util
    function getDistance(p1, p2) {
        return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2);
    }
    
}


function thisResize() {
	var heightContainer = $(window).height() - $('header').height() -70;
		var ratio =  $(window).height() / $(window).width() * 100;
		console.log(ratio);
		if (  ratio <= 35 ){
			
		$('#welcome').height(heightContainer);
		console.log('resize');
		}
	}
var resizeTimer; $(window).resize(function () { if (resizeTimer) { clearTimeout(resizeTimer); } resizeTimer = setTimeout(function() { resizeTimer = null; thisResize(); }, 500);});