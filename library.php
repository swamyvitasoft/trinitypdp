<?php include 'header.php'; ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <section class="section banner" style="background-image:url('upload/library.jpg');" data-img-width="1920" data-img-height="522"  data-diff="100">
            <div class="container">
                <div class="page-header text-center">
                    <h1></h1>
                   
                </div>
            </div>
        </section>
<div class="container" >
   
    <div class="row">
        <div class="col-md-12 alert alert-warning text-center">Open on all working days  <span style="color:red !important"><blink>08:00 AM to 06:00 PM</blink></span></div>
     	<h2 class="text-center">Books(19826)</h2>
        	<div class="col-md-12 text-center">
        	<div class="row">  
    	        <div class="col-md-4">
    	        <div class="counter">
                      <i class="fa fa-bar-chart fa-2x"></i>
                      <h2 class="timer count-title count-number" data-to="19826" data-speed="1500"></h2>
                       <p class="count-text ">No. of Volumes</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter">
                      <i class="fa fa-code fa-2x"></i>
                      <h2 class="timer count-title count-number" data-to="3717" data-speed="1500"></h2>
                      <p class="count-text ">No. of Titles</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter">
                      <i class="fa fa-book fa-2x"></i>
                      <h2 class="timer count-title count-number" data-to="4000" data-speed="1500"></h2>
                      <p class="count-text ">No. of Reference Books</p>
                    </div>
                </div>
            </div>     
         </div>
        
        <br><br>
         <div class="col-md-12">
        <h2  class="text-center">Journals & Magazines </h2>
        <br>
        <table style="width:100%">
            <tr style="color:#000000;" class="table-primary">
                <td>1</td>
                <td>Indian journals</td>
                <td>75</td>
            </tr>
            <tr style="color:#000000;" class="table-secondary">
                <td>2</td>
                <td>International journals</td>
                <td>43</td>
            </tr>
           <tr style="color:#000000;" class="table-success">
                <td>3</td>
                <td>Magazines</td>
                <td>5</td>
            </tr>
            <tr style="color:#000000;" class="table-danger">
                <td>4</td>
                <td>E-journals</td>
                <td>uploaded</td></td>
            </tr>
            <tr style="color:#000000;" class="table-warning">
                <td>5</td>
                <td>News papers</td>
                <td>8</td>
            </tr>
            <tr style="color:#000000;" class="table-info">
                <td>6</td>
                <td>CD/DVDs</td>
                <td>3500</td>
            </tr>
            <tr style="color:#000000;" class="table-light">
                <td>7</td>
                <td>Project Reports</td>
                <td>1800</td>
            </tr>
            <tr style="color:#000000;" class="table-dark">
                <td>8</td>
                <td>Back Volumes</td>
                <td>820</td>
            </tr>
        </table>
        </div>
         <br>
        <div class="col-md-12">
            <h2 class="text-center">Membership </h2><br>
            <p style="color:#000000">Membership of the library is open to all the students, faculty and the non-teaching staff of the Institute. Membership is also extended to the members of management and administration. The faculties are eligible for borrowing up to 5 books at a time. The non-teaching faculty are eligible for borrowing up to 3 books at a time. The students of U.G. and P.G. are eligible for borrowing upto three books for 15days. </p>
        </div>
        <div class="col-md-12">
            <h2  class="text-center">SC & ST Book Bank Scheme </h2>
            <p  style="color:#000000">All the SC & ST students can use this Book Bank Scheme. In every semester under this scheme, students can borrow 6 books each and they have to return after completion of semester. </p>
        </div>
        <div class="col-md-12">
            <h2 class="text-center">Digital Library </h2>
            <ul>
                <li  style="color:#000000">
                    Digital Library Server is connected to all systems to which Internet connection is provided to cater the needs of the research and regular studies. 
                </li>
                <li  style="color:#000000">
                    20 Mbps connection to access the journals and e-books 
                </li>
            </ul>
        </div>
        
        <!-- <div class="col-md-12">
            <h2 align="center">Links of International e-Journals</h2><hr></div>
            <div class="col-md-12">
                <div class="col-md-4"><a href="https://jgateplus.com/home"><img src="images/trinity/j gate.jpg" class="img-responsive" style="height:130px"></a></div>
                <div class="col-md-4"><a href="https://ieeexplore.ieee.org/Xplore/home.jsp " ><img src="images/trinity/IEEE.jpg" class="img-responsive" style="height:130px"></a> </div>
                <div class="col-md-4"><a href="http://164.100.247.30/"><img src="images/trinity/delnet.jpg"class="img-responsive" style="height:75px"></a></div>
            </div>
        </div> -->
        
        
        </div>
    </div>
</div>

<script>
    (function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
</script>
<?php include 'footer.php';?>