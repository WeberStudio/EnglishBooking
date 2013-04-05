var info = []; //Needed to access data from outside the JSON processing function
$(document).ready(function() {
        $("#postcodeLookupButton").click(function(event) {
                
                $("#addressResult").html("<img src='img/loading.gif' />"); //Loading GIF
                $.ajax({
                        dataType: 'jsonp',
                        data: 'postcode='+$("#inputPostcode").val()+'&number='+$("#inputNumber").val(),
                        jsonp: 'jsonp_callback',
                        url: 'http://www.tabcat.co.uk/postcode_lookup_json_v2.php',
                        success: function (data) {
                                var options;
                                //This bit populates the <select> with addresses and an onclick event to populate HTML entities on the page
                                $("#addressResult").html("<select onclick='if($.browser.msie && $.browser.version==\"6.0\") alert(\"Thanks. Your address selection will now be populated into the order form.\"); $(\"#address\").val(info[this.value].address); $(\"#city\").val(info[this.value].town); $(\"#county\").val(info[this.value].county); $(\"#postcode\").val(info[this.value].postcode);' style='display: none' multiple='multiple' id='addressResults'></select>");
                                for(var i in data) {
                                        info[i] = data[i];
                                        options=data[i].address+", "+data[i].town+", "+data[i].county+", "+data[i].postcode;
                                        $("#addressResults").append("<option value='"+i+"'>"+options+"</option>");
                                }
                                $("#addressResults").show("slow");
                        }
                });
        });	
        $("#inputPostcode").keypress(function (e) { //This makes sure that the form does not submit when pressing enter. We just want to run some javascript rather than submit anything.
                if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {  
                        $("#postcodeLookupButton").click();
                        return false;
                } else {  
                        return true;  
                }  
        });
});