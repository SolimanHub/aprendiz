//setInterval("location.reload()",1000);
$(document).ready(()=>{

  $('#btnSelectMultiple').click(()=>{
    console.log($('select[name="selectMultiple"]').val());
    console.log($('#selectMultiple').val());
  });

  //$("button[data-id='selectMultiple']").change(function(){
  $("#elementosSelect").change(function(){
    //$('#elementosSelect').html($("button[data-id='selectMultiple']").attr('title'));
    console.log($("button[data-id='selectMultiple']").attr('title'));
  });
});
