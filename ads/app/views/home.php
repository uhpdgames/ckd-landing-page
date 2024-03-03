 <div class="q relative">
     <img src="assets/img/md/banner.png" alt="Q" class="block lg:hidden  w-100 h-100 object-cover">
     <img src="assets/img/banner.png" alt="Q" class="hidden  lg:block w-100 h-100 object-cover">




     <div
         class="absolute w-[33vw] lg:w-[15.625vw] h-auto top-[22vw] lg:top-[26.041666666666668vw] left-[32vw] lg:left-[22.916666666666668vw]">
         <div class="relative w-[33vw] lg:w-[15.625vw]">
             <img src="assets/img/dang_ky_ngay.png" alt="dang_ky_ngay" class="hidden lg:block w-100 h-100 object-cover">
             <img src="assets/img/md/dang_ky_ngay.png" alt="dang_ky_ngay"
                 class="block lg:hidden w-100 h-100 object-cover">
             <a href="#dang_ky_ngay" class="w-100 text-black absolute h-full top-0 bottom-0 left-0 right-0 flex items-center justify-center
            bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100
             
            "></a>
         </div>

     </div>

 </div>
 </div>

 <div class="q quotes hidden  lg:block">
     <img src="assets/img/q.png" alt="Q" class="w-100 h-100 object-cover">
 </div>
 <div class="q w-11/12 mx-auto block  lg:hidden">
     <img src="assets/img/md/q.png" alt="Q" class="w-100 h-100 object-cover">
 </div>

 <div class="q info w-[70.333vw] mx-auto p-1-vw hidden lg:block">
     <?php $this->load->view('info') ?>
 </div>

 <div class="q info w-11/12 mx-auto p-1-vw block lg:hidden">
     <?php $this->load->view('info_md') ?>
 </div>


 <div class="koc relative">
     <img src="assets/img/koc.png" alt="Q" class="hidden lg:block w-100 h-100 object-cover absolute top-0 left-0">
     <img src="assets/img/md/koc.png" alt="Q" class="block lg:hidden w-100 h-100 object-cover">

     <div class="video absolute flex w-100 mx-auto">

         <video controls poster="assets/img/thumb(1).png">
             <source src=" assets/video/1.mp4" type="video/mp4">
             <source src="assets/video/1.webm" type="video/webm">
             <div class="shadow"></div>
         </video>
         <video controls poster="assets/img/thumb(2).png">
             <source src="assets/video/2.mp4" type="video/mp4">
             <source src="assets/video/2.webm" type="video/webm">
             <div class="shadow"></div>
         </video>

     </div>

 </div>


 <div class="q link flex text-center mx-auto w-11/12 lg:w-[75vw] flex-col p-1-vw">
     <?php $this->load->view('link') ?>
 </div>

 <div class="q relative" id="dang_ky_ngay">
     <div class=" absolute top-0 left-0">
         <img src="assets/img/background-.png?v=<?= time() ?>" alt="Q" class="hidden lg:block w-100 h-100 object-cover">
         <img src="assets/img/md/background-.png?v=<?= time() ?>" alt="Q"
             class="block lg:hidden w-100 h-100 object-cover">
     </div>


     <div class="absolute abs-form">
         <?php $this->load->view('form') ?>

         <?php $this->load->view('footer') ?>
     </div>

 </div>