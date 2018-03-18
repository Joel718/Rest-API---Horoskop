    
//Empty session with error handling
$("#raderaHoroscope").click(function() {

        $.ajax({
            url: "PHP/deleteHoroscope.php",
            method: "DELETE",
            data: {
                "prsnnmr": $("#inmatning").val()
            },
            success: function(results) {
                $(".content").html(results);
            }
        });
    });

    $(document).ready(function() {

        //Show horoscope if saved in session
        showHoroscope = function() {
            $.ajax({
                url: "PHP/viewHoroscope.php",
                method: "GET",
                success: function(results) {
                    $(".content").html(results);
                }
            });
        }

        //Saves horsocope if session is emty.
        $("#sparaHoroscope").click(function() {

            $.ajax({
                url: "PHP/addHoroscope.php",
                method: "POST",
                data: {
                    "prsnnmr": $("#inmatning").val()
                },
                success: function(results) {
                    if (results == "true") {
                        showHoroscope();
                    } else {
                        $(".content").html(results);
                    }

                }
            });
        });


        //Visar sparat horoskop
        $("#visaHoroscope").click(function() {

            $.ajax({
                url: "PHP/updateHoroscope.php",
                method: "PUT",
                data: {
                    "prsnnmr": $("#inmatning").val()
                },
                success: function(results) {
                    if (results == true) {
                        showHoroscope();
                    } else {
                        $(".content").html(results);
                    }
                }
            });
        })
    });