document.addEventListener("DOMContentLoaded", function () {
    const provinsi = document.getElementById("provinsi");
    const kabupaten = document.getElementById("kabupaten");
    const kecamatan = document.getElementById("kecamatan");
    const desa = document.getElementById("desa");
    const alamat = document.getElementById("alamat");
    const alamatManual = document.getElementById("alamat_manual");
    const inputRT = document.getElementById("inputRT");
    const inputRW = document.getElementById("inputRW");

    // DATA WILAYAH LAMA
    const oldProvinsi = document.getElementById("old_provinsi").value;
    const oldKabupaten = document.getElementById("old_kabupaten").value;
    const oldKecamatan = document.getElementById("old_kecamatan").value;
    const oldDesa = document.getElementById("old_desa").value;

	// ALAMAT LAMA
    const alamatLamaDatabase = alamat.value.trim();

	// AMBIL JALAN + RT + RW DARI ALAMAT LAMA
    function ambilAlamatLama() {
        if (!alamatLamaDatabase) {
            return;
        }

        let text = alamatLamaDatabase;

        // RT

        const rtMatch = text.match(/\bRT\s*\.?\s*([0-9]{1,4})\b/i);

        if (rtMatch) {
            inputRT.value = rtMatch[1];
        }

		// RW
        const rwMatch = text.match(/\bRW\s*\.?\s*([0-9]{1,4})\b/i);
        if (rwMatch) {
            inputRW.value = rwMatch[1];
        }

		// HILANGKAN RT RW
        let detail = text.replace(/\bRT\s*\.?\s*[0-9]{1,4}\b/gi,
                    '').replace(/\bRW\s*\.?\s*[0-9]{1,4}\b/gi,'')
                .trim();

        // AMBIL BAGIAN JALAN
        if (detail.indexOf(',') !== -1) {
            detail = detail.split(',')[0].trim();
        }
        alamatManual.value =  detail;
    }

	// API WILAYAH
    const API = "https://www.emsifa.com/api-wilayah-indonesia/api";
    
    // LOAD PROVINSI
   
    function loadProvinsi() {
        provinsi.innerHTML =
            '<option value="">Memuat Provinsi...</option>';

        fetch(API + "/provinces.json")

        .then(function(response) {

            if (!response.ok) {

                throw new Error(
                    "HTTP Error " +
                    response.status
                );

            }

            return response.json();

        })

        .then(function(data) {


            provinsi.innerHTML =
                '<option value="">-- Pilih Provinsi --</option>';


            data.forEach(function(item) {


                const option =
                    document.createElement("option");


                option.value =
                    item.id;


                option.textContent =
                    item.name;


                provinsi.appendChild(
                    option
                );

            });


            if (oldProvinsi) {

                provinsi.value =
                    oldProvinsi;


                loadKabupaten(
                    oldProvinsi
                );

            }

        })

        .catch(function(error) {

            console.error(
                "ERROR PROVINSI:",
                error
            );


            provinsi.innerHTML =
                '<option value="">Gagal memuat provinsi</option>';

        });

    }


    // =========================================================
    // LOAD KABUPATEN
    // =========================================================

    function loadKabupaten(idProvinsi) {


        kabupaten.disabled = true;


        kabupaten.innerHTML =
            '<option value="">Memuat Kabupaten/Kota...</option>';


        kecamatan.disabled = true;


        kecamatan.innerHTML =
            '<option value="">-- Pilih Kecamatan --</option>';


        desa.disabled = true;


        desa.innerHTML =
            '<option value="">-- Pilih Desa/Kelurahan --</option>';


        fetch(
            API +
            "/regencies/" +
            idProvinsi +
            ".json"
        )

        .then(function(response) {

            if (!response.ok) {

                throw new Error(
                    "HTTP Error " +
                    response.status
                );

            }

            return response.json();

        })

        .then(function(data) {


            kabupaten.innerHTML =
                '<option value="">-- Pilih Kabupaten/Kota --</option>';


            data.forEach(function(item) {


                const option =
                    document.createElement("option");


                option.value =
                    item.id;


                option.textContent =
                    item.name;


                kabupaten.appendChild(
                    option
                );

            });


            kabupaten.disabled =
                false;


            if (oldKabupaten) {

                kabupaten.value =
                    oldKabupaten;


                loadKecamatan(
                    oldKabupaten
                );

            }

        })

        .catch(function(error) {

            console.error(
                "ERROR KABUPATEN:",
                error
            );


            kabupaten.innerHTML =
                '<option value="">Gagal memuat kabupaten</option>';

        });

    }


    // =========================================================
    // LOAD KECAMATAN
    // =========================================================

    function loadKecamatan(idKabupaten) {


        kecamatan.disabled =
            true;


        kecamatan.innerHTML =
            '<option value="">Memuat Kecamatan...</option>';


        desa.disabled =
            true;


        desa.innerHTML =
            '<option value="">-- Pilih Desa/Kelurahan --</option>';


        fetch(
            API +
            "/districts/" +
            idKabupaten +
            ".json"
        )

        .then(function(response) {

            if (!response.ok) {

                throw new Error(
                    "HTTP Error " +
                    response.status
                );

            }

            return response.json();

        })

        .then(function(data) {


            kecamatan.innerHTML =
                '<option value="">-- Pilih Kecamatan --</option>';


            data.forEach(function(item) {


                const option =
                    document.createElement("option");


                option.value =
                    item.id;


                option.textContent =
                    item.name;


                kecamatan.appendChild(
                    option
                );

            });


            kecamatan.disabled =
                false;


            if (oldKecamatan) {

                kecamatan.value =
                    oldKecamatan;


                loadDesa(
                    oldKecamatan
                );

            }

        })

        .catch(function(error) {

            console.error(
                "ERROR KECAMATAN:",
                error
            );


            kecamatan.innerHTML =
                '<option value="">Gagal memuat kecamatan</option>';

        });

    }


    // =========================================================
    // LOAD DESA
    // =========================================================

    function loadDesa(idKecamatan) {


        desa.disabled =
            true;


        desa.innerHTML =
            '<option value="">Memuat Desa/Kelurahan...</option>';


        fetch(
            API +
            "/villages/" +
            idKecamatan +
            ".json"
        )

        .then(function(response) {

            if (!response.ok) {

                throw new Error(
                    "HTTP Error " +
                    response.status
                );

            }

            return response.json();

        })

        .then(function(data) {


            desa.innerHTML =
                '<option value="">-- Pilih Desa/Kelurahan --</option>';


            data.forEach(function(item) {


                const option =
                    document.createElement("option");


                option.value =
                    item.id;


                option.textContent =
                    item.name;


                desa.appendChild(
                    option
                );

            });


            desa.disabled =
                false;


            if (oldDesa) {

                desa.value =
                    oldDesa;

            }


            updateAlamat();

        })

        .catch(function(error) {

            console.error(
                "ERROR DESA:",
                error
            );


            desa.innerHTML =
                '<option value="">Gagal memuat desa</option>';

        });

    }


    // =========================================================
    // BUAT ALAMAT LENGKAP
    // =========================================================

    function updateAlamat() {


        const provinsiText =
            provinsi.options[
                provinsi.selectedIndex
            ]?.text || "";


        const kabupatenText =
            kabupaten.options[
                kabupaten.selectedIndex
            ]?.text || "";


        const kecamatanText =
            kecamatan.options[
                kecamatan.selectedIndex
            ]?.text || "";


        const desaText =
            desa.options[
                desa.selectedIndex
            ]?.text || "";


        const jalan =
            alamatManual.value.trim();


        const rt =
            inputRT.value.trim();


        const rw =
            inputRW.value.trim();


        let bagian = [];


        // =====================================================
        // JALAN
        // =====================================================

        if (jalan !== '') {

            bagian.push(
                jalan
            );

        }


        // =====================================================
        // RT
        // =====================================================

        if (rt !== '') {

            bagian.push(
                'RT ' + rt
            );

        }


        // =====================================================
        // RW
        // =====================================================

        if (rw !== '') {

            bagian.push(
                'RW ' + rw
            );

        }


        // =====================================================
        // DESA
        // =====================================================

        if (desa.value) {

            bagian.push(
                desaText
            );

        }


        // =====================================================
        // KECAMATAN
        // =====================================================

        if (kecamatan.value) {

            bagian.push(
                kecamatanText
            );

        }


        // =====================================================
        // KABUPATEN
        // =====================================================

        if (kabupaten.value) {

            bagian.push(
                kabupatenText
            );

        }


        // =====================================================
        // PROVINSI
        // =====================================================

        if (provinsi.value) {

            bagian.push(
                provinsiText
            );

        }


        // =====================================================
        // SIMPAN KE INPUT ALAMAT CICIT
        // =====================================================

        alamat.value =
            bagian.join(', ');

    }


    // =========================================================
    // EVENT PROVINSI
    // =========================================================

    provinsi.addEventListener(
        "change",
        function() {


            const id =
                this.value;


            if (!id) {

                kabupaten.disabled =
                    true;

                kecamatan.disabled =
                    true;

                desa.disabled =
                    true;

                updateAlamat();

                return;

            }


            loadKabupaten(id);


            updateAlamat();

        }
    );


    // =========================================================
    // EVENT KABUPATEN
    // =========================================================

    kabupaten.addEventListener(
        "change",
        function() {


            const id =
                this.value;


            if (!id) {

                kecamatan.disabled =
                    true;

                desa.disabled =
                    true;

                updateAlamat();

                return;

            }


            loadKecamatan(id);


            updateAlamat();

        }
    );


    // =========================================================
    // EVENT KECAMATAN
    // =========================================================

    kecamatan.addEventListener(
        "change",
        function() {


            const id =
                this.value;


            if (!id) {

                desa.disabled =
                    true;

                updateAlamat();

                return;

            }


            loadDesa(id);


            updateAlamat();

        }
    );


    // =========================================================
    // EVENT DESA
    // =========================================================

    desa.addEventListener(
        "change",
        function() {

            updateAlamat();

        }
    );


    // =========================================================
    // EVENT JALAN
    // =========================================================

    alamatManual.addEventListener(
        "keyup",
        updateAlamat
    );


    alamatManual.addEventListener(
        "change",
        updateAlamat
    );


    // =========================================================
    // EVENT RT
    // =========================================================

    inputRT.addEventListener(
        "keyup",
        updateAlamat
    );


    inputRT.addEventListener(
        "change",
        updateAlamat
    );


    // =========================================================
    // EVENT RW
    // =========================================================

    inputRW.addEventListener(
        "keyup",
        updateAlamat
    );


    inputRW.addEventListener(
        "change",
        updateAlamat
    );


    // =========================================================
    // AMBIL ALAMAT LAMA
    // =========================================================

    ambilAlamatLama();


    // =========================================================
    // LOAD WILAYAH
    // =========================================================

    loadProvinsi();

});


