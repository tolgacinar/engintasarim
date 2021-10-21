$(window).on("load", () => {
  $("body").removeClass("preload");
});

$(".select-management-area-box").click(function () {
  $(".select-management-area").fadeOut();
});

$(document).ready(function () {
  var table = $("#example").DataTable({
    searching: true,
    lengthChange: false,
    info: false,
    paging: false,
    order: false,
  });

  $(".table-list-header-input input").keyup(function () {
    table.search($(this).val()).draw();
  });
});

// Auto resize textarea
jQuery.each(jQuery("textarea[data-autoresize]"), function () {
  var offset = this.offsetHeight - this.clientHeight;

  var resizeTextarea = function (el) {
    jQuery(el)
      .css("height", "70px")
      .css("height", el.scrollHeight + offset);
  };
  jQuery(this)
    .on("keyup input", function () {
      resizeTextarea(this);
    })
    .removeAttr("data-autoresize");
});

// Alert 1

// Swal.fire({
//   html: `<div class="notify">
//     <div class="notify-box flex items-start">
//       <div class="notify-icon">
//         <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
//           <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
//           <polyline points="22 4 12 14.01 9 11.01"></polyline>
//         </svg>
//       </div>
//       <div class="notify-content">
//         <span class="block">İşleminiz başarıyla tamamlandı!</span>
//         <p>Bağlantısı olan herkes artık bu dosyayı görüntüleyebilir.</p>
//       </div>
//       <div class="notify-close">
//         <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
//           <line x1="18" y1="6" x2="6" y2="18"></line>
//           <line x1="6" y1="6" x2="18" y2="18"></line>
//         </svg>
//       </div>
//     </div>
//   </div>`,
//   position: "top-end",
//   showConfirmButton: false,
//   timer: 3000,
//   showClass: {
//     popup: 'animate__animated animate__fadeInRight'
//   },
//   hideClass: {
//     popup: 'animate__animated animate__fadeOutRight'
//   }
// });

// Swal.fire({
//   html: `
//     <div class="modal-box">
//       <div class="modal-content flex flex-col items-center text-center">
//         <div class="modal-content-icon flex items-center justify-center">
//           <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
//             <polyline points="20 6 9 17 4 12"></polyline>
//           </svg>
//         </div><span class="block">İşlem Tamamlandı!</span>
//         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin luctus, arcu ut tincidunt</p>
//       </div>
//       <div class="modal-buttons w-full bg-grey">
//         <div class="form-group">
//           <div class="form-element">
//             <button class="button-first w-full focus:outline-none close-modal">Kapat</button>
//           </div>
//         </div>
//       </div>
//     </div>`,
//   position: "center",
//   showConfirmButton: false,
//   showClass: {
//     popup: "animate__animated animate__fadeIn",
//   }
// });

// $(".close-modal").click(function () {
//   Swal.close();
// });

// daterange
$(function () {
  $('input[name="daterange"]').daterangepicker({
    opens: "left",
    minDate: moment().startOf("day"),
    locale: {
      format: "DD/MM/YYYY",
    },
  });
});

// Tabs
$(function () {
  var tabs = $("#tabs").tabs();
  tabs.find(".ui-tabs-nav").sortable({
    axis: "x",
    stop: function () {
      tabs.tabs("refresh");
    },
  });
});

// Select 2
$(document).ready(function () {
  $(".select2-area").select2({
    width: "100%",
  });
});

// Leftbar Nav Drop
$(".leftbar-nav-box ul li").click(function () {
  var display = $(this).children(".leftbar-nav-drop").is(":visible") ? 1 : 0;

  $(".leftbar-nav-box ul li").removeClass("active");
  $(".leftbar-nav-drop").slideUp();

  if (display) {
    $(this).removeClass("active");
    $(this).children(".leftbar-nav-drop").slideUp();
  } else {
    $(this).addClass("active");
    $(this).children(".leftbar-nav-drop").slideDown();
  }
});

// File input read
$("document").ready(function () {
  $(".imgload").change(function () {
    if (this.files && this.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $(".imgshow").attr("src", e.target.result);
      };
      reader.readAsDataURL(this.files[0]);
    }
  });
});
