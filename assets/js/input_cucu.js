document.getElementById('provinsi').addEventListener('change', function () {

    let select = this;

    document.getElementById('nama_provinsi').value =
        select.options[select.selectedIndex].text;

});

document.getElementById('kabupaten').addEventListener('change', function () {

    let select = this;

    document.getElementById('nama_kabupaten').value =
        select.options[select.selectedIndex].text;

});


document.getElementById('kecamatan').addEventListener('change', function () {

    let select = this;

    document.getElementById('nama_kecamatan').value =
        select.options[select.selectedIndex].text;

});


document.getElementById('desa').addEventListener('change', function () {

    let select = this;

    document.getElementById('nama_desa').value =
        select.options[select.selectedIndex].text;

});

$(document).ready(function() {
	// Ambil data provinsi dari API saat halaman dimuat
    $.ajax({
		url: BASE_URL + "dashboard1/api_provinsi",
        type: "GET",
        dataType: "json",
        success: function(data) {

            console.log("PROVINSI:", data);
            $('#provinsi').html(
                '<option value="">-- Pilih Provinsi --</option>'
            );

            $.each(data, function(index, item) {
                $('#provinsi').append(
                    $('<option>', {
                        value: item.id,
                        text: item.name
                    })
                );
            });
        },

        error: function(xhr) {
            console.log(xhr.responseText);
            alert('Gagal mengambil data provinsi');
        }
    });

	// AMBIL PROVINSI DAN KABUPATEN DARI DATABASE JIKA ADA DATA YANG SUDAH TERISI
    $('#provinsi').change(function() {
        let id = $(this).val();
        $('#kabupaten')
            .html(
                '<option value="">-- Pilih Kabupaten/Kota --</option>'
            )
            .prop('disabled', true);

        $('#kecamatan')
            .html(
                '<option value="">-- Pilih Kecamatan --</option>'
            )
            .prop('disabled', true);

        $('#desa')
            .html(
                '<option value="">-- Pilih Desa/Kelurahan --</option>'
            )
            .prop('disabled', true);


        updateAlamat();

        if(id == '') {
            return;
        }

        $.ajax({
            url: BASE_URL + 'dashboard1/api_kabupaten/' + id,

			type: "GET",
            dataType: "json",
            success: function(data) {
                $('#kabupaten')
                    .prop('disabled', false);
                $.each(data, function(index, item) {

                    $('#kabupaten').append(
                        $('<option>', {
                            value: item.id,
                            text: item.name
                        })
                    );
                });
            },

            error: function(xhr) {
                console.log(xhr.responseText);
                alert(
                    'Gagal mengambil data kabupaten'
                );
            }
        });
    });

    // KABUPATEN → KECAMATAN
    $('#kabupaten').change(function() {
        let id = $(this).val();

        $('#kecamatan')
            .html(
                '<option value="">-- Pilih Kecamatan --</option>'
            )
            .prop('disabled', true);

        $('#desa')
            .html(
                '<option value="">-- Pilih Desa/Kelurahan --</option>'
            )
            .prop('disabled', true);

        updateAlamat();
        if(id == '') {

            return;

        }

        $.ajax({
            url: BASE_URL + 'dashboard1/api_kecamatan/'+ id,
            type: "GET",
            dataType: "json",
            success: function(data) {

                $('#kecamatan')
                    .prop('disabled', false);
                $.each(data, function(index, item) {
                    $('#kecamatan').append(
                        $('<option>', {
                            value: item.id,
                            text: item.name
                        })
                    );
                });
            },

            error: function(xhr) {
                console.log(xhr.responseText);
                alert(
                    'Gagal mengambil data kecamatan'
                );
            }
        });
    });

    // KECAMATAN → DESA

    $('#kecamatan').change(function() {
        let id = $(this).val();
        $('#desa')
            .html(
                '<option value="">-- Pilih Desa/Kelurahan --</option>'
            )
            .prop('disabled', true);

		updateAlamat();

        if(id == '') {
            return;
        }

        $.ajax({
            url: BASE_URL + 'dashboard1/api_desa/'+ id,
            type: "GET",
            dataType: "json",

            success: function(data) {
                $('#desa')
                    .prop('disabled', false);

                $.each(data, function(index, item) {
                    $('#desa').append(
                        $('<option>', {
                            value: item.id,
                            text: item.name
                        })
                    );
                });
            },

            error: function(xhr) {
                console.log(xhr.responseText);
                alert(
                    'Gagal mengambil data desa'
                );
            }
        });

    });

    // DESA BERUBAH

    $('#desa').change(function() {
        updateAlamat();
    });

    // ALAMAT MANUAL

    $('#alamat_manual').on(
        'keyup change',
        function() {
            updateAlamat();
        }
    );

    // RT

    $('#inputRT').on(
        'keyup change',
        function() {

            updateAlamat();

        }
    );

    // RW

    $('#inputRW').on(
        'keyup change',
        function() {

            updateAlamat();

        }
    );

    // MEMBUAT ALAMAT LENGKAP

    function updateAlamat() {
        let provinsi =
            $('#provinsi option:selected').text();

        let kabupaten =
            $('#kabupaten option:selected').text();

        let kecamatan =
            $('#kecamatan option:selected').text();

        let desa =
            $('#desa option:selected').text();

        let alamat_manual =
            $('#alamat_manual').val().trim();

        let rt =
            $('#inputRT').val().trim();

        let rw =
            $('#inputRW').val().trim();
        let bagian = [];

        // ALAMAT JALAN

        if(alamat_manual !== '') {
            bagian.push(alamat_manual);
        }

        // RT RW
        let rtrw = '';
        if(rt !== '') {
            rtrw += 'RT ' + rt;
        }

        if(rw !== '') {
            if(rtrw !== '') {
                rtrw += ' ';
            }
            rtrw += 'RW ' + rw;
        }

        if(rtrw !== '') {
            bagian.push(rtrw);
        }

        // DESA

        if($('#desa').val() !== '') {
            bagian.push(desa);
        }

        // KECAMATAN

        if($('#kecamatan').val() !== '') {

            bagian.push(
                '' + kecamatan
            );
        }

        // KABUPATEN
        if($('#kabupaten').val() !== '') {
            bagian.push(kabupaten);
        }

	// PROVINSI
        if($('#provinsi').val() !== '') {
            bagian.push(provinsi);
        }

	//masukan field ke alamat
        $('#inputAlamat').val(
            bagian.join(', ')
        );
    }

    $('form').on('submit', function() {
        $('#provinsi').prop('disabled', false);
        $('#kabupaten').prop('disabled', false);
        $('#kecamatan').prop('disabled', false);
        $('#desa').prop('disabled', false);
    });
});

