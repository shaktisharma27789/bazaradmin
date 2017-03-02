
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]>  <html> <![endif]-->
<!--[if !IE]><!--> 
<html>             <!--<![endif]-->

<!-- BEGIN BODY -->

    <head>
       <script>
       
  
   $( document ).ready(function() {
       $('select').select2();
    });

      function loadCity(){
       var state=$("#state").select2().val();
       var myArr=["one","two","three"];
       $.post('<?php echo base_url();?>Region/loadCity', {state:state}, function (data){
     // alert(data);

     var obj=data;
     for(var i=0;i<City.length;i++)
{
    var option=$('<option></option>').text(obj.Cars[i]['CarType']);
  $('select').append(option);

}

           var dataJson = JSON.parse(data);

           var arr = [];
data;
for(var x in dataJson){
  arr.push(dataJson[x]);
}
          // jQuery.each(dataJson.data, function(){});
    /*      for (var i = 0; i < arr.length; ++i) {
  alert('value at index [' + i + '] is: [' + arr[i] + ']');
}
      */   
       });

      }

     </script>
    </head>
       
<body class="">



  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Form Elements</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Form - <span class="semi-bold">Elements</span></h3>
      </div>
    <!-- BEGIN BASIC FORM ELEMENTS-->
      
       <div class="row" id="maincategorydiv">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Add City <span class="semi-bold">Region</span></h4>
                 </div>
                <div class="grid-body no-border"> <br>
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" id="cityresion">
                     
                      <div class="col-md-4" >
                     <div class="form-group">
                      <label class="form-label">State</label>
                       <div class="controls">
                      <select id="state" style="width:100%" onchange="loadCity()">
                         <option value="-1">Select State</option>
                         <?php foreach($State as $state){?>
                         <option value=<?=$state->city_state;?>><?=$state->city_state;?></option>
                        <?php }?>  
                     </select>
                      </div>
                  </div>
                </div>
                    
                      <div class="col-md-4" >
                     <div class="form-group">
                      <label class="form-label">City</label>
                       <div class="controls">
                      <select id="city" style="width:100%">
                         <option value="-1">Select City</option>
                         
                     </select>
                      </div>
                  </div>
                </div>


                     </div>

                   </div>
                </div>
              </div>
            </div>
          </div> 


     
    </div>
   <div id="ohsnap"></div>
  </div> 

</body>
</html>  
   
