$(document).ready(function() {
  let addstatus = false;
  $("#proftable").DataTable();
  $(".addformbtn").on("click", function() {
    if (addstatus) {
      $(this).html('<i class="fas fa-plus"></i>  Tambah penjemputan');
      addstatus = false;
    } else {
      $(this).html('<i class="fas fa-minus"></i>  Tambah penjemputan');
      addstatus = true;
    }

    $(".addform").slideToggle();
  });
});
