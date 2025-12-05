document.addEventListener('DOMContentLoaded', function () {

  const sizeForm = document.getElementById('sizeForm');
  const message = document.getElementById('stockMessage');
  const quantityInput = document.getElementById('QuantityOfItems');
  const plusButton = document.querySelector('.quantity button[onclick="increase()"]');
  const minusButton = document.querySelector('.quantity button[onclick="decrease()"]');
  let currentStock = null;

  // ---------------------------
  // 1️⃣ AUTO SELECT FIRST AVAILABLE SIZE
  // ---------------------------
  let firstAvailable = document.querySelector('input[name="size"]:not([disabled])');
  if (firstAvailable) {
      firstAvailable.checked = true;

      // trigger change event manually
      firstAvailable.dispatchEvent(new Event('change'));
  }

  if (!sizeForm || !message || !quantityInput || !plusButton || !minusButton) {
    console.warn('Some elements not found. JS not initialized.');
    return;
  }

  // ---------------------------
  // 2️⃣ SIZE CHANGE EVENT
  // ---------------------------
  sizeForm.addEventListener('change', function (e) {
    if (e.target.name === 'size') {

      currentStock = parseInt(e.target.getAttribute('data-stock'));

      quantityInput.value = 1;
      plusButton.disabled = currentStock <= 1;
      minusButton.disabled = true;

      if (currentStock < 2 && currentStock > 0) {
        message.textContent = `Hurry! Only ${currentStock} left`;
      } else {
        message.textContent = '';
      }
    }
  });

  // ---------------------------
  // 3️⃣ INCREASE
  // ---------------------------
  window.increase = function () {
    let currentQty = parseInt(quantityInput.value);


    if (currentStock !== null && currentQty < currentStock) {
      quantityInput.value = currentQty + 1;
      minusButton.disabled = false;

      if (currentQty + 1 === currentStock) {
        plusButton.disabled = true;
      }
    }
  };

  // ---------------------------
  // 4️⃣ DECREASE
  // ---------------------------
  window.decrease = function () {
    let currentQty = parseInt(quantityInput.value);

    if (currentQty > 1) {
      quantityInput.value = currentQty - 1;
      plusButton.disabled = false;

      if (currentQty - 1 === 1) {
        minusButton.disabled = true;
      }
    }
  };

});


// Get modal and elements
var modal = document.getElementById("myModal");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var openLink = document.getElementById("openModal");
let MainProduct=document.querySelector('.MainProduct img');
      function showImg(pic)
      {
        MainProduct.src=pic;
      }


// for mobile


// Get modal and elements
document.addEventListener("DOMContentLoaded", function () {
  // Grab elements safely
  const modal = document.getElementById("myModal");
  const modalImg = document.getElementById("img01");
  const openLink = document.getElementById("openModal");
  const closeBtn = document.querySelector("#myModal .close");

  // Safety checks
  if (!modal) { console.error("Modal element (#myModal) not found."); return; }
  if (!modalImg) { console.error("Modal image element (#img01) not found."); return; }
  if (!openLink) { console.error("Open link element (#openModal) not found."); /* still continue so maybe other triggers open modal */ }
  if (!closeBtn) { console.warn("Close button not found inside #myModal."); }


  function openSizeChart(src) {
    modal.style.display = "";
    modal.classList.add("active");
    if (src) modalImg.src = src;
    document.body.style.overflow = "hidden";
  }

  function closeSizeChart() {
    modal.classList.remove("active");
    document.body.style.overflow = "";
    modal.style.display = "";
  }

  if (openLink) {
    openLink.addEventListener("click", function (e) {
      e.preventDefault();
      openSizeChart("123.PNG");
    });
  }
  if (closeBtn) {
    closeBtn.addEventListener("click", function (e) {
      e.preventDefault();
      closeSizeChart();
    });
  }

  // Click outside to close (target must be overlay)
  window.addEventListener("click", function (e) {
    if (e.target === modal) closeSizeChart();
  });

  // Optional: close on ESC
  window.addEventListener("keydown", function (e) {
    if (e.key === "Escape" || e.key === "Esc") {
      if (modal.classList.contains("active")) closeSizeChart();
    }
  });

  // Debug tip: log when opening/closing for dev
  // Remove or comment out in production
  modal.addEventListener("transitionend", () => {
    console.debug("Modal transition ended. active:", modal.classList.contains("active"));
  });

});



