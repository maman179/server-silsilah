// Sweet Alert
const flashData = $('.flash-data').data('flashdata');
if (flashData) {
    Swal.fire({
        title: 'Sukses',
        text: 'Berhasil ' + flashData,
        icon: 'success'
    });
}

const flashDataupdatepwd = $('.flash-data-gantipwd').data('flashdata');
if (flashDataupdatepwd) {
    Swal.fire({
        title: 'Sukses',
        text: 'Password ' + flashDataupdatepwd,
        icon: 'success'
    });
}

const flashLogin = $('.flash-data-login').data('flashdata');

if (flashLogin) {
    Swal.fire({
        title: 'Sukses',
        text: 'Berhasil' + flashLogin,
        icon: 'success'
    });
}

// Sweet Alert Registrasi
const flashRegistrasi = $('.flash-data-registrasi').data('flashdata');

if (flashRegistrasi) {
    Swal.fire({
        title: 'Sukses',
        text: 'Berhasil'+ flashRegistrasi,
        icon: 'success'
    });
}
// Sweet Alert Gagal Registrasi
const flashGagalReg = $('.flash-data-gagalreg').data('flashdata');

if (flashGagalReg) {
    Swal.fire({
        title: 'Gagal',
        text: 'Coba'+flashGagalReg,
        icon: 'error'
    });
}
// Sweet Alert Gagal Login
const flashGagalLog = $('.flash-data-gagallog').data('flashdata');

if (flashGagalLog) {
    Swal.fire({
        title: 'Gagal',
        text: ''+flashGagalLog,
        icon: 'error'
    });
}

// Sweet Alert Gagal Input
const flashGagalAdd = $('.flash-data-gagaladd').data('flashdata');

if (flashGagalAdd) {
    Swal.fire({
        title: 'Gagal',
        text: ''+flashGagalAdd,
        icon: 'error'
    });
}


// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Hapus Data',
        text: "Anda Yakin?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e74c3c',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Delete'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});

// tombol-logout
$('.tombol-logout').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Logout',
        text: "Apakah Anda Yakin ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e74c3c',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});

// Data table
// $(function () {
//     $("#dataBerita").DataTable({
//         "responsive": true,
//         "lengthChange": false,
//         "autoWidth": false,
//         "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
//     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
//     $('#example2').DataTable({
//         "paging": true,
//         "lengthChange": false,
//         "searching": false,
//         "ordering": true,
//         "info": true,
//         "autoWidth": false,
//         "responsive": true,
//     });
// });

$(document).ready(function () {
    $("#dataBerita").DataTable({
        order: [[1, "desc"]],
    });
});

$(document).ready(function () {
    $("#dataGalery").DataTable({
        order: [[1, "desc"]],
    });
});

$(document).ready(function () {
    $("#dataFile").DataTable({
        order: [[1, "desc"]],
    });
});

$(document).ready(function () {
    $("#dataPages").DataTable({
        order: [[1, "desc"]],
    });
});

// Summernote
$(function () {
    // Summernote
    $('#summernote').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            // ['fontsize', ['fontsize']],
            // ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link']]
        ]
    });
})

// Preview sampul
// function previewImg() {
//     const sampul = document.querySelector("#gambar");
//     const sampulLabel = document.querySelector(".costum-file-label");
//     const imgPreview = document.querySelector(".img-preview");

//     sampulLabel.textContent = sampul.files[0].name;

//     const fileSampul = new FileReader();
//     fileSampul.readAsDataURL(sampul.files[0]);

//     fileSampul.onload = function (e) {
//         imgPreview.src = e.target.result;
//     };
// }

// function previewGmb() {
//     const sampul = document.querySelector("#sampul");
//     const sampulLabel = document.querySelector(".custom-file-input");
//     const imgPreview = document.querySelector(".img-preview");

//     sampulLabel.textContent = sampul.files[0].name;

//     const fileSampul = new FileReader();
//     fileSampul.readAsDataURL(sampul.files[0]);

//     fileSampul.onload = function (e) {
//         imgPreview.src = e.target.result;
//     };
// }

function previewGmb() {
    const sampul = document.querySelector("#image");
    const sampulLabel = document.querySelector(".custom-file-input");
    const imgPreview = document.querySelector(".img-preview");

    sampulLabel.textContent = sampul.files[0].name;

    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(sampul.files[0]);

    fileSampul.onload = function (e) {
        imgPreview.src = e.target.result;
    };
}

// Input / Browse file

$('.custom-file-input').on('change', function () {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});





