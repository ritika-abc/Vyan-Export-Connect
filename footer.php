 <!-- Footer Start -->
    <div class="container-fluid   footer py-5 wow fadeIn" style="background-color: #373a36;" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
                        Building No./Flat No.: 12-242 <br>
Name Of Premises/Building: PENT HOUSE <br>
Road/Street: NEAR PANGAL ROAD Y JUNCTION <br>
Nearby Landmark: BESIDE SILPA LEPAKSHI NAGAR RAM NAGA <br>
Locality/Sub Locality: RAPTADU <br>
City/Town/Village: Ananthapuramu <br>
District: Ananthapuramu <br>
State: Andhra Pradesh <br>
PIN Code:515004</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 8885271092</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>
                       lmokglobaltrade@gmail.com</p>
                    <div class="d-flex pt-3">
                       
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://www.facebook.com/people/LMOK-Global-Trade/61579730447932/?mibextid=wwXIfr&rdid=FU9TFdyAp39MzL4x&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1CZ1xY33j6%2F%3Fmibextid%3DwwXIfr"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://www.instagram.com/lmokglobaltrade/?igsh=c3Qya3lsdDdneThp&utm_source=qr#"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://www.linkedin.com/in/lmok-global-trade-29ba88381/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="/">Home</a>
                    <a class="btn btn-link" href="https://lmokglobaltrade.com/about.php">About Us</a>
                    <a class="btn btn-link" href="#">Our Products</a>
                    <a class="btn btn-link" href="https://lmokglobaltrade.com/certificate.php">Our Certificate</a>
                    <a class="btn btn-link" href="https://lmokglobaltrade.com/contact.php">Contact Us</a>
                 </div>
                 
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">About Us</h5>
                    <p>

                        LMOK Global Trade is a trusted merchant exporter from India, based in Ananthapur, Andhra
                        Pradesh, and registered under MSME and the Andhra Pradesh Chamber of Commerce. </p>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
<a class="fixed-bottom w-25 pb-3 px-3  fa-bounce" href="https://wa.me/918885271092?text=">
        <img src="https://lmokglobaltrade.com/wp.png" width="80px" height="80px" alt="">
<!-- <i class="fa-solid fa-phone fa-shake"></i> <i class="fa-solid fa-phone"></i>-->
</a>
<a href="" class=" d-block   py-3 px-3" style="width: 100px;position:fixed;top:100%;z-index:20">
    </a>

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2"> <a class="fw-semi-bold" href="/">LMOK Global Trade</a>, All Right Reserved.
            </p>

            <p class="mb-0">Designed By <a class="fw-semi-bold" href="https://web2export.com"
                    target="_blank">web2export.com</a></p>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="exampleModalLabel"> LMOK Global Trade
                    </h4>
                 
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-6 my-2">
                            <input type="text" class="form-control name1" require value=""
                                placeholder="Enter Your Name" />
                        </div>
                        <div class="col-12 col-md-6 my-2">
                            <input type="number" class="form-control number1" require value=""
                                placeholder="Enter Your Number" />
                        </div>
                        <div class="col-12  my-2">
                            <input type="email" class="form-control email1" require value=""
                                placeholder="Enter Your Email" />
                        </div>



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="go()" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function contact() {
            var na = document.querySelector(".name").value;
            var em = document.querySelector(".email").value;
            var phone = document.querySelector(".phone").value;
            var mes = document.querySelector(".message").value;
            var url1 = "https://wa.me/918885271092?text=" +
                "Name: " +
                na + " " +
                "Email: " +
                em + " " +
                "Phone : " + phone + " " +
                "Message : " + mes;
            window.open(url1, "_blank").focus();
        }
    </script>

    <script>
        function go() {
            var name = document.querySelector(".name1").value;
            var email = document.querySelector(".email1").value;
            var number = document.querySelector(".number1").value;
            var url = "https://wa.me/918885271092?text=" +
                "Name: " +
                name + " " +
                " Number : " +
                number + " " +
                " Email : " + email;
            window.open(url, "_blank").focus();
        }
    </script>


    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://lmokglobaltrade.com/lib/wow/wow.min.js"></script>
    <script src="https://lmokglobaltrade.com/lib/easing/easing.min.js"></script>
    <script src="https://lmokglobaltrade.com/lib/waypoints/waypoints.min.js"></script>
    <script src="https://lmokglobaltrade.com/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://lmokglobaltrade.com/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="https://lmokglobaltrade.com/js/main.js"></script>
</body>

</html>