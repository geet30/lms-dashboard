(()=>{"use strict";var e,t,i,a={init:function(){e=document.querySelector("#kt_sign_in_form"),t=document.querySelector("#kt_sign_in_submit"),i=FormValidation.formValidation(e,{fields:{email:{validators:{notEmpty:{message:"Email address is required"},emailAddress:{message:"The value is not a valid email address"}}},password:{validators:{notEmpty:{message:"The password is required"},callback:{message:"Please enter valid password"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}}),t.addEventListener("click",(function(e){e.preventDefault(),i.validate().then((function(e){"Valid"===e?(t.setAttribute("data-kt-indicator","on"),t.disabled=!0,t.closest("form").submit()):Swal.fire({text:"Sorry, looks like there are some errors detected, please try again.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{confirmButton:"btn btn-primary"}})}))}))}};KTUtil.onDOMContentLoaded((function(){a.init()}))})();