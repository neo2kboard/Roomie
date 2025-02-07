function toggleMenu() {
  const menu = document.querySelector(".menu-links");
  const icon = document.querySelector(".hamburger-icon");
  menu.classList.toggle("open");
  icon.classList.toggle("open");
}

/*=============== SHOW SCROLL UP ===============*/ 
const scrollUp = () =>{
	const scrollUp = document.getElementById('scroll-up')
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
	this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
						: scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)


//Contact Functionality
function showConfirmation(event) {
  event.preventDefault();

  var name = document.getElementById('name').value;

  document.getElementById('contactForm').reset();

  document.querySelector('.contact-form-container').innerHTML = `
      <p>Thank you, <strong>${name}</strong> for reaching out. We’ll get back to you soon!</p>
  `;

  showToast(`Message from ${name} submitted successfully!`);

  return false;
}

function showToast(message) {
  const toast = document.getElementById('toast');
  toast.textContent = message;
  
  toast.classList.add('show');
  
  setTimeout(() => {
    toast.classList.remove('show');
  }, 5000);
}
