<!-- MDB ESSENTIAL -->
<!--<script type="text/javascript" src="./assets/js/mdb/mdb.es.min.js"></script>
-->

<script type="text/javascript" src="./assets/js/mdb/mdb.umd.min.js"></script>

<!-- MDB PLUGINS -->
<script type="text/javascript" src="./assets/plugins/js/all.min.js"></script>
<script type="text/javascript" src="./assets/plugins/js/file-upload.min.js"></script>

<script type="text/javascript" src="./assets/js/PrismJS/prism.js"></script>
<!--
<script type="text/javascript" src="./assets/js/ChartJS/chart.umd.min.js"></script>
-->
<script type="text/javascript" src="./assets/js/Jquery/jquery-3.7.1.min.js"></script>
<script src="https://unpkg.com/picmo@latest/dist/umd/index.js"></script>
<script src="https://cdn.tiny.cloud/1/oe0h8ms4kwzr37es7dpuq6dnrfkocat5z5v38kjf51p1khmt/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@2/dist/tinymce-jquery.min.js"></script>
<!-- Custom MDB scripts -->
<script type="text/javascript">
  import "mdb-ui-kit";

  const basicExample = document.querySelector('.multi-ranges-basic');
  const basicExampleInit = new mdb.MultiRangeSlider(basicExample);
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

<script>
  // Graph
  /*
var ctx = document.getElementById("myChart");

var myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ],
    datasets: [
      {
        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
        lineTension: 0,
        backgroundColor: "transparent",
        borderColor: "#007bff",
        borderWidth: 4,
        pointBackgroundColor: "#007bff",
      },
    ],
  },
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: false,
          },
        },
      ],
    },
    legend: {
      display: false,
    },
  },
});*/
</script>
<script>
  const searchFocus = document.getElementById('search-focus');
const keys = [
  { keyCode: 'AltLeft', isTriggered: false },
  { keyCode: 'ControlLeft', isTriggered: false },
];

window.addEventListener('keydown', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = true;
    }
  });

  const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;

  if (shortcutTriggered) {
    searchFocus.focus();
  }
});

window.addEventListener('keyup', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = false;
    }
  });
});
</script>



<script>
  /*
    $(document).ready(function() {
        var currentLocation = window.location.href;
        alert(currentLocation);
        $('.list-group-item-action').each(function() {
            var linkHref = $(this).attr('href');
            if(linkHref === currentLocation || linkHref.startsWith(currentLocation + '#')) {
                $(this).addClass('active');
            }
        });
    });*/
    $(document).ready(function() {
  // 1. Get the current URL pathname (without hash)
  var currentLocation = window.location.pathname.split('/')[1];
  //alert(currentLocation);

  // 2. Remove the leading slash (if present)
  currentLocation = currentLocation.replace(/^\//, "",);

  // 3. Find links that match the current location
  var activeLink = $('.list-group-item-action').filter(function() {
    var href = $(this).attr('href').split('#')[0]; // Extract href without hash
    var href2 = $(this).attr('href').split('./')[1]; // Extract href without hash
    if(href == "" || href == currentLocation){
      return href === "" || href === currentLocation;
      console.log("href 1",href);
    }else
    if(href2 == "" || href2 == currentLocation){
      return href2 === "" || href2 === currentLocation;
      console.log("href 2",href2);

    }
  });

  // 4. Add the "active" class to the matching link(s)
  activeLink.addClass('active');
  activeLink.removeClass('text-secondary');
});

</script>
<script>
  function displaySelectedImage(event, elementId) {
    const selectedImage = document.getElementById(elementId);
    const fileInput = event.target;

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            selectedImage.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}
</script>
<script>
  tinymce.init({
    selector: 'input#exampleFormControlInput2',
    plugins: "emoticons",
    toolbar: "emoticons",
    toolbar_location: "bottom",
    menubar: false,
    toolbar_sticky: true,
    height: 130,
    width: 750
    /*
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
*/
  });
  // Prevent Bootstrap dialog from blocking focusin
document.addEventListener('focusin', (e) => {
  if (e.target.closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root") !== null) {
    e.stopImmediatePropagation();
  }
});
</script>
<script>
    // County State

    $('#SelectCountry').on('change', function() {
        var country_id = this.value;
         //console.log(country_id);
        $.ajax({
            url: './assets/ajax/state.php',
            type: "POST",
            data: {
                country_data: country_id
            },
            success: function(result) {
                $('#SelectCity').html(result);
                 //console.log(result);
            }
        })
    });
    // state city
    $('#SelectState').on('change', function() {
        var state_id = this.value;
         console.log(country_id);
        $.ajax({
            url: './assets/ajax/city.php',
            type: "POST",
            data: {
                state_data: state_id
            },
            success: function(data) {
                $('#city').html(data);
                // console.log(data);
            }
        })
    });
</script>