// =============================================================
// LOADING TOMBOL
// =============================================================

document.addEventListener(
    "DOMContentLoaded",
    function() {


        const form =
            document.getElementById(
                "formEditCicit"
            );


        const loading =
            document.getElementById(
                "loadingOverlay"
            );


        const btnSimpan =
            document.getElementById(
                "btnSimpan"
            );


        if (!form) {
            return;
        }


        form.addEventListener(
            "submit",
            function() {


                if (!form.checkValidity()) {
                    return;
                }


                if (loading) {

                    loading.style.display =
                        "flex";

                }


                btnSimpan.disabled =
                    true;


                btnSimpan.innerHTML =
                    '<i class="fa fa-spinner fa-spin"></i> Menyimpan...';

            }
        );

    }
);

document.addEventListener("DOMContentLoaded", function () {
    const mapElement = document.getElementById("mapEditCicit");
    const latitudeInput = document.getElementById("latitude");
    const longitudeInput = document.getElementById("longitude");
    const latitudeDisplay = document.getElementById("latitude_display");
    const longitudeDisplay = document.getElementById("longitude_display");

    if (!mapElement) {
        console.error("MAP tidak ditemukan");
        return;
    }

    if (!latitudeInput || !longitudeInput) {
        console.error("Input latitude / longitude tidak ditemukan");
        return;
    }

	// AMBIL KOORDINAT DATABASE

    let lat = parseFloat(latitudeInput.value);
    let lng = parseFloat(longitudeInput.value);

	// JIKA NULL
    if (isNaN(lat) || isNaN(lng)) {

        lat = -6.914744;
        lng = 107.609810;

        latitudeInput.value = lat.toFixed(7);
        longitudeInput.value = lng.toFixed(7);
    }

	// TAMPILKAN KOORDINAT

    function tampilkanKoordinat(lat, lng) {

        const latFix = Number(lat).toFixed(7);
        const lngFix = Number(lng).toFixed(7);

        // INPUT HIDDEN
        latitudeInput.value = latFix;
        longitudeInput.value = lngFix;

        // INPUT TAMPILAN
        if (latitudeDisplay) {
            latitudeDisplay.value = latFix;
        }

        if (longitudeDisplay) {
            longitudeDisplay.value = lngFix;
        }


        console.log("==========================");
        console.log("KOORDINAT BERUBAH");
        console.log("LATITUDE  :", latitudeInput.value);
        console.log("LONGITUDE :", longitudeInput.value);
        console.log("==========================");
    }


    // BUAT MAP

    const map = L.map("mapEditCicit").setView([lat, lng], 17);

    // TILE MAP

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
        {
            maxZoom: 20,
            attribution: "&copy; OpenStreetMap contributors"
        }
    ).addTo(map);


    // MARKER DRAGGABLE
    const marker = L.marker([lat, lng],
        {
            draggable: true
        }
    ).addTo(map);


    marker.bindPopup("Geser titik ini sesuai lokasi rumah");

	// SAAT MARKER DIGESER
    marker.on("dragend", function () {

        const posisi = marker.getLatLng();
        const latitudeBaru = posisi.lat;
        const longitudeBaru = posisi.lng;

		// UPDATE INPUT
        tampilkanKoordinat(latitudeBaru, longitudeBaru);

        // PUSATKAN MAP
        map.setView([latitudeBaru, longitudeBaru], map.getZoom()
        );

    });


    // KOORDINAT AWAL
    tampilkanKoordinat(lat, lng);

    // PERBAIKI UKURAN MAP
    setTimeout(function () {

        map.invalidateSize();

    }, 500);

    // CEK SEBELUM SUBMIT
    const form = document.getElementById("formEditCicit");

    if (form) {
        form.addEventListener("submit", function () {
            console.log("SEBELUM SUBMIT");
            console.log("Latitude:", latitudeInput.value);
            console.log("Longitude:", longitudeInput.value);
        });
    }
});
