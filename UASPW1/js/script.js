$(document).ready(function() {
            function cariJudul() {
                var kata = $('#searchTitle').val().toLowerCase();
                $('.poster-item').each(function() {
                    var judul = $(this).find('h3').text().toLowerCase();
                    if (judul.includes(kata)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
            $('#searchButton').click(function() {
                cariJudul();
            });
            $('#searchTitle').keypress(function(e) {
                if (e.which == 13) {
                    cariJudul();
                }
            });
        });

