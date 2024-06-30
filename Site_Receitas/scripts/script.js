document.addEventListener("DOMContentLoaded", function() {
    const carouselItems = document.querySelectorAll('.item-carrossel');
    const totalItems = carouselItems.length;
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentIndex = 0;
  
    function showItem(index) {
      carouselItems.forEach((item, i) => {
        if (i === index) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    }
  
    function nextItem() {
      currentIndex++;
      if (currentIndex >= totalItems) {
        currentIndex = 0;
      }
      showItem(currentIndex);
    }
  
    function prevItem() {
      currentIndex--;
      if (currentIndex < 0) {
        currentIndex = totalItems - 1;
      }
      showItem(currentIndex);
    }
  
    nextBtn.addEventListener('click', nextItem);
    prevBtn.addEventListener('click', prevItem);
    
    showItem(currentIndex); 
  });