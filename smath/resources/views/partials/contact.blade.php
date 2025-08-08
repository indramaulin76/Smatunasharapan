<!-- Contact Section -->
<section id="contact" class="py-16">
  <!-- Section Title -->
  <div class="container mx-auto text-center mb-12" data-aos="fade-up">
    <h2 class="text-3xl font-bold">Contact</h2>
  </div><!-- End Section Title -->
  <div class="container mx-auto" data-aos="fade-up" data-aos-delay="100">

    <div class="flex flex-wrap -mx-4">

      <div class="w-full lg:w-5/12 px-4">

        <div class="bg-white p-6 rounded-lg shadow-lg">
          <div class="flex items-start mb-6" data-aos="fade-up" data-aos-delay="200">
            <i class="fas fa-map-marker-alt text-2xl text-blue-600 mr-4"></i>
            <div>
              <h3 class="text-xl font-bold">Address</h3>
              <p> Komplek BNI 46, pesing, Wijaya Kusuma, West Jakarta City</p>
            </div>
          </div><!-- End Info Item -->

          <div class="flex items-start mb-6" data-aos="fade-up" data-aos-delay="300">
            <i class="fas fa-phone-alt text-2xl text-blue-600 mr-4"></i>
            <div>
              <h3 class="text-xl font-bold">Call Us</h3>
              <p>(021) 5660066</p>
            </div>
          </div><!-- End Info Item -->

          <div class="flex items-start mb-6" data-aos="fade-up" data-aos-delay="400">
            <i class="fas fa-envelope text-2xl text-blue-600 mr-4"></i>
            <div>
              <h3 class="text-xl font-bold">Email Us</h3>
              <p>Smatunasharapanadm@gmail.com</p>
            </div>
          </div>
          <!-- End Info Item -->

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.817702041258!2d106.76924517592815!3d-6.155164760331785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7005875f537%3A0x1572a91c0e6bf97d!2sSMA%20Tunas%20Harapan!5e0!3m2!1sid!2sid!4v1753807208956!5m2!1sid!2sid" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <div class="w-full lg:w-7/12 px-4">
        <form action="forms/contact.php" method="post" class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
          <div class="flex flex-wrap -mx-3">

            <div class="w-full md:w-1/2 px-3 mb-6">
              <label for="name-field" class="block mb-2">Your Name</label>
              <input type="text" name="name" id="name-field" class="w-full px-3 py-2 border border-gray-300 rounded-md" required="">
            </div>

            <div class="w-full md:w-1/2 px-3 mb-6">
              <label for="email-field" class="block mb-2">Your Email</label>
              <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md" name="email" id="email-field" required="">
            </div>

            <div class="w-full px-3 mb-6">
              <label for="subject-field" class="block mb-2">Subject</label>
              <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md" name="subject" id="subject-field" required="">
            </div>

            <div class="w-full px-3 mb-6">
              <label for="message-field" class="block mb-2">Message</label>
              <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md" name="message" rows="5" id="message-field" required=""></textarea>
            </div>

            <div class="w-full px-3 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">Send Message</button>
            </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- /Contact Section -->
