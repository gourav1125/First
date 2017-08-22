<div class="clearfix"></div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="top-footer">
					<div class="col-md-3 links">
						<h4>Quick Links</h4>
						<ul>
							<li><a href="about.php">Hair Transplant in chennai</a></li>
							<li><a href="fue-hair-transplant.php">FUE Hair Transplant</a></li>
							<li><a href="body-hair-transplant.php">Body Hair Transplant</a></li>
							<li><a href="eyebrow-transplantation.php">Eyebrow Transplantation</a></li>
							<li><a href="hair-loss.php">Hair Loss Treatment</a></li>
							<li><a href="javascript:void(0)">Female Hair Loss Treatment</a></li>
						</ul>
					</div>
					<div class="col-md-3 links">
						<h4 style="visibility: hidden;"> c</h4>
						<ul>
							<li><a href="javascript:void(0)">Male Hair Loss Treatment</a></li>
							<li><a href="javascript:void(0)">Hair Transplant Results</a></li>
							<li><a href="javascript:void(0)">Hair Transplant Surgeon in Chennai</a></li>
							<li><a href="platelet-rich-plasma.php">Platelet Rich Plasma (PRP)</a></li>
							<li><a href="artificial-hair-fibers.php">Artificial Hair Fibers</a></li>
						</ul>
					</div>
					<div class="col-md-3 links">
						<h4>Stay In Touch</h4>
						<ul>
							<li>
							<p>#19, TMA Tower,1st floor, Dr.Thirumurthy nagar main road, Thirumurthy nagar, (near ispahani centre) Nungampakkam, <br>Chennai - 600034</p></li>
						</ul>
					</div>
					<div class="col-md-3 links social-icon">
						<h4>Follow Us on</h4>
						<ul>
							<li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="javascript:void(0)"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						</ul>
						<p class="footer-number"><i class="fa fa-phone" aria-hidden="true"></i> +91  8939636222</p>
						<p class="footer-number"><i class="fa fa-envelope" aria-hidden="true"></i> info@hairtransplantchennai.com</p>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<p>DermaClinix © 2017 All Rights Reserved<br>Disclaimer: Result May Vary Person To Person </p>
					</div>
					<div class="col-sm-6 right">
						<p>Website designed & developed by <a href="http://www.pixeloweb.com/" target="_blank">PixelOWeb</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="clearfix"></div>
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script src="js/jquery.fancybox.min.js"></script>
	
	<script src="js/lity.js"></script>

