<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <title>Drinks Image View</title>

</head>
<body>
    <h1 style='margin:5px; padding:10px;'>Choose a drink brand to see more details</h1>
    <b style='margin:5px; padding:10px;'>Select a drinks brand name: </b>
    <form style='margin:5px; padding:10px;'>
        <select id="select">
            <?php 
                // Debug
                // $data = array("A", "B", "C", "D", "E");
                for ($i=0; $i <= count($data); $i++)                                  
                    echo '<option value="'. $data[$i] .'">'. $data[$i] . '</option>';
            ?>
        </select>
    </form> 
    <!-- Inject the HTML into this div tag placeholder -->
    <div id="placeholder" style='margin:5px; padding:10px;'></br></div>

    <script>
    $(document).ready(function(){
        $("#select").change(function () {
            // Debug
            var model = $(this).val();
            console.log('Drinks Model:', model, 'has been selected');
            // Variable to hold the HTML as we build it for inserting into the place holder
            var str = "";          
            // Process the selection to select the desired drinks brand
            $("select option:selected").each(function () {              
                // Start to build the HTML starting with a title
                str += "<div><b>Drinks Brand: </b> "+ $(this).text() + "</div>" + "</br>";
                // Debug
                console.log('HTML Title is:', str);
                // Debug
                var selection = $(this).text();
                // Debug
                console.log('Selected brand model:', selection);
                // Build a Url path to the php model used to read the drinks brand data
                var brandUrl = "../application/model/modelDrinkDetails.php?brand=" + selection;
                // Debug
                console.log('URL to PHP Model is:', brandUrl);
                // Fire the AJAX call with the .getJSON function to get the service response from the Url (to the web server)
                $.getJSON(brandUrl, function(json) {
                  // Debug
                  console.log('Web service response for drink brand data: ', json);
                  // Write the handler to display the results in an HTML view
                  // Start the contatiner div tag
                  str +="<div width=90%; style='float:left; margin:5px; border:1px solid; border-color: blue; padding:10px;'>";
                  // Build the HTML view — we need to loop because we may have more than one of a particular brand
                  for (var i=0; i<json.length; i++) {
                      // Grab the drink brand details
                      str+= 
                        "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].brand + "</div>" + 
                        "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].x3dModelTitle + "</div>" + 
                        "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].x3dCreationMethod + "</div>" +
                        "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].modelTitle + "</div>" +
                        "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].modelSubtitle + "</div>" +
                        "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].modelDescription + "</div>";
                      // And, the drink brand image
                      str +=
                        "<div width='30%'style='float:left; margin:5px;border:1px solid; border-color: green; border-radius: 10px; padding:10px;'>" + 
                        "<img width='300px' src = '../application/assets/images/gallery_images/" + json[i].brand + ".png'></img>" +
                        "</div>";
                  }
                  // Close off the container div tag
                  str+="</div";
                  // And return the constructed HTML to the '</div> placeholder </div>'
                  document.getElementById("placeholder").innerHTML=str;
                  // Alternatively, you could use the JQuery .html() method to return the HTML string to the placeholder div tag
                  // $('#placeholder').html(str);
               });
            });
        });
    });
  </script>
   
</body>
</html>	