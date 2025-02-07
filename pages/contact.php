<section id="contact">
      <p class="section__text__p1">Get in Touch</p>
      <h1 class="title">Contact Us</h1>
        <div id="social-containers">
          <img src="./images/linkedin.png" alt="LinkedIn Profile" class="icon" 
              onclick="window.open('https://linkedin.com', '_blank')">
          <img src="./images/facebook.png" alt="Facebook Profile" class="icon" 
              onclick="window.open('https://www.facebook.com', '_blank')">
          <img src="./images/email.png" alt="Email icon" class="icon" 
              onclick="window.open('mailto:example@gmail.com', '_blank')">
      </div>
      
        <div class="contact-form-container">
            <form id="contactForm" class="contact-form" onsubmit="return showConfirmation(event)">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required autocomplete="off">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required autocomplete="off">
                </div>
    
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Enter your message" rows="4" required autocomplete="off"></textarea>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-color-2 submit-btn">Submit</button>
                </div>
            </form>
        </div>
        
        <div id="toast" class="toast success"></div>
