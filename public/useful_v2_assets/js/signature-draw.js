// function toggleFaq(className) {
//   let toggleButton = $("." + className);
//   if (toggleButton.hasClass("faq-card-open") == true) {
//     toggleButton.removeClass("faq-card-open");
//     toggleButton.addClass("faq-card-closed");
//   } else {
//     toggleButton.removeClass("faq-card-closed");
//     toggleButton.addClass("faq-card-open");
//   }
// }
// function openPDFDropdown(id) {
//   if (!$("#" + id + " .dropdown-menu").hasClass("show")) {
//     $("#" + id).dropdown("toggle");
//   } else {
//     $("#" + id + " .dropdown-menu").removeClass("show");
//   }
// }
// function closePDFDropdown(id) {
//   if (!$("#" + id + " .dropdown-menu").hasClass("show")) {
//   } else {
//     $("#" + id + " .dropdown-menu").removeClass("show");
//   }
// }
// if ($(".color-picker")[0]) {
//   console.log("Color picker found");
//   // Simple example, see optional options for more configuration.
//   const pickr = Pickr.create({
//     el: ".color-picker",
//     theme: "classic", // or 'monolith', or 'nano'
//     swatches: [
//       "rgba(244, 67, 54, 1)",
//       "rgba(233, 30, 99, 0.95)",
//       "rgba(156, 39, 176, 0.9)",
//       "rgba(103, 58, 183, 0.85)",
//       "rgba(63, 81, 181, 0.8)",
//       "rgba(33, 150, 243, 0.75)",
//       "rgba(3, 169, 244, 0.7)",
//       "rgba(0, 188, 212, 0.7)",
//       "rgba(0, 150, 136, 0.75)",
//       "rgba(76, 175, 80, 0.8)",
//       "rgba(139, 195, 74, 0.85)",
//       "rgba(205, 220, 57, 0.9)",
//       "rgba(255, 235, 59, 0.95)",
//       "rgba(255, 193, 7, 1)",
//     ],
//     components: {
//       // Main components
//       preview: true,
//       opacity: true,
//       hue: true,
//       // Input / output Options
//       interaction: {
//         hex: true,
//         rgba: true,
//         hsla: true,
//         hsva: true,
//         cmyk: true,
//         input: true,
//         clear: true,
//         save: true,
//       },
//     },
//   });
//   pickr
//     .on("init", (instance) => {
//       console.log('Event: "init"', instance);
//     })
//     .on("save", (color, instance) => {
//       let a = pickr
//         .getSelectedColor()
//         .toHEXA()
//         .toString();
//       let b = pickr
//         .getSelectedColor()
//         .toRGBA()
//         .toString();
//       $("#typedSigModal").css("color", b);
//       $("#finalSignature > div").css("color", b);
//     })
//     .on("change", (color, source, instance) => {
//       let a = pickr
//         .getSelectedColor()
//         .toHEXA()
//         .toString();
//       let b = pickr
//         .getSelectedColor()
//         .toRGBA()
//         .toString();
//       $("#typedSigModal").css("color", b);
//       $("#finalSignature > div").css("color", b);
//     });
// }
// function fileReceived(file) {
//   console.log("File Received", file);
//   let data = {
//     file: file,
//     _token: $('meta[name="csrf-token"]').attr("content"),
//   };
//   $.ajax({
//     url: "/web_api/image_to_text",
//     method: "POST",
//     data: data,
//     success: function(response) {
//       if (response.status == "success") {
//         toastr.success("Success", response.message);
//         $("#editSignature").text(response.data);
//         manageStage("edit");
//         if (response.type == "text") {
//         }
//       } else {
//         toastr.warning("Warning", response.message);
//       }
//     },
//     error: function(response) {
//       toastr.warning("Warning", "Error occured optimizing the file");
//     },
//   });
// }
// function manageStage(stage) {
//   console.log("manageStage", stage);
//   if (stage == "upload") {
//     $(".stages").hide();
//     $("#uploadStage").show();
//   }
//   if (stage == "optimize") {
//     $(".stages").hide();
//     $("#optimizeStage").show();
//   }
//   if (stage == "edit") {
//     $(".stages").hide();
//     $("#editStage").show();
//   }
// }
// $("#upload-holder").dmUploader({
//   url: '{{ url("") }}/imageUploader.php',
//   dataType: "json",
//   allowedTypes: "",
//   /* extFilter: 'pdf;PDF', */
//   onInit: function() {
//     console.log("Image Plugin initialized correctly");
//   },
//   onBeforeUpload: function(id) {
//     manageStage("preloader");
//     toastr.info("Info", "Starting the upload of #" + id);
//     $("#progress").show();
//     console.log("Uploading...");
//   },
//   onNewFile: function(id, file) {
//     console.log(file);
//   },
//   onComplete: function() {
//     // toastr.success('Success', 'All pending tranfers completed, proceed by clicking upload proof of payment');
//   },
//   onUploadProgress: function(id, percent) {
//     var percentStr = percent + "%";
//     $.danidemo.updateFileProgress(id, percentStr);
//   },
//   onUploadSuccess: function(id, data) {
//     if (data["success"] == 0) {
//       toastr.warning("Warning", data["error"]);
//       return;
//     }
//     console.log("Upload of file #" + id + " completed");
//     $.danidemo.addLog(
//       "#demo-debug",
//       "info",
//       "Server Response for file #" + id + ": " + JSON.stringify(data)
//     );
//     toastr.success("Success", "Upload Complete");
//     $.danidemo.updateFileProgress(id, "100%");
//     var jvalue = JSON.stringify(data.filename);
//     jvalue = jvalue.replace('"', "");
//     jvalue = jvalue.replace('"', "");
//     var thelink = "{{ url('uploads/image') }}";
//     fileReceived(thelink + "/" + jvalue);
//     manageStage("optimize");
//   },
//   onUploadError: function(id, message) {
//     toastr.error("Error", message);
//     console.log("Failed to Upload file #" + id + ": " + message);
//     manageStage("preview");
//   },
//   onFileTypeError: function(file) {
//     toastr.error(
//       "Error",
//       "File '" + file.name + "' cannot be added: must be an image"
//     );
//   },
//   onFileSizeError: function(file) {
//     console.log("File '" + file.name + "' cannot be added: size excess limit");
//   },
//   onFallbackMode: function(message) {
//     console.log("Browser not supported(do something else here!): " + message);
//   },
// });
// if ($(".upload-color-picker")[0]) {
//   console.log("Upload Color picker found");
//   // Simple example, see optional options for more configuration.
//   const pickr = Pickr.create({
//     el: ".upload-color-picker",
//     theme: "classic", // or 'monolith', or 'nano'
//     swatches: [
//       "rgba(244, 67, 54, 1)",
//       "rgba(233, 30, 99, 0.95)",
//       "rgba(156, 39, 176, 0.9)",
//       "rgba(103, 58, 183, 0.85)",
//       "rgba(63, 81, 181, 0.8)",
//       "rgba(33, 150, 243, 0.75)",
//       "rgba(3, 169, 244, 0.7)",
//       "rgba(0, 188, 212, 0.7)",
//       "rgba(0, 150, 136, 0.75)",
//       "rgba(76, 175, 80, 0.8)",
//       "rgba(139, 195, 74, 0.85)",
//       "rgba(205, 220, 57, 0.9)",
//       "rgba(255, 235, 59, 0.95)",
//       "rgba(255, 193, 7, 1)",
//     ],
//     components: {
//       // Main components
//       preview: true,
//       opacity: true,
//       hue: true,
//       // Input / output Options
//       interaction: {
//         hex: true,
//         rgba: true,
//         hsla: true,
//         hsva: true,
//         cmyk: true,
//         input: true,
//         clear: true,
//         save: true,
//       },
//     },
//   });
//   pickr
//     .on("init", (instance) => {
//       console.log('Event: "init"', instance);
//     })
//     .on("save", (color, instance) => {
//       let a = pickr
//         .getSelectedColor()
//         .toHEXA()
//         .toString();
//       let b = pickr
//         .getSelectedColor()
//         .toRGBA()
//         .toString();
//       $("#editSignature").css("color", b);
//     })
//     .on("change", (color, source, instance) => {
//       let a = pickr
//         .getSelectedColor()
//         .toHEXA()
//         .toString();
//       let b = pickr
//         .getSelectedColor()
//         .toRGBA()
//         .toString();
//       $("#editSignature").css("color", b);
//     });
// }
// #TODO BREAK HERE
var canvas = document.getElementById("signature-pad");
// Adjust canvas coordinate space taking into account pixel ratio,
// to make it look crisp on mobile devices.
// This also causes canvas to be cleared.
function resizeCanvas() {
  // When zoomed out to less than 100%, for some very strange reason,
  // some browsers report devicePixelRatio as less than 1
  // and only part of the canvas is cleared then.
  var ratio = Math.max(window.devicePixelRatio || 1, 1);
  canvas.width = canvas.offsetWidth * ratio;
  canvas.height = canvas.offsetHeight * ratio;
  canvas.getContext("2d").scale(ratio, ratio);
}
window.onresize = resizeCanvas;
resizeCanvas();
var signaturePad = new SignaturePad(canvas, {
  backgroundColor: null,
});
document.getElementById("save-png").addEventListener("click", function() {
  if (signaturePad.isEmpty()) {
    return alert("Please provide a signature first.");
  } else {
    var data = signaturePad.toDataURL("image/png");
    $("#signature_image").text(data);
    let a = document.createElement('a');
    document.body.appendChild(a);
    a.href = data
    a.download = 'signature.png';
    $('.mk-modal').modal('show')
    setTimeout(function() {
      a.click();
    }, 3000);
  }
});
document.getElementById("clear").addEventListener("click", function() {
  signaturePad.clear();
  $("#signature_image").text("");
});
document.getElementById("erase").addEventListener("click", function() {
  let a = $(this).data("erase");
  if (a == "true") {
    // disable the erase
    $(this).data("erase", "false");
    $("#eraseHolder").text("Erase");
    var ctx = canvas.getContext("2d");
    ctx.globalCompositeOperation = "source-over"; // default value
  } else {
    // enable erase
    $(this).data("erase", "true");
    $("#eraseHolder").text("Draw");
    var ctx = canvas.getContext("2d");
    ctx.globalCompositeOperation = "destination-out";
    $("#signature_image").text("");
  }
});
if ($(".color-picker")[0]) {
  // Simple example, see optional options for more configuration.
  const pickr = Pickr.create({
    el: ".color-picker",
    theme: "classic", // or 'monolith', or 'nano'
    swatches: [
      "rgba(244, 67, 54, 1)",
      "rgba(233, 30, 99, 0.95)",
      "rgba(156, 39, 176, 0.9)",
      "rgba(103, 58, 183, 0.85)",
      "rgba(63, 81, 181, 0.8)",
      "rgba(33, 150, 243, 0.75)",
      "rgba(3, 169, 244, 0.7)",
      "rgba(0, 188, 212, 0.7)",
      "rgba(0, 150, 136, 0.75)",
      "rgba(76, 175, 80, 0.8)",
      "rgba(139, 195, 74, 0.85)",
      "rgba(205, 220, 57, 0.9)",
      "rgba(255, 235, 59, 0.95)",
      "rgba(255, 193, 7, 1)",
    ],
    components: {
      // Main components
      preview: true,
      opacity: true,
      hue: true,
      // Input / output Options
      interaction: {
        hex: true,
        rgba: true,
        hsla: true,
        hsva: true,
        cmyk: true,
        input: true,
        clear: true,
        save: true,
      },
    },
  });
  pickr
    .on("init", (instance) => {})
    .on("save", (color, instance) => {
      let a = pickr
        .getSelectedColor()
        .toHEXA()
        .toString();
      let b = pickr
        .getSelectedColor()
        .toRGBA()
        .toString();
      signaturePad.penColor = b;
    })
    .on("change", (color, source, instance) => {
      let a = pickrpickr
        .getSelectedColor()
        .toHEXA()
        .toString();
      let b = pickr
        .getSelectedColor()
        .toRGBA()
        .toString();
      signaturePad.penColor = b;
    });
}