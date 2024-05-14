<!-- MDB ESSENTIAL -->
<!---->

<script type="text/javascript" src="./assets/js/mdb/mdb.umd.min.js"></script>
<script type="text/javascript" src="./assets/js/mdb/mdb.es.min.js"></script>

<!-- MDB PLUGINS -->
<script type="text/javascript" src="./assets/plugins/js/all.min.js"></script>

<script type="text/javascript" src="./assets/js/PrismJS/prism.js"></script>

<!-- Custom MDB scripts -->
<script type="text/javascript">
    // Initialization for ES Users
    import { Input, initMDB } from "mdb-ui-kit";

    initMDB({ Input });
    // Initialization for ES Users
    import { Input, Ripple, initMDB } from "mdb-ui-kit";

    initMDB({ Input, Ripple });

    import { Collapse, initMDB } from 'mdb-ui-kit';

    initMDB({ Collapse });

    // Initialization for ES Users
    import { Select, initMDB } from 'mdb-ui-kit';

    initMDB({ Select });

    // Initialization for ES Users
    import { Modal, Ripple, Select, initMDB } from 'mdb-ui-kit';

    initMDB({ Modal, Ripple, Select });

    import { Stepper, initMDB } from 'mdb-ui-kit';
          
    initMDB({ Stepper });
      
    // Initialization for ES Users
    import { MultiRangeSlider, initMDB } from 'mdb-ui-kit';
    
    initMDB({ MultiRangeSlider });
    
    const basicExample = document.querySelector('.multi-ranges-basic');
    const basicExampleInit = new MultiRangeSlider(basicExample);
/*
    const tooltips = document.querySelector('#multi-ranges-tooltips');
    const initTooltips = new mdb.MultiRangeSlider(tooltips, { tooltips: true, startValues: [0, 1000] });*/

/*
    const basicExample = document.querySelector('multi-ranges-basic');
    const oneRangeValueBasic = document.querySelector('multi-ranges-basic-value');

    basicExample.addEventListener('valueChanged.mdb.multiRangeSlider', (e) => {
      const [first, second] = e.values.rounded;
      oneRangeValueBasic.innerHTML = `
        Value: 
        <div class='d-flex flex-column'>
          <div>First: ${first}</div>
          <div>Second  ${second}</div>
        </div>
      `;
    });  */

    import { SmoothScroll, initMDB } from "mdb-ui-kit";
    
    initMDB({ SmoothScroll });
      
</script>

<!-- Custom scripts -->
<script type="text/javascript">
  /*
    const element = document.getElementById("animationDemo");
    const animate = new mdb.Animate(element, {
    animation: "pulse",
    animationStart: "onClick",
    animationDelay: "0",
    animationDuration: "500",
    animationReverse: "false",
    animationRepeat: "true",
    animationInterval: "0",
    });
    animate.init();

    
  //document.getElementById('user-type').onclick = changeColor;   
//style="background-color: #3e84a8; color: white;"
  function changeColor() {
      document.body.style.color = "white";
      return false;
  }   
  /*
  window.onload = function() {
  changeColor1();
};
*/
  function changeColor1() {
    document.getElementById('user-type1-label').style.color = "white";
    document.getElementById('user-type1-label').style.backgroundColor = "#3e84a8";
    //document.getElementById('icon-1').style.color = "white";
    document.getElementById('icon-1').src= './assets/img/user1.png';

    document.getElementById('user-type2-label').style.color = "black";
    document.getElementById('user-type2-label').style.backgroundColor = "white";
    //document.getElementById('icon-2').style.color = "#3e84a8";
    //document.getElementById('icon-2').style.fill = "#3e84a8";
    //document.getElementById('icon-2').attr('src',"./assets/img/user2-blue.png");
    document.getElementById('icon-2').src= './assets/img/user2-blue.png';


  }  
  function changeColor2() {
    document.getElementById('user-type1-label').style.color = "black";
    document.getElementById('user-type1-label').style.backgroundColor = "white";
    //document.getElementById('icon-1').style.color = "#3e84a8";
    //document.getElementById('icon-1').style.fill = "red";
    document.getElementById('icon-1').src= './assets/img/user1-blue.png';

    document.getElementById('user-type2-label').style.color = "white";
    document.getElementById('user-type2-label').style.backgroundColor = "#3e84a8";
    //document.getElementById('icon-2').style.color = "white";
    document.getElementById('icon-2').src= './assets/img/user2.png';

  }  

</script>

<script>  /*
  const element = document.querySelector('.stepper');
  const stepper = new Stepper(element);

  const myStepperEl  = new mdb.Stepper(document.getElementById('stepper'));
  const stepper = new mdb.Stepper(myStepperEl);
  stepper.nextStep();*/
</script>
<script type="text/javascript">
  /*
// Example usage:
setStepperDirection(true); // Set to RTL
// setStepperDirection(false); // Set back to LTR (if needed)
function setStepperDirection(isRTL) {
  const stepperElement = document.querySelector('.stepper'); // Adjust selector as needed
  if (isRTL) {
    stepperElement.classList.add('stepper-rtl');
  } else {
    stepperElement.classList.remove('stepper-rtl');
  }
}
*/

