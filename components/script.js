/**
 * initialisation du DOM 
*/
$('document').ready(function() {
    base('Veilles').select({
        maxRecords: 50,
        view: "Grid view"
    }).eachPage(function page(records, fetchNextPage) {
        records.forEach(function (record) {
            console.log('Retrieved', record.getId());

            var parent = document.getElementById('content');
            var collaborator = record.get('Collaborator');
            console.log('collab', collaborator);

            parent.insertAdjacentHTML('afterend', 
                '<tr>'+
                    '<th scope="row">'+ collaborator.name + '</th>'+
                    '<td>'+ record.get('Date') +'</td>'+
                    '<td>'+ record.get('Subject') +'</td>'+
                    '<td>'+ record.get('Synthesis') +'</td>'+
                    '<td>'+ record.get('Commentary') +'</td>'+
                    '<td>'+
                    '<a href="'+ record.get('Source') +'">'+ record.get('Source') +'</a>'+
                    '</td>'+
                    '<td >'+
                    '<a  href="vues/detail.php?id='+ record.getId() +'"><i class="fas fa-edit text-warning" ></i></a>'+
                    '</td>'+
                '</tr>'
            );
        });
        fetchNextPage();
    
    }, function done(err) {
        if (err) { console.error(err); return; }
    });
}
)

function redirectTo(sUrl) {
    window.location = sUrl
    }