<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]>  <html> <![endif]-->
<!--[if !IE]><!--> 
<html>             <!--<![endif]-->

 <script>


   function displayCategory () {
    $("#subcategorydiv").css('display','none');
    $("#maincategorydiv").show();
    $.post('<?php echo base_url();?>category/displayCategory', {}, function (data){
      $("#showctegory").html(data)
          $('#example3').dataTable();
       });
   }

   function displaysubCategory () {
    
        $("#maincategorydiv").hide();
        $("#subcategorydiv").css('display','block');
   // $("p").css("background-color", "yellow");
    $.post('<?php echo base_url();?>category/displaysubCategory', {}, function (data){
          $("#showsubcategory").html(data);
          $("#subCategorytable").css('display','');
          //$('#subCategorytable').dataTable();
       });
   }

    
 </script>
<!-- BEGIN BODY -->
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
       



  <!-- END BASIC FORM ELEMENTS-->

  <!-- BEGIN FORM OPTIONS-->
    <!-- <div class="row">
        <div class="col-md-8">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Form <span class="semi-bold">Options</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <div class="span8">
                  <h3>Control <span class="semi-bold">Sizes</span></h3>
                  <p>Basic buttons are traditional buttons with borders and background. Use any of the available button classes to quickly create a styled button. Compatible for bootstrap version 2 and 3.</p>
          <br>
          <input class="form-control input-lg" type="text" placeholder=".input-lg">
          <br>
          <input class="form-control" type="text" placeholder="Default input">
          <br>
          <input class="form-control input-sm" type="text" placeholder=".input-sm">
          <br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Form <span class="semi-bold">Options</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <h3>Form <span class="semi-bold">Controls</span></h3>
                <p>Adding on top of existing browser controls, Bootstrap includes other useful form components. Add text or buttons before or after any text-based input. Do note that select elements are not supported here.</p>
                <br>
        <div class="input-group transparent">
          <span class="input-group-addon ">
          <i class="fa fa-instagram"></i>
          </span>
          <input type="text" class="form-control" placeholder="Username">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon primary">
          <span class="arrow"></span>
          <i class="fa fa-align-justify"></i>
          </span>
          <input type="text" class="form-control" placeholder="Username">
        </div>
        <br>
        <div class="input-group">
          <input type="text" class="form-control">
           <span class="input-group-addon primary">
           <span class="arrow"></span>
          <i class="fa fa-align-justify"></i>
           </span>
        </div>

              </div>
            </div>
          </div>
        </div>
      </div> -->
    <!-- END FORM OPTIONS-->

    <!-- BEGIN CHECKBOX CONTROLS-->
      <!-- <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Checkbox <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-4">
                  <h3>Color <span class="semi-bold">Options</span></h3>
                  <p>Our very own image-less pure CSS and retina compatible check box. These check boxes are customized and aviable in all boostrap color classes</p>
                  <br>
                  <div class="row-fluid">
                    <div class="checkbox check-default">
                      <input id="checkbox1" type="checkbox" value="1">
                      <label for="checkbox1">Keep Me Signed in</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-success  ">
                      <input id="checkbox2" type="checkbox" value="1" checked="checked">
                      <label for="checkbox2">I agree</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkbox3" type="checkbox" value="1">
                      <label for="checkbox3">Mark</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-info">
                      <input id="checkbox4" type="checkbox" value="1">
                      <label for="checkbox4">Steve Jobs </label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-warning">
                      <input id="checkbox5" type="checkbox" value="1" checked="checked">
                      <label for="checkbox5">Action</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-danger">
                      <input id="checkbox6" type="checkbox" value="1" checked="checked">
                      <label for="checkbox6">Mark as read</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <h3>Shape <span class="semi-bold">Options</span></h3>
                  <p>Bored with traditional boxed shape check boxes? Here is a circle one simply add the class <code>.checkbox-circle</code> to change it</p>
                  <br>
                  <div class="row-fluid">
                    <div class="checkbox check-default checkbox-circle">
                      <input id="checkbox7" type="checkbox" value="1" checked="checked">
                      <label for="checkbox7">Keep Me Signed in</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-success checkbox-circle">
                      <input id="checkbox8" type="checkbox" value="1" >
                      <label for="checkbox8">I agree</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary checkbox-circle" >
                      <input id="checkbox9" type="checkbox" value="1" checked="checked">
                      <label for="checkbox9">Mark</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <h3>State <span class="semi-bold">Options</span></h3>
                  <p>These act the same way as normal HTML check boxes. Here are some states that </p>
                  <br>
                  <div class="row-fluid">
                    <div class="checkbox check-success">
                      <input id="check1" type="checkbox" name="check" value="check1" disabled="disabled">
                      <label for="check1">Checkbox No. 1</label>
                      <br>
                      <input id="check2" type="checkbox" name="check" value="check2" checked="checked" disabled="disabled">
                      <label for="check2">Checkbox No. 2</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    <!-- END CHECKBOX CONTROLS-->

    <!-- BEGIN RADIO/TOGGLE CONTROLS-->
      <!-- <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Toggle <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-4">
                  <h3>Color <span class="semi-bold">Options</span></h3>
                  <p>Pure CSS radio button with a cool animation. These are available in all primary colors in bootstrap</p>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="radio">
                        <input id="male" type="radio" name="gender" value="male" checked="checked">
                        <label for="male">Male</label>
                        <input id="female" type="radio" name="gender" value="female">
                        <label for="female">Female</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="radio radio-success">
                        <input id="yes" type="radio" name="optionyes" value="yes">
                        <label for="yes">Agree</label>
                        <input id="no" type="radio" name="optionyes" value="no" checked="checked">
                        <label for="no">Disagree</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <div class="clearfix"></div>
                </div>
                <div class="col-md-4">
                  <h3>State <span class="semi-bold">Options</span></h3>
                  <p>Use of different color opacity helps to destigues between different states such as disable</p>
                  <br>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="radio radio-primary">
                        <input id="Disabled" type="radio" name="Disabled" value="Disabled"  disabled="disabled">
                        <label for="Disabled">Disabled</label>
                        <input id="ADisabled" type="radio" name="ADisabled" value="ADisabled" checked="checked"  disabled="disabled">
                        <label for="ADisabled">Disabled</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <h3>Slide <span class="semi-bold">Toggle</span></h3>
                  <p>A cool iOS7 slide toggle. These are cutomize for all boostrap colors</p>
                  <br>
                  <div class="row-fluid">
                    <div class="slide-primary">
                      <input type="checkbox" name="switch" class="ios" checked="checked"/>
                    </div>
                    <div class="slide-success">
                      <input type="checkbox" name="switch" class="iosblue" checked="checked"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    <!-- END RADIO/TOGGLE CONTROLS-->

    <!-- BEGIN DROPDOWN CONTROLS-->
     <!--  <div class="row">
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Dropdown <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-12">
                  <h3>Simple <span class="semi-bold">dropdowns</span></h3>
                  <p>These are highly customizable dropdowns that come with search option for use to search </p>
                  <br>
                  <select id="source" style="width:100%">
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NM">New Mexico</option>
                    <option value="ND">North Dakota</option>
                    <option value="UT">Utah</option>
                    <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                    <option value="AL">Alabama</option>
                    <option value="AR">Arkansas</option>
                    <option value="IL">Illinois</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="OK">Oklahoma</option>
                    <option value="SD">South Dakota</option>
                    <option value="TX">Texas</option>
                    <option value="TN">Tennessee</option>
                    <option value="WI">Wisconsin</option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="IN">Indiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="OH">Ohio</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WV">West Virginia</option>
                    </optgroup>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Dropdown <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-12">
                  <h3>Remote <span class="semi-bold">data</span></h3>
                  <p>Load options via ajax to the dropdown control</p>
                  <br>
                  <input type="hidden" value="" style="width:300px" id="e12" tabindex="-1" class="select2-offscreen">
                  <select id="remote" style="width:100%">
                    <option value="1">Loading...</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Dropdown <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-12">
                  <h3>Multi <span class="semi-bold">Select</span></h3>
                  <p>Fancy multiselect option box. Customized for the anypreference</p>
                  <br>
                  <select id="multi" style="width:100%" multiple>
                    <option value="Jim">Jim</option>
                    <option value="John">John</option>
                    <option value="Lucy">Lucy</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    <!-- END DROPDOWN CONTROLS-->

    <!-- BEGIN DATEPICKER CONTROLS-->
      <!-- <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Date <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-4">
                  <h3>Simple  Date<span class="semi-bold"> Picker</span></h3>
                  <p>Date picker is powered by boostrap date picker, this is customized in way that it suites our theme and design, Have a look!</p>
                  <br>
                  <div class="input-append success date col-md-10 col-lg-6 no-padding">
                    <input type="text" class="form-control">
                    <span class="add-on"><span class="arrow"></span><i class="fa fa-th"></i></span> </div>
                  <br>
                  <br>
                  <div class="clearfix"></div>
                </div>
                <div class="col-md-4">
                  <h3>Over<span class="semi-bold">view</span></h3>
                  <p>Here is an attached calender in case you want to see how it looks like, this is only used for a demo purpose</p>
                  <br>
                  <div id="dp5" data-date="12-02-2013" data-date-format="dd-mm-yyyy"></div>
                </div>
                <div class="col-md-4">
                  <h3>Advance <span class="semi-bold">Settings</span></h3>
                  <p>Some advance setting that you can do with this calender, like to start from years an disable sections of dates</p>
                  <br>
                    <div class="input-append success date col-md-10 col-lg-6">
                      <input type="text" class="form-control" id="sandbox-advance">
                      <span class="add-on"><span class="arrow"></span><i class="fa fa-th"></i></span>
          </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

    <!-- BEGIN TIMEPICKER/COLORPICKER CONTROLS-->
     <!--  <div class="row">
        <div class="col-md-6">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Time <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
                <h3>Simple Time <span class="semi-bold">Picker</span></h3>
                <p>This is a time picker controller that can be customized for both 24hour and 12 hour clocks</p>
                <br>
                <div class="form-group">
                  <label class="form-label">Default Timepicker</label>
                  <div class="controls">
                    <div class="input-group transparent clockpicker col-md-6">
                      <input type="text" class="form-control" placeholder="Pick a time">
                      <span class="input-group-addon ">
                       <i class="fa fa-clock-o"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Color <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
                <h3>Color <span class="semi-bold">Picker</span></h3>
                <p>Hardly used but we included it too, You can pick a color and return it to any element you want</p>
                <br>
                <a data-color="rgb(255, 255, 255)" data-color-format="hex" id="cp4" class="btn btn-primary my-colorpicker-control" href="#" data-colorpicker-guid="8">Change background color</a> <br>
                <br>
                <div class="clearfix"></div>
              </div>
          </div>
        </div>
      </div> -->
    <!-- END TIMEPICKER/COLORPICKER CONTROLS-->

    <!-- BEGIN INPUT HELPERS CONTROLS-->
     <!--  <div class="row">
        <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Input <span class="semi-bold">Helpers</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border">


                  <div class="row">
                    <div class="col-md-6">
                      <h3>Input <span class="semi-bold">Masks</span></h3>
                      <p>These assure the user will never enter invalid phone no, email or anything that has a pattern even without validations</p>
                      <br>
                      <div class="form-group">
                        <label class="form-label">Date</label>
                        <span class="help">e.g. "25/12/2013"</span>
                        <div class="controls">
              <input type="text" class="form-control" id="date">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Telephone</label>
                        <span class="help">e.g. "(324) 234-3243"</span>
                        <div class="controls">
                          <input type="text" class="form-control" id="phone">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Custom</label>
                        <span class="help">e.g. "23-4324324"</span>
                        <div class="controls">
                          <input type="text" class="form-control" id="tin">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Social Security Number</label>
                        <span class="help">e.g. "432-43-2432"</span>
                        <div class="controls">
                          <input type="text" placeholder="You can put anything here" class="form-control" id="ssn">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Input <span class="semi-bold">autonumeric</span></h3>
                      <p>Do you forget small things? here is something that helps to automatically placed forgotten dollar signs, decimal places and even comma separates and many more!</p>
                      <br>
                      <div class="form-group">
                        <label class="form-label">Decimal place and comma separator</label>
                        <span class="help">e.g. "53,000.00"</span>
                        <div class="controls">
                          <input type="text" class="form-control auto" data-a-sep="," data-a-dec=".">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Weird way but works</label>
                        <span class="help">e.g. "45.000,00"</span>
                        <div class="controls">
                          <input type="text" class="form-control auto" data-a-sep="." data-a-dec=",">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Dollar prefix</label>
                        <span class="help">e.g. "$45.50"</span>
                        <div class="controls">
                          <input type="text" class="form-control auto" data-a-sign="$ ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Range</label>
                        <span class="help">e.g. "0 - 9,999"</span>
                        <div class="controls">
                          <input type="text" class="form-control auto" data-v-max="9999" data-v-min="0">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div> -->
    <!-- END INPUT HELPERS CONTROLS-->

    <!-- BEGIN HTML5 WYSIWG CONTROLS-->
     <!--  <div class="row">
        <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>HTML5 <span class="semi-bold">WYSIWYG</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border">

                    <h3>Simple <span class="semi-bold">Editor</span></h3>
                    <p>Simple, elegant WYSIYG editor that acts as a word editor all necessary actions that is required to type simple content with style is available in this editor.
                      Its powererd by HTML5 WYSIYG editor which will work even on any mobile device. Simply place it any <code>textarea</code> </p>
                    <br>
                    <textarea id="text-editor" placeholder="Enter text ..." class="form-control" rows="10"></textarea>

                </div>
              </div>
        </div>
      </div>
    <!-- END HTML5 WYSIWG CONTROLS-->

    <!-- BEGIN TAG INPUTS / FILE UPLOADER CONTROLS-->
      <!-- <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Tags <span class="semi-bold">Input</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border">
                  <div class="row-fluid">
                    <h3>Tag <span class="semi-bold">Input</span></h3>
                    <p>Do you use tags to organize content on your site? This plugin will turn your boring tag list into a magical input that turns each tag into a style-able object with its own delete link. </p>
                    <br>
                    <input class="span12 tagsinput"   type="text" value="Amsterdam,Washington" data-role="tagsinput" readonly />
          <span  class="span12 tagsinput" data-role="tagsinput" >Amsterdam</span>
                    <input class="span12 tagsinput" type="text" value="johnsmith@webarc.com,janesmith@webarc.com" data-role="tagsinput" />
                    <input class="span12 tagsinput" id="source-tags" type="text"  />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Drag n Drop <span class="semi-bold">Uploader</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border">
                  <div class="row-fluid">
                    <form action="/file-upload" class="dropzone no-margin">
                      <div class="fallback">
                        <input name="file" type="file" multiple />
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
     <!-- END TAG INPUTS / FILE UPLOADER CONTROLS-->
      <!-- END PAGE -->
	   
    </div>
	 <div id="ohsnap"></div>
  </div> 