</script>
<script>
  /*
  document.addEventListener("DOMContentLoaded", function () {
  const stepper = document.querySelector('.stepper');

  // Handle navigation clicks (optional, if using manual navigation)
  stepper.querySelectorAll('.stepper-head-icon').forEach(link => {
    link.addEventListener('click', function (event) {
      event.preventDefault();

      // Update active state based on clicked link
      const clickedStep = link.parentElement;
      const activeStep = stepper.querySelector('.stepper-active');
      activeStep.classList.remove('active');
      clickedStep.classList.add('active');

      // (Optional) Update content visibility (if not using MDBootstrap's built-in behavior)
      const steps = stepper.querySelectorAll('.step-content');
      steps.forEach(step => step.classList.remove('active'));
      const activeContentIndex = Array.from(clickedStep.parentElement.children).indexOf(clickedStep);
      steps[activeContentIndex].classList.add('active');
    });
  });

  // Initialize MDBootstrap stepper (optional, if using built-in behavior)
  const mdbStepper = new MDBStepper(stepper);
});
*/
</script>
<script type="text/javascript">
  const stepper = new mdb.Stepper(document.getElementById('stepper-buttons'));

  document.getElementById('first-next-step').addEventListener('click', () => {
    stepper.nextStep();
  });
  document.getElementById('first-prev-step').addEventListener('click', () => {
    stepper.prevStep();
  });
  document.getElementById('prev-step').addEventListener('click', () => {
    stepper.prevStep();
  });

  document.getElementById('next-step').addEventListener('click', () => {
    stepper.nextStep();
  });

  /* for step 1 + 2 + 3 buttons 
  document.getElementById('step-1').addEventListener('click', () => {
    stepper.changeStep(0);
  });

  document.getElementById('step-2').addEventListener('click', () => {
    stepper.changeStep(1);
  });

  document.getElementById('step-3').addEventListener('click', () => {
    stepper.changeStep(2);
  });
*/
  document
    .querySelector('.stepper')
    .addEventListener('stepValid.mdb.stepper', (e) => {
      console.log('stepValid', e);
    });

  document
    .querySelector('#linear-stepper .stepper #custom-validation')
    .addEventListener('stepInvalid.mdb.stepper', (e) => {
      console.log('stepInvalid', e);
    });

  document
    .querySelector('#linear-stepper .stepper #custom-validation')
    .addEventListener('stepChange.mdb.stepper', (e) => {
      console.log('stepChange', e);
    });

  document
    .querySelector('#linear-stepper .stepper #custom-validation')
    .addEventListener('stepChanged.mdb.stepper', (e) => {
      console.log('stepChanged', e);
    });
  document
    .querySelector('#custom-validation .stepper .stepper-step')
    .addEventListener('stepChange.mdb.stepper', (e) => {
      //e.target.querySelector('input').setCustomValidity('');

      
      const input = e.target.querySelector('.stepper-content input[type="password"]');
      const inputLenght = input.value.length;

      if (inputLenght < 5) {
        e.target.querySelector('input').setCustomValidity('Invalid');
        e.preventDefault();
      } else {
        e.target.querySelector('input').setCustomValidity('');
      }
    });

  // Stepper with gesture support

  const stepperSwipe = document.querySelector('#stepper-swipe-example')

  const stepperSwipeInstance = mdb.Stepper.getOrCreateInstance(stepperSwipe);
  const touchSwipeLeftRight = new mdb.Touch(stepperSwipe, 'swipe', {
    threshold: 100
  });

  touchSwipeLeftRight.init();

  stepperSwipe.addEventListener('swipeleft', () => {
    stepperSwipeInstance.nextStep();
  });
  stepperSwipe.addEventListener('swiperight', () => {
    stepperSwipeInstance.prevStep();
  });

  // Form wizard
  /*
  const stepperForm = new mdb.Stepper(document.getElementById('stepper-form-example'));

  document.getElementById('form-example-next-step').addEventListener('click', () => {
    stepperForm.nextStep();
  });

  document.getElementById('form-example-prev-step').addEventListener('click', () => {
    stepperForm.prevStep();
  });*/
</script>

<script>
  function checkRequired() {
    if ($('input[type=checkbox]:checked').length > 0) {  // the "> 0" part is unnecessary, actually
        $('input[type=checkbox]').prop('required', false);
    } else {
        $('input[type=checkbox]').prop('required', true);
    }

}
</script>
<script>
  /*
  const
  range = document.getElementById('range'),
  rangeV = document.getElementById('rangeV'),
  setValue = ()=>{
    const
      newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
      newPosition = 10 - (newValue * 0.2);
    rangeV.innerHTML = `<span>${range.value}</span>`;
    rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
  };
document.addEventListener("DOMContentLoaded", setValue);
range.addEventListener('input', setValue);*/
</script>

<script>
  /*
  document.addEventListener("DOMContentLoaded", function () {
  const slider = document.getElementById('myRange');

  // Initialize the multi-range slider
  new mdb.Range(slider, {
    tooltips: true // Enable tooltips
  });
});
*/
</script>