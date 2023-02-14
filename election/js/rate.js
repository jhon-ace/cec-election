
$(document).ready(function(){
 
 load_business_data();
 
 function load_business_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#business_list').html(data);
   }
  });
 }
 
 $(document).on('mouseenter', '.rating', function(){
  var index = $(this).data("index");
  var id = $(this).data('id');
  remove_background(id);
  for(var count = 1; count<=index; count++)
  {
   $('#'+id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 function remove_background(id)
 {
  for(var count = 1; count <= 5; count++)
  {
   $('#'+id+'-'+count).css('color', '#ccc');
  }
 }
 
 $(document).on('mouseleave', '.rating', function(){
  var index = $(this).data("index");
  var id = $(this).data('id');
  var rating = $(this).data("rating");
  remove_background(id);
  //alert(rating);
  for(var count = 1; count<=rating; count++)
  {
   $('#'+id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 $(document).on('click', '.rating', function(){
  var index = $(this).data("index");
  var id = $(this).data('id');
  $.ajax({
   url:"insert_rating.php",
   method:"POST",
   data:{index:index, id:id},
   success:function(data)
   {
    if(data == 'done')
    {
     load_business_data();
     alert("You have rate "+index +" out of 5");
    }
    else
    {
     alert("You have rate "+index +" out of 5");
    }
   }
  });
  
 });

});