<!-- BEGIN CHAT -->
<!-- <div class="chat-window-wrapper">
  <div id="main-chat-wrapper" class="inner-content">
        <div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users" >
            <div class="chat-header">
            <div class="pull-left">
                <input type="text" placeholder="search">
            </div>
                <div class="pull-right">
                    <a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
                </div>
            </div>
            <div class="side-widget">
               <div class="side-widget-title">group chats</div>
                <div class="side-widget-content">
                 <div id="groups-list">
                    <ul class="groups" >
                        <li><a href="#"><div class="status-icon green"></div>Office work</a></li>
                        <li><a href="#"><div class="status-icon green"></div>Personal vibes</a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="side-widget fadeIn">
               <div class="side-widget-title">favourites</div>
               <div id="favourites-list">
                <div class="side-widget-content" >
                    <div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                        <div class="user-profile">
                            <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            Jane Smith
                            </div>
                            <div class="user-more">
                            Hello you there?
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">
                            <span class="badge badge-important">3</span>
                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon green"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                        <div class="user-profile">
                            <img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            David Nester
                            </div>
                            <div class="user-more">
                            Busy, Do not disturb
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon red"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="side-widget">
               <div class="side-widget-title">more friends</div>
                 <div class="side-widget-content" id="friends-list">
                    <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                        <div class="user-profile">
                            <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            Jane Smith
                            </div>
                            <div class="user-more">
                            Hello you there?
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">

                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon green"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                        <div class="user-profile">
                            <img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            David Nester
                            </div>
                            <div class="user-more">
                            Busy, Do not disturb
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon red"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                        <div class="user-profile">
                            <img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            Jane Smith
                            </div>
                            <div class="user-more">
                            Hello you there?
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">

                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon green"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                        <div class="user-profile">
                            <img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            David Nester
                            </div>
                            <div class="user-more">
                            Busy, Do not disturb
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon red"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
        <div class="chat-header">
            <div class="pull-left">
                <input type="text" placeholder="search">
            </div>
                <div class="pull-right">
                    <a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
                </div>
            </div>
        <div class="clearfix"></div>
        <div class="chat-messages-header">
        <div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
        <a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
        </div>
        <div class="chat-messages scrollbar-dynamic clearfix">
            <div class="inner-scroll-content clearfix">
            <div class="sent_time">Yesterday 11:25pm</div>
            <div class="user-details-wrapper " >
                <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="user-details">
                  <div class="bubble">
                        Hello, You there?
                   </div>
                </div>
                <div class="clearfix"></div>
               <div class="sent_time off">Yesterday 11:25pm</div>
            </div>
            <div class="user-details-wrapper ">
                <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="user-details">
                  <div class="bubble">
                        How was the meeting?
                   </div>
                </div>
                <div class="clearfix"></div>
                <div class="sent_time off">Yesterday 11:25pm</div>
            </div>
            <div class="user-details-wrapper ">
                <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="user-details">
                  <div class="bubble">
                        Let me know when you free
                   </div>
                </div>
                <div class="clearfix"></div>
                <div class="sent_time off">Yesterday 11:25pm</div>
            </div>
            <div class="sent_time ">Today 11:25pm</div>
            <div class="user-details-wrapper pull-right">
                <div class="user-details">
                  <div class="bubble sender">
                        Let me know when you free
                   </div>
                </div>
                <div class="clearfix"></div>
                <div class="sent_time off">Sent On Tue, 2:45pm</div>
            </div>
        </div>
        </div>
        <div class="chat-input-wrapper" style="display:none">
            <textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
        </div>
        <div class="clearfix"></div>
        </div>
    </div>
</div> -->
<!-- END CHAT -->

     
   
   
  

<!-- END CONTAINER -->

</body>
</html>
