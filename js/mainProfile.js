let formMain = document.querySelector(".form-register-address");
let closeBtn = document.querySelector(".closeForm");
let btnRegister = document.querySelector(".btnRegisterAddressCustomer");

btnRegister.addEventListener("click", function(){
    formMain.classList.remove("hideFormAddress");
})
closeBtn.addEventListener("click", function(){
    formMain.classList.add("hideFormAddress");
})

async function fetchData() {
    const apiUrl = "https://provinces.open-api.vn/api/?depth=3";
    
    try {
      const response = await fetch(apiUrl);
      const data = await response.json();
      return data;
    } catch (error) {
      console.log("Error:", error);
    }
  }
  
  // Function to find the corresponding names for the given code
  async function printLocationNames(code) {
    const data = await fetchData();
    
    // Get the names based on the provided code
    const cityName = data[code[0] - 1].name;
    const districtName = data[code[0] - 1].districts[code[1] - 1].name;
    const wardName = data[code[0] - 1].districts[code[1] - 1].wards[code[2] - 1].name;
    
    // Print the names
    console.log(`${cityName}, ${districtName}, ${wardName}`);
  }
  
  // Call the function with the given code
  printLocationNames([1, 1, 4]);
