$(document).ready( function () {
  $('.edit_modal_button').click(function(){

      var button = $(this);
      var category = button.data('name');
      var cat_id = button.data('id');
      var modal = $('#myModal2');
      modal.find('.modal-body input').val(category);
      modal.find('#cat_id').val(cat_id);
  })
});
