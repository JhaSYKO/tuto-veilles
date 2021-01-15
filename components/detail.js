/**
 * initialisation du DOM 
*/
$('document').ready(function() { 
    //récupération des param dans l'URL et stockage
    const queryString = window.location.search;
    //recherche parmis les param création d'un nouvelle objet
    const urlParams = new URLSearchParams(queryString);
    //récupération de l'id passé
    const idAirtable = urlParams.get('id')
    console.log('id', idAirtable);

    //requête api airtable
    base('Veilles').find(idAirtable, function(err, record) {
        if (err) { console.error(err); return; }
        console.log('Retrieved', record.id);

        var parent = document.getElementById('contentDetail');
        var dateA = record.get("Date");
        var subjectA = record.get("Subject");
        var synthesisA = record.get("Synthesis");
        var commentaryA = record.get("Commentary");
        var sourceA = record.get("Source");

        var newTemplate = tempalteTable.replace("###Date###",dateA);
        newTemplate = newTemplate.replace("###Subject###", subjectA );
        newTemplate = newTemplate.replace("###Synthesis###", synthesisA );
        newTemplate = newTemplate.replace("###Commentary###", commentaryA);
        newTemplate = newTemplate.replace("###Source###", sourceA );


        parent.insertAdjacentHTML( 'afterbegin',newTemplate)

    });

})

function editDetail() {
    var parent = document.getElementById('contentDetail');
    parent.hide();
}