<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ANRES 2018</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/ANRES.css" rel="stylesheet">
  </head>

  <body>
  <style>
    .row > .col-md-5 > .container > h5{
   
    }
    .row > .order-md-1 > .container > h5{
      color: #fff;
      background-color: #ec9b4f;
      border: solid 1px #6c6868;
      box-shadow: inset -3px -3px 6px #e07002;
    }
    .row > .order-md-2 > .container > h5{
      color: #fff;
      background-color: #6dc628;
      border: solid 1px #6c6868;
      box-shadow: inset -3px -3px 6px #487822;
    }
    @media screen and (min-width:1300px){
      .order-md-1{
        margin-left:100px;
      }
     
    }
  
   @media screen and (min-width:1200px){
    .order-md-2{
        margin-top:15px;
   }
   }
  </style>
   <!-- banner zone -->
     <!-- Navigation -->
<?php
include('header.php');

include('layout/navigationbar.php');
?>

<!-- Masthead -->

   
    <main class="masthead text-white text-center">
      <div class="_masterhead">
      <article class="main-article" style="min-height:600px;">
        <div  class="section-conntent">

</div>
         
              
          </div>
</article>


    </main>
</div>




    <!-- Testimonials -->



    <!-- Footer -->
  <?php 
      include('footer.php')
  ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
 
  $.getJSON('registration.json', function(results){
    var  _registration = $('<div>', {class:'registration-info'})
        _registration.append(
          $("<h3>", {text:'Registration will be available on '}).append(
            $('<span>', {class:'', text:' 15 January 2018'})
          )
        )
        $.each(results, function(key, values){
          var _table = $('<table>',{class:"table"});
          var _tbody = $('<tbody>');
          $.each(values, function(key,values){
            var _tr =$('<tr>');
            $.each(values, function(key,values){
              switch (key) {
                case 'date2':_tr.append(
                  $('<td>',{text:values}).append('<br>'+'1 Jan.-28 Feb. 2018')
                );
                  break;
                  case 'date3':_tr.append(
                    $('<td>',{text:values}).append('<br>'+'1-27 Mar. 2018')
                  );
                  break;
                  case 'date4':case 'date3':_tr.append(
                    $('<td>',{text:values}).append('<br>'+'26–28 Apr. 2018')
                  );
                  break;
                  case 'td2':_tr.append(
                    $('<td>',{text:values}).append('<br>'+'1 ม.ค.-28 ก.พ. 2561')
                  );
                    break;
                    case 'td3':_tr.append(
                      $('<td>',{text:values}).append('<br>'+'1-27 มี.ค. 2561')
                    );
                    break;
                    case 'td4':_tr.append(
                      $('<td>',{text:values}).append('<br>'+'26-28 เม.ย. 2561')
                    );
                      break;
                default:  _tr.append(
                  $('<td>',{text:values})
                );

              }

            })
              _tbody.append(_tr);
          })
          switch(key){
            case 'table1':
            _registration.append($('<h3>',{text:'อัตราลงทะเบียนสำหรับคนไทย', "style":"padding-top:20px;"}));
            break;
            case 'table2':
              _registration.append($('<h3>',{text:'Registration Fees', "style":"padding-top:5px;"}));
              break;
          }
          _table.append(_tbody)
          _registration.append(_table);
         
        })
        _registration.append($('<button>', {style:"margin-top:30px; margin-bottom:30px;", type:"button", class:"btn btn-warning", text:"Get to registration!"}));
        $('.section-conntent').append(_registration);
      
      // $.when($('.section-conntent').append(_registration)).then(
      //   $('.section-conntent').append(
      //   $('<div>', {class:'row'}).append(
      //     $('<div>', {class:"col-md-5 order-md-1"}).append(
      //       $('<div>', {class:"container"}).append(
      //       $('<h5>', {text:"Guidelines for Oral Presentation"}),
      //         $('<p style="font-size:16px; text-align:left" >').append('"12	min for presentation and 3 min for discussion Speaker should upload presentation file (.pptx, .pdf) before session.Oral Presentation awards will be announced at closing ceremony on 28 Apr. Awardee is requested to attend.')
      //     )
      //     ),
      //     $('<div>', {class:'col-md-5 order-md-2'}).append(
      //       $('<div>', {class:'container'}).append(
      //         $('<h5>', {text:'Guidelines for Poster Presentation '}),
      //         $('<ul>').append(
      //           $('<li>', {text:'Poster size: 60 cm (W) X 110 cm (H) Top and bottom margins 1 inch'}),
      //           $('<li>', {text:'Discussion time is set for poster presentations. Please check the schedule to confirm your discussion time'}),
      //           $('<li>', {text:'Please set your poster on the poster panel labeled with your presentation number on 26 Apr at 8.30-11.00 and removal poster on 28 Apr before 12.00.'}),
      //           $('<li>', {text:'Poster awards will be announced at closing ceremony on 28 Apr. Awardee is requested to attend'})
      //         )
      //       )
      //     )
      //   )
      //   )
      // ) 
      
      
    
  })
 
 </script>
 <style>
 .table{
  width:95%;
  margin:0 auto;
 }
  </style>
  </body>

</html>
