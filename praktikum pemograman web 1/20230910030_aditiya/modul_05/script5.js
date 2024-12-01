
$(document).ready(function() {
    // Efek fade-in saat halaman dimuat
    $("#header").css("text-align", "center"); // Mengubah align text pada header
    $('.gallery img').each(function(index) {
        $(this).delay(300 * index).fadeTo(500, 1).addClass('loaded');
    });

    // Menampilkan gambar dalam modal saat diklik
    $('.gallery img').click(function() {
        const imgSrc = $(this).attr('src');
        $('#modal-img').attr('src', imgSrc);
        $('#modal').fadeIn();
    });

    // Menutup modal dengan tombol close atau klik di luar gambar
    $('#close, #modal').click(function(event) {
        if (event.target !== this) return; // Hanya tutup jika area di luar gambar diklik
        $('#modal').fadeOut();
    });
});
