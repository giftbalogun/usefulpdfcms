function openPDFDropdown(id) {
  if (!$("#" + id + " .dropdown-menu").hasClass("show")) {
    $("#" + id).dropdown("toggle");
  } else {
    $("#" + id + " .dropdown-menu").removeClass("show");
  }
}

function closePDFDropdown(id) {
  if (!$("#" + id + " .dropdown-menu").hasClass("show")) {} else {
    $("#" + id + " .dropdown-menu").removeClass("show");
  }
}
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
      $("#typedSigModal").css("color", b);
      $("#finalSignature > div").css("color", b);
    })
    .on("change", (color, source, instance) => {
      let a = pickr
        .getSelectedColor()
        .toHEXA()
        .toString();
      let b = pickr
        .getSelectedColor()
        .toRGBA()
        .toString();
      $("#typedSigModal").css("color", b);
      $("#finalSignature > div").css("color", b);
    });
}

function fileReceived(file) {
  let data = {
    file: file,
    _token: $('meta[name="csrf-token"]').attr("content"),
  };
  $.ajax({
    url: "/web_api/image_to_text",
    method: "POST",
    data: data,
    success: function(response) {
      if (response.status == "success") {
        toastr.success("Success", response.message);
        $("#editSignature").text(response.data);
        manageStage("edit");
        if (response.type == "text") {}
      } else {
        toastr.warning("Warning", response.message);
      }
    },
    error: function(response) {
      toastr.warning("Warning", "Error occured optimizing the file");
    },
  });
}

function manageStage(stage) {
  if (stage == "upload") {
    $(".stages").hide();
    $("#uploadStage").show();
  }
  if (stage == "optimize") {
    $(".stages").hide();
    $("#optimizeStage").show();
  }
  if (stage == "edit") {
    $(".stages").hide();
    $("#editStage").show();
  }
}
$("#upload-holder").dmUploader({
  url: '{{ url("") }}/imageUploader.php',
  dataType: "json",
  allowedTypes: "",
  /* extFilter: 'pdf;PDF', */
  onInit: function() {},
  onBeforeUpload: function(id) {
    manageStage("preloader");
    toastr.info("Info", "Starting the upload of #" + id);
    $("#progress").show();
  },
  onNewFile: function(id, file) {},
  onComplete: function() {
    // toastr.success('Success', 'All pending tranfers completed, proceed by clicking upload proof of payment');
  },
  onUploadProgress: function(id, percent) {
    var percentStr = percent + "%";
    $.danidemo.updateFileProgress(id, percentStr);
  },
  onUploadSuccess: function(id, data) {
    if (data["success"] == 0) {
      toastr.warning("Warning", data["error"]);
      return;
    }
    $.danidemo.addLog(
      "#demo-debug",
      "info",
      "Server Response for file #" + id + ": " + JSON.stringify(data)
    );
    toastr.success("Success", "Upload Complete");
    $.danidemo.updateFileProgress(id, "100%");
    var jvalue = JSON.stringify(data.filename);
    jvalue = jvalue.replace('"', "");
    jvalue = jvalue.replace('"', "");
    var thelink = "{{ url('uploads/image') }}";
    fileReceived(thelink + "/" + jvalue);
    manageStage("optimize");
  },
  onUploadError: function(id, message) {
    toastr.error("Error", message);
    manageStage("preview");
  },
  onFileTypeError: function(file) {
    toastr.error(
      "Error",
      "File '" + file.name + "' cannot be added: must be an image"
    );
  },
  onFileSizeError: function(file) {},
  onFallbackMode: function(message) {},
});
if ($(".upload-color-picker")[0]) {
  // Simple example, see optional options for more configuration.
  const pickr = Pickr.create({
    el: ".upload-color-picker",
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
      $("#editSignature").css("color", b);
    })
    .on("change", (color, source, instance) => {
      let a = pickr
        .getSelectedColor()
        .toHEXA()
        .toString();
      let b = pickr
        .getSelectedColor()
        .toRGBA()
        .toString();
      $("#editSignature").css("color", b);
    });
}