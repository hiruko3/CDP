$('#researchtab').keyup(function() {

    var colonnes = {};

    $("#tableauAtelier thead th ").each(function(index, th)
    {
        colonnes[index] = $(th).text();
    }
    );

    var mots = $('#researchtab').val().toLowerCase().split(" ");

    $("#tableauAtelier tbody tr").each(function(index, tr)
    {
        if (mots[0].length > 0)
        {
            $(tr).hide();
        }
        else
        {
            $(tr).show();
        }

        $("td", tr).each(function(index, td)
        {
            if (colonnes[index] in {'nom': true, 'thème': true, 'type': true})
            {
                for (mot in mots)
                {
                    if (mots[mot].length > 0 && $(td).text().toLowerCase().indexOf(mots[mot]) >= 0)
                    {
                        $(tr).show();
                        return false;
                    }
                }
            }
        });
    });
});



