// alert("js work");
/* перевірка чи підключено
 $('#formTwit').on('submit', function(e) {
     e.preventDefault();
     alert('jquery Work');
 }); */

// для відправки твітів 
$('#formTwit').on('submit', function(e) {
    e.preventDefault();
    
    let form = $('#formTwit');
    // let data = form.serialize(); // це працює тільки для тексту

    // для загрузки файлів потрібні ще ці дані
    // twitImage додати у інпут в формі
    let file_data = $('twitImage').prop('files'); // отримати проперті - файл з twitImage
    let form_data = new FormData($('#formTwit')[0]);
        form_data.append('file', file_data);

    $.ajax({
        url:"/modules/add-twit.php ",
        type:"POST",
        data: form_data,
        processData: false,
        contentType: false,
        success:function(data) {
            let ajaxStatus = $('#listTwits').prepend(data)
           // console.dir(data)
       },
    });
});

$('#formEdit').on('submit', function(e) {
    e.preventDefault();
    
    let form = $('#formEdit');
    
    // fon_image додати у інпут в формі
    let file_data = $('fon_image').prop('files'); // отримати проперті - файл з fon_image
    let form_data = new FormData($('#formEdit')[0]);
        form_data.append('file', file_data);

    $.ajax({
        url:"/modules/edit-twit.php ",
        type:"POST",
        data: form_data,
        processData: false,
        contentType: false,
        success:function(data) {
            let ajaxStatus = $('#listTwits').prepend(data)
           // console.dir(data)
       },
    });
});

