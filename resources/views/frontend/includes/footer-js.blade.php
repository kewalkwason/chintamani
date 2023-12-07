<button type="button" class="scrollup"><i class="fa fa-arrow-up"></i></button>
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/isotope.pkgd.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/mo.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/cssplugin.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.ripples.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/theme.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
<script type="text/javascript">
  $('.tab-menu li a').on('click', function() {
    var target = $(this).attr('data-rel');
    $('.tab-menu li a').removeClass('active');
    $(this).addClass('active');
    $("#" + target).fadeIn('slow').siblings(".tab-box").hide();
    return false;
  });
</script>

<script type="text/javascript">

</script>


<script type="text/javascript">
  function reset() {
    document.getElementById("value1").value = 0;
    document.getElementById("value2").value = 0;
    document.getElementById("value3").value = 0;

    document.getElementById("monthly-interest").innerHTML = " $ " + 0;
    document.getElementById("monthly-payment").innerHTML = " $ " + 0;
    document.getElementById("total-repayment").innerHTML = " $ " + 0;
    document.getElementById("total-interest").innerHTML = " $ " + 0;
  }

  function calculation() {

    var loanAmount = document.getElementById("value1").value;
    var interestRate = document.getElementById("value2").value;
    var loanDuration = document.getElementById("value3").value;

    //.......... declarations.............

    var interestPerYear = (loanAmount * interestRate) / 100;
    var monthlyInterest = interestPerYear / 12;


    var monthlyPayment = monthlyInterest + (loanAmount / loanDuration);
    var totalInterestCost = monthlyInterest * loanDuration;
    var totalRepayment = monthlyPayment * loanDuration;

    //----------------monthly interest----------------------

    document.getElementById("monthly-interest").innerHTML = " $ " + monthlyInterest.toFixed(2);

    //-------------Monthly payment------------

    document.getElementById("monthly-payment").innerHTML = " $ " + monthlyPayment.toFixed(2);

    //-------------Total repayment-----------

    document.getElementById("total-repayment").innerHTML = " $ " + totalRepayment.toFixed(2);

    //--------------Total Interest cost----------------

    document.getElementById("total-interest").innerHTML = " $ " + totalInterestCost.toFixed(2);

  }
</script>




<script type="text/javascript">
  var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };

  TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) {
      delta /= 2;
    }

    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }

    setTimeout(function() {
      that.tick();
    }, delta);
  };

  window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-type');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtType(elements[i], JSON.parse(toRotate), period);
      }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
  };
</script>

<style type="text/css">
  #feedback {
    height: 0px;
    width: 85px;
    position: fixed;
    right: 0;
    top: 50%;
    z-index: 1000;
    transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
  }

  #feedback a:hover {
    background: #00495d;
  }



  #feedback2 {
    /*      height: 0px;
    width: 85px;
    position: fixed;
    left: -7px;
    top: 59%;
    z-index: 1000;
    transform: rotate(89deg);
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);*/

    height: 0px;
    width: 104px;
    position: fixed;
    left: 6px;
    top: 76%;
    z-index: 1000;
  }

  #feedback2 a:hover {
    background: #00495d;
  }
</style>

<!-- <div id="feedback">
<a href="#popup1"><img class="apply__cssfix" src="images/applynow.png"></a>
</div>

<div id="feedback2">
<a href="#popup1"><img class="apply__cssfixenw" src="images/logo/Enquire-Now-Button.png"></a>
</div> -->