document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("formTambahCucu");
    const loading = document.getElementById("loadingOverlay");
    const btnSimpan = document.getElementById("btnSimpan");

    if (!form) {
        return;
    }

    form.addEventListener("submit", function (e) {

        // Jangan tampilkan loading kalau browser
        // menemukan validasi HTML yang belum lengkap
        if (!form.checkValidity()) {
            return;
        }

        // Tampilkan loading
        loading.style.display = "flex";

        // Matikan tombol agar tidak double klik
        btnSimpan.disabled = true;

        btnSimpan.innerHTML =
            '<i class="fa fa-spinner fa-spin"></i> Processing';

    });

});


document.addEventListener("DOMContentLoaded", function () {

    const mapElement = document.getElementById("mapInputCucu");
    const latitudeInput = document.getElementById("latitude");
    const longitudeInput = document.getElementById("longitude");
    const latitudeDisplay = document.getElementById("latitude_display");
    const longitudeDisplay = document.getElementById("longitude_display");


    if (!mapElement) {
        console.error("Map tidak ditemukan");
        return;
    }

	// POSISI AWAL
    // Default Kuningan
    let lat = -6.9760;
    let lng = 108.4830;

    // SIMPAN KOORDINAT
    function setKoordinat(lat, lng) {
        const latFix = Number(lat).toFixed(7);
        const lngFix = Number(lng).toFixed(7);

        // HIDDEN INPUT
        latitudeInput.value = latFix;
        longitudeInput.value = lngFix;

        // TAMPILAN
        latitudeDisplay.value = latFix;
        longitudeDisplay.value = lngFix;

        console.log("LATITUDE :", latFix);
        console.log("LONGITUDE:", lngFix);
    }


    // BUAT MAP

    const map = L.map("mapInputCucu").setView([lat, lng],15);

	// OPENSTREETMAP

    L.tileLayer(
        "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
        {
            maxZoom: 20,
            attribution:
                "&copy; OpenStreetMap contributors"
        }
    ).addTo(map);


    // MARKER

    const marker = L.marker([lat, lng],
            {
                draggable: true
            }
        ).addTo(map);


    marker.bindPopup("Geser titik ini sesuai lokasi rumah");

    // KOORDINAT AWAL
    setKoordinat(lat, lng);

	// MARKER DIGESER

    marker.on("dragend", function () {
        const posisi =  marker.getLatLng();

		setKoordinat(posisi.lat,posisi.lng);
    });

	// PERBAIKI UKURAN MAP

    setTimeout(function () {

        map.invalidateSize();

    }, 500);

	// CEK SEBELUM SUBMIT

    const form = document.getElementById("formTambahCucu");

    if (form) {

        form.addEventListener("submit",
            function () {

                console.log("KOORDINAT SEBELUM SUBMIT");
                console.log("Latitude:", latitudeInput.value);
                console.log("Longitude:",longitudeInput.value);

            }
        );
    }
});
