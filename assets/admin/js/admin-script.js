(function ($) {
  $(document).ready(function () {
    $(".tab").click(function () {
      // Remove active class from all tabs
      $(".tab").removeClass("active");
      // Add active class to the clicked tab
      $(this).addClass("active");

      // Hide all tab content
      $(".tab-content").hide();
      // Show the content of the clicked tab
      const tabId = $(this).data("tab");
      $("#" + tabId).fadeIn();
    });
  });
})(jQuery);
