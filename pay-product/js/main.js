const proxyUrl = 'https://cors-anywhere.herokuapp.com/';
const apiUrl = 'https://thongtindoanhnghiep.co/api/city';

// Lấy danh sách thành phố
fetch(proxyUrl + apiUrl)
  .then(response => response.json())
  .then(data => {
    // xử lý dữ liệu
  })
  .catch(error => console.error(error));
