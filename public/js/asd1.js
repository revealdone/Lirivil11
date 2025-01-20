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

      const DATA_COUNT = 7;
      const labels = ['Css', 'Js', 'Html', 'Php', 'tailwind', 'VisualBasic', 'Laravel/CI4'];
      const dataFirstSkip = [1, 1, 1, 1, 23, 20, 1];
      const dataMiddleSkip = [1, 1, 1, 25, 1, 1, 30];
      const dataLastSkip = [35, 32, 40, 40, 1, 1, 1];
  
      const data = {
        labels: labels,
        datasets: [
          {
            label: 'Entry Level',
            data: dataFirstSkip,
            borderColor: 'rgba(255, 99, 132, 1)',
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
          },
          {
            label: 'Mediun Level',
            data: dataMiddleSkip,
            borderColor: 'rgba(54, 162, 235, 1)',
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
          },
          {
            label: 'Advance Level',
            data: dataLastSkip,
            borderColor: 'rgba(75, 192, 192, 1)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
          },
        ],
      };
  
      const ctx = document.getElementById('radarChart');
      new Chart(ctx, {
        type: 'radar',
        data: data,
        options: {
          scales: {
            r: {
              beginAtZero: true,
            },
          },
        },
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

$(document).ready(function () {
  $(window).on("scroll", function () {
    $(".fade-in").each(function () {
      const windowHeight = $(window).height();
      const scrollTop = $(window).scrollTop();
      const elementOffsetTop = $(this).offset().top;
      const elementHeight = $(this).outerHeight();

      // Cek apakah elemen masuk ke viewport
      if (scrollTop + windowHeight > elementOffsetTop && scrollTop < elementOffsetTop + elementHeight) {
        $(this)
          .removeClass("opacity-0 translate-y-10")
          .addClass("opacity-100 translate-y-0");
      } else {
        // Reset ke posisi awal jika elemen keluar dari viewport
        $(this)
          .removeClass("opacity-100 translate-y-0")
          .addClass("opacity-0 translate-y-10");
      }
    });
  });

  // const DATA_COUNT = 7;
  //   const labels = ['Css', 'Js', 'Html', 'Php', 'tailwind', 'VisualBasic', 'Laravel/CI4'];
  //   const dataFirstSkip = [1, 1, 1, 1, 23, 20, 1];
  //   const dataMiddleSkip = [1, 1, 1, 25, 1, 1, 30];
  //   const dataLastSkip = [35, 32, 40, 40, 1, 1, 1];

  //   const data = {
  //     labels: labels,
  //     datasets: [
  //       {
  //         label: 'Entry Level',
  //         data: dataFirstSkip,
  //         borderColor: 'rgba(255, 99, 132, 1)',
  //         backgroundColor: 'rgba(255, 99, 132, 0.2)',
  //       },
  //       {
  //         label: 'Mediun Level',
  //         data: dataMiddleSkip,
  //         borderColor: 'rgba(54, 162, 235, 1)',
  //         backgroundColor: 'rgba(54, 162, 235, 0.2)',
  //       },
  //       {
  //         label: 'Advance Level',
  //         data: dataLastSkip,
  //         borderColor: 'rgba(75, 192, 192, 1)',
  //         backgroundColor: 'rgba(75, 192, 192, 0.2)',
  //       },
  //     ],
  //   };

  //   const ctx = document.getElementById('radarChart');
  //   new Chart(ctx, {
  //     type: 'radar',
  //     data: data,
  //     options: {
  //       scales: {
  //         r: {
  //           beginAtZero: true,
  //         },
  //       },
  //     },
  //   });

  // fetch('/chart-data')
  // .then(response => response.json())
  // .then(data => {
  //     // Label kategori
  //     const labels = ['Css', 'Js', 'Html', 'Php', 'Tailwind', 'VisualBasic', 'Laravel/CI4'];

  //     // Data peminjaman
  //     const dataFirstSkip = Object.values(data);

  //     // Konfigurasi Chart.js
  //     const chartData = {
  //         labels: labels,
  //         datasets: [
  //             {
  //                 label: 'Jumlah Peminjaman',
  //                 data: dataFirstSkip,
  //                 borderColor: 'rgba(75, 192, 192, 1)',
  //                 backgroundColor: 'rgba(75, 192, 192, 0.2)',
  //             },
  //         ],
  //     };

  //     // Render chart
  //     const ctx = document.getElementById('radarChart');
  //     new Chart(ctx, {
  //         type: 'radar',
  //         data: chartData,
  //         options: {
  //             scales: {
  //                 r: {
  //                     beginAtZero: true,
  //                 },
  //             },
  //         },
  //     });
  // })
  // .catch(error => console.error('Error fetching chart data:', error));

  fetch('/chart-data')
  .then(response => response.json())
  .then(data => {
      // Labels for the chart
      const labels = ['Siswa', 'Peminjam', 'Buku'];

      // Data for the chart
      const chartData = {
          labels: labels,
          datasets: [{
              label: 'Jumlah',
              data: [data.siswa, data.peminjam, data.buku],
              backgroundColor: [
                  'rgba(75, 192, 192, 0.7)',
                  'rgba(54, 162, 235, 0.7)',
                  'rgba(255, 206, 86, 0.7)'
              ],
              hoverOffset: 4
          }]
      };

      // Render doughnut chart
      const ctx = document.getElementById('radarChart');
      new Chart(ctx, {
          type: 'doughnut',
          data: chartData,
          options: {
              responsive: true,
              plugins: {
                  legend: {
                      position: 'top',
                  },
                  tooltip: {
                      callbacks: {
                          label: function(tooltipItem) {
                              return tooltipItem.label + ': ' + tooltipItem.raw;
                          }
                      }
                  }
              }
          }
      });
  })
  .catch(error => console.error('Error fetching chart data:', error));
});