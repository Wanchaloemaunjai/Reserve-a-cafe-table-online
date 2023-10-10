const seats = document.querySelectorAll('.seat');

seats.forEach((seat) => {
  seat.addEventListener('click', () => {
    if (seat.classList.contains('unavailable')) {
      seat.classList.remove('unavailable');
    } else {
      if (seat.classList.contains('selected4')) {
        seat.classList.remove('selected4');
        seat.classList.add('selected2');
      } else if (seat.classList.contains('selected2')) {
        seat.classList.remove('selected2');
        seat.classList.add('selected1');
      } else if (seat.classList.contains('selected1')) {
        seat.classList.remove('selected1');
        seat.classList.add('unavailable');
      } else {
        seat.classList.add('selected4');
      }

      // ดึงค่า seat_status จากตัวแปร seat ที่ถูกคลิก
      const seat_status = Array.from(seat.classList).filter(cls => cls.startsWith('selected') || cls === 'unavailable')[0];

      // ส่งข้อมูล POST ไปยังไฟล์ PHP
      fetch('index_db.php', {
        method: 'POST',
        body: JSON.stringify({ seat_status }),
        headers: {
          'Content-Type': 'application/json',
        },
      })
        .then((response) => response.text())
        .then((message) => {
          console.log(message);
        })
        .catch((error) => {
          console.error('เกิดข้อผิดพลาดในการส่งคำขอ:', error);
        });
    }
  });
});

