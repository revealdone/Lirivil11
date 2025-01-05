$(document).ready(function () {

    $("#tombol3").click(function () {
        Swal.fire({
      title: "Anda Belum Login, Login terlebih dahulu",
      showClass: {
        popup: `
          animate__animated
          animate__fadeInUp
          animate__faster
        `
      },
      hideClass: {
        popup: `
          animate__animated
          animate__fadeOutDown
          animate__faster
        `
      }
    });
      });

    $("#tombol4").click(function () {
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Proses Simpan Berhasil",
        showConfirmButton: false,
        timer: 1500
      });
      });

    $("#tombol6").click(function () {
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Proses Hapus Berhasil",
        showConfirmButton: false,
        timer: 1500
      });
      });

    $("#tombol5").click(function () {
      Swal.fire({
        icon: "error",
        title: "Oops... Maaf",
        text: "Dalam Pengembangan",
        footer: '<a href="#">Why do I have this issue?</a>'
      });
      
      });

    //   $('#tombol4').on('click', function() {
    //     Swal.fire({
    //         title: 'Konfirmasi',
    //         text: "Apakah Anda yakin?",
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'Ya, Lanjutkan!',
    //         cancelButtonText: 'Batal'
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             Swal.fire(
    //                 'Sukses!',
    //                 'Proses berhasil dilanjutkan.',
    //                 'success'
    //             );
    //         }
    //     });
    // });

    document.getElementById("currentYear").textContent = new Date().getFullYear();

});