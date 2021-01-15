$(function () {

    $('form').on('submit', function (e) {
    
      e.preventDefault();
    
    var $submit =  $("#newAgeBut");
    $submit.attr("disabled", true);
    document.getElementById("loader1").style.display = "inline-block";
    
      $.ajax({
        type: 'get',
        url: 'func/edit.php',
        data: $('form').serialize() + '&ins=newAge',
         success: function(data)
        {
            $submit.attr("disabled", false);
            document.getElementById("loader1").style.display = "none";
            jQuery('#permission').html(data).show();
        }
      });
    
    });
    
    });


//changepassword
    $(function () {

        $('form').on('submit', function (e) {
        
          e.preventDefault();
        
        var $submit =  $("#newAgeBut");
        $submit.attr("disabled", true);
        document.getElementById("loader1").style.display = "inline-block";
        
          $.ajax({
            type: 'get',
            url: 'func/edit.php',
            data: $('form').serialize() + '&ins=newAge',
             success: function(data)
            {
                $submit.attr("disabled", false);
                document.getElementById("loader1").style.display = "none";
                jQuery('#permission').html(data).show();
            }
          });
        
        });
        
        });
    
       //profile 
        $(function () {

            $('form').on('submit', function (e) {
            
              e.preventDefault();
            
            var $submit =  $("#newAgeBut");
            $submit.attr("disabled", true);
            document.getElementById("loader1").style.display = "inline-block";
            
              $.ajax({
                type: 'get',
                url: 'func/edit.php',
                data: $('form').serialize() + '&ins=newAge',
                 success: function(data)
                {
                    $submit.attr("disabled", false);
                    document.getElementById("loader1").style.display = "none";
                    jQuery('#permission').html(data).show();
                }
              });
            
            });
            
            });