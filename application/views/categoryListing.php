



<table class="table" id="categorytable" >
  <thead>
   <tr>
    <th>Category Name</th>
    <th>Action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($Category as $category){?>
     <tr><td><?=$category->categoryname;?></td>
	 <td><button type="button" class="btn btn-primary btn-xs btn-mini editcat" value=<?=$category->catid;?> name="editCat" id=catidedit<?=$category->catid;?>>Edit</button>
	 <button type="button" class="btn btn-danger btn-xs btn-mini deleteCat" name="deleteCat" onclick="showPrompt('are your sure you you want to delete', 'Are you ready?');"  value=<?=$category->catid;?> id=catiddel<?=$category->catid;?> data-target="#myModal">Delete</button>
	 </td>
     </tr>     
     <?php }?>  
 </tbody>
</table>
    <div class="row" id="addcategory">
        <div class="col-md-8 col-sm-8 col-xs-8">
           <div class="form-group">
               <label class="form-label">Category Name</label>
                  <span class="help">e.g. "Bus"</span>
                  <div class="controls">
                  <input type="text" id="categoryname" name="categoryname" class="form-control">
                  </div>
          </div>


           <div class="form-group">
                    <div class="pull-right">
                      <button class="btn btn-success btn-cons" onclick="createCategory();" type="submit"><i class="icon-ok"></i> Save</button> <button class=
                      "btn btn-white btn-cons" type="button">Cancel</button>
                    </div>
                  </div>
        </div>
    </div>


   <script>

   //$("#addcategory").hide();
    function showPrompt(msg, title){
        $.prompt(msg, {
            title: title,
			buttons: { "Yes": true, "No": false },
	       submit: function(e,v,m,f){
		// use e.preventDefault() to prevent closing when needed or return false. 
		// e.preventDefault(); 
		    if(v){
				 confirmDeleteCategory();
			}
   
		    console.log("Value clicked was: "+ v);
	     }
        });
    }
   
   var catid="";
   $().ready(function() {
         $( ".deleteCat" ).click(function() {
         catid=$(this).val();
        });
    });
    
	 function confirmDeleteCategory(){
   	  $.post('<?php echo base_url();?>category/deleteCategory', {catid:catid}, function (data){
		
		  if(data==200){
			 ohSnap("Category Has been deleted successfully.", {'color':'green'})
			   
		 }if(data==400){
			ohSnap("Oops. Something went wrong.Please try again later.", {'color':'red'}) 
		 }
         displayCategory();
        });
    }

    function createCategory(){

      categoryname=$("#categoryname").val();
      $.post('<?php echo base_url();?>category/addCategory', {categoryname:categoryname}, function (data){
      if(data==200){
       ohSnap("Category Has been deleted successfully.", {'color':'green'})
         
     }if(data==400){
      ohSnap("Oops. Something went wrong.Please try again later.", {'color':'red'}) 
     }
         displayCategory();
        });

    }
   </script>  