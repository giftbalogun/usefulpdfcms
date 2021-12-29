function toggleFaq(className) {
  let toggleButton = $("." + className);
  if (toggleButton.hasClass("faq-card-open") == true) {
    toggleButton.removeClass("faq-card-open");
    toggleButton.addClass("faq-card-closed");
  } else {
    toggleButton.removeClass("faq-card-closed");
    toggleButton.addClass("faq-card-open");
  }
}