<script src="js/prism.js"></script>
	
	<!-- Banner Slider JS -->
	<script src="js/slider.min.js"></script>
	<script>
	$(function(){
		$('#slider').rbtSlider({
			height: '550px', 
			'dots': true,
			'arrows': true,
			'auto': 3
		});
	});
	</script>
	
	<!-- Datepicker JS 
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
	<script src="js/jquery-ui.js"></script>
	<script>
		$( function() {
		$( "#datepicker" ).datepicker();
		} );
		
		$( function() {
		$( "#datepicker1" ).datepicker();
		} );
		$( function() {
		$( "#datepicker2" ).datepicker();
		} );
	</script>
	<!-- Font Awesome JS -->
	<script src="https://use.fontawesome.com/1f6554cbc4.js"></script>
	
	<!-- Select Box JS -->
	<script src="js/bootstrap-select.js"></script>
	<script>
		  $(document).ready(function () {
			var mySelect = $('#first-disabled2');

			$('#special').on('click', function () {
			  mySelect.find('option:selected').prop('disabled', true);
			  mySelect.selectpicker('refresh');
			});

			$('#special2').on('click', function () {
			  mySelect.find('option:disabled').prop('disabled', false);
			  mySelect.selectpicker('refresh');
			});

			$('#basic2').selectpicker({
			  liveSearch: true,
			  maxOptions: 1
			});
		  });
		  
		  (function() {
  var Util,
    __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

  Util = (function() {
    function Util() {}

    Util.prototype.extend = function(custom, defaults) {
      var key, value;
      for (key in custom) {
        value = custom[key];
        if (value != null) {
          defaults[key] = value;
        }
      }
      return defaults;
    };

    Util.prototype.isMobile = function(agent) {
      return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);
    };

    return Util;

  })();

  this.WOW = (function() {
    WOW.prototype.defaults = {
      boxClass: 'wow',
      animateClass: 'animated',
      offset: 0,
      mobile: true
    };

    function WOW(options) {
      if (options == null) {
        options = {};
      }
      this.scrollCallback = __bind(this.scrollCallback, this);
      this.scrollHandler = __bind(this.scrollHandler, this);
      this.start = __bind(this.start, this);
      this.scrolled = true;
      this.config = this.util().extend(options, this.defaults);
    }

    WOW.prototype.init = function() {
      var _ref;
      this.element = window.document.documentElement;
      if ((_ref = document.readyState) === "interactive" || _ref === "complete") {
        return this.start();
      } else {
        return document.addEventListener('DOMContentLoaded', this.start);
      }
    };

    WOW.prototype.start = function() {
      var box, _i, _len, _ref;
      this.boxes = this.element.getElementsByClassName(this.config.boxClass);
      if (this.boxes.length) {
        if (this.disabled()) {
          return this.resetStyle();
        } else {
          _ref = this.boxes;
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            this.applyStyle(box, true);
          }
          window.addEventListener('scroll', this.scrollHandler, false);
          window.addEventListener('resize', this.scrollHandler, false);
          return this.interval = setInterval(this.scrollCallback, 50);
        }
      }
    };

    WOW.prototype.stop = function() {
      window.removeEventListener('scroll', this.scrollHandler, false);
      window.removeEventListener('resize', this.scrollHandler, false);
      if (this.interval != null) {
        return clearInterval(this.interval);
      }
    };

    WOW.prototype.show = function(box) {
      this.applyStyle(box);
      return box.className = "" + box.className + " " + this.config.animateClass;
    };

    WOW.prototype.applyStyle = function(box, hidden) {
      var delay, duration, iteration;
      duration = box.getAttribute('data-wow-duration');
      delay = box.getAttribute('data-wow-delay');
      iteration = box.getAttribute('data-wow-iteration');
      return box.setAttribute('style', this.customStyle(hidden, duration, delay, iteration));
    };

    WOW.prototype.resetStyle = function() {
      var box, _i, _len, _ref, _results;
      _ref = this.boxes;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        box = _ref[_i];
        _results.push(box.setAttribute('style', 'visibility: visible;'));
      }
      return _results;
    };

    WOW.prototype.customStyle = function(hidden, duration, delay, iteration) {
      var style;
      style = hidden ? "visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;" : "visibility: visible;";
      if (duration) {
        style += "-webkit-animation-duration: " + duration + "; -moz-animation-duration: " + duration + "; animation-duration: " + duration + ";";
      }
      if (delay) {
        style += "-webkit-animation-delay: " + delay + "; -moz-animation-delay: " + delay + "; animation-delay: " + delay + ";";
      }
      if (iteration) {
        style += "-webkit-animation-iteration-count: " + iteration + "; -moz-animation-iteration-count: " + iteration + "; animation-iteration-count: " + iteration + ";";
      }
      return style;
    };

    WOW.prototype.scrollHandler = function() {
      return this.scrolled = true;
    };

    WOW.prototype.scrollCallback = function() {
      var box;
      if (this.scrolled) {
        this.scrolled = false;
        this.boxes = (function() {
          var _i, _len, _ref, _results;
          _ref = this.boxes;
          _results = [];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            if (!(box)) {
              continue;
            }
            if (this.isVisible(box)) {
              this.show(box);
              continue;
            }
            _results.push(box);
          }
          return _results;
        }).call(this);
        if (!this.boxes.length) {
          return this.stop();
        }
      }
    };

    WOW.prototype.offsetTop = function(element) {
      var top;
      top = element.offsetTop;
      while (element = element.offsetParent) {
        top += element.offsetTop;
      }
      return top;
    };

    WOW.prototype.isVisible = function(box) {
      var bottom, offset, top, viewBottom, viewTop;
      offset = box.getAttribute('data-wow-offset') || this.config.offset;
      viewTop = window.pageYOffset;
      viewBottom = viewTop + this.element.clientHeight - offset;
      top = this.offsetTop(box);
      bottom = top + box.clientHeight;
      return top <= viewBottom && bottom >= viewTop;
    };

    WOW.prototype.util = function() {
      return this._util || (this._util = new Util());
    };

    WOW.prototype.disabled = function() {
      return !this.config.mobile && this.util().isMobile(navigator.userAgent);
    };

    return WOW;

  })();

}).call(this);


wow = new WOW(
  {
    animateClass: 'animated',
    offset: 100
  }
);
wow.init();


$(document).ready(function () {
	
	if($(window).width() > 768){
		$("#navigation ul li").hover(function () { //When trigger is hovered...
			$(this).children("#navigation ul li ul").slideDown('slow').show();
		}, function () {
			$(this).children("#navigation ul li ul").slideUp('slow');
		});

	}
	else
	{
          $("#navigation ul li span").click(function (e) {
			  e.preventDefault();
			$(this).parent().parent().children("#navigation ul li ul").slideToggle('slow').show();
		});
		
	}
});
</script>

		<script type="text/javascript" src="js/jquery.sticky.js"></script>
  <script>
    $(window).load(function(){
      $("header").sticky({ topSpacing: 0 });
    });
  </script>
  <!--Start of Zendesk Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="https://v2.zopim.com/?523QoqxiUiqKduBRfJ5nWIktrsSwLzAZ";z.t=+new Date;$.
	type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
	</script>
<!--End of Zendesk Chat Script-->
  </body>
</html>