$(document).ready(function () {
  function loadData() {
    $.ajax({
      url: "syncRecords.php",
      type: "POST",
      success: function (resp) {
        $("#recordSets").html(resp);
      },
    });
  }

  loadData();

  $("#save-data").on("click", function (e) {
    e.preventDefault();

    const fname = $("#f_name").val();
    const lname = $("#l_name").val();

    $.ajax({
      url: "ajax-insert.php",
      type: "POST",
      data: { first_name: fname, last_name: lname },

      success: function (res) {
        if (res == 1) {
          loadData();

          $("#f_name").val("");
          $("#l_name").val("");
        } else {
          alert("Unable to save record");
        }
      },
    });
  });

  $(document).on("click", ".delete-btn", function () {
    if (confirm("Do you really want to delete this record?")) {
      var rollNo = $(this).data("id");
      var element = this;

      $.ajax({
        url: "ajax-delete.php",
        type: "POST",
        data: { id: rollNo },

        success: function (res) {
          if (res == 1) {
            $(element)
              .closest("tr")
              .fadeOut(300, function () {
                $(this).remove();
              });
            // $(element).closest("tr").remove();
          } else {
            alert("Unable to delete record");
          }
        },
      });
    }
  });
});
