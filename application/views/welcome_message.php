<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="">
      <title> social media platform design </title>

      <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet"> 
      <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" >
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      
    </head>
    <body>
        
        <div class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title text-center"><i class="fa fa-exclamation-circle"> </i> Error Message Alert </h4>
                </div>
                <div class="modal-body">
                  <p>&nbsp;</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <div class="container"> 
          <div style="margin-bottom:50px;" class="row"> 
            <div class="col-md-8"> 
                <select class="form-control"> 
                    <option value="facebook">  facebook </option>
                    <option value="twitter">  twitter </option>
                    <option value="instagram">  instagram </option>
                    <option value="googleplus">  googleplus </option>
                    <option value="skype">  skype </option>
                    <option value="linkedin">  linked in  </option>
                    <option value="vimeo">  vimeo  </option>
                    <option value="youtube">  youtube </option>
                    <option value="whatsapp">  whatsapp </option>
                    <option value="flickr">  flickr </option>
                    <option value="soundcloud">  soundcloud </option>
                    <option value="tumblr">  tumblr </option>
                    <option value="pinterest">  pinterest </option>
                </select>
            </div>
            <div class="col-md-4"> 
                <button class="btn btn-danger pull-right" id="add_field"><i class="fa fa-plus"></i>  add new platform</button>
            </div>
          </div>

          <div class="row table-social"> 
            <div class="col-md-12">
              <div class="table-responsive"> 
                  <?php echo form_open('welcome/add_platform'); ?>
                    <table class="table table-striped"> 
                        <?php if(count($rows)){ foreach ($rows as $item){ ?>
                        <tr id="#<?php echo $item->social_name; ?>">
                            <td> <span><i class="fa fa-<?php echo $item->social_name; ?> fa-2x"></i></span> <p class="soc_text"> <?php echo $item->social_name; ?> </p> </td>
                            <td> <input type="text" class="form-control" name="social[]" value="<?php echo $item->social_url; ?>"/></td>
                            <td> <input type="hidden" class="form-control" name="name[]" value="<?php echo $item->social_name; ?>" /></td>
                            <td> <button class="btn btn-danger delete_field" type="button" data-id="<?php echo $item->id; ?>"><i class="fa fa-times"> </i> </button> </td>
                        </tr>
                        <?php }} ?>
                    </table>
                  <button class="btn btn-info" name="submitted"><i class="fa fa-save"></i> save </button> 
                  <button class="btn btn-success"><i class="fa fa-refresh"></i> refresh </button>
                  <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
        
        



    <script src="<?php echo base_url(); ?>js/jquery-1.11.0.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
    <script type="<?php echo base_url(); ?>js/script.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          
                
            $('#add_field').on('click',function(){
                
                var platform = $("select").val();
                console.log(platform);
                if(platform === 'googleplus'){
                    platform = platform.replace('googleplus','google');
                }
                var output = "";
                output = '<tr id="#'+platform+'">';
                output += '<td> <span><i class="fa fa-'+platform+' fa-2x"></i></span> <p class="soc_text"> '+platform+' </p> </td>';
                output += '<td> <input type="text" class="form-control" name="social[]" /></td>';
                output += '<td> <input type="hidden" class="form-control" name="name[]" value="'+platform+'" /></td>';
                output += '<td> <button class="btn btn-danger delete_field" type="button" data-status="true"><i class="fa fa-times"> </i> </button> </td>';
                output += '</tr>';
                
                var plats = $('.soc_text').text();
                console.log(plats);
                $.trim(plats);
                var newarr = plats.split(" ");
                console.log(newarr); 
//                var arr = ['whatsapp' , 'skype' , 'vimeo'] ;
                if( $.inArray(platform , newarr) !== -1 ){
                    alert ('you already have created that platform  , choose another social platform');
                }
                else {
                    $('.table-social').find('table').append(output);
                }
                
            });
          
          
          
          
          
          
          
        // delete a social platform field from the list  
          
          $('.delete_field').live('click',function(e){
              e.preventDefault();
              var id = $(this).data('id'),
                  haveval = $(this).data('status'),
                  current_url =  window.location.href ;
              $.ajax({
                  url:'<?php echo base_url(); ?>welcome/delete_field',
                  data: {id : id},
                  type:'POST',
                  success:function(data){
                      window.location = current_url;
                      $('.modal').modal();
                      console.log(data);
                  }
              });
              if(haveval == true){
                  console.log('id' );
              }
              console.log('id' + haveval);
          });
          

          
          
      });
    </script>
    </body>
</html